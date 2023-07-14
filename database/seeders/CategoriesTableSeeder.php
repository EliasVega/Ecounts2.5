<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'chatarra',
                'description' => 'Todo lo relacionado con metales',
                'iva' => '0.00',
                'utility' => '30.00',
                'status' => 1,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'pasta',
                'description' => 'Todo lo relacionado con pasta',
                'iva' => '0.00',
                'utility' => '30.00',
                'status' => 1,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'metales',
                'description' => 'Todo lo relacionado con metales',
                'iva' => '0.00',
                'utility' => '30.00',
                'status' => 1,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'plastico',
                'description' => 'Todo lo relacionado con plastico',
                'iva' => '0.00',
                'utility' => '30.00',
                'status' => 1,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Servicios y Excentos',
                'description' => 'Gastos de la empresa',
                'iva' => '0.00',
                'utility' => '0.00',
                'status' => 1,
                'created_at' => '2023-07-01 21:07:43',
                'updated_at' => '2023-07-01 21:07:43',
            ),
        ));


    }
}
