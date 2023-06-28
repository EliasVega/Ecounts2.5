<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('companies')->delete();

        DB::table('companies')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'RECICLADORA MINAS S.A.S.',
                'nit' => '901243098',
                'dv' => '3',
                'email' => 'chatarreriaminas@hotmail.com',
                'emailfe' => 'chatarreriaminas@hotmail.com',
                'logo' => 'noimagen.jpg',
                'department_id' => 21,
                'municipality_id' => 846,
                'liability_id' => 1,
                'organization_id' => 1,
                'regime_id' => 1,
                'created_at' => '2023-01-12 21:07:42',
                'updated_at' => '2023-01-12 21:07:42',
            ),
        ));


    }
}
