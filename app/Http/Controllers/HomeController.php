<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get random featured products
        $products = Product::inRandomOrder()->take(8)->get();

        // Get high-rated reviews (rating >= 4)
        $reviews = Review::with(['user', 'product'])
            ->where('rating', '>=', 4)
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('user.home', compact('products', 'reviews'));
    }
}
