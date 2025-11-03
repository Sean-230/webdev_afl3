<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        // Categories for the ice cream store
        $categories = ['Es Krim', 'Bubuk Es Krim', 'Cone', 'Cup', 'Sendok', 'Tutup'];

        return [
            'image_path' => 'images/' . $this->faker->word() . '.jpg',
            'name' => $this->faker->words(2, true), 
            'price' => $this->faker->randomFloat(2, 5000, 100000), 
            'category' => $this->faker->randomElement($categories),
        ];
    }
}
