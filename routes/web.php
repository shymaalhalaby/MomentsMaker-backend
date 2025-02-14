<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JoyTeamController;
use App\Http\Controllers\DjCompanyController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\PublicPartyController;
use App\Http\Controllers\PhotographerController;
use App\Http\Controllers\DesignCompanyController;
use App\Http\Controllers\GraphicDesignController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
