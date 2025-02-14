<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food')->insert([

            [
                'name' => 'sweet',
                'type' => 'cake',
                'restaurant_id' => '2',
                'price_per_piece' => '500000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [

                'name' => 'sweet',
                'type' => 'cake',
                'restaurant_id' => '3',
                'price_per_piece' => '500000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],



            [

                'name' => 'sweet',
                'type' => 'crepe',
                'restaurant_id' => '4',
                'price_per_piece' => '30000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [

                'name' => 'sweet',
                'type' => 'crepe',
                'restaurant_id' => '5',
                'price_per_piece' => '30000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [

                'name' => 'sweet',
                'type' => 'pancake',
                'restaurant_id' => '6',
                'price_per_piece' => '30000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [

                'name' => 'sweet',
                'type' => 'pancake',
                'restaurant_id' => '7',
                'price_per_piece' => '20000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [

                'name' => 'sweet',
                'type' => 'cake',
                'restaurant_id' => '1',
                'price_per_piece' => '500000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [

                'name' => 'sweet',
                'type' => 'cake',
                'restaurant_id' => '8',
                'price_per_piece' => '500000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [

                'name' => 'sweet',
                'type' => 'cake',
                'restaurant_id' => '9',
                'price_per_piece' => '50000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [

                'name' => 'dinner',
                'type' => 'meal',
                'restaurant_id' => '10',
                'price_per_piece' => '60000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [

                'name' => 'dinner',
                'type' => 'meal',
                'restaurant_id' => '1',
                'price_per_piece' => '70000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [

                'name' => 'dinner',
                'type' => 'meal',
                'restaurant_id' => '2',
                'price_per_piece' => '60000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [

                'name' => 'sweet',
                'type' => 'fruit',
                'restaurant_id' => '2',
                'price_per_piece' => '35000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [

                'name' => 'sweet',
                'type' => 'ice cream',
                'restaurant_id' => '1',
                'price_per_piece' => '40000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],



            [

                'name' => 'dinner',
                'type' => 'Buffet',
                'restaurant_id' => '1',
                'price_per_piece' => '900000',
                'image_path' => 'null',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],



        ]);

    }
}

