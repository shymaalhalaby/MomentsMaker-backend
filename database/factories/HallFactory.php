<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hall>
 */
class HallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'email'=>fake()->unique()->safeEmail(),
            'address'=> fake()->address(),
            'phone' => fake()->phoneNumber(),
            'price'=> fake()->randomFloat(3,1,1000000),
            'image_path'=>fake()->randomFloat(3,1,1000000),

        ];
    }
}
