<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('accounts')->delete();

        \DB::table('accounts')->insert(array (
            0 =>
            array(
                'id' => 1,
                'account_group_id' => 1,
                'code' => 1105,
                'name' =>
                'CAJA'
            ),
            1 =>
            array(
                'id' => 2,
                'account_group_id' => 1,
                'code' => 1110,
                'name' =>
                'BANCOS'
            ),
            2 =>
            array(
                'id' => 3,
                'account_group_id' => 1,
                'code' => 1115,
                'name' =>
                'REMESAS EN TRANSITO'
            ),
            3 =>
            array(
                'id' => 4,
                'account_group_id' => 1,
                'code' => 1120,
                'name' =>
                'CUENTAS DE AHORRO'
            ),
            4 =>
            array(
                'id' => 5,
                'account_group_id' => 1,
                'code' => 1125,
                'name' =>
                'FONDOS'
            ),
            5 =>
            array(
                'id' => 6,
                'account_group_id' => 2,
                'code' => 1205,
                'name' =>
                'ACCIONES'
            ),
            6 =>
            array(
                'id' => 7,
                'account_group_id' => 2,
                'code' => 1210,
                'name' =>
                'CUOTAS O PARTES DE INTERES SOCIAL'
            ),
            7 =>
            array(
                'id' => 8,
                'account_group_id' => 2,
                'code' => 1215,
                'name' =>
                'BONOS'
            ),
            8 =>
            array(
                'id' => 9,
                'account_group_id' => 2,
                'code' => 1220,
                'name' =>
                'CEDULAS'
            ),
            9 =>
            array(
                'id' => 10,
                'account_group_id' => 2,
                'code' => 1225,
                'name' =>
                'CERTIFICADOS'
            ),
            10 =>
            array(
                'id' => 11,
                'account_group_id' => 2,
                'code' => 1230,
                'name' =>
                'PAPELES COMERCIALES'
            ),
            11 =>
            array(
                'id' => 12,
                'account_group_id' => 2,
                'code' => 1235,
                'name' =>
                'TITULOS'
            ),
            12 =>
            array(
                'id' => 13,
                'account_group_id' => 2,
                'code' => 1240,
                'name' =>
                'ACEPTACIONES BANCARIAS O FINANCIERAS'
            ),
            13 =>
            array(
                'id' => 14,
                'account_group_id' => 2,
                'code' => 1245,
                'name' =>
                'DERECHOS FIDUCIARIOS'
            ),
            14 =>
            array(
                'id' => 15,
                'account_group_id' => 2,
                'code' => 1250,
                'name' =>
                'DERECHOS DE RECOMPRA DE INVERSIONES NEGOCIADAS (REPOS)'
            ),
            15 =>
            array(
                'id' => 16,
                'account_group_id' => 2,
                'code' => 1255,
                'name' =>
                'OBLIGATORIAS'
            ),
            16 =>
            array(
                'id' => 17,
                'account_group_id' => 2,
                'code' => 1260,
                'name' =>
                'CUENTAS EN PARTICIPACION'
            ),
            17 =>
            array(
                'id' => 18,
                'account_group_id' => 2,
                'code' => 1295,
                'name' =>
                'OTRAS INVERSIONES'
            ),
            18 =>
            array(
                'id' => 19,
                'account_group_id' => 2,
                'code' => 1299,
                'name' =>
                'PROVISIONES'
            ),
            19 =>
            array(
                'id' => 20,
                'account_group_id' => 3,
                'code' => 1305,
                'name' =>
                'CLIENTES'
            ),
            20 =>
            array(
                'id' => 21,
                'account_group_id' => 3,
                'code' => 1310,
                'name' =>
                'CUENTAS CORRIENTES COMERCIALES'
            ),
            21 =>
            array(
                'id' => 22,
                'account_group_id' => 3,
                'code' => 1315,
                'name' =>
                'CUENTAS POR COBRAR A CASA MATRIZ'
            ),
            22 =>
            array(
                'id' => 23,
                'account_group_id' => 3,
                'code' => 1320,
                'name' =>
                'CUENTAS POR COBRAR A VINCULADOS ECONOMICOS'
            ),
            23 =>
            array(
                'id' => 24,
                'account_group_id' => 3,
                'code' => 1323,
                'name' =>
                'CUENTAS POR COBRAR A DIRECTORES'
            ),
            24 =>
            array(
                'id' => 25,
                'account_group_id' => 3,
                'code' => 1325,
                'name' =>
                'CUENTAS POR COBRAR A SOCIOS Y ACCIONISTAS'
            ),
            25 =>
            array(
                'id' => 26,
                'account_group_id' => 3,
                'code' => 1328,
                'name' =>
                'APORTES POR COBRAR'
            ),
            26 =>
            array(
                'id' => 27,
                'account_group_id' => 3,
                'code' => 1330,
                'name' =>
                'ANTICIPOS Y AVANCES'
            ),
            27 =>
            array(
                'id' => 28,
                'account_group_id' => 3,
                'code' => 1332,
                'name' =>
                'CUENTAS DE OPERACION CONJUNTA'
            ),
            28 =>
            array(
                'id' => 29,
                'account_group_id' => 3,
                'code' => 1335,
                'name' =>
                'DEPOSITOS'
            ),
            29 =>
            array(
                'id' => 30,
                'account_group_id' => 3,
                'code' => 1340,
                'name' =>
                'PROMESAS DE COMPRA VENTA'
            ),
            30 =>
            array(
                'id' => 31,
                'account_group_id' => 3,
                'code' => 1345,
                'name' =>
                'INGRESOS POR COBRAR'
            ),
            31 =>
            array(
                'id' => 32,
                'account_group_id' => 3,
                'code' => 1350,
                'name' =>
                'RETENCION SOBRE CONTRATOS'
            ),
            32 =>
            array(
                'id' => 33,
                'account_group_id' => 3,
                'code' => 1355,
                'name' =>
                'ANTICIPO DE IMPUESTOS Y CONTRIBUCIONES O SALDOS A FAVOR'
            ),
            33 =>
            array(
                'id' => 34,
                'account_group_id' => 3,
                'code' => 1360,
                'name' =>
                'RECLAMACIONES'
            ),
            34 =>
            array(
                'id' => 35,
                'account_group_id' => 3,
                'code' => 1365,
                'name' =>
                'CUENTAS POR COBRAR A TRABAJADORES'
            ),
            35 =>
            array(
                'id' => 36,
                'account_group_id' => 3,
                'code' => 1370,
                'name' =>
                'PRESTAMOS A PARTICULARES'
            ),
            36 =>
            array(
                'id' => 37,
                'account_group_id' => 3,
                'code' => 1380,
                'name' =>
                'DEUDORES VARIOS'
            ),
            37 =>
            array(
                'id' => 38,
                'account_group_id' => 3,
                'code' => 1385,
                'name' =>
                'DERECHOS DE RECOMPRA DE CARTERA NEGOCIADA'
            ),
            38 =>
            array(
                'id' => 39,
                'account_group_id' => 3,
                'code' => 1390,
                'name' =>
                'DEUDAS DE DIFICIL COBRO'
            ),
            39 =>
            array(
                'id' => 40,
                'account_group_id' => 3,
                'code' => 1399,
                'name' =>
                'PROVISIONES'
            ),
            40 =>
            array(
                'id' => 41,
                'account_group_id' => 4,
                'code' => 1405,
                'name' =>
                'MATERIAS PRIMAS'
            ),
            41 =>
            array(
                'id' => 42,
                'account_group_id' => 4,
                'code' => 1410,
                'name' =>
                'PRODUCTOS EN PROCESO'
            ),
            42 =>
            array(
                'id' => 43,
                'account_group_id' => 4,
                'code' => 1415,
                'name' =>
                'OBRAS DE CONSTRUCCION EN CURSO'
            ),
            43 =>
            array(
                'id' => 44,
                'account_group_id' => 4,
                'code' => 1417,
                'name' =>
                'OBRAS DE URBANISMO'
            ),
            44 =>
            array(
                'id' => 45,
                'account_group_id' => 4,
                'code' => 1420,
                'name' =>
                'CONTRATOS EN EJECUCION'
            ),
            45 =>
            array(
                'id' => 46,
                'account_group_id' => 4,
                'code' => 1425,
                'name' =>
                'CULTIVOS EN DESARROLLO'
            ),
            46 =>
            array(
                'id' => 47,
                'account_group_id' => 4,
                'code' => 1430,
                'name' =>
                'PRODUCTOS TERMINADOS'
            ),
            47 =>
            array(
                'id' => 48,
                'account_group_id' => 4,
                'code' => 1435,
                'name' =>
                'MERCANCIAS NO FABRICADAS POR LA EMPRESA'
            ),
            48 =>
            array(
                'id' => 49,
                'account_group_id' => 4,
                'code' => 1440,
                'name' =>
                'BIENES RAICES PARA LA VENTA'
            ),
            49 =>
            array(
                'id' => 50,
                'account_group_id' => 4,
                'code' => 1445,
                'name' =>
                'SEMOVIENTES'
            ),
            50 =>
            array(
                'id' => 51,
                'account_group_id' => 4,
                'code' => 1450,
                'name' =>
                'TERRENOS'
            ),
            51 =>
            array(
                'id' => 52,
                'account_group_id' => 4,
                'code' => 1455,
                'name' =>
                'MATERIALES, REPUESTOS Y ACCESORIOS'
            ),
            52 =>
            array(
                'id' => 53,
                'account_group_id' => 4,
                'code' => 1460,
                'name' =>
                'ENVASES Y EMPAQUES'
            ),
            53 =>
            array(
                'id' => 54,
                'account_group_id' => 4,
                'code' => 1465,
                'name' =>
                'INVENTARIOS EN TRANSITO'
            ),
            54 =>
            array(
                'id' => 55,
                'account_group_id' => 4,
                'code' => 1499,
                'name' =>
                'PROVISIONES'
            ),
            55 =>
            array(
                'id' => 56,
                'account_group_id' => 5,
                'code' => 1504,
                'name' =>
                'TERRENOS'
            ),
            56 =>
            array(
                'id' => 57,
                'account_group_id' => 5,
                'code' => 1506,
                'name' =>
                'MATERIALES PROYECTOS PETROLEROS'
            ),
            57 =>
            array(
                'id' => 58,
                'account_group_id' => 5,
                'code' => 1508,
                'name' =>
                'CONSTRUCCIONES EN CURSO'
            ),
            58 =>
            array(
                'id' => 59,
                'account_group_id' => 5,
                'code' => 1512,
                'name' =>
                'MAQUINARIA Y EQUIPOS EN MONTAJE'
            ),
            59 =>
            array(
                'id' => 60,
                'account_group_id' => 5,
                'code' => 1516,
                'name' =>
                'CONSTRUCCIONES Y EDIFICACIONES'
            ),
            60 =>
            array(
                'id' => 61,
                'account_group_id' => 5,
                'code' => 1520,
                'name' =>
                'MAQUINARIA Y EQUIPO'
            ),
            61 =>
            array(
                'id' => 62,
                'account_group_id' => 5,
                'code' => 1524,
                'name' =>
                'EQUIPO DE OFICINA'
            ),
            62 =>
            array(
                'id' => 63,
                'account_group_id' => 5,
                'code' => 1528,
                'name' =>
                'EQUIPO DE COMPUTACION Y COMUNICACION'
            ),
            63 =>
            array(
                'id' => 64,
                'account_group_id' => 5,
                'code' => 1532,
                'name' =>
                'EQUIPO MEDICO - CIENTIFICO'
            ),
            64 =>
            array(
                'id' => 65,
                'account_group_id' => 5,
                'code' => 1536,
                'name' =>
                'EQUIPO DE HOTELES Y RESTAURANTES'
            ),
            65 =>
            array(
                'id' => 66,
                'account_group_id' => 5,
                'code' => 1540,
                'name' =>
                'FLOTA Y EQUIPO DE TRANSPORTE'
            ),
            66 =>
            array(
                'id' => 67,
                'account_group_id' => 5,
                'code' => 1544,
                'name' =>
                'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ),
            67 =>
            array(
                'id' => 68,
                'account_group_id' => 5,
                'code' => 1548,
                'name' =>
                'FLOTA Y EQUIPO AEREO'
            ),
            68 =>
            array(
                'id' => 69,
                'account_group_id' => 5,
                'code' => 1552,
                'name' =>
                'FLOTA Y EQUIPO FERREO'
            ),
            69 =>
            array(
                'id' => 70,
                'account_group_id' => 5,
                'code' => 1556,
                'name' =>
                'ACUEDUCTOS PLANTAS Y REDES'
            ),
            70 =>
            array(
                'id' => 71,
                'account_group_id' => 5,
                'code' => 1560,
                'name' =>
                'ARMAMENTO DE VIGILANCIA'
            ),
            71 =>
            array(
                'id' => 72,
                'account_group_id' => 5,
                'code' => 1562,
                'name' =>
                'ENVASES Y EMPAQUES'
            ),
            72 =>
            array(
                'id' => 73,
                'account_group_id' => 5,
                'code' => 1564,
                'name' =>
                'PLANTACIONES AGRICOLAS Y FORESTALES'
            ),
            73 =>
            array(
                'id' => 74,
                'account_group_id' => 5,
                'code' => 1568,
                'name' =>
                'VIAS DE COMUNICACION'
            ),
            74 =>
            array(
                'id' => 75,
                'account_group_id' => 5,
                'code' => 1572,
                'name' =>
                'MINAS Y CANTERAS'
            ),
            75 =>
            array(
                'id' => 76,
                'account_group_id' => 5,
                'code' => 1576,
                'name' =>
                'POZOS ARTESIANOS'
            ),
            76 =>
            array(
                'id' => 77,
                'account_group_id' => 5,
                'code' => 1580,
                'name' =>
                'YACIMIENTOS'
            ),
            77 =>
            array(
                'id' => 78,
                'account_group_id' => 5,
                'code' => 1584,
                'name' =>
                'SEMOVIENTES'
            ),
            78 =>
            array(
                'id' => 79,
                'account_group_id' => 5,
                'code' => 1588,
                'name' =>
                'PROPIEDADES PLANTA Y EQUIPO EN TRANSITO'
            ),
            79 =>
            array(
                'id' => 80,
                'account_group_id' => 5,
                'code' => 1592,
                'name' =>
                'DEPRECIACION ACUMULADA'
            ),
            80 =>
            array(
                'id' => 81,
                'account_group_id' => 5,
                'code' => 1596,
                'name' =>
                'DEPRECIACION DIFERIDA'
            ),
            81 =>
            array(
                'id' => 82,
                'account_group_id' => 5,
                'code' => 1597,
                'name' =>
                'AMORTIZACION ACUMULADA'
            ),
            82 =>
            array(
                'id' => 83,
                'account_group_id' => 5,
                'code' => 1598,
                'name' =>
                'AGOTAMIENTO ACUMULADO'
            ),
            83 =>
            array(
                'id' => 84,
                'account_group_id' => 5,
                'code' => 1599,
                'name' =>
                'PROVISIONES'
            ),
            84 =>
            array(
                'id' => 85,
                'account_group_id' => 6,
                'code' => 1605,
                'name' =>
                'CREDITO MERCANTIL'
            ),
            85 =>
            array(
                'id' => 86,
                'account_group_id' => 6,
                'code' => 1610,
                'name' =>
                'MARCAS'
            ),
            86 =>
            array(
                'id' => 87,
                'account_group_id' => 6,
                'code' => 1615,
                'name' =>
                'PATENTES'
            ),
            87 =>
            array(
                'id' => 88,
                'account_group_id' => 6,
                'code' => 1620,
                'name' =>
                'CONCESIONES Y FRANQUICIAS'
            ),
            88 =>
            array(
                'id' => 89,
                'account_group_id' => 6,
                'code' => 1625,
                'name' =>
                'DERECHOS'
            ),
            89 =>
            array(
                'id' => 90,
                'account_group_id' => 6,
                'code' => 1630,
                'name' =>
                'KNOW HOW'
            ),
            90 =>
            array(
                'id' => 91,
                'account_group_id' => 6,
                'code' => 1635,
                'name' =>
                'LICENCIAS'
            ),
            91 =>
            array(
                'id' => 92,
                'account_group_id' => 6,
                'code' => 1698,
                'name' =>
                'DEPRECIACION Y/O AMORTIZACION ACUMULADA'
            ),
            92 =>
            array(
                'id' => 93,
                'account_group_id' => 6,
                'code' => 1699,
                'name' =>
                'PROVISIONES'
            ),
            93 =>
            array(
                'id' => 94,
                'account_group_id' => 7,
                'code' => 1705,
                'name' =>
                'GASTOS PAGADOS POR ANTICIPADO'
            ),
            94 =>
            array(
                'id' => 95,
                'account_group_id' => 7,
                'code' => 1710,
                'name' =>
                'CARGOS DIFERIDOS'
            ),
            95 =>
            array(
                'id' => 96,
                'account_group_id' => 7,
                'code' => 1715,
                'name' =>
                'COSTOS DE EXPLORACION POR AMORTIZAR'
            ),
            96 =>
            array(
                'id' => 97,
                'account_group_id' => 7,
                'code' => 1720,
                'name' =>
                'COSTOS DE EXPLOTACION Y DESARROLLO'
            ),
            97 =>
            array(
                'id' => 98,
                'account_group_id' => 7,
                'code' => 1730,
                'name' =>
                'CARGOS POR CORRECCION MONETARIA DIFERIDA'
            ),
            98 =>
            array(
                'id' => 99,
                'account_group_id' => 7,
                'code' => 1798,
                'name' =>
                'AMORTIZACION ACUMULADA'
            ),
            99 =>
            array(
                'id' => 100,
                'account_group_id' => 8,
                'code' => 1805,
                'name' =>
                'BIENES DE ARTE Y CULTURA'
            ),
            100 =>
            array(
                'id' => 101,
                'account_group_id' => 8,
                'code' => 1895,
                'name' =>
                'DIVERSOS'
            ),
            101 =>
            array(
                'id' => 102,
                'account_group_id' => 8,
                'code' => 1899,
                'name' =>
                'PROVISIONES'
            ),
            102 =>
            array(
                'id' => 103,
                'account_group_id' => 9,
                'code' => 1905,
                'name' =>
                'DE INVERSIONES'
            ),
            103 =>
            array(
                'id' => 104,
                'account_group_id' => 9,
                'code' => 1910,
                'name' =>
                'DE PROPIEDADES PLANTA Y EQUIPO'
            ),
            104 =>
            array(
                'id' => 105,
                'account_group_id' => 9,
                'code' => 1995,
                'name' =>
                'DE OTROS ACTIVOS'
            ),
            105 =>
            array(
                'id' => 106,
                'account_group_id' => 10,
                'code' => 2105,
                'name' =>
                'BANCOS NACIONALES'
            ),
            106 =>
            array(
                'id' => 107,
                'account_group_id' => 10,
                'code' => 2110,
                'name' =>
                'BANCOS DEL EXTERIOR'
            ),
            107 =>
            array(
                'id' => 108,
                'account_group_id' => 10,
                'code' => 2115,
                'name' =>
                'CORPORACIONES FINANCIERAS'
            ),
            108 =>
            array(
                'id' => 109,
                'account_group_id' => 10,
                'code' => 2120,
                'name' =>
                'COMPAÑIAS DE FINANCIAMIENTO COMERCIAL'
            ),
            109 =>
            array(
                'id' => 110,
                'account_group_id' => 10,
                'code' => 2125,
                'name' =>
                'CORPORACIONES DE AHORRO Y VIVIENDA'
            ),
            110 =>
            array(
                'id' => 111,
                'account_group_id' => 10,
                'code' => 2130,
                'name' =>
                'ENTIDADES FINANCIERAS DEL EXTERIOR'
            ),
            111 =>
            array(
                'id' => 112,
                'account_group_id' => 10,
                'code' => 2135,
                'name' =>
                'COMPROMISOS DE RECOMPRA DE INVERSIONES NEGOCIADAS'
            ),
            112 =>
            array(
                'id' => 113,
                'account_group_id' => 10,
                'code' => 2140,
                'name' =>
                'COMPROMISOS DE RECOMPRA DE CARTERA NEGOCIADA'
            ),
            113 =>
            array(
                'id' => 114,
                'account_group_id' => 10,
                'code' => 2145,
                'name' =>
                'OBLIGACIONES GUBERNAMENTALES'
            ),
            114 =>
            array(
                'id' => 115,
                'account_group_id' => 10,
                'code' => 2195,
                'name' =>
                'OTRAS OBLIGACIONES'
            ),
            115 =>
            array(
                'id' => 116,
                'account_group_id' => 11,
                'code' => 2205,
                'name' =>
                'NACIONALES'
            ),
            116 =>
            array(
                'id' => 117,
                'account_group_id' => 11,
                'code' => 2210,
                'name' =>
                'DEL EXTERIOR'
            ),
            117 =>
            array(
                'id' => 118,
                'account_group_id' => 11,
                'code' => 2215,
                'name' =>
                'CUENTAS CORRIENTES COMERCIALES'
            ),
            118 =>
            array(
                'id' => 119,
                'account_group_id' => 11,
                'code' => 2220,
                'name' =>
                'CASA MATRIZ'
            ),
            119 =>
            array(
                'id' => 120,
                'account_group_id' => 11,
                'code' => 2225,
                'name' =>
                'COMPAÑIAS VINCULADAS'
            ),
            120 =>
            array(
                'id' => 121,
                'account_group_id' => 12,
                'code' => 2305,
                'name' =>
                'CUENTAS CORRIENTES COMERCIALES'
            ),
            121 =>
            array(
                'id' => 122,
                'account_group_id' => 12,
                'code' => 2310,
                'name' =>
                'A CASA MATRIZ'
            ),
            122 =>
            array(
                'id' => 123,
                'account_group_id' => 12,
                'code' => 2315,
                'name' =>
                'A COMPAÑIAS VINCULADAS'
            ),
            123 =>
            array(
                'id' => 124,
                'account_group_id' => 12,
                'code' => 2320,
                'name' =>
                'A CONTRATISTAS'
            ),
            124 =>
            array(
                'id' => 125,
                'account_group_id' => 12,
                'code' => 2330,
                'name' =>
                'ORDENES DE COMPRA POR UTILIZAR'
            ),
            125 =>
            array(
                'id' => 126,
                'account_group_id' => 12,
                'code' => 2335,
                'name' =>
                'COSTOS Y GASTOS POR  PAGAR'
            ),
            126 =>
            array(
                'id' => 127,
                'account_group_id' => 12,
                'code' => 2340,
                'name' =>
                'INSTALAMENTOS POR PAGAR'
            ),
            127 =>
            array(
                'id' => 128,
                'account_group_id' => 12,
                'code' => 2345,
                'name' =>
                'ACREEDORES OFICIALES'
            ),
            128 =>
            array(
                'id' => 129,
                'account_group_id' => 12,
                'code' => 2350,
                'name' =>
                'REGALIAS POR PAGAR'
            ),
            129 =>
            array(
                'id' => 130,
                'account_group_id' => 12,
                'code' => 2355,
                'name' =>
                'DEUDAS CON ACCIONISTAS O SOCIOS'
            ),
            130 =>
            array(
                'id' => 131,
                'account_group_id' => 12,
                'code' => 2357,
                'name' =>
                'DEUDAS CON DIRECTORES'
            ),
            131 =>
            array(
                'id' => 132,
                'account_group_id' => 12,
                'code' => 2360,
                'name' =>
                'DIVIDENDOS O PARTICIPACIONES POR PAGAR'
            ),
            132 =>
            array(
                'id' => 133,
                'account_group_id' => 12,
                'code' => 2365,
                'name' =>
                'RETENCION EN LA FUENTE'
            ),
            133 =>
            array(
                'id' => 134,
                'account_group_id' => 12,
                'code' => 2367,
                'name' =>
                'IMPUESTO A LAS VENTAS RETENIDO'
            ),
            134 =>
            array(
                'id' => 135,
                'account_group_id' => 12,
                'code' => 2368,
                'name' =>
                'IMPUESTO DE INDUSTRIA Y COMERCIO RETENIDO'
            ),
            135 =>
            array(
                'id' => 136,
                'account_group_id' => 12,
                'code' => 2370,
                'name' =>
                'RETENCIONES Y APORTES DE NOMINA'
            ),
            136 =>
            array(
                'id' => 137,
                'account_group_id' => 12,
                'code' => 2375,
                'name' =>
                'CUOTAS POR DEVOLVER'
            ),
            137 =>
            array(
                'id' => 138,
                'account_group_id' => 12,
                'code' => 2380,
                'name' =>
                'ACREEDORES VARIOS'
            ),
            138 =>
            array(
                'id' => 139,
                'account_group_id' => 13,
                'code' => 2404,
                'name' =>
                'DE RENTA Y COMPLEMENTARIOS'
            ),
            139 =>
            array(
                'id' => 140,
                'account_group_id' => 13,
                'code' => 2408,
                'name' =>
                'IMPUESTO SOBRE LAS VENTAS POR PAGAR'
            ),
            140 =>
            array(
                'id' => 141,
                'account_group_id' => 13,
                'code' => 2412,
                'name' =>
                'DE INDUSTRIA Y COMERCIO'
            ),
            141 =>
            array(
                'id' => 142,
                'account_group_id' => 13,
                'code' => 2416,
                'name' =>
                'A LA PROPIEDAD RAIZ'
            ),
            142 =>
            array(
                'id' => 143,
                'account_group_id' => 13,
                'code' => 2420,
                'name' =>
                'DERECHOS SOBRE INSTRUMENTOS PUBLICOS'
            ),
            143 =>
            array(
                'id' => 144,
                'account_group_id' => 13,
                'code' => 2424,
                'name' =>
                'DE VALORIZACION'
            ),
            144 =>
            array(
                'id' => 145,
                'account_group_id' => 13,
                'code' => 2428,
                'name' =>
                'DE TURISMO'
            ),
            145 =>
            array(
                'id' => 146,
                'account_group_id' => 13,
                'code' => 2432,
                'name' =>
                'TASA POR UTILIZACION DE PUERTOS'
            ),
            146 =>
            array(
                'id' => 147,
                'account_group_id' => 13,
                'code' => 2436,
                'name' =>
                'DE VEHICULOS'
            ),
            147 =>
            array(
                'id' => 148,
                'account_group_id' => 13,
                'code' => 2440,
                'name' =>
                'DE ESPECTACULOS PUBLICOS'
            ),
            148 =>
            array(
                'id' => 149,
                'account_group_id' => 13,
                'code' => 2444,
                'name' =>
                'DE HIDROCARBUROS Y MINAS'
            ),
            149 =>
            array(
                'id' => 150,
                'account_group_id' => 13,
                'code' => 2448,
                'name' =>
                'REGALIAS E IMPUESTOS A LA PEQUEÑA Y MEDIANA MINERIA'
            ),
            150 =>
            array(
                'id' => 151,
                'account_group_id' => 13,
                'code' => 2452,
                'name' =>
                'A LAS EXPORTACIONES CAFETERAS'
            ),
            151 =>
            array(
                'id' => 152,
                'account_group_id' => 13,
                'code' => 2456,
                'name' =>
                'A LAS IMPORTACIONES'
            ),
            152 =>
            array(
                'id' => 153,
                'account_group_id' => 13,
                'code' => 2460,
                'name' =>
                'CUOTAS DE FOMENTO'
            ),
            153 =>
            array(
                'id' => 154,
                'account_group_id' => 13,
                'code' => 2464,
                'name' =>
                'DE LICORES, CERVEZAS Y CIGARRILLOS'
            ),
            154 =>
            array(
                'id' => 155,
                'account_group_id' => 13,
                'code' => 2468,
                'name' =>
                'AL SACRIFICIO DE GANADO'
            ),
            155 =>
            array(
                'id' => 156,
                'account_group_id' => 13,
                'code' => 2472,
                'name' =>
                'AL AZAR Y JUEGOS'
            ),
            156 =>
            array(
                'id' => 157,
                'account_group_id' => 13,
                'code' => 2476,
                'name' =>
                'GRAVAMENES Y REGALIAS POR UTILIZACION DEL SUELO'
            ),
            157 =>
            array(
                'id' => 158,
                'account_group_id' => 13,
                'code' => 2495,
                'name' =>
                'OTROS'
            ),
            158 =>
            array(
                'id' => 159,
                'account_group_id' => 14,
                'code' => 2505,
                'name' =>
                'SALARIOS POR PAGAR'
            ),
            159 =>
            array(
                'id' => 160,
                'account_group_id' => 14,
                'code' => 2510,
                'name' =>
                'CESANTIAS CONSOLIDADAS'
            ),
            160 =>
            array(
                'id' => 161,
                'account_group_id' => 14,
                'code' => 2515,
                'name' =>
                'INTERESES SOBRE CESANTIAS'
            ),
            161 =>
            array(
                'id' => 162,
                'account_group_id' => 14,
                'code' => 2520,
                'name' =>
                'PRIMA DE SERVICIOS'
            ),
            162 =>
            array(
                'id' => 163,
                'account_group_id' => 14,
                'code' => 2525,
                'name' =>
                'VACACIONES CONSOLIDADAS'
            ),
            163 =>
            array(
                'id' => 164,
                'account_group_id' => 14,
                'code' => 2530,
                'name' =>
                'PRESTACIONES EXTRALEGALES'
            ),
            164 =>
            array(
                'id' => 165,
                'account_group_id' => 14,
                'code' => 2532,
                'name' =>
                'PENSIONES POR PAGAR'
            ),
            165 =>
            array(
                'id' => 166,
                'account_group_id' => 14,
                'code' => 2535,
                'name' =>
                'CUOTAS PARTES PENSIONES DE JUBILACION'
            ),
            166 =>
            array(
                'id' => 167,
                'account_group_id' => 14,
                'code' => 2540,
                'name' =>
                'INDEMNIZACIONES LABORALES'
            ),
            167 =>
            array(
                'id' => 168,
                'account_group_id' => 15,
                'code' => 2605,
                'name' =>
                'PARA COSTOS Y GASTOS'
            ),
            168 =>
            array(
                'id' => 169,
                'account_group_id' => 15,
                'code' => 2610,
                'name' =>
                'PARA OBLIGACIONES LABORALES'
            ),
            169 =>
            array(
                'id' => 170,
                'account_group_id' => 15,
                'code' => 2615,
                'name' =>
                'PARA OBLIGACIONES FISCALES'
            ),
            170 =>
            array(
                'id' => 171,
                'account_group_id' => 15,
                'code' => 2620,
                'name' =>
                'PENSIONES DE JUBILACION'
            ),
            171 =>
            array(
                'id' => 172,
                'account_group_id' => 15,
                'code' => 2625,
                'name' =>
                'PARA OBRAS DE URBANISMO'
            ),
            172 =>
            array(
                'id' => 173,
                'account_group_id' => 15,
                'code' => 2630,
                'name' =>
                'PARA MANTENIMIENTO Y REPARACIONES'
            ),
            173 =>
            array(
                'id' => 174,
                'account_group_id' => 15,
                'code' => 2635,
                'name' =>
                'PARA CONTINGENCIAS'
            ),
            174 =>
            array(
                'id' => 175,
                'account_group_id' => 15,
                'code' => 2640,
                'name' =>
                'PARA OBLIGACIONES DE GARANTIAS'
            ),
            175 =>
            array(
                'id' => 176,
                'account_group_id' => 15,
                'code' => 2695,
                'name' =>
                'PROVISIONES DIVERSAS'
            ),
            176 =>
            array(
                'id' => 177,
                'account_group_id' => 16,
                'code' => 2705,
                'name' =>
                'INGRESOS RECIBIDOS POR ANTICIPADO'
            ),
            177 =>
            array(
                'id' => 178,
                'account_group_id' => 16,
                'code' => 2710,
                'name' =>
                'ABONOS DIFERIDOS'
            ),
            178 =>
            array(
                'id' => 179,
                'account_group_id' => 16,
                'code' => 2715,
                'name' =>
                'UTILIDAD DIFERIDA EN VENTAS A PLAZOS'
            ),
            179 =>
            array(
                'id' => 180,
                'account_group_id' => 16,
                'code' => 2720,
                'name' =>
                'CREDITO POR CORRECCION MONETARIA DIFERIDA'
            ),
            180 =>
            array(
                'id' => 181,
                'account_group_id' => 16,
                'code' => 2725,
                'name' =>
                'IMPUESTOS DIFERIDOS'
            ),
            181 =>
            array(
                'id' => 182,
                'account_group_id' => 17,
                'code' => 2805,
                'name' =>
                'ANTICIPOS Y AVANCES RECIBIDOS'
            ),
            182 =>
            array(
                'id' => 183,
                'account_group_id' => 17,
                'code' => 2810,
                'name' =>
                'DEPOSITOS RECIBIDOS'
            ),
            183 =>
            array(
                'id' => 184,
                'account_group_id' => 17,
                'code' => 2815,
                'name' =>
                'INGRESOS RECIBIDOS PARA TERCEROS'
            ),
            184 =>
            array(
                'id' => 185,
                'account_group_id' => 17,
                'code' => 2820,
                'name' =>
                'CUENTAS DE OPERACION CONJUNTA'
            ),
            185 =>
            array(
                'id' => 186,
                'account_group_id' => 17,
                'code' => 2825,
                'name' =>
                'RETENCIONES A TERCEROS SOBRE CONTRATOS'
            ),
            186 =>
            array(
                'id' => 187,
                'account_group_id' => 17,
                'code' => 2830,
                'name' =>
                'EMBARGOS JUDICIALES'
            ),
            187 =>
            array(
                'id' => 188,
                'account_group_id' => 17,
                'code' => 2835,
                'name' =>
                'ACREEDORES DEL SISTEMA'
            ),
            188 =>
            array(
                'id' => 189,
                'account_group_id' => 17,
                'code' => 2840,
                'name' =>
                'CUENTAS EN PARTICIPACION'
            ),
            189 =>
            array(
                'id' => 190,
                'account_group_id' => 17,
                'code' => 2895,
                'name' =>
                'DIVERSOS'
            ),
            190 =>
            array(
                'id' => 191,
                'account_group_id' => 18,
                'code' => 2905,
                'name' =>
                'BONOS EN CIRCULACION'
            ),
            191 =>
            array(
                'id' => 192,
                'account_group_id' => 18,
                'code' => 2910,
                'name' =>
                'BONOS OBLIGATORIAMENTE CONVERTIBLES EN ACCIONES'
            ),
            192 =>
            array(
                'id' => 193,
                'account_group_id' => 18,
                'code' => 2915,
                'name' =>
                'PAPELES COMERCIALES'
            ),
            193 =>
            array(
                'id' => 194,
                'account_group_id' => 18,
                'code' => 2920,
                'name' =>
                'BONOS PENSIONALES'
            ),
            194 =>
            array(
                'id' => 195,
                'account_group_id' => 18,
                'code' => 2925,
                'name' =>
                'TITULOS PENSIONALES'
            ),
            195 =>
            array(
                'id' => 196,
                'account_group_id' => 19,
                'code' => 3105,
                'name' =>
                'CAPITAL SUSCRITO Y PAGADO'
            ),
            196 =>
            array(
                'id' => 197,
                'account_group_id' => 19,
                'code' => 3115,
                'name' =>
                'APORTES SOCIALES'
            ),
            197 =>
            array(
                'id' => 198,
                'account_group_id' => 19,
                'code' => 3120,
                'name' =>
                'CAPITAL ASIGNADO'
            ),
            198 =>
            array(
                'id' => 199,
                'account_group_id' => 19,
                'code' => 3125,
                'name' =>
                'INVERSION SUPLEMENTARIA AL CAPITAL ASIGNADO'
            ),
            199 =>
            array(
                'id' => 200,
                'account_group_id' => 19,
                'code' => 3130,
                'name' =>
                'CAPITAL DE PERSONAS NATURALES'
            ),
            200 =>
            array(
                'id' => 201,
                'account_group_id' => 19,
                'code' => 3135,
                'name' =>
                'APORTES DEL ESTADO'
            ),
            201 =>
            array(
                'id' => 202,
                'account_group_id' => 19,
                'code' => 3140,
                'name' =>
                'FONDO SOCIAL'
            ),
            202 =>
            array(
                'id' => 203,
                'account_group_id' => 20,
                'code' => 3205,
                'name' =>
                'PRIMA EN COLOCACION DE ACCIONES, CUOTAS O PARTES DE INTERES'
            ),
            203 =>
            array(
                'id' => 204,
                'account_group_id' => 20,
                'code' => 3210,
                'name' =>
                'DONACIONES'
            ),
            204 =>
            array(
                'id' => 205,
                'account_group_id' => 20,
                'code' => 3215,
                'name' =>
                'CREDITO MERCANTIL'
            ),
            205 =>
            array(
                'id' => 206,
                'account_group_id' => 20,
                'code' => 3220,
                'name' =>
                'KNOW HOW'
            ),
            206 =>
            array(
                'id' => 207,
                'account_group_id' => 20,
                'code' => 3225,
                'name' =>
                'SUPERAVIT METODO DE PARTICIPACION'
            ),
            207 =>
            array(
                'id' => 208,
                'account_group_id' => 21,
                'code' => 3305,
                'name' =>
                'RESERVAS OBLIGATORIAS'
            ),
            208 =>
            array(
                'id' => 209,
                'account_group_id' => 21,
                'code' => 3310,
                'name' =>
                'RESERVAS ESTATUTARIAS'
            ),
            209 =>
            array(
                'id' => 210,
                'account_group_id' => 21,
                'code' => 3315,
                'name' =>
                'RESERVAS OCASIONALES'
            ),
            210 =>
            array(
                'id' => 211,
                'account_group_id' => 22,
                'code' => 3405,
                'name' =>
                'AJUSTES POR INFLACION'
            ),
            211 =>
            array(
                'id' => 212,
                'account_group_id' => 22,
                'code' => 3410,
                'name' =>
                'SANEAMIENTO FISCAL'
            ),
            212 =>
            array(
                'id' => 213,
                'account_group_id' => 22,
                'code' => 3415,
                'name' =>
                'AJUSTES POR INFLACION DECRETO 3019 DE 1989'
            ),
            213 =>
            array(
                'id' => 214,
                'account_group_id' => 23,
                'code' => 3505,
                'name' =>
                'DIVIDENDOS DECRETADOS EN ACCIONES'
            ),
            214 =>
            array(
                'id' => 215,
                'account_group_id' => 23,
                'code' => 3510,
                'name' =>
                'PARTICIPACIONES DECRETADAS EN CUOTAS O PARTES DE INTERES SOCIAL'
            ),
            215 =>
            array(
                'id' => 216,
                'account_group_id' => 24,
                'code' => 3605,
                'name' =>
                'UTILIDAD DEL EJERCICIO'
            ),
            216 =>
            array(
                'id' => 217,
                'account_group_id' => 24,
                'code' => 3610,
                'name' =>
                'PERDIDA DEL EJERCICIO'
            ),
            217 =>
            array(
                'id' => 218,
                'account_group_id' => 25,
                'code' => 3705,
                'name' =>
                'UTILIDADES ACUMULADOS'
            ),
            218 =>
            array(
                'id' => 219,
                'account_group_id' => 25,
                'code' => 3710,
                'name' =>
                'PERDIDAS ACUMULADAS'
            ),
            219 =>
            array(
                'id' => 220,
                'account_group_id' => 26,
                'code' => 3805,
                'name' =>
                'DE INVERSIONES'
            ),
            220 =>
            array(
                'id' => 221,
                'account_group_id' => 26,
                'code' => 3810,
                'name' =>
                'DE PROPIEDADES PLANTA Y EQUIPO'
            ),
            221 =>
            array(
                'id' => 222,
                'account_group_id' => 26,
                'code' => 3895,
                'name' =>
                'DE OTROS ACTIVOS'
            ),
            222 =>
            array(
                'id' => 223,
                'account_group_id' => 27,
                'code' => 4105,
                'name' =>
                'AGRICULTURA, GANADERIA, CAZA Y SILVICULTURA'
            ),
            223 =>
            array(
                'id' => 224,
                'account_group_id' => 27,
                'code' => 4110,
                'name' =>
                'PESCA'
            ),
            224 =>
            array(
                'id' => 225,
                'account_group_id' => 27,
                'code' => 4115,
                'name' =>
                'EXPLOTACION DE MINAS Y CANTERAS'
            ),
            225 =>
            array(
                'id' => 226,
                'account_group_id' => 27,
                'code' => 4120,
                'name' =>
                'INDUSTRIAS MANUFACTURERAS'
            ),
            226 =>
            array(
                'id' => 227,
                'account_group_id' => 27,
                'code' => 4125,
                'name' =>
                'SUMINISTRO DE ELECTRICIDAD, GAS Y AGUA'
            ),
            227 =>
            array(
                'id' => 228,
                'account_group_id' => 27,
                'code' => 4130,
                'name' =>
                'CONSTRUCCION'
            ),
            228 =>
            array(
                'id' => 229,
                'account_group_id' => 27,
                'code' => 4135,
                'name' =>
                'COMERCIO AL POR MAYOR Y AL POR MENOR'
            ),
            229 =>
            array(
                'id' => 230,
                'account_group_id' => 27,
                'code' => 4140,
                'name' =>
                'HOTELES Y RESTAURANTES'
            ),
            230 =>
            array(
                'id' => 231,
                'account_group_id' => 27,
                'code' => 4145,
                'name' =>
                'TRANSPORTE, ALMACENAMIENTO Y COMUNICACIONES'
            ),
            231 =>
            array(
                'id' => 232,
                'account_group_id' => 27,
                'code' => 4150,
                'name' =>
                'ACTIVIDAD FINANCIERA'
            ),
            232 =>
            array(
                'id' => 233,
                'account_group_id' => 27,
                'code' => 4155,
                'name' =>
                'ACTIVIDADES INMOBILIARIAS, EMPRESARIALES Y DE ALQUILER'
            ),
            233 =>
            array(
                'id' => 234,
                'account_group_id' => 27,
                'code' => 4160,
                'name' =>
                'ENSEÑANZA'
            ),
            234 =>
            array(
                'id' => 235,
                'account_group_id' => 27,
                'code' => 4165,
                'name' =>
                'SERVICIOS SOCIALES Y DE SALUD'
            ),
            235 =>
            array(
                'id' => 236,
                'account_group_id' => 27,
                'code' => 4170,
                'name' =>
                'OTRAS ACTIVIDADES DE SERVICIOS COMUNITARIOS, SOCIALES Y PERSONALES'
            ),
            236 =>
            array(
                'id' => 237,
                'account_group_id' => 27,
                'code' => 4175,
                'name' =>
                'DEVOLUCIONES EN VENTAS (DB)'
            ),
            237 =>
            array(
                'id' => 238,
                'account_group_id' => 28,
                'code' => 4205,
                'name' =>
                'OTRAS VENTAS'
            ),
            238 =>
            array(
                'id' => 239,
                'account_group_id' => 28,
                'code' => 4210,
                'name' =>
                'FINANCIEROS'
            ),
            239 =>
            array(
                'id' => 240,
                'account_group_id' => 28,
                'code' => 4215,
                'name' =>
                'DIVIDENDOS Y PARTICIPACIONES'
            ),
            240 =>
            array(
                'id' => 241,
                'account_group_id' => 28,
                'code' => 4218,
                'name' =>
                'INGRESOS METODO DE PARTICIPACION'
            ),
            241 =>
            array(
                'id' => 242,
                'account_group_id' => 28,
                'code' => 4220,
                'name' =>
                'ARRENDAMIENTOS'
            ),
            242 =>
            array(
                'id' => 243,
                'account_group_id' => 28,
                'code' => 4225,
                'name' =>
                'COMISIONES'
            ),
            243 =>
            array(
                'id' => 244,
                'account_group_id' => 28,
                'code' => 4230,
                'name' =>
                'HONORARIOS'
            ),
            244 =>
            array(
                'id' => 245,
                'account_group_id' => 28,
                'code' => 4235,
                'name' =>
                'SERVICIOS'
            ),
            245 =>
            array(
                'id' => 246,
                'account_group_id' => 28,
                'code' => 4240,
                'name' =>
                'UTILIDAD EN VENTA DE INVERSIONES'
            ),
            246 =>
            array(
                'id' => 247,
                'account_group_id' => 28,
                'code' => 4245,
                'name' =>
                'UTILIDAD EN VENTA DE PROPIEDADES PLANTA Y EQUIPO'
            ),
            247 =>
            array(
                'id' => 248,
                'account_group_id' => 28,
                'code' => 4248,
                'name' =>
                'UTILIDAD EN VENTA DE OTROS BIENES'
            ),
            248 =>
            array(
                'id' => 249,
                'account_group_id' => 28,
                'code' => 4250,
                'name' =>
                'RECUPERACIONES'
            ),
            249 =>
            array(
                'id' => 250,
                'account_group_id' => 28,
                'code' => 4255,
                'name' =>
                'INDEMNIZACIONES'
            ),
            250 =>
            array(
                'id' => 251,
                'account_group_id' => 28,
                'code' => 4260,
                'name' =>
                'PARTICIPACIONES EN CONCESIONES'
            ),
            251 =>
            array(
                'id' => 252,
                'account_group_id' => 28,
                'code' => 4265,
                'name' =>
                'INGRESOS DE EJERCICIOS ANTERIORES'
            ),
            252 =>
            array(
                'id' => 253,
                'account_group_id' => 28,
                'code' => 4275,
                'name' =>
                'DEVOLUCIONES EN OTRAS VENTAS (DB)'
            ),
            253 =>
            array(
                'id' => 254,
                'account_group_id' => 28,
                'code' => 4295,
                'name' =>
                'DIVERSOS'
            ),
            254 =>
            array(
                'id' => 255,
                'account_group_id' => 29,
                'code' => 4705,
                'name' =>
                'CORRECCION MONETARIA'
            ),
            255 =>
            array(
                'id' => 256,
                'account_group_id' => 30,
                'code' => 5105,
                'name' =>
                'GASTOS DE PERSONAL'
            ),
            256 =>
            array(
                'id' => 257,
                'account_group_id' => 30,
                'code' => 5110,
                'name' =>
                'HONORARIOS'
            ),
            257 =>
            array(
                'id' => 258,
                'account_group_id' => 30,
                'code' => 5115,
                'name' =>
                'IMPUESTOS'
            ),
            258 =>
            array(
                'id' => 259,
                'account_group_id' => 30,
                'code' => 5120,
                'name' =>
                'ARRENDAMIENTOS'
            ),
            259 =>
            array(
                'id' => 260,
                'account_group_id' => 30,
                'code' => 5125,
                'name' =>
                'CONTRIBUCIONES Y AFILIACIONES'
            ),
            260 =>
            array(
                'id' => 261,
                'account_group_id' => 30,
                'code' => 5130,
                'name' =>
                'SEGUROS'
            ),
            261 =>
            array(
                'id' => 262,
                'account_group_id' => 30,
                'code' => 5135,
                'name' =>
                'SERVICIOS'
            ),
            262 =>
            array(
                'id' => 263,
                'account_group_id' => 30,
                'code' => 5140,
                'name' =>
                'GASTOS LEGALES'
            ),
            263 =>
            array(
                'id' => 264,
                'account_group_id' => 30,
                'code' => 5145,
                'name' =>
                'MANTENIMIENTO Y REPARACIONES'
            ),
            264 =>
            array(
                'id' => 265,
                'account_group_id' => 30,
                'code' => 5150,
                'name' =>
                'ADECUACION E INSTALACION'
            ),
            265 =>
            array(
                'id' => 266,
                'account_group_id' => 30,
                'code' => 5155,
                'name' =>
                'GASTOS DE VIAJE'
            ),
            266 =>
            array(
                'id' => 267,
                'account_group_id' => 30,
                'code' => 5160,
                'name' =>
                'DEPRECIACIONES'
            ),
            267 =>
            array(
                'id' => 268,
                'account_group_id' => 30,
                'code' => 5165,
                'name' =>
                'AMORTIZACIONES'
            ),
            268 =>
            array(
                'id' => 269,
                'account_group_id' => 30,
                'code' => 5195,
                'name' =>
                'DIVERSOS'
            ),
            269 =>
            array(
                'id' => 270,
                'account_group_id' => 30,
                'code' => 5199,
                'name' =>
                'PROVISIONES'
            ),
            270 =>
            array(
                'id' => 271,
                'account_group_id' => 31,
                'code' => 5205,
                'name' =>
                'GASTOS DE PERSONAL'
            ),
            271 =>
            array(
                'id' => 272,
                'account_group_id' => 31,
                'code' => 5210,
                'name' =>
                'HONORARIOS'
            ),
            272 =>
            array(
                'id' => 273,
                'account_group_id' => 31,
                'code' => 5215,
                'name' =>
                'IMPUESTOS'
            ),
            273 =>
            array(
                'id' => 274,
                'account_group_id' => 31,
                'code' => 5220,
                'name' =>
                'ARRENDAMIENTOS'
            ),
            274 =>
            array(
                'id' => 275,
                'account_group_id' => 31,
                'code' => 5225,
                'name' =>
                'CONTRIBUCIONES Y AFILIACIONES'
            ),
            275 =>
            array(
                'id' => 276,
                'account_group_id' => 31,
                'code' => 5230,
                'name' =>
                'SEGUROS'
            ),
            276 =>
            array(
                'id' => 277,
                'account_group_id' => 31,
                'code' => 5235,
                'name' =>
                'SERVICIOS'
            ),
            277 =>
            array(
                'id' => 278,
                'account_group_id' => 31,
                'code' => 5240,
                'name' =>
                'GASTOS LEGALES'
            ),
            278 =>
            array(
                'id' => 279,
                'account_group_id' => 31,
                'code' => 5245,
                'name' =>
                'MANTENIMIENTO Y REPARACIONES'
            ),
            279 =>
            array(
                'id' => 280,
                'account_group_id' => 31,
                'code' => 5250,
                'name' =>
                'ADECUACION E INSTALACION'
            ),
            280 =>
            array(
                'id' => 281,
                'account_group_id' => 31,
                'code' => 5255,
                'name' =>
                'GASTOS DE VIAJE'
            ),
            281 =>
            array(
                'id' => 282,
                'account_group_id' => 31,
                'code' => 5260,
                'name' =>
                'DEPRECIACIONES'
            ),
            282 =>
            array(
                'id' => 283,
                'account_group_id' => 31,
                'code' => 5265,
                'name' =>
                'AMORTIZACIONES'
            ),
            283 =>
            array(
                'id' => 284,
                'account_group_id' => 31,
                'code' => 5270,
                'name' =>
                'FINANCIEROS - REAJUSTE DEL SISTEMA'
            ),
            284 =>
            array(
                'id' => 285,
                'account_group_id' => 31,
                'code' => 5275,
                'name' =>
                'PERDIDAS METODO DE PARTICIPACION'
            ),
            285 =>
            array(
                'id' => 286,
                'account_group_id' => 31,
                'code' => 5295,
                'name' =>
                'DIVERSOS'
            ),
            286 =>
            array(
                'id' => 287,
                'account_group_id' => 31,
                'code' => 5299,
                'name' =>
                'PROVISIONES'
            ),
            287 =>
            array(
                'id' => 288,
                'account_group_id' => 32,
                'code' => 5305,
                'name' =>
                'FINANCIEROS'
            ),
            288 =>
            array(
                'id' => 289,
                'account_group_id' => 32,
                'code' => 5310,
                'name' =>
                'PERDIDA EN VENTA Y RETIRO DE BIENES'
            ),
            289 =>
            array(
                'id' => 290,
                'account_group_id' => 32,
                'code' => 5313,
                'name' =>
                'PERDIDAS METODO DE PARTICIPACION'
            ),
            290 =>
            array(
                'id' => 291,
                'account_group_id' => 32,
                'code' => 5315,
                'name' =>
                'GASTOS EXTRAORDINARIOS'
            ),
            291 =>
            array(
                'id' => 292,
                'account_group_id' => 32,
                'code' => 5395,
                'name' =>
                'GASTOS DIVERSOS'
            ),
            292 =>
            array(
                'id' => 293,
                'account_group_id' => 33,
                'code' => 5405,
                'name' =>
                'IMPUESTO DE RENTA Y COMPLEMENTARIOS'
            ),
            293 =>
            array(
                'id' => 294,
                'account_group_id' => 34,
                'code' => 5905,
                'name' =>
                'GANANCIAS Y PERDIDAS'
            ),
            294 =>
            array(
                'id' => 295,
                'account_group_id' => 35,
                'code' => 6105,
                'name' =>
                'AGRICULTURA, GANADERIA, CAZA Y SILVICULTURA'
            ),
            295 =>
            array(
                'id' => 296,
                'account_group_id' => 35,
                'code' => 6110,
                'name' =>
                'PESCA'
            ),
            296 =>
            array(
                'id' => 297,
                'account_group_id' => 35,
                'code' => 6115,
                'name' =>
                'EXPLOTACION DE MINAS Y CANTERAS'
            ),
            297 =>
            array(
                'id' => 298,
                'account_group_id' => 35,
                'code' => 6120,
                'name' =>
                'INDUSTRIAS MANUFACTURERAS'
            ),
            298 =>
            array(
                'id' => 299,
                'account_group_id' => 35,
                'code' => 6125,
                'name' =>
                'SUMINISTRO DE ELECTRICIDAD, GAS Y AGUA'
            ),
            299 =>
            array(
                'id' => 300,
                'account_group_id' => 35,
                'code' => 6130,
                'name' =>
                'CONSTRUCCION'
            ),
            300 =>
            array(
                'id' => 301,
                'account_group_id' => 35,
                'code' => 6135,
                'name' =>
                'COMERCIO AL POR MAYOR Y AL POR MENOR'
            ),
            301 =>
            array(
                'id' => 302,
                'account_group_id' => 35,
                'code' => 6140,
                'name' =>
                'HOTELES Y RESTAURANTES'
            ),
            302 =>
            array(
                'id' => 303,
                'account_group_id' => 35,
                'code' => 6145,
                'name' =>
                'TRANSPORTE, ALMACENAMIENTO Y COMUNICACIONES'
            ),
            303 =>
            array(
                'id' => 304,
                'account_group_id' => 35,
                'code' => 6150,
                'name' =>
                'ACTIVIDAD FINANCIERA'
            ),
            304 =>
            array(
                'id' => 305,
                'account_group_id' => 35,
                'code' => 6155,
                'name' =>
                'ACTIVIDADES INMOBILIARIAS, EMPRESARIALES Y DE ALQUILER'
            ),
            305 =>
            array(
                'id' => 306,
                'account_group_id' => 35,
                'code' => 6160,
                'name' =>
                'ENSEÑANZA'
            ),
            306 =>
            array(
                'id' => 307,
                'account_group_id' => 35,
                'code' => 6165,
                'name' =>
                'SERVICIOS SOCIALES Y DE SALUD'
            ),
            307 =>
            array(
                'id' => 308,
                'account_group_id' => 35,
                'code' => 6170,
                'name' =>
                'OTRAS ACTIVIDADES DE SERVICIOS COMUNITARIOS, SOCIALES Y PERSONALES'
            ),
            308 =>
            array(
                'id' => 309,
                'account_group_id' => 36,
                'code' => 6205,
                'name' =>
                'DE MERCANCIAS'
            ),
            309 =>
            array(
                'id' => 310,
                'account_group_id' => 36,
                'code' => 6210,
                'name' =>
                'DE MATERIAS PRIMAS'
            ),
            310 =>
            array(
                'id' => 311,
                'account_group_id' => 36,
                'code' => 6215,
                'name' =>
                'DE MATERIALES INDIRECTOS'
            ),
            311 =>
            array(
                'id' => 312,
                'account_group_id' => 36,
                'code' => 6220,
                'name' =>
                'COMPRA DE ENERGIA'
            ),
            312 =>
            array(
                'id' => 313,
                'account_group_id' => 36,
                'code' => 6225,
                'name' =>
                'DEVOLUCIONES  EN COMPRAS (CR)'
            ),
            313 =>
            array(
                'id' => 314,
                'account_group_id' => 41,
                'code' => 8105,
                'name' =>
                'BIENES Y VALORES ENTREGADOS EN CUSTODIA'
            ),
            314 =>
            array(
                'id' => 315,
                'account_group_id' => 41,
                'code' => 8110,
                'name' =>
                'BIENES Y VALORES ENTREGADOS EN GARANTIA'
            ),
            315 =>
            array(
                'id' => 316,
                'account_group_id' => 41,
                'code' => 8115,
                'name' =>
                'BIENES Y VALORES EN PODER DE TERCEROS'
            ),
            316 =>
            array(
                'id' => 317,
                'account_group_id' => 41,
                'code' => 8120,
                'name' =>
                'LITIGIOS Y/O DEMANDAS'
            ),
            317 =>
            array(
                'id' => 318,
                'account_group_id' => 41,
                'code' => 8125,
                'name' =>
                'PROMESAS DE COMPRAVENTA'
            ),
            318 =>
            array(
                'id' => 319,
                'account_group_id' => 41,
                'code' => 8195,
                'name' =>
                'DIVERSAS'
            ),
            319 =>
            array(
                'id' => 320,
                'account_group_id' => 43,
                'code' => 8305,
                'name' =>
                'BIENES RECIBIDOS EN ARRENDAMIENTO FINANCIERO'
            ),
            320 =>
            array(
                'id' => 321,
                'account_group_id' => 43,
                'code' => 8310,
                'name' =>
                'TITULOS DE INVERSION NO COLOCADOS'
            ),
            321 =>
            array(
                'id' => 322,
                'account_group_id' => 43,
                'code' => 8315,
                'name' =>
                'PROPIEDADES PLANTA Y EQUIPO TOTALMENTE DEPRECIADOS, AGOTADOS Y/O AMORTIZADOS'
            ),
            322 =>
            array(
                'id' => 323,
                'account_group_id' => 43,
                'code' => 8320,
                'name' =>
                'CREDITOS A FAVOR NO UTILIZADOS'
            ),
            323 =>
            array(
                'id' => 324,
                'account_group_id' => 43,
                'code' => 8325,
                'name' =>
                'ACTIVOS CASTIGADOS'
            ),
            324 =>
            array(
                'id' => 325,
                'account_group_id' => 43,
                'code' => 8330,
                'name' =>
                'TITULOS DE INVERSION AMORTIZADOS'
            ),
            325 =>
            array(
                'id' => 326,
                'account_group_id' => 43,
                'code' => 8335,
                'name' =>
                'CAPITALIZACION POR REVALORIZACION DE PATRIMONIO'
            ),
            326 =>
            array(
                'id' => 327,
                'account_group_id' => 43,
                'code' => 8395,
                'name' =>
                'OTRAS CUENTAS DEUDORAS DE CONTROL'
            ),
            327 =>
            array(
                'id' => 328,
                'account_group_id' => 43,
                'code' => 8399,
                'name' =>
                'AJUSTES POR INFLACION ACTIVOS'
            ),
            328 =>
            array(
                'id' => 329,
                'account_group_id' => 47,
                'code' => 9105,
                'name' =>
                'BIENES Y VALORES RECIBIDOS EN CUSTODIA'
            ),
            329 =>
            array(
                'id' => 330,
                'account_group_id' => 47,
                'code' => 9110,
                'name' =>
                'BIENES Y VALORES RECIBIDOS EN GARANTIA'
            ),
            330 =>
            array(
                'id' => 331,
                'account_group_id' => 47,
                'code' => 9115,
                'name' =>
                'BIENES Y VALORES RECIBIDOS DE TERCEROS'
            ),
            331 =>
            array(
                'id' => 332,
                'account_group_id' => 47,
                'code' => 9120,
                'name' =>
                'LITIGIOS Y/O DEMANDAS'
            ),
            332 =>
            array(
                'id' => 333,
                'account_group_id' => 47,
                'code' => 9125,
                'name' =>
                'PROMESAS DE COMPRAVENTA'
            ),
            333 =>
            array(
                'id' => 334,
                'account_group_id' => 47,
                'code' => 9130,
                'name' =>
                'CONTRATOS DE ADMINISTRACION DELEGADA'
            ),
            334 =>
            array(
                'id' => 335,
                'account_group_id' => 47,
                'code' => 9135,
                'name' =>
                'CUENTAS EN PARTICIPACION'
            ),
            335 =>
            array(
                'id' => 336,
                'account_group_id' => 47,
                'code' => 9195,
                'name' =>
                'OTRAS RESPONSABILIDADES CONTINGENTES'
            ),
            336 =>
            array(
                'id' => 337,
                'account_group_id' => 49,
                'code' => 9305,
                'name' =>
                'CONTRATOS DE ARRENDAMIENTO FINANCIERO'
            ),
            337 =>
            array(
                'id' => 338,
                'account_group_id' => 49,
                'code' => 9395,
                'name' =>
                'OTRAS CUENTAS DE ORDEN ACREEDORAS DE CONTROL'
            ),
            338 =>
            array(
                'id' => 339,
                'account_group_id' => 49,
                'code' => 9399,
                'name' =>
                'AJUSTES POR INFLACION PATRIMONIO'
            ),
        ));
    }
}
