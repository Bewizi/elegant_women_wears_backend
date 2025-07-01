<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/storeProduct', [ProductController::class, 'store']);

Route::get('/allProducts', [ProductController::class, 'index']);

Route::get('/getProduct/{id}', [ProductController::class, 'show']);

Route::get('/products', [ProductController::class, 'getThree']);

