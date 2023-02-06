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
        Schema::create('pay_events', function (Blueprint $table) {
            $table->id();

            $table->integer('origin');
            $table->integer('destination')->nullable();
            $table->enum('document', ['factura', 'pedido']);
            $table->decimal('pay',10,2);
            $table->enum('status',['pendiente', 'aolicado'])->default('pendiente');

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
        Schema::dropIfExists('pay_events');
    }
};
