<?php
// database/factories/ProductFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = \App\Models\Product::class;

    public function definition()
    {
        // sample categories
        $categories = ['Es Krim','Bubuk Es Krim','Cone','Cup','Sendok','Tutup'];

        return [
            'name' => $this->faker->unique()->words(3, true),
            'category' => $this->faker->randomElement($categories),
            'price' => $this->faker->numberBetween(1000, 200000),
            'image_path' => 'images/placeholder.jpg', // replace with your images
        ];
    }
}
