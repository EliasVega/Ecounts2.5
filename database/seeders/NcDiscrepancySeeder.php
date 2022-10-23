<?php

namespace Database\Seeders;

use App\Models\Nc_discrepancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NcDiscrepancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nc_discrepancies = [
            [
                'description' => 'Devolución parcial de los bienes y/o no aceptación parcial del servicio'
            ],
            [
                'description' => 'Anulación de factura electrónica'
            ],
            [
                'description' => 'Rebaja o descuento parcial o total'
            ],
            [
                'description' => 'Ajuste de precio'
            ],
            [
                'description' => 'Otros'
            ],

        ];
        foreach($nc_discrepancies as $ncd){
            Nc_discrepancy::create($ncd);
        }
    }
}
