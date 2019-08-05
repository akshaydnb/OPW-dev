<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Frames',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-15 06:58:52',
                'updated_at' => '2019-08-05 05:33:03',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Reading Glass',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-17 04:24:26',
                'updated_at' => '2019-07-31 04:55:48',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Lenses',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-17 04:25:24',
                'updated_at' => '2018-05-17 04:25:24',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Solution',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-18 09:29:54',
                'updated_at' => '2018-05-18 09:29:54',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Sun Glass',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-18 09:38:00',
                'updated_at' => '2018-05-18 09:38:00',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'Contact Lenses',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-21 08:54:50',
                'updated_at' => '2018-05-21 08:54:50',
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'Other products',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-22 04:15:25',
                'updated_at' => '2019-06-08 04:17:25',
            ),
            7 => 
            array (
                'id' => 9,
                'title' => 'Repair',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-22 04:24:01',
                'updated_at' => '2018-05-22 04:24:01',
            ),
            8 => 
            array (
                'id' => 10,
                'title' => 'Computer Glass',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-08 04:20:23',
                'updated_at' => '2019-06-08 04:20:23',
            ),
        ));
        
        
    }
}