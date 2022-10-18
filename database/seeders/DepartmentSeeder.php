<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'ANTIOQUIA',
                'dane_code' => '05',
                'iso_code' => 'ANT'
            ],
            [
                'name' => 'ATLANTICO',
                'dane_code' => '08',
                'iso_code' => 'ATL'
            ],
            [
                'name' => 'BOGOTA',
                'dane_code' => '11',
                'iso_code' => 'DC'
            ],
            [
                'name' => 'BOLIVAR',
                'dane_code' => '13',
                'iso_code' => 'BOL'
            ],
            [
                'name' => 'BOYACA',
                'dane_code' => '15',
                'iso_code' => 'BOY'
            ],
            [
                'name' => 'CALDAS',
                'dane_code' => '17',
                'iso_code' => 'CAL'
            ],
            [
                'name' => 'CAQUETA',
                'dane_code' => '18',
                'iso_code' => 'CAQ'
            ],
            [
                'name' => 'CAUCA',
                'dane_code' => '19',
                'iso_code' => 'CAU'
            ],
            [
                'name' => 'CESAR',
                'dane_code' => '20',
                'iso_code' => 'CES'
            ],
            [
                'name' => 'CORDOBA',
                'dane_code' => '23',
                'iso_code' => 'COR'
            ],
            [
                'name' => 'CUNDINAMARCA',
                'dane_code' => '25',
                'iso_code' => 'CUN'
            ],
            [
                'name' => 'CHOCO',
                'dane_code' => '27',
                'iso_code' => 'CHO'
            ],
            [
                'name' => 'HUILA',
                'dane_code' => '41',
                'iso_code' => 'HUI'
            ],
            [
                'name' => 'LA GUAJIRA',
                'dane_code' => '44',
                'iso_code' => 'LAG'
            ],
            [
                'name' => 'MAGDALENA',
                'dane_code' => '47',
                'iso_code' => 'MAG'
            ],
            [
                'name' => 'META',
                'dane_code' => '50',
                'iso_code' => 'MET'
            ],
            [
                'name' => 'NARIÑO',
                'dane_code' => '52',
                'iso_code' => 'NAR'
            ],
            [
                'name' => 'NORTE DE SANTANDER',
                'dane_code' => '54',
                'iso_code' => 'NSA'
            ],
            [
                'name' => 'QUINDIO',
                'dane_code' => '63',
                'iso_code' => 'QUI'
            ],
            [
                'name' => 'RISARALDA',
                'dane_code' => '66',
                'iso_code' => 'RIS'
            ],
            [
                'name' => 'SANTANDER',
                'dane_code' => '68',
                'iso_code' => 'SAN'
            ],
            [
                'name' => 'SUCRE',
                'dane_code' => '70',
                'iso_code' => 'SUC'
            ],
            [
                'name' => 'TOLIMA',
                'dane_code' => '73',
                'iso_code' => 'TOL'
            ],
            [
                'name' => 'VALLE DEL CAUCA',
                'dane_code' => '76',
                'iso_code' => 'CAC'
            ],
            [
                'name' => 'ARAUCA',
                'dane_code' => '81',
                'iso_code' => 'ARA'
            ],
            [
                'name' => 'CASANARE',
                'dane_code' => '85',
                'iso_code' => 'CAS'
            ],
            [
                'name' => 'PUTUMAYO',
                'dane_code' => '86',
                'iso_code' => 'PUT'
            ],
            [
                'name' => 'SAN ANDRES Y PROVIDENCIA',
                'dane_code' => '88',
                'iso_code' => 'SAP'
            ],
            [
                'name' => 'AMAZONAS',
                'dane_code' => '91',
                'iso_code' => 'AMA'
            ],
            [
                'name' => 'GUAINIA',
                'dane_code' => '94',
                'iso_code' => 'GUA'
            ],
            [
                'name' => 'GUAVIARE',
                'dane_code' => '95',
                'iso_code' => 'GUV'
            ],
            [
                'name' => 'VAUPES',
                'dane_code' => '97',
                'iso_code' => 'VAU'
            ],
            [
                'name' => 'VICHADA',
                'dane_code' => '99',
                'iso_code' => 'VID'
            ],
        ];
        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
