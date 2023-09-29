<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $products = [
        //     [
        //         'name' => 'Product 1',
        //         'description' => 'Description for Product 1',
        //         'price' => 19.99,
        //         'image' => 'product1.jpg',
        //     ],
        //     // Add more products as needed
        // ];
    
        // foreach ($products as $product) {
        //     Product::create($product);
        // }

         // Clear existing data from the "products" table
         Product::truncate();

         // Create sample products using the factory and Faker
        //  factory(Product::class, 20)->create();

         Product::factory()->count(30)->create();
    }
}
