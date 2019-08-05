<?php

use Illuminate\Database\Seeder;

class BarcodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barcodes')->delete();
        
        \DB::table('barcodes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'gst_id' => 1,
                'product_id' => 3,
                'barcode' => 'RG001',
                'normal_sales_price' => 1000.0,
                'discount_sales_price' => 800.0,
                'parameterDetail' => '{"9":{"value":"1","id":5}}',
                'deleted_at' => NULL,
                'created_at' => '2018-05-29 12:56:13',
                'updated_at' => '2018-05-29 12:56:13',
            ),
            1 => 
            array (
                'id' => 2,
                'gst_id' => 4,
                'product_id' => 2,
                'barcode' => 'FR001',
                'normal_sales_price' => 500.0,
                'discount_sales_price' => 450.0,
                'parameterDetail' => '{"8":{"value":"Unisex","id":29},"5":{"value":"MTV","id":30},"6":{"value":"White","id":31},"4":{"value":"10","id":32},"2":{"value":"MTVPW10","id":33},"7":{"value":"Plastic","id":34},"3":{"value":"Round","id":35}}',
                'deleted_at' => NULL,
                'created_at' => '2018-05-29 12:58:21',
                'updated_at' => '2019-06-12 09:44:03',
            ),
        ));
        
        
    }
}