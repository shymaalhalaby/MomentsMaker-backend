<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
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
            'price'=> fake()->randomFloat(3,1,1000000),
            'image_path'=>fake()->randomFloat(3,1,1000000),
            'type'=>fake()->word(),
           'restaurant_id' => Restaurant::factory(),
           

        ];
    }
}
