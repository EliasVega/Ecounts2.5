<?php

namespace Database\Seeders;

use App\Models\Regime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regimes = [
            [
                'code' => 48,
                'name' => 'Responsable de IVA'
            ],
            [
                'code' => 49,
                'name' => 'No Responsable de IVA'
            ],
        ];
        foreach($regimes as $reg){
            Regime::create($reg);
        }
    }
}
