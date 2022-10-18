<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::unprepared('
            CREATE TRIGGER upd_price_ncpurchase BEFORE INSERT ON ncpurchase_products
            FOR EACH ROW BEGIN
            UPDATE products SET price = (stock * price + NEW.quantity * NEW.price) / (stock + NEW.quantity)
            WHERE products.id = NEW.product_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DROP TRIGGER `upd_price_ncpurchase`');
    }
};
