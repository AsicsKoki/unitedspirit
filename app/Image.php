<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Week()
    {
    	return $this->belongsTo('App\Week');
    }
}
