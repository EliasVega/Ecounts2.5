<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('suppliers')->delete();

        \DB::table('suppliers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'PROVEEDOR POST',
                'number' => '22222222',
                'dv' => NULL,
                'address' => 'Direccion post',
                'phone' => '555555555',
                'email' => 'userpost@gmail.com',
                'contact' => 'post',
                'phone_contact' => '6666666',
                'department_id' => 21,
                'municipality_id' => 846,
                'document_id' => 3,
                'liability_id' => 5,
                'organization_id' => 2,
                'regime_id' => 2,
                'created_at' => '2023-01-20 21:07:43',
                'updated_at' => '2023-01-20 21:07:43',
            ),
        ));
    }
}
