<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GraphicDesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('graphic_designs')->insert([

            [

                'name'=>'  GraphicGuru  ',
                'email'=>'graphicguru@gmail.com',
                'address'=>' Damascus',
                'phone'=>'0922345678',
                'quantity'=>'200',
                'price_per_piece'=>'50',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>' DesignDynamo ',
                'email'=>'  designdynamo@gmail.com',
                'address'=>'Aleppo',
                'phone'=>'0914987654',
                'quantity'=>'400',
                'price_per_piece'=>'30',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'  CreativeCanvas ',
                'email'=>'  creativecanvas@gmail.com',
                'address'=>'Aleppo',
                'phone'=>'0992988654',
                'quantity'=>'100',
                'price_per_piece'=>'30',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>' PixelPerfectionist  ',
                'email'=>'  pixelperfectionist@gmail.com',
                'address'=>'Damascus',
                'phone'=>'0922918654',
                'quantity'=>'400',
                'price_per_piece'=>'50',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'  ArtisticVision ',
                'email'=>' artisticvision@gmail.com',
                'address'=>'Latakia',
                'phone'=>'0929088654',
                'quantity'=>'200',
                'price_per_piece'=>'20',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>' ColorCrafter  ',
                'email'=>'  colorcrafter@gmail.com',
                'address'=>'Damascus',
                'phone'=>'0922008655',
                'quantity'=>'600',
                'price_per_piece'=>'20',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>' DesignWhiz  ',
                'email'=>'  designwhiz@gmail.com',
                'address'=>' Homs',
                'phone'=>'0932288655',
                'quantity'=>'200',
                'price_per_piece'=>'50',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>'  VisualVirtuoso',
                'email'=>' visualvirtuoso@gmail.com',
                'address'=>'Daraa',
                'phone'=>'0922288651',
                'quantity'=>'250',
                'price_per_piece'=>'30',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>' IllustrationInnovator  ',
                'email'=>'  illustrationinnovator@gmail.com',
                'address'=>' City of Tartus',
                'phone'=>'0902288652',
                'quantity'=>'150',
                'price_per_piece'=>'40',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>' BrandBuilder  ',
                'email'=>'  brandbuilder@gmail.com',
                'address'=>'Sweida, Syria',
                'phone'=>'0900288653',
                'quantity'=>'200',
                'price_per_piece'=>'15',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'  LayoutLegend  ',
                'email'=>' layoutlegend@gmail.com',
                'address'=>'Deir ez-Zor, Syria',
                'phone'=>'0900288654',
                'quantity'=>'140',
                'price_per_piece'=>'20',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Visual Alchemy',
                'email'=>'visualAlchemy@gmail.com',
                'address'=>'Hama, Syria',
                'phone'=>'0900292654',
                'quantity'=>'150',
                'price_per_piece'=>'20',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Creative Canvas',
                'email'=>'creativecanvas@gmail.com',
                'address'=>'Homs, Syria',
                'phone'=>'0903918654',
                'quantity'=>'160',
                'price_per_piece'=>'20',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Pixel Perfect Designs',
                'email'=>'pixelperfectdesigns@gmail.com',
                'address'=>'Lattakia, Syria',
                'phone'=>'0900498654',
                'quantity'=>'130',
                'price_per_piece'=>'20',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Spectrum Studios',
                'email'=>'spectrumstudios@gmail.com',
                'address'=>'Damascus, Syria',
                'phone'=>'0900283954',
                'quantity'=>'150',
                'price_per_piece'=>'20',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]

    );


    }
}
