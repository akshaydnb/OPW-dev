<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
	protected $fillable = [
        'owners_id', 'owners_type', 'shop_name','branch_name', 'landline_number', 'address', 'city','state', 'gst_number', 'gst_type'
    ];
    
    public function owners()
    {
        return $this->morphTo();
    }

    public function contactPersons()
    {
        return $this->hasMany('App\ContactPerson');
    }
}
