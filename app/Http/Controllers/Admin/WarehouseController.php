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
            $product->image = $path;
        }

        $product->save();
        $product->categories()->attach($validated['categories']);

        return redirect()->route('admin.warehouse.index')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'stock' => 'required|integer|min:0',
        ]);

        $product->update(['stock' => $validated['stock']]);

        return redirect()->route('admin.warehouse.index')
            ->with('success', 'Stok berhasil diperbarui!');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->categories()->detach();
        $product->delete();

        return redirect()->route('admin.warehouse.index')
            ->with('success', 'Produk berhasil dihapus!');
    }
}
