<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderPlacement;
use App\Models\UserDetails;
use GuzzleHttp\Psr7\Request;
use Webpatser\Uuid\Uuid;

class RequestService
{
    public function createOrder($selectedCategory, $selectedCompany, $request)
    {
        $fullName = $request['first_name'] . ' ' . $request['last_name'];

        $userDetails = UserDetails::create([
            'user_details_ID' => (string) Uuid::generate(4),
            'name' => $fullName,
            'email' => $request['email'],
            'contact_information' => $request['phone_number'],
            // TODO: Add Preferred Communication
        ]);

        $order = Order::create([
            'order_ID' => (string) Uuid::generate(4),
            'user_details_ID' => $userDetails->user_details_ID,
            'designer_ID' => $selectedCompany->designer_ID,
            'production_ID' => null,
            'order_confirmation_ID' => null,
            'order_status_ID' => 1,
            'apparel_category_ID' => $selectedCategory->apparel_category_ID,
            'customization_details_ID' => null,
            'print_type_ID' => null,
            'estimated_delivery_date' => null,
            'tracking_number' => null,
        ]);

        OrderPlacement::create([
            'order_placement_ID' => (string) Uuid::generate(4),
            'user_details_ID' => $userDetails->user_details_ID,
            'order_ID' => $order->order_ID,
            'order_placement_status_ID' => 1,
        ]);
    }
}