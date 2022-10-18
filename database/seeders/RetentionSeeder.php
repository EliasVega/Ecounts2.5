<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Retention;
use Illuminate\Database\Seeder;

class RetentionSeeder extends Seeder
{
    /**
     * Run the database' seeds.
     *
     * @return void
     */
    public function run()
    {
        $retention = [
            [
                'porcentage' => 0.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 0.1,
                'base' => 0.0,
            ],
            [
                'porcentage' => 0.5,
                'base' => 0.0,
            ],
            [
                'porcentage' => 1.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 1.5,
                'base' => 0.0,
            ],
            [
                'porcentage' => 2.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 2.5,
                'base' => 0.0,
            ],
            [
                'porcentage' => 3.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 3.5,
                'base' => 0.0,
            ],
            [
                'porcentage' => 4.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 5.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 6.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 7.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 10.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 11.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 15.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 20.0,
                'base' => 0.0,
            ],
            [
                'porcentage' => 33.0,
                'base' => 0.0,
            ],
        ];
        foreach($retention as $ret){
            Retention::create($ret);
        }
    }
}
