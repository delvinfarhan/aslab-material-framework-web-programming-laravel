<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sembako = Category::where('name', 'Sembako')->first();
        $minuman = Category::where('name', 'Minuman')->first();
        $snack = Category::where('name', 'Makanan Ringan')->first();
        $household = Category::where('name', 'Kebutuhan Rumah Tangga')->first();

        $products = [
            // Sembako
            [
                'category_id' => $sembako?->id ?? 1,
                'code' => 'PRD-001',
                'name' => 'Beras Pandan Wangi 5kg',
                'unit' => 'sak',
                'price' => 75000,
                'stock' => 25,
            ],
            [
                'category_id' => $sembako?->id ?? 1,
                'code' => 'PRD-002',
                'name' => 'Minyak Goreng Bimoli 2L',
                'unit' => 'pouch',
                'price' => 36000,
                'stock' => 40,
            ],
            [
                'category_id' => $sembako?->id ?? 1,
                'code' => 'PRD-003',
                'name' => 'Gula Pasir Gulaku 1kg',
                'unit' => 'kg',
                'price' => 17500,
                'stock' => 50,
            ],
            [
                'category_id' => $sembako?->id ?? 1,
                'code' => 'PRD-004',
                'name' => 'Telur Ayam Ras 1kg',
                'unit' => 'kg',
                'price' => 28000,
                'stock' => 30,
            ],
            [
                'category_id' => $sembako?->id ?? 1,
                'code' => 'PRD-005',
                'name' => 'Tepung Terigu Segitiga Biru 1kg',
                'unit' => 'bungkus',
                'price' => 12500,
                'stock' => 35,
            ],

            // Minuman
            [
                'category_id' => $minuman?->id ?? 2,
                'code' => 'PRD-006',
                'name' => 'Aqua Air Mineral 600ml',
                'unit' => 'botol',
                'price' => 3500,
                'stock' => 100,
            ],
            [
                'category_id' => $minuman?->id ?? 2,
                'code' => 'PRD-007',
                'name' => 'Teh Botol Sosro Kotak 250ml',
                'unit' => 'kotak',
                'price' => 4000,
                'stock' => 60,
            ],
            [
                'category_id' => $minuman?->id ?? 2,
                'code' => 'PRD-008',
                'name' => 'Kopi Kapal Api Special Mix',
                'unit' => 'sachet',
                'price' => 2000,
                'stock' => 120,
            ],
            [
                'category_id' => $minuman?->id ?? 2,
                'code' => 'PRD-009',
                'name' => 'Ultra Milk Cokelat 250ml',
                'unit' => 'kotak',
                'price' => 6500,
                'stock' => 45,
            ],

            // Makanan Ringan
            [
                'category_id' => $snack?->id ?? 3,
                'code' => 'PRD-010',
                'name' => 'Indomie Goreng Original',
                'unit' => 'bungkus',
                'price' => 3100,
                'stock' => 150,
            ],
            [
                'category_id' => $snack?->id ?? 3,
                'code' => 'PRD-011',
                'name' => 'Chitato Sapi Panggang 68g',
                'unit' => 'bungkus',
                'price' => 11000,
                'stock' => 30,
            ],
            [
                'category_id' => $snack?->id ?? 3,
                'code' => 'PRD-012',
                'name' => 'Oreo Vanilla 133g',
                'unit' => 'bungkus',
                'price' => 9500,
                'stock' => 40,
            ],

            // Kebutuhan Rumah Tangga
            [
                'category_id' => $household?->id ?? 4,
                'code' => 'PRD-013',
                'name' => 'Sunlight Jeruk Nipis 750ml',
                'unit' => 'pouch',
                'price' => 15500,
                'stock' => 25,
            ],
            [
                'category_id' => $household?->id ?? 4,
                'code' => 'PRD-014',
                'name' => 'Rinso Anti Noda Deterjen 770g',
                'unit' => 'bungkus',
                'price' => 21000,
                'stock' => 20,
            ],
            [
                'category_id' => $household?->id ?? 4,
                'code' => 'PRD-015',
                'name' => 'Pasta Gigi Pepsodent 190g',
                'unit' => 'tube',
                'price' => 14000,
                'stock' => 35,
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
