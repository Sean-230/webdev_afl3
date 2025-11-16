<?php

// database/seeders/CartSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\User;
use App\Models\Product;

class CartSeeder extends Seeder
{
    public function run()
    {
        $users = User::where('is_admin', false)->get();
        $products = Product::all();

        foreach ($users as $user) {
            $cart = Cart::create(['user_id' => $user->id, 'is_checked_out' => false]);
            // add 0-4 items
            $items = $products->random(rand(0,4));
            foreach ($items as $product) {
                CartItem::create([
                    'cart_id' => $cart->id,
                    'product_id' => $product->id,
                    'quantity' => rand(1,3),
                    'price' => $product->price,
                ]);
            }
        }
    }
}

