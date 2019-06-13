<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'billing_branch_id', 'shipping_branch_id'
    ];

    public function branches()
    {
        return $this->morphMany('App\Branch', 'owners');
    }
}
