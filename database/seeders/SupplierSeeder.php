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
        $supplier = [
            [
                'department_id' => 21,
                'municipality_id' => 846,
                'document_id' => 6,
                'liability_id' => 1,
                'organization_id' => 1,
                'tax_id' => 1,
                'name' => 'NEXANS COLOMBIA',
                'number' => '223456789-4',
                'address' => 'Centro empresarial chimita bodega 14',
                'phone' => '6374581',
                'email' => 'nexans@gmail.com',
                'contact' => 'LUIS EMILIO MILLAN',
                'phone_contact' => '3174576982',
            ],
            [
                'department_id' => 21,
                'municipality_id' => 846,
                'document_id' => 6,
                'liability_id' => 1,
                'organization_id' => 1,
                'tax_id' => 1,
                'name' => 'BLACK&DECKER',
                'number' => '223456789-5',
                'address' => 'Centro empresarial chimita bodega 15',
                'phone' => '6374582',
                'email' => 'blackdecker@gmail.com',
                'contact' => 'LUIS ANTONIO MONROY',
                'phone_contact' => '3174576983',
            ],
            [
                'department_id' => 21,
                'municipality_id' => 846,
                'document_id' => 6,
                'liability_id' => 1,
                'organization_id' => 1,
                'tax_id' => 1,
                'name' => 'ASUS IMPORTACIONES',
                'number' => '323456789-6',
                'address' => 'Centro empresarial chimita bodega 16',
                'phone' => '6371582',
                'email' => 'asus@gmail.com',
                'contact' => 'FABIAN CORRALES',
                'phone_contact' => '3174486983',
            ],
            [
                'department_id' => 21,
                'municipality_id' => 846,
                'document_id' => 6,
                'liability_id' => 1,
                'organization_id' => 1,
                'tax_id' => 1,
                'name' => 'LENOVO COLOMBIA',
                'number' => '323456789-7',
                'address' => 'Centro empresarial chimita bodega 17',
                'phone' => '6373982',
                'email' => 'lenovo@gmail.com',
                'contact' => 'FANNY OSORIO',
                'phone_contact' => '3174476983',
            ],
        ];
        foreach($supplier as $sup){
            Supplier::create($sup);
        }
    }
}
