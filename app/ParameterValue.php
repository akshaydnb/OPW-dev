<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParameterValue extends Model
{
    protected $fillable = [
        'parameter_id', 'value'
    ];

    public function parameter()
    {
        return $this->belongsTo('App\Parameter');
    }
}
