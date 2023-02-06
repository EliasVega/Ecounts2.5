<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('documents')->delete();
        
        \DB::table('documents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 11,
                'name' => 'Registro civil',
                'initial' => 'R.C.',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 12,
                'name' => 'Tarjeta de Identidad',
                'initial' => 'T.I.',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 13,
                'name' => 'Cedula de Ciudadania',
                'initial' => 'C.C.',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 21,
                'name' => 'Tarjeta de extranjeria',
                'initial' => 'T.E.',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 22,
                'name' => 'Cedula de Extranjeria',
                'initial' => 'C.C.',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 31,
                'name' => 'NIT',
                'initial' => 'NIT',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 41,
                'name' => 'Pasaporte',
                'initial' => 'PAS',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 47,
                'name' => 'PEP',
                'initial' => 'PEP',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 50,
                'name' => 'NIT de otro pais',
                'initial' => 'D.E',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 91,
                'name' => 'NUIP',
                'initial' => 'NUIP',
            ),
        ));
        
        
    }
}