<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'img' => 'products/nike-air-max.jpg',
            'brand' => 'Nike',
            'title' => 'Nike Air Max',
            'rating' => 4.8,
            'reviews' => 250,
            'sellPrice' => 120.00,
            'orders' => '500',
            'mrp' => '150',
            'discount' => 20,
            'category' => 'men'
        ]);

        Product::create([
            'img' => 'products/adidas-ultraboost.jpg',
            'brand' => 'Adidas',
            'title' => 'Adidas Ultraboost',
            'rating' => 4.7,
            'reviews' => 180,
            'sellPrice' => 110.00,
            'orders' => '350',
            'mrp' => '140',
            'discount' => 21,
            'category' => 'women'
        ]);
    }
}