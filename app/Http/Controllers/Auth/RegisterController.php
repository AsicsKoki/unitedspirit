<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth as Auth;
use Illuminate\Support\Facades\Hash as Hash;
use App\Mail\EmailConfirmation as EmailConfirmation;
use Illuminate\Mail\Mailer;
use Mail;
use Illuminate\Routing\Redirector;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getUserRegister()
    {
        return view('auth.register');
    }


    
    public function postUserRegister(Request $request)
    {
        $request->validate([
        'first_name'            => 'required',
        'last_name'             => 'required',
        'email'                 => 'required',
        'birthdate'             => 'required',
        'phone'                 => 'required',
        'password'              => 'required',
        'password_confirmation' => 'required',
    ]);
    if(User::where('email', '=', Input::get('email'))->count() > 0) {
        return redirect()->back()->withErrors(['error', 'User with this email already exists!']);
    }
    if (!strcmp(Input::get('password'), Input::get('password_confirmation') )) {
        $key = app('App\Http\Controllers\Auth\RegisterController')->RandomString();
        $user = new User(Input::all());
        $user->password = Hash::make(Input::get('password'));
        $user->token = $key;
        $user->active = 0;
        $user->save();

        Mail::to($user->email)->send(new EmailConfirmation($user,"Welcome to unitedspirit.com, $user->first_name $user->last_name. Please verify your account!","emails.confirmation")); 

      //  return redirect()->back();
        return redirect()->route('getUserLogin');
    } else {
        return redirect()->back()->withErrors(['message', "Password does not match!"]);
        }


    }

    
    public function confirmUser($token)
    {
        $user = User::where('token', $token)->first();
        if ($user) {
            $user->active = 1;
            $user->save();
            return redirect::route('home')->with('message', "You've just confirmed your account!");
        }
        
        return view('auth.register')->withErrors(['message', 'Tokens do not match!']);
    }

    public function RandomString()
    {
     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     $charactersLength = strlen($characters);
     $randomString = '';
     for ($i = 0; $i < $charactersLength ; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
     }
    return $randomString;
    }
    
}
