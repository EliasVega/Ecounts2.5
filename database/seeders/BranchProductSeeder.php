<?php

namespace Database\Seeders;

use App\Models\BranchProduct;
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
        $branchProduct = new BranchProduct();

        $branchProduct->branch_id = 1;
        $branchProduct->product_id = 1;
        $branchProduct->stock = 0;
        $branchProduct->orderProduct = 0;

        $branchProduct->save();

        $branchProduct = new BranchProduct();

        $branchProduct->branch_id = 1;
        $branchProduct->product_id = 2;
        $branchProduct->stock = 0;
        $branchProduct->orderProduct = 0;

        $branchProduct->save();

        $branchProduct = new BranchProduct();

        $branchProduct->branch_id = 1;
        $branchProduct->product_id = 3;
        $branchProduct->stock = 0;
        $branchProduct->orderProduct = 0;

        $branchProduct->save();

        $branchProduct = new BranchProduct();

        $branchProduct->branch_id = 1;
        $branchProduct->product_id = 4;
        $branchProduct->stock = 0;
        $branchProduct->orderProduct = 0;

        $branchProduct->save();

        $branchProduct = new BranchProduct();

        $branchProduct->branch_id = 1;
        $branchProduct->product_id = 5;
        $branchProduct->stock = 0;
        $branchProduct->orderProduct = 0;

        $branchProduct->save();

        $branchProduct = new BranchProduct();

        $branchProduct->branch_id = 1;
        $branchProduct->product_id = 6;
        $branchProduct->stock = 0;
        $branchProduct->orderProduct = 0;

        $branchProduct->save();
    }
}
