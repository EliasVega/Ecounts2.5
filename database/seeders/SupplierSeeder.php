<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new Supplier();

        $supplier->department_id = 21;
        $supplier->municipality_id = 846;
        $supplier->document_id = 6;
        $supplier->liability_id = 1;
        $supplier->organization_id = 1;
        $supplier->tax_id = 1;
        $supplier->name = 'NEXANS COLOMBIA';
        $supplier->number = '223456789-4';
        $supplier->address = 'Centro empresarial chimita bodega 14';
        $supplier->phone = '6374581';
        $supplier->email = 'nexans@gmail.com';
        $supplier->contact = 'LUIS EMILIO MILLAN';
        $supplier->phoneContact = '3174576982';

        $supplier->save();

        $supplier = new Supplier();

        $supplier->department_id = 21;
        $supplier->municipality_id = 846;
        $supplier->document_id = 6;
        $supplier->liability_id = 1;
        $supplier->organization_id = 1;
        $supplier->tax_id = 1;
        $supplier->name = 'BLACK&DECKER';
        $supplier->number = '223456789-5';
        $supplier->address = 'Centro empresarial chimita bodega 15';
        $supplier->phone = '6374582';
        $supplier->email = 'blackdecker@gmail.com';
        $supplier->contact = 'LUIS ANTONIO MONROY';
        $supplier->phoneContact = '3174576983';

        $supplier->save();

        $supplier = new Supplier();

        $supplier->department_id = 21;
        $supplier->municipality_id = 846;
        $supplier->document_id = 6;
        $supplier->liability_id = 1;
        $supplier->organization_id = 1;
        $supplier->tax_id = 1;
        $supplier->name = 'ASUS IMPORTACIONES';
        $supplier->number = '323456789-6';
        $supplier->address = 'Centro empresarial chimita bodega 16';
        $supplier->phone = '6371582';
        $supplier->email = 'asus@gmail.com';
        $supplier->contact = 'FABIAN CORRALES';
        $supplier->phoneContact = '3174486983';

        $supplier->save();

        $supplier = new Supplier();

        $supplier->department_id = 21;
        $supplier->municipality_id = 846;
        $supplier->document_id = 6;
        $supplier->liability_id = 1;
        $supplier->organization_id = 1;
        $supplier->tax_id = 1;
        $supplier->name = 'LENOVO COLOMBIA';
        $supplier->number = '323456789-7';
        $supplier->address = 'Centro empresarial chimita bodega 17';
        $supplier->phone = '6373982';
        $supplier->email = 'lenovo@gmail.com';
        $supplier->contact = 'FANNY OSORIO';
        $supplier->phoneContact = '3174476983';

        $supplier->save();
    }
}
