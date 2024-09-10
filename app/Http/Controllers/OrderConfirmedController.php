<?php

namespace App\Http\Controllers;

use App\Models\OrderDesignsPending;
use App\Models\OrderPlacement;
use App\Services\OrderConfirmedService;
use Illuminate\Http\Request;

class OrderConfirmedController extends Controller
{
    protected $orderConfirmedService;

    public function __construct(OrderConfirmedService $orderConfirmedService)
    {
        $this->orderConfirmedService = $orderConfirmedService;
    }
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


        return view('designer.confirmed.order', compact('admin', 'orderPlacement'));
    }

    public function orderConfirmedPost(Request $request)
    {
        $request->validate([
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg',
            'printer_id' => 'required',
            'orderPlacementID' => 'required',
        ]);
        $this->orderConfirmedService->UpdateOrder($request);

        return redirect()->route('order-confirmed');
    }

    public function showConfirmationLink($order_placement_ID, $token)
    {
        $orderPlacement = OrderPlacement::with(['order', 'userDetails'])
            ->where('order_placement_ID', $order_placement_ID)
            ->firstOrFail();
        return view('mail.order-confirmation', ['token' => $token, 'orderPlacement' => $orderPlacement]);
    }
}
