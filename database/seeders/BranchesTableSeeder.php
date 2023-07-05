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
                'address' => 'CL 5 15 B 52 BRR CHAPINERO',
                'phone' => '3108571197',
                'mobile' => '3108571197',
                'email' => 'chatarreriaminas@hotmail.com',
                'manager' => 'RECICLADORA MINAS S.A.S.',
                'department_id' => 21,
                'municipality_id' => 846,
                'company_id' => 1,
                'created_at' => '2023-07-05 21:07:43',
                'updated_at' => '2023-07-05 21:07:43',
            ),
        ));


    }
}
