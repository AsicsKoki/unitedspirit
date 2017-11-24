<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    public function admins()
    {
    	return $this->belongsToMany('App\Admin');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function videos()
    {
    	return $this->hasMany('App\Video');
    }

    public function audios()
    {
    	return $this->hasMany('App\Audio');
    }

    public function documents()
    {
    	return $this->hasMany('App\Document');
    }

    public function images()
    {
    	return $this->hasMany('App\Image');
    }
}
