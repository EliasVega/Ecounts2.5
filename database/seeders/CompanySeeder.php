<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company();

        $company->department_id = 21;
        $company->municipality_id = 846;
        $company->liability_id = 1;
        $company->organization_id = 1;
        $company->regime_id = 1;
        $company->tax_id = 1;
        $company->name = 'Ecounts';
        $company->nit = '123456789';
        $company->dv = 3;
        $company->email = 'ecounts@gmail.com';
        $company->emailfe = 'ecountsfe@gmail.com';
        $company->logo = '1643994183.jpg';

        $company->save();
    }
}
