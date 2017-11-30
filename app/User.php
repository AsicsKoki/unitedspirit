<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 
        'last_name',
        'email', 
        'password',
        'birthdate',
        'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function weeks()
    {
        return $this->belongsToMany('App\Week' , 'user_week');
    }
    
    public function subscriptions()
    {
        return $this->belongsToMany('App\Subscription' , 'user_subscription');
    }
    
}
