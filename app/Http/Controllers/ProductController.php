<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //d
    }

   public function create()
{
    $categories = Category::all();
    return view('create', compact('categories'));
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id'
    ]);

    Product::create($request->all());

    return redirect()->route('dashboard')
                     ->with('success', 'Product created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
