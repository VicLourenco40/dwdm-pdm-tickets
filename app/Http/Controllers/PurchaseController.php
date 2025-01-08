<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PurchaseRequest;
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
                'error' => 'Invalid ticket.'
            ], 404);
        }

        return response()->json([
            'purchase' => $purchase
        ]);
    }

    public function checkIn(Request $request)
    {
        $purchase = Purchase::where('ticket_code', $request->ticketCode)
                            ->first();

        if (!$purchase) {
            return response()->json([
                'error' => 'Invalid ticket.'
            ], 404);
        }

        if ($purchase->checked_in_at) {
            return response()->json([
                'error' => 'Ticket already checked in.'
            ], 409);
        }

        $purchase->checked_in_at = now();
        $purchase->save();

        return response()->json([
            'message' => 'Ticket successfully checked in.',
            'checked_in_at' => $purchase->checked_in_at
        ]);
    }
}
