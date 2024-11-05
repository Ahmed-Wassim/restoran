<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function __invoke()
    {
        return response()->json([
            'message' => 'Chef list retrieved successfully',
            'chefs' => \App\Models\Chef::select('id', 'name', 'image')->get()
        ], 200);
    }
}
