<?php

namespace Database\Seeders;

use App\Models\Payment_method;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment_methods = [
            [
                'code' => '10',
                'name' => 'Efectivo'
            ],
            [
                'code' => '48',
                'name' => 'Tarjeta Crédito'
            ],
            [
                'code' => '49',
                'name' => 'Tarjeta Débito'
            ],
            [
                'code' => '47',
                'name' => 'Transferencia Débito Bancaria'
            ],
            [
                'code' => '20',
                'name' => 'Cheque'
            ],
            [
                'code' => '23',
                'name' => 'Cheque bancario de gerencia'
            ],
            [
                'code' => '25',
                'name' => 'Cheque certificado'
            ],
            [
                'code' => '26',
                'name' => 'Cheque Local'
            ],
            [
                'code' => '42',
                'name' => 'Consiganción bancaria'
            ],
            [
                'code' => '1',
                'name' => 'Instrumento no definido'
            ],
            [
                'code' => '2',
                'name' => 'Crédito ACH'
            ],
            [
                'code' => '3',
                'name' => 'Débito ACH'
            ],
            [
                'code' => '4',
                'name' => 'Reversión débito de demanda ACH'
            ],
            [
                'code' => '5',
                'name' => 'Reversión crédito de demanda ACH'
            ],
            [
                'code' => '6',
                'name' => 'Crédito de demanda ACH'
            ],
            [
                'code' => '7',
                'name' => 'Débito de demanda ACH'
            ],
            ['code' => '9',
                'name' => 'Clearing Nacional o Regional'
            ],
            [
                'code' => '11',
                'name' => 'Reversión Crédito Ahorro'
            ],
            [
                'code' => '12',
                'name' => 'Reversión Débito Ahorro'
            ],
            [
                'code' => '13',
                'name' => 'Crédito Ahorro'
            ],
            [
                'code' => '14',
                'name' => 'Débito Ahorro'
            ],
            [
                'code' => '15',
                'name' => 'Bookentry Crédito'
            ],
            [
                'code' => '16',
                'name' => 'Bookentry Débito'
            ],
            [
                'code' => '17',
                'name' => 'Desembolso Crédito (CCD)'
            ],
            [
                'code' => '18',
                'name' => 'Desembolso (CCD) débito'
            ],
            [
                'code' => '19',
                'name' => 'Crédito Pago negocio corporativo (CTP)'
            ],
            [
                'code' => '21',
                'name' => 'Poyecto bancario'
            ],
            [
                'code' => '22',
                'name' => 'Proyecto bancario certificado'
            ],
            [
                'code' => '24',
                'name' => 'Nota cambiaria esperando aceptación'
            ],
            [
                'code' => '27',
                'name' => 'Débito Pago Neogcio Corporativo (CTP)'
            ],
            [
                'code' => '28',
                'name' => 'Crédito Negocio Intercambio Corporativo (CTX)'
            ],
            [
                'code' => '29',
                'name' => 'Débito Negocio Intercambio Corporativo (CTX)'
            ],
            [
                'code' => '30',
                'name' => 'Transferencia Crédito'
            ],
            [
                'code' => '31',
                'name' => 'Transferencia Débito'
            ],
            [
                'code' => '32',
                'name' => 'Desembolso Crédito plus (CCD+)'
            ],
            [
                'code' => '33',
                'name' => 'Desembolso Débito plus (CCD+)'
            ],
            [
                'code' => '34',
                'name' => 'Pago y depósito pre acordado (PPD)'
            ],
            [
                'code' => '35',
                'name' => 'Desembolso Crédito (CCD)'
            ],
            [
                'code' => '36',
                'name' => 'Desembolso Débito (CCD)'
            ],
            [
                'code' => '37',
                'name' => 'Pago Negocio Corporativo Ahorros Crédito (CTP)'
            ],
            [
                'code' => '38',
                'name' => 'Pago Negocio Corporativo Ahorros Débito (CTP)'
            ],
            [
                'code' => '39',
                'name' => 'Crédito Intercambio Corporativo (CTX)'
            ],
            [
                'code' => '40',
                'name' => 'Débito Intercambio Corporativo (CTX)'
            ],
            [
                'code' => '41',
                'name' => 'Desembolso Crédito plus (CCD+)'
            ],
            [
                'code' => '43',
                'name' => 'Desembolso Débito plus (CCD+)'
            ],
            [
                'code' => '44',
                'name' => 'Nota cambiaria'
            ],
            [
                'code' => '45',
                'name' => 'Transferencia Crédito Bancario'
            ],
            [
                'code' => '46',
                'name' => 'Transferencia Débito Interbancario'
            ],
            [
                'code' => '50',
                'name' => 'Postgiro'
            ],
            [
                'code' => '51',
                'name' => 'Telex estándar bancario'
            ],
            [
                'code' => '52',
                'name' => 'Pago comercial urgente'
            ],
            [
                'code' => '53',
                'name' => 'Pago Tesorería Urgente'
            ],
            [
                'code' => '60',
                'name' => 'Nota promisoria'
            ],
            [
                'code' => '61',
                'name' => 'Nota promisoria firmada por el acreedor'
            ],
            [
                'code' => '62',
                'name' => 'Nota promisoria firmada por el acreedor, avalada por el banco'
            ],
            [
                'code' => '63',
                'name' => 'Nota promisoria firmada por el acreedor, avalada por un tercero'
            ],
            [
                'code' => '64',
                'name' => 'Nota promisoria firmada pro el banco'
            ],
            [
                'code' => '65',
                'name' => 'Nota promisoria firmada por un banco avalada por otro banco'
            ],
            [
                'code' => '66',
                'name' => 'Nota promisoria firmada'
            ],
            [
                'code' => '67',
                'name' => 'Nota promisoria firmada por un tercero avalada por otro banco'
            ],
            [
                'code' => '70',
                'name' => 'Retiro de nota por el por el acreedor'
            ],
            [
                'code' => '71',
                'name' => 'Bonos'
            ],
            [
                'code' => '72',
                'name' => 'Vales'
            ],
            [
                'code' => '74',
                'name' => 'Retiro de nota por el por el acreedor sobre un banco'
            ],
            [
                'code' => '75',
                'name' => 'Retiro de nota por el acreedor, avalada por otro banco'
            ],
            [
                'code' => '76',
                'name' => 'Retiro de nota por el acreedor, sobre un banco avalada por un tercero'
            ],
            [
                'code' => '77',
                'name' => 'etiro de una nota por el acreedor sobre un tercero'
            ],
            [
                'code' => '78',
                'name' => 'Retiro de una nota por el acreedor sobre un tercero avalada po un banco'
            ],
            [
                'code' => '91',
                'name' => 'Nota bancaria transferible'
            ],
            [
                'code' => '92',
                'name' => 'Cheque local transferible'
            ],
            [
                'code' => '93',
                'name' => 'Giro referenciado'
            ],
            [
                'code' => '94',
                'name' => 'Giro urgente'
            ],
            [
                'code' => '95',
                'name' => 'Giro formato abierto'
            ],
            [
                'code' => '96',
                'name' => 'Método de pago solicitado no usuado'
            ],
            [
                'code' => '97',
                'name' => 'Clearing entre partners'
            ],
            [
                'code' => 'ZZZ',
                'name' => 'Otro*'
            ],
        ];
        foreach($payment_methods as $pm){
            Payment_method::create($pm);
        }

    }
}
