<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('branches')->delete();

        \DB::table('branches')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Principal',
                'address' => 'CR 9 24 26 BRR GIRARDOT',
                'phone' => '3152340317',
                'mobile' => '3152340317',
                'email' => 'recuperadoradanieladuartesas@gmail.com',
                'manager' => 'DUARTE RINCON FRANCY DANIELA',
                'department_id' => 21,
                'municipality_id' => 846,
                'company_id' => 1,
                'created_at' => '2023-01-20 21:07:43',
                'updated_at' => '2023-01-20 21:07:43',
            ),

        ));
    }
}
