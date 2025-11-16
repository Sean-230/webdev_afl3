<?php

// database/seeders/CategorySeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Ice Cream',
            'Ice Cream Powder',
            'Cones',
            'Cups',
            'Spoons',
            'Lids',
            'Toppings',
            'Syrups'
        ];
        
        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
