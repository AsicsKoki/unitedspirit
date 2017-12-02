<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('home');
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


}
