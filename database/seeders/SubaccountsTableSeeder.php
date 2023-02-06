<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubaccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subaccounts')->delete();
        
        \DB::table('subaccounts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'account_id' => 1,
                'code' => 110505,
                'name' => 'CAJA GENERAL',
            ),
            1 => 
            array (
                'id' => 2,
                'account_id' => 1,
                'code' => 110510,
                'name' => 'CAJAS MENORES',
            ),
            2 => 
            array (
                'id' => 3,
                'account_id' => 1,
                'code' => 110515,
                'name' => 'MONEDA EXTRANJERA',
            ),
            3 => 
            array (
                'id' => 4,
                'account_id' => 2,
                'code' => 111005,
                'name' => 'MONEDA NACIONAL',
            ),
            4 => 
            array (
                'id' => 5,
                'account_id' => 2,
                'code' => 111010,
                'name' => 'MONEDA EXTRANJERA',
            ),
            5 => 
            array (
                'id' => 6,
                'account_id' => 3,
                'code' => 111505,
                'name' => 'MONEDA NACIONAL',
            ),
            6 => 
            array (
                'id' => 7,
                'account_id' => 3,
                'code' => 111510,
                'name' => 'MONEDA EXTRANJERA',
            ),
            7 => 
            array (
                'id' => 8,
                'account_id' => 4,
                'code' => 112005,
                'name' => 'BANCOS',
            ),
            8 => 
            array (
                'id' => 9,
                'account_id' => 4,
                'code' => 112010,
                'name' => 'CORPORACIONES DE AHORRO Y VIVIENDA',
            ),
            9 => 
            array (
                'id' => 10,
                'account_id' => 4,
                'code' => 112015,
                'name' => 'ORGANISMOS COOPERATIVOS FINANCIEROS',
            ),
            10 => 
            array (
                'id' => 11,
                'account_id' => 5,
                'code' => 112505,
                'name' => 'ROTATORIOS MONEDA NACIONAL',
            ),
            11 => 
            array (
                'id' => 12,
                'account_id' => 5,
                'code' => 112510,
                'name' => 'ROTATORIOS MONEDA EXTRANJERA',
            ),
            12 => 
            array (
                'id' => 13,
                'account_id' => 5,
                'code' => 112515,
                'name' => 'ESPECIALES MONEDA NACIONAL',
            ),
            13 => 
            array (
                'id' => 14,
                'account_id' => 5,
                'code' => 112520,
                'name' => 'ESPECIALES MONEDA EXTRANJERA',
            ),
            14 => 
            array (
                'id' => 15,
                'account_id' => 5,
                'code' => 112525,
                'name' => 'DE AMORTIZACION MONEDA NACIONAL',
            ),
            15 => 
            array (
                'id' => 16,
                'account_id' => 5,
                'code' => 112530,
                'name' => 'DE AMORTIZACION MONEDA EXTRANJERA',
            ),
            16 => 
            array (
                'id' => 17,
                'account_id' => 6,
                'code' => 120505,
                'name' => 'AGRICULTURA, GANADERIA, CAZA Y SILVICULTURA',
            ),
            17 => 
            array (
                'id' => 18,
                'account_id' => 6,
                'code' => 120510,
                'name' => 'PESCA',
            ),
            18 => 
            array (
                'id' => 19,
                'account_id' => 6,
                'code' => 120515,
                'name' => 'EXPLOTACION DE MINAS Y CANTERAS',
            ),
            19 => 
            array (
                'id' => 20,
                'account_id' => 6,
                'code' => 120520,
                'name' => 'INDUSTRIA MANUFACTURERA',
            ),
            20 => 
            array (
                'id' => 21,
                'account_id' => 6,
                'code' => 120525,
                'name' => 'SUMINISTRO DE ELECTRICIDAD, GAS Y AGUA',
            ),
            21 => 
            array (
                'id' => 22,
                'account_id' => 6,
                'code' => 120530,
                'name' => 'CONSTRUCCION',
            ),
            22 => 
            array (
                'id' => 23,
                'account_id' => 6,
                'code' => 120535,
                'name' => 'COMERCIO AL POR MAYOR Y AL POR MENOR',
            ),
            23 => 
            array (
                'id' => 24,
                'account_id' => 6,
                'code' => 120540,
                'name' => 'HOTELES Y RESTAURANTES',
            ),
            24 => 
            array (
                'id' => 25,
                'account_id' => 6,
                'code' => 120545,
                'name' => 'TRANSPORTE, ALMACENAMIENTO Y COMUNICACIONES',
            ),
            25 => 
            array (
                'id' => 26,
                'account_id' => 6,
                'code' => 120550,
                'name' => 'ACTIVIDAD FINANCIERA',
            ),
            26 => 
            array (
                'id' => 27,
                'account_id' => 6,
                'code' => 120555,
                'name' => 'ACTIVIDADES INMOBILIARIAS, EMPRESARIALES Y DE ALQUILER',
            ),
            27 => 
            array (
                'id' => 28,
                'account_id' => 6,
                'code' => 120560,
                'name' => 'ENSEÑANZA',
            ),
            28 => 
            array (
                'id' => 29,
                'account_id' => 6,
                'code' => 120565,
                'name' => 'SERVICIOS SOCIALES Y DE SALUD',
            ),
            29 => 
            array (
                'id' => 30,
                'account_id' => 6,
                'code' => 120570,
                'name' => 'OTRAS ACTIVIDADES DE SERVICIOS COMUNITARIOS, SOCIALES Y PERSONALES',
            ),
            30 => 
            array (
                'id' => 31,
                'account_id' => 6,
                'code' => 120599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            31 => 
            array (
                'id' => 32,
                'account_id' => 7,
                'code' => 121005,
                'name' => 'AGRICULTURA, GANADERIA, CAZA Y SILVICULTURA',
            ),
            32 => 
            array (
                'id' => 33,
                'account_id' => 7,
                'code' => 121010,
                'name' => 'PESCA',
            ),
            33 => 
            array (
                'id' => 34,
                'account_id' => 7,
                'code' => 121015,
                'name' => 'EXPLOTACION DE MINAS Y CANTERAS',
            ),
            34 => 
            array (
                'id' => 35,
                'account_id' => 7,
                'code' => 121020,
                'name' => 'INDUSTRIA MANUFACTURERA',
            ),
            35 => 
            array (
                'id' => 36,
                'account_id' => 7,
                'code' => 121025,
                'name' => 'SUMINISTRO DE ELECTRICIDAD, GAS Y AGUA',
            ),
            36 => 
            array (
                'id' => 37,
                'account_id' => 7,
                'code' => 121030,
                'name' => 'CONSTRUCCION',
            ),
            37 => 
            array (
                'id' => 38,
                'account_id' => 7,
                'code' => 121035,
                'name' => 'COMERCIO AL POR MAYOR Y AL POR MENOR',
            ),
            38 => 
            array (
                'id' => 39,
                'account_id' => 7,
                'code' => 121040,
                'name' => 'HOTELES Y RESTAURANTES',
            ),
            39 => 
            array (
                'id' => 40,
                'account_id' => 7,
                'code' => 121045,
                'name' => 'TRANSPORTE, ALMACENAMIENTO Y COMUNICACIONES',
            ),
            40 => 
            array (
                'id' => 41,
                'account_id' => 7,
                'code' => 121050,
                'name' => 'ACTIVIDAD FINANCIERA',
            ),
            41 => 
            array (
                'id' => 42,
                'account_id' => 7,
                'code' => 121055,
                'name' => 'ACTIVIDADES INMOBILIARIAS, EMPRESARIALES Y DE ALQUILER',
            ),
            42 => 
            array (
                'id' => 43,
                'account_id' => 7,
                'code' => 121060,
                'name' => 'ENSEÑANZA',
            ),
            43 => 
            array (
                'id' => 44,
                'account_id' => 7,
                'code' => 121065,
                'name' => 'SERVICIOS SOCIALES Y DE SALUD',
            ),
            44 => 
            array (
                'id' => 45,
                'account_id' => 7,
                'code' => 121070,
                'name' => 'OTRAS ACTIVIDADES DE SERVICIOS COMUNITARIOS, SOCIALES Y PERSONALES',
            ),
            45 => 
            array (
                'id' => 46,
                'account_id' => 7,
                'code' => 121099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            46 => 
            array (
                'id' => 47,
                'account_id' => 8,
                'code' => 121505,
                'name' => 'BONOS PUBLICOS MONEDA NACIONAL',
            ),
            47 => 
            array (
                'id' => 48,
                'account_id' => 8,
                'code' => 121510,
                'name' => 'BONOS PUBLICOS MONEDA EXTRANJERA',
            ),
            48 => 
            array (
                'id' => 49,
                'account_id' => 8,
                'code' => 121515,
                'name' => 'BONOS ORDINARIOS',
            ),
            49 => 
            array (
                'id' => 50,
                'account_id' => 8,
                'code' => 121520,
                'name' => 'BONOS CONVERTIBLES EN ACCIONES',
            ),
            50 => 
            array (
                'id' => 51,
                'account_id' => 8,
                'code' => 121595,
                'name' => 'OTROS',
            ),
            51 => 
            array (
                'id' => 52,
                'account_id' => 9,
                'code' => 122005,
                'name' => 'CEDULAS DE CAPITALIZACION',
            ),
            52 => 
            array (
                'id' => 53,
                'account_id' => 9,
                'code' => 122010,
                'name' => 'CEDULAS HIPOTECARIAS',
            ),
            53 => 
            array (
                'id' => 54,
                'account_id' => 9,
                'code' => 122015,
                'name' => 'CEDULAS DE INVERSION',
            ),
            54 => 
            array (
                'id' => 55,
                'account_id' => 9,
                'code' => 122095,
                'name' => 'OTRAS',
            ),
            55 => 
            array (
                'id' => 56,
                'account_id' => 10,
                'code' => 122505,
            'name' => 'CERTIFICADOS DE DEPOSITO A TERMINO (C.D.T.)',
            ),
            56 => 
            array (
                'id' => 57,
                'account_id' => 10,
                'code' => 122510,
                'name' => 'CERTIFICADOS DE DEPOSITO DE AHORRO',
            ),
            57 => 
            array (
                'id' => 58,
                'account_id' => 10,
                'code' => 122515,
            'name' => 'CERTIFICADOS DE AHORRO DE VALOR CONSTANTE (C.A.V.C.)',
            ),
            58 => 
            array (
                'id' => 59,
                'account_id' => 10,
                'code' => 122520,
                'name' => 'CERTIFICADOS DE CAMBIO',
            ),
            59 => 
            array (
                'id' => 60,
                'account_id' => 10,
                'code' => 122525,
                'name' => 'CERTIFICADOS CAFETEROS VALORIZABLES',
            ),
            60 => 
            array (
                'id' => 61,
                'account_id' => 10,
                'code' => 122530,
            'name' => 'CERTIFICADOS ELECTRICOS VALORIZABLES (C.E.V.)',
            ),
            61 => 
            array (
                'id' => 62,
                'account_id' => 10,
                'code' => 122535,
            'name' => 'CERTIFICADOS DE REEMBOLSO TRIBUTARIO (C.E.R.T.)',
            ),
            62 => 
            array (
                'id' => 63,
                'account_id' => 10,
                'code' => 122540,
                'name' => 'CERTIFICADOS DE DESARROLLO TURISTICO',
            ),
            63 => 
            array (
                'id' => 64,
                'account_id' => 10,
                'code' => 122545,
            'name' => 'CERTIFICADOS DE INVERSION FORESTAL (C.I.F.)',
            ),
            64 => 
            array (
                'id' => 65,
                'account_id' => 10,
                'code' => 122595,
                'name' => 'OTROS',
            ),
            65 => 
            array (
                'id' => 66,
                'account_id' => 11,
                'code' => 123005,
                'name' => 'EMPRESAS COMERCIALES',
            ),
            66 => 
            array (
                'id' => 67,
                'account_id' => 11,
                'code' => 123010,
                'name' => 'EMPRESAS INDUSTRIALES',
            ),
            67 => 
            array (
                'id' => 68,
                'account_id' => 11,
                'code' => 123015,
                'name' => 'EMPRESAS DE SERVICIOS',
            ),
            68 => 
            array (
                'id' => 69,
                'account_id' => 12,
                'code' => 123505,
                'name' => 'TITULOS DE DESARROLLO AGROPECUARIO',
            ),
            69 => 
            array (
                'id' => 70,
                'account_id' => 12,
                'code' => 123510,
                'name' => 'TITULOS CANJEABLES POR CERTIFICADOS DE CAMBIO',
            ),
            70 => 
            array (
                'id' => 71,
                'account_id' => 12,
                'code' => 123515,
            'name' => 'TITULOS DE TESORERIA (T.E.S.)',
            ),
            71 => 
            array (
                'id' => 72,
                'account_id' => 12,
                'code' => 123520,
                'name' => 'TITULOS DE PARTICIPACION',
            ),
            72 => 
            array (
                'id' => 73,
                'account_id' => 12,
                'code' => 123525,
                'name' => 'TITULOS DE CREDITO DE FOMENTO',
            ),
            73 => 
            array (
                'id' => 74,
                'account_id' => 12,
                'code' => 123530,
            'name' => 'TITULOS FINANCIEROS AGROINDUSTRIALES (T.F.A.)',
            ),
            74 => 
            array (
                'id' => 75,
                'account_id' => 12,
                'code' => 123535,
            'name' => 'TITULOS DE AHORRO CAFETERO (T.A.C.)',
            ),
            75 => 
            array (
                'id' => 76,
                'account_id' => 12,
                'code' => 123540,
            'name' => 'TITULOS DE AHORRO NACIONAL (T.A.N.)',
            ),
            76 => 
            array (
                'id' => 77,
                'account_id' => 12,
                'code' => 123545,
            'name' => 'TITULOS ENERGETICOS DE RENTABILIDAD CRECIENTE (T.E.R.)',
            ),
            77 => 
            array (
                'id' => 78,
                'account_id' => 12,
                'code' => 123550,
            'name' => 'TITULOS DE AHORRO EDUCATIVO (T.A.E.)',
            ),
            78 => 
            array (
                'id' => 79,
                'account_id' => 12,
                'code' => 123555,
                'name' => 'TITULOS FINANCIEROS INDUSTRIALES Y COMERCIALES',
            ),
            79 => 
            array (
                'id' => 80,
                'account_id' => 12,
                'code' => 123560,
                'name' => 'TESOROS',
            ),
            80 => 
            array (
                'id' => 81,
                'account_id' => 12,
                'code' => 123565,
            'name' => 'TITULOS DE DEVOLUCION DE IMPUESTOS NACIONALES (TIDIS)',
            ),
            81 => 
            array (
                'id' => 82,
                'account_id' => 12,
                'code' => 123570,
                'name' => 'TITULOS INMOBILIARIOS',
            ),
            82 => 
            array (
                'id' => 83,
                'account_id' => 12,
                'code' => 123595,
                'name' => 'OTROS',
            ),
            83 => 
            array (
                'id' => 84,
                'account_id' => 13,
                'code' => 124005,
                'name' => 'BANCOS COMERCIALES',
            ),
            84 => 
            array (
                'id' => 85,
                'account_id' => 13,
                'code' => 124010,
                'name' => 'COMPAÑIAS DE FINANCIAMIENTO COMERCIAL',
            ),
            85 => 
            array (
                'id' => 86,
                'account_id' => 13,
                'code' => 124015,
                'name' => 'CORPORACIONES FINANCIERAS',
            ),
            86 => 
            array (
                'id' => 87,
                'account_id' => 13,
                'code' => 124095,
                'name' => 'OTRAS',
            ),
            87 => 
            array (
                'id' => 88,
                'account_id' => 14,
                'code' => 124505,
                'name' => 'FIDEICOMISOS DE INVERSION MONEDA NACIONAL',
            ),
            88 => 
            array (
                'id' => 89,
                'account_id' => 14,
                'code' => 124510,
                'name' => 'FIDEICOMISOS DE INVERSION MONEDA EXTRANJERA',
            ),
            89 => 
            array (
                'id' => 90,
                'account_id' => 15,
                'code' => 125005,
                'name' => 'ACCIONES',
            ),
            90 => 
            array (
                'id' => 91,
                'account_id' => 15,
                'code' => 125010,
                'name' => 'CUOTAS O PARTES DE INTERES SOCIAL',
            ),
            91 => 
            array (
                'id' => 92,
                'account_id' => 15,
                'code' => 125015,
                'name' => 'BONOS',
            ),
            92 => 
            array (
                'id' => 93,
                'account_id' => 15,
                'code' => 125020,
                'name' => 'CEDULAS',
            ),
            93 => 
            array (
                'id' => 94,
                'account_id' => 15,
                'code' => 125025,
                'name' => 'CERTIFICADOS',
            ),
            94 => 
            array (
                'id' => 95,
                'account_id' => 15,
                'code' => 125030,
                'name' => 'PAPELES COMERCIALES',
            ),
            95 => 
            array (
                'id' => 96,
                'account_id' => 15,
                'code' => 125035,
                'name' => 'TITULOS',
            ),
            96 => 
            array (
                'id' => 97,
                'account_id' => 15,
                'code' => 125040,
                'name' => 'ACEPTACIONES BANCARIAS O FINANCIERAS 125095 OTROS',
            ),
            97 => 
            array (
                'id' => 98,
                'account_id' => 15,
                'code' => 125099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            98 => 
            array (
                'id' => 99,
                'account_id' => 16,
                'code' => 125505,
                'name' => 'BONOS DE FINANCIAMIENTO ESPECIAL',
            ),
            99 => 
            array (
                'id' => 100,
                'account_id' => 16,
                'code' => 125510,
                'name' => 'BONOS DE FINANCIAMIENTO PRESUPUESTAL',
            ),
            100 => 
            array (
                'id' => 101,
                'account_id' => 16,
                'code' => 125515,
            'name' => 'BONOS PARA DESARROLLO SOCIAL Y SEGURIDAD INTERNA (B.D.S.I.)',
            ),
            101 => 
            array (
                'id' => 102,
                'account_id' => 16,
                'code' => 125595,
                'name' => 'OTRAS',
            ),
            102 => 
            array (
                'id' => 103,
                'account_id' => 17,
                'code' => 126001,
                'name' => '???',
            ),
            103 => 
            array (
                'id' => 104,
                'account_id' => 17,
                'code' => 126099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            104 => 
            array (
                'id' => 105,
                'account_id' => 18,
                'code' => 129505,
                'name' => 'APORTES EN COOPERATIVAS',
            ),
            105 => 
            array (
                'id' => 106,
                'account_id' => 18,
                'code' => 129510,
                'name' => 'DERECHOS EN CLUBES SOCIALES',
            ),
            106 => 
            array (
                'id' => 107,
                'account_id' => 18,
                'code' => 129515,
                'name' => 'ACCIONES O DERECHOS EN CLUBES DEPORTIVOS',
            ),
            107 => 
            array (
                'id' => 108,
                'account_id' => 18,
                'code' => 129520,
                'name' => 'BONOS EN COLEGIOS',
            ),
            108 => 
            array (
                'id' => 109,
                'account_id' => 18,
                'code' => 129595,
                'name' => 'DIVERSAS',
            ),
            109 => 
            array (
                'id' => 110,
                'account_id' => 18,
                'code' => 129599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            110 => 
            array (
                'id' => 111,
                'account_id' => 19,
                'code' => 129905,
                'name' => 'ACCIONES',
            ),
            111 => 
            array (
                'id' => 112,
                'account_id' => 19,
                'code' => 129910,
                'name' => 'CUOTAS O PARTES DE INTERES SOCIAL',
            ),
            112 => 
            array (
                'id' => 113,
                'account_id' => 19,
                'code' => 129915,
                'name' => 'BONOS',
            ),
            113 => 
            array (
                'id' => 114,
                'account_id' => 19,
                'code' => 129920,
                'name' => 'CEDULAS',
            ),
            114 => 
            array (
                'id' => 115,
                'account_id' => 19,
                'code' => 129925,
                'name' => 'CERTIFICADOS',
            ),
            115 => 
            array (
                'id' => 116,
                'account_id' => 19,
                'code' => 129930,
                'name' => 'PAPELES COMERCIALES',
            ),
            116 => 
            array (
                'id' => 117,
                'account_id' => 19,
                'code' => 129935,
                'name' => 'TITULOS',
            ),
            117 => 
            array (
                'id' => 118,
                'account_id' => 19,
                'code' => 129940,
                'name' => 'ACEPTACIONES BANCARIAS O FINANCIERAS',
            ),
            118 => 
            array (
                'id' => 119,
                'account_id' => 19,
                'code' => 129945,
                'name' => 'DERECHOS FIDUCIARIOS',
            ),
            119 => 
            array (
                'id' => 120,
                'account_id' => 19,
                'code' => 129950,
                'name' => 'DERECHOS DE RECOMPRA DE INVERSIONES NEGOCIADAS',
            ),
            120 => 
            array (
                'id' => 121,
                'account_id' => 19,
                'code' => 129955,
                'name' => 'OBLIGATORIAS',
            ),
            121 => 
            array (
                'id' => 122,
                'account_id' => 19,
                'code' => 129960,
                'name' => 'CUENTAS EN PARTICIPACION',
            ),
            122 => 
            array (
                'id' => 123,
                'account_id' => 19,
                'code' => 129995,
                'name' => 'OTRAS INVERSIONES',
            ),
            123 => 
            array (
                'id' => 124,
                'account_id' => 20,
                'code' => 130505,
                'name' => 'NACIONALES',
            ),
            124 => 
            array (
                'id' => 125,
                'account_id' => 20,
                'code' => 130510,
                'name' => 'DEL EXTERIOR',
            ),
            125 => 
            array (
                'id' => 126,
                'account_id' => 20,
                'code' => 130515,
                'name' => 'DEUDORES DEL SISTEMA',
            ),
            126 => 
            array (
                'id' => 127,
                'account_id' => 21,
                'code' => 131005,
                'name' => 'CASA MATRIZ',
            ),
            127 => 
            array (
                'id' => 128,
                'account_id' => 21,
                'code' => 131010,
                'name' => 'COMPAÑIAS VINCULADAS',
            ),
            128 => 
            array (
                'id' => 129,
                'account_id' => 21,
                'code' => 131015,
                'name' => 'ACCIONISTAS O SOCIOS',
            ),
            129 => 
            array (
                'id' => 130,
                'account_id' => 21,
                'code' => 131020,
                'name' => 'PARTICULARES',
            ),
            130 => 
            array (
                'id' => 131,
                'account_id' => 21,
                'code' => 131095,
                'name' => 'OTRAS',
            ),
            131 => 
            array (
                'id' => 132,
                'account_id' => 22,
                'code' => 131505,
                'name' => 'VENTAS',
            ),
            132 => 
            array (
                'id' => 133,
                'account_id' => 22,
                'code' => 131510,
                'name' => 'PAGOS A NOMBRE DE CASA MATRIZ',
            ),
            133 => 
            array (
                'id' => 134,
                'account_id' => 22,
                'code' => 131515,
                'name' => 'VALORES RECIBIDOS POR CASA MATRIZ',
            ),
            134 => 
            array (
                'id' => 135,
                'account_id' => 22,
                'code' => 131520,
                'name' => 'PRESTAMOS',
            ),
            135 => 
            array (
                'id' => 136,
                'account_id' => 23,
                'code' => 132005,
                'name' => 'FILIALES',
            ),
            136 => 
            array (
                'id' => 137,
                'account_id' => 23,
                'code' => 132010,
                'name' => 'SUBSIDIARIAS',
            ),
            137 => 
            array (
                'id' => 138,
                'account_id' => 23,
                'code' => 132015,
                'name' => 'SUCURSALES',
            ),
            138 => 
            array (
                'id' => 139,
                'account_id' => 24,
                'code' => 132505,
                'name' => 'A SOCIOS',
            ),
            139 => 
            array (
                'id' => 140,
                'account_id' => 24,
                'code' => 132510,
                'name' => 'A ACCIONISTAS',
            ),
            140 => 
            array (
                'id' => 141,
                'account_id' => 25,
                'code' => 132801,
                'name' => '???',
            ),
            141 => 
            array (
                'id' => 142,
                'account_id' => 26,
                'code' => 133005,
                'name' => 'A PROVEEDORES',
            ),
            142 => 
            array (
                'id' => 143,
                'account_id' => 26,
                'code' => 133010,
                'name' => 'A CONTRATISTAS',
            ),
            143 => 
            array (
                'id' => 144,
                'account_id' => 26,
                'code' => 133015,
                'name' => 'A TRABAJADORES',
            ),
            144 => 
            array (
                'id' => 145,
                'account_id' => 26,
                'code' => 133020,
                'name' => 'A AGENTES',
            ),
            145 => 
            array (
                'id' => 146,
                'account_id' => 26,
                'code' => 133025,
                'name' => 'A CONCESIONARIOS',
            ),
            146 => 
            array (
                'id' => 147,
                'account_id' => 26,
                'code' => 133030,
                'name' => 'DE ADJUDICACIONES',
            ),
            147 => 
            array (
                'id' => 148,
                'account_id' => 26,
                'code' => 133095,
                'name' => 'OTROS',
            ),
            148 => 
            array (
                'id' => 149,
                'account_id' => 27,
                'code' => 133201,
                'name' => '???',
            ),
            149 => 
            array (
                'id' => 150,
                'account_id' => 28,
                'code' => 133505,
                'name' => 'PARA IMPORTACIONES',
            ),
            150 => 
            array (
                'id' => 151,
                'account_id' => 28,
                'code' => 133510,
                'name' => 'PARA SERVICIOS',
            ),
            151 => 
            array (
                'id' => 152,
                'account_id' => 28,
                'code' => 133515,
                'name' => 'PARA CONTRATOS',
            ),
            152 => 
            array (
                'id' => 153,
                'account_id' => 28,
                'code' => 133520,
                'name' => 'PARA RESPONSABILIDADES',
            ),
            153 => 
            array (
                'id' => 154,
                'account_id' => 28,
                'code' => 133525,
                'name' => 'PARA JUICIOS EJECUTIVOS',
            ),
            154 => 
            array (
                'id' => 155,
                'account_id' => 28,
                'code' => 133530,
                'name' => 'PARA ADQUISICION DE ACCIONES, CUOTAS O DERECHOS SOCIALES',
            ),
            155 => 
            array (
                'id' => 156,
                'account_id' => 28,
                'code' => 133535,
                'name' => 'EN GARANTIA',
            ),
            156 => 
            array (
                'id' => 157,
                'account_id' => 28,
                'code' => 133595,
                'name' => 'OTROS',
            ),
            157 => 
            array (
                'id' => 158,
                'account_id' => 29,
                'code' => 134005,
                'name' => 'DE BIENES RAICES',
            ),
            158 => 
            array (
                'id' => 159,
                'account_id' => 29,
                'code' => 134010,
                'name' => 'DE MAQUINARIA Y EQUIPO',
            ),
            159 => 
            array (
                'id' => 160,
                'account_id' => 29,
                'code' => 134015,
                'name' => 'DE FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            160 => 
            array (
                'id' => 161,
                'account_id' => 29,
                'code' => 134020,
                'name' => 'DE FLOTA Y EQUIPO AEREO',
            ),
            161 => 
            array (
                'id' => 162,
                'account_id' => 29,
                'code' => 134025,
                'name' => 'DE FLOTA Y EQUIPO FERREO',
            ),
            162 => 
            array (
                'id' => 163,
                'account_id' => 29,
                'code' => 134030,
                'name' => 'DE FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            163 => 
            array (
                'id' => 164,
                'account_id' => 29,
                'code' => 134035,
                'name' => 'DE SEMOVIENTES',
            ),
            164 => 
            array (
                'id' => 165,
                'account_id' => 29,
                'code' => 134095,
                'name' => 'DE OTROS BIENES',
            ),
            165 => 
            array (
                'id' => 166,
                'account_id' => 30,
                'code' => 134505,
                'name' => 'DIVIDENDOS Y/O PARTICIPACIONES',
            ),
            166 => 
            array (
                'id' => 167,
                'account_id' => 30,
                'code' => 134510,
                'name' => 'INTERESES',
            ),
            167 => 
            array (
                'id' => 168,
                'account_id' => 30,
                'code' => 134515,
                'name' => 'COMISIONES',
            ),
            168 => 
            array (
                'id' => 169,
                'account_id' => 30,
                'code' => 134520,
                'name' => 'HONORARIOS',
            ),
            169 => 
            array (
                'id' => 170,
                'account_id' => 30,
                'code' => 134525,
                'name' => 'SERVICIOS',
            ),
            170 => 
            array (
                'id' => 171,
                'account_id' => 30,
                'code' => 134530,
                'name' => 'ARRENDAMIENTOS',
            ),
            171 => 
            array (
                'id' => 172,
                'account_id' => 30,
                'code' => 134535,
                'name' => 'CERT POR COBRAR',
            ),
            172 => 
            array (
                'id' => 173,
                'account_id' => 30,
                'code' => 134595,
                'name' => 'OTROS',
            ),
            173 => 
            array (
                'id' => 174,
                'account_id' => 31,
                'code' => 135005,
                'name' => 'DE CONSTRUCCION',
            ),
            174 => 
            array (
                'id' => 175,
                'account_id' => 31,
                'code' => 135010,
                'name' => 'DE PRESTACION DE SERVICIOS',
            ),
            175 => 
            array (
                'id' => 176,
                'account_id' => 31,
                'code' => 135095,
                'name' => 'OTROS',
            ),
            176 => 
            array (
                'id' => 177,
                'account_id' => 32,
                'code' => 135505,
                'name' => 'ANTICIPO DE IMPUESTOS DE RENTA Y COMPLEMENTARIOS',
            ),
            177 => 
            array (
                'id' => 178,
                'account_id' => 32,
                'code' => 135510,
                'name' => 'ANTICIPO DE IMPUESTOS DE INDUSTRIA Y COMERCIO',
            ),
            178 => 
            array (
                'id' => 179,
                'account_id' => 32,
                'code' => 135515,
                'name' => 'RETENCION EN LA FUENTE',
            ),
            179 => 
            array (
                'id' => 180,
                'account_id' => 32,
                'code' => 135520,
                'name' => 'SOBRANTES EN LIQUIDACION PRIVADA DE IMPUESTOS',
            ),
            180 => 
            array (
                'id' => 181,
                'account_id' => 32,
                'code' => 135525,
                'name' => 'CONTRIBUCIONES',
            ),
            181 => 
            array (
                'id' => 182,
                'account_id' => 32,
                'code' => 135530,
                'name' => 'IMPUESTOS DESCONTABLES',
            ),
            182 => 
            array (
                'id' => 183,
                'account_id' => 32,
                'code' => 135595,
                'name' => 'OTROS',
            ),
            183 => 
            array (
                'id' => 184,
                'account_id' => 33,
                'code' => 136005,
                'name' => 'A COMPAÑIAS ASEGURADORAS',
            ),
            184 => 
            array (
                'id' => 185,
                'account_id' => 33,
                'code' => 136010,
                'name' => 'A TRANSPORTADORES',
            ),
            185 => 
            array (
                'id' => 186,
                'account_id' => 33,
                'code' => 136015,
                'name' => 'POR TIQUETES AEREOS',
            ),
            186 => 
            array (
                'id' => 187,
                'account_id' => 33,
                'code' => 136095,
                'name' => 'OTRAS',
            ),
            187 => 
            array (
                'id' => 188,
                'account_id' => 34,
                'code' => 136505,
                'name' => 'VIVIENDA',
            ),
            188 => 
            array (
                'id' => 189,
                'account_id' => 34,
                'code' => 136510,
                'name' => 'VEHICULOS',
            ),
            189 => 
            array (
                'id' => 190,
                'account_id' => 34,
                'code' => 136515,
                'name' => 'EDUCACION',
            ),
            190 => 
            array (
                'id' => 191,
                'account_id' => 34,
                'code' => 136520,
                'name' => 'MEDICOS, ODONTOLOGICOS Y SIMILARES',
            ),
            191 => 
            array (
                'id' => 192,
                'account_id' => 34,
                'code' => 136525,
                'name' => 'CALAMIDAD DOMESTICA',
            ),
            192 => 
            array (
                'id' => 193,
                'account_id' => 34,
                'code' => 136530,
                'name' => 'RESPONSABILIDADES',
            ),
            193 => 
            array (
                'id' => 194,
                'account_id' => 34,
                'code' => 136595,
                'name' => 'OTROS',
            ),
            194 => 
            array (
                'id' => 195,
                'account_id' => 35,
                'code' => 137005,
                'name' => 'CON GARANTIA REAL',
            ),
            195 => 
            array (
                'id' => 196,
                'account_id' => 35,
                'code' => 137010,
                'name' => 'CON GARANTIA PERSONAL',
            ),
            196 => 
            array (
                'id' => 197,
                'account_id' => 36,
                'code' => 138005,
                'name' => 'DEPOSITARIOS',
            ),
            197 => 
            array (
                'id' => 198,
                'account_id' => 36,
                'code' => 138010,
                'name' => 'COMISIONISTAS DE BOLSAS',
            ),
            198 => 
            array (
                'id' => 199,
                'account_id' => 36,
                'code' => 138015,
                'name' => 'FONDO DE INVERSION',
            ),
            199 => 
            array (
                'id' => 200,
                'account_id' => 36,
                'code' => 138020,
                'name' => 'CUENTAS POR COBRAR DE TERCEROS',
            ),
            200 => 
            array (
                'id' => 201,
                'account_id' => 36,
                'code' => 138025,
                'name' => 'PAGOS POR CUENTA DE TERCEROS',
            ),
            201 => 
            array (
                'id' => 202,
                'account_id' => 36,
                'code' => 138030,
                'name' => 'FONDOS DE INVERSION SOCIAL',
            ),
            202 => 
            array (
                'id' => 203,
                'account_id' => 36,
                'code' => 138095,
                'name' => 'OTROS',
            ),
            203 => 
            array (
                'id' => 204,
                'account_id' => 37,
                'code' => 138501,
                'name' => '???',
            ),
            204 => 
            array (
                'id' => 205,
                'account_id' => 38,
                'code' => 139001,
                'name' => '???',
            ),
            205 => 
            array (
                'id' => 206,
                'account_id' => 39,
                'code' => 139905,
                'name' => 'CLIENTES',
            ),
            206 => 
            array (
                'id' => 207,
                'account_id' => 39,
                'code' => 139910,
                'name' => 'CUENTAS CORRIENTES COMERCIALES',
            ),
            207 => 
            array (
                'id' => 208,
                'account_id' => 39,
                'code' => 139915,
                'name' => 'CUENTAS POR COBRAR A CASA MATRIZ',
            ),
            208 => 
            array (
                'id' => 209,
                'account_id' => 39,
                'code' => 139920,
                'name' => 'CUENTAS POR COBRAR A VINCULADOS ECONOMICOS',
            ),
            209 => 
            array (
                'id' => 210,
                'account_id' => 39,
                'code' => 139925,
                'name' => 'CUENTAS POR COBRAR A SOCIOS Y ACCIONISTAS',
            ),
            210 => 
            array (
                'id' => 211,
                'account_id' => 39,
                'code' => 139930,
                'name' => 'ANTICIPOS Y AVANCES',
            ),
            211 => 
            array (
                'id' => 212,
                'account_id' => 39,
                'code' => 139932,
                'name' => 'CUENTAS DE OPERACION CONJUNTA',
            ),
            212 => 
            array (
                'id' => 213,
                'account_id' => 39,
                'code' => 139935,
                'name' => 'DEPOSITOS',
            ),
            213 => 
            array (
                'id' => 214,
                'account_id' => 39,
                'code' => 139940,
                'name' => 'PROMESAS DE COMPRAVENTA',
            ),
            214 => 
            array (
                'id' => 215,
                'account_id' => 39,
                'code' => 139945,
                'name' => 'INGRESOS POR COBRAR',
            ),
            215 => 
            array (
                'id' => 216,
                'account_id' => 39,
                'code' => 139950,
                'name' => 'RETENCION SOBRE CONTRATOS',
            ),
            216 => 
            array (
                'id' => 217,
                'account_id' => 39,
                'code' => 139955,
                'name' => 'RECLAMACIONES',
            ),
            217 => 
            array (
                'id' => 218,
                'account_id' => 39,
                'code' => 139960,
                'name' => 'CUENTAS POR COBRAR A TRABAJADORES',
            ),
            218 => 
            array (
                'id' => 219,
                'account_id' => 39,
                'code' => 139965,
                'name' => 'PRESTAMOS A PARTICULARES',
            ),
            219 => 
            array (
                'id' => 220,
                'account_id' => 39,
                'code' => 139975,
                'name' => 'DEUDORES VARIOS',
            ),
            220 => 
            array (
                'id' => 221,
                'account_id' => 39,
                'code' => 139980,
                'name' => 'DERECHOS DE RECOMPRA DE CARTERA NEGOCIADA',
            ),
            221 => 
            array (
                'id' => 222,
                'account_id' => 40,
                'code' => 140501,
                'name' => '???',
            ),
            222 => 
            array (
                'id' => 223,
                'account_id' => 40,
                'code' => 140599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            223 => 
            array (
                'id' => 224,
                'account_id' => 41,
                'code' => 141001,
                'name' => '???',
            ),
            224 => 
            array (
                'id' => 225,
                'account_id' => 41,
                'code' => 141099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            225 => 
            array (
                'id' => 226,
                'account_id' => 42,
                'code' => 141501,
                'name' => '???',
            ),
            226 => 
            array (
                'id' => 227,
                'account_id' => 42,
                'code' => 141599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            227 => 
            array (
                'id' => 228,
                'account_id' => 43,
                'code' => 141701,
                'name' => '???',
            ),
            228 => 
            array (
                'id' => 229,
                'account_id' => 43,
                'code' => 141799,
                'name' => 'AJUSTES POR INFLACION',
            ),
            229 => 
            array (
                'id' => 230,
                'account_id' => 44,
                'code' => 142001,
                'name' => '???',
            ),
            230 => 
            array (
                'id' => 231,
                'account_id' => 44,
                'code' => 142099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            231 => 
            array (
                'id' => 232,
                'account_id' => 45,
                'code' => 142501,
                'name' => '???',
            ),
            232 => 
            array (
                'id' => 233,
                'account_id' => 45,
                'code' => 142599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            233 => 
            array (
                'id' => 234,
                'account_id' => 46,
                'code' => 143005,
                'name' => 'PRODUCTOS MANUFACTURADOS',
            ),
            234 => 
            array (
                'id' => 235,
                'account_id' => 46,
                'code' => 143010,
                'name' => 'PRODUCTOS EXTRAIDOS Y/O PROCESADOS',
            ),
            235 => 
            array (
                'id' => 236,
                'account_id' => 46,
                'code' => 143015,
                'name' => 'PRODUCTOS AGRICOLAS Y FORESTALES',
            ),
            236 => 
            array (
                'id' => 237,
                'account_id' => 46,
                'code' => 143020,
                'name' => 'SUBPRODUCTOS',
            ),
            237 => 
            array (
                'id' => 238,
                'account_id' => 46,
                'code' => 143025,
                'name' => 'PRODUCTOS DE PESCA',
            ),
            238 => 
            array (
                'id' => 239,
                'account_id' => 46,
                'code' => 143099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            239 => 
            array (
                'id' => 240,
                'account_id' => 47,
                'code' => 143501,
                'name' => '???',
            ),
            240 => 
            array (
                'id' => 241,
                'account_id' => 47,
                'code' => 143599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            241 => 
            array (
                'id' => 242,
                'account_id' => 48,
                'code' => 144001,
                'name' => '???',
            ),
            242 => 
            array (
                'id' => 243,
                'account_id' => 48,
                'code' => 144099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            243 => 
            array (
                'id' => 244,
                'account_id' => 49,
                'code' => 144505,
                'name' => 'ESPECIES MAYORES',
            ),
            244 => 
            array (
                'id' => 245,
                'account_id' => 49,
                'code' => 144510,
                'name' => 'ESPECIES MENORES',
            ),
            245 => 
            array (
                'id' => 246,
                'account_id' => 49,
                'code' => 144599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            246 => 
            array (
                'id' => 247,
                'account_id' => 50,
                'code' => 145005,
                'name' => 'POR URBANIZAR',
            ),
            247 => 
            array (
                'id' => 248,
                'account_id' => 50,
                'code' => 145010,
                'name' => 'URBANIZADOS POR CONSTRUIR',
            ),
            248 => 
            array (
                'id' => 249,
                'account_id' => 50,
                'code' => 145099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            249 => 
            array (
                'id' => 250,
                'account_id' => 51,
                'code' => 145505,
                'name' => 'COMBUSTIBLES Y LUBRICANTES',
            ),
            250 => 
            array (
                'id' => 251,
                'account_id' => 51,
                'code' => 145510,
                'name' => 'ABONOS Y FERTILIZANTES',
            ),
            251 => 
            array (
                'id' => 252,
                'account_id' => 51,
                'code' => 145515,
                'name' => 'SEMILLAS TERMINADAS',
            ),
            252 => 
            array (
                'id' => 253,
                'account_id' => 51,
                'code' => 145520,
                'name' => 'FUNGICIDAS Y HERBICIDAS',
            ),
            253 => 
            array (
                'id' => 254,
                'account_id' => 51,
                'code' => 145525,
                'name' => 'MATERIALES Y REPUESTOS',
            ),
            254 => 
            array (
                'id' => 255,
                'account_id' => 51,
                'code' => 145530,
                'name' => 'LOZA Y CRISTALERIA',
            ),
            255 => 
            array (
                'id' => 256,
                'account_id' => 51,
                'code' => 145535,
                'name' => 'HERRAMIENTAS',
            ),
            256 => 
            array (
                'id' => 257,
                'account_id' => 51,
                'code' => 145540,
                'name' => 'MEDICINAS',
            ),
            257 => 
            array (
                'id' => 258,
                'account_id' => 51,
                'code' => 145545,
                'name' => 'ELEMENTOS HOSPITALARIOS',
            ),
            258 => 
            array (
                'id' => 259,
                'account_id' => 51,
                'code' => 145550,
                'name' => 'INSTRUMENTAL QUIRURGICO',
            ),
            259 => 
            array (
                'id' => 260,
                'account_id' => 51,
                'code' => 145555,
                'name' => 'DOTACION Y SUMINISTRO A TRABAJADORES',
            ),
            260 => 
            array (
                'id' => 261,
                'account_id' => 51,
                'code' => 145560,
                'name' => 'ELEMENTOS DE ROPERIA Y LENCERIA',
            ),
            261 => 
            array (
                'id' => 262,
                'account_id' => 51,
                'code' => 145595,
                'name' => 'OTROS',
            ),
            262 => 
            array (
                'id' => 263,
                'account_id' => 51,
                'code' => 145599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            263 => 
            array (
                'id' => 264,
                'account_id' => 52,
                'code' => 146001,
                'name' => '???',
            ),
            264 => 
            array (
                'id' => 265,
                'account_id' => 52,
                'code' => 146099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            265 => 
            array (
                'id' => 266,
                'account_id' => 53,
                'code' => 146501,
                'name' => '???',
            ),
            266 => 
            array (
                'id' => 267,
                'account_id' => 53,
                'code' => 146599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            267 => 
            array (
                'id' => 268,
                'account_id' => 54,
                'code' => 149905,
                'name' => 'PARA OBSOLESCENCIA',
            ),
            268 => 
            array (
                'id' => 269,
                'account_id' => 54,
                'code' => 149910,
                'name' => 'PARA DIFERENCIA DE INVENTARIO FISICO',
            ),
            269 => 
            array (
                'id' => 270,
                'account_id' => 54,
                'code' => 149915,
                'name' => 'PARA PERDIDAS DE INVENTARIOS',
            ),
            270 => 
            array (
                'id' => 271,
                'account_id' => 54,
                'code' => 149920,
                'name' => 'LIFO',
            ),
            271 => 
            array (
                'id' => 272,
                'account_id' => 55,
                'code' => 150405,
                'name' => 'URBANOS',
            ),
            272 => 
            array (
                'id' => 273,
                'account_id' => 55,
                'code' => 150410,
                'name' => 'RURALES',
            ),
            273 => 
            array (
                'id' => 274,
                'account_id' => 55,
                'code' => 150499,
                'name' => 'AJUSTES POR INFLACION',
            ),
            274 => 
            array (
                'id' => 275,
                'account_id' => 56,
                'code' => 150605,
                'name' => 'TUBERIAS Y EQUIPO',
            ),
            275 => 
            array (
                'id' => 276,
                'account_id' => 56,
                'code' => 150610,
                'name' => 'COSTOS DE IMPORTACION MATERIALES',
            ),
            276 => 
            array (
                'id' => 277,
                'account_id' => 56,
                'code' => 150615,
                'name' => 'PROYECTOS DE CONSTRUCCION',
            ),
            277 => 
            array (
                'id' => 278,
                'account_id' => 56,
                'code' => 150699,
                'name' => 'AJUSTES POR INFLACION',
            ),
            278 => 
            array (
                'id' => 279,
                'account_id' => 57,
                'code' => 150805,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            279 => 
            array (
                'id' => 280,
                'account_id' => 57,
                'code' => 150810,
                'name' => 'ACUEDUCTOS PLANTAS Y REDES',
            ),
            280 => 
            array (
                'id' => 281,
                'account_id' => 57,
                'code' => 150815,
                'name' => 'VIAS DE COMUNICACION',
            ),
            281 => 
            array (
                'id' => 282,
                'account_id' => 57,
                'code' => 150820,
                'name' => 'POZOS ARTESIANOS',
            ),
            282 => 
            array (
                'id' => 283,
                'account_id' => 57,
                'code' => 150825,
                'name' => 'PROYECTOS DE EXPLORACION',
            ),
            283 => 
            array (
                'id' => 284,
                'account_id' => 57,
                'code' => 150830,
                'name' => 'PROYECTOS DE DESARROLLO',
            ),
            284 => 
            array (
                'id' => 285,
                'account_id' => 57,
                'code' => 150899,
                'name' => 'AJUSTES POR INFLACION',
            ),
            285 => 
            array (
                'id' => 286,
                'account_id' => 58,
                'code' => 151205,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            286 => 
            array (
                'id' => 287,
                'account_id' => 58,
                'code' => 151210,
                'name' => 'EQUIPO DE OFICINA',
            ),
            287 => 
            array (
                'id' => 288,
                'account_id' => 58,
                'code' => 151215,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            288 => 
            array (
                'id' => 289,
                'account_id' => 58,
                'code' => 151220,
                'name' => 'EQUIPO MEDICO-CIENTIFICO',
            ),
            289 => 
            array (
                'id' => 290,
                'account_id' => 58,
                'code' => 151225,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            290 => 
            array (
                'id' => 291,
                'account_id' => 58,
                'code' => 151230,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            291 => 
            array (
                'id' => 292,
                'account_id' => 58,
                'code' => 151235,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            292 => 
            array (
                'id' => 293,
                'account_id' => 58,
                'code' => 151240,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            293 => 
            array (
                'id' => 294,
                'account_id' => 58,
                'code' => 151245,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            294 => 
            array (
                'id' => 295,
                'account_id' => 58,
                'code' => 151250,
                'name' => 'PLANTAS Y REDES',
            ),
            295 => 
            array (
                'id' => 296,
                'account_id' => 58,
                'code' => 151299,
                'name' => 'AJUSTES POR INFLACION',
            ),
            296 => 
            array (
                'id' => 297,
                'account_id' => 59,
                'code' => 151605,
                'name' => 'EDIFICIOS',
            ),
            297 => 
            array (
                'id' => 298,
                'account_id' => 59,
                'code' => 151610,
                'name' => 'OFICINAS',
            ),
            298 => 
            array (
                'id' => 299,
                'account_id' => 59,
                'code' => 151615,
                'name' => 'ALMACENES',
            ),
            299 => 
            array (
                'id' => 300,
                'account_id' => 59,
                'code' => 151620,
                'name' => 'FABRICAS Y PLANTAS INDUSTRIALES',
            ),
            300 => 
            array (
                'id' => 301,
                'account_id' => 59,
                'code' => 151625,
                'name' => 'SALAS DE EXHIBICION Y VENTAS',
            ),
            301 => 
            array (
                'id' => 302,
                'account_id' => 59,
                'code' => 151630,
                'name' => 'CAFETERIA Y CASINOS',
            ),
            302 => 
            array (
                'id' => 303,
                'account_id' => 59,
                'code' => 151635,
                'name' => 'SILOS',
            ),
            303 => 
            array (
                'id' => 304,
                'account_id' => 59,
                'code' => 151640,
                'name' => 'INVERNADEROS',
            ),
            304 => 
            array (
                'id' => 305,
                'account_id' => 59,
                'code' => 151645,
                'name' => 'CASETAS Y CAMPAMENTOS',
            ),
            305 => 
            array (
                'id' => 306,
                'account_id' => 59,
                'code' => 151650,
                'name' => 'INSTALACIONES AGROPECUARIAS',
            ),
            306 => 
            array (
                'id' => 307,
                'account_id' => 59,
                'code' => 151655,
                'name' => 'VIVIENDAS PARA EMPLEADOS Y OBREROS',
            ),
            307 => 
            array (
                'id' => 308,
                'account_id' => 59,
                'code' => 151660,
                'name' => 'TERMINAL DE BUSES Y TAXIS',
            ),
            308 => 
            array (
                'id' => 309,
                'account_id' => 59,
                'code' => 151663,
                'name' => 'TERMINAL MARITIMO',
            ),
            309 => 
            array (
                'id' => 310,
                'account_id' => 59,
                'code' => 151665,
                'name' => 'TERMINAL FERREO',
            ),
            310 => 
            array (
                'id' => 311,
                'account_id' => 59,
                'code' => 151670,
                'name' => 'PARQUEADEROS, GARAJES Y DEPOSITOS',
            ),
            311 => 
            array (
                'id' => 312,
                'account_id' => 59,
                'code' => 151675,
                'name' => 'HANGARES',
            ),
            312 => 
            array (
                'id' => 313,
                'account_id' => 59,
                'code' => 151680,
                'name' => 'BODEGAS',
            ),
            313 => 
            array (
                'id' => 314,
                'account_id' => 59,
                'code' => 151695,
                'name' => 'OTROS',
            ),
            314 => 
            array (
                'id' => 315,
                'account_id' => 59,
                'code' => 151699,
                'name' => 'AJUSTES POR INFLACION',
            ),
            315 => 
            array (
                'id' => 316,
                'account_id' => 60,
                'code' => 152001,
                'name' => '???',
            ),
            316 => 
            array (
                'id' => 317,
                'account_id' => 60,
                'code' => 152099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            317 => 
            array (
                'id' => 318,
                'account_id' => 61,
                'code' => 152405,
                'name' => 'MUEBLES Y ENSERES',
            ),
            318 => 
            array (
                'id' => 319,
                'account_id' => 61,
                'code' => 152410,
                'name' => 'EQUIPOS',
            ),
            319 => 
            array (
                'id' => 320,
                'account_id' => 61,
                'code' => 152495,
                'name' => 'OTROS',
            ),
            320 => 
            array (
                'id' => 321,
                'account_id' => 61,
                'code' => 152499,
                'name' => 'AJUSTES POR INFLACION',
            ),
            321 => 
            array (
                'id' => 322,
                'account_id' => 62,
                'code' => 152805,
                'name' => 'EQUIPOS DE PROCESAMIENTO DE DATOS',
            ),
            322 => 
            array (
                'id' => 323,
                'account_id' => 62,
                'code' => 152810,
                'name' => 'EQUIPOS DE TELECOMUNICACIONES',
            ),
            323 => 
            array (
                'id' => 324,
                'account_id' => 62,
                'code' => 152815,
                'name' => 'EQUIPOS DE RADIO',
            ),
            324 => 
            array (
                'id' => 325,
                'account_id' => 62,
                'code' => 152820,
                'name' => 'SATELITES Y ANTENAS',
            ),
            325 => 
            array (
                'id' => 326,
                'account_id' => 62,
                'code' => 152825,
                'name' => 'LINEAS TELEFONICAS',
            ),
            326 => 
            array (
                'id' => 327,
                'account_id' => 62,
                'code' => 152895,
                'name' => 'OTROS',
            ),
            327 => 
            array (
                'id' => 328,
                'account_id' => 62,
                'code' => 152899,
                'name' => 'AJUSTES POR INFLACION',
            ),
            328 => 
            array (
                'id' => 329,
                'account_id' => 63,
                'code' => 153205,
                'name' => 'MEDICO',
            ),
            329 => 
            array (
                'id' => 330,
                'account_id' => 63,
                'code' => 153210,
                'name' => 'ODONTOLOGICO',
            ),
            330 => 
            array (
                'id' => 331,
                'account_id' => 63,
                'code' => 153215,
                'name' => 'LABORATORIO',
            ),
            331 => 
            array (
                'id' => 332,
                'account_id' => 63,
                'code' => 153220,
                'name' => 'INSTRUMENTAL',
            ),
            332 => 
            array (
                'id' => 333,
                'account_id' => 63,
                'code' => 153295,
                'name' => 'OTROS',
            ),
            333 => 
            array (
                'id' => 334,
                'account_id' => 63,
                'code' => 153299,
                'name' => 'AJUSTES POR INFLACION',
            ),
            334 => 
            array (
                'id' => 335,
                'account_id' => 64,
                'code' => 153605,
                'name' => 'DE HABITACIONES',
            ),
            335 => 
            array (
                'id' => 336,
                'account_id' => 64,
                'code' => 153610,
                'name' => 'DE COMESTIBLES Y BEBIDAS',
            ),
            336 => 
            array (
                'id' => 337,
                'account_id' => 64,
                'code' => 153695,
                'name' => 'OTROS',
            ),
            337 => 
            array (
                'id' => 338,
                'account_id' => 64,
                'code' => 153699,
                'name' => 'AJUSTES POR INFLACION',
            ),
            338 => 
            array (
                'id' => 339,
                'account_id' => 65,
                'code' => 154005,
                'name' => 'AUTOS, CAMIONETAS Y CAMPEROS',
            ),
            339 => 
            array (
                'id' => 340,
                'account_id' => 65,
                'code' => 154008,
                'name' => 'CAMIONES, VOLQUETAS Y FURGONES',
            ),
            340 => 
            array (
                'id' => 341,
                'account_id' => 65,
                'code' => 154010,
                'name' => 'TRACTOMULAS Y REMOLQUES',
            ),
            341 => 
            array (
                'id' => 342,
                'account_id' => 65,
                'code' => 154015,
                'name' => 'BUSES Y BUSETAS',
            ),
            342 => 
            array (
                'id' => 343,
                'account_id' => 65,
                'code' => 154017,
                'name' => 'RECOLECTORES Y CONTENEDORES',
            ),
            343 => 
            array (
                'id' => 344,
                'account_id' => 65,
                'code' => 154020,
                'name' => 'MONTACARGAS',
            ),
            344 => 
            array (
                'id' => 345,
                'account_id' => 65,
                'code' => 154025,
                'name' => 'PALAS Y GRUAS',
            ),
            345 => 
            array (
                'id' => 346,
                'account_id' => 65,
                'code' => 154030,
                'name' => 'MOTOCICLETAS',
            ),
            346 => 
            array (
                'id' => 347,
                'account_id' => 65,
                'code' => 154035,
                'name' => 'BICICLETAS',
            ),
            347 => 
            array (
                'id' => 348,
                'account_id' => 65,
                'code' => 154040,
                'name' => 'ESTIBAS Y CARRETAS',
            ),
            348 => 
            array (
                'id' => 349,
                'account_id' => 65,
                'code' => 154045,
                'name' => 'BANDAS TRANSPORTADORAS',
            ),
            349 => 
            array (
                'id' => 350,
                'account_id' => 65,
                'code' => 154095,
                'name' => 'OTROS',
            ),
            350 => 
            array (
                'id' => 351,
                'account_id' => 65,
                'code' => 154099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            351 => 
            array (
                'id' => 352,
                'account_id' => 66,
                'code' => 154405,
                'name' => 'BUQUES',
            ),
            352 => 
            array (
                'id' => 353,
                'account_id' => 66,
                'code' => 154410,
                'name' => 'LANCHAS',
            ),
            353 => 
            array (
                'id' => 354,
                'account_id' => 66,
                'code' => 154415,
                'name' => 'REMOLCADORAS',
            ),
            354 => 
            array (
                'id' => 355,
                'account_id' => 66,
                'code' => 154420,
                'name' => 'BOTES',
            ),
            355 => 
            array (
                'id' => 356,
                'account_id' => 66,
                'code' => 154425,
                'name' => 'BOYAS',
            ),
            356 => 
            array (
                'id' => 357,
                'account_id' => 66,
                'code' => 154430,
                'name' => 'AMARRES',
            ),
            357 => 
            array (
                'id' => 358,
                'account_id' => 66,
                'code' => 154435,
                'name' => 'CONTENEDORES Y CHASSISES',
            ),
            358 => 
            array (
                'id' => 359,
                'account_id' => 66,
                'code' => 154440,
                'name' => 'GABARRAS',
            ),
            359 => 
            array (
                'id' => 360,
                'account_id' => 66,
                'code' => 154495,
                'name' => 'OTROS',
            ),
            360 => 
            array (
                'id' => 361,
                'account_id' => 66,
                'code' => 154499,
                'name' => 'AJUSTES POR INFLACION',
            ),
            361 => 
            array (
                'id' => 362,
                'account_id' => 67,
                'code' => 154805,
                'name' => 'AVIONES',
            ),
            362 => 
            array (
                'id' => 363,
                'account_id' => 67,
                'code' => 154810,
                'name' => 'AVIONETAS',
            ),
            363 => 
            array (
                'id' => 364,
                'account_id' => 67,
                'code' => 154815,
                'name' => 'HELICOPTEROS',
            ),
            364 => 
            array (
                'id' => 365,
                'account_id' => 67,
                'code' => 154820,
                'name' => 'TURBINAS Y MOTORES',
            ),
            365 => 
            array (
                'id' => 366,
                'account_id' => 67,
                'code' => 154825,
                'name' => 'MANUALES DE ENTRENAMIENTO PERSONAL TECNICO',
            ),
            366 => 
            array (
                'id' => 367,
                'account_id' => 67,
                'code' => 154830,
                'name' => 'EQUIPOS DE VUELO',
            ),
            367 => 
            array (
                'id' => 368,
                'account_id' => 67,
                'code' => 154895,
                'name' => 'OTROS',
            ),
            368 => 
            array (
                'id' => 369,
                'account_id' => 67,
                'code' => 154899,
                'name' => 'AJUSTES POR INFLACION',
            ),
            369 => 
            array (
                'id' => 370,
                'account_id' => 68,
                'code' => 155205,
                'name' => 'LOCOMOTORAS',
            ),
            370 => 
            array (
                'id' => 371,
                'account_id' => 68,
                'code' => 155210,
                'name' => 'VAGONES',
            ),
            371 => 
            array (
                'id' => 372,
                'account_id' => 68,
                'code' => 155215,
                'name' => 'REDES FERREAS',
            ),
            372 => 
            array (
                'id' => 373,
                'account_id' => 68,
                'code' => 155295,
                'name' => 'OTROS',
            ),
            373 => 
            array (
                'id' => 374,
                'account_id' => 68,
                'code' => 155299,
                'name' => 'AJUSTES POR INFLACION',
            ),
            374 => 
            array (
                'id' => 375,
                'account_id' => 69,
                'code' => 155605,
                'name' => 'INSTALACIONES PARA AGUA Y ENERGIA',
            ),
            375 => 
            array (
                'id' => 376,
                'account_id' => 69,
                'code' => 155610,
                'name' => 'ACUEDUCTO ACEQUIAS Y CANALIZACIONES',
            ),
            376 => 
            array (
                'id' => 377,
                'account_id' => 69,
                'code' => 155615,
                'name' => 'PLANTAS DE GENERACION HIDRAULICA',
            ),
            377 => 
            array (
                'id' => 378,
                'account_id' => 69,
                'code' => 155620,
                'name' => 'PLANTAS DE GENERACION TERMICA',
            ),
            378 => 
            array (
                'id' => 379,
                'account_id' => 69,
                'code' => 155625,
                'name' => 'PLANTAS DE GENERACION A GAS',
            ),
            379 => 
            array (
                'id' => 380,
                'account_id' => 69,
                'code' => 155628,
                'name' => 'PLANTAS DE GENERACION DIESEL, GASOLINA Y PETROLEO',
            ),
            380 => 
            array (
                'id' => 381,
                'account_id' => 69,
                'code' => 155630,
                'name' => 'PLANTAS DE DISTRIBUCION',
            ),
            381 => 
            array (
                'id' => 382,
                'account_id' => 69,
                'code' => 155635,
                'name' => 'PLANTAS DE TRANSMISION Y SUBESTACIONES',
            ),
            382 => 
            array (
                'id' => 383,
                'account_id' => 69,
                'code' => 155640,
                'name' => 'OLEODUCTOS',
            ),
            383 => 
            array (
                'id' => 384,
                'account_id' => 69,
                'code' => 155645,
                'name' => 'GASODUCTOS',
            ),
            384 => 
            array (
                'id' => 385,
                'account_id' => 69,
                'code' => 155647,
                'name' => 'POLIDUCTOS',
            ),
            385 => 
            array (
                'id' => 386,
                'account_id' => 69,
                'code' => 155650,
                'name' => 'REDES DE DISTRIBUCION',
            ),
            386 => 
            array (
                'id' => 387,
                'account_id' => 69,
                'code' => 155655,
                'name' => 'PLANTAS DE TRATAMIENTO',
            ),
            387 => 
            array (
                'id' => 388,
                'account_id' => 69,
                'code' => 155660,
                'name' => 'REDES DE RECOLECCION DE AGUAS NEGRAS',
            ),
            388 => 
            array (
                'id' => 389,
                'account_id' => 69,
                'code' => 155665,
                'name' => 'INSTALACIONES Y EQUIPO DE BOMBEO',
            ),
            389 => 
            array (
                'id' => 390,
                'account_id' => 69,
                'code' => 155670,
                'name' => 'REDES DE DISTRIBUCION DE VAPOR',
            ),
            390 => 
            array (
                'id' => 391,
                'account_id' => 69,
                'code' => 155675,
                'name' => 'REDES DE AIRE',
            ),
            391 => 
            array (
                'id' => 392,
                'account_id' => 69,
                'code' => 155680,
                'name' => 'REDES ALIMENTACION DE GAS',
            ),
            392 => 
            array (
                'id' => 393,
                'account_id' => 69,
                'code' => 155682,
                'name' => 'REDES EXTERNAS DE TELEFONIA',
            ),
            393 => 
            array (
                'id' => 394,
                'account_id' => 69,
                'code' => 155685,
                'name' => 'PLANTAS DESHIDRATADORAS',
            ),
            394 => 
            array (
                'id' => 395,
                'account_id' => 69,
                'code' => 155695,
                'name' => 'OTROS',
            ),
            395 => 
            array (
                'id' => 396,
                'account_id' => 69,
                'code' => 155699,
                'name' => 'AJUSTES POR INFLACION',
            ),
            396 => 
            array (
                'id' => 397,
                'account_id' => 70,
                'code' => 156001,
                'name' => '???',
            ),
            397 => 
            array (
                'id' => 398,
                'account_id' => 70,
                'code' => 156099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            398 => 
            array (
                'id' => 399,
                'account_id' => 71,
                'code' => 156201,
                'name' => '???',
            ),
            399 => 
            array (
                'id' => 400,
                'account_id' => 71,
                'code' => 156299,
                'name' => 'AJUSTES POR INFLACION',
            ),
            400 => 
            array (
                'id' => 401,
                'account_id' => 72,
                'code' => 156405,
                'name' => 'CULTIVOS EN DESARROLLO',
            ),
            401 => 
            array (
                'id' => 402,
                'account_id' => 72,
                'code' => 156410,
                'name' => 'CULTIVOS AMORTIZABLES',
            ),
            402 => 
            array (
                'id' => 403,
                'account_id' => 72,
                'code' => 156499,
                'name' => 'AJUSTES POR INFLACION',
            ),
            403 => 
            array (
                'id' => 404,
                'account_id' => 73,
                'code' => 156805,
                'name' => 'PAVIMENTACION Y PATIOS',
            ),
            404 => 
            array (
                'id' => 405,
                'account_id' => 73,
                'code' => 156810,
                'name' => 'VIAS',
            ),
            405 => 
            array (
                'id' => 406,
                'account_id' => 73,
                'code' => 156815,
                'name' => 'PUENTES',
            ),
            406 => 
            array (
                'id' => 407,
                'account_id' => 73,
                'code' => 156820,
                'name' => 'CALLES',
            ),
            407 => 
            array (
                'id' => 408,
                'account_id' => 73,
                'code' => 156825,
                'name' => 'AERODROMOS',
            ),
            408 => 
            array (
                'id' => 409,
                'account_id' => 73,
                'code' => 156895,
                'name' => 'OTROS',
            ),
            409 => 
            array (
                'id' => 410,
                'account_id' => 73,
                'code' => 156899,
                'name' => 'AJUSTES POR INFLACION',
            ),
            410 => 
            array (
                'id' => 411,
                'account_id' => 74,
                'code' => 157205,
                'name' => 'MINAS',
            ),
            411 => 
            array (
                'id' => 412,
                'account_id' => 74,
                'code' => 157210,
                'name' => 'CANTERAS',
            ),
            412 => 
            array (
                'id' => 413,
                'account_id' => 74,
                'code' => 157299,
                'name' => 'AJUSTES POR INFLACION',
            ),
            413 => 
            array (
                'id' => 414,
                'account_id' => 75,
                'code' => 157601,
                'name' => '???',
            ),
            414 => 
            array (
                'id' => 415,
                'account_id' => 75,
                'code' => 157699,
                'name' => 'AJUSTES POR INFLACION',
            ),
            415 => 
            array (
                'id' => 416,
                'account_id' => 76,
                'code' => 158001,
                'name' => '???',
            ),
            416 => 
            array (
                'id' => 417,
                'account_id' => 76,
                'code' => 158099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            417 => 
            array (
                'id' => 418,
                'account_id' => 77,
                'code' => 158405,
                'name' => 'ESPECIES MENORES',
            ),
            418 => 
            array (
                'id' => 419,
                'account_id' => 77,
                'code' => 158410,
                'name' => 'ESPECIES MAYORES',
            ),
            419 => 
            array (
                'id' => 420,
                'account_id' => 77,
                'code' => 158499,
                'name' => 'AJUSTES POR INFLACION',
            ),
            420 => 
            array (
                'id' => 421,
                'account_id' => 78,
                'code' => 158805,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            421 => 
            array (
                'id' => 422,
                'account_id' => 78,
                'code' => 158810,
                'name' => 'EQUIPO DE OFICINA',
            ),
            422 => 
            array (
                'id' => 423,
                'account_id' => 78,
                'code' => 158815,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            423 => 
            array (
                'id' => 424,
                'account_id' => 78,
                'code' => 158820,
                'name' => 'EQUIPO MEDICO CIENTIFICO',
            ),
            424 => 
            array (
                'id' => 425,
                'account_id' => 78,
                'code' => 158825,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            425 => 
            array (
                'id' => 426,
                'account_id' => 78,
                'code' => 158830,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            426 => 
            array (
                'id' => 427,
                'account_id' => 78,
                'code' => 158835,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            427 => 
            array (
                'id' => 428,
                'account_id' => 78,
                'code' => 158840,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            428 => 
            array (
                'id' => 429,
                'account_id' => 78,
                'code' => 158845,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            429 => 
            array (
                'id' => 430,
                'account_id' => 78,
                'code' => 158850,
                'name' => 'PLANTAS Y REDES',
            ),
            430 => 
            array (
                'id' => 431,
                'account_id' => 78,
                'code' => 158855,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            431 => 
            array (
                'id' => 432,
                'account_id' => 78,
                'code' => 158860,
                'name' => 'SEMOVIENTES',
            ),
            432 => 
            array (
                'id' => 433,
                'account_id' => 78,
                'code' => 158865,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            433 => 
            array (
                'id' => 434,
                'account_id' => 78,
                'code' => 158899,
                'name' => 'AJUSTES POR INFLACION',
            ),
            434 => 
            array (
                'id' => 435,
                'account_id' => 79,
                'code' => 159205,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            435 => 
            array (
                'id' => 436,
                'account_id' => 79,
                'code' => 159210,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            436 => 
            array (
                'id' => 437,
                'account_id' => 79,
                'code' => 159215,
                'name' => 'EQUIPO DE OFICINA',
            ),
            437 => 
            array (
                'id' => 438,
                'account_id' => 79,
                'code' => 159220,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            438 => 
            array (
                'id' => 439,
                'account_id' => 79,
                'code' => 159225,
                'name' => 'EQUIPO MEDICO CIENTIFICO',
            ),
            439 => 
            array (
                'id' => 440,
                'account_id' => 79,
                'code' => 159230,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            440 => 
            array (
                'id' => 441,
                'account_id' => 79,
                'code' => 159235,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            441 => 
            array (
                'id' => 442,
                'account_id' => 79,
                'code' => 159240,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            442 => 
            array (
                'id' => 443,
                'account_id' => 79,
                'code' => 159245,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            443 => 
            array (
                'id' => 444,
                'account_id' => 79,
                'code' => 159250,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            444 => 
            array (
                'id' => 445,
                'account_id' => 79,
                'code' => 159255,
                'name' => 'ACUEDUCTOS PLANTAS Y REDES',
            ),
            445 => 
            array (
                'id' => 446,
                'account_id' => 79,
                'code' => 159260,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            446 => 
            array (
                'id' => 447,
                'account_id' => 79,
                'code' => 159265,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            447 => 
            array (
                'id' => 448,
                'account_id' => 79,
                'code' => 159299,
                'name' => 'AJUSTES POR INFLACION',
            ),
            448 => 
            array (
                'id' => 449,
                'account_id' => 80,
                'code' => 159605,
                'name' => 'EXCESO FISCAL SOBRE LA CONTABLE',
            ),
            449 => 
            array (
                'id' => 450,
                'account_id' => 80,
                'code' => 159610,
            'name' => 'DEFECTO FISCAL SOBRE LA CONTABLE (CR)',
            ),
            450 => 
            array (
                'id' => 451,
                'account_id' => 80,
                'code' => 159699,
                'name' => 'AJUSTES POR INFLACION',
            ),
            451 => 
            array (
                'id' => 452,
                'account_id' => 81,
                'code' => 159705,
                'name' => 'PLANTACIONES AGRICOLAS Y FORESTALES',
            ),
            452 => 
            array (
                'id' => 453,
                'account_id' => 81,
                'code' => 159710,
                'name' => 'VIAS DE COMUNICACION',
            ),
            453 => 
            array (
                'id' => 454,
                'account_id' => 81,
                'code' => 159715,
                'name' => 'SEMOVIENTES',
            ),
            454 => 
            array (
                'id' => 455,
                'account_id' => 81,
                'code' => 159799,
                'name' => 'AJUSTES POR INFLACION',
            ),
            455 => 
            array (
                'id' => 456,
                'account_id' => 82,
                'code' => 159805,
                'name' => 'MINAS Y CANTERAS',
            ),
            456 => 
            array (
                'id' => 457,
                'account_id' => 82,
                'code' => 159815,
                'name' => 'POZOS ARTESIANOS',
            ),
            457 => 
            array (
                'id' => 458,
                'account_id' => 82,
                'code' => 159820,
                'name' => 'YACIMIENTOS',
            ),
            458 => 
            array (
                'id' => 459,
                'account_id' => 82,
                'code' => 159899,
                'name' => 'AJUSTES POR INFLACION',
            ),
            459 => 
            array (
                'id' => 460,
                'account_id' => 83,
                'code' => 159904,
                'name' => 'TERRENOS',
            ),
            460 => 
            array (
                'id' => 461,
                'account_id' => 83,
                'code' => 159906,
                'name' => 'MATERIALES PROYECTOS PETROLEROS',
            ),
            461 => 
            array (
                'id' => 462,
                'account_id' => 83,
                'code' => 159908,
                'name' => 'CONSTRUCCIONES EN CURSO',
            ),
            462 => 
            array (
                'id' => 463,
                'account_id' => 83,
                'code' => 159912,
                'name' => 'MAQUINARIA EN MONTAJE',
            ),
            463 => 
            array (
                'id' => 464,
                'account_id' => 83,
                'code' => 159916,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            464 => 
            array (
                'id' => 465,
                'account_id' => 83,
                'code' => 159920,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            465 => 
            array (
                'id' => 466,
                'account_id' => 83,
                'code' => 159924,
                'name' => 'EQUIPO DE OFICINA',
            ),
            466 => 
            array (
                'id' => 467,
                'account_id' => 83,
                'code' => 159928,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            467 => 
            array (
                'id' => 468,
                'account_id' => 83,
                'code' => 159932,
                'name' => 'EQUIPO MEDICO CIENTIFICO',
            ),
            468 => 
            array (
                'id' => 469,
                'account_id' => 83,
                'code' => 159936,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            469 => 
            array (
                'id' => 470,
                'account_id' => 83,
                'code' => 159940,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            470 => 
            array (
                'id' => 471,
                'account_id' => 83,
                'code' => 159944,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            471 => 
            array (
                'id' => 472,
                'account_id' => 83,
                'code' => 159948,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            472 => 
            array (
                'id' => 473,
                'account_id' => 83,
                'code' => 159952,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            473 => 
            array (
                'id' => 474,
                'account_id' => 83,
                'code' => 159956,
                'name' => 'ACUEDUCTOS, PLANTAS Y REDES',
            ),
            474 => 
            array (
                'id' => 475,
                'account_id' => 83,
                'code' => 159960,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            475 => 
            array (
                'id' => 476,
                'account_id' => 83,
                'code' => 159962,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            476 => 
            array (
                'id' => 477,
                'account_id' => 83,
                'code' => 159964,
                'name' => 'PLANTACIONES AGRICOLAS Y FORESTALES',
            ),
            477 => 
            array (
                'id' => 478,
                'account_id' => 83,
                'code' => 159968,
                'name' => 'VIAS DE COMUNICACION',
            ),
            478 => 
            array (
                'id' => 479,
                'account_id' => 83,
                'code' => 159972,
                'name' => 'MINAS Y CANTERAS',
            ),
            479 => 
            array (
                'id' => 480,
                'account_id' => 83,
                'code' => 159980,
                'name' => 'POZOS ARTESIANOS',
            ),
            480 => 
            array (
                'id' => 481,
                'account_id' => 83,
                'code' => 159984,
                'name' => 'YACIMIENTOS',
            ),
            481 => 
            array (
                'id' => 482,
                'account_id' => 83,
                'code' => 159988,
                'name' => 'SEMOVIENTES',
            ),
            482 => 
            array (
                'id' => 483,
                'account_id' => 83,
                'code' => 159992,
                'name' => 'PROPIEDADES PLANTA Y EQUIPO EN TRANSITO',
            ),
            483 => 
            array (
                'id' => 484,
                'account_id' => 84,
                'code' => 160505,
                'name' => 'FORMADO O ESTIMADO',
            ),
            484 => 
            array (
                'id' => 485,
                'account_id' => 84,
                'code' => 160510,
                'name' => 'ADQUIRIDO O COMPRADO',
            ),
            485 => 
            array (
                'id' => 486,
                'account_id' => 84,
                'code' => 160599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            486 => 
            array (
                'id' => 487,
                'account_id' => 85,
                'code' => 161005,
                'name' => 'ADQUIRIDAS',
            ),
            487 => 
            array (
                'id' => 488,
                'account_id' => 85,
                'code' => 161010,
                'name' => 'FORMADAS',
            ),
            488 => 
            array (
                'id' => 489,
                'account_id' => 85,
                'code' => 161099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            489 => 
            array (
                'id' => 490,
                'account_id' => 86,
                'code' => 161505,
                'name' => 'ADQUIRIDAS',
            ),
            490 => 
            array (
                'id' => 491,
                'account_id' => 86,
                'code' => 161510,
                'name' => 'FORMADAS',
            ),
            491 => 
            array (
                'id' => 492,
                'account_id' => 86,
                'code' => 161599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            492 => 
            array (
                'id' => 493,
                'account_id' => 87,
                'code' => 162005,
                'name' => 'CONCESIONES',
            ),
            493 => 
            array (
                'id' => 494,
                'account_id' => 87,
                'code' => 162010,
                'name' => 'FRANQUICIAS',
            ),
            494 => 
            array (
                'id' => 495,
                'account_id' => 87,
                'code' => 162099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            495 => 
            array (
                'id' => 496,
                'account_id' => 88,
                'code' => 162505,
                'name' => 'DERECHOS DE AUTOR',
            ),
            496 => 
            array (
                'id' => 497,
                'account_id' => 88,
                'code' => 162510,
                'name' => 'PUESTO DE BOLSA',
            ),
            497 => 
            array (
                'id' => 498,
                'account_id' => 88,
                'code' => 162515,
                'name' => 'EN FIDEICOMISOS INMOBILIARIOS',
            ),
            498 => 
            array (
                'id' => 499,
                'account_id' => 88,
                'code' => 162520,
                'name' => 'EN FIDEICOMISOS DE GARANTIA',
            ),
            499 => 
            array (
                'id' => 500,
                'account_id' => 88,
                'code' => 162525,
                'name' => 'EN FIDEICOMISOS DE ADMINISTRACION',
            ),
            500 => 
            array (
                'id' => 501,
                'account_id' => 88,
                'code' => 162595,
                'name' => 'OTROS',
            ),
            501 => 
            array (
                'id' => 502,
                'account_id' => 88,
                'code' => 162599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            502 => 
            array (
                'id' => 503,
                'account_id' => 89,
                'code' => 163001,
                'name' => '???',
            ),
            503 => 
            array (
                'id' => 504,
                'account_id' => 89,
                'code' => 163099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            504 => 
            array (
                'id' => 505,
                'account_id' => 90,
                'code' => 163501,
                'name' => '???',
            ),
            505 => 
            array (
                'id' => 506,
                'account_id' => 90,
                'code' => 163599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            506 => 
            array (
                'id' => 507,
                'account_id' => 91,
                'code' => 169805,
                'name' => 'CREDITO MERCANTIL',
            ),
            507 => 
            array (
                'id' => 508,
                'account_id' => 91,
                'code' => 169810,
                'name' => 'MARCAS',
            ),
            508 => 
            array (
                'id' => 509,
                'account_id' => 91,
                'code' => 169815,
                'name' => 'PATENTES',
            ),
            509 => 
            array (
                'id' => 510,
                'account_id' => 91,
                'code' => 169820,
                'name' => 'CONCESIONES Y FRANQUICIAS',
            ),
            510 => 
            array (
                'id' => 511,
                'account_id' => 91,
                'code' => 169830,
                'name' => 'DERECHOS',
            ),
            511 => 
            array (
                'id' => 512,
                'account_id' => 91,
                'code' => 169835,
                'name' => 'KNOW HOW',
            ),
            512 => 
            array (
                'id' => 513,
                'account_id' => 91,
                'code' => 169840,
                'name' => 'LICENCIAS',
            ),
            513 => 
            array (
                'id' => 514,
                'account_id' => 91,
                'code' => 169899,
                'name' => 'AJUSTES POR INFLACION',
            ),
            514 => 
            array (
                'id' => 515,
                'account_id' => 92,
                'code' => 169901,
                'name' => '???',
            ),
            515 => 
            array (
                'id' => 516,
                'account_id' => 93,
                'code' => 170505,
                'name' => 'INTERESES',
            ),
            516 => 
            array (
                'id' => 517,
                'account_id' => 93,
                'code' => 170510,
                'name' => 'HONORARIOS',
            ),
            517 => 
            array (
                'id' => 518,
                'account_id' => 93,
                'code' => 170515,
                'name' => 'COMISIONES',
            ),
            518 => 
            array (
                'id' => 519,
                'account_id' => 93,
                'code' => 170520,
                'name' => 'SEGUROS Y FIANZAS',
            ),
            519 => 
            array (
                'id' => 520,
                'account_id' => 93,
                'code' => 170525,
                'name' => 'ARRENDAMIENTOS',
            ),
            520 => 
            array (
                'id' => 521,
                'account_id' => 93,
                'code' => 170530,
                'name' => 'BODEGAJES',
            ),
            521 => 
            array (
                'id' => 522,
                'account_id' => 93,
                'code' => 170535,
                'name' => 'MANTENIMIENTO EQUIPOS',
            ),
            522 => 
            array (
                'id' => 523,
                'account_id' => 93,
                'code' => 170540,
                'name' => 'SERVICIOS',
            ),
            523 => 
            array (
                'id' => 524,
                'account_id' => 93,
                'code' => 170545,
                'name' => 'SUSCRIPCIONES',
            ),
            524 => 
            array (
                'id' => 525,
                'account_id' => 93,
                'code' => 170595,
                'name' => 'OTROS',
            ),
            525 => 
            array (
                'id' => 526,
                'account_id' => 94,
                'code' => 171004,
                'name' => 'ORGANIZACION Y PREOPERATIVOS',
            ),
            526 => 
            array (
                'id' => 527,
                'account_id' => 94,
                'code' => 171008,
                'name' => 'REMODELACIONES',
            ),
            527 => 
            array (
                'id' => 528,
                'account_id' => 94,
                'code' => 171012,
                'name' => 'ESTUDIOS, INVESTIGACIONES Y PROYECTOS',
            ),
            528 => 
            array (
                'id' => 529,
                'account_id' => 94,
                'code' => 171016,
            'name' => 'PROGRAMAS PARA COMPUTADOR (SOFTWARE)',
            ),
            529 => 
            array (
                'id' => 530,
                'account_id' => 94,
                'code' => 171020,
                'name' => 'UTILES Y PAPELERIA',
            ),
            530 => 
            array (
                'id' => 531,
                'account_id' => 94,
                'code' => 171024,
                'name' => 'MEJORAS A PROPIEDADES AJENAS',
            ),
            531 => 
            array (
                'id' => 532,
                'account_id' => 94,
                'code' => 171028,
                'name' => 'CONTRIBUCIONES Y AFILIACIONES',
            ),
            532 => 
            array (
                'id' => 533,
                'account_id' => 94,
                'code' => 171032,
                'name' => 'ENTRENAMIENTO DE PERSONAL',
            ),
            533 => 
            array (
                'id' => 534,
                'account_id' => 94,
                'code' => 171036,
                'name' => 'FERIAS Y EXPOSICIONES',
            ),
            534 => 
            array (
                'id' => 535,
                'account_id' => 94,
                'code' => 171040,
                'name' => 'LICENCIAS',
            ),
            535 => 
            array (
                'id' => 536,
                'account_id' => 94,
                'code' => 171044,
                'name' => 'PUBLICIDAD, PROPAGANDA Y AVISOS',
            ),
            536 => 
            array (
                'id' => 537,
                'account_id' => 94,
                'code' => 171048,
                'name' => 'ELEMENTOS DE ASEO Y CAFETERIA',
            ),
            537 => 
            array (
                'id' => 538,
                'account_id' => 94,
                'code' => 171052,
                'name' => 'MOLDES Y TROQUELES',
            ),
            538 => 
            array (
                'id' => 539,
                'account_id' => 94,
                'code' => 171056,
                'name' => 'INSTRUMENTAL QUIRURGICO',
            ),
            539 => 
            array (
                'id' => 540,
                'account_id' => 94,
                'code' => 171060,
                'name' => 'DOTACION Y SUMINISTRO A TRABAJADORES',
            ),
            540 => 
            array (
                'id' => 541,
                'account_id' => 94,
                'code' => 171064,
                'name' => 'ELEMENTOS DE ROPERIA Y LENCERIA',
            ),
            541 => 
            array (
                'id' => 542,
                'account_id' => 94,
                'code' => 171068,
                'name' => 'LOZA Y CRISTALERIA',
            ),
            542 => 
            array (
                'id' => 543,
                'account_id' => 94,
                'code' => 171072,
                'name' => 'DESCUENTO EN COLOCACION DE BONOS',
            ),
            543 => 
            array (
                'id' => 544,
                'account_id' => 94,
                'code' => 171076,
                'name' => 'IMPUESTO DE RENTA DIFERIDO "DEBITOS" POR DIFERENCIAS TEMPORALES',
            ),
            544 => 
            array (
                'id' => 545,
                'account_id' => 94,
                'code' => 171080,
                'name' => 'CONCURSOS Y LICITACIONES',
            ),
            545 => 
            array (
                'id' => 546,
                'account_id' => 94,
                'code' => 171095,
                'name' => 'OTROS',
            ),
            546 => 
            array (
                'id' => 547,
                'account_id' => 94,
                'code' => 171099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            547 => 
            array (
                'id' => 548,
                'account_id' => 95,
                'code' => 171505,
                'name' => 'POZOS SECOS',
            ),
            548 => 
            array (
                'id' => 549,
                'account_id' => 95,
                'code' => 171510,
                'name' => 'POZOS NO COMERCIALES',
            ),
            549 => 
            array (
                'id' => 550,
                'account_id' => 95,
                'code' => 171515,
                'name' => 'OTROS COSTOS DE EXPLORACION',
            ),
            550 => 
            array (
                'id' => 551,
                'account_id' => 95,
                'code' => 171599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            551 => 
            array (
                'id' => 552,
                'account_id' => 96,
                'code' => 172005,
                'name' => 'PERFORACION Y EXPLOTACION',
            ),
            552 => 
            array (
                'id' => 553,
                'account_id' => 96,
                'code' => 172010,
                'name' => 'PERFORACIONES CAMPOS EN DESARROLLO',
            ),
            553 => 
            array (
                'id' => 554,
                'account_id' => 96,
                'code' => 172015,
                'name' => 'FACILIDADES DE PRODUCCION',
            ),
            554 => 
            array (
                'id' => 555,
                'account_id' => 96,
                'code' => 172020,
                'name' => 'SERVICIO A POZOS',
            ),
            555 => 
            array (
                'id' => 556,
                'account_id' => 96,
                'code' => 172099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            556 => 
            array (
                'id' => 557,
                'account_id' => 97,
                'code' => 173001,
                'name' => '???',
            ),
            557 => 
            array (
                'id' => 558,
                'account_id' => 98,
                'code' => 179805,
                'name' => 'COSTOS DE EXPLORACION POR AMORTIZAR',
            ),
            558 => 
            array (
                'id' => 559,
                'account_id' => 98,
                'code' => 179810,
                'name' => 'COSTOS DE EXPLOTACION Y DESARROLLO',
            ),
            559 => 
            array (
                'id' => 560,
                'account_id' => 98,
                'code' => 179899,
                'name' => 'AJUSTES POR INFLACION',
            ),
            560 => 
            array (
                'id' => 561,
                'account_id' => 99,
                'code' => 180505,
                'name' => 'OBRAS DE ARTE',
            ),
            561 => 
            array (
                'id' => 562,
                'account_id' => 99,
                'code' => 180510,
                'name' => 'BIBLIOTECAS',
            ),
            562 => 
            array (
                'id' => 563,
                'account_id' => 99,
                'code' => 180595,
                'name' => 'OTROS',
            ),
            563 => 
            array (
                'id' => 564,
                'account_id' => 99,
                'code' => 180599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            564 => 
            array (
                'id' => 565,
                'account_id' => 100,
                'code' => 189505,
                'name' => 'MAQUINAS PORTEADORAS',
            ),
            565 => 
            array (
                'id' => 566,
                'account_id' => 100,
                'code' => 189510,
                'name' => 'BIENES ENTREGADOS EN COMODATO',
            ),
            566 => 
            array (
                'id' => 567,
                'account_id' => 100,
                'code' => 189515,
            'name' => 'AMORTIZACION ACUMULADA DE BIENES ENTREGADOS EN COMODATO (CR)',
            ),
            567 => 
            array (
                'id' => 568,
                'account_id' => 100,
                'code' => 189520,
                'name' => 'BIENES RECIBIDOS EN PAGO',
            ),
            568 => 
            array (
                'id' => 569,
                'account_id' => 100,
                'code' => 189525,
                'name' => 'DERECHOS SUCESORALES',
            ),
            569 => 
            array (
                'id' => 570,
                'account_id' => 100,
                'code' => 189530,
                'name' => 'ESTAMPILLAS',
            ),
            570 => 
            array (
                'id' => 571,
                'account_id' => 100,
                'code' => 189595,
                'name' => 'OTROS',
            ),
            571 => 
            array (
                'id' => 572,
                'account_id' => 100,
                'code' => 189599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            572 => 
            array (
                'id' => 573,
                'account_id' => 101,
                'code' => 189905,
                'name' => 'BIENES DE ARTE Y CULTURA',
            ),
            573 => 
            array (
                'id' => 574,
                'account_id' => 101,
                'code' => 189995,
                'name' => 'DIVERSOS',
            ),
            574 => 
            array (
                'id' => 575,
                'account_id' => 102,
                'code' => 190505,
                'name' => 'ACCIONES',
            ),
            575 => 
            array (
                'id' => 576,
                'account_id' => 102,
                'code' => 190510,
                'name' => 'CUOTAS O PARTES DE INTERES SOCIAL',
            ),
            576 => 
            array (
                'id' => 577,
                'account_id' => 102,
                'code' => 190515,
                'name' => 'DERECHOS FIDUCIARIOS',
            ),
            577 => 
            array (
                'id' => 578,
                'account_id' => 103,
                'code' => 191004,
                'name' => 'TERRENOS',
            ),
            578 => 
            array (
                'id' => 579,
                'account_id' => 103,
                'code' => 191006,
                'name' => 'MATERIALES PROYECTOS PETROLEROS',
            ),
            579 => 
            array (
                'id' => 580,
                'account_id' => 103,
                'code' => 191008,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            580 => 
            array (
                'id' => 581,
                'account_id' => 103,
                'code' => 191012,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            581 => 
            array (
                'id' => 582,
                'account_id' => 103,
                'code' => 191016,
                'name' => 'EQUIPO DE OFICINA',
            ),
            582 => 
            array (
                'id' => 583,
                'account_id' => 103,
                'code' => 191020,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            583 => 
            array (
                'id' => 584,
                'account_id' => 103,
                'code' => 191024,
                'name' => 'EQUIPO MEDICO CIENTIFICO',
            ),
            584 => 
            array (
                'id' => 585,
                'account_id' => 103,
                'code' => 191028,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            585 => 
            array (
                'id' => 586,
                'account_id' => 103,
                'code' => 191032,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            586 => 
            array (
                'id' => 587,
                'account_id' => 103,
                'code' => 191036,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            587 => 
            array (
                'id' => 588,
                'account_id' => 103,
                'code' => 191040,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            588 => 
            array (
                'id' => 589,
                'account_id' => 103,
                'code' => 191044,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            589 => 
            array (
                'id' => 590,
                'account_id' => 103,
                'code' => 191048,
                'name' => 'ACUEDUCTOS PLANTAS Y REDES',
            ),
            590 => 
            array (
                'id' => 591,
                'account_id' => 103,
                'code' => 191052,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            591 => 
            array (
                'id' => 592,
                'account_id' => 103,
                'code' => 191056,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            592 => 
            array (
                'id' => 593,
                'account_id' => 103,
                'code' => 191060,
                'name' => 'PLANTACIONES AGRICOLAS Y FORESTALES',
            ),
            593 => 
            array (
                'id' => 594,
                'account_id' => 103,
                'code' => 191064,
                'name' => 'VIAS DE COMUNICACION',
            ),
            594 => 
            array (
                'id' => 595,
                'account_id' => 103,
                'code' => 191068,
                'name' => 'MINAS Y CANTERAS',
            ),
            595 => 
            array (
                'id' => 596,
                'account_id' => 103,
                'code' => 191072,
                'name' => 'POZOS ARTESIANOS',
            ),
            596 => 
            array (
                'id' => 597,
                'account_id' => 103,
                'code' => 191076,
                'name' => 'YACIMIENTOS',
            ),
            597 => 
            array (
                'id' => 598,
                'account_id' => 103,
                'code' => 191080,
                'name' => 'SEMOVIENTES',
            ),
            598 => 
            array (
                'id' => 599,
                'account_id' => 104,
                'code' => 199505,
                'name' => 'BIENES DE ARTE Y CULTURA',
            ),
            599 => 
            array (
                'id' => 600,
                'account_id' => 104,
                'code' => 199510,
                'name' => 'BIENES ENTREGADOS EN COMODATO',
            ),
            600 => 
            array (
                'id' => 601,
                'account_id' => 104,
                'code' => 199515,
                'name' => 'BIENES RECIBIDOS EN PAGO',
            ),
            601 => 
            array (
                'id' => 602,
                'account_id' => 104,
                'code' => 199520,
                'name' => 'INVENTARIO DE SEMOVIENTES',
            ),
            602 => 
            array (
                'id' => 603,
                'account_id' => 105,
                'code' => 210505,
                'name' => 'SOBREGIROS',
            ),
            603 => 
            array (
                'id' => 604,
                'account_id' => 105,
                'code' => 210510,
                'name' => 'PAGARES',
            ),
            604 => 
            array (
                'id' => 605,
                'account_id' => 105,
                'code' => 210515,
                'name' => 'CARTAS DE CREDITO',
            ),
            605 => 
            array (
                'id' => 606,
                'account_id' => 105,
                'code' => 210520,
                'name' => 'ACEPTACIONES BANCARIAS',
            ),
            606 => 
            array (
                'id' => 607,
                'account_id' => 106,
                'code' => 211005,
                'name' => 'SOBREGIROS',
            ),
            607 => 
            array (
                'id' => 608,
                'account_id' => 106,
                'code' => 211010,
                'name' => 'PAGARES',
            ),
            608 => 
            array (
                'id' => 609,
                'account_id' => 106,
                'code' => 211015,
                'name' => 'CARTAS DE CREDITO',
            ),
            609 => 
            array (
                'id' => 610,
                'account_id' => 106,
                'code' => 211020,
                'name' => 'ACEPTACIONES BANCARIAS',
            ),
            610 => 
            array (
                'id' => 611,
                'account_id' => 107,
                'code' => 211505,
                'name' => 'PAGARES',
            ),
            611 => 
            array (
                'id' => 612,
                'account_id' => 107,
                'code' => 211510,
                'name' => 'ACEPTACIONES FINANCIERAS',
            ),
            612 => 
            array (
                'id' => 613,
                'account_id' => 107,
                'code' => 211515,
                'name' => 'CARTAS DE CREDITO',
            ),
            613 => 
            array (
                'id' => 614,
                'account_id' => 108,
                'code' => 212005,
                'name' => 'PAGARES',
            ),
            614 => 
            array (
                'id' => 615,
                'account_id' => 108,
                'code' => 212010,
                'name' => 'ACEPTACIONES FINANCIERAS',
            ),
            615 => 
            array (
                'id' => 616,
                'account_id' => 109,
                'code' => 212505,
                'name' => 'SOBREGIROS',
            ),
            616 => 
            array (
                'id' => 617,
                'account_id' => 109,
                'code' => 212510,
                'name' => 'PAGARES',
            ),
            617 => 
            array (
                'id' => 618,
                'account_id' => 109,
                'code' => 212515,
                'name' => 'HIPOTECARIAS',
            ),
            618 => 
            array (
                'id' => 619,
                'account_id' => 110,
                'code' => 213001,
                'name' => '???',
            ),
            619 => 
            array (
                'id' => 620,
                'account_id' => 111,
                'code' => 213505,
                'name' => 'ACCIONES',
            ),
            620 => 
            array (
                'id' => 621,
                'account_id' => 111,
                'code' => 213510,
                'name' => 'CUOTAS O PARTES DE INTERES SOCIAL',
            ),
            621 => 
            array (
                'id' => 622,
                'account_id' => 111,
                'code' => 213515,
                'name' => 'BONOS',
            ),
            622 => 
            array (
                'id' => 623,
                'account_id' => 111,
                'code' => 213520,
                'name' => 'CEDULAS',
            ),
            623 => 
            array (
                'id' => 624,
                'account_id' => 111,
                'code' => 213525,
                'name' => 'CERTIFICADOS',
            ),
            624 => 
            array (
                'id' => 625,
                'account_id' => 111,
                'code' => 213530,
                'name' => 'PAPELES COMERCIALES',
            ),
            625 => 
            array (
                'id' => 626,
                'account_id' => 111,
                'code' => 213535,
                'name' => 'TITULOS',
            ),
            626 => 
            array (
                'id' => 627,
                'account_id' => 111,
                'code' => 213540,
                'name' => 'ACEPTACIONES BANCARIAS O FINANCIERAS',
            ),
            627 => 
            array (
                'id' => 628,
                'account_id' => 111,
                'code' => 213595,
                'name' => 'OTROS',
            ),
            628 => 
            array (
                'id' => 629,
                'account_id' => 112,
                'code' => 214001,
                'name' => '???',
            ),
            629 => 
            array (
                'id' => 630,
                'account_id' => 113,
                'code' => 214505,
                'name' => 'GOBIERNO NACIONAL',
            ),
            630 => 
            array (
                'id' => 631,
                'account_id' => 113,
                'code' => 214510,
                'name' => 'ENTIDADES OFICIALES',
            ),
            631 => 
            array (
                'id' => 632,
                'account_id' => 113,
                'code' => 219505,
                'name' => 'PARTICULARES',
            ),
            632 => 
            array (
                'id' => 633,
                'account_id' => 114,
                'code' => 219510,
                'name' => 'COMPAÑIAS VINCULADAS',
            ),
            633 => 
            array (
                'id' => 634,
                'account_id' => 114,
                'code' => 219515,
                'name' => 'CASA MATRIZ',
            ),
            634 => 
            array (
                'id' => 635,
                'account_id' => 114,
                'code' => 219520,
                'name' => 'SOCIOS O ACCIONISTAS',
            ),
            635 => 
            array (
                'id' => 636,
                'account_id' => 114,
                'code' => 219525,
                'name' => 'FONDOS Y COOPERATIVAS',
            ),
            636 => 
            array (
                'id' => 637,
                'account_id' => 114,
                'code' => 219595,
                'name' => 'OTRAS',
            ),
            637 => 
            array (
                'id' => 638,
                'account_id' => 115,
                'code' => 220501,
                'name' => '???',
            ),
            638 => 
            array (
                'id' => 639,
                'account_id' => 116,
                'code' => 221001,
                'name' => '???',
            ),
            639 => 
            array (
                'id' => 640,
                'account_id' => 117,
                'code' => 221501,
                'name' => '???',
            ),
            640 => 
            array (
                'id' => 641,
                'account_id' => 118,
                'code' => 222001,
                'name' => '???',
            ),
            641 => 
            array (
                'id' => 642,
                'account_id' => 119,
                'code' => 222501,
                'name' => '???',
            ),
            642 => 
            array (
                'id' => 643,
                'account_id' => 120,
                'code' => 230501,
                'name' => '???',
            ),
            643 => 
            array (
                'id' => 644,
                'account_id' => 121,
                'code' => 231001,
                'name' => '???',
            ),
            644 => 
            array (
                'id' => 645,
                'account_id' => 122,
                'code' => 231501,
                'name' => '???',
            ),
            645 => 
            array (
                'id' => 646,
                'account_id' => 123,
                'code' => 232001,
                'name' => '???',
            ),
            646 => 
            array (
                'id' => 647,
                'account_id' => 124,
                'code' => 233001,
                'name' => '???',
            ),
            647 => 
            array (
                'id' => 648,
                'account_id' => 125,
                'code' => 233505,
                'name' => 'GASTOS FINANCIEROS',
            ),
            648 => 
            array (
                'id' => 649,
                'account_id' => 125,
                'code' => 233510,
                'name' => 'GASTOS LEGALES',
            ),
            649 => 
            array (
                'id' => 650,
                'account_id' => 125,
                'code' => 233515,
                'name' => 'LIBROS, SUSCRIPCIONES, PERIODICOS Y REVISTAS',
            ),
            650 => 
            array (
                'id' => 651,
                'account_id' => 125,
                'code' => 233520,
                'name' => 'COMISIONES',
            ),
            651 => 
            array (
                'id' => 652,
                'account_id' => 125,
                'code' => 233525,
                'name' => 'HONORARIOS',
            ),
            652 => 
            array (
                'id' => 653,
                'account_id' => 125,
                'code' => 233530,
                'name' => 'SERVICIOS TECNICOS',
            ),
            653 => 
            array (
                'id' => 654,
                'account_id' => 125,
                'code' => 233535,
                'name' => 'SERVICIOS DE MANTENIMIENTO',
            ),
            654 => 
            array (
                'id' => 655,
                'account_id' => 125,
                'code' => 233540,
                'name' => 'ARRENDAMIENTOS',
            ),
            655 => 
            array (
                'id' => 656,
                'account_id' => 125,
                'code' => 233545,
                'name' => 'TRANSPORTES, FLETES Y ACARREOS',
            ),
            656 => 
            array (
                'id' => 657,
                'account_id' => 125,
                'code' => 233550,
                'name' => 'SERVICIOS PUBLICOS',
            ),
            657 => 
            array (
                'id' => 658,
                'account_id' => 125,
                'code' => 233555,
                'name' => 'SEGUROS',
            ),
            658 => 
            array (
                'id' => 659,
                'account_id' => 125,
                'code' => 233560,
                'name' => 'GASTOS DE VIAJE',
            ),
            659 => 
            array (
                'id' => 660,
                'account_id' => 125,
                'code' => 233565,
                'name' => 'GASTOS DE REPRESENTACION Y RELACIONES PUBLICAS',
            ),
            660 => 
            array (
                'id' => 661,
                'account_id' => 125,
                'code' => 233570,
                'name' => 'SERVICIOS ADUANEROS',
            ),
            661 => 
            array (
                'id' => 662,
                'account_id' => 125,
                'code' => 233595,
                'name' => 'OTROS',
            ),
            662 => 
            array (
                'id' => 663,
                'account_id' => 126,
                'code' => 234001,
                'name' => '???',
            ),
            663 => 
            array (
                'id' => 664,
                'account_id' => 127,
                'code' => 234501,
                'name' => '???',
            ),
            664 => 
            array (
                'id' => 665,
                'account_id' => 128,
                'code' => 235001,
                'name' => '???',
            ),
            665 => 
            array (
                'id' => 666,
                'account_id' => 129,
                'code' => 235505,
                'name' => 'ACCIONISTAS',
            ),
            666 => 
            array (
                'id' => 667,
                'account_id' => 129,
                'code' => 235510,
                'name' => 'SOCIOS',
            ),
            667 => 
            array (
                'id' => 668,
                'account_id' => 130,
                'code' => 236005,
                'name' => 'DIVIDENDOS',
            ),
            668 => 
            array (
                'id' => 669,
                'account_id' => 130,
                'code' => 236010,
                'name' => 'PARTICIPACIONES',
            ),
            669 => 
            array (
                'id' => 670,
                'account_id' => 131,
                'code' => 236505,
                'name' => 'SALARIOS Y PAGOS LABORALES',
            ),
            670 => 
            array (
                'id' => 671,
                'account_id' => 131,
                'code' => 236510,
                'name' => 'DIVIDENDOS Y/O PARTICIPACIONES',
            ),
            671 => 
            array (
                'id' => 672,
                'account_id' => 131,
                'code' => 236515,
                'name' => 'HONORARIOS',
            ),
            672 => 
            array (
                'id' => 673,
                'account_id' => 131,
                'code' => 236520,
                'name' => 'COMISIONES',
            ),
            673 => 
            array (
                'id' => 674,
                'account_id' => 131,
                'code' => 236525,
                'name' => 'SERVICIOS',
            ),
            674 => 
            array (
                'id' => 675,
                'account_id' => 131,
                'code' => 236530,
                'name' => 'ARRENDAMIENTOS',
            ),
            675 => 
            array (
                'id' => 676,
                'account_id' => 131,
                'code' => 236535,
                'name' => 'RENDIMIENTOS FINANCIEROS',
            ),
            676 => 
            array (
                'id' => 677,
                'account_id' => 131,
                'code' => 236540,
                'name' => 'COMPRAS',
            ),
            677 => 
            array (
                'id' => 678,
                'account_id' => 131,
                'code' => 236545,
                'name' => 'LOTERIAS, RIFAS, APUESTAS Y SIMILARES',
            ),
            678 => 
            array (
                'id' => 679,
                'account_id' => 131,
                'code' => 236550,
                'name' => 'POR PAGOS AL EXTERIOR',
            ),
            679 => 
            array (
                'id' => 680,
                'account_id' => 131,
                'code' => 236555,
                'name' => 'POR INGRESOS OBTENIDOS EN EL EXTERIOR',
            ),
            680 => 
            array (
                'id' => 681,
                'account_id' => 131,
                'code' => 236560,
                'name' => 'ENAJENACION PROPIEDADES PLANTA Y EQUIPO PERSONAS NATURALES',
            ),
            681 => 
            array (
                'id' => 682,
                'account_id' => 131,
                'code' => 236565,
                'name' => 'POR IMPUESTO DE TIMBRE',
            ),
            682 => 
            array (
                'id' => 683,
                'account_id' => 131,
                'code' => 236570,
                'name' => 'OTRAS RETENCIONES Y PATRIMONIO',
            ),
            683 => 
            array (
                'id' => 684,
                'account_id' => 131,
                'code' => 236575,
                'name' => 'AUTORRETENCIONES',
            ),
            684 => 
            array (
                'id' => 685,
                'account_id' => 132,
                'code' => 237005,
                'name' => 'APORTES AL I.S.S.',
            ),
            685 => 
            array (
                'id' => 686,
                'account_id' => 132,
                'code' => 237010,
                'name' => 'APORTES AL I.C.B.F., SENA Y CAJAS DE COMPENSACION',
            ),
            686 => 
            array (
                'id' => 687,
                'account_id' => 132,
                'code' => 237015,
                'name' => 'APORTES AL F.I.C.',
            ),
            687 => 
            array (
                'id' => 688,
                'account_id' => 132,
                'code' => 237025,
                'name' => 'EMBARGOS JUDICIALES',
            ),
            688 => 
            array (
                'id' => 689,
                'account_id' => 132,
                'code' => 237030,
                'name' => 'LIBRANZAS',
            ),
            689 => 
            array (
                'id' => 690,
                'account_id' => 132,
                'code' => 237035,
                'name' => 'SINDICATOS',
            ),
            690 => 
            array (
                'id' => 691,
                'account_id' => 132,
                'code' => 237040,
                'name' => 'COOPERATIVAS',
            ),
            691 => 
            array (
                'id' => 692,
                'account_id' => 132,
                'code' => 237045,
                'name' => 'FONDOS',
            ),
            692 => 
            array (
                'id' => 693,
                'account_id' => 132,
                'code' => 237095,
                'name' => 'OTROS',
            ),
            693 => 
            array (
                'id' => 694,
                'account_id' => 133,
                'code' => 237501,
                'name' => '???',
            ),
            694 => 
            array (
                'id' => 695,
                'account_id' => 134,
                'code' => 238005,
                'name' => 'DEPOSITARIOS',
            ),
            695 => 
            array (
                'id' => 696,
                'account_id' => 134,
                'code' => 238010,
                'name' => 'COMISIONISTAS DE BOLSAS',
            ),
            696 => 
            array (
                'id' => 697,
                'account_id' => 134,
                'code' => 238015,
                'name' => 'SOCIEDAD ADMINISTRADORA - FONDOS DE INVERSION',
            ),
            697 => 
            array (
                'id' => 698,
                'account_id' => 134,
                'code' => 238020,
                'name' => 'REINTEGROS POR PAGAR',
            ),
            698 => 
            array (
                'id' => 699,
                'account_id' => 134,
                'code' => 238025,
                'name' => 'FONDO DE PERSEVERANCIA',
            ),
            699 => 
            array (
                'id' => 700,
                'account_id' => 134,
                'code' => 238030,
                'name' => 'FONDOS DE CESANTIAS Y/O PENSIONES',
            ),
            700 => 
            array (
                'id' => 701,
                'account_id' => 134,
                'code' => 238035,
                'name' => 'DONACIONES ASIGNADAS POR PAGAR',
            ),
            701 => 
            array (
                'id' => 702,
                'account_id' => 134,
                'code' => 238095,
                'name' => 'OTROS',
            ),
            702 => 
            array (
                'id' => 703,
                'account_id' => 135,
                'code' => 240405,
                'name' => 'VIGENCIA FISCAL CORRIENTE',
            ),
            703 => 
            array (
                'id' => 704,
                'account_id' => 135,
                'code' => 240410,
                'name' => 'VIGENCIAS FISCALES ANTERIORES',
            ),
            704 => 
            array (
                'id' => 705,
                'account_id' => 136,
                'code' => 240801,
                'name' => '???',
            ),
            705 => 
            array (
                'id' => 706,
                'account_id' => 137,
                'code' => 241205,
                'name' => 'VIGENCIA FISCAL CORRIENTE',
            ),
            706 => 
            array (
                'id' => 707,
                'account_id' => 137,
                'code' => 241210,
                'name' => 'VIGENCIAS FISCALES ANTERIORES',
            ),
            707 => 
            array (
                'id' => 708,
                'account_id' => 138,
                'code' => 241601,
                'name' => '???',
            ),
            708 => 
            array (
                'id' => 709,
                'account_id' => 139,
                'code' => 242001,
                'name' => '???',
            ),
            709 => 
            array (
                'id' => 710,
                'account_id' => 140,
                'code' => 242405,
                'name' => 'VIGENCIA FISCAL CORRIENTE',
            ),
            710 => 
            array (
                'id' => 711,
                'account_id' => 140,
                'code' => 242410,
                'name' => 'VIGENCIAS FISCALES ANTERIORES',
            ),
            711 => 
            array (
                'id' => 712,
                'account_id' => 141,
                'code' => 242801,
                'name' => '???',
            ),
            712 => 
            array (
                'id' => 713,
                'account_id' => 142,
                'code' => 243201,
                'name' => '???',
            ),
            713 => 
            array (
                'id' => 714,
                'account_id' => 143,
                'code' => 243605,
                'name' => 'VIGENCIA FISCAL CORRIENTE',
            ),
            714 => 
            array (
                'id' => 715,
                'account_id' => 143,
                'code' => 243610,
                'name' => 'VIGENCIAS FISCALES ANTERIORES',
            ),
            715 => 
            array (
                'id' => 716,
                'account_id' => 144,
                'code' => 244001,
                'name' => '???',
            ),
            716 => 
            array (
                'id' => 717,
                'account_id' => 145,
                'code' => 244405,
                'name' => 'DE HIDROCARBUROS',
            ),
            717 => 
            array (
                'id' => 718,
                'account_id' => 145,
                'code' => 244410,
                'name' => 'DE MINAS',
            ),
            718 => 
            array (
                'id' => 719,
                'account_id' => 146,
                'code' => 244801,
                'name' => '???',
            ),
            719 => 
            array (
                'id' => 720,
                'account_id' => 147,
                'code' => 245201,
                'name' => '???',
            ),
            720 => 
            array (
                'id' => 721,
                'account_id' => 148,
                'code' => 245601,
                'name' => '???',
            ),
            721 => 
            array (
                'id' => 722,
                'account_id' => 149,
                'code' => 246001,
                'name' => '???',
            ),
            722 => 
            array (
                'id' => 723,
                'account_id' => 150,
                'code' => 246405,
                'name' => 'DE LICORES',
            ),
            723 => 
            array (
                'id' => 724,
                'account_id' => 150,
                'code' => 246410,
                'name' => 'DE CERVEZAS',
            ),
            724 => 
            array (
                'id' => 725,
                'account_id' => 150,
                'code' => 246415,
                'name' => 'DE CIGARRILLOS',
            ),
            725 => 
            array (
                'id' => 726,
                'account_id' => 151,
                'code' => 246801,
                'name' => '???',
            ),
            726 => 
            array (
                'id' => 727,
                'account_id' => 152,
                'code' => 247201,
                'name' => '???',
            ),
            727 => 
            array (
                'id' => 728,
                'account_id' => 153,
                'code' => 247601,
                'name' => '???',
            ),
            728 => 
            array (
                'id' => 729,
                'account_id' => 154,
                'code' => 249501,
                'name' => '???',
            ),
            729 => 
            array (
                'id' => 730,
                'account_id' => 155,
                'code' => 250501,
                'name' => '???',
            ),
            730 => 
            array (
                'id' => 731,
                'account_id' => 156,
                'code' => 251005,
                'name' => 'LEY LABORAL ANTERIOR',
            ),
            731 => 
            array (
                'id' => 732,
                'account_id' => 156,
                'code' => 251010,
                'name' => 'LEY 50 DE 1990 Y NORMAS POSTERIORES',
            ),
            732 => 
            array (
                'id' => 733,
                'account_id' => 157,
                'code' => 251501,
                'name' => '???',
            ),
            733 => 
            array (
                'id' => 734,
                'account_id' => 158,
                'code' => 252001,
                'name' => '???',
            ),
            734 => 
            array (
                'id' => 735,
                'account_id' => 159,
                'code' => 252501,
                'name' => '???',
            ),
            735 => 
            array (
                'id' => 736,
                'account_id' => 160,
                'code' => 253005,
                'name' => 'PRIMAS',
            ),
            736 => 
            array (
                'id' => 737,
                'account_id' => 160,
                'code' => 253010,
                'name' => 'AUXILIOS',
            ),
            737 => 
            array (
                'id' => 738,
                'account_id' => 160,
                'code' => 253015,
                'name' => 'DOTACION Y SUMINISTRO A TRABAJADORES',
            ),
            738 => 
            array (
                'id' => 739,
                'account_id' => 160,
                'code' => 253020,
                'name' => 'BONIFICACIONES',
            ),
            739 => 
            array (
                'id' => 740,
                'account_id' => 160,
                'code' => 253025,
                'name' => 'SEGUROS',
            ),
            740 => 
            array (
                'id' => 741,
                'account_id' => 160,
                'code' => 253095,
                'name' => 'OTRAS',
            ),
            741 => 
            array (
                'id' => 742,
                'account_id' => 161,
                'code' => 253201,
                'name' => '???',
            ),
            742 => 
            array (
                'id' => 743,
                'account_id' => 162,
                'code' => 253501,
                'name' => '???',
            ),
            743 => 
            array (
                'id' => 744,
                'account_id' => 163,
                'code' => 254001,
                'name' => '???',
            ),
            744 => 
            array (
                'id' => 745,
                'account_id' => 164,
                'code' => 260505,
                'name' => 'INTERESES',
            ),
            745 => 
            array (
                'id' => 746,
                'account_id' => 164,
                'code' => 260510,
                'name' => 'COMISIONES',
            ),
            746 => 
            array (
                'id' => 747,
                'account_id' => 164,
                'code' => 260515,
                'name' => 'HONORARIOS',
            ),
            747 => 
            array (
                'id' => 748,
                'account_id' => 164,
                'code' => 260520,
                'name' => 'SERVICIOS TECNICOS',
            ),
            748 => 
            array (
                'id' => 749,
                'account_id' => 164,
                'code' => 260525,
                'name' => 'TRANSPORTES, FLETES Y ACARREOS',
            ),
            749 => 
            array (
                'id' => 750,
                'account_id' => 164,
                'code' => 260530,
                'name' => 'GASTOS DE VIAJE',
            ),
            750 => 
            array (
                'id' => 751,
                'account_id' => 164,
                'code' => 260535,
                'name' => 'SERVICIOS PUBLICOS',
            ),
            751 => 
            array (
                'id' => 752,
                'account_id' => 164,
                'code' => 260540,
                'name' => 'REGALIAS',
            ),
            752 => 
            array (
                'id' => 753,
                'account_id' => 164,
                'code' => 260545,
                'name' => 'GARANTIAS',
            ),
            753 => 
            array (
                'id' => 754,
                'account_id' => 164,
                'code' => 260550,
                'name' => 'MATERIALES Y REPUESTOS',
            ),
            754 => 
            array (
                'id' => 755,
                'account_id' => 164,
                'code' => 260595,
                'name' => 'OTROS',
            ),
            755 => 
            array (
                'id' => 756,
                'account_id' => 165,
                'code' => 261005,
                'name' => 'CESANTIAS',
            ),
            756 => 
            array (
                'id' => 757,
                'account_id' => 165,
                'code' => 261010,
                'name' => 'INTERESES SOBRE CESANTIAS',
            ),
            757 => 
            array (
                'id' => 758,
                'account_id' => 165,
                'code' => 261015,
                'name' => 'VACACIONES',
            ),
            758 => 
            array (
                'id' => 759,
                'account_id' => 165,
                'code' => 261020,
                'name' => 'PRIMA DE SERVICIOS',
            ),
            759 => 
            array (
                'id' => 760,
                'account_id' => 165,
                'code' => 261025,
                'name' => 'PRESTACIONES EXTRALEGALES',
            ),
            760 => 
            array (
                'id' => 761,
                'account_id' => 165,
                'code' => 261030,
                'name' => 'VIATICOS',
            ),
            761 => 
            array (
                'id' => 762,
                'account_id' => 165,
                'code' => 261095,
                'name' => 'OTRAS',
            ),
            762 => 
            array (
                'id' => 763,
                'account_id' => 166,
                'code' => 261505,
                'name' => 'DE RENTA Y COMPLEMENTARIOS',
            ),
            763 => 
            array (
                'id' => 764,
                'account_id' => 166,
                'code' => 261510,
                'name' => 'DE INDUSTRIA Y COMERCIO',
            ),
            764 => 
            array (
                'id' => 765,
                'account_id' => 166,
                'code' => 261515,
                'name' => 'TASA POR UTILIZACION DE PUERTOS',
            ),
            765 => 
            array (
                'id' => 766,
                'account_id' => 166,
                'code' => 261520,
                'name' => 'DE VEHICULOS',
            ),
            766 => 
            array (
                'id' => 767,
                'account_id' => 166,
                'code' => 261525,
                'name' => 'DE HIDROCARBUROS Y MINAS',
            ),
            767 => 
            array (
                'id' => 768,
                'account_id' => 166,
                'code' => 261595,
                'name' => 'OTROS',
            ),
            768 => 
            array (
                'id' => 769,
                'account_id' => 167,
                'code' => 262005,
                'name' => 'CALCULO ACTUARIAL PENSIONES DE JUBILACION',
            ),
            769 => 
            array (
                'id' => 770,
                'account_id' => 167,
                'code' => 262010,
            'name' => 'PENSIONES DE JUBILACION POR AMORTIZAR (DB)',
            ),
            770 => 
            array (
                'id' => 771,
                'account_id' => 168,
                'code' => 262505,
                'name' => 'ACUEDUCTO Y ALCANTARILLADO',
            ),
            771 => 
            array (
                'id' => 772,
                'account_id' => 168,
                'code' => 262510,
                'name' => 'ENERGIA ELECTRICA',
            ),
            772 => 
            array (
                'id' => 773,
                'account_id' => 168,
                'code' => 262515,
                'name' => 'TELEFONOS',
            ),
            773 => 
            array (
                'id' => 774,
                'account_id' => 168,
                'code' => 262595,
                'name' => 'OTROS',
            ),
            774 => 
            array (
                'id' => 775,
                'account_id' => 169,
                'code' => 263005,
                'name' => 'TERRENOS',
            ),
            775 => 
            array (
                'id' => 776,
                'account_id' => 169,
                'code' => 263010,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            776 => 
            array (
                'id' => 777,
                'account_id' => 169,
                'code' => 263015,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            777 => 
            array (
                'id' => 778,
                'account_id' => 169,
                'code' => 263020,
                'name' => 'EQUIPO DE OFICINA',
            ),
            778 => 
            array (
                'id' => 779,
                'account_id' => 169,
                'code' => 263025,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            779 => 
            array (
                'id' => 780,
                'account_id' => 169,
                'code' => 263030,
                'name' => 'EQUIPO MEDICO - CIENTIFICO',
            ),
            780 => 
            array (
                'id' => 781,
                'account_id' => 169,
                'code' => 263035,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            781 => 
            array (
                'id' => 782,
                'account_id' => 169,
                'code' => 263040,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            782 => 
            array (
                'id' => 783,
                'account_id' => 169,
                'code' => 263045,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            783 => 
            array (
                'id' => 784,
                'account_id' => 169,
                'code' => 263050,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            784 => 
            array (
                'id' => 785,
                'account_id' => 169,
                'code' => 263055,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            785 => 
            array (
                'id' => 786,
                'account_id' => 169,
                'code' => 263060,
                'name' => 'ACUEDUCTOS PLANTAS Y REDES',
            ),
            786 => 
            array (
                'id' => 787,
                'account_id' => 169,
                'code' => 263065,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            787 => 
            array (
                'id' => 788,
                'account_id' => 169,
                'code' => 263070,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            788 => 
            array (
                'id' => 789,
                'account_id' => 169,
                'code' => 263075,
                'name' => 'PLANTACIONES AGRICOLAS Y FORESTALES',
            ),
            789 => 
            array (
                'id' => 790,
                'account_id' => 169,
                'code' => 263080,
                'name' => 'VIAS DE CUMUNICACION',
            ),
            790 => 
            array (
                'id' => 791,
                'account_id' => 169,
                'code' => 263085,
                'name' => 'POZOS ARTESIANOS',
            ),
            791 => 
            array (
                'id' => 792,
                'account_id' => 169,
                'code' => 263095,
                'name' => 'OTROS',
            ),
            792 => 
            array (
                'id' => 793,
                'account_id' => 170,
                'code' => 263505,
                'name' => 'MULTAS Y SANCIONES AUTORIDADES ADMINISTRATIVAS',
            ),
            793 => 
            array (
                'id' => 794,
                'account_id' => 170,
                'code' => 263510,
                'name' => 'INTERESES POR MULTAS Y SANCIONES',
            ),
            794 => 
            array (
                'id' => 795,
                'account_id' => 170,
                'code' => 263515,
                'name' => 'RECLAMOS',
            ),
            795 => 
            array (
                'id' => 796,
                'account_id' => 170,
                'code' => 263520,
                'name' => 'LABORALES',
            ),
            796 => 
            array (
                'id' => 797,
                'account_id' => 170,
                'code' => 263525,
                'name' => 'CIVILES',
            ),
            797 => 
            array (
                'id' => 798,
                'account_id' => 170,
                'code' => 263530,
                'name' => 'PENALES',
            ),
            798 => 
            array (
                'id' => 799,
                'account_id' => 170,
                'code' => 263535,
                'name' => 'ADMINISTRATIVOS',
            ),
            799 => 
            array (
                'id' => 800,
                'account_id' => 170,
                'code' => 263540,
                'name' => 'COMERCIALES',
            ),
            800 => 
            array (
                'id' => 801,
                'account_id' => 170,
                'code' => 263595,
                'name' => 'OTRAS',
            ),
            801 => 
            array (
                'id' => 802,
                'account_id' => 171,
                'code' => 264001,
                'name' => '???',
            ),
            802 => 
            array (
                'id' => 803,
                'account_id' => 172,
                'code' => 269505,
                'name' => 'PARA BENEFICENCIA',
            ),
            803 => 
            array (
                'id' => 804,
                'account_id' => 172,
                'code' => 269510,
                'name' => 'PARA COMUNICACIONES',
            ),
            804 => 
            array (
                'id' => 805,
                'account_id' => 172,
                'code' => 269515,
                'name' => 'PARA PERDIDA EN TRANSPORTE',
            ),
            805 => 
            array (
                'id' => 806,
                'account_id' => 172,
                'code' => 269520,
                'name' => 'PARA OPERACION',
            ),
            806 => 
            array (
                'id' => 807,
                'account_id' => 172,
                'code' => 269525,
                'name' => 'PARA PROTECCION DE BIENES AGOTABLES',
            ),
            807 => 
            array (
                'id' => 808,
                'account_id' => 172,
                'code' => 269530,
                'name' => 'PARA AJUSTES EN REDENCION DE UNIDADES',
            ),
            808 => 
            array (
                'id' => 809,
                'account_id' => 172,
                'code' => 269535,
                'name' => 'AUTOSEGURO',
            ),
            809 => 
            array (
                'id' => 810,
                'account_id' => 172,
                'code' => 269540,
                'name' => 'PLANES Y PROGRAMAS DE REFORESTACION Y ELECTRIFICACION',
            ),
            810 => 
            array (
                'id' => 811,
                'account_id' => 172,
                'code' => 269595,
                'name' => 'OTRAS',
            ),
            811 => 
            array (
                'id' => 812,
                'account_id' => 173,
                'code' => 270505,
                'name' => 'INTERESES',
            ),
            812 => 
            array (
                'id' => 813,
                'account_id' => 173,
                'code' => 270510,
                'name' => 'COMISIONES',
            ),
            813 => 
            array (
                'id' => 814,
                'account_id' => 173,
                'code' => 270515,
                'name' => 'ARRENDAMIENTOS',
            ),
            814 => 
            array (
                'id' => 815,
                'account_id' => 173,
                'code' => 270520,
                'name' => 'HONORARIOS',
            ),
            815 => 
            array (
                'id' => 816,
                'account_id' => 173,
                'code' => 270525,
                'name' => 'SERVICIOS TECNICOS',
            ),
            816 => 
            array (
                'id' => 817,
                'account_id' => 173,
                'code' => 270530,
                'name' => 'DE SUSCRIPTORES',
            ),
            817 => 
            array (
                'id' => 818,
                'account_id' => 173,
                'code' => 270535,
                'name' => 'TRANSPORTES, FLETES Y ACARREOS',
            ),
            818 => 
            array (
                'id' => 819,
                'account_id' => 173,
                'code' => 270540,
                'name' => 'MERCANCIA EN TRANSITO YA VENDIDA',
            ),
            819 => 
            array (
                'id' => 820,
                'account_id' => 173,
                'code' => 270545,
                'name' => 'MATRICULAS Y PENSIONES',
            ),
            820 => 
            array (
                'id' => 821,
                'account_id' => 173,
                'code' => 270550,
                'name' => 'CUOTAS DE ADMINISTRACION',
            ),
            821 => 
            array (
                'id' => 822,
                'account_id' => 173,
                'code' => 270595,
                'name' => 'OTROS',
            ),
            822 => 
            array (
                'id' => 823,
                'account_id' => 174,
                'code' => 271005,
                'name' => 'REAJUSTE DEL SISTEMA',
            ),
            823 => 
            array (
                'id' => 824,
                'account_id' => 175,
                'code' => 271501,
                'name' => '???',
            ),
            824 => 
            array (
                'id' => 825,
                'account_id' => 176,
                'code' => 272001,
                'name' => '???',
            ),
            825 => 
            array (
                'id' => 826,
                'account_id' => 177,
                'code' => 272505,
                'name' => 'POR DEPRECIACION FLEXIBLE',
            ),
            826 => 
            array (
                'id' => 827,
                'account_id' => 177,
                'code' => 272595,
                'name' => 'DIVERSOS',
            ),
            827 => 
            array (
                'id' => 828,
                'account_id' => 177,
                'code' => 272599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            828 => 
            array (
                'id' => 829,
                'account_id' => 178,
                'code' => 280505,
                'name' => 'DE CLIENTES',
            ),
            829 => 
            array (
                'id' => 830,
                'account_id' => 178,
                'code' => 280510,
                'name' => 'SOBRE CONTRATOS',
            ),
            830 => 
            array (
                'id' => 831,
                'account_id' => 178,
                'code' => 280515,
                'name' => 'PARA OBRAS EN PROCESO',
            ),
            831 => 
            array (
                'id' => 832,
                'account_id' => 178,
                'code' => 280595,
                'name' => 'OTROS',
            ),
            832 => 
            array (
                'id' => 833,
                'account_id' => 179,
                'code' => 281005,
                'name' => 'PARA FUTURA SUSCRIPCION DE ACCIONES',
            ),
            833 => 
            array (
                'id' => 834,
                'account_id' => 179,
                'code' => 281010,
                'name' => 'PARA FUTURO PAGO DE CUOTAS O DERECHOS SOCIALES',
            ),
            834 => 
            array (
                'id' => 835,
                'account_id' => 179,
                'code' => 281015,
                'name' => 'PARA GARANTIA EN LA PRESTACION DE SERVICIOS',
            ),
            835 => 
            array (
                'id' => 836,
                'account_id' => 179,
                'code' => 281020,
                'name' => 'PARA GARANTIA DE CONTRATOS',
            ),
            836 => 
            array (
                'id' => 837,
                'account_id' => 179,
                'code' => 281025,
                'name' => 'DE LICITACIONES',
            ),
            837 => 
            array (
                'id' => 838,
                'account_id' => 179,
                'code' => 281030,
                'name' => 'DE MANEJO DE BIENES',
            ),
            838 => 
            array (
                'id' => 839,
                'account_id' => 179,
                'code' => 281035,
                'name' => 'FONDO DE RESERVA',
            ),
            839 => 
            array (
                'id' => 840,
                'account_id' => 179,
                'code' => 281095,
                'name' => 'OTROS',
            ),
            840 => 
            array (
                'id' => 841,
                'account_id' => 180,
                'code' => 281505,
                'name' => 'VALORES RECIBIDOS PARA TERCEROS',
            ),
            841 => 
            array (
                'id' => 842,
                'account_id' => 180,
                'code' => 281510,
                'name' => 'VENTA POR CUENTA DE TERCEROS',
            ),
            842 => 
            array (
                'id' => 843,
                'account_id' => 181,
                'code' => 282001,
                'name' => '???',
            ),
            843 => 
            array (
                'id' => 844,
                'account_id' => 182,
                'code' => 282505,
                'name' => 'CUMPLIMIENTO OBLIGACIONES LABORALES',
            ),
            844 => 
            array (
                'id' => 845,
                'account_id' => 182,
                'code' => 282510,
                'name' => 'PARA ESTABILIDAD DE OBRA',
            ),
            845 => 
            array (
                'id' => 846,
                'account_id' => 182,
                'code' => 282515,
                'name' => 'GARANTIA CUMPLIMIENTO DE CONTRATOS',
            ),
            846 => 
            array (
                'id' => 847,
                'account_id' => 183,
                'code' => 283005,
                'name' => 'INDEMNIZACIONES',
            ),
            847 => 
            array (
                'id' => 848,
                'account_id' => 183,
                'code' => 283010,
                'name' => 'DEPOSITOS JUDICIALES',
            ),
            848 => 
            array (
                'id' => 849,
                'account_id' => 184,
                'code' => 283505,
                'name' => 'CUOTAS NETAS',
            ),
            849 => 
            array (
                'id' => 850,
                'account_id' => 184,
                'code' => 283510,
                'name' => 'GRUPOS EN FORMACION',
            ),
            850 => 
            array (
                'id' => 851,
                'account_id' => 185,
                'code' => 284001,
                'name' => '???',
            ),
            851 => 
            array (
                'id' => 852,
                'account_id' => 186,
                'code' => 289505,
                'name' => 'PRESTAMOS DE PRODUCTOS',
            ),
            852 => 
            array (
                'id' => 853,
                'account_id' => 186,
                'code' => 289510,
                'name' => 'REEMBOLSO DE COSTOS EXPLORATORIOS',
            ),
            853 => 
            array (
                'id' => 854,
                'account_id' => 186,
                'code' => 289515,
                'name' => 'PROGRAMA DE EXTENSION AGROPECUARIA',
            ),
            854 => 
            array (
                'id' => 855,
                'account_id' => 187,
                'code' => 290505,
                'name' => 'GARANTIA GENERAL',
            ),
            855 => 
            array (
                'id' => 856,
                'account_id' => 187,
                'code' => 290510,
                'name' => 'GARANTIA ESPECIFICA',
            ),
            856 => 
            array (
                'id' => 857,
                'account_id' => 188,
                'code' => 291001,
                'name' => '???',
            ),
            857 => 
            array (
                'id' => 858,
                'account_id' => 189,
                'code' => 291501,
                'name' => '???',
            ),
            858 => 
            array (
                'id' => 859,
                'account_id' => 190,
                'code' => 310505,
                'name' => 'CAPITAL AUTORIZADO',
            ),
            859 => 
            array (
                'id' => 860,
                'account_id' => 190,
                'code' => 310510,
            'name' => 'CAPITAL POR SUSCRIBIR (DB)',
            ),
            860 => 
            array (
                'id' => 861,
                'account_id' => 190,
                'code' => 310515,
            'name' => 'CAPITAL SUSCRITO POR COBRAR (DB)',
            ),
            861 => 
            array (
                'id' => 862,
                'account_id' => 191,
                'code' => 311005,
            'name' => 'ACCIONES PROPIAS READQUIRIDAS (DB)',
            ),
            862 => 
            array (
                'id' => 863,
                'account_id' => 191,
                'code' => 311010,
            'name' => 'CUOTAS O PARTES DE INTERES SOCIAL PROPIAS READQUIRIDAS (DB)',
            ),
            863 => 
            array (
                'id' => 864,
                'account_id' => 192,
                'code' => 311505,
                'name' => 'CUOTAS O PARTES DE INTERES SOCIAL',
            ),
            864 => 
            array (
                'id' => 865,
                'account_id' => 192,
                'code' => 311510,
                'name' => 'APORTES DE SOCIOS - FONDO MUTUO DE INVERSION',
            ),
            865 => 
            array (
                'id' => 866,
                'account_id' => 192,
                'code' => 311515,
                'name' => 'CONTRIBUCION DE LA EMPRESA - FONDO MUTUO DE INVERSION',
            ),
            866 => 
            array (
                'id' => 867,
                'account_id' => 192,
                'code' => 311520,
                'name' => 'SUSCRIPCIONES DEL PUBLICO',
            ),
            867 => 
            array (
                'id' => 868,
                'account_id' => 193,
                'code' => 312001,
                'name' => '???',
            ),
            868 => 
            array (
                'id' => 869,
                'account_id' => 194,
                'code' => 312501,
                'name' => '???',
            ),
            869 => 
            array (
                'id' => 870,
                'account_id' => 195,
                'code' => 313001,
                'name' => '???',
            ),
            870 => 
            array (
                'id' => 871,
                'account_id' => 196,
                'code' => 313501,
                'name' => '???',
            ),
            871 => 
            array (
                'id' => 872,
                'account_id' => 197,
                'code' => 314001,
                'name' => '???',
            ),
            872 => 
            array (
                'id' => 873,
                'account_id' => 198,
                'code' => 320505,
                'name' => 'PRIMA EN COLOCACION DE ACCIONES',
            ),
            873 => 
            array (
                'id' => 874,
                'account_id' => 198,
                'code' => 320510,
            'name' => 'PRIMA EN COLOCACION DE ACCIONES POR COBRAR (DB)',
            ),
            874 => 
            array (
                'id' => 875,
                'account_id' => 198,
                'code' => 320515,
                'name' => 'PRIMA EN COLOCACION DE CUOTAS O PARTES DE INTERES SOCIAL',
            ),
            875 => 
            array (
                'id' => 876,
                'account_id' => 199,
                'code' => 321005,
                'name' => 'EN DINERO',
            ),
            876 => 
            array (
                'id' => 877,
                'account_id' => 199,
                'code' => 321010,
                'name' => 'EN VALORES MOBILIARIOS',
            ),
            877 => 
            array (
                'id' => 878,
                'account_id' => 199,
                'code' => 321015,
                'name' => 'EN BIENES MUEBLES',
            ),
            878 => 
            array (
                'id' => 879,
                'account_id' => 199,
                'code' => 321020,
                'name' => 'EN BIENES INMUEBLES',
            ),
            879 => 
            array (
                'id' => 880,
                'account_id' => 199,
                'code' => 321025,
                'name' => 'EN INTANGIBLES',
            ),
            880 => 
            array (
                'id' => 881,
                'account_id' => 200,
                'code' => 321501,
                'name' => '???',
            ),
            881 => 
            array (
                'id' => 882,
                'account_id' => 201,
                'code' => 330505,
                'name' => 'RESERVA LEGAL',
            ),
            882 => 
            array (
                'id' => 883,
                'account_id' => 201,
                'code' => 330510,
                'name' => 'RESERVAS POR DISPOSICIONES FISCALES',
            ),
            883 => 
            array (
                'id' => 884,
                'account_id' => 201,
                'code' => 330515,
                'name' => 'RESERVA PARA READQUISICION DE ACCIONES',
            ),
            884 => 
            array (
                'id' => 885,
                'account_id' => 201,
                'code' => 330517,
                'name' => 'RESERVA PARA READQUISICION DE CUOTAS O PARTES DE INTERES SOCIAL',
            ),
            885 => 
            array (
                'id' => 886,
                'account_id' => 201,
                'code' => 330520,
                'name' => 'RESERVA PARA EXTENSION AGROPECUARIA',
            ),
            886 => 
            array (
                'id' => 887,
                'account_id' => 201,
                'code' => 330525,
                'name' => 'RESERVA LEY 7a. DE 1990',
            ),
            887 => 
            array (
                'id' => 888,
                'account_id' => 201,
                'code' => 330530,
                'name' => 'RESERVA PARA REPOSICION DE SEMOVIENTES',
            ),
            888 => 
            array (
                'id' => 889,
                'account_id' => 201,
                'code' => 330535,
                'name' => 'RESERVA LEY 4a DE 1980',
            ),
            889 => 
            array (
                'id' => 890,
                'account_id' => 201,
                'code' => 330595,
                'name' => 'OTRAS',
            ),
            890 => 
            array (
                'id' => 891,
                'account_id' => 202,
                'code' => 331005,
                'name' => 'PARA FUTURAS CAPITALIZACIONES',
            ),
            891 => 
            array (
                'id' => 892,
                'account_id' => 202,
                'code' => 331010,
                'name' => 'PARA REPOSICION DE ACTIVOS',
            ),
            892 => 
            array (
                'id' => 893,
                'account_id' => 202,
                'code' => 331015,
                'name' => 'PARA FUTUROS ENSANCHES',
            ),
            893 => 
            array (
                'id' => 894,
                'account_id' => 202,
                'code' => 331095,
                'name' => 'OTRAS',
            ),
            894 => 
            array (
                'id' => 895,
                'account_id' => 203,
                'code' => 331505,
                'name' => 'PARA BENEFICENCIA Y CIVISMO',
            ),
            895 => 
            array (
                'id' => 896,
                'account_id' => 203,
                'code' => 331510,
                'name' => 'PARA FUTURAS CAPITALIZACIONES',
            ),
            896 => 
            array (
                'id' => 897,
                'account_id' => 203,
                'code' => 331515,
                'name' => 'PARA FUTUROS ENSANCHES',
            ),
            897 => 
            array (
                'id' => 898,
                'account_id' => 203,
                'code' => 331520,
                'name' => 'PARA ADQUISICION O REPOSICION DE PROPIEDADES PLANTA Y EQUIPO',
            ),
            898 => 
            array (
                'id' => 899,
                'account_id' => 203,
                'code' => 331525,
                'name' => 'PARA INVESTIGACIONES Y DESARROLLO',
            ),
            899 => 
            array (
                'id' => 900,
                'account_id' => 203,
                'code' => 331530,
                'name' => 'PARA FOMENTO ECONOMICO',
            ),
            900 => 
            array (
                'id' => 901,
                'account_id' => 203,
                'code' => 331535,
                'name' => 'PARA CAPITAL DE TRABAJO',
            ),
            901 => 
            array (
                'id' => 902,
                'account_id' => 203,
                'code' => 331540,
                'name' => 'PARA ESTABILIZACION DE RENDIMIENTOS',
            ),
            902 => 
            array (
                'id' => 903,
                'account_id' => 203,
                'code' => 331545,
                'name' => 'A DISPOSICION DEL MAXIMO ORGANO SOCIAL',
            ),
            903 => 
            array (
                'id' => 904,
                'account_id' => 203,
                'code' => 331595,
                'name' => 'OTRAS',
            ),
            904 => 
            array (
                'id' => 905,
                'account_id' => 204,
                'code' => 340505,
                'name' => 'DE CAPITAL SOCIAL',
            ),
            905 => 
            array (
                'id' => 906,
                'account_id' => 204,
                'code' => 340510,
                'name' => 'DE SUPERAVIT DE CAPITAL',
            ),
            906 => 
            array (
                'id' => 907,
                'account_id' => 204,
                'code' => 340515,
                'name' => 'DE RESERVAS',
            ),
            907 => 
            array (
                'id' => 908,
                'account_id' => 204,
                'code' => 340520,
                'name' => 'DE RESULTADOS DE EJERCICIOS ANTERIORES',
            ),
            908 => 
            array (
                'id' => 909,
                'account_id' => 204,
                'code' => 340525,
                'name' => 'DE ACTIVOS EN PERIODO IMPRODUCTIVO',
            ),
            909 => 
            array (
                'id' => 910,
                'account_id' => 205,
                'code' => 341001,
                'name' => '???',
            ),
            910 => 
            array (
                'id' => 911,
                'account_id' => 206,
                'code' => 341501,
                'name' => '???',
            ),
            911 => 
            array (
                'id' => 912,
                'account_id' => 207,
                'code' => 350501,
                'name' => '???',
            ),
            912 => 
            array (
                'id' => 913,
                'account_id' => 208,
                'code' => 351001,
                'name' => '???',
            ),
            913 => 
            array (
                'id' => 914,
                'account_id' => 209,
                'code' => 360505,
                'name' => 'UTILIDAD DEL EJERCICIO',
            ),
            914 => 
            array (
                'id' => 915,
                'account_id' => 209,
                'code' => 360510,
                'name' => 'UTILIDAD POR EXPOSICION A LA INFLACION',
            ),
            915 => 
            array (
                'id' => 916,
                'account_id' => 210,
                'code' => 361005,
                'name' => 'PERDIDA DEL EJERCICIO',
            ),
            916 => 
            array (
                'id' => 917,
                'account_id' => 210,
                'code' => 361010,
                'name' => 'PERDIDA POR EXPOSICION A LA INFLACION',
            ),
            917 => 
            array (
                'id' => 918,
                'account_id' => 211,
                'code' => 370501,
                'name' => '???',
            ),
            918 => 
            array (
                'id' => 919,
                'account_id' => 212,
                'code' => 371001,
                'name' => '???',
            ),
            919 => 
            array (
                'id' => 920,
                'account_id' => 213,
                'code' => 380505,
                'name' => 'ACCIONES',
            ),
            920 => 
            array (
                'id' => 921,
                'account_id' => 213,
                'code' => 380510,
                'name' => 'CUOTAS O PARTES DE INTERES SOCIAL',
            ),
            921 => 
            array (
                'id' => 922,
                'account_id' => 213,
                'code' => 380515,
                'name' => 'DERECHOS FIDUCIARIOS',
            ),
            922 => 
            array (
                'id' => 923,
                'account_id' => 214,
                'code' => 381004,
                'name' => 'TERRENOS',
            ),
            923 => 
            array (
                'id' => 924,
                'account_id' => 214,
                'code' => 381006,
                'name' => 'MATERIALES PROYECTOS PETROLEROS',
            ),
            924 => 
            array (
                'id' => 925,
                'account_id' => 214,
                'code' => 381008,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            925 => 
            array (
                'id' => 926,
                'account_id' => 214,
                'code' => 381012,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            926 => 
            array (
                'id' => 927,
                'account_id' => 214,
                'code' => 381016,
                'name' => 'EQUIPO DE OFICINA',
            ),
            927 => 
            array (
                'id' => 928,
                'account_id' => 214,
                'code' => 381020,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            928 => 
            array (
                'id' => 929,
                'account_id' => 214,
                'code' => 381024,
                'name' => 'EQUIPO MEDICO CIENTIFICO',
            ),
            929 => 
            array (
                'id' => 930,
                'account_id' => 214,
                'code' => 381028,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            930 => 
            array (
                'id' => 931,
                'account_id' => 214,
                'code' => 381032,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            931 => 
            array (
                'id' => 932,
                'account_id' => 214,
                'code' => 381036,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            932 => 
            array (
                'id' => 933,
                'account_id' => 214,
                'code' => 381040,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            933 => 
            array (
                'id' => 934,
                'account_id' => 214,
                'code' => 381044,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            934 => 
            array (
                'id' => 935,
                'account_id' => 214,
                'code' => 381048,
                'name' => 'ACUEDUCTOS PLANTAS Y REDES',
            ),
            935 => 
            array (
                'id' => 936,
                'account_id' => 214,
                'code' => 381052,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            936 => 
            array (
                'id' => 937,
                'account_id' => 214,
                'code' => 381056,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            937 => 
            array (
                'id' => 938,
                'account_id' => 214,
                'code' => 381060,
                'name' => 'PLANTACIONES AGRICOLAS Y FORESTALES',
            ),
            938 => 
            array (
                'id' => 939,
                'account_id' => 214,
                'code' => 381064,
                'name' => 'VIAS DE COMUNICACION',
            ),
            939 => 
            array (
                'id' => 940,
                'account_id' => 214,
                'code' => 381068,
                'name' => 'MINAS Y CANTERAS',
            ),
            940 => 
            array (
                'id' => 941,
                'account_id' => 214,
                'code' => 381072,
                'name' => 'POZOS ARTESIANOS',
            ),
            941 => 
            array (
                'id' => 942,
                'account_id' => 214,
                'code' => 381076,
                'name' => 'YACIMIENTOS',
            ),
            942 => 
            array (
                'id' => 943,
                'account_id' => 214,
                'code' => 381080,
                'name' => 'SEMOVIENTES',
            ),
            943 => 
            array (
                'id' => 944,
                'account_id' => 215,
                'code' => 389505,
                'name' => 'BIENES DE ARTE Y CULTURA',
            ),
            944 => 
            array (
                'id' => 945,
                'account_id' => 215,
                'code' => 389510,
                'name' => 'BIENES ENTREGADOS EN COMODATO',
            ),
            945 => 
            array (
                'id' => 946,
                'account_id' => 215,
                'code' => 389515,
                'name' => 'BIENES RECIBIDOS EN PAGO',
            ),
            946 => 
            array (
                'id' => 947,
                'account_id' => 215,
                'code' => 389520,
                'name' => 'INVENTARIO DE SEMOVIENTES',
            ),
            947 => 
            array (
                'id' => 948,
                'account_id' => 216,
                'code' => 410505,
                'name' => 'CULTIVO DE CEREALES',
            ),
            948 => 
            array (
                'id' => 949,
                'account_id' => 216,
                'code' => 410510,
                'name' => 'CULTIVOS DE HORTALIZAS, LEGUMBRES Y PLANTAS ORNAMENTALES',
            ),
            949 => 
            array (
                'id' => 950,
                'account_id' => 216,
                'code' => 410515,
                'name' => 'CULTIVOS DE FRUTAS, NUECES Y PLANTAS AROMATICAS',
            ),
            950 => 
            array (
                'id' => 951,
                'account_id' => 216,
                'code' => 410520,
                'name' => 'CULTIVO DE CAFE',
            ),
            951 => 
            array (
                'id' => 952,
                'account_id' => 216,
                'code' => 410525,
                'name' => 'CULTIVO DE FLORES',
            ),
            952 => 
            array (
                'id' => 953,
                'account_id' => 216,
                'code' => 410530,
                'name' => 'CULTIVO DE CAÑA DE AZUCAR',
            ),
            953 => 
            array (
                'id' => 954,
                'account_id' => 216,
                'code' => 410535,
                'name' => 'CULTIVO DE ALGODON Y PLANTAS PARA MATERIAL TEXTIL',
            ),
            954 => 
            array (
                'id' => 955,
                'account_id' => 216,
                'code' => 410540,
                'name' => 'CULTIVO DE BANANO',
            ),
            955 => 
            array (
                'id' => 956,
                'account_id' => 216,
                'code' => 410545,
                'name' => 'OTROS CULTIVOS AGRICOLAS',
            ),
            956 => 
            array (
                'id' => 957,
                'account_id' => 216,
                'code' => 410550,
                'name' => 'CRIA DE OVEJAS, CABRAS, ASNOS, MULAS Y BURDEGANOS',
            ),
            957 => 
            array (
                'id' => 958,
                'account_id' => 216,
                'code' => 410555,
                'name' => 'CRIA DE GANADO CABALLAR Y VACUNO.',
            ),
            958 => 
            array (
                'id' => 959,
                'account_id' => 216,
                'code' => 410560,
                'name' => 'PRODUCCION AVICOLA',
            ),
            959 => 
            array (
                'id' => 960,
                'account_id' => 216,
                'code' => 410565,
                'name' => 'CRIA DE OTROS ANIMALES',
            ),
            960 => 
            array (
                'id' => 961,
                'account_id' => 216,
                'code' => 410570,
                'name' => 'SERVICIOS AGRICOLAS Y GANADEROS',
            ),
            961 => 
            array (
                'id' => 962,
                'account_id' => 216,
                'code' => 410575,
                'name' => 'ACTIVIDAD DE CAZA',
            ),
            962 => 
            array (
                'id' => 963,
                'account_id' => 216,
                'code' => 410580,
                'name' => 'ACTIVIDAD DE SILVICULTURA',
            ),
            963 => 
            array (
                'id' => 964,
                'account_id' => 216,
                'code' => 410599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            964 => 
            array (
                'id' => 965,
                'account_id' => 217,
                'code' => 411005,
                'name' => 'ACTIVIDAD DE PESCA',
            ),
            965 => 
            array (
                'id' => 966,
                'account_id' => 217,
                'code' => 411010,
                'name' => 'EXPLOTACION DE CRIADEROS DE PECES',
            ),
            966 => 
            array (
                'id' => 967,
                'account_id' => 217,
                'code' => 411095,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            967 => 
            array (
                'id' => 968,
                'account_id' => 217,
                'code' => 411099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            968 => 
            array (
                'id' => 969,
                'account_id' => 218,
                'code' => 411505,
                'name' => 'CARBON',
            ),
            969 => 
            array (
                'id' => 970,
                'account_id' => 218,
                'code' => 411510,
                'name' => 'PETROLEO CRUDO',
            ),
            970 => 
            array (
                'id' => 971,
                'account_id' => 218,
                'code' => 411512,
                'name' => 'GAS NATURAL',
            ),
            971 => 
            array (
                'id' => 972,
                'account_id' => 218,
                'code' => 411514,
                'name' => 'SERVICIOS RELACIONADOS CON EXTRACCION DE PETROLEO Y GAS',
            ),
            972 => 
            array (
                'id' => 973,
                'account_id' => 218,
                'code' => 411515,
                'name' => 'MINERALES DE HIERRO',
            ),
            973 => 
            array (
                'id' => 974,
                'account_id' => 218,
                'code' => 411520,
                'name' => 'MINERALES METALIFEROS NO FERROSOS',
            ),
            974 => 
            array (
                'id' => 975,
                'account_id' => 218,
                'code' => 411525,
                'name' => 'PIEDRA, ARENA Y ARCILLA',
            ),
            975 => 
            array (
                'id' => 976,
                'account_id' => 218,
                'code' => 411527,
                'name' => 'PIEDRAS PRECIOSAS',
            ),
            976 => 
            array (
                'id' => 977,
                'account_id' => 218,
                'code' => 411528,
                'name' => 'ORO',
            ),
            977 => 
            array (
                'id' => 978,
                'account_id' => 218,
                'code' => 411530,
                'name' => 'OTRAS MINAS Y CANTERAS',
            ),
            978 => 
            array (
                'id' => 979,
                'account_id' => 218,
                'code' => 411532,
                'name' => 'PRESTACION DE SERVICIOS SECTOR MINERO',
            ),
            979 => 
            array (
                'id' => 980,
                'account_id' => 218,
                'code' => 411595,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            980 => 
            array (
                'id' => 981,
                'account_id' => 218,
                'code' => 411599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            981 => 
            array (
                'id' => 982,
                'account_id' => 219,
                'code' => 412001,
                'name' => 'PRODUCCION Y PROCESAMIENTO DE CARNES Y PRODUCTOS CARNICOS',
            ),
            982 => 
            array (
                'id' => 983,
                'account_id' => 219,
                'code' => 412002,
                'name' => 'PRODUCTOS DE PESCADO',
            ),
            983 => 
            array (
                'id' => 984,
                'account_id' => 219,
                'code' => 412003,
                'name' => 'PRODUCTOS DE FRUTAS, LEGUMBRES Y HORTALIZAS',
            ),
            984 => 
            array (
                'id' => 985,
                'account_id' => 219,
                'code' => 412004,
                'name' => 'ELABORACION DE ACEITES Y GRASAS',
            ),
            985 => 
            array (
                'id' => 986,
                'account_id' => 219,
                'code' => 412005,
                'name' => 'ELABORACION DE PRODUCTOS LACTEOS',
            ),
            986 => 
            array (
                'id' => 987,
                'account_id' => 219,
                'code' => 412006,
                'name' => 'ELABORACION DE PRODUCTOS DE MOLINERIA',
            ),
            987 => 
            array (
                'id' => 988,
                'account_id' => 219,
                'code' => 412007,
                'name' => 'ELABORACION DE ALMIDONES Y DERIVADOS',
            ),
            988 => 
            array (
                'id' => 989,
                'account_id' => 219,
                'code' => 412008,
                'name' => 'ELABORACION DE ALIMENTOS PARA ANIMALES',
            ),
            989 => 
            array (
                'id' => 990,
                'account_id' => 219,
                'code' => 412009,
                'name' => 'ELABORACION DE PRODUCTOS PARA PANADERIA',
            ),
            990 => 
            array (
                'id' => 991,
                'account_id' => 219,
                'code' => 412010,
                'name' => 'ELABORACION DE AZUCAR Y MELAZAS',
            ),
            991 => 
            array (
                'id' => 992,
                'account_id' => 219,
                'code' => 412011,
                'name' => 'ELABORACION DE CACAO, CHOCOLATE Y CONFITERIA',
            ),
            992 => 
            array (
                'id' => 993,
                'account_id' => 219,
                'code' => 412012,
                'name' => 'ELABORACION DE PASTAS Y PRODUCTOS FARINACEOS',
            ),
            993 => 
            array (
                'id' => 994,
                'account_id' => 219,
                'code' => 412013,
                'name' => 'ELABORACION DE PRODUCTOS DE CAFE',
            ),
            994 => 
            array (
                'id' => 995,
                'account_id' => 219,
                'code' => 412014,
                'name' => 'ELABORACION DE OTROS PRODUCTOS ALIMENTICIOS',
            ),
            995 => 
            array (
                'id' => 996,
                'account_id' => 219,
                'code' => 412015,
                'name' => 'ELABORACION DE BEBIDAS ALCOHOLICAS Y ALCOHOL ETILICO',
            ),
            996 => 
            array (
                'id' => 997,
                'account_id' => 219,
                'code' => 412016,
                'name' => 'ELABORACION DE VINOS',
            ),
            997 => 
            array (
                'id' => 998,
                'account_id' => 219,
                'code' => 412017,
                'name' => 'ELABORACION DE BEBIDAS MALTEADAS Y DE MALTA',
            ),
            998 => 
            array (
                'id' => 999,
                'account_id' => 219,
                'code' => 412018,
                'name' => 'ELABORACION DE BEBIDAS NO ALCOHOLICAS',
            ),
            999 => 
            array (
                'id' => 1000,
                'account_id' => 219,
                'code' => 412019,
                'name' => 'ELABORACION DE PRODUCTOS DE TABACO',
            ),
        ));
        \DB::table('subaccounts')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'account_id' => 219,
                'code' => 412020,
                'name' => 'PREPARACION E HILATURA DE FIBRAS TEXTILES Y TEJEDURIA',
            ),
            1 => 
            array (
                'id' => 1002,
                'account_id' => 219,
                'code' => 412021,
                'name' => 'ACABADO DE PRODUCTOS TEXTILES',
            ),
            2 => 
            array (
                'id' => 1003,
                'account_id' => 219,
                'code' => 412022,
                'name' => 'ELABORACION DE ARTICULOS DE MATERIALES TEXTILES',
            ),
            3 => 
            array (
                'id' => 1004,
                'account_id' => 219,
                'code' => 412023,
                'name' => 'ELABORACION DE TAPICES Y ALFOMBRAS',
            ),
            4 => 
            array (
                'id' => 1005,
                'account_id' => 219,
                'code' => 412024,
                'name' => 'ELABORACION DE CUERDAS, CORDELES, BRAMANTES Y REDES',
            ),
            5 => 
            array (
                'id' => 1006,
                'account_id' => 219,
                'code' => 412025,
                'name' => 'ELABORACION DE OTROS PRODUCTOS TEXTILES',
            ),
            6 => 
            array (
                'id' => 1007,
                'account_id' => 219,
                'code' => 412026,
                'name' => 'ELABORACION DE TEJIDOS',
            ),
            7 => 
            array (
                'id' => 1008,
                'account_id' => 219,
                'code' => 412027,
                'name' => 'ELABORACION DE PRENDAS DE VESTIR',
            ),
            8 => 
            array (
                'id' => 1009,
                'account_id' => 219,
                'code' => 412028,
                'name' => 'PREPARACION, ADOBO Y TEÑIDO DE PIELES',
            ),
            9 => 
            array (
                'id' => 1010,
                'account_id' => 219,
                'code' => 412029,
                'name' => 'CURTIDO, ADOBO O PREPARACION DE CUERO',
            ),
            10 => 
            array (
                'id' => 1011,
                'account_id' => 219,
                'code' => 412030,
                'name' => 'ELABORACION DE MALETAS, BOLSOS Y SIMILARES',
            ),
            11 => 
            array (
                'id' => 1012,
                'account_id' => 219,
                'code' => 412031,
                'name' => 'ELABORACION DE CALZADO',
            ),
            12 => 
            array (
                'id' => 1013,
                'account_id' => 219,
                'code' => 412032,
                'name' => 'PRODUCCION DE MADERA, ARTICULOS DE MADERA Y CORCHO',
            ),
            13 => 
            array (
                'id' => 1014,
                'account_id' => 219,
                'code' => 412033,
                'name' => 'ELABORACION DE PASTA Y PRODUCTOS DE MADERA, PAPEL Y CARTON',
            ),
            14 => 
            array (
                'id' => 1015,
                'account_id' => 219,
                'code' => 412034,
                'name' => 'EDICIONES Y PUBLICACIONES',
            ),
            15 => 
            array (
                'id' => 1016,
                'account_id' => 219,
                'code' => 412035,
                'name' => 'IMPRESION',
            ),
            16 => 
            array (
                'id' => 1017,
                'account_id' => 219,
                'code' => 412036,
                'name' => 'SERVICIOS RELACIONADOS CON LA EDICION Y LA IMPRESION',
            ),
            17 => 
            array (
                'id' => 1018,
                'account_id' => 219,
                'code' => 412037,
                'name' => 'REPRODUCCION DE GRABACIONES',
            ),
            18 => 
            array (
                'id' => 1019,
                'account_id' => 219,
                'code' => 412038,
                'name' => 'ELABORACION DE PRODUCTOS DE HORNO DE COQUE',
            ),
            19 => 
            array (
                'id' => 1020,
                'account_id' => 219,
                'code' => 412039,
                'name' => 'ELABORACION DE PRODUCTOS DE LA REFINACION DE PETROLEO',
            ),
            20 => 
            array (
                'id' => 1021,
                'account_id' => 219,
                'code' => 412040,
                'name' => 'ELABORACION DE SUSTANCIAS QUIMICAS BASICAS',
            ),
            21 => 
            array (
                'id' => 1022,
                'account_id' => 219,
                'code' => 412041,
                'name' => 'ELABORACION DE ABONOS Y COMPUESTOS DE NITROGENO',
            ),
            22 => 
            array (
                'id' => 1023,
                'account_id' => 219,
                'code' => 412042,
                'name' => 'ELABORACION DE PLASTICO Y CAUCHO SINTETICO',
            ),
            23 => 
            array (
                'id' => 1024,
                'account_id' => 219,
                'code' => 412043,
                'name' => 'ELABORACION DE PRODUCTOS QUIMICOS DE USO AGROPECUARIO',
            ),
            24 => 
            array (
                'id' => 1025,
                'account_id' => 219,
                'code' => 412044,
                'name' => 'ELABORACION DE PINTURAS, TINTAS Y MASILLAS',
            ),
            25 => 
            array (
                'id' => 1026,
                'account_id' => 219,
                'code' => 412045,
                'name' => 'ELABORACION DE PRODUCTOS FARMACEUTICOS Y BOTANICOS',
            ),
            26 => 
            array (
                'id' => 1027,
                'account_id' => 219,
                'code' => 412046,
                'name' => 'ELABORACION DE JABONES, DETERGENTES Y PREPARADOS DE TOCADOR',
            ),
            27 => 
            array (
                'id' => 1028,
                'account_id' => 219,
                'code' => 412047,
                'name' => 'ELABORACION DE OTROS PRODUCTOS QUIMICOS',
            ),
            28 => 
            array (
                'id' => 1029,
                'account_id' => 219,
                'code' => 412048,
                'name' => 'ELABORACION DE FIBRAS',
            ),
            29 => 
            array (
                'id' => 1030,
                'account_id' => 219,
                'code' => 412049,
                'name' => 'ELABORACION DE OTROS PRODUCTOS DE CAUCHO',
            ),
            30 => 
            array (
                'id' => 1031,
                'account_id' => 219,
                'code' => 412050,
                'name' => 'ELABORACION DE PRODUCTOS DE PLASTICO',
            ),
            31 => 
            array (
                'id' => 1032,
                'account_id' => 219,
                'code' => 412051,
                'name' => 'ELABORACION DE VIDRIO Y PRODUCTOS DE VIDRIO',
            ),
            32 => 
            array (
                'id' => 1033,
                'account_id' => 219,
                'code' => 412052,
                'name' => 'ELABORACION DE PRODUCTOS DE CERAMICA, LOZA, PIEDRA, ARCILLA Y PORCELANA',
            ),
            33 => 
            array (
                'id' => 1034,
                'account_id' => 219,
                'code' => 412053,
                'name' => 'ELABORACION DE CEMENTO, CAL Y YESO',
            ),
            34 => 
            array (
                'id' => 1035,
                'account_id' => 219,
                'code' => 412054,
                'name' => 'ELABORACION DE ARTICULOS DE HORMIGON, CEMENTO Y YESO',
            ),
            35 => 
            array (
                'id' => 1036,
                'account_id' => 219,
                'code' => 412055,
                'name' => 'CORTE, TALLADO Y ACABADO DE LA PIEDRA',
            ),
            36 => 
            array (
                'id' => 1037,
                'account_id' => 219,
                'code' => 412056,
                'name' => 'ELABORACION DE OTROS PRODUCTOS MINERALES NO METALICOS',
            ),
            37 => 
            array (
                'id' => 1038,
                'account_id' => 219,
                'code' => 412057,
                'name' => 'INDUSTRIAS BASICAS Y FUNDICION DE HIERRO Y ACERO',
            ),
            38 => 
            array (
                'id' => 1039,
                'account_id' => 219,
                'code' => 412058,
                'name' => 'PRODUCTOS PRIMARIOS DE METALES PRECIOSOS Y DE METALES NO FERROSOS',
            ),
            39 => 
            array (
                'id' => 1040,
                'account_id' => 219,
                'code' => 412059,
                'name' => 'FUNDICION DE METALES NO FERROSOS',
            ),
            40 => 
            array (
                'id' => 1041,
                'account_id' => 219,
                'code' => 412060,
                'name' => 'FABRICACION DE PRODUCTOS METALICOS PARA USO ESTRUCTURAL',
            ),
            41 => 
            array (
                'id' => 1042,
                'account_id' => 219,
                'code' => 412061,
                'name' => 'FORJA, PRENSADO, ESTAMPADO, LAMINADO DE METAL Y PULVIMETALURGIA',
            ),
            42 => 
            array (
                'id' => 1043,
                'account_id' => 219,
                'code' => 412062,
                'name' => 'REVESTIMIENTO DE METALES Y OBRAS DE INGENIERIA MECANICA',
            ),
            43 => 
            array (
                'id' => 1044,
                'account_id' => 219,
                'code' => 412063,
                'name' => 'FABRICACION DE ARTICULOS DE FERRETERIA',
            ),
            44 => 
            array (
                'id' => 1045,
                'account_id' => 219,
                'code' => 412064,
                'name' => 'ELABORACION DE OTROS PRODUCTOS DE METAL',
            ),
            45 => 
            array (
                'id' => 1046,
                'account_id' => 219,
                'code' => 412065,
                'name' => 'FABRICACION DE MAQUINARIA Y EQUIPO',
            ),
            46 => 
            array (
                'id' => 1047,
                'account_id' => 219,
                'code' => 412066,
                'name' => 'FABRICACION DE EQUIPOS DE ELEVACION Y MANIPULACION',
            ),
            47 => 
            array (
                'id' => 1048,
                'account_id' => 219,
                'code' => 412067,
                'name' => 'ELABORACION DE APARATOS DE USO DOMESTICO',
            ),
            48 => 
            array (
                'id' => 1049,
                'account_id' => 219,
                'code' => 412068,
                'name' => 'ELABORACION DE EQUIPO DE OFICINA',
            ),
            49 => 
            array (
                'id' => 1050,
                'account_id' => 219,
                'code' => 412069,
                'name' => 'ELABORACION DE PILAS Y BATERIAS PRIMARIAS',
            ),
            50 => 
            array (
                'id' => 1051,
                'account_id' => 219,
                'code' => 412070,
                'name' => 'ELABORACION DE EQUIPO DE ILUMINACION',
            ),
            51 => 
            array (
                'id' => 1052,
                'account_id' => 219,
                'code' => 412071,
                'name' => 'ELABORACION DE OTROS TIPOS DE EQUIPO ELECTRICO',
            ),
            52 => 
            array (
                'id' => 1053,
                'account_id' => 219,
                'code' => 412072,
                'name' => 'FABRICACION DE EQUIPOS DE RADIO, TELEVISION Y COMUNICACIONES',
            ),
            53 => 
            array (
                'id' => 1054,
                'account_id' => 219,
                'code' => 412073,
                'name' => 'FABRICACION DE APARATOS E INSTRUMENTOS MEDICOS',
            ),
            54 => 
            array (
                'id' => 1055,
                'account_id' => 219,
                'code' => 412074,
                'name' => 'FABRICACION DE INSTRUMENTOS DE MEDICION Y CONTROL',
            ),
            55 => 
            array (
                'id' => 1056,
                'account_id' => 219,
                'code' => 412075,
                'name' => 'FABRICACION DE INSTRUMENTOS DE OPTICA Y EQUIPO FOTOGRAFICO',
            ),
            56 => 
            array (
                'id' => 1057,
                'account_id' => 219,
                'code' => 412076,
                'name' => 'FABRICACION DE RELOJES',
            ),
            57 => 
            array (
                'id' => 1058,
                'account_id' => 219,
                'code' => 412077,
                'name' => 'FABRICACION DE VEHICULOS AUTOMOTORES',
            ),
            58 => 
            array (
                'id' => 1059,
                'account_id' => 219,
                'code' => 412078,
                'name' => 'FABRICACION DE CARROCERIAS PARA AUTOMOTORES',
            ),
            59 => 
            array (
                'id' => 1060,
                'account_id' => 219,
                'code' => 412079,
                'name' => 'FABRICACION DE PARTES PIEZAS Y ACCESORIOS PARA AUTOMOTORES',
            ),
            60 => 
            array (
                'id' => 1061,
                'account_id' => 219,
                'code' => 412080,
                'name' => 'FABRICACION Y REPARACION DE BUQUES Y OTRAS EMBARCACIONES',
            ),
            61 => 
            array (
                'id' => 1062,
                'account_id' => 219,
                'code' => 412081,
                'name' => 'FABRICACION DE LOCOMOTORAS Y MATERIAL RODANTE PARA FERROCARRILES',
            ),
            62 => 
            array (
                'id' => 1063,
                'account_id' => 219,
                'code' => 412082,
                'name' => 'FABRICACION DE AERONAVES',
            ),
            63 => 
            array (
                'id' => 1064,
                'account_id' => 219,
                'code' => 412083,
                'name' => 'FABRICACION DE MOTOCICLETAS',
            ),
            64 => 
            array (
                'id' => 1065,
                'account_id' => 219,
                'code' => 412084,
                'name' => 'FABRICACION DE BICICLETAS Y SILLAS DE RUEDAS',
            ),
            65 => 
            array (
                'id' => 1066,
                'account_id' => 219,
                'code' => 412085,
                'name' => 'FABRICACION DE OTROS TIPOS DE TRANSPORTE',
            ),
            66 => 
            array (
                'id' => 1067,
                'account_id' => 219,
                'code' => 412086,
                'name' => 'FABRICACION DE MUEBLES',
            ),
            67 => 
            array (
                'id' => 1068,
                'account_id' => 219,
                'code' => 412087,
                'name' => 'FABRICACION DE JOYAS Y ARTICULOS CONEXOS',
            ),
            68 => 
            array (
                'id' => 1069,
                'account_id' => 219,
                'code' => 412088,
                'name' => 'FABRICACION DE INSTRUMENTOS DE MUSICA',
            ),
            69 => 
            array (
                'id' => 1070,
                'account_id' => 219,
                'code' => 412089,
                'name' => 'FABRICACION DE ARTICULOS Y EQUIPO PARA DEPORTE',
            ),
            70 => 
            array (
                'id' => 1071,
                'account_id' => 219,
                'code' => 412090,
                'name' => 'FABRICACION DE JUEGOS Y JUGUETES',
            ),
            71 => 
            array (
                'id' => 1072,
                'account_id' => 219,
                'code' => 412091,
                'name' => 'RECICLAMIENTO DE DESPERDICIOS',
            ),
            72 => 
            array (
                'id' => 1073,
                'account_id' => 219,
                'code' => 412095,
                'name' => 'PRODUCTOS DE OTRAS INDUSTRIAS MANUFACTURERAS',
            ),
            73 => 
            array (
                'id' => 1074,
                'account_id' => 219,
                'code' => 412099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            74 => 
            array (
                'id' => 1075,
                'account_id' => 220,
                'code' => 412505,
                'name' => 'GENERACION, CAPTACION Y DISTRIBUCION DE ENERGIA ELECTRICA',
            ),
            75 => 
            array (
                'id' => 1076,
                'account_id' => 220,
                'code' => 412510,
                'name' => 'FABRICACION DE GAS Y DISTRIBUCION DE COMBUSTIBLES GASEOSOS',
            ),
            76 => 
            array (
                'id' => 1077,
                'account_id' => 220,
                'code' => 412515,
                'name' => 'CAPTACION, DEPURACION Y DISTRIBUCION DE AGUA',
            ),
            77 => 
            array (
                'id' => 1078,
                'account_id' => 220,
                'code' => 412595,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            78 => 
            array (
                'id' => 1079,
                'account_id' => 220,
                'code' => 412599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            79 => 
            array (
                'id' => 1080,
                'account_id' => 221,
                'code' => 413005,
                'name' => 'PREPARACION DE TERRENOS',
            ),
            80 => 
            array (
                'id' => 1081,
                'account_id' => 221,
                'code' => 413010,
                'name' => 'CONSTRUCCION DE EDIFICIOS Y OBRAS DE INGENIERIA CIVIL',
            ),
            81 => 
            array (
                'id' => 1082,
                'account_id' => 221,
                'code' => 413015,
                'name' => 'ACONDICIONAMIENTO DE EDIFICIOS',
            ),
            82 => 
            array (
                'id' => 1083,
                'account_id' => 221,
                'code' => 413020,
                'name' => 'TERMINACION DE EDIFICACIONES',
            ),
            83 => 
            array (
                'id' => 1084,
                'account_id' => 221,
                'code' => 413025,
                'name' => 'ALQUILER DE EQUIPO CON OPERARIOS',
            ),
            84 => 
            array (
                'id' => 1085,
                'account_id' => 221,
                'code' => 413095,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            85 => 
            array (
                'id' => 1086,
                'account_id' => 221,
                'code' => 413099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            86 => 
            array (
                'id' => 1087,
                'account_id' => 222,
                'code' => 413502,
                'name' => 'VENTA DE VEHICULOS AUTOMOTORES',
            ),
            87 => 
            array (
                'id' => 1088,
                'account_id' => 222,
                'code' => 413504,
                'name' => 'MANTENIMIENTO, REPARACION Y LAVADO DE VEHICULOS AUTOMOTORES',
            ),
            88 => 
            array (
                'id' => 1089,
                'account_id' => 222,
                'code' => 413506,
                'name' => 'VENTA DE PARTES, PIEZAS Y ACCESORIOS DE VEHICULOS AUTOMOTORES',
            ),
            89 => 
            array (
                'id' => 1090,
                'account_id' => 222,
                'code' => 413508,
                'name' => 'VENTA DE COMBUSTIBLES SOLIDOS, LIQUIDOS, GASEOSOS',
            ),
            90 => 
            array (
                'id' => 1091,
                'account_id' => 222,
                'code' => 413510,
                'name' => 'VENTA DE LUBRICANTES, ADITIVOS, LLANTAS Y LUJOS PARA AUTOMOTORES',
            ),
            91 => 
            array (
                'id' => 1092,
                'account_id' => 222,
                'code' => 413512,
                'name' => 'VENTA A CAMBIO DE RETRIBUCION O POR CONTRATA',
            ),
            92 => 
            array (
                'id' => 1093,
                'account_id' => 222,
                'code' => 413514,
                'name' => 'VENTA DE INSUMOS, MATERIAS PRIMAS AGROPECUARIAS Y FLORES',
            ),
            93 => 
            array (
                'id' => 1094,
                'account_id' => 222,
                'code' => 413516,
                'name' => 'VENTA DE OTROS INSUMOS Y MATERIAS PRIMAS NO AGROPECUARIAS',
            ),
            94 => 
            array (
                'id' => 1095,
                'account_id' => 222,
                'code' => 413518,
                'name' => 'VENTA DE ANIMALES VIVOS Y CUEROS',
            ),
            95 => 
            array (
                'id' => 1096,
                'account_id' => 222,
                'code' => 413520,
                'name' => 'VENTA DE PRODUCTOS EN ALMACENES NO ESPECIALIZADOS',
            ),
            96 => 
            array (
                'id' => 1097,
                'account_id' => 222,
                'code' => 413522,
                'name' => 'VENTA DE PRODUCTOS AGROPECUARIOS',
            ),
            97 => 
            array (
                'id' => 1098,
                'account_id' => 222,
                'code' => 413524,
                'name' => 'VENTA DE PRODUCTOS TEXTILES, DE VESTIR, DE CUERO Y CALZADO',
            ),
            98 => 
            array (
                'id' => 1099,
                'account_id' => 222,
                'code' => 413526,
                'name' => 'VENTA DE PAPEL Y CARTON',
            ),
            99 => 
            array (
                'id' => 1100,
                'account_id' => 222,
                'code' => 413528,
                'name' => 'VENTA DE LIBROS, REVISTAS, ELEMENTOS DE PAPELERIA, UTILES Y TEXTOS ESCOLARES',
            ),
            100 => 
            array (
                'id' => 1101,
                'account_id' => 222,
                'code' => 413530,
                'name' => 'VENTA DE JUEGOS, JUGUETES Y ARTICULOS DEPORTIVOS',
            ),
            101 => 
            array (
                'id' => 1102,
                'account_id' => 222,
                'code' => 413532,
                'name' => 'VENTA DE INSTRUMENTOS QUIRURGICOS Y ORTOPEDICOS',
            ),
            102 => 
            array (
                'id' => 1103,
                'account_id' => 222,
                'code' => 413534,
                'name' => 'VENTA DE ARTICULOS EN RELOJERIAS Y JOYERIAS',
            ),
            103 => 
            array (
                'id' => 1104,
                'account_id' => 222,
                'code' => 413536,
                'name' => 'VENTA DE ELECTRODOMESTICOS Y MUEBLES',
            ),
            104 => 
            array (
                'id' => 1105,
                'account_id' => 222,
                'code' => 413538,
                'name' => 'VENTA DE PRODUCTOS DE ASEO, FARMACEUTICOS, MEDICINALES, Y ARTICULOS DE TOCADOR',
            ),
            105 => 
            array (
                'id' => 1106,
                'account_id' => 222,
                'code' => 413540,
                'name' => 'VENTA DE CUBIERTOS, VAJILLAS, CRISTALERIA, PORCELANAS, CERAMICAS Y OTROS ARTICULOS DE USO DOMESTICO',
            ),
            106 => 
            array (
                'id' => 1107,
                'account_id' => 222,
                'code' => 413542,
                'name' => 'VENTA DE MATERIALES DE CONSTRUCCION, FONTANERIA Y CALEFACCION',
            ),
            107 => 
            array (
                'id' => 1108,
                'account_id' => 222,
                'code' => 413544,
                'name' => 'VENTA DE PINTURAS Y LACAS',
            ),
            108 => 
            array (
                'id' => 1109,
                'account_id' => 222,
                'code' => 413546,
                'name' => 'VENTA DE PRODUCTOS DE VIDRIOS Y MARQUETERIA',
            ),
            109 => 
            array (
                'id' => 1110,
                'account_id' => 222,
                'code' => 413548,
                'name' => 'VENTA DE HERRAMIENTAS Y ARTICULOS DE FERRETERIA',
            ),
            110 => 
            array (
                'id' => 1111,
                'account_id' => 222,
                'code' => 413550,
                'name' => 'VENTA DE QUIMICOS',
            ),
            111 => 
            array (
                'id' => 1112,
                'account_id' => 222,
                'code' => 413552,
                'name' => 'VENTA DE PRODUCTOS INTERMEDIOS, DESPERDICIOS Y DESECHOS',
            ),
            112 => 
            array (
                'id' => 1113,
                'account_id' => 222,
                'code' => 413554,
                'name' => 'VENTA DE MAQUINARIA, EQUIPO DE OFICINA Y PROGRAMAS DE COMPUTADOR',
            ),
            113 => 
            array (
                'id' => 1114,
                'account_id' => 222,
                'code' => 413556,
                'name' => 'VENTA DE ARTICULOS EN CACHARRERIAS Y MISCELANEAS',
            ),
            114 => 
            array (
                'id' => 1115,
                'account_id' => 222,
                'code' => 413558,
                'name' => 'VENTA DE INSTRUMENTOS MUSICALES',
            ),
            115 => 
            array (
                'id' => 1116,
                'account_id' => 222,
                'code' => 413560,
                'name' => 'VENTA DE ARTICULOS EN CASAS DE EMPEÑO Y PRENDERIAS',
            ),
            116 => 
            array (
                'id' => 1117,
                'account_id' => 222,
                'code' => 413562,
                'name' => 'VENTA DE EQUIPO FOTOGRAFICO',
            ),
            117 => 
            array (
                'id' => 1118,
                'account_id' => 222,
                'code' => 413564,
                'name' => 'VENTA DE EQUIPO OPTICO Y DE PRECISION',
            ),
            118 => 
            array (
                'id' => 1119,
                'account_id' => 222,
                'code' => 413566,
                'name' => 'VENTA DE EMPAQUES',
            ),
            119 => 
            array (
                'id' => 1120,
                'account_id' => 222,
                'code' => 413568,
                'name' => 'VENTA DE EQUIPO PROFESIONAL Y CIENTIFICO',
            ),
            120 => 
            array (
                'id' => 1121,
                'account_id' => 222,
                'code' => 413570,
                'name' => 'VENTA DE LOTERIAS, RIFAS, CHANCE, APUESTAS Y SIMILARES',
            ),
            121 => 
            array (
                'id' => 1122,
                'account_id' => 222,
                'code' => 413572,
                'name' => 'REPARACION DE EFECTOS PERSONALES Y ELECTRODOMESTICOS',
            ),
            122 => 
            array (
                'id' => 1123,
                'account_id' => 222,
                'code' => 413595,
                'name' => 'VENTA DE OTROS PRODUCTOS',
            ),
            123 => 
            array (
                'id' => 1124,
                'account_id' => 222,
                'code' => 413599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            124 => 
            array (
                'id' => 1125,
                'account_id' => 223,
                'code' => 414005,
                'name' => 'HOTELERIA',
            ),
            125 => 
            array (
                'id' => 1126,
                'account_id' => 223,
                'code' => 414010,
                'name' => 'CAMPAMENTO Y OTROS TIPOS DE HOSPEDAJE',
            ),
            126 => 
            array (
                'id' => 1127,
                'account_id' => 223,
                'code' => 414015,
                'name' => 'RESTAURANTES',
            ),
            127 => 
            array (
                'id' => 1128,
                'account_id' => 223,
                'code' => 414020,
                'name' => 'BARES Y CANTINAS',
            ),
            128 => 
            array (
                'id' => 1129,
                'account_id' => 223,
                'code' => 414095,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            129 => 
            array (
                'id' => 1130,
                'account_id' => 223,
                'code' => 414099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            130 => 
            array (
                'id' => 1131,
                'account_id' => 224,
                'code' => 414505,
                'name' => 'SERVICIO DE TRANSPORTE POR CARRETERA',
            ),
            131 => 
            array (
                'id' => 1132,
                'account_id' => 224,
                'code' => 414510,
                'name' => 'SERVICIO DE TRANSPORTE POR VIA FERREA',
            ),
            132 => 
            array (
                'id' => 1133,
                'account_id' => 224,
                'code' => 414515,
                'name' => 'SERVICIO DE TRANSPORTE POR VIA ACUATICA',
            ),
            133 => 
            array (
                'id' => 1134,
                'account_id' => 224,
                'code' => 414520,
                'name' => 'SERVICIO DE TRANSPORTE POR VIA AEREA',
            ),
            134 => 
            array (
                'id' => 1135,
                'account_id' => 224,
                'code' => 414525,
                'name' => 'SERVICIO DE TRANSPORTE POR TUBERIAS',
            ),
            135 => 
            array (
                'id' => 1136,
                'account_id' => 224,
                'code' => 414530,
                'name' => 'MANIPULACION DE CARGA',
            ),
            136 => 
            array (
                'id' => 1137,
                'account_id' => 224,
                'code' => 414535,
                'name' => 'ALMACENAMIENTO Y DEPOSITO',
            ),
            137 => 
            array (
                'id' => 1138,
                'account_id' => 224,
                'code' => 414540,
                'name' => 'SERVICIOS COMPLEMENTARIOS PARA EL TRANSPORTE',
            ),
            138 => 
            array (
                'id' => 1139,
                'account_id' => 224,
                'code' => 414545,
                'name' => 'AGENCIAS DE VIAJE',
            ),
            139 => 
            array (
                'id' => 1140,
                'account_id' => 224,
                'code' => 414550,
                'name' => 'OTRAS AGENCIAS DE TRANSPORTE',
            ),
            140 => 
            array (
                'id' => 1141,
                'account_id' => 224,
                'code' => 414555,
                'name' => 'SERVICIO POSTAL Y DE CORREO',
            ),
            141 => 
            array (
                'id' => 1142,
                'account_id' => 224,
                'code' => 414560,
                'name' => 'SERVICIO TELEFONICO',
            ),
            142 => 
            array (
                'id' => 1143,
                'account_id' => 224,
                'code' => 414565,
                'name' => 'SERVICIO DE TELEGRAFO',
            ),
            143 => 
            array (
                'id' => 1144,
                'account_id' => 224,
                'code' => 414570,
                'name' => 'SERVICIO DE TRANSMISION DE DATOS',
            ),
            144 => 
            array (
                'id' => 1145,
                'account_id' => 224,
                'code' => 414575,
                'name' => 'SERVICIO DE RADIO Y TELEVISION POR CABLE',
            ),
            145 => 
            array (
                'id' => 1146,
                'account_id' => 224,
                'code' => 414580,
                'name' => 'TRANSMISION DE SONIDO E IMAGENES POR CONTRATO',
            ),
            146 => 
            array (
                'id' => 1147,
                'account_id' => 224,
                'code' => 414595,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            147 => 
            array (
                'id' => 1148,
                'account_id' => 224,
                'code' => 414599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            148 => 
            array (
                'id' => 1149,
                'account_id' => 225,
                'code' => 415005,
                'name' => 'VENTA DE INVERSIONES',
            ),
            149 => 
            array (
                'id' => 1150,
                'account_id' => 225,
                'code' => 415010,
                'name' => 'DIVIDENDOS DE SOCIEDADES ANONIMAS Y/O ASIMILADAS',
            ),
            150 => 
            array (
                'id' => 1151,
                'account_id' => 225,
                'code' => 415015,
                'name' => 'PARTICIPACIONES DE SOCIEDADES LIMITADAS Y/O ASIMILADAS',
            ),
            151 => 
            array (
                'id' => 1152,
                'account_id' => 225,
                'code' => 415020,
                'name' => 'INTERESES',
            ),
            152 => 
            array (
                'id' => 1153,
                'account_id' => 225,
                'code' => 415025,
                'name' => 'REAJUSTE MONETARIO - UPAC',
            ),
            153 => 
            array (
                'id' => 1154,
                'account_id' => 225,
                'code' => 415030,
                'name' => 'COMISIONES',
            ),
            154 => 
            array (
                'id' => 1155,
                'account_id' => 225,
                'code' => 415035,
                'name' => 'OPERACIONES DE DESCUENTO',
            ),
            155 => 
            array (
                'id' => 1156,
                'account_id' => 225,
                'code' => 415040,
                'name' => 'CUOTAS DE INSCRIPCION - CONSORCIOS',
            ),
            156 => 
            array (
                'id' => 1157,
                'account_id' => 225,
                'code' => 415045,
                'name' => 'CUOTAS DE ADMINISTRACION - CONSORCIOS',
            ),
            157 => 
            array (
                'id' => 1158,
                'account_id' => 225,
                'code' => 415050,
                'name' => 'REAJUSTE DEL SISTEMA - CONSORCIOS',
            ),
            158 => 
            array (
                'id' => 1159,
                'account_id' => 225,
                'code' => 415055,
                'name' => 'ELIMINACION DE SUSCRIPTORES - CONSORCIOS',
            ),
            159 => 
            array (
                'id' => 1160,
                'account_id' => 225,
                'code' => 415060,
                'name' => 'CUOTAS DE INGRESO O RETIRO - SOCIEDAD ADMINISTRADORA',
            ),
            160 => 
            array (
                'id' => 1161,
                'account_id' => 225,
                'code' => 415065,
                'name' => 'SERVICIOS A COMISIONISTAS',
            ),
            161 => 
            array (
                'id' => 1162,
                'account_id' => 225,
                'code' => 415070,
                'name' => 'INSCRIPCIONES Y CUOTAS',
            ),
            162 => 
            array (
                'id' => 1163,
                'account_id' => 225,
                'code' => 415075,
                'name' => 'RECUPERACION DE GARANTIAS',
            ),
            163 => 
            array (
                'id' => 1164,
                'account_id' => 225,
                'code' => 415095,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            164 => 
            array (
                'id' => 1165,
                'account_id' => 225,
                'code' => 415099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            165 => 
            array (
                'id' => 1166,
                'account_id' => 226,
                'code' => 415505,
                'name' => 'ARRENDAMIENTOS DE BIENES INMUEBLES',
            ),
            166 => 
            array (
                'id' => 1167,
                'account_id' => 226,
                'code' => 415510,
                'name' => 'INMOBILIARIAS POR RETRIBUCION O CONTRATA',
            ),
            167 => 
            array (
                'id' => 1168,
                'account_id' => 226,
                'code' => 415515,
                'name' => 'ALQUILER EQUIPO DE TRANSPORTE',
            ),
            168 => 
            array (
                'id' => 1169,
                'account_id' => 226,
                'code' => 415520,
                'name' => 'ALQUILER MAQUINARIA Y EQUIPO',
            ),
            169 => 
            array (
                'id' => 1170,
                'account_id' => 226,
                'code' => 415525,
                'name' => 'ALQUILER DE EFECTOS PERSONALES Y ENSERES DOMESTICOS',
            ),
            170 => 
            array (
                'id' => 1171,
                'account_id' => 226,
                'code' => 415530,
                'name' => 'CONSULTORIA EN EQUIPO Y PROGRAMAS DE INFORMATICA',
            ),
            171 => 
            array (
                'id' => 1172,
                'account_id' => 226,
                'code' => 415535,
                'name' => 'PROCESAMIENTO DE DATOS',
            ),
            172 => 
            array (
                'id' => 1173,
                'account_id' => 226,
                'code' => 415540,
                'name' => 'MANTENIMIENTO Y REPARACION DE MAQUINARIA DE OFICINA',
            ),
            173 => 
            array (
                'id' => 1174,
                'account_id' => 226,
                'code' => 415545,
                'name' => 'INVESTIGACIONES CIENTIFICAS Y DE DESARROLLO',
            ),
            174 => 
            array (
                'id' => 1175,
                'account_id' => 226,
                'code' => 415550,
                'name' => 'ACTIVIDADES EMPRESARIALES DE CONSULTORIA',
            ),
            175 => 
            array (
                'id' => 1176,
                'account_id' => 226,
                'code' => 415555,
                'name' => 'PUBLICIDAD',
            ),
            176 => 
            array (
                'id' => 1177,
                'account_id' => 226,
                'code' => 415560,
                'name' => 'DOTACION DE PERSONAL',
            ),
            177 => 
            array (
                'id' => 1178,
                'account_id' => 226,
                'code' => 415565,
                'name' => 'INVESTIGACION Y SEGURIDAD',
            ),
            178 => 
            array (
                'id' => 1179,
                'account_id' => 226,
                'code' => 415570,
                'name' => 'LIMPIEZA DE INMUEBLES',
            ),
            179 => 
            array (
                'id' => 1180,
                'account_id' => 226,
                'code' => 415575,
                'name' => 'FOTOGRAFIA',
            ),
            180 => 
            array (
                'id' => 1181,
                'account_id' => 226,
                'code' => 415580,
                'name' => 'ENVASE Y EMPAQUE',
            ),
            181 => 
            array (
                'id' => 1182,
                'account_id' => 226,
                'code' => 415585,
                'name' => 'FOTOCOPIADO',
            ),
            182 => 
            array (
                'id' => 1183,
                'account_id' => 226,
                'code' => 415590,
                'name' => 'MANTENIMIENTO Y REPARACION DE MAQUINARIA Y EQUIPO',
            ),
            183 => 
            array (
                'id' => 1184,
                'account_id' => 226,
                'code' => 415595,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            184 => 
            array (
                'id' => 1185,
                'account_id' => 226,
                'code' => 415599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            185 => 
            array (
                'id' => 1186,
                'account_id' => 227,
                'code' => 416005,
                'name' => 'ACTIVIDADES RELACIONADAS CON LA EDUCACION',
            ),
            186 => 
            array (
                'id' => 1187,
                'account_id' => 227,
                'code' => 416095,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            187 => 
            array (
                'id' => 1188,
                'account_id' => 227,
                'code' => 416099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            188 => 
            array (
                'id' => 1189,
                'account_id' => 228,
                'code' => 416505,
                'name' => 'SERVICIO HOSPITALARIO',
            ),
            189 => 
            array (
                'id' => 1190,
                'account_id' => 228,
                'code' => 416510,
                'name' => 'SERVICIO MEDICO',
            ),
            190 => 
            array (
                'id' => 1191,
                'account_id' => 228,
                'code' => 416515,
                'name' => 'SERVICIO ODONTOLOGICO',
            ),
            191 => 
            array (
                'id' => 1192,
                'account_id' => 228,
                'code' => 416520,
                'name' => 'SERVICIO DE LABORATORIO',
            ),
            192 => 
            array (
                'id' => 1193,
                'account_id' => 228,
                'code' => 416525,
                'name' => 'ACTIVIDADES VETERINARIAS',
            ),
            193 => 
            array (
                'id' => 1194,
                'account_id' => 228,
                'code' => 416530,
                'name' => 'ACTIVIDADES DE SERVICIOS SOCIALES',
            ),
            194 => 
            array (
                'id' => 1195,
                'account_id' => 228,
                'code' => 416595,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            195 => 
            array (
                'id' => 1196,
                'account_id' => 228,
                'code' => 416599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            196 => 
            array (
                'id' => 1197,
                'account_id' => 229,
                'code' => 417005,
                'name' => 'ELIMINACION DE DESPERDICIOS Y AGUAS RESIDUALES',
            ),
            197 => 
            array (
                'id' => 1198,
                'account_id' => 229,
                'code' => 417010,
                'name' => 'ACTIVIDADES DE ASOCIACION',
            ),
            198 => 
            array (
                'id' => 1199,
                'account_id' => 229,
                'code' => 417015,
                'name' => 'PRODUCCION Y DISTRIBUCION DE FILMES Y VIDEOCINTAS',
            ),
            199 => 
            array (
                'id' => 1200,
                'account_id' => 229,
                'code' => 417020,
                'name' => 'EXHIBICION DE FILMES Y VIDEOCINTAS',
            ),
            200 => 
            array (
                'id' => 1201,
                'account_id' => 229,
                'code' => 417025,
                'name' => 'ACTIVIDAD DE RADIO Y TELEVISION',
            ),
            201 => 
            array (
                'id' => 1202,
                'account_id' => 229,
                'code' => 417030,
                'name' => 'ACTIVIDAD TEATRAL, MUSICAL Y ARTISTICA',
            ),
            202 => 
            array (
                'id' => 1203,
                'account_id' => 229,
                'code' => 417035,
                'name' => 'GRABACION Y PRODUCCION DE DISCOS',
            ),
            203 => 
            array (
                'id' => 1204,
                'account_id' => 229,
                'code' => 417040,
                'name' => 'ENTRETENIMIENTO Y ESPARCIMIENTO',
            ),
            204 => 
            array (
                'id' => 1205,
                'account_id' => 229,
                'code' => 417045,
                'name' => 'AGENCIAS DE NOTICIAS',
            ),
            205 => 
            array (
                'id' => 1206,
                'account_id' => 229,
                'code' => 417050,
                'name' => 'LAVANDERIAS Y SIMILARES',
            ),
            206 => 
            array (
                'id' => 1207,
                'account_id' => 229,
                'code' => 417055,
                'name' => 'PELUQUERIAS Y SIMILARES',
            ),
            207 => 
            array (
                'id' => 1208,
                'account_id' => 229,
                'code' => 417060,
                'name' => 'SERVICIOS FUNERARIOS',
            ),
            208 => 
            array (
                'id' => 1209,
                'account_id' => 229,
                'code' => 417065,
                'name' => 'ZONAS FRANCAS',
            ),
            209 => 
            array (
                'id' => 1210,
                'account_id' => 229,
                'code' => 417095,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            210 => 
            array (
                'id' => 1211,
                'account_id' => 229,
                'code' => 417099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            211 => 
            array (
                'id' => 1212,
                'account_id' => 230,
                'code' => 417501,
                'name' => '???',
            ),
            212 => 
            array (
                'id' => 1213,
                'account_id' => 230,
                'code' => 417599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            213 => 
            array (
                'id' => 1214,
                'account_id' => 231,
                'code' => 420505,
                'name' => 'MATERIA PRIMA',
            ),
            214 => 
            array (
                'id' => 1215,
                'account_id' => 231,
                'code' => 420510,
                'name' => 'MATERIAL DE DESECHO',
            ),
            215 => 
            array (
                'id' => 1216,
                'account_id' => 231,
                'code' => 420515,
                'name' => 'MATERIALES VARIOS',
            ),
            216 => 
            array (
                'id' => 1217,
                'account_id' => 231,
                'code' => 420520,
                'name' => 'PRODUCTOS DE DIVERSIFICACION',
            ),
            217 => 
            array (
                'id' => 1218,
                'account_id' => 231,
                'code' => 420525,
                'name' => 'EXCEDENTES DE EXPORTACION',
            ),
            218 => 
            array (
                'id' => 1219,
                'account_id' => 231,
                'code' => 420530,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            219 => 
            array (
                'id' => 1220,
                'account_id' => 231,
                'code' => 420535,
                'name' => 'PRODUCTOS AGRICOLAS',
            ),
            220 => 
            array (
                'id' => 1221,
                'account_id' => 231,
                'code' => 420540,
                'name' => 'DE PROPAGANDA',
            ),
            221 => 
            array (
                'id' => 1222,
                'account_id' => 231,
                'code' => 420545,
                'name' => 'PRODUCTOS EN REMATE',
            ),
            222 => 
            array (
                'id' => 1223,
                'account_id' => 231,
                'code' => 420550,
                'name' => 'COMBUSTIBLES Y LUBRICANTES',
            ),
            223 => 
            array (
                'id' => 1224,
                'account_id' => 231,
                'code' => 420599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            224 => 
            array (
                'id' => 1225,
                'account_id' => 232,
                'code' => 421005,
                'name' => 'INTERESES',
            ),
            225 => 
            array (
                'id' => 1226,
                'account_id' => 232,
                'code' => 421010,
                'name' => 'REAJUSTE MONETARIO - UPAC',
            ),
            226 => 
            array (
                'id' => 1227,
                'account_id' => 232,
                'code' => 421015,
                'name' => 'DESCUENTOS AMORTIZADOS',
            ),
            227 => 
            array (
                'id' => 1228,
                'account_id' => 232,
                'code' => 421020,
                'name' => 'DIFERENCIA EN CAMBIO',
            ),
            228 => 
            array (
                'id' => 1229,
                'account_id' => 232,
                'code' => 421025,
                'name' => 'FINANCIACION VEHICULOS',
            ),
            229 => 
            array (
                'id' => 1230,
                'account_id' => 232,
                'code' => 421030,
                'name' => 'FINANCIACION SISTEMAS DE VIAJES',
            ),
            230 => 
            array (
                'id' => 1231,
                'account_id' => 232,
                'code' => 421035,
                'name' => 'ACEPTACIONES BANCARIAS',
            ),
            231 => 
            array (
                'id' => 1232,
                'account_id' => 232,
                'code' => 421040,
                'name' => 'DESCUENTOS COMERCIALES CONDICIONADOS',
            ),
            232 => 
            array (
                'id' => 1233,
                'account_id' => 232,
                'code' => 421045,
                'name' => 'DESCUENTOS BANCARIOS',
            ),
            233 => 
            array (
                'id' => 1234,
                'account_id' => 232,
                'code' => 421050,
                'name' => 'COMISIONES CHEQUES DE OTRAS PLAZAS',
            ),
            234 => 
            array (
                'id' => 1235,
                'account_id' => 232,
                'code' => 421055,
                'name' => 'MULTAS Y RECARGOS',
            ),
            235 => 
            array (
                'id' => 1236,
                'account_id' => 232,
                'code' => 421060,
                'name' => 'SANCIONES CHEQUES DEVUELTOS',
            ),
            236 => 
            array (
                'id' => 1237,
                'account_id' => 232,
                'code' => 421095,
                'name' => 'OTROS',
            ),
            237 => 
            array (
                'id' => 1238,
                'account_id' => 232,
                'code' => 421099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            238 => 
            array (
                'id' => 1239,
                'account_id' => 233,
                'code' => 421505,
                'name' => 'DE SOCIEDADES ANONIMAS Y/O ASIMILADAS',
            ),
            239 => 
            array (
                'id' => 1240,
                'account_id' => 233,
                'code' => 421510,
                'name' => 'DE SOCIEDADES LIMITADAS Y/O ASIMILADAS',
            ),
            240 => 
            array (
                'id' => 1241,
                'account_id' => 233,
                'code' => 421599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            241 => 
            array (
                'id' => 1242,
                'account_id' => 234,
                'code' => 422005,
                'name' => 'TERRENOS',
            ),
            242 => 
            array (
                'id' => 1243,
                'account_id' => 234,
                'code' => 422010,
                'name' => 'CONSTRUCCIONES Y EDIFICIOS',
            ),
            243 => 
            array (
                'id' => 1244,
                'account_id' => 234,
                'code' => 422015,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            244 => 
            array (
                'id' => 1245,
                'account_id' => 234,
                'code' => 422020,
                'name' => 'EQUIPO DE OFICINA',
            ),
            245 => 
            array (
                'id' => 1246,
                'account_id' => 234,
                'code' => 422025,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            246 => 
            array (
                'id' => 1247,
                'account_id' => 234,
                'code' => 422030,
                'name' => 'EQUIPO MEDICO - CIENTIFICO',
            ),
            247 => 
            array (
                'id' => 1248,
                'account_id' => 234,
                'code' => 422035,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            248 => 
            array (
                'id' => 1249,
                'account_id' => 234,
                'code' => 422040,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            249 => 
            array (
                'id' => 1250,
                'account_id' => 234,
                'code' => 422045,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            250 => 
            array (
                'id' => 1251,
                'account_id' => 234,
                'code' => 422050,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            251 => 
            array (
                'id' => 1252,
                'account_id' => 234,
                'code' => 422055,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            252 => 
            array (
                'id' => 1253,
                'account_id' => 234,
                'code' => 422060,
                'name' => 'ACUEDUCTOS PLANTAS Y REDES',
            ),
            253 => 
            array (
                'id' => 1254,
                'account_id' => 234,
                'code' => 422062,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            254 => 
            array (
                'id' => 1255,
                'account_id' => 234,
                'code' => 422065,
                'name' => 'PLANTACIONES AGRICOLAS Y FORESTALES',
            ),
            255 => 
            array (
                'id' => 1256,
                'account_id' => 234,
                'code' => 422070,
                'name' => 'AERODROMOS',
            ),
            256 => 
            array (
                'id' => 1257,
                'account_id' => 234,
                'code' => 422075,
                'name' => 'SEMOVIENTES',
            ),
            257 => 
            array (
                'id' => 1258,
                'account_id' => 234,
                'code' => 422099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            258 => 
            array (
                'id' => 1259,
                'account_id' => 235,
                'code' => 422505,
                'name' => 'SOBRE INVERSIONES',
            ),
            259 => 
            array (
                'id' => 1260,
                'account_id' => 235,
                'code' => 422510,
                'name' => 'DE CONCESIONARIOS',
            ),
            260 => 
            array (
                'id' => 1261,
                'account_id' => 235,
                'code' => 422515,
                'name' => 'DE ACTIVIDADES FINANCIERAS',
            ),
            261 => 
            array (
                'id' => 1262,
                'account_id' => 235,
                'code' => 422520,
                'name' => 'POR VENTA DE SERVICIOS DE TALLER',
            ),
            262 => 
            array (
                'id' => 1263,
                'account_id' => 235,
                'code' => 422525,
                'name' => 'POR VENTA DE SEGUROS',
            ),
            263 => 
            array (
                'id' => 1264,
                'account_id' => 235,
                'code' => 422530,
                'name' => 'POR INGRESOS PARA TERCEROS',
            ),
            264 => 
            array (
                'id' => 1265,
                'account_id' => 235,
                'code' => 422535,
                'name' => 'POR DISTRIBUCION DE PELICULAS',
            ),
            265 => 
            array (
                'id' => 1266,
                'account_id' => 235,
                'code' => 422540,
                'name' => 'DERECHOS DE AUTOR',
            ),
            266 => 
            array (
                'id' => 1267,
                'account_id' => 235,
                'code' => 422545,
                'name' => 'DERECHOS DE PROGRAMACION',
            ),
            267 => 
            array (
                'id' => 1268,
                'account_id' => 235,
                'code' => 422599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            268 => 
            array (
                'id' => 1269,
                'account_id' => 236,
                'code' => 423005,
                'name' => 'ASESORIAS',
            ),
            269 => 
            array (
                'id' => 1270,
                'account_id' => 236,
                'code' => 423010,
                'name' => 'ASISTENCIA TECNICA',
            ),
            270 => 
            array (
                'id' => 1271,
                'account_id' => 236,
                'code' => 423015,
                'name' => 'ADMINISTRACION DE VINCULADAS',
            ),
            271 => 
            array (
                'id' => 1272,
                'account_id' => 236,
                'code' => 423099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            272 => 
            array (
                'id' => 1273,
                'account_id' => 237,
                'code' => 423505,
                'name' => 'DE BASCULA',
            ),
            273 => 
            array (
                'id' => 1274,
                'account_id' => 237,
                'code' => 423510,
                'name' => 'DE TRANSPORTE',
            ),
            274 => 
            array (
                'id' => 1275,
                'account_id' => 237,
                'code' => 423515,
                'name' => 'DE PRENSA',
            ),
            275 => 
            array (
                'id' => 1276,
                'account_id' => 237,
                'code' => 423520,
                'name' => 'ADMINISTRATIVOS',
            ),
            276 => 
            array (
                'id' => 1277,
                'account_id' => 237,
                'code' => 423525,
                'name' => 'TECNICOS',
            ),
            277 => 
            array (
                'id' => 1278,
                'account_id' => 237,
                'code' => 423530,
                'name' => 'DE COMPUTACION',
            ),
            278 => 
            array (
                'id' => 1279,
                'account_id' => 237,
                'code' => 423535,
                'name' => 'DE TELEFAX',
            ),
            279 => 
            array (
                'id' => 1280,
                'account_id' => 237,
                'code' => 423540,
                'name' => 'TALLER DE VEHICULOS',
            ),
            280 => 
            array (
                'id' => 1281,
                'account_id' => 237,
                'code' => 423545,
                'name' => 'DE RECEPCION DE AERONAVES',
            ),
            281 => 
            array (
                'id' => 1282,
                'account_id' => 237,
                'code' => 423550,
                'name' => 'DE TRANSPORTE PROGRAMA GAS NATURAL',
            ),
            282 => 
            array (
                'id' => 1283,
                'account_id' => 237,
                'code' => 423555,
                'name' => 'POR CONTRATOS',
            ),
            283 => 
            array (
                'id' => 1284,
                'account_id' => 237,
                'code' => 423560,
                'name' => 'DE TRILLLA',
            ),
            284 => 
            array (
                'id' => 1285,
                'account_id' => 237,
                'code' => 423565,
                'name' => 'DE MANTENIMIENTO',
            ),
            285 => 
            array (
                'id' => 1286,
                'account_id' => 237,
                'code' => 423570,
                'name' => 'AL PERSONAL',
            ),
            286 => 
            array (
                'id' => 1287,
                'account_id' => 237,
                'code' => 423575,
                'name' => 'DE CASINO',
            ),
            287 => 
            array (
                'id' => 1288,
                'account_id' => 237,
                'code' => 423580,
                'name' => 'FLETES',
            ),
            288 => 
            array (
                'id' => 1289,
                'account_id' => 237,
                'code' => 423585,
                'name' => 'ENTRE COMPAÑIAS',
            ),
            289 => 
            array (
                'id' => 1290,
                'account_id' => 237,
                'code' => 423595,
                'name' => 'OTROS',
            ),
            290 => 
            array (
                'id' => 1291,
                'account_id' => 237,
                'code' => 423599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            291 => 
            array (
                'id' => 1292,
                'account_id' => 238,
                'code' => 424005,
                'name' => 'ACCIONES',
            ),
            292 => 
            array (
                'id' => 1293,
                'account_id' => 238,
                'code' => 424010,
                'name' => 'CUOTAS O PARTES DE INTERES SOCIAL',
            ),
            293 => 
            array (
                'id' => 1294,
                'account_id' => 238,
                'code' => 424015,
                'name' => 'BONOS',
            ),
            294 => 
            array (
                'id' => 1295,
                'account_id' => 238,
                'code' => 424020,
                'name' => 'CEDULAS',
            ),
            295 => 
            array (
                'id' => 1296,
                'account_id' => 238,
                'code' => 424025,
                'name' => 'CERTIFICADOS',
            ),
            296 => 
            array (
                'id' => 1297,
                'account_id' => 238,
                'code' => 424030,
                'name' => 'PAPELES COMERCIALES',
            ),
            297 => 
            array (
                'id' => 1298,
                'account_id' => 238,
                'code' => 424035,
                'name' => 'TITULOS',
            ),
            298 => 
            array (
                'id' => 1299,
                'account_id' => 238,
                'code' => 424045,
                'name' => 'DERECHOS FIDUCIARIOS',
            ),
            299 => 
            array (
                'id' => 1300,
                'account_id' => 238,
                'code' => 424050,
                'name' => 'OBLIGATORIAS',
            ),
            300 => 
            array (
                'id' => 1301,
                'account_id' => 238,
                'code' => 424095,
                'name' => 'OTRAS',
            ),
            301 => 
            array (
                'id' => 1302,
                'account_id' => 238,
                'code' => 424099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            302 => 
            array (
                'id' => 1303,
                'account_id' => 239,
                'code' => 424504,
                'name' => 'TERRENOS',
            ),
            303 => 
            array (
                'id' => 1304,
                'account_id' => 239,
                'code' => 424506,
                'name' => 'MATERIALES INDUSTRIA PETROLERA',
            ),
            304 => 
            array (
                'id' => 1305,
                'account_id' => 239,
                'code' => 424508,
                'name' => 'CONSTRUCCIONES EN CURSO',
            ),
            305 => 
            array (
                'id' => 1306,
                'account_id' => 239,
                'code' => 424512,
                'name' => 'MAQUINARIA EN MONTAJE',
            ),
            306 => 
            array (
                'id' => 1307,
                'account_id' => 239,
                'code' => 424516,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            307 => 
            array (
                'id' => 1308,
                'account_id' => 239,
                'code' => 424520,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            308 => 
            array (
                'id' => 1309,
                'account_id' => 239,
                'code' => 424524,
                'name' => 'EQUIPO DE OFICINA',
            ),
            309 => 
            array (
                'id' => 1310,
                'account_id' => 239,
                'code' => 424528,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            310 => 
            array (
                'id' => 1311,
                'account_id' => 239,
                'code' => 424532,
                'name' => 'EQUIPO MEDICO - CIENTIFICO',
            ),
            311 => 
            array (
                'id' => 1312,
                'account_id' => 239,
                'code' => 424536,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            312 => 
            array (
                'id' => 1313,
                'account_id' => 239,
                'code' => 424540,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            313 => 
            array (
                'id' => 1314,
                'account_id' => 239,
                'code' => 424544,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            314 => 
            array (
                'id' => 1315,
                'account_id' => 239,
                'code' => 424548,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            315 => 
            array (
                'id' => 1316,
                'account_id' => 239,
                'code' => 424552,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            316 => 
            array (
                'id' => 1317,
                'account_id' => 239,
                'code' => 424556,
                'name' => 'ACUEDUCTOS PLANTAS Y REDES',
            ),
            317 => 
            array (
                'id' => 1318,
                'account_id' => 239,
                'code' => 424560,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            318 => 
            array (
                'id' => 1319,
                'account_id' => 239,
                'code' => 424562,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            319 => 
            array (
                'id' => 1320,
                'account_id' => 239,
                'code' => 424564,
                'name' => 'PLANTACIONES AGRICOLAS Y FORESTALES',
            ),
            320 => 
            array (
                'id' => 1321,
                'account_id' => 239,
                'code' => 424568,
                'name' => 'VIAS DE COMUNICACION',
            ),
            321 => 
            array (
                'id' => 1322,
                'account_id' => 239,
                'code' => 424572,
                'name' => 'MINAS Y CANTERAS',
            ),
            322 => 
            array (
                'id' => 1323,
                'account_id' => 239,
                'code' => 424580,
                'name' => 'POZOS ARTESIANOS',
            ),
            323 => 
            array (
                'id' => 1324,
                'account_id' => 239,
                'code' => 424584,
                'name' => 'YACIMIENTOS',
            ),
            324 => 
            array (
                'id' => 1325,
                'account_id' => 239,
                'code' => 424588,
                'name' => 'SEMOVIENTES',
            ),
            325 => 
            array (
                'id' => 1326,
                'account_id' => 239,
                'code' => 424599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            326 => 
            array (
                'id' => 1327,
                'account_id' => 240,
                'code' => 424805,
                'name' => 'INTANGIBLES',
            ),
            327 => 
            array (
                'id' => 1328,
                'account_id' => 240,
                'code' => 424810,
                'name' => 'OTROS ACTIVOS',
            ),
            328 => 
            array (
                'id' => 1329,
                'account_id' => 240,
                'code' => 424899,
                'name' => 'AJUSTES POR INFLACION',
            ),
            329 => 
            array (
                'id' => 1330,
                'account_id' => 241,
                'code' => 425005,
                'name' => 'DEUDAS MALAS',
            ),
            330 => 
            array (
                'id' => 1331,
                'account_id' => 241,
                'code' => 425010,
                'name' => 'SEGUROS',
            ),
            331 => 
            array (
                'id' => 1332,
                'account_id' => 241,
                'code' => 425015,
                'name' => 'RECLAMOS',
            ),
            332 => 
            array (
                'id' => 1333,
                'account_id' => 241,
                'code' => 425020,
                'name' => 'REINTEGRO POR PERSONAL EN COMISION',
            ),
            333 => 
            array (
                'id' => 1334,
                'account_id' => 241,
                'code' => 425025,
                'name' => 'REINTEGRO GARANTIAS',
            ),
            334 => 
            array (
                'id' => 1335,
                'account_id' => 241,
                'code' => 425030,
                'name' => 'DESCUENTOS CONCEDIDOS',
            ),
            335 => 
            array (
                'id' => 1336,
                'account_id' => 241,
                'code' => 425035,
                'name' => 'REINTEGRO PROVISIONES',
            ),
            336 => 
            array (
                'id' => 1337,
                'account_id' => 241,
                'code' => 425040,
                'name' => 'GASTOS BANCARIOS',
            ),
            337 => 
            array (
                'id' => 1338,
                'account_id' => 241,
                'code' => 425045,
                'name' => 'DE DEPRECIACION',
            ),
            338 => 
            array (
                'id' => 1339,
                'account_id' => 241,
                'code' => 425050,
                'name' => 'REINTEGRO DE OTROS COSTOS Y GASTOS',
            ),
            339 => 
            array (
                'id' => 1340,
                'account_id' => 241,
                'code' => 425099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            340 => 
            array (
                'id' => 1341,
                'account_id' => 242,
                'code' => 425505,
                'name' => 'POR SINIESTRO',
            ),
            341 => 
            array (
                'id' => 1342,
                'account_id' => 242,
                'code' => 425510,
                'name' => 'POR SUMINISTROS',
            ),
            342 => 
            array (
                'id' => 1343,
                'account_id' => 242,
                'code' => 425515,
                'name' => 'LUCRO CESANTE COMPAÑIAS DE SEGUROS',
            ),
            343 => 
            array (
                'id' => 1344,
                'account_id' => 242,
                'code' => 425520,
                'name' => 'DAÑO EMERGENTE COMPAÑIAS DE SEGUROS',
            ),
            344 => 
            array (
                'id' => 1345,
                'account_id' => 242,
                'code' => 425525,
                'name' => 'POR PERDIDA DE MERCANCIA',
            ),
            345 => 
            array (
                'id' => 1346,
                'account_id' => 242,
                'code' => 425530,
                'name' => 'POR INCUMPLIMIENTO DE CONTRATOS',
            ),
            346 => 
            array (
                'id' => 1347,
                'account_id' => 242,
                'code' => 425535,
                'name' => 'DE TERCEROS',
            ),
            347 => 
            array (
                'id' => 1348,
                'account_id' => 242,
                'code' => 425540,
                'name' => 'POR INCAPACIDADES I.S.S.',
            ),
            348 => 
            array (
                'id' => 1349,
                'account_id' => 242,
                'code' => 425595,
                'name' => 'OTRAS',
            ),
            349 => 
            array (
                'id' => 1350,
                'account_id' => 242,
                'code' => 425599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            350 => 
            array (
                'id' => 1351,
                'account_id' => 243,
                'code' => 426001,
                'name' => '???',
            ),
            351 => 
            array (
                'id' => 1352,
                'account_id' => 243,
                'code' => 426099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            352 => 
            array (
                'id' => 1353,
                'account_id' => 244,
                'code' => 426501,
                'name' => '???',
            ),
            353 => 
            array (
                'id' => 1354,
                'account_id' => 244,
                'code' => 426599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            354 => 
            array (
                'id' => 1355,
                'account_id' => 245,
                'code' => 427501,
                'name' => '???',
            ),
            355 => 
            array (
                'id' => 1356,
                'account_id' => 245,
                'code' => 427599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            356 => 
            array (
                'id' => 1357,
                'account_id' => 246,
                'code' => 429503,
                'name' => 'CERT',
            ),
            357 => 
            array (
                'id' => 1358,
                'account_id' => 246,
                'code' => 429505,
                'name' => 'APROVECHAMIENTOS',
            ),
            358 => 
            array (
                'id' => 1359,
                'account_id' => 246,
                'code' => 429507,
                'name' => 'AUXILIOS',
            ),
            359 => 
            array (
                'id' => 1360,
                'account_id' => 246,
                'code' => 429509,
                'name' => 'DONACIONES',
            ),
            360 => 
            array (
                'id' => 1361,
                'account_id' => 246,
                'code' => 429511,
                'name' => 'INGRESOS POR INVESTIGACION Y DESARROLLO',
            ),
            361 => 
            array (
                'id' => 1362,
                'account_id' => 246,
                'code' => 429513,
                'name' => 'POR TRABAJOS EJECUTADOS',
            ),
            362 => 
            array (
                'id' => 1363,
                'account_id' => 246,
                'code' => 429515,
                'name' => 'REGALIAS',
            ),
            363 => 
            array (
                'id' => 1364,
                'account_id' => 246,
                'code' => 429517,
                'name' => 'DERIVADOS DE LAS EXPORTACIONES',
            ),
            364 => 
            array (
                'id' => 1365,
                'account_id' => 246,
                'code' => 429519,
                'name' => 'OTROS INGRESOS DE EXPLOTACION',
            ),
            365 => 
            array (
                'id' => 1366,
                'account_id' => 246,
                'code' => 429521,
                'name' => 'DE LA ACTIVIDAD GANADERA',
            ),
            366 => 
            array (
                'id' => 1367,
                'account_id' => 246,
                'code' => 429525,
                'name' => 'DERECHOS Y LICITACIONES',
            ),
            367 => 
            array (
                'id' => 1368,
                'account_id' => 246,
                'code' => 429530,
                'name' => 'INGRESOS POR ELEMENTOS PERDIDOS',
            ),
            368 => 
            array (
                'id' => 1369,
                'account_id' => 246,
                'code' => 429533,
                'name' => 'MULTAS Y RECARGOS',
            ),
            369 => 
            array (
                'id' => 1370,
                'account_id' => 246,
                'code' => 429535,
                'name' => 'PREAVISOS DESCONTADOS',
            ),
            370 => 
            array (
                'id' => 1371,
                'account_id' => 246,
                'code' => 429537,
                'name' => 'RECLAMOS',
            ),
            371 => 
            array (
                'id' => 1372,
                'account_id' => 246,
                'code' => 429540,
                'name' => 'RECOBRO DE DAÑOS',
            ),
            372 => 
            array (
                'id' => 1373,
                'account_id' => 246,
                'code' => 429543,
                'name' => 'PREMIOS',
            ),
            373 => 
            array (
                'id' => 1374,
                'account_id' => 246,
                'code' => 429545,
                'name' => 'BONIFICACIONES',
            ),
            374 => 
            array (
                'id' => 1375,
                'account_id' => 246,
                'code' => 429547,
                'name' => 'PRODUCTOS DESCONTADOS',
            ),
            375 => 
            array (
                'id' => 1376,
                'account_id' => 246,
                'code' => 429549,
                'name' => 'RECONOCIMIENTOS I.S.S.',
            ),
            376 => 
            array (
                'id' => 1377,
                'account_id' => 246,
                'code' => 429551,
                'name' => 'EXCEDENTES',
            ),
            377 => 
            array (
                'id' => 1378,
                'account_id' => 246,
                'code' => 429553,
                'name' => 'SOBRANTES DE CAJA MENOR',
            ),
            378 => 
            array (
                'id' => 1379,
                'account_id' => 246,
                'code' => 429555,
                'name' => 'SOBRANTES EN LIQUIDACION FLETES',
            ),
            379 => 
            array (
                'id' => 1380,
                'account_id' => 246,
                'code' => 429557,
                'name' => 'SUBSIDIOS ESTATALES',
            ),
            380 => 
            array (
                'id' => 1381,
                'account_id' => 246,
                'code' => 429559,
                'name' => 'CAPACITACION DISTRIBUIDORES',
            ),
            381 => 
            array (
                'id' => 1382,
                'account_id' => 246,
                'code' => 429561,
                'name' => 'DE ESCRITURACION',
            ),
            382 => 
            array (
                'id' => 1383,
                'account_id' => 246,
                'code' => 429563,
                'name' => 'REGISTRO PROMESAS DE VENTA',
            ),
            383 => 
            array (
                'id' => 1384,
                'account_id' => 246,
                'code' => 429567,
                'name' => 'UTILES, PAPELERIA Y FOTOCOPIAS',
            ),
            384 => 
            array (
                'id' => 1385,
                'account_id' => 246,
                'code' => 429571,
                'name' => 'RESULTADOS MATRICULAS Y TRASPASOS',
            ),
            385 => 
            array (
                'id' => 1386,
                'account_id' => 246,
                'code' => 429573,
                'name' => 'DECORACIONES',
            ),
            386 => 
            array (
                'id' => 1387,
                'account_id' => 246,
                'code' => 429575,
                'name' => 'MANEJO DE CARGA',
            ),
            387 => 
            array (
                'id' => 1388,
                'account_id' => 246,
                'code' => 429579,
                'name' => 'HISTORIA CLINICA',
            ),
            388 => 
            array (
                'id' => 1389,
                'account_id' => 246,
                'code' => 429581,
                'name' => 'AJUSTE AL PESO',
            ),
            389 => 
            array (
                'id' => 1390,
                'account_id' => 246,
                'code' => 429583,
                'name' => 'LLAMADAS TELEFONICAS',
            ),
            390 => 
            array (
                'id' => 1391,
                'account_id' => 246,
                'code' => 429599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            391 => 
            array (
                'id' => 1392,
                'account_id' => 247,
                'code' => 470505,
            'name' => 'INVERSIONES (CR)',
            ),
            392 => 
            array (
                'id' => 1393,
                'account_id' => 247,
                'code' => 470510,
            'name' => 'INVENTARIOS (CR)',
            ),
            393 => 
            array (
                'id' => 1394,
                'account_id' => 247,
                'code' => 470515,
            'name' => 'PROPIEDADES, PLANTA Y EQUIPO (CR)',
            ),
            394 => 
            array (
                'id' => 1395,
                'account_id' => 247,
                'code' => 470520,
            'name' => 'INTANGIBLES (CR)',
            ),
            395 => 
            array (
                'id' => 1396,
                'account_id' => 247,
                'code' => 470525,
                'name' => 'ACTIVOS DIFERIDOS',
            ),
            396 => 
            array (
                'id' => 1397,
                'account_id' => 247,
                'code' => 470530,
            'name' => 'OTROS ACTIVOS (CR)',
            ),
            397 => 
            array (
                'id' => 1398,
                'account_id' => 247,
                'code' => 470535,
                'name' => 'PASIVOS SUJETOS DE AJUSTE',
            ),
            398 => 
            array (
                'id' => 1399,
                'account_id' => 247,
                'code' => 470540,
                'name' => 'PATRIMONIO',
            ),
            399 => 
            array (
                'id' => 1400,
                'account_id' => 247,
                'code' => 470545,
            'name' => 'DEPRECIACION ACUMULADA (DB)',
            ),
            400 => 
            array (
                'id' => 1401,
                'account_id' => 247,
                'code' => 470550,
            'name' => 'DEPRECIACION DIFERIDA (CR)',
            ),
            401 => 
            array (
                'id' => 1402,
                'account_id' => 247,
                'code' => 470555,
            'name' => 'AGOTAMIENTO ACUMULADO (DB)',
            ),
            402 => 
            array (
                'id' => 1403,
                'account_id' => 247,
                'code' => 470560,
            'name' => 'AMORTIZACION ACUMULADA (DB)',
            ),
            403 => 
            array (
                'id' => 1404,
                'account_id' => 247,
                'code' => 470565,
            'name' => 'INGRESOS OPERACIONALES (DB)',
            ),
            404 => 
            array (
                'id' => 1405,
                'account_id' => 247,
                'code' => 470570,
            'name' => 'INGRESOS NO OPERACIONALES (DB)',
            ),
            405 => 
            array (
                'id' => 1406,
                'account_id' => 247,
                'code' => 470575,
            'name' => 'GASTOS OPERACIONALES DE ADMINISTRACION (CR)',
            ),
            406 => 
            array (
                'id' => 1407,
                'account_id' => 247,
                'code' => 470580,
            'name' => 'GASTOS OPERACIONALES DE VENTAS (CR)',
            ),
            407 => 
            array (
                'id' => 1408,
                'account_id' => 247,
                'code' => 470585,
            'name' => 'GASTOS NO OPERACIONALES (CR)',
            ),
            408 => 
            array (
                'id' => 1409,
                'account_id' => 247,
                'code' => 470590,
            'name' => 'COMPRAS (CR)',
            ),
            409 => 
            array (
                'id' => 1410,
                'account_id' => 247,
                'code' => 470592,
            'name' => 'COSTO DE VENTAS (CR)',
            ),
            410 => 
            array (
                'id' => 1411,
                'account_id' => 247,
                'code' => 470594,
            'name' => 'COSTOS DE PRODUCCION O DE OPERACION (DB)',
            ),
            411 => 
            array (
                'id' => 1412,
                'account_id' => 248,
                'code' => 510503,
                'name' => 'SALARIO INTEGRAL',
            ),
            412 => 
            array (
                'id' => 1413,
                'account_id' => 248,
                'code' => 510506,
                'name' => 'SUELDOS',
            ),
            413 => 
            array (
                'id' => 1414,
                'account_id' => 248,
                'code' => 510512,
                'name' => 'JORNALES',
            ),
            414 => 
            array (
                'id' => 1415,
                'account_id' => 248,
                'code' => 510515,
                'name' => 'HORAS EXTRAS Y RECARGOS',
            ),
            415 => 
            array (
                'id' => 1416,
                'account_id' => 248,
                'code' => 510518,
                'name' => 'COMISIONES',
            ),
            416 => 
            array (
                'id' => 1417,
                'account_id' => 248,
                'code' => 510521,
                'name' => 'VIATICOS',
            ),
            417 => 
            array (
                'id' => 1418,
                'account_id' => 248,
                'code' => 510524,
                'name' => 'INCAPACIDADES',
            ),
            418 => 
            array (
                'id' => 1419,
                'account_id' => 248,
                'code' => 510527,
                'name' => 'AUXILIO DE TRANSPORTE',
            ),
            419 => 
            array (
                'id' => 1420,
                'account_id' => 248,
                'code' => 510530,
                'name' => 'CESANTIAS',
            ),
            420 => 
            array (
                'id' => 1421,
                'account_id' => 248,
                'code' => 510533,
                'name' => 'INTERESES SOBRE CESANTIAS',
            ),
            421 => 
            array (
                'id' => 1422,
                'account_id' => 248,
                'code' => 510536,
                'name' => 'PRIMA DE SERVICIOS',
            ),
            422 => 
            array (
                'id' => 1423,
                'account_id' => 248,
                'code' => 510539,
                'name' => 'VACACIONES',
            ),
            423 => 
            array (
                'id' => 1424,
                'account_id' => 248,
                'code' => 510542,
                'name' => 'PRIMAS EXTRALEGALES',
            ),
            424 => 
            array (
                'id' => 1425,
                'account_id' => 248,
                'code' => 510545,
                'name' => 'AUXILIOS',
            ),
            425 => 
            array (
                'id' => 1426,
                'account_id' => 248,
                'code' => 510548,
                'name' => 'BONIFICACIONES',
            ),
            426 => 
            array (
                'id' => 1427,
                'account_id' => 248,
                'code' => 510551,
                'name' => 'DOTACION Y SUMINISTRO A TRABAJADORES',
            ),
            427 => 
            array (
                'id' => 1428,
                'account_id' => 248,
                'code' => 510554,
                'name' => 'SEGUROS',
            ),
            428 => 
            array (
                'id' => 1429,
                'account_id' => 248,
                'code' => 510557,
                'name' => 'CUOTAS PARTES PENSIONES DE JUBILACION',
            ),
            429 => 
            array (
                'id' => 1430,
                'account_id' => 248,
                'code' => 510558,
                'name' => 'AMORTIZACION CALCULO ACTUARIAL PENSIONES DE JUBILACION',
            ),
            430 => 
            array (
                'id' => 1431,
                'account_id' => 248,
                'code' => 510559,
                'name' => 'PENSIONES DE JUBILACION',
            ),
            431 => 
            array (
                'id' => 1432,
                'account_id' => 248,
                'code' => 510560,
                'name' => 'INDEMNIZACIONES LABORALES',
            ),
            432 => 
            array (
                'id' => 1433,
                'account_id' => 248,
                'code' => 510563,
                'name' => 'CAPACITACION AL PERSONAL',
            ),
            433 => 
            array (
                'id' => 1434,
                'account_id' => 248,
                'code' => 510566,
                'name' => 'GASTOS DEPORTIVOS Y DE RECREACION',
            ),
            434 => 
            array (
                'id' => 1435,
                'account_id' => 248,
                'code' => 510569,
                'name' => 'APORTES AL I.S.S',
            ),
            435 => 
            array (
                'id' => 1436,
                'account_id' => 248,
                'code' => 510572,
                'name' => 'APORTES CAJAS DE COMPENSACION FAMILIAR',
            ),
            436 => 
            array (
                'id' => 1437,
                'account_id' => 248,
                'code' => 510575,
                'name' => 'APORTES I.C.B.F.',
            ),
            437 => 
            array (
                'id' => 1438,
                'account_id' => 248,
                'code' => 510578,
                'name' => 'SENA',
            ),
            438 => 
            array (
                'id' => 1439,
                'account_id' => 248,
                'code' => 510581,
                'name' => 'APORTES SINDICALES',
            ),
            439 => 
            array (
                'id' => 1440,
                'account_id' => 248,
                'code' => 510584,
                'name' => 'GASTOS MEDICOS Y DROGAS',
            ),
            440 => 
            array (
                'id' => 1441,
                'account_id' => 248,
                'code' => 510595,
                'name' => 'OTROS',
            ),
            441 => 
            array (
                'id' => 1442,
                'account_id' => 248,
                'code' => 510599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            442 => 
            array (
                'id' => 1443,
                'account_id' => 249,
                'code' => 511005,
                'name' => 'JUNTA DIRECTIVA',
            ),
            443 => 
            array (
                'id' => 1444,
                'account_id' => 249,
                'code' => 511010,
                'name' => 'REVISORÍA FISCAL',
            ),
            444 => 
            array (
                'id' => 1445,
                'account_id' => 249,
                'code' => 511015,
                'name' => 'AUDITORIA EXTERNA',
            ),
            445 => 
            array (
                'id' => 1446,
                'account_id' => 249,
                'code' => 511020,
                'name' => 'AVALUOS',
            ),
            446 => 
            array (
                'id' => 1447,
                'account_id' => 249,
                'code' => 511025,
                'name' => 'ASESORIA JURIDICA',
            ),
            447 => 
            array (
                'id' => 1448,
                'account_id' => 249,
                'code' => 511030,
                'name' => 'ASESORIA FINANCIERA',
            ),
            448 => 
            array (
                'id' => 1449,
                'account_id' => 249,
                'code' => 511035,
                'name' => 'ASESORIA TECNICA',
            ),
            449 => 
            array (
                'id' => 1450,
                'account_id' => 249,
                'code' => 511095,
                'name' => 'OTROS',
            ),
            450 => 
            array (
                'id' => 1451,
                'account_id' => 249,
                'code' => 511099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            451 => 
            array (
                'id' => 1452,
                'account_id' => 250,
                'code' => 511505,
                'name' => 'INDUSTRIA Y COMERCIO',
            ),
            452 => 
            array (
                'id' => 1453,
                'account_id' => 250,
                'code' => 511510,
                'name' => 'DE TIMBRES',
            ),
            453 => 
            array (
                'id' => 1454,
                'account_id' => 250,
                'code' => 511515,
                'name' => 'A LA PROPIEDAD RAIZ',
            ),
            454 => 
            array (
                'id' => 1455,
                'account_id' => 250,
                'code' => 511520,
                'name' => 'DERECHOS SOBRE INSTRUMENTOS PUBLICOS',
            ),
            455 => 
            array (
                'id' => 1456,
                'account_id' => 250,
                'code' => 511525,
                'name' => 'DE VALORIZACION',
            ),
            456 => 
            array (
                'id' => 1457,
                'account_id' => 250,
                'code' => 511530,
                'name' => 'DE TURISMO',
            ),
            457 => 
            array (
                'id' => 1458,
                'account_id' => 250,
                'code' => 511535,
                'name' => 'TASA POR UTILIZACION DE PUERTOS',
            ),
            458 => 
            array (
                'id' => 1459,
                'account_id' => 250,
                'code' => 511540,
                'name' => 'DE VEHICULOS',
            ),
            459 => 
            array (
                'id' => 1460,
                'account_id' => 250,
                'code' => 511545,
                'name' => 'DE ESPECTACULOS PUBLICOS',
            ),
            460 => 
            array (
                'id' => 1461,
                'account_id' => 250,
                'code' => 511550,
                'name' => 'CUOTAS DE FOMENTO',
            ),
            461 => 
            array (
                'id' => 1462,
                'account_id' => 250,
                'code' => 511570,
                'name' => 'IVA DESCONTABLE',
            ),
            462 => 
            array (
                'id' => 1463,
                'account_id' => 250,
                'code' => 511595,
                'name' => 'OTROS',
            ),
            463 => 
            array (
                'id' => 1464,
                'account_id' => 250,
                'code' => 511599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            464 => 
            array (
                'id' => 1465,
                'account_id' => 251,
                'code' => 512005,
                'name' => 'TERRENOS',
            ),
            465 => 
            array (
                'id' => 1466,
                'account_id' => 251,
                'code' => 512010,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            466 => 
            array (
                'id' => 1467,
                'account_id' => 251,
                'code' => 512015,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            467 => 
            array (
                'id' => 1468,
                'account_id' => 251,
                'code' => 512020,
                'name' => 'EQUIPO DE OFICINA',
            ),
            468 => 
            array (
                'id' => 1469,
                'account_id' => 251,
                'code' => 512025,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            469 => 
            array (
                'id' => 1470,
                'account_id' => 251,
                'code' => 512030,
                'name' => 'EQUIPO MEDICO - CIENTIFICO',
            ),
            470 => 
            array (
                'id' => 1471,
                'account_id' => 251,
                'code' => 512035,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            471 => 
            array (
                'id' => 1472,
                'account_id' => 251,
                'code' => 512040,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            472 => 
            array (
                'id' => 1473,
                'account_id' => 251,
                'code' => 512045,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            473 => 
            array (
                'id' => 1474,
                'account_id' => 251,
                'code' => 512050,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            474 => 
            array (
                'id' => 1475,
                'account_id' => 251,
                'code' => 512055,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            475 => 
            array (
                'id' => 1476,
                'account_id' => 251,
                'code' => 512060,
                'name' => 'ACUEDUCTOS PLANTAS Y REDES',
            ),
            476 => 
            array (
                'id' => 1477,
                'account_id' => 251,
                'code' => 512065,
                'name' => 'AERODROMOS',
            ),
            477 => 
            array (
                'id' => 1478,
                'account_id' => 251,
                'code' => 512070,
                'name' => 'SEMOVIENTES',
            ),
            478 => 
            array (
                'id' => 1479,
                'account_id' => 251,
                'code' => 512095,
                'name' => 'OTROS',
            ),
            479 => 
            array (
                'id' => 1480,
                'account_id' => 251,
                'code' => 512099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            480 => 
            array (
                'id' => 1481,
                'account_id' => 252,
                'code' => 512505,
                'name' => 'CONTRIBUCIONES',
            ),
            481 => 
            array (
                'id' => 1482,
                'account_id' => 252,
                'code' => 512510,
                'name' => 'AFILIACIONES Y SOSTENIMIENTO',
            ),
            482 => 
            array (
                'id' => 1483,
                'account_id' => 252,
                'code' => 512599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            483 => 
            array (
                'id' => 1484,
                'account_id' => 253,
                'code' => 513005,
                'name' => 'MANEJO',
            ),
            484 => 
            array (
                'id' => 1485,
                'account_id' => 253,
                'code' => 513010,
                'name' => 'CUMPLIMIENTO',
            ),
            485 => 
            array (
                'id' => 1486,
                'account_id' => 253,
                'code' => 513015,
                'name' => 'CORRIENTE DEBIL',
            ),
            486 => 
            array (
                'id' => 1487,
                'account_id' => 253,
                'code' => 513020,
                'name' => 'VIDA COLECTIVA',
            ),
            487 => 
            array (
                'id' => 1488,
                'account_id' => 253,
                'code' => 513025,
                'name' => 'INCENDIO',
            ),
            488 => 
            array (
                'id' => 1489,
                'account_id' => 253,
                'code' => 513030,
                'name' => 'TERREMOTO',
            ),
            489 => 
            array (
                'id' => 1490,
                'account_id' => 253,
                'code' => 513035,
                'name' => 'SUSTRACCION Y HURTO',
            ),
            490 => 
            array (
                'id' => 1491,
                'account_id' => 253,
                'code' => 513040,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            491 => 
            array (
                'id' => 1492,
                'account_id' => 253,
                'code' => 513045,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            492 => 
            array (
                'id' => 1493,
                'account_id' => 253,
                'code' => 513050,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            493 => 
            array (
                'id' => 1494,
                'account_id' => 253,
                'code' => 513055,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            494 => 
            array (
                'id' => 1495,
                'account_id' => 253,
                'code' => 513060,
                'name' => 'RESPONSABILIDAD CIVIL Y EXTRACONTRACTUAL',
            ),
            495 => 
            array (
                'id' => 1496,
                'account_id' => 253,
                'code' => 513065,
                'name' => 'VUELO',
            ),
            496 => 
            array (
                'id' => 1497,
                'account_id' => 253,
                'code' => 513070,
                'name' => 'ROTURA DE MAQUINARIA',
            ),
            497 => 
            array (
                'id' => 1498,
                'account_id' => 253,
                'code' => 513075,
                'name' => 'OBLIGATORIO ACCIDENTE DE TRANSITO',
            ),
            498 => 
            array (
                'id' => 1499,
                'account_id' => 253,
                'code' => 513080,
                'name' => 'LUCRO CESANTE',
            ),
            499 => 
            array (
                'id' => 1500,
                'account_id' => 253,
                'code' => 513095,
                'name' => 'OTROS',
            ),
            500 => 
            array (
                'id' => 1501,
                'account_id' => 253,
                'code' => 513099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            501 => 
            array (
                'id' => 1502,
                'account_id' => 254,
                'code' => 513505,
                'name' => 'ASEO Y VIGILANCIA',
            ),
            502 => 
            array (
                'id' => 1503,
                'account_id' => 254,
                'code' => 513510,
                'name' => 'TEMPORALES',
            ),
            503 => 
            array (
                'id' => 1504,
                'account_id' => 254,
                'code' => 513515,
                'name' => 'ASISTENCIA TECNICA',
            ),
            504 => 
            array (
                'id' => 1505,
                'account_id' => 254,
                'code' => 513520,
                'name' => 'PROCESAMIENTO ELECTRONICO DE DATOS',
            ),
            505 => 
            array (
                'id' => 1506,
                'account_id' => 254,
                'code' => 513525,
                'name' => 'ACUEDUCTO Y ALCANTARILLADO',
            ),
            506 => 
            array (
                'id' => 1507,
                'account_id' => 254,
                'code' => 513530,
                'name' => 'ENERGIA ELECTRICA',
            ),
            507 => 
            array (
                'id' => 1508,
                'account_id' => 254,
                'code' => 513535,
                'name' => 'TELEFONO',
            ),
            508 => 
            array (
                'id' => 1509,
                'account_id' => 254,
                'code' => 513540,
                'name' => 'CORREO, PORTES Y TELEGRAMAS',
            ),
            509 => 
            array (
                'id' => 1510,
                'account_id' => 254,
                'code' => 513545,
                'name' => 'FAX Y TELEX',
            ),
            510 => 
            array (
                'id' => 1511,
                'account_id' => 254,
                'code' => 513550,
                'name' => 'TRANSPORTE, FLETES Y ACARREOS',
            ),
            511 => 
            array (
                'id' => 1512,
                'account_id' => 254,
                'code' => 513555,
                'name' => 'GAS',
            ),
            512 => 
            array (
                'id' => 1513,
                'account_id' => 254,
                'code' => 513595,
                'name' => 'OTROS',
            ),
            513 => 
            array (
                'id' => 1514,
                'account_id' => 254,
                'code' => 513599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            514 => 
            array (
                'id' => 1515,
                'account_id' => 255,
                'code' => 514005,
                'name' => 'NOTARIALES',
            ),
            515 => 
            array (
                'id' => 1516,
                'account_id' => 255,
                'code' => 514010,
                'name' => 'REGISTRO MERCANTIL',
            ),
            516 => 
            array (
                'id' => 1517,
                'account_id' => 255,
                'code' => 514015,
                'name' => 'TRAMITES Y LICENCIAS',
            ),
            517 => 
            array (
                'id' => 1518,
                'account_id' => 255,
                'code' => 514020,
                'name' => 'ADUANEROS',
            ),
            518 => 
            array (
                'id' => 1519,
                'account_id' => 255,
                'code' => 514025,
                'name' => 'CONSULARES',
            ),
            519 => 
            array (
                'id' => 1520,
                'account_id' => 255,
                'code' => 514095,
                'name' => 'OTROS',
            ),
            520 => 
            array (
                'id' => 1521,
                'account_id' => 255,
                'code' => 514099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            521 => 
            array (
                'id' => 1522,
                'account_id' => 256,
                'code' => 514505,
                'name' => 'TERRENOS',
            ),
            522 => 
            array (
                'id' => 1523,
                'account_id' => 256,
                'code' => 514510,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            523 => 
            array (
                'id' => 1524,
                'account_id' => 256,
                'code' => 514515,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            524 => 
            array (
                'id' => 1525,
                'account_id' => 256,
                'code' => 514520,
                'name' => 'EQUIPO DE OFICINA',
            ),
            525 => 
            array (
                'id' => 1526,
                'account_id' => 256,
                'code' => 514525,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            526 => 
            array (
                'id' => 1527,
                'account_id' => 256,
                'code' => 514530,
                'name' => 'EQUIPO MEDICO-CIENTIFICO',
            ),
            527 => 
            array (
                'id' => 1528,
                'account_id' => 256,
                'code' => 514535,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            528 => 
            array (
                'id' => 1529,
                'account_id' => 256,
                'code' => 514540,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            529 => 
            array (
                'id' => 1530,
                'account_id' => 256,
                'code' => 514545,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            530 => 
            array (
                'id' => 1531,
                'account_id' => 256,
                'code' => 514550,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            531 => 
            array (
                'id' => 1532,
                'account_id' => 256,
                'code' => 514555,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            532 => 
            array (
                'id' => 1533,
                'account_id' => 256,
                'code' => 514560,
                'name' => 'ACUEDUCTOS PLANTAS Y REDES',
            ),
            533 => 
            array (
                'id' => 1534,
                'account_id' => 256,
                'code' => 514565,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            534 => 
            array (
                'id' => 1535,
                'account_id' => 256,
                'code' => 514570,
                'name' => 'VIAS DE COMUNICACION',
            ),
            535 => 
            array (
                'id' => 1536,
                'account_id' => 256,
                'code' => 514599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            536 => 
            array (
                'id' => 1537,
                'account_id' => 257,
                'code' => 515005,
                'name' => 'INSTALACIONES ELECTRICAS',
            ),
            537 => 
            array (
                'id' => 1538,
                'account_id' => 257,
                'code' => 515010,
                'name' => 'ARREGLOS ORNAMENTALES',
            ),
            538 => 
            array (
                'id' => 1539,
                'account_id' => 257,
                'code' => 515015,
                'name' => 'REPARACIONES LOCATIVAS',
            ),
            539 => 
            array (
                'id' => 1540,
                'account_id' => 257,
                'code' => 515095,
                'name' => 'OTROS',
            ),
            540 => 
            array (
                'id' => 1541,
                'account_id' => 257,
                'code' => 515099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            541 => 
            array (
                'id' => 1542,
                'account_id' => 258,
                'code' => 515505,
                'name' => 'ALOJAMIENTO Y MANUTENCION',
            ),
            542 => 
            array (
                'id' => 1543,
                'account_id' => 258,
                'code' => 515510,
                'name' => 'PASAJES FLUVIALES Y/O MARITIMOS',
            ),
            543 => 
            array (
                'id' => 1544,
                'account_id' => 258,
                'code' => 515515,
                'name' => 'PASAJES AEREOS',
            ),
            544 => 
            array (
                'id' => 1545,
                'account_id' => 258,
                'code' => 515520,
                'name' => 'PASAJES TERRESTRES',
            ),
            545 => 
            array (
                'id' => 1546,
                'account_id' => 258,
                'code' => 515525,
                'name' => 'PASAJES FERREOS',
            ),
            546 => 
            array (
                'id' => 1547,
                'account_id' => 258,
                'code' => 515595,
                'name' => 'OTROS',
            ),
            547 => 
            array (
                'id' => 1548,
                'account_id' => 258,
                'code' => 515599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            548 => 
            array (
                'id' => 1549,
                'account_id' => 259,
                'code' => 516005,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            549 => 
            array (
                'id' => 1550,
                'account_id' => 259,
                'code' => 516010,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            550 => 
            array (
                'id' => 1551,
                'account_id' => 259,
                'code' => 516015,
                'name' => 'EQUIPO DE OFICINA',
            ),
            551 => 
            array (
                'id' => 1552,
                'account_id' => 259,
                'code' => 516020,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            552 => 
            array (
                'id' => 1553,
                'account_id' => 259,
                'code' => 516025,
                'name' => 'EQUIPO MEDICO - CIENTIFICO',
            ),
            553 => 
            array (
                'id' => 1554,
                'account_id' => 259,
                'code' => 516030,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            554 => 
            array (
                'id' => 1555,
                'account_id' => 259,
                'code' => 516035,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            555 => 
            array (
                'id' => 1556,
                'account_id' => 259,
                'code' => 516040,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            556 => 
            array (
                'id' => 1557,
                'account_id' => 259,
                'code' => 516045,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            557 => 
            array (
                'id' => 1558,
                'account_id' => 259,
                'code' => 516050,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            558 => 
            array (
                'id' => 1559,
                'account_id' => 259,
                'code' => 516055,
                'name' => 'ACUEDUCTOS, PLANTAS Y REDES',
            ),
            559 => 
            array (
                'id' => 1560,
                'account_id' => 259,
                'code' => 516060,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            560 => 
            array (
                'id' => 1561,
                'account_id' => 259,
                'code' => 516099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            561 => 
            array (
                'id' => 1562,
                'account_id' => 260,
                'code' => 516505,
                'name' => 'VIAS DE COMUNICACION',
            ),
            562 => 
            array (
                'id' => 1563,
                'account_id' => 260,
                'code' => 516510,
                'name' => 'INTANGIBLES',
            ),
            563 => 
            array (
                'id' => 1564,
                'account_id' => 260,
                'code' => 516515,
                'name' => 'CARGOS DIFERIDOS',
            ),
            564 => 
            array (
                'id' => 1565,
                'account_id' => 260,
                'code' => 516595,
                'name' => 'OTRAS',
            ),
            565 => 
            array (
                'id' => 1566,
                'account_id' => 260,
                'code' => 516599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            566 => 
            array (
                'id' => 1567,
                'account_id' => 261,
                'code' => 519505,
                'name' => 'COMISIONES',
            ),
            567 => 
            array (
                'id' => 1568,
                'account_id' => 261,
                'code' => 519510,
                'name' => 'LIBROS, SUSCRIPCIONES, PERIODICOS Y REVISTAS',
            ),
            568 => 
            array (
                'id' => 1569,
                'account_id' => 261,
                'code' => 519515,
                'name' => 'MUSICA AMBIENTAL',
            ),
            569 => 
            array (
                'id' => 1570,
                'account_id' => 261,
                'code' => 519520,
                'name' => 'GASTOS DE REPRESENTACION Y RELACIONES PUBLICAS',
            ),
            570 => 
            array (
                'id' => 1571,
                'account_id' => 261,
                'code' => 519525,
                'name' => 'ELEMENTOS DE ASEO Y CAFETERIA',
            ),
            571 => 
            array (
                'id' => 1572,
                'account_id' => 261,
                'code' => 519530,
                'name' => 'UTILES, PAPELERIA Y FOTOCOPIAS',
            ),
            572 => 
            array (
                'id' => 1573,
                'account_id' => 261,
                'code' => 519535,
                'name' => 'COMBUSTIBLES Y LUBRICANTES',
            ),
            573 => 
            array (
                'id' => 1574,
                'account_id' => 261,
                'code' => 519540,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            574 => 
            array (
                'id' => 1575,
                'account_id' => 261,
                'code' => 519545,
                'name' => 'TAXIS Y BUSES',
            ),
            575 => 
            array (
                'id' => 1576,
                'account_id' => 261,
                'code' => 519550,
                'name' => 'ESTAMPILLAS',
            ),
            576 => 
            array (
                'id' => 1577,
                'account_id' => 261,
                'code' => 519555,
                'name' => 'MICROFILMACION',
            ),
            577 => 
            array (
                'id' => 1578,
                'account_id' => 261,
                'code' => 519560,
                'name' => 'CASINO Y RESTAURANTE',
            ),
            578 => 
            array (
                'id' => 1579,
                'account_id' => 261,
                'code' => 519565,
                'name' => 'PARQUEADEROS',
            ),
            579 => 
            array (
                'id' => 1580,
                'account_id' => 261,
                'code' => 519570,
                'name' => 'INDEMNIZACION POR DAÑOS A TERCEROS',
            ),
            580 => 
            array (
                'id' => 1581,
                'account_id' => 261,
                'code' => 519575,
                'name' => 'POLVORA Y SIMILARES',
            ),
            581 => 
            array (
                'id' => 1582,
                'account_id' => 261,
                'code' => 519595,
                'name' => 'OTROS',
            ),
            582 => 
            array (
                'id' => 1583,
                'account_id' => 261,
                'code' => 519599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            583 => 
            array (
                'id' => 1584,
                'account_id' => 262,
                'code' => 519905,
                'name' => 'INVERSIONES',
            ),
            584 => 
            array (
                'id' => 1585,
                'account_id' => 262,
                'code' => 519910,
                'name' => 'DEUDORES',
            ),
            585 => 
            array (
                'id' => 1586,
                'account_id' => 262,
                'code' => 519915,
                'name' => 'PROPIEDADES, PLANTA Y EQUIPO',
            ),
            586 => 
            array (
                'id' => 1587,
                'account_id' => 262,
                'code' => 519995,
                'name' => 'OTROS ACTIVOS',
            ),
            587 => 
            array (
                'id' => 1588,
                'account_id' => 262,
                'code' => 519999,
                'name' => 'AJUSTES POR INFLACION',
            ),
            588 => 
            array (
                'id' => 1589,
                'account_id' => 263,
                'code' => 520503,
                'name' => 'SALARIO INTEGRAL',
            ),
            589 => 
            array (
                'id' => 1590,
                'account_id' => 263,
                'code' => 520506,
                'name' => 'SUELDOS',
            ),
            590 => 
            array (
                'id' => 1591,
                'account_id' => 263,
                'code' => 520512,
                'name' => 'JORNALES',
            ),
            591 => 
            array (
                'id' => 1592,
                'account_id' => 263,
                'code' => 520515,
                'name' => 'HORAS EXTRAS Y RECARGOS',
            ),
            592 => 
            array (
                'id' => 1593,
                'account_id' => 263,
                'code' => 520518,
                'name' => 'COMISIONES',
            ),
            593 => 
            array (
                'id' => 1594,
                'account_id' => 263,
                'code' => 520521,
                'name' => 'VIATICOS',
            ),
            594 => 
            array (
                'id' => 1595,
                'account_id' => 263,
                'code' => 520524,
                'name' => 'INCAPACIDADES',
            ),
            595 => 
            array (
                'id' => 1596,
                'account_id' => 263,
                'code' => 520527,
                'name' => 'AUXILIO DE TRANSPORTE',
            ),
            596 => 
            array (
                'id' => 1597,
                'account_id' => 263,
                'code' => 520530,
                'name' => 'CESANTIAS',
            ),
            597 => 
            array (
                'id' => 1598,
                'account_id' => 263,
                'code' => 520533,
                'name' => 'INTERESES SOBRE CESANTIAS',
            ),
            598 => 
            array (
                'id' => 1599,
                'account_id' => 263,
                'code' => 520536,
                'name' => 'PRIMA DE SERVICIOS',
            ),
            599 => 
            array (
                'id' => 1600,
                'account_id' => 263,
                'code' => 520539,
                'name' => 'VACACIONES',
            ),
            600 => 
            array (
                'id' => 1601,
                'account_id' => 263,
                'code' => 520542,
                'name' => 'PRIMAS EXTRALEGALES',
            ),
            601 => 
            array (
                'id' => 1602,
                'account_id' => 263,
                'code' => 520545,
                'name' => 'AUXILIOS',
            ),
            602 => 
            array (
                'id' => 1603,
                'account_id' => 263,
                'code' => 520548,
                'name' => 'BONIFICACIONES',
            ),
            603 => 
            array (
                'id' => 1604,
                'account_id' => 263,
                'code' => 520551,
                'name' => 'DOTACION Y SUMINISTRO A TRABAJADORES',
            ),
            604 => 
            array (
                'id' => 1605,
                'account_id' => 263,
                'code' => 520554,
                'name' => 'SEGUROS',
            ),
            605 => 
            array (
                'id' => 1606,
                'account_id' => 263,
                'code' => 520557,
                'name' => 'CUOTAS PARTES PENSIONES DE JUBILACION',
            ),
            606 => 
            array (
                'id' => 1607,
                'account_id' => 263,
                'code' => 520558,
                'name' => 'AMORTIZACION CALCULO ACTUARIAL PENSIONES DE JUBILACION',
            ),
            607 => 
            array (
                'id' => 1608,
                'account_id' => 263,
                'code' => 520559,
                'name' => 'PENSIONES DE JUBILACION',
            ),
            608 => 
            array (
                'id' => 1609,
                'account_id' => 263,
                'code' => 520560,
                'name' => 'INDEMNIZACIONES LABORALES',
            ),
            609 => 
            array (
                'id' => 1610,
                'account_id' => 263,
                'code' => 520563,
                'name' => 'CAPACITACION AL PERSONAL',
            ),
            610 => 
            array (
                'id' => 1611,
                'account_id' => 263,
                'code' => 520566,
                'name' => 'GASTOS DEPORTIVOS Y DE RECREACION',
            ),
            611 => 
            array (
                'id' => 1612,
                'account_id' => 263,
                'code' => 520569,
                'name' => 'APORTES AL I.S.S',
            ),
            612 => 
            array (
                'id' => 1613,
                'account_id' => 263,
                'code' => 520572,
                'name' => 'APORTES CAJAS DE COMPENSACION FAMILIAR',
            ),
            613 => 
            array (
                'id' => 1614,
                'account_id' => 263,
                'code' => 520575,
                'name' => 'APORTES I.C.B.F.',
            ),
            614 => 
            array (
                'id' => 1615,
                'account_id' => 263,
                'code' => 520578,
                'name' => 'SENA',
            ),
            615 => 
            array (
                'id' => 1616,
                'account_id' => 263,
                'code' => 520581,
                'name' => 'APORTES SINDICALES',
            ),
            616 => 
            array (
                'id' => 1617,
                'account_id' => 263,
                'code' => 520584,
                'name' => 'GASTOS MEDICOS Y DROGAS',
            ),
            617 => 
            array (
                'id' => 1618,
                'account_id' => 263,
                'code' => 520595,
                'name' => 'OTROS',
            ),
            618 => 
            array (
                'id' => 1619,
                'account_id' => 263,
                'code' => 520599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            619 => 
            array (
                'id' => 1620,
                'account_id' => 264,
                'code' => 521005,
                'name' => 'JUNTA DIRECTIVA',
            ),
            620 => 
            array (
                'id' => 1621,
                'account_id' => 264,
                'code' => 521010,
                'name' => 'REVISORIA FISCAL',
            ),
            621 => 
            array (
                'id' => 1622,
                'account_id' => 264,
                'code' => 521015,
                'name' => 'AUDITORIA EXTERNA',
            ),
            622 => 
            array (
                'id' => 1623,
                'account_id' => 264,
                'code' => 521020,
                'name' => 'AVALUOS',
            ),
            623 => 
            array (
                'id' => 1624,
                'account_id' => 264,
                'code' => 521025,
                'name' => 'ASESORIA JURIDICA',
            ),
            624 => 
            array (
                'id' => 1625,
                'account_id' => 264,
                'code' => 521030,
                'name' => 'ASESORIA FINANCIERA',
            ),
            625 => 
            array (
                'id' => 1626,
                'account_id' => 264,
                'code' => 521035,
                'name' => 'ASESORIA TECNICA',
            ),
            626 => 
            array (
                'id' => 1627,
                'account_id' => 264,
                'code' => 521095,
                'name' => 'OTROS',
            ),
            627 => 
            array (
                'id' => 1628,
                'account_id' => 264,
                'code' => 521099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            628 => 
            array (
                'id' => 1629,
                'account_id' => 265,
                'code' => 521505,
                'name' => 'INDUSTRIA Y COMERCIO',
            ),
            629 => 
            array (
                'id' => 1630,
                'account_id' => 265,
                'code' => 521510,
                'name' => 'DE TIMBRES',
            ),
            630 => 
            array (
                'id' => 1631,
                'account_id' => 265,
                'code' => 521515,
                'name' => 'A LA PROPIEDAD RAIZ',
            ),
            631 => 
            array (
                'id' => 1632,
                'account_id' => 265,
                'code' => 521520,
                'name' => 'DERECHOS SOBRE INSTRUMENTOS PUBLICOS',
            ),
            632 => 
            array (
                'id' => 1633,
                'account_id' => 265,
                'code' => 521525,
                'name' => 'DE VALORIZACION',
            ),
            633 => 
            array (
                'id' => 1634,
                'account_id' => 265,
                'code' => 521530,
                'name' => 'DE TURISMO',
            ),
            634 => 
            array (
                'id' => 1635,
                'account_id' => 265,
                'code' => 521535,
                'name' => 'TASA POR UTILIZACION DE PUERTOS',
            ),
            635 => 
            array (
                'id' => 1636,
                'account_id' => 265,
                'code' => 521540,
                'name' => 'DE VEHICULOS',
            ),
            636 => 
            array (
                'id' => 1637,
                'account_id' => 265,
                'code' => 521545,
                'name' => 'DE ESPECTACULOS PUBLICOS',
            ),
            637 => 
            array (
                'id' => 1638,
                'account_id' => 265,
                'code' => 521550,
                'name' => 'CUOTAS DE FOMENTO',
            ),
            638 => 
            array (
                'id' => 1639,
                'account_id' => 265,
                'code' => 521555,
                'name' => 'LICORES',
            ),
            639 => 
            array (
                'id' => 1640,
                'account_id' => 265,
                'code' => 521560,
                'name' => 'CERVEZAS',
            ),
            640 => 
            array (
                'id' => 1641,
                'account_id' => 265,
                'code' => 521565,
                'name' => 'CIGARRILLOS',
            ),
            641 => 
            array (
                'id' => 1642,
                'account_id' => 265,
                'code' => 521570,
                'name' => 'IVA DESCONTABLE',
            ),
            642 => 
            array (
                'id' => 1643,
                'account_id' => 265,
                'code' => 521595,
                'name' => 'OTROS',
            ),
            643 => 
            array (
                'id' => 1644,
                'account_id' => 265,
                'code' => 521599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            644 => 
            array (
                'id' => 1645,
                'account_id' => 266,
                'code' => 522005,
                'name' => 'TERRENOS',
            ),
            645 => 
            array (
                'id' => 1646,
                'account_id' => 266,
                'code' => 522010,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            646 => 
            array (
                'id' => 1647,
                'account_id' => 266,
                'code' => 522015,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            647 => 
            array (
                'id' => 1648,
                'account_id' => 266,
                'code' => 522020,
                'name' => 'EQUIPO DE OFICINA',
            ),
            648 => 
            array (
                'id' => 1649,
                'account_id' => 266,
                'code' => 522025,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            649 => 
            array (
                'id' => 1650,
                'account_id' => 266,
                'code' => 522030,
                'name' => 'EQUIPO MEDICO - CIENTIFICO',
            ),
            650 => 
            array (
                'id' => 1651,
                'account_id' => 266,
                'code' => 522035,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            651 => 
            array (
                'id' => 1652,
                'account_id' => 266,
                'code' => 522040,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            652 => 
            array (
                'id' => 1653,
                'account_id' => 266,
                'code' => 522045,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            653 => 
            array (
                'id' => 1654,
                'account_id' => 266,
                'code' => 522050,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            654 => 
            array (
                'id' => 1655,
                'account_id' => 266,
                'code' => 522055,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            655 => 
            array (
                'id' => 1656,
                'account_id' => 266,
                'code' => 522060,
                'name' => 'ACUEDUCTOS PLANTAS Y REDES',
            ),
            656 => 
            array (
                'id' => 1657,
                'account_id' => 266,
                'code' => 522065,
                'name' => 'AERODROMOS',
            ),
            657 => 
            array (
                'id' => 1658,
                'account_id' => 266,
                'code' => 522070,
                'name' => 'SEMOVIENTES',
            ),
            658 => 
            array (
                'id' => 1659,
                'account_id' => 266,
                'code' => 522095,
                'name' => 'OTROS',
            ),
            659 => 
            array (
                'id' => 1660,
                'account_id' => 266,
                'code' => 522099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            660 => 
            array (
                'id' => 1661,
                'account_id' => 267,
                'code' => 522505,
                'name' => 'CONTRIBUCIONES',
            ),
            661 => 
            array (
                'id' => 1662,
                'account_id' => 267,
                'code' => 522510,
                'name' => 'AFILIACIONES Y SOSTENIMIENTO',
            ),
            662 => 
            array (
                'id' => 1663,
                'account_id' => 267,
                'code' => 522599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            663 => 
            array (
                'id' => 1664,
                'account_id' => 268,
                'code' => 523005,
                'name' => 'MANEJO',
            ),
            664 => 
            array (
                'id' => 1665,
                'account_id' => 268,
                'code' => 523010,
                'name' => 'CUMPLIMIENTO',
            ),
            665 => 
            array (
                'id' => 1666,
                'account_id' => 268,
                'code' => 523015,
                'name' => 'CORRIENTE DEBIL',
            ),
            666 => 
            array (
                'id' => 1667,
                'account_id' => 268,
                'code' => 523020,
                'name' => 'VIDA COLECTIVA',
            ),
            667 => 
            array (
                'id' => 1668,
                'account_id' => 268,
                'code' => 523025,
                'name' => 'INCENDIO',
            ),
            668 => 
            array (
                'id' => 1669,
                'account_id' => 268,
                'code' => 523030,
                'name' => 'TERREMOTO',
            ),
            669 => 
            array (
                'id' => 1670,
                'account_id' => 268,
                'code' => 523035,
                'name' => 'SUSTRACCION Y HURTO',
            ),
            670 => 
            array (
                'id' => 1671,
                'account_id' => 268,
                'code' => 523040,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            671 => 
            array (
                'id' => 1672,
                'account_id' => 268,
                'code' => 523045,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            672 => 
            array (
                'id' => 1673,
                'account_id' => 268,
                'code' => 523050,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            673 => 
            array (
                'id' => 1674,
                'account_id' => 268,
                'code' => 523055,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            674 => 
            array (
                'id' => 1675,
                'account_id' => 268,
                'code' => 523060,
                'name' => 'RESPONSABILIDAD CIVIL Y EXTRACONTRACTUAL',
            ),
            675 => 
            array (
                'id' => 1676,
                'account_id' => 268,
                'code' => 523065,
                'name' => 'VUELO',
            ),
            676 => 
            array (
                'id' => 1677,
                'account_id' => 268,
                'code' => 523070,
                'name' => 'ROTURA DE MAQUINARIA',
            ),
            677 => 
            array (
                'id' => 1678,
                'account_id' => 268,
                'code' => 523075,
                'name' => 'OBLIGATORIO ACCIDENTE DE TRANSITO',
            ),
            678 => 
            array (
                'id' => 1679,
                'account_id' => 268,
                'code' => 523080,
                'name' => 'LUCRO CESANTE',
            ),
            679 => 
            array (
                'id' => 1680,
                'account_id' => 268,
                'code' => 523095,
                'name' => 'OTROS',
            ),
            680 => 
            array (
                'id' => 1681,
                'account_id' => 268,
                'code' => 523099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            681 => 
            array (
                'id' => 1682,
                'account_id' => 269,
                'code' => 523505,
                'name' => 'ASEO Y VIGILANCIA',
            ),
            682 => 
            array (
                'id' => 1683,
                'account_id' => 269,
                'code' => 523510,
                'name' => 'TEMPORALES',
            ),
            683 => 
            array (
                'id' => 1684,
                'account_id' => 269,
                'code' => 523515,
                'name' => 'ASISTENCIA TECNICA',
            ),
            684 => 
            array (
                'id' => 1685,
                'account_id' => 269,
                'code' => 523520,
                'name' => 'PROCESAMIENTO ELECTRONICO DE DATOS',
            ),
            685 => 
            array (
                'id' => 1686,
                'account_id' => 269,
                'code' => 523525,
                'name' => 'ACUEDUCTO Y ALCANTARILLADO',
            ),
            686 => 
            array (
                'id' => 1687,
                'account_id' => 269,
                'code' => 523530,
                'name' => 'ENERGIA ELECTRICA',
            ),
            687 => 
            array (
                'id' => 1688,
                'account_id' => 269,
                'code' => 523535,
                'name' => 'TELEFONO',
            ),
            688 => 
            array (
                'id' => 1689,
                'account_id' => 269,
                'code' => 523540,
                'name' => 'CORREO, PORTES Y TELEGRAMAS',
            ),
            689 => 
            array (
                'id' => 1690,
                'account_id' => 269,
                'code' => 523545,
                'name' => 'FAX Y TELEX',
            ),
            690 => 
            array (
                'id' => 1691,
                'account_id' => 269,
                'code' => 523550,
                'name' => 'TRANSPORTE, FLETES Y ACARREOS',
            ),
            691 => 
            array (
                'id' => 1692,
                'account_id' => 269,
                'code' => 523555,
                'name' => 'GAS',
            ),
            692 => 
            array (
                'id' => 1693,
                'account_id' => 269,
                'code' => 523560,
                'name' => 'PROPAGANDA Y PUBLICIDAD',
            ),
            693 => 
            array (
                'id' => 1694,
                'account_id' => 269,
                'code' => 523595,
                'name' => 'OTROS',
            ),
            694 => 
            array (
                'id' => 1695,
                'account_id' => 269,
                'code' => 523599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            695 => 
            array (
                'id' => 1696,
                'account_id' => 270,
                'code' => 524005,
                'name' => 'NOTARIALES',
            ),
            696 => 
            array (
                'id' => 1697,
                'account_id' => 270,
                'code' => 524010,
                'name' => 'REGISTRO MERCANTIL',
            ),
            697 => 
            array (
                'id' => 1698,
                'account_id' => 270,
                'code' => 524015,
                'name' => 'TRAMITES Y LICENCIAS',
            ),
            698 => 
            array (
                'id' => 1699,
                'account_id' => 270,
                'code' => 524020,
                'name' => 'ADUANEROS',
            ),
            699 => 
            array (
                'id' => 1700,
                'account_id' => 270,
                'code' => 524025,
                'name' => 'CONSULARES',
            ),
            700 => 
            array (
                'id' => 1701,
                'account_id' => 270,
                'code' => 524095,
                'name' => 'OTROS',
            ),
            701 => 
            array (
                'id' => 1702,
                'account_id' => 270,
                'code' => 524099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            702 => 
            array (
                'id' => 1703,
                'account_id' => 271,
                'code' => 524505,
                'name' => 'TERRENOS',
            ),
            703 => 
            array (
                'id' => 1704,
                'account_id' => 271,
                'code' => 524510,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            704 => 
            array (
                'id' => 1705,
                'account_id' => 271,
                'code' => 524515,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            705 => 
            array (
                'id' => 1706,
                'account_id' => 271,
                'code' => 524520,
                'name' => 'EQUIPO DE OFICINA',
            ),
            706 => 
            array (
                'id' => 1707,
                'account_id' => 271,
                'code' => 524525,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            707 => 
            array (
                'id' => 1708,
                'account_id' => 271,
                'code' => 524530,
                'name' => 'EQUIPO MEDICO - CIENTIFICO',
            ),
            708 => 
            array (
                'id' => 1709,
                'account_id' => 271,
                'code' => 524535,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            709 => 
            array (
                'id' => 1710,
                'account_id' => 271,
                'code' => 524540,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            710 => 
            array (
                'id' => 1711,
                'account_id' => 271,
                'code' => 524545,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            711 => 
            array (
                'id' => 1712,
                'account_id' => 271,
                'code' => 524550,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            712 => 
            array (
                'id' => 1713,
                'account_id' => 271,
                'code' => 524555,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            713 => 
            array (
                'id' => 1714,
                'account_id' => 271,
                'code' => 524560,
                'name' => 'ACUEDUCTOS PLANTAS Y REDES',
            ),
            714 => 
            array (
                'id' => 1715,
                'account_id' => 271,
                'code' => 524565,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            715 => 
            array (
                'id' => 1716,
                'account_id' => 271,
                'code' => 524570,
                'name' => 'VIAS DE COMUNICACION',
            ),
            716 => 
            array (
                'id' => 1717,
                'account_id' => 271,
                'code' => 524599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            717 => 
            array (
                'id' => 1718,
                'account_id' => 272,
                'code' => 525005,
                'name' => 'INSTALACIONES ELECTRICAS',
            ),
            718 => 
            array (
                'id' => 1719,
                'account_id' => 272,
                'code' => 525010,
                'name' => 'ARREGLOS ORNAMENTALES',
            ),
            719 => 
            array (
                'id' => 1720,
                'account_id' => 272,
                'code' => 525015,
                'name' => 'REPARACIONES LOCATIVAS',
            ),
            720 => 
            array (
                'id' => 1721,
                'account_id' => 272,
                'code' => 525095,
                'name' => 'OTROS',
            ),
            721 => 
            array (
                'id' => 1722,
                'account_id' => 272,
                'code' => 525099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            722 => 
            array (
                'id' => 1723,
                'account_id' => 273,
                'code' => 525505,
                'name' => 'ALOJAMIENTO Y MANUTENCION',
            ),
            723 => 
            array (
                'id' => 1724,
                'account_id' => 273,
                'code' => 525510,
                'name' => 'PASAJES FLUVIALES Y/O MARITIMOS',
            ),
            724 => 
            array (
                'id' => 1725,
                'account_id' => 273,
                'code' => 525515,
                'name' => 'PASAJES AEREOS',
            ),
            725 => 
            array (
                'id' => 1726,
                'account_id' => 273,
                'code' => 525520,
                'name' => 'PASAJES TERRESTRES',
            ),
            726 => 
            array (
                'id' => 1727,
                'account_id' => 273,
                'code' => 525525,
                'name' => 'PASAJES FERREOS',
            ),
            727 => 
            array (
                'id' => 1728,
                'account_id' => 273,
                'code' => 525595,
                'name' => 'OTROS',
            ),
            728 => 
            array (
                'id' => 1729,
                'account_id' => 273,
                'code' => 525599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            729 => 
            array (
                'id' => 1730,
                'account_id' => 274,
                'code' => 526005,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            730 => 
            array (
                'id' => 1731,
                'account_id' => 274,
                'code' => 526010,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            731 => 
            array (
                'id' => 1732,
                'account_id' => 274,
                'code' => 526015,
                'name' => 'EQUIPO DE OFICINA',
            ),
            732 => 
            array (
                'id' => 1733,
                'account_id' => 274,
                'code' => 526020,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            733 => 
            array (
                'id' => 1734,
                'account_id' => 274,
                'code' => 526025,
                'name' => 'EQUIPO MEDICO - CIENTIFICO',
            ),
            734 => 
            array (
                'id' => 1735,
                'account_id' => 274,
                'code' => 526030,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            735 => 
            array (
                'id' => 1736,
                'account_id' => 274,
                'code' => 526035,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            736 => 
            array (
                'id' => 1737,
                'account_id' => 274,
                'code' => 526040,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            737 => 
            array (
                'id' => 1738,
                'account_id' => 274,
                'code' => 526045,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            738 => 
            array (
                'id' => 1739,
                'account_id' => 274,
                'code' => 526050,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            739 => 
            array (
                'id' => 1740,
                'account_id' => 274,
                'code' => 526055,
                'name' => 'ACUEDUCTOS, PLANTAS Y REDES',
            ),
            740 => 
            array (
                'id' => 1741,
                'account_id' => 274,
                'code' => 526060,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            741 => 
            array (
                'id' => 1742,
                'account_id' => 274,
                'code' => 526065,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            742 => 
            array (
                'id' => 1743,
                'account_id' => 274,
                'code' => 526099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            743 => 
            array (
                'id' => 1744,
                'account_id' => 275,
                'code' => 526505,
                'name' => 'VIAS DE COMUNICACION',
            ),
            744 => 
            array (
                'id' => 1745,
                'account_id' => 275,
                'code' => 526510,
                'name' => 'INTANGIBLES',
            ),
            745 => 
            array (
                'id' => 1746,
                'account_id' => 275,
                'code' => 526515,
                'name' => 'CARGOS DIFERIDOS',
            ),
            746 => 
            array (
                'id' => 1747,
                'account_id' => 275,
                'code' => 526595,
                'name' => 'OTRAS',
            ),
            747 => 
            array (
                'id' => 1748,
                'account_id' => 275,
                'code' => 526599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            748 => 
            array (
                'id' => 1749,
                'account_id' => 276,
                'code' => 527001,
                'name' => '???',
            ),
            749 => 
            array (
                'id' => 1750,
                'account_id' => 276,
                'code' => 527099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            750 => 
            array (
                'id' => 1751,
                'account_id' => 277,
                'code' => 529505,
                'name' => 'COMISIONES',
            ),
            751 => 
            array (
                'id' => 1752,
                'account_id' => 277,
                'code' => 529510,
                'name' => 'LIBROS, SUSCRIPCIONES, PERIODICOS Y REVISTAS',
            ),
            752 => 
            array (
                'id' => 1753,
                'account_id' => 277,
                'code' => 529515,
                'name' => 'MUSICA AMBIENTAL',
            ),
            753 => 
            array (
                'id' => 1754,
                'account_id' => 277,
                'code' => 529520,
                'name' => 'GASTOS DE REPRESENTACION Y RELACIONES PUBLICAS',
            ),
            754 => 
            array (
                'id' => 1755,
                'account_id' => 277,
                'code' => 529525,
                'name' => 'ELEMENTOS DE ASEO Y CAFETERIA',
            ),
            755 => 
            array (
                'id' => 1756,
                'account_id' => 277,
                'code' => 529530,
                'name' => 'UTILES, PAPELERIA Y FOTOCOPIAS',
            ),
            756 => 
            array (
                'id' => 1757,
                'account_id' => 277,
                'code' => 529535,
                'name' => 'COMBUSTIBLES Y LUBRICANTES',
            ),
            757 => 
            array (
                'id' => 1758,
                'account_id' => 277,
                'code' => 529540,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            758 => 
            array (
                'id' => 1759,
                'account_id' => 277,
                'code' => 529545,
                'name' => 'TAXIS Y BUSES',
            ),
            759 => 
            array (
                'id' => 1760,
                'account_id' => 277,
                'code' => 529550,
                'name' => 'ESTAMPILLAS',
            ),
            760 => 
            array (
                'id' => 1761,
                'account_id' => 277,
                'code' => 529555,
                'name' => 'MICROFILMACION',
            ),
            761 => 
            array (
                'id' => 1762,
                'account_id' => 277,
                'code' => 529560,
                'name' => 'CASINO Y RESTAURANTE',
            ),
            762 => 
            array (
                'id' => 1763,
                'account_id' => 277,
                'code' => 529565,
                'name' => 'PARQUEADEROS',
            ),
            763 => 
            array (
                'id' => 1764,
                'account_id' => 277,
                'code' => 529570,
                'name' => 'INDEMNIZACION POR DAÑOS A TERCEROS',
            ),
            764 => 
            array (
                'id' => 1765,
                'account_id' => 277,
                'code' => 529575,
                'name' => 'POLVORA Y SIMILARES',
            ),
            765 => 
            array (
                'id' => 1766,
                'account_id' => 277,
                'code' => 529595,
                'name' => 'OTROS',
            ),
            766 => 
            array (
                'id' => 1767,
                'account_id' => 277,
                'code' => 529599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            767 => 
            array (
                'id' => 1768,
                'account_id' => 278,
                'code' => 529905,
                'name' => 'INVERSIONES',
            ),
            768 => 
            array (
                'id' => 1769,
                'account_id' => 278,
                'code' => 529910,
                'name' => 'DEUDORES',
            ),
            769 => 
            array (
                'id' => 1770,
                'account_id' => 278,
                'code' => 529915,
                'name' => 'INVENTARIOS',
            ),
            770 => 
            array (
                'id' => 1771,
                'account_id' => 278,
                'code' => 529920,
                'name' => 'PROPIEDADES, PLANTA Y EQUIPO',
            ),
            771 => 
            array (
                'id' => 1772,
                'account_id' => 278,
                'code' => 529995,
                'name' => 'OTROS ACTIVOS',
            ),
            772 => 
            array (
                'id' => 1773,
                'account_id' => 278,
                'code' => 529999,
                'name' => 'AJUSTES POR INFLACION',
            ),
            773 => 
            array (
                'id' => 1774,
                'account_id' => 279,
                'code' => 530505,
                'name' => 'GASTOS BANCARIOS',
            ),
            774 => 
            array (
                'id' => 1775,
                'account_id' => 279,
                'code' => 530510,
                'name' => 'REAJUSTE MONETARIO - UPAC',
            ),
            775 => 
            array (
                'id' => 1776,
                'account_id' => 279,
                'code' => 530515,
                'name' => 'COMISIONES',
            ),
            776 => 
            array (
                'id' => 1777,
                'account_id' => 279,
                'code' => 530520,
                'name' => 'INTERESES',
            ),
            777 => 
            array (
                'id' => 1778,
                'account_id' => 279,
                'code' => 530525,
                'name' => 'DIFERENCIA EN CAMBIO',
            ),
            778 => 
            array (
                'id' => 1779,
                'account_id' => 279,
                'code' => 530530,
                'name' => 'GASTOS EN NEGOCIACION CERTIFICADOS DE CAMBIO',
            ),
            779 => 
            array (
                'id' => 1780,
                'account_id' => 279,
                'code' => 530535,
                'name' => 'DESCUENTOS COMERCIALES CONDICIONADOS',
            ),
            780 => 
            array (
                'id' => 1781,
                'account_id' => 279,
                'code' => 530540,
                'name' => 'GASTOS MANEJO Y EMISION DE BONOS',
            ),
            781 => 
            array (
                'id' => 1782,
                'account_id' => 279,
                'code' => 530545,
                'name' => 'PRIMA AMORTIZADA',
            ),
            782 => 
            array (
                'id' => 1783,
                'account_id' => 279,
                'code' => 530595,
                'name' => 'OTROS',
            ),
            783 => 
            array (
                'id' => 1784,
                'account_id' => 279,
                'code' => 530599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            784 => 
            array (
                'id' => 1785,
                'account_id' => 280,
                'code' => 531005,
                'name' => 'VENTA DE INVERSIONES',
            ),
            785 => 
            array (
                'id' => 1786,
                'account_id' => 280,
                'code' => 531010,
                'name' => 'VENTA DE CARTERA',
            ),
            786 => 
            array (
                'id' => 1787,
                'account_id' => 280,
                'code' => 531015,
                'name' => 'VENTA DE PROPIEDADES PLANTA Y EQUIPO',
            ),
            787 => 
            array (
                'id' => 1788,
                'account_id' => 280,
                'code' => 531020,
                'name' => 'VENTA DE INTANGIBLES',
            ),
            788 => 
            array (
                'id' => 1789,
                'account_id' => 280,
                'code' => 531025,
                'name' => 'VENTA DE OTROS ACTIVOS',
            ),
            789 => 
            array (
                'id' => 1790,
                'account_id' => 280,
                'code' => 531030,
                'name' => 'RETIRO DE PROPIEDADES PLANTA Y EQUIPO',
            ),
            790 => 
            array (
                'id' => 1791,
                'account_id' => 280,
                'code' => 531035,
                'name' => 'RETIRO DE OTROS ACTIVOS',
            ),
            791 => 
            array (
                'id' => 1792,
                'account_id' => 280,
                'code' => 531040,
                'name' => 'PERDIDAS POR SINIESTROS',
            ),
            792 => 
            array (
                'id' => 1793,
                'account_id' => 280,
                'code' => 531095,
                'name' => 'OTROS',
            ),
            793 => 
            array (
                'id' => 1794,
                'account_id' => 280,
                'code' => 531099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            794 => 
            array (
                'id' => 1795,
                'account_id' => 281,
                'code' => 531505,
                'name' => 'COSTAS Y PROCESOS JUDICIALES',
            ),
            795 => 
            array (
                'id' => 1796,
                'account_id' => 281,
                'code' => 531510,
                'name' => 'ACTIVIDADES CULTURALES Y CIVICAS',
            ),
            796 => 
            array (
                'id' => 1797,
                'account_id' => 281,
                'code' => 531515,
                'name' => 'COSTOS Y GASTOS DE EJERCICIOS ANTERIORES',
            ),
            797 => 
            array (
                'id' => 1798,
                'account_id' => 281,
                'code' => 531520,
                'name' => 'IMPUESTOS ASUMIDOS',
            ),
            798 => 
            array (
                'id' => 1799,
                'account_id' => 281,
                'code' => 531595,
                'name' => 'OTROS',
            ),
            799 => 
            array (
                'id' => 1800,
                'account_id' => 281,
                'code' => 531599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            800 => 
            array (
                'id' => 1801,
                'account_id' => 282,
                'code' => 539505,
                'name' => 'DEMANDAS LABORALES',
            ),
            801 => 
            array (
                'id' => 1802,
                'account_id' => 282,
                'code' => 539510,
                'name' => 'DEMANDAS POR INCUMPLIMIENTO DE CONTRATOS',
            ),
            802 => 
            array (
                'id' => 1803,
                'account_id' => 282,
                'code' => 539515,
                'name' => 'INDEMNIZACIONES',
            ),
            803 => 
            array (
                'id' => 1804,
                'account_id' => 282,
                'code' => 539520,
                'name' => 'MULTAS, SANCIONES Y LITIGIOS',
            ),
            804 => 
            array (
                'id' => 1805,
                'account_id' => 282,
                'code' => 539525,
                'name' => 'DONACIONES',
            ),
            805 => 
            array (
                'id' => 1806,
                'account_id' => 282,
                'code' => 539530,
                'name' => 'CONSTITUCION DE GARANTIAS',
            ),
            806 => 
            array (
                'id' => 1807,
                'account_id' => 282,
                'code' => 539535,
                'name' => 'AMORTIZACION DE BIENES ENTREGADOS EN COMODATO',
            ),
            807 => 
            array (
                'id' => 1808,
                'account_id' => 282,
                'code' => 539595,
                'name' => 'OTROS',
            ),
            808 => 
            array (
                'id' => 1809,
                'account_id' => 282,
                'code' => 539599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            809 => 
            array (
                'id' => 1810,
                'account_id' => 283,
                'code' => 540505,
                'name' => 'IMPUESTO DE RENTA Y COMPLEMENTARIOS',
            ),
            810 => 
            array (
                'id' => 1811,
                'account_id' => 284,
                'code' => 590505,
                'name' => 'GANANCIAS Y PERDIDAS',
            ),
            811 => 
            array (
                'id' => 1812,
                'account_id' => 285,
                'code' => 610505,
                'name' => 'CULTIVO DE CEREALES',
            ),
            812 => 
            array (
                'id' => 1813,
                'account_id' => 285,
                'code' => 610510,
                'name' => 'CULTIVOS DE HORTALIZAS, LEGUMBRES Y PLANTAS ORNAMENTALES',
            ),
            813 => 
            array (
                'id' => 1814,
                'account_id' => 285,
                'code' => 610515,
                'name' => 'CULTIVOS DE FRUTAS, NUECES Y PLANTAS AROMATICAS',
            ),
            814 => 
            array (
                'id' => 1815,
                'account_id' => 285,
                'code' => 610520,
                'name' => 'CULTIVO DE CAFE',
            ),
            815 => 
            array (
                'id' => 1816,
                'account_id' => 285,
                'code' => 610525,
                'name' => 'CULTIVO DE FLORES',
            ),
            816 => 
            array (
                'id' => 1817,
                'account_id' => 285,
                'code' => 610530,
                'name' => 'CULTIVO DE CAÑA DE AZUCAR',
            ),
            817 => 
            array (
                'id' => 1818,
                'account_id' => 285,
                'code' => 610535,
                'name' => 'CULTIVO DE ALGODON Y PLANTAS PARA MATERIAL TEXTIL',
            ),
            818 => 
            array (
                'id' => 1819,
                'account_id' => 285,
                'code' => 610540,
                'name' => 'CULTIVO DE BANANO',
            ),
            819 => 
            array (
                'id' => 1820,
                'account_id' => 285,
                'code' => 610545,
                'name' => 'OTROS CULTIVOS AGRICOLAS',
            ),
            820 => 
            array (
                'id' => 1821,
                'account_id' => 285,
                'code' => 610550,
                'name' => 'CRIA DE OVEJAS, CABRAS, ASNOS, MULAS Y BURDEGANOS',
            ),
            821 => 
            array (
                'id' => 1822,
                'account_id' => 285,
                'code' => 610555,
                'name' => 'CRIA DE GANADO CABALLAR Y VACUNO.',
            ),
            822 => 
            array (
                'id' => 1823,
                'account_id' => 285,
                'code' => 610560,
                'name' => 'PRODUCCION AVICOLA',
            ),
            823 => 
            array (
                'id' => 1824,
                'account_id' => 285,
                'code' => 610565,
                'name' => 'CRIA DE OTROS ANIMALES',
            ),
            824 => 
            array (
                'id' => 1825,
                'account_id' => 285,
                'code' => 610570,
                'name' => 'SERVICIOS AGRICOLAS Y GANADEROS',
            ),
            825 => 
            array (
                'id' => 1826,
                'account_id' => 285,
                'code' => 610575,
                'name' => 'ACTIVIDAD DE CAZA',
            ),
            826 => 
            array (
                'id' => 1827,
                'account_id' => 285,
                'code' => 610580,
                'name' => 'ACTIVIDAD DE SILVICULTURA',
            ),
            827 => 
            array (
                'id' => 1828,
                'account_id' => 285,
                'code' => 610595,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            828 => 
            array (
                'id' => 1829,
                'account_id' => 285,
                'code' => 610599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            829 => 
            array (
                'id' => 1830,
                'account_id' => 286,
                'code' => 611005,
                'name' => 'ACTIVIDAD DE PESCA',
            ),
            830 => 
            array (
                'id' => 1831,
                'account_id' => 286,
                'code' => 611010,
                'name' => 'EXPLOTACION DE CRIADEROS DE PECES',
            ),
            831 => 
            array (
                'id' => 1832,
                'account_id' => 286,
                'code' => 611095,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            832 => 
            array (
                'id' => 1833,
                'account_id' => 286,
                'code' => 611099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            833 => 
            array (
                'id' => 1834,
                'account_id' => 287,
                'code' => 611505,
                'name' => 'CARBON',
            ),
            834 => 
            array (
                'id' => 1835,
                'account_id' => 287,
                'code' => 611510,
                'name' => 'PETROLEO CRUDO',
            ),
            835 => 
            array (
                'id' => 1836,
                'account_id' => 287,
                'code' => 611512,
                'name' => 'GAS NATURAL',
            ),
            836 => 
            array (
                'id' => 1837,
                'account_id' => 287,
                'code' => 611514,
                'name' => 'SERVICIOS RELACIONADOS CON EXTRACCION DE PETROLEO Y GAS',
            ),
            837 => 
            array (
                'id' => 1838,
                'account_id' => 287,
                'code' => 611515,
                'name' => 'MINERALES DE HIERRO',
            ),
            838 => 
            array (
                'id' => 1839,
                'account_id' => 287,
                'code' => 611520,
                'name' => 'MINERALES METALIFEROS NO FERROSOS',
            ),
            839 => 
            array (
                'id' => 1840,
                'account_id' => 287,
                'code' => 611525,
                'name' => 'PIEDRA, ARENA Y ARCILLA',
            ),
            840 => 
            array (
                'id' => 1841,
                'account_id' => 287,
                'code' => 611527,
                'name' => 'PIEDRAS PRECIOSAS',
            ),
            841 => 
            array (
                'id' => 1842,
                'account_id' => 287,
                'code' => 611528,
                'name' => 'ORO',
            ),
            842 => 
            array (
                'id' => 1843,
                'account_id' => 287,
                'code' => 611530,
                'name' => 'OTRAS MINAS Y CANTERAS',
            ),
            843 => 
            array (
                'id' => 1844,
                'account_id' => 287,
                'code' => 611532,
                'name' => 'PRESTACION DE SERVICIOS SECTOR MINERO',
            ),
            844 => 
            array (
                'id' => 1845,
                'account_id' => 287,
                'code' => 611595,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            845 => 
            array (
                'id' => 1846,
                'account_id' => 287,
                'code' => 611599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            846 => 
            array (
                'id' => 1847,
                'account_id' => 288,
                'code' => 612001,
                'name' => 'PRODUCCION Y PROCESAMIENTO DE CARNES Y PRODUCTOS CARNICOS',
            ),
            847 => 
            array (
                'id' => 1848,
                'account_id' => 288,
                'code' => 612002,
                'name' => 'PRODUCTOS DE PESCADO',
            ),
            848 => 
            array (
                'id' => 1849,
                'account_id' => 288,
                'code' => 612003,
                'name' => 'PRODUCTOS DE FRUTAS, LEGUMBRES Y HORTALIZAS',
            ),
            849 => 
            array (
                'id' => 1850,
                'account_id' => 288,
                'code' => 612004,
                'name' => 'ELABORACION DE ACEITES Y GRASAS',
            ),
            850 => 
            array (
                'id' => 1851,
                'account_id' => 288,
                'code' => 612005,
                'name' => 'ELABORACION DE PRODUCTOS LACTEOS',
            ),
            851 => 
            array (
                'id' => 1852,
                'account_id' => 288,
                'code' => 612006,
                'name' => 'ELABORACION DE PRODUCTOS DE MOLINERIA',
            ),
            852 => 
            array (
                'id' => 1853,
                'account_id' => 288,
                'code' => 612007,
                'name' => 'ELABORACION DE ALMIDONES Y DERIVADOS',
            ),
            853 => 
            array (
                'id' => 1854,
                'account_id' => 288,
                'code' => 612008,
                'name' => 'ELABORACION DE ALIMENTOS PARA ANIMALES',
            ),
            854 => 
            array (
                'id' => 1855,
                'account_id' => 288,
                'code' => 612009,
                'name' => 'ELABORACION DE PRODUCTOS PARA PANADERIA',
            ),
            855 => 
            array (
                'id' => 1856,
                'account_id' => 288,
                'code' => 612010,
                'name' => 'ELABORACION DE AZUCAR Y MELAZAS',
            ),
            856 => 
            array (
                'id' => 1857,
                'account_id' => 288,
                'code' => 612011,
                'name' => 'ELABORACION DE CACAO, CHOCOLATE Y CONFITERIA',
            ),
            857 => 
            array (
                'id' => 1858,
                'account_id' => 288,
                'code' => 612012,
                'name' => 'ELABORACION DE PASTAS Y PRODUCTOS FARINACEOS',
            ),
            858 => 
            array (
                'id' => 1859,
                'account_id' => 288,
                'code' => 612013,
                'name' => 'ELABORACION DE PRODUCTOS DE CAFE',
            ),
            859 => 
            array (
                'id' => 1860,
                'account_id' => 288,
                'code' => 612014,
                'name' => 'ELABORACION DE OTROS PRODUCTOS ALIMENTICIOS',
            ),
            860 => 
            array (
                'id' => 1861,
                'account_id' => 288,
                'code' => 612015,
                'name' => 'ELABORACION DE BEBIDAS ALCOHOLICAS Y ALCOHOL ETILICO',
            ),
            861 => 
            array (
                'id' => 1862,
                'account_id' => 288,
                'code' => 612016,
                'name' => 'ELABORACION DE VINOS',
            ),
            862 => 
            array (
                'id' => 1863,
                'account_id' => 288,
                'code' => 612017,
                'name' => 'ELABORACION DE BEBIDAS MALTEADAS Y DE MALTA',
            ),
            863 => 
            array (
                'id' => 1864,
                'account_id' => 288,
                'code' => 612018,
                'name' => 'ELABORACION DE BEBIDAS NO ALCOHOLICAS',
            ),
            864 => 
            array (
                'id' => 1865,
                'account_id' => 288,
                'code' => 612019,
                'name' => 'ELABORACION DE PRODUCTOS DE TABACO',
            ),
            865 => 
            array (
                'id' => 1866,
                'account_id' => 288,
                'code' => 612020,
                'name' => 'PREPARACION E HILATURA DE FIBRAS TEXTILES Y TEJEDURIA',
            ),
            866 => 
            array (
                'id' => 1867,
                'account_id' => 288,
                'code' => 612021,
                'name' => 'ACABADO DE PRODUCTOS TEXTILES',
            ),
            867 => 
            array (
                'id' => 1868,
                'account_id' => 288,
                'code' => 612022,
                'name' => 'ELABORACION DE ARTICULOS DE MATERIALES TEXTILES',
            ),
            868 => 
            array (
                'id' => 1869,
                'account_id' => 288,
                'code' => 612023,
                'name' => 'ELABORACION DE TAPICES Y ALFOMBRAS',
            ),
            869 => 
            array (
                'id' => 1870,
                'account_id' => 288,
                'code' => 612024,
                'name' => 'ELABORACION DE CUERDAS, CORDELES, BRAMANTES Y REDES',
            ),
            870 => 
            array (
                'id' => 1871,
                'account_id' => 288,
                'code' => 612025,
                'name' => 'ELABORACION DE OTROS PRODUCTOS TEXTILES',
            ),
            871 => 
            array (
                'id' => 1872,
                'account_id' => 288,
                'code' => 612026,
                'name' => 'ELABORACION DE TEJIDOS',
            ),
            872 => 
            array (
                'id' => 1873,
                'account_id' => 288,
                'code' => 612027,
                'name' => 'ELABORACION DE PRENDAS DE VESTIR',
            ),
            873 => 
            array (
                'id' => 1874,
                'account_id' => 288,
                'code' => 612028,
                'name' => 'PREPARACION, ADOBO Y TEÑIDO DE PIELES',
            ),
            874 => 
            array (
                'id' => 1875,
                'account_id' => 288,
                'code' => 612029,
                'name' => 'CURTIDO, ADOBO O PREPARACION DE CUERO',
            ),
            875 => 
            array (
                'id' => 1876,
                'account_id' => 288,
                'code' => 612030,
                'name' => 'ELABORACION DE MALETAS, BOLSOS Y SIMILARES',
            ),
            876 => 
            array (
                'id' => 1877,
                'account_id' => 288,
                'code' => 612031,
                'name' => 'ELABORACION DE CALZADO',
            ),
            877 => 
            array (
                'id' => 1878,
                'account_id' => 288,
                'code' => 612032,
                'name' => 'PRODUCCION DE MADERA, ARTICULOS DE MADERA Y CORCHO',
            ),
            878 => 
            array (
                'id' => 1879,
                'account_id' => 288,
                'code' => 612033,
                'name' => 'ELABORACION DE PASTA Y PRODUCTOS DE MADERA, PAPEL Y CARTON',
            ),
            879 => 
            array (
                'id' => 1880,
                'account_id' => 288,
                'code' => 612034,
                'name' => 'EDICIONES Y PUBLICACIONES',
            ),
            880 => 
            array (
                'id' => 1881,
                'account_id' => 288,
                'code' => 612035,
                'name' => 'IMPRESION',
            ),
            881 => 
            array (
                'id' => 1882,
                'account_id' => 288,
                'code' => 612036,
                'name' => 'SERVICIOS RELACIONADOS CON LA EDICION Y LA IMPRESION',
            ),
            882 => 
            array (
                'id' => 1883,
                'account_id' => 288,
                'code' => 612037,
                'name' => 'REPRODUCCION DE GRABACIONES',
            ),
            883 => 
            array (
                'id' => 1884,
                'account_id' => 288,
                'code' => 612038,
                'name' => 'ELABORACION DE PRODUCTOS DE HORNO DE COQUE',
            ),
            884 => 
            array (
                'id' => 1885,
                'account_id' => 288,
                'code' => 612039,
                'name' => 'ELABORACION DE PRODUCTOS DE LA REFINACION DE PETROLEO',
            ),
            885 => 
            array (
                'id' => 1886,
                'account_id' => 288,
                'code' => 612040,
                'name' => 'ELABORACION DE SUSTANCIAS QUIMICAS BASICAS',
            ),
            886 => 
            array (
                'id' => 1887,
                'account_id' => 288,
                'code' => 612041,
                'name' => 'ELABORACION DE ABONOS Y COMPUESTOS DE NITROGENO',
            ),
            887 => 
            array (
                'id' => 1888,
                'account_id' => 288,
                'code' => 612042,
                'name' => 'ELABORACION DE PLASTICO Y CAUCHO SINTETICO',
            ),
            888 => 
            array (
                'id' => 1889,
                'account_id' => 288,
                'code' => 612043,
                'name' => 'ELABORACION DE PRODUCTOS QUIMICOS DE USO AGROPECUARIO',
            ),
            889 => 
            array (
                'id' => 1890,
                'account_id' => 288,
                'code' => 612044,
                'name' => 'ELABORACION DE PINTURAS, TINTAS Y MASILLAS',
            ),
            890 => 
            array (
                'id' => 1891,
                'account_id' => 288,
                'code' => 612045,
                'name' => 'ELABORACION DE PRODUCTOS FARMACEUTICOS Y BOTANICOS',
            ),
            891 => 
            array (
                'id' => 1892,
                'account_id' => 288,
                'code' => 612046,
                'name' => 'ELABORACION DE JABONES, DETERGENTES Y PREPARADOS DE TOCADOR',
            ),
            892 => 
            array (
                'id' => 1893,
                'account_id' => 288,
                'code' => 612047,
                'name' => 'ELABORACION DE OTROS PRODUCTOS QUIMICOS',
            ),
            893 => 
            array (
                'id' => 1894,
                'account_id' => 288,
                'code' => 612048,
                'name' => 'ELABORACION DE FIBRAS',
            ),
            894 => 
            array (
                'id' => 1895,
                'account_id' => 288,
                'code' => 612049,
                'name' => 'ELABORACION DE OTROS PRODUCTOS DE CAUCHO',
            ),
            895 => 
            array (
                'id' => 1896,
                'account_id' => 288,
                'code' => 612050,
                'name' => 'ELABORACION DE PRODUCTOS DE PLASTICO',
            ),
            896 => 
            array (
                'id' => 1897,
                'account_id' => 288,
                'code' => 612051,
                'name' => 'ELABORACION DE VIDRIO Y PRODUCTOS DE VIDRIO',
            ),
            897 => 
            array (
                'id' => 1898,
                'account_id' => 288,
                'code' => 612052,
                'name' => 'ELABORACION DE PRODUCTOS DE CERAMICA, LOZA, PIEDRA, ARCILLA Y PORCELANA',
            ),
            898 => 
            array (
                'id' => 1899,
                'account_id' => 288,
                'code' => 612053,
                'name' => 'ELABORACION DE CEMENTO, CAL Y YESO',
            ),
            899 => 
            array (
                'id' => 1900,
                'account_id' => 288,
                'code' => 612054,
                'name' => 'ELABORACION DE ARTICULOS DE HORMIGON, CEMENTO Y YESO',
            ),
            900 => 
            array (
                'id' => 1901,
                'account_id' => 288,
                'code' => 612055,
                'name' => 'CORTE, TALLADO Y ACABADO DE LA PIEDRA',
            ),
            901 => 
            array (
                'id' => 1902,
                'account_id' => 288,
                'code' => 612056,
                'name' => 'ELABORACION DE OTROS PRODUCTOS MINERALES NO METALICOS',
            ),
            902 => 
            array (
                'id' => 1903,
                'account_id' => 288,
                'code' => 612057,
                'name' => 'INDUSTRIAS BASICAS Y FUNDICION DE HIERRO Y ACERO',
            ),
            903 => 
            array (
                'id' => 1904,
                'account_id' => 288,
                'code' => 612058,
                'name' => 'PRODUCTOS PRIMARIOS DE METALES PRECIOSOS Y DE METALES NO FERROSOS',
            ),
            904 => 
            array (
                'id' => 1905,
                'account_id' => 288,
                'code' => 612059,
                'name' => 'FUNDICION DE METALES NO FERROSOS',
            ),
            905 => 
            array (
                'id' => 1906,
                'account_id' => 288,
                'code' => 612060,
                'name' => 'FABRICACION DE PRODUCTOS METALICOS PARA USO ESTRUCTURAL',
            ),
            906 => 
            array (
                'id' => 1907,
                'account_id' => 288,
                'code' => 612061,
                'name' => 'FORJA, PRENSADO, ESTAMPADO, LAMINADO DE METAL Y',
            ),
            907 => 
            array (
                'id' => 1908,
                'account_id' => 288,
                'code' => 612062,
                'name' => 'REVESTIMIENTO DE METALES Y OBRAS DE INGENIERIA MECANICA',
            ),
            908 => 
            array (
                'id' => 1909,
                'account_id' => 288,
                'code' => 612063,
                'name' => 'FABRICACION DE ARTICULOS DE FERRETERIA',
            ),
            909 => 
            array (
                'id' => 1910,
                'account_id' => 288,
                'code' => 612064,
                'name' => 'ELABORACION DE OTROS PRODUCTOS DE METAL',
            ),
            910 => 
            array (
                'id' => 1911,
                'account_id' => 288,
                'code' => 612065,
                'name' => 'FABRICACION DE MAQUINARIA Y EQUIPO',
            ),
            911 => 
            array (
                'id' => 1912,
                'account_id' => 288,
                'code' => 612066,
                'name' => 'FABRICACION DE EQUIPOS DE ELEVACION Y MANIPULACION',
            ),
            912 => 
            array (
                'id' => 1913,
                'account_id' => 288,
                'code' => 612067,
                'name' => 'ELABORACION DE APARATOS DE USO DOMESTICO',
            ),
            913 => 
            array (
                'id' => 1914,
                'account_id' => 288,
                'code' => 612068,
                'name' => 'ELABORACION DE EQUIPO DE OFICINA',
            ),
            914 => 
            array (
                'id' => 1915,
                'account_id' => 288,
                'code' => 612069,
                'name' => 'ELABORACION DE PILAS Y BATERIAS PRIMARIAS',
            ),
            915 => 
            array (
                'id' => 1916,
                'account_id' => 288,
                'code' => 612070,
                'name' => 'ELABORACION DE EQUIPO DE ILUMINACION',
            ),
            916 => 
            array (
                'id' => 1917,
                'account_id' => 288,
                'code' => 612071,
                'name' => 'ELABORACION DE OTROS TIPOS DE EQUIPO ELECTRICO',
            ),
            917 => 
            array (
                'id' => 1918,
                'account_id' => 288,
                'code' => 612072,
                'name' => 'FABRICACION DE EQUIPOS DE RADIO, TELEVISION Y COMUNICACIONES',
            ),
            918 => 
            array (
                'id' => 1919,
                'account_id' => 288,
                'code' => 612073,
                'name' => 'FABRICACION DE APARATOS E INSTRUMENTOS MEDICOS',
            ),
            919 => 
            array (
                'id' => 1920,
                'account_id' => 288,
                'code' => 612074,
                'name' => 'FABRICACION DE INSTRUMENTOS DE MEDICION Y CONTROL',
            ),
            920 => 
            array (
                'id' => 1921,
                'account_id' => 288,
                'code' => 612075,
                'name' => 'FABRICACION DE INSTRUMENTOS DE OPTICA Y EQUIPO FOTOGRAFICO',
            ),
            921 => 
            array (
                'id' => 1922,
                'account_id' => 288,
                'code' => 612076,
                'name' => 'FABRICACION DE RELOJES',
            ),
            922 => 
            array (
                'id' => 1923,
                'account_id' => 288,
                'code' => 612077,
                'name' => 'FABRICACION DE VEHICULOS AUTOMOTORES',
            ),
            923 => 
            array (
                'id' => 1924,
                'account_id' => 288,
                'code' => 612078,
                'name' => 'FABRICACION DE CARROCERIAS PARA AUTOMOTORES',
            ),
            924 => 
            array (
                'id' => 1925,
                'account_id' => 288,
                'code' => 612079,
                'name' => 'FABRICACION DE PARTES PIEZAS Y ACCESORIOS PARA AUTOMOTORES',
            ),
            925 => 
            array (
                'id' => 1926,
                'account_id' => 288,
                'code' => 612080,
                'name' => 'FABRICACION Y REPARACION DE BUQUES Y OTRAS EMBARCACIONES',
            ),
            926 => 
            array (
                'id' => 1927,
                'account_id' => 288,
                'code' => 612081,
                'name' => 'FABRICACION DE LOCOMOTORAS Y MATERIAL RODANTE PARA FERROCARRILES',
            ),
            927 => 
            array (
                'id' => 1928,
                'account_id' => 288,
                'code' => 612082,
                'name' => 'FABRICACION DE AERONAVES',
            ),
            928 => 
            array (
                'id' => 1929,
                'account_id' => 288,
                'code' => 612083,
                'name' => 'FABRICACION DE MOTOCICLETAS',
            ),
            929 => 
            array (
                'id' => 1930,
                'account_id' => 288,
                'code' => 612084,
                'name' => 'FABRICACION DE BICICLETAS Y SILLAS DE RUEDAS',
            ),
            930 => 
            array (
                'id' => 1931,
                'account_id' => 288,
                'code' => 612085,
                'name' => 'FABRICACION DE OTROS TIPOS DE TRANSPORTE',
            ),
            931 => 
            array (
                'id' => 1932,
                'account_id' => 288,
                'code' => 612086,
                'name' => 'FABRICACION DE MUEBLES',
            ),
            932 => 
            array (
                'id' => 1933,
                'account_id' => 288,
                'code' => 612087,
                'name' => 'FABRICACION DE JOYAS Y ARTICULOS CONEXOS',
            ),
            933 => 
            array (
                'id' => 1934,
                'account_id' => 288,
                'code' => 612088,
                'name' => 'FABRICACION DE INSTRUMENTOS DE MUSICA',
            ),
            934 => 
            array (
                'id' => 1935,
                'account_id' => 288,
                'code' => 612089,
                'name' => 'FABRICACION DE ARTICULOS Y EQUIPO PARA DEPORTE',
            ),
            935 => 
            array (
                'id' => 1936,
                'account_id' => 288,
                'code' => 612090,
                'name' => 'FABRICACION DE JUEGOS Y JUGUETES',
            ),
            936 => 
            array (
                'id' => 1937,
                'account_id' => 288,
                'code' => 612091,
                'name' => 'RECICLAMIENTO DE DESPERDICIOS',
            ),
            937 => 
            array (
                'id' => 1938,
                'account_id' => 288,
                'code' => 612095,
                'name' => 'PRODUCTOS DE OTRAS INDUSTRIAS MANUFACTURERAS',
            ),
            938 => 
            array (
                'id' => 1939,
                'account_id' => 288,
                'code' => 612099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            939 => 
            array (
                'id' => 1940,
                'account_id' => 289,
                'code' => 612505,
                'name' => 'GENERACION, CAPTACION Y DISTRIBUCION DE ENERGIA ELECTRICA',
            ),
            940 => 
            array (
                'id' => 1941,
                'account_id' => 289,
                'code' => 612510,
                'name' => 'FABRICACION DE GAS Y DISTRIBUCION DE COMBUSTIBLES GASEOSOS',
            ),
            941 => 
            array (
                'id' => 1942,
                'account_id' => 289,
                'code' => 612515,
                'name' => 'CAPTACION, DEPURACION Y DISTRIBUCION DE AGUA',
            ),
            942 => 
            array (
                'id' => 1943,
                'account_id' => 289,
                'code' => 612595,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            943 => 
            array (
                'id' => 1944,
                'account_id' => 289,
                'code' => 612599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            944 => 
            array (
                'id' => 1945,
                'account_id' => 290,
                'code' => 613005,
                'name' => 'PREPARACION DE TERRENOS',
            ),
            945 => 
            array (
                'id' => 1946,
                'account_id' => 290,
                'code' => 613010,
                'name' => 'CONSTRUCCION DE EDIFICIOS Y OBRAS DE INGENIERIA CIVIL',
            ),
            946 => 
            array (
                'id' => 1947,
                'account_id' => 290,
                'code' => 613015,
                'name' => 'ACONDICIONAMIENTO DE EDIFICIOS',
            ),
            947 => 
            array (
                'id' => 1948,
                'account_id' => 290,
                'code' => 613020,
                'name' => 'TERMINACION DE EDIFICACIONES',
            ),
            948 => 
            array (
                'id' => 1949,
                'account_id' => 290,
                'code' => 613025,
                'name' => 'ALQUILER DE EQUIPO CON OPERARIO',
            ),
            949 => 
            array (
                'id' => 1950,
                'account_id' => 290,
                'code' => 613095,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            950 => 
            array (
                'id' => 1951,
                'account_id' => 290,
                'code' => 613099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            951 => 
            array (
                'id' => 1952,
                'account_id' => 291,
                'code' => 613502,
                'name' => 'VENTA DE VEHICULOS AUTOMOTORES',
            ),
            952 => 
            array (
                'id' => 1953,
                'account_id' => 291,
                'code' => 613504,
                'name' => 'MANTENIMIENTO, REPARACION Y LAVADO DE VEHICULOS AUTOMOTORES',
            ),
            953 => 
            array (
                'id' => 1954,
                'account_id' => 291,
                'code' => 613506,
                'name' => 'VENTA DE PARTES, PIEZAS Y ACCESORIOS DE VEHICULOS AUTOMOTORES',
            ),
            954 => 
            array (
                'id' => 1955,
                'account_id' => 291,
                'code' => 613508,
                'name' => 'VENTA DE COMBUSTIBLES SOLIDOS, LIQUIDOS, GASEOSOS',
            ),
            955 => 
            array (
                'id' => 1956,
                'account_id' => 291,
                'code' => 613510,
                'name' => 'VENTA DE LUBRICANTES, ADITIVOS, LLANTAS Y LUJOS PARA AUTOMOTORES',
            ),
            956 => 
            array (
                'id' => 1957,
                'account_id' => 291,
                'code' => 613512,
                'name' => 'VENTA A CAMBIO DE RETRIBUCION O POR CONTRATA',
            ),
            957 => 
            array (
                'id' => 1958,
                'account_id' => 291,
                'code' => 613514,
                'name' => 'VENTA DE INSUMOS, MATERIAS PRIMAS AGROPECUARIAS Y FLORES',
            ),
            958 => 
            array (
                'id' => 1959,
                'account_id' => 291,
                'code' => 613516,
                'name' => 'VENTA DE OTROS INSUMOS Y MATERIAS PRIMAS NO AGROPECUARIAS',
            ),
            959 => 
            array (
                'id' => 1960,
                'account_id' => 291,
                'code' => 613518,
                'name' => 'VENTA DE ANIMALES VIVOS Y CUEROS',
            ),
            960 => 
            array (
                'id' => 1961,
                'account_id' => 291,
                'code' => 613520,
                'name' => 'VENTA DE PRODUCTOS EN ALMACENES NO ESPECIALIZADOS',
            ),
            961 => 
            array (
                'id' => 1962,
                'account_id' => 291,
                'code' => 613522,
                'name' => 'VENTA DE PRODUCTOS AGROPECUARIOS',
            ),
            962 => 
            array (
                'id' => 1963,
                'account_id' => 291,
                'code' => 613524,
                'name' => 'VENTA DE PRODUCTOS TEXTILES, DE VESTIR, DE CUERO Y CALZADO',
            ),
            963 => 
            array (
                'id' => 1964,
                'account_id' => 291,
                'code' => 613526,
                'name' => 'VENTA DE PAPEL Y CARTON',
            ),
            964 => 
            array (
                'id' => 1965,
                'account_id' => 291,
                'code' => 613528,
                'name' => 'VENTA DE LIBROS, REVISTAS, ELEMENTOS DE PAPELERIA, UTILES Y TEXTOS ESCOLARES',
            ),
            965 => 
            array (
                'id' => 1966,
                'account_id' => 291,
                'code' => 613530,
                'name' => 'VENTA DE JUEGOS, JUGUETES Y ARTICULOS DEPORTIVOS',
            ),
            966 => 
            array (
                'id' => 1967,
                'account_id' => 291,
                'code' => 613532,
                'name' => 'VENTA DE INSTRUMENTOS QUIRURGICOS Y ORTOPEDICOS',
            ),
            967 => 
            array (
                'id' => 1968,
                'account_id' => 291,
                'code' => 613534,
                'name' => 'VENTA DE ARTICULOS EN RELOJERIAS Y JOYERIAS',
            ),
            968 => 
            array (
                'id' => 1969,
                'account_id' => 291,
                'code' => 613536,
                'name' => 'VENTA DE ELECTRODOMESTICOS Y MUEBLES',
            ),
            969 => 
            array (
                'id' => 1970,
                'account_id' => 291,
                'code' => 613538,
                'name' => 'VENTA DE PRODUCTOS DE ASEO, FARMACEUTICOS, MEDICINALES, Y ARTICULOS DE TOCADOR',
            ),
            970 => 
            array (
                'id' => 1971,
                'account_id' => 291,
                'code' => 613540,
                'name' => 'VENTA DE CUBIERTOS, VAJILLAS, CRISTALERIA, PORCELANAS, CERAMICAS Y OTROS ARTICULOS DE USO DOMESTICO',
            ),
            971 => 
            array (
                'id' => 1972,
                'account_id' => 291,
                'code' => 613542,
                'name' => 'VENTA DE MATERIALES DE CONSTRUCCION, FONTANERIA Y CALEFACCION',
            ),
            972 => 
            array (
                'id' => 1973,
                'account_id' => 291,
                'code' => 613544,
                'name' => 'VENTA DE PINTURAS Y LACAS',
            ),
            973 => 
            array (
                'id' => 1974,
                'account_id' => 291,
                'code' => 613546,
                'name' => 'VENTA DE PRODUCTOS DE VIDRIOS Y MARQUETERIA',
            ),
            974 => 
            array (
                'id' => 1975,
                'account_id' => 291,
                'code' => 613548,
                'name' => 'VENTA DE HERRAMIENTAS Y ARTICULOS DE FERRETERIA',
            ),
            975 => 
            array (
                'id' => 1976,
                'account_id' => 291,
                'code' => 613550,
                'name' => 'VENTA DE QUIMICOS',
            ),
            976 => 
            array (
                'id' => 1977,
                'account_id' => 291,
                'code' => 613552,
                'name' => 'VENTA DE PRODUCTOS INTERMEDIOS, DESPERDICIOS Y DESECHOS',
            ),
            977 => 
            array (
                'id' => 1978,
                'account_id' => 291,
                'code' => 613554,
                'name' => 'VENTA DE MAQUINARIA, EQUIPO DE OFICINA Y PROGRAMAS DE COMPUTADOR',
            ),
            978 => 
            array (
                'id' => 1979,
                'account_id' => 291,
                'code' => 613556,
                'name' => 'VENTA DE ARTICULOS EN CACHARRERIAS Y MISCELANEAS',
            ),
            979 => 
            array (
                'id' => 1980,
                'account_id' => 291,
                'code' => 613558,
                'name' => 'VENTA DE INSTRUMENTOS MUSICALES',
            ),
            980 => 
            array (
                'id' => 1981,
                'account_id' => 291,
                'code' => 613560,
                'name' => 'VENTA DE ARTICULOS EN CASAS DE EMPEÑO Y PRENDERIAS',
            ),
            981 => 
            array (
                'id' => 1982,
                'account_id' => 291,
                'code' => 613562,
                'name' => 'VENTA DE EQUIPO FOTOGRAFICO',
            ),
            982 => 
            array (
                'id' => 1983,
                'account_id' => 291,
                'code' => 613564,
                'name' => 'VENTA DE EQUIPO OPTICO Y DE PRECISION',
            ),
            983 => 
            array (
                'id' => 1984,
                'account_id' => 291,
                'code' => 613566,
                'name' => 'VENTA DE EMPAQUES',
            ),
            984 => 
            array (
                'id' => 1985,
                'account_id' => 291,
                'code' => 613568,
                'name' => 'VENTA DE EQUIPO PROFESIONAL Y CIENTIFICO',
            ),
            985 => 
            array (
                'id' => 1986,
                'account_id' => 291,
                'code' => 613570,
                'name' => 'VENTA DE LOTERIAS, RIFAS, CHANCE, APUESTAS Y SIMILARES',
            ),
            986 => 
            array (
                'id' => 1987,
                'account_id' => 291,
                'code' => 613572,
                'name' => 'REPARACION DE EFECTOS PERSONALES Y ELECTRODOMESTICOS',
            ),
            987 => 
            array (
                'id' => 1988,
                'account_id' => 291,
                'code' => 613595,
                'name' => 'VENTA DE OTROS PRODUCTOS',
            ),
            988 => 
            array (
                'id' => 1989,
                'account_id' => 291,
                'code' => 613599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            989 => 
            array (
                'id' => 1990,
                'account_id' => 292,
                'code' => 614005,
                'name' => 'HOTELERIA',
            ),
            990 => 
            array (
                'id' => 1991,
                'account_id' => 292,
                'code' => 614010,
                'name' => 'CAMPAMENTO Y OTROS TIPOS DE HOSPEDAJE',
            ),
            991 => 
            array (
                'id' => 1992,
                'account_id' => 292,
                'code' => 614015,
                'name' => 'RESTAURANTES',
            ),
            992 => 
            array (
                'id' => 1993,
                'account_id' => 292,
                'code' => 614020,
                'name' => 'BARES Y CANTINAS',
            ),
            993 => 
            array (
                'id' => 1994,
                'account_id' => 292,
                'code' => 614095,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            994 => 
            array (
                'id' => 1995,
                'account_id' => 292,
                'code' => 614099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            995 => 
            array (
                'id' => 1996,
                'account_id' => 293,
                'code' => 614505,
                'name' => 'SERVICIO DE TRANSPORTE POR CARRETERA',
            ),
            996 => 
            array (
                'id' => 1997,
                'account_id' => 293,
                'code' => 614510,
                'name' => 'SERVICIO DE TRANSPORTE POR VIA FERREA',
            ),
            997 => 
            array (
                'id' => 1998,
                'account_id' => 293,
                'code' => 614515,
                'name' => 'SERVICIO DE TRANSPORTE POR VIA ACUATICA',
            ),
            998 => 
            array (
                'id' => 1999,
                'account_id' => 293,
                'code' => 614520,
                'name' => 'SERVICIO DE TRANSPORTE POR VIA AEREA',
            ),
            999 => 
            array (
                'id' => 2000,
                'account_id' => 293,
                'code' => 614525,
                'name' => 'SERVICIO DE TRANSPORTE POR TUBERIAS',
            ),
        ));
        \DB::table('subaccounts')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'account_id' => 293,
                'code' => 614530,
                'name' => 'MANIPULACION DE CARGA',
            ),
            1 => 
            array (
                'id' => 2002,
                'account_id' => 293,
                'code' => 614535,
                'name' => 'ALMACENAMIENTO Y DEPOSITO',
            ),
            2 => 
            array (
                'id' => 2003,
                'account_id' => 293,
                'code' => 614540,
                'name' => 'SERVICIOS COMPLEMENTARIOS PARA EL TRANSPORTE',
            ),
            3 => 
            array (
                'id' => 2004,
                'account_id' => 293,
                'code' => 614545,
                'name' => 'AGENCIAS DE VIAJE',
            ),
            4 => 
            array (
                'id' => 2005,
                'account_id' => 293,
                'code' => 614550,
                'name' => 'OTRAS AGENCIAS DE TRANSPORTE',
            ),
            5 => 
            array (
                'id' => 2006,
                'account_id' => 293,
                'code' => 614555,
                'name' => 'SERVICIO POSTAL Y DE CORREO',
            ),
            6 => 
            array (
                'id' => 2007,
                'account_id' => 293,
                'code' => 614560,
                'name' => 'SERVICIO TELEFONICO',
            ),
            7 => 
            array (
                'id' => 2008,
                'account_id' => 293,
                'code' => 614565,
                'name' => 'SERVICIO DE TELEGRAFO',
            ),
            8 => 
            array (
                'id' => 2009,
                'account_id' => 293,
                'code' => 614570,
                'name' => 'SERVICIO DE TRANSMISION DE DATOS',
            ),
            9 => 
            array (
                'id' => 2010,
                'account_id' => 293,
                'code' => 614575,
                'name' => 'SERVICIO DE RADIO Y TELEVISION POR CABLE',
            ),
            10 => 
            array (
                'id' => 2011,
                'account_id' => 293,
                'code' => 614580,
                'name' => 'TRANSMISION DE SONIDO E IMAGENES POR CONTRATO',
            ),
            11 => 
            array (
                'id' => 2012,
                'account_id' => 293,
                'code' => 614595,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            12 => 
            array (
                'id' => 2013,
                'account_id' => 293,
                'code' => 614599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            13 => 
            array (
                'id' => 2014,
                'account_id' => 294,
                'code' => 615005,
                'name' => 'DE INVERSIONES',
            ),
            14 => 
            array (
                'id' => 2015,
                'account_id' => 294,
                'code' => 615010,
                'name' => 'DE SERVICIO DE BOLSA',
            ),
            15 => 
            array (
                'id' => 2016,
                'account_id' => 294,
                'code' => 615099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            16 => 
            array (
                'id' => 2017,
                'account_id' => 295,
                'code' => 615505,
                'name' => 'ARRENDAMIENTOS DE BIENES INMUEBLES',
            ),
            17 => 
            array (
                'id' => 2018,
                'account_id' => 295,
                'code' => 615510,
                'name' => 'INMOBILIARIAS POR RETRIBUCION O CONTRATA',
            ),
            18 => 
            array (
                'id' => 2019,
                'account_id' => 295,
                'code' => 615515,
                'name' => 'ALQUILER EQUIPO DE TRANSPORTE',
            ),
            19 => 
            array (
                'id' => 2020,
                'account_id' => 295,
                'code' => 615520,
                'name' => 'ALQUILER MAQUINARIA Y EQUIPO',
            ),
            20 => 
            array (
                'id' => 2021,
                'account_id' => 295,
                'code' => 615525,
                'name' => 'ALQUILER DE EFECTOS PERSONALES Y ENSERES DOMESTICOS',
            ),
            21 => 
            array (
                'id' => 2022,
                'account_id' => 295,
                'code' => 615530,
                'name' => 'CONSULTORIA EN EQUIPO Y PROGRAMAS DE INFORMATICA',
            ),
            22 => 
            array (
                'id' => 2023,
                'account_id' => 295,
                'code' => 615535,
                'name' => 'PROCESAMIENTO DE DATOS',
            ),
            23 => 
            array (
                'id' => 2024,
                'account_id' => 295,
                'code' => 615540,
                'name' => 'MANTENIMIENTO Y REPARACION DE MAQUINARIA DE OFICINA',
            ),
            24 => 
            array (
                'id' => 2025,
                'account_id' => 295,
                'code' => 615545,
                'name' => 'INVESTIGACIONES CIENTIFICAS Y DE DESARROLLO',
            ),
            25 => 
            array (
                'id' => 2026,
                'account_id' => 295,
                'code' => 615550,
                'name' => 'ACTIVIDADES EMPRESARIALES DE CONSULTORIA',
            ),
            26 => 
            array (
                'id' => 2027,
                'account_id' => 295,
                'code' => 615555,
                'name' => 'PUBLICIDAD',
            ),
            27 => 
            array (
                'id' => 2028,
                'account_id' => 295,
                'code' => 615560,
                'name' => 'DOTACION DE PERSONAL',
            ),
            28 => 
            array (
                'id' => 2029,
                'account_id' => 295,
                'code' => 615565,
                'name' => 'INVESTIGACION Y SEGURIDAD',
            ),
            29 => 
            array (
                'id' => 2030,
                'account_id' => 295,
                'code' => 615570,
                'name' => 'LIMPIEZA DE INMUEBLES',
            ),
            30 => 
            array (
                'id' => 2031,
                'account_id' => 295,
                'code' => 615575,
                'name' => 'FOTOGRAFIA',
            ),
            31 => 
            array (
                'id' => 2032,
                'account_id' => 295,
                'code' => 615580,
                'name' => 'ENVASE Y EMPAQUE',
            ),
            32 => 
            array (
                'id' => 2033,
                'account_id' => 295,
                'code' => 615585,
                'name' => 'FOTOCOPIADO',
            ),
            33 => 
            array (
                'id' => 2034,
                'account_id' => 295,
                'code' => 615590,
                'name' => 'MANTENIMIENTO Y REPARACION DE MAQUINARIA Y EQUIPO',
            ),
            34 => 
            array (
                'id' => 2035,
                'account_id' => 295,
                'code' => 615595,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            35 => 
            array (
                'id' => 2036,
                'account_id' => 295,
                'code' => 615599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            36 => 
            array (
                'id' => 2037,
                'account_id' => 296,
                'code' => 616005,
                'name' => 'ACTIVIDADES RELACIONADAS CON LA EDUCACION',
            ),
            37 => 
            array (
                'id' => 2038,
                'account_id' => 296,
                'code' => 616099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            38 => 
            array (
                'id' => 2039,
                'account_id' => 297,
                'code' => 616505,
                'name' => 'SERVICIO HOSPITALARIO',
            ),
            39 => 
            array (
                'id' => 2040,
                'account_id' => 297,
                'code' => 616510,
                'name' => 'SERVICIO MEDICO',
            ),
            40 => 
            array (
                'id' => 2041,
                'account_id' => 297,
                'code' => 616515,
                'name' => 'SERVICIO ODONTOLOGICO',
            ),
            41 => 
            array (
                'id' => 2042,
                'account_id' => 297,
                'code' => 616520,
                'name' => 'SERVICIO DE LABORATORIO',
            ),
            42 => 
            array (
                'id' => 2043,
                'account_id' => 297,
                'code' => 616525,
                'name' => 'ACTIVIDADES VETERINARIAS',
            ),
            43 => 
            array (
                'id' => 2044,
                'account_id' => 297,
                'code' => 616530,
                'name' => 'ACTIVIDADES DE SERVICIOS SOCIALES',
            ),
            44 => 
            array (
                'id' => 2045,
                'account_id' => 297,
                'code' => 616595,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            45 => 
            array (
                'id' => 2046,
                'account_id' => 297,
                'code' => 616599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            46 => 
            array (
                'id' => 2047,
                'account_id' => 298,
                'code' => 617005,
                'name' => 'ELIMINACION DE DESPERDICIOS Y AGUAS RESIDUALES',
            ),
            47 => 
            array (
                'id' => 2048,
                'account_id' => 298,
                'code' => 617010,
                'name' => 'ACTIVIDADES DE ASOCIACION',
            ),
            48 => 
            array (
                'id' => 2049,
                'account_id' => 298,
                'code' => 617015,
                'name' => 'PRODUCCION Y DISTRIBUCION DE FILMES Y VIDEOCINTAS',
            ),
            49 => 
            array (
                'id' => 2050,
                'account_id' => 298,
                'code' => 617020,
                'name' => 'EXHIBICION DE FILMES Y VIDEOCINTAS',
            ),
            50 => 
            array (
                'id' => 2051,
                'account_id' => 298,
                'code' => 617025,
                'name' => 'ACTIVIDAD DE RADIO Y TELEVISION',
            ),
            51 => 
            array (
                'id' => 2052,
                'account_id' => 298,
                'code' => 617030,
                'name' => 'ACTIVIDAD TEATRAL, MUSICAL Y ARTISTICA',
            ),
            52 => 
            array (
                'id' => 2053,
                'account_id' => 298,
                'code' => 617035,
                'name' => 'GRABACION Y PRODUCCION DE DISCOS',
            ),
            53 => 
            array (
                'id' => 2054,
                'account_id' => 298,
                'code' => 617040,
                'name' => 'ENTRETENIMIENTO Y ESPARCIMIENTO',
            ),
            54 => 
            array (
                'id' => 2055,
                'account_id' => 298,
                'code' => 617045,
                'name' => 'AGENCIAS DE NOTICIAS',
            ),
            55 => 
            array (
                'id' => 2056,
                'account_id' => 298,
                'code' => 617050,
                'name' => 'LAVANDERIAS Y SIMILARES',
            ),
            56 => 
            array (
                'id' => 2057,
                'account_id' => 298,
                'code' => 617055,
                'name' => 'PELUQUERIAS Y SIMILARES',
            ),
            57 => 
            array (
                'id' => 2058,
                'account_id' => 298,
                'code' => 617060,
                'name' => 'SERVICIOS FUNERARIOS',
            ),
            58 => 
            array (
                'id' => 2059,
                'account_id' => 298,
                'code' => 617065,
                'name' => 'ZONAS FRANCAS',
            ),
            59 => 
            array (
                'id' => 2060,
                'account_id' => 298,
                'code' => 617095,
                'name' => 'ACTIVIDADES CONEXAS',
            ),
            60 => 
            array (
                'id' => 2061,
                'account_id' => 298,
                'code' => 617099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            61 => 
            array (
                'id' => 2062,
                'account_id' => 299,
                'code' => 620501,
                'name' => '???',
            ),
            62 => 
            array (
                'id' => 2063,
                'account_id' => 299,
                'code' => 620599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            63 => 
            array (
                'id' => 2064,
                'account_id' => 300,
                'code' => 621001,
                'name' => '???',
            ),
            64 => 
            array (
                'id' => 2065,
                'account_id' => 300,
                'code' => 621099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            65 => 
            array (
                'id' => 2066,
                'account_id' => 301,
                'code' => 621501,
                'name' => '???',
            ),
            66 => 
            array (
                'id' => 2067,
                'account_id' => 301,
                'code' => 621599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            67 => 
            array (
                'id' => 2068,
                'account_id' => 302,
                'code' => 622001,
                'name' => '???',
            ),
            68 => 
            array (
                'id' => 2069,
                'account_id' => 302,
                'code' => 622099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            69 => 
            array (
                'id' => 2070,
                'account_id' => 303,
                'code' => 622501,
                'name' => '???',
            ),
            70 => 
            array (
                'id' => 2071,
                'account_id' => 303,
                'code' => 622599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            71 => 
            array (
                'id' => 2072,
                'account_id' => 304,
                'code' => 710101,
                'name' => '???',
            ),
            72 => 
            array (
                'id' => 2073,
                'account_id' => 305,
                'code' => 720101,
                'name' => '???',
            ),
            73 => 
            array (
                'id' => 2074,
                'account_id' => 306,
                'code' => 730101,
                'name' => '???',
            ),
            74 => 
            array (
                'id' => 2075,
                'account_id' => 307,
                'code' => 740101,
                'name' => '???',
            ),
            75 => 
            array (
                'id' => 2076,
                'account_id' => 308,
                'code' => 810505,
                'name' => 'VALORES MOBILIARIOS',
            ),
            76 => 
            array (
                'id' => 2077,
                'account_id' => 308,
                'code' => 810510,
                'name' => 'BIENES MUEBLES',
            ),
            77 => 
            array (
                'id' => 2078,
                'account_id' => 308,
                'code' => 810599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            78 => 
            array (
                'id' => 2079,
                'account_id' => 309,
                'code' => 811005,
                'name' => 'VALORES MOBILIARIOS',
            ),
            79 => 
            array (
                'id' => 2080,
                'account_id' => 309,
                'code' => 811010,
                'name' => 'BIENES MUEBLES',
            ),
            80 => 
            array (
                'id' => 2081,
                'account_id' => 309,
                'code' => 811015,
                'name' => 'BIENES INMUEBLES',
            ),
            81 => 
            array (
                'id' => 2082,
                'account_id' => 309,
                'code' => 811020,
                'name' => 'CONTRATOS DE GANADO EN PARTICIPACION',
            ),
            82 => 
            array (
                'id' => 2083,
                'account_id' => 309,
                'code' => 811099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            83 => 
            array (
                'id' => 2084,
                'account_id' => 310,
                'code' => 811505,
                'name' => 'EN ARRENDAMIENTO',
            ),
            84 => 
            array (
                'id' => 2085,
                'account_id' => 310,
                'code' => 811510,
                'name' => 'EN PRESTAMO',
            ),
            85 => 
            array (
                'id' => 2086,
                'account_id' => 310,
                'code' => 811515,
                'name' => 'EN DEPOSITO',
            ),
            86 => 
            array (
                'id' => 2087,
                'account_id' => 310,
                'code' => 811520,
                'name' => 'EN CONSIGNACION',
            ),
            87 => 
            array (
                'id' => 2088,
                'account_id' => 310,
                'code' => 811599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            88 => 
            array (
                'id' => 2089,
                'account_id' => 311,
                'code' => 812005,
                'name' => 'EJECUTIVOS',
            ),
            89 => 
            array (
                'id' => 2090,
                'account_id' => 311,
                'code' => 812010,
                'name' => 'INCUMPLIMIENTO DE CONTRATOS',
            ),
            90 => 
            array (
                'id' => 2091,
                'account_id' => 312,
                'code' => 812501,
                'name' => '???',
            ),
            91 => 
            array (
                'id' => 2092,
                'account_id' => 313,
                'code' => 819505,
                'name' => 'VALORES ADQUIRIDOS POR RECIBIR',
            ),
            92 => 
            array (
                'id' => 2093,
                'account_id' => 313,
                'code' => 819595,
                'name' => 'OTRAS',
            ),
            93 => 
            array (
                'id' => 2094,
                'account_id' => 313,
                'code' => 819599,
                'name' => 'AJUSTES POR INFLACION.',
            ),
            94 => 
            array (
                'id' => 2095,
                'account_id' => 314,
                'code' => 820101,
                'name' => '???',
            ),
            95 => 
            array (
                'id' => 2096,
                'account_id' => 315,
                'code' => 830505,
                'name' => 'BIENES MUEBLES',
            ),
            96 => 
            array (
                'id' => 2097,
                'account_id' => 315,
                'code' => 830510,
                'name' => 'BIENES INMUEBLES',
            ),
            97 => 
            array (
                'id' => 2098,
                'account_id' => 315,
                'code' => 830599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            98 => 
            array (
                'id' => 2099,
                'account_id' => 316,
                'code' => 831005,
                'name' => 'ACCIONES',
            ),
            99 => 
            array (
                'id' => 2100,
                'account_id' => 316,
                'code' => 831010,
                'name' => 'BONOS',
            ),
            100 => 
            array (
                'id' => 2101,
                'account_id' => 316,
                'code' => 831095,
                'name' => 'OTROS',
            ),
            101 => 
            array (
                'id' => 2102,
                'account_id' => 317,
                'code' => 831506,
                'name' => 'MATERIALES PROYECTOS PETROLEROS',
            ),
            102 => 
            array (
                'id' => 2103,
                'account_id' => 317,
                'code' => 831516,
                'name' => 'CONSTRUCCIONES Y EDIFICACIONES',
            ),
            103 => 
            array (
                'id' => 2104,
                'account_id' => 317,
                'code' => 831520,
                'name' => 'MAQUINARIA Y EQUIPO',
            ),
            104 => 
            array (
                'id' => 2105,
                'account_id' => 317,
                'code' => 831524,
                'name' => 'EQUIPO DE OFICINA',
            ),
            105 => 
            array (
                'id' => 2106,
                'account_id' => 317,
                'code' => 831528,
                'name' => 'EQUIPO DE COMPUTACION Y COMUNICACION',
            ),
            106 => 
            array (
                'id' => 2107,
                'account_id' => 317,
                'code' => 831532,
                'name' => 'EQUIPO MEDICO - CIENTIFICO',
            ),
            107 => 
            array (
                'id' => 2108,
                'account_id' => 317,
                'code' => 831536,
                'name' => 'EQUIPO DE HOTELES Y RESTAURANTES',
            ),
            108 => 
            array (
                'id' => 2109,
                'account_id' => 317,
                'code' => 831540,
                'name' => 'FLOTA Y EQUIPO DE TRANSPORTE',
            ),
            109 => 
            array (
                'id' => 2110,
                'account_id' => 317,
                'code' => 831544,
                'name' => 'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO',
            ),
            110 => 
            array (
                'id' => 2111,
                'account_id' => 317,
                'code' => 831548,
                'name' => 'FLOTA Y EQUIPO AEREO',
            ),
            111 => 
            array (
                'id' => 2112,
                'account_id' => 317,
                'code' => 831552,
                'name' => 'FLOTA Y EQUIPO FERREO',
            ),
            112 => 
            array (
                'id' => 2113,
                'account_id' => 317,
                'code' => 831556,
                'name' => 'ACUEDUCTOS, PLANTAS Y REDES',
            ),
            113 => 
            array (
                'id' => 2114,
                'account_id' => 317,
                'code' => 831560,
                'name' => 'ARMAMENTO DE VIGILANCIA',
            ),
            114 => 
            array (
                'id' => 2115,
                'account_id' => 317,
                'code' => 831562,
                'name' => 'ENVASES Y EMPAQUES',
            ),
            115 => 
            array (
                'id' => 2116,
                'account_id' => 317,
                'code' => 831564,
                'name' => 'PLANTACIONES AGRICOLAS Y FORESTALES',
            ),
            116 => 
            array (
                'id' => 2117,
                'account_id' => 317,
                'code' => 831568,
                'name' => 'VIAS DE COMUNICACION',
            ),
            117 => 
            array (
                'id' => 2118,
                'account_id' => 317,
                'code' => 831572,
                'name' => 'MINAS Y CANTERAS',
            ),
            118 => 
            array (
                'id' => 2119,
                'account_id' => 317,
                'code' => 831576,
                'name' => 'POZOS ARTESIANOS',
            ),
            119 => 
            array (
                'id' => 2120,
                'account_id' => 317,
                'code' => 831580,
                'name' => 'YACIMIENTOS',
            ),
            120 => 
            array (
                'id' => 2121,
                'account_id' => 317,
                'code' => 831584,
                'name' => 'SEMOVIENTES',
            ),
            121 => 
            array (
                'id' => 2122,
                'account_id' => 317,
                'code' => 831599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            122 => 
            array (
                'id' => 2123,
                'account_id' => 318,
                'code' => 832005,
                'name' => 'PAIS',
            ),
            123 => 
            array (
                'id' => 2124,
                'account_id' => 318,
                'code' => 832010,
                'name' => 'EXTERIOR',
            ),
            124 => 
            array (
                'id' => 2125,
                'account_id' => 319,
                'code' => 832505,
                'name' => 'INVERSIONES',
            ),
            125 => 
            array (
                'id' => 2126,
                'account_id' => 319,
                'code' => 832510,
                'name' => 'DEUDORES',
            ),
            126 => 
            array (
                'id' => 2127,
                'account_id' => 319,
                'code' => 832595,
                'name' => 'OTROS ACTIVOS',
            ),
            127 => 
            array (
                'id' => 2128,
                'account_id' => 320,
                'code' => 833005,
                'name' => 'BONOS',
            ),
            128 => 
            array (
                'id' => 2129,
                'account_id' => 320,
                'code' => 833095,
                'name' => 'OTROS',
            ),
            129 => 
            array (
                'id' => 2130,
                'account_id' => 321,
                'code' => 833501,
                'name' => '???',
            ),
            130 => 
            array (
                'id' => 2131,
                'account_id' => 322,
                'code' => 839505,
                'name' => 'CHEQUES POSTFECHADOS',
            ),
            131 => 
            array (
                'id' => 2132,
                'account_id' => 322,
                'code' => 839510,
                'name' => 'CERTIFICADOS DE DEPOSITO A TERMINO',
            ),
            132 => 
            array (
                'id' => 2133,
                'account_id' => 322,
                'code' => 839515,
                'name' => 'CHEQUES DEVUELTOS',
            ),
            133 => 
            array (
                'id' => 2134,
                'account_id' => 322,
                'code' => 839520,
                'name' => 'BIENES Y VALORES EN FIDEICOMISO',
            ),
            134 => 
            array (
                'id' => 2135,
                'account_id' => 322,
                'code' => 839525,
                'name' => 'INTERESES SOBRE DEUDAS VENCIDAS',
            ),
            135 => 
            array (
                'id' => 2136,
                'account_id' => 322,
                'code' => 839595,
                'name' => 'DIVERSAS',
            ),
            136 => 
            array (
                'id' => 2137,
                'account_id' => 322,
                'code' => 839599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            137 => 
            array (
                'id' => 2138,
                'account_id' => 323,
                'code' => 839905,
                'name' => 'INVERSIONES',
            ),
            138 => 
            array (
                'id' => 2139,
                'account_id' => 323,
                'code' => 839910,
                'name' => 'INVENTARIOS',
            ),
            139 => 
            array (
                'id' => 2140,
                'account_id' => 323,
                'code' => 839915,
                'name' => 'PROPIEDADES PLANTA Y EQUIPO',
            ),
            140 => 
            array (
                'id' => 2141,
                'account_id' => 323,
                'code' => 839920,
                'name' => 'INTANGIBLES',
            ),
            141 => 
            array (
                'id' => 2142,
                'account_id' => 323,
                'code' => 839925,
                'name' => 'CARGOS DIFERIDOS',
            ),
            142 => 
            array (
                'id' => 2143,
                'account_id' => 323,
                'code' => 839995,
                'name' => 'OTROS ACTIVOS',
            ),
            143 => 
            array (
                'id' => 2144,
                'account_id' => 324,
                'code' => 840101,
                'name' => '???',
            ),
            144 => 
            array (
                'id' => 2145,
                'account_id' => 325,
                'code' => 850101,
                'name' => '???',
            ),
            145 => 
            array (
                'id' => 2146,
                'account_id' => 326,
                'code' => 860101,
                'name' => '???',
            ),
            146 => 
            array (
                'id' => 2147,
                'account_id' => 327,
                'code' => 910505,
                'name' => 'VALORES MOBILIARIOS',
            ),
            147 => 
            array (
                'id' => 2148,
                'account_id' => 327,
                'code' => 910510,
                'name' => 'BIENES MUEBLES',
            ),
            148 => 
            array (
                'id' => 2149,
                'account_id' => 327,
                'code' => 910599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            149 => 
            array (
                'id' => 2150,
                'account_id' => 328,
                'code' => 911005,
                'name' => 'VALORES MOBILIARIOS',
            ),
            150 => 
            array (
                'id' => 2151,
                'account_id' => 328,
                'code' => 911010,
                'name' => 'BIENES MUEBLES',
            ),
            151 => 
            array (
                'id' => 2152,
                'account_id' => 328,
                'code' => 911015,
                'name' => 'BIENES INMUEBLES',
            ),
            152 => 
            array (
                'id' => 2153,
                'account_id' => 328,
                'code' => 911020,
                'name' => 'CONTRATOS DE GANADO EN PARTICIPACION',
            ),
            153 => 
            array (
                'id' => 2154,
                'account_id' => 328,
                'code' => 911099,
                'name' => 'AJUSTES POR INFLACION',
            ),
            154 => 
            array (
                'id' => 2155,
                'account_id' => 329,
                'code' => 911505,
                'name' => 'EN ARRENDAMIENTO',
            ),
            155 => 
            array (
                'id' => 2156,
                'account_id' => 329,
                'code' => 911510,
                'name' => 'EN PRESTAMO',
            ),
            156 => 
            array (
                'id' => 2157,
                'account_id' => 329,
                'code' => 911515,
                'name' => 'EN DEPOSITO',
            ),
            157 => 
            array (
                'id' => 2158,
                'account_id' => 329,
                'code' => 911520,
                'name' => 'EN CONSIGNACION',
            ),
            158 => 
            array (
                'id' => 2159,
                'account_id' => 329,
                'code' => 911525,
                'name' => 'EN COMODATO',
            ),
            159 => 
            array (
                'id' => 2160,
                'account_id' => 329,
                'code' => 911599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            160 => 
            array (
                'id' => 2161,
                'account_id' => 330,
                'code' => 912005,
                'name' => 'LABORALES',
            ),
            161 => 
            array (
                'id' => 2162,
                'account_id' => 330,
                'code' => 912010,
                'name' => 'CIVILES',
            ),
            162 => 
            array (
                'id' => 2163,
                'account_id' => 330,
                'code' => 912015,
                'name' => 'ADMINISTRATIVOS O ARBITRALES',
            ),
            163 => 
            array (
                'id' => 2164,
                'account_id' => 330,
                'code' => 912020,
                'name' => 'TRIBUTARIOS',
            ),
            164 => 
            array (
                'id' => 2165,
                'account_id' => 331,
                'code' => 912501,
                'name' => '???',
            ),
            165 => 
            array (
                'id' => 2166,
                'account_id' => 332,
                'code' => 913001,
                'name' => '???',
            ),
            166 => 
            array (
                'id' => 2167,
                'account_id' => 333,
                'code' => 913501,
                'name' => '???',
            ),
            167 => 
            array (
                'id' => 2168,
                'account_id' => 334,
                'code' => 919501,
                'name' => '???',
            ),
            168 => 
            array (
                'id' => 2169,
                'account_id' => 335,
                'code' => 920101,
                'name' => '???',
            ),
            169 => 
            array (
                'id' => 2170,
                'account_id' => 336,
                'code' => 930505,
                'name' => 'BIENES MUEBLES',
            ),
            170 => 
            array (
                'id' => 2171,
                'account_id' => 336,
                'code' => 930510,
                'name' => 'BIENES INMUEBLES',
            ),
            171 => 
            array (
                'id' => 2172,
                'account_id' => 337,
                'code' => 939505,
                'name' => 'DOCUMENTOS POR COBRAR DESCONTADOS',
            ),
            172 => 
            array (
                'id' => 2173,
                'account_id' => 337,
                'code' => 939510,
                'name' => 'CONVENIOS DE PAGO',
            ),
            173 => 
            array (
                'id' => 2174,
                'account_id' => 337,
                'code' => 939515,
                'name' => 'CONTRATOS DE CONSTRUCCIONES E INSTALACIONES POR EJECUTAR',
            ),
            174 => 
            array (
                'id' => 2175,
                'account_id' => 337,
                'code' => 939520,
                'name' => 'PEDIDOS COLOCADOS',
            ),
            175 => 
            array (
                'id' => 2176,
                'account_id' => 337,
                'code' => 939525,
                'name' => 'ADJUDICACIONES PENDIENTES DE LEGALIZAR',
            ),
            176 => 
            array (
                'id' => 2177,
                'account_id' => 337,
                'code' => 939530,
                'name' => 'RESERVA ARTICULO 3o. LEY 4/80',
            ),
            177 => 
            array (
                'id' => 2178,
                'account_id' => 337,
                'code' => 939535,
                'name' => 'RESERVA COSTO REPOSICION SEMOVIENTES',
            ),
            178 => 
            array (
                'id' => 2179,
                'account_id' => 337,
                'code' => 939599,
                'name' => 'AJUSTES POR INFLACION',
            ),
            179 => 
            array (
                'id' => 2180,
                'account_id' => 338,
                'code' => 939905,
                'name' => 'CAPITAL SOCIAL',
            ),
            180 => 
            array (
                'id' => 2181,
                'account_id' => 338,
                'code' => 939910,
                'name' => 'SUPERAVIT DE CAPITAL',
            ),
            181 => 
            array (
                'id' => 2182,
                'account_id' => 338,
                'code' => 939915,
                'name' => 'RESERVAS',
            ),
            182 => 
            array (
                'id' => 2183,
                'account_id' => 338,
                'code' => 939925,
                'name' => 'DIVIDENDOS O PARTICIPACIONES DECRETADAS EN ACCIONES, CUOTAS O PARTES DE INTERES SOCIAL',
            ),
            183 => 
            array (
                'id' => 2184,
                'account_id' => 338,
                'code' => 939930,
                'name' => 'RESULTADOS DE EJERCICIOS ANTERIORES',
            ),
            184 => 
            array (
                'id' => 2185,
                'account_id' => 339,
                'code' => 940101,
                'name' => '???',
            ),
            185 => 
            array (
                'id' => 2186,
                'account_id' => 340,
                'code' => 950101,
                'name' => '???',
            ),
            186 => 
            array (
                'id' => 2187,
                'account_id' => 341,
                'code' => 960101,
                'name' => '???',
            ),
        ));
        
        
    }
}