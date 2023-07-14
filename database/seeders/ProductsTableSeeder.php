<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('products')->delete();

        DB::table('products')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => '2301',
                'name' => 'chatarra',
                'price' => '1000.00',
                'sale_price' => '1130.00',
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            1 =>
            array (
                'id' => 2,
                'code' => '2302',
                'name' => 'hierro gris',
                'price' => '1300.00',
                'sale_price' => '1800.00',
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            2 =>
            array (
                'id' => 3,
                'code' => '2303',
                'name' => 'material patio',
                'price' => '1700.00',
                'sale_price' => '3000.00',
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            3 =>
            array (
                'id' => 4,
                'code' => '2304',
                'name' => 'aluminio',
                'price' => '5000.00',
                'sale_price' => '5700.00',
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 3,
                'unit_measure_id' => 70,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            4 =>
            array (
                'id' => 5,
                'code' => '2305',
                'name' => 'pote',
                'price' => '4000.00',
                'sale_price' => '4700.00',
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 3,
                'unit_measure_id' => 70,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            5 =>
            array (
                'id' => 6,
                'code' => '2306',
                'name' => 'perfil',
                'price' => '5500.00',
                'sale_price' => '6500.00',
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 3,
                'unit_measure_id' => 70,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            6 =>
            array (
                'id' => 7,
                'code' => '2307',
                'name' => 'antimonio',
                'price' => '47005500.00',
                'sale_price' => '5700.00',
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 3,
                'unit_measure_id' => 70,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            7 =>
            array (
                'id' => 8,
                'code' => '2308',
                'name' => 'limpieza aluminio',
                'price' => '2000.00',
                'sale_price' => '0.00',
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 3,
                'unit_measure_id' => 70,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            8 =>
            array (
                'id' => 9,
                'code' => '2309',
                'name' => 'salchicha',
                'price' => '4000.00',
                'sale_price' => '0.00',
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 3,
                'unit_measure_id' => 70,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
        ));


    }
}
