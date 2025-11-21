<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends \Illuminate\Routing\Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cart = $this->getOrCreateCart();
        $cartItems = $cart->items()->with('product')->get();
        $total = $cartItems->sum(fn($item) => $item->quantity * $item->price);

        return view('user.cart', compact('cartItems', 'total'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1|max:100'
        ]);

        $product = Product::findOrFail($validated['product_id']);
        
        // Check stock availability
        if ($product->stock < $validated['quantity']) {
            return redirect()->back()->with('error', 'Insufficient stock available.');
        }
        
        $cart = $this->getOrCreateCart();

        // Check if product already in cart
        $cartItem = $cart->items()->where('product_id', $validated['product_id'])->first();

        if ($cartItem) {
            // Check stock for updated quantity
            if ($product->stock < ($cartItem->quantity + $validated['quantity'])) {
                return redirect()->back()->with('error', 'Insufficient stock available.');
            }
            $cartItem->increment('quantity', $validated['quantity']);
        } else {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $validated['product_id'],
                'quantity' => $validated['quantity'],
                'price' => $product->price // Store price snapshot
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function add(Request $request, $productId)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1|max:100'
        ]);

        $product = Product::findOrFail($productId);
        
        // Check stock availability
        if ($product->stock < $validated['quantity']) {
            return redirect()->back()->with('error', 'Insufficient stock available.');
        }
        
        $cart = $this->getOrCreateCart();

        // Check if product already in cart
        $cartItem = $cart->items()->where('product_id', $productId)->first();

        if ($cartItem) {
            // Check stock for updated quantity
            if ($product->stock < ($cartItem->quantity + $validated['quantity'])) {
                return redirect()->back()->with('error', 'Insufficient stock available.');
            }
            $cartItem->increment('quantity', $validated['quantity']);
        } else {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $productId,
                'quantity' => $validated['quantity'],
                'price' => $product->price // Store price snapshot
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request, $cartItemId)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1|max:100'
        ]);

        $cartItem = CartItem::findOrFail($cartItemId);
        
        // Verify this cart item belongs to the user's cart
        if ($cartItem->cart->user_id !== Auth::id()) {
            abort(403);
        }

        // Check stock availability
        if ($cartItem->product->stock < $validated['quantity']) {
            return redirect()->route('cart.index')->with('error', 'Insufficient stock available.');
        }

        $cartItem->update($validated);

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
    }

    public function remove($cartItemId)
    {
        $cartItem = CartItem::findOrFail($cartItemId);
        
        // Verify this cart item belongs to the user's cart
        if ($cartItem->cart->user_id !== Auth::id()) {
            abort(403);
        }

        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from cart!');
    }

    public function clear()
    {
        $cart = $this->getOrCreateCart();
        $cart->items()->delete();

        return redirect()->route('cart.index')->with('success', 'Cart cleared!');
    }

    private function getOrCreateCart()
    {
        $cart = Cart::where('user_id', Auth::id())->first();

        if (!$cart) {
            $cart = Cart::create([
                'user_id' => Auth::id()
            ]);
        }

        return $cart;
    }
}
