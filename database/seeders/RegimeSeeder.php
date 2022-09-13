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
        $regime = new Regime();

        $regime->code = 48;
        $regime->name = 'Responsable de IVA';

        $regime->save();

        $regime = new Regime();

        $regime->code = 49;
        $regime->name = 'No Responsable de IVA';

        $regime->save();
    }
}
