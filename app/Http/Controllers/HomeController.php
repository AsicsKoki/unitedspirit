<?php

namespace App\Http\Controllers;

use App\Expert as Expert;
use App\Partner as Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


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

        Mail::to('unitedspirit@gmail.com')->send(new MailTemplate($contact));
        return $contact;
    }


}
