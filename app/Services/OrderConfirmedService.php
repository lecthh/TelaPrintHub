<?php

namespace App\Services;

use App\Models\OrderDesignsConfirmed;
use App\Models\OrderPlacement;

class OrderConfirmedService
{
    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function UpdateOrder($request)
    {
        $orderPlacementID = $request->orderPlacementID;
        $images = $request->file('images');
        $printerID = $request->printer_id;
        $orderPlacement = OrderPlacement::where('order_placement_ID', $orderPlacementID)->first();

        $orderPlacement->order_placement_status_ID = 3;
        // $orderPlacement->order->production_ID = $printerID; Commented out cuz wala pay production company
        // $orderPlacement->order->order_confirmation_ID = 1; 
        $orderPlacement->order->save();
        $orderPlacement->save();

        foreach ($images as $image) {
            if (file_exists($image->getPathName())) {
                $currentDate = date('Y-m-d');
                $imageExtension = $image->getClientOriginalExtension();

                $newImageName = $currentDate .  '-' . $orderPlacement->order->order_ID . '.' . $imageExtension;
                $relativeImagePath = 'FinalDesigns/' . $newImageName;

                $image->move(public_path('FinalDesigns'), $newImageName);

                OrderDesignsConfirmed::create([
                    'order_placement_ID' => $orderPlacementID,
                    'file_path' => $relativeImagePath,
                    'order_ID' => $orderPlacement->order->order_ID,
                ]);
            }
        }


        $this->mailService->sendConfirmationLink($orderPlacement);
    }
}
