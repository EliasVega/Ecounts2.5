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
        Schema::create('saleboxes', function (Blueprint $table) {
            $table->id();

            $table->decimal('cashbox',10,2);//inicio efectivo
            $table->decimal('inOrderCash',10,2);//ing pedidos efectivo
            $table->decimal('inOrder',10,2);//ing total de pedidos
            $table->decimal('inInvoiceCash',10,2);//ing ventas efectivo
            $table->decimal('inInvoice',10,2);//ing total de ventas
            $table->decimal('inPayCash',10,2);//ing abonos en efectivo
            $table->decimal('inPay',10,2);//ing total de abonos
            $table->decimal('inPayEvent', 10,2);//ing abonos por eventos
            $table->decimal('outCash',10,2);//salidas de efectivo
            $table->decimal('cash',10,2);//total efectivo
            $table->decimal('out',10,2);//total salidas efectivo
            $table->decimal('total',10,2);//total efectivo menos salidas
            $table->decimal('sale',10,2);//total de ventas
            $table->decimal('order',10,2);//total de pedidos
            $table->string('codVerifOpen',12);//codigo verif apertura de caja
            $table->string('codVerifClose',12)->nullable();//cod verif cierre de caja
            $table->enum('status', ['ABIERTA', 'CERRADA'])->default('ABIERTA');

            $table->foreignId('user_id')->constrained()->onUpdate('cascade');

            $table->foreignId('userOpen_id')
            ->references('id')
            ->on('users');

            $table->foreignId('userClose_id')
            ->nullable()
            ->references('id')
            ->on('users');

            $table->foreignId('branch_id')->constrained();

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
        Schema::dropIfExists('saleboxes');
    }
};
