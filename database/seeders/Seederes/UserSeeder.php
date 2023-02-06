<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  [
            [
                'company_id' => 1,
                'branch_id' => 1,
                'document_id' => 3,
                'role_id' => 1,
                'name' => 'ELIAS VEGA DELGADO',
                'number' => '91260182',
                'address' => 'Carrera 21 # 99-27 Fontana',
                'phone' => '3168886468',
                'email' => 'discom.is@gmail.com',
                'password' => bcrypt('matrix2012'),
                'position' => 'Administrador Sistema',
                'transfer' => 1,
                'status' => 'activo',
            ],
            [
                'company_id' => 1,
                'branch_id' => 1,
                'document_id' => 3,
                'role_id' => 2,
                'name' => 'Ecounts dos',
                'number' => '91260183',
                'address' => 'Carrera 33 # 98-27 Bucaramanga',
                'phone' => '3168666468',
                'email' => 'ecountsdos@gmail.com',
                'password' => bcrypt('ecountsdos'),
                'position' => 'Administrativo',
                'transfer' => 1,
                'status' => 'activo',
            ],
            [
                'company_id' => 1,
                'branch_id' => 2,
                'document_id' => 3,
                'role_id' => 3,
                'name' => 'Ecounts tres',
                'number' => '91260184',
                'address' => 'Carrera 45 # 58-47 Bucaramanga',
                'phone' => '3168666479',
                'email' => 'ecountstres@gmail.com',
                'password' => bcrypt('ecountstres'),
                'position' => 'Supervisor',
                'transfer' => 1,
                'status' => 'activo',
            ],
            [
                'company_id' => 1,
                'branch_id' => 3,
                'document_id' => 3,
                'role_id' => 4,
                'name' => 'Ecounts cuatro',
                'number' => '91260185',
                'address' => 'Carrera 6 # 12-27 Bucaramanga',
                'phone' => '316458468',
                'email' => 'ecountscuatro@gmail.com',
                'password' => bcrypt('ecountscuatro'),
                'position' => 'Compras',
                'transfer' => 0,
                'status' => 'activo',
            ],
            [
                'company_id' => 1,
                'branch_id' => 4,
                'document_id' => 3,
                'role_id' => 5,
                'name' => 'Ecounts cinco',
                'number' => '91260186',
                'address' => 'Carrera 60 # 22-77 Bucaramanga',
                'phone' => '3164758468',
                'email' => 'ecountscinco@gmail.com',
                'password' => bcrypt('ecountscinco'),
                'position' => 'Ventas',
                'transfer' => 0,
                'status' => 'activo',
            ],
        ];
        foreach($user as $user){
            User::create($user);
        }
    }
}
