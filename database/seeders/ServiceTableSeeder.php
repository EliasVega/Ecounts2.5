<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \DB::table('services')->delete();

        \DB::table('services')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => '1001',
                'name' => 'Mensajeria',
                'price' => '15000.00',
                'category_id' => 5,
                'unit_measure_id' => 70,
                'created_at' => '2023-01-12 21:07:43',
                'updated_at' => '2023-01-12 21:07:43',
            ),
        ));
    }
}
