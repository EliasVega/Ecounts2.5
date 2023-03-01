<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'ELIAS VEGA DELGADO',
                'number' => '91260182',
                'address' => 'Carrera 21 # 99-27 Fontana',
                'phone' => '3168886468',
                'email' => 'discom.is@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mYqyo8WMZY4WyKM8g6DJ9.qaSok6TtPrh4jJvvp1LQd52RJSB0hEm',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'position' => 'Administrador Sistema',
                'transfer' => 1,
                'status' => 'activo',
                'created_at' => '2023-01-12 21:07:43',
                'updated_at' => '2023-01-12 21:07:43',
                'company_id' => 1,
                'branch_id' => 1,
                'document_id' => 3,
                'role_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'DUARTE RINCON FRANCY DANIELA',
                'number' => '1098760453',
                'address' => 'CR 9 24 26 BRR GIRARDOT',
                'phone' => '3152340317',
                'email' => 'recuperadoradanieladuartesas@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fCLCcQAFY9degEzMagcKCOmG32DtL3tKDrePb/bESyFTVLl9IWh9i',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'position' => 'Administrativo',
                'transfer' => 1,
                'status' => 'activo',
                'created_at' => '2023-01-12 21:07:43',
                'updated_at' => '2023-01-12 21:07:43',
                'company_id' => 1,
                'branch_id' => 1,
                'document_id' => 3,
                'role_id' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'JUAN BAUTISTA BETANCOURT',
                'number' => '3714501',
                'address' => 'CR 9 24 26 BRR GIRARDOT',
                'phone' => '3152340317',
                'email' => 'contabilidadrecuperadorasas@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tmzr1heHuj0MYMnLUxikw.zKHg.0Gym2GjVBSUWlbYh6C6AunNg1u',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'position' => 'Admin',
                'transfer' => 1,
                'status' => 'activo',
                'created_at' => '2023-01-12 21:07:43',
                'updated_at' => '2023-01-12 21:07:43',
                'company_id' => 1,
                'branch_id' => 1,
                'document_id' => 3,
                'role_id' => 3,
            ),
        ));
    }
}
