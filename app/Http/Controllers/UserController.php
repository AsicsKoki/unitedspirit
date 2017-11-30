<?php

namespace App\Http\Controllers;

use App\User;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;

class UserController extends Controller
{
    public function subscribe()
    {
        $sub = new Subscription();
        $sub->save();
        $user = Auth::user();
        // return $user->subscriptions->first();
            \DB::table('user_subscription')->insert([
                'user_id'        => $user->id,
                'subscription_id'  => $sub->id
            ]);
        return redirect()->back();

    }
}
