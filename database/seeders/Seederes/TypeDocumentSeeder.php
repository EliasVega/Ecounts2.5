<?php

namespace Database\Seeders;

use App\Models\Type_document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeDocumentSeeder extends Seeder
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
                'code' => '01',
                'name' => 'Factura de Venta Nacional',
                'prefix' => 'fv',
                'cufe_algorithm' => 'CUFE-SHA384'
            ],
            [
                'code' => '02',
                'name' => 'Factura de Exportación',
                'prefix' => 'fv',
                'cufe_algorithm' => 'CUFE-SHA384'
            ],
            [
                'code' => '03',
                'name' => 'Factura de Contingencia',
                'prefix' => 'fv',
                'cufe_algorithm' => 'CUDE-SHA384'
            ],
            [
                'code' => '91',
                'name' => 'Nota Crédito',
                'prefix' => 'nc',
                'cufe_algorithm' => 'CUDE-SHA384'
            ],
            [
                'code' => '92',
                'name' => 'Nota Débito',
                'prefix' => 'nd',
                'cufe_algorithm' => 'CUDE-SHA384'
            ],
            [
                'code' => '',
                'name' => 'ZIP',
                'prefix' => 'z',
                'cufe_algorithm' => ''
            ],
            [
                'code' => '89',
                'name' => 'AttachedDocument',
                'prefix' => 'at',
                'cufe_algorithm' => '',
            ],
            [
                'code' => '88',
                'name' => 'ApplicationResponse',
                'prefix' => 'ar',
                'cufe_algorithm' => 'CUDE-SHA384'
            ],
            [
                'code' => '1',
                'name' => 'Nomina Individual',
                'prefix' => 'ni',
                'cufe_algorithm' => 'CUNE-SHA384'
            ],
            [
                'code' => '2',
                'name' => 'Nomina Individual de Ajuste',
                'prefix' => 'na',
                'cufe_algorithm' => 'CUNE-SHA384'
            ],
            [
                'code' => '05',
                'name' => 'Documento Soporte Electrónico',
                'prefix' => 'dse',
                'cufe_algorithm' => 'CUDS-SHA384'
            ],
            [
                'code' => '04',
                'name' => 'Factura electrónica de Venta - tipo 04',
                'prefix' => 'fv',
                'cufe_algorithm' => 'CUFE-SHA384'
            ],
            [
                'code' => '95',
                'name' => 'Nota de Ajuste al Documento Soporte Electrónico',
                'prefix' => 'nds',
                'cufe_algorithm' => 'CUDS-SHA384'
            ]
        ];

        foreach ($documents as $doc) {
            Type_document::create($doc);
        }
    }
}
