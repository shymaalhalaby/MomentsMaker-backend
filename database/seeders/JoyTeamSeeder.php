<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JoyTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('joy_teams')->insert([

            [

                'name'=>' Syria Celebration Band  ',
                'email'=>' syria.celebration@gmail.com',
                'address'=>'  Al-Nasr Street, Damascus  ',
                'phone'=>'0912345675',
                'price'=>'100000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Joyful Moments Orchestra ',
                'email'=>'joyful.moments@yahoo.com',
                'address'=>' Al-Midan Neighborhood, Damascus  ',
                'phone'=>'0987654349',
                'price'=>'200000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'Euphoric Events Ensemble',
                'email'=>'euphoric.events@hotmail.com',
                'address'=>'Al-Ameen Square, Damascus ',
                'phone'=>'0912988685',
                'price'=>'150000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>'Harmony Wedding Group',
                'email'=>'harmony.wedding@gmail.com',
                'address'=>' Al-Thawra Street, Damascus',
                'phone'=>'0922988663',
                'price'=>'100000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Blissful Beats Band',
                'email'=>'blissful.beats@yahoo.com',
                'address'=>' Al-Shalaan Neighborhood, Damascus ',
                'phone'=>'0922088384',
                'price'=>'180000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Cherished Memories Team ',
                'email'=>'cherished.memories@hotmail.com',
                'address'=>' Al-Firdous Street, Damascus ',
                'phone'=>'0922088261',
                'price'=>'200000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Radiant Joys Collective',
                'email'=>'radiant.joys@gmail.com',
                'address'=>'Al-Qaboun Neighborhood, Damascus ',
                'phone'=>'0922283721',
                'price'=>'100000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>'Timeless Celebrations Crew',
                'email'=>'timeless.celebrations@yahoo.com',
                'address'=>' Al-Hamra Street, Damascus',
                'phone'=>'0975388656',
                'price'=>'300000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'Elegant Affairs Band ',
                'email'=>'elegant.affairs@hotmail.com',
                'address'=>'Al-Mazzah Neighborhood, Damascus  ',
                'phone'=>'0902292656',
                'price'=>'200000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'Magical Moments Music',
                'email'=>'magical.moments@gmail.com',
                'address'=>'Al-Abbasiyeen Square, Damascus',
                'phone'=>'0900288851',
                'price'=>'300000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Damascus Artistry ',
                'email'=>'damascus.artistry@email.com  ',
                'address'=>'45 Creative Street, Damascus, Syria',
                'phone'=>'0900296650',
                'price'=>'230000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Celestial Sounds',
                'email'=>'celestialsounds@gmail.com  ',
                'address'=>'Homs, Syria',
                'phone'=>'0900237250',
                'price'=>'270000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'The Groove Syndicate',
                'email'=>'groovesyndicate@gmail.com  ',
                'address'=>'Damascus, Syria',
                'phone'=>'0900293650',
                'price'=>'220000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'Harmony Strings',
                'email'=>'harmonystrings@gmail.com  ',
                'address'=>'Hama, Syria',
                'phone'=>'0900026650',
                'price'=>'250000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'The Midnight Bloom',
                'email'=>'midnightbloom@gmail.com  ',
                'address'=>' Damascus, Syria',
                'phone'=>'0907926650',
                'price'=>'280000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]

    );

    }
}


