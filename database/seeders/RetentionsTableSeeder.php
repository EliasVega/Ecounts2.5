<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RetentionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('retentions')->delete();
        
        \DB::table('retentions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'porcentage' => '0.00',
                'base' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'porcentage' => '0.10',
                'base' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'porcentage' => '0.50',
                'base' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'porcentage' => '1.00',
                'base' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'porcentage' => '1.50',
                'base' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'porcentage' => '2.00',
                'base' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'porcentage' => '2.50',
                'base' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'porcentage' => '3.00',
                'base' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'porcentage' => '3.50',
                'base' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'porcentage' => '4.00',
                'base' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'porcentage' => '5.00',
                'base' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'porcentage' => '6.00',
                'base' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'porcentage' => '7.00',
                'base' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'porcentage' => '10.00',
                'base' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'porcentage' => '11.00',
                'base' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'porcentage' => '15.00',
                'base' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'porcentage' => '20.00',
                'base' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'porcentage' => '33.00',
                'base' => 0,
            ),
        ));
        
        
    }
}