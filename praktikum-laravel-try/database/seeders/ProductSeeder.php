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
        $sembako = Category::firstOrCreate(['name' => 'Sembako']);
        $minuman = Category::firstOrCreate(['name' => 'Minuman']);
        $makananRingan = Category::firstOrCreate(['name' => 'Makanan Ringan']);
        $rumahTangga = Category::firstOrCreate(['name' => 'Kebutuhan Rumah Tangga']);

        $products = [
            // Sembako
            [
                'code' => 'BRG001',
                'name' => 'Beras Premium 5kg',
                'category_id' => $sembako->id,
                'unit' => 'sak',
                'price' => 75000,
                'stock' => 25,
            ],
            [
                'code' => 'BRG002',
                'name' => 'Minyak Goreng 2L',
                'category_id' => $sembako->id,
                'unit' => 'pouch',
                'price' => 34000,
                'stock' => 40,
            ],
            [
                'code' => 'BRG003',
                'name' => 'Gula Pasir 1kg',
                'category_id' => $sembako->id,
                'unit' => 'kg',
                'price' => 17500,
                'stock' => 50,
            ],
            [
                'code' => 'BRG004',
                'name' => 'Tepung Terigu Segitiga Biru 1kg',
                'category_id' => $sembako->id,
                'unit' => 'kg',
                'price' => 12500,
                'stock' => 30,
            ],
            [
                'code' => 'BRG005',
                'name' => 'Telur Ayam 1kg',
                'category_id' => $sembako->id,
                'unit' => 'kg',
                'price' => 28000,
                'stock' => 35,
            ],

            // Minuman
            [
                'code' => 'BRG006',
                'name' => 'Teh Botol Sosro 450ml',
                'category_id' => $minuman->id,
                'unit' => 'botol',
                'price' => 6000,
                'stock' => 48,
            ],
            [
                'code' => 'BRG007',
                'name' => 'Aqua Air Mineral 600ml',
                'category_id' => $minuman->id,
                'unit' => 'botol',
                'price' => 3500,
                'stock' => 100,
            ],
            [
                'code' => 'BRG008',
                'name' => 'Kopi Kapal Api Spesial Mix 1 Renceng',
                'category_id' => $minuman->id,
                'unit' => 'renceng',
                'price' => 15000,
                'stock' => 20,
            ],
            [
                'code' => 'BRG009',
                'name' => 'Susu UHT Ultra Milk Cokelat 250ml',
                'category_id' => $minuman->id,
                'unit' => 'kotak',
                'price' => 7000,
                'stock' => 36,
            ],

            // Makanan Ringan
            [
                'code' => 'BRG010',
                'name' => 'Indomie Goreng Original',
                'category_id' => $makananRingan->id,
                'unit' => 'bungkus',
                'price' => 3100,
                'stock' => 120,
            ],
            [
                'code' => 'BRG011',
                'name' => 'Chitato Sapi Panggang 68g',
                'category_id' => $makananRingan->id,
                'unit' => 'bungkus',
                'price' => 11500,
                'stock' => 24,
            ],
            [
                'code' => 'BRG012',
                'name' => 'Oreo Vanilla 133g',
                'category_id' => $makananRingan->id,
                'unit' => 'bungkus',
                'price' => 9500,
                'stock' => 28,
            ],
            [
                'code' => 'BRG013',
                'name' => 'Beng-Beng Reguler Box (17x20g)',
                'category_id' => $makananRingan->id,
                'unit' => 'box',
                'price' => 32000,
                'stock' => 15,
            ],

            // Kebutuhan Rumah Tangga
            [
                'code' => 'BRG014',
                'name' => 'Sunlight Jeruk Nipis 750ml',
                'category_id' => $rumahTangga->id,
                'unit' => 'pouch',
                'price' => 15000,
                'stock' => 25,
            ],
            [
                'code' => 'BRG015',
                'name' => 'Rinso Anti Noda Deterjen Bubuk 800g',
                'category_id' => $rumahTangga->id,
                'unit' => 'bungkus',
                'price' => 21000,
                'stock' => 20,
            ],
            [
                'code' => 'BRG016',
                'name' => 'Pasta Gigi Pepsodent White 190g',
                'category_id' => $rumahTangga->id,
                'unit' => 'tube',
                'price' => 13500,
                'stock' => 30,
            ],
            [
                'code' => 'BRG017',
                'name' => 'Sabun Mandi Lifebuoy Total 10 110g',
                'category_id' => $rumahTangga->id,
                'unit' => 'pcs',
                'price' => 4500,
                'stock' => 40,
            ],
        ];

        foreach ($products as $item) {
            Product::updateOrCreate(
                ['code' => $item['code']],
                $item
            );
        }
    }
}

