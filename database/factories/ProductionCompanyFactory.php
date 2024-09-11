<?php

namespace Database\Factories;

use App\Models\ProductionCompany;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\productionCompany>
 */
class ProductionCompanyFactory extends Factory
{
    protected $model = ProductionCompany::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'production_ID' => Str::uuid(),
            'admin_ID' => function () {
                return \App\Models\Admin::factory()->create()->admin_ID;
            },
            'description' => $this->faker->paragraph,
            'logo' => $this->faker->imageUrl(),
            'contact_details' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'is_verified' => $this->faker->boolean,
        ];
    }
}
