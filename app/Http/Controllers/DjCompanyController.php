<?php

namespace App\Http\Controllers;

use App\Models\DjCompany;
use Illuminate\Http\Request;

class DjCompanyController extends Controller
{

    public function index()
    {
        $DjCompaniesName = DjCompany::select('id', 'name')->get();

        return response()->json([
            'DjCompanies' => $DjCompaniesName
        ]);

    }
    public function getDjCompanyById($id)
    {
        $DjCompany = DjCompany::find($id);

        if (!$DjCompany) {
            return response()->json([
                'error' => 'DjCompany not found',
            ], 404);
        }

        return response()->json([
            'name' => $DjCompany->name,
            'email' => $DjCompany->email,
            'address' => $DjCompany->address,
            'phone' => $DjCompany->phone,
            'price' => $DjCompany->price,

        ]);
    }
}
