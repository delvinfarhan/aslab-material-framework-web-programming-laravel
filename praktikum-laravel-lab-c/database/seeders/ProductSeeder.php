<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id' => 1,
                'code' => 'SBK001',
                'name' => 'Beras Pandan Wangi 5kg',
                'unit' => 'sak',
                'price' => 75000,
                'stock' => 25,
            ],
            [
                'category_id' => 1,
                'code' => 'SBK002',
                'name' => 'Minyak Goreng 2L',
                'unit' => 'pouch',
                'price' => 36000,
                'stock' => 40,
            ],
            [
                'category_id' => 1,
                'code' => 'SBK003',
                'name' => 'Gula Pasir 1kg',
                'unit' => 'kg',
                'price' => 17500,
                'stock' => 50,
            ],
            [
                'category_id' => 2,
                'code' => 'MNM001',
                'name' => 'Kopi Kapal Api Spesial Mix',
                'unit' => 'renceng',
                'price' => 15000,
                'stock' => 35,
            ],
            [
                'category_id' => 2,
                'code' => 'MNM002',
                'name' => 'Teh Botol Sosro 450ml',
                'unit' => 'botol',
                'price' => 6000,
                'stock' => 60,
            ],
            [
                'category_id' => 2,
                'code' => 'MNM003',
                'name' => 'Susu Ultra Milk Cokelat 250ml',
                'unit' => 'pcs',
                'price' => 7000,
                'stock' => 45,
            ],
            [
                'category_id' => 3,
                'code' => 'SNK001',
                'name' => 'Indomie Goreng Spesial',
                'unit' => 'pcs',
                'price' => 3500,
                'stock' => 120,
            ],
            [
                'category_id' => 3,
                'code' => 'SNK002',
                'name' => 'Chitato Sapi Panggang 68g',
                'unit' => 'pcs',
                'price' => 11500,
                'stock' => 30,
            ],
            [
                'category_id' => 3,
                'code' => 'SNK003',
                'name' => 'Oreo Vanilla 133g',
                'unit' => 'pcs',
                'price' => 9500,
                'stock' => 40,
            ],
            [
                'category_id' => 4,
                'code' => 'RT001',
                'name' => 'Sabun Cuci Piring Sunlight 750ml',
                'unit' => 'pouch',
                'price' => 16000,
                'stock' => 30,
            ],
            [
                'category_id' => 4,
                'code' => 'RT002',
                'name' => 'Deterjen Rinso Molto 770g',
                'unit' => 'pack',
                'price' => 24000,
                'stock' => 25,
            ],
            [
                'category_id' => 4,
                'code' => 'RT003',
                'name' => 'Pasta Gigi Pepsodent 190g',
                'unit' => 'tube',
                'price' => 14500,
                'stock' => 50,
            ],
        ];

        foreach ($products as $product) {
            \App\Models\Product::updateOrCreate(
                ['code' => $product['code']],
                $product
            );
        }
    }
}
