<?php

namespace App\Http\Controllers;

use App\User as User;
use App\Week;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash as Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    
    public function getChangePassword()
    {
        return view('auth.passwords.change');
    }

    public function postChangePassword(Request $request)
    {
        $request->validate([
            'oldpassword'           => 'required',
            'password'              => 'required',
            'password_confirmation' => 'required',
        ]);
        $user = Auth::user();
        if(Hash::check(Input::get('oldpassword'), $user->password))
        {
            if (!strcmp(Input::get('password'), Input::get('password_confirmation'))){
                $user->password = Hash::make(Input::get('password'));
                $user->save();
                return redirect()->route('home');
            }else{
                return Redirect::back()->withErrors(['error', "Password does not match!"]);
            }
        }else{
             return redirect()->back()->withErrors(['error', 'Wrong old password!']);
        }
    }
    
    public function subscribe()
    {
     //   return $user->weeks->last()->id;
        $sub = new Subscription();
        $sub->save();
        $user = Auth::user();
        $wid = 0;

        //Adding first week when subscribed
        if($user->weeks->last())
        {
            $wid = $user->weeks->last()->id;
        }
        $wid++;
        $week = Week::where('id',$wid)->get();
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
        $user = User::with('weeks')->where('id',  Auth::user()->id)->first();
       // $user = Auth::user()->with('subscriptions')->get();
     //   $wee = $user->with('weeks')->first();
     //   return $wee;
     //   return $user->weeks->contains(1);
     
        // $su = $user[0]->subscriptions[0]->id;
        // return $su;

        $user->subscriptions[0]->pivot->touch();
        $sub = $user::has('subscriptions')->get();
        return $sub;
    
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