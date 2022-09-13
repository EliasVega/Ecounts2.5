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
        $tax = new Tax();

        $tax->code = 1;
        $tax->name = 'IVA';
        $tax->description = 'Impuesto sobre las ventas';

        $tax->save();

        $tax = new Tax();

        $tax->code = 2;
        $tax->name = 'IC';
        $tax->description = 'Impuesto al Consumo Departamental Nominal';

        $tax->save();

        $tax = new Tax();

        $tax->code = 3;
        $tax->name = 'ICA';
        $tax->description = 'Impuesto de Industria, Comercio y Aviso';

        $tax->save();

        $tax = new Tax();

        $tax->code = 4;
        $tax->name = 'INC';
        $tax->description = 'Impuesto Nacional al Consumo';

        $tax->save();

        $tax = new Tax();

        $tax->code = 5;
        $tax->name = 'ReteIVA';
        $tax->description = 'Retención sobre el IVA';

        $tax->save();

        $tax = new Tax();

        $tax->code = 6;
        $tax->name = 'ReteRenta';
        $tax->description = 'Retención sobre Renta';

        $tax->save();

        $tax = new Tax();

        $tax->code = 7;
        $tax->name = 'ReteICA';
        $tax->description = 'Retención sobre el ICA';

        $tax->save();

        $tax = new Tax();

        $tax->code = 8;
        $tax->name = 'IC Porcentual';
        $tax->description = 'Impuesto al consumo Departamental Porcentual';

        $tax->save();

        $tax = new Tax();

        $tax->code = 20;
        $tax->name = 'FtoHorticultura';
        $tax->description = 'Cuota de Fomento Hortifrutícula';

        $tax->save();

        $tax = new Tax();

        $tax->code = 21;
        $tax->name = 'Timbre';
        $tax->description = 'Impuesto al Timbre';

        $tax->save();

        $tax = new Tax();

        $tax->code = 22;
        $tax->name = 'INC Bolsas';
        $tax->description = 'Impueto nacional al consumo de bolsas plasticas';

        $tax->save();

        $tax = new Tax();

        $tax->code = 23;
        $tax->name = 'INCarbono';
        $tax->description = 'Impuesto nacional al Carbono';

        $tax->save();

        $tax = new Tax();

        $tax->code = 24;
        $tax->name = 'INCombustibles';
        $tax->description = 'Impuesto nacional a los combustibles';

        $tax->save();

        $tax = new Tax();

        $tax->code = 25;
        $tax->name = 'Sobretasa Combustibles';
        $tax->description = 'Sobretasa a los combustibles';

        $tax->save();

        $tax = new Tax();

        $tax->code = 26;
        $tax->name = 'Sordicom';
        $tax->description = 'Contribucion minoristas (combustibles)';

        $tax->save();

        $tax = new Tax();

        $tax->code = 30;
        $tax->name = 'IC Datos';
        $tax->description = 'Impuesto al consumo de datos';

        $tax->save();
    }
}
