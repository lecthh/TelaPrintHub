<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderPlacement;
use App\Models\UserDetails;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Webpatser\Uuid\Uuid;

class RequestService
{
    public function createOrder($selectedCategory, $selectedCompany, $request)
    {
        $fullName = $request['first_name'] . ' ' . $request['last_name'];
        try {
            $existingOrder = Order::where('user_details_ID', $request['user_details_ID'])
                ->where('apparel_category_ID', $selectedCategory->apparel_category_ID)
                ->where('designer_ID', $selectedCompany->designer_ID)
                ->first();

            if ($existingOrder) {
                return response()->json(['error' => 'Order already exists for this category and company.'], 409);
            }

            $userDetails = UserDetails::create([
                'user_details_ID' => (string) Uuid::generate(4),
                'name' => $fullName,
                'email' => $request['email'],
                'contact_information' => $request['phone_number'],
                // TODO: Add Preferred Communication
            ]);

            // Create Order
            $order = Order::create([
                'order_ID' => (string) Uuid::generate(4),
                'user_details_ID' => $userDetails->user_details_ID,
                'designer_ID' => $selectedCompany->designer_ID,
                'production_ID' => null,
                'order_confirmation_ID' => null,
                'order_status_ID' => null,
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

            return response()->json(['success' => 'Order created successfully.'], 201);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Failed to create order: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }
}
