<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documents = [
            [
                'code' => 11,
                'name' =>'Registro civil',
                'initial' => 'R.C.'
            ],
            [
                'code' => 12,
                'name' =>'Tarjeta de Identidad',
                'initial' => 'T.I.'
            ],
            [
                'code' => 13,
                'name' =>'Cedula de Ciudadania',
                'initial' => 'C.C.'
            ],
            [
                'code' => 21,
                'name' =>'Tarjeta de extranjeria',
                'initial' => 'T.E.'
            ],
            [
                'code' => 22,
                'name' =>'Cedula de Extranjeria',
                'initial' => 'C.C.'
            ],
            [
                'code' => 31,
                'name' =>'NIT',
                'initial' => 'NIT'
            ],
            [
                'code' => 41,
                'name' =>'Pasaporte',
                'initial' => 'PAS'
            ],
            [
                'code' => 47,
                'name' =>'PEP',
                'initial' => 'PEP'
            ],
            [
                'code' => 50,
                'name' =>'NIT de otro pais',
                'initial' => 'D.E'
            ],
            [
                'code' => 91,
                'name' =>'NUIP',
                'initial' => 'NUIP'
            ],
        ];
        foreach ($documents as $document) {
            Document::create($document);
        }
    }
}
