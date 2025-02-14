<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DesignCompanyseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('design_companies')->insert([

            [

                'name'=>' Design District',
                'email'=>'. creative.designer123@gmail.com',
                'address'=>' Star Street, Al-Mazza Neighborhood, Damascus',
                'phone'=>'0912345678',
                'price'=>'300000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>' NexGen Designs',
                'email'=>' style.and.form@gmail.com',
                'address'=>'  Al-Shahbaa Neighborhood, Aleppo',
                'phone'=>'0912987654',
                'price'=>'400000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>' Luxe Design Group',
                'email'=>' luxe.designs2023@gmail.com',
                'address'=>'  Victory District, Aleppo',
                'phone'=>'0912988654',
                'price'=>'200000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>'  DesignHive',
                'email'=>' hive.designs2023@gmail.com',
                'address'=>' Qaimariya Area, Damascus',
                'phone'=>'0922988654',
                'price'=>'100000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'  Chroma Collective',
                'email'=>' ch.designs2023@gmail.com',
                'address'=>' Golan Heights District, Latakia',
                'phone'=>'0922088654',
                'price'=>'500000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>' nspire Studio',
                'email'=>' ns.designs2023@gmail.com',
                'address'=>'Al-Huda Neighborhood, Damascus',
                'phone'=>'0922088655',
                'price'=>'700000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Pixel Perfect',
                'email'=>' px.designs2023@gmail.com',
                'address'=>' Peace Tower, Third Floor, Homs',
                'phone'=>'0922288655',
                'price'=>'300000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>' Visionary Creations',
                'email'=>' vv.designs2023@gmail.com',
                'address'=>'Al-Karama District, Daraa',
                'phone'=>'0922288656',
                'price'=>'600000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>' Flawless Planning',
                'email'=>' fl.designs2023@gmail.com',
                'address'=>' City of Tartus',
                'phone'=>'0902288656',
                'price'=>'100000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'  Dream Event Planners',
                'email'=>' drem.designs2023@gmail.com',
                'address'=>' Al-Hourani Way, Sweida, Syria',
                'phone'=>'0900288656',
                'price'=>'400000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'  Event Harmony',
                'email'=>' hermony.designs2023@gmail.com',
                'address'=>'  Al-Furat Drive, Deir ez-Zor, Syria',
                'phone'=>'0900288650',
                'price'=>'300000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Creative Pulse Studio',
                'email'=>'info@creativepulse.com',
                'address'=>'Al-Mazzeh Street, Damascus',
                'phone'=>'0978342678',
                'price'=>'100000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Design Horizon Agency',
                'email'=>'contact@designhorizon.com',
                'address'=>' Al-Salihiya District, Damascus',
                'phone'=>'0916785678',
                'price'=>'350000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Artistry in Motion',
                'email'=>'hello@artistryinmotion.com',
                'address'=>' Al-Midan Area, Damascus',
                'phone'=>'0944345678',
                'price'=>'250000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Innovative Graphic Solutions',
                'email'=>'support@innovativegraphics.com',
                'address'=>'Al-Qaboun Neighborhood, Damascus',
                'phone'=>'0912345678',
                'price'=>'300000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Inspired Creations Studio',
                'email'=>'contact@inspiredcreations.com',
                'address'=>' Al-Amwaj Street, Damascus',
                'phone'=>'0957345678',
                'price'=>'600000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>' Levant Visuals',
                'email'=>'levantvisuals@gmail.com',
                'address'=>' Almalki ,Damascus',
                'phone'=>'0957845678',
                'price'=>'500000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Syrian Design Studio',
                'email'=>'syriandesignstudio@email.com',
                'address'=>' star Street, Damascus',
                'phone'=>'0957349278',
                'price'=>'600000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Al-Sham Creative',
                'email'=>'alshamcreative@email.com',
                'address'=>' Alshami Street, Damascus',
                'phone'=>'0957475678',
                'price'=>'500000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Damascus Design Collective',
                'email'=>'damascusdesigncollective@gmail.com ',
                'address'=>' Sahnaya, Damascus',
                'phone'=>'0957456678',
                'price'=>'800000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]

    );





    }
}


