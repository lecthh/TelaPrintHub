<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderPlacementStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'Verifying Customer Details', 'description' => 'Verifying customer details before proceeding.'],
            ['name' => 'Designing', 'description' => 'Designing the order based on customer inputs.'],
            ['name' => 'Finalizing Design', 'description' => 'Finalizing the design for approval.'],
            ['name' => 'Communicating with Customer', 'description' => 'Communicating with the customer for feedback and updates.'],
            ['name' => 'Confirmed', 'description' => 'Order has been confirmed and is ready for processing.'],
            ['name' => 'Cancelled', 'description' => 'Order has been cancelled.']
        ];

        DB::table('order_placement_status')->insert($statuses);
    }
}
