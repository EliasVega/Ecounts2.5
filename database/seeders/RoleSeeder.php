<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'role' => 'SuperAdmin',
                'description' => 'Encargado del mantenimiento del sistema',
            ],
            [
                'role' => 'Administrador',
                'description' => 'Es el responsable del mantenimiento de la empresa',
            ],
            [
                'role' => 'Compras Y ventas',
                'description' => 'Tiene las funciones tanto de compras como de ventas de la empresa',
            ],
            [
                'role' => 'Compras',
                'description' => 'Ejerce funciones de las compras de la empresa',
            ],
            [
                'role' => 'Ventas',
                'description' => 'EEjerce funciones como vendedor de la empresa',
            ],
        ];
        foreach($role as $rol){
            Role::create($rol);
        }
    }
}
