<?php

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('branches')->delete();
        
        \DB::table('branches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'owners_id' => 1,
                'owners_type' => 'App\\Customer',
                'shop_name' => 'Best Opticals',
                'branch_name' => 'Mavadi',
                'landline_number' => '9574597876',
                'address' => 'Mavadi chowck',
                'city' => 'Rajkot',
                'state' => 'Gujarat',
                'gst_number' => '41234f53sdf',
                'gst_type' => 1,
                'status' => 1,
                'created_at' => '2019-06-27 06:37:39',
                'updated_at' => '2019-08-01 13:24:59',
            ),
            1 => 
            array (
                'id' => 2,
                'owners_id' => 1,
                'owners_type' => 'App\\Supplier',
                'shop_name' => 'DNB MA',
                'branch_name' => 'Banglore',
                'landline_number' => '9574597876',
                'address' => 'Electronic city',
                'city' => 'Bangalore South',
                'state' => 'Karnataka',
                'gst_number' => '4542df1sa4f5',
                'gst_type' => 1,
                'status' => 1,
                'created_at' => '2019-06-27 13:24:39',
                'updated_at' => '2019-06-27 13:24:39',
            ),
        ));
        
        
    }
}