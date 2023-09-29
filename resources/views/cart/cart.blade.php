<!-- resources/views/cart.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-semibold">Shopping Cart</h1>

        @if (count($cartItems) > 0)
            <table class="w-full mt-4">
                <thead>
                    <tr>
                        <th class="text-left">Product</th>
                        <th class="text-left">Quantity</th>
                        <th class="text-left">Price</th>
                        <th class="text-left">Subtotal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>
                                <form action="{{ route('cart.update', $item->product->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1">
                                    <button type="submit" class="text-blue-600">Update</button>
                                </form>
                            </td>
                            <td>${{ $item->product->price }}</td>
                            <td>${{ $item->subtotal }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $item->product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                <p class="text-lg font-semibold">Total: ${{ $total }}</p>
            </div>

            <div class="mt-6">
                <a href="{{ route('checkout.index') }}" class="btn btn-primary">Proceed to Checkout</a>
            </div>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
@endsection
