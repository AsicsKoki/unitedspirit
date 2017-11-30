<?php

namespace App\Http;
use Illuminate\Http\Request;

class Helper {

    public static function upload(Request $request,string $input,string $publicpath)
    {
        // get current time and append the upload file extension to it,
        // then put that name to $photoName variable.
        $photoName = time().'.'.$request->$input->getClientOriginalExtension();
        /*
            talk the select file and move it public directory and make avatars
            folder if doesn't exsit then give it that unique name.
        */
        $request->$input->move(public_path('$publicpath'), $photoName);

        return $publicpath . "/" . $photoName;
    }


}