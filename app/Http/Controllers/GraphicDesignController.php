<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GraphicDesign;

class GraphicDesignController extends Controller
{

    public function getGraphicDesigns()
    {
        $GraphicDesigns = GraphicDesign::with('image')
            ->select('id', 'name')
            ->get()
            ->map(function ($company) {
                return [
                    'id' => $company->id,
                    'name' => $company->name,
                    'type' => 'GraphicDesign',
                    'image_url' => $company->image ? $company->image->file_path : null,
                ];
            });

        return response()->json([
            'GraphicDesigns' => $GraphicDesigns
        ]);
    }


    public function getGraphicDesignById($id)
    {
        $GraphicDesign = GraphicDesign::find($id);

        if (!$GraphicDesign) {
            return response()->json([
                'error' => 'GraphicDesign not found',
            ], 404);
        }

        return response()->json([
            'name' => $GraphicDesign->name,
            'email' => $GraphicDesign->email,
            'address' => $GraphicDesign->address,
            'phone' => $GraphicDesign->phone,
            'quantity' =>$GraphicDesign->quantity,
            'price_per_piece' =>$GraphicDesign->price_per_piece,


        ]);
    }
}
