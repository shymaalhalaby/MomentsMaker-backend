<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesignCompany;

class DesignCompanyController extends Controller
{

    public function getDesignCompanies()
    {
        $DesignCompanies = DesignCompany::with('image')
            ->select('id', 'name')
            ->get()
            ->map(function ($company) {
                return [
                    'id' => $company->id,
                    'name' => $company->name,
                    'type' => 'DesignCompany',
                    'image_url' => $company->image ? $company->image->file_path : null,
                ];
            });

        return response()->json([
            'DesignCompanies' => $DesignCompanies
        ]);
    }

    public function getDesignCompanyById($id)
    {
        $DesignCompany = DesignCompany::find($id);

        if (!$DesignCompany) {
            return response()->json([
                'error' => 'DesignCompany not found',
            ], 404);
        }

        return response()->json([
            'name' => $DesignCompany->name,
            'email' => $DesignCompany->email,
            'address' => $DesignCompany->address,
            'phone' => $DesignCompany->phone,
            'price' =>  $DesignCompany->price,

        ]);
    }
}
