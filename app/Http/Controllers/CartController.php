<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CartAddRequest;
use Laravel\Prompts\Prompt;

use Validator;

class CartController extends Controller
{
    // Add a product to the cart
    public function add(CartAddRequest $request, Product $product)
    {
        // dd($request);
        // $product_id = Product::findOrFail($product->id);
        // dd($product_id);
        // $request->validate([
        //     'quantity' => 'required|integer|min:1',
        //     'product_id' => 'required|exists:products,id',
        // ]);

       

        // $validator = Validator::make($request->all(),[
        //     'quantity' => 'required|integer|min:1',
        //     'product_id' => 'required|exists:products,id',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([ 'message' => $validator->errors() ]);
        // }

        // dd($validator);
        // Get the authenticated user
        $user = auth()->user();

        // Check if the product is already in the user's cart
        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->first();


        if ($cartItem) {
            // Product is already in the cart, update quantity
            $cartItem->increment('quantity');
        } else {
            // Product is not in the cart, create a new cart item
            Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => $request->quantity,
            ]);
        }

        // dd($cartItem);

        // Redirect back to the product listing page or the cart view
        return redirect()->route('product.index')->with('success', 'Product added to cart.');
    }

    // Update the quantity of a product in the cart
    public function update(Product $product, Request $request)
    {
        // Get the authenticated user
        $user = auth()->user();

        // Validate the request data
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Find the cart item for the product
        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            // Update the quantity of the cart item
            $cartItem->update(['quantity' => $request->input('quantity')]);
        }

        // Redirect back to the cart view
        return redirect()->route('cart.index')->with('success', 'Cart updated.');
    }

    // Remove a product from the cart
    public function remove(Product $product)
    {
        // Get the authenticated user
        $user = auth()->user();

        // Find and delete the cart item for the product
        Cart::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->delete();

        // Redirect back to the cart view
        return redirect()->route('cart.index')->with('success', 'Product removed from cart.');
    }
}
