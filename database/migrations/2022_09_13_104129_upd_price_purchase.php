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
            CREATE TRIGGER upd_price_purchase BEFORE INSERT ON product_purchases
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
        DB::unprepared('DROP TRIGGER `upd_price_purchase`');
    }
};
