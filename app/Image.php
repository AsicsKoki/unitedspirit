<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Week()
    {
    	$this->belongsTo('App\Week');
    }
}
