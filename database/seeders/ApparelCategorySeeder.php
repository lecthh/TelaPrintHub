<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ApparelCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'T-shirt'],
            ['name' => 'Hoodie'],
            ['name' => 'Polo shirt'],
            ['name' => 'Shorts'],
            ['name' => 'Sportswear'],
        ];

        DB::table('apparel_category')->insert($categories);
    }
}
