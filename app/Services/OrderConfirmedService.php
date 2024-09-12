<?php

namespace App\Services;

use App\Models\CustomizationDetails;
use App\Models\Order;
use App\Models\OrderConfirmation;
use App\Models\OrderDesignsConfirmed;
use App\Models\OrderPlacement;
use App\Models\Sizes;
use Webpatser\Uuid\Uuid;

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

    public function ActivateOrder($request)
    {
        $orderPlacementID = $request->orderPlacementID;
        $orderPlacement = OrderPlacement::where('order_placement_ID', $orderPlacementID)->firstOrFail();
        $orderPlacement->order_placement_status_ID = 5;
        $orderPlacement->save();
        $confirmation = OrderConfirmation::create([
            'order_confirmation_ID' => (string) Uuid::generate(4),
        ]);
        $orderPlacement->order->order_confirmation_ID = $confirmation->order_confirmation_ID;
        $orderPlacement->order->save();
        $this->mailService->sendOrderActivation($orderPlacement);
    }


    public function addCustomizationDetails($request)
    {
        $orderPlacementID = $request['orderPlacementID'];
        $orderPlacement = OrderPlacement::where('order_placement_ID', $orderPlacementID)->firstOrFail();
        $order_ID = $orderPlacement->order->order_ID;

        $sizes = Sizes::pluck('sizes_ID', 'name')->mapWithKeys(function ($id, $name) {
            return [strtolower($name) => $id];
        })->toArray();

        $names = $request['name'];
        $sizesInput = $request['t_shirt_size'];
        $jerseyNumbers = $request['jersey_number'] ?? [];
        $shortNumbers = $request['short_number'] ?? [];
        $shortSizes = $request['short_size'] ?? [];
        $pockets = $request['pocket'] ?? [];
        $remarks = $request['remarks'] ?? [];

        foreach ($names as $index => $name) {
            $sizeName = $sizesInput[$index] ?? null;
            $sizeID = $sizes[$sizeName] ?? null;

            $jerseyNumber = $jerseyNumbers[$index] ?? null;
            $shortNumber = $shortNumbers[$index] ?? null;
            $shortSize = $shortSizes[$index] ?? null;
            $pocket = $pockets[$index] ?? 0;
            $remark = $remarks[$index] ?? '';

            CustomizationDetails::create([
                'customization_details_ID' =>  (string) Uuid::generate(4),
                'remarks' => $remark,
                'sizes_ID' => $sizeID,
                'name' => $name,
                'short_size' => $shortSize,
                'jersey_number' => $jerseyNumber,
                'has_pocket' => $pocket,
                'short_number' => $shortNumber,
                'quantity' => 1,
                'order_ID' => $order_ID
            ]);
        }
        $orderPlacement->order_placement_status_ID = 4;
        $orderPlacement->save();
    }
}
