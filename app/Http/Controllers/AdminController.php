<?php

namespace App\Http\Controllers;

use App\Expert as Expert;
use App\Partner as Partner;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function getEditWeeks()
    {
        return view('admin.editweeks');
    }

    public function getEditExperts()
    {
        $experts = Expert::all();
        return view('admin.editexperts',['experts' => $experts]);
    }

    public function getEditPartners()
    {
        $partners = Partner::all();
        return view('admin.editpartners',['partners' => $partners]);
    }

    public function expertEdit(Request $request)
    {
        // get current time and append the upload file extension to it,
        // then put that name to $photoName variable.
        $photoName = time().'.'.$request->photo->getClientOriginalExtension();
        /*
            talk the select file and move it public directory and make avatars
            folder if doesn't exsit then give it that unique name.
        */
        $expert = Expert::where('id', Input::get('eid'))->first();
        $request->photo->move(public_path('img'), $photoName);
        if(!isset($expert->path))
        {
        $expert->path = '/img/' . $photoName;
        $expert->title = $request->title;
        $expert->save();
        }else{
            $oldimage = public_path($expert->path);
            $expert->path = '/img/' . $photoName;
            $expert->title = $request->title;
            $expert->save();

            if(file_exists($oldimage))
            {
                unlink($oldimage);
            }
        }
        return redirect()->back();
    }


    public function partnerEdit(Request $request)
    {
        // get current time and append the upload file extension to it,
        // then put that name to $photoName variable.
        $photoName = time().'.'.$request->photo->getClientOriginalExtension();
        /*
            talk the select file and move it public directory and make avatars
            folder if doesn't exsit then give it that unique name.
        */
        $partner = Partner::where('id', Input::get('pid'))->first();
        $request->photo->move(public_path('img'), $photoName);
        if(!isset($partner->path))
        {
        $partner->path = '/img/' . $photoName;
        $partner->title = $request->title;
        $partner->save();
        }else{
            $oldimage = public_path($partner->path);
            $partner->path = '/img/' . $photoName;
            $partner->title = $request->title;
            $partner->save();

            if(file_exists($oldimage))
            {
                unlink($oldimage);
            }
        }
        return redirect()->back();
    }

    public function deleteExpert($eid)
    {
        $expert = Expert::where('id', $eid)->first();
        $expert->delete();
        return redirect()->back();
    }

    public function deletePartner($pid)
    {
        $partner = Partner::where('id', $pid)->first();
        $partner->delete();
        return redirect()->back();
    }

    public function addExpert()
    {
        $expert = new Expert;
        $expert->save();
        return redirect()->back();
    }

    public function addPartner()
    {
        $partner = new Partner;
        $partner->save();
        return redirect()->back();
    }


}
