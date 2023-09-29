<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $products = Product::paginate(3); 

    //     return view('product.index', compact('products'));
    // }

    public function index(Request $request)
    {
        $query = $request->input('q'); // Get the search query from the request
       
        // Initialize a query builder for products
        $productsQuery = Product::query();

        // Check if a search query is provided
        if ($query) {
            // Modify the query to filter products based on the search query
            $productsQuery->where('name', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%');
        }

        // dd($query);
       

        // Paginate the results
        $products = $productsQuery->paginate(3);

        return view('product.index', compact('products', 'query'));
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
