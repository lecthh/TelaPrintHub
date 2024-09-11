<?php

namespace App\Providers;

use App\Models\OrderPlacement;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layout.dashboard-layout', function ($view) {
            $admin = session('admin');
            $orderPendingCount = OrderPlacement::where('order_placement_status_ID', 1)
                ->whereHas('order', function ($query) {
                    $query->whereNull('order_confirmation_ID');
                })
                ->whereHas('order.designerCompany', function ($query) use ($admin) {
                    $query->where('designer_ID', $admin->designer_ID);
                })
                ->count();
            $orderConfirmedCount = OrderPlacement::where(function ($query) {
                $query->where('order_placement_status_ID', 2)
                    ->orWhere('order_placement_status_ID', 3)
                    ->orWhere('order_placement_status_ID', 4);
            })
                ->whereHas('order', function ($query) {
                    $query->whereNull('order_confirmation_ID');
                })
                ->whereHas('order.designerCompany', function ($query) use ($admin) {
                    $query->where('designer_ID', $admin->designer_ID);
                })
                ->count();
            $orderActiveCount = OrderPlacement::where(function ($query) {
                $query->where('order_placement_status_ID', 5);
            })
                ->whereHas('order', function ($query) {
                    $query->whereNotNull('order_confirmation_ID');
                })
                ->whereHas('order.designerCompany', function ($query) use ($admin) {
                    $query->where('designer_ID', $admin->designer_ID);
                })
                ->count();
            $view->with([
                'admin' => $admin,
                'orderPendingCount' => $orderPendingCount,
                'orderConfirmedCount' => $orderConfirmedCount,
                'orderActiveCount' => $orderActiveCount,
            ]);
        });
    }
}
