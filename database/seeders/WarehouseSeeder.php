<?php

// database/seeders/WarehouseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warehouse;
use App\Models\Product;

class WarehouseSeeder extends Seeder
{
    public function run()
    {
        $warehouse = Warehouse::factory()->create(['location' => 'Main Warehouse']);
        $products = Product::all();

        foreach ($products as $product) {
            $warehouse->products()->attach($product->id, [
                'quantity' => rand(0, 200),
                'batch_number' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

