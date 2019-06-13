<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    protected $fillable = [
        'gst_id', 'barcode', 'product_id', 'normal_sales_price', 'discount_sales_price', 'parameterDetail'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function gst()
    {
        return $this->belongsTo('App\Gst');
    }
}
