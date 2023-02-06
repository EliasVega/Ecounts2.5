<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('payment_methods')->delete();

        \DB::table('payment_methods')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => '1',
                'name' => 'Instrumento no definido',
            ),
            1 =>
            array (
                'id' => 2,
                'code' => '2',
                'name' => 'Crédito ACH',
            ),
            2 =>
            array (
                'id' => 3,
                'code' => '3',
                'name' => 'Débito ACH',
            ),
            3 =>
            array (
                'id' => 4,
                'code' => '4',
                'name' => 'Reversión débito de demanda ACH',
            ),
            4 =>
            array (
                'id' => 5,
                'code' => '5',
                'name' => 'Reversión crédito de demanda ACH',
            ),
            5 =>
            array (
                'id' => 6,
                'code' => '6',
                'name' => 'Crédito de demanda ACH',
            ),
            6 =>
            array (
                'id' => 7,
                'code' => '7',
                'name' => 'Débito de demanda ACH',
            ),
            7 =>
            array (
                'id' => 9,
                'code' => '9',
                'name' => 'Clearing Nacional o Regional',
            ),
            8 =>
            array (
                'id' => 10,
                'code' => '10',
                'name' => 'Efectivo',
            ),
            9 =>
            array (
                'id' => 11,
                'code' => '11',
                'name' => 'Reversión Crédito Ahorro',
            ),
            10 =>
            array (
                'id' => 12,
                'code' => '12',
                'name' => 'Reversión Débito Ahorro',
            ),
            11 =>
            array (
                'id' => 13,
                'code' => '13',
                'name' => 'Crédito Ahorro',
            ),
            12 =>
            array (
                'id' => 14,
                'code' => '14',
                'name' => 'Débito Ahorro',
            ),
            13 =>
            array (
                'id' => 15,
                'code' => '15',
                'name' => 'Bookentry Crédito',
            ),
            14 =>
            array (
                'id' => 16,
                'code' => '16',
                'name' => 'Bookentry Débito',
            ),
            15 =>
            array (
                'id' => 17,
                'code' => '17',
                'name' => 'Desembolso Crédito (CCD)',
            ),
            16 =>
            array (
                'id' => 18,
                'code' => '18',
                'name' => 'Desembolso (CCD) débito',
            ),
            17 =>
            array (
                'id' => 19,
                'code' => '19',
                'name' => 'Crédito Pago negocio corporativo (CTP)',
            ),
            18 =>
            array (
                'id' => 20,
                'code' => '20',
                'name' => 'Cheque',
            ),
            19 =>
            array (
                'id' => 21,
                'code' => '21',
                'name' => 'Poyecto bancario',
            ),
            20 =>
            array (
                'id' => 22,
                'code' => '22',
                'name' => 'Proyecto bancario certificado',
            ),
            21 =>
            array (
                'id' => 23,
                'code' => '23',
                'name' => 'Cheque bancario de gerencia',
            ),
            22 =>
            array (
                'id' => 24,
                'code' => '24',
                'name' => 'Nota cambiaria esperando aceptación',
            ),
            23 =>
            array (
                'id' => 25,
                'code' => '25',
                'name' => 'Cheque certificado',
            ),
            24 =>
            array (
                'id' => 26,
                'code' => '26',
                'name' => 'Cheque Local',
            ),
            25 =>
            array (
                'id' => 27,
                'code' => '27',
                'name' => 'Débito Pago Neogcio Corporativo (CTP)',
            ),
            26 =>
            array (
                'id' => 28,
                'code' => '28',
                'name' => 'Crédito Negocio Intercambio Corporativo (CTX)',
            ),
            27 =>
            array (
                'id' => 29,
                'code' => '29',
                'name' => 'Débito Negocio Intercambio Corporativo (CTX)',
            ),
            28 =>
            array (
                'id' => 30,
                'code' => '30',
                'name' => 'Transferencia Crédito',
            ),
            29 =>
            array (
                'id' => 31,
                'code' => '31',
                'name' => 'Transferencia Débito',
            ),
            30 =>
            array (
                'id' => 32,
                'code' => '32',
                'name' => 'Desembolso Crédito plus (CCD+)',
            ),
            31 =>
            array (
                'id' => 33,
                'code' => '33',
                'name' => 'Desembolso Débito plus (CCD+)',
            ),
            32 =>
            array (
                'id' => 34,
                'code' => '34',
                'name' => 'Pago y depósito pre acordado (PPD)',
            ),
            33 =>
            array (
                'id' => 35,
                'code' => '35',
                'name' => 'Desembolso Crédito (CCD)',
            ),
            34 =>
            array (
                'id' => 36,
                'code' => '36',
                'name' => 'Desembolso Débito (CCD)',
            ),
            35 =>
            array (
                'id' => 37,
                'code' => '37',
                'name' => 'Pago Negocio Corporativo Ahorros Crédito (CTP)',
            ),
            36 =>
            array (
                'id' => 38,
                'code' => '38',
                'name' => 'Pago Negocio Corporativo Ahorros Débito (CTP)',
            ),
            37 =>
            array (
                'id' => 39,
                'code' => '39',
                'name' => 'Crédito Intercambio Corporativo (CTX)',
            ),
            38 =>
            array (
                'id' => 40,
                'code' => '40',
                'name' => 'Débito Intercambio Corporativo (CTX)',
            ),
            39 =>
            array (
                'id' => 41,
                'code' => '41',
                'name' => 'Desembolso Crédito plus (CCD+)',
            ),
            40 =>
            array (
                'id' => 42,
                'code' => '42',
                'name' => 'Consiganción bancaria',
            ),
            41 =>
            array (
                'id' => 43,
                'code' => '43',
                'name' => 'Desembolso Débito plus (CCD+)',
            ),
            42 =>
            array (
                'id' => 44,
                'code' => '44',
                'name' => 'Nota cambiaria',
            ),
            43 =>
            array (
                'id' => 45,
                'code' => '45',
                'name' => 'Transferencia Crédito Bancario',
            ),
            44 =>
            array (
                'id' => 46,
                'code' => '46',
                'name' => 'Transferencia Débito Interbancario',
            ),

            45 =>
            array (
                'id' => 47,
                'code' => '47',
                'name' => 'Transferencia Débito Bancaria',
            ),
            46 =>
            array (
                'id' => 48,
                'code' => '48',
                'name' => 'Tarjeta Crédito',
            ),
            47 =>
            array (
                'id' => 49,
                'code' => '49',
                'name' => 'Tarjeta Débito',
            ),
            48 =>
            array (
                'id' => 50,
                'code' => '50',
                'name' => 'Postgiro',
            ),
            49 =>
            array (
                'id' => 51,
                'code' => '51',
                'name' => 'Telex estándar bancario',
            ),
            50 =>
            array (
                'id' => 52,
                'code' => '52',
                'name' => 'Pago comercial urgente',
            ),
            51 =>
            array (
                'id' => 53,
                'code' => '53',
                'name' => 'Pago Tesorería Urgente',
            ),
            52 =>
            array (
                'id' => 60,
                'code' => '60',
                'name' => 'Nota promisoria',
            ),
            53 =>
            array (
                'id' => 61,
                'code' => '61',
                'name' => 'Nota promisoria firmada por el acreedor',
            ),
            54 =>
            array (
                'id' => 62,
                'code' => '62',
                'name' => 'Nota promisoria firmada por el acreedor, avalada por el banco',
            ),
            55 =>
            array (
                'id' => 63,
                'code' => '63',
                'name' => 'Nota promisoria firmada por el acreedor, avalada por un tercero',
            ),
            56 =>
            array (
                'id' => 64,
                'code' => '64',
                'name' => 'Nota promisoria firmada pro el banco',
            ),
            57 =>
            array (
                'id' => 65,
                'code' => '65',
                'name' => 'Nota promisoria firmada por un banco avalada por otro banco',
            ),
            58 =>
            array (
                'id' => 66,
                'code' => '66',
                'name' => 'Nota promisoria firmada',
            ),
            59 =>
            array (
                'id' => 67,
                'code' => '67',
                'name' => 'Nota promisoria firmada por un tercero avalada por otro banco',
            ),
            60 =>
            array (
                'id' => 70,
                'code' => '70',
                'name' => 'Retiro de nota por el por el acreedor',
            ),
            61 =>
            array (
                'id' => 71,
                'code' => '71',
                'name' => 'Bonos',
            ),
            62 =>
            array (
                'id' => 72,
                'code' => '72',
                'name' => 'Vales',
            ),
            63 =>
            array (
                'id' => 74,
                'code' => '74',
                'name' => 'Retiro de nota por el por el acreedor sobre un banco',
            ),
            64 =>
            array (
                'id' => 75,
                'code' => '75',
                'name' => 'Retiro de nota por el acreedor, avalada por otro banco',
            ),
            65 =>
            array (
                'id' => 76,
                'code' => '76',
                'name' => 'Retiro de nota por el acreedor, sobre un banco avalada por un tercero',
            ),
            66 =>
            array (
                'id' => 77,
                'code' => '77',
                'name' => 'etiro de una nota por el acreedor sobre un tercero',
            ),
            67 =>
            array (
                'id' => 78,
                'code' => '78',
                'name' => 'Retiro de una nota por el acreedor sobre un tercero avalada po un banco',
            ),
            68 =>
            array (
                'id' => 91,
                'code' => '91',
                'name' => 'Nota bancaria transferible',
            ),
            69 =>
            array (
                'id' => 92,
                'code' => '92',
                'name' => 'Cheque local transferible',
            ),
            70 =>
            array (
                'id' => 93,
                'code' => '93',
                'name' => 'Giro referenciado',
            ),
            71 =>
            array (
                'id' => 94,
                'code' => '94',
                'name' => 'Giro urgente',
            ),
            72 =>
            array (
                'id' => 95,
                'code' => '95',
                'name' => 'Giro formato abierto',
            ),
            73 =>
            array (
                'id' => 96,
                'code' => '96',
                'name' => 'Método de pago solicitado no usuado',
            ),
            74 =>
            array (
                'id' => 97,
                'code' => '97',
                'name' => 'Clearing entre partners',
            ),
            75 =>
            array (
                'id' => 99,
                'code' => 'ZZZ',
                'name' => 'Otro*',
            ),
        ));


    }
}
