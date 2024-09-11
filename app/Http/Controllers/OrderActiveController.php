<?php

namespace App\Http\Controllers;

use App\Models\CustomizationDetails;
use App\Models\OrderDesignsConfirmed;
use App\Models\OrderPlacement;
use Illuminate\Http\Request;

class OrderActiveController extends Controller
{
    public function orderActiveTable()
    {
        $admin = session('admin');

        $ActiveOrders = OrderPlacement::where(function ($query) {
            $query->where('order_placement_status_ID', 5);
        })
            ->whereHas('order', function ($query) {
                $query->whereNotNull('order_confirmation_ID');
            })
            ->whereHas('order.designerCompany', function ($query) use ($admin) {
                $query->where('designer_ID', $admin->designer_ID);
            })
            ->with([
                'order' => function ($query) {
                    $query->select('order_ID', 'user_details_ID', 'order_confirmation_ID')
                        ->with('orderConfirmation');
                },
                'userDetails' => function ($query) {
                    $query->select('user_details_ID', 'name', 'email', 'contact_information');
                }
            ])
            ->get();

        return view('designer.active.view', compact('admin', 'ActiveOrders'));
    }

    public function orderActive($order_placement_ID)
    {
        $orderPlacement = OrderPlacement::with(['order', 'userDetails'])
            ->where('order_placement_ID', $order_placement_ID)
            ->firstOrFail();

        $final_design = OrderDesignsConfirmed::where('order_ID', $orderPlacement->order->order_ID)->first();
        $customizationDetails = CustomizationDetails::where('order_ID', $orderPlacement->order->order_ID)->get();
        return view('designer.active.order', compact('orderPlacement', 'final_design', 'customizationDetails'));
    }
}
