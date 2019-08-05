<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Best Optical',
                'billing_branch_id' => 1,
                'shipping_branch_id' => 1,
                'created_at' => '2019-06-27 06:37:39',
                'updated_at' => '2019-06-27 12:03:35',
            ),
        ));
        
        
    }
}