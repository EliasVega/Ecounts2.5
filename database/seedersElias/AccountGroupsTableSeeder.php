<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('account_groups')->delete();
        
        \DB::table('account_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'account_class_id' => 1,
                'code' => 11,
                'name' => 'DISPONIBLE',
            ),
            1 => 
            array (
                'id' => 2,
                'account_class_id' => 1,
                'code' => 12,
                'name' => 'INVERSIONES',
            ),
            2 => 
            array (
                'id' => 3,
                'account_class_id' => 1,
                'code' => 13,
                'name' => 'DEUDORES',
            ),
            3 => 
            array (
                'id' => 4,
                'account_class_id' => 1,
                'code' => 14,
                'name' => 'INVENTARIOS',
            ),
            4 => 
            array (
                'id' => 5,
                'account_class_id' => 1,
                'code' => 15,
                'name' => 'PROPIEDADES PLANTA Y EQUIPO',
            ),
            5 => 
            array (
                'id' => 6,
                'account_class_id' => 1,
                'code' => 16,
                'name' => 'INTANGIBLES',
            ),
            6 => 
            array (
                'id' => 7,
                'account_class_id' => 1,
                'code' => 17,
                'name' => 'DIFERIDOS',
            ),
            7 => 
            array (
                'id' => 8,
                'account_class_id' => 1,
                'code' => 18,
                'name' => 'OTROS ACTIVOS',
            ),
            8 => 
            array (
                'id' => 9,
                'account_class_id' => 1,
                'code' => 19,
                'name' => 'VALORIZACIONES',
            ),
            9 => 
            array (
                'id' => 10,
                'account_class_id' => 2,
                'code' => 21,
                'name' => 'OBLIGACIONES FINANCIERAS',
            ),
            10 => 
            array (
                'id' => 11,
                'account_class_id' => 2,
                'code' => 22,
                'name' => 'PROVEEDORES',
            ),
            11 => 
            array (
                'id' => 12,
                'account_class_id' => 2,
                'code' => 23,
                'name' => 'CUENTAS POR PAGAR',
            ),
            12 => 
            array (
                'id' => 13,
                'account_class_id' => 2,
                'code' => 24,
                'name' => 'IMPUESTOS, GRAVAMENES Y TASAS',
            ),
            13 => 
            array (
                'id' => 14,
                'account_class_id' => 2,
                'code' => 25,
                'name' => 'OBLIGACIONES LABORALES',
            ),
            14 => 
            array (
                'id' => 15,
                'account_class_id' => 2,
                'code' => 26,
                'name' => 'PASIVOS ESTIMADOS Y PROVISIONES',
            ),
            15 => 
            array (
                'id' => 16,
                'account_class_id' => 2,
                'code' => 27,
                'name' => 'DIFERIDOS',
            ),
            16 => 
            array (
                'id' => 17,
                'account_class_id' => 2,
                'code' => 28,
                'name' => 'OTROS PASIVOS',
            ),
            17 => 
            array (
                'id' => 18,
                'account_class_id' => 2,
                'code' => 29,
                'name' => 'BONOS Y PAPELES COMERCIALES',
            ),
            18 => 
            array (
                'id' => 19,
                'account_class_id' => 3,
                'code' => 31,
                'name' => 'CAPITAL SOCIAL',
            ),
            19 => 
            array (
                'id' => 20,
                'account_class_id' => 3,
                'code' => 32,
                'name' => 'SUPERAVIT DE CAPITAL',
            ),
            20 => 
            array (
                'id' => 21,
                'account_class_id' => 3,
                'code' => 33,
                'name' => 'RESERVAS',
            ),
            21 => 
            array (
                'id' => 22,
                'account_class_id' => 3,
                'code' => 34,
                'name' => 'REVALORIZACION DEL PATRIMONIO',
            ),
            22 => 
            array (
                'id' => 23,
                'account_class_id' => 3,
                'code' => 35,
                'name' => 'DIVIDENDOS O PARTICIPACIONES DECRETADOS EN ACCIONES, CUOTAS O PARTES DE INTERES SOCIAL',
            ),
            23 => 
            array (
                'id' => 24,
                'account_class_id' => 3,
                'code' => 36,
                'name' => 'RESULTADOS DEL EJERCICIO',
            ),
            24 => 
            array (
                'id' => 25,
                'account_class_id' => 3,
                'code' => 37,
                'name' => 'RESULTADOS DE EJERCICIOS ANTERIORES',
            ),
            25 => 
            array (
                'id' => 26,
                'account_class_id' => 3,
                'code' => 38,
                'name' => 'SUPERAVIT POR VALORIZACIONES',
            ),
            26 => 
            array (
                'id' => 27,
                'account_class_id' => 4,
                'code' => 41,
                'name' => 'OPERACIONALES',
            ),
            27 => 
            array (
                'id' => 28,
                'account_class_id' => 4,
                'code' => 42,
                'name' => 'NO OPERACIONALES',
            ),
            28 => 
            array (
                'id' => 29,
                'account_class_id' => 4,
                'code' => 47,
                'name' => 'AJUSTES POR INFLACION',
            ),
            29 => 
            array (
                'id' => 30,
                'account_class_id' => 5,
                'code' => 51,
                'name' => 'OPERACIONALES DE ADMINISTRACION',
            ),
            30 => 
            array (
                'id' => 31,
                'account_class_id' => 5,
                'code' => 52,
                'name' => 'OPERACIONALES DE VENTAS',
            ),
            31 => 
            array (
                'id' => 32,
                'account_class_id' => 5,
                'code' => 53,
                'name' => 'NO OPERACIONALES',
            ),
            32 => 
            array (
                'id' => 33,
                'account_class_id' => 5,
                'code' => 54,
                'name' => 'IMPUESTO DE RENTA Y COMPLEMENTARIOS',
            ),
            33 => 
            array (
                'id' => 34,
                'account_class_id' => 5,
                'code' => 59,
                'name' => 'GANANCIAS Y PERDIDAS',
            ),
            34 => 
            array (
                'id' => 35,
                'account_class_id' => 6,
                'code' => 61,
                'name' => 'COSTO DE VENTAS Y DE PRESTACION DE SERVICIOS',
            ),
            35 => 
            array (
                'id' => 36,
                'account_class_id' => 6,
                'code' => 62,
                'name' => 'COMPRAS',
            ),
            36 => 
            array (
                'id' => 37,
                'account_class_id' => 7,
                'code' => 71,
                'name' => 'MATERIA PRIMA',
            ),
            37 => 
            array (
                'id' => 38,
                'account_class_id' => 7,
                'code' => 72,
                'name' => 'MANO DE OBRA DIRECTA',
            ),
            38 => 
            array (
                'id' => 39,
                'account_class_id' => 7,
                'code' => 73,
                'name' => 'COSTOS INDIRECTOS',
            ),
            39 => 
            array (
                'id' => 40,
                'account_class_id' => 7,
                'code' => 74,
                'name' => 'CONTRATOS DE SERVICIOS',
            ),
            40 => 
            array (
                'id' => 41,
                'account_class_id' => 8,
                'code' => 81,
                'name' => 'DERECHOS CONTINGENTES',
            ),
            41 => 
            array (
                'id' => 42,
                'account_class_id' => 8,
                'code' => 82,
                'name' => 'DEUDORAS FISCALES',
            ),
            42 => 
            array (
                'id' => 43,
                'account_class_id' => 8,
                'code' => 83,
                'name' => 'DEUDORAS DE CONTROL',
            ),
            43 => 
            array (
                'id' => 44,
                'account_class_id' => 8,
                'code' => 84,
            'name' => 'DERECHOS CONTINGENTES POR CONTRA (CR)',
            ),
            44 => 
            array (
                'id' => 45,
                'account_class_id' => 8,
                'code' => 85,
            'name' => 'DEUDORAS FISCALES POR CONTRA (CR)',
            ),
            45 => 
            array (
                'id' => 46,
                'account_class_id' => 8,
                'code' => 86,
            'name' => 'DEUDORAS DE CONTROL POR CONTRA (CR)',
            ),
            46 => 
            array (
                'id' => 47,
                'account_class_id' => 9,
                'code' => 91,
                'name' => 'RESPONSABILIDADES CONTINGENTES',
            ),
            47 => 
            array (
                'id' => 48,
                'account_class_id' => 9,
                'code' => 92,
                'name' => 'ACREEDORAS FISCALES',
            ),
            48 => 
            array (
                'id' => 49,
                'account_class_id' => 9,
                'code' => 93,
                'name' => 'ACREEDORAS DE CONTROL',
            ),
            49 => 
            array (
                'id' => 50,
                'account_class_id' => 9,
                'code' => 94,
            'name' => 'RESPONSABILIDADES CONTINGENTES POR CONTRA (DB)',
            ),
            50 => 
            array (
                'id' => 51,
                'account_class_id' => 9,
                'code' => 95,
            'name' => 'ACREEDORAS FISCALES POR CONTRA (DB)',
            ),
            51 => 
            array (
                'id' => 52,
                'account_class_id' => 9,
                'code' => 96,
            'name' => 'ACREEDORAS DE CONTROL POR CONTRA (DB)',
            ),
        ));
        
        
    }
}