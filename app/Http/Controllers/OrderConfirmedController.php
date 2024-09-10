<?php

namespace App\Http\Controllers;

use App\Models\OrderDesignsConfirmed;
use App\Models\OrderDesignsPending;
use App\Models\OrderPlacement;
use App\Models\Sizes;
use App\Models\UserDetails;
use App\Models\UserPreferredCommunication;
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
        $confirmedOrders = OrderPlacement::where(function ($query) {
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

        $user = UserDetails::find($orderPlacement->user_details_ID);
        $preferredModesOfCommunication = $user->preferredCommunications;

        $sizes = Sizes::pluck('name')->map(function ($size) {
            return $size;
        })->toArray();

        $images = OrderDesignsConfirmed::where('order_ID', $orderPlacement->order->order_ID)->get();

        return view('mail.order-confirmation', compact('token', 'orderPlacement', 'preferredModesOfCommunication', 'images', 'sizes'));
    }


    public function showConfirmationLinkPost(Request $request)
    {

        $request->validate([
            'orderPlacementID' => 'required',
            'name.*' => 'required|string|max:255',
            't-shirt-size.*' => 'required|in:xxs,xs,s,m,l,xl,xxl',
            'jersey-number.*' => 'nullable|integer',
            'short-number.*' => 'nullable|integer',
            'short-size.*' => 'nullable|in:xxs,xs,s,m,l,xl,xxl',
            'pocket.*' => 'nullable|boolean',
            'remarks.*' => 'nullable|string|max:500'
        ]);
        dd($request->all());
        return redirect()->route('home');
    }
}
