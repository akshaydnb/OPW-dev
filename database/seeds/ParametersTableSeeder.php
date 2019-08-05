<?php

use Illuminate\Database\Seeder;

class ParametersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parameters')->delete();
        
        \DB::table('parameters')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Model Number',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-15 06:08:36',
                'updated_at' => '2019-07-31 08:45:13',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Shape',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-15 06:08:48',
                'updated_at' => '2018-05-15 06:08:48',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Size',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-15 06:08:56',
                'updated_at' => '2018-05-15 06:08:56',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Company',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-15 06:07:35',
                'updated_at' => '2018-05-15 06:07:35',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Colour',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-15 06:10:05',
                'updated_at' => '2018-05-15 06:10:05',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'Material',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-15 06:11:55',
                'updated_at' => '2018-05-15 06:11:55',
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'Gender',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-15 06:58:28',
                'updated_at' => '2018-05-15 06:58:28',
            ),
            7 => 
            array (
                'id' => 9,
                'title' => 'Number',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-17 04:24:43',
                'updated_at' => '2018-05-17 04:24:43',
            ),
            8 => 
            array (
                'id' => 10,
                'title' => 'Product',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-17 04:25:42',
                'updated_at' => '2018-05-17 04:25:42',
            ),
            9 => 
            array (
                'id' => 11,
                'title' => 'Type of lense',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-17 04:25:54',
                'updated_at' => '2018-05-17 04:25:54',
            ),
            10 => 
            array (
                'id' => 12,
                'title' => 'Index',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-17 04:26:06',
                'updated_at' => '2018-05-17 04:26:06',
            ),
            11 => 
            array (
                'id' => 13,
                'title' => 'Diameter',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-17 04:26:16',
                'updated_at' => '2018-05-17 04:26:16',
            ),
            12 => 
            array (
                'id' => 14,
                'title' => 'Axis',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-17 04:26:23',
                'updated_at' => '2018-05-17 04:26:23',
            ),
            13 => 
            array (
                'id' => 15,
                'title' => 'Variant',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-18 09:34:49',
                'updated_at' => '2018-05-18 09:34:49',
            ),
            14 => 
            array (
                'id' => 16,
                'title' => 'Number of pieces',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-18 09:35:37',
                'updated_at' => '2018-05-18 09:35:37',
            ),
            15 => 
            array (
                'id' => 17,
                'title' => 'Coating',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-18 09:44:52',
                'updated_at' => '2018-05-18 09:44:52',
            ),
            16 => 
            array (
                'id' => 18,
                'title' => 'Design',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-18 10:06:29',
                'updated_at' => '2018-05-18 10:06:29',
            ),
            17 => 
            array (
                'id' => 19,
                'title' => 'Number Type',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-21 08:56:19',
                'updated_at' => '2018-05-21 08:56:19',
            ),
            18 => 
            array (
                'id' => 20,
                'title' => 'Curv',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-21 08:57:18',
                'updated_at' => '2018-05-21 08:57:18',
            ),
            19 => 
            array (
                'id' => 21,
                'title' => 'Product Name',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-22 04:16:06',
                'updated_at' => '2019-06-27 05:52:55',
            ),
            20 => 
            array (
                'id' => 22,
                'title' => 'Description',
                'for_type' => 2,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-22 05:27:20',
                'updated_at' => '2019-07-24 06:23:26',
            ),
            21 => 
            array (
                'id' => 23,
                'title' => 'Tray No.',
                'for_type' => 2,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-27 05:54:01',
                'updated_at' => '2019-07-31 05:39:30',
            ),
            22 => 
            array (
                'id' => 24,
                'title' => 'Expiry Date',
                'for_type' => 1,
                'is_date' => 1,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-08-05 05:35:31',
                'updated_at' => '2019-08-05 05:35:31',
            ),
            23 => 
            array (
                'id' => 25,
                'title' => 'Manufacturing Date',
                'for_type' => 1,
                'is_date' => 1,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-08-05 05:35:59',
                'updated_at' => '2019-08-05 05:35:59',
            ),
            24 => 
            array (
                'id' => 26,
                'title' => 'Batch Number',
                'for_type' => 1,
                'is_date' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-08-05 05:37:39',
                'updated_at' => '2019-08-05 05:37:39',
            ),
        ));
        
        
    }
}