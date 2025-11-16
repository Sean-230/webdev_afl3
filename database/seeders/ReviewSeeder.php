<?php

// database/seeders/ReviewSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\User;
use App\Models\Product;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $products = Product::all();

        // create some reviews
        foreach ($products as $product) {
            $reviewCount = rand(0,5);
            for ($i = 0; $i < $reviewCount; $i++) {
                Review::factory()->create([
                    'product_id' => $product->id,
                    'user_id' => $users->random()->id,
                ]);
            }
        }
    }
}
