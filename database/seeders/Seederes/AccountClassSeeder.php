<?php

namespace Database\Seeders;

use App\Models\Account_class;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return vo
     * 'id'
    ,
    */
    public function run()
    {
        $account_classes = [
            [
                'code'	=>	1,
                'name'	=>	'ACTIVO'
            ],
            [
                'code'	=>	2,
                'name'	=>	'PASIVO'
            ],
            [
                'code'	=>	3,
                'name'	=>	'PATRIMONIO'
            ],
            [
                'code'	=>	4,
                'name'	=>	'INGRESOS'
            ],
            [
                'code'	=>	5,
                'name'	=>	'GASTOS'
            ],
            [
                'code'	=>	6,
                'name'	=>	'COSTOS DE VENTAS'
            ],
            [
                'code'	=>	7,
                'name'	=>	'COSTOS DE PRODUCCION O DE OPERACION'
            ],
            [
                'code'	=>	8,
                'name'	=>	'CUENTAS DE ORDEN DEUDORAS'
            ],
            [
                'code'	=>	9,
                'name'	=>	'CUENTAS DE ORDEN ACREEDORAS'
            ],

        ];
        foreach ($account_classes as $account) {
            Account_class::create($account);
        }
    }
}
