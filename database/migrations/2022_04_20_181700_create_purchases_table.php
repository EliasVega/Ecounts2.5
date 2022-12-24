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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();

            $table->string('purchase', 20);
            $table->date('due_date');
            $table->integer('items');
            $table->decimal('total', 20, 2);
            $table->decimal('total_iva', 11, 2);
            $table->decimal('total_pay', 20, 2);
            $table->decimal('pay', 20, 2);
            $table->decimal('balance', 20, 2);
            $table->date('start_date')->nullable();
            $table->enum('status',['ACTIVE', 'DEBIT_NOTE', 'CREDIT_NOTE'])->default('ACTIVE');
            $table->enum('document',['COMPRA', 'DOCUMENTO_SOPORTE'])->default('COMPRA');

            $table->foreignId('user_id')->constrained();
            $table->foreignId('branch_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('supplier_id')->constrained()->onUpdate('cascade');
            $table->foreignId('payment_form_id')->constrained()->onUpdate('cascade');
            $table->foreignId('payment_method_id')->constrained()->onUpdate('cascade');
            $table->foreignId('type_generation_id')->nullable()->constrained();

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
        Schema::dropIfExists('purchases');
    }
};
