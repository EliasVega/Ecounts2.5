<?php


namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = [
            [
                'account_group_id'	=>	1,
                'code'	=>	1105,
                'name'	=>	'CAJA'
            ],
            [
                'account_group_id'	=>	1,
                'code'	=>	1110,
                'name'	=>	'BANCOS'
            ],
            [
                'account_group_id'	=>	1,
                'code'	=>	1115,
                'name'	=>	'REMESAS EN TRANSITO'
            ],
            [
            'account_group_id'	=>	1,
                'code'	=>	1120,
                'name'	=>	'CUENTAS DE AHORRO'
            ],
            [
                'account_group_id'	=>	1,
                'code'	=>	1125,
                'name'	=>	'FONDOS'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1205,
                'name'	=>	'ACCIONES'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1210,
                'name'	=>	'CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1215,
                'name'	=>	'BONOS'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1220,
                'name'	=>	'CEDULAS'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1225,
                'name'	=>	'CERTIFICADOS'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1230,
                'name'	=>	'PAPELES COMERCIALES'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1235,
                'name'	=>	'TITULOS'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1240,
                'name'	=>	'ACEPTACIONES BANCARIAS O FINANCIERAS'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1245,
                'name'	=>	'DERECHOS FIDUCIARIOS'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1250,
                'name'	=>	'DERECHOS DE RECOMPRA DE INVERSIONES NEGOCIADAS (REPOS)'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1255,
                'name'	=>	'OBLIGATORIAS'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1260,
                'name'	=>	'CUENTAS EN PARTICIPACION'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1295,
                'name'	=>	'OTRAS INVERSIONES'
            ],
            [
                'account_group_id'	=>	2,
                'code'	=>	1299,
                'name'	=>	'PROVISIONES'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1305,
                'name'	=>	'CLIENTES'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1310,
                'name'	=>	'CUENTAS CORRIENTES COMERCIALES'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1315,
                'name'	=>	'CUENTAS POR COBRAR A CASA MATRIZ'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1320,
                'name'	=>	'CUENTAS POR COBRAR A VINCULADOS ECONOMICOS'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1325,
                'name'	=>	'CUENTA S POR COBRAR A SOCIOS Y ACCIONISTAS'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1328,
                'name'	=>	'APORTES POR COBRAR'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1330,
                'name'	=>	'ANTICIPOS Y AVANCES'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1332,
                'name'	=>	'CUENTAS DE OPERACION CONJUNTA'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1335,
                'name'	=>	'DEPOSITOS'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1340,
                'name'	=>	'PROMESAS DE COMPRA VENTA'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1345,
                'name'	=>	'INGRESOS POR COBRAR'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1350,
                'name'	=>	'RETENCION SOBRE CONTRATOS'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1355,
                'name'	=>	'ANTICIPO DE IMPUESTOS Y CONTRIBUCIONES O SALDOS A FAVOR'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1360,
                'name'	=>	'RECLAMACIONES'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1365,
                'name'	=>	'CUENTAS POR COBRAR A TRABAJADORES'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1370,
                'name'	=>	'PRESTAMOS A PARTICULARES'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1380,
                'name'	=>	'DEUDORES VARIOS'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1385,
                'name'	=>	'DERECHOS DE RECOMPRA DE CARTERA NEGOCIADA'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1390,
                'name'	=>	'DEUDAS DE DIFICIL COBRO'
            ],
            [
                'account_group_id'	=>	3,
                'code'	=>	1399,
                'name'	=>	'PROVISIONES'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1405,
                'name'	=>	'MATERIAS PRIMAS'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1410,
                'name'	=>	'PRODUCTOS EN PROCESO'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1415,
                'name'	=>	'OBRAS DE CONSTRUCCION EN CURSO'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1417,
                'name'	=>	'OBRAS DE URBANISMO'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1420,
                'name'	=>	'CONTRATOS EN EJECUCION'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1425,
                'name'	=>	'CULTIVOS EN DESARROLLO'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1430,
                'name'	=>	'PRODUCTOS TERMINADOS'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1435,
                'name'	=>	'MERCANCIAS NO FABRICADAS POR LA EMPRESA'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1440,
                'name'	=>	'BIENES RAICES PARA LA VENTA'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1445,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1450,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1455,
                'name'	=>	'MATERIALES, REPUESTOS Y ACCESORIOS'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1460,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1465,
                'name'	=>	'INVENTARIOS EN TRANSITO'
            ],
            [
                'account_group_id'	=>	4,
                'code'	=>	1499,
                'name'	=>	'PROVISIONES'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1504,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1506,
                'name'	=>	'MATERIALES PROYECTOS PETROLEROS'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1508,
                'name'	=>	'CONSTRUCCIONES EN CURSO'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1512,
                'name'	=>	'MAQUINARIA Y EQUIPOS EN MONTAJE'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1516,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1520,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1524,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1528,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1532,
                'name'	=>	'EQUIPO MEDICO - CIENTIFICO'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1536,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1540,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1544,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1548,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1552,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1556,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1560,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1562,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1564,
                'name'	=>	'PLANTACIONES AGRICOLAS Y FORESTALES'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1568,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1572,
                'name'	=>	'MINAS Y CANTERAS'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1576,
                'name'	=>	'POZOS ARTESIANOS'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1580,
                'name'	=>	'YACIMIENTOS'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1584,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1588,
                'name'	=>	'PROPIEDADES PLANTA Y EQUIPO EN TRANSITO'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1592,
                'name'	=>	'DEPRECIACION ACUMULADA'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1596,
                'name'	=>	'DEPRECIACION DIFERIDA'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1597,
                'name'	=>	'AMORTIZACION ACUMULADA'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1598,
                'name'	=>	'AGOTAMIENTO ACUMULADO'
            ],
            [
                'account_group_id'	=>	5,
                'code'	=>	1599,
                'name'	=>	'PROVISIONES'
            ],
            [
                'account_group_id'	=>	6,
                'code'	=>	1605,
                'name'	=>	'CREDITO MERCANTIL'
            ],
            [
                'account_group_id'	=>	6,
                'code'	=>	1610,
                'name'	=>	'MARCAS'
            ],
            [
                'account_group_id'	=>	6,
                'code'	=>	1615,
                'name'	=>	'PATENTES'
            ],
            [
                'account_group_id'	=>	6,
                'code'	=>	1620,
                'name'	=>	'CONCESIONES Y FRANQUICIAS'
            ],
            [
                'account_group_id'	=>	6,
                'code'	=>	1625,
                'name'	=>	'DERECHOS'
            ],
            [
                'account_group_id'	=>	6,
                'code'	=>	1630,
                'name'	=>	'KNOW HOW'
            ],
            [
                'account_group_id'	=>	6,
                'code'	=>	1635,
                'name'	=>	'LICENCIAS'
            ],
            [
                'account_group_id'	=>	6,
                'code'	=>	1698,
                'name'	=>	'AMORTIZACION ACUMULADA'
            ],
            [
                'account_group_id'	=>	6,
                'code'	=>	1699,
                'name'	=>	'PROVISIONES'
            ],
            [
                'account_group_id'	=>	7,
                'code'	=>	1705,
                'name'	=>	'GASTOS PAGADOS POR ANTICIPADO'
            ],
            [
                'account_group_id'	=>	7,
                'code'	=>	1710,
                'name'	=>	'CARGOS DIFERIDOS'
            ],
            [
                'account_group_id'	=>	7,
                'code'	=>	1715,
                'name'	=>	'COSTOS DE EXPLORACION POR AMORTIZAR'
            ],
            [
                'account_group_id'	=>	7,
                'code'	=>	1720,
                'name'	=>	'COSTOS DE EXPLOTACION Y DESARROLLO'
            ],
            [
                'account_group_id'	=>	7,
                'code'	=>	1730,
                'name'	=>	'CARGOS POR CORRECCION MONETARIA DIFERIDA'
            ],
            [
                'account_group_id'	=>	7,
                'code'	=>	1798,
                'name'	=>	'AMORTIZACION ACUMULADA'
            ],
            [
                'account_group_id'	=>	8,
                'code'	=>	1805,
                'name'	=>	'BIENES DE ARTE Y CULTURA'
            ],
            [
                'account_group_id'	=>	8,
                'code'	=>	1895,
                'name'	=>	'DIVERSOS'
            ],
            [
                'account_group_id'	=>	8,
                'code'	=>	1899,
                'name'	=>	'PROVISIONES'
            ],
            [
                'account_group_id'	=>	9,
                'code'	=>	1905,
                'name'	=>	'DE INVERSIONES'
            ],
            [
                'account_group_id'	=>	9,
                'code'	=>	1910,
                'name'	=>	'DE PROPIEDADES PLANTA Y EQUIPO'
            ],
            [
                'account_group_id'	=>	9,
                'code'	=>	1995,
                'name'	=>	'DE OTROS ACTIVOS'
            ],
            [
                'account_group_id'	=>	10,
                'code'	=>	2105,
                'name'	=>	'BANCOS NACIONALES'
            ],
            [
                'account_group_id'	=>	10,
                'code'	=>	2110,
                'name'	=>	'BANCOS DEL EXTERIOR'
            ],
            [
                'account_group_id'	=>	10,
                'code'	=>	2115,
                'name'	=>	'CORPORACIONES FINANCIERAS'
            ],
            [
                'account_group_id'	=>	10,
                'code'	=>	2120,
                'name'	=>	'COMPAÑIAS DE FINANCIAMIENTO COMERCIAL'
            ],
            [
                'account_group_id'	=>	10,
                'code'	=>	2125,
                'name'	=>	'CORPORACIONES DE AHORRO Y VIVIENDA'
            ],
            [
                'account_group_id'	=>	10,
                'code'	=>	2130,
                'name'	=>	'ENTIDADES FINANCIERAS DEL EXTERIOR'
            ],
            [
                'account_group_id'	=>	10,
                'code'	=>	2135,
                'name'	=>	'COMPROMISOS DE RECOMPRA DE INVERSIONES NEGOCIADAS'
            ],
            [
                'account_group_id'	=>	10,
                'code'	=>	2140,
                'name'	=>	'COMPROMISOS DE RECOMPRA DE CARTERA NEGOCIADA'
            ],
            [
                'account_group_id'	=>	10,
                'code'	=>	2145,
                'name'	=>	'OBLIGACIONES GUBERNAMENTALES'
            ],
            [
                'account_group_id'	=>	10,
                'code'	=>	2195,
                'name'	=>	'OTRAS OBLIGACIONES'
            ],
            [
                'account_group_id'	=>	11,
                'code'	=>	2205,
                'name'	=>	'NACIONALES'
            ],
            [
                'account_group_id'	=>	11,
                'code'	=>	2210,
                'name'	=>	'DEL EXTERIOR'
            ],
            [
                'account_group_id'	=>	11,
                'code'	=>	2215,
                'name'	=>	'CUENTAS CORRIENTES COMERCIALES'
            ],
            [
                'account_group_id'	=>	11,
                'code'	=>	2220,
                'name'	=>	'CASA MATRIZ'
            ],
            [
                'account_group_id'	=>	11,
                'code'	=>	2225,
                'name'	=>	'COMPAÑIAS VINCULADAS'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2305,
                'name'	=>	'CUENTAS CORRIENTES COMERCIALES'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2310,
                'name'	=>	'A CASA MATRIZ'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2315,
                'name'	=>	'A COMPAÑIAS VINCULADAS'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2320,
                'name'	=>	'A CONTRATISTAS'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2330,
                'name'	=>	'ORDENES DE COMPRA POR UTILIZAR'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2335,
                'name'	=>	'COSTOS Y GASTOS POR PAGAR'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2340,
                'name'	=>	'INSTALAMENTOS POR PAGAR'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2345,
                'name'	=>	'ACREEDORES OFICIALES'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2350,
                'name'	=>	'REGALIAS POR PAGAR'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2355,
                'name'	=>	'DEUDAS CON ACCIONISTAS O SOCIOS'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2360,
                'name'	=>	'DIVIDENDOS O PARTICIPACIONES POR PAGAR'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2365,
                'name'	=>	'RETENCION EN LA FUENTE'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2370,
                'name'	=>	'RETENCIONES Y APORTES DE NOMINA'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2375,
                'name'	=>	'CUOTAS POR DEVOLVER'
            ],
            [
                'account_group_id'	=>	12,
                'code'	=>	2380,
                'name'	=>	'ACREEDORES VARIOS'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2404,
                'name'	=>	'DE RENTA Y COMPLEMENTARIOS'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2408,
                'name'	=>	'IMPUESTO SOBRE LAS VENTAS POR PAGAR'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2412,
                'name'	=>	'DE INDUSTRIA Y COMERCIO'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2416,
                'name'	=>	'A LA PROPIEDAD RAIZ'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2420,
                'name'	=>	'DERECHOS SOBRE INSTRUMENTOS PUBLICOS'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2424,
                'name'	=>	'DE VALORIZACION'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2428,
                'name'	=>	'DE TURISMO'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2432,
                'name'	=>	'TASA POR UTILIZACION DE PUERTOS'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2436,
                'name'	=>	'DE VEHICULOS'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2440,
                'name'	=>	'DE ESPECTACULOS PUBLICOS'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2444,
                'name'	=>	'DE HIDROCARBUROS Y MINAS'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2448,
                'name'	=>	'REGALIAS E IMPUESTOS A LA PEQUEÑA Y MEDIANA MINERIA'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2452,
                'name'	=>	'A LAS EXPORTACIONES CAFETERAS'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2456,
                'name'	=>	'A LAS IMPORTACIONES'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2460,
                'name'	=>	'CUOTAS DE FOMENTO'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2464,
                'name'	=>	'DE LICORES, CERVEZAS Y CIGARRILLOS'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2468,
                'name'	=>	'AL SACRIFICIO DE GANADO'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2472,
                'name'	=>	'AL AZAR Y JUEGOS'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2476,
                'name'	=>	'GRAVAMENES Y REGALIAS POR UTILIZACION DEL SUELO'
            ],
            [
                'account_group_id'	=>	13,
                'code'	=>	2495,
                'name'	=>	'OTROS'
            ],
            [
                'account_group_id'	=>	14,
                'code'	=>	2505,
                'name'	=>	'SALARIOS POR PAGAR'
            ],
            [
                'account_group_id'	=>	14,
                'code'	=>	2510,
                'name'	=>	'CESANTIAS CONSOLIDADAS'
            ],
            [
                'account_group_id'	=>	14,
                'code'	=>	2515,
                'name'	=>	'INTERESES SOBRE CESANTIAS'
            ],
            [
                'account_group_id'	=>	14,
                'code'	=>	2520,
                'name'	=>	'PRIMA DE SERVICIOS'
            ],
            [
                'account_group_id'	=>	14,
                'code'	=>	2525,
                'name'	=>	'VACACIONES CONSOLIDADAS'
            ],
            [
                'account_group_id'	=>	14,
                'code'	=>	2530,
                'name'	=>	'PRESTACIONES EXTRALEGALES'
            ],
            [
                'account_group_id'	=>	14,
                'code'	=>	2532,
                'name'	=>	'PENSIONES POR PAGAR'
            ],
            [
                'account_group_id'	=>	14,
                'code'	=>	2535,
                'name'	=>	'CUOTAS PARTES PENSIONES DE JUBILACION'
            ],
            [
                'account_group_id'	=>	14,
                'code'	=>	2540,
                'name'	=>	'INDEMNIZACIONES LABORALES'
            ],
            [
                'account_group_id'	=>	15,
                'code'	=>	2605,
                'name'	=>	'PARA COSTOS Y GASTOS'
            ],
            [
                'account_group_id'	=>	15,
                'code'	=>	2610,
                'name'	=>	'PARA OBLIGACIONES LABORALES'
            ],
            [
                'account_group_id'	=>	15,
                'code'	=>	2615,
                'name'	=>	'PARA OBLIGACIONES FISCALES'
            ],
            [
                'account_group_id'	=>	15,
                'code'	=>	2620,
                'name'	=>	'PENSIONES DE JUBILACION'
            ],
            [
                'account_group_id'	=>	15,
                'code'	=>	2625,
                'name'	=>	'PARA OBRAS DE URBANISMO'
            ],
            [
                'account_group_id'	=>	15,
                'code'	=>	2630,
                'name'	=>	'PARA MANTENIMIENTO Y REPARACIONES'
            ],
            [
                'account_group_id'	=>	15,
                'code'	=>	2635,
                'name'	=>	'PARA CONTINGENCIAS'
            ],
            [
                'account_group_id'	=>	15,
                'code'	=>	2640,
                'name'	=>	'PARA OBLIGACIONES DE GARANTIAS'
            ],
            [
                'account_group_id'	=>	15,
                'code'	=>	2695,
                'name'	=>	'PROVISIONES DIVERSAS'
            ],
            [
                'account_group_id'	=>	16,
                'code'	=>	2705,
                'name'	=>	'INGRESOS RECIBIDOS POR ANTICIPADO'
            ],
            [
                'account_group_id'	=>	16,
                'code'	=>	2710,
                'name'	=>	'ABONOS DIFERIDOS'
            ],
            [
                'account_group_id'	=>	16,
                'code'	=>	2715,
                'name'	=>	'UTILIDAD DIFERIDA EN VENTAS A PLAZOS'
            ],
            [
                'account_group_id'	=>	16,
                'code'	=>	2720,
                'name'	=>	'CREDITO POR CORRECCION MONETARIA DIFERIDA'
            ],
            [
                'account_group_id'	=>	16,
                'code'	=>	2725,
                'name'	=>	'IMPUESTOS DIFERIDOS'
            ],
            [
                'account_group_id'	=>	17,
                'code'	=>	2805,
                'name'	=>	'ANTICIPOS Y AVANCES RECIBIDOS'
            ],
            [
                'account_group_id'	=>	17,
                'code'	=>	2810,
                'name'	=>	'DEPOSITOS RECIBIDOS'
            ],
            [
                'account_group_id'	=>	17,
                'code'	=>	2815,
                'name'	=>	'INGRESOS RECIBIDOS PARA TERCEROS'
            ],
            [
                'account_group_id'	=>	17,
                'code'	=>	2820,
                'name'	=>	'CUENTAS DE OPERACION CONJUNTA'
            ],
            [
                'account_group_id'	=>	17,
                'code'	=>	2825,
                'name'	=>	'RETENCIONES A TERCEROS SOBRE CONTRATOS'
            ],
            [
                'account_group_id'	=>	17,
                'code'	=>	2830,
                'name'	=>	'EMBARGOS JUDICIALES'
            ],
            [
                'account_group_id'	=>	17,
                'code'	=>	2835,
                'name'	=>	'ACREEDORES DEL SISTEMA'
            ],
            [
                'account_group_id'	=>	17,
                'code'	=>	2840,
                'name'	=>	'CUENTAS EN PARTICIPACION'
            ],
            [
                'account_group_id'	=>	17,
                'code'	=>	2895,
                'name'	=>	'DIVERSOS'
            ],
            [
                'account_group_id'	=>	18,
                'code'	=>	2905,
                'name'	=>	'BONOS EN CIRCULACION'
            ],
            [
                'account_group_id'	=>	18,
                'code'	=>	2910,
                'name'	=>	'BONOS OBLIGATORIAMENTE CONVERTIBLES EN ACCIONES'
            ],
            [
                'account_group_id'	=>	18,
                'code'	=>	2915,
                'name'	=>	'PAPELES COMERCIALES'
            ],
            [
                'account_group_id'	=>	19,
                'code'	=>	3105,
                'name'	=>	'CAPITAL SUSCRITO Y PAGADO'
            ],
            [
                'account_group_id'	=>	19,
                'code'	=>	3110,
                'name'	=>	'ACCIONES, CUOTAS O PARTES DE INTERES SOCIAL PROPIAS READQUIRIDAS (DB)'
            ],
            [
                'account_group_id'	=>	19,
                'code'	=>	3115,
                'name'	=>	'APORTES SOCIALES'
            ],
            [
                'account_group_id'	=>	19,
                'code'	=>	3120,
                'name'	=>	'CAPITAL ASIGNADO'
            ],
            [
                'account_group_id'	=>	19,
                'code'	=>	3125,
                'name'	=>	'INVERSION SUPLEMENTARIA AL CAPITAL ASIGNADO'
            ],
            [
                'account_group_id'	=>	19,
                'code'	=>	3130,
                'name'	=>	'CAPITAL DE PERSONAS NATURALES'
            ],
            [
                'account_group_id'	=>	19,
                'code'	=>	3135,
                'name'	=>	'APORTES DEL ESTADO'
            ],
            [
                'account_group_id'	=>	19,
                'code'	=>	3140,
                'name'	=>	'FONDO SOCIAL'
            ],
            [
                'account_group_id'	=>	20,
                'code'	=>	3205,
                'name'	=>	'PRIMA EN COLOCACION DE ACCIONES, CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_group_id'	=>	20,
                'code'	=>	3210,
                'name'	=>	'DONACIONES'
            ],
            [
                'account_group_id'	=>	20,
                'code'	=>	3215,
                'name'	=>	'CREDITO MERCANTIL'
            ],
            [
                'account_group_id'	=>	21,
                'code'	=>	3305,
                'name'	=>	'RESERVAS OBLIGATORIAS'
            ],
            [
                'account_group_id'	=>	21,
                'code'	=>	3310,
                'name'	=>	'RESERVAS ESTATUTARIAS'
            ],
            [
                'account_group_id'	=>	21,
                'code'	=>	3315,
                'name'	=>	'RESERVAS OCASIONALES'
            ],
            [
                'account_group_id'	=>	22,
                'code'	=>	3405,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_group_id'	=>	22,
                'code'	=>	3410,
                'name'	=>	'SANEAMIENTO FISCAL'
            ],
            [
                'account_group_id'	=>	22,
                'code'	=>	3415,
                'name'	=>	'AJUSTES POR INFLACION DECRETO 3019 DE 1989'
            ],
            [
                'account_group_id'	=>	23,
                'code'	=>	3505,
                'name'	=>	'DIVIDENDOS DECRETADOS EN ACCIONES'
            ],
            [
                'account_group_id'	=>	23,
                'code'	=>	3510,
                'name'	=>	'PARTICIPACIONES DECRETADAS EN CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_group_id'	=>	24,
                'code'	=>	3605,
                'name'	=>	'UTILIDAD DEL EJERCICIO'
            ],
            [
                'account_group_id'	=>	24,
                'code'	=>	3610,
                'name'	=>	'PERDIDA DEL EJERCICIO'
            ],
            [
                'account_group_id'	=>	25,
                'code'	=>	3705,
                'name'	=>	'UTILIDADES O EXCEDENTES ACUMULADOS'
            ],
            [
                'account_group_id'	=>	25,
                'code'	=>	3710,
                'name'	=>	'PERDIDAS ACUMULADAS'
            ],
            [
                'account_group_id'	=>	26,
                'code'	=>	3805,
                'name'	=>	'DE INVERSIONES'
            ],
            [
                'account_group_id'	=>	26,
                'code'	=>	3810,
                'name'	=>	'DE PROPIEDADES PLANTA Y EQUIPO'
            ],
            [
                'account_group_id'	=>	26,
                'code'	=>	3895,
                'name'	=>	'DE OTROS ACTIVOS'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4105,
                'name'	=>	'AGRICULTURA, GANADERIA, CAZA Y SILVICULTURA'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4110,
                'name'	=>	'PESCA'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4115,
                'name'	=>	'EXPLOTACION DE MINAS Y CANTERAS'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4120,
                'name'	=>	'INDUSTRIAS MANUFACTURERAS'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4125,
                'name'	=>	'SUMINISTRO DE ELECTRICIDAD, GAS Y AGUA'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4130,
                'name'	=>	'CONSTRUCCION'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4135,
                'name'	=>	'COMERCIO AL POR MAYOR Y AL POR MENOR'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4140,
                'name'	=>	'HOTELES Y RESTAURANTES'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4145,
                'name'	=>	'TRANSPORTE, ALMACENAMIENTO Y COMUNICACIONES'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4150,
                'name'	=>	'ACTIVIDAD FINANCIERA'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4155,
                'name'	=>	'ACTIVIDADES INMOBILIARIAS, EMPRESARIALES Y DE ALQUILER'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4160,
                'name'	=>	'ENSEÑANZA'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4165,
                'name'	=>	'SERVICIOS SOCIALES Y DE SALUD'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4170,
                'name'	=>	'OTRAS ACTIVIDADES DE SERVICIOS COMUNITARIOS, SOCIALES Y PERSONALES'
            ],
            [
                'account_group_id'	=>	27,
                'code'	=>	4175,
                'name'	=>	'DEVOLUCIONES, REBAJAS Y DESCUENTOS EN VENTAS (DB)'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4205,
                'name'	=>	'OTRAS VENTAS'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4210,
                'name'	=>	'FINANCIEROS'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4215,
                'name'	=>	'DIVIDENDOS Y PARTICIPACIONES'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4220,
                'name'	=>	'ARRENDAMIENTOS'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4225,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4230,
                'name'	=>	'HONORARIOS'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4235,
                'name'	=>	'SERVICIOS'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4240,
                'name'	=>	'UTILIDAD EN VENTA DE INVERSIONES'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4245,
                'name'	=>	'UTILIDAD EN VENTA DE PROPIEDADES PLANTA Y EQUIPO'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4248,
                'name'	=>	'UTILIDAD EN VENTA DE OTROS BIENES'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4250,
                'name'	=>	'RECUPERACIONES'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4255,
                'name'	=>	'INDEMNIZACIONES'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4260,
                'name'	=>	'PARTICIPACIONES EN CONCESIONES'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4265,
                'name'	=>	'INGRESOS DE EJERCICIOS ANTERIORES'
            ],
            [
                'account_group_id'	=>	28,
                'code'	=>	4275,
                'name'	=>	'DEVOLUCIONES, REBAJAS Y DESCUENTOS EN OTRAS VENTAS (DB)'
            ],
            [
                'account_group_id'	=>	29,
                'code'	=>	4295,
                'name'	=>	'DIVERSOS'
            ],
            [
                'account_group_id'	=>	29,
                'code'	=>	4705,
                'name'	=>	'CORRECCION MONETARIA'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5105,
                'name'	=>	'GASTOS DE PERSONAL'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5110,
                'name'	=>	'HONORARIOS'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5115,
                'name'	=>	'IMPUESTOS'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5120,
                'name'	=>	'ARRENDAMIENTOS'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5125,
                'name'	=>	'CONTRIBUCIONES Y AFILIACIONES'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5130,
                'name'	=>	'SEGUROS'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5135,
                'name'	=>	'SERVICIOS'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5140,
                'name'	=>	'GASTOS LEGALES'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5145,
                'name'	=>	'MANTENIMIENTO Y REPARACIONES'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5150,
                'name'	=>	'ADECUACION E INSTALACION'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5155,
                'name'	=>	'GASTOS DE VIAJE'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5160,
                'name'	=>	'DEPRECIACIONES'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5165,
                'name'	=>	'AMORTIZACIONES'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5195,
                'name'	=>	'DIVERSOS'
            ],
            [
                'account_group_id'	=>	30,
                'code'	=>	5199,
                'name'	=>	'PROVISIONES'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5205,
                'name'	=>	'GASTOS DE PERSONAL'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5210,
                'name'	=>	'HONORARIOS'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5215,
                'name'	=>	'IMPUESTOS'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5220,
                'name'	=>	'ARRENDAMIENTOS'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5225,
                'name'	=>	'CONTRIBUCIONES Y AFILIACIONES'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5230,
                'name'	=>	'SEGUROS'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5235,
                'name'	=>	'SERVICIOS'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5240,
                'name'	=>	'GASTOS LEGALES'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5245,
                'name'	=>	'MANTENIMIENTO Y REPARACIONES'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5250,
                'name'	=>	'ADECUACION E INSTALACION'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5255,
                'name'	=>	'GASTOS DE VIAJE'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5260,
                'name'	=>	'DEPRECIACIONES'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5265,
                'name'	=>	'AMORTIZACIONES'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5270,
                'name'	=>	'FINANCIEROS - REAJUSTE DEL SISTEMA'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5295,
                'name'	=>	'DIVERSOS'
            ],
            [
                'account_group_id'	=>	31,
                'code'	=>	5299,
                'name'	=>	'PROVISIONES'
            ],
            [
                'account_group_id'	=>	32,
                'code'	=>	5305,
                'name'	=>	'FINANCIEROS'
            ],
            [
                'account_group_id'	=>	32,
                'code'	=>	5310,
                'name'	=>	'PERDIDA EN VENTA Y RETIRO DE BIENES'
            ],
            [
                'account_group_id'	=>	32,
                'code'	=>	5315,
                'name'	=>	'GASTOS EXTRAORDINARIOS'
            ],
            [
                'account_group_id'	=>	32,
                'code'	=>	5395,
                'name'	=>	'GASTOS DIVERSOS'
            ],
            [
                'account_group_id'	=>	33,
                'code'	=>	5405,
                'name'	=>	'IMPUESTO DE RENTA Y COMPLEMENTARIOS'
            ],
            [
                'account_group_id'	=>	34,
                'code'	=>	5905,
                'name'	=>	'GANANCIAS Y PERDIDAS'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6105,
                'name'	=>	'AGRICULTURA, GANADERIA, CAZA Y SILVICULTURA'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6110,
                'name'	=>	'PESCA'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6115,
                'name'	=>	'EXPLOTACION DE MINAS Y CANTERAS'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6120,
                'name'	=>	'INDUSTRIAS MANUFACTURERAS'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6125,
                'name'	=>	'SUMINISTRO DE ELECTRICIDAD, GAS Y AGUA'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6130,
                'name'	=>	'CONSTRUCCION'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6135,
                'name'	=>	'COMERCIO AL POR MAYOR Y AL POR MENOR'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6140,
                'name'	=>	'HOTELES Y RESTAURANTES'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6145,
                'name'	=>	'TRANSPORTE, ALMACENAMIENTO Y COMUNICACIONES'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6150,
                'name'	=>	'ACTIVIDAD FINANCIERA'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6155,
                'name'	=>	'ACTIVIDADES INMOBILIARIAS, EMPRESARIALES Y DE ALQUILER'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6160,
                'name'	=>	'ENSEÑANZA'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6165,
                'name'	=>	'SERVICIOS SOCIALES Y DE SALUD'
            ],
            [
                'account_group_id'	=>	35,
                'code'	=>	6170,
                'name'	=>	'OTRAS ACTIVIDADES DE SERVICIOS COMUNITARIOS, SOCIALES Y PERSONALES'
            ],
            [
                'account_group_id'	=>	36,
                'code'	=>	6205,
                'name'	=>	'DE MERCANCIAS'
            ],
            [
                'account_group_id'	=>	36,
                'code'	=>	6210,
                'name'	=>	'DE MATERIAS PRIMAS'
            ],
            [
                'account_group_id'	=>	36,
                'code'	=>	6215,
                'name'	=>	'DE MATERIALES INDIRECTOS'
            ],
            [
                'account_group_id'	=>	36,
                'code'	=>	6220,
                'name'	=>	'COMPRA DE ENERGIA'
            ],
            [
                'account_group_id'	=>	36,
                'code'	=>	6225,
                'name'	=>	'DEVOLUCIONES REBAJAS Y DESCUENTOS EN COMPRAS (CR)'
            ],
            [
                'account_group_id'	=>	37,
                'code'	=>	7101,
                'name'	=>	'BIENES Y VALORES ENTREGADOS EN CUSTODIA'
            ],
            [
                'account_group_id'	=>	38,
                'code'	=>	7201,
                'name'	=>	'BIENES Y VALORES ENTREGADOS EN CUSTODIA'
            ],
            [
                'account_group_id'	=>	39,
                'code'	=>	7301,
                'name'	=>	'BIENES Y VALORES ENTREGADOS EN CUSTODIA'
            ],
            [
                'account_group_id'	=>	40,
                'code'	=>	7401,
                'name'	=>	'BIENES Y VALORES ENTREGADOS EN CUSTODIA'
            ],
            [
                'account_group_id'	=>	41,
                'code'	=>	8105,
                'name'	=>	'BIENES Y VALORES ENTREGADOS EN CUSTODIA'
            ],
            [
                'account_group_id'	=>	41,
                'code'	=>	8110,
                'name'	=>	'BIENES Y VALORES ENTREGADOS EN GARANTIA'
            ],
            [
                'account_group_id'	=>	41,
                'code'	=>	8115,
                'name'	=>	'BIENES Y VALORES EN PODER DE TERCEROS'
            ],
            [
                'account_group_id'	=>	41,
                'code'	=>	8120,
                'name'	=>	'LITIGIOS Y/O DEMANDAS'
            ],
            [
                'account_group_id'	=>	41,
                'code'	=>	8125,
                'name'	=>	'PROMESAS DE COMPRAVENTA'
            ],
            [
                'account_group_id'	=>	41,
                'code'	=>	8195,
                'name'	=>	'DIVERSAS'
            ],
            [
                'account_group_id'	=>	42,
                'code'	=>	8201,
                'name'	=>	'BIENES Y VALORES ENTREGADOS EN CUSTODIA'
            ],
            [
                'account_group_id'	=>	43,
                'code'	=>	8305,
                'name'	=>	'BIENES RECIBIDOS EN ARRENDAMIENTO FINANCIERO'
            ],
            [
                'account_group_id'	=>	43,
                'code'	=>	8310,
                'name'	=>	'TITULOS DE INVERSION NO COLOCADOS'
            ],
            [
                'account_group_id'	=>	43,
                'code'	=>	8315,
                'name'	=>	'PROPIEDADES PLANTA Y EQUIPO TOTALMENTE DEPRECIADOS, AGOTADOS Y/O AMORTIZADOS'
            ],
            [
                'account_group_id'	=>	43,
                'code'	=>	8320,
                'name'	=>	'CREDITOS A FAVOR NO UTILIZADOS'
            ],
            [
                'account_group_id'	=>	43,
                'code'	=>	8325,
                'name'	=>	'ACTIVOS CASTIGADOS'
            ],
            [
                'account_group_id'	=>	43,
                'code'	=>	8330,
                'name'	=>	'TITULOS DE INVERSION AMORTIZADOS'
            ],
            [
                'account_group_id'	=>	43,
                'code'	=>	8335,
                'name'	=>	'CAPITALIZACION POR REVALORIZACION DE PATRIMONIO'
            ],
            [
                'account_group_id'	=>	43,
                'code'	=>	8395,
                'name'	=>	'OTRAS CUENTAS DEUDORAS DE CONTROL'
            ],
            [
                'account_group_id'	=>	43,
                'code'	=>	8399,
                'name'	=>	'AJUSTES POR INFLACION ACTIVOS'
            ],
            [
                'account_group_id'	=>	44,
                'code'	=>	8401,
                'name'	=>	'AJUSTES POR INFLACION ACTIVOS'
            ],
            [
                'account_group_id'	=>	45,
                'code'	=>	8501,
                'name'	=>	'AJUSTES POR INFLACION ACTIVOS'
            ],
            [
                'account_group_id'	=>	46,
                'code'	=>	8601,
                'name'	=>	'AJUSTES POR INFLACION ACTIVOS'
            ],
            [
                'account_group_id'	=>	47,
                'code'	=>	9105,
                'name'	=>	'BIENES Y VALORES RECIBIDOS EN CUSTODIA'
            ],
            [
                'account_group_id'	=>	47,
                'code'	=>	9110,
                'name'	=>	'BIENES Y VALORES RECIBIDOS EN GARANTIA'
            ],
            [
                'account_group_id'	=>	47,
                'code'	=>	9115,
                'name'	=>	'BIENES Y VALORES RECIBIDOS DE TERCEROS'
            ],
            [
                'account_group_id'	=>	47,
                'code'	=>	9120,
                'name'	=>	'LITIGIOS Y/O DEMANDAS'
            ],
            [
                'account_group_id'	=>	47,
                'code'	=>	9125,
                'name'	=>	'PROMESAS DE COMPRAVENTA'
            ],
            [
                'account_group_id'	=>	47,
                'code'	=>	9130,
                'name'	=>	'CONTRATOS DE ADMINISTRACION DELEGADA'
            ],
            [
                'account_group_id'	=>	47,
                'code'	=>	9135,
                'name'	=>	'CUENTAS EN PARTICIPACION'
            ],
            [
                'account_group_id'	=>	47,
                'code'	=>	9195,
                'name'	=>	'OTRAS RESPONSABILIDADES CONTINGENTES'
            ],
            [
                'account_group_id'	=>	48,
                'code'	=>	9201,
                'name'	=>	'OTRAS RESPONSABILIDADES CONTINGENTES'
            ],
            [
                'account_group_id'	=>	49,
                'code'	=>	9305,
                'name'	=>	'CONTRATOS DE ARRENDAMIENTO FINANCIERO'
            ],
            [
                'account_group_id'	=>	49,
                'code'	=>	9395,
                'name'	=>	'AJUSTES POR INFLACION PATRIMONIO'
            ],
            [
                'account_group_id'	=>	49,
                'code'	=>	9399,
                'name'	=>	'AJUSTES POR INFLACION PATRIMONIO'
            ],
            [
                'account_group_id'	=>	50,
                'code'	=>	9401,
                'name'	=>	'AJUSTES POR INFLACION PATRIMONIO'
            ],
            [
                'account_group_id'	=>	51,
                'code'	=>	9501,
                'name'	=>	'AJUSTES POR INFLACION PATRIMONIO'
            ],
            [
                'account_group_id'	=>	52,
                'code'	=>	9601,
                'name'	=>	'AJUSTES POR INFLACION PATRIMONIO'
            ],
        ];
        foreach ($accounts as $account) {
            Account::create($account);
        }

    }
}
