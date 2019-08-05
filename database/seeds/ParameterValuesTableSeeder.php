<?php

use Illuminate\Database\Seeder;

class ParameterValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parameter_values')->delete();
        
        \DB::table('parameter_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parameter_id' => 6,
                'value' => 'Red',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-23 11:38:58',
                'updated_at' => '2018-05-23 11:38:58',
            ),
            1 => 
            array (
                'id' => 2,
                'parameter_id' => 6,
                'value' => 'Blue',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-23 11:39:08',
                'updated_at' => '2018-05-23 11:39:08',
            ),
            2 => 
            array (
                'id' => 3,
                'parameter_id' => 6,
                'value' => 'Green',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-23 11:39:17',
                'updated_at' => '2018-05-23 11:39:17',
            ),
            3 => 
            array (
                'id' => 4,
                'parameter_id' => 6,
                'value' => 'Black',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-23 11:39:27',
                'updated_at' => '2018-05-23 11:39:27',
            ),
            4 => 
            array (
                'id' => 5,
                'parameter_id' => 9,
                'value' => '1',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-29 12:56:13',
                'updated_at' => '2018-05-29 12:56:13',
            ),
            5 => 
            array (
                'id' => 6,
                'parameter_id' => 8,
                'value' => 'Male',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-29 12:58:21',
                'updated_at' => '2018-05-29 12:58:21',
            ),
            6 => 
            array (
                'id' => 7,
                'parameter_id' => 7,
                'value' => 'Plastic',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-29 12:58:21',
                'updated_at' => '2018-05-29 12:58:21',
            ),
            7 => 
            array (
                'id' => 8,
                'parameter_id' => 2,
                'value' => 'MTVPW10',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-29 12:58:21',
                'updated_at' => '2018-05-29 12:58:21',
            ),
            8 => 
            array (
                'id' => 9,
                'parameter_id' => 3,
                'value' => 'Round',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-29 12:58:21',
                'updated_at' => '2018-05-29 12:58:21',
            ),
            9 => 
            array (
                'id' => 10,
                'parameter_id' => 4,
                'value' => '10',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-29 12:58:21',
                'updated_at' => '2018-05-29 12:58:21',
            ),
            10 => 
            array (
                'id' => 11,
                'parameter_id' => 6,
                'value' => 'White',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-29 12:58:21',
                'updated_at' => '2018-05-29 12:58:21',
            ),
            11 => 
            array (
                'id' => 12,
                'parameter_id' => 5,
                'value' => 'MTV',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-05-29 12:58:21',
                'updated_at' => '2018-05-29 12:58:21',
            ),
            12 => 
            array (
                'id' => 13,
                'parameter_id' => 8,
                'value' => 'Female',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:07:41',
                'updated_at' => '2019-06-12 09:07:41',
            ),
            13 => 
            array (
                'id' => 14,
                'parameter_id' => 8,
                'value' => 'Unisex',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:08:20',
                'updated_at' => '2019-06-12 09:08:20',
            ),
            14 => 
            array (
                'id' => 15,
                'parameter_id' => 8,
                'value' => 'Unisex',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:03',
                'updated_at' => '2019-06-12 09:43:03',
            ),
            15 => 
            array (
                'id' => 16,
                'parameter_id' => 5,
                'value' => 'MTV',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:03',
                'updated_at' => '2019-06-12 09:43:03',
            ),
            16 => 
            array (
                'id' => 17,
                'parameter_id' => 6,
                'value' => 'White',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:03',
                'updated_at' => '2019-06-12 09:43:03',
            ),
            17 => 
            array (
                'id' => 18,
                'parameter_id' => 4,
                'value' => '10',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:03',
                'updated_at' => '2019-06-12 09:43:03',
            ),
            18 => 
            array (
                'id' => 19,
                'parameter_id' => 2,
                'value' => 'MTVPW10',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:03',
                'updated_at' => '2019-06-12 09:43:03',
            ),
            19 => 
            array (
                'id' => 20,
                'parameter_id' => 7,
                'value' => 'Plastic',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:03',
                'updated_at' => '2019-06-12 09:43:03',
            ),
            20 => 
            array (
                'id' => 21,
                'parameter_id' => 3,
                'value' => 'Round',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:03',
                'updated_at' => '2019-06-12 09:43:03',
            ),
            21 => 
            array (
                'id' => 22,
                'parameter_id' => 8,
                'value' => 'Unisex',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:15',
                'updated_at' => '2019-06-12 09:43:15',
            ),
            22 => 
            array (
                'id' => 23,
                'parameter_id' => 5,
                'value' => 'MTV',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:15',
                'updated_at' => '2019-06-12 09:43:15',
            ),
            23 => 
            array (
                'id' => 24,
                'parameter_id' => 6,
                'value' => 'White',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:15',
                'updated_at' => '2019-06-12 09:43:15',
            ),
            24 => 
            array (
                'id' => 25,
                'parameter_id' => 4,
                'value' => '10',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:15',
                'updated_at' => '2019-06-12 09:43:15',
            ),
            25 => 
            array (
                'id' => 26,
                'parameter_id' => 2,
                'value' => 'MTVPW10',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:15',
                'updated_at' => '2019-06-12 09:43:15',
            ),
            26 => 
            array (
                'id' => 27,
                'parameter_id' => 7,
                'value' => 'Plastic',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:15',
                'updated_at' => '2019-06-12 09:43:15',
            ),
            27 => 
            array (
                'id' => 28,
                'parameter_id' => 3,
                'value' => 'Round',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:43:15',
                'updated_at' => '2019-06-12 09:43:15',
            ),
            28 => 
            array (
                'id' => 29,
                'parameter_id' => 8,
                'value' => 'Unisex',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:44:02',
                'updated_at' => '2019-06-12 09:44:02',
            ),
            29 => 
            array (
                'id' => 30,
                'parameter_id' => 5,
                'value' => 'MTV',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:44:02',
                'updated_at' => '2019-06-12 09:44:02',
            ),
            30 => 
            array (
                'id' => 31,
                'parameter_id' => 6,
                'value' => 'White',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:44:02',
                'updated_at' => '2019-06-12 09:44:02',
            ),
            31 => 
            array (
                'id' => 32,
                'parameter_id' => 4,
                'value' => '10',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:44:03',
                'updated_at' => '2019-06-12 09:44:03',
            ),
            32 => 
            array (
                'id' => 33,
                'parameter_id' => 2,
                'value' => 'MTVPW10',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:44:03',
                'updated_at' => '2019-06-12 09:44:03',
            ),
            33 => 
            array (
                'id' => 34,
                'parameter_id' => 7,
                'value' => 'Plastic',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:44:03',
                'updated_at' => '2019-06-12 09:44:03',
            ),
            34 => 
            array (
                'id' => 35,
                'parameter_id' => 3,
                'value' => 'Round',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-06-12 09:44:03',
                'updated_at' => '2019-06-12 09:44:03',
            ),
        ));
        
        
    }
}