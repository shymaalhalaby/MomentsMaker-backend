<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Hall;
use App\Models\Image;
use App\Models\Restaurant;
use App\Models\PublicParty;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DesignCompany;
use App\Models\GraphicDesign;
use App\Models\Photographer;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{

    public function store(Request $request, $entity, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $model = $this->resolveModel($entity);
        $entityInstance = $model::findOrFail($id);

        $file = $request->file('image');
        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('uploads', $fileName, 'public');

        $image = new Image([
            'file_name' => $fileName,
            'file_path' => '/storage/' . $filePath,
        ]);

        $entityInstance->image()->save($image);

        return response()->json(['success' => true, 'image' => $image], 201);
    }


    public function getByEntity($entity, $id)
    {
        $model = $this->resolveModel($entity);
        $entityInstance = $model::with('image')->findOrFail($id);

        return response()->json(['entity' => $entityInstance]);
    }


    private function resolveModel($entity)
    {
        $models = [
            'Restaurant' => Restaurant::class,
            'PublicParty' => PublicParty::class,
            'GraphicDesign' => GraphicDesign::class,
            'DesignCompany' => DesignCompany::class,
            'Hall' => Hall::class,
            'Food' => Food::class,
            'Photographer' => Photographer::class,
        ];

        if (!isset($models[$entity])) {
            abort(404, 'Entity not found.');
        }

        return $models[$entity];
    }
}

