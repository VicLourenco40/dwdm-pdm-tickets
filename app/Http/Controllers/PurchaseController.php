<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function show(Request $request)
    {
        $purchase = Purchase::where('ticket_code', $request->ticketCode)
                            ->with(['ticket', 'customer'])
                            ->first();

        if (!$purchase) {
            return response()->json([
                'error' => 'Invalid ticket'
            ], 404);
        }

        return response()->json([
            'purchase' => $purchase
        ]);
    }
}
