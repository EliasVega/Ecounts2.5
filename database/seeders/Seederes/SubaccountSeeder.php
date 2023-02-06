<?php
namespace Database\Seeders;

use App\Models\Subaccount;
use App\Models\Subacount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubaccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subaccounts = [
            [
                'account_id'	=>	1,
                'code'	=>	110505,
                'name'	=>	'CAJA GENERAL'
            ],
            [
                'account_id'	=>	1,
                'code'	=>	110510,
                'name'	=>	'CAJAS MENORES'
            ],
            [
                'account_id'	=>	1,
                'code'	=>	110515,
                'name'	=>	'MONEDA EXTRANJERA'
            ],
            [
                'account_id'	=>	2,
                'code'	=>	111005,
                'name'	=>	'MONEDA NACIONAL'
            ],
            [
                'account_id'	=>	2,
                'code'	=>	111010,
                'name'	=>	'MONEDA EXTRANJERA'
            ],
            [
                'account_id'	=>	3,
                'code'	=>	111505,
                'name'	=>	'MONEDA NACIONAL'
            ],
            [
                'account_id'	=>	3,
                'code'	=>	111510,
                'name'	=>	'MONEDA EXTRANJERA'
            ],
            [
                'account_id'	=>	4,
                'code'	=>	112005,
                'name'	=>	'BANCOS'
            ],
            [
                'account_id'	=>	4,
                'code'	=>	112010,
                'name'	=>	'CORPORACIONES DE AHORRO Y VIVIENDA'
            ],
            [
                'account_id'	=>	4,
                'code'	=>	112015,
                'name'	=>	'ORGANISMOS COOPERATIVOS FINANCIEROS'
            ],
            [
                'account_id'	=>	5,
                'code'	=>	112505,
                'name'	=>	'ROTATORIOS MONEDA NACIONAL'
            ],
            [
                'account_id'	=>	5,
                'code'	=>	112510,
                'name'	=>	'ROTATORIOS MONEDA EXTRANJERA'
            ],
            [
                'account_id'	=>	5,
                'code'	=>	112515,
                'name'	=>	'ESPECIALES MONEDA NACIONAL'
            ],
            [
                'account_id'	=>	5,
                'code'	=>	112520,
                'name'	=>	'ESPECIALES MONEDA EXTRANJERA'
            ],
            [
                'account_id'	=>	5,
                'code'	=>	112525,
                'name'	=>	'DE AMORTIZACION MONEDA NACIONAL'
            ],
            [
                'account_id'	=>	5,
                'code'	=>	112530,
                'name'	=>	'DE AMORTIZACION MONEDA EXTRANJERA'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120505,
                'name'	=>	'AGRICULTURA, GANADERIA, CAZA Y SILVICULTURA'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120510,
                'name'	=>	'PESCA'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120515,
                'name'	=>	'EXPLOTACION DE MINAS Y CANTERAS'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120520,
                'name'	=>	'INDUSTRIA MANUFACTURERA'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120525,
                'name'	=>	'SUMINISTRO DE ELECTRICIDAD, GAS Y AGUA'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120530,
                'name'	=>	'CONSTRUCCION'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120535,
                'name'	=>	'COMERCIO AL POR MAYOR Y AL POR MENOR'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120540,
                'name'	=>	'HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120545,
                'name'	=>	'TRANSPORTE, ALMACENAMIENTO Y COMUNICACIONES'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120550,
                'name'	=>	'ACTIVIDAD FINANCIERA'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120555,
                'name'	=>	'ACTIVIDADES INMOBILIARIAS, EMPRESARIALES Y DE ALQUILER'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120560,
                'name'	=>	'ENSEÑANZA'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120565,
                'name'	=>	'SERVICIOS SOCIALES Y DE SALUD'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120570,
                'name'	=>	'OTRAS ACTIVIDADES DE SERVICIOS COMUNITARIOS, SOCIALES Y PERSONALES'
            ],
            [
                'account_id'	=>	6,
                'code'	=>	120599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121005,
                'name'	=>	'AGRICULTURA, GANADERIA, CAZA Y SILVICULTURA'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121010,
                'name'	=>	'PESCA'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121015,
                'name'	=>	'EXPLOTACION DE MINAS Y CANTERAS'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121020,
                'name'	=>	'INDUSTRIA MANUFACTURERA'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121025,
                'name'	=>	'SUMINISTRO DE ELECTRICIDAD, GAS Y AGUA'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121030,
                'name'	=>	'CONSTRUCCION'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121035,
                'name'	=>	'COMERCIO AL POR MAYOR Y AL POR MENOR'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121040,
                'name'	=>	'HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121045,
                'name'	=>	'TRANSPORTE, ALMACENAMIENTO Y COMUNICACIONES'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121050,
                'name'	=>	'ACTIVIDAD FINANCIERA'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121055,
                'name'	=>	'ACTIVIDADES INMOBILIARIAS, EMPRESARIALES Y DE ALQUILER'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121060,
                'name'	=>	'ENSEÑANZA'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121065,
                'name'	=>	'SERVICIOS SOCIALES Y DE SALUD'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121070,
                'name'	=>	'OTRAS ACTIVIDADES DE SERVICIOS COMUNITARIOS, SOCIALES Y PERSONALES'
            ],
            [
                'account_id'	=>	7,
                'code'	=>	121099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	8,
                'code'	=>	121505,
                'name'	=>	'BONOS PUBLICOS MONEDA NACIONAL'
            ],
            [
                'account_id'	=>	8,
                'code'	=>	121510,
                'name'	=>	'BONOS PUBLICOS MONEDA EXTRANJERA'
            ],
            [
                'account_id'	=>	8,
                'code'	=>	121515,
                'name'	=>	'BONOS ORDINARIOS'
            ],
            [
                'account_id'	=>	8,
                'code'	=>	121520,
                'name'	=>	'BONOS CONVERTIBLES EN ACCIONES'
            ],
            [
                'account_id'	=>	8,
                'code'	=>	121595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	9,
                'code'	=>	122005,
                'name'	=>	'CEDULAS DE CAPITALIZACION'
            ],
            [
                'account_id'	=>	9,
                'code'	=>	122010,
                'name'	=>	'CEDULAS HIPOTECARIAS'
            ],
            [
                'account_id'	=>	9,
                'code'	=>	122015,
                'name'	=>	'CEDULAS DE INVERSION'
            ],
            [
                'account_id'	=>	9,
                'code'	=>	122095,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	10,
                'code'	=>	122505,
                'name'	=>	'CERTIFICADOS DE DEPOSITO A TERMINO (C.D.T.)'
            ],
            [
                'account_id'	=>	10,
                'code'	=>	122510,
                'name'	=>	'CERTIFICADOS DE DEPOSITO DE AHORRO'
            ],
            [
                'account_id'	=>	10,
                'code'	=>	122515,
                'name'	=>	'CERTIFICADOS DE AHORRO DE VALOR CONSTANTE (C.A.V.C.)'
            ],
            [
                'account_id'	=>	10,
                'code'	=>	122520,
                'name'	=>	'CERTIFICADOS DE CAMBIO'
            ],
            [
                'account_id'	=>	10,
                'code'	=>	122525,
                'name'	=>	'CERTIFICADOS CAFETEROS VALORIZABLES'
            ],
            [
                'account_id'	=>	10,
                'code'	=>	122530,
                'name'	=>	'CERTIFICADOS ELECTRICOS VALORIZABLES (C.E.V.)'
            ],
            [
                'account_id'	=>	10,
                'code'	=>	122535,
                'name'	=>	'CERTIFICADOS DE REEMBOLSO TRIBUTARIO (C.E.R.T.)'
            ],
            [
                'account_id'	=>	10,
                'code'	=>	122540,
                'name'	=>	'CERTIFICADOS DE DESARROLLO TURISTICO'
            ],
            [
                'account_id'	=>	10,
                'code'	=>	122545,
                'name'	=>	'CERTIFICADOS DE INVERSION FORESTAL (C.I.F.)'
            ],
            [
                'account_id'	=>	10,
                'code'	=>	122595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	11,
                'code'	=>	123005,
                'name'	=>	'EMPRESAS COMERCIALES'
            ],
            [
                'account_id'	=>	11,
                'code'	=>	123010,
                'name'	=>	'EMPRESAS INDUSTRIALES'
            ],
            [
                'account_id'	=>	11,
                'code'	=>	123015,
                'name'	=>	'EMPRESAS DE SERVICIOS'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123505,
                'name'	=>	'TITULOS DE DESARROLLO AGROPECUARIO'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123510,
                'name'	=>	'TITULOS CANJEABLES POR CERTIFICADOS DE CAMBIO'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123515,
                'name'	=>	'TITULOS DE TESORERIA (T.E.S.)'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123520,
                'name'	=>	'TITULOS DE PARTICIPACION'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123525,
                'name'	=>	'TITULOS DE CREDITO DE FOMENTO'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123530,
                'name'	=>	'TITULOS FINANCIEROS AGROINDUSTRIALES (T.F.A.)'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123535,
                'name'	=>	'TITULOS DE AHORRO CAFETERO (T.A.C.)'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123540,
                'name'	=>	'TITULOS DE AHORRO NACIONAL (T.A.N.)'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123545,
                'name'	=>	'TITULOS ENERGETICOS DE RENTABILIDAD CRECIENTE (T.E.R.)'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123550,
                'name'	=>	'TITULOS DE AHORRO EDUCATIVO (T.A.E.)'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123555,
                'name'	=>	'TITULOS FINANCIEROS INDUSTRIALES Y COMERCIALES'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123560,
                'name'	=>	'TESOROS'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123565,
                'name'	=>	'TITULOS DE DEVOLUCION DE IMPUESTOS NACIONALES (TIDIS)'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123570,
                'name'	=>	'TITULOS INMOBILIARIOS'
            ],
            [
                'account_id'	=>	12,
                'code'	=>	123595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	13,
                'code'	=>	124005,
                'name'	=>	'BANCOS COMERCIALES'
            ],
            [
                'account_id'	=>	13,
                'code'	=>	124010,
                'name'	=>	'COMPAÑIAS DE FINANCIAMIENTO COMERCIAL'
            ],
            [
                'account_id'	=>	13,
                'code'	=>	124015,
                'name'	=>	'CORPORACIONES FINANCIERAS'
            ],
            [
                'account_id'	=>	13,
                'code'	=>	124095,
                'name'	=>	'OTRAS'
            ],
            [
            'account_id'	=>	14,
                'code'	=>	124505,
                'name'	=>	'FIDEICOMISOS DE INVERSION MONEDA NACIONAL'
            ],
            [
                'account_id'	=>	14,
                'code'	=>	124510,
                'name'	=>	'FIDEICOMISOS DE INVERSION MONEDA EXTRANJERA'
            ],
            [
                'account_id'	=>	15,
                'code'	=>	125005,
                'name'	=>	'ACCIONES'
            ],
            [
                'account_id'	=>	15,
                'code'	=>	125010,
                'name'	=>	'CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_id'	=>	15,
                'code'	=>	125015,
                'name'	=>	'BONOS'
            ],
            [
                'account_id'	=>	15,
                'code'	=>	125020,
                'name'	=>	'CEDULAS'
            ],
            [
                'account_id'	=>	15,
                'code'	=>	125025,
                'name'	=>	'CERTIFICADOS'
            ],
            [
                'account_id'	=>	15,
                'code'	=>	125030,
                'name'	=>	'PAPELES COMERCIALES'
            ],
            [
                'account_id'	=>	15,
                'code'	=>	125035,
                'name'	=>	'TITULOS'
            ],
            [
                'account_id'	=>	15,
                'code'	=>	125040,
                'name'	=>	'ACEPTACIONES BANCARIAS O FINANCIERAS 125095 OTROS'
            ],
            [
                'account_id'	=>	15,
                'code'	=>	125099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	16,
                'code'	=>	125505,
                'name'	=>	'BONOS DE FINANCIAMIENTO ESPECIAL'
            ],
            [
                'account_id'	=>	16,
                'code'	=>	125510,
                'name'	=>	'BONOS DE FINANCIAMIENTO PRESUPUESTAL'
            ],
            [
                'account_id'	=>	16,
                'code'	=>	125515,
                'name'	=>	'BONOS PARA DESARROLLO SOCIAL Y SEGURIDAD INTERNA (B.D.S.I.)'
            ],
            [
                'account_id'	=>	16,
                'code'	=>	125595,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	17,
                'code'	=>	126001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	17,
                'code'	=>	126099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	18,
                'code'	=>	129505,
                'name'	=>	'APORTES EN COOPERATIVAS'
            ],
            [
                'account_id'	=>	18,
                'code'	=>	129510,
                'name'	=>	'DERECHOS EN CLUBES SOCIALES'
            ],
            [
                'account_id'	=>	18,
                'code'	=>	129515,
                'name'	=>	'ACCIONES O DERECHOS EN CLUBES DEPORTIVOS'
            ],
            [
                'account_id'	=>	18,
                'code'	=>	129520,
                'name'	=>	'BONOS EN COLEGIOS'
            ],
            [
                'account_id'	=>	18,
                'code'	=>	129595,
                'name'	=>	'DIVERSAS'
            ],
            [
                'account_id'	=>	18,
                'code'	=>	129599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129905,
                'name'	=>	'ACCIONES'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129910,
                'name'	=>	'CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129915,
                'name'	=>	'BONOS'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129920,
                'name'	=>	'CEDULAS'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129925,
                'name'	=>	'CERTIFICADOS'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129930,
                'name'	=>	'PAPELES COMERCIALES'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129935,
                'name'	=>	'TITULOS'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129940,
                'name'	=>	'ACEPTACIONES BANCARIAS O FINANCIERAS'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129945,
                'name'	=>	'DERECHOS FIDUCIARIOS'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129950,
                'name'	=>	'DERECHOS DE RECOMPRA DE INVERSIONES NEGOCIADAS'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129955,
                'name'	=>	'OBLIGATORIAS'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129960,
                'name'	=>	'CUENTAS EN PARTICIPACION'
            ],
            [
                'account_id'	=>	19,
                'code'	=>	129995,
                'name'	=>	'OTRAS INVERSIONES'
            ],
            [
                'account_id'	=>	20,
                'code'	=>	130505,
                'name'	=>	'NACIONALES'
            ],
            [
                'account_id'	=>	20,
                'code'	=>	130510,
                'name'	=>	'DEL EXTERIOR'
            ],
            [
                'account_id'	=>	20,
                'code'	=>	130515,
                'name'	=>	'DEUDORES DEL SISTEMA'
            ],
            [
                'account_id'	=>	21,
                'code'	=>	131005,
                'name'	=>	'CASA MATRIZ'
            ],
            [
                'account_id'	=>	21,
                'code'	=>	131010,
                'name'	=>	'COMPAÑIAS VINCULADAS'
            ],
            [
                'account_id'	=>	21,
                'code'	=>	131015,
                'name'	=>	'ACCIONISTAS O SOCIOS'
            ],
            [
                'account_id'	=>	21,
                'code'	=>	131020,
                'name'	=>	'PARTICULARES'
            ],
            [
                'account_id'	=>	21,
                'code'	=>	131095,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	22,
                'code'	=>	131505,
                'name'	=>	'VENTAS'
            ],
            [
                'account_id'	=>	22,
                'code'	=>	131510,
                'name'	=>	'PAGOS A NOMBRE DE CASA MATRIZ'
            ],
            [
                'account_id'	=>	22,
                'code'	=>	131515,
                'name'	=>	'VALORES RECIBIDOS POR CASA MATRIZ'
            ],
            [
                'account_id'	=>	22,
                'code'	=>	131520,
                'name'	=>	'PRESTAMOS'
            ],
            [
                'account_id'	=>	23,
                'code'	=>	132005,
                'name'	=>	'FILIALES'
            ],
            [
                'account_id'	=>	23,
                'code'	=>	132010,
                'name'	=>	'SUBSIDIARIAS'
            ],
            [
                'account_id'	=>	23,
                'code'	=>	132015,
                'name'	=>	'SUCURSALES'
            ],
            [
                'account_id'	=>	24,
                'code'	=>	132505,
                'name'	=>	'A SOCIOS'
            ],
            [
                'account_id'	=>	24,
                'code'	=>	132510,
                'name'	=>	'A ACCIONISTAS'
            ],
            [
                'account_id'	=>	25,
                'code'	=>	132801,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	26,
                'code'	=>	133005,
                'name'	=>	'A PROVEEDORES'
            ],
            [
                'account_id'	=>	26,
                'code'	=>	133010,
                'name'	=>	'A CONTRATISTAS'
            ],
            [
                'account_id'	=>	26,
                'code'	=>	133015,
                'name'	=>	'A TRABAJADORES'
            ],
            [
                'account_id'	=>	26,
                'code'	=>	133020,
                'name'	=>	'A AGENTES'
            ],
            [
                'account_id'	=>	26,
                'code'	=>	133025,
                'name'	=>	'A CONCESIONARIOS'
            ],
            [
                'account_id'	=>	26,
                'code'	=>	133030,
                'name'	=>	'DE ADJUDICACIONES'
            ],
            [
                'account_id'	=>	26,
                'code'	=>	133095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	27,
                'code'	=>	133201,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	28,
                'code'	=>	133505,
                'name'	=>	'PARA IMPORTACIONES'
            ],
            [
                'account_id'	=>	28,
                'code'	=>	133510,
                'name'	=>	'PARA SERVICIOS'
            ],
            [
                'account_id'	=>	28,
                'code'	=>	133515,
                'name'	=>	'PARA CONTRATOS'
            ],
            [
                'account_id'	=>	28,
                'code'	=>	133520,
                'name'	=>	'PARA RESPONSABILIDADES'
            ],
            [
                'account_id'	=>	28,
                'code'	=>	133525,
                'name'	=>	'PARA JUICIOS EJECUTIVOS'
            ],
            [
                'account_id'	=>	28,
                'code'	=>	133530,
                'name'	=>	'PARA ADQUISICION DE ACCIONES, CUOTAS O DERECHOS SOCIALES'
            ],
            [
                'account_id'	=>	28,
                'code'	=>	133535,
                'name'	=>	'EN GARANTIA'
            ],
            [
                'account_id'	=>	28,
                'code'	=>	133595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	29,
                'code'	=>	134005,
                'name'	=>	'DE BIENES RAICES'
            ],
            [
                'account_id'	=>	29,
                'code'	=>	134010,
                'name'	=>	'DE MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	29,
                'code'	=>	134015,
                'name'	=>	'DE FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	29,
                'code'	=>	134020,
                'name'	=>	'DE FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	29,
                'code'	=>	134025,
                'name'	=>	'DE FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	29,
                'code'	=>	134030,
                'name'	=>	'DE FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	29,
                'code'	=>	134035,
                'name'	=>	'DE SEMOVIENTES'
            ],
            [
                'account_id'	=>	29,
                'code'	=>	134095,
                'name'	=>	'DE OTROS BIENES'
            ],
            [
                'account_id'	=>	30,
                'code'	=>	134505,
                'name'	=>	'DIVIDENDOS Y/O PARTICIPACIONES'
            ],
            [
                'account_id'	=>	30,
                'code'	=>	134510,
                'name'	=>	'INTERESES'
            ],
            [
                'account_id'	=>	30,
                'code'	=>	134515,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	30,
                'code'	=>	134520,
                'name'	=>	'HONORARIOS'
            ],
            [
                'account_id'	=>	30,
                'code'	=>	134525,
                'name'	=>	'SERVICIOS'
            ],
            [
                'account_id'	=>	30,
                'code'	=>	134530,
                'name'	=>	'ARRENDAMIENTOS'
            ],
            [
                'account_id'	=>	30,
                'code'	=>	134535,
                'name'	=>	'CERT POR COBRAR'
            ],
            [
                'account_id'	=>	30,
                'code'	=>	134595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	31,
                'code'	=>	135005,
                'name'	=>	'DE CONSTRUCCION'
            ],
            [
                'account_id'	=>	31,
                'code'	=>	135010,
                'name'	=>	'DE PRESTACION DE SERVICIOS'
            ],
            [
                'account_id'	=>	31,
                'code'	=>	135095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	32,
                'code'	=>	135505,
                'name'	=>	'ANTICIPO DE IMPUESTOS DE RENTA Y COMPLEMENTARIOS'
            ],
            [
                'account_id'	=>	32,
                'code'	=>	135510,
                'name'	=>	'ANTICIPO DE IMPUESTOS DE INDUSTRIA Y COMERCIO'
            ],
            [
                'account_id'	=>	32,
                'code'	=>	135515,
                'name'	=>	'RETENCION EN LA FUENTE'
            ],
            [
                'account_id'	=>	32,
                'code'	=>	135520,
                'name'	=>	'SOBRANTES EN LIQUIDACION PRIVADA DE IMPUESTOS'
            ],
            [
                'account_id'	=>	32,
                'code'	=>	135525,
                'name'	=>	'CONTRIBUCIONES'
            ],
            [
                'account_id'	=>	32,
                'code'	=>	135530,
                'name'	=>	'IMPUESTOS DESCONTABLES'
            ],
            [
                'account_id'	=>	32,
                'code'	=>	135595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	33,
                'code'	=>	136005,
                'name'	=>	'A COMPAÑIAS ASEGURADORAS'
            ],
            [
                'account_id'	=>	33,
                'code'	=>	136010,
                'name'	=>	'A TRANSPORTADORES'
            ],
            [
                'account_id'	=>	33,
                'code'	=>	136015,
                'name'	=>	'POR TIQUETES AEREOS'
            ],
            [
                'account_id'	=>	33,
                'code'	=>	136095,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	34,
                'code'	=>	136505,
                'name'	=>	'VIVIENDA'
            ],
            [
                'account_id'	=>	34,
                'code'	=>	136510,
                'name'	=>	'VEHICULOS'
            ],
            [
                'account_id'	=>	34,
                'code'	=>	136515,
                'name'	=>	'EDUCACION'
            ],
            [
                'account_id'	=>	34,
                'code'	=>	136520,
                'name'	=>	'MEDICOS, ODONTOLOGICOS Y SIMILARES'
            ],
            [
                'account_id'	=>	34,
                'code'	=>	136525,
                'name'	=>	'CALAMIDAD DOMESTICA'
            ],
            [
                'account_id'	=>	34,
                'code'	=>	136530,
                'name'	=>	'RESPONSABILIDADES'
            ],
            [
                'account_id'	=>	34,
                'code'	=>	136595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	35,
                'code'	=>	137005,
                'name'	=>	'CON GARANTIA REAL'
            ],
            [
                'account_id'	=>	35,
                'code'	=>	137010,
                'name'	=>	'CON GARANTIA PERSONAL'
            ],
            [
                'account_id'	=>	36,
                'code'	=>	138005,
                'name'	=>	'DEPOSITARIOS'
            ],
            [
                'account_id'	=>	36,
                'code'	=>	138010,
                'name'	=>	'COMISIONISTAS DE BOLSAS'
            ],
            [
                'account_id'	=>	36,
                'code'	=>	138015,
                'name'	=>	'FONDO DE INVERSION'
            ],
            [
                'account_id'	=>	36,
                'code'	=>	138020,
                'name'	=>	'CUENTAS POR COBRAR DE TERCEROS'
            ],
            [
                'account_id'	=>	36,
                'code'	=>	138025,
                'name'	=>	'PAGOS POR CUENTA DE TERCEROS'
            ],
            [
                'account_id'	=>	36,
                'code'	=>	138030,
                'name'	=>	'FONDOS DE INVERSION SOCIAL'
            ],
            [
                'account_id'	=>	36,
                'code'	=>	138095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	37,
                'code'	=>	138501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	38,
                'code'	=>	139001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139905,
                'name'	=>	'CLIENTES'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139910,
                'name'	=>	'CUENTAS CORRIENTES COMERCIALES'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139915,
                'name'	=>	'CUENTAS POR COBRAR A CASA MATRIZ'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139920,
                'name'	=>	'CUENTAS POR COBRAR A VINCULADOS ECONOMICOS'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139925,
                'name'	=>	'CUENTAS POR COBRAR A SOCIOS Y ACCIONISTAS'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139930,
                'name'	=>	'ANTICIPOS Y AVANCES'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139932,
                'name'	=>	'CUENTAS DE OPERACION CONJUNTA'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139935,
                'name'	=>	'DEPOSITOS'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139940,
                'name'	=>	'PROMESAS DE COMPRAVENTA'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139945,
                'name'	=>	'INGRESOS POR COBRAR'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139950,
                'name'	=>	'RETENCION SOBRE CONTRATOS'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139955,
                'name'	=>	'RECLAMACIONES'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139960,
                'name'	=>	'CUENTAS POR COBRAR A TRABAJADORES'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139965,
                'name'	=>	'PRESTAMOS A PARTICULARES'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139975,
                'name'	=>	'DEUDORES VARIOS'
            ],
            [
                'account_id'	=>	39,
                'code'	=>	139980,
                'name'	=>	'DERECHOS DE RECOMPRA DE CARTERA NEGOCIADA'
            ],
            [
                'account_id'	=>	40,
                'code'	=>	140501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	40,
                'code'	=>	140599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	41,
                'code'	=>	141001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	41,
                'code'	=>	141099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	42,
                'code'	=>	141501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	42,
                'code'	=>	141599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	43,
                'code'	=>	141701,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	43,
                'code'	=>	141799,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	44,
                'code'	=>	142001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	44,
                'code'	=>	142099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	45,
                'code'	=>	142501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	45,
                'code'	=>	142599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	46,
                'code'	=>	143005,
                'name'	=>	'PRODUCTOS MANUFACTURADOS'
            ],
            [
                'account_id'	=>	46,
                'code'	=>	143010,
                'name'	=>	'PRODUCTOS EXTRAIDOS Y/O PROCESADOS'
            ],
            [
                'account_id'	=>	46,
                'code'	=>	143015,
                'name'	=>	'PRODUCTOS AGRICOLAS Y FORESTALES'
            ],
            [
                'account_id'	=>	46,
                'code'	=>	143020,
                'name'	=>	'SUBPRODUCTOS'
            ],
            [
                'account_id'	=>	46,
                'code'	=>	143025,
                'name'	=>	'PRODUCTOS DE PESCA'
            ],
            [
                'account_id'	=>	46,
                'code'	=>	143099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	47,
                'code'	=>	143501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	47,
                'code'	=>	143599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	48,
                'code'	=>	144001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	48,
                'code'	=>	144099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	49,
                'code'	=>	144505,
                'name'	=>	'ESPECIES MAYORES'
            ],
            [
                'account_id'	=>	49,
                'code'	=>	144510,
                'name'	=>	'ESPECIES MENORES'
            ],
            [
                'account_id'	=>	49,
                'code'	=>	144599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	50,
                'code'	=>	145005,
                'name'	=>	'POR URBANIZAR'
            ],
            [
                'account_id'	=>	50,
                'code'	=>	145010,
                'name'	=>	'URBANIZADOS POR CONSTRUIR'
            ],
            [
                'account_id'	=>	50,
                'code'	=>	145099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145505,
                'name'	=>	'COMBUSTIBLES Y LUBRICANTES'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145510,
                'name'	=>	'ABONOS Y FERTILIZANTES'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145515,
                'name'	=>	'SEMILLAS TERMINADAS'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145520,
                'name'	=>	'FUNGICIDAS Y HERBICIDAS'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145525,
                'name'	=>	'MATERIALES Y REPUESTOS'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145530,
                'name'	=>	'LOZA Y CRISTALERIA'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145535,
                'name'	=>	'HERRAMIENTAS'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145540,
                'name'	=>	'MEDICINAS'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145545,
                'name'	=>	'ELEMENTOS HOSPITALARIOS'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145550,
                'name'	=>	'INSTRUMENTAL QUIRURGICO'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145555,
                'name'	=>	'DOTACION Y SUMINISTRO A TRABAJADORES'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145560,
                'name'	=>	'ELEMENTOS DE ROPERIA Y LENCERIA'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	51,
                'code'	=>	145599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	52,
                'code'	=>	146001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	52,
                'code'	=>	146099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	53,
                'code'	=>	146501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	53,
                'code'	=>	146599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	54,
                'code'	=>	149905,
                'name'	=>	'PARA OBSOLESCENCIA'
            ],
            [
                'account_id'	=>	54,
                'code'	=>	149910,
                'name'	=>	'PARA DIFERENCIA DE INVENTARIO FISICO'
            ],
            [
                'account_id'	=>	54,
                'code'	=>	149915,
                'name'	=>	'PARA PERDIDAS DE INVENTARIOS'
            ],
            [
                'account_id'	=>	54,
                'code'	=>	149920,
                'name'	=>	'LIFO'
            ],
            [
                'account_id'	=>	55,
                'code'	=>	150405,
                'name'	=>	'URBANOS'
            ],
            [
                'account_id'	=>	55,
                'code'	=>	150410,
                'name'	=>	'RURALES'
            ],
            [
                'account_id'	=>	55,
                'code'	=>	150499,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	56,
                'code'	=>	150605,
                'name'	=>	'TUBERIAS Y EQUIPO'
            ],
            [
                'account_id'	=>	56,
                'code'	=>	150610,
                'name'	=>	'COSTOS DE IMPORTACION MATERIALES'
            ],
            [
                'account_id'	=>	56,
                'code'	=>	150615,
                'name'	=>	'PROYECTOS DE CONSTRUCCION'
            ],
            [
                'account_id'	=>	56,
                'code'	=>	150699,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	57,
                'code'	=>	150805,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	57,
                'code'	=>	150810,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	57,
                'code'	=>	150815,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_id'	=>	57,
                'code'	=>	150820,
                'name'	=>	'POZOS ARTESIANOS'
            ],
            [
                'account_id'	=>	57,
                'code'	=>	150825,
                'name'	=>	'PROYECTOS DE EXPLORACION'
            ],
            [
                'account_id'	=>	57,
                'code'	=>	150830,
                'name'	=>	'PROYECTOS DE DESARROLLO'
            ],
            [
                'account_id'	=>	57,
                'code'	=>	150899,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	58,
                'code'	=>	151205,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	58,
                'code'	=>	151210,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	58,
                'code'	=>	151215,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	58,
                'code'	=>	151220,
                'name'	=>	'EQUIPO MEDICO-CIENTIFICO'
            ],
            [
                'account_id'	=>	58,
                'code'	=>	151225,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	58,
                'code'	=>	151230,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	58,
                'code'	=>	151235,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	58,
                'code'	=>	151240,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	58,
                'code'	=>	151245,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	58,
                'code'	=>	151250,
                'name'	=>	'PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	58,
                'code'	=>	151299,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151605,
                'name'	=>	'EDIFICIOS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151610,
                'name'	=>	'OFICINAS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151615,
                'name'	=>	'ALMACENES'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151620,
                'name'	=>	'FABRICAS Y PLANTAS INDUSTRIALES'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151625,
                'name'	=>	'SALAS DE EXHIBICION Y VENTAS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151630,
                'name'	=>	'CAFETERIA Y CASINOS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151635,
                'name'	=>	'SILOS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151640,
                'name'	=>	'INVERNADEROS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151645,
                'name'	=>	'CASETAS Y CAMPAMENTOS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151650,
                'name'	=>	'INSTALACIONES AGROPECUARIAS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151655,
                'name'	=>	'VIVIENDAS PARA EMPLEADOS Y OBREROS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151660,
                'name'	=>	'TERMINAL DE BUSES Y TAXIS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151663,
                'name'	=>	'TERMINAL MARITIMO'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151665,
                'name'	=>	'TERMINAL FERREO'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151670,
                'name'	=>	'PARQUEADEROS, GARAJES Y DEPOSITOS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151675,
                'name'	=>	'HANGARES'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151680,
                'name'	=>	'BODEGAS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151695,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	59,
                'code'	=>	151699,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	60,
                'code'	=>	152001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	60,
                'code'	=>	152099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	61,
                'code'	=>	152405,
                'name'	=>	'MUEBLES Y ENSERES'
            ],
            [
                'account_id'	=>	61,
                'code'	=>	152410,
                'name'	=>	'EQUIPOS'
            ],
            [
                'account_id'	=>	61,
                'code'	=>	152495,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	61,
                'code'	=>	152499,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	62,
                'code'	=>	152805,
                'name'	=>	'EQUIPOS DE PROCESAMIENTO DE DATOS'
            ],
            [
                'account_id'	=>	62,
                'code'	=>	152810,
                'name'	=>	'EQUIPOS DE TELECOMUNICACIONES'
            ],
            [
                'account_id'	=>	62,
                'code'	=>	152815,
                'name'	=>	'EQUIPOS DE RADIO'
            ],
            [
                'account_id'	=>	62,
                'code'	=>	152820,
                'name'	=>	'SATELITES Y ANTENAS'
            ],
            [
                'account_id'	=>	62,
                'code'	=>	152825,
                'name'	=>	'LINEAS TELEFONICAS'
            ],
            [
                'account_id'	=>	62,
                'code'	=>	152895,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	62,
                'code'	=>	152899,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	63,
                'code'	=>	153205,
                'name'	=>	'MEDICO'
            ],
            [
                'account_id'	=>	63,
                'code'	=>	153210,
                'name'	=>	'ODONTOLOGICO'
            ],
            [
                'account_id'	=>	63,
                'code'	=>	153215,
                'name'	=>	'LABORATORIO'
            ],
            [
                'account_id'	=>	63,
                'code'	=>	153220,
                'name'	=>	'INSTRUMENTAL'
            ],
            [
                'account_id'	=>	63,
                'code'	=>	153295,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	63,
                'code'	=>	153299,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	64,
                'code'	=>	153605,
                'name'	=>	'DE HABITACIONES'
            ],
            [
                'account_id'	=>	64,
                'code'	=>	153610,
                'name'	=>	'DE COMESTIBLES Y BEBIDAS'
            ],
            [
                'account_id'	=>	64,
                'code'	=>	153695,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	64,
                'code'	=>	153699,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154005,
                'name'	=>	'AUTOS, CAMIONETAS Y CAMPEROS'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154008,
                'name'	=>	'CAMIONES, VOLQUETAS Y FURGONES'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154010,
                'name'	=>	'TRACTOMULAS Y REMOLQUES'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154015,
                'name'	=>	'BUSES Y BUSETAS'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154017,
                'name'	=>	'RECOLECTORES Y CONTENEDORES'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154020,
                'name'	=>	'MONTACARGAS'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154025,
                'name'	=>	'PALAS Y GRUAS'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154030,
                'name'	=>	'MOTOCICLETAS'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154035,
                'name'	=>	'BICICLETAS'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154040,
                'name'	=>	'ESTIBAS Y CARRETAS'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154045,
                'name'	=>	'BANDAS TRANSPORTADORAS'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	65,
                'code'	=>	154099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	66,
                'code'	=>	154405,
                'name'	=>	'BUQUES'
            ],
            [
                'account_id'	=>	66,
                'code'	=>	154410,
                'name'	=>	'LANCHAS'
            ],
            [
                'account_id'	=>	66,
                'code'	=>	154415,
                'name'	=>	'REMOLCADORAS'
            ],
            [
                'account_id'	=>	66,
                'code'	=>	154420,
                'name'	=>	'BOTES'
            ],
            [
                'account_id'	=>	66,
                'code'	=>	154425,
                'name'	=>	'BOYAS'
            ],
            [
                'account_id'	=>	66,
                'code'	=>	154430,
                'name'	=>	'AMARRES'
            ],
            [
                'account_id'	=>	66,
                'code'	=>	154435,
                'name'	=>	'CONTENEDORES Y CHASSISES'
            ],
            [
                'account_id'	=>	66,
                'code'	=>	154440,
                'name'	=>	'GABARRAS'
            ],
            [
                'account_id'	=>	66,
                'code'	=>	154495,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	66,
                'code'	=>	154499,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	67,
                'code'	=>	154805,
                'name'	=>	'AVIONES'
            ],
            [
                'account_id'	=>	67,
                'code'	=>	154810,
                'name'	=>	'AVIONETAS'
            ],
            [
                'account_id'	=>	67,
                'code'	=>	154815,
                'name'	=>	'HELICOPTEROS'
            ],
            [
                'account_id'	=>	67,
                'code'	=>	154820,
                'name'	=>	'TURBINAS Y MOTORES'
            ],
            [
                'account_id'	=>	67,
                'code'	=>	154825,
                'name'	=>	'MANUALES DE ENTRENAMIENTO PERSONAL TECNICO'
            ],
            [
                'account_id'	=>	67,
                'code'	=>	154830,
                'name'	=>	'EQUIPOS DE VUELO'
            ],
            [
                'account_id'	=>	67,
                'code'	=>	154895,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	67,
                'code'	=>	154899,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	68,
                'code'	=>	155205,
                'name'	=>	'LOCOMOTORAS'
            ],
            [
                'account_id'	=>	68,
                'code'	=>	155210,
                'name'	=>	'VAGONES'
            ],
            [
                'account_id'	=>	68,
                'code'	=>	155215,
                'name'	=>	'REDES FERREAS'
            ],
            [
                'account_id'	=>	68,
                'code'	=>	155295,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	68,
                'code'	=>	155299,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155605,
                'name'	=>	'INSTALACIONES PARA AGUA Y ENERGIA'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155610,
                'name'	=>	'ACUEDUCTO ACEQUIAS Y CANALIZACIONES'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155615,
                'name'	=>	'PLANTAS DE GENERACION HIDRAULICA'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155620,
                'name'	=>	'PLANTAS DE GENERACION TERMICA'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155625,
                'name'	=>	'PLANTAS DE GENERACION A GAS'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155628,
                'name'	=>	'PLANTAS DE GENERACION DIESEL, GASOLINA Y PETROLEO'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155630,
                'name'	=>	'PLANTAS DE DISTRIBUCION'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155635,
                'name'	=>	'PLANTAS DE TRANSMISION Y SUBESTACIONES'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155640,
                'name'	=>	'OLEODUCTOS'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155645,
                'name'	=>	'GASODUCTOS'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155647,
                'name'	=>	'POLIDUCTOS'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155650,
                'name'	=>	'REDES DE DISTRIBUCION'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155655,
                'name'	=>	'PLANTAS DE TRATAMIENTO'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155660,
                'name'	=>	'REDES DE RECOLECCION DE AGUAS NEGRAS'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155665,
                'name'	=>	'INSTALACIONES Y EQUIPO DE BOMBEO'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155670,
                'name'	=>	'REDES DE DISTRIBUCION DE VAPOR'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155675,
                'name'	=>	'REDES DE AIRE'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155680,
                'name'	=>	'REDES ALIMENTACION DE GAS'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155682,
                'name'	=>	'REDES EXTERNAS DE TELEFONIA'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155685,
                'name'	=>	'PLANTAS DESHIDRATADORAS'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155695,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	69,
                'code'	=>	155699,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	70,
                'code'	=>	156001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	70,
                'code'	=>	156099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	71,
                'code'	=>	156201,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	71,
                'code'	=>	156299,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	72,
                'code'	=>	156405,
                'name'	=>	'CULTIVOS EN DESARROLLO'
            ],
            [
                'account_id'	=>	72,
                'code'	=>	156410,
                'name'	=>	'CULTIVOS AMORTIZABLES'
            ],
            [
                'account_id'	=>	72,
                'code'	=>	156499,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	73,
                'code'	=>	156805,
                'name'	=>	'PAVIMENTACION Y PATIOS'
            ],
            [
                'account_id'	=>	73,
                'code'	=>	156810,
                'name'	=>	'VIAS'
            ],
            [
                'account_id'	=>	73,
                'code'	=>	156815,
                'name'	=>	'PUENTES'
            ],
            [
                'account_id'	=>	73,
                'code'	=>	156820,
                'name'	=>	'CALLES'
            ],
            [
                'account_id'	=>	73,
                'code'	=>	156825,
                'name'	=>	'AERODROMOS'
            ],
            [
                'account_id'	=>	73,
                'code'	=>	156895,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	73,
                'code'	=>	156899,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	74,
                'code'	=>	157205,
                'name'	=>	'MINAS'
            ],
            [
                'account_id'	=>	74,
                'code'	=>	157210,
                'name'	=>	'CANTERAS'
            ],
            [
                'account_id'	=>	74,
                'code'	=>	157299,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	75,
                'code'	=>	157601,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	75,
                'code'	=>	157699,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	76,
                'code'	=>	158001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	76,
                'code'	=>	158099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	77,
                'code'	=>	158405,
                'name'	=>	'ESPECIES MENORES'
            ],
            [
                'account_id'	=>	77,
                'code'	=>	158410,
                'name'	=>	'ESPECIES MAYORES'
            ],
            [
                'account_id'	=>	77,
                'code'	=>	158499,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158805,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158810,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158815,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158820,
                'name'	=>	'EQUIPO MEDICO CIENTIFICO'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158825,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158830,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158835,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158840,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158845,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158850,
                'name'	=>	'PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158855,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158860,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158865,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	78,
                'code'	=>	158899,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159205,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159210,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159215,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159220,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159225,
                'name'	=>	'EQUIPO MEDICO CIENTIFICO'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159230,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159235,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159240,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159245,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159250,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159255,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159260,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159265,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	79,
                'code'	=>	159299,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	80,
                'code'	=>	159605,
                'name'	=>	'EXCESO FISCAL SOBRE LA CONTABLE'
            ],
            [
                'account_id'	=>	80,
                'code'	=>	159610,
                'name'	=>	'DEFECTO FISCAL SOBRE LA CONTABLE (CR)'
            ],
            [
                'account_id'	=>	80,
                'code'	=>	159699,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	81,
                'code'	=>	159705,
                'name'	=>	'PLANTACIONES AGRICOLAS Y FORESTALES'
            ],
            [
                'account_id'	=>	81,
                'code'	=>	159710,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_id'	=>	81,
                'code'	=>	159715,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_id'	=>	81,
                'code'	=>	159799,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	82,
                'code'	=>	159805,
                'name'	=>	'MINAS Y CANTERAS'
            ],
            [
                'account_id'	=>	82,
                'code'	=>	159815,
                'name'	=>	'POZOS ARTESIANOS'
            ],
            [
                'account_id'	=>	82,
                'code'	=>	159820,
                'name'	=>	'YACIMIENTOS'
            ],
            [
                'account_id'	=>	82,
                'code'	=>	159899,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159904,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159906,
                'name'	=>	'MATERIALES PROYECTOS PETROLEROS'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159908,
                'name'	=>	'CONSTRUCCIONES EN CURSO'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159912,
                'name'	=>	'MAQUINARIA EN MONTAJE'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159916,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159920,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159924,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159928,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159932,
                'name'	=>	'EQUIPO MEDICO CIENTIFICO'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159936,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159940,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159944,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159948,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159952,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159956,
                'name'	=>	'ACUEDUCTOS, PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159960,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159962,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159964,
                'name'	=>	'PLANTACIONES AGRICOLAS Y FORESTALES'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159968,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159972,
                'name'	=>	'MINAS Y CANTERAS'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159980,
                'name'	=>	'POZOS ARTESIANOS'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159984,
                'name'	=>	'YACIMIENTOS'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159988,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_id'	=>	83,
                'code'	=>	159992,
                'name'	=>	'PROPIEDADES PLANTA Y EQUIPO EN TRANSITO'
            ],
            [
                'account_id'	=>	84,
                'code'	=>	160505,
                'name'	=>	'FORMADO O ESTIMADO'
            ],
            [
                'account_id'	=>	84,
                'code'	=>	160510,
                'name'	=>	'ADQUIRIDO O COMPRADO'
            ],
            [
                'account_id'	=>	84,
                'code'	=>	160599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	85,
                'code'	=>	161005,
                'name'	=>	'ADQUIRIDAS'
            ],
            [
                'account_id'	=>	85,
                'code'	=>	161010,
                'name'	=>	'FORMADAS'
            ],
            [
                'account_id'	=>	85,
                'code'	=>	161099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	86,
                'code'	=>	161505,
                'name'	=>	'ADQUIRIDAS'
            ],
            [
                'account_id'	=>	86,
                'code'	=>	161510,
                'name'	=>	'FORMADAS'
            ],
            [
                'account_id'	=>	86,
                'code'	=>	161599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	87,
                'code'	=>	162005,
                'name'	=>	'CONCESIONES'
            ],
            [
                'account_id'	=>	87,
                'code'	=>	162010,
                'name'	=>	'FRANQUICIAS'
            ],
            [
                'account_id'	=>	87,
                'code'	=>	162099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	88,
                'code'	=>	162505,
                'name'	=>	'DERECHOS DE AUTOR'
            ],
            [
                'account_id'	=>	88,
                'code'	=>	162510,
                'name'	=>	'PUESTO DE BOLSA'
            ],
            [
                'account_id'	=>	88,
                'code'	=>	162515,
                'name'	=>	'EN FIDEICOMISOS INMOBILIARIOS'
            ],
            [
                'account_id'	=>	88,
                'code'	=>	162520,
                'name'	=>	'EN FIDEICOMISOS DE GARANTIA'
            ],
            [
                'account_id'	=>	88,
                'code'	=>	162525,
                'name'	=>	'EN FIDEICOMISOS DE ADMINISTRACION'
            ],
            [
                'account_id'	=>	88,
                'code'	=>	162595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	88,
                'code'	=>	162599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	89,
                'code'	=>	163001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	89,
                'code'	=>	163099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	90,
                'code'	=>	163501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	90,
                'code'	=>	163599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	91,
                'code'	=>	169805,
                'name'	=>	'CREDITO MERCANTIL'
            ],
            [
                'account_id'	=>	91,
                'code'	=>	169810,
                'name'	=>	'MARCAS'
            ],
            [
                'account_id'	=>	91,
                'code'	=>	169815,
                'name'	=>	'PATENTES'
            ],
            [
                'account_id'	=>	91,
                'code'	=>	169820,
                'name'	=>	'CONCESIONES Y FRANQUICIAS'
            ],
            [
                'account_id'	=>	91,
                'code'	=>	169830,
                'name'	=>	'DERECHOS'
            ],
            [
                'account_id'	=>	91,
                'code'	=>	169835,
                'name'	=>	'KNOW HOW'
            ],
            [
                'account_id'	=>	91,
                'code'	=>	169840,
                'name'	=>	'LICENCIAS'
            ],
            [
                'account_id'	=>	91,
                'code'	=>	169899,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	92,
                'code'	=>	169901,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	93,
                'code'	=>	170505,
                'name'	=>	'INTERESES'
            ],
            [
                'account_id'	=>	93,
                'code'	=>	170510,
                'name'	=>	'HONORARIOS'
            ],
            [
                'account_id'	=>	93,
                'code'	=>	170515,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	93,
                'code'	=>	170520,
                'name'	=>	'SEGUROS Y FIANZAS'
            ],
            [
                'account_id'	=>	93,
                'code'	=>	170525,
                'name'	=>	'ARRENDAMIENTOS'
            ],
            [
                'account_id'	=>	93,
                'code'	=>	170530,
                'name'	=>	'BODEGAJES'
            ],
            [
                'account_id'	=>	93,
                'code'	=>	170535,
                'name'	=>	'MANTENIMIENTO EQUIPOS'
            ],
            [
                'account_id'	=>	93,
                'code'	=>	170540,
                'name'	=>	'SERVICIOS'
            ],
            [
                'account_id'	=>	93,
                'code'	=>	170545,
                'name'	=>	'SUSCRIPCIONES'
            ],
            [
                'account_id'	=>	93,
                'code'	=>	170595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171004,
                'name'	=>	'ORGANIZACION Y PREOPERATIVOS'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171008,
                'name'	=>	'REMODELACIONES'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171012,
                'name'	=>	'ESTUDIOS, INVESTIGACIONES Y PROYECTOS'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171016,
                'name'	=>	'PROGRAMAS PARA COMPUTADOR (SOFTWARE)'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171020,
                'name'	=>	'UTILES Y PAPELERIA'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171024,
                'name'	=>	'MEJORAS A PROPIEDADES AJENAS'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171028,
                'name'	=>	'CONTRIBUCIONES Y AFILIACIONES'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171032,
                'name'	=>	'ENTRENAMIENTO DE PERSONAL'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171036,
                'name'	=>	'FERIAS Y EXPOSICIONES'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171040,
                'name'	=>	'LICENCIAS'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171044,
                'name'	=>	'PUBLICIDAD, PROPAGANDA Y AVISOS'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171048,
                'name'	=>	'ELEMENTOS DE ASEO Y CAFETERIA'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171052,
                'name'	=>	'MOLDES Y TROQUELES'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171056,
                'name'	=>	'INSTRUMENTAL QUIRURGICO'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171060,
                'name'	=>	'DOTACION Y SUMINISTRO A TRABAJADORES'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171064,
                'name'	=>	'ELEMENTOS DE ROPERIA Y LENCERIA'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171068,
                'name'	=>	'LOZA Y CRISTALERIA'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171072,
                'name'	=>	'DESCUENTO EN COLOCACION DE BONOS'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171076,
                'name'	=>	'IMPUESTO DE RENTA DIFERIDO "DEBITOS" POR DIFERENCIAS TEMPORALES'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171080,
                'name'	=>	'CONCURSOS Y LICITACIONES'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	94,
                'code'	=>	171099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	95,
                'code'	=>	171505,
                'name'	=>	'POZOS SECOS'
            ],
            [
                'account_id'	=>	95,
                'code'	=>	171510,
                'name'	=>	'POZOS NO COMERCIALES'
            ],
            [
                'account_id'	=>	95,
                'code'	=>	171515,
                'name'	=>	'OTROS COSTOS DE EXPLORACION'
            ],
            [
                'account_id'	=>	95,
                'code'	=>	171599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	96,
                'code'	=>	172005,
                'name'	=>	'PERFORACION Y EXPLOTACION'
            ],
            [
                'account_id'	=>	96,
                'code'	=>	172010,
                'name'	=>	'PERFORACIONES CAMPOS EN DESARROLLO'
            ],
            [
                'account_id'	=>	96,
                'code'	=>	172015,
                'name'	=>	'FACILIDADES DE PRODUCCION'
            ],
            [
                'account_id'	=>	96,
                'code'	=>	172020,
                'name'	=>	'SERVICIO A POZOS'
            ],
            [
                'account_id'	=>	96,
                'code'	=>	172099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	97,
                'code'	=>	173001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	98,
                'code'	=>	179805,
                'name'	=>	'COSTOS DE EXPLORACION POR AMORTIZAR'
            ],
            [
                'account_id'	=>	98,
                'code'	=>	179810,
                'name'	=>	'COSTOS DE EXPLOTACION Y DESARROLLO'
            ],
            [
                'account_id'	=>	98,
                'code'	=>	179899,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	99,
                'code'	=>	180505,
                'name'	=>	'OBRAS DE ARTE'
            ],
            [
                'account_id'	=>	99,
                'code'	=>	180510,
                'name'	=>	'BIBLIOTECAS'
            ],
            [
                'account_id'	=>	99,
                'code'	=>	180595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	99,
                'code'	=>	180599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	100,
                'code'	=>	189505,
                'name'	=>	'MAQUINAS PORTEADORAS'
            ],
            [
                'account_id'	=>	100,
                'code'	=>	189510,
                'name'	=>	'BIENES ENTREGADOS EN COMODATO'
            ],
            [
                'account_id'	=>	100,
                'code'	=>	189515,
                'name'	=>	'AMORTIZACION ACUMULADA DE BIENES ENTREGADOS EN COMODATO (CR)'
            ],
            [
                'account_id'	=>	100,
                'code'	=>	189520,
                'name'	=>	'BIENES RECIBIDOS EN PAGO'
            ],
            [
                'account_id'	=>	100,
                'code'	=>	189525,
                'name'	=>	'DERECHOS SUCESORALES'
            ],
            [
                'account_id'	=>	100,
                'code'	=>	189530,
                'name'	=>	'ESTAMPILLAS'
            ],
            [
                'account_id'	=>	100,
                'code'	=>	189595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	100,
                'code'	=>	189599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	101,
                'code'	=>	189905,
                'name'	=>	'BIENES DE ARTE Y CULTURA'
            ],
            [
                'account_id'	=>	101,
                'code'	=>	189995,
                'name'	=>	'DIVERSOS'
            ],
            [
                'account_id'	=>	102,
                'code'	=>	190505,
                'name'	=>	'ACCIONES'
            ],
            [
                'account_id'	=>	102,
                'code'	=>	190510,
                'name'	=>	'CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_id'	=>	102,
                'code'	=>	190515,
                'name'	=>	'DERECHOS FIDUCIARIOS'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191004,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191006,
                'name'	=>	'MATERIALES PROYECTOS PETROLEROS'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191008,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191012,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191016,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191020,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191024,
                'name'	=>	'EQUIPO MEDICO CIENTIFICO'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191028,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191032,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191036,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191040,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191044,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191048,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191052,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191056,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191060,
                'name'	=>	'PLANTACIONES AGRICOLAS Y FORESTALES'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191064,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191068,
                'name'	=>	'MINAS Y CANTERAS'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191072,
                'name'	=>	'POZOS ARTESIANOS'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191076,
                'name'	=>	'YACIMIENTOS'
            ],
            [
                'account_id'	=>	103,
                'code'	=>	191080,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_id'	=>	104,
                'code'	=>	199505,
                'name'	=>	'BIENES DE ARTE Y CULTURA'
            ],
            [
                'account_id'	=>	104,
                'code'	=>	199510,
                'name'	=>	'BIENES ENTREGADOS EN COMODATO'
            ],
            [
                'account_id'	=>	104,
                'code'	=>	199515,
                'name'	=>	'BIENES RECIBIDOS EN PAGO'
            ],
            [
                'account_id'	=>	104,
                'code'	=>	199520,
                'name'	=>	'INVENTARIO DE SEMOVIENTES'
            ],
            [
                'account_id'	=>	105,
                'code'	=>	210505,
                'name'	=>	'SOBREGIROS'
            ],
            [
                'account_id'	=>	105,
                'code'	=>	210510,
                'name'	=>	'PAGARES'
            ],
            [
                'account_id'	=>	105,
                'code'	=>	210515,
                'name'	=>	'CARTAS DE CREDITO'
            ],
            [
                'account_id'	=>	105,
                'code'	=>	210520,
                'name'	=>	'ACEPTACIONES BANCARIAS'
            ],
            [
                'account_id'	=>	106,
                'code'	=>	211005,
                'name'	=>	'SOBREGIROS'
            ],
            [
                'account_id'	=>	106,
                'code'	=>	211010,
                'name'	=>	'PAGARES'
            ],
            [
                'account_id'	=>	106,
                'code'	=>	211015,
                'name'	=>	'CARTAS DE CREDITO'
            ],
            [
                'account_id'	=>	106,
                'code'	=>	211020,
                'name'	=>	'ACEPTACIONES BANCARIAS'
            ],
            [
                'account_id'	=>	107,
                'code'	=>	211505,
                'name'	=>	'PAGARES'
            ],
            [
                'account_id'	=>	107,
                'code'	=>	211510,
                'name'	=>	'ACEPTACIONES FINANCIERAS'
            ],
            [
                'account_id'	=>	107,
                'code'	=>	211515,
                'name'	=>	'CARTAS DE CREDITO'
            ],
            [
                'account_id'	=>	108,
                'code'	=>	212005,
                'name'	=>	'PAGARES'
            ],
            [
                'account_id'	=>	108,
                'code'	=>	212010,
                'name'	=>	'ACEPTACIONES FINANCIERAS'
            ],
            [
                'account_id'	=>	109,
                'code'	=>	212505,
                'name'	=>	'SOBREGIROS'
            ],
            [
                'account_id'	=>	109,
                'code'	=>	212510,
                'name'	=>	'PAGARES'
            ],
            [
                'account_id'	=>	109,
                'code'	=>	212515,
                'name'	=>	'HIPOTECARIAS'
            ],
            [
                'account_id'	=>	110,
                'code'	=>	213001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	111,
                'code'	=>	213505,
                'name'	=>	'ACCIONES'
            ],
            [
                'account_id'	=>	111,
                'code'	=>	213510,
                'name'	=>	'CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_id'	=>	111,
                'code'	=>	213515,
                'name'	=>	'BONOS'
            ],
            [
                'account_id'	=>	111,
                'code'	=>	213520,
                'name'	=>	'CEDULAS'
            ],
            [
                'account_id'	=>	111,
                'code'	=>	213525,
                'name'	=>	'CERTIFICADOS'
            ],
            [
                'account_id'	=>	111,
                'code'	=>	213530,
                'name'	=>	'PAPELES COMERCIALES'
            ],
            [
                'account_id'	=>	111,
                'code'	=>	213535,
                'name'	=>	'TITULOS'
            ],
            [
                'account_id'	=>	111,
                'code'	=>	213540,
                'name'	=>	'ACEPTACIONES BANCARIAS O FINANCIERAS'
            ],
            [
                'account_id'	=>	111,
                'code'	=>	213595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	112,
                'code'	=>	214001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	113,
                'code'	=>	214505,
                'name'	=>	'GOBIERNO NACIONAL'
            ],
            [
                'account_id'	=>	113,
                'code'	=>	214510,
                'name'	=>	'ENTIDADES OFICIALES'
            ],
            [
                'account_id'	=>	113,
                'code'	=>	219505,
                'name'	=>	'PARTICULARES'
            ],
            [
                'account_id'	=>	114,
                'code'	=>	219510,
                'name'	=>	'COMPAÑIAS VINCULADAS'
            ],
            [
                'account_id'	=>	114,
                'code'	=>	219515,
                'name'	=>	'CASA MATRIZ'
            ],
            [
                'account_id'	=>	114,
                'code'	=>	219520,
                'name'	=>	'SOCIOS O ACCIONISTAS'
            ],
            [
                'account_id'	=>	114,
                'code'	=>	219525,
                'name'	=>	'FONDOS Y COOPERATIVAS'
            ],
            [
                'account_id'	=>	114,
                'code'	=>	219595,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	115,
                'code'	=>	220501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	116,
                'code'	=>	221001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	117,
                'code'	=>	221501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	118,
                'code'	=>	222001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	119,
                'code'	=>	222501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	120,
                'code'	=>	230501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	121,
                'code'	=>	231001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	122,
                'code'	=>	231501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	123,
                'code'	=>	232001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	124,
                'code'	=>	233001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233505,
                'name'	=>	'GASTOS FINANCIEROS'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233510,
                'name'	=>	'GASTOS LEGALES'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233515,
                'name'	=>	'LIBROS, SUSCRIPCIONES, PERIODICOS Y REVISTAS'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233520,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233525,
                'name'	=>	'HONORARIOS'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233530,
                'name'	=>	'SERVICIOS TECNICOS'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233535,
                'name'	=>	'SERVICIOS DE MANTENIMIENTO'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233540,
                'name'	=>	'ARRENDAMIENTOS'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233545,
                'name'	=>	'TRANSPORTES, FLETES Y ACARREOS'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233550,
                'name'	=>	'SERVICIOS PUBLICOS'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233555,
                'name'	=>	'SEGUROS'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233560,
                'name'	=>	'GASTOS DE VIAJE'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233565,
                'name'	=>	'GASTOS DE REPRESENTACION Y RELACIONES PUBLICAS'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233570,
                'name'	=>	'SERVICIOS ADUANEROS'
            ],
            [
                'account_id'	=>	125,
                'code'	=>	233595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	126,
                'code'	=>	234001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	127,
                'code'	=>	234501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	128,
                'code'	=>	235001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	129,
                'code'	=>	235505,
                'name'	=>	'ACCIONISTAS'
            ],
            [
                'account_id'	=>	129,
                'code'	=>	235510,
                'name'	=>	'SOCIOS'
            ],
            [
                'account_id'	=>	130,
                'code'	=>	236005,
                'name'	=>	'DIVIDENDOS'
            ],
            [
                'account_id'	=>	130,
                'code'	=>	236010,
                'name'	=>	'PARTICIPACIONES'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236505,
                'name'	=>	'SALARIOS Y PAGOS LABORALES'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236510,
                'name'	=>	'DIVIDENDOS Y/O PARTICIPACIONES'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236515,
                'name'	=>	'HONORARIOS'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236520,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236525,
                'name'	=>	'SERVICIOS'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236530,
                'name'	=>	'ARRENDAMIENTOS'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236535,
                'name'	=>	'RENDIMIENTOS FINANCIEROS'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236540,
                'name'	=>	'COMPRAS'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236545,
                'name'	=>	'LOTERIAS, RIFAS, APUESTAS Y SIMILARES'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236550,
                'name'	=>	'POR PAGOS AL EXTERIOR'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236555,
                'name'	=>	'POR INGRESOS OBTENIDOS EN EL EXTERIOR'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236560,
                'name'	=>	'ENAJENACION PROPIEDADES PLANTA Y EQUIPO PERSONAS NATURALES'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236565,
                'name'	=>	'POR IMPUESTO DE TIMBRE'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236570,
                'name'	=>	'OTRAS RETENCIONES Y PATRIMONIO'
            ],
            [
                'account_id'	=>	131,
                'code'	=>	236575,
                'name'	=>	'AUTORRETENCIONES'
            ],
            [
                'account_id'	=>	132,
                'code'	=>	237005,
                'name'	=>	'APORTES AL I.S.S.'
            ],
            [
                'account_id'	=>	132,
                'code'	=>	237010,
                'name'	=>	'APORTES AL I.C.B.F., SENA Y CAJAS DE COMPENSACION'
            ],
            [
                'account_id'	=>	132,
                'code'	=>	237015,
                'name'	=>	'APORTES AL F.I.C.'
            ],
            [
                'account_id'	=>	132,
                'code'	=>	237025,
                'name'	=>	'EMBARGOS JUDICIALES'
            ],
            [
                'account_id'	=>	132,
                'code'	=>	237030,
                'name'	=>	'LIBRANZAS'
            ],
            [
                'account_id'	=>	132,
                'code'	=>	237035,
                'name'	=>	'SINDICATOS'
            ],
            [
                'account_id'	=>	132,
                'code'	=>	237040,
                'name'	=>	'COOPERATIVAS'
            ],
            [
                'account_id'	=>	132,
                'code'	=>	237045,
                'name'	=>	'FONDOS'
            ],
            [
                'account_id'	=>	132,
                'code'	=>	237095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	133,
                'code'	=>	237501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	134,
                'code'	=>	238005,
                'name'	=>	'DEPOSITARIOS'
            ],
            [
                'account_id'	=>	134,
                'code'	=>	238010,
                'name'	=>	'COMISIONISTAS DE BOLSAS'
            ],
            [
                'account_id'	=>	134,
                'code'	=>	238015,
                'name'	=>	'SOCIEDAD ADMINISTRADORA - FONDOS DE INVERSION'
            ],
            [
                'account_id'	=>	134,
                'code'	=>	238020,
                'name'	=>	'REINTEGROS POR PAGAR'
            ],
            [
                'account_id'	=>	134,
                'code'	=>	238025,
                'name'	=>	'FONDO DE PERSEVERANCIA'
            ],
            [
                'account_id'	=>	134,
                'code'	=>	238030,
                'name'	=>	'FONDOS DE CESANTIAS Y/O PENSIONES'
            ],
            [
                'account_id'	=>	134,
                'code'	=>	238035,
                'name'	=>	'DONACIONES ASIGNADAS POR PAGAR'
            ],
            [
                'account_id'	=>	134,
                'code'	=>	238095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	135,
                'code'	=>	240405,
                'name'	=>	'VIGENCIA FISCAL CORRIENTE'
            ],
            [
                'account_id'	=>	135,
                'code'	=>	240410,
                'name'	=>	'VIGENCIAS FISCALES ANTERIORES'
            ],
            [
                'account_id'	=>	136,
                'code'	=>	240801,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	137,
                'code'	=>	241205,
                'name'	=>	'VIGENCIA FISCAL CORRIENTE'
            ],
            [
                'account_id'	=>	137,
                'code'	=>	241210,
                'name'	=>	'VIGENCIAS FISCALES ANTERIORES'
            ],
            [
                'account_id'	=>	138,
                'code'	=>	241601,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	139,
                'code'	=>	242001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	140,
                'code'	=>	242405,
                'name'	=>	'VIGENCIA FISCAL CORRIENTE'
            ],
            [
                'account_id'	=>	140,
                'code'	=>	242410,
                'name'	=>	'VIGENCIAS FISCALES ANTERIORES'
            ],
            [
                'account_id'	=>	141,
                'code'	=>	242801,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	142,
                'code'	=>	243201,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	143,
                'code'	=>	243605,
                'name'	=>	'VIGENCIA FISCAL CORRIENTE'
            ],
            [
                'account_id'	=>	143,
                'code'	=>	243610,
                'name'	=>	'VIGENCIAS FISCALES ANTERIORES'
            ],
            [
                'account_id'	=>	144,
                'code'	=>	244001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	145,
                'code'	=>	244405,
                'name'	=>	'DE HIDROCARBUROS'
            ],
            [
                'account_id'	=>	145,
                'code'	=>	244410,
                'name'	=>	'DE MINAS'
            ],
            [
                'account_id'	=>	146,
                'code'	=>	244801,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	147,
                'code'	=>	245201,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	148,
                'code'	=>	245601,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	149,
                'code'	=>	246001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	150,
                'code'	=>	246405,
                'name'	=>	'DE LICORES'
            ],
            [
                'account_id'	=>	150,
                'code'	=>	246410,
                'name'	=>	'DE CERVEZAS'
            ],
            [
                'account_id'	=>	150,
                'code'	=>	246415,
                'name'	=>	'DE CIGARRILLOS'
            ],
            [
                'account_id'	=>	151,
                'code'	=>	246801,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	152,
                'code'	=>	247201,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	153,
                'code'	=>	247601,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	154,
                'code'	=>	249501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	155,
                'code'	=>	250501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	156,
                'code'	=>	251005,
                'name'	=>	'LEY LABORAL ANTERIOR'
            ],
            [
                'account_id'	=>	156,
                'code'	=>	251010,
                'name'	=>	'LEY 50 DE 1990 Y NORMAS POSTERIORES'
            ],
            [
                'account_id'	=>	157,
                'code'	=>	251501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	158,
                'code'	=>	252001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	159,
                'code'	=>	252501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	160,
                'code'	=>	253005,
                'name'	=>	'PRIMAS'
            ],
            [
                'account_id'	=>	160,
                'code'	=>	253010,
                'name'	=>	'AUXILIOS'
            ],
            [
                'account_id'	=>	160,
                'code'	=>	253015,
                'name'	=>	'DOTACION Y SUMINISTRO A TRABAJADORES'
            ],
            [
                'account_id'	=>	160,
                'code'	=>	253020,
                'name'	=>	'BONIFICACIONES'
            ],
            [
                'account_id'	=>	160,
                'code'	=>	253025,
                'name'	=>	'SEGUROS'
            ],
            [
                'account_id'	=>	160,
                'code'	=>	253095,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	161,
                'code'	=>	253201,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	162,
                'code'	=>	253501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	163,
                'code'	=>	254001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	164,
                'code'	=>	260505,
                'name'	=>	'INTERESES'
            ],
            [
                'account_id'	=>	164,
                'code'	=>	260510,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	164,
                'code'	=>	260515,
                'name'	=>	'HONORARIOS'
            ],
            [
                'account_id'	=>	164,
                'code'	=>	260520,
                'name'	=>	'SERVICIOS TECNICOS'
            ],
            [
                'account_id'	=>	164,
                'code'	=>	260525,
                'name'	=>	'TRANSPORTES, FLETES Y ACARREOS'
            ],
            [
                'account_id'	=>	164,
                'code'	=>	260530,
                'name'	=>	'GASTOS DE VIAJE'
            ],
            [
                'account_id'	=>	164,
                'code'	=>	260535,
                'name'	=>	'SERVICIOS PUBLICOS'
            ],
            [
                'account_id'	=>	164,
                'code'	=>	260540,
                'name'	=>	'REGALIAS'
            ],
            [
                'account_id'	=>	164,
                'code'	=>	260545,
                'name'	=>	'GARANTIAS'
            ],
            [
                'account_id'	=>	164,
                'code'	=>	260550,
                'name'	=>	'MATERIALES Y REPUESTOS'
            ],
            [
                'account_id'	=>	164,
                'code'	=>	260595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	165,
                'code'	=>	261005,
                'name'	=>	'CESANTIAS'
            ],
            [
                'account_id'	=>	165,
                'code'	=>	261010,
                'name'	=>	'INTERESES SOBRE CESANTIAS'
            ],
            [
                'account_id'	=>	165,
                'code'	=>	261015,
                'name'	=>	'VACACIONES'
            ],
            [
                'account_id'	=>	165,
                'code'	=>	261020,
                'name'	=>	'PRIMA DE SERVICIOS'
            ],
            [
                'account_id'	=>	165,
                'code'	=>	261025,
                'name'	=>	'PRESTACIONES EXTRALEGALES'
            ],
            [
                'account_id'	=>	165,
                'code'	=>	261030,
                'name'	=>	'VIATICOS'
            ],
            [
                'account_id'	=>	165,
                'code'	=>	261095,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	166,
                'code'	=>	261505,
                'name'	=>	'DE RENTA Y COMPLEMENTARIOS'
            ],
            [
                'account_id'	=>	166,
                'code'	=>	261510,
                'name'	=>	'DE INDUSTRIA Y COMERCIO'
            ],
            [
                'account_id'	=>	166,
                'code'	=>	261515,
                'name'	=>	'TASA POR UTILIZACION DE PUERTOS'
            ],
            [
                'account_id'	=>	166,
                'code'	=>	261520,
                'name'	=>	'DE VEHICULOS'
            ],
            [
                'account_id'	=>	166,
                'code'	=>	261525,
                'name'	=>	'DE HIDROCARBUROS Y MINAS'
            ],
            [
                'account_id'	=>	166,
                'code'	=>	261595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	167,
                'code'	=>	262005,
                'name'	=>	'CALCULO ACTUARIAL PENSIONES DE JUBILACION'
            ],
            [
                'account_id'	=>	167,
                'code'	=>	262010,
                'name'	=>	'PENSIONES DE JUBILACION POR AMORTIZAR (DB)'
            ],
            [
                'account_id'	=>	168,
                'code'	=>	262505,
                'name'	=>	'ACUEDUCTO Y ALCANTARILLADO'
            ],
            [
                'account_id'	=>	168,
                'code'	=>	262510,
                'name'	=>	'ENERGIA ELECTRICA'
            ],
            [
                'account_id'	=>	168,
                'code'	=>	262515,
                'name'	=>	'TELEFONOS'
            ],
            [
                'account_id'	=>	168,
                'code'	=>	262595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263005,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263010,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263015,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263020,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263025,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263030,
                'name'	=>	'EQUIPO MEDICO - CIENTIFICO'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263035,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263040,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263045,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263050,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263055,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263060,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263065,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263070,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263075,
                'name'	=>	'PLANTACIONES AGRICOLAS Y FORESTALES'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263080,
                'name'	=>	'VIAS DE CUMUNICACION'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263085,
                'name'	=>	'POZOS ARTESIANOS'
            ],
            [
                'account_id'	=>	169,
                'code'	=>	263095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	170,
                'code'	=>	263505,
                'name'	=>	'MULTAS Y SANCIONES AUTORIDADES ADMINISTRATIVAS'
            ],
            [
                'account_id'	=>	170,
                'code'	=>	263510,
                'name'	=>	'INTERESES POR MULTAS Y SANCIONES'
            ],
            [
                'account_id'	=>	170,
                'code'	=>	263515,
                'name'	=>	'RECLAMOS'
            ],
            [
                'account_id'	=>	170,
                'code'	=>	263520,
                'name'	=>	'LABORALES'
            ],
            [
                'account_id'	=>	170,
                'code'	=>	263525,
                'name'	=>	'CIVILES'
            ],
            [
                'account_id'	=>	170,
                'code'	=>	263530,
                'name'	=>	'PENALES'
            ],
            [
                'account_id'	=>	170,
                'code'	=>	263535,
                'name'	=>	'ADMINISTRATIVOS'
            ],
            [
                'account_id'	=>	170,
                'code'	=>	263540,
                'name'	=>	'COMERCIALES'
            ],
            [
                'account_id'	=>	170,
                'code'	=>	263595,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	171,
                'code'	=>	264001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	172,
                'code'	=>	269505,
                'name'	=>	'PARA BENEFICENCIA'
            ],
            [
                'account_id'	=>	172,
                'code'	=>	269510,
                'name'	=>	'PARA COMUNICACIONES'
            ],
            [
                'account_id'	=>	172,
                'code'	=>	269515,
                'name'	=>	'PARA PERDIDA EN TRANSPORTE'
            ],
            [
                'account_id'	=>	172,
                'code'	=>	269520,
                'name'	=>	'PARA OPERACION'
            ],
            [
                'account_id'	=>	172,
                'code'	=>	269525,
                'name'	=>	'PARA PROTECCION DE BIENES AGOTABLES'
            ],
            [
                'account_id'	=>	172,
                'code'	=>	269530,
                'name'	=>	'PARA AJUSTES EN REDENCION DE UNIDADES'
            ],
            [
                'account_id'	=>	172,
                'code'	=>	269535,
                'name'	=>	'AUTOSEGURO'
            ],
            [
                'account_id'	=>	172,
                'code'	=>	269540,
                'name'	=>	'PLANES Y PROGRAMAS DE REFORESTACION Y ELECTRIFICACION'
            ],
            [
                'account_id'	=>	172,
                'code'	=>	269595,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	173,
                'code'	=>	270505,
                'name'	=>	'INTERESES'
            ],
            [
                'account_id'	=>	173,
                'code'	=>	270510,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	173,
                'code'	=>	270515,
                'name'	=>	'ARRENDAMIENTOS'
            ],
            [
                'account_id'	=>	173,
                'code'	=>	270520,
                'name'	=>	'HONORARIOS'
            ],
            [
                'account_id'	=>	173,
                'code'	=>	270525,
                'name'	=>	'SERVICIOS TECNICOS'
            ],
            [
                'account_id'	=>	173,
                'code'	=>	270530,
                'name'	=>	'DE SUSCRIPTORES'
            ],
            [
                'account_id'	=>	173,
                'code'	=>	270535,
                'name'	=>	'TRANSPORTES, FLETES Y ACARREOS'
            ],
            [
                'account_id'	=>	173,
                'code'	=>	270540,
                'name'	=>	'MERCANCIA EN TRANSITO YA VENDIDA'
            ],
            [
                'account_id'	=>	173,
                'code'	=>	270545,
                'name'	=>	'MATRICULAS Y PENSIONES'
            ],
            [
                'account_id'	=>	173,
                'code'	=>	270550,
                'name'	=>	'CUOTAS DE ADMINISTRACION'
            ],
            [
                'account_id'	=>	173,
                'code'	=>	270595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	174,
                'code'	=>	271005,
                'name'	=>	'REAJUSTE DEL SISTEMA'
            ],
            [
                'account_id'	=>	175,
                'code'	=>	271501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	176,
                'code'	=>	272001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	177,
                'code'	=>	272505,
                'name'	=>	'POR DEPRECIACION FLEXIBLE'
            ],
            [
                'account_id'	=>	177,
                'code'	=>	272595,
                'name'	=>	'DIVERSOS'
            ],
            [
                'account_id'	=>	177,
                'code'	=>	272599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	178,
                'code'	=>	280505,
                'name'	=>	'DE CLIENTES'
            ],
            [
                'account_id'	=>	178,
                'code'	=>	280510,
                'name'	=>	'SOBRE CONTRATOS'
            ],
            [
                'account_id'	=>	178,
                'code'	=>	280515,
                'name'	=>	'PARA OBRAS EN PROCESO'
            ],
            [
                'account_id'	=>	178,
                'code'	=>	280595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	179,
                'code'	=>	281005,
                'name'	=>	'PARA FUTURA SUSCRIPCION DE ACCIONES'
            ],
            [
                'account_id'	=>	179,
                'code'	=>	281010,
                'name'	=>	'PARA FUTURO PAGO DE CUOTAS O DERECHOS SOCIALES'
            ],
            [
                'account_id'	=>	179,
                'code'	=>	281015,
                'name'	=>	'PARA GARANTIA EN LA PRESTACION DE SERVICIOS'
            ],
            [
                'account_id'	=>	179,
                'code'	=>	281020,
                'name'	=>	'PARA GARANTIA DE CONTRATOS'
            ],
            [
                'account_id'	=>	179,
                'code'	=>	281025,
                'name'	=>	'DE LICITACIONES'
            ],
            [
                'account_id'	=>	179,
                'code'	=>	281030,
                'name'	=>	'DE MANEJO DE BIENES'
            ],
            [
                'account_id'	=>	179,
                'code'	=>	281035,
                'name'	=>	'FONDO DE RESERVA'
            ],
            [
                'account_id'	=>	179,
                'code'	=>	281095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	180,
                'code'	=>	281505,
                'name'	=>	'VALORES RECIBIDOS PARA TERCEROS'
            ],
            [
                'account_id'	=>	180,
                'code'	=>	281510,
                'name'	=>	'VENTA POR CUENTA DE TERCEROS'
            ],
            [
                'account_id'	=>	181,
                'code'	=>	282001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	182,
                'code'	=>	282505,
                'name'	=>	'CUMPLIMIENTO OBLIGACIONES LABORALES'
            ],
            [
                'account_id'	=>	182,
                'code'	=>	282510,
                'name'	=>	'PARA ESTABILIDAD DE OBRA'
            ],
            [
                'account_id'	=>	182,
                'code'	=>	282515,
                'name'	=>	'GARANTIA CUMPLIMIENTO DE CONTRATOS'
            ],
            [
                'account_id'	=>	183,
                'code'	=>	283005,
                'name'	=>	'INDEMNIZACIONES'
            ],
            [
                'account_id'	=>	183,
                'code'	=>	283010,
                'name'	=>	'DEPOSITOS JUDICIALES'
            ],
            [
                'account_id'	=>	184,
                'code'	=>	283505,
                'name'	=>	'CUOTAS NETAS'
            ],
            [
                'account_id'	=>	184,
                'code'	=>	283510,
                'name'	=>	'GRUPOS EN FORMACION'
            ],
            [
                'account_id'	=>	185,
                'code'	=>	284001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	186,
                'code'	=>	289505,
                'name'	=>	'PRESTAMOS DE PRODUCTOS'
            ],
            [
                'account_id'	=>	186,
                'code'	=>	289510,
                'name'	=>	'REEMBOLSO DE COSTOS EXPLORATORIOS'
            ],
            [
                'account_id'	=>	186,
                'code'	=>	289515,
                'name'	=>	'PROGRAMA DE EXTENSION AGROPECUARIA'
            ],
            [
                'account_id'	=>	187,
                'code'	=>	290505,
                'name'	=>	'GARANTIA GENERAL'
            ],
            [
                'account_id'	=>	187,
                'code'	=>	290510,
                'name'	=>	'GARANTIA ESPECIFICA'
            ],
            [
                'account_id'	=>	188,
                'code'	=>	291001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	189,
                'code'	=>	291501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	190,
                'code'	=>	310505,
                'name'	=>	'CAPITAL AUTORIZADO'
            ],
            [
                'account_id'	=>	190,
                'code'	=>	310510,
                'name'	=>	'CAPITAL POR SUSCRIBIR (DB)'
            ],
            [
                'account_id'	=>	190,
                'code'	=>	310515,
                'name'	=>	'CAPITAL SUSCRITO POR COBRAR (DB)'
            ],
            [
                'account_id'	=>	191,
                'code'	=>	311005,
                'name'	=>	'ACCIONES PROPIAS READQUIRIDAS (DB)'
            ],
            [
                'account_id'	=>	191,
                'code'	=>	311010,
                'name'	=>	'CUOTAS O PARTES DE INTERES SOCIAL PROPIAS READQUIRIDAS (DB)'
            ],
            [
                'account_id'	=>	192,
                'code'	=>	311505,
                'name'	=>	'CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_id'	=>	192,
                'code'	=>	311510,
                'name'	=>	'APORTES DE SOCIOS - FONDO MUTUO DE INVERSION'
            ],
            [
                'account_id'	=>	192,
                'code'	=>	311515,
                'name'	=>	'CONTRIBUCION DE LA EMPRESA - FONDO MUTUO DE INVERSION'
            ],
            [
                'account_id'	=>	192,
                'code'	=>	311520,
                'name'	=>	'SUSCRIPCIONES DEL PUBLICO'
            ],
            [
                'account_id'	=>	193,
                'code'	=>	312001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	194,
                'code'	=>	312501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	195,
                'code'	=>	313001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	196,
                'code'	=>	313501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	197,
                'code'	=>	314001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	198,
                'code'	=>	320505,
                'name'	=>	'PRIMA EN COLOCACION DE ACCIONES'
            ],
            [
                'account_id'	=>	198,
                'code'	=>	320510,
                'name'	=>	'PRIMA EN COLOCACION DE ACCIONES POR COBRAR (DB)'
            ],
            [
                'account_id'	=>	198,
                'code'	=>	320515,
                'name'	=>	'PRIMA EN COLOCACION DE CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_id'	=>	199,
                'code'	=>	321005,
                'name'	=>	'EN DINERO'
            ],
            [
                'account_id'	=>	199,
                'code'	=>	321010,
                'name'	=>	'EN VALORES MOBILIARIOS'
            ],
            [
                'account_id'	=>	199,
                'code'	=>	321015,
                'name'	=>	'EN BIENES MUEBLES'
            ],
            [
                'account_id'	=>	199,
                'code'	=>	321020,
                'name'	=>	'EN BIENES INMUEBLES'
            ],
            [
                'account_id'	=>	199,
                'code'	=>	321025,
                'name'	=>	'EN INTANGIBLES'
            ],
            [
                'account_id'	=>	200,
                'code'	=>	321501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	201,
                'code'	=>	330505,
                'name'	=>	'RESERVA LEGAL'
            ],
            [
                'account_id'	=>	201,
                'code'	=>	330510,
                'name'	=>	'RESERVAS POR DISPOSICIONES FISCALES'
            ],
            [
                'account_id'	=>	201,
                'code'	=>	330515,
                'name'	=>	'RESERVA PARA READQUISICION DE ACCIONES'
            ],
            [
                'account_id'	=>	201,
                'code'	=>	330517,
                'name'	=>	'RESERVA PARA READQUISICION DE CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_id'	=>	201,
                'code'	=>	330520,
                'name'	=>	'RESERVA PARA EXTENSION AGROPECUARIA'
            ],
            [
                'account_id'	=>	201,
                'code'	=>	330525,
                'name'	=>	'RESERVA LEY 7a. DE 1990'
            ],
            [
                'account_id'	=>	201,
                'code'	=>	330530,
                'name'	=>	'RESERVA PARA REPOSICION DE SEMOVIENTES'
            ],
            [
                'account_id'	=>	201,
                'code'	=>	330535,
                'name'	=>	'RESERVA LEY 4a DE 1980'
            ],
            [
                'account_id'	=>	201,
                'code'	=>	330595,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	202,
                'code'	=>	331005,
                'name'	=>	'PARA FUTURAS CAPITALIZACIONES'
            ],
            [
                'account_id'	=>	202,
                'code'	=>	331010,
                'name'	=>	'PARA REPOSICION DE ACTIVOS'
            ],
            [
                'account_id'	=>	202,
                'code'	=>	331015,
                'name'	=>	'PARA FUTUROS ENSANCHES'
            ],
            [
                'account_id'	=>	202,
                'code'	=>	331095,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	203,
                'code'	=>	331505,
                'name'	=>	'PARA BENEFICENCIA Y CIVISMO'
            ],
            [
                'account_id'	=>	203,
                'code'	=>	331510,
                'name'	=>	'PARA FUTURAS CAPITALIZACIONES'
            ],
            [
                'account_id'	=>	203,
                'code'	=>	331515,
                'name'	=>	'PARA FUTUROS ENSANCHES'
            ],
            [
                'account_id'	=>	203,
                'code'	=>	331520,
                'name'	=>	'PARA ADQUISICION O REPOSICION DE PROPIEDADES PLANTA Y EQUIPO'
            ],
            [
                'account_id'	=>	203,
                'code'	=>	331525,
                'name'	=>	'PARA INVESTIGACIONES Y DESARROLLO'
            ],
            [
                'account_id'	=>	203,
                'code'	=>	331530,
                'name'	=>	'PARA FOMENTO ECONOMICO'
            ],
            [
                'account_id'	=>	203,
                'code'	=>	331535,
                'name'	=>	'PARA CAPITAL DE TRABAJO'
            ],
            [
                'account_id'	=>	203,
                'code'	=>	331540,
                'name'	=>	'PARA ESTABILIZACION DE RENDIMIENTOS'
            ],
            [
                'account_id'	=>	203,
                'code'	=>	331545,
                'name'	=>	'A DISPOSICION DEL MAXIMO ORGANO SOCIAL'
            ],
            [
                'account_id'	=>	203,
                'code'	=>	331595,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	204,
                'code'	=>	340505,
                'name'	=>	'DE CAPITAL SOCIAL'
            ],
            [
                'account_id'	=>	204,
                'code'	=>	340510,
                'name'	=>	'DE SUPERAVIT DE CAPITAL'
            ],
            [
                'account_id'	=>	204,
                'code'	=>	340515,
                'name'	=>	'DE RESERVAS'
            ],
            [
                'account_id'	=>	204,
                'code'	=>	340520,
                'name'	=>	'DE RESULTADOS DE EJERCICIOS ANTERIORES'
            ],
            [
                'account_id'	=>	204,
                'code'	=>	340525,
                'name'	=>	'DE ACTIVOS EN PERIODO IMPRODUCTIVO'
            ],
            [
                'account_id'	=>	205,
                'code'	=>	341001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	206,
                'code'	=>	341501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	207,
                'code'	=>	350501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	208,
                'code'	=>	351001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	209,
                'code'	=>	360505,
                'name'	=>	'UTILIDAD DEL EJERCICIO'
            ],
            [
                'account_id'	=>	209,
                'code'	=>	360510,
                'name'	=>	'UTILIDAD POR EXPOSICION A LA INFLACION'
            ],
            [
                'account_id'	=>	210,
                'code'	=>	361005,
                'name'	=>	'PERDIDA DEL EJERCICIO'
            ],
            [
                'account_id'	=>	210,
                'code'	=>	361010,
                'name'	=>	'PERDIDA POR EXPOSICION A LA INFLACION'
            ],
            [
                'account_id'	=>	211,
                'code'	=>	370501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	212,
                'code'	=>	371001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	213,
                'code'	=>	380505,
                'name'	=>	'ACCIONES'
            ],
            [
                'account_id'	=>	213,
                'code'	=>	380510,
                'name'	=>	'CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_id'	=>	213,
                'code'	=>	380515,
                'name'	=>	'DERECHOS FIDUCIARIOS'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381004,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381006,
                'name'	=>	'MATERIALES PROYECTOS PETROLEROS'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381008,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381012,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381016,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381020,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381024,
                'name'	=>	'EQUIPO MEDICO CIENTIFICO'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381028,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381032,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381036,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381040,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381044,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381048,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381052,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381056,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381060,
                'name'	=>	'PLANTACIONES AGRICOLAS Y FORESTALES'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381064,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381068,
                'name'	=>	'MINAS Y CANTERAS'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381072,
                'name'	=>	'POZOS ARTESIANOS'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381076,
                'name'	=>	'YACIMIENTOS'
            ],
            [
                'account_id'	=>	214,
                'code'	=>	381080,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_id'	=>	215,
                'code'	=>	389505,
                'name'	=>	'BIENES DE ARTE Y CULTURA'
            ],
            [
                'account_id'	=>	215,
                'code'	=>	389510,
                'name'	=>	'BIENES ENTREGADOS EN COMODATO'
            ],
            [
                'account_id'	=>	215,
                'code'	=>	389515,
                'name'	=>	'BIENES RECIBIDOS EN PAGO'
            ],
            [
                'account_id'	=>	215,
                'code'	=>	389520,
                'name'	=>	'INVENTARIO DE SEMOVIENTES'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410505,
                'name'	=>	'CULTIVO DE CEREALES'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410510,
                'name'	=>	'CULTIVOS DE HORTALIZAS, LEGUMBRES Y PLANTAS ORNAMENTALES'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410515,
                'name'	=>	'CULTIVOS DE FRUTAS, NUECES Y PLANTAS AROMATICAS'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410520,
                'name'	=>	'CULTIVO DE CAFE'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410525,
                'name'	=>	'CULTIVO DE FLORES'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410530,
                'name'	=>	'CULTIVO DE CAÑA DE AZUCAR'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410535,
                'name'	=>	'CULTIVO DE ALGODON Y PLANTAS PARA MATERIAL TEXTIL'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410540,
                'name'	=>	'CULTIVO DE BANANO'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410545,
                'name'	=>	'OTROS CULTIVOS AGRICOLAS'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410550,
                'name'	=>	'CRIA DE OVEJAS, CABRAS, ASNOS, MULAS Y BURDEGANOS'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410555,
                'name'	=>	'CRIA DE GANADO CABALLAR Y VACUNO.'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410560,
                'name'	=>	'PRODUCCION AVICOLA'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410565,
                'name'	=>	'CRIA DE OTROS ANIMALES'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410570,
                'name'	=>	'SERVICIOS AGRICOLAS Y GANADEROS'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410575,
                'name'	=>	'ACTIVIDAD DE CAZA'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410580,
                'name'	=>	'ACTIVIDAD DE SILVICULTURA'
            ],
            [
                'account_id'	=>	216,
                'code'	=>	410599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	217,
                'code'	=>	411005,
                'name'	=>	'ACTIVIDAD DE PESCA'
            ],
            [
                'account_id'	=>	217,
                'code'	=>	411010,
                'name'	=>	'EXPLOTACION DE CRIADEROS DE PECES'
            ],
            [
                'account_id'	=>	217,
                'code'	=>	411095,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	217,
                'code'	=>	411099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411505,
                'name'	=>	'CARBON'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411510,
                'name'	=>	'PETROLEO CRUDO'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411512,
                'name'	=>	'GAS NATURAL'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411514,
                'name'	=>	'SERVICIOS RELACIONADOS CON EXTRACCION DE PETROLEO Y GAS'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411515,
                'name'	=>	'MINERALES DE HIERRO'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411520,
                'name'	=>	'MINERALES METALIFEROS NO FERROSOS'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411525,
                'name'	=>	'PIEDRA, ARENA Y ARCILLA'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411527,
                'name'	=>	'PIEDRAS PRECIOSAS'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411528,
                'name'	=>	'ORO'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411530,
                'name'	=>	'OTRAS MINAS Y CANTERAS'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411532,
                'name'	=>	'PRESTACION DE SERVICIOS SECTOR MINERO'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411595,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	218,
                'code'	=>	411599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412001,
                'name'	=>	'PRODUCCION Y PROCESAMIENTO DE CARNES Y PRODUCTOS CARNICOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412002,
                'name'	=>	'PRODUCTOS DE PESCADO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412003,
                'name'	=>	'PRODUCTOS DE FRUTAS, LEGUMBRES Y HORTALIZAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412004,
                'name'	=>	'ELABORACION DE ACEITES Y GRASAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412005,
                'name'	=>	'ELABORACION DE PRODUCTOS LACTEOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412006,
                'name'	=>	'ELABORACION DE PRODUCTOS DE MOLINERIA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412007,
                'name'	=>	'ELABORACION DE ALMIDONES Y DERIVADOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412008,
                'name'	=>	'ELABORACION DE ALIMENTOS PARA ANIMALES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412009,
                'name'	=>	'ELABORACION DE PRODUCTOS PARA PANADERIA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412010,
                'name'	=>	'ELABORACION DE AZUCAR Y MELAZAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412011,
                'name'	=>	'ELABORACION DE CACAO, CHOCOLATE Y CONFITERIA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412012,
                'name'	=>	'ELABORACION DE PASTAS Y PRODUCTOS FARINACEOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412013,
                'name'	=>	'ELABORACION DE PRODUCTOS DE CAFE'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412014,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS ALIMENTICIOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412015,
                'name'	=>	'ELABORACION DE BEBIDAS ALCOHOLICAS Y ALCOHOL ETILICO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412016,
                'name'	=>	'ELABORACION DE VINOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412017,
                'name'	=>	'ELABORACION DE BEBIDAS MALTEADAS Y DE MALTA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412018,
                'name'	=>	'ELABORACION DE BEBIDAS NO ALCOHOLICAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412019,
                'name'	=>	'ELABORACION DE PRODUCTOS DE TABACO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412020,
                'name'	=>	'PREPARACION E HILATURA DE FIBRAS TEXTILES Y TEJEDURIA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412021,
                'name'	=>	'ACABADO DE PRODUCTOS TEXTILES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412022,
                'name'	=>	'ELABORACION DE ARTICULOS DE MATERIALES TEXTILES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412023,
                'name'	=>	'ELABORACION DE TAPICES Y ALFOMBRAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412024,
                'name'	=>	'ELABORACION DE CUERDAS, CORDELES, BRAMANTES Y REDES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412025,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS TEXTILES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412026,
                'name'	=>	'ELABORACION DE TEJIDOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412027,
                'name'	=>	'ELABORACION DE PRENDAS DE VESTIR'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412028,
                'name'	=>	'PREPARACION, ADOBO Y TEÑIDO DE PIELES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412029,
                'name'	=>	'CURTIDO, ADOBO O PREPARACION DE CUERO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412030,
                'name'	=>	'ELABORACION DE MALETAS, BOLSOS Y SIMILARES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412031,
                'name'	=>	'ELABORACION DE CALZADO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412032,
                'name'	=>	'PRODUCCION DE MADERA, ARTICULOS DE MADERA Y CORCHO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412033,
                'name'	=>	'ELABORACION DE PASTA Y PRODUCTOS DE MADERA, PAPEL Y CARTON'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412034,
                'name'	=>	'EDICIONES Y PUBLICACIONES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412035,
                'name'	=>	'IMPRESION'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412036,
                'name'	=>	'SERVICIOS RELACIONADOS CON LA EDICION Y LA IMPRESION'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412037,
                'name'	=>	'REPRODUCCION DE GRABACIONES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412038,
                'name'	=>	'ELABORACION DE PRODUCTOS DE HORNO DE COQUE'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412039,
                'name'	=>	'ELABORACION DE PRODUCTOS DE LA REFINACION DE PETROLEO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412040,
                'name'	=>	'ELABORACION DE SUSTANCIAS QUIMICAS BASICAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412041,
                'name'	=>	'ELABORACION DE ABONOS Y COMPUESTOS DE NITROGENO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412042,
                'name'	=>	'ELABORACION DE PLASTICO Y CAUCHO SINTETICO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412043,
                'name'	=>	'ELABORACION DE PRODUCTOS QUIMICOS DE USO AGROPECUARIO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412044,
                'name'	=>	'ELABORACION DE PINTURAS, TINTAS Y MASILLAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412045,
                'name'	=>	'ELABORACION DE PRODUCTOS FARMACEUTICOS Y BOTANICOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412046,
                'name'	=>	'ELABORACION DE JABONES, DETERGENTES Y PREPARADOS DE TOCADOR'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412047,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS QUIMICOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412048,
                'name'	=>	'ELABORACION DE FIBRAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412049,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS DE CAUCHO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412050,
                'name'	=>	'ELABORACION DE PRODUCTOS DE PLASTICO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412051,
                'name'	=>	'ELABORACION DE VIDRIO Y PRODUCTOS DE VIDRIO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412052,
                'name'	=>	'ELABORACION DE PRODUCTOS DE CERAMICA, LOZA, PIEDRA, ARCILLA Y PORCELANA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412053,
                'name'	=>	'ELABORACION DE CEMENTO, CAL Y YESO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412054,
                'name'	=>	'ELABORACION DE ARTICULOS DE HORMIGON, CEMENTO Y YESO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412055,
                'name'	=>	'CORTE, TALLADO Y ACABADO DE LA PIEDRA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412056,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS MINERALES NO METALICOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412057,
                'name'	=>	'INDUSTRIAS BASICAS Y FUNDICION DE HIERRO Y ACERO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412058,
                'name'	=>	'PRODUCTOS PRIMARIOS DE METALES PRECIOSOS Y DE METALES NO FERROSOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412059,
                'name'	=>	'FUNDICION DE METALES NO FERROSOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412060,
                'name'	=>	'FABRICACION DE PRODUCTOS METALICOS PARA USO ESTRUCTURAL'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412061,
                'name'	=>	'FORJA, PRENSADO, ESTAMPADO, LAMINADO DE METAL Y PULVIMETALURGIA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412062,
                'name'	=>	'REVESTIMIENTO DE METALES Y OBRAS DE INGENIERIA MECANICA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412063,
                'name'	=>	'FABRICACION DE ARTICULOS DE FERRETERIA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412064,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS DE METAL'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412065,
                'name'	=>	'FABRICACION DE MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412066,
                'name'	=>	'FABRICACION DE EQUIPOS DE ELEVACION Y MANIPULACION'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412067,
                'name'	=>	'ELABORACION DE APARATOS DE USO DOMESTICO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412068,
                'name'	=>	'ELABORACION DE EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412069,
                'name'	=>	'ELABORACION DE PILAS Y BATERIAS PRIMARIAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412070,
                'name'	=>	'ELABORACION DE EQUIPO DE ILUMINACION'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412071,
                'name'	=>	'ELABORACION DE OTROS TIPOS DE EQUIPO ELECTRICO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412072,
                'name'	=>	'FABRICACION DE EQUIPOS DE RADIO, TELEVISION Y COMUNICACIONES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412073,
                'name'	=>	'FABRICACION DE APARATOS E INSTRUMENTOS MEDICOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412074,
                'name'	=>	'FABRICACION DE INSTRUMENTOS DE MEDICION Y CONTROL'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412075,
                'name'	=>	'FABRICACION DE INSTRUMENTOS DE OPTICA Y EQUIPO FOTOGRAFICO'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412076,
                'name'	=>	'FABRICACION DE RELOJES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412077,
                'name'	=>	'FABRICACION DE VEHICULOS AUTOMOTORES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412078,
                'name'	=>	'FABRICACION DE CARROCERIAS PARA AUTOMOTORES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412079,
                'name'	=>	'FABRICACION DE PARTES PIEZAS Y ACCESORIOS PARA AUTOMOTORES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412080,
                'name'	=>	'FABRICACION Y REPARACION DE BUQUES Y OTRAS EMBARCACIONES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412081,
                'name'	=>	'FABRICACION DE LOCOMOTORAS Y MATERIAL RODANTE PARA FERROCARRILES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412082,
                'name'	=>	'FABRICACION DE AERONAVES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412083,
                'name'	=>	'FABRICACION DE MOTOCICLETAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412084,
                'name'	=>	'FABRICACION DE BICICLETAS Y SILLAS DE RUEDAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412085,
                'name'	=>	'FABRICACION DE OTROS TIPOS DE TRANSPORTE'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412086,
                'name'	=>	'FABRICACION DE MUEBLES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412087,
                'name'	=>	'FABRICACION DE JOYAS Y ARTICULOS CONEXOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412088,
                'name'	=>	'FABRICACION DE INSTRUMENTOS DE MUSICA'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412089,
                'name'	=>	'FABRICACION DE ARTICULOS Y EQUIPO PARA DEPORTE'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412090,
                'name'	=>	'FABRICACION DE JUEGOS Y JUGUETES'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412091,
                'name'	=>	'RECICLAMIENTO DE DESPERDICIOS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412095,
                'name'	=>	'PRODUCTOS DE OTRAS INDUSTRIAS MANUFACTURERAS'
            ],
            [
                'account_id'	=>	219,
                'code'	=>	412099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	220,
                'code'	=>	412505,
                'name'	=>	'GENERACION, CAPTACION Y DISTRIBUCION DE ENERGIA ELECTRICA'
            ],
            [
                'account_id'	=>	220,
                'code'	=>	412510,
                'name'	=>	'FABRICACION DE GAS Y DISTRIBUCION DE COMBUSTIBLES GASEOSOS'
            ],
            [
                'account_id'	=>	220,
                'code'	=>	412515,
                'name'	=>	'CAPTACION, DEPURACION Y DISTRIBUCION DE AGUA'
            ],
            [
                'account_id'	=>	220,
                'code'	=>	412595,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	220,
                'code'	=>	412599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	221,
                'code'	=>	413005,
                'name'	=>	'PREPARACION DE TERRENOS'
            ],
            [
                'account_id'	=>	221,
                'code'	=>	413010,
                'name'	=>	'CONSTRUCCION DE EDIFICIOS Y OBRAS DE INGENIERIA CIVIL'
            ],
            [
                'account_id'	=>	221,
                'code'	=>	413015,
                'name'	=>	'ACONDICIONAMIENTO DE EDIFICIOS'
            ],
            [
                'account_id'	=>	221,
                'code'	=>	413020,
                'name'	=>	'TERMINACION DE EDIFICACIONES'
            ],
            [
                'account_id'	=>	221,
                'code'	=>	413025,
                'name'	=>	'ALQUILER DE EQUIPO CON OPERARIOS'
            ],
            [
                'account_id'	=>	221,
                'code'	=>	413095,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	221,
                'code'	=>	413099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413502,
                'name'	=>	'VENTA DE VEHICULOS AUTOMOTORES'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413504,
                'name'	=>	'MANTENIMIENTO, REPARACION Y LAVADO DE VEHICULOS AUTOMOTORES'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413506,
                'name'	=>	'VENTA DE PARTES, PIEZAS Y ACCESORIOS DE VEHICULOS AUTOMOTORES'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413508,
                'name'	=>	'VENTA DE COMBUSTIBLES SOLIDOS, LIQUIDOS, GASEOSOS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413510,
                'name'	=>	'VENTA DE LUBRICANTES, ADITIVOS, LLANTAS Y LUJOS PARA AUTOMOTORES'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413512,
                'name'	=>	'VENTA A CAMBIO DE RETRIBUCION O POR CONTRATA'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413514,
                'name'	=>	'VENTA DE INSUMOS, MATERIAS PRIMAS AGROPECUARIAS Y FLORES'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413516,
                'name'	=>	'VENTA DE OTROS INSUMOS Y MATERIAS PRIMAS NO AGROPECUARIAS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413518,
                'name'	=>	'VENTA DE ANIMALES VIVOS Y CUEROS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413520,
                'name'	=>	'VENTA DE PRODUCTOS EN ALMACENES NO ESPECIALIZADOS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413522,
                'name'	=>	'VENTA DE PRODUCTOS AGROPECUARIOS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413524,
                'name'	=>	'VENTA DE PRODUCTOS TEXTILES, DE VESTIR, DE CUERO Y CALZADO'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413526,
                'name'	=>	'VENTA DE PAPEL Y CARTON'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413528,
                'name'	=>	'VENTA DE LIBROS, REVISTAS, ELEMENTOS DE PAPELERIA, UTILES Y TEXTOS ESCOLARES'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413530,
                'name'	=>	'VENTA DE JUEGOS, JUGUETES Y ARTICULOS DEPORTIVOS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413532,
                'name'	=>	'VENTA DE INSTRUMENTOS QUIRURGICOS Y ORTOPEDICOS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413534,
                'name'	=>	'VENTA DE ARTICULOS EN RELOJERIAS Y JOYERIAS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413536,
                'name'	=>	'VENTA DE ELECTRODOMESTICOS Y MUEBLES'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413538,
                'name'	=>	'VENTA DE PRODUCTOS DE ASEO, FARMACEUTICOS, MEDICINALES, Y ARTICULOS DE TOCADOR'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413540,
                'name'	=>	'VENTA DE CUBIERTOS, VAJILLAS, CRISTALERIA, PORCELANAS, CERAMICAS Y OTROS ARTICULOS DE USO DOMESTICO'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413542,
                'name'	=>	'VENTA DE MATERIALES DE CONSTRUCCION, FONTANERIA Y CALEFACCION'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413544,
                'name'	=>	'VENTA DE PINTURAS Y LACAS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413546,
                'name'	=>	'VENTA DE PRODUCTOS DE VIDRIOS Y MARQUETERIA'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413548,
                'name'	=>	'VENTA DE HERRAMIENTAS Y ARTICULOS DE FERRETERIA'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413550,
                'name'	=>	'VENTA DE QUIMICOS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413552,
                'name'	=>	'VENTA DE PRODUCTOS INTERMEDIOS, DESPERDICIOS Y DESECHOS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413554,
                'name'	=>	'VENTA DE MAQUINARIA, EQUIPO DE OFICINA Y PROGRAMAS DE COMPUTADOR'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413556,
                'name'	=>	'VENTA DE ARTICULOS EN CACHARRERIAS Y MISCELANEAS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413558,
                'name'	=>	'VENTA DE INSTRUMENTOS MUSICALES'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413560,
                'name'	=>	'VENTA DE ARTICULOS EN CASAS DE EMPEÑO Y PRENDERIAS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413562,
                'name'	=>	'VENTA DE EQUIPO FOTOGRAFICO'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413564,
                'name'	=>	'VENTA DE EQUIPO OPTICO Y DE PRECISION'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413566,
                'name'	=>	'VENTA DE EMPAQUES'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413568,
                'name'	=>	'VENTA DE EQUIPO PROFESIONAL Y CIENTIFICO'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413570,
                'name'	=>	'VENTA DE LOTERIAS, RIFAS, CHANCE, APUESTAS Y SIMILARES'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413572,
                'name'	=>	'REPARACION DE EFECTOS PERSONALES Y ELECTRODOMESTICOS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413595,
                'name'	=>	'VENTA DE OTROS PRODUCTOS'
            ],
            [
                'account_id'	=>	222,
                'code'	=>	413599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	223,
                'code'	=>	414005,
                'name'	=>	'HOTELERIA'
            ],
            [
                'account_id'	=>	223,
                'code'	=>	414010,
                'name'	=>	'CAMPAMENTO Y OTROS TIPOS DE HOSPEDAJE'
            ],
            [
                'account_id'	=>	223,
                'code'	=>	414015,
                'name'	=>	'RESTAURANTES'
            ],
            [
                'account_id'	=>	223,
                'code'	=>	414020,
                'name'	=>	'BARES Y CANTINAS'
            ],
            [
                'account_id'	=>	223,
                'code'	=>	414095,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	223,
                'code'	=>	414099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414505,
                'name'	=>	'SERVICIO DE TRANSPORTE POR CARRETERA'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414510,
                'name'	=>	'SERVICIO DE TRANSPORTE POR VIA FERREA'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414515,
                'name'	=>	'SERVICIO DE TRANSPORTE POR VIA ACUATICA'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414520,
                'name'	=>	'SERVICIO DE TRANSPORTE POR VIA AEREA'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414525,
                'name'	=>	'SERVICIO DE TRANSPORTE POR TUBERIAS'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414530,
                'name'	=>	'MANIPULACION DE CARGA'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414535,
                'name'	=>	'ALMACENAMIENTO Y DEPOSITO'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414540,
                'name'	=>	'SERVICIOS COMPLEMENTARIOS PARA EL TRANSPORTE'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414545,
                'name'	=>	'AGENCIAS DE VIAJE'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414550,
                'name'	=>	'OTRAS AGENCIAS DE TRANSPORTE'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414555,
                'name'	=>	'SERVICIO POSTAL Y DE CORREO'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414560,
                'name'	=>	'SERVICIO TELEFONICO'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414565,
                'name'	=>	'SERVICIO DE TELEGRAFO'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414570,
                'name'	=>	'SERVICIO DE TRANSMISION DE DATOS'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414575,
                'name'	=>	'SERVICIO DE RADIO Y TELEVISION POR CABLE'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414580,
                'name'	=>	'TRANSMISION DE SONIDO E IMAGENES POR CONTRATO'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414595,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	224,
                'code'	=>	414599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415005,
                'name'	=>	'VENTA DE INVERSIONES'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415010,
                'name'	=>	'DIVIDENDOS DE SOCIEDADES ANONIMAS Y/O ASIMILADAS'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415015,
                'name'	=>	'PARTICIPACIONES DE SOCIEDADES LIMITADAS Y/O ASIMILADAS'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415020,
                'name'	=>	'INTERESES'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415025,
                'name'	=>	'REAJUSTE MONETARIO - UPAC'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415030,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415035,
                'name'	=>	'OPERACIONES DE DESCUENTO'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415040,
                'name'	=>	'CUOTAS DE INSCRIPCION - CONSORCIOS'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415045,
                'name'	=>	'CUOTAS DE ADMINISTRACION - CONSORCIOS'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415050,
                'name'	=>	'REAJUSTE DEL SISTEMA - CONSORCIOS'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415055,
                'name'	=>	'ELIMINACION DE SUSCRIPTORES - CONSORCIOS'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415060,
                'name'	=>	'CUOTAS DE INGRESO O RETIRO - SOCIEDAD ADMINISTRADORA'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415065,
                'name'	=>	'SERVICIOS A COMISIONISTAS'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415070,
                'name'	=>	'INSCRIPCIONES Y CUOTAS'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415075,
                'name'	=>	'RECUPERACION DE GARANTIAS'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415095,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	225,
                'code'	=>	415099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415505,
                'name'	=>	'ARRENDAMIENTOS DE BIENES INMUEBLES'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415510,
                'name'	=>	'INMOBILIARIAS POR RETRIBUCION O CONTRATA'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415515,
                'name'	=>	'ALQUILER EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415520,
                'name'	=>	'ALQUILER MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415525,
                'name'	=>	'ALQUILER DE EFECTOS PERSONALES Y ENSERES DOMESTICOS'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415530,
                'name'	=>	'CONSULTORIA EN EQUIPO Y PROGRAMAS DE INFORMATICA'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415535,
                'name'	=>	'PROCESAMIENTO DE DATOS'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415540,
                'name'	=>	'MANTENIMIENTO Y REPARACION DE MAQUINARIA DE OFICINA'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415545,
                'name'	=>	'INVESTIGACIONES CIENTIFICAS Y DE DESARROLLO'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415550,
                'name'	=>	'ACTIVIDADES EMPRESARIALES DE CONSULTORIA'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415555,
                'name'	=>	'PUBLICIDAD'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415560,
                'name'	=>	'DOTACION DE PERSONAL'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415565,
                'name'	=>	'INVESTIGACION Y SEGURIDAD'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415570,
                'name'	=>	'LIMPIEZA DE INMUEBLES'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415575,
                'name'	=>	'FOTOGRAFIA'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415580,
                'name'	=>	'ENVASE Y EMPAQUE'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415585,
                'name'	=>	'FOTOCOPIADO'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415590,
                'name'	=>	'MANTENIMIENTO Y REPARACION DE MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415595,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	226,
                'code'	=>	415599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	227,
                'code'	=>	416005,
                'name'	=>	'ACTIVIDADES RELACIONADAS CON LA EDUCACION'
            ],
            [
                'account_id'	=>	227,
                'code'	=>	416095,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	227,
                'code'	=>	416099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	228,
                'code'	=>	416505,
                'name'	=>	'SERVICIO HOSPITALARIO'
            ],
            [
                'account_id'	=>	228,
                'code'	=>	416510,
                'name'	=>	'SERVICIO MEDICO'
            ],
            [
                'account_id'	=>	228,
                'code'	=>	416515,
                'name'	=>	'SERVICIO ODONTOLOGICO'
            ],
            [
                'account_id'	=>	228,
                'code'	=>	416520,
                'name'	=>	'SERVICIO DE LABORATORIO'
            ],
            [
                'account_id'	=>	228,
                'code'	=>	416525,
                'name'	=>	'ACTIVIDADES VETERINARIAS'
            ],
            [
                'account_id'	=>	228,
                'code'	=>	416530,
                'name'	=>	'ACTIVIDADES DE SERVICIOS SOCIALES'
            ],
            [
                'account_id'	=>	228,
                'code'	=>	416595,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	228,
                'code'	=>	416599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417005,
                'name'	=>	'ELIMINACION DE DESPERDICIOS Y AGUAS RESIDUALES'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417010,
                'name'	=>	'ACTIVIDADES DE ASOCIACION'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417015,
                'name'	=>	'PRODUCCION Y DISTRIBUCION DE FILMES Y VIDEOCINTAS'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417020,
                'name'	=>	'EXHIBICION DE FILMES Y VIDEOCINTAS'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417025,
                'name'	=>	'ACTIVIDAD DE RADIO Y TELEVISION'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417030,
                'name'	=>	'ACTIVIDAD TEATRAL, MUSICAL Y ARTISTICA'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417035,
                'name'	=>	'GRABACION Y PRODUCCION DE DISCOS'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417040,
                'name'	=>	'ENTRETENIMIENTO Y ESPARCIMIENTO'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417045,
                'name'	=>	'AGENCIAS DE NOTICIAS'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417050,
                'name'	=>	'LAVANDERIAS Y SIMILARES'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417055,
                'name'	=>	'PELUQUERIAS Y SIMILARES'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417060,
                'name'	=>	'SERVICIOS FUNERARIOS'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417065,
                'name'	=>	'ZONAS FRANCAS'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417095,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	229,
                'code'	=>	417099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	230,
                'code'	=>	417501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	230,
                'code'	=>	417599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	231,
                'code'	=>	420505,
                'name'	=>	'MATERIA PRIMA'
            ],
            [
                'account_id'	=>	231,
                'code'	=>	420510,
                'name'	=>	'MATERIAL DE DESECHO'
            ],
            [
                'account_id'	=>	231,
                'code'	=>	420515,
                'name'	=>	'MATERIALES VARIOS'
            ],
            [
                'account_id'	=>	231,
                'code'	=>	420520,
                'name'	=>	'PRODUCTOS DE DIVERSIFICACION'
            ],
            [
                'account_id'	=>	231,
                'code'	=>	420525,
                'name'	=>	'EXCEDENTES DE EXPORTACION'
            ],
            [
                'account_id'	=>	231,
                'code'	=>	420530,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	231,
                'code'	=>	420535,
                'name'	=>	'PRODUCTOS AGRICOLAS'
            ],
            [
                'account_id'	=>	231,
                'code'	=>	420540,
                'name'	=>	'DE PROPAGANDA'
            ],
            [
                'account_id'	=>	231,
                'code'	=>	420545,
                'name'	=>	'PRODUCTOS EN REMATE'
            ],
            [
                'account_id'	=>	231,
                'code'	=>	420550,
                'name'	=>	'COMBUSTIBLES Y LUBRICANTES'
            ],
            [
                'account_id'	=>	231,
                'code'	=>	420599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421005,
                'name'	=>	'INTERESES'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421010,
                'name'	=>	'REAJUSTE MONETARIO - UPAC'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421015,
                'name'	=>	'DESCUENTOS AMORTIZADOS'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421020,
                'name'	=>	'DIFERENCIA EN CAMBIO'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421025,
                'name'	=>	'FINANCIACION VEHICULOS'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421030,
                'name'	=>	'FINANCIACION SISTEMAS DE VIAJES'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421035,
                'name'	=>	'ACEPTACIONES BANCARIAS'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421040,
                'name'	=>	'DESCUENTOS COMERCIALES CONDICIONADOS'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421045,
                'name'	=>	'DESCUENTOS BANCARIOS'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421050,
                'name'	=>	'COMISIONES CHEQUES DE OTRAS PLAZAS'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421055,
                'name'	=>	'MULTAS Y RECARGOS'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421060,
                'name'	=>	'SANCIONES CHEQUES DEVUELTOS'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	232,
                'code'	=>	421099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	233,
                'code'	=>	421505,
                'name'	=>	'DE SOCIEDADES ANONIMAS Y/O ASIMILADAS'
            ],
            [
                'account_id'	=>	233,
                'code'	=>	421510,
                'name'	=>	'DE SOCIEDADES LIMITADAS Y/O ASIMILADAS'
            ],
            [
                'account_id'	=>	233,
                'code'	=>	421599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422005,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422010,
                'name'	=>	'CONSTRUCCIONES Y EDIFICIOS'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422015,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422020,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422025,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422030,
                'name'	=>	'EQUIPO MEDICO - CIENTIFICO'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422035,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422040,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422045,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422050,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422055,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422060,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422062,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422065,
                'name'	=>	'PLANTACIONES AGRICOLAS Y FORESTALES'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422070,
                'name'	=>	'AERODROMOS'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422075,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_id'	=>	234,
                'code'	=>	422099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	235,
                'code'	=>	422505,
                'name'	=>	'SOBRE INVERSIONES'
            ],
            [
                'account_id'	=>	235,
                'code'	=>	422510,
                'name'	=>	'DE CONCESIONARIOS'
            ],
            [
                'account_id'	=>	235,
                'code'	=>	422515,
                'name'	=>	'DE ACTIVIDADES FINANCIERAS'
            ],
            [
                'account_id'	=>	235,
                'code'	=>	422520,
                'name'	=>	'POR VENTA DE SERVICIOS DE TALLER'
            ],
            [
                'account_id'	=>	235,
                'code'	=>	422525,
                'name'	=>	'POR VENTA DE SEGUROS'
            ],
            [
                'account_id'	=>	235,
                'code'	=>	422530,
                'name'	=>	'POR INGRESOS PARA TERCEROS'
            ],
            [
                'account_id'	=>	235,
                'code'	=>	422535,
                'name'	=>	'POR DISTRIBUCION DE PELICULAS'
            ],
            [
                'account_id'	=>	235,
                'code'	=>	422540,
                'name'	=>	'DERECHOS DE AUTOR'
            ],
            [
                'account_id'	=>	235,
                'code'	=>	422545,
                'name'	=>	'DERECHOS DE PROGRAMACION'
            ],
            [
                'account_id'	=>	235,
                'code'	=>	422599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	236,
                'code'	=>	423005,
                'name'	=>	'ASESORIAS'
            ],
            [
                'account_id'	=>	236,
                'code'	=>	423010,
                'name'	=>	'ASISTENCIA TECNICA'
            ],
            [
                'account_id'	=>	236,
                'code'	=>	423015,
                'name'	=>	'ADMINISTRACION DE VINCULADAS'
            ],
            [
                'account_id'	=>	236,
                'code'	=>	423099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423505,
                'name'	=>	'DE BASCULA'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423510,
                'name'	=>	'DE TRANSPORTE'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423515,
                'name'	=>	'DE PRENSA'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423520,
                'name'	=>	'ADMINISTRATIVOS'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423525,
                'name'	=>	'TECNICOS'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423530,
                'name'	=>	'DE COMPUTACION'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423535,
                'name'	=>	'DE TELEFAX'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423540,
                'name'	=>	'TALLER DE VEHICULOS'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423545,
                'name'	=>	'DE RECEPCION DE AERONAVES'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423550,
                'name'	=>	'DE TRANSPORTE PROGRAMA GAS NATURAL'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423555,
                'name'	=>	'POR CONTRATOS'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423560,
                'name'	=>	'DE TRILLLA'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423565,
                'name'	=>	'DE MANTENIMIENTO'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423570,
                'name'	=>	'AL PERSONAL'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423575,
                'name'	=>	'DE CASINO'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423580,
                'name'	=>	'FLETES'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423585,
                'name'	=>	'ENTRE COMPAÑIAS'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	237,
                'code'	=>	423599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	238,
                'code'	=>	424005,
                'name'	=>	'ACCIONES'
            ],
            [
                'account_id'	=>	238,
                'code'	=>	424010,
                'name'	=>	'CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_id'	=>	238,
                'code'	=>	424015,
                'name'	=>	'BONOS'
            ],
            [
                'account_id'	=>	238,
                'code'	=>	424020,
                'name'	=>	'CEDULAS'
            ],
            [
                'account_id'	=>	238,
                'code'	=>	424025,
                'name'	=>	'CERTIFICADOS'
            ],
            [
                'account_id'	=>	238,
                'code'	=>	424030,
                'name'	=>	'PAPELES COMERCIALES'
            ],
            [
                'account_id'	=>	238,
                'code'	=>	424035,
                'name'	=>	'TITULOS'
            ],
            [
                'account_id'	=>	238,
                'code'	=>	424045,
                'name'	=>	'DERECHOS FIDUCIARIOS'
            ],
            [
                'account_id'	=>	238,
                'code'	=>	424050,
                'name'	=>	'OBLIGATORIAS'
            ],
            [
                'account_id'	=>	238,
                'code'	=>	424095,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	238,
                'code'	=>	424099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424504,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424506,
                'name'	=>	'MATERIALES INDUSTRIA PETROLERA'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424508,
                'name'	=>	'CONSTRUCCIONES EN CURSO'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424512,
                'name'	=>	'MAQUINARIA EN MONTAJE'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424516,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424520,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424524,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424528,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424532,
                'name'	=>	'EQUIPO MEDICO - CIENTIFICO'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424536,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424540,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424544,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424548,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424552,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424556,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424560,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424562,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424564,
                'name'	=>	'PLANTACIONES AGRICOLAS Y FORESTALES'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424568,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424572,
                'name'	=>	'MINAS Y CANTERAS'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424580,
                'name'	=>	'POZOS ARTESIANOS'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424584,
                'name'	=>	'YACIMIENTOS'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424588,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_id'	=>	239,
                'code'	=>	424599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	240,
                'code'	=>	424805,
                'name'	=>	'INTANGIBLES'
            ],
            [
                'account_id'	=>	240,
                'code'	=>	424810,
                'name'	=>	'OTROS ACTIVOS'
            ],
            [
                'account_id'	=>	240,
                'code'	=>	424899,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	241,
                'code'	=>	425005,
                'name'	=>	'DEUDAS MALAS'
            ],
            [
                'account_id'	=>	241,
                'code'	=>	425010,
                'name'	=>	'SEGUROS'
            ],
            [
                'account_id'	=>	241,
                'code'	=>	425015,
                'name'	=>	'RECLAMOS'
            ],
            [
                'account_id'	=>	241,
                'code'	=>	425020,
                'name'	=>	'REINTEGRO POR PERSONAL EN COMISION'
            ],
            [
                'account_id'	=>	241,
                'code'	=>	425025,
                'name'	=>	'REINTEGRO GARANTIAS'
            ],
            [
                'account_id'	=>	241,
                'code'	=>	425030,
                'name'	=>	'DESCUENTOS CONCEDIDOS'
            ],
            [
                'account_id'	=>	241,
                'code'	=>	425035,
                'name'	=>	'REINTEGRO PROVISIONES'
            ],
            [
                'account_id'	=>	241,
                'code'	=>	425040,
                'name'	=>	'GASTOS BANCARIOS'
            ],
            [
                'account_id'	=>	241,
                'code'	=>	425045,
                'name'	=>	'DE DEPRECIACION'
            ],
            [
                'account_id'	=>	241,
                'code'	=>	425050,
                'name'	=>	'REINTEGRO DE OTROS COSTOS Y GASTOS'
            ],
            [
                'account_id'	=>	241,
                'code'	=>	425099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	242,
                'code'	=>	425505,
                'name'	=>	'POR SINIESTRO'
            ],
            [
                'account_id'	=>	242,
                'code'	=>	425510,
                'name'	=>	'POR SUMINISTROS'
            ],
            [
                'account_id'	=>	242,
                'code'	=>	425515,
                'name'	=>	'LUCRO CESANTE COMPAÑIAS DE SEGUROS'
            ],
            [
                'account_id'	=>	242,
                'code'	=>	425520,
                'name'	=>	'DAÑO EMERGENTE COMPAÑIAS DE SEGUROS'
            ],
            [
                'account_id'	=>	242,
                'code'	=>	425525,
                'name'	=>	'POR PERDIDA DE MERCANCIA'
            ],
            [
                'account_id'	=>	242,
                'code'	=>	425530,
                'name'	=>	'POR INCUMPLIMIENTO DE CONTRATOS'
            ],
            [
                'account_id'	=>	242,
                'code'	=>	425535,
                'name'	=>	'DE TERCEROS'
            ],
            [
                'account_id'	=>	242,
                'code'	=>	425540,
                'name'	=>	'POR INCAPACIDADES I.S.S.'
            ],
            [
                'account_id'	=>	242,
                'code'	=>	425595,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	242,
                'code'	=>	425599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	243,
                'code'	=>	426001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	243,
                'code'	=>	426099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	244,
                'code'	=>	426501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	244,
                'code'	=>	426599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	245,
                'code'	=>	427501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	245,
                'code'	=>	427599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429503,
                'name'	=>	'CERT'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429505,
                'name'	=>	'APROVECHAMIENTOS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429507,
                'name'	=>	'AUXILIOS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429509,
                'name'	=>	'DONACIONES'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429511,
                'name'	=>	'INGRESOS POR INVESTIGACION Y DESARROLLO'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429513,
                'name'	=>	'POR TRABAJOS EJECUTADOS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429515,
                'name'	=>	'REGALIAS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429517,
                'name'	=>	'DERIVADOS DE LAS EXPORTACIONES'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429519,
                'name'	=>	'OTROS INGRESOS DE EXPLOTACION'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429521,
                'name'	=>	'DE LA ACTIVIDAD GANADERA'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429525,
                'name'	=>	'DERECHOS Y LICITACIONES'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429530,
                'name'	=>	'INGRESOS POR ELEMENTOS PERDIDOS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429533,
                'name'	=>	'MULTAS Y RECARGOS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429535,
                'name'	=>	'PREAVISOS DESCONTADOS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429537,
                'name'	=>	'RECLAMOS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429540,
                'name'	=>	'RECOBRO DE DAÑOS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429543,
                'name'	=>	'PREMIOS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429545,
                'name'	=>	'BONIFICACIONES'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429547,
                'name'	=>	'PRODUCTOS DESCONTADOS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429549,
                'name'	=>	'RECONOCIMIENTOS I.S.S.'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429551,
                'name'	=>	'EXCEDENTES'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429553,
                'name'	=>	'SOBRANTES DE CAJA MENOR'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429555,
                'name'	=>	'SOBRANTES EN LIQUIDACION FLETES'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429557,
                'name'	=>	'SUBSIDIOS ESTATALES'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429559,
                'name'	=>	'CAPACITACION DISTRIBUIDORES'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429561,
                'name'	=>	'DE ESCRITURACION'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429563,
                'name'	=>	'REGISTRO PROMESAS DE VENTA'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429567,
                'name'	=>	'UTILES, PAPELERIA Y FOTOCOPIAS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429571,
                'name'	=>	'RESULTADOS MATRICULAS Y TRASPASOS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429573,
                'name'	=>	'DECORACIONES'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429575,
                'name'	=>	'MANEJO DE CARGA'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429579,
                'name'	=>	'HISTORIA CLINICA'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429581,
                'name'	=>	'AJUSTE AL PESO'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429583,
                'name'	=>	'LLAMADAS TELEFONICAS'
            ],
            [
                'account_id'	=>	246,
                'code'	=>	429599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470505,
                'name'	=>	'INVERSIONES (CR)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470510,
                'name'	=>	'INVENTARIOS (CR)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470515,
                'name'	=>	'PROPIEDADES, PLANTA Y EQUIPO (CR)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470520,
                'name'	=>	'INTANGIBLES (CR)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470525,
                'name'	=>	'ACTIVOS DIFERIDOS'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470530,
                'name'	=>	'OTROS ACTIVOS (CR)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470535,
                'name'	=>	'PASIVOS SUJETOS DE AJUSTE'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470540,
                'name'	=>	'PATRIMONIO'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470545,
                'name'	=>	'DEPRECIACION ACUMULADA (DB)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470550,
                'name'	=>	'DEPRECIACION DIFERIDA (CR)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470555,
                'name'	=>	'AGOTAMIENTO ACUMULADO (DB)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470560,
                'name'	=>	'AMORTIZACION ACUMULADA (DB)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470565,
                'name'	=>	'INGRESOS OPERACIONALES (DB)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470570,
                'name'	=>	'INGRESOS NO OPERACIONALES (DB)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470575,
                'name'	=>	'GASTOS OPERACIONALES DE ADMINISTRACION (CR)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470580,
                'name'	=>	'GASTOS OPERACIONALES DE VENTAS (CR)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470585,
                'name'	=>	'GASTOS NO OPERACIONALES (CR)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470590,
                'name'	=>	'COMPRAS (CR)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470592,
                'name'	=>	'COSTO DE VENTAS (CR)'
            ],
            [
                'account_id'	=>	247,
                'code'	=>	470594,
                'name'	=>	'COSTOS DE PRODUCCION O DE OPERACION (DB)'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510503,
                'name'	=>	'SALARIO INTEGRAL'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510506,
                'name'	=>	'SUELDOS'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510512,
                'name'	=>	'JORNALES'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510515,
                'name'	=>	'HORAS EXTRAS Y RECARGOS'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510518,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510521,
                'name'	=>	'VIATICOS'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510524,
                'name'	=>	'INCAPACIDADES'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510527,
                'name'	=>	'AUXILIO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510530,
                'name'	=>	'CESANTIAS'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510533,
                'name'	=>	'INTERESES SOBRE CESANTIAS'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510536,
                'name'	=>	'PRIMA DE SERVICIOS'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510539,
                'name'	=>	'VACACIONES'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510542,
                'name'	=>	'PRIMAS EXTRALEGALES'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510545,
                'name'	=>	'AUXILIOS'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510548,
                'name'	=>	'BONIFICACIONES'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510551,
                'name'	=>	'DOTACION Y SUMINISTRO A TRABAJADORES'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510554,
                'name'	=>	'SEGUROS'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510557,
                'name'	=>	'CUOTAS PARTES PENSIONES DE JUBILACION'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510558,
                'name'	=>	'AMORTIZACION CALCULO ACTUARIAL PENSIONES DE JUBILACION'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510559,
                'name'	=>	'PENSIONES DE JUBILACION'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510560,
                'name'	=>	'INDEMNIZACIONES LABORALES'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510563,
                'name'	=>	'CAPACITACION AL PERSONAL'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510566,
                'name'	=>	'GASTOS DEPORTIVOS Y DE RECREACION'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510569,
                'name'	=>	'APORTES AL I.S.S'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510572,
                'name'	=>	'APORTES CAJAS DE COMPENSACION FAMILIAR'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510575,
                'name'	=>	'APORTES I.C.B.F.'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510578,
                'name'	=>	'SENA'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510581,
                'name'	=>	'APORTES SINDICALES'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510584,
                'name'	=>	'GASTOS MEDICOS Y DROGAS'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	248,
                'code'	=>	510599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	249,
                'code'	=>	511005,
                'name'	=>	'JUNTA DIRECTIVA'
            ],
            [
                'account_id'	=>	249,
                'code'	=>	511010,
                'name'	=>	'REVISORÍA FISCAL'
            ],
            [
                'account_id'	=>	249,
                'code'	=>	511015,
                'name'	=>	'AUDITORIA EXTERNA'
            ],
            [
                'account_id'	=>	249,
                'code'	=>	511020,
                'name'	=>	'AVALUOS'
            ],
            [
                'account_id'	=>	249,
                'code'	=>	511025,
                'name'	=>	'ASESORIA JURIDICA'
            ],
            [
                'account_id'	=>	249,
                'code'	=>	511030,
                'name'	=>	'ASESORIA FINANCIERA'
            ],
            [
                'account_id'	=>	249,
                'code'	=>	511035,
                'name'	=>	'ASESORIA TECNICA'
            ],
            [
                'account_id'	=>	249,
                'code'	=>	511095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	249,
                'code'	=>	511099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511505,
                'name'	=>	'INDUSTRIA Y COMERCIO'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511510,
                'name'	=>	'DE TIMBRES'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511515,
                'name'	=>	'A LA PROPIEDAD RAIZ'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511520,
                'name'	=>	'DERECHOS SOBRE INSTRUMENTOS PUBLICOS'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511525,
                'name'	=>	'DE VALORIZACION'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511530,
                'name'	=>	'DE TURISMO'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511535,
                'name'	=>	'TASA POR UTILIZACION DE PUERTOS'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511540,
                'name'	=>	'DE VEHICULOS'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511545,
                'name'	=>	'DE ESPECTACULOS PUBLICOS'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511550,
                'name'	=>	'CUOTAS DE FOMENTO'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511570,
                'name'	=>	'IVA DESCONTABLE'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	250,
                'code'	=>	511599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512005,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512010,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512015,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512020,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512025,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512030,
                'name'	=>	'EQUIPO MEDICO - CIENTIFICO'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512035,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512040,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512045,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512050,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512055,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512060,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512065,
                'name'	=>	'AERODROMOS'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512070,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	251,
                'code'	=>	512099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	252,
                'code'	=>	512505,
                'name'	=>	'CONTRIBUCIONES'
            ],
            [
                'account_id'	=>	252,
                'code'	=>	512510,
                'name'	=>	'AFILIACIONES Y SOSTENIMIENTO'
            ],
            [
                'account_id'	=>	252,
                'code'	=>	512599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513005,
                'name'	=>	'MANEJO'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513010,
                'name'	=>	'CUMPLIMIENTO'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513015,
                'name'	=>	'CORRIENTE DEBIL'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513020,
                'name'	=>	'VIDA COLECTIVA'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513025,
                'name'	=>	'INCENDIO'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513030,
                'name'	=>	'TERREMOTO'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513035,
                'name'	=>	'SUSTRACCION Y HURTO'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513040,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513045,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513050,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513055,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513060,
                'name'	=>	'RESPONSABILIDAD CIVIL Y EXTRACONTRACTUAL'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513065,
                'name'	=>	'VUELO'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513070,
                'name'	=>	'ROTURA DE MAQUINARIA'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513075,
                'name'	=>	'OBLIGATORIO ACCIDENTE DE TRANSITO'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513080,
                'name'	=>	'LUCRO CESANTE'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	253,
                'code'	=>	513099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513505,
                'name'	=>	'ASEO Y VIGILANCIA'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513510,
                'name'	=>	'TEMPORALES'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513515,
                'name'	=>	'ASISTENCIA TECNICA'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513520,
                'name'	=>	'PROCESAMIENTO ELECTRONICO DE DATOS'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513525,
                'name'	=>	'ACUEDUCTO Y ALCANTARILLADO'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513530,
                'name'	=>	'ENERGIA ELECTRICA'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513535,
                'name'	=>	'TELEFONO'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513540,
                'name'	=>	'CORREO, PORTES Y TELEGRAMAS'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513545,
                'name'	=>	'FAX Y TELEX'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513550,
                'name'	=>	'TRANSPORTE, FLETES Y ACARREOS'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513555,
                'name'	=>	'GAS'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	254,
                'code'	=>	513599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	255,
                'code'	=>	514005,
                'name'	=>	'NOTARIALES'
            ],
            [
                'account_id'	=>	255,
                'code'	=>	514010,
                'name'	=>	'REGISTRO MERCANTIL'
            ],
            [
                'account_id'	=>	255,
                'code'	=>	514015,
                'name'	=>	'TRAMITES Y LICENCIAS'
            ],
            [
                'account_id'	=>	255,
                'code'	=>	514020,
                'name'	=>	'ADUANEROS'
            ],
            [
                'account_id'	=>	255,
                'code'	=>	514025,
                'name'	=>	'CONSULARES'
            ],
            [
                'account_id'	=>	255,
                'code'	=>	514095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	255,
                'code'	=>	514099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514505,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514510,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514515,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514520,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514525,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514530,
                'name'	=>	'EQUIPO MEDICO-CIENTIFICO'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514535,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514540,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514545,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514550,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514555,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514560,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514565,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514570,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_id'	=>	256,
                'code'	=>	514599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	257,
                'code'	=>	515005,
                'name'	=>	'INSTALACIONES ELECTRICAS'
            ],
            [
                'account_id'	=>	257,
                'code'	=>	515010,
                'name'	=>	'ARREGLOS ORNAMENTALES'
            ],
            [
                'account_id'	=>	257,
                'code'	=>	515015,
                'name'	=>	'REPARACIONES LOCATIVAS'
            ],
            [
                'account_id'	=>	257,
                'code'	=>	515095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	257,
                'code'	=>	515099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	258,
                'code'	=>	515505,
                'name'	=>	'ALOJAMIENTO Y MANUTENCION'
            ],
            [
                'account_id'	=>	258,
                'code'	=>	515510,
                'name'	=>	'PASAJES FLUVIALES Y/O MARITIMOS'
            ],
            [
                'account_id'	=>	258,
                'code'	=>	515515,
                'name'	=>	'PASAJES AEREOS'
            ],
            [
                'account_id'	=>	258,
                'code'	=>	515520,
                'name'	=>	'PASAJES TERRESTRES'
            ],
            [
                'account_id'	=>	258,
                'code'	=>	515525,
                'name'	=>	'PASAJES FERREOS'
            ],
            [
                'account_id'	=>	258,
                'code'	=>	515595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	258,
                'code'	=>	515599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516005,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516010,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516015,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516020,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516025,
                'name'	=>	'EQUIPO MEDICO - CIENTIFICO'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516030,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516035,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516040,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516045,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516050,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516055,
                'name'	=>	'ACUEDUCTOS, PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516060,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	259,
                'code'	=>	516099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	260,
                'code'	=>	516505,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_id'	=>	260,
                'code'	=>	516510,
                'name'	=>	'INTANGIBLES'
            ],
            [
                'account_id'	=>	260,
                'code'	=>	516515,
                'name'	=>	'CARGOS DIFERIDOS'
            ],
            [
                'account_id'	=>	260,
                'code'	=>	516595,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	260,
                'code'	=>	516599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519505,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519510,
                'name'	=>	'LIBROS, SUSCRIPCIONES, PERIODICOS Y REVISTAS'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519515,
                'name'	=>	'MUSICA AMBIENTAL'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519520,
                'name'	=>	'GASTOS DE REPRESENTACION Y RELACIONES PUBLICAS'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519525,
                'name'	=>	'ELEMENTOS DE ASEO Y CAFETERIA'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519530,
                'name'	=>	'UTILES, PAPELERIA Y FOTOCOPIAS'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519535,
                'name'	=>	'COMBUSTIBLES Y LUBRICANTES'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519540,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519545,
                'name'	=>	'TAXIS Y BUSES'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519550,
                'name'	=>	'ESTAMPILLAS'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519555,
                'name'	=>	'MICROFILMACION'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519560,
                'name'	=>	'CASINO Y RESTAURANTE'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519565,
                'name'	=>	'PARQUEADEROS'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519570,
                'name'	=>	'INDEMNIZACION POR DAÑOS A TERCEROS'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519575,
                'name'	=>	'POLVORA Y SIMILARES'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	261,
                'code'	=>	519599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	262,
                'code'	=>	519905,
                'name'	=>	'INVERSIONES'
            ],
            [
                'account_id'	=>	262,
                'code'	=>	519910,
                'name'	=>	'DEUDORES'
            ],
            [
                'account_id'	=>	262,
                'code'	=>	519915,
                'name'	=>	'PROPIEDADES, PLANTA Y EQUIPO'
            ],
            [
                'account_id'	=>	262,
                'code'	=>	519995,
                'name'	=>	'OTROS ACTIVOS'
            ],
            [
                'account_id'	=>	262,
                'code'	=>	519999,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520503,
                'name'	=>	'SALARIO INTEGRAL'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520506,
                'name'	=>	'SUELDOS'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520512,
                'name'	=>	'JORNALES'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520515,
                'name'	=>	'HORAS EXTRAS Y RECARGOS'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520518,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520521,
                'name'	=>	'VIATICOS'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520524,
                'name'	=>	'INCAPACIDADES'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520527,
                'name'	=>	'AUXILIO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520530,
                'name'	=>	'CESANTIAS'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520533,
                'name'	=>	'INTERESES SOBRE CESANTIAS'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520536,
                'name'	=>	'PRIMA DE SERVICIOS'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520539,
                'name'	=>	'VACACIONES'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520542,
                'name'	=>	'PRIMAS EXTRALEGALES'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520545,
                'name'	=>	'AUXILIOS'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520548,
                'name'	=>	'BONIFICACIONES'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520551,
                'name'	=>	'DOTACION Y SUMINISTRO A TRABAJADORES'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520554,
                'name'	=>	'SEGUROS'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520557,
                'name'	=>	'CUOTAS PARTES PENSIONES DE JUBILACION'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520558,
                'name'	=>	'AMORTIZACION CALCULO ACTUARIAL PENSIONES DE JUBILACION'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520559,
                'name'	=>	'PENSIONES DE JUBILACION'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520560,
                'name'	=>	'INDEMNIZACIONES LABORALES'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520563,
                'name'	=>	'CAPACITACION AL PERSONAL'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520566,
                'name'	=>	'GASTOS DEPORTIVOS Y DE RECREACION'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520569,
                'name'	=>	'APORTES AL I.S.S'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520572,
                'name'	=>	'APORTES CAJAS DE COMPENSACION FAMILIAR'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520575,
                'name'	=>	'APORTES I.C.B.F.'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520578,
                'name'	=>	'SENA'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520581,
                'name'	=>	'APORTES SINDICALES'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520584,
                'name'	=>	'GASTOS MEDICOS Y DROGAS'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	263,
                'code'	=>	520599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	264,
                'code'	=>	521005,
                'name'	=>	'JUNTA DIRECTIVA'
            ],
            [
                'account_id'	=>	264,
                'code'	=>	521010,
                'name'	=>	'REVISORIA FISCAL'
            ],
            [
                'account_id'	=>	264,
                'code'	=>	521015,
                'name'	=>	'AUDITORIA EXTERNA'
            ],
            [
                'account_id'	=>	264,
                'code'	=>	521020,
                'name'	=>	'AVALUOS'
            ],
            [
                'account_id'	=>	264,
                'code'	=>	521025,
                'name'	=>	'ASESORIA JURIDICA'
            ],
            [
                'account_id'	=>	264,
                'code'	=>	521030,
                'name'	=>	'ASESORIA FINANCIERA'
            ],
            [
                'account_id'	=>	264,
                'code'	=>	521035,
                'name'	=>	'ASESORIA TECNICA'
            ],
            [
                'account_id'	=>	264,
                'code'	=>	521095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	264,
                'code'	=>	521099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521505,
                'name'	=>	'INDUSTRIA Y COMERCIO'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521510,
                'name'	=>	'DE TIMBRES'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521515,
                'name'	=>	'A LA PROPIEDAD RAIZ'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521520,
                'name'	=>	'DERECHOS SOBRE INSTRUMENTOS PUBLICOS'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521525,
                'name'	=>	'DE VALORIZACION'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521530,
                'name'	=>	'DE TURISMO'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521535,
                'name'	=>	'TASA POR UTILIZACION DE PUERTOS'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521540,
                'name'	=>	'DE VEHICULOS'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521545,
                'name'	=>	'DE ESPECTACULOS PUBLICOS'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521550,
                'name'	=>	'CUOTAS DE FOMENTO'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521555,
                'name'	=>	'LICORES'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521560,
                'name'	=>	'CERVEZAS'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521565,
                'name'	=>	'CIGARRILLOS'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521570,
                'name'	=>	'IVA DESCONTABLE'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	265,
                'code'	=>	521599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522005,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522010,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522015,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522020,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522025,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522030,
                'name'	=>	'EQUIPO MEDICO - CIENTIFICO'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522035,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522040,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522045,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522050,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522055,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522060,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522065,
                'name'	=>	'AERODROMOS'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522070,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	266,
                'code'	=>	522099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	267,
                'code'	=>	522505,
                'name'	=>	'CONTRIBUCIONES'
            ],
            [
                'account_id'	=>	267,
                'code'	=>	522510,
                'name'	=>	'AFILIACIONES Y SOSTENIMIENTO'
            ],
            [
                'account_id'	=>	267,
                'code'	=>	522599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523005,
                'name'	=>	'MANEJO'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523010,
                'name'	=>	'CUMPLIMIENTO'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523015,
                'name'	=>	'CORRIENTE DEBIL'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523020,
                'name'	=>	'VIDA COLECTIVA'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523025,
                'name'	=>	'INCENDIO'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523030,
                'name'	=>	'TERREMOTO'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523035,
                'name'	=>	'SUSTRACCION Y HURTO'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523040,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523045,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523050,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523055,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523060,
                'name'	=>	'RESPONSABILIDAD CIVIL Y EXTRACONTRACTUAL'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523065,
                'name'	=>	'VUELO'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523070,
                'name'	=>	'ROTURA DE MAQUINARIA'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523075,
                'name'	=>	'OBLIGATORIO ACCIDENTE DE TRANSITO'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523080,
                'name'	=>	'LUCRO CESANTE'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	268,
                'code'	=>	523099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523505,
                'name'	=>	'ASEO Y VIGILANCIA'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523510,
                'name'	=>	'TEMPORALES'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523515,
                'name'	=>	'ASISTENCIA TECNICA'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523520,
                'name'	=>	'PROCESAMIENTO ELECTRONICO DE DATOS'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523525,
                'name'	=>	'ACUEDUCTO Y ALCANTARILLADO'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523530,
                'name'	=>	'ENERGIA ELECTRICA'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523535,
                'name'	=>	'TELEFONO'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523540,
                'name'	=>	'CORREO, PORTES Y TELEGRAMAS'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523545,
                'name'	=>	'FAX Y TELEX'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523550,
                'name'	=>	'TRANSPORTE, FLETES Y ACARREOS'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523555,
                'name'	=>	'GAS'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523560,
                'name'	=>	'PROPAGANDA Y PUBLICIDAD'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	269,
                'code'	=>	523599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	270,
                'code'	=>	524005,
                'name'	=>	'NOTARIALES'
            ],
            [
                'account_id'	=>	270,
                'code'	=>	524010,
                'name'	=>	'REGISTRO MERCANTIL'
            ],
            [
                'account_id'	=>	270,
                'code'	=>	524015,
                'name'	=>	'TRAMITES Y LICENCIAS'
            ],
            [
                'account_id'	=>	270,
                'code'	=>	524020,
                'name'	=>	'ADUANEROS'
            ],
            [
                'account_id'	=>	270,
                'code'	=>	524025,
                'name'	=>	'CONSULARES'
            ],
            [
                'account_id'	=>	270,
                'code'	=>	524095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	270,
                'code'	=>	524099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524505,
                'name'	=>	'TERRENOS'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524510,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524515,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524520,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524525,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524530,
                'name'	=>	'EQUIPO MEDICO - CIENTIFICO'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524535,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524540,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524545,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524550,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524555,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524560,
                'name'	=>	'ACUEDUCTOS PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524565,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524570,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_id'	=>	271,
                'code'	=>	524599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	272,
                'code'	=>	525005,
                'name'	=>	'INSTALACIONES ELECTRICAS'
            ],
            [
                'account_id'	=>	272,
                'code'	=>	525010,
                'name'	=>	'ARREGLOS ORNAMENTALES'
            ],
            [
                'account_id'	=>	272,
                'code'	=>	525015,
                'name'	=>	'REPARACIONES LOCATIVAS'
            ],
            [
                'account_id'	=>	272,
                'code'	=>	525095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	272,
                'code'	=>	525099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	273,
                'code'	=>	525505,
                'name'	=>	'ALOJAMIENTO Y MANUTENCION'
            ],
            [
                'account_id'	=>	273,
                'code'	=>	525510,
                'name'	=>	'PASAJES FLUVIALES Y/O MARITIMOS'
            ],
            [
                'account_id'	=>	273,
                'code'	=>	525515,
                'name'	=>	'PASAJES AEREOS'
            ],
            [
                'account_id'	=>	273,
                'code'	=>	525520,
                'name'	=>	'PASAJES TERRESTRES'
            ],
            [
                'account_id'	=>	273,
                'code'	=>	525525,
                'name'	=>	'PASAJES FERREOS'
            ],
            [
                'account_id'	=>	273,
                'code'	=>	525595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	273,
                'code'	=>	525599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526005,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526010,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526015,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526020,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526025,
                'name'	=>	'EQUIPO MEDICO - CIENTIFICO'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526030,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526035,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526040,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526045,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526050,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526055,
                'name'	=>	'ACUEDUCTOS, PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526060,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526065,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	274,
                'code'	=>	526099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	275,
                'code'	=>	526505,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_id'	=>	275,
                'code'	=>	526510,
                'name'	=>	'INTANGIBLES'
            ],
            [
                'account_id'	=>	275,
                'code'	=>	526515,
                'name'	=>	'CARGOS DIFERIDOS'
            ],
            [
                'account_id'	=>	275,
                'code'	=>	526595,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	275,
                'code'	=>	526599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	276,
                'code'	=>	527001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	276,
                'code'	=>	527099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529505,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529510,
                'name'	=>	'LIBROS, SUSCRIPCIONES, PERIODICOS Y REVISTAS'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529515,
                'name'	=>	'MUSICA AMBIENTAL'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529520,
                'name'	=>	'GASTOS DE REPRESENTACION Y RELACIONES PUBLICAS'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529525,
                'name'	=>	'ELEMENTOS DE ASEO Y CAFETERIA'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529530,
                'name'	=>	'UTILES, PAPELERIA Y FOTOCOPIAS'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529535,
                'name'	=>	'COMBUSTIBLES Y LUBRICANTES'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529540,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529545,
                'name'	=>	'TAXIS Y BUSES'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529550,
                'name'	=>	'ESTAMPILLAS'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529555,
                'name'	=>	'MICROFILMACION'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529560,
                'name'	=>	'CASINO Y RESTAURANTE'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529565,
                'name'	=>	'PARQUEADEROS'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529570,
                'name'	=>	'INDEMNIZACION POR DAÑOS A TERCEROS'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529575,
                'name'	=>	'POLVORA Y SIMILARES'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	277,
                'code'	=>	529599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	278,
                'code'	=>	529905,
                'name'	=>	'INVERSIONES'
            ],
            [
                'account_id'	=>	278,
                'code'	=>	529910,
                'name'	=>	'DEUDORES'
            ],
            [
                'account_id'	=>	278,
                'code'	=>	529915,
                'name'	=>	'INVENTARIOS'
            ],
            [
                'account_id'	=>	278,
                'code'	=>	529920,
                'name'	=>	'PROPIEDADES, PLANTA Y EQUIPO'
            ],
            [
                'account_id'	=>	278,
                'code'	=>	529995,
                'name'	=>	'OTROS ACTIVOS'
            ],
            [
                'account_id'	=>	278,
                'code'	=>	529999,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	279,
                'code'	=>	530505,
                'name'	=>	'GASTOS BANCARIOS'
            ],
            [
                'account_id'	=>	279,
                'code'	=>	530510,
                'name'	=>	'REAJUSTE MONETARIO - UPAC'
            ],
            [
                'account_id'	=>	279,
                'code'	=>	530515,
                'name'	=>	'COMISIONES'
            ],
            [
                'account_id'	=>	279,
                'code'	=>	530520,
                'name'	=>	'INTERESES'
            ],
            [
                'account_id'	=>	279,
                'code'	=>	530525,
                'name'	=>	'DIFERENCIA EN CAMBIO'
            ],
            [
                'account_id'	=>	279,
                'code'	=>	530530,
                'name'	=>	'GASTOS EN NEGOCIACION CERTIFICADOS DE CAMBIO'
            ],
            [
                'account_id'	=>	279,
                'code'	=>	530535,
                'name'	=>	'DESCUENTOS COMERCIALES CONDICIONADOS'
            ],
            [
                'account_id'	=>	279,
                'code'	=>	530540,
                'name'	=>	'GASTOS MANEJO Y EMISION DE BONOS'
            ],
            [
                'account_id'	=>	279,
                'code'	=>	530545,
                'name'	=>	'PRIMA AMORTIZADA'
            ],
            [
                'account_id'	=>	279,
                'code'	=>	530595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	279,
                'code'	=>	530599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	280,
                'code'	=>	531005,
                'name'	=>	'VENTA DE INVERSIONES'
            ],
            [
                'account_id'	=>	280,
                'code'	=>	531010,
                'name'	=>	'VENTA DE CARTERA'
            ],
            [
                'account_id'	=>	280,
                'code'	=>	531015,
                'name'	=>	'VENTA DE PROPIEDADES PLANTA Y EQUIPO'
            ],
            [
                'account_id'	=>	280,
                'code'	=>	531020,
                'name'	=>	'VENTA DE INTANGIBLES'
            ],
            [
                'account_id'	=>	280,
                'code'	=>	531025,
                'name'	=>	'VENTA DE OTROS ACTIVOS'
            ],
            [
                'account_id'	=>	280,
                'code'	=>	531030,
                'name'	=>	'RETIRO DE PROPIEDADES PLANTA Y EQUIPO'
            ],
            [
                'account_id'	=>	280,
                'code'	=>	531035,
                'name'	=>	'RETIRO DE OTROS ACTIVOS'
            ],
            [
                'account_id'	=>	280,
                'code'	=>	531040,
                'name'	=>	'PERDIDAS POR SINIESTROS'
            ],
            [
                'account_id'	=>	280,
                'code'	=>	531095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	280,
                'code'	=>	531099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	281,
                'code'	=>	531505,
                'name'	=>	'COSTAS Y PROCESOS JUDICIALES'
            ],
            [
                'account_id'	=>	281,
                'code'	=>	531510,
                'name'	=>	'ACTIVIDADES CULTURALES Y CIVICAS'
            ],
            [
                'account_id'	=>	281,
                'code'	=>	531515,
                'name'	=>	'COSTOS Y GASTOS DE EJERCICIOS ANTERIORES'
            ],
            [
                'account_id'	=>	281,
                'code'	=>	531520,
                'name'	=>	'IMPUESTOS ASUMIDOS'
            ],
            [
                'account_id'	=>	281,
                'code'	=>	531595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	281,
                'code'	=>	531599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	282,
                'code'	=>	539505,
                'name'	=>	'DEMANDAS LABORALES'
            ],
            [
                'account_id'	=>	282,
                'code'	=>	539510,
                'name'	=>	'DEMANDAS POR INCUMPLIMIENTO DE CONTRATOS'
            ],
            [
                'account_id'	=>	282,
                'code'	=>	539515,
                'name'	=>	'INDEMNIZACIONES'
            ],
            [
                'account_id'	=>	282,
                'code'	=>	539520,
                'name'	=>	'MULTAS, SANCIONES Y LITIGIOS'
            ],
            [
                'account_id'	=>	282,
                'code'	=>	539525,
                'name'	=>	'DONACIONES'
            ],
            [
                'account_id'	=>	282,
                'code'	=>	539530,
                'name'	=>	'CONSTITUCION DE GARANTIAS'
            ],
            [
                'account_id'	=>	282,
                'code'	=>	539535,
                'name'	=>	'AMORTIZACION DE BIENES ENTREGADOS EN COMODATO'
            ],
            [
                'account_id'	=>	282,
                'code'	=>	539595,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	282,
                'code'	=>	539599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	283,
                'code'	=>	540505,
                'name'	=>	'IMPUESTO DE RENTA Y COMPLEMENTARIOS'
            ],
            [
                'account_id'	=>	284,
                'code'	=>	590505,
                'name'	=>	'GANANCIAS Y PERDIDAS'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610505,
                'name'	=>	'CULTIVO DE CEREALES'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610510,
                'name'	=>	'CULTIVOS DE HORTALIZAS, LEGUMBRES Y PLANTAS ORNAMENTALES'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610515,
                'name'	=>	'CULTIVOS DE FRUTAS, NUECES Y PLANTAS AROMATICAS'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610520,
                'name'	=>	'CULTIVO DE CAFE'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610525,
                'name'	=>	'CULTIVO DE FLORES'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610530,
                'name'	=>	'CULTIVO DE CAÑA DE AZUCAR'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610535,
                'name'	=>	'CULTIVO DE ALGODON Y PLANTAS PARA MATERIAL TEXTIL'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610540,
                'name'	=>	'CULTIVO DE BANANO'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610545,
                'name'	=>	'OTROS CULTIVOS AGRICOLAS'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610550,
                'name'	=>	'CRIA DE OVEJAS, CABRAS, ASNOS, MULAS Y BURDEGANOS'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610555,
                'name'	=>	'CRIA DE GANADO CABALLAR Y VACUNO.'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610560,
                'name'	=>	'PRODUCCION AVICOLA'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610565,
                'name'	=>	'CRIA DE OTROS ANIMALES'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610570,
                'name'	=>	'SERVICIOS AGRICOLAS Y GANADEROS'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610575,
                'name'	=>	'ACTIVIDAD DE CAZA'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610580,
                'name'	=>	'ACTIVIDAD DE SILVICULTURA'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610595,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	285,
                'code'	=>	610599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	286,
                'code'	=>	611005,
                'name'	=>	'ACTIVIDAD DE PESCA'
            ],
            [
                'account_id'	=>	286,
                'code'	=>	611010,
                'name'	=>	'EXPLOTACION DE CRIADEROS DE PECES'
            ],
            [
                'account_id'	=>	286,
                'code'	=>	611095,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	286,
                'code'	=>	611099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611505,
                'name'	=>	'CARBON'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611510,
                'name'	=>	'PETROLEO CRUDO'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611512,
                'name'	=>	'GAS NATURAL'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611514,
                'name'	=>	'SERVICIOS RELACIONADOS CON EXTRACCION DE PETROLEO Y GAS'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611515,
                'name'	=>	'MINERALES DE HIERRO'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611520,
                'name'	=>	'MINERALES METALIFEROS NO FERROSOS'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611525,
                'name'	=>	'PIEDRA, ARENA Y ARCILLA'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611527,
                'name'	=>	'PIEDRAS PRECIOSAS'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611528,
                'name'	=>	'ORO'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611530,
                'name'	=>	'OTRAS MINAS Y CANTERAS'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611532,
                'name'	=>	'PRESTACION DE SERVICIOS SECTOR MINERO'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611595,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	287,
                'code'	=>	611599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612001,
                'name'	=>	'PRODUCCION Y PROCESAMIENTO DE CARNES Y PRODUCTOS CARNICOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612002,
                'name'	=>	'PRODUCTOS DE PESCADO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612003,
                'name'	=>	'PRODUCTOS DE FRUTAS, LEGUMBRES Y HORTALIZAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612004,
                'name'	=>	'ELABORACION DE ACEITES Y GRASAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612005,
                'name'	=>	'ELABORACION DE PRODUCTOS LACTEOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612006,
                'name'	=>	'ELABORACION DE PRODUCTOS DE MOLINERIA'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612007,
                'name'	=>	'ELABORACION DE ALMIDONES Y DERIVADOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612008,
                'name'	=>	'ELABORACION DE ALIMENTOS PARA ANIMALES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612009,
                'name'	=>	'ELABORACION DE PRODUCTOS PARA PANADERIA'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612010,
                'name'	=>	'ELABORACION DE AZUCAR Y MELAZAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612011,
                'name'	=>	'ELABORACION DE CACAO, CHOCOLATE Y CONFITERIA'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612012,
                'name'	=>	'ELABORACION DE PASTAS Y PRODUCTOS FARINACEOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612013,
                'name'	=>	'ELABORACION DE PRODUCTOS DE CAFE'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612014,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS ALIMENTICIOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612015,
                'name'	=>	'ELABORACION DE BEBIDAS ALCOHOLICAS Y ALCOHOL ETILICO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612016,
                'name'	=>	'ELABORACION DE VINOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612017,
                'name'	=>	'ELABORACION DE BEBIDAS MALTEADAS Y DE MALTA'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612018,
                'name'	=>	'ELABORACION DE BEBIDAS NO ALCOHOLICAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612019,
                'name'	=>	'ELABORACION DE PRODUCTOS DE TABACO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612020,
                'name'	=>	'PREPARACION E HILATURA DE FIBRAS TEXTILES Y TEJEDURIA'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612021,
                'name'	=>	'ACABADO DE PRODUCTOS TEXTILES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612022,
                'name'	=>	'ELABORACION DE ARTICULOS DE MATERIALES TEXTILES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612023,
                'name'	=>	'ELABORACION DE TAPICES Y ALFOMBRAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612024,
                'name'	=>	'ELABORACION DE CUERDAS, CORDELES, BRAMANTES Y REDES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612025,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS TEXTILES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612026,
                'name'	=>	'ELABORACION DE TEJIDOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612027,
                'name'	=>	'ELABORACION DE PRENDAS DE VESTIR'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612028,
                'name'	=>	'PREPARACION, ADOBO Y TEÑIDO DE PIELES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612029,
                'name'	=>	'CURTIDO, ADOBO O PREPARACION DE CUERO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612030,
                'name'	=>	'ELABORACION DE MALETAS, BOLSOS Y SIMILARES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612031,
                'name'	=>	'ELABORACION DE CALZADO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612032,
                'name'	=>	'PRODUCCION DE MADERA, ARTICULOS DE MADERA Y CORCHO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612033,
                'name'	=>	'ELABORACION DE PASTA Y PRODUCTOS DE MADERA, PAPEL Y CARTON'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612034,
                'name'	=>	'EDICIONES Y PUBLICACIONES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612035,
                'name'	=>	'IMPRESION'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612036,
                'name'	=>	'SERVICIOS RELACIONADOS CON LA EDICION Y LA IMPRESION'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612037,
                'name'	=>	'REPRODUCCION DE GRABACIONES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612038,
                'name'	=>	'ELABORACION DE PRODUCTOS DE HORNO DE COQUE'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612039,
                'name'	=>	'ELABORACION DE PRODUCTOS DE LA REFINACION DE PETROLEO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612040,
                'name'	=>	'ELABORACION DE SUSTANCIAS QUIMICAS BASICAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612041,
                'name'	=>	'ELABORACION DE ABONOS Y COMPUESTOS DE NITROGENO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612042,
                'name'	=>	'ELABORACION DE PLASTICO Y CAUCHO SINTETICO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612043,
                'name'	=>	'ELABORACION DE PRODUCTOS QUIMICOS DE USO AGROPECUARIO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612044,
                'name'	=>	'ELABORACION DE PINTURAS, TINTAS Y MASILLAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612045,
                'name'	=>	'ELABORACION DE PRODUCTOS FARMACEUTICOS Y BOTANICOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612046,
                'name'	=>	'ELABORACION DE JABONES, DETERGENTES Y PREPARADOS DE TOCADOR'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612047,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS QUIMICOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612048,
                'name'	=>	'ELABORACION DE FIBRAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612049,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS DE CAUCHO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612050,
                'name'	=>	'ELABORACION DE PRODUCTOS DE PLASTICO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612051,
                'name'	=>	'ELABORACION DE VIDRIO Y PRODUCTOS DE VIDRIO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612052,
                'name'	=>	'ELABORACION DE PRODUCTOS DE CERAMICA, LOZA, PIEDRA, ARCILLA Y PORCELANA'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612053,
                'name'	=>	'ELABORACION DE CEMENTO, CAL Y YESO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612054,
                'name'	=>	'ELABORACION DE ARTICULOS DE HORMIGON, CEMENTO Y YESO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612055,
                'name'	=>	'CORTE, TALLADO Y ACABADO DE LA PIEDRA'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612056,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS MINERALES NO METALICOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612057,
                'name'	=>	'INDUSTRIAS BASICAS Y FUNDICION DE HIERRO Y ACERO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612058,
                'name'	=>	'PRODUCTOS PRIMARIOS DE METALES PRECIOSOS Y DE METALES NO FERROSOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612059,
                'name'	=>	'FUNDICION DE METALES NO FERROSOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612060,
                'name'	=>	'FABRICACION DE PRODUCTOS METALICOS PARA USO ESTRUCTURAL'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612061,
                'name'	=>	'FORJA, PRENSADO, ESTAMPADO, LAMINADO DE METAL Y'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612062,
                'name'	=>	'REVESTIMIENTO DE METALES Y OBRAS DE INGENIERIA MECANICA'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612063,
                'name'	=>	'FABRICACION DE ARTICULOS DE FERRETERIA'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612064,
                'name'	=>	'ELABORACION DE OTROS PRODUCTOS DE METAL'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612065,
                'name'	=>	'FABRICACION DE MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612066,
                'name'	=>	'FABRICACION DE EQUIPOS DE ELEVACION Y MANIPULACION'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612067,
                'name'	=>	'ELABORACION DE APARATOS DE USO DOMESTICO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612068,
                'name'	=>	'ELABORACION DE EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612069,
                'name'	=>	'ELABORACION DE PILAS Y BATERIAS PRIMARIAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612070,
                'name'	=>	'ELABORACION DE EQUIPO DE ILUMINACION'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612071,
                'name'	=>	'ELABORACION DE OTROS TIPOS DE EQUIPO ELECTRICO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612072,
                'name'	=>	'FABRICACION DE EQUIPOS DE RADIO, TELEVISION Y COMUNICACIONES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612073,
                'name'	=>	'FABRICACION DE APARATOS E INSTRUMENTOS MEDICOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612074,
                'name'	=>	'FABRICACION DE INSTRUMENTOS DE MEDICION Y CONTROL'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612075,
                'name'	=>	'FABRICACION DE INSTRUMENTOS DE OPTICA Y EQUIPO FOTOGRAFICO'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612076,
                'name'	=>	'FABRICACION DE RELOJES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612077,
                'name'	=>	'FABRICACION DE VEHICULOS AUTOMOTORES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612078,
                'name'	=>	'FABRICACION DE CARROCERIAS PARA AUTOMOTORES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612079,
                'name'	=>	'FABRICACION DE PARTES PIEZAS Y ACCESORIOS PARA AUTOMOTORES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612080,
                'name'	=>	'FABRICACION Y REPARACION DE BUQUES Y OTRAS EMBARCACIONES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612081,
                'name'	=>	'FABRICACION DE LOCOMOTORAS Y MATERIAL RODANTE PARA FERROCARRILES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612082,
                'name'	=>	'FABRICACION DE AERONAVES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612083,
                'name'	=>	'FABRICACION DE MOTOCICLETAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612084,
                'name'	=>	'FABRICACION DE BICICLETAS Y SILLAS DE RUEDAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612085,
                'name'	=>	'FABRICACION DE OTROS TIPOS DE TRANSPORTE'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612086,
                'name'	=>	'FABRICACION DE MUEBLES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612087,
                'name'	=>	'FABRICACION DE JOYAS Y ARTICULOS CONEXOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612088,
                'name'	=>	'FABRICACION DE INSTRUMENTOS DE MUSICA'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612089,
                'name'	=>	'FABRICACION DE ARTICULOS Y EQUIPO PARA DEPORTE'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612090,
                'name'	=>	'FABRICACION DE JUEGOS Y JUGUETES'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612091,
                'name'	=>	'RECICLAMIENTO DE DESPERDICIOS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612095,
                'name'	=>	'PRODUCTOS DE OTRAS INDUSTRIAS MANUFACTURERAS'
            ],
            [
                'account_id'	=>	288,
                'code'	=>	612099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	289,
                'code'	=>	612505,
                'name'	=>	'GENERACION, CAPTACION Y DISTRIBUCION DE ENERGIA ELECTRICA'
            ],
            [
                'account_id'	=>	289,
                'code'	=>	612510,
                'name'	=>	'FABRICACION DE GAS Y DISTRIBUCION DE COMBUSTIBLES GASEOSOS'
            ],
            [
                'account_id'	=>	289,
                'code'	=>	612515,
                'name'	=>	'CAPTACION, DEPURACION Y DISTRIBUCION DE AGUA'
            ],
            [
                'account_id'	=>	289,
                'code'	=>	612595,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	289,
                'code'	=>	612599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	290,
                'code'	=>	613005,
                'name'	=>	'PREPARACION DE TERRENOS'
            ],
            [
                'account_id'	=>	290,
                'code'	=>	613010,
                'name'	=>	'CONSTRUCCION DE EDIFICIOS Y OBRAS DE INGENIERIA CIVIL'
            ],
            [
                'account_id'	=>	290,
                'code'	=>	613015,
                'name'	=>	'ACONDICIONAMIENTO DE EDIFICIOS'
            ],
            [
                'account_id'	=>	290,
                'code'	=>	613020,
                'name'	=>	'TERMINACION DE EDIFICACIONES'
            ],
            [
                'account_id'	=>	290,
                'code'	=>	613025,
                'name'	=>	'ALQUILER DE EQUIPO CON OPERARIO'
            ],
            [
                'account_id'	=>	290,
                'code'	=>	613095,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	290,
                'code'	=>	613099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613502,
                'name'	=>	'VENTA DE VEHICULOS AUTOMOTORES'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613504,
                'name'	=>	'MANTENIMIENTO, REPARACION Y LAVADO DE VEHICULOS AUTOMOTORES'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613506,
                'name'	=>	'VENTA DE PARTES, PIEZAS Y ACCESORIOS DE VEHICULOS AUTOMOTORES'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613508,
                'name'	=>	'VENTA DE COMBUSTIBLES SOLIDOS, LIQUIDOS, GASEOSOS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613510,
                'name'	=>	'VENTA DE LUBRICANTES, ADITIVOS, LLANTAS Y LUJOS PARA AUTOMOTORES'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613512,
                'name'	=>	'VENTA A CAMBIO DE RETRIBUCION O POR CONTRATA'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613514,
                'name'	=>	'VENTA DE INSUMOS, MATERIAS PRIMAS AGROPECUARIAS Y FLORES'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613516,
                'name'	=>	'VENTA DE OTROS INSUMOS Y MATERIAS PRIMAS NO AGROPECUARIAS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613518,
                'name'	=>	'VENTA DE ANIMALES VIVOS Y CUEROS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613520,
                'name'	=>	'VENTA DE PRODUCTOS EN ALMACENES NO ESPECIALIZADOS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613522,
                'name'	=>	'VENTA DE PRODUCTOS AGROPECUARIOS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613524,
                'name'	=>	'VENTA DE PRODUCTOS TEXTILES, DE VESTIR, DE CUERO Y CALZADO'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613526,
                'name'	=>	'VENTA DE PAPEL Y CARTON'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613528,
                'name'	=>	'VENTA DE LIBROS, REVISTAS, ELEMENTOS DE PAPELERIA, UTILES Y TEXTOS ESCOLARES'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613530,
                'name'	=>	'VENTA DE JUEGOS, JUGUETES Y ARTICULOS DEPORTIVOS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613532,
                'name'	=>	'VENTA DE INSTRUMENTOS QUIRURGICOS Y ORTOPEDICOS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613534,
                'name'	=>	'VENTA DE ARTICULOS EN RELOJERIAS Y JOYERIAS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613536,
                'name'	=>	'VENTA DE ELECTRODOMESTICOS Y MUEBLES'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613538,
                'name'	=>	'VENTA DE PRODUCTOS DE ASEO, FARMACEUTICOS, MEDICINALES, Y ARTICULOS DE TOCADOR'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613540,
                'name'	=>	'VENTA DE CUBIERTOS, VAJILLAS, CRISTALERIA, PORCELANAS, CERAMICAS Y OTROS ARTICULOS DE USO DOMESTICO'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613542,
                'name'	=>	'VENTA DE MATERIALES DE CONSTRUCCION, FONTANERIA Y CALEFACCION'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613544,
                'name'	=>	'VENTA DE PINTURAS Y LACAS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613546,
                'name'	=>	'VENTA DE PRODUCTOS DE VIDRIOS Y MARQUETERIA'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613548,
                'name'	=>	'VENTA DE HERRAMIENTAS Y ARTICULOS DE FERRETERIA'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613550,
                'name'	=>	'VENTA DE QUIMICOS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613552,
                'name'	=>	'VENTA DE PRODUCTOS INTERMEDIOS, DESPERDICIOS Y DESECHOS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613554,
                'name'	=>	'VENTA DE MAQUINARIA, EQUIPO DE OFICINA Y PROGRAMAS DE COMPUTADOR'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613556,
                'name'	=>	'VENTA DE ARTICULOS EN CACHARRERIAS Y MISCELANEAS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613558,
                'name'	=>	'VENTA DE INSTRUMENTOS MUSICALES'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613560,
                'name'	=>	'VENTA DE ARTICULOS EN CASAS DE EMPEÑO Y PRENDERIAS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613562,
                'name'	=>	'VENTA DE EQUIPO FOTOGRAFICO'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613564,
                'name'	=>	'VENTA DE EQUIPO OPTICO Y DE PRECISION'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613566,
                'name'	=>	'VENTA DE EMPAQUES'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613568,
                'name'	=>	'VENTA DE EQUIPO PROFESIONAL Y CIENTIFICO'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613570,
                'name'	=>	'VENTA DE LOTERIAS, RIFAS, CHANCE, APUESTAS Y SIMILARES'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613572,
                'name'	=>	'REPARACION DE EFECTOS PERSONALES Y ELECTRODOMESTICOS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613595,
                'name'	=>	'VENTA DE OTROS PRODUCTOS'
            ],
            [
                'account_id'	=>	291,
                'code'	=>	613599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	292,
                'code'	=>	614005,
                'name'	=>	'HOTELERIA'
            ],
            [
                'account_id'	=>	292,
                'code'	=>	614010,
                'name'	=>	'CAMPAMENTO Y OTROS TIPOS DE HOSPEDAJE'
            ],
            [
                'account_id'	=>	292,
                'code'	=>	614015,
                'name'	=>	'RESTAURANTES'
            ],
            [
                'account_id'	=>	292,
                'code'	=>	614020,
                'name'	=>	'BARES Y CANTINAS'
            ],
            [
                'account_id'	=>	292,
                'code'	=>	614095,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	292,
                'code'	=>	614099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614505,
                'name'	=>	'SERVICIO DE TRANSPORTE POR CARRETERA'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614510,
                'name'	=>	'SERVICIO DE TRANSPORTE POR VIA FERREA'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614515,
                'name'	=>	'SERVICIO DE TRANSPORTE POR VIA ACUATICA'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614520,
                'name'	=>	'SERVICIO DE TRANSPORTE POR VIA AEREA'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614525,
                'name'	=>	'SERVICIO DE TRANSPORTE POR TUBERIAS'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614530,
                'name'	=>	'MANIPULACION DE CARGA'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614535,
                'name'	=>	'ALMACENAMIENTO Y DEPOSITO'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614540,
                'name'	=>	'SERVICIOS COMPLEMENTARIOS PARA EL TRANSPORTE'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614545,
                'name'	=>	'AGENCIAS DE VIAJE'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614550,
                'name'	=>	'OTRAS AGENCIAS DE TRANSPORTE'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614555,
                'name'	=>	'SERVICIO POSTAL Y DE CORREO'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614560,
                'name'	=>	'SERVICIO TELEFONICO'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614565,
                'name'	=>	'SERVICIO DE TELEGRAFO'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614570,
                'name'	=>	'SERVICIO DE TRANSMISION DE DATOS'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614575,
                'name'	=>	'SERVICIO DE RADIO Y TELEVISION POR CABLE'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614580,
                'name'	=>	'TRANSMISION DE SONIDO E IMAGENES POR CONTRATO'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614595,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	293,
                'code'	=>	614599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	294,
                'code'	=>	615005,
                'name'	=>	'DE INVERSIONES'
            ],
            [
                'account_id'	=>	294,
                'code'	=>	615010,
                'name'	=>	'DE SERVICIO DE BOLSA'
            ],
            [
                'account_id'	=>	294,
                'code'	=>	615099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615505,
                'name'	=>	'ARRENDAMIENTOS DE BIENES INMUEBLES'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615510,
                'name'	=>	'INMOBILIARIAS POR RETRIBUCION O CONTRATA'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615515,
                'name'	=>	'ALQUILER EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615520,
                'name'	=>	'ALQUILER MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615525,
                'name'	=>	'ALQUILER DE EFECTOS PERSONALES Y ENSERES DOMESTICOS'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615530,
                'name'	=>	'CONSULTORIA EN EQUIPO Y PROGRAMAS DE INFORMATICA'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615535,
                'name'	=>	'PROCESAMIENTO DE DATOS'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615540,
                'name'	=>	'MANTENIMIENTO Y REPARACION DE MAQUINARIA DE OFICINA'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615545,
                'name'	=>	'INVESTIGACIONES CIENTIFICAS Y DE DESARROLLO'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615550,
                'name'	=>	'ACTIVIDADES EMPRESARIALES DE CONSULTORIA'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615555,
                'name'	=>	'PUBLICIDAD'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615560,
                'name'	=>	'DOTACION DE PERSONAL'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615565,
                'name'	=>	'INVESTIGACION Y SEGURIDAD'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615570,
                'name'	=>	'LIMPIEZA DE INMUEBLES'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615575,
                'name'	=>	'FOTOGRAFIA'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615580,
                'name'	=>	'ENVASE Y EMPAQUE'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615585,
                'name'	=>	'FOTOCOPIADO'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615590,
                'name'	=>	'MANTENIMIENTO Y REPARACION DE MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615595,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	295,
                'code'	=>	615599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	296,
                'code'	=>	616005,
                'name'	=>	'ACTIVIDADES RELACIONADAS CON LA EDUCACION'
            ],
            [
                'account_id'	=>	296,
                'code'	=>	616099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	297,
                'code'	=>	616505,
                'name'	=>	'SERVICIO HOSPITALARIO'
            ],
            [
                'account_id'	=>	297,
                'code'	=>	616510,
                'name'	=>	'SERVICIO MEDICO'
            ],
            [
                'account_id'	=>	297,
                'code'	=>	616515,
                'name'	=>	'SERVICIO ODONTOLOGICO'
            ],
            [
                'account_id'	=>	297,
                'code'	=>	616520,
                'name'	=>	'SERVICIO DE LABORATORIO'
            ],
            [
                'account_id'	=>	297,
                'code'	=>	616525,
                'name'	=>	'ACTIVIDADES VETERINARIAS'
            ],
            [
                'account_id'	=>	297,
                'code'	=>	616530,
                'name'	=>	'ACTIVIDADES DE SERVICIOS SOCIALES'
            ],
            [
                'account_id'	=>	297,
                'code'	=>	616595,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	297,
                'code'	=>	616599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617005,
                'name'	=>	'ELIMINACION DE DESPERDICIOS Y AGUAS RESIDUALES'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617010,
                'name'	=>	'ACTIVIDADES DE ASOCIACION'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617015,
                'name'	=>	'PRODUCCION Y DISTRIBUCION DE FILMES Y VIDEOCINTAS'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617020,
                'name'	=>	'EXHIBICION DE FILMES Y VIDEOCINTAS'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617025,
                'name'	=>	'ACTIVIDAD DE RADIO Y TELEVISION'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617030,
                'name'	=>	'ACTIVIDAD TEATRAL, MUSICAL Y ARTISTICA'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617035,
                'name'	=>	'GRABACION Y PRODUCCION DE DISCOS'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617040,
                'name'	=>	'ENTRETENIMIENTO Y ESPARCIMIENTO'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617045,
                'name'	=>	'AGENCIAS DE NOTICIAS'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617050,
                'name'	=>	'LAVANDERIAS Y SIMILARES'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617055,
                'name'	=>	'PELUQUERIAS Y SIMILARES'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617060,
                'name'	=>	'SERVICIOS FUNERARIOS'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617065,
                'name'	=>	'ZONAS FRANCAS'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617095,
                'name'	=>	'ACTIVIDADES CONEXAS'
            ],
            [
                'account_id'	=>	298,
                'code'	=>	617099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	299,
                'code'	=>	620501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	299,
                'code'	=>	620599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	300,
                'code'	=>	621001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	300,
                'code'	=>	621099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	301,
                'code'	=>	621501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	301,
                'code'	=>	621599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	302,
                'code'	=>	622001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	302,
                'code'	=>	622099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	303,
                'code'	=>	622501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	303,
                'code'	=>	622599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	304,
                'code'	=>	710101,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	305,
                'code'	=>	720101,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	306,
                'code'	=>	730101,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	307,
                'code'	=>	740101,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	308,
                'code'	=>	810505,
                'name'	=>	'VALORES MOBILIARIOS'
            ],
            [
                'account_id'	=>	308,
                'code'	=>	810510,
                'name'	=>	'BIENES MUEBLES'
            ],
            [
                'account_id'	=>	308,
                'code'	=>	810599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	309,
                'code'	=>	811005,
                'name'	=>	'VALORES MOBILIARIOS'
            ],
            [
                'account_id'	=>	309,
                'code'	=>	811010,
                'name'	=>	'BIENES MUEBLES'
            ],
            [
                'account_id'	=>	309,
                'code'	=>	811015,
                'name'	=>	'BIENES INMUEBLES'
            ],
            [
                'account_id'	=>	309,
                'code'	=>	811020,
                'name'	=>	'CONTRATOS DE GANADO EN PARTICIPACION'
            ],
            [
                'account_id'	=>	309,
                'code'	=>	811099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	310,
                'code'	=>	811505,
                'name'	=>	'EN ARRENDAMIENTO'
            ],
            [
                'account_id'	=>	310,
                'code'	=>	811510,
                'name'	=>	'EN PRESTAMO'
            ],
            [
                'account_id'	=>	310,
                'code'	=>	811515,
                'name'	=>	'EN DEPOSITO'
            ],
            [
                'account_id'	=>	310,
                'code'	=>	811520,
                'name'	=>	'EN CONSIGNACION'
            ],
            [
                'account_id'	=>	310,
                'code'	=>	811599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	311,
                'code'	=>	812005,
                'name'	=>	'EJECUTIVOS'
            ],
            [
                'account_id'	=>	311,
                'code'	=>	812010,
                'name'	=>	'INCUMPLIMIENTO DE CONTRATOS'
            ],
            [
                'account_id'	=>	312,
                'code'	=>	812501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	313,
                'code'	=>	819505,
                'name'	=>	'VALORES ADQUIRIDOS POR RECIBIR'
            ],
            [
                'account_id'	=>	313,
                'code'	=>	819595,
                'name'	=>	'OTRAS'
            ],
            [
                'account_id'	=>	313,
                'code'	=>	819599,
                'name'	=>	'AJUSTES POR INFLACION.'
            ],
            [
                'account_id'	=>	314,
                'code'	=>	820101,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	315,
                'code'	=>	830505,
                'name'	=>	'BIENES MUEBLES'
            ],
            [
                'account_id'	=>	315,
                'code'	=>	830510,
                'name'	=>	'BIENES INMUEBLES'
            ],
            [
                'account_id'	=>	315,
                'code'	=>	830599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	316,
                'code'	=>	831005,
                'name'	=>	'ACCIONES'
            ],
            [
                'account_id'	=>	316,
                'code'	=>	831010,
                'name'	=>	'BONOS'
            ],
            [
                'account_id'	=>	316,
                'code'	=>	831095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831506,
                'name'	=>	'MATERIALES PROYECTOS PETROLEROS'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831516,
                'name'	=>	'CONSTRUCCIONES Y EDIFICACIONES'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831520,
                'name'	=>	'MAQUINARIA Y EQUIPO'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831524,
                'name'	=>	'EQUIPO DE OFICINA'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831528,
                'name'	=>	'EQUIPO DE COMPUTACION Y COMUNICACION'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831532,
                'name'	=>	'EQUIPO MEDICO - CIENTIFICO'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831536,
                'name'	=>	'EQUIPO DE HOTELES Y RESTAURANTES'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831540,
                'name'	=>	'FLOTA Y EQUIPO DE TRANSPORTE'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831544,
                'name'	=>	'FLOTA Y EQUIPO FLUVIAL Y/O MARITIMO'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831548,
                'name'	=>	'FLOTA Y EQUIPO AEREO'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831552,
                'name'	=>	'FLOTA Y EQUIPO FERREO'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831556,
                'name'	=>	'ACUEDUCTOS, PLANTAS Y REDES'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831560,
                'name'	=>	'ARMAMENTO DE VIGILANCIA'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831562,
                'name'	=>	'ENVASES Y EMPAQUES'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831564,
                'name'	=>	'PLANTACIONES AGRICOLAS Y FORESTALES'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831568,
                'name'	=>	'VIAS DE COMUNICACION'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831572,
                'name'	=>	'MINAS Y CANTERAS'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831576,
                'name'	=>	'POZOS ARTESIANOS'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831580,
                'name'	=>	'YACIMIENTOS'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831584,
                'name'	=>	'SEMOVIENTES'
            ],
            [
                'account_id'	=>	317,
                'code'	=>	831599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	318,
                'code'	=>	832005,
                'name'	=>	'PAIS'
            ],
            [
                'account_id'	=>	318,
                'code'	=>	832010,
                'name'	=>	'EXTERIOR'
            ],
            [
                'account_id'	=>	319,
                'code'	=>	832505,
                'name'	=>	'INVERSIONES'
            ],
            [
                'account_id'	=>	319,
                'code'	=>	832510,
                'name'	=>	'DEUDORES'
            ],
            [
                'account_id'	=>	319,
                'code'	=>	832595,
                'name'	=>	'OTROS ACTIVOS'
            ],
            [
                'account_id'	=>	320,
                'code'	=>	833005,
                'name'	=>	'BONOS'
            ],
            [
                'account_id'	=>	320,
                'code'	=>	833095,
                'name'	=>	'OTROS'
            ],
            [
                'account_id'	=>	321,
                'code'	=>	833501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	322,
                'code'	=>	839505,
                'name'	=>	'CHEQUES POSTFECHADOS'
            ],
            [
                'account_id'	=>	322,
                'code'	=>	839510,
                'name'	=>	'CERTIFICADOS DE DEPOSITO A TERMINO'
            ],
            [
                'account_id'	=>	322,
                'code'	=>	839515,
                'name'	=>	'CHEQUES DEVUELTOS'
            ],
            [
                'account_id'	=>	322,
                'code'	=>	839520,
                'name'	=>	'BIENES Y VALORES EN FIDEICOMISO'
            ],
            [
                'account_id'	=>	322,
                'code'	=>	839525,
                'name'	=>	'INTERESES SOBRE DEUDAS VENCIDAS'
            ],
            [
                'account_id'	=>	322,
                'code'	=>	839595,
                'name'	=>	'DIVERSAS'
            ],
            [
                'account_id'	=>	322,
                'code'	=>	839599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	323,
                'code'	=>	839905,
                'name'	=>	'INVERSIONES'
            ],
            [
                'account_id'	=>	323,
                'code'	=>	839910,
                'name'	=>	'INVENTARIOS'
            ],
            [
                'account_id'	=>	323,
                'code'	=>	839915,
                'name'	=>	'PROPIEDADES PLANTA Y EQUIPO'
            ],
            [
                'account_id'	=>	323,
                'code'	=>	839920,
                'name'	=>	'INTANGIBLES'
            ],
            [
                'account_id'	=>	323,
                'code'	=>	839925,
                'name'	=>	'CARGOS DIFERIDOS'
            ],
            [
                'account_id'	=>	323,
                'code'	=>	839995,
                'name'	=>	'OTROS ACTIVOS'
            ],
            [
                'account_id'	=>	324,
                'code'	=>	840101,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	325,
                'code'	=>	850101,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	326,
                'code'	=>	860101,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	327,
                'code'	=>	910505,
                'name'	=>	'VALORES MOBILIARIOS'
            ],
            [
                'account_id'	=>	327,
                'code'	=>	910510,
                'name'	=>	'BIENES MUEBLES'
            ],
            [
                'account_id'	=>	327,
                'code'	=>	910599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	328,
                'code'	=>	911005,
                'name'	=>	'VALORES MOBILIARIOS'
            ],
            [
                'account_id'	=>	328,
                'code'	=>	911010,
                'name'	=>	'BIENES MUEBLES'
            ],
            [
                'account_id'	=>	328,
                'code'	=>	911015,
                'name'	=>	'BIENES INMUEBLES'
            ],
            [
                'account_id'	=>	328,
                'code'	=>	911020,
                'name'	=>	'CONTRATOS DE GANADO EN PARTICIPACION'
            ],
            [
                'account_id'	=>	328,
                'code'	=>	911099,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	329,
                'code'	=>	911505,
                'name'	=>	'EN ARRENDAMIENTO'
            ],
            [
                'account_id'	=>	329,
                'code'	=>	911510,
                'name'	=>	'EN PRESTAMO'
            ],
            [
                'account_id'	=>	329,
                'code'	=>	911515,
                'name'	=>	'EN DEPOSITO'
            ],
            [
                'account_id'	=>	329,
                'code'	=>	911520,
                'name'	=>	'EN CONSIGNACION'
            ],
            [
                'account_id'	=>	329,
                'code'	=>	911525,
                'name'	=>	'EN COMODATO'
            ],
            [
                'account_id'	=>	329,
                'code'	=>	911599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	330,
                'code'	=>	912005,
                'name'	=>	'LABORALES'
            ],
            [
                'account_id'	=>	330,
                'code'	=>	912010,
                'name'	=>	'CIVILES'
            ],
            [
                'account_id'	=>	330,
                'code'	=>	912015,
                'name'	=>	'ADMINISTRATIVOS O ARBITRALES'
            ],
            [
                'account_id'	=>	330,
                'code'	=>	912020,
                'name'	=>	'TRIBUTARIOS'
            ],
            [
                'account_id'	=>	331,
                'code'	=>	912501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	332,
                'code'	=>	913001,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	333,
                'code'	=>	913501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	334,
                'code'	=>	919501,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	335,
                'code'	=>	920101,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	336,
                'code'	=>	930505,
                'name'	=>	'BIENES MUEBLES'
            ],
            [
                'account_id'	=>	336,
                'code'	=>	930510,
                'name'	=>	'BIENES INMUEBLES'
            ],
            [
                'account_id'	=>	337,
                'code'	=>	939505,
                'name'	=>	'DOCUMENTOS POR COBRAR DESCONTADOS'
            ],
            [
                'account_id'	=>	337,
                'code'	=>	939510,
                'name'	=>	'CONVENIOS DE PAGO'
            ],
            [
                'account_id'	=>	337,
                'code'	=>	939515,
                'name'	=>	'CONTRATOS DE CONSTRUCCIONES E INSTALACIONES POR EJECUTAR'
            ],
            [
                'account_id'	=>	337,
                'code'	=>	939520,
                'name'	=>	'PEDIDOS COLOCADOS'
            ],
            [
                'account_id'	=>	337,
                'code'	=>	939525,
                'name'	=>	'ADJUDICACIONES PENDIENTES DE LEGALIZAR'
            ],
            [
                'account_id'	=>	337,
                'code'	=>	939530,
                'name'	=>	'RESERVA ARTICULO 3o. LEY 4/80'
            ],
            [
                'account_id'	=>	337,
                'code'	=>	939535,
                'name'	=>	'RESERVA COSTO REPOSICION SEMOVIENTES'
            ],
            [
                'account_id'	=>	337,
                'code'	=>	939599,
                'name'	=>	'AJUSTES POR INFLACION'
            ],
            [
                'account_id'	=>	338,
                'code'	=>	939905,
                'name'	=>	'CAPITAL SOCIAL'
            ],
            [
                'account_id'	=>	338,
                'code'	=>	939910,
                'name'	=>	'SUPERAVIT DE CAPITAL'
            ],
            [
                'account_id'	=>	338,
                'code'	=>	939915,
                'name'	=>	'RESERVAS'
            ],
            [
                'account_id'	=>	338,
                'code'	=>	939925,
                'name'	=>	'DIVIDENDOS O PARTICIPACIONES DECRETADAS EN ACCIONES, CUOTAS O PARTES DE INTERES SOCIAL'
            ],
            [
                'account_id'	=>	338,
                'code'	=>	939930,
                'name'	=>	'RESULTADOS DE EJERCICIOS ANTERIORES'
            ],
            [
                'account_id'	=>	339,
                'code'	=>	940101,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	340,
                'code'	=>	950101,
                'name'	=>	'???'
            ],
            [
                'account_id'	=>	341,
                'code'	=>	960101,
                'name'	=>	'???'
            ],
        ];
        foreach ($subaccounts as $subaccount) {
            Subaccount::create($subaccount);
        }
    }
}
