<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11',
            'date' => 'required|date',
            'guests' => 'required|numeric',
            'comment' => 'nullable',
        ]);

        Reservation::create($request->all());

        return response()->json([
            'message' => 'Reservation created successfully',
        ], Response::HTTP_CREATED);
    }
}
