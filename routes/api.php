<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\JoyTeamController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\DjCompanyController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\PublicPartyController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PhotographerController;
use App\Http\Controllers\PreviousWorkController;
use App\Http\Controllers\DesignCompanyController;
use App\Http\Controllers\GraphicDesignController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group([
    'middleware' => 'api'
], function () {
    Route::group([
        'prefix' => 'auth'
    ], function ($router) {
        /***thses api's dont need token***/

        //register and login
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);

        // dont use these
        Route::post('/images/{entity}/{id}', [ImageController::class, 'store']);
        Route::post('/offers/{entity}/{id}', [OfferController::class, 'store']);
        Route::post('/PreviousWork/{entity}/{id}', [PreviousWorkController::class, 'store']);


        //return list of each company(id,name,type,image)
        Route::get('ListOfDesignCompanies', [DesignCompanyController::class, 'getDesignCompanies']);
        Route::get('ListOfGraphicDesign', [GraphicDesignController::class, 'getGraphicDesigns']);
        Route::get('ListOfPublicParties', [PublicPartyController::class, 'getPublicParties']);
        Route::get('ListOfresturants', [RestaurantController::class, 'getRestaurants']);
        Route::get('ListOfphotographers', [PhotographerController::class, 'getPhotographers']);
        Route::get('ListOfHalls', [HallController::class, 'getHalls']);
        Route::get('ListOfFoods', [FoodController::class, 'getFoods']);
        //return list of each company(id,name)
        Route::get('ListOfDjCompanies', [DjCompanyController::class, 'index']);
        Route::get('ListOfjoyTeams', [JoyTeamController::class, 'index']);


        //return the company information by passing its id
        Route::get('/DjCompany/{id}', [DjCompanyController::class, 'getDjCompanyById']);
        Route::get('/JoyTeam/{id}', [JoyTeamController::class, 'getJoyTeamById']);
        Route::get('/Photographer/{id}', [PhotographerController::class, 'getPhotographerById']);
        Route::get('/Resturant/{id}', [RestaurantController::class, 'getRestaurantById']);
        Route::get('/DesignCompany/{id}', [DesignCompanyController::class, 'getDesignCompanyById']);
        Route::get('/GraphicDesign/{id}', [GraphicDesignController::class, 'getGraphicDesignById']);
        Route::get('/PublicParty/{id}', [PublicPartyController::class, 'getPublicPartyById']);
        Route::get('/Hall/{id}', [HallController::class, 'getHallById']);
        Route::get('/Food/{id}', [FoodController::class, 'getFoodById']);


        //passing company type (entity), and company id (id), return information and image of it
        Route::get('/images/{entity}/{id}', [ImageController::class, 'getByEntity']);

        //return list or all offers
        Route::get('/offers', [OfferController::class, 'GetOffersList']);

        //passing company type (entity), and company id (id),return the offers of specific company
        Route::get('/offers/{entity}/{id}', [OfferController::class, 'getByEntity']);

        //passing company type (entity), company id (id),and event id , return the booked dates
        Route::get('/reservations/date/{entity}/{id}/{eventID}', [ReservationController::class, 'getReservationDate']);

        //get Foods By RestaurantID
        Route::get('/restaurantsfoods/{restaurantId}', [RestaurantController::class, 'getFoodsByRestaurant']);


    });
    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        /***these api need to pass token***/

        //add company to favorite list by passing company_id(id) , userID , company type (entity)
        Route::post('/favorite/{entity}/{id}/{userID}', [FavoriteController::class, 'store']);
        //return favorite list by passing userID
        Route::get('/favorite/{userID}', [FavoriteController::class, 'getFavoritesByUser']);

        //passing company type (entity), and company id (id), return information and image of the previouse work of it
        Route::get('/PreviousWork/{entity}/{id}', [PreviousWorkController::class, 'getByEntity']);

        //update and delete user profile
        Route::put('/updateprofile', [AuthController::class, 'update']);
        Route::delete("/delete", [AuthController::class, 'delete']);

        //get Events By User ID
        Route::get('/events/{userID}', [EventController::class, 'getEventsByUser']);

        //add reservation for each compoany
        Route::post('/reservations/{entity}/{id}/{eventID}', [ReservationController::class, 'store']);

        //cancle reservation for each compoany
        Route::delete('/reservation/cancel/{reservationId}', [ReservationController::class, 'cancel']);

        //get Reservations By Event 
        Route::get('/reservations/{eventID}', [ReservationController::class, 'getReservationsByEvent']);

        //payment api
        Route::post('/payments', [PaymentController::class, 'processPayment']);

        //reserve Food
        Route::post('/reserveFood/{foodId}/{restaurantId}', [RestaurantController::class, 'reserveFood']);


        //cancle food reserve by passing reservation id 
        Route::delete('/cancelReservation/{reservationId}', [RestaurantController::class, 'cancelReservation']);
    });


});
