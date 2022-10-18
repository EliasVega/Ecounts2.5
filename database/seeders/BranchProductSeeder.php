<?php

namespace Database\Seeders;

use App\Models\Branch_product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branchs = [
            [
                'branch_id' => 1,
                'product_id' => 1,
                'stock' => 0,
                'order_product' => 0,
            ],
            [
                'branch_id' => 1,
                'product_id' => 2,
                'stock' => 0,
                'order_product' => 0,
            ],
            [
                'branch_id' => 1,
                'product_id' => 3,
                'stock' => 0,
                'order_product' => 0,
            ],
            [
                'branch_id' => 1,
                'product_id' => 4,
                'stock' => 0,
                'order_product' => 0,
            ],
            [
                'branch_id' => 1,
                'product_id' => 5,
                'stock' => 0,
                'order_product' => 0,
            ],
            [
                'branch_id' => 1,
                'product_id' => 6,
                'stock' => 0,
                'order_product' => 0,
            ],
        ];
        foreach ($branchs as $bra) {
            Branch_product::create($bra);
        }
    }
}
