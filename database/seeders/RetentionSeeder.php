<?php

namespace Database\Seeders;

use App\Models\Retention;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RetentionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $retention = new Retention();
        $retention->porcentage = 0.0;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 0.1;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 0.5;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 1;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 1.5;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 2;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 2.5;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 3;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 3.5;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 4;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 5;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 6;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 7;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 10;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 11;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 15;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 20;
        $retention->base = 0.0;
        $retention->save();

        $retention = new Retention();
        $retention->porcentage = 33;
        $retention->base = 0.0;
        $retention->save();
    }
}
