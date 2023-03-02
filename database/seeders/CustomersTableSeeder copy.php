<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('customers')->delete();

        \DB::table('customers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Cliente post',
                'number' => '22222222',
                'dv' => '1',
                'address' => 'cliente post',
                'phone' => '5555555555',
                'email' => 'clientepost@gmail.com',
                'credit_limit' => '5000000.00',
                'used' => '0.00',
                'available' => '5000000.00',
                'department_id' => 21,
                'municipality_id' => 846,
                'document_id' => 6,
                'liability_id' => 5,
                'organization_id' => 2,
                'regime_id' => 2,
                'created_at' => '2023-01-12 21:07:43',
                'updated_at' => '2023-01-12 21:07:43',
            ),
        ));
    }
}
