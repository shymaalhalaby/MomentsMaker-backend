<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PublicPartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('public_parties')->insert([

            [

                'name'=>' Syrian Cultural Festival',
                'event_date'=>'2025-03-03',
                'event_time'=>'05:00 ',
                'price'=>'200000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [

                'name'=>'Damascus International Film Festival',
                'event_date'=>'2025-04-01',
                'event_time'=>'09:00',
                'price'=>'100000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [

                'name'=>'Syria Night of Traditions',
                'event_date'=>'2025-01-01',
                'event_time'=>'05:00',
                'price'=>'200000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [

                'name'=>' Syrian Folklore Festival',
                'event_date'=>'2025-01-12',
                'event_time'=>'09:00',
                'price'=>'200000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [

                'name'=>' Aleppo Music Festival',
                'event_date'=>'2025-03-03',
                'event_time'=>'02:00',
                'price'=>'130000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [

                'name'=>'Syria Book Fair',
                'event_date'=>'2025-02-08',
                'event_time'=>'05:00',
                'price'=>'000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [

                'name'=>' International Damascus Fair',
                'event_date'=>'2025-09-05',
                'event_time'=>'07:00',
                'price'=>'100000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [

                'name'=>'Syria Food Festival',
                'event_date'=>'2025-01-09',
                'event_time'=>'08:00',
                'price'=>'200000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [

                'name'=>' Homs Arts and Crafts Fair',
                'event_date'=>'2025-08-09',
                'event_time'=>'04:00',
                'price'=>'300000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [

                'name'=>'Palmyra Heritage Festival',
                'event_date'=>'2025-05-06',
                'event_time'=>'12:00',
                'price'=>'000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [

                'name'=>' Latakia Sea Festival',
                'event_date'=>'2025-09-08',
                'event_time'=>'06:00 ',
                'price'=>'40000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);


    }
}


