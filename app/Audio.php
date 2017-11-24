<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    public function week()
    {
    	return $this->belongsTo('App\Week');
    }
}
