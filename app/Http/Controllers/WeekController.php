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
use App\Http\Helper;
use URL;

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
        $weeks = Auth::user()->weeks;
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
        return view('week.week', ['doc' => $document['path'], 'aud' => $audio['path'] , 'vid' => $video['path'], 'logo' => $image['path'], 'week' => $week , 'video' => $video , 'audio' => $audio , 'image' => $image , 'document' => $document ]);
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
            $oldimage = public_path($week->images->first()->path);
            $image->path = '/content/photos/' . $photoName;
            $image->save();

            if(file_exists($oldimage))
            {
                unlink($oldimage);
            }
        }
        return redirect()->back();
    }

    public function uploadVideo(Request $request)
    {
        // get current time and append the upload file extension to it,
        // then put that name to $photoName variable.
        $videoName = time().'.'.$request->video->getClientOriginalExtension();
        /*
            talk the select file and move it public directory and make avatars
            folder if doesn't exsit then give it that unique name.
        */
        $week = Week::where('id', Input::get('wid'))->with('videos')->first();
        $request->video->move(public_path('content/videos'), $videoName);
        if($week->videos->isEmpty())
        {
        $video = new Video;
        $video->week_id = $week->id;
        $video->path = '/content/videos/' . $videoName;
        $video->save();
        }else{
            $video = $week->videos->first();
            $video->week_id = $week->id;
            $oldvideo = public_path($week->videos->first()->path);
            $video->path = '/content/videos/' . $videoName;
            $video->save();

            if(file_exists($oldvideo))
            {
                unlink($oldvideo);
            }
        }
        return redirect()->back();
    }

    public function uploadAudio(Request $request)
    {
        // get current time and append the upload file extension to it,
        // then put that name to $photoName variable.
        $audioName = time().'.'.$request->audio->getClientOriginalExtension();
        /*
            talk the select file and move it public directory and make avatars
            folder if doesn't exsit then give it that unique name.
        */
        $week = Week::where('id', Input::get('wid'))->with('audios')->first();
        $request->audio->move(public_path('content/audios'), $audioName);
        if($week->audios->isEmpty())
        {
        $audio = new Audio;
        $audio->week_id = $week->id;
        $audio->path = '/content/audios/' . $audioName;
        $audio->save();
        }else{
            $audio = $week->audios->first();
            $audio->week_id = $week->id;
            $oldaudio = public_path($week->audios->first()->path);
            $audio->path = '/content/audios/' . $audioName;
            $audio->save();

            if(file_exists($oldaudio))
            {
                unlink($oldaudio);
            }
        }
        return redirect()->back();
    }

    public function uploadDocument(Request $request)
    {
        // get current time and append the upload file extension to it,
        // then put that name to $photoName variable.
        $documentName = time().'.'.$request->document->getClientOriginalExtension();
        /*
            talk the select file and move it public directory and make avatars
            folder if doesn't exsit then give it that unique name.
        */
        $week = Week::where('id', Input::get('wid'))->with('documents')->first();
        $request->document->move(public_path('content/documents'), $documentName);
        if($week->documents->isEmpty())
        {
        $document = new Document;
        $document->week_id = $week->id;
        $document->path = '/content/documents/' . $documentName;
        $document->save();
        }else{
            $document = $week->documents->first();
            $document->week_id = $week->id;
            $olddocument = public_path($week->documents->first()->path);
            $document->path = '/content/documents/' . $documentName;
            $document->save();

            if(file_exists($olddocument))
            {
                unlink($olddocument);
            }
        }
        return redirect()->back();
    }


                // some helper functions
    // public function getJobs()
    // {
    //     return view('ad.allAds', ['ads' => Ad::with('company.image')->get()]);
    // }

    // public function getJob($jid)
    // {  
    //     $ad = Ad::where('id', $jid)->with('company.image')->with('categories')->get();
    //     return view('ad.ad', ['ad' => $ad]);
    // }

    // pokusavam ovako ali nesto nece? 
    public function getDocument($wid)
    {
        $week = Week::where('id', $wid)->with('documents')->first();
        $document = $week->documents->first();
        $doc = public_path($document['path']);
            if(is_file($doc)) {

                /*
                    Do any processing you'd like here:
                    1.  Increment a counter
                    2.  Do something with the DB
                    3.  Check user permissions
                    4.  Anything you want!
                */

                // required for IE
                if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off');	}

                // get the file mime type using the file extension
                switch(strtolower(substr(strrchr($doc, '.'), 1))) {
                    case 'pdf': $mime = 'application/pdf'; break;
                    case 'zip': $mime = 'application/zip'; break;
                    case 'jpeg':
                    case 'jpg': $mime = 'image/jpg'; break;
                    default: $mime = 'application/force-download';
                }
                header('Pragma: public'); 	// required
                header('Expires: 0');		// no cache
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($doc)).' GMT');
                header('Cache-Control: private',false);
                header('Content-Type: '.$mime);
                header('Content-Disposition: attachment; filename="'.basename($doc).'"');
                header('Content-Transfer-Encoding: binary');
                header('Content-Length: '.filesize($doc));	// provide file size
                header('Connection: close');
                readfile($doc);		// push it out
                exit();

            }else echo('Document is not available!');

    }

}
