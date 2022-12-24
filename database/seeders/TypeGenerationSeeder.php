<?php

namespace Database\Seeders;

use App\Models\Type_generation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeGenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generations = [
            [
                'description' => 'Por operación',
            ],
            [
                'description' => 'Acumulado semanal',
            ]
        ];

        foreach ($generations as $generation) {
            Type_generation::create($generation);
        }
    }
}
