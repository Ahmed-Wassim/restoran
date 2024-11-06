<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\ReservationController;

// Auth Routes
Route::group(
    [
        'prefix' => 'auth'
    ],
    function () {
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
        Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api');
        Route::get('/user-profile', [AuthController::class, 'userProfile'])->middleware('auth:api');
    }
);

Route::middleware('auth:api')->group(function () {
    Route::get('/categories', CategoryController::class);
    Route::post('/reserve', ReservationController::class);
    Route::get('chefs', ChefController::class);
    Route::get('/products', \App\Http\Controllers\ProductsController::class);
});
