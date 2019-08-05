<?php

use Illuminate\Database\Seeder;

class ContactPeopleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_people')->delete();
        
        \DB::table('contact_people')->insert(array (
            0 => 
            array (
                'id' => 1,
                'branch_id' => 1,
                'full_name' => 'Akshay Patel',
                'mobile_number' => '9574597876',
                'whatsapp_number' => '9574597876',
                'official_email' => 'akshay.makasana@dnb-ma.com',
                'personal_email' => NULL,
                'designation' => 'Manager',
                'created_at' => '2019-06-27 06:37:39',
                'updated_at' => '2019-06-27 06:37:39',
            ),
            1 => 
            array (
                'id' => 2,
                'branch_id' => 2,
                'full_name' => 'Akshay Patel',
                'mobile_number' => '9574597876',
                'whatsapp_number' => '9574597876',
                'official_email' => 'hjaduger@gmail.com',
                'personal_email' => 'hjaduger@gmail.com',
                'designation' => 'Sales Manager',
                'created_at' => '2019-06-27 13:24:39',
                'updated_at' => '2019-06-27 13:24:39',
            ),
        ));
        
        
    }
}