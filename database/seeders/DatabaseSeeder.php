<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ApparelCategorySeeder::class);
        $this->call(CountryCodesSeeder::class);
        $this->call(AdminTypeSeeder::class);
        $this->call(OrderPlacementStatusSeeder::class);
        $this->call(OrderStatusTypeSeeder::class);
        $this->call(PreferredCommunicationSeeder::class);
        // $this->call(ProductionCompanySeeder::class);
    }
}
