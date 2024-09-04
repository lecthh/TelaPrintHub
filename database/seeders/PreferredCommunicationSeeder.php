<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreferredCommunicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'WhatsApp'],
            ['name' => 'Email'],
            ['name' => 'Messenger/Facebook'],
        ];
        DB::table('preferred_communication_type')->insert($categories);
    }
}
