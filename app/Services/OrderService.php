<?php

namespace App\Services;

use App\Models\OrderPlacement;

class OrderService
{
    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function cancelOrder($orderPlacementID, $reasonCancellation, $status)
    {
        $OrderPlacement = OrderPlacement::find($orderPlacementID);
        $UserEmail = $OrderPlacement->userDetails->email;
        $Name = $OrderPlacement->userDetails->name;
        $DesignerEmail = $OrderPlacement->order->designerCompany->email;
        $OrderPlacement->order_placement_status_ID = 6;
        $OrderPlacement->order->order_status_ID = 2;
        $OrderPlacement->save();

        $this->mailService->sendCancellationEmail($UserEmail, $reasonCancellation, $DesignerEmail, $Name);
    }
}
