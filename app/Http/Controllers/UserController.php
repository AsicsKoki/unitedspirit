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
use Mail as Mail;
use App\Mail\EmailConfirmation as EmailConfirmation;

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
    
    //treba menjati duration u zavisnosti od subskripcije
    public function subscribe($dur)
    {
     //   return $user->weeks->last()->id;
        $sub = new Subscription();
        $sub->duration = $dur; //ovo menjati
        $sub->save();
        $durat = $sub->duration;
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
        $user->m_week = $wid + $durat/7;
        $user->subscriptions()->attach($sub);
        $user->is_subscribed = 2; // 0 = default not subscribed, 1 = sub expired , 2 active subscription
        $user->save();

         Mail::to($user->email)->send(new EmailConfirmation($user,"Thanks for your payment, $user->first_name $user->last_name!")); 
    
            // \DB::table('user_subscription')->insert([
            //     'user_id'        => $user->id,
            //     'subscription_id'  => $sub->id
            // ]);
        return redirect()->back();


    }

    public function subCheck()
    { 
        $user = User::where('id', Auth::user()->id)->with('subscriptions')->first();
     
        if($user->subscriptions->first())
        {
            $user->subscriptions->first()->pivot->touch();
            $dur = $user->subscriptions[0]->duration;
            

            //  return $user->subscriptions[0]->pivot;
            // return $user->subscriptions->first()->pivot;

            $currdate = $user->subscriptions[0]->pivot->updated_at;
            $startdate = $user->subscriptions[0]->pivot->created_at;
            $eqdate = $currdate->diffInDays($startdate);
            $user->last_s_exp = $startdate->addDays($dur);
            //return $eqdate;

            $wid = 0;

        //  return $user->subscriptions[0];

            if($eqdate>$dur)
            {
                $user->last_s_start = $user->subscriptions[0]->pivot->created_at;
                $user->last_s_exp = $startdate->addDays($dur);
                $user->subscriptions[0]->delete();
                $user->subscriptions[0]->pivot->delete();
                $user->is_subscribed = 1;  // subscription expired
            }
            $user->save();
        }
    }

    public function weekCheck()
    {
        $user = User::where('id', Auth::user()->id)->with('subscriptions')->first();

        
        if($user->weeks->last())
        {
            // if last week, check is'nt needed
            $wid = $user->weeks->last()->id;
            if($wid==52)
            {
                return;
            }

         // return  $eqdate = $pnow->diffInDays($startdate);


            // $now = Carbon::now();
            // $user_w = User::with('weeks')->where('id',  Auth::user()->id)->first();

            $wid++;
           // return $wid;
            if($user->is_subscribed == 2 && $wid<=$user->m_week)
            {
                $startdate = Carbon::parse($user->subscriptions[0]->pivot->created_at);
                $pnow = Carbon::parse($user->subscriptions[0]->pivot->updated_at);
                $week_check = $startdate->addDays(7);
                    while($pnow>=$week_check && $wid<53 && $wid<=$user->m_week)
                    {
                        $week = Week::where('id',$wid)->get();
                        $user->weeks()->attach($week);
                        $week_check->addDays(7);
                        $wid++;
                    }
            }elseif($user->is_subscribed == 1 && $wid<=$user->m_week)
            {
                $week_check = $user->last_s_start;
                $week_check = Carbon::parse($week_check)->addDays(7);
                $exp_sub = Carbon::parse($user->last_s_exp);
                while($week_check<=$exp_sub && $wid<53 && $wid<=$user->m_week)
                {
                    $week = Week::where('id',$wid)->get();
                    $user->weeks()->attach($week);
                    $week_check->addDays(7);
                    $wid++;
                }
            }
        }
    }

    public function getResetPasswordEmail()
    {
        return view('auth.passwords.resetPasswordEmail');
    }

    public function getResetPassword($token)
    {
        return view('auth.passwords.resetPasswordForm', ['token'=> $token]);
    }

    public function sendResetPasswordEmail()
    {
        $user = User::where('email', Input::get('email'))->first();
        $user->token = app('App\Http\Controllers\Auth\RegisterController')->RandomString();
        $user->save();
        Mail::to($user->email)->send(new EmailConfirmation($user,"Welcome to unitedspirit.rs,  $user->first_name $user->last_name. Please verify your account!","emails.resetpassword"));
        \Session::flash('msg', "Registered! Please check your email!" );
        return redirect()->route('home')->with('message', "An email has been sent to your account, please follow instructions to reset your password");
    }

    public function setNewPassword()
    {
        $user = User::where('token', Input::get('token'))->first();
        if (!strcmp(Input::get('password'), Input::get('confirm_password'))){
            $user->password=Hash::make(Input::get('password'));
        }
        return redirect()->route('home')->with('message', 'An email has been sent to your account, please follow instructions to reset your password');
    }

}    