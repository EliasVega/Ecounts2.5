<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeGenerationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('type_generations')->delete();
        
        \DB::table('type_generations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'Por operación',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => 'Acumulado semanal',
            ),
        ));
        
        
    }
}