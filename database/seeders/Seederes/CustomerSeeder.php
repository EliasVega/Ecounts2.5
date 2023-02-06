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
        $customer = [
            [
                'name'            => 'ELECTRICOS SANTANDER',
                'number'          => '123456788',
                'dv'              => 4,
                'address'         => 'CARRERA 17 # 45-86',
                'phone'           => '6374583',
                'email'           => 'elesander@gmail.com',
                'credit_limit'    => 5000000,
                'used'            => 0,
                'available'       => 5000000,
                'department_id'   => 21,
                'municipality_id' => 846,
                'document_id'     => 6,
                'liability_id'    => 1,
                'organization_id' => 1,
                'tax_id'          => 1,
                'regime_id'       => 1,
            ],
            [
                'name'            => 'FERRETERIA SANTANDER',
                'number'          => '123456787',
                'dv'              => 4,
                'address'         => 'CARRERA 17 # 42-86',
                'phone'           => '6374585',
                'email'           => 'ferresander@gmail.com',
                'credit_limit'    => 3000000,
                'used'            => 0,
                'available'       => 3000000,
                'department_id'   => 21,
                'municipality_id' => 846,
                'document_id'     => 6,
                'liability_id'    => 1,
                'organization_id' => 1,
                'tax_id'          => 1,
                'regime_id'       => 1,
            ],
            [
                'name'            => 'COLEGIO LA SALLE',
                'number'          => '523456786',
                'dv'              => 4,
                'address'         => 'CARRERA 28 # 42-55',
                'phone'           => '6374485',
                'email'           => 'colsalle@gmail.com',
                'credit_limit'    => 4000000,
                'used'            => 0,
                'available'       => 4000000,
                'department_id'   => 21,
                'municipality_id' => 846,
                'document_id'     => 6,
                'liability_id'    => 1,
                'organization_id' => 1,
                'tax_id'          => 1,
                'regime_id'       => 1,
            ],
            [
                'name'            => 'AMERICANA DE COMPUTADORES',
                'number'          => '723456785',
                'dv'              => 4,
                'address'         => 'CARRERA 35 # 52-103',
                'phone'           => '6864485',
                'email'           => 'americomp@gmail.com',
                'credit_limit'    => 8000000,
                'used'            => 0,
                'available'       => 8000000,
                'department_id'   => 21,
                'municipality_id' => 846,
                'document_id'     => 6,
                'liability_id'    => 1,
                'organization_id' => 1,
                'tax_id'          => 1,
                'regime_id'       => 1,
            ],
        ];
        foreach ($customer as $cus) {
            Customer::create($cus);
        }
    }
}
