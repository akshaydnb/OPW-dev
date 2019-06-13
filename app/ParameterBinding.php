<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParameterBinding extends Model
{
    protected $fillable = [
        'product_id', 'parameter_id', 'type'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function parameter()
    {
        return $this->belongsTo('App\Parameter');
    }
}
