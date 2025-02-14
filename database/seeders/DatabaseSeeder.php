<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DesignCompanyseeder::class,
            DjCompanySeeder::class,
            FoodSeeder::class,
            GraphicDesignSeeder::class,
            HallSeeder::class,
            JoyTeamSeeder::class,
            PhotographerSeeder::class,
            PublicPartySeeder::class,
            RestaurantSeeder::class,

          ]);
    }
}
