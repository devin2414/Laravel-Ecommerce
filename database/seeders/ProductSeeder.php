<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Chocolate Cake',
            'description' => 'Delicious chocolate cake.',
            'price' => 90.00,
            'category' => 'Cake',
            'image' => 'images/chocolate_cake.jpg', // Pastikan path ini sesuai dengan yang Anda simpan
            'stock' => 10,
        ]);

        Product::create([
            'name' => 'Red Velvet Cake',
            'description' => 'Rich red velvet cake.',
            'price' => 120.00,
            'category' => 'Cake',
            'image' => 'images/red_velvet_cake.jpg',
            'stock' => 5,
        ]);
    }
}
