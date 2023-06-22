<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('companies')->delete();

        \DB::table('companies')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'RECUPERADORA DE RECICLAJES INDUSTRIALES',
                'nit' => '1065576587',
                'dv' => '0',
                'email' => 'lorenzomontalvo1986@gmail.com',
                'emailfe' => 'lorenzomontalvo1986@gmail.com',
                'logo' => '1687435626.jpg',
                'department_id' => 21,
                'municipality_id' => 846,
                'liability_id' => 5,
                'organization_id' => 2,
                'regime_id' => 2,
                'created_at' => '2023-06-20 21:07:42',
                'updated_at' => '2023-06-20 21:07:42',
            ),
        ));


    }
}
