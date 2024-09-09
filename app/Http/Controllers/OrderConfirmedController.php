<?php

namespace App\Http\Controllers;

use App\Models\OrderDesignsPending;
use App\Models\OrderPlacement;
use Illuminate\Http\Request;

class OrderConfirmedController extends Controller
{
    public function orderConfirmedTable()
    {
        $admin = session('admin');
        $confirmedOrders = OrderPlacement::where('order_placement_status_ID', 2)
            ->whereHas('order', function ($query) {
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

        return view('designer.confirmed.view', compact('admin', 'confirmedOrders'));
    }

    public function orderConfirmed($order_placement_ID)
    {
        $admin = session('admin');

        $orderPlacement = OrderPlacement::with(['order', 'userDetails'])
            ->where('order_placement_ID', $order_placement_ID)
            ->firstOrFail();

        $Images = OrderDesignsPending::where('order_placement_ID', $orderPlacement->order_placement_ID)
            ->get();

        return view('designer.confirmed.order', compact('admin', 'orderPlacement', 'Images'));
    }

    public function orderConfirmedPost(Request $request) {}
}
