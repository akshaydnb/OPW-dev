<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    protected $fillable = [
        'title', 'status', 'for_type', 'is_date'
    ];

    public function getForTypeAttribute($value)
    {
        return $value == 2 ? "Only Sales" : "Purchase And Sales";
    }

    public function parameterValues()
    {
        return $this->hasMany('App\ParameterValue');
    }

    public function parameterBindings()
    {
        return $this->hasMany('App\ParameterBinding');
    }

    public function addParameterBinding($products){
        if(isset($products) && count($products) > 0){
            foreach ($products as $product) {
                $this->parameterBindings()->create([
                    'product_id' => $product
                ]);
            }
        }
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
