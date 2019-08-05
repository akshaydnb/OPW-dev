<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(BarcodesTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(ContactPeopleTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(GstsTableSeeder::class);
        $this->call(ParametersTableSeeder::class);
        $this->call(ParameterBindingsTableSeeder::class);
        $this->call(ParameterValuesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
    }
}
