<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Kue Nastar Premium',
                'price' => 75000,
                'description' => 'Kue nastar dengan bahan premium, isian selai nanas asli, cocok untuk berbagai acara',
                'image' => 'https://images.unsplash.com/photo-1599785209796-786432b228bc?w=500',
                'shopee_link' => 'https://shopee.co.id',
                'tokopedia_link' => 'https://tokopedia.com',
                'lazada_link' => 'https://lazada.co.id',
            ],
            [
                'name' => 'Cookies Coklat',
                'price' => 50000,
                'description' => 'Cookies coklat renyah dengan taburan chocochip',
                'image' => 'https://images.unsplash.com/photo-1558961363-fa8fdf82db35?w=500',
                'shopee_link' => 'https://shopee.co.id',
                'tokopedia_link' => 'https://tokopedia.com',
                'lazada_link' => null,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}