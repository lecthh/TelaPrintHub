<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminTypes = [
            ['admin_type_name' => 'Super Admin'],
            ['admin_type_name' => 'Designer Admin'],
            ['admin_type_name' => 'Production Admin'],
        ];

        DB::table('admin_type')->insert($adminTypes);
    }
}
