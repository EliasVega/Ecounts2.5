<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branch = new Branch();

        $branch->department_id   = 21;
        $branch->municipality_id = 846;
        $branch->company_id      = 1;
        $branch->name            = 'Bodega';
        $branch->address         = 'Calle 45 # 31-47';
        $branch->phone           = '6706250';
        $branch->mobile          = '3172145789';
        $branch->email           = 'ecounts.principal@gmail.com';
        $branch->manager         = 'Miguel Angel Lopez';

        $branch->save();

        $branch = new Branch();

        $branch->department_id   = 21;
        $branch->municipality_id = 878;
        $branch->company_id      = 1;
        $branch->name            = 'Floridablanca';
        $branch->address         = 'Calle 10 # 12-47';
        $branch->phone           = '6706251';
        $branch->mobile          = '3172145766';
        $branch->email           = 'ecounts.fblanca@gmail.com';
        $branch->manager         = 'Carlos andres perez';

        $branch->save();

        $branch = new Branch();

        $branch->department_id   = 21;
        $branch->municipality_id = 881;
        $branch->company_id      = 1;
        $branch->name            = 'Giron';
        $branch->address         = 'Calle 45 # 31-47';
        $branch->phone           = '6706271';
        $branch->mobile          = '3172166789';
        $branch->email           = 'discom.principal@gmail.com';
        $branch->manager         = 'Adriana santana';

        $branch->save();

        $branch = new Branch();

        $branch->department_id   = 1;
        $branch->municipality_id = 1;
        $branch->company_id      = 1;
        $branch->name            = 'Discom Medallin';
        $branch->address         = 'Calle 60 # 28-47';
        $branch->phone           = '6556250';
        $branch->mobile          = '3172485789';
        $branch->email           = 'discom.medellin@gmail.com';
        $branch->manager         = 'Carlos arturo sierra';

        $branch->save();
    }
}
