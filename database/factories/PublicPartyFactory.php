<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PublicParty>
 */
class PublicPartyFactory extends Factory
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
            'event_date'=> fake()->date(),
            'event_time'=> fake()->time(),
            'price'=> fake()->randomFloat(3,1,1000000)
        ];
    }
}
