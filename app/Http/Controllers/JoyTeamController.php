<?php

namespace App\Http\Controllers;

use App\Models\JoyTeam;
use Illuminate\Http\Request;

class JoyTeamController extends Controller
{

    public function index()
    {
        $JoyTeamsName = JoyTeam::select('id', 'name')->get();

        return response()->json([
            'JoyTeams' => $JoyTeamsName
        ]);

    }
    public function getJoyTeamById($id)
    {
        $JoyTeam = JoyTeam::find($id);

        if (!$JoyTeam) {
            return response()->json([
                'error' => 'JoyTeam not found',
            ], 404);
        }

        return response()->json([
            'name' => $JoyTeam->name,
            'email' => $JoyTeam->email,
            'address' => $JoyTeam->address,
            'phone' => $JoyTeam->phone,
            'price' => $JoyTeam->price,


        ]);
    }
}
