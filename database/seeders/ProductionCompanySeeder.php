<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductionCompany;

class ProductionCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 production companies
        ProductionCompany::factory()->count(1)->create();
    }
}
