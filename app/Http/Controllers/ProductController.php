<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'required|string',
            'description' => 'required|string',
            'details' => 'required|string',
            'rating' => 'nullable|numeric'
        ]);

        $product = Product::create($validated);
        return response()->json($product, 201);
    }

    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        $product = Product::getProductsById($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($product);

    }

    public function getThree()
    {
        $products = Product::take(3)->get();

        return response()->json($products);
    }
}
