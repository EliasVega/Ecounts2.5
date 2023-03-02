<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UnitMeasuresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('unit_measures')->delete();

        \DB::table('unit_measures')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'spray pequeño',
                'code' => '04',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'levantar',
                'code' => '05',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Lote calor',
                'code' => '08',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'grupo',
                'code' => '10',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'equipar',
                'code' => '11',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'ración',
                'code' => '13',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Disparo',
                'code' => '14',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'palo',
                'code' => '15',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'tambor de ciento quince kg',
                'code' => '16',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'tambor de cien libras',
                'code' => '17',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            10 =>
            array (
                'id' => 11,
            'name' => 'tambor de cincuenta y cinco galones (US)',
                'code' => '18',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'camión cisterna',
                'code' => '19',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'contenedor de veinte pies',
                'code' => '20',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'contenedor de cuarenta pies',
                'code' => '21',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'decilitro por gramo',
                'code' => '22',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'gramo por centímetro cúbico',
                'code' => '23',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'libra teórica',
                'code' => '24',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'gramo por centímetro cuadrado',
                'code' => '25',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'tonelada real',
                'code' => '26',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'tonelada teórica',
                'code' => '27',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'kilogramo por metro cuadrado',
                'code' => '28',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'libra por mil pies cuadrados',
                'code' => '29',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Día de potencia del caballo por tonelada métrica seca al aire.',
                'code' => '30',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'coger peso',
                'code' => '31',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'kilogramo por aire seco tonelada métrica',
                'code' => '32',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'kilopascales metros cuadrados por gramo',
                'code' => '33',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'kilopascales por milímetro',
                'code' => '34',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'mililitros por centímetro cuadrado segundo',
                'code' => '35',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'pies cúbicos por minuto por pie cuadrado',
                'code' => '36',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'onza por pie cuadrado',
                'code' => '37',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'onzas por pie cuadrado por 0,01 pulgadas',
                'code' => '38',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'mililitro por segundo',
                'code' => '40',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'mililitro por minuto',
                'code' => '41',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'bolsa súper a granel',
                'code' => '43',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'bolsa a granel de quinientos kg',
                'code' => '44',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'bolsa a granel de trescientos kg',
                'code' => '45',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'bolsa a granel de cincuenta libras',
                'code' => '46',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'bolsa de cincuenta libras',
                'code' => '47',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            38 =>
            array (
                'id' => 39,
                'name' => 'carga de automóviles a granel',
                'code' => '48',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            39 =>
            array (
                'id' => 40,
                'name' => 'kilogramos teóricos',
                'code' => '53',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            40 =>
            array (
                'id' => 41,
                'name' => 'tonelada teórica',
                'code' => '54',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            41 =>
            array (
                'id' => 42,
                'name' => 'sitas',
                'code' => '56',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            42 =>
            array (
                'id' => 43,
                'name' => 'malla',
                'code' => '57',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            43 =>
            array (
                'id' => 44,
                'name' => 'kilogramo neto',
                'code' => '58',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            44 =>
            array (
                'id' => 45,
                'name' => 'parte por millón',
                'code' => '59',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            45 =>
            array (
                'id' => 46,
                'name' => 'porcentaje de peso',
                'code' => '60',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            46 =>
            array (
                'id' => 47,
            'name' => 'parte por billón (US)',
                'code' => '61',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            47 =>
            array (
                'id' => 48,
                'name' => 'porcentaje por 1000 horas',
                'code' => '62',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            48 =>
            array (
                'id' => 49,
                'name' => 'tasa de fracaso en el tiempo',
                'code' => '63',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            49 =>
            array (
                'id' => 50,
                'name' => 'libra por pulgada cuadrada calibre',
                'code' => '64',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            50 =>
            array (
                'id' => 51,
                'name' => 'Oersted',
                'code' => '66',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            51 =>
            array (
                'id' => 52,
                'name' => 'prueba de escala específica',
                'code' => '69',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            52 =>
            array (
                'id' => 53,
                'name' => 'voltio amperio por libra',
                'code' => '71',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            53 =>
            array (
                'id' => 54,
                'name' => 'vatio por libra',
                'code' => '72',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            54 =>
            array (
                'id' => 55,
                'name' => 'amperio tum por centímetro',
                'code' => '73',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            55 =>
            array (
                'id' => 56,
                'name' => 'milipascal',
                'code' => '74',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            56 =>
            array (
                'id' => 57,
                'name' => 'gauss',
                'code' => '76',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            57 =>
            array (
                'id' => 58,
                'name' => 'mili pulgadas',
                'code' => '77',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            58 =>
            array (
                'id' => 59,
                'name' => 'kilogauss',
                'code' => '78',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            59 =>
            array (
                'id' => 60,
                'name' => 'libras por pulgada cuadrada absoluta',
                'code' => '80',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            60 =>
            array (
                'id' => 61,
                'name' => 'Enrique',
                'code' => '81',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            61 =>
            array (
                'id' => 62,
                'name' => 'kilopound por pulgada cuadrada',
                'code' => '84',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            62 =>
            array (
                'id' => 63,
                'name' => 'fuerza libra pie',
                'code' => '85',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            63 =>
            array (
                'id' => 64,
                'name' => 'libra por pie cúbico',
                'code' => '87',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            64 =>
            array (
                'id' => 65,
                'name' => 'equilibrio',
                'code' => '89',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            65 =>
            array (
                'id' => 66,
                'name' => 'Saybold segundo universal',
                'code' => '90',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            66 =>
            array (
                'id' => 67,
                'name' => 'alimenta',
                'code' => '91',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            67 =>
            array (
                'id' => 68,
                'name' => 'calorías por centímetro cúbico',
                'code' => '92',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            68 =>
            array (
                'id' => 69,
                'name' => 'calorías por gramo',
                'code' => '93',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            69 =>
            array (
                'id' => 70,
                'name' => 'Unidad',
                'code' => '94',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            70 =>
            array (
                'id' => 71,
            'name' => 'veinte mil galones (US) de carros',
                'code' => '95',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            71 =>
            array (
                'id' => 72,
            'name' => 'diez mil galones (US) de carros',
                'code' => '96',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            72 =>
            array (
                'id' => 73,
                'name' => 'tambor de diez kg',
                'code' => '97',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            73 =>
            array (
                'id' => 74,
                'name' => 'tambor de quince kg',
                'code' => '98',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            74 =>
            array (
                'id' => 75,
                'name' => 'milla de coche',
                'code' => '1ª',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            75 =>
            array (
                'id' => 76,
                'name' => 'recuento de coches',
                'code' => '1B',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            76 =>
            array (
                'id' => 77,
                'name' => 'recuento de locomotoras',
                'code' => '1C',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            77 =>
            array (
                'id' => 78,
                'name' => 'recuento de cabos',
                'code' => '1D',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            78 =>
            array (
                'id' => 79,
                'name' => 'carro vacio',
                'code' => '1E',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            79 =>
            array (
                'id' => 80,
                'name' => 'millas de tren',
                'code' => '1F',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            80 =>
            array (
                'id' => 81,
            'name' => 'uso de combustible galón (US)',
                'code' => '1G',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            81 =>
            array (
                'id' => 82,
                'name' => 'milla del caboose',
                'code' => '1H',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            82 =>
            array (
                'id' => 83,
                'name' => 'tipo de interés fijo',
                'code' => '1I',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            83 =>
            array (
                'id' => 84,
                'name' => 'tonelada milla',
                'code' => '1J',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            84 =>
            array (
                'id' => 85,
                'name' => 'milla locomotora',
                'code' => '1K',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            85 =>
            array (
                'id' => 86,
                'name' => 'recuento total de coches',
                'code' => '1L',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            86 =>
            array (
                'id' => 87,
                'name' => 'milla de coche total',
                'code' => '1M',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            87 =>
            array (
                'id' => 88,
                'name' => 'cuarto de milla',
                'code' => '1X',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            88 =>
            array (
                'id' => 89,
                'name' => 'radianes por segundo',
                'code' => '2ª',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            89 =>
            array (
                'id' => 90,
                'name' => 'radianes por segundo al cuadrado',
                'code' => '2B',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            90 =>
            array (
                'id' => 91,
                'name' => 'Röntgen',
                'code' => '2C',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            91 =>
            array (
                'id' => 92,
                'name' => 'Unidad térmica británica por hora.',
                'code' => '2I',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            92 =>
            array (
                'id' => 93,
                'name' => 'centímetro cúbico por segundo',
                'code' => '2J',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            93 =>
            array (
                'id' => 94,
                'name' => 'pie cúbico por hora',
                'code' => '2K',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            94 =>
            array (
                'id' => 95,
                'name' => 'pie cúbico por minuto',
                'code' => '2L',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            95 =>
            array (
                'id' => 96,
                'name' => 'centímetro por segundo',
                'code' => '2M',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            96 =>
            array (
                'id' => 97,
                'name' => 'decibel',
                'code' => '2N',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            97 =>
            array (
                'id' => 98,
                'name' => 'kilobyte',
                'code' => '2P',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            98 =>
            array (
                'id' => 99,
                'name' => 'kilobecquerel',
                'code' => '2Q',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            99 =>
            array (
                'id' => 100,
                'name' => 'kilocurie',
                'code' => '2R',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            100 =>
            array (
                'id' => 101,
                'name' => 'megagramo',
                'code' => '2U',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            101 =>
            array (
                'id' => 102,
                'name' => 'megagramo por hora',
                'code' => '2V',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            102 =>
            array (
                'id' => 103,
                'name' => 'compartimiento',
                'code' => '2W',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            103 =>
            array (
                'id' => 104,
                'name' => 'metro por minuto',
                'code' => '2X',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            104 =>
            array (
                'id' => 105,
                'name' => 'milliröntgen',
                'code' => '2Y',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            105 =>
            array (
                'id' => 106,
                'name' => 'milivoltios',
                'code' => '2Z',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            106 =>
            array (
                'id' => 107,
                'name' => 'megajulio',
                'code' => '3B',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            107 =>
            array (
                'id' => 108,
                'name' => 'manmonth',
                'code' => '3C',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            108 =>
            array (
                'id' => 109,
                'name' => 'libra por libra de producto',
                'code' => '3E',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            109 =>
            array (
                'id' => 110,
                'name' => 'libra por pieza de producto',
                'code' => '3G',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            110 =>
            array (
                'id' => 111,
                'name' => 'kilogramo por kilogramo de producto',
                'code' => '3H',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            111 =>
            array (
                'id' => 112,
                'name' => 'kilogramo por pieza de producto',
                'code' => '3I',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            112 =>
            array (
                'id' => 113,
                'name' => 'bobina',
                'code' => '4ª',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            113 =>
            array (
                'id' => 114,
                'name' => 'gorra',
                'code' => '4B',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            114 =>
            array (
                'id' => 115,
                'name' => 'centistokes',
                'code' => '4C',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            115 =>
            array (
                'id' => 116,
                'name' => 'paquete de veinte',
                'code' => '4E',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            116 =>
            array (
                'id' => 117,
                'name' => 'microlitro',
                'code' => '4G',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            117 =>
            array (
                'id' => 118,
                'name' => 'micrometro',
                'code' => '4H',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            118 =>
            array (
                'id' => 119,
                'name' => 'miliamperio',
                'code' => '4K',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            119 =>
            array (
                'id' => 120,
                'name' => 'megabyte',
                'code' => '4L',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:35',
                'updated_at' => '2023-01-12 10:57:35',
            ),
            120 =>
            array (
                'id' => 121,
                'name' => 'miligramo por hora',
                'code' => '4M',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            121 =>
            array (
                'id' => 122,
                'name' => 'megabecquerel',
                'code' => '4N',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            122 =>
            array (
                'id' => 123,
                'name' => 'microfarad',
                'code' => '4º',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            123 =>
            array (
                'id' => 124,
                'name' => 'newton por metro',
                'code' => '4P',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            124 =>
            array (
                'id' => 125,
                'name' => 'onza pulgada',
                'code' => '4Q',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            125 =>
            array (
                'id' => 126,
                'name' => 'pie onza',
                'code' => '4R',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            126 =>
            array (
                'id' => 127,
                'name' => 'picofarad',
                'code' => '4T',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            127 =>
            array (
                'id' => 128,
                'name' => 'libra por hora',
                'code' => '4U',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            128 =>
            array (
                'id' => 129,
            'name' => 'tonelada (US) por hora',
                'code' => '4W',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            129 =>
            array (
                'id' => 130,
                'name' => 'kilolitro por hora',
                'code' => '4X',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            130 =>
            array (
                'id' => 131,
                'name' => 'barril por minuto',
                'code' => '5ª',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            131 =>
            array (
                'id' => 132,
                'name' => 'lote',
                'code' => '5B',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            132 =>
            array (
                'id' => 133,
            'name' => 'galón (US) por mil',
                'code' => '5C',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            133 =>
            array (
                'id' => 134,
                'name' => 'MMSCF / día',
                'code' => '5E',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            134 =>
            array (
                'id' => 135,
                'name' => 'libras por mil',
                'code' => '5F',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            135 =>
            array (
                'id' => 136,
                'name' => 'bomba',
                'code' => '5G',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            136 =>
            array (
                'id' => 137,
                'name' => 'escenario',
                'code' => '5H',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            137 =>
            array (
                'id' => 138,
                'name' => 'pie cúbico estándar',
                'code' => '5I',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            138 =>
            array (
                'id' => 139,
                'name' => 'potencia hidráulica de caballos',
                'code' => '5J',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            139 =>
            array (
                'id' => 140,
                'name' => 'contar por minuto',
                'code' => '5K',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            140 =>
            array (
                'id' => 141,
                'name' => 'nivel sismico',
                'code' => '5P',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            141 =>
            array (
                'id' => 142,
                'name' => 'nfor sismica',
                'code' => '5Q',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            142 =>
            array (
                'id' => 143,
                'name' => '15 calorías C',
                'code' => 'A1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            143 =>
            array (
                'id' => 144,
                'name' => 'amperio metro cuadrado por joule segundo',
                'code' => 'A10',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            144 =>
            array (
                'id' => 145,
                'name' => 'Ã ¥ ngström',
                'code' => 'A11',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            145 =>
            array (
                'id' => 146,
                'name' => 'unidad astronómica',
                'code' => 'A12',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            146 =>
            array (
                'id' => 147,
                'name' => 'attojoule',
                'code' => 'A13',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            147 =>
            array (
                'id' => 148,
                'name' => 'granero',
                'code' => 'A14',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            148 =>
            array (
                'id' => 149,
                'name' => 'granero por electrón voltio',
                'code' => 'A15',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            149 =>
            array (
                'id' => 150,
                'name' => 'granero por voltio de electrones esteradiano',
                'code' => 'A16',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            150 =>
            array (
                'id' => 151,
                'name' => 'granero por sterdian',
                'code' => 'A17',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            151 =>
            array (
                'id' => 152,
                'name' => 'becquerel por kilogramo',
                'code' => 'A18',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            152 =>
            array (
                'id' => 153,
                'name' => 'becquerel por metro cúbico',
                'code' => 'A19',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            153 =>
            array (
                'id' => 154,
                'name' => 'amperio por centímetro',
                'code' => 'A2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            154 =>
            array (
                'id' => 155,
                'name' => 'Unidad térmica británica por segundo pie cuadrado grado Rankin',
                'code' => 'A20',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            155 =>
            array (
                'id' => 156,
                'name' => 'Unidad térmica británica por libra grado Rankin',
                'code' => 'A21',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            156 =>
            array (
                'id' => 157,
                'name' => 'Unidad térmica británica por segundo pie grado Rankin',
                'code' => 'A22',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            157 =>
            array (
                'id' => 158,
                'name' => 'Unidad térmica británica por hora pie cuadrado grado Rankin',
                'code' => 'A23',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            158 =>
            array (
                'id' => 159,
                'name' => 'candela por metro cuadrado',
                'code' => 'A24',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            159 =>
            array (
                'id' => 160,
                'name' => 'cheval vapeur',
                'code' => 'A25',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            160 =>
            array (
                'id' => 161,
                'name' => 'medidor de culombio',
                'code' => 'A26',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            161 =>
            array (
                'id' => 162,
                'name' => 'medidor de culombio al cuadrado por voltio',
                'code' => 'A27',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            162 =>
            array (
                'id' => 163,
                'name' => 'Coulomb por centímetro cúbico',
                'code' => 'A28',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            163 =>
            array (
                'id' => 164,
                'name' => 'Coulomb por metro cúbico',
                'code' => 'A29',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            164 =>
            array (
                'id' => 165,
                'name' => 'amperio por milímetro',
                'code' => 'A3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            165 =>
            array (
                'id' => 166,
                'name' => 'Coulomb por milímetro cúbico',
                'code' => 'A30',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            166 =>
            array (
                'id' => 167,
                'name' => 'Coulomb por kilogramo segundo',
                'code' => 'A31',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            167 =>
            array (
                'id' => 168,
                'name' => 'Coulomb por mol',
                'code' => 'A32',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            168 =>
            array (
                'id' => 169,
                'name' => 'Coulomb por centímetro cuadrado',
                'code' => 'A33',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            169 =>
            array (
                'id' => 170,
                'name' => 'Coulomb por metro cuadrado',
                'code' => 'A34',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            170 =>
            array (
                'id' => 171,
                'name' => 'Coulomb por milímetro cuadrado',
                'code' => 'A35',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            171 =>
            array (
                'id' => 172,
                'name' => 'centímetro cúbico por mol',
                'code' => 'A36',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            172 =>
            array (
                'id' => 173,
                'name' => 'nformaci cúbico por mol',
                'code' => 'A37',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            173 =>
            array (
                'id' => 174,
                'name' => 'metro cúbico por coulomb',
                'code' => 'A38',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            174 =>
            array (
                'id' => 175,
                'name' => 'metro cúbico por kilogramo',
                'code' => 'A39',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            175 =>
            array (
                'id' => 176,
                'name' => 'amperio por centímetro cuadrado',
                'code' => 'A4',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            176 =>
            array (
                'id' => 177,
                'name' => 'metro cúbico por mol',
                'code' => 'A40',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            177 =>
            array (
                'id' => 178,
                'name' => 'amperio por metro cuadrado',
                'code' => 'A41',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            178 =>
            array (
                'id' => 179,
                'name' => 'curie por kilogramo',
                'code' => 'A42',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            179 =>
            array (
                'id' => 180,
                'name' => 'tonelaje de peso muerto',
                'code' => 'A43',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            180 =>
            array (
                'id' => 181,
                'name' => 'decalitro',
                'code' => 'A44',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            181 =>
            array (
                'id' => 182,
                'name' => 'decámetro',
                'code' => 'A45',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            182 =>
            array (
                'id' => 183,
                'name' => 'decitex',
                'code' => 'A47',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            183 =>
            array (
                'id' => 184,
                'name' => 'grado Rankin',
                'code' => 'A48',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            184 =>
            array (
                'id' => 185,
                'name' => 'negador',
                'code' => 'A49',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            185 =>
            array (
                'id' => 186,
                'name' => 'amperio metro cuadrado',
                'code' => 'A5',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            186 =>
            array (
                'id' => 187,
                'name' => 'dyn segundo por centímetro cúbico',
                'code' => 'A50',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            187 =>
            array (
                'id' => 188,
                'name' => 'dina segundo por centímetro',
                'code' => 'A51',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            188 =>
            array (
                'id' => 189,
                'name' => 'dina segundo por centímetro al quinto',
                'code' => 'A52',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            189 =>
            array (
                'id' => 190,
                'name' => 'electronvolt',
                'code' => 'A53',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            190 =>
            array (
                'id' => 191,
                'name' => 'electronvoltio por metro',
                'code' => 'A54',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            191 =>
            array (
                'id' => 192,
                'name' => 'metro electronvolt cuadrado',
                'code' => 'A55',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            192 =>
            array (
                'id' => 193,
                'name' => 'electronvoltio de metro cuadrado por kilogramo',
                'code' => 'A56',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            193 =>
            array (
                'id' => 194,
                'name' => 'ergio',
                'code' => 'A57',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            194 =>
            array (
                'id' => 195,
                'name' => 'erg por centímetro',
                'code' => 'A58',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            195 =>
            array (
                'id' => 196,
                'name' => 'amperio por metro cuadrado kelvin al cuadrado',
                'code' => 'A6',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            196 =>
            array (
                'id' => 197,
                'name' => 'erg por centímetro cúbico',
                'code' => 'A60',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            197 =>
            array (
                'id' => 198,
                'name' => 'erg por gramo',
                'code' => 'A61',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            198 =>
            array (
                'id' => 199,
                'name' => 'erg por gramo de segundo',
                'code' => 'A62',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            199 =>
            array (
                'id' => 200,
                'name' => 'erg por segundo',
                'code' => 'A63',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            200 =>
            array (
                'id' => 201,
                'name' => 'erg por segundo centímetro cuadrado',
                'code' => 'A64',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            201 =>
            array (
                'id' => 202,
                'name' => 'erg por centímetro cuadrado segundo',
                'code' => 'A65',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            202 =>
            array (
                'id' => 203,
                'name' => 'erg centímetro cuadrado',
                'code' => 'A66',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            203 =>
            array (
                'id' => 204,
                'name' => 'ergímetro cuadrado por gramo',
                'code' => 'A67',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            204 =>
            array (
                'id' => 205,
                'name' => 'exajulio',
                'code' => 'A68',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            205 =>
            array (
                'id' => 206,
                'name' => 'faradio por metro',
                'code' => 'A69',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            206 =>
            array (
                'id' => 207,
                'name' => 'amperio por milímetro cuadrado',
                'code' => 'A7',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            207 =>
            array (
                'id' => 208,
                'name' => 'femtojoule',
                'code' => 'A70',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            208 =>
            array (
                'id' => 209,
                'name' => 'femtometro',
                'code' => 'A71',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            209 =>
            array (
                'id' => 210,
                'name' => 'pie por segundo al cuadrado',
                'code' => 'A73',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            210 =>
            array (
                'id' => 211,
                'name' => 'pie-fuerza de la libra por segundo',
                'code' => 'A74',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            211 =>
            array (
                'id' => 212,
                'name' => 'tonelada de carga',
                'code' => 'A75',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            212 =>
            array (
                'id' => 213,
                'name' => 'galón',
                'code' => 'A76',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            213 =>
            array (
                'id' => 214,
                'name' => 'Unidad de desplazamiento CGS gaussiana',
                'code' => 'A77',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            214 =>
            array (
                'id' => 215,
                'name' => 'Unidad gaussiana CGS de corriente eléctrica.',
                'code' => 'A78',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            215 =>
            array (
                'id' => 216,
                'name' => 'Unidad Gaussian CGS de carga eléctrica.',
                'code' => 'A79',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            216 =>
            array (
                'id' => 217,
                'name' => 'amperio segundo',
                'code' => 'A8',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            217 =>
            array (
                'id' => 218,
                'name' => 'Unidad Gaussian CGS de intensidad de campo eléctrico.',
                'code' => 'A80',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            218 =>
            array (
                'id' => 219,
                'name' => 'Unidad Gaussian CGS de polarización eléctrica.',
                'code' => 'A81',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            219 =>
            array (
                'id' => 220,
                'name' => 'Unidad Gaussian CGS de potencial eléctrico.',
                'code' => 'A82',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            220 =>
            array (
                'id' => 221,
                'name' => 'Unidad Gaussiana CGS de magnetización.',
                'code' => 'A83',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            221 =>
            array (
                'id' => 222,
                'name' => 'gigacoulomb por metro cúbico',
                'code' => 'A84',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            222 =>
            array (
                'id' => 223,
                'name' => 'Gigaelectronvolt',
                'code' => 'A85',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            223 =>
            array (
                'id' => 224,
                'name' => 'gigahercios',
                'code' => 'A86',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            224 =>
            array (
                'id' => 225,
                'name' => 'gigaohm',
                'code' => 'A87',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            225 =>
            array (
                'id' => 226,
                'name' => 'medidor de gigaohm',
                'code' => 'A88',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            226 =>
            array (
                'id' => 227,
                'name' => 'gigapascal',
                'code' => 'A89',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            227 =>
            array (
                'id' => 228,
                'name' => 'tarifa',
                'code' => 'A9',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            228 =>
            array (
                'id' => 229,
                'name' => 'gigavatios',
                'code' => 'A90',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            229 =>
            array (
                'id' => 230,
                'name' => 'gon',
                'code' => 'A91',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            230 =>
            array (
                'id' => 231,
                'name' => 'gramo por metro cúbico',
                'code' => 'A93',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            231 =>
            array (
                'id' => 232,
                'name' => 'gramo por mol',
                'code' => 'A94',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            232 =>
            array (
                'id' => 233,
                'name' => 'gris',
                'code' => 'A95',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            233 =>
            array (
                'id' => 234,
                'name' => 'gris por segundo',
                'code' => 'A96',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            234 =>
            array (
                'id' => 235,
                'name' => 'hectopascal',
                'code' => 'A97',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            235 =>
            array (
                'id' => 236,
                'name' => 'Henry por metro',
                'code' => 'A98',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            236 =>
            array (
                'id' => 237,
                'name' => 'bola',
                'code' => 'AA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            237 =>
            array (
                'id' => 238,
                'name' => 'paquete a granel',
                'code' => 'AB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            238 =>
            array (
                'id' => 239,
                'name' => 'acre',
                'code' => 'ACR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            239 =>
            array (
                'id' => 240,
                'name' => 'byte',
                'code' => 'AD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            240 =>
            array (
                'id' => 241,
                'name' => 'amperio por metro',
                'code' => 'AE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            241 =>
            array (
                'id' => 242,
                'name' => 'minuto adicional',
                'code' => 'AH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            242 =>
            array (
                'id' => 243,
                'name' => 'minuto promedio por llamada',
                'code' => 'AI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            243 =>
            array (
                'id' => 244,
                'name' => 'policía',
                'code' => 'AJ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            244 =>
            array (
                'id' => 245,
                'name' => 'braza',
                'code' => 'AK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            245 =>
            array (
                'id' => 246,
                'name' => 'nfor de acceso',
                'code' => 'AL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            246 =>
            array (
                'id' => 247,
                'name' => 'ampolla',
                'code' => 'AM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            247 =>
            array (
                'id' => 248,
                'name' => 'hora amperio',
                'code' => 'AMH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            248 =>
            array (
                'id' => 249,
                'name' => 'amperio',
                'code' => 'AMP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            249 =>
            array (
                'id' => 250,
                'name' => 'año',
                'code' => 'ANA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:36',
                'updated_at' => '2023-01-12 10:57:36',
            ),
            250 =>
            array (
                'id' => 251,
                'name' => 'solo libra de aluminio',
                'code' => 'AP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            251 =>
            array (
                'id' => 252,
                'name' => 'onza troy o onza de boticarios',
                'code' => 'APZ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            252 =>
            array (
                'id' => 253,
            'name' => 'Unidad de factor antihemofílico (AHF)',
                'code' => 'AQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            253 =>
            array (
                'id' => 254,
                'name' => 'supositorio',
                'code' => 'AR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            254 =>
            array (
                'id' => 255,
                'name' => 'son',
                'code' => 'SON',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            255 =>
            array (
                'id' => 256,
                'name' => 'surtido',
                'code' => 'COMO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            256 =>
            array (
                'id' => 257,
                'name' => 'fuerza alcohólica en masa',
                'code' => 'ASM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            257 =>
            array (
                'id' => 258,
                'name' => 'fuerza alcohólica por volumen',
                'code' => 'ASU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            258 =>
            array (
                'id' => 259,
                'name' => 'ambiente estándar',
                'code' => 'ATM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            259 =>
            array (
                'id' => 260,
                'name' => 'ambiente técnico',
                'code' => 'ATT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            260 =>
            array (
                'id' => 261,
                'name' => 'cápsula',
                'code' => 'AV',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            261 =>
            array (
                'id' => 262,
                'name' => 'vial lleno de polvo',
                'code' => 'AW',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            262 =>
            array (
                'id' => 263,
                'name' => 'montaje',
                'code' => 'SÍ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            263 =>
            array (
                'id' => 264,
                'name' => 'Unidad térmica británica por libra',
                'code' => 'AZ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            264 =>
            array (
                'id' => 265,
                'name' => 'Btu por pie cúbico',
                'code' => 'B0',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            265 =>
            array (
                'id' => 266,
            'name' => 'barril (US) por día',
                'code' => 'B1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            266 =>
            array (
                'id' => 267,
                'name' => 'julios por kilogramo kelvin',
                'code' => 'B11',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            267 =>
            array (
                'id' => 268,
                'name' => 'julios por metro',
                'code' => 'B12',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            268 =>
            array (
                'id' => 269,
                'name' => 'julios por metro cuadrado',
                'code' => 'B13',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            269 =>
            array (
                'id' => 270,
                'name' => 'julios por metro a la cuarta potencia',
                'code' => 'B14',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            270 =>
            array (
                'id' => 271,
                'name' => 'julios por mol',
                'code' => 'B15',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            271 =>
            array (
                'id' => 272,
                'name' => 'julios por mol kelvin',
                'code' => 'B16',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            272 =>
            array (
                'id' => 273,
                'name' => 'joule segundo',
                'code' => 'B18',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            273 =>
            array (
                'id' => 274,
                'name' => 'litera',
                'code' => 'B2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            274 =>
            array (
                'id' => 275,
                'name' => 'joule metro cuadrado por kilogramo',
                'code' => 'B20',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            275 =>
            array (
                'id' => 276,
                'name' => 'kelvin por vatio',
                'code' => 'B21',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            276 =>
            array (
                'id' => 277,
                'name' => 'Kiloampere',
                'code' => 'B22',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            277 =>
            array (
                'id' => 278,
                'name' => 'kiloampere por metro cuadrado',
                'code' => 'B23',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            278 =>
            array (
                'id' => 279,
                'name' => 'kiloampere por metro',
                'code' => 'B24',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            279 =>
            array (
                'id' => 280,
                'name' => 'kilobecquerel por kilogramo',
                'code' => 'B25',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            280 =>
            array (
                'id' => 281,
                'name' => 'kilocoulomb',
                'code' => 'B26',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            281 =>
            array (
                'id' => 282,
                'name' => 'kilocoulomb por metro cúbico',
                'code' => 'B27',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            282 =>
            array (
                'id' => 283,
                'name' => 'kilocoulomb por metro cuadrado',
                'code' => 'B28',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            283 =>
            array (
                'id' => 284,
                'name' => 'kiloelectronvolt',
                'code' => 'B29',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            284 =>
            array (
                'id' => 285,
                'name' => 'libra de bateo',
                'code' => 'B3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            285 =>
            array (
                'id' => 286,
                'name' => 'kilogramo metro por segundo',
                'code' => 'B31',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            286 =>
            array (
                'id' => 287,
                'name' => 'kilogramo metro cuadrado',
                'code' => 'B32',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            287 =>
            array (
                'id' => 288,
                'name' => 'kilogramo metro cuadrado por segundo',
                'code' => 'B33',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            288 =>
            array (
                'id' => 289,
                'name' => 'kilogramo por decímetro cúbico',
                'code' => 'B34',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            289 =>
            array (
                'id' => 290,
                'name' => 'kilogramo por litro',
                'code' => 'B35',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            290 =>
            array (
                'id' => 291,
                'name' => 'caloría termoquímica por gramo',
                'code' => 'B36',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            291 =>
            array (
                'id' => 292,
                'name' => 'kilogramo de fuerza',
                'code' => 'B37',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            292 =>
            array (
                'id' => 293,
                'name' => 'metro de fuerza de kilogramo',
                'code' => 'B38',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            293 =>
            array (
                'id' => 294,
                'name' => 'metro de fuerza de kilogramo por segundo',
                'code' => 'B39',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            294 =>
            array (
                'id' => 295,
                'name' => 'barril imperial',
                'code' => 'B4',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            295 =>
            array (
                'id' => 296,
                'name' => 'kilogramo de fuerza por metro cuadrado',
                'code' => 'B40',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            296 =>
            array (
                'id' => 297,
                'name' => 'kilojoule per kelvin',
                'code' => 'B41',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            297 =>
            array (
                'id' => 298,
                'name' => 'kilojoule por kilogramo',
                'code' => 'B42',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            298 =>
            array (
                'id' => 299,
                'name' => 'kilojoule por kilogramo kelvin',
                'code' => 'B43',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            299 =>
            array (
                'id' => 300,
                'name' => 'kilojoule por mol',
                'code' => 'B44',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            300 =>
            array (
                'id' => 301,
                'name' => 'kilomol',
                'code' => 'B45',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            301 =>
            array (
                'id' => 302,
                'name' => 'kilomol por metro cúbico',
                'code' => 'B46',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            302 =>
            array (
                'id' => 303,
                'name' => 'Kilonewton',
                'code' => 'B47',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            303 =>
            array (
                'id' => 304,
                'name' => 'medidor de kilonewton',
                'code' => 'B48',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            304 =>
            array (
                'id' => 305,
                'name' => 'kiloohm',
                'code' => 'B49',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            305 =>
            array (
                'id' => 306,
                'name' => 'palanquilla',
                'code' => 'B5',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            306 =>
            array (
                'id' => 307,
                'name' => 'medidor de kiloohm',
                'code' => 'B50',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            307 =>
            array (
                'id' => 308,
                'name' => 'kilopond',
                'code' => 'B51',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            308 =>
            array (
                'id' => 309,
                'name' => 'kilosegundo',
                'code' => 'B52',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            309 =>
            array (
                'id' => 310,
                'name' => 'kilosiemens',
                'code' => 'B53',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            310 =>
            array (
                'id' => 311,
                'name' => 'kilosiemens por metro',
                'code' => 'B54',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            311 =>
            array (
                'id' => 312,
                'name' => 'kilovoltios por metro',
                'code' => 'B55',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            312 =>
            array (
                'id' => 313,
                'name' => 'kiloveber por metro',
                'code' => 'B56',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            313 =>
            array (
                'id' => 314,
                'name' => 'año luz',
                'code' => 'B57',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            314 =>
            array (
                'id' => 315,
                'name' => 'litro por mol',
                'code' => 'B58',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            315 =>
            array (
                'id' => 316,
                'name' => 'hora lumen',
                'code' => 'B59',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            316 =>
            array (
                'id' => 317,
                'name' => 'bollo',
                'code' => 'B6',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            317 =>
            array (
                'id' => 318,
                'name' => 'lumen por metro cuadrado',
                'code' => 'B60',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            318 =>
            array (
                'id' => 319,
                'name' => 'lumen por vatio',
                'code' => 'B61',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            319 =>
            array (
                'id' => 320,
                'name' => 'lumen segundo',
                'code' => 'B62',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            320 =>
            array (
                'id' => 321,
                'name' => 'hora de lux',
                'code' => 'B63',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            321 =>
            array (
                'id' => 322,
                'name' => 'lux segundo',
                'code' => 'B64',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            322 =>
            array (
                'id' => 323,
                'name' => 'Maxwell',
                'code' => 'B65',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            323 =>
            array (
                'id' => 324,
                'name' => 'megaamperios por metro cuadrado',
                'code' => 'B66',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            324 =>
            array (
                'id' => 325,
                'name' => 'megabecquerel por kilogramo',
                'code' => 'B67',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            325 =>
            array (
                'id' => 326,
                'name' => 'megacoulomb por metro cúbico',
                'code' => 'B69',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            326 =>
            array (
                'id' => 327,
                'name' => 'ciclo',
                'code' => 'B7',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            327 =>
            array (
                'id' => 328,
                'name' => 'megacoulomb por metro cuadrado',
                'code' => 'B70',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            328 =>
            array (
                'id' => 329,
                'name' => 'megaelectronvolt',
                'code' => 'B71',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            329 =>
            array (
                'id' => 330,
                'name' => 'megagramo por metro cúbico',
                'code' => 'B72',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            330 =>
            array (
                'id' => 331,
                'name' => 'meganewton',
                'code' => 'B73',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            331 =>
            array (
                'id' => 332,
                'name' => 'medidor de meganewton',
                'code' => 'B74',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            332 =>
            array (
                'id' => 333,
                'name' => 'megaohm',
                'code' => 'B75',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            333 =>
            array (
                'id' => 334,
                'name' => 'metro megaohm',
                'code' => 'B76',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            334 =>
            array (
                'id' => 335,
                'name' => 'megasiemens por metro',
                'code' => 'B77',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            335 =>
            array (
                'id' => 336,
                'name' => 'megavoltio',
                'code' => 'B78',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            336 =>
            array (
                'id' => 337,
                'name' => 'megavolt por metro',
                'code' => 'B79',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            337 =>
            array (
                'id' => 338,
                'name' => 'julios por metro cúbico',
                'code' => 'B8',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            338 =>
            array (
                'id' => 339,
                'name' => 'metro recíproco cuadrado recíproco segundo',
                'code' => 'B81',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            339 =>
            array (
                'id' => 340,
                'name' => 'metro a la cuarta potencia',
                'code' => 'B83',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            340 =>
            array (
                'id' => 341,
                'name' => 'microamperios',
                'code' => 'B84',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            341 =>
            array (
                'id' => 342,
                'name' => 'microbar',
                'code' => 'B85',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            342 =>
            array (
                'id' => 343,
                'name' => 'microcoulomb',
                'code' => 'B86',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            343 =>
            array (
                'id' => 344,
                'name' => 'microcoulomb por metro cúbico',
                'code' => 'B87',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            344 =>
            array (
                'id' => 345,
                'name' => 'microcoulomb por metro cuadrado',
                'code' => 'B88',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            345 =>
            array (
                'id' => 346,
                'name' => 'microfarada por metro',
                'code' => 'B89',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            346 =>
            array (
                'id' => 347,
                'name' => 'batt',
                'code' => 'B9',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            347 =>
            array (
                'id' => 348,
                'name' => 'microhenry',
                'code' => 'B90',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            348 =>
            array (
                'id' => 349,
                'name' => 'microhenry por metro',
                'code' => 'B91',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            349 =>
            array (
                'id' => 350,
                'name' => 'micronewton',
                'code' => 'B92',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            350 =>
            array (
                'id' => 351,
                'name' => 'medidor de micronewton',
                'code' => 'B93',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            351 =>
            array (
                'id' => 352,
                'name' => 'microohm',
                'code' => 'B94',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            352 =>
            array (
                'id' => 353,
                'name' => 'medidor de microohmios',
                'code' => 'B95',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            353 =>
            array (
                'id' => 354,
                'name' => 'micropascal',
                'code' => 'B96',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            354 =>
            array (
                'id' => 355,
                'name' => 'microradiano',
                'code' => 'B97',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            355 =>
            array (
                'id' => 356,
                'name' => 'microsegundo',
                'code' => 'B98',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            356 =>
            array (
                'id' => 357,
                'name' => 'microsiemens',
                'code' => 'B99',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            357 =>
            array (
                'id' => 358,
                'name' => 'bar',
                'code' => 'BAR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            358 =>
            array (
                'id' => 359,
                'name' => 'caja base',
                'code' => 'BB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            359 =>
            array (
                'id' => 360,
                'name' => 'tablero',
                'code' => 'BD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            360 =>
            array (
                'id' => 361,
                'name' => 'haz',
                'code' => 'SER',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            361 =>
            array (
                'id' => 362,
                'name' => 'pie de tabla',
                'code' => 'BFT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            362 =>
            array (
                'id' => 363,
                'name' => 'bolso',
                'code' => 'BG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            363 =>
            array (
                'id' => 364,
                'name' => 'cepillo',
                'code' => 'BH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            364 =>
            array (
                'id' => 365,
                'name' => 'potencia al freno',
                'code' => 'BHP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            365 =>
            array (
                'id' => 366,
                'name' => 'trillón de dólares',
                'code' => 'BIL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            366 =>
            array (
                'id' => 367,
                'name' => 'cangilón',
                'code' => 'BJ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            367 =>
            array (
                'id' => 368,
                'name' => 'cesta',
                'code' => 'BK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            368 =>
            array (
                'id' => 369,
                'name' => 'bala',
                'code' => 'BL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            369 =>
            array (
                'id' => 370,
                'name' => 'barril seco',
                'code' => 'BLD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            370 =>
            array (
                'id' => 371,
            'name' => 'barril (EE. UU.) (petróleo etc.)',
                'code' => 'BLL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            371 =>
            array (
                'id' => 372,
                'name' => 'botella',
                'code' => 'BO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            372 =>
            array (
                'id' => 373,
                'name' => 'cien pies de tabla',
                'code' => 'BP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            373 =>
            array (
                'id' => 374,
                'name' => 'becquerel',
                'code' => 'BQL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            374 =>
            array (
                'id' => 375,
                'name' => 'bar',
                'code' => 'BR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            375 =>
            array (
                'id' => 376,
                'name' => 'tornillo',
                'code' => 'BT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            376 =>
            array (
                'id' => 377,
                'name' => 'Unidad Térmica Británica',
                'code' => 'BTU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:37',
                'updated_at' => '2023-01-12 10:57:37',
            ),
            377 =>
            array (
                'id' => 378,
            'name' => 'bushel (EE. UU.)',
                'code' => 'BUA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            378 =>
            array (
                'id' => 379,
            'name' => 'bushel (Reino Unido)',
                'code' => 'BUI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            379 =>
            array (
                'id' => 380,
                'name' => 'peso base',
                'code' => 'BW',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            380 =>
            array (
                'id' => 381,
                'name' => 'caja',
                'code' => 'BX',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            381 =>
            array (
                'id' => 382,
                'name' => 'millones de BTUs',
                'code' => 'BZ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            382 =>
            array (
                'id' => 383,
                'name' => 'llamada',
                'code' => 'C0',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            383 =>
            array (
                'id' => 384,
            'name' => 'producto compuesto libra (peso total)',
                'code' => 'C1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            384 =>
            array (
                'id' => 385,
                'name' => 'millifarad',
                'code' => 'C10',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            385 =>
            array (
                'id' => 386,
                'name' => 'miligal',
                'code' => 'C11',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            386 =>
            array (
                'id' => 387,
                'name' => 'miligramo por metro',
                'code' => 'C12',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            387 =>
            array (
                'id' => 388,
                'name' => 'miligray',
                'code' => 'C13',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            388 =>
            array (
                'id' => 389,
                'name' => 'milihenry',
                'code' => 'C14',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            389 =>
            array (
                'id' => 390,
                'name' => 'milijoule',
                'code' => 'C15',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            390 =>
            array (
                'id' => 391,
                'name' => 'milímetro por segundo',
                'code' => 'C16',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            391 =>
            array (
                'id' => 392,
                'name' => 'milímetro cuadrado por segundo',
                'code' => 'C17',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            392 =>
            array (
                'id' => 393,
                'name' => 'milimol',
                'code' => 'C18',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            393 =>
            array (
                'id' => 394,
                'name' => 'mol por kilogramo',
                'code' => 'C19',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            394 =>
            array (
                'id' => 395,
                'name' => 'carset',
                'code' => 'C2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            395 =>
            array (
                'id' => 396,
                'name' => 'millinewton',
                'code' => 'C20',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            396 =>
            array (
                'id' => 397,
                'name' => 'millinewton por metro',
                'code' => 'C22',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            397 =>
            array (
                'id' => 398,
                'name' => 'medidor de miliohm',
                'code' => 'C23',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            398 =>
            array (
                'id' => 399,
                'name' => 'segundo milipascal',
                'code' => 'C24',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            399 =>
            array (
                'id' => 400,
                'name' => 'miliradian',
                'code' => 'C25',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            400 =>
            array (
                'id' => 401,
                'name' => 'milisegundo',
                'code' => 'C26',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            401 =>
            array (
                'id' => 402,
                'name' => 'milisiemens',
                'code' => 'C27',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            402 =>
            array (
                'id' => 403,
                'name' => 'milisievert',
                'code' => 'C28',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            403 =>
            array (
                'id' => 404,
                'name' => 'millitesla',
                'code' => 'C29',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            404 =>
            array (
                'id' => 405,
                'name' => 'microvoltios por metro',
                'code' => 'C3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            405 =>
            array (
                'id' => 406,
                'name' => 'milivoltios por metro',
                'code' => 'C30',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            406 =>
            array (
                'id' => 407,
                'name' => 'milivatios',
                'code' => 'C31',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            407 =>
            array (
                'id' => 408,
                'name' => 'milivatios por metro cuadrado',
                'code' => 'C32',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            408 =>
            array (
                'id' => 409,
                'name' => 'milliweber',
                'code' => 'C33',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            409 =>
            array (
                'id' => 410,
                'name' => 'Topo',
                'code' => 'C34',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            410 =>
            array (
                'id' => 411,
                'name' => 'mol por decímetro cúbico',
                'code' => 'C35',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            411 =>
            array (
                'id' => 412,
                'name' => 'mol por metro cúbico',
                'code' => 'C36',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            412 =>
            array (
                'id' => 413,
                'name' => 'mol por litro',
                'code' => 'C38',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            413 =>
            array (
                'id' => 414,
                'name' => 'Nanoampere',
                'code' => 'C39',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            414 =>
            array (
                'id' => 415,
                'name' => 'partido de carga',
                'code' => 'C4',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            415 =>
            array (
                'id' => 416,
                'name' => 'nanocoulomb',
                'code' => 'C40',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            416 =>
            array (
                'id' => 417,
                'name' => 'nanofarad',
                'code' => 'C41',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            417 =>
            array (
                'id' => 418,
                'name' => 'nanofarad por metro',
                'code' => 'C42',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            418 =>
            array (
                'id' => 419,
                'name' => 'nanohenry',
                'code' => 'C43',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            419 =>
            array (
                'id' => 420,
                'name' => 'nanohenry por metro',
                'code' => 'C44',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            420 =>
            array (
                'id' => 421,
                'name' => 'nanometro',
                'code' => 'C45',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            421 =>
            array (
                'id' => 422,
                'name' => 'medidor de nanoohm',
                'code' => 'C46',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            422 =>
            array (
                'id' => 423,
                'name' => 'nanosegundo',
                'code' => 'C47',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            423 =>
            array (
                'id' => 424,
                'name' => 'nanotesla',
                'code' => 'C48',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            424 =>
            array (
                'id' => 425,
                'name' => 'nanovatio',
                'code' => 'C49',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            425 =>
            array (
                'id' => 426,
                'name' => 'costo',
                'code' => 'C5',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            426 =>
            array (
                'id' => 427,
                'name' => 'neper',
                'code' => 'C50',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            427 =>
            array (
                'id' => 428,
                'name' => 'neper por segundo',
                'code' => 'C51',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            428 =>
            array (
                'id' => 429,
                'name' => 'picometro',
                'code' => 'C52',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            429 =>
            array (
                'id' => 430,
                'name' => 'metro de newton segundo',
                'code' => 'C53',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            430 =>
            array (
                'id' => 431,
                'name' => 'newton metro cuadrado kilogramo cuadrado',
                'code' => 'C54',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            431 =>
            array (
                'id' => 432,
                'name' => 'newton por metro cuadrado',
                'code' => 'C55',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            432 =>
            array (
                'id' => 433,
                'name' => 'newton por milímetro cuadrado',
                'code' => 'C56',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            433 =>
            array (
                'id' => 434,
                'name' => 'newton segundo',
                'code' => 'C57',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            434 =>
            array (
                'id' => 435,
                'name' => 'newton segundo por metro',
                'code' => 'C58',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            435 =>
            array (
                'id' => 436,
                'name' => 'octava',
                'code' => 'C59',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            436 =>
            array (
                'id' => 437,
                'name' => 'célula',
                'code' => 'C6',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            437 =>
            array (
                'id' => 438,
                'name' => 'ohm centímetro',
                'code' => 'C60',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            438 =>
            array (
                'id' => 439,
                'name' => 'ohm metro',
                'code' => 'C61',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            439 =>
            array (
                'id' => 440,
                'name' => 'uno',
                'code' => 'C62',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            440 =>
            array (
                'id' => 441,
                'name' => 'parsec',
                'code' => 'C63',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            441 =>
            array (
                'id' => 442,
                'name' => 'pascal por kelvin',
                'code' => 'C64',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            442 =>
            array (
                'id' => 443,
                'name' => 'segundo pascal',
                'code' => 'C65',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            443 =>
            array (
                'id' => 444,
                'name' => 'segundo pascal por metro cúbico',
                'code' => 'C66',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            444 =>
            array (
                'id' => 445,
                'name' => 'segundo pascal por metro',
                'code' => 'C67',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            445 =>
            array (
                'id' => 446,
                'name' => 'petajoule',
                'code' => 'C68',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            446 =>
            array (
                'id' => 447,
                'name' => 'telefono',
                'code' => 'C69',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            447 =>
            array (
                'id' => 448,
                'name' => 'centipoise',
                'code' => 'C7',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            448 =>
            array (
                'id' => 449,
                'name' => 'picoampere',
                'code' => 'C70',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            449 =>
            array (
                'id' => 450,
                'name' => 'picocoulomb',
                'code' => 'C71',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            450 =>
            array (
                'id' => 451,
                'name' => 'picofarad por metro',
                'code' => 'C72',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            451 =>
            array (
                'id' => 452,
                'name' => 'picohenry',
                'code' => 'C73',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            452 =>
            array (
                'id' => 453,
                'name' => 'picowatt',
                'code' => 'C75',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            453 =>
            array (
                'id' => 454,
                'name' => 'picowatt por metro cuadrado',
                'code' => 'C76',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            454 =>
            array (
                'id' => 455,
                'name' => 'medidor de libras',
                'code' => 'C77',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            455 =>
            array (
                'id' => 456,
                'name' => 'fuerza de libra',
                'code' => 'C78',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            456 =>
            array (
                'id' => 457,
                'name' => 'Millicoulomb por kilogramo',
                'code' => 'C8',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            457 =>
            array (
                'id' => 458,
                'name' => 'rad',
                'code' => 'C80',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            458 =>
            array (
                'id' => 459,
                'name' => 'radián',
                'code' => 'C81',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            459 =>
            array (
                'id' => 460,
                'name' => 'medidor de radianes al cuadrado por mol',
                'code' => 'C82',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            460 =>
            array (
                'id' => 461,
                'name' => 'medidor de radianes al cuadrado por kilogramo',
                'code' => 'C83',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            461 =>
            array (
                'id' => 462,
                'name' => 'radian por metro',
                'code' => 'C84',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            462 =>
            array (
                'id' => 463,
                'name' => 'â € ngstr recíproco “m',
                'code' => 'C85',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            463 =>
            array (
                'id' => 464,
                'name' => 'metro cúbico recíproco',
                'code' => 'C86',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            464 =>
            array (
                'id' => 465,
                'name' => 'metro cúbico recíproco por segundo',
                'code' => 'C87',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            465 =>
            array (
                'id' => 466,
                'name' => 'voltios de electrones recíprocos por metro cúbico',
                'code' => 'C88',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            466 =>
            array (
                'id' => 467,
                'name' => 'Henry Recíproco',
                'code' => 'C89',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            467 =>
            array (
                'id' => 468,
                'name' => 'grupo de bobina',
                'code' => 'C9',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            468 =>
            array (
                'id' => 469,
                'name' => 'Joule recíproco por metro cúbico',
                'code' => 'C90',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            469 =>
            array (
                'id' => 470,
                'name' => 'kelvin recíproco o kelvin al poder menos uno',
                'code' => 'C91',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            470 =>
            array (
                'id' => 471,
                'name' => 'medidor recíproco',
                'code' => 'C92',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            471 =>
            array (
                'id' => 472,
                'name' => 'metro cuadrado recíproco',
                'code' => 'C93',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            472 =>
            array (
                'id' => 473,
                'name' => 'minuto recíproco',
                'code' => 'C94',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            473 =>
            array (
                'id' => 474,
                'name' => 'mole recíproco',
                'code' => 'C95',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            474 =>
            array (
                'id' => 475,
                'name' => 'Pascal recíproco o pascal a la potencia menos uno.',
                'code' => 'C96',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            475 =>
            array (
                'id' => 476,
                'name' => 'segundo recíproco',
                'code' => 'C97',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            476 =>
            array (
                'id' => 477,
                'name' => 'segundo recíproco por metro cúbico',
                'code' => 'C98',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            477 =>
            array (
                'id' => 478,
                'name' => 'segundo recíproco por metro cuadrado',
                'code' => 'C99',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            478 =>
            array (
                'id' => 479,
                'name' => 'Caja',
                'code' => 'CA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            479 =>
            array (
                'id' => 480,
                'name' => 'Capacidad de carga en toneladas métricas.',
                'code' => 'CCT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            480 =>
            array (
                'id' => 481,
                'name' => 'candela',
                'code' => 'CDL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            481 =>
            array (
                'id' => 482,
                'name' => 'grado Celsius',
                'code' => 'CEL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            482 =>
            array (
                'id' => 483,
                'name' => 'cien',
                'code' => 'CEN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            483 =>
            array (
                'id' => 484,
                'name' => 'tarjeta',
                'code' => 'CG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            484 =>
            array (
                'id' => 485,
                'name' => 'centigramo',
                'code' => 'CGM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            485 =>
            array (
                'id' => 486,
                'name' => 'envase',
                'code' => 'CH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            486 =>
            array (
                'id' => 487,
                'name' => 'cono',
                'code' => 'CJ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            487 =>
            array (
                'id' => 488,
                'name' => 'conector',
                'code' => 'CK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            488 =>
            array (
                'id' => 489,
                'name' => 'Coulomb por kilogramo',
                'code' => 'CKG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            489 =>
            array (
                'id' => 490,
                'name' => 'bobina',
                'code' => 'CL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            490 =>
            array (
                'id' => 491,
                'name' => 'cientos de licencia',
                'code' => 'CLF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            491 =>
            array (
                'id' => 492,
                'name' => 'centilitro',
                'code' => 'CLT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            492 =>
            array (
                'id' => 493,
                'name' => 'centímetro cuadrado',
                'code' => 'CMK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            493 =>
            array (
                'id' => 494,
                'name' => 'centímetro cúbico',
                'code' => 'CMQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            494 =>
            array (
                'id' => 495,
                'name' => 'centímetro',
                'code' => 'CMT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            495 =>
            array (
                'id' => 496,
                'name' => 'paquete de cien',
                'code' => 'CNP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            496 =>
            array (
                'id' => 497,
            'name' => 'Cental (Reino Unido)',
                'code' => 'CNT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            497 =>
            array (
                'id' => 498,
                'name' => 'garrafón',
                'code' => 'CO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:38',
                'updated_at' => '2023-01-12 10:57:38',
            ),
            498 =>
            array (
                'id' => 499,
                'name' => 'culombio',
                'code' => 'COU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            499 =>
            array (
                'id' => 500,
                'name' => 'cartucho',
                'code' => 'CQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
        ));
        \DB::table('unit_measures')->insert(array (
            0 =>
            array (
                'id' => 501,
                'name' => 'caja',
                'code' => 'CR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            1 =>
            array (
                'id' => 502,
                'name' => 'caso',
                'code' => 'CS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            2 =>
            array (
                'id' => 503,
                'name' => 'caja de cartón',
                'code' => 'CT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            3 =>
            array (
                'id' => 504,
                'name' => 'quilate métrico',
                'code' => 'CTM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            4 =>
            array (
                'id' => 505,
                'name' => 'vaso',
                'code' => 'CU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            5 =>
            array (
                'id' => 506,
                'name' => 'curie',
                'code' => 'CUR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            6 =>
            array (
                'id' => 507,
                'name' => 'cubrir',
                'code' => 'CV',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            7 =>
            array (
                'id' => 508,
            'name' => 'cien libras (quintales) / cien pesos (US)',
                'code' => 'CWA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            8 =>
            array (
                'id' => 509,
            'name' => 'cien pesos (Reino Unido)',
                'code' => 'CWI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            9 =>
            array (
                'id' => 510,
                'name' => 'cilindro',
                'code' => 'CY',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            10 =>
            array (
                'id' => 511,
                'name' => 'combo',
                'code' => 'CZ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            11 =>
            array (
                'id' => 512,
                'name' => 'segundo recíproco por esteradiano',
                'code' => 'D1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            12 =>
            array (
                'id' => 513,
                'name' => 'siemens por metro',
                'code' => 'D10',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            13 =>
            array (
                'id' => 514,
                'name' => 'siemens metro cuadrado por mol',
                'code' => 'D12',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            14 =>
            array (
                'id' => 515,
                'name' => 'sievert',
                'code' => 'D13',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            15 =>
            array (
                'id' => 516,
                'name' => 'mil yardas lineales',
                'code' => 'D14',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            16 =>
            array (
                'id' => 517,
                'name' => 'sone',
                'code' => 'D15',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            17 =>
            array (
                'id' => 518,
                'name' => 'centímetro cuadrado por ergio',
                'code' => 'D16',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            18 =>
            array (
                'id' => 519,
                'name' => 'centímetro cuadrado por erg esterlina',
                'code' => 'D17',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            19 =>
            array (
                'id' => 520,
                'name' => 'metro kelvin',
                'code' => 'D18',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            20 =>
            array (
                'id' => 521,
                'name' => 'kelvin metro cuadrado por vatio',
                'code' => 'D19',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            21 =>
            array (
                'id' => 522,
                'name' => 'segundo recíproco por metros cuadrados esteradianos',
                'code' => 'D2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            22 =>
            array (
                'id' => 523,
                'name' => 'metro cuadrado por julio',
                'code' => 'D20',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            23 =>
            array (
                'id' => 524,
                'name' => 'metro cuadrado por kilogramo',
                'code' => 'D21',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            24 =>
            array (
                'id' => 525,
                'name' => 'metro cuadrado por mol',
                'code' => 'D22',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            25 =>
            array (
                'id' => 526,
            'name' => 'pluma gramo (proteína)',
                'code' => 'D23',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            26 =>
            array (
                'id' => 527,
                'name' => 'metro cuadrado por esterilizador',
                'code' => 'D24',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            27 =>
            array (
                'id' => 528,
                'name' => 'metro cuadrado por julios esteradianos',
                'code' => 'D25',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            28 =>
            array (
                'id' => 529,
                'name' => 'metro cuadrado por voltio segundo',
                'code' => 'D26',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            29 =>
            array (
                'id' => 530,
                'name' => 'esteradiano',
                'code' => 'D27',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            30 =>
            array (
                'id' => 531,
                'name' => 'sifón',
                'code' => 'D28',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            31 =>
            array (
                'id' => 532,
                'name' => 'terahercios',
                'code' => 'D29',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            32 =>
            array (
                'id' => 533,
                'name' => 'terajulio',
                'code' => 'D30',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            33 =>
            array (
                'id' => 534,
                'name' => 'teravatio',
                'code' => 'D31',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            34 =>
            array (
                'id' => 535,
                'name' => 'hora de teravatio',
                'code' => 'D32',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            35 =>
            array (
                'id' => 536,
                'name' => 'tesla',
                'code' => 'D33',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            36 =>
            array (
                'id' => 537,
                'name' => 'Texas',
                'code' => 'D34',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            37 =>
            array (
                'id' => 538,
                'name' => 'caloría termoquímica',
                'code' => 'D35',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            38 =>
            array (
                'id' => 539,
                'name' => 'caloría termoquímica por gramo kelvin',
                'code' => 'D37',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            39 =>
            array (
                'id' => 540,
                'name' => 'calorías termoquímicas por segundo centímetro kelvin',
                'code' => 'D38',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            40 =>
            array (
                'id' => 541,
                'name' => 'calorías termoquímicas por segundo centímetro cuadrado kelvin',
                'code' => 'D39',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            41 =>
            array (
                'id' => 542,
                'name' => 'mil litros',
                'code' => 'D40',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            42 =>
            array (
                'id' => 543,
                'name' => 'tonelada por metro cúbico',
                'code' => 'D41',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            43 =>
            array (
                'id' => 544,
                'name' => 'año tropical',
                'code' => 'D42',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            44 =>
            array (
                'id' => 545,
                'name' => 'unidad de masa atómica unificada',
                'code' => 'D43',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            45 =>
            array (
                'id' => 546,
                'name' => 'var',
                'code' => 'D44',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            46 =>
            array (
                'id' => 547,
                'name' => 'voltios al cuadrado por kelvin al cuadrado',
                'code' => 'D45',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            47 =>
            array (
                'id' => 548,
                'name' => 'voltio – amperio',
                'code' => 'D46',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            48 =>
            array (
                'id' => 549,
                'name' => 'voltio por centímetro',
                'code' => 'D47',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            49 =>
            array (
                'id' => 550,
                'name' => 'voltio por kelvin',
                'code' => 'D48',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            50 =>
            array (
                'id' => 551,
                'name' => 'milivoltios por kelvin',
                'code' => 'D49',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            51 =>
            array (
                'id' => 552,
                'name' => 'kilogramo por centímetro cuadrado',
                'code' => 'D5',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            52 =>
            array (
                'id' => 553,
                'name' => 'voltios por metro',
                'code' => 'D50',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            53 =>
            array (
                'id' => 554,
                'name' => 'voltios por milímetro',
                'code' => 'D51',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            54 =>
            array (
                'id' => 555,
                'name' => 'vatios por kelvin',
                'code' => 'D52',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            55 =>
            array (
                'id' => 556,
                'name' => 'vatios por metro kelvin',
                'code' => 'D53',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            56 =>
            array (
                'id' => 557,
                'name' => 'vatios por metro cuadrado',
                'code' => 'D54',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            57 =>
            array (
                'id' => 558,
                'name' => 'vatios por metro cuadrado kelvin',
                'code' => 'D55',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            58 =>
            array (
                'id' => 559,
                'name' => 'vatios por metro cuadrado de kelvin a la cuarta potencia',
                'code' => 'D56',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            59 =>
            array (
                'id' => 560,
                'name' => 'vatios por steradian',
                'code' => 'D57',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            60 =>
            array (
                'id' => 561,
                'name' => 'vatios por metro cuadrado esterlino',
                'code' => 'D58',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            61 =>
            array (
                'id' => 562,
                'name' => 'weber por metro',
                'code' => 'D59',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            62 =>
            array (
                'id' => 563,
                'name' => 'röntgen por segundo',
                'code' => 'D6',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            63 =>
            array (
                'id' => 564,
                'name' => 'weber por milímetro',
                'code' => 'D60',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            64 =>
            array (
                'id' => 565,
                'name' => 'minuto',
                'code' => 'D61',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            65 =>
            array (
                'id' => 566,
                'name' => 'segundo',
                'code' => 'D62',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            66 =>
            array (
                'id' => 567,
                'name' => 'libro',
                'code' => 'D63',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            67 =>
            array (
                'id' => 568,
                'name' => 'bloquear',
                'code' => 'D64',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            68 =>
            array (
                'id' => 569,
                'name' => 'redondo',
                'code' => 'D65',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            69 =>
            array (
                'id' => 570,
                'name' => 'casete',
                'code' => 'D66',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            70 =>
            array (
                'id' => 571,
                'name' => 'dólar por hora',
                'code' => 'D67',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            71 =>
            array (
                'id' => 572,
                'name' => 'pulgada a la cuarta potencia',
                'code' => 'D69',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            72 =>
            array (
                'id' => 573,
                'name' => 'Sandwich',
                'code' => 'D7',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            73 =>
            array (
                'id' => 574,
            'name' => 'Tabla Internacional (IT) caloría',
                'code' => 'D70',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            74 =>
            array (
                'id' => 575,
            'name' => 'Tabla Internacional (IT) calorías por segundo centímetro kelvin',
                'code' => 'D71',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            75 =>
            array (
                'id' => 576,
            'name' => 'Tabla Internacional (IT) calorías por segundo centímetro cuadrado kelvin',
                'code' => 'D72',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            76 =>
            array (
                'id' => 577,
                'name' => 'joule metro cuadrado',
                'code' => 'D73',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            77 =>
            array (
                'id' => 578,
                'name' => 'kilogramo por mol',
                'code' => 'D74',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            78 =>
            array (
                'id' => 579,
            'name' => 'Tabla Internacional (IT) calorías por gramo',
                'code' => 'D75',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            79 =>
            array (
                'id' => 580,
            'name' => 'Tabla Internacional (IT) calorías por gramo kelvin',
                'code' => 'D76',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            80 =>
            array (
                'id' => 581,
                'name' => 'megacoulomb',
                'code' => 'D77',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            81 =>
            array (
                'id' => 582,
                'name' => 'haz',
                'code' => 'D79',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            82 =>
            array (
                'id' => 583,
                'name' => 'puntaje de drenaje',
                'code' => 'D8',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            83 =>
            array (
                'id' => 584,
                'name' => 'microwatt',
                'code' => 'D80',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            84 =>
            array (
                'id' => 585,
                'name' => 'microtesla',
                'code' => 'D81',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            85 =>
            array (
                'id' => 586,
                'name' => 'microvoltio',
                'code' => 'D82',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            86 =>
            array (
                'id' => 587,
                'name' => 'medidor de millinewton',
                'code' => 'D83',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            87 =>
            array (
                'id' => 588,
                'name' => 'microwatt por metro cuadrado',
                'code' => 'D85',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            88 =>
            array (
                'id' => 589,
                'name' => 'Millicoulomb',
                'code' => 'D86',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            89 =>
            array (
                'id' => 590,
                'name' => 'milimol por kilogramo',
                'code' => 'D87',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            90 =>
            array (
                'id' => 591,
                'name' => 'millicoulomb por metro cúbico',
                'code' => 'D88',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            91 =>
            array (
                'id' => 592,
                'name' => 'millicoulomb por metro cuadrado',
                'code' => 'D89',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            92 =>
            array (
                'id' => 593,
                'name' => 'dina por centímetro cuadrado',
                'code' => 'D9',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            93 =>
            array (
                'id' => 594,
            'name' => 'metro cúbico (neto)',
                'code' => 'D90',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            94 =>
            array (
                'id' => 595,
                'name' => 'movimiento rápido del ojo',
                'code' => 'D91',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            95 =>
            array (
                'id' => 596,
                'name' => 'banda',
                'code' => 'D92',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            96 =>
            array (
                'id' => 597,
                'name' => 'segundo por metro cúbico',
                'code' => 'D93',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            97 =>
            array (
                'id' => 598,
                'name' => 'segundo por metro cúbico radianes',
                'code' => 'D94',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            98 =>
            array (
                'id' => 599,
                'name' => 'julios por gramo',
                'code' => 'D95',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            99 =>
            array (
                'id' => 600,
                'name' => 'libra bruta',
                'code' => 'D96',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            100 =>
            array (
                'id' => 601,
                'name' => 'carga de palet / unidad',
                'code' => 'D97',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            101 =>
            array (
                'id' => 602,
                'name' => 'libra de masa',
                'code' => 'D98',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            102 =>
            array (
                'id' => 603,
                'name' => 'manga',
                'code' => 'D99',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            103 =>
            array (
                'id' => 604,
                'name' => 'despreciar',
                'code' => 'DAA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            104 =>
            array (
                'id' => 605,
                'name' => 'diez dias',
                'code' => 'DAD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            105 =>
            array (
                'id' => 606,
                'name' => 'día',
                'code' => 'DAY',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            106 =>
            array (
                'id' => 607,
                'name' => 'libra seca',
                'code' => 'DB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            107 =>
            array (
                'id' => 608,
                'name' => 'disco',
                'code' => 'DC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            108 =>
            array (
                'id' => 609,
                'name' => 'la licenciatura',
                'code' => 'DD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            109 =>
            array (
                'id' => 610,
                'name' => 'acuerdo',
                'code' => 'DE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            110 =>
            array (
                'id' => 611,
                'name' => 'década',
                'code' => 'DEC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            111 =>
            array (
                'id' => 612,
                'name' => 'decigramo',
                'code' => 'DG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            112 =>
            array (
                'id' => 613,
                'name' => 'dispensador',
                'code' => 'DI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            113 =>
            array (
                'id' => 614,
                'name' => 'decagramo',
                'code' => 'DJ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            114 =>
            array (
                'id' => 615,
                'name' => 'decilitro',
                'code' => 'DLT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            115 =>
            array (
                'id' => 616,
                'name' => 'nformaci cuadrado',
                'code' => 'DMK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            116 =>
            array (
                'id' => 617,
                'name' => 'decímetro cúbico',
                'code' => 'DMQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            117 =>
            array (
                'id' => 618,
                'name' => 'decímetro',
                'code' => 'DMT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            118 =>
            array (
                'id' => 619,
                'name' => 'medidor de decinewton',
                'code' => 'DN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            119 =>
            array (
                'id' => 620,
                'name' => 'docena pieza',
                'code' => 'DPC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            120 =>
            array (
                'id' => 621,
                'name' => 'docena par',
                'code' => 'DPR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            121 =>
            array (
                'id' => 622,
                'name' => 'tonelaje de desplazamiento',
                'code' => 'DPT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:39',
                'updated_at' => '2023-01-12 10:57:39',
            ),
            122 =>
            array (
                'id' => 623,
                'name' => 'registro de datos',
                'code' => 'DQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            123 =>
            array (
                'id' => 624,
                'name' => 'tambor',
                'code' => 'DR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            124 =>
            array (
                'id' => 625,
            'name' => 'dram (US)',
                'code' => 'DRA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            125 =>
            array (
                'id' => 626,
            'name' => 'dram (Reino Unido)',
                'code' => 'DRI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            126 =>
            array (
                'id' => 627,
                'name' => 'docena rollo',
                'code' => 'DRL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            127 =>
            array (
                'id' => 628,
            'name' => 'dracma (Reino Unido)',
                'code' => 'DRM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            128 =>
            array (
                'id' => 629,
                'name' => 'monitor',
                'code' => 'DS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            129 =>
            array (
                'id' => 630,
                'name' => 'tonelada seca',
                'code' => 'DT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            130 =>
            array (
                'id' => 631,
                'name' => 'Decitonne',
                'code' => 'DTN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            131 =>
            array (
                'id' => 632,
                'name' => 'dina',
                'code' => 'DU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            132 =>
            array (
                'id' => 633,
                'name' => 'pennyweight',
                'code' => 'DWT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            133 =>
            array (
                'id' => 634,
                'name' => 'dina por centímetro',
                'code' => 'DX',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            134 =>
            array (
                'id' => 635,
                'name' => 'libro de directorio',
                'code' => 'DY',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            135 =>
            array (
                'id' => 636,
                'name' => 'docena',
                'code' => 'DZN',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            136 =>
            array (
                'id' => 637,
                'name' => 'paquete de doce',
                'code' => 'DZP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            137 =>
            array (
                'id' => 638,
                'name' => 'cinturón',
                'code' => 'E2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            138 =>
            array (
                'id' => 639,
                'name' => 'remolque',
                'code' => 'E3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            139 =>
            array (
                'id' => 640,
                'name' => 'kilogramo bruto',
                'code' => 'E4',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            140 =>
            array (
                'id' => 641,
                'name' => 'tonelada métrica larga',
                'code' => 'E5',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            141 =>
            array (
                'id' => 642,
                'name' => 'cada',
                'code' => 'EA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            142 =>
            array (
                'id' => 643,
                'name' => 'casilla de correo electrónico',
                'code' => 'EB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            143 =>
            array (
                'id' => 644,
                'name' => 'cada uno por mes',
                'code' => 'CE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            144 =>
            array (
                'id' => 645,
                'name' => 'paquete de once',
                'code' => 'EP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            145 =>
            array (
                'id' => 646,
                'name' => 'galón equivalente',
                'code' => 'EQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            146 =>
            array (
                'id' => 647,
                'name' => 'sobre',
                'code' => 'EV',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            147 =>
            array (
                'id' => 648,
                'name' => 'mil pies cúbicos por día',
                'code' => 'F1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            148 =>
            array (
                'id' => 649,
                'name' => 'Fibra por centímetro cúbico de aire',
                'code' => 'F9',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            149 =>
            array (
                'id' => 650,
                'name' => 'grado Fahrenheit',
                'code' => 'FAH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            150 =>
            array (
                'id' => 651,
                'name' => 'faradio',
                'code' => 'FAR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            151 =>
            array (
                'id' => 652,
                'name' => 'campo',
                'code' => 'FB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            152 =>
            array (
                'id' => 653,
                'name' => 'mil pies cúbicos',
                'code' => 'FC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            153 =>
            array (
                'id' => 654,
                'name' => 'millón de partículas por pie cúbico',
                'code' => 'FD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            154 =>
            array (
                'id' => 655,
                'name' => 'pie de pista',
                'code' => 'FE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            155 =>
            array (
                'id' => 656,
                'name' => 'cien metros cúbicos',
                'code' => 'FF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            156 =>
            array (
                'id' => 657,
                'name' => 'parche transdérmico',
                'code' => 'FG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            157 =>
            array (
                'id' => 658,
                'name' => 'micromol',
                'code' => 'FH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            158 =>
            array (
                'id' => 659,
                'name' => 'tonelada en escamas',
                'code' => 'FL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            159 =>
            array (
                'id' => 660,
                'name' => 'millones de pies cúbicos',
                'code' => 'FM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            160 =>
            array (
                'id' => 661,
                'name' => 'pie',
                'code' => 'FOT',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            161 =>
            array (
                'id' => 662,
                'name' => 'libra por pie cuadrado',
                'code' => 'FP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            162 =>
            array (
                'id' => 663,
                'name' => 'pie por minuto',
                'code' => 'FR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            163 =>
            array (
                'id' => 664,
                'name' => 'pie por segundo',
                'code' => 'FS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            164 =>
            array (
                'id' => 665,
                'name' => 'pie cuadrado',
                'code' => 'FTK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            165 =>
            array (
                'id' => 666,
                'name' => 'pie cubico',
                'code' => 'FTQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            166 =>
            array (
                'id' => 667,
                'name' => 'US galones por minuto',
                'code' => 'G2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            167 =>
            array (
                'id' => 668,
                'name' => 'Galon imperial por minuto',
                'code' => 'G3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            168 =>
            array (
                'id' => 669,
                'name' => 'hoja de microficha',
                'code' => 'G7',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            169 =>
            array (
                'id' => 670,
            'name' => 'galón (US) por día',
                'code' => 'GB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            170 =>
            array (
                'id' => 671,
                'name' => 'gigabecquerel',
                'code' => 'GBQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            171 =>
            array (
                'id' => 672,
                'name' => 'gramo por 100 gramo',
                'code' => 'GC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            172 =>
            array (
                'id' => 673,
                'name' => 'barril bruto',
                'code' => 'GD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            173 =>
            array (
                'id' => 674,
            'name' => 'libra por galón (US)',
                'code' => 'GE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            174 =>
            array (
                'id' => 675,
            'name' => 'gramo por metro (gramo por 100 centímetros)',
                'code' => 'GF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            175 =>
            array (
                'id' => 676,
                'name' => 'gramo de isótopo fisionable',
                'code' => 'GFI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            176 =>
            array (
                'id' => 677,
                'name' => 'gramo',
                'code' => 'GGR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            177 =>
            array (
                'id' => 678,
            'name' => 'medio galón (EE. UU.)',
                'code' => 'GH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            178 =>
            array (
                'id' => 679,
                'name' => 'branquias',
                'code' => 'GIA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            179 =>
            array (
                'id' => 680,
            'name' => 'Gill (Reino Unido)',
                'code' => 'GII',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            180 =>
            array (
                'id' => 681,
                'name' => 'gramo por mililitro',
                'code' => 'GJ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            181 =>
            array (
                'id' => 682,
                'name' => 'gramo por kilogramo',
                'code' => 'G K',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            182 =>
            array (
                'id' => 683,
                'name' => 'gramo por litro',
                'code' => 'GL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            183 =>
            array (
                'id' => 684,
            'name' => 'galón seco (EE. UU.)',
                'code' => 'GLD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            184 =>
            array (
                'id' => 685,
            'name' => 'galón (Reino Unido)',
                'code' => 'GLI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            185 =>
            array (
                'id' => 686,
                'name' => 'galón',
                'code' => 'GLL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            186 =>
            array (
                'id' => 687,
                'name' => 'gramo por metro cuadrado',
                'code' => 'GM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            187 =>
            array (
                'id' => 688,
                'name' => 'galón bruto',
                'code' => 'GN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            188 =>
            array (
                'id' => 689,
                'name' => 'miligramos por metro cuadrado',
                'code' => 'GO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            189 =>
            array (
                'id' => 690,
                'name' => 'miligramo por metro cúbico',
                'code' => 'GP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            190 =>
            array (
                'id' => 691,
                'name' => 'microgramos por metro cúbico',
                'code' => 'GQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            191 =>
            array (
                'id' => 692,
                'name' => 'gramo',
                'code' => 'GRM',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            192 =>
            array (
                'id' => 693,
                'name' => 'grano',
                'code' => 'GRN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            193 =>
            array (
                'id' => 694,
                'name' => 'bruto',
                'code' => 'GRO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            194 =>
            array (
                'id' => 695,
                'name' => 'tonelada de registro bruto',
                'code' => 'GRT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            195 =>
            array (
                'id' => 696,
                'name' => 'tonelada bruta',
                'code' => 'GT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            196 =>
            array (
                'id' => 697,
                'name' => 'gigajoule',
                'code' => 'GV',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            197 =>
            array (
                'id' => 698,
                'name' => 'galón por mil pies cúbicos',
                'code' => 'GW',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            198 =>
            array (
                'id' => 699,
                'name' => 'hora de gigavatios',
                'code' => 'GWH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            199 =>
            array (
                'id' => 700,
                'name' => 'patio bruto',
                'code' => 'GY',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            200 =>
            array (
                'id' => 701,
                'name' => 'sistema de medición',
                'code' => 'GZ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            201 =>
            array (
                'id' => 702,
                'name' => 'media página – electrónica',
                'code' => 'H1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            202 =>
            array (
                'id' => 703,
                'name' => 'medio litro',
                'code' => 'H2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            203 =>
            array (
                'id' => 704,
                'name' => 'madeja',
                'code' => 'HA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            204 =>
            array (
                'id' => 705,
                'name' => 'hectárea',
                'code' => 'HAR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            205 =>
            array (
                'id' => 706,
                'name' => 'hectobar',
                'code' => 'HBA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            206 =>
            array (
                'id' => 707,
                'name' => 'cien cajas',
                'code' => 'HBX',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            207 =>
            array (
                'id' => 708,
                'name' => 'cien cuentas',
                'code' => 'HC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            208 =>
            array (
                'id' => 709,
                'name' => 'media docena',
                'code' => 'HD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            209 =>
            array (
                'id' => 710,
                'name' => 'centésima de quilate',
                'code' => 'ÉL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            210 =>
            array (
                'id' => 711,
                'name' => 'cien pies',
                'code' => 'HF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            211 =>
            array (
                'id' => 712,
                'name' => 'hectogramo',
                'code' => 'HGM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            212 =>
            array (
                'id' => 713,
                'name' => 'cien pies cúbicos',
                'code' => 'HH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            213 =>
            array (
                'id' => 714,
                'name' => 'cien hojas',
                'code' => 'HI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            214 =>
            array (
                'id' => 715,
                'name' => 'cien unidades internacionales',
                'code' => 'HIU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            215 =>
            array (
                'id' => 716,
                'name' => 'caballo métrico',
                'code' => 'HJ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            216 =>
            array (
                'id' => 717,
                'name' => 'cien kilogramos',
                'code' => 'HK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            217 =>
            array (
                'id' => 718,
            'name' => 'cien pies (lineales)',
                'code' => 'HL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            218 =>
            array (
                'id' => 719,
                'name' => 'hectolitro',
                'code' => 'HLT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            219 =>
            array (
                'id' => 720,
                'name' => 'milla por hora',
                'code' => 'HM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            220 =>
            array (
                'id' => 721,
                'name' => 'millones de metros cúbicos',
                'code' => 'HMQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            221 =>
            array (
                'id' => 722,
                'name' => 'hectómetro',
                'code' => 'HMT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            222 =>
            array (
                'id' => 723,
                'name' => 'milímetro convencional de mercurio',
                'code' => 'HN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            223 =>
            array (
                'id' => 724,
                'name' => 'cien onzas troy',
                'code' => 'HO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            224 =>
            array (
                'id' => 725,
                'name' => 'milímetro convencional de agua',
                'code' => 'HP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            225 =>
            array (
                'id' => 726,
                'name' => 'hectolitro de alcohol puro',
                'code' => 'HPA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            226 =>
            array (
                'id' => 727,
                'name' => 'cien pies cuadrados',
                'code' => 'HS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            227 =>
            array (
                'id' => 728,
                'name' => 'media hora',
                'code' => 'HT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            228 =>
            array (
                'id' => 729,
                'name' => 'hertz',
                'code' => 'HTZ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            229 =>
            array (
                'id' => 730,
                'name' => 'hora',
                'code' => 'HUR',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            230 =>
            array (
                'id' => 731,
                'name' => 'cien yardas',
                'code' => 'HY',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            231 =>
            array (
                'id' => 732,
                'name' => 'pulgada libra',
                'code' => 'IA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            232 =>
            array (
                'id' => 733,
                'name' => 'contar por pulgada',
                'code' => 'IC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            233 =>
            array (
                'id' => 734,
                'name' => 'persona',
                'code' => 'IE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            234 =>
            array (
                'id' => 735,
                'name' => 'pulgadas de agua',
                'code' => 'IF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            235 =>
            array (
                'id' => 736,
                'name' => 'columna pulgada',
                'code' => 'II',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            236 =>
            array (
                'id' => 737,
                'name' => 'pulgada por minuto',
                'code' => 'IL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            237 =>
            array (
                'id' => 738,
                'name' => 'impresión',
                'code' => 'IM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            238 =>
            array (
                'id' => 739,
                'name' => 'pulgada',
                'code' => 'INH',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            239 =>
            array (
                'id' => 740,
                'name' => 'pulgada cuadrada',
                'code' => 'INK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            240 =>
            array (
                'id' => 741,
                'name' => 'pulgada en cubos',
                'code' => 'INQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:40',
                'updated_at' => '2023-01-12 10:57:40',
            ),
            241 =>
            array (
                'id' => 742,
                'name' => 'póliza de seguros',
                'code' => 'IP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            242 =>
            array (
                'id' => 743,
                'name' => 'conteo por centímetro',
                'code' => 'IT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            243 =>
            array (
                'id' => 744,
            'name' => 'pulgada por segundo (velocidad lineal)',
                'code' => 'IU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            244 =>
            array (
                'id' => 745,
            'name' => 'pulgada por segundo al cuadrado (aceleración)',
                'code' => 'IV',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            245 =>
            array (
                'id' => 746,
                'name' => 'julios por kilogramo',
                'code' => 'J2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            246 =>
            array (
                'id' => 747,
                'name' => 'jumbo',
                'code' => 'JB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            247 =>
            array (
                'id' => 748,
                'name' => 'joule por kelvin',
                'code' => 'JE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            248 =>
            array (
                'id' => 749,
                'name' => 'jarra',
                'code' => 'JG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            249 =>
            array (
                'id' => 750,
                'name' => 'megajulio por kilogramo',
                'code' => 'JK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            250 =>
            array (
                'id' => 751,
                'name' => 'megajulio por metro cúbico',
                'code' => 'JM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            251 =>
            array (
                'id' => 752,
                'name' => 'articulación',
                'code' => 'JO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            252 =>
            array (
                'id' => 753,
                'name' => 'joule',
                'code' => 'JOU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            253 =>
            array (
                'id' => 754,
                'name' => 'tarro',
                'code' => 'JR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            254 =>
            array (
                'id' => 755,
                'name' => 'demanda de kilovatios',
                'code' => 'K1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            255 =>
            array (
                'id' => 756,
                'name' => 'kilovoltios amperios reactivos de demanda',
                'code' => 'K2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            256 =>
            array (
                'id' => 757,
                'name' => 'kilovoltio amperio hora reactiva',
                'code' => 'K3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            257 =>
            array (
                'id' => 758,
            'name' => 'amperios kilovoltios (reactivos)',
                'code' => 'K5',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            258 =>
            array (
                'id' => 759,
                'name' => 'kilolitro',
                'code' => 'K6',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            259 =>
            array (
                'id' => 760,
                'name' => 'pastel',
                'code' => 'KA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            260 =>
            array (
                'id' => 761,
                'name' => 'kilocharacter',
                'code' => 'KB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            261 =>
            array (
                'id' => 762,
                'name' => 'kilobar',
                'code' => 'KBA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            262 =>
            array (
                'id' => 763,
                'name' => 'kilogramo decimal',
                'code' => 'KD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            263 =>
            array (
                'id' => 764,
                'name' => 'kelvin',
                'code' => 'KEL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            264 =>
            array (
                'id' => 765,
                'name' => 'kilopacket',
                'code' => 'KF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            265 =>
            array (
                'id' => 766,
                'name' => 'barrilete',
                'code' => 'KG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            266 =>
            array (
                'id' => 767,
                'name' => 'kilogramo',
                'code' => 'KGM',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            267 =>
            array (
                'id' => 768,
                'name' => 'kilogramo por segundo',
                'code' => 'KGS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            268 =>
            array (
                'id' => 769,
                'name' => 'kilohercio',
                'code' => 'KHZ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            269 =>
            array (
                'id' => 770,
                'name' => 'Kilogramo por milímetro de ancho',
                'code' => 'KI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            270 =>
            array (
                'id' => 771,
                'name' => 'kilosegmento',
                'code' => 'KJ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            271 =>
            array (
                'id' => 772,
                'name' => 'kilojoule',
                'code' => 'KJO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            272 =>
            array (
                'id' => 773,
                'name' => 'kilogramo por metro',
                'code' => 'KL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            273 =>
            array (
                'id' => 774,
                'name' => 'kilómetro por hora',
                'code' => 'KMH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            274 =>
            array (
                'id' => 775,
                'name' => 'kilometro cuadrado',
                'code' => 'KMK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            275 =>
            array (
                'id' => 776,
                'name' => 'kilogramo por metro cúbico',
                'code' => 'KMQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            276 =>
            array (
                'id' => 777,
                'name' => 'kilogramo de nitrógeno',
                'code' => 'KNI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            277 =>
            array (
                'id' => 778,
                'name' => 'kilogramo de sustancia nombrada',
                'code' => 'KNS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            278 =>
            array (
                'id' => 779,
                'name' => 'nudo',
                'code' => 'KNT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            279 =>
            array (
                'id' => 780,
                'name' => 'Milliequivalencia de potasa cáustica por gramo de producto.',
                'code' => 'KO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            280 =>
            array (
                'id' => 781,
                'name' => 'kilopascal',
                'code' => 'KPA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            281 =>
            array (
                'id' => 782,
            'name' => 'kilogramo de hidróxido de potasio (potasa cáustica)',
                'code' => 'KPH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            282 =>
            array (
                'id' => 783,
                'name' => 'kilogramo de óxido de potasio',
                'code' => 'KPO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            283 =>
            array (
                'id' => 784,
            'name' => 'kilogramo de pentóxido de fósforo (anhídrido fosfórico)',
                'code' => 'KPP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            284 =>
            array (
                'id' => 785,
                'name' => 'KilorÃ¶ntgen',
                'code' => 'KR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            285 =>
            array (
                'id' => 786,
                'name' => 'mil libras por pulgada cuadrada',
                'code' => 'KS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            286 =>
            array (
                'id' => 787,
                'name' => 'kilogramo de sustancia 90% seca',
                'code' => 'KSD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            287 =>
            array (
                'id' => 788,
            'name' => 'kilogramo de hidróxido de sodio (soda cáustica)',
                'code' => 'KSH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            288 =>
            array (
                'id' => 789,
                'name' => 'equipo',
                'code' => 'KT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            289 =>
            array (
                'id' => 790,
                'name' => 'kilómetro',
                'code' => 'KTM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            290 =>
            array (
                'id' => 791,
                'name' => 'kilotonne',
                'code' => 'KTN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            291 =>
            array (
                'id' => 792,
                'name' => 'kilogramo de uranio',
                'code' => 'KUR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            292 =>
            array (
                'id' => 793,
                'name' => 'kilovoltio – ampere',
                'code' => 'KVA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            293 =>
            array (
                'id' => 794,
                'name' => 'kilovar',
                'code' => 'KVR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            294 =>
            array (
                'id' => 795,
                'name' => 'kilovoltio',
                'code' => 'KVT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            295 =>
            array (
                'id' => 796,
                'name' => 'kilogramos por milímetro',
                'code' => 'KW',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            296 =>
            array (
                'id' => 797,
                'name' => 'kilovatios hora',
                'code' => 'KWH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            297 =>
            array (
                'id' => 798,
                'name' => 'kilovatio',
                'code' => 'KWT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            298 =>
            array (
                'id' => 799,
                'name' => 'mililitro por kilogramo',
                'code' => 'KX',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            299 =>
            array (
                'id' => 800,
                'name' => 'litro por minuto',
                'code' => 'L2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            300 =>
            array (
                'id' => 801,
                'name' => 'libra por pulgada cúbica',
                'code' => 'LA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            301 =>
            array (
                'id' => 802,
                'name' => 'libra',
                'code' => 'LBR',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            302 =>
            array (
                'id' => 803,
                'name' => 'libra troy',
                'code' => 'LBT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            303 =>
            array (
                'id' => 804,
                'name' => 'centímetro lineal',
                'code' => 'LC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            304 =>
            array (
                'id' => 805,
                'name' => 'litro por día',
                'code' => 'LD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            305 =>
            array (
                'id' => 806,
                'name' => 'lite',
                'code' => 'LE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            306 =>
            array (
                'id' => 807,
                'name' => 'hoja',
                'code' => 'LEF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            307 =>
            array (
                'id' => 808,
                'name' => 'pie lineal',
                'code' => 'LF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            308 =>
            array (
                'id' => 809,
                'name' => 'hora de trabajo',
                'code' => 'LH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            309 =>
            array (
                'id' => 810,
                'name' => 'pulgada lineal',
                'code' => 'LI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            310 =>
            array (
                'id' => 811,
                'name' => 'spray grande',
                'code' => 'LJ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            311 =>
            array (
                'id' => 812,
                'name' => 'enlazar',
                'code' => 'LK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            312 =>
            array (
                'id' => 813,
                'name' => 'metro lineal',
                'code' => 'LM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            313 =>
            array (
                'id' => 814,
                'name' => 'longitud',
                'code' => 'LN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            314 =>
            array (
                'id' => 815,
                'name' => 'mucho',
                'code' => 'LO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            315 =>
            array (
                'id' => 816,
                'name' => 'libra liquida',
                'code' => 'LP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            316 =>
            array (
                'id' => 817,
                'name' => 'litro de alcohol puro',
                'code' => 'LPA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            317 =>
            array (
                'id' => 818,
                'name' => 'capa',
                'code' => 'LR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            318 =>
            array (
                'id' => 819,
                'name' => 'Suma global',
                'code' => 'LS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            319 =>
            array (
                'id' => 820,
            'name' => 'ton (Reino Unido) o longton (EE. UU.)',
                'code' => 'LTN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            320 =>
            array (
                'id' => 821,
                'name' => 'litro',
                'code' => 'LTR',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            321 =>
            array (
                'id' => 822,
                'name' => 'lumen',
                'code' => 'LUM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            322 =>
            array (
                'id' => 823,
                'name' => 'lux',
                'code' => 'LUX',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            323 =>
            array (
                'id' => 824,
                'name' => 'yarda lineal por libra',
                'code' => 'LX',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            324 =>
            array (
                'id' => 825,
                'name' => 'yarda lineal',
                'code' => 'LY',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            325 =>
            array (
                'id' => 826,
                'name' => 'cinta magnética',
                'code' => 'M0',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            326 =>
            array (
                'id' => 827,
                'name' => 'miligramos por litro',
                'code' => 'M1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            327 =>
            array (
                'id' => 828,
                'name' => 'valor monetario',
                'code' => 'M4',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            328 =>
            array (
                'id' => 829,
                'name' => 'microcurie',
                'code' => 'M5',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            329 =>
            array (
                'id' => 830,
                'name' => 'micropulgada',
                'code' => 'M7',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            330 =>
            array (
                'id' => 831,
                'name' => 'millones de Btu por 1000 pies cúbicos',
                'code' => 'M9',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            331 =>
            array (
                'id' => 832,
                'name' => 'máquina por unidad',
                'code' => 'MA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            332 =>
            array (
                'id' => 833,
                'name' => 'mega litro',
                'code' => 'MAL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            333 =>
            array (
                'id' => 834,
                'name' => 'megametro',
                'code' => 'MAM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            334 =>
            array (
                'id' => 835,
                'name' => 'megavatio',
                'code' => 'MAW',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            335 =>
            array (
                'id' => 836,
                'name' => 'mil equivalentes de ladrillo estándar',
                'code' => 'MBE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            336 =>
            array (
                'id' => 837,
                'name' => 'mil pies de tabla',
                'code' => 'MBF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            337 =>
            array (
                'id' => 838,
                'name' => 'milibar',
                'code' => 'MBR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            338 =>
            array (
                'id' => 839,
                'name' => 'microgramo',
                'code' => 'MC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            339 =>
            array (
                'id' => 840,
                'name' => 'milicurie',
                'code' => 'MCU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            340 =>
            array (
                'id' => 841,
                'name' => 'aire seco tonelada métrica',
                'code' => 'MD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            341 =>
            array (
                'id' => 842,
                'name' => 'miligramo por pie cuadrado por lado',
                'code' => 'MF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            342 =>
            array (
                'id' => 843,
                'name' => 'miligramo',
                'code' => 'MGM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            343 =>
            array (
                'id' => 844,
                'name' => 'megahercio',
                'code' => 'MGM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            344 =>
            array (
                'id' => 845,
                'name' => 'milla cuadrada',
                'code' => 'MIK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            345 =>
            array (
                'id' => 846,
                'name' => 'mil',
                'code' => 'MIL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            346 =>
            array (
                'id' => 847,
                'name' => 'minuto',
                'code' => 'MIN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            347 =>
            array (
                'id' => 848,
                'name' => 'millón',
                'code' => 'MIO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            348 =>
            array (
                'id' => 849,
                'name' => 'millones de unidades internacionales',
                'code' => 'MIU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            349 =>
            array (
                'id' => 850,
                'name' => 'miligramo por pulgada cuadrada',
                'code' => 'MK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            350 =>
            array (
                'id' => 851,
                'name' => 'mil millones',
                'code' => 'MLD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            351 =>
            array (
                'id' => 852,
                'name' => 'mililitro',
                'code' => 'MLT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            352 =>
            array (
                'id' => 853,
                'name' => 'milímetro cuadrado',
                'code' => 'MMK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            353 =>
            array (
                'id' => 854,
                'name' => 'milímetro cúbico',
                'code' => 'MMQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            354 =>
            array (
                'id' => 855,
                'name' => 'milímetro',
                'code' => 'MMT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            355 =>
            array (
                'id' => 856,
                'name' => 'mes',
                'code' => 'LUN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            356 =>
            array (
                'id' => 857,
                'name' => 'megapascal',
                'code' => 'MPA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            357 =>
            array (
                'id' => 858,
                'name' => 'mil metros',
                'code' => 'MQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            358 =>
            array (
                'id' => 859,
                'name' => 'metro cúbico por hora',
                'code' => 'MQH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            359 =>
            array (
                'id' => 860,
                'name' => 'metro cúbico por segundo',
                'code' => 'MQS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            360 =>
            array (
                'id' => 861,
                'name' => 'metro por segundo al cuadrado',
                'code' => 'MSK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            361 =>
            array (
                'id' => 862,
                'name' => 'estera',
                'code' => 'MT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:41',
                'updated_at' => '2023-01-12 10:57:41',
            ),
            362 =>
            array (
                'id' => 863,
                'name' => 'metro cuadrado',
                'code' => 'MTK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            363 =>
            array (
                'id' => 864,
                'name' => 'Metro cúbico',
                'code' => 'MTQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            364 =>
            array (
                'id' => 865,
                'name' => 'metro',
                'code' => 'MTR',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            365 =>
            array (
                'id' => 866,
                'name' => 'metro por segundo',
                'code' => 'MTS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            366 =>
            array (
                'id' => 867,
                'name' => 'numero de mults',
                'code' => 'MV',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            367 =>
            array (
                'id' => 868,
                'name' => 'megavolt – ampere',
                'code' => 'MVA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            368 =>
            array (
                'id' => 869,
            'name' => 'megavatios hora (1000 kW.h)',
                'code' => 'MWH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            369 =>
            array (
                'id' => 870,
                'name' => 'calorías de la pluma',
                'code' => 'N1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            370 =>
            array (
                'id' => 871,
                'name' => 'número de líneas',
                'code' => 'N2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            371 =>
            array (
                'id' => 872,
                'name' => 'punto de impresión',
                'code' => 'N3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            372 =>
            array (
                'id' => 873,
                'name' => 'miligramo por kilogramo',
                'code' => 'NA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            373 =>
            array (
                'id' => 874,
                'name' => 'número de artículos',
                'code' => 'NAR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            374 =>
            array (
                'id' => 875,
                'name' => 'barcaza',
                'code' => 'NB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            375 =>
            array (
                'id' => 876,
                'name' => 'número de bobinas',
                'code' => 'NBB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            376 =>
            array (
                'id' => 877,
                'name' => 'coche',
                'code' => 'NC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            377 =>
            array (
                'id' => 878,
                'name' => 'número de celdas',
                'code' => 'NCL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            378 =>
            array (
                'id' => 879,
                'name' => 'barril neto',
                'code' => 'ND',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            379 =>
            array (
                'id' => 880,
                'name' => 'litro neto',
                'code' => 'NE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            380 =>
            array (
                'id' => 881,
                'name' => 'newton',
                'code' => 'NEW',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            381 =>
            array (
                'id' => 882,
                'name' => 'mensaje',
                'code' => 'NF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            382 =>
            array (
                'id' => 883,
            'name' => 'galón neto (nosotros)',
                'code' => 'NG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            383 =>
            array (
                'id' => 884,
                'name' => 'hora del mensaje',
                'code' => 'NH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            384 =>
            array (
                'id' => 885,
                'name' => 'galón imperial neto',
                'code' => 'NI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            385 =>
            array (
                'id' => 886,
                'name' => 'número de unidades internacionales',
                'code' => 'NIU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            386 =>
            array (
                'id' => 887,
                'name' => 'número de pantallas',
                'code' => 'NJ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            387 =>
            array (
                'id' => 888,
                'name' => 'carga',
                'code' => 'NL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            388 =>
            array (
                'id' => 889,
                'name' => 'milla nautica',
                'code' => 'MNI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            389 =>
            array (
                'id' => 890,
                'name' => 'número de paquetes',
                'code' => 'NMP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            390 =>
            array (
                'id' => 891,
                'name' => 'entrenar',
                'code' => 'NN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            391 =>
            array (
                'id' => 892,
                'name' => 'número de parcelas',
                'code' => 'NPL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            392 =>
            array (
                'id' => 893,
                'name' => 'numero de pares',
                'code' => 'NPR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            393 =>
            array (
                'id' => 894,
                'name' => 'numero de partes',
                'code' => 'TNP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            394 =>
            array (
                'id' => 895,
                'name' => 'mho',
                'code' => 'NQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            395 =>
            array (
                'id' => 896,
                'name' => 'micromho',
                'code' => 'NR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            396 =>
            array (
                'id' => 897,
                'name' => 'número de rollos',
                'code' => 'NRL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            397 =>
            array (
                'id' => 898,
                'name' => 'tonelada neta',
                'code' => 'NT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            398 =>
            array (
                'id' => 899,
                'name' => 'registro neto de toneladas',
                'code' => 'NTT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            399 =>
            array (
                'id' => 900,
                'name' => 'medidor de newton',
                'code' => 'NU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            400 =>
            array (
                'id' => 901,
                'name' => 'vehículo',
                'code' => 'NV',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            401 =>
            array (
                'id' => 902,
                'name' => 'parte por mil',
                'code' => 'NX',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            402 =>
            array (
                'id' => 903,
                'name' => 'libra por aire seco tonelada métrica',
                'code' => 'NY',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            403 =>
            array (
                'id' => 904,
                'name' => 'panel',
                'code' => 'OA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            404 =>
            array (
                'id' => 905,
                'name' => 'ohm',
                'code' => 'OHM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            405 =>
            array (
                'id' => 906,
                'name' => 'onza por yarda cuadrada',
                'code' => 'EN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            406 =>
            array (
                'id' => 907,
                'name' => 'onza',
                'code' => 'ONZ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            407 =>
            array (
                'id' => 908,
                'name' => 'Dos paquetes',
                'code' => 'OP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            408 =>
            array (
                'id' => 909,
                'name' => 'hora extra',
                'code' => 'OT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            409 =>
            array (
                'id' => 910,
                'name' => 'onza av',
                'code' => 'ONZ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            410 =>
            array (
                'id' => 911,
            'name' => 'onza líquida (US)',
                'code' => 'OZA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            411 =>
            array (
                'id' => 912,
            'name' => 'onza líquida (Reino Unido)',
                'code' => 'OZI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            412 =>
            array (
                'id' => 913,
                'name' => 'pagina – electronica',
                'code' => 'P0',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            413 =>
            array (
                'id' => 914,
                'name' => 'por ciento',
                'code' => 'P1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            414 =>
            array (
                'id' => 915,
                'name' => 'libra por pie',
                'code' => 'P2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            415 =>
            array (
                'id' => 916,
                'name' => 'paquete de tres',
                'code' => 'P3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            416 =>
            array (
                'id' => 917,
                'name' => 'paquete de cuatro',
                'code' => 'P4',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            417 =>
            array (
                'id' => 918,
                'name' => 'paquete de cinco',
                'code' => 'P5',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            418 =>
            array (
                'id' => 919,
                'name' => 'paquete de seis',
                'code' => 'P6',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            419 =>
            array (
                'id' => 920,
                'name' => 'paquete de siete',
                'code' => 'P7',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            420 =>
            array (
                'id' => 921,
                'name' => 'paquete de ocho',
                'code' => 'P8',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            421 =>
            array (
                'id' => 922,
                'name' => 'paquete de nueve',
                'code' => 'P9',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            422 =>
            array (
                'id' => 923,
                'name' => 'paquete',
                'code' => 'PA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            423 =>
            array (
                'id' => 924,
                'name' => 'pascal',
                'code' => 'PAL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            424 =>
            array (
                'id' => 925,
                'name' => 'par de pulgadas',
                'code' => 'PB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            425 =>
            array (
                'id' => 926,
                'name' => 'almohadilla',
                'code' => 'PD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            426 =>
            array (
                'id' => 927,
                'name' => 'equivalente en libras',
                'code' => 'PE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            427 =>
            array (
                'id' => 928,
            'name' => 'palet (ascensor)',
                'code' => 'PF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            428 =>
            array (
                'id' => 929,
                'name' => 'plato',
                'code' => 'PG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            429 =>
            array (
                'id' => 930,
                'name' => 'galón de prueba',
                'code' => 'PGL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            430 =>
            array (
                'id' => 931,
                'name' => 'tono',
                'code' => 'PI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            431 =>
            array (
                'id' => 932,
                'name' => 'paquete',
                'code' => 'PK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            432 =>
            array (
                'id' => 933,
                'name' => 'cubo',
                'code' => 'PL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            433 =>
            array (
                'id' => 934,
                'name' => 'porcentaje de libra',
                'code' => 'PM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            434 =>
            array (
                'id' => 935,
                'name' => 'libra neta',
                'code' => 'PN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            435 =>
            array (
                'id' => 936,
                'name' => 'libra por pulgada de longitud',
                'code' => 'PO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            436 =>
            array (
                'id' => 937,
                'name' => 'página por pulgada',
                'code' => 'PQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            437 =>
            array (
                'id' => 938,
                'name' => 'par',
                'code' => 'PR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            438 =>
            array (
                'id' => 939,
                'name' => 'fuerza de libra por pulgada cuadrada',
                'code' => 'PD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            439 =>
            array (
                'id' => 940,
                'name' => 'pinta',
                'code' => 'PT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            440 =>
            array (
                'id' => 941,
                'name' => 'pinta seca',
                'code' => 'PTD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            441 =>
            array (
                'id' => 942,
            'name' => 'pinta (Reino Unido)',
                'code' => 'PTI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            442 =>
            array (
                'id' => 943,
            'name' => 'pinta liquida (US)',
                'code' => 'PTL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            443 =>
            array (
                'id' => 944,
                'name' => 'bandeja / paquete de bandeja',
                'code' => 'PU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            444 =>
            array (
                'id' => 945,
            'name' => 'media pinta (US)',
                'code' => 'PV',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            445 =>
            array (
                'id' => 946,
                'name' => 'libra por pulgada de ancho',
                'code' => 'PW',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            446 =>
            array (
                'id' => 947,
            'name' => 'Peck Dry (US)',
                'code' => 'PY',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            447 =>
            array (
                'id' => 948,
            'name' => 'Peck Dry (Reino Unido)',
                'code' => 'PZ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            448 =>
            array (
                'id' => 949,
                'name' => 'comida',
                'code' => 'Q3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            449 =>
            array (
                'id' => 950,
                'name' => 'página – facsímil',
                'code' => 'QA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            450 =>
            array (
                'id' => 951,
            'name' => 'cuarto (de un año)',
                'code' => 'QAN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            451 =>
            array (
                'id' => 952,
                'name' => 'página – copia impresa',
                'code' => 'QB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            452 =>
            array (
                'id' => 953,
                'name' => 'cuarto de docena',
                'code' => 'QD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            453 =>
            array (
                'id' => 954,
                'name' => 'un cuarto de hora',
                'code' => 'QH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            454 =>
            array (
                'id' => 955,
                'name' => 'cuarto de kilogramo',
                'code' => 'QK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            455 =>
            array (
                'id' => 956,
                'name' => 'mano de papel',
                'code' => 'QR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            456 =>
            array (
                'id' => 957,
            'name' => 'cuarto de galón (US)',
                'code' => 'QT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            457 =>
            array (
                'id' => 958,
            'name' => 'cuarto seco (EE. UU.)',
                'code' => 'QTD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            458 =>
            array (
                'id' => 959,
            'name' => 'cuarto de galón (Reino Unido)',
                'code' => 'QTI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            459 =>
            array (
                'id' => 960,
            'name' => 'cuarto líquido (US)',
                'code' => 'QTL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            460 =>
            array (
                'id' => 961,
            'name' => 'cuarto (UK)',
                'code' => 'QTR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            461 =>
            array (
                'id' => 962,
                'name' => 'pica',
                'code' => 'R1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            462 =>
            array (
                'id' => 963,
                'name' => 'caloría',
                'code' => 'R4',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            463 =>
            array (
                'id' => 964,
                'name' => 'mil metros cúbicos',
                'code' => 'R9',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            464 =>
            array (
                'id' => 965,
                'name' => 'estante',
                'code' => 'RA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            465 =>
            array (
                'id' => 966,
                'name' => 'barra',
                'code' => 'RD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            466 =>
            array (
                'id' => 967,
                'name' => 'anillo',
                'code' => 'RG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            467 =>
            array (
                'id' => 968,
                'name' => 'hora de funcionamiento o de funcionamiento',
                'code' => 'RH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            468 =>
            array (
                'id' => 969,
                'name' => 'medida métrica rollo',
                'code' => 'RK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            469 =>
            array (
                'id' => 970,
                'name' => 'carrete',
                'code' => 'RL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            470 =>
            array (
                'id' => 971,
                'name' => 'resma',
                'code' => 'RM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            471 =>
            array (
                'id' => 972,
                'name' => 'medida métrica de resma',
                'code' => 'RN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            472 =>
            array (
                'id' => 973,
                'name' => 'rodar',
                'code' => 'RO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            473 =>
            array (
                'id' => 974,
                'name' => 'libra por resma',
                'code' => 'RP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            474 =>
            array (
                'id' => 975,
                'name' => 'revoluciones por minuto',
                'code' => 'RPM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            475 =>
            array (
                'id' => 976,
                'name' => 'revoluciones por segundo',
                'code' => 'RPS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            476 =>
            array (
                'id' => 977,
                'name' => 'Reiniciar',
                'code' => 'RS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            477 =>
            array (
                'id' => 978,
                'name' => 'ingreso tonelada milla',
                'code' => 'RT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            478 =>
            array (
                'id' => 979,
                'name' => 'correr',
                'code' => 'RU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            479 =>
            array (
                'id' => 980,
                'name' => 'pie cuadrado por segundo',
                'code' => 'S3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            480 =>
            array (
                'id' => 981,
                'name' => 'metro cuadrado por segundo',
                'code' => 'S4',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:42',
                'updated_at' => '2023-01-12 10:57:42',
            ),
            481 =>
            array (
                'id' => 982,
                'name' => 'sesenta cuartos de pulgada',
                'code' => 'S5',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            482 =>
            array (
                'id' => 983,
                'name' => 'sesión',
                'code' => 'S6',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            483 =>
            array (
                'id' => 984,
                'name' => 'unidad de almacenamiento',
                'code' => 'S7',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            484 =>
            array (
                'id' => 985,
                'name' => 'unidad de publicidad estándar',
                'code' => 'S8',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            485 =>
            array (
                'id' => 986,
                'name' => 'saco',
                'code' => 'SA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            486 =>
            array (
                'id' => 987,
            'name' => 'medio año (6 meses)',
                'code' => 'SAN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            487 =>
            array (
                'id' => 988,
                'name' => 'Puntuación',
                'code' => 'OCS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            488 =>
            array (
                'id' => 989,
                'name' => 'escrúpulo',
                'code' => 'SCR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            489 =>
            array (
                'id' => 990,
                'name' => 'libra solida',
                'code' => 'SD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            490 =>
            array (
                'id' => 991,
                'name' => 'sección',
                'code' => 'SE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            491 =>
            array (
                'id' => 992,
                'name' => 'segundo',
                'code' => 'SEC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            492 =>
            array (
                'id' => 993,
                'name' => 'conjunto',
                'code' => 'SET',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            493 =>
            array (
                'id' => 994,
                'name' => 'segmento',
                'code' => 'SG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            494 =>
            array (
                'id' => 995,
                'name' => 'tonelada de envío',
                'code' => 'SHT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            495 =>
            array (
                'id' => 996,
                'name' => 'siemens',
                'code' => 'SIE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            496 =>
            array (
                'id' => 997,
                'name' => 'camión cisterna dividido',
                'code' => 'SK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            497 =>
            array (
                'id' => 998,
                'name' => 'hoja de deslizamiento',
                'code' => 'SL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            498 =>
            array (
                'id' => 999,
            'name' => 'milla (milla estatutaria)',
                'code' => 'SMI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            499 =>
            array (
                'id' => 1000,
                'name' => 'varilla cuadrada',
                'code' => 'SN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
        ));
        \DB::table('unit_measures')->insert(array (
            0 =>
            array (
                'id' => 1001,
                'name' => 'carrete',
                'code' => 'SO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            1 =>
            array (
                'id' => 1002,
                'name' => 'paquete de estante',
                'code' => 'SP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            2 =>
            array (
                'id' => 1003,
                'name' => 'cuadrado',
                'code' => 'SQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            3 =>
            array (
                'id' => 1004,
                'name' => 'tira',
                'code' => 'SR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            4 =>
            array (
                'id' => 1005,
                'name' => 'hoja métrica medida',
                'code' => 'SS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            5 =>
            array (
                'id' => 1006,
            'name' => 'corto estándar (7200 partidos)',
                'code' => 'SST',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            6 =>
            array (
                'id' => 1007,
                'name' => 'hoja',
                'code' => 'ST',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            7 =>
            array (
                'id' => 1008,
            'name' => 'piedra (Reino Unido)',
                'code' => 'ITS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            8 =>
            array (
                'id' => 1009,
            'name' => 'tonelada (US) o tonelada corta (UK / US)',
                'code' => 'STN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            9 =>
            array (
                'id' => 1010,
                'name' => 'patinar',
                'code' => 'SV',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            10 =>
            array (
                'id' => 1011,
                'name' => 'madeja',
                'code' => 'SO',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            11 =>
            array (
                'id' => 1012,
                'name' => 'envío',
                'code' => 'SX',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            12 =>
            array (
                'id' => 1013,
                'name' => 'Línea de telecomunicaciones en servicio.',
                'code' => 'T0',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            13 =>
            array (
                'id' => 1014,
                'name' => 'mil libras brutas',
                'code' => 'T1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            14 =>
            array (
                'id' => 1015,
                'name' => 'mil piezas',
                'code' => 'T3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            15 =>
            array (
                'id' => 1016,
                'name' => 'bolsa de mil',
                'code' => 'T4',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            16 =>
            array (
                'id' => 1017,
                'name' => 'caja de mil',
                'code' => 'T5',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            17 =>
            array (
                'id' => 1018,
            'name' => 'mil galones (US)',
                'code' => 'T6',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            18 =>
            array (
                'id' => 1019,
                'name' => 'mil impresiones',
                'code' => 'T7',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            19 =>
            array (
                'id' => 1020,
                'name' => 'mil pulgadas lineales',
                'code' => 'T8',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            20 =>
            array (
                'id' => 1021,
                'name' => 'décimo pie cúbico',
                'code' => 'TA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            21 =>
            array (
                'id' => 1022,
            'name' => 'Kiloampere hora (mil amperios hora)',
                'code' => 'TAH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            22 =>
            array (
                'id' => 1023,
                'name' => 'camion',
                'code' => 'TC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            23 =>
            array (
                'id' => 1024,
                'name' => 'termia',
                'code' => 'TD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            24 =>
            array (
                'id' => 1025,
                'name' => 'totalizador',
                'code' => 'TE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            25 =>
            array (
                'id' => 1026,
                'name' => 'diez metros cuadrados',
                'code' => 'TF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            26 =>
            array (
                'id' => 1027,
                'name' => 'mil pulgadas cuadradas',
                'code' => 'TI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            27 =>
            array (
                'id' => 1028,
                'name' => 'mil centímetros cuadrados',
                'code' => 'TJ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            28 =>
            array (
                'id' => 1029,
                'name' => 'tanque rectangular',
                'code' => 'TK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            29 =>
            array (
                'id' => 1030,
            'name' => 'mil pies (lineales)',
                'code' => 'TL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            30 =>
            array (
                'id' => 1031,
                'name' => 'estaño',
                'code' => 'TN',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            31 =>
            array (
                'id' => 1032,
            'name' => 'tonelada (tonelada métrica)',
                'code' => 'TNE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            32 =>
            array (
                'id' => 1033,
                'name' => 'paquete de diez',
                'code' => 'TP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            33 =>
            array (
                'id' => 1034,
                'name' => 'diez pares',
                'code' => 'TPR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            34 =>
            array (
                'id' => 1035,
                'name' => 'mil pies',
                'code' => 'TQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            35 =>
            array (
                'id' => 1036,
                'name' => 'mil metros cúbicos por día',
                'code' => 'TQD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            36 =>
            array (
                'id' => 1037,
                'name' => 'diez pies cuadrados',
                'code' => 'TR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            37 =>
            array (
                'id' => 1038,
            'name' => 'trillón (EUR)',
                'code' => 'TRL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            38 =>
            array (
                'id' => 1039,
                'name' => 'mil pies cuadrados',
                'code' => 'TS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            39 =>
            array (
                'id' => 1040,
                'name' => 'tonelada de sustancia 90% seca',
                'code' => 'TSD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            40 =>
            array (
                'id' => 1041,
                'name' => 'tonelada de vapor por hora',
                'code' => 'TSH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            41 =>
            array (
                'id' => 1042,
                'name' => 'mil metros lineales',
                'code' => 'TT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            42 =>
            array (
                'id' => 1043,
                'name' => 'tubo',
                'code' => 'TU',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            43 =>
            array (
                'id' => 1044,
                'name' => 'mil kilogramos',
                'code' => 'TV',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            44 =>
            array (
                'id' => 1045,
                'name' => 'mil hojas',
                'code' => 'TW',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            45 =>
            array (
                'id' => 1046,
                'name' => 'tanque cilíndrico',
                'code' => 'TY',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            46 =>
            array (
                'id' => 1047,
                'name' => 'tratamiento',
                'code' => 'U1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            47 =>
            array (
                'id' => 1048,
                'name' => 'tableta',
                'code' => 'U2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            48 =>
            array (
                'id' => 1049,
                'name' => 'torr',
                'code' => 'UA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            49 =>
            array (
                'id' => 1050,
                'name' => 'Línea de telecomunicaciones en servicio promedio.',
                'code' => 'UB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            50 =>
            array (
                'id' => 1051,
                'name' => 'puerto de telecomunicaciones',
                'code' => 'UC',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            51 =>
            array (
                'id' => 1052,
                'name' => 'décimo minuto',
                'code' => 'UD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            52 =>
            array (
                'id' => 1053,
                'name' => 'décima hora',
                'code' => 'UE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            53 =>
            array (
                'id' => 1054,
                'name' => 'uso por línea de telecomunicación promedio',
                'code' => 'UF',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            54 =>
            array (
                'id' => 1055,
                'name' => 'diez mil yardas',
                'code' => 'UH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            55 =>
            array (
                'id' => 1056,
                'name' => 'millones de unidades',
                'code' => 'UM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            56 =>
            array (
                'id' => 1057,
                'name' => 'voltio amperio por kilogramo',
                'code' => 'VA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            57 =>
            array (
                'id' => 1058,
                'name' => 'frasco',
                'code' => 'VI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            58 =>
            array (
                'id' => 1059,
                'name' => 'voltio',
                'code' => 'VLT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            59 =>
            array (
                'id' => 1060,
                'name' => 'abultar',
                'code' => 'VQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            60 =>
            array (
                'id' => 1061,
                'name' => 'visitar',
                'code' => 'VS',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            61 =>
            array (
                'id' => 1062,
                'name' => 'kilo mojado',
                'code' => 'W2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            62 =>
            array (
                'id' => 1063,
                'name' => 'dos semanas',
                'code' => 'W4',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            63 =>
            array (
                'id' => 1064,
                'name' => 'vatio por kilogramo',
                'code' => 'WA',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            64 =>
            array (
                'id' => 1065,
                'name' => 'libra mojada',
                'code' => 'WB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            65 =>
            array (
                'id' => 1066,
                'name' => 'cable',
                'code' => 'WCD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            66 =>
            array (
                'id' => 1067,
                'name' => 'tonelada mojada',
                'code' => 'WE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            67 =>
            array (
                'id' => 1068,
                'name' => 'weber',
                'code' => 'WEB',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            68 =>
            array (
                'id' => 1069,
                'name' => 'semana',
                'code' => 'WEE',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            69 =>
            array (
                'id' => 1070,
                'name' => 'galon de vino',
                'code' => 'WG',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            70 =>
            array (
                'id' => 1071,
                'name' => 'rueda',
                'code' => 'WH',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            71 =>
            array (
                'id' => 1072,
                'name' => 'vatios hora',
                'code' => 'WHR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            72 =>
            array (
                'id' => 1073,
                'name' => 'peso por pulgada cuadrada',
                'code' => 'WI',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            73 =>
            array (
                'id' => 1074,
                'name' => 'mes de trabajo',
                'code' => 'WM',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            74 =>
            array (
                'id' => 1075,
                'name' => 'envolver',
                'code' => 'WR',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            75 =>
            array (
                'id' => 1076,
                'name' => 'estándar',
                'code' => 'WSD',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            76 =>
            array (
                'id' => 1077,
                'name' => 'vatio',
                'code' => 'WTT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            77 =>
            array (
                'id' => 1078,
                'name' => 'mililitro de agua',
                'code' => 'WW',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            78 =>
            array (
                'id' => 1079,
                'name' => 'cadena',
                'code' => 'X1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            79 =>
            array (
                'id' => 1080,
                'name' => 'yarda cuadrada',
                'code' => 'YDK',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            80 =>
            array (
                'id' => 1081,
                'name' => 'Yarda cúbica',
                'code' => 'YDQ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            81 =>
            array (
                'id' => 1082,
                'name' => 'cien yardas lineales',
                'code' => 'YL',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            82 =>
            array (
                'id' => 1083,
                'name' => 'yarda',
                'code' => 'YRD',
                'status' => 'activo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            83 =>
            array (
                'id' => 1084,
                'name' => 'diez yardas',
                'code' => 'YT',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            84 =>
            array (
                'id' => 1085,
                'name' => 'van de elevación',
                'code' => 'Z1',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            85 =>
            array (
                'id' => 1086,
                'name' => 'pecho',
                'code' => 'Z2',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            86 =>
            array (
                'id' => 1087,
                'name' => 'barril',
                'code' => 'Z3',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            87 =>
            array (
                'id' => 1088,
                'name' => 'pipa',
                'code' => 'Z4',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            88 =>
            array (
                'id' => 1089,
                'name' => 'arrastrar',
                'code' => 'Z5',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            89 =>
            array (
                'id' => 1090,
                'name' => 'punto de conferencia',
                'code' => 'Z6',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            90 =>
            array (
                'id' => 1091,
                'name' => 'línea de noticias de ágata',
                'code' => 'Z8',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            91 =>
            array (
                'id' => 1092,
                'name' => 'página',
                'code' => 'ZP',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
            92 =>
            array (
                'id' => 1093,
                'name' => 'mutuamente definido',
                'code' => 'ZZ',
                'status' => 'inactivo',
                'created_at' => '2023-01-12 10:57:43',
                'updated_at' => '2023-01-12 10:57:43',
            ),
        ));


    }
}
