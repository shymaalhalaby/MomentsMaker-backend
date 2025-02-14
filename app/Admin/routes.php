<?php
namespace App\Admin\Controllers;

use Illuminate\Routing\Router;
use OpenAdmin\Admin\Facades\Admin;
use Illuminate\Support\Facades\Route;






Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('design-companies', DesignCompanyController::class);
    $router->resource('images', ImageController::class);
    $router->resource('graphic-designs', GraphicDesignController::class);
    $router->resource('joy-teams', JoyTeamController::class);
    $router->resource('photographers', PhotographerController::class);
    $router->resource('public-parties', PublicPartyController::class);
    $router->resource('restaurants', RestaurantController::class);
    $router->resource('food', FoodController::class);
    $router->resource('halls', HallController::class);
    $router->resource('dj-companies', DjCompanyController::class);
    $router->resource('previous-works', PreviousWorkController::class);
    $router->resource('offers', OfferController::class);

});
