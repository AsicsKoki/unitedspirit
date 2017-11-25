<?php

namespace App\Http\Controllers;

use App\Week as Week;
use App\User as User;
use App\Video as Video;
use App\Audio as Audio;
use App\Document as Document;
use App\Image as Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth as Auth;
use Carbon\Carbon;

class WeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function show(Week $week)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function edit(Week $week)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Week $week)
    {
        //
    }

    /**\
     * Remove the specified resource from storage.
     *
     * @param  \App\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function destroy(Week $week)
    {
        //
    }

    public function getWeeks()
    {
        $user_id = Auth::user()->id;
        $weeks = Week::where('user_id', $user_id)->get();
        return view('week.allWeeks',['weeks'=>$weeks]);
    }

    public function getWeek($wid)
    {  
        $video = Video::where('week_id',$wid)->first();
        $audio = Audio::where('week_id',$wid)->first();
        $image = Image::where('week_id',$wid)->first();
        $document = Document::where('week_id',$wid)->first();
        $week = Week::where('id', $wid)->first();
        // $logo = $image->path;
        // return $image['path'];
        return view('week.week', ['logo' => $image['path'], 'week' => $week , 'video' => $video , 'audio' => $audio , 'image' => $image , 'document' => $document ]);
    }

    public function uploadImage(Request $request)
    {
    // get current time and append the upload file extension to it,
    // then put that name to $photoName variable.
    $photoName = time().'.'.$request->photo->getClientOriginalExtension();
    /*
        talk the select file and move it public directory and make avatars
        folder if doesn't exsit then give it that unique name.
    */
    $week = Week::where('id', Input::get('wid'))->with('images')->first();
    $request->photo->move(public_path('content/photos'), $photoName);
    if($week->images->isEmpty())
    {
    $image = new Image;
    $image->week_id = $week->id;
    $image->path = '/content/photos/' . $photoName;
    $image->save();
    }else{
        $image = $week->images->first();
        $image->week_id = $week->id;
        $image->path = '/content/photos/' . $photoName;
        $image->save();
    }
    return redirect()->back();
    }



    public function getJobs()
    {
        return view('ad.allAds', ['ads' => Ad::with('company.image')->get()]);
    }

    public function getJob($jid)
    {  
        $ad = Ad::where('id', $jid)->with('company.image')->with('categories')->get();
        return view('ad.ad', ['ad' => $ad]);
    }

}
