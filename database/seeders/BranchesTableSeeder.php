<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('branches')->delete();

        DB::table('branches')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Principal',
                'address' => 'CA KDX 217 300',
                'phone' => '3213513501',
                'mobile' => '3213513501',
                'email' => 'asociacionarecuperar@gmail.com',
                'manager' => 'ARECUPERAR',
                'department_id' => 18,
                'municipality_id' => 804,
                'company_id' => 1,
                'created_at' => '2023-07-05 21:07:43',
                'updated_at' => '2023-07-05 21:07:43',
            ),
        ));


    }
}
