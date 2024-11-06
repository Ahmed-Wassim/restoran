<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __invoke()
    {
        return response()->json([
            'message' => 'Product list retrieved successfully',
            'products' => \App\Models\Product::select('id', 'name', 'description', 'price')->get()
        ], 200);
    }
}
