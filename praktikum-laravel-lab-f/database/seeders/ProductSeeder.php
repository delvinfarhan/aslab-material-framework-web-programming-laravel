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
        $makanan = Category::firstOrCreate(['name' => 'Makanan Ringan']);
        $kebutuhan = Category::firstOrCreate(['name' => 'Kebutuhan Rumah Tangga']);

        $products = [
            // Sembako
            [
                'category_id' => $sembako->id,
                'code' => 'BRG-001',
                'name' => 'Beras Pandan Wangi 5kg',
                'unit' => 'karung',
                'price' => 75000,
                'stock' => 25,
            ],
            [
                'category_id' => $sembako->id,
                'code' => 'BRG-002',
                'name' => 'Minyak Goreng Sania 2L',
                'unit' => 'pouch',
                'price' => 34000,
                'stock' => 40,
            ],
            [
                'category_id' => $sembako->id,
                'code' => 'BRG-003',
                'name' => 'Gula Pasir Gulaku 1kg',
                'unit' => 'pcs',
                'price' => 17500,
                'stock' => 50,
            ],
            [
                'category_id' => $sembako->id,
                'code' => 'BRG-004',
                'name' => 'Telur Ayam 1kg',
                'unit' => 'kg',
                'price' => 28000,
                'stock' => 30,
            ],

            // Minuman
            [
                'category_id' => $minuman->id,
                'code' => 'BRG-005',
                'name' => 'Teh Botol Sosro 450ml',
                'unit' => 'botol',
                'price' => 6000,
                'stock' => 60,
            ],
            [
                'category_id' => $minuman->id,
                'code' => 'BRG-006',
                'name' => 'Aqua Air Mineral 600ml',
                'unit' => 'botol',
                'price' => 3500,
                'stock' => 100,
            ],
            [
                'category_id' => $minuman->id,
                'code' => 'BRG-007',
                'name' => 'Kopi Good Day Cappuccino',
                'unit' => 'botol',
                'price' => 7000,
                'stock' => 45,
            ],

            // Makanan Ringan
            [
                'category_id' => $makanan->id,
                'code' => 'BRG-008',
                'name' => 'Indomie Goreng Spesial',
                'unit' => 'pcs',
                'price' => 3100,
                'stock' => 120,
            ],
            [
                'category_id' => $makanan->id,
                'code' => 'BRG-009',
                'name' => 'Chitato Sapi Panggang 68g',
                'unit' => 'pcs',
                'price' => 11500,
                'stock' => 35,
            ],
            [
                'category_id' => $makanan->id,
                'code' => 'BRG-010',
                'name' => 'Oreo Vanilla 133g',
                'unit' => 'pcs',
                'price' => 9500,
                'stock' => 40,
            ],

            // Kebutuhan Rumah Tangga
            [
                'category_id' => $kebutuhan->id,
                'code' => 'BRG-011',
                'name' => 'Sunlight Jeruk Nipis 700ml',
                'unit' => 'pouch',
                'price' => 15000,
                'stock' => 20,
            ],
            [
                'category_id' => $kebutuhan->id,
                'code' => 'BRG-012',
                'name' => 'Rinso Anti Noda 770g',
                'unit' => 'pack',
                'price' => 24000,
                'stock' => 15,
            ],
        ];

        foreach ($products as $item) {
            Product::updateOrCreate(['code' => $item['code']], $item);
        }
    }
}
