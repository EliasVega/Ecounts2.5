<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \DB::table('services')->delete();

        \DB::table('services')->insert(

            array (/*

                '
''  '              0 =>


array (

    '
''  '              'id' => 1,
                'code' => '1001',

                'name' => ''Mensajeria',

                'price' => '15000.00',
                'category_id' => 5,
                'unit_measure_id' => 70,
                'created_at' => '2023-01-12 21:07:43',
                'updated_at' => '2023-01-12 21:07:43',
            ),*/
            0 =>
            array (
                'id' => 1,
                'code' =>	'CHA-ALUM-POT',
                'name' => 'CHATARRA DE LUMINIO POTE',
                'price' => 0.00,
                'sale_price' =>	7600,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            1 =>
            array (
                'id' => 2,
                'code' =>	'CHA-ACER-201',
                'name' => 'CHATARRA DE ACERO 201',
                'price' => 0.00,
                'sale_price' =>	600,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            2 =>
            array (
                'id' => 3,
                'code' =>	'CHA-ACER-304',
                'name' => 'CHATARRA DE ACERO 304',
                'price' => 0.00,
                'sale_price' =>	8400,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            3 =>
            array (
                'id' => 4,
                'code' =>	'CHA-ACER-VOL',
                'name' => 'CHATARRA DE ACERO VOLUMINOSO',
                'price' => 0.00,
                'sale_price' =>	8200,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            4 =>
            array (
                'id' => 5,
                'code' =>	'CHA-ALUM-GRU',
                'name' => 'CHATARRA DE ALUMINIO GRUESO',
                'price' => 0.00,
                'sale_price' =>	6600,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            5 =>
            array (
                'id' => 6,
                'code' =>	'CHA-ALUM-LITO',
                'name' => 'CHATARRA DE ALUMINIO LITOGRAFICO',
                'price' => 0.00,
                'sale_price' =>	10500,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            6 =>
            array (
                'id' => 7,
                'code' =>	'CHA-ALUM-OLL',
                'name' => 'CHATARRA DE ALUMINIO OLLA',
                'price' => 0.00,
                'sale_price' =>	8800,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            7 =>
            array (
                'id' => 8,
                'code' =>	'CHAT-ALUM-RIN',
                'name' => 'CHATARRA DE ALUMINIO RIN',
                'price' => 0.00,
                'sale_price' =>	8900,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            8 =>
            array (
                'id' => 9,
                'code' =>	'CHA-RAD-ALUM',
                'name' => 'CHATARRA DE RADIADOR DE ALUMINIO',
                'price' => 0.00,
                'sale_price' =>	5900,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            9 =>
            array (
                'id' => 10,
                'code' =>	'CHA-RAD-COBR',
                'name' => 'CHATARRA DE RADIADOR DE COBRE',
                'price' => 0.00,
                'sale_price' =>	21400,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            10 =>
            array (
                'id' => 11,
                'code' =>	'CHA-RAD-MIX',
                'name' => 'CHATARRA DE RADIADOR MIXTO',
                'price' => 0.00,
                'sale_price' =>	18300,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            11 =>
            array (
                'id' => 12,
                'code' =>	'CHA-ALUM-BLAN',
                'name' => 'CHATARRA DE ALUMINIO BLANDO',
                'price' => 0.00,
                'sale_price' =>	7400,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            12 =>
            array (
                'id' => 13,
                'code' =>	'CHA-ALUM-PERF',
                'name' => 'CHATARRA DE ALUMINIO PERFIL',
                'price' => 0.00,
                'sale_price' =>	10600,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            13 =>
            array (
                'id' => 14,
                'code' =>	'CHA-ALU-PERF',
                'name' => 'CHATARRA DE ALUMINIO POTE PERFUMERO',
                'price' => 0.00,
                'sale_price' =>	7600,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            14 =>
            array (
                'id' => 15,
                'code' =>	'CHA-ALU-RI-BICI',
                'name' => 'CHATARRA DE ALUMINIO RIN BICICLETA',
                'price' => 0.00,
                'sale_price' =>	8800,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            15 =>
            array (
                'id' => 16,
                'code' =>	'CHA-ACER-LIMA',
                'name' => 'CHATARRA DE ACERO LIMAYA',
                'price' => 0.00,
                'sale_price' =>	5880,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            16 =>
            array (
                'id' => 17,
                'code' =>	'CHA-ALUM-REV',
                'name' => 'CHATARRA DE ALUMINIO REVUELTO',
                'price' => 0.00,
                'sale_price' =>	4000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            17 =>
            array (
                'id' => 18,
                'code' =>	'CHAT-ANTIM',
                'name' => 'CHATARRA DE ANTIMONIO',
                'price' => 0.00,
                'sale_price' =>	7200,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            18 =>
            array (
                'id' => 19,
                'code' =>	'CHA-COB-1',
                'name' => 'CHATARRA DE COBRE No. 1',
                'price' => 0.00,
                'sale_price' =>	37100,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            19 =>
            array (
                'id' => 20,
                'code' =>	'CHAT-COB-2',
                'name' => 'CHATARRA DE COBRE No.2',
                'price' => 0.00,
                'sale_price' =>	34000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            20 =>
            array (
                'id' => 21,
                'code' =>	'CHA-BRON',
                'name' => 'CHATARRA DE BRONCE',
                'price' => 0.00,
                'sale_price' =>	24500,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            21 =>
            array (
                'id' => 22,
                'code' =>	'CHA-BRON-SUC',
                'name' => 'CHATARRA DE BRONCE SUCIO',
                'price' => 0.00,
                'sale_price' =>	24500,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            22 =>
            array (
                'id' => 23,
                'code' =>	'CHA-BRON-T2',
                'name' => 'CHATARRA DE BRONCE TIPO 2',
                'price' => 0.00,
                'sale_price' =>	24100,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            23 =>
            array (
                'id' => 24,
                'code' =>	'CHA-BRON-VAIN',
                'name' => 'CHATARRA DE BRONCE VAINILLA',
                'price' => 0.00,
                'sale_price' =>	23000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            24 =>
            array (
                'id' => 25,
                'code' =>	'CHA-ALUM-CLAUS',
                'name' => 'CHATARRA ALUMINIO CLAUSEN',
                'price' => 0.00,
                'sale_price' =>	7700,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            25 =>
            array (
                'id' => 26,
                'code' =>	'CHA-RIN-CAM',
                'name' => 'CHATARRA DE ALUMINIO RIN CAMION',
                'price' => 0.00,
                'sale_price' =>	9400,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            26 =>
            array (
                'id' => 27,
                'code' =>	'CHA-BLAND-VOLUM',
                'name' => 'CHATARRA DE ALUMINIO BLANDO VOLUMEN',
                'price' => 0.00,
                'sale_price' =>	34,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            27 =>
            array (
                'id' => 28,
                'code' =>	'CHA-ALUM-GRU-T2',
                'name' => 'CHATARRA DE ALUMINIO GRUESO TIPO 2',
                'price' => 0.00,
                'sale_price' =>	5000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            28 =>
            array (
                'id' => 29,
                'code' =>	'CHA-RAD-ALUM-SUC',
                'name' => 'CHATARRA DE RADIADOR DE ALUMINIO SUCIO',
                'price' => 0.00,
                'sale_price' =>	6000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            29 =>
            array (
                'id' => 30,
                'code' =>	'CHA-RADIA-COBR-SUC',
                'name' => 'CHATARRA DE RAIDADOR DE COBRE SUCIO',
                'price' => 0.00,
                'sale_price' =>	21100,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            30 =>
            array (
                'id' => 31,
                'code' =>	'CHA-RAD-COBR-SUC',
                'name' => 'CHATARRA DE RADIADOR DE COBRE SUCIO',
                'price' => 0.00,
                'sale_price' =>	21000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            31 =>
            array (
                'id' => 32,
                'code' =>	'CHA-ALUM-ALAMB',
                'name' => 'CHATARRA DE ALUMINIO ALAMBRON',
                'price' => 0.00,
                'sale_price' =>	12600,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            32 =>
            array (
                'id' => 33,
                'code' =>	'CHA-RAD-MIX-SUC',
                'name' => 'CHATARRA DE RADIADOR MIXTO SUCIO',
                'price' => 0.00,
                'sale_price' =>	17700,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            33 =>
            array (
                'id' => 34,
                'code' =>	'CHA-ALU-GRU-TP-3',
                'name' => 'CHATARRA DE ALUMINIO GRUESO TIPO3',
                'price' => 0.00,
                'sale_price' =>	3800,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            34 =>
            array (
                'id' => 35,
                'code' =>	'CHA-ALUM-GRU-VOL',
                'name' => 'CHATARRA DE ALUMINIO GRUESO VOLUMEN',
                'price' => 0.00,
                'sale_price' =>	7100,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            35 =>
            array (
                'id' => 36,
                'code' =>	'CHA-ALUM-LAM',
                'name' => 'CHATARRA DE ALUMINIO LAMINA',
                'price' => 0.00,
                'sale_price' =>	6600,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            36 =>
            array (
                'id' => 37,
                'code' =>	'CHA-ALUM-PLAN-GRU',
                'name' => 'CHATARRA DE ALUMINIO PLANCHA',
                'price' => 0.00,
                'sale_price' =>	5000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            37 =>
            array (
                'id' => 38,
                'code' =>	'CHA-BRO-LIMAY',
                'name' => 'CHATARRA DE BRONCE (LIMAYA DE BRONCE)',
                'price' => 0.00,
                'sale_price' =>	15000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            38 =>
            array (
                'id' => 39,
                'code' =>	'CHA-COB-BRILL',
                'name' => 'CHATARRA DE COBRE BRILLANTE',
                'price' => 0.00,
                'sale_price' =>	35900,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            39 =>
            array (
                'id' => 40,
                'code' =>	'CHA-ALUM-PER-SUC',
                'name' => 'CHATARRA DE PERFIL SUCIO',
                'price' => 0.00,
                'sale_price' =>	9700,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            40 =>
            array (
                'id' => 41,
                'code' =>	'CHA-PERF-PICAD',
                'name' => 'CHATARRRA DE ALUMINIO PERFIL PICADILLO',
                'price' => 0.00,
                'sale_price' =>	9500,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            41 =>
            array (
                'id' => 42,
                'code' =>	'CHA-ALUM-OLLA',
                'name' => 'CHATARRA ALUMINIO (OLLA COMPACTA)',
                'price' => 0.00,
                'sale_price' =>	6800,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            42 =>
            array (
                'id' => 43,
                'code' =>	'hierro-gris',
                'name' => 'CHATARRA DE HIERRO GRIS',
                'price' => 0.00,
                'sale_price' =>	1800,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            43 =>
            array (
                'id' => 44,
                'code' =>	'CHA-ACER-INOX-316',
                'name' => 'CHATARRA DE ACERO INOXIDABLE 316',
                'price' => 0.00,
                'sale_price' =>	7500,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            44 =>
            array (
                'id' => 45,
                'code' =>	'TRANSPORTE',
                'name' => 'TRANSPORTE',
                'price' => 0.00,
                'sale_price' =>	1600000,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            45 =>
            array (
                'id' => 46,
                'code' =>	'chat',
                'name' => 'CHATARRA',
                'price' => 0.00,
                'sale_price' =>	1200,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            46 =>
            array (
                'id' => 47,
                'code' =>	'101',
                'name' => 'PLASTICO',
                'price' => 0.00,
                'sale_price' =>	1200,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            47 =>
            array (
                'id' => 48,
                'code' =>	'201',
                'name' => 'CARTON',
                'price' => 0.00,
                'sale_price' =>	480,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            48 =>
            array (
                'id' => 49,
                'code' =>	'202',
                'name' => 'PERIODICO',
                'price' => 0.00,
                'sale_price' =>	400,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            49 =>
            array (
                'id' => 50,
                'code' =>	'203',
                'name' => 'PLEGA',
                'price' => 0.00,
                'sale_price' =>	250,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            50 =>
            array (
                'id' => 51,
                'code' =>	'110221',
                'name' => 'CHATARRA LIVIANA MIXTA',
                'price' => 0.00,
                'sale_price' =>	1540,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            51 =>
            array (
                'id' => 52,
                'code' =>	'010',
                'name' => 'PET TRANSPARENTE',
                'price' => 0.00,
                'sale_price' =>	1550,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
            52 =>
            array (
                'id' => 53,
                'code' =>	'011',
                'name' => 'PET AMBAR',
                'price' => 0.00,
                'sale_price' =>	1050,
                'stock' => 0,
                'status' => 'activo',
                'image' => 'noimagen.jpg',
                'category_id' => 1,
                'unit_measure_id' => 767,
                'created_at' => '2023-01-01 21:07:43',
                'updated_at' => '2023-01-01 21:07:43',
            ),
        ));
    }
}
