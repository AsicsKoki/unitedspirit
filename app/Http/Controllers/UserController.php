<?php

namespace App\Http\Controllers;

use App\User;
use App\Week;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function subscribe()
    {
        $sub = new Subscription();
        $sub->save();
        $user = Auth::user();

        //Adding first week when subscribed
        $week = Week::where('id',1)->get();
        $user->weeks()->attach($week);

        $user->subscriptions()->attach($sub);
    
            // \DB::table('user_subscription')->insert([
            //     'user_id'        => $user->id,
            //     'subscription_id'  => $sub->id
            // ]);
        return redirect()->back();


    }

    public function subCheck()
    { 
        $user = Auth::user();
        $user->subscriptions[0]->pivot->touch();
    
        $startdate = $user->subscriptions[0]->pivot->updated_at;
        $currdate = $user->subscriptions[0]->pivot->created_at;
        $eqdate = $currdate->diffInDays($startdate);

        $week_check = $currdate;
        
        $dur = $user->subscriptions[0]->duration;
        $week_check->addDays($dur); 
        $w = 0;

        $now = Carbon::now();
        return $user->subscriptions[0];
        
        if($eqdate>$dur)
        {
            $user->subscriptions[0]->delete();
        }elseif($week_check>$now){
            $week_check->addDays($dur);  //editovati da bude polje iz baze   
            $w++;
            $week = Week::where('id',$w)->get();
            $user->weeks()->attach($week);
        }
        


        
    }
}    