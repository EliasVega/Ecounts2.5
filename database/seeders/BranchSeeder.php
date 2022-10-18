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
        $branchs = [
            [
                'department_id'   => 21,
                'municipality_id' => 846,
                'company_id'      => 1,
                'name'            => 'Bodega',
                'address'         => 'Calle 45 # 31-47',
                'phone'           => '6706250',
                'mobile'          => '3172145789',
                'email'           => 'ecounts.principal@gmail.com',
                'manager'         => 'Miguel Angel Lopez',
            ],
            [
                'department_id'   => 21,
                'municipality_id' => 878,
                'company_id'      => 1,
                'name'            => 'Floridablanca',
                'address'         => 'Calle 10 # 12-47',
                'phone'           => '6706251',
                'mobile'          => '3172145766',
                'email'           => 'ecounts.fblanca@gmail.com',
                'manager'         => 'Carlos andres perez',
            ],
            [
                'department_id'   => 21,
                'municipality_id' => 881,
                'company_id'      => 1,
                'name'            => 'Giron',
                'address'         => 'Calle 45 # 31-47',
                'phone'           => '6706271',
                'mobile'          => '3172166789',
                'email'           => 'discom.principal@gmail.com',
                'manager'         => 'Adriana santana',
            ],
            [
                'department_id'   => 1,
                'municipality_id' => 1,
                'company_id'      => 1,
                'name'            => 'Discom Medallin',
                'address'         => 'Calle 60 # 28-47',
                'phone'           => '6556250',
                'mobile'          => '3172485789',
                'email'           => 'discom.medellin@gmail.com',
                'manager'         => 'Carlos arturo sierra',
            ],
        ];
        foreach ($branchs as $bra) {
            Branch::create($bra);
        }

    }
}
