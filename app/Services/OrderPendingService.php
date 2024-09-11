<?php

namespace App\Services;

use App\Models\OrderPlacement;
use App\Services\MailService;


class OrderPendingService
{
    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function sendOrderPendingMail($orderPlacement)
    {
        $this->mailService->sendOrderPendingMail($orderPlacement);
    }

    public function confirmPendingOrder($orderPlacementID)
    {
        $orderPlacement = OrderPlacement::find($orderPlacementID);
        if (!$orderPlacement) {
            return response()->json(['error' => 'Order Placement not found'], 404);
        }

        $orderPlacement->order_placement_status_ID = 2;
        $orderPlacement->save();

        $this->sendOrderPendingMail($orderPlacement);
        return response()->json(['success' => 'Order Placement status updated successfully']);
    }
}
