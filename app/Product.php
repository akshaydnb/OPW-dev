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

    public function addParameterBinding($parameters, $grid_column, $grid_row){
        if(isset($parameters) && count($parameters) > 0){
            foreach ($parameters as $parameter) {
                $type = 0;
                if($parameter == $grid_column)
                    $type = 1;
                else if($parameter == $grid_row)      
                    $type = 2;          
                $this->ParameterBinding()->create([
                    'parameter_id' => $parameter,
                    'type' => $type,
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
