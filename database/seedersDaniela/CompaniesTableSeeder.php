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
                'name' => 'RECUPERADORA DANIELA DUARTE SAS',
                'nit' => '901420823',
                'dv' => '5',
                'email' => 'recuperadoradanieladuartesas@gmail.com',
                'emailfe' => 'recuperadoradanieladuartesas@gmail.com',
                'logo' => '1676959325.jpg',
                'department_id' => 21,
                'municipality_id' => 846,
                'liability_id' => 5,
                'organization_id' => 1,
                'regime_id' => 1,
                'created_at' => '2023-01-20 21:07:42',
                'updated_at' => '2023-01-20 21:07:42',
            ),
        ));


    }
}
