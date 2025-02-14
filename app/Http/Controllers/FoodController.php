<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{

    public function getFoods()
    {
        $Foods = Food::with('image')
            ->select('id', 'name')
            ->get()
            ->map(function ($company) {
                return [
                    'id' => $company->id,
                    'name' => $company->name,
                    'type' => 'Food',
                    'image_url' => $company->image ? $company->image->file_path : null,
                ];
            });

        return response()->json([
            'Foods' => $Foods
        ]);
    }

    public function getFoodById($id)
    {
        $Food = Food::find($id);

        if (!$Food) {
            return response()->json([
                'error' => 'Food not found',
            ], 404);
        }

        return response()->json([
            'name' => $Food->name,
            'price_per_piece' =>  $Food->price_per_piece,
            'quantity' => $Food->quantity,

        ]);
    }
}
