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
        $user = new User();

        $user->company_id = 1;
        $user->branch_id = 1;
        $user->document_id = 3;
        $user->role_id = 1;
        $user->name = 'ELIAS VEGA DELGADO';
        $user->number = '91260182';
        $user->address = 'Carrera 21 # 99-27 Fontana';
        $user->phone = '3168886468';
        $user->email = 'discom.is@gmail.com';
        $user->password = bcrypt('matrix2012');
        $user->position = 'Administrador Sistema';
        $user->transfer = 1;
        $user->status = 'ACTIVO';

        $user->save();

        $user = new User();

        $user->company_id = 1;
        $user->branch_id = 1;
        $user->document_id = 3;
        $user->role_id = 2;
        $user->name = 'Ecounts dos';
        $user->number = '91260183';
        $user->address = 'Carrera 33 # 98-27 Bucaramanga';
        $user->phone = '3168666468';
        $user->email = 'ecountsdos@gmail.com';
        $user->password = bcrypt('ecountsdos');
        $user->position = 'Administrativo';
        $user->transfer = 1;
        $user->status = 'ACTIVO';

        $user->save();

        $user = new User();

        $user->company_id = 1;
        $user->branch_id = 2;
        $user->document_id = 3;
        $user->role_id = 3;
        $user->name = 'Ecounts tres';
        $user->number = '91260184';
        $user->address = 'Carrera 45 # 58-47 Bucaramanga';
        $user->phone = '3168666479';
        $user->email = 'ecountstres@gmail.com';
        $user->password = bcrypt('ecountstres');
        $user->position = 'Supervisor';
        $user->transfer = 1;
        $user->status = 'ACTIVO';

        $user->save();

        $user = new User();

        $user->company_id = 1;
        $user->branch_id = 3;
        $user->document_id = 3;
        $user->role_id = 4;
        $user->name = 'Ecounts cuatro';
        $user->number = '91260185';
        $user->address = 'Carrera 6 # 12-27 Bucaramanga';
        $user->phone = '316458468';
        $user->email = 'ecountscuatro@gmail.com';
        $user->password = bcrypt('ecountscuatro');
        $user->position = 'Compras';
        $user->transfer = 0;
        $user->status = 'ACTIVO';


        $user->save();

        $user = new User();

        $user->company_id = 1;
        $user->branch_id = 4;
        $user->document_id = 3;
        $user->role_id = 5;
        $user->name = 'Ecounts cinco';
        $user->number = '91260186';
        $user->address = 'Carrera 60 # 22-77 Bucaramanga';
        $user->phone = '3164758468';
        $user->email = 'ecountscinco@gmail.com';
        $user->password = bcrypt('ecountscinco');
        $user->position = 'Ventas';
        $user->transfer = 0;
        $user->status = 'ACTIVO';

        $user->save();
    }
}
