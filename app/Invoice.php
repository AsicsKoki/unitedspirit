<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Invoice extends Model
{
    protected $fillable = [
        'first_name', 
        'last_name',
        'email',
        'city', 
        'country',
        'zip',
        'area_code',
        'phone',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
