<?php

namespace Database\Seeders;

use App\Models\Nd_discrepancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NdDiscrepancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nd_discrepancies = [
            [
                'description' => 'Intereses'
            ],
            [
                'description' => 'Gastos por cobrar'
            ],
            [
                'description' => 'Cambio de valor'
            ],
            [
                'description' => 'Gastos por cobrar'
            ],
            [
                'description' => 'Otros'
            ],

        ];
        foreach($nd_discrepancies as $ndd){
            Nd_discrepancy::create($ndd);
        }
    }
}
