<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function week()
    {
    	$this->belongsTo('App\Week');
    }
}
