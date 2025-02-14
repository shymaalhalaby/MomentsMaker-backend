<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{

    public function getHalls()
    {
        $Halls = Hall::with('image')
            ->select('id', 'name')
            ->get()
            ->map(function ($company) {
                return [
                    'id' => $company->id,
                    'name' => $company->name,
                    'type' => 'Hall',
                    'image_url' => $company->image ? $company->image->file_path : null,
                ];
            });

        return response()->json([
            'Halls' => $Halls
        ]);
    }

    public function getHallById($id)
    {
        $Hall = Hall::find($id);

        if (!$Hall) {
            return response()->json([
                'error' => 'Hall not found',
            ], 404);
        }

        return response()->json([
            'name' => $Hall->name,
            'email' => $Hall->email,
            'address' => $Hall->address,
            'phone' => $Hall->phone,
            'price' =>  $Hall->price,

        ]);
    }
}
