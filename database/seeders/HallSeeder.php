<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('halls')->insert([

            [

                'name'=>'Joyful Hall',
                'email'=>'joyfulhall@gmail.com',
                'address'=>'Al-Nasr Street, Damascus',
                'phone'=>'0912345555',
                'price'=>'100000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Hope Banquet Hal',
                'email'=>'hopebanquethall@gmail.com',
                'address'=>'Al-Midan Neighborhood, Damascus',
                'phone'=>'0988845678',
                'price'=>'200000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Blossom Venue',
                'email'=>'blossomvenue@gmail.com',
                'address'=>'Al-Sham Road, Damascus',
                'phone'=>'0912388878',
                'price'=>'150000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Pearl Hall',
                'email'=>'pearlhall@gmail.com',
                'address'=>'Al-Ameen Square, Damascus',
                'phone'=>'0911145678',
                'price'=>'150000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Elegance Hall',
                'email'=>'elegancehall@gmail.com',
                'address'=>'Al-Shalaan District, Damascus',
                'phone'=>'0912375478',
                'price'=>'100000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>' Dreamy Weddings Hall',
                'email'=>'dreamyhall@gmail.com',
                'address'=>'Celebration Avenue, Damascus',
                'phone'=>'0912348358',
                'price'=>'150000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Golden Moments Venue',
                'email'=>' goldenmoments@gmail.com',
                'address'=>'Joy Street, Damascus',
                'phone'=>'0983245678',
                'price'=>'200000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Eternal Bliss Hall',
                'email'=>'eternalbliss@gmail.com',
                'address'=>'Love Lane, Damascus',
                'phone'=>'0912777678',
                'price'=>'200000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Serenity Banquet Hall',
                'email'=>'serenitybanquet@gmail.com',
                'address'=>'Harmony Road, Damascus',
                'phone'=>'0912345678',
                'price'=>'100000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Radiant Events Center',
                'email'=>'radiancevents@gmail.com',
                'address'=>'Celebration Circle, Damascus',
                'phone'=>'0912890678',
                'price'=>'200000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>' Crystal Palace Banquet Hall',
                'email'=>'crystalpalace@gmail.com',
                'address'=>'Celebration Blvd, Damascus',
                'phone'=>'0912347428',
                'price'=>'100000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'City Center Pavilion Hall',
                'email'=>'citycenterpavilion@gmail.com',
                'address'=>'Celebration Blvd, Damascus',
                'phone'=>'0912792428',
                'price'=>'150000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'The Oakwood Estate Hall',
                'email'=>'oakwoodestate@gmail.com',
                'address'=>'Celebration Blvd, Damascus',
                'phone'=>'0912347428',
                'price'=>'100000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>' Riverside Events Center Hall',
                'email'=>'riversideeventscenter@gmail.com',
                'address'=>'Damascus,Syria',
                'phone'=>'0912348928',
                'price'=>'200000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'The Grand Ballroom Hall',
                'email'=>'grandBallroom@gmail.com',
                'address'=>'Hama,Syria',
                'phone'=>'0912295428',
                'price'=>'150000',
                'image_path'=>'null',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
    }
}


