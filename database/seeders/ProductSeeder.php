<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            // 🍦 Es Krim
            [
                'image_path' => 'images/eskrim_vanilla.jpg',
                'name' => 'Es Krim Vanilla',
                'price' => 12000,
                'category' => 'Es Krim',
            ],
            [
                'image_path' => 'images/eskrim_coklat.jpg',
                'name' => 'Es Krim Coklat',
                'price' => 13000,
                'category' => 'Es Krim',
            ],
            [
                'image_path' => 'images/eskrim_strawberry.jpg',
                'name' => 'Es Krim Strawberry',
                'price' => 12500,
                'category' => 'Es Krim',
            ],
            [
                'image_path' => 'images/eskrim_matcha.jpg',
                'name' => 'Es Krim Matcha',
                'price' => 14000,
                'category' => 'Es Krim',
            ],
            [
                'image_path' => 'images/eskrim_durian.jpg',
                'name' => 'Es Krim Durian',
                'price' => 15000,
                'category' => 'Es Krim',
            ],

            // 🧂 Bubuk Es Krim
            [
                'image_path' => 'images/bubuk_vanilla.jpg',
                'name' => 'Bubuk Es Krim Vanilla 1kg',
                'price' => 85000,
                'category' => 'Bubuk Es Krim',
            ],
            [
                'image_path' => 'images/bubuk_coklat.jpg',
                'name' => 'Bubuk Es Krim Coklat 1kg',
                'price' => 90000,
                'category' => 'Bubuk Es Krim',
            ],
            [
                'image_path' => 'images/bubuk_strawberry.jpg',
                'name' => 'Bubuk Es Krim Strawberry 1kg',
                'price' => 87000,
                'category' => 'Bubuk Es Krim',
            ],
            [
                'image_path' => 'images/bubuk_matcha.jpg',
                'name' => 'Bubuk Es Krim Matcha 1kg',
                'price' => 95000,
                'category' => 'Bubuk Es Krim',
            ],
            [
                'image_path' => 'images/bubuk_mango.jpg',
                'name' => 'Bubuk Es Krim Mangga 1kg',
                'price' => 88000,
                'category' => 'Bubuk Es Krim',
            ],

            // 🍦 Cone
            [
                'image_path' => 'images/cone_small.jpg',
                'name' => 'Cone Kecil (Isi 50)',
                'price' => 25000,
                'category' => 'Cone',
            ],
            [
                'image_path' => 'images/cone_medium.jpg',
                'name' => 'Cone Sedang (Isi 50)',
                'price' => 30000,
                'category' => 'Cone',
            ],
            [
                'image_path' => 'images/cone_large.jpg',
                'name' => 'Cone Besar (Isi 50)',
                'price' => 35000,
                'category' => 'Cone',
            ],
            [
                'image_path' => 'images/cone_choco.jpg',
                'name' => 'Cone Coklat (Isi 50)',
                'price' => 40000,
                'category' => 'Cone',
            ],
            [
                'image_path' => 'images/cone_rainbow.jpg',
                'name' => 'Cone Rainbow (Isi 50)',
                'price' => 42000,
                'category' => 'Cone',
            ],

            // 🧁 Cup
            [
                'image_path' => 'images/cup_small.jpg',
                'name' => 'Cup Kecil 100ml (Isi 50)',
                'price' => 20000,
                'category' => 'Cup',
            ],
            [
                'image_path' => 'images/cup_medium.jpg',
                'name' => 'Cup Sedang 200ml (Isi 50)',
                'price' => 25000,
                'category' => 'Cup',
            ],
            [
                'image_path' => 'images/cup_large.jpg',
                'name' => 'Cup Besar 300ml (Isi 50)',
                'price' => 30000,
                'category' => 'Cup',
            ],
            [
                'image_path' => 'images/cup_paper.jpg',
                'name' => 'Cup Kertas 150ml (Isi 50)',
                'price' => 28000,
                'category' => 'Cup',
            ],
            [
                'image_path' => 'images/cup_clear.jpg',
                'name' => 'Cup Bening 250ml (Isi 50)',
                'price' => 27000,
                'category' => 'Cup',
            ],

            // 🥄 Sendok
            [
                'image_path' => 'images/sendok_plastik_kecil.jpg',
                'name' => 'Sendok Plastik Kecil (Isi 100)',
                'price' => 15000,
                'category' => 'Sendok',
            ],
            [
                'image_path' => 'images/sendok_plastik_besar.jpg',
                'name' => 'Sendok Plastik Besar (Isi 100)',
                'price' => 17000,
                'category' => 'Sendok',
            ],
            [
                'image_path' => 'images/sendok_kayu.jpg',
                'name' => 'Sendok Kayu (Isi 100)',
                'price' => 22000,
                'category' => 'Sendok',
            ],
            [
                'image_path' => 'images/sendok_warna.jpg',
                'name' => 'Sendok Warna-warni (Isi 100)',
                'price' => 18000,
                'category' => 'Sendok',
            ],
            [
                'image_path' => 'images/sendok_mini.jpg',
                'name' => 'Sendok Mini (Isi 100)',
                'price' => 16000,
                'category' => 'Sendok',
            ],

            // 🧢 Tutup
            [
                'image_path' => 'images/tutup_small.jpg',
                'name' => 'Tutup Cup 100ml (Isi 50)',
                'price' => 10000,
                'category' => 'Tutup',
            ],
            [
                'image_path' => 'images/tutup_medium.jpg',
                'name' => 'Tutup Cup 200ml (Isi 50)',
                'price' => 12000,
                'category' => 'Tutup',
            ],
            [
                'image_path' => 'images/tutup_large.jpg',
                'name' => 'Tutup Cup 300ml (Isi 50)',
                'price' => 14000,
                'category' => 'Tutup',
            ],
            [
                'image_path' => 'images/tutup_flat.jpg',
                'name' => 'Tutup Datar (Isi 50)',
                'price' => 11000,
                'category' => 'Tutup',
            ],
            [
                'image_path' => 'images/tutup_dome.jpg',
                'name' => 'Tutup Dome (Isi 50)',
                'price' => 13000,
                'category' => 'Tutup',
            ],
        ]);
    }
}
