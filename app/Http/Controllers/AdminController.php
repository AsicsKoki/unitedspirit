<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getEditWeeks()
    {
        return view('admin.editweeks');
    }

    public function getEditExperts()
    {
        return view('admin.editexperts');
    }

    public function getEditPartners()
    {
        return view('admin.editpartners');
    }

}
