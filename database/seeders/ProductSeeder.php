<?php
// database/seeders/ProductSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();

        // create 20 products
        Product::factory()->count(20)->create()->each(function ($product) use ($categories) {
            // attach 1-2 random categories to each product
            $product->categories()->attach($categories->random(rand(1,2))->pluck('id')->toArray());
        });
    }
}
