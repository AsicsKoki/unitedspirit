<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $fillable = [
        'name', 
        'about',
        'exercise', 
        'self_realization',
        'wisdome_title',
        'healthy_mind_title',

    ];

    public function admins()
    {
    	return $this->belongsToMany('App\Admin');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_week');
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
