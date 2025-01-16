<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show($category)
    {
        $products = Product::where('category', $category)->get();
        return view('shop.category', compact('products', 'category'));
    }
}