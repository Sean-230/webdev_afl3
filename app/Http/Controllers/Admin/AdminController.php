<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access.');
        }

        $totalProducts = Product::count();
        $lowStockProducts = Product::where('stock', '<', 50)->count();
        $outOfStock = Product::where('stock', 0)->count();
        $totalOrders = Order::count();

        return view('admin.dashboard', compact('totalProducts', 'lowStockProducts', 'outOfStock', 'totalOrders'));
    }

    public function warehouse()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access.');
        }

        $products = Product::with('categories')->orderBy('name')->paginate(20);
        $categories = Category::all();

        return view('admin.warehouse', compact('products', 'categories'));
    }

    public function storeProduct(Request $request)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access.');
        }
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'is_instock' => 'boolean',
            'image_path' => 'nullable|string',
            'categories' => 'required|array',
        ]);

        $product = Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'is_instock' => $request->has('is_instock'),
            'image_path' => $validated['image_path'] ?? 'images/products/default.jpg',
        ]);

        $product->categories()->attach($validated['categories']);

        return redirect()->route('admin.warehouse')->with('success', 'Product added successfully!');
    }

    public function updateStock(Request $request, $id)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access.');
        }

        $validated = $request->validate([
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'stock' => $validated['stock'],
            'is_instock' => $validated['stock'] > 0,
        ]);

        return redirect()->back()->with('success', 'Stock updated successfully!');
    }

    public function deleteProduct($id)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access.');
        }

        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.warehouse')->with('success', 'Product deleted successfully!');
    }

    public function orders()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access.');
        }

        $orders = Order::with(['user', 'items.product'])->latest()->paginate(20);

        return view('admin.orders', compact('orders'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access.');
        }
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,processing,completed,cancelled',
        ]);

        $order = Order::findOrFail($id);
        $order->update(['status' => $validated['status']]);

        return redirect()->back()->with('success', 'Order status updated!');
    }
}
