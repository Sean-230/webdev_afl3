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
        $name = $this->faker->word() . ' ' . $this->faker->randomElement(['Ice','Mix','Cone','Cup']);
        return [
            'name' => ucfirst($name),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 200),
            'sku' => strtoupper(Str::random(8)),
            'image_path' => 'images/products/' . $this->faker->randomElement(['ice-cream-1.jpg', 'ice-cream-2.jpg', 'ice-cream-3.jpg', 'ice-cream-4.jpg', 'ice-cream-5.jpg']),
            'is_active' => true,
        ];
    }
}
