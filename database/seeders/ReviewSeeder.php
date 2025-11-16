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
        $products = Product::take(10)->get(); // Only review some products

        $reviewTexts = [
            5 => [
                'Excellent product! Highly recommended for ice cream shops.',
                'Best quality I have found. Will definitely order again!',
                'Amazing taste and texture. Customers love it!',
                'Perfect for our business. Great value for money.',
                'Outstanding quality and fast delivery. Very satisfied!',
            ],
            4 => [
                'Very good product. Just wish the packaging was better.',
                'Great quality, though a bit pricey.',
                'Good product overall. Delivery was quick.',
                'Nice quality ice cream. Customers enjoy it.',
                'Solid product. Would recommend to other businesses.',
            ],
            3 => [
                'Decent product. Nothing special but does the job.',
                'Average quality. Expected a bit more for the price.',
                'It\'s okay. Might try other brands next time.',
                'Fair product. Could be better.',
            ],
            2 => [
                'Not very impressed. Quality could be improved.',
                'Below expectations. Packaging arrived damaged.',
            ],
            1 => [
                'Disappointed with the quality.',
            ],
        ];

        foreach ($products as $product) {
            // Create 2-4 reviews per product
            $reviewCount = rand(2, 4);
            
            for ($i = 0; $i < $reviewCount; $i++) {
                $rating = rand(3, 5); // Mostly positive reviews
                $comments = $reviewTexts[$rating];
                
                Review::create([
                    'product_id' => $product->id,
                    'user_id' => $users->random()->id,
                    'rating' => $rating,
                    'comment' => $comments[array_rand($comments)],
                ]);
            }
        }
    }
}
