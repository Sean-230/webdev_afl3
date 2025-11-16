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
            'is_active' => true,
        ];
    }
}
