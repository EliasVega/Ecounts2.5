<?php

namespace Database\Seeders;

use App\Models\Payment_form;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment_forms = [
            [
                'name' => 'contado',
            ],
            [
                'name' => 'Credito',
            ],
        ];
        foreach($payment_forms as $pf){
            Payment_form::create($pf);
        }
    }
}
