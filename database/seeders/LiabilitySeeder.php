<?php

namespace Database\Seeders;

use App\Models\Liability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LiabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $liabilities = [

            [
                'code' => '0-13',
                'name' => 'Gran contribuyente',
            ],
            [
                'code' => '0-15',
                'name' => 'Autoretenedor',
            ],
            [
                'code' => '0-23',
                'name' => 'Agente de retencion IVA',
            ],
            [
                'code' => '0-47',
                'name' => 'Regimen simple de tributacion',
            ],
            [
                'code' => 'R-99-PN',
                'name' => 'No aplica - Otros',
            ],
        ];
        foreach ($liabilities as $liability) {
           Liability::create($liability);
        }
    }
}
