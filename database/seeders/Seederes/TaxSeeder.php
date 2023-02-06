<?php

namespace Database\Seeders;

use App\Models\Tax;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taxes = [

            [
                'code' => '01',
                'name' => 'IVA',
                'description' => 'Impuesto sobre las ventas'
            ],
            [
                'code' => '02',
                'name' => 'IC',
                'description' => 'Impuesto al Consumo Departamental Nominal',
            ],
            [
                'code' => '03',
                'name' => 'ICA',
                'description' => 'Impuesto de Industria, Comercio y Aviso',
            ],
            [
                'code' => '04',
                'name' => 'INC',
                'description' => 'Impuesto Nacional al Consumo',
            ],
            [
                'code' => '05',
                'name' => 'ReteIVA',
                'description' => 'Retención sobre el IVA',
            ],
            [
                'code' => '06',
                'name' => 'ReteRenta',
                'description' => 'Retención sobre Renta',
            ],
            [
                'code' => '07',
                'name' => 'ReteICA',
                'description' => 'Retención sobre el ICA',
            ],
            [
                'code' => '08',
                'name' => 'IC Porcentual',
                'description' => 'Impuesto al consumo Departamental Porcentual',
            ],
            [
                'code' => '20',
                'name' => 'FtoHorticultura',
                'description' => 'Cuota de Fomento Hortifrutícula',
            ],
            [
                'code' => '21',
                'name' => 'Timbre',
                'description' => 'Impuesto al Timbre',
            ],
            [
                'code' => '22',
                'name' => 'INC Bolsas',
                'description' => 'Impueto nacional al consumo de bolsas plasticas',
            ],
            [
                'code' => '23',
                'name' => 'INCarbono',
                'description' => 'Impuesto nacional al Carbono',
            ],
            [
                'code' => '24',
                'name' => 'INCombustibles',
                'description' => 'Impuesto nacional a los combustibles',
            ],
            [
                'code' => '25',
                'name' => 'Sobretasa Combustibles',
                'description' => 'Sobretasa a los combustibles',
            ],
            [
                'code' => '26',
                'name' => 'Sordicom',
                'description' => 'Contribucion minoristas (combustibles)',
            ],
            [
                'code' => '30',
                'name' => 'IC Datos',
                'description' => 'Impuesto al consumo de datos',
            ],
        ];
        foreach($taxes as $tax){
            Tax::create($tax);
        }
    }
}
