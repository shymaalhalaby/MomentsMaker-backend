<?php

namespace App\Http\Controllers;

use App\Models\Photographer;
use Illuminate\Http\Request;

class PhotographerController extends Controller
{

    public function  getPhotographers()
    {
        $Photographers = Photographer::with('image')
        ->select('id', 'name')
        ->get()
        ->map(function ($company) {
            return [
                'id' => $company->id,
                'name' => $company->name,
                'type' => 'Photographer',
                'image_url' => $company->image ? $company->image->file_path : null,
            ];
        });

    return response()->json([
        'Photographers' => $Photographers
    ]);
    }
    public function getPhotographerById($id)
    {
        $Photographer = Photographer::find($id);

        if (!$Photographer) {
            return response()->json([
                'error' => 'Photographer not found',
            ], 404);
        }

        return response()->json([
            'name' => $Photographer->name,
            'email' => $Photographer->email,
            'address' => $Photographer->address,
            'phone' => $Photographer->phone,
            'price_per_session' => $Photographer->price_per_session,


        ]);
    }
}
