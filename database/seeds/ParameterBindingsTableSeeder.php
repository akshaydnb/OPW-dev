<?php

use Illuminate\Database\Seeder;

class ParameterBindingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parameter_bindings')->delete();
        
        \DB::table('parameter_bindings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 2,
                'parameter_id' => 5,
                'type' => 0,
                'created_at' => '2018-05-15 06:58:52',
                'updated_at' => '2018-05-15 06:58:52',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'parameter_id' => 8,
                'type' => 0,
                'created_at' => '2018-05-15 06:58:52',
                'updated_at' => '2018-05-15 06:58:52',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 2,
                'parameter_id' => 7,
                'type' => 0,
                'created_at' => '2018-05-15 06:58:52',
                'updated_at' => '2018-05-15 06:58:52',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 2,
                'parameter_id' => 2,
                'type' => 0,
                'created_at' => '2018-05-15 06:58:52',
                'updated_at' => '2018-05-15 06:58:52',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 2,
                'parameter_id' => 3,
                'type' => 0,
                'created_at' => '2018-05-15 06:58:52',
                'updated_at' => '2018-05-15 06:58:52',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 2,
                'parameter_id' => 4,
                'type' => 1,
                'created_at' => '2018-05-15 06:58:52',
                'updated_at' => '2018-05-15 06:58:52',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 2,
                'parameter_id' => 6,
                'type' => 2,
                'created_at' => '2018-05-15 06:58:52',
                'updated_at' => '2018-05-15 06:58:52',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 3,
                'parameter_id' => 9,
                'type' => 0,
                'created_at' => '2018-05-17 04:24:43',
                'updated_at' => '2018-05-17 04:24:43',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 4,
                'parameter_id' => 5,
                'type' => 0,
                'created_at' => '2018-05-17 04:25:24',
                'updated_at' => '2018-05-17 04:25:24',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 4,
                'parameter_id' => 7,
                'type' => 0,
                'created_at' => '2018-05-17 04:25:24',
                'updated_at' => '2018-05-17 04:25:24',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 4,
                'parameter_id' => 10,
                'type' => 0,
                'created_at' => '2018-05-17 04:25:42',
                'updated_at' => '2018-05-17 04:25:42',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 4,
                'parameter_id' => 11,
                'type' => 0,
                'created_at' => '2018-05-17 04:25:54',
                'updated_at' => '2018-05-17 04:25:54',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 4,
                'parameter_id' => 12,
                'type' => 0,
                'created_at' => '2018-05-17 04:26:06',
                'updated_at' => '2018-05-17 04:26:06',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 4,
                'parameter_id' => 13,
                'type' => 0,
                'created_at' => '2018-05-17 04:26:16',
                'updated_at' => '2018-05-17 04:26:16',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 4,
                'parameter_id' => 14,
                'type' => 0,
                'created_at' => '2018-05-17 04:26:23',
                'updated_at' => '2018-05-17 04:26:23',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 5,
                'parameter_id' => 5,
                'type' => 0,
                'created_at' => '2018-05-18 09:29:54',
                'updated_at' => '2018-05-18 09:29:54',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 5,
                'parameter_id' => 10,
                'type' => 0,
                'created_at' => '2018-05-18 09:29:54',
                'updated_at' => '2018-05-18 09:29:54',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 5,
                'parameter_id' => 15,
                'type' => 0,
                'created_at' => '2018-05-18 09:34:49',
                'updated_at' => '2018-05-18 09:34:49',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 5,
                'parameter_id' => 16,
                'type' => 0,
                'created_at' => '2018-05-18 09:35:37',
                'updated_at' => '2018-05-18 09:35:37',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 6,
                'parameter_id' => 5,
                'type' => 0,
                'created_at' => '2018-05-18 09:38:00',
                'updated_at' => '2018-05-18 09:38:00',
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 6,
                'parameter_id' => 8,
                'type' => 0,
                'created_at' => '2018-05-18 09:38:00',
                'updated_at' => '2018-05-18 09:38:00',
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 6,
                'parameter_id' => 7,
                'type' => 0,
                'created_at' => '2018-05-18 09:38:00',
                'updated_at' => '2018-05-18 09:38:00',
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 6,
                'parameter_id' => 2,
                'type' => 0,
                'created_at' => '2018-05-18 09:38:00',
                'updated_at' => '2018-05-18 09:38:00',
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 6,
                'parameter_id' => 3,
                'type' => 0,
                'created_at' => '2018-05-18 09:38:00',
                'updated_at' => '2018-05-18 09:38:00',
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 6,
                'parameter_id' => 4,
                'type' => 1,
                'created_at' => '2018-05-18 09:38:00',
                'updated_at' => '2018-05-18 09:38:00',
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 6,
                'parameter_id' => 6,
                'type' => 2,
                'created_at' => '2018-05-18 09:38:00',
                'updated_at' => '2018-05-18 09:38:00',
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 4,
                'parameter_id' => 17,
                'type' => 0,
                'created_at' => '2018-05-18 09:44:52',
                'updated_at' => '2018-05-18 09:44:52',
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 7,
                'parameter_id' => 14,
                'type' => 0,
                'created_at' => '2018-05-21 08:54:50',
                'updated_at' => '2018-05-21 08:54:50',
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 7,
                'parameter_id' => 6,
                'type' => 0,
                'created_at' => '2018-05-21 08:54:50',
                'updated_at' => '2018-05-21 08:54:50',
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => 7,
                'parameter_id' => 5,
                'type' => 0,
                'created_at' => '2018-05-21 08:54:50',
                'updated_at' => '2018-05-21 08:54:50',
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => 7,
                'parameter_id' => 18,
                'type' => 0,
                'created_at' => '2018-05-21 08:54:50',
                'updated_at' => '2018-05-21 08:54:50',
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => 7,
                'parameter_id' => 7,
                'type' => 0,
                'created_at' => '2018-05-21 08:54:50',
                'updated_at' => '2018-05-21 08:54:50',
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => 7,
                'parameter_id' => 10,
                'type' => 0,
                'created_at' => '2018-05-21 08:54:50',
                'updated_at' => '2018-05-21 08:54:50',
            ),
            33 => 
            array (
                'id' => 34,
                'product_id' => 7,
                'parameter_id' => 11,
                'type' => 0,
                'created_at' => '2018-05-21 08:54:50',
                'updated_at' => '2018-05-21 08:54:50',
            ),
            34 => 
            array (
                'id' => 35,
                'product_id' => 7,
                'parameter_id' => 19,
                'type' => 0,
                'created_at' => '2018-05-21 08:56:19',
                'updated_at' => '2018-05-21 08:56:19',
            ),
            35 => 
            array (
                'id' => 36,
                'product_id' => 7,
                'parameter_id' => 20,
                'type' => 0,
                'created_at' => '2018-05-21 08:57:18',
                'updated_at' => '2018-05-21 08:57:18',
            ),
            36 => 
            array (
                'id' => 37,
                'product_id' => 8,
                'parameter_id' => 5,
                'type' => 0,
                'created_at' => '2018-05-22 04:15:25',
                'updated_at' => '2018-05-22 04:15:25',
            ),
            37 => 
            array (
                'id' => 38,
                'product_id' => 8,
                'parameter_id' => 16,
                'type' => 0,
                'created_at' => '2018-05-22 04:15:25',
                'updated_at' => '2018-05-22 04:15:25',
            ),
            38 => 
            array (
                'id' => 39,
                'product_id' => 8,
                'parameter_id' => 21,
                'type' => 0,
                'created_at' => '2018-05-22 04:16:06',
                'updated_at' => '2018-05-22 04:16:06',
            ),
            39 => 
            array (
                'id' => 40,
                'product_id' => 9,
                'parameter_id' => 22,
                'type' => 0,
                'created_at' => '2018-05-22 05:27:20',
                'updated_at' => '2018-05-22 05:27:20',
            ),
            40 => 
            array (
                'id' => 41,
                'product_id' => 10,
                'parameter_id' => 6,
                'type' => 0,
                'created_at' => '2019-06-08 04:20:23',
                'updated_at' => '2019-06-08 04:20:23',
            ),
            41 => 
            array (
                'id' => 42,
                'product_id' => 10,
                'parameter_id' => 5,
                'type' => 0,
                'created_at' => '2019-06-08 04:20:23',
                'updated_at' => '2019-06-08 04:20:23',
            ),
            42 => 
            array (
                'id' => 43,
                'product_id' => 10,
                'parameter_id' => 8,
                'type' => 0,
                'created_at' => '2019-06-08 04:20:23',
                'updated_at' => '2019-06-08 04:20:23',
            ),
            43 => 
            array (
                'id' => 44,
                'product_id' => 10,
                'parameter_id' => 7,
                'type' => 0,
                'created_at' => '2019-06-08 04:20:23',
                'updated_at' => '2019-06-08 04:20:23',
            ),
            44 => 
            array (
                'id' => 45,
                'product_id' => 10,
                'parameter_id' => 2,
                'type' => 0,
                'created_at' => '2019-06-08 04:20:23',
                'updated_at' => '2019-06-08 04:20:23',
            ),
            45 => 
            array (
                'id' => 46,
                'product_id' => 10,
                'parameter_id' => 3,
                'type' => 0,
                'created_at' => '2019-06-08 04:20:23',
                'updated_at' => '2019-06-08 04:20:23',
            ),
            46 => 
            array (
                'id' => 47,
                'product_id' => 10,
                'parameter_id' => 4,
                'type' => 0,
                'created_at' => '2019-06-08 04:20:23',
                'updated_at' => '2019-06-08 04:20:23',
            ),
            47 => 
            array (
                'id' => 48,
                'product_id' => 7,
                'parameter_id' => 23,
                'type' => 0,
                'created_at' => '2019-06-27 05:54:01',
                'updated_at' => '2019-06-27 05:54:01',
            ),
            48 => 
            array (
                'id' => 49,
                'product_id' => 2,
                'parameter_id' => 23,
                'type' => 0,
                'created_at' => '2019-06-27 05:54:01',
                'updated_at' => '2019-06-27 05:54:01',
            ),
            49 => 
            array (
                'id' => 50,
                'product_id' => 4,
                'parameter_id' => 23,
                'type' => 0,
                'created_at' => '2019-06-27 05:54:01',
                'updated_at' => '2019-06-27 05:54:01',
            ),
            50 => 
            array (
                'id' => 51,
                'product_id' => 3,
                'parameter_id' => 23,
                'type' => 0,
                'created_at' => '2019-06-27 05:54:01',
                'updated_at' => '2019-06-27 05:54:01',
            ),
            51 => 
            array (
                'id' => 52,
                'product_id' => 5,
                'parameter_id' => 23,
                'type' => 0,
                'created_at' => '2019-06-27 05:54:01',
                'updated_at' => '2019-06-27 05:54:01',
            ),
            52 => 
            array (
                'id' => 53,
                'product_id' => 6,
                'parameter_id' => 23,
                'type' => 0,
                'created_at' => '2019-06-27 05:54:01',
                'updated_at' => '2019-06-27 05:54:01',
            ),
            53 => 
            array (
                'id' => 54,
                'product_id' => 7,
                'parameter_id' => 24,
                'type' => 0,
                'created_at' => '2019-08-05 05:35:31',
                'updated_at' => '2019-08-05 05:35:31',
            ),
            54 => 
            array (
                'id' => 55,
                'product_id' => 5,
                'parameter_id' => 24,
                'type' => 0,
                'created_at' => '2019-08-05 05:35:31',
                'updated_at' => '2019-08-05 05:35:31',
            ),
            55 => 
            array (
                'id' => 56,
                'product_id' => 10,
                'parameter_id' => 25,
                'type' => 0,
                'created_at' => '2019-08-05 05:35:59',
                'updated_at' => '2019-08-05 05:35:59',
            ),
            56 => 
            array (
                'id' => 57,
                'product_id' => 7,
                'parameter_id' => 25,
                'type' => 0,
                'created_at' => '2019-08-05 05:35:59',
                'updated_at' => '2019-08-05 05:35:59',
            ),
            57 => 
            array (
                'id' => 58,
                'product_id' => 5,
                'parameter_id' => 25,
                'type' => 0,
                'created_at' => '2019-08-05 05:35:59',
                'updated_at' => '2019-08-05 05:35:59',
            ),
            58 => 
            array (
                'id' => 59,
                'product_id' => 10,
                'parameter_id' => 26,
                'type' => 0,
                'created_at' => '2019-08-05 05:37:40',
                'updated_at' => '2019-08-05 05:37:40',
            ),
            59 => 
            array (
                'id' => 60,
                'product_id' => 7,
                'parameter_id' => 26,
                'type' => 0,
                'created_at' => '2019-08-05 05:37:40',
                'updated_at' => '2019-08-05 05:37:40',
            ),
            60 => 
            array (
                'id' => 61,
                'product_id' => 2,
                'parameter_id' => 26,
                'type' => 0,
                'created_at' => '2019-08-05 05:37:40',
                'updated_at' => '2019-08-05 05:37:40',
            ),
            61 => 
            array (
                'id' => 62,
                'product_id' => 4,
                'parameter_id' => 26,
                'type' => 0,
                'created_at' => '2019-08-05 05:37:40',
                'updated_at' => '2019-08-05 05:37:40',
            ),
            62 => 
            array (
                'id' => 63,
                'product_id' => 8,
                'parameter_id' => 26,
                'type' => 0,
                'created_at' => '2019-08-05 05:37:40',
                'updated_at' => '2019-08-05 05:37:40',
            ),
            63 => 
            array (
                'id' => 64,
                'product_id' => 3,
                'parameter_id' => 26,
                'type' => 0,
                'created_at' => '2019-08-05 05:37:40',
                'updated_at' => '2019-08-05 05:37:40',
            ),
            64 => 
            array (
                'id' => 65,
                'product_id' => 9,
                'parameter_id' => 26,
                'type' => 0,
                'created_at' => '2019-08-05 05:37:40',
                'updated_at' => '2019-08-05 05:37:40',
            ),
            65 => 
            array (
                'id' => 66,
                'product_id' => 5,
                'parameter_id' => 26,
                'type' => 0,
                'created_at' => '2019-08-05 05:37:40',
                'updated_at' => '2019-08-05 05:37:40',
            ),
            66 => 
            array (
                'id' => 67,
                'product_id' => 6,
                'parameter_id' => 26,
                'type' => 0,
                'created_at' => '2019-08-05 05:37:40',
                'updated_at' => '2019-08-05 05:37:40',
            ),
        ));
        
        
    }
}