<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
	protected $fillable = [
        'branch_id', 'full_name', 'mobile_number','whatsapp_number', 'official_email', 'personal_email', 'designation'
    ];

    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }
}
