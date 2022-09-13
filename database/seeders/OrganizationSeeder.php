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
        $organization = new Organization();

        $organization->code = 1;
        $organization->name = 'Persona Juridica y Asimiladas';

        $organization->save();

        $organization = new Organization();

        $organization->code = 2;
        $organization->name = 'Persona Natural y Asimiladas';

        $organization->save();
    }
}
