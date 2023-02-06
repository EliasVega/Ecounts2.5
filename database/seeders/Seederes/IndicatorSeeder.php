<?php

namespace Database\Seeders;

use App\Models\Indicator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indicator = new Indicator();

        $indicator->name = 'DIAN';
        $indicator->nit = '800197268';
        $indicator->dv = '4';
        $indicator->resolution = '18760000001';
        $indicator->date_from = '2019-01-19';
        $indicator->date_to = '2030-01-19';
        $indicator->prefix = 'FE';
        $indicator->from = 10000;
        $indicator->to = 20000;
        $indicator->software_id = '56f2ae4e-9812-4fad-9255-08fcfcd5ccb0';
        $indicator->pin = '12345';
        $indicator->technical_key = '693ff6f2a553c3646a063436fd4dd9ded0311471';
        $indicator->document_version = 'UBL 2.1';
        $indicator->form_version = 'DIAN 2.1';
        $indicator->country_code = 'CO';
        $indicator->country = 'Colombia';
        $indicator->currency = 'COP';
        $indicator->economic_activity = '1234;1235';
        $indicator->postal_code = '68001';
        $indicator->mercantil_registration = '147852369';

        $indicator->save();
    }
}
