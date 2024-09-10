<?php

namespace App\Http\Controllers;

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
}
