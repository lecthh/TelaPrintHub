<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderPlacement;

use function Laravel\Prompts\table;

class AdminController extends Controller
{
    public function catalog()
    {
        $admin = session('admin');
        return view('partner.catalog', compact('admin'));
    }

    public function orderPendingTable()
    {
        $admin = session('admin');

        $pendingOrders = OrderPlacement::whereHas('order', function ($query) {
            $query->whereNull('order_confirmation_ID');
        })
            ->whereHas('order.designerCompany', function ($query) use ($admin) {
                $query->where('designer_ID', $admin->designer_ID);
            })
            ->with(['order' => function ($query) {
                $query->select('order_ID', 'user_details_ID');
            }, 'userDetails' => function ($query) {
                $query->select('user_details_ID', 'name', 'email', 'contact_information');
            }])
            ->get();
        return view('partner.pending.view', compact('admin', 'pendingOrders'));
    }

    public function orderPendingTablePost() {}

    public function orderPending($order_placement_ID)
    {
        $admin = session('admin');

        $orderPlacement = OrderPlacement::with(['order', 'userDetails'])
            ->where('order_placement_ID', $order_placement_ID)
            ->firstOrFail();

        return view('partner.pending.order', compact('admin', 'orderPlacement'));
    }
}
