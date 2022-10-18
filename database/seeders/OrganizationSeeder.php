<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organizations = [
            [
                'code' => 1,
                'name' =>'Persona Juridica y Asimiladas',
            ],
            [
                'code' => 2,
                'name' =>'Persona Natural y Asimiladas',
            ],

        ];
        foreach ($organizations as $org) {
            Organization::create($org);
        }
    }
}
