<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Offer;
use App\Models\JoyTeam;
use App\Models\DjCompany;
use App\Models\Restaurant;
use App\Models\PublicParty;
use App\Models\Photographer;
use Illuminate\Http\Request;
use App\Models\DesignCompany;
use App\Models\GraphicDesign;

class OfferController extends Controller
{
      public function store(Request $request, $entity, $id)
    {

        $model = $this->resolveModel($entity);
        $validated = $request->validate([
            'details' => 'required|string',
        ]);

        $entityInstance = $model::findOrFail($id);

        $offer = $entityInstance->offer()->create([
            'details' => $validated['details'],
        ]);

        return response()->json([
            'message' => 'Offer created successfully',
            'offer' => $offer,
        ], 201);
    }
    public function GetOffersList()
    {
        $offers = Offer::with('offerable:id,name') 
            ->get()
            ->map(function ($offer) {
                return [
                    'company_type' => class_basename($offer->offerable_type), 
                    'company_id' => $offer->offerable_id,
                    'company_name' => $offer->offerable->name ,
                    'offer_details' => $offer->details,
                ];
            });
    
        return response()->json([
            'offers list' => $offers,
        ]);
    }
    
    public function getByEntity($entity, $id)
    {
        $model = $this->resolveModel($entity);
        $entityInstance = $model::with('offer')->findOrFail($id);

        return response()->json(['entity' => $entityInstance]);
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
