<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = [
            [
                'name' =>'No Aplica',
            ],
            [
                'name' =>'Nequi',
            ],
            [
                'name' =>'Asopagos',
            ],
            [
                'name' =>'Banco Agrario',
            ],
            [
                'name' =>'Banco AV villas',
            ],
            [
                'name' =>'Banco BBVA',
            ],
            [
                'name' =>'Banco BCSC',
            ],
            [
                'name' =>'Banco Citibank',
            ],
            [
                'name' =>'Banco Coopcentral',
            ],
            [
                'name' =>'Banco Davivienda',
            ],
            [
                'name' =>'Banco de Bogota',
            ],
            [
                'name' =>'Banco de Occidente',
            ],
            [
                'name' =>'Banco falabella',
            ],
            [
                'name' =>'Banco Finandina',
            ],
            [
                'name' =>'Banco GNB Sudameris',
            ],
            [
                'name' =>'Banco Itau',
            ],
            [
                'name' =>'Banco Mundo Mujer',
            ],
            [
                'name' =>'Banco Pichincha',
            ],
            [
                'name' =>'Banco Popular',
            ],
            [
                'name' =>'Banco Credifinanciera',
            ],
            [
                'name' =>'Banco Fogafin',
            ],
            [
                'name' =>'otro',
            ],
        ];
        foreach ($banks as $bank) {
            Bank::create($bank);
        }
    }
}
