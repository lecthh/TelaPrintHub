<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'Waiting for Order Placement Verification'],
            // TODO: Add more order status types here

        ];
        DB::table('order_status_type')->insert($statuses);
    }
}
