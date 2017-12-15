<?php

namespace App\Http\Controllers;

use App\Expert as Expert;
use App\Contact as Contact;
use App\Partner as Partner;
use App\Mail\MailTemplate as MailTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Mail\Mailer;
use Mail;
use App\User as User;


class HomeController extends Controller
{
    
    public function index()
    {
        $experts = Expert::all();
        $partners = Partner::all();
        return view('home',['experts' => $experts, 'partners' => $partners]);
    }

    public function homeOld()
    {
        return view('home_old');
    }

    public function get404()
    {
        return view('404');
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }

    public function sendContactMail()
    {
        $contact = new Contact;
        $contact->name = Input::get('contact_name');
        $contact->email = Input::get('contact_email');
        $contact->text = Input::get('text');

        Mail::to('gaspard.dm@hotmail.fr')->send(new MailTemplate($contact)); //gaspard.dm@hotmail.fr

        return redirect()->back();
    }

    public function confirmUser($token)
    {
        $user = User::where('token', $token)->first();
        if ($user) {
            $user->active = 1;
            $user->save();
            return redirect()->route('home')->with('success','It is successMessage');
        }
        
        return view('auth.register')->withErrors(['error', 'Tokens do not match!']);
    }


}
