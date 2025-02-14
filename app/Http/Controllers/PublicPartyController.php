<?php

namespace App\Http\Controllers;

use App\Models\PublicParty;
use Illuminate\Http\Request;

class PublicPartyController extends Controller
{
    public function getPublicParties()
    {
        $PublicParties = PublicParty::with('image')
            ->select('id', 'name')
            ->get()
            ->map(function ($company) {
                return [
                    'id' => $company->id,
                    'name' => $company->name,
                    'type' => 'PublicParty',
                    'image_url' => $company->image ? $company->image->file_path : null,
                ];
            });

        return response()->json([
            'PublicParties' => $PublicParties
        ]);
    }

    public function getPublicPartyById($id)
    {
        $PublicParty = PublicParty::find($id);

        if (!$PublicParty) {
            return response()->json([
                'error' => 'PublicParty not found',
            ], 404);
        }

        return response()->json([

            'name' => $PublicParty->name,
            'event_date' => $PublicParty->event_date,
            'event_time' => $PublicParty->event_time,
            'price' => $PublicParty->price,
        ]);
    }
}

