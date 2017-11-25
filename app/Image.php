<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'week_id',
        'path',
    ];

    public function Week()
    {
    	return $this->belongsTo('App\Week');
    }
}
