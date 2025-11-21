<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WarehouseController extends Controller
{
    public function index()
    {
        $products = Product::with('categories')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $categories = Category::orderBy('name')->get();

        return view('admin.warehouse', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categories' => 'required|array|min:1',
            'categories.*' => 'exists:categories,id',
            'image' => 'nullable|file|max:2048',
        ]);

        $product = new Product();
        $product->name = $validated['name'];
        $product->description = $validated['description'] ?? null;
        $product->price = $validated['price'];
        $product->stock = $validated['stock'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $product->image_path = 'storage/' . $path;
        }

        $product->save();
        $product->categories()->attach($validated['categories']);

        return redirect()->route('admin.warehouse')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categories' => 'required|array|min:1',
            'categories.*' => 'exists:categories,id',
            'image' => 'nullable|file|max:2048',
        ]);

        $product->name = $validated['name'];
        $product->description = $validated['description'] ?? null;
        $product->price = $validated['price'];
        $product->stock = $validated['stock'];

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image_path) {
                $oldPath = str_replace('storage/', '', $product->image_path);
                Storage::disk('public')->delete($oldPath);
            }
            $path = $request->file('image')->store('products', 'public');
            $product->image_path = 'storage/' . $path;
        }

        $product->save();
        $product->categories()->sync($validated['categories']);

        return redirect()->route('admin.warehouse')
            ->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy(Product $product)
    {
        if ($product->image_path) {
            $oldPath = str_replace('storage/', '', $product->image_path);
            Storage::disk('public')->delete($oldPath);
        }

        $product->categories()->detach();
        $product->delete();

        return redirect()->route('admin.warehouse')
            ->with('success', 'Produk berhasil dihapus!');
    }
}
