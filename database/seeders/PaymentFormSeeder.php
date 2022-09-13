<?php

namespace Database\Seeders;

use App\Models\PaymentForm;
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
        $paymentForm = new PaymentForm();

        $paymentForm->code = 1;
        $paymentForm->name = 'Contado';

        $paymentForm->save();

        $paymentForm = new PaymentForm();

        $paymentForm->code = 2;
        $paymentForm->name = 'Credito';

        $paymentForm->save();
    }
}
