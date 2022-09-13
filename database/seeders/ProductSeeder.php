<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();

        $product->category_id = 1;
        $product->code = '2301';
        $product->name = 'CABLE DUPLEX #12';
        $product->price = 15000;
        $product->salePrice = 18000;
        $product->stock = 0;
        $product->status = 1;
        $product->image = 'noimagen.jpg';

        $product->save();

        $product = new Product();

        $product->category_id = 2;
        $product->code = '2302';
        $product->name = 'Taladro Electrico MK';
        $product->price = 200000;
        $product->salePrice = 250000;
        $product->stock = 0;
        $product->status = 1;
        $product->image = 'noimagen.jpg';

        $product->save();

        $product = new Product();

        $product->category_id = 2;
        $product->code = '2303';
        $product->name = 'Pulidora SWITH';
        $product->price = 150000;
        $product->salePrice = 200000;
        $product->stock = 0;
        $product->status = 1;
        $product->image = 'noimagen.jpg';

        $product->save();

        $product = new Product();

        $product->category_id = 3;
        $product->code = '2304';
        $product->name = 'Lenovo 360';
        $product->price = 1500000;
        $product->salePrice = 2000000;
        $product->stock = 0;
        $product->status = 1;
        $product->image = 'noimagen.jpg';

        $product->save();

        $product = new Product();

        $product->category_id = 3;
        $product->code = '2305';
        $product->name = 'ASUS';
        $product->price = 1900000;
        $product->salePrice = 2400000;
        $product->stock = 0;
        $product->status = 1;
        $product->image = 'noimagen.jpg';

        $product->save();

        $product = new Product();

        $product->category_id = 4;
        $product->code = '2306';
        $product->name = 'SANSUMG';
        $product->price = 1500000;
        $product->salePrice = 2000000;
        $product->stock = 0;
        $product->status = 1;
        $product->image = 'noimagen.jpg';

        $product->save();
    }
}
