<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Hall;
use App\Models\Restaurant;
use App\Models\PublicParty;
use Illuminate\Support\Str;
use App\Models\Photographer;
use App\Models\PreviousWork;
use Illuminate\Http\Request;
use App\Models\DesignCompany;
use App\Models\GraphicDesign;  // Import the PreviousWork model

class PreviousWorkController extends Controller
{

    public function store(Request $request, $entity, $id)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,pdf,doc,docx|max:2048',
        ]);


        $model = $this->resolveModel($entity);
        $entityInstance = $model::findOrFail($id);


        $file = $request->file('file');
        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('uploads/previous_works', $fileName, 'public');


        $previousWork = new PreviousWork([
            'file_name' => $fileName,
            'file_path' => '/storage/' . $filePath,
        ]);


        $entityInstance->previousWorks()->save($previousWork);

        return response()->json(['success' => true, 'previous_work' => $previousWork], 201);
    }


    public function getByEntity($entity, $id)
    {
        $model = $this->resolveModel($entity);
        $entityInstance = $model::with('previousWorks')->findOrFail($id);

        return response()->json(['entity' => $entityInstance]);
    }


    private function resolveModel($entity)
    {
        $models = [
            'Photographer' => Photographer::class,
            'GraphicDesign' => GraphicDesign::class,
            'DesignCompany' => DesignCompany::class,
            'Hall' => Hall::class,

        ];

        if (!isset($models[$entity])) {
            abort(404, 'Entity not found.');
        }

        return $models[$entity];
    }
}
