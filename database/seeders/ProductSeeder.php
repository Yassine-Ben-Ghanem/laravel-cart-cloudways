<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'iPhone 12',
                'details' => 'Every iPhone 12 (PRODUCT)RED purchase now contributes directly to the Global Fund to combat COVID‑19.',
                'description' => 'We encourage you to re‑use your current USB‑A to Lightning cables, power adapters and headphones, which are compatible with this iPhone model. But if you need any new Apple power adapters or headphones, they are available for purchase.',
                'brand' => 'Apple',
                'price' => 699,
                'shipping_cost' => 20,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'iPhone 14 Pro',
                'details' => 'We encourage you to re‑use your current USB‑A to Lightning cables, power adapters, and headphones, which are compatible with these iPhone models. But if you need any new Apple power adapters or headphones, they are available for purchase.',
                'description' => 'We encourage you to re‑use your current USB‑A to Lightning cables, power adapters, and headphones, which are compatible with these iPhone models. But if you need any new Apple power adapters or headphones, they are available for purchase.',
                'brand' => 'Apple',
                'price' => 999,
                'shipping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
