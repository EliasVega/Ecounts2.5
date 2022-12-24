<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'category_id' => 1,
                'unit_measure_id' => 70,
                'code' => '2301',
                'name' => 'CABLE DUPLEX #12',
                'price' => 15000,
                'sale_price' => 18000,
                'stock' => 0,
                'status' => 1,
                'image' => 'noimagen.jpg',
            ],
            [
                'category_id' => 2,
                'unit_measure_id' => 70,
                'code' => '2302',
                'name' => 'Taladro Electrico MK',
                'price' => 200000,
                'sale_price' => 250000,
                'stock' => 0,
                'status' => 1,
                'image' => 'noimagen.jpg',
            ],
            [
                'category_id' => 2,
                'unit_measure_id' => 70,
                'code' => '2303',
                'name' => 'Pulidora SWITH',
                'price' => 150000,
                'sale_price' => 200000,
                'stock' => 0,
                'status' => 1,
                'image' => 'noimagen.jpg',
            ],
            [
                'category_id' => 3,
                'unit_measure_id' => 70,
                'code' => '2304',
                'name' => 'Lenovo 360',
                'price' => 1500000,
                'sale_price' => 2000000,
                'stock' => 0,
                'status' => 1,
                'image' => 'noimagen.jpg',
            ],
            [
                'category_id' => 3,
                'unit_measure_id' => 70,
                'code' => '2305',
                'name' => 'ASUS',
                'price' => 1900000,
                'sale_price' => 2400000,
                'stock' => 0,
                'status' => 1,
                'image' => 'noimagen.jpg',
            ],
            [
                'category_id' => 4,
                'unit_measure_id' => 70,
                'code' => '2306',
                'name' => 'SANSUMG',
                'price' => 1500000,
                'sale_price' => 2000000,
                'stock' => 0,
                'status' => 1,
                'image' => 'noimagen.jpg',
            ]
        ];
        foreach($product as $pro){
            Product::create($pro);
        }

    }
}
