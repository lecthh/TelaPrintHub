<?php

namespace App\Http\Controllers;

use App\Models\OrderDesignsPending;
use App\Models\OrderPlacement;
use App\Services\OrderPendingService;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderPendingController extends Controller
{

    protected $orderPendingService;
    protected $orderService;

    public function __construct(OrderPendingService $orderPendingService, OrderService $orderService)
    {
        $this->orderPendingService = $orderPendingService;
        $this->orderService = $orderService;
    }

    public function orderPendingTable()
    {
        $admin = session('admin');

        $pendingOrders = OrderPlacement::where('order_placement_status_ID', 1)
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

        return view('designer.pending.view', compact('admin', 'pendingOrders'));
    }


    public function orderPending($order_placement_ID)
    {

        $orderPlacement = OrderPlacement::with(['order', 'userDetails'])
            ->where('order_placement_ID', $order_placement_ID)
            ->firstOrFail();

        $Images = OrderDesignsPending::where('order_placement_ID', $orderPlacement->order_placement_ID)
            ->get();

        return view('designer.pending.order', compact('orderPlacement', 'Images'));
    }

    public function orderPendingPost(Request $request)
    {
        if ($request->input('reasonCancellation')) {
            $request->validate([
                'orderPlacementID' => 'required',
                'reasonCancellation' => 'required',
            ]);
            $this->orderService->cancelPendingOrder($request->input('orderPlacementID'), $request->input('reasonCancellation'));
            return redirect()->route('order-pending');
        } else {
            $request->validate([
                'orderPlacementID' => 'required',
            ]);

            $this->orderPendingService->confirmPendingOrder($request->input('orderPlacementID'));
            return redirect()->route('order-pending');
        }
    }
}
