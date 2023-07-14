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
                'name' => 'ARECUPERAR',
                'nit' => '901292970',
                'dv' => '1',
                'email' => 'asociacionarecuperar@gmail.com',
                'emailfe' => 'asociacionarecuperar@gmail.com',
                'logo' => '1687435626.jpg',
                'department_id' => 18,
                'municipality_id' => 804,
                'liability_id' => 1,
                'organization_id' => 1,
                'regime_id' => 1,
                'created_at' => '2023-01-12 21:07:42',
                'updated_at' => '2023-01-12 21:07:42',
            ),
        ));


    }
}
