<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gst extends Model
{
    protected $fillable = [
        'hsn_code', 'gst_percentage', 'products'
    ];

    public function barcodes()
    {
        return $this->hasMany('App\Barcode');
    }
}
