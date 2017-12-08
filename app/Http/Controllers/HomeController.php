<?php

namespace App\Http\Controllers;

use App\Expert as Expert;
use App\Partner as Partner;
use Illuminate\Http\Request;

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


}
