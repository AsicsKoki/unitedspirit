<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $fillable = [
        'week_id',
        'path',
    ];
    
    public function week()
    {
    	return $this->belongsTo('App\Week');
    }
}
