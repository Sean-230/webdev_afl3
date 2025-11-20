<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access.');
        }

        // Optimized single query for product stats
        $productStats = DB::table('products')
            ->selectRaw('COUNT(*) as total, SUM(CASE WHEN stock < 50 THEN 1 ELSE 0 END) as low_stock, SUM(CASE WHEN stock = 0 THEN 1 ELSE 0 END) as out_of_stock')
            ->first();
        
        $totalOrders = Order::count();

        return view('admin.dashboard', [
            'totalProducts' => $productStats->total,
            'lowStockProducts' => $productStats->low_stock,
            'outOfStock' => $productStats->out_of_stock,
            'totalOrders' => $totalOrders
        ]);
    }

    public function warehouse()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access.');
        }

        $products = Product::with('categories')->orderBy('id')->paginate(20);
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
            'image' => 'nullable|sometimes|file',
            'categories' => 'required|array|min:1',
        ]);

        // Find the first available ID (reuse deleted IDs)
        $existingIds = Product::orderBy('id')->pluck('id')->toArray();
        $nextId = 1;
        foreach ($existingIds as $id) {
            if ($id == $nextId) {
                $nextId++;
            } else {
                break;
            }
        }

        // Handle image upload
        $imagePath = 'images/products/default.jpg';
        if ($request->hasFile('image')) {
            try {
                $image = $request->file('image');
                
                if (!$image->isValid()) {
                    throw new \Exception('Invalid image file uploaded.');
                }
                
                $extension = $image->getClientOriginalExtension();
                $imageName = $nextId . '.' . $extension;
                $destinationPath = public_path('images/products');
                
                // Ensure directory exists
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }
                
                // Move the uploaded file to the products folder
                $image->move($destinationPath, $imageName);
                $imagePath = 'images/products/' . $imageName;
                
                Log::info('Image uploaded successfully: ' . $imagePath);
            } catch (\Exception $e) {
                Log::error('Image upload failed: ' . $e->getMessage());
                return redirect()->back()->withErrors(['image' => 'Failed to upload image: ' . $e->getMessage()])->withInput();
            }
        }

        $product = Product::create([
            'id' => $nextId,
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'is_instock' => $validated['stock'] > 0,
            'image_path' => $imagePath,
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

    public function updateProduct(Request $request, $id)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|sometimes|file',
            'categories' => 'required|array|min:1',
        ]);

        $product = Product::findOrFail($id);

        // Handle image upload
        $imagePath = $product->image_path;
        if ($request->hasFile('image')) {
            try {
                $image = $request->file('image');
                
                if (!$image->isValid()) {
                    throw new \Exception('Invalid image file uploaded.');
                }
                
                $extension = $image->getClientOriginalExtension();
                $imageName = $product->id . '.' . $extension;
                $destinationPath = public_path('images/products');
                
                // Delete old image if it exists and is not the default
                if ($product->image_path && $product->image_path !== 'images/products/default.jpg') {
                    $oldImagePath = public_path($product->image_path);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                
                // Ensure directory exists
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }
                
                // Move the uploaded file to the products folder
                $image->move($destinationPath, $imageName);
                $imagePath = 'images/products/' . $imageName;
                
                Log::info('Image updated successfully: ' . $imagePath);
            } catch (\Exception $e) {
                Log::error('Image upload failed: ' . $e->getMessage());
                return redirect()->back()->withErrors(['image' => 'Failed to upload image: ' . $e->getMessage()])->withInput();
            }
        }

        $product->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'is_instock' => $validated['stock'] > 0,
            'image_path' => $imagePath,
        ]);

        $product->categories()->sync($validated['categories']);

        return redirect()->route('admin.warehouse')->with('success', 'Product updated successfully!');
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
