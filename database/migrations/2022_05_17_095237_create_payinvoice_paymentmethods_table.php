<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payinvoice_paymentmethods', function (Blueprint $table) {
            $table->id();

            $table->foreignId('payinvoice_id')->constrained()->onUpdate('cascade');
            $table->foreignId('payment_method_id')->constrained()->onUpdate('cascade');
            $table->foreignId('bank_id')->constrained()->onUpdate('cascade');
            $table->foreignId('card_id')->constrained()->onUpdate('cascade');
            $table->foreignId('payevent_id')->nullable()->constrained();

            $table->decimal('payment', 10,2);
            $table->string('transaction', 20);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payinvoice_paymentmethods');
    }
};
