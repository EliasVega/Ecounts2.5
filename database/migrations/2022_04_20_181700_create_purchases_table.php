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
            $table->decimal('total', 20, 2);
            $table->decimal('totalIva', 11, 2);
            $table->decimal('totalPay', 20, 2);
            $table->enum('status',['ACTIVE', 'DEBIT_NOTE', 'CREDIT_NOTE'])->default('ACTIVE');

            $table->foreignId('user_id')->constrained();
            $table->foreignId('branch_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('supplier_id')->constrained()->onUpdate('cascade');

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
