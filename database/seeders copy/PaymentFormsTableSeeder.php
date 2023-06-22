<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentFormsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_forms')->delete();
        
        \DB::table('payment_forms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'contado',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Credito',
            ),
        ));
        
        
    }
}