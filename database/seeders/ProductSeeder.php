<?php
// database/seeders/ProductSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();
        
        // Ice Cream Products
        $products = [
            // Ice Cream (10 products)
            [
                'name' => 'Vanilla Ice Cream 5L',
                'description' => 'Premium vanilla ice cream in bulk packaging. Perfect for ice cream shops and restaurants. Made with real vanilla beans.',
                'price' => 85000,
                'sku' => 'IC-VAN-5L',
                'is_active' => true,
                'image_path' => 'images/products/1.jpg',
                'categories' => ['Ice Cream']
            ],
            [
                'name' => 'Chocolate Ice Cream 5L',
                'description' => 'Rich and creamy chocolate ice cream. Made with premium cocoa for authentic chocolate taste.',
                'price' => 90000,
                'sku' => 'IC-CHO-5L',
                'is_active' => true,
                'image_path' => 'images/products/2.jpg',
                'categories' => ['Ice Cream']
            ],
            [
                'name' => 'Strawberry Ice Cream 5L',
                'description' => 'Fresh strawberry flavored ice cream with real fruit pieces. Sweet and refreshing.',
                'price' => 88000,
                'sku' => 'IC-STR-5L',
                'is_active' => true,
                'image_path' => 'images/products/3.jpg',
                'categories' => ['Ice Cream']
            ],
            [
                'name' => 'Mango Ice Cream 5L',
                'description' => 'Tropical mango ice cream made with real mango puree. Perfect for summer.',
                'price' => 92000,
                'sku' => 'IC-MAN-5L',
                'is_active' => true,
                'image_path' => 'images/products/4.jpg',
                'categories' => ['Ice Cream']
            ],
            [
                'name' => 'Mint Chocolate Chip 5L',
                'description' => 'Refreshing mint ice cream with chocolate chips. Cool and delicious.',
                'price' => 95000,
                'sku' => 'IC-MIN-5L',
                'is_active' => true,
                'image_path' => 'images/products/5.jpg',
                'categories' => ['Ice Cream']
            ],
            [
                'name' => 'Cookies & Cream 5L',
                'description' => 'Vanilla ice cream loaded with crushed chocolate cookies. A customer favorite.',
                'price' => 98000,
                'sku' => 'IC-COO-5L',
                'is_active' => true,
                'image_path' => 'images/products/6.jpg',
                'categories' => ['Ice Cream']
            ],
            [
                'name' => 'Matcha Green Tea 5L',
                'description' => 'Authentic Japanese matcha ice cream. Rich green tea flavor with slight bitterness.',
                'price' => 105000,
                'sku' => 'IC-MAT-5L',
                'is_active' => true,
                'image_path' => 'images/products/7.jpg',
                'categories' => ['Ice Cream']
            ],
            [
                'name' => 'Salted Caramel 5L',
                'description' => 'Sweet and salty caramel ice cream. Perfect balance of flavors.',
                'price' => 100000,
                'sku' => 'IC-SAL-5L',
                'is_active' => true,
                'image_path' => 'images/products/8.jpg',
                'categories' => ['Ice Cream']
            ],
            [
                'name' => 'Coffee Ice Cream 5L',
                'description' => 'Bold coffee flavored ice cream made with real coffee beans. Great for coffee lovers.',
                'price' => 97000,
                'sku' => 'IC-COF-5L',
                'is_active' => true,
                'image_path' => 'images/products/9.jpg',
                'categories' => ['Ice Cream']
            ],
            [
                'name' => 'Durian Ice Cream 5L',
                'description' => 'Premium durian ice cream for durian lovers. Authentic Musang King flavor.',
                'price' => 125000,
                'sku' => 'IC-DUR-5L',
                'is_active' => true,
                'image_path' => 'images/products/10.jpg',
                'categories' => ['Ice Cream']
            ],
            
            // Ice Cream Powder (6 products)
            [
                'name' => 'Chocolate Soft Serve Mix 1kg',
                'description' => 'Professional grade soft serve ice cream powder. Just add water and freeze. Makes approximately 5 liters.',
                'price' => 125000,
                'sku' => 'PWD-CHO-1K',
                'is_active' => true,
                'image_path' => 'images/products/11.jpg',
                'categories' => ['Ice Cream Powder']
            ],
            [
                'name' => 'Vanilla Soft Serve Mix 1kg',
                'description' => 'Premium vanilla soft serve powder mix. Easy to prepare, perfect consistency.',
                'price' => 120000,
                'sku' => 'PWD-VAN-1K',
                'is_active' => true,
                'image_path' => 'images/products/12.jpg',
                'categories' => ['Ice Cream Powder']
            ],
            [
                'name' => 'Strawberry Soft Serve Mix 1kg',
                'description' => 'Delicious strawberry flavored soft serve powder. Natural fruit flavor.',
                'price' => 128000,
                'sku' => 'PWD-STR-1K',
                'is_active' => true,
                'image_path' => 'images/products/13.jpg',
                'categories' => ['Ice Cream Powder']
            ],
            [
                'name' => 'Matcha Soft Serve Mix 1kg',
                'description' => 'Premium Japanese matcha powder for soft serve. Authentic green tea taste.',
                'price' => 145000,
                'sku' => 'PWD-MAT-1K',
                'is_active' => true,
                'image_path' => 'images/products/14.jpg',
                'categories' => ['Ice Cream Powder']
            ],
            [
                'name' => 'Taro Soft Serve Mix 1kg',
                'description' => 'Popular taro flavored soft serve powder. Purple and creamy.',
                'price' => 135000,
                'sku' => 'PWD-TAR-1K',
                'is_active' => true,
                'image_path' => 'images/products/15.jpg',
                'categories' => ['Ice Cream Powder']
            ],
            [
                'name' => 'Mango Soft Serve Mix 1kg',
                'description' => 'Tropical mango soft serve powder. Refreshing and fruity.',
                'price' => 132000,
                'sku' => 'PWD-MAN-1K',
                'is_active' => true,
                'image_path' => 'images/products/16.jpg',
                'categories' => ['Ice Cream Powder']
            ],
            
            // Cones (5 products)
            [
                'name' => 'Wafer Cones Pack of 144',
                'description' => 'Classic wafer cones. Crispy and fresh. Perfect for single scoop servings.',
                'price' => 65000,
                'sku' => 'CON-WAF-144',
                'is_active' => true,
                'image_path' => 'images/products/17.jpg',
                'categories' => ['Cones']
            ],
            [
                'name' => 'Sugar Cones Pack of 144',
                'description' => 'Premium sugar cones with sweet flavor. Sturdy and delicious.',
                'price' => 75000,
                'sku' => 'CON-SUG-144',
                'is_active' => true,
                'image_path' => 'images/products/18.jpg',
                'categories' => ['Cones']
            ],
            [
                'name' => 'Cake Cones Pack of 144',
                'description' => 'Traditional cake cones. Light and crispy texture.',
                'price' => 70000,
                'sku' => 'CON-CAK-144',
                'is_active' => true,
                'image_path' => 'images/products/19.jpg',
                'categories' => ['Cones']
            ],
            [
                'name' => 'Chocolate Wafer Cones Pack of 144',
                'description' => 'Chocolate flavored wafer cones. Extra tasty and aromatic.',
                'price' => 78000,
                'sku' => 'CON-CHO-144',
                'is_active' => true,
                'image_path' => 'images/products/20.jpg',
                'categories' => ['Cones']
            ],
            [
                'name' => 'Jumbo Wafer Cones Pack of 100',
                'description' => 'Extra large wafer cones for multiple scoops. Professional size.',
                'price' => 85000,
                'sku' => 'CON-JUM-100',
                'is_active' => true,
                'image_path' => 'images/products/21.jpg',
                'categories' => ['Cones']
            ],
            
            // Cups (4 products)
            [
                'name' => 'Paper Cups 8oz (100pcs)',
                'description' => 'Disposable paper cups for ice cream. Food grade, leak-proof.',
                'price' => 45000,
                'sku' => 'CUP-PAP-8OZ',
                'is_active' => true,
                'image_path' => 'images/products/22.jpg',
                'categories' => ['Cups']
            ],
            [
                'name' => 'Plastic Cups 12oz (100pcs)',
                'description' => 'Clear plastic cups with lids. Perfect for takeaway orders.',
                'price' => 55000,
                'sku' => 'CUP-PLA-12OZ',
                'is_active' => true,
                'image_path' => 'images/products/23.jpg',
                'categories' => ['Cups']
            ],
            [
                'name' => 'Premium Paper Cups 16oz (50pcs)',
                'description' => 'Large premium paper cups with beautiful design. Perfect for sundaes.',
                'price' => 62000,
                'sku' => 'CUP-PRE-16OZ',
                'is_active' => true,
                'image_path' => 'images/products/24.jpg',
                'categories' => ['Cups']
            ],
            [
                'name' => 'Eco-Friendly Cups 10oz (100pcs)',
                'description' => 'Biodegradable cups made from sustainable materials. Environmentally friendly.',
                'price' => 68000,
                'sku' => 'CUP-ECO-10OZ',
                'is_active' => true,
                'image_path' => 'images/products/25.jpg',
                'categories' => ['Cups']
            ],
            
            // Spoons (3 products)
            [
                'name' => 'Wooden Spoons (500pcs)',
                'description' => 'Eco-friendly wooden spoons. Biodegradable and sturdy.',
                'price' => 35000,
                'sku' => 'SPO-WOO-500',
                'is_active' => true,
                'image_path' => 'images/products/26.jpg',
                'categories' => ['Spoons']
            ],
            [
                'name' => 'Plastic Spoons (500pcs)',
                'description' => 'Disposable plastic spoons. Food grade material.',
                'price' => 28000,
                'sku' => 'SPO-PLA-500',
                'is_active' => true,
                'image_path' => 'images/products/27.jpg',
                'categories' => ['Spoons']
            ],
            [
                'name' => 'Colorful Plastic Spoons (500pcs)',
                'description' => 'Assorted colored plastic spoons. Fun and vibrant for parties.',
                'price' => 32000,
                'sku' => 'SPO-COL-500',
                'is_active' => true,
                'image_path' => 'images/products/28.jpg',
                'categories' => ['Spoons']
            ],
            
            // Toppings (6 products)
            [
                'name' => 'Chocolate Sprinkles 1kg',
                'description' => 'Colorful chocolate sprinkles for ice cream decoration. Kids love it!',
                'price' => 48000,
                'sku' => 'TOP-SPR-1K',
                'is_active' => true,
                'image_path' => 'images/products/29.jpg',
                'categories' => ['Toppings']
            ],
            [
                'name' => 'Crushed Oreo 1kg',
                'description' => 'Premium crushed Oreo cookies. Perfect topping for any ice cream.',
                'price' => 85000,
                'sku' => 'TOP-ORE-1K',
                'is_active' => true,
                'image_path' => 'images/products/30.jpg',
                'categories' => ['Toppings']
            ],
            [
                'name' => 'Mochi Bits 500g',
                'description' => 'Chewy mochi pieces in assorted flavors. Trendy topping choice.',
                'price' => 95000,
                'sku' => 'TOP-MOC-500G',
                'is_active' => true,
                'image_path' => 'images/products/31.jpg',
                'categories' => ['Toppings']
            ],
            [
                'name' => 'Rainbow Sprinkles 1kg',
                'description' => 'Vibrant rainbow colored sprinkles. Makes ice cream more attractive.',
                'price' => 45000,
                'sku' => 'TOP-RAI-1K',
                'is_active' => true,
                'image_path' => 'images/products/32.jpg',
                'categories' => ['Toppings']
            ],
            [
                'name' => 'Crushed Nuts Mix 1kg',
                'description' => 'Mixed crushed nuts including almonds, peanuts, and cashews. Healthy topping.',
                'price' => 125000,
                'sku' => 'TOP-NUT-1K',
                'is_active' => true,
                'image_path' => 'images/products/33.jpg',
                'categories' => ['Toppings']
            ],
            [
                'name' => 'Mini Marshmallows 500g',
                'description' => 'Soft and fluffy mini marshmallows. Great for sundaes.',
                'price' => 42000,
                'sku' => 'TOP-MAR-500G',
                'is_active' => true,
                'image_path' => 'images/products/34.jpg',
                'categories' => ['Toppings']
            ],
            
            // Syrups (5 products)
            [
                'name' => 'Chocolate Syrup 2L',
                'description' => 'Rich chocolate syrup for drizzling. Perfect consistency, not too sweet.',
                'price' => 68000,
                'sku' => 'SYR-CHO-2L',
                'is_active' => true,
                'image_path' => 'images/products/35.jpg',
                'categories' => ['Syrups']
            ],
            [
                'name' => 'Caramel Syrup 2L',
                'description' => 'Sweet and buttery caramel syrup. Premium quality.',
                'price' => 72000,
                'sku' => 'SYR-CAR-2L',
                'is_active' => true,
                'image_path' => 'images/products/36.jpg',
                'categories' => ['Syrups']
            ],
            [
                'name' => 'Strawberry Syrup 2L',
                'description' => 'Fruity strawberry syrup with natural flavor. Vibrant color.',
                'price' => 65000,
                'sku' => 'SYR-STR-2L',
                'is_active' => true,
                'image_path' => 'images/products/37.jpg',
                'categories' => ['Syrups']
            ],
            [
                'name' => 'Blueberry Syrup 2L',
                'description' => 'Tangy blueberry syrup. Perfect for creating colorful ice cream creations.',
                'price' => 70000,
                'sku' => 'SYR-BLU-2L',
                'is_active' => true,
                'image_path' => 'images/products/38.jpg',
                'categories' => ['Syrups']
            ],
            [
                'name' => 'Vanilla Syrup 2L',
                'description' => 'Classic vanilla syrup. Great for enhancing vanilla ice cream.',
                'price' => 63000,
                'sku' => 'SYR-VAN-2L',
                'is_active' => true,
                'image_path' => 'images/products/39.jpg',
                'categories' => ['Syrups']
            ],
        ];

        foreach ($products as $productData) {
            $categoryNames = $productData['categories'];
            unset($productData['categories']);
            
            $product = Product::create($productData);
            
            // Attach categories
            foreach ($categoryNames as $categoryName) {
                $category = $categories->where('name', $categoryName)->first();
                if ($category) {
                    $product->categories()->attach($category->id);
                }
            }
        }
    }
}
