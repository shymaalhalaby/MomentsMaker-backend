<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DjCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dj_companies')->insert([

            [

                'name'=>' DJ Nightwave',
                'email'=>'. djnightwave@gmail.com',
                'address'=>' Damascus',
                'phone'=>'0912345675',
                'price'=>'20000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'DJ ElectroBeat',
                'email'=>' djetrobeat@gmail.com',
                'address'=>' Aleppo',
                'phone'=>'0912917654',
                'price'=>'30000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'DJ SonicPulse',
                'email'=>'  djsonicpulse@gmail.com',
                'address'=>'Aleppo',
                'phone'=>'0912987654',
                'price'=>'40000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>'  DJ RhythmMaster',
                'email'=>'djrhythmmaster@gmail.com',
                'address'=>' Damascus',
                'phone'=>'0922988659',
                'price'=>'30000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'   DJ BassDrop',
                'email'=>' djbassdrop@gmail.com',
                'address'=>'Latakia',
                'phone'=>'0922088652',
                'price'=>'35000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'  DJ VibeCrafter',
                'email'=>': djvibecrafter@gmail.com',
                'address'=>'Damascus',
                'phone'=>'09220888555',
                'price'=>'40000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>'DJ SoundSphere',
                'email'=>' djsoundsphere@gmail.com',
                'address'=>' Homs',
                'phone'=>'0922688655',
                'price'=>'250000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),


            ],

            [
                'name'=>' DJ GrooveMachine',
                'email'=>' : djgroovemachine@gmail.com',
                'address'=> 'Daraa',
                'phone'=>'0912288656',
                'price'=>'30000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],

            [
                'name'=>' DJ BeatFusion',
                'email'=>' : djbeatfusion@gmail.com',
                'address'=>'Tartus',
                'phone'=>'0902208656',
                'price'=>'37000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [
                'name'=>'  DJ StarDust',
                'email'=>'  djstardust@gmail.com',
                'address'=>' Sweida, Syria',
                'phone'=>'0900788656',
                'price'=>'100000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'DJ MysticWave  ',
                'email'=>' djmysticwave@gmail.com',
                'address'=>' Deir ez-Zor, Syria',
                'phone'=>'0900208650',
                'price'=>'150000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'DJ Rami ',
                'email'=>' djRAmi@gmail.com',
                'address'=>' Hama, Syria',
                'phone'=>'0900277650',
                'price'=>'120000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'DJ Maria  ',
                'email'=>' djmaria@gmail.com',
                'address'=>' Damascous, Syria',
                'phone'=>'0911208650',
                'price'=>'150000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>'DJ Pulse ',
                'email'=>'djpulse@gmail.com',
                'address'=>' Damascus, Syria',
                'phone'=>'0900245650',
                'price'=>'100000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            [

                'name'=>' DJ Nightshade ',
                'email'=>'nightshade.dj@yahoo.com',
                'address'=>' Homs, Syria',
                'phone'=>'0905925650',
                'price'=>'150000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]


    );




    }
}

