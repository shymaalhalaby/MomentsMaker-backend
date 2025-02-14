<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class  PhotographerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photographers')->insert([

            [

                'name'=>'Khaled Al-Masri Photography',
                'email'=>'khaled.photography@email.com  ',
                'address'=>'Sunset Boulevard, Damascus, Syria ',
                'phone'=>'0912328675',
                'price_per_session'=>'3000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Layla Lens',
                'email'=>' layla.lens@email.com',
                'address'=>'Art Street, Damascus, Syria ',
                'phone'=>'0987924347',
                'price_per_session'=>'4000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'Omar Visuals ',
                'email'=>'omar.visuals@email.com ',
                'address'=>'Creative Lane, Damascus, Syria',
                'phone'=>'0912955685',
                'price_per_session'=>'2000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>'Yasmin Clicks',
                'email'=>'yasmin.clicks@email.com ',
                'address'=>'Memory Avenue, Damascus, Syria',
                'phone'=>'0996288663',
                'price_per_session'=>'1000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Samir Snapshots',
                'email'=>'samir.snapshots@email.com  ',
                'address'=>'Focus Road, Damascus, Syria',
                'phone'=>'0933088387',
                'price_per_session'=>'6000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Rama stone ',
                'email'=>'ra.stons@hotmail.com',
                'address'=>' Al-Firdous Street, Damascus ',
                'phone'=>'0922083456',
                'price_per_session'=>'3000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Adam Vision ',
                'email'=>'adam.vision@email.com  ',
                'address'=>'Dream Street, Damascus, Syria',
                'phone'=>'0922285521',
                'price_per_session'=>'1500',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>'Nora Frames',
                'email'=>'nora.frames@email.com ',
                'address'=>'Light Avenue, Damascus, Syria ',
                'phone'=>'0975388533',
                'price_per_session'=>'4000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Tarek Moments ',
                'email'=>'tarek.moments@email.com ',
                'address'=>'Snapshot Boulevard, Damascus, Syria',
                'phone'=>'0902296633',
                'price_per_session'=>'1000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'Sara Shutter ',
                'email'=>'sara.shutter@email.com',
                'address'=>'Capture Lane, Damascus, Syria ',
                'phone'=>'0900284422',
                'price_per_session'=>'4000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Rami Artistry',
                'email'=>'rami.artistry@email.com ',
                'address'=>'Colorful Path, Damascus, Syria',
                'phone'=>'0900295328',
                'price_per_session'=>'6000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Capturing Moments Photography',
                'email'=>'capturingmomentsphotography@gmail.com ',
                'address'=>'Lattakia, Syria',
                'phone'=>'0900295291',
                'price_per_session'=>'68000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Shutter & Soul',
                'email'=>'shutter&soul@gmail.com ',
                'address'=>'Damascus, Syria',
                'phone'=>'0900229528',
                'price_per_session'=>'65000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Iris Bloom Photography',
                'email'=>'irisbloomphotography@gmail.com ',
                'address'=>'Homs, Syria',
                'phone'=>'0900295598',
                'price_per_session'=>'88000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Alex Ramsey Photography',
                'email'=>'alexramseyphotography@gmail.com ',
                'address'=>' Damascus, Syria',
                'phone'=>'0995395328',
                'price_per_session'=>'85000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]

    );
    }
}


