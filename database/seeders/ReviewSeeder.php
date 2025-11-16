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
        $users = User::where('is_admin', false)->get();
        $products = Product::all();

        $reviewTexts = [
            5 => [
                'Excellent product! Highly recommended for ice cream shops.',
                'Best quality I have found. Will definitely order again!',
                'Amazing taste and texture. Customers love it!',
                'Perfect for our business. Great value for money.',
                'Outstanding quality and fast delivery. Very satisfied!',
                'Absolutely fantastic! Our customers can\'t get enough of this.',
                'Premium quality at a reasonable price. Very impressed!',
                'This exceeded all my expectations. 10/10 would recommend!',
                'Game changer for our ice cream parlor. Simply the best!',
                'Incredible flavor and consistency. Worth every penny!',
                'Five stars all the way! Quality is unmatched.',
                'Been using this for months now. Never disappoints!',
            ],
            4 => [
                'Very good product. Just wish the packaging was better.',
                'Great quality, though a bit pricey.',
                'Good product overall. Delivery was quick.',
                'Nice quality ice cream. Customers enjoy it.',
                'Solid product. Would recommend to other businesses.',
                'Really good, but there\'s room for improvement.',
                'Happy with this purchase. Fast shipping too!',
                'Good value for money. Will order again.',
                'Quality is consistent. Minor issues with packaging.',
                'Very satisfied overall. Just a tad expensive.',
                'Great product! Slightly smaller quantity than expected.',
            ],
            3 => [
                'Decent product. Nothing special but does the job.',
                'Average quality. Expected a bit more for the price.',
                'It\'s okay. Might try other brands next time.',
                'Fair product. Could be better.',
                'Meets basic expectations. Nothing more, nothing less.',
                'Acceptable quality. Not amazing but not terrible either.',
                'Middle of the road. Does what it says.',
                'Fine for occasional use. Wouldn\'t make it my go-to.',
            ],
            2 => [
                'Not very impressed. Quality could be improved.',
                'Below expectations. Packaging arrived damaged.',
                'Disappointed with the flavor. Expected better.',
                'Not worth the price in my opinion.',
                'Had high hopes but it fell short.',
            ],
            1 => [
                'Disappointed with the quality.',
                'Would not recommend. Very poor quality.',
                'Waste of money. Returning this.',
            ],
        ];

        $usedCombinations = [];

        foreach ($products as $product) {
            // Create 3-8 reviews per product
            $reviewCount = rand(3, 8);
            $attempts = 0;
            $created = 0;
            
            while ($created < $reviewCount && $attempts < $reviewCount * 3) {
                $attempts++;
                $user = $users->random();
                $combination = $product->id . '-' . $user->id;
                
                // Skip if this user already reviewed this product
                if (in_array($combination, $usedCombinations)) {
                    continue;
                }
                
                $usedCombinations[] = $combination;
                
                // Weighted random rating (more positive reviews)
                $rand = rand(1, 100);
                if ($rand <= 50) {
                    $rating = 5;
                } elseif ($rand <= 80) {
                    $rating = 4;
                } elseif ($rand <= 92) {
                    $rating = 3;
                } elseif ($rand <= 98) {
                    $rating = 2;
                } else {
                    $rating = 1;
                }
                
                $comments = $reviewTexts[$rating];
                
                Review::create([
                    'product_id' => $product->id,
                    'user_id' => $user->id,
                    'rating' => $rating,
                    'comment' => $comments[array_rand($comments)],
                ]);
                
                $created++;
            }
        }
    }
}
