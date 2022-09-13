<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(IndicatorSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(MunicipalitySeeder::class);
        $this->call(DocumentSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(LiabilitySeeder::class);
        $this->call(OrganizationSeeder::class);
        $this->call(TaxSeeder::class);
        $this->call(RegimeSeeder::class);
        $this->call(BankSeeder::class);
        $this->call(CardSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(PaymentFormSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(RetentionSeeder::class);
        $this->call(BranchProductSeeder::class);
        $this->call(CustomerSeeder::class);
    }
}
