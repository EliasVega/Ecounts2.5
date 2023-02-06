<?php

namespace Database\Seeders;

use App\Models\Account_group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return vo'id'
     */
    public function run()
    {
        $accounts_groups = [

            [
                'account_class_id'	=>	1,
                'code'	=>	11,
                'name'	=>	'DISPONIBLE'
            ],
            [
                'account_class_id'	=>	1,
                'code'	=>	12,
                'name'	=>	'INVERSIONES'
            ],
            [
                'account_class_id'	=>	1,
                'code'	=>	13,
                'name'	=>	'DEUDORES'
            ],
            [
                'account_class_id'	=>	1,
                'code'	=>	14,
                'name'	=>	'INVENTARIOS'
            ],
            [
                'account_class_id'	=>	1,
                'code'	=>	15,
                'name'	=>	'PROPIEDADES PLANTA Y EQUIPO'
            ],
            [
                'account_class_id'	=>	1,
                'code'	=>	16,
                'name'	=>	'INTANGIBLES'
            ],
            [
                'account_class_id'	=>	1,
                'code'	=>	17,
                'name'	=>	'DIFERIDOS'
            ],
            [
                'account_class_id'	=>	1,
                'code'	=>	18,
                'name'	=>	'OTROS ACTIVOS'
            ],
            [
                'account_class_id'	=>	1,
                'code'	=>	19,
                'name'	=>	'VALORIZACIONES'
            ],
            [
                'account_class_id'	=>	2,
                'code'	=>	21,
                'name'	=>	'OBLIGACIONES FINANCIERAS'
            ],
            [
                'account_class_id'	=>	2,
                'code'	=>	22,
                'name'	=>	'PROVEEDORES'
            ],
            [
                'account_class_id'	=>	2,
                'code'	=>	23,
                'name'	=>	'CUENTAS POR PAGAR'
            ],
            [
                'account_class_id'	=>	2,
                'code'	=>	24,
                'name'	=>	'IMPUESTOS, GRAVAMENES Y TASAS'
            ],
            [
                'account_class_id'	=>	2,
                'code'	=>	25,
                'name'	=>	'OBLIGACIONES LABORALES'
            ],
            [
                'account_class_id'	=>	2,
                'code'	=>	26,
                'name'	=>	'PASIVOS ESTIMADOS Y PROVISIONES'
            ],
            [
                'account_class_id'	=>	2,
                'code'	=>	27,
                'name'	=>	'DIFERIDOS'
            ],
            [
                'account_class_id'	=>	2,
                'code'	=>	28,
                'name'	=>	'OTROS PASIVOS'
            ],
            [
                'account_class_id'	=>	2,
                'code'	=>	29,
                'name'	=>	'BONOS Y PAPELES COMERCIALES'
            ],
            [
                'account_class_id'	=>	3,
                'code'	=>	31,
                'name'	=>	'CAPITAL SOCIAL'
            ],
            [
                'account_class_id'	=>	3,
                'code'	=>	32,
                'name'	=>	'SUPERAVIT DE CAPITAL'
            ],
            [
                'account_class_id'	=>	3,
                'code'	=>	33,
                'name'	=>	'RESERVAS'
            ],
            [
                'account_class_id'	=>	3,
                'code'	=>	34,
                'name'	=>	'REVALORIZACION DEL PATRIMONIO'
            ],
            [
                'account_class_id'	=>	3,
                'code'	=>	35,
                'name'	=>	'DIVIDENDOS O PARTICIPACIONES DECRETADOS EN ACCIONES, CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_class_id'	=>	3,
                'code'	=>	36,
                'name'	=>	'RESULTADOS DEL EJERCICIO'
            ],
            [
                'account_class_id'	=>	3,
                'code'	=>	37,
                'name'	=>	'RESULTADOS DE EJERCICIOS ANTERIORES'
            ],
            [
                'account_class_id'	=>	3,
                'code'	=>	38,
                'name'	=>	'SUPERAVIT POR VALORIZACIONES'
            ],
            [
                'account_class_id'	=>	4,
                'code'	=>	41,
                'name'	=>	'OPERACIONALES'
            ],
            [
                'account_class_id'	=>	4,
                'code'	=>	42,
                'name'	=>	'NO OPERACIONALES'
            ],
            [
                'account_class_id'	=>	4,
                'code'	=>	47,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_class_id'	=>	5,
                'code'	=>	51,
                'name'	=>	'OPERACIONALES DE ADMINISTRACION'
            ],
            [
                'account_class_id'	=>	5,
                'code'	=>	52,
                'name'	=>	'OPERACIONALES DE VENTAS'
            ],
            [
                'account_class_id'	=>	5,
                'code'	=>	53,
                'name'	=>	'NO OPERACIONALES'
            ],
            [
                'account_class_id'	=>	5,
                'code'	=>	54,
                'name'	=>	'IMPUESTO DE RENTA Y COMPLEMENTARIOS'
            ],
            [
                'account_class_id'	=>	5,
                'code'	=>	59,
                'name'	=>	'GANANCIAS Y PERDIDAS'
            ],
            [
                'account_class_id'	=>	6,
                'code'	=>	61,
                'name'	=>	'COSTO DE VENTAS Y DE PRESTACION DE SERVICIOS'
            ],
            [
                'account_class_id'	=>	6,
                'code'	=>	62,
                'name'	=>	'COMPRAS'
            ],
            [
                'account_class_id'	=>	7,
                'code'	=>	71,
                'name'	=>	'MATERIA PRIMA'
            ],
            [
                'account_class_id'	=>	7,
                'code'	=>	72,
                'name'	=>	'MANO DE OBRA DIRECTA'
            ],
            [
                'account_class_id'	=>	7,
                'code'	=>	73,
                'name'	=>	'COSTOS INDIRECTOS'
            ],
            [
                'account_class_id'	=>	7,
                'code'	=>	74,
                'name'	=>	'CONTRATOS DE SERVICIOS'
            ],
            [
                'account_class_id'	=>	8,
                'code'	=>	81,
                'name'	=>	'DERECHOS CONTINGENTES'
            ],
            [
                'account_class_id'	=>	8,
                'code'	=>	82,
                'name'	=>	'DEUDORAS FISCALES'
            ],
            [
                'account_class_id'	=>	8,
                'code'	=>	83,
                'name'	=>	'DEUDORAS DE CONTROL'
            ],
            [
                'account_class_id'	=>	8,
                'code'	=>	84,
                'name'	=>	'DERECHOS CONTINGENTES POR CONTRA (CR)'
            ],
            [
                'account_class_id'	=>	8,
                'code'	=>	85,
                'name'	=>	'DEUDORAS FISCALES POR CONTRA (CR)'
            ],
            [
                'account_class_id'	=>	8,
                'code'	=>	86,
                'name'	=>	'DEUDORAS DE CONTROL POR CONTRA (CR)'
            ],
            [
                'account_class_id'	=>	9,
                'code'	=>	91,
                'name'	=>	'RESPONSABILIDADES CONTINGENTES'
            ],
            [
                'account_class_id'	=>	9,
                'code'	=>	92,
                'name'	=>	'ACREEDORAS FISCALES'
            ],
            [
                'account_class_id'	=>	9,
                'code'	=>	93,
                'name'	=>	'ACREEDORAS DE CONTROL'
            ],
            [
                'account_class_id'	=>	9,
                'code'	=>	94,
                'name'	=>	'RESPONSABILIDADES CONTINGENTES POR CONTRA (DB)'
            ],
            [
                'account_class_id'	=>	9,
                'code'	=>	95,
                'name'	=>	'ACREEDORAS FISCALES POR CONTRA (DB)'
            ],
            [
                'account_class_id'	=>	9,
                'code'	=>	96,
                'name'	=>	'ACREEDORAS DE CONTROL POR CONTRA (DB)'
            ],

        ];
        foreach ($accounts_groups as $account) {
            Account_group::create($account);
        }
    }
}
