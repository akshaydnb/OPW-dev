<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('suppliers')->delete();
        
        \DB::table('suppliers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'DNB Management Applications',
                'billing_branch_id' => 2,
                'shipping_branch_id' => 2,
                'created_at' => '2019-06-27 13:24:39',
                'updated_at' => '2019-06-27 13:26:11',
            ),
        ));
        
        
    }
}