<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('products')->delete();

        \DB::table('products')->insert(array (
            0 =>
            array(
                'id' => 1,
                'code' => '000008',
                'name' => 'ACERO INOX',
                'price' => 5709,51,
                'sale_price' => 5709,51,
                'stock' => 740,5,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            1 =>
            array(
                'id' => 2,
                'code' => '000069',
                'name' => 'ACLIRICO',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            2 =>
            array(
                'id' => 3,
                'code' => '000081',
                'name' => 'ALUMINIO',
                'price' => 6075,25,
                'sale_price' => 6075,25,
                'stock' => 126,9,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            3 =>
            array(
                'id' => 4,
                'code' => '000010',
                'name' => 'ALUMINIO BLANDO',
                'price' => 6650,32,
                'sale_price' => 6650,32,
                'stock' => 783,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            4 =>
            array(
                'id' => 5,
                'code' => '000021',
                'name' => 'ALUMINIO CONTAMINADO',
                'price' => 2422,98,
                'sale_price' => 2422,98,
                'stock' => 194,2,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            5 =>
            array(
                'id' => 6,
                'code' => '000009',
                'name' => 'ALUMINIO GRUESO',
                'price' => 6905,56,
                'sale_price' => 6905,56,
                'stock' => 1902,6,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            6 =>
            array(
                'id' => 7,
                'code' => '000014',
                'name' => 'ALUMINIO GUAYA',
                'price' => 9928,73,
                'sale_price' => 9928,73,
                'stock' => 42,5,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            7 =>
            array(
                'id' => 8,
                'code' => '000016',
                'name' => 'ALUMINIO OLLA',
                'price' => 7157,17,
                'sale_price' => 7157,17,
                'stock' => 460,4,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            8 =>
            array(
                'id' => 9,
                'code' => '000012',
                'name' => 'ALUMINIO PERFIL',
                'price' => 8912,93,
                'sale_price' => 8912,93,
                'stock' => 650,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            9 =>
            array(
                'id' => 10,
                'code' => '000011',
                'name' => 'ALUMINIO POTE',
                'price' => 6000,79,
                'sale_price' => 6000,79,
                'stock' => 5602,6,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            10 =>
            array(
                'id' => 11,
                'code' => '000018',
                'name' => 'ALUMINIO REVUELTO',
                'price' => 5730,5,
                'sale_price' => 5730,5,
                'stock' => 53,3,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            11 =>
            array(
                'id' => 12,
                'code' => '000031',
                'name' => 'ALUMINIO RIN',
                'price' => 9263,21,
                'sale_price' => 9263,21,
                'stock' => 61,7,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            12 =>
            array(
                'id' => 13,
                'code' => '000017',
                'name' => 'ANTIMONIO',
                'price' => 7147,95,
                'sale_price' => 7147,95,
                'stock' => 54,9,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            13 =>
            array(
                'id' => 14,
                'code' => '000060',
                'name' => 'ARCHIVO',
                'price' => 1458,34,
                'sale_price' => 1458,34,
                'stock' => 3550,7,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            14 =>
            array(
                'id' => 15,
                'code' => '000086',
                'name' => 'ARCHIVO SELECCION',
                'price' => 1304,26,
                'sale_price' => 1304,26,
                'stock' => 62,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            15 =>
            array(
                'id' => 16,
                'code' => '000110',
                'name' => 'AROS',
                'price' => 2929,57,
                'sale_price' => 2929,57,
                'stock' => 3,5,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            16 =>
            array(
                'id' => 17,
                'code' => '000032',
                'name' => 'BALANCIN',
                'price' => 6000,
                'sale_price' => 6000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            17 =>
            array(
                'id' => 18,
                'code' => '000020',
                'name' => 'BANDA Y PLANCHA',
                'price' => 3495,35,
                'sale_price' => 3495,35,
                'stock' => 136,8,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            18 =>
            array(
                'id' => 19,
                'code' => '000036',
                'name' => 'BATERIA 27',
                'price' => 67000,
                'sale_price' => 67000,
                'stock' => 1,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            19 =>
            array(
                'id' => 20,
                'code' => '000037',
                'name' => 'BATERIA 30H',
                'price' => 85000,
                'sale_price' => 85000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            20 =>
            array(
                'id' => 21,
                'code' => '000025',
                'name' => 'BATERIA 42',
                'price' => 49000,
                'sale_price' => 49000,
                'stock' => 3,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            21 =>
            array(
                'id' => 22,
                'code' => '000035',
                'name' => 'BATERIA 48',
                'price' => 57000,
                'sale_price' => 57000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            22 =>
            array(
                'id' => 23,
                'code' => '000038',
                'name' => 'BATERIA 4D',
                'price' => 121800,
                'sale_price' => 121800,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            23 =>
            array(
                'id' => 24,
                'code' => '000039',
                'name' => 'BATERIA 8D',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            24 =>
            array(
                'id' => 25,
                'code' => '000108',
                'name' => 'BATERIA CELULAR',
                'price' => 1570,18,
                'sale_price' => 1570,18,
                'stock' => 5,7,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            25 =>
            array(
                'id' => 26,
                'code' => '000024',
                'name' => 'BATERIA N40',
                'price' => 40833,33,
                'sale_price' => 40833,33,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            26 =>
            array(
                'id' => 27,
                'code' => '000003',
                'name' => 'BRONCE',
                'price' => 25326,22,
                'sale_price' => 25326,22,
                'stock' => 416,4,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            27 =>
            array(
                'id' => 28,
                'code' => '000071',
                'name' => 'BRONCE CONTAMINADO',
                'price' => 13243,12,
                'sale_price' => 13243,12,
                'stock' => 23,4,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            28 =>
            array(
                'id' => 29,
                'code' => '000070',
                'name' => 'BRONCE N0.2',
                'price' => 18849,34,
                'sale_price' => 18849,34,
                'stock' => 2,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            29 =>
            array(
                'id' => 30,
                'code' => '000090',
                'name' => 'CABLE',
                'price' => 6283,16,
                'sale_price' => 6283,16,
                'stock' => 158,8,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            30 =>
            array(
                'id' => 31,
                'code' => '000051',
                'name' => 'CANASTA LLENA',
                'price' => 6400,
                'sale_price' => 6400,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            31 =>
            array(
                'id' => 32,
                'code' => '000052',
                'name' => 'CANASTA VACIA',
                'price' => 5504,16,
                'sale_price' => 5504,16,
                'stock' => 9,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            32 =>
            array(
                'id' => 33,
                'code' => '000062',
                'name' => 'CARTON',
                'price' => 256,82,
                'sale_price' => 256,82,
                'stock' => 2615,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            33 =>
            array(
                'id' => 34,
                'code' => '000067',
                'name' => 'CDS',
                'price' => 949,71,
                'sale_price' => 949,71,
                'stock' => 139,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            34 =>
            array(
                'id' => 35,
                'code' => '000040',
                'name' => 'CELULAR ENTERO',
                'price' => 30941,57,
                'sale_price' => 30941,57,
                'stock' => 16,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            35 =>
            array(
                'id' => 36,
                'code' => '000027',
                'name' => 'CHATARRA',
                'price' => 1391,44,
                'sale_price' => 1391,44,
                'stock' => 7349,3,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            36 =>
            array(
                'id' => 37,
                'code' => '000112',
                'name' => 'CIELO RAZO',
                'price' => 181,94,
                'sale_price' => 181,94,
                'stock' => 77,5,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            37 =>
            array(
                'id' => 38,
                'code' => '000109',
                'name' => 'CILINDRO',
                'price' => 2249,55,
                'sale_price' => 2249,55,
                'stock' => 41,9,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            38 =>
            array(
                'id' => 39,
                'code' => '000002',
                'name' => 'COBRE 1B',
                'price' => 37386,62,
                'sale_price' => 37386,62,
                'stock' => 114,8,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            39 =>
            array(
                'id' => 40,
                'code' => '000073',
                'name' => 'COBRE CONTAMINADO',
                'price' => 12285,71,
                'sale_price' => 12285,71,
                'stock' => 1,4,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            40 =>
            array(
                'id' => 41,
                'code' => '000001',
                'name' => 'COBRE MIXTO',
                'price' => 35374,31,
                'sale_price' => 35374,31,
                'stock' => 452,1,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            41 =>
            array(
                'id' => 42,
                'code' => '000065',
                'name' => 'COLOR',
                'price' => 259,38,
                'sale_price' => 259,38,
                'stock' => 382,5,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            42 =>
            array(
                'id' => 43,
                'code' => '000049',
                'name' => 'DISCO DURO ENTERO',
                'price' => 4928,29,
                'sale_price' => 4928,29,
                'stock' => 28,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            43 =>
            array(
                'id' => 44,
                'code' => '000094',
                'name' => 'ENDUCIDO',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            44 =>
            array(
                'id' => 45,
                'code' => '000034',
                'name' => 'ESTACIONARIA',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            45 =>
            array(
                'id' => 46,
                'code' => '000050',
                'name' => 'FILO DORADO',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            46 =>
            array(
                'id' => 47,
                'code' => '000028',
                'name' => 'HIERRO GRIS',
                'price' => 1698,31,
                'sale_price' => 1698,31,
                'stock' => 2005,5,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            47 =>
            array(
                'id' => 48,
                'code' => '000091',
                'name' => 'KILO DE PIPO',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            48 =>
            array(
                'id' => 49,
                'code' => '000089',
                'name' => 'KILO DE UNIDAD',
                'price' => 2908,67,
                'sale_price' => 2908,67,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            49 =>
            array(
                'id' => 50,
                'code' => '000107',
                'name' => 'LIMPIEZA',
                'price' => 2119,54,
                'sale_price' => 2119,54,
                'stock' => 199,4,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            50 =>
            array(
                'id' => 51,
                'code' => '000013',
                'name' => 'LITOGRAFIA',
                'price' => 8998,71,
                'sale_price' => 8998,71,
                'stock' => 267,2,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            51 =>
            array(
                'id' => 52,
                'code' => '000079',
                'name' => 'MANGUERA',
                'price' => 666,67,
                'sale_price' => 666,67,
                'stock' => 12,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            52 =>
            array(
                'id' => 53,
                'code' => '000074',
                'name' => 'MATERIAL',
                'price' => 1500,
                'sale_price' => 1500,
                'stock' => 42,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            53 =>
            array(
                'id' => 54,
                'code' => '000080',
                'name' => 'MODEM',
                'price' => 7893,02,
                'sale_price' => 7893,02,
                'stock' => 48,5,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            54 =>
            array(
                'id' => 55,
                'code' => '000095',
                'name' => 'MONEDA',
                'price' => 18000,
                'sale_price' => 18000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            55 =>
            array(
                'id' => 56,
                'code' => '000095',
                'name' => 'PANAN',
                'price' => 2851,00,
                'sale_price' => 2851,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            56 =>
            array(
                'id' => 57,
                'code' => '000053',
                'name' => 'PASTA GRUESA',
                'price' => 1358,14,
                'sale_price' => 1358,14,
                'stock' => 541,5,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            57 =>
            array(
                'id' => 58,
                'code' => '000066',
                'name' => 'PASTA REVUELTA',
                'price' => 481,05,
                'sale_price' => 481,05,
                'stock' => 221,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            58 =>
            array(
                'id' => 59,
                'code' => '000030',
                'name' => 'PERFUMERO-SALCHICHA',
                'price' => 5000,
                'sale_price' => 5000,
                'stock' => 75,8,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            59 =>
            array(
                'id' => 60,
                'code' => '000063',
                'name' => 'PERIODICO',
                'price' => 404,21,
                'sale_price' => 404,21,
                'stock' => 107,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            60 =>
            array(
                'id' => 61,
                'code' => '000055',
                'name' => 'PERSIANA',
                'price' => 1829,55,
                'sale_price' => 1829,55,
                'stock' => 4,4,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            61 =>
            array(
                'id' => 62,
                'code' => '000057',
                'name' => 'PET',
                'price' => 1053,72,
                'sale_price' => 1053,72,
                'stock' => 1256,8,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            62 =>
            array(
                'id' => 63,
                'code' => '000023',
                'name' => 'PIPO',
                'price' => 17974,49,
                'sale_price' => 17974,49,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            63 =>
            array(
                'id' => 64,
                'code' => '000104',
                'name' => 'PISCINA',
                'price' => 1419,66,
                'sale_price' => 1419,66,
                'stock' => 163,7,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            64 =>
            array(
                'id' => 65,
                'code' => '000058',
                'name' => 'PLASTICO',
                'price' => 693,79,
                'sale_price' => 693,79,
                'stock' => 2479,7,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            65 =>
            array(
                'id' => 66,
                'code' => '000064',
                'name' => 'PLEGA',
                'price' => 87,46,
                'sale_price' => 87,46,
                'stock' => 1521,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            66 =>
            array(
                'id' => 67,
                'code' => '000026',
                'name' => 'PLOMO',
                'price' => 6275,15,
                'sale_price' => 6275,15,
                'stock' => 48,7,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            67 =>
            array(
                'id' => 68,
                'code' => '000097',
                'name' => 'PLOMO SUCIO',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            68 =>
            array(
                'id' => 69,
                'code' => '000093',
                'name' => 'POMPER',
                'price' => 502,99,
                'sale_price' => 502,99,
                'stock' => 84,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            69 =>
            array(
                'id' => 70,
                'code' => '000102',
                'name' => 'PORTATIL',
                'price' => 4894,45,
                'sale_price' => 4894,45,
                'stock' => 55,9,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            70 =>
            array(
                'id' => 71,
                'code' => '000105',
                'name' => 'PROCESADOR',
                'price' => 500,
                'sale_price' => 500,
                'stock' => 79,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            71 =>
            array(
                'id' => 72,
                'code' => '000059',
                'name' => 'PVC',
                'price' => 317,46,
                'sale_price' => 317,46,
                'stock' => 189,2,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            72 =>
            array(
                'id' => 73,
                'code' => '000100',
                'name' => 'RADIADOR ALUMINIO SUCIO',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            73 =>
            array(
                'id' => 74,
                'code' => '000101',
                'name' => 'RADIADOR COBRE SUCIO',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            74 =>
            array(
                'id' => 75,
                'code' => '000075',
                'name' => 'RADIADOR CONTAMINADO',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            75 =>
            array(
                'id' => 76,
                'code' => '000006',
                'name' => 'RADIADOR DE ALUMINIO',
                'price' => 5118,58,
                'sale_price' => 5118,58,
                'stock' => 104,6,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            76 =>
            array(
                'id' => 77,
                'code' => '000004',
                'name' => 'RADIADOR DE COBRE',
                'price' => 22407,29,
                'sale_price' => 22407,29,
                'stock' => 2,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            77 =>
            array(
                'id' => 78,
                'code' => '000005',
                'name' => 'RADIADOR MIXTO',
                'price' => 17745,55,
                'sale_price' => 17745,55,
                'stock' => 11,2,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            78 =>
            array(
                'id' => 79,
                'code' => '000099',
                'name' => 'RADIADOR MIXTO SUCIO',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            79 =>
            array(
                'id' => 80,
                'code' => '000072',
                'name' => 'RADIOGRAFIA',
                'price' => 4500,
                'sale_price' => 4500,
                'stock' => 9,8,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            80 =>
            array(
                'id' => 81,
                'code' => '000085',
                'name' => 'RIN BICICLETA',
                'price' => 7049,9,
                'sale_price' => 7049,9,
                'stock' => 67,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            81 =>
            array(
                'id' => 82,
                'code' => '000078',
                'name' => 'SCRA',
                'price' => 3800,
                'sale_price' => 3800,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            82 =>
            array(
                'id' => 83,
                'code' => '000056',
                'name' => 'SOPLADO',
                'price' => 1184,69,
                'sale_price' => 1184,69,
                'stock' => 549,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            83 =>
            array(
                'id' => 84,
                'code' => '000096',
                'name' => 'TABLE',
                'price' => 3258,19,
                'sale_price' => 3258,19,
                'stock' => 12,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            84 =>
            array(
                'id' => 85,
                'code' => '000077',
                'name' => 'TAPA DE CERVEZA',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            85 =>
            array(
                'id' => 86,
                'code' => '000045',
                'name' => 'TARJETA #1',
                'price' => 30000,
                'sale_price' => 30000,
                'stock' => 2,5,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            86 =>
            array(
                'id' => 87,
                'code' => '000046',
                'name' => 'TARJETA #2',
                'price' => 15092,23,
                'sale_price' => 15092,23,
                'stock' => 10,3,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            87 =>
            array(
                'id' => 88,
                'code' => '000047',
                'name' => 'TARJETA #3',
                'price' => 3966,13,
                'sale_price' => 3966,13,
                'stock' => 44,6,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            88 =>
            array(
                'id' => 89,
                'code' => '000088',
                'name' => 'TARJETA BAJO GRADO',
                'price' => 1678,9,
                'sale_price' => 1678,9,
                'stock' => 23,6,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            89 =>
            array(
                'id' => 90,
                'code' => '000106',
                'name' => 'TARJETA CHINA',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            90 =>
            array(
                'id' => 91,
                'code' => '000041',
                'name' => 'TARJETA DE CELULAR',
                'price' => 108000,
                'sale_price' => 108000,
                'stock' => 0,3,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            91 =>
            array(
                'id' => 92,
                'code' => '000044',
                'name' => 'TARJETA DISCO DURO',
                'price' => 25000,
                'sale_price' => 25000,
                'stock' => 0,3,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            92 =>
            array(
                'id' => 93,
                'code' => '000043',
                'name' => 'TARJETA DORADA',
                'price' => 25000,
                'sale_price' => 25000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            93 =>
            array(
                'id' => 94,
                'code' => '000042',
                'name' => 'TARJETA MEMORIA RAM',
                'price' => 111000,
                'sale_price' => 111000,
                'stock' => 1,35,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            94 =>
            array(
                'id' => 95,
                'code' => '000103',
                'name' => 'TARJETA PORTATIL',
                'price' => 15571,43,
                'sale_price' => 15571,43,
                'stock' => 1,4,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            95 =>
            array(
                'id' => 96,
                'code' => '000111',
                'name' => 'TARJETA-VARIOS',
                'price' => 5000,
                'sale_price' => 5000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            96 =>
            array(
                'id' => 97,
                'code' => '000098',
                'name' => 'TELEVISOR',
                'price' => 8491,88,
                'sale_price' => 8491,88,
                'stock' => 4,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            97 =>
            array(
                'id' => 98,
                'code' => '000033',
                'name' => 'TIERRA MOTO',
                'price' => 3793,86,
                'sale_price' => 3793,86,
                'stock' => 351,9,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            98 =>
            array(
                'id' => 99,
                'code' => '000022',
                'name' => 'UNIDAD NORMAL',
                'price' => 30000,
                'sale_price' => 30000,
                'stock' => 3,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 70,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            99 =>
            array(
                'id' => 100,
                'code' => '000029',
                'name' => 'VAINILLA',
                'price' => 0,00,
                'sale_price' => 0,00,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            100 =>
            array(
                'id' => 101,
                'code' => '000068',
                'name' => 'VIDRIO',
                'price' => 59,56,
                'sale_price' => 59,56,
                'stock' => 64,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            101 =>
            array(
                'id' => 102,
                'code' => '000015',
                'name' => 'VIRUTA DE ACERO',
                'price' => 3594,49,
                'sale_price' => 3594,49,
                'stock' => 143,4,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            102 =>
            array(
                'id' => 103,
                'code' => '000092',
                'name' => 'VIRUTA DE ALUMINIO',
                'price' => 1404,37,
                'sale_price' => 1404,37,
                'stock' => 32,3,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            103 =>
            array(
                'id' => 104,
                'code' => '000007',
                'name' => 'VIRUTA DE BRONCE',
                'price' => 13640,
                'sale_price' => 13640,
                'stock' => 2,5,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
            104 =>
            array(
                'id' => 105,
                'code' => '000087',
                'name' => 'VIRUTA GRIS',
                'price' => 601,58,
                'sale_price' => 601,58,
                'stock' => 8111,5,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-03-01 00:00:00',
                'updated_at' => '2023-03-01 00:00:00'
            ),
        ));
    }
}
