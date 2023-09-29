<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(3); 

        return view('product.index', compact('products'));
    }

    public function show($id)
    {
        // Fetch the product from the database based on the provided ID
        $product = Product::find($id);

        // Check if the product exists
        if (!$product) {
            // You can handle this case, for example, by showing a 404 error page
            abort(404);
        }

        // Return the product detail view with the product data
        return view('product.show', ['product' => $product]);
    }
}
