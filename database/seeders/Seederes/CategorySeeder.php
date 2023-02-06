<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name'        => 'Electricos',
                'description' => 'Todo lo relacionado con insumos electricos',
                'iva'         => 19,
                'utility'     => 30,
                'status'      => 1,
            ],
            [
                'name'        => 'Ferreteria',
                'description' => 'Todo lo relacionado con Herramientas de Ferreteria',
                'iva'         => 19,
                'utility'     => 30,
                'status'      => 1,
            ],
            [
                'name'        => 'Computadores',
                'description' => 'Todo lo relacionado con Computacion',
                'iva'         => 19,
                'utility'     => 30,
                'status'      => 1,
            ],
            [
                'name'        => 'tablet',
                'description' => 'Todo lo relacionado con tablets',
                'iva'         => 19,
                'utility'     => 30,
                'status'      => 1,
            ],
        ];
        foreach ($category as $cat) {
            Category::create($cat);
        }
    }
}
