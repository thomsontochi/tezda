<?php

namespace App\Models;

use App\Models\Cart;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected static function newFactory(): Factory
    {
        return ProductFactory::new();
    }

    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
}
