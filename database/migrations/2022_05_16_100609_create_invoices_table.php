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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->integer('invoice');
            $table->string('tipdoc', 2);
            $table->string('tipOpe', 2);
            $table->date('due_date');
            $table->integer('items');
            $table->decimal('total', 20, 2);
            $table->decimal('totalIva', 11, 2);
            $table->decimal('totalPay', 20, 2);
            $table->decimal('pay',10,2);
            $table->decimal('balance',10,2);
            $table->decimal('retention',10,2)->nullable();
            $table->enum('status',['ACTIVE', 'CREDIT_NOTE', 'DEBIT_NOTE'])->default('ACTIVE');

            $table->foreignId('user_id')->constrained();
            $table->foreignId('branch_id')->constrained()->onUpdate('cascade');
            $table->foreignId('customer_id')->constrained()->onUpdate('cascade');
            $table->foreignId('payment_form_id')->constrained()->onUpdate('cascade');
            $table->foreignId('payment_method_id')->constrained()->onUpdate('cascade');
            $table->foreignId('retention_id')->nullable()->constrained();

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
        Schema::dropIfExists('invoices');
    }
};
