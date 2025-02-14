<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     *
     */
    public function processPayment(Request $request)
    {
        $validated = $request->validate([
            'card_holder_name' => 'required|string',
            'card_number' => 'required|string',
            'expiration_date' => 'required',
            'cvv' => 'required|string',
            'total_amount' => 'required|numeric',
        ]);


        Payment::create([
            'card_holder_name' => $validated['card_holder_name'],
            'card_number' => $validated['card_number'],
            'expiration_date' => $validated['expiration_date'],
            'cvv' => $validated['cvv'],
            'total_amount' => $validated['total_amount'],
        ]);


        return response()->json([
            'message' => 'Paid successfully!',
        ], 201);
    }
}
