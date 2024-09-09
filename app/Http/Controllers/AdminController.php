<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDesignsPending;
use App\Models\OrderPlacement;

use function Laravel\Prompts\table;

class AdminController extends Controller
{
    public function catalog()
    {
        $admin = session('admin');
        return view('designer.catalog', compact('admin'));
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
        return view('designer.pending.view', compact('admin', 'pendingOrders'));
    }

    public function orderPending($order_placement_ID)
    {
        $admin = session('admin');

        $orderPlacement = OrderPlacement::with(['order', 'userDetails'])
            ->where('order_placement_ID', $order_placement_ID)
            ->firstOrFail();

        $Images = OrderDesignsPending::where('order_placement_ID', $orderPlacement->order_placement_ID)
            ->get();

        return view('designer.pending.order', compact('admin', 'orderPlacement', 'Images'));
    }
}
