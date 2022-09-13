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
        $category = new Category();

        $category->name = 'Electricos';
        $category->description = 'Todo lo relacionado con insumos electricos';
        $category->iva = 19;
        $category->utility = 30;
        $category->status = 1;

        $category->save();

        $category = new Category();

        $category->name = 'Ferreteria';
        $category->description = 'Todo lo relacionado con Herramientas de Ferreteria';
        $category->iva = 19;
        $category->utility = 30;
        $category->status = 1;

        $category->save();

        $category = new Category();

        $category->name = 'Computadores';
        $category->description = 'Todo lo relacionado con Computacion';
        $category->iva = 19;
        $category->utility = 30;
        $category->status = 1;

        $category->save();

        $category = new Category();

        $category->name = 'tablet';
        $category->description = 'Todo lo relacionado con tablets';
        $category->iva = 19;
        $category->utility = 30;
        $category->status = 1;

        $category->save();
    }
}
