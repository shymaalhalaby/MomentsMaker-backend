<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\FoodReservation;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function getRestaurants()
    {
        $Restaurants = Restaurant::with('image')
            ->select('id', 'name')
            ->get()
            ->map(function ($company) {
                return [
                    'id' => $company->id,
                    'name' => $company->name,
                    'type' => 'Restaurant',
                    'image_url' => $company->image ? $company->image->file_path : null,
                ];
            });

        return response()->json([
            'Restaurants' => $Restaurants
        ]);
    }


    public function getRestaurantById($id)
    {
        $Restaurant = Restaurant::find($id);

        if (!$Restaurant) {
            return response()->json([
                'error' => 'Restaurant not found',
            ], 404);
        }

        return response()->json([

            'name' => $Restaurant->name,
            'address' => $Restaurant->address,
            'phone' => $Restaurant->phone,

        ]);
    }


    public function getFoodsByRestaurant($restaurantId)
    {

        $restaurant = Restaurant::with('foods')->find($restaurantId);


        if (!$restaurant) {
            return response()->json([
                'message' => 'Restaurant not found',
            ], 404);
        }


        return response()->json([
            'restaurant' => $restaurant->name,
            'foods' => $restaurant->foods,
        ]);
    }


    public function reserveFood($foodId, $restaurantId, Request $request)
    {
      
        $validated = $request->validate([
            'quantity' => 'required|integer',
        ]);

        $quantity = $validated['quantity'];

    
        $food = Food::where('id', $foodId)->where('restaurant_id', $restaurantId)->first();

        if (!$food) {
            return response()->json(['error' => 'Food does not belong to the specified restaurant.'], 404);
        }

        
        $reservation = FoodReservation::create([
            'restaurant_id' => $restaurantId,
            'food_id' => $foodId,
            'quantity' => $quantity,
        ]);

        return response()->json([
            'message' => 'Reservation created successfully.',
            'reservation' => $reservation,
        ], 201);
    }


    public function cancelReservation($reservationId)
    {
        
        $reservation = FoodReservation::find($reservationId);

    
        if (!$reservation) {
            return response()->json(['error' => 'Reservation not found.'], 404);
        }

      
        $reservation->delete();

        return response()->json([
            'message' => 'Reservation canceled successfully.',
        ], 200);
    }

}
