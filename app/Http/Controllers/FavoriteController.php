<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\User;
use App\Models\JoyTeam;
use App\Models\Favorite;
use App\Models\DjCompany;
use App\Models\Restaurant;
use App\Models\PublicParty;
use App\Models\Photographer;
use Illuminate\Http\Request;
use App\Models\DesignCompany;
use App\Models\GraphicDesign;

class FavoriteController extends Controller
{
    
    public function store( $entity, $id,$userID)
    {
        
        $model = $this->resolveModel($entity);
        $entityInstance = $model::findOrFail($id);

        $favorite = $entityInstance->favorites()->create([
            'user_id' =>$userID,
        ]);

        return response()->json([
            'message' => 'Favorite added successfully',
            'favorite' => $favorite,
        ], 201);
    }

    public function getFavoritesByUser($userID)
    {
       
        $favorites = Favorite::with('favoriteable:id,name')
            ->where('user_id', $userID)
            ->get()
            ->map(function ($favorite) {
                return [
                    'company_type' => class_basename($favorite->favoriteable_type), 
                    'company_id' => $favorite->favoriteable_id,
                    'company_name' => $favorite->favoriteable->name,
                   
                ];
            });

        return response()->json([
            'favorites' => $favorites,
        ]);
    }

 
    private function resolveModel($entity)
    {
        $models = [
            'Restaurant' => Restaurant::class,
            'PublicParty' => PublicParty::class,
            'GraphicDesign' => GraphicDesign::class,
            'DesignCompany' => DesignCompany::class,
            'DjCompany' => DjCompany::class,
            'JoyTeam' => JoyTeam::class,
            'Photographer' => Photographer::class,
            'Hall' => Hall::class,
        ];

        if (!isset($models[$entity])) {
            abort(404, 'Entity not found.');
        }

        return $models[$entity];
    }
}
