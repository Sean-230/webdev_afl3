<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $lowStockProducts = Product::where('stock', '<', 50)->where('stock', '>', 0)->count();
        $outOfStock = Product::where('stock', 0)->count();
        $totalOrders = Order::count();

        $recentProducts = Product::with('categories')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $recentOrders = Order::with('user')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalProducts',
            'lowStockProducts',
            'outOfStock',
            'totalOrders',
            'recentProducts',
            'recentOrders'
        ));
    }
}
