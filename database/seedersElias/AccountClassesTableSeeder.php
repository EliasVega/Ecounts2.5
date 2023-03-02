<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('account_classes')->delete();
        
        \DB::table('account_classes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 1,
                'name' => 'ACTIVO',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 2,
                'name' => 'PASIVO',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 3,
                'name' => 'PATRIMONIO',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 4,
                'name' => 'INGRESOS',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 5,
                'name' => 'GASTOS',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 6,
                'name' => 'COSTOS DE VENTAS',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 7,
                'name' => 'COSTOS DE PRODUCCION O DE OPERACION',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 8,
                'name' => 'CUENTAS DE ORDEN DEUDORAS',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 9,
                'name' => 'CUENTAS DE ORDEN ACREEDORAS',
            ),
        ));
        
        
    }
}