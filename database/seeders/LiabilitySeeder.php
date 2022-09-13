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
        $liability = new Liability();

        $liability->code = '0-13';
        $liability->name = 'Gran contribuyente';

        $liability->save();

        $liability = new Liability();

        $liability->code = '0-15';
        $liability->name = 'Autoretenedor';

        $liability->save();

        $liability = new Liability();

        $liability->code = '0-23';
        $liability->name = 'Agente de retencion IVA';

        $liability->save();

        $liability = new Liability();

        $liability->code = '0-47';
        $liability->name = 'Regimen simple de tributacion';

        $liability->save();

        $liability = new Liability();

        $liability->code = 'R-99-PN';
        $liability->name = 'No aplica - Otros';

        $liability->save();
    }
}
