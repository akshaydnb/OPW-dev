<?php

use Illuminate\Database\Seeder;

class GstsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gsts')->delete();
        
        \DB::table('gsts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'hsn_code' => '9000013',
                'gst_percentage' => 12.0,
                'products' => '2#6#',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-11 05:56:43',
                'updated_at' => '2019-06-12 13:35:30',
            ),
            1 => 
            array (
                'id' => 2,
                'hsn_code' => '9000014',
                'gst_percentage' => 5.0,
                'products' => '5#',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-11 05:57:55',
                'updated_at' => '2019-06-12 13:35:15',
            ),
            2 => 
            array (
                'id' => 3,
                'hsn_code' => '9000015',
                'gst_percentage' => 28.0,
                'products' => '9#',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-11 06:04:26',
                'updated_at' => '2019-06-12 13:35:10',
            ),
            3 => 
            array (
                'id' => 4,
                'hsn_code' => '9000012',
                'gst_percentage' => 5.0,
                'products' => '8#',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-29 12:58:21',
                'updated_at' => '2019-06-12 13:35:03',
            ),
            4 => 
            array (
                'id' => 5,
                'hsn_code' => '9004',
                'gst_percentage' => 12.0,
                'products' => '10#7#',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 13:12:35',
                'updated_at' => '2019-06-12 13:34:21',
            ),
        ));
        
        
    }
}