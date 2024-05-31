<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
    ]);

    $product = Product::create($validatedData);
    return redirect()->route('products.index')->with('success', 'Product created successfully!');
}

    
}
