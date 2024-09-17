<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'admin_ID' => Str::uuid(),
            'admin_type_ID' => 3,
            'name' => $this->faker->name,
            'password' => bcrypt('password'),
            'email' => $this->faker->unique()->safeEmail,
            'is_verified' => $this->faker->boolean,
            'contact_information' => $this->faker->phoneNumber,
        ];
    }
}
