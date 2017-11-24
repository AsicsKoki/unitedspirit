<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    public function admins()
    {
    	$this->belongsToMany('App\Admin');
    }

    public function videos()
    {
    	$this->hasMany('App\Video');
    }

    public function audios()
    {
    	$this->hasMany('App\Audio');
    }

    public function documents()
    {
    	$this->hasMany('App\Document');
    }

    public function images()
    {
    	$this->hasMany('App\Image');
    }
}
