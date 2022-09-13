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
        Schema::create('product_branches', function (Blueprint $table) {
            $table->id();

            $table->integer('quantity');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained()->onUpdate('cascade');
            $table->foreignId('branch_id')->constrained()->onUpdate('cascade');
            $table->foreignId('transfer_id')->constrained()->onUpdate('cascade');
            $table->foreignId('originBranch_id')
            ->references('id')
            ->on('branches')
            ->onUpdate('cascade');


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
        Schema::dropIfExists('product_branches');
    }
};
