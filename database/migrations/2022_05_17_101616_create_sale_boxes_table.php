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
        Schema::create('sale_boxes', function (Blueprint $table) {
            $table->id();

            $table->decimal('cash_box',20,2);//inicio efectivo
            $table->decimal('in_order_cash',20,2);//ing pedidos efectivo
            $table->decimal('in_order',20,2);//ing total de pedidos
            $table->decimal('in_invoice_cash',20,2);//ing ventas efectivo
            $table->decimal('in_invoice',20,2);//ing total de ventas
            $table->decimal('in_ndinvoice_cash',20,2);//ing nota debito efectivo
            $table->decimal('in_ndinvoice',20,2); //ing total notas debito
            $table->decimal('out_purchase_cash',20,2);//salida efectivo compras
            $table->decimal('out_purchase',20,2);//salida total compras
            $table->decimal('in_pay_cash',20,2);//ing abonos en efectivo
            $table->decimal('in_pay',20,2);//ing total de abonos
            $table->decimal('in_advance', 20,2);//ing abonos por avances
            $table->decimal('out_payment',20,2);//total pagos
            $table->decimal('out_cash',20,2);//salidas de efectivo
            $table->decimal('cash',20,2);//total efectivo
            $table->decimal('out',20,2);//total salidas efectivo
            $table->decimal('total',20,2);//total efectivo menos salidas
            $table->decimal('sale',20,2);//total de ventas
            $table->decimal('order',20,2);//total de pedidos
            $table->decimal('purchase', 20,2);//total compras
            $table->string('verification_code_open',12);//codigo verif apertura de caja
            $table->string('verification_code_close',12)->nullable();//cod verif cierre de caja
            $table->enum('status', ['open', 'close'])->default('open');

            $table->foreignId('user_id')->constrained()->onUpdate('cascade');

            $table->foreignId('user_open_id')
            ->references('id')
            ->on('users');

            $table->foreignId('user_close_id')
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
        Schema::dropIfExists('sale_boxes');
    }
};
