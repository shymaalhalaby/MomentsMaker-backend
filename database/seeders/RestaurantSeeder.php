<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurants')->insert([

            [

                'name'=>'Olive Garden',
                'address'=>'Green Valley, Damascus, Syria ',
                'phone'=>'0988328675',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Spice Route',
                'address'=>'Flavor Street, Damascus, Syria',
                'phone'=>'0987924988',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'Sweetest Dreams Bakery',
                'address'=>'Hama, Syria',
                'phone'=>'0912955000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>'Desert Delights ',
                'address'=>'Sand Dunes Road, Damascus, Syria  ',
                'phone'=>'099628555',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Taste of Tradition ',
                'address'=>'Heritage Lane, Damascus, Syria ',
                'phone'=>'0933088999',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Urban Feast ',
                'address'=>'City Center, Damascus, Syria',
                'phone'=>'0922083765',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Mystic Flavors ',
                'address'=>'Enigma Lane, Damascus, Syria ',
                'phone'=>'0922284333',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>'The Gourmet Hub',
                'address'=>'Savory Road, Damascus, Syria',
                'phone'=>'0975385333',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Fresh Harvest',
                'address'=>'Greenfield Avenue, Damascus, Syria  ',
                'phone'=>'0902296632',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'Spice  Herb  ',
                'address'=>'Flavor Street, Damascus, Syria ',
                'phone'=>'0900284444',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>' Cozy Corner ',
                'address'=>'Comfort Lane, Damascus, Syria',
                'phone'=>'090029533',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'The Candy Cloud',
                'address'=>'Lattakia, Syria',
                'phone'=>'090247733',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'The Chocolate Carousel',
                'address'=>'Hama, Syria',
                'phone'=>'091939533',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'The Sugar Shack',
                'address'=>'Homs, Syria',
                'phone'=>'090029533',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Sweet Surrender Confections',
                'address'=>'Damascus, Syria',
                'phone'=>'090396233',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]

    );
    }
}

