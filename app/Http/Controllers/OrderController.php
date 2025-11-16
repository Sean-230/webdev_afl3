<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())
            ->with(['items.product'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        
        return view('user.orders', compact('orders'));
    }

    public function checkout(Request $request)
    {
        $cart = Cart::where('user_id', Auth::id())->first();
        
        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty');
        }

        // Check stock availability
        foreach ($cart->items as $item) {
            if ($item->product->stock < $item->quantity) {
                return redirect()->route('cart.index')
                    ->with('error', "Insufficient stock for {$item->product->name}");
            }
        }

        DB::beginTransaction();
        try {
            // Calculate total
            $totalAmount = $cart->items->sum(fn($item) => $item->quantity * $item->price);
            // Create order
            $order = Order::create([
                'user_id' => Auth::id(),
                'total_amount' => $totalAmount,
                'status' => 'pending',
                'notes' => $request->notes
            ]);

            // Create order items and decrement stock
            foreach ($cart->items as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'price' => $item->price
                ]);

                // Decrement stock
                $product = $item->product;
                $product->stock -= $item->quantity;
                $product->is_instock = $product->stock > 0;
                $product->save();
            }

            // Clear cart
            $cart->items()->delete();

            DB::commit();
            return redirect()->route('orders.index')
                ->with('success', 'Order placed successfully! Order #' . $order->id);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('cart.index')
                ->with('error', 'Failed to process order. Please try again.');
        }
    }
}
