<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VerificationCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('verification_codes')->delete();

        \DB::table('verification_codes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 2,
                'code' => '1098760453'
            ),
            0 =>
            array (
                'id' => 1,
                'user_id' => 3,
                'code' => '3714501'
            ),
            0 =>
            array (
                'id' => 1,
                'user_id' => 4,
                'code' => '63548838'
            ),
        ));
    }
}
