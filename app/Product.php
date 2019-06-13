<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    protected $fillable = [
        'title', 'status'
    ];

    public function parameterBindings()
    {
        return $this->hasMany('App\ParameterBinding');
    }

    public function barcodes()
    {
        return $this->hasMany('App\Barcode');
    }
//    protected static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope('active', function (Builder $builder) {
//            $builder->where('status', '=', 1);
//        });
//    }
}
