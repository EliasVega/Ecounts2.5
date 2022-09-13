<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();

        $customer->name            = 'ELECTRICOS SANTANDER';
        $customer->number          = '123456788';
        $customer->dv              = 4;
        $customer->address         = 'CARRERA 17 # 45-86';
        $customer->phone           = '6374583';
        $customer->email           = 'elesander@gmail.com';
        $customer->credit_limit    = 5000000;
        $customer->used            = 0;
        $customer->available       = 5000000;
        $customer->department_id   = 21;
        $customer->municipality_id = 846;
        $customer->document_id     = 6;
        $customer->liability_id    = 1;
        $customer->organization_id = 1;
        $customer->tax_id          = 1;
        $customer->regime_id       = 1;

        $customer->save();

        $customer = new Customer();

        $customer->name            = 'FERRETERIA SANTANDER';
        $customer->number          = '123456787';
        $customer->dv              = 4;
        $customer->address         = 'CARRERA 17 # 42-86';
        $customer->phone           = '6374585';
        $customer->email           = 'ferresander@gmail.com';
        $customer->credit_limit    = 3000000;
        $customer->used            = 0;
        $customer->available       = 3000000;
        $customer->department_id   = 21;
        $customer->municipality_id = 846;
        $customer->document_id     = 6;
        $customer->liability_id    = 1;
        $customer->organization_id = 1;
        $customer->tax_id          = 1;
        $customer->regime_id       = 1;

        $customer->save();

        $customer = new Customer();

        $customer->name            = 'COLEGIO LA SALLE';
        $customer->number            = '523456786';
        $customer->dv              = 4;
        $customer->address         = 'CARRERA 28 # 42-55';
        $customer->phone           = '6374485';
        $customer->email           = 'colsalle@gmail.com';
        $customer->credit_limit    = 4000000;
        $customer->used            = 0;
        $customer->available       = 4000000;
        $customer->department_id   = 21;
        $customer->municipality_id = 846;
        $customer->document_id     = 6;
        $customer->liability_id    = 1;
        $customer->organization_id = 1;
        $customer->tax_id          = 1;
        $customer->regime_id       = 1;

        $customer->save();

        $customer = new Customer();

        $customer->name            = 'AMERICANA DE COMPUTADORES';
        $customer->number          = '723456785';
        $customer->dv              = 4;
        $customer->address         = 'CARRERA 35 # 52-103';
        $customer->phone           = '6864485';
        $customer->email           = 'americomp@gmail.com';
        $customer->credit_limit    = 3000000;
        $customer->used            = 0;
        $customer->available       = 3000000;
        $customer->department_id   = 21;
        $customer->municipality_id = 846;
        $customer->document_id     = 6;
        $customer->liability_id    = 1;
        $customer->organization_id = 1;
        $customer->tax_id          = 1;
        $customer->regime_id       = 1;

        $customer->save();
    }
}
