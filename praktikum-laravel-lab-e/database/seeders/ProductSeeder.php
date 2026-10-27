<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $sembako = Category::firstOrCreate(['name' => 'Sembako']);
        $minuman = Category::firstOrCreate(['name' => 'Minuman']);
        $snack = Category::firstOrCreate(['name' => 'Makanan Ringan']);
        $rt = Category::firstOrCreate(['name' => 'Kebutuhan Rumah Tangga']);

        $products = [
            // Sembako
            [
                'category_id' => $sembako->id,
                'code' => 'BRG001',
                'name' => 'Beras Pandan Wangi 5kg',
                'unit' => 'sak',
                'price' => 75000,
                'stock' => 25,
            ],
            [
                'category_id' => $sembako->id,
                'code' => 'BRG002',
                'name' => 'Minyak Goreng Sania 2L',
                'unit' => 'pouch',
                'price' => 34000,
                'stock' => 40,
            ],
            [
                'category_id' => $sembako->id,
                'code' => 'BRG003',
                'name' => 'Gula Pasir Gulaku 1kg',
                'unit' => 'kg',
                'price' => 17500,
                'stock' => 50,
            ],
            [
                'category_id' => $sembako->id,
                'code' => 'BRG004',
                'name' => 'Tepung Terigu Segitiga Biru 1kg',
                'unit' => 'kg',
                'price' => 12500,
                'stock' => 30,
            ],

            // Minuman
            [
                'category_id' => $minuman->id,
                'code' => 'BRG005',
                'name' => 'Le Minerale 600ml',
                'unit' => 'botol',
                'price' => 3500,
                'stock' => 100,
            ],
            [
                'category_id' => $minuman->id,
                'code' => 'BRG006',
                'name' => 'Teh Pucuk Harum 350ml',
                'unit' => 'botol',
                'price' => 4000,
                'stock' => 75,
            ],
            [
                'category_id' => $minuman->id,
                'code' => 'BRG007',
                'name' => 'Ultra Milk Cokelat 250ml',
                'unit' => 'kotak',
                'price' => 6500,
                'stock' => 45,
            ],
            [
                'category_id' => $minuman->id,
                'code' => 'BRG008',
                'name' => 'Kopi Good Day Cappuccino Botol 250ml',
                'unit' => 'botol',
                'price' => 7000,
                'stock' => 35,
            ],

            // Makanan Ringan
            [
                'category_id' => $snack->id,
                'code' => 'BRG009',
                'name' => 'Indomie Goreng Original',
                'unit' => 'bungkus',
                'price' => 3100,
                'stock' => 150,
            ],
            [
                'category_id' => $snack->id,
                'code' => 'BRG010',
                'name' => 'Oreo Vanilla 120g',
                'unit' => 'pcs',
                'price' => 9500,
                'stock' => 30,
            ],
            [
                'category_id' => $snack->id,
                'code' => 'BRG011',
                'name' => 'SilverQueen Cashew 58g',
                'unit' => 'pcs',
                'price' => 16000,
                'stock' => 20,
            ],
            [
                'category_id' => $snack->id,
                'code' => 'BRG012',
                'name' => 'Taro Net Seaweed 65g',
                'unit' => 'pcs',
                'price' => 5000,
                'stock' => 40,
            ],

            // Kebutuhan Rumah Tangga
            [
                'category_id' => $rt->id,
                'code' => 'BRG013',
                'name' => 'Sunlight Jeruk Nipis 700ml',
                'unit' => 'pouch',
                'price' => 15000,
                'stock' => 35,
            ],
            [
                'category_id' => $rt->id,
                'code' => 'BRG014',
                'name' => 'Rinso Molto Deterjen Bubuk 770g',
                'unit' => 'bungkus',
                'price' => 22000,
                'stock' => 25,
            ],
            [
                'category_id' => $rt->id,
                'code' => 'BRG015',
                'name' => 'Lifebuoy Sabun Cair Total 10 450ml',
                'unit' => 'pouch',
                'price' => 26000,
                'stock' => 20,
            ],
            [
                'category_id' => $rt->id,
                'code' => 'BRG016',
                'name' => 'Pepsodent Pencegah Gigi Berlubang 190g',
                'unit' => 'pcs',
                'price' => 13500,
                'stock' => 40,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['code' => $product['code']],
                $product
            );
        }
    }
}
