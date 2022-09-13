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
        Schema::create('ndinvoices', function (Blueprint $table) {
            $table->id();

            $table->decimal('total', 20, 2);
            $table->decimal('totalIva', 11, 2);
            $table->decimal('totalPay', 20, 2);
            $table->decimal('pay',10,2);
            $table->decimal('balance',10,2);
            $table->enum('status',['APROBADA', 'CANCELADA'])->default('APROBADA');

            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
            $table->foreignId('branch_id')->constrained()->onUpdate('cascade');
            $table->foreignId('invoice_id')->constrained()->onUpdate('cascade');
            $table->foreignId('customer_id')->constrained()->onUpdate('cascade');

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
        Schema::dropIfExists('ndinvoices');
    }
};
