<?php

namespace App\Http\Controllers;

use App\Expert as Expert;
use App\Partner as Partner;
use App\Week as Week;
use App\Video as Video;
use App\Audio as Audio;
use App\Image as Image;
use App\Document as Document;
use App\User as User;
use App\SubscriptionType as SubscriptionType;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash as Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth as Auth;


class AdminController extends Controller
{
    public function getAdminChangePassword()
    {
        return view('admin.auth.passwords.change');
    }


    public function getGenerateAccount()
    {
        return view('admin.generateaccount');
    }

    public function getEditSubscriptions()
    {
        $sub_t = SubscriptionType::all();
        return view('admin.editsubscriptions',['subscription_types' => $sub_t]);
    }

    public function postAdminChangePassword(Request $request)
    {
        $request->validate([
            'oldpassword'           => 'required',
            'password'              => 'required',
            'password_confirmation' => 'required',
        ]);
        $admin = Auth::guard('admin')->user();
        if(Hash::check(Input::get('oldpassword'), $admin->password))
        {
            if (!strcmp(Input::get('password'), Input::get('password_confirmation'))){
                $admin->password = Hash::make(Input::get('password'));
                $admin->save();
                return redirect()->route('getAdminHome');
            }else{
                return Redirect::back()->withErrors(['message', "Password does not match!"]);
            }
        }else{
             return redirect()->back()->withErrors(['message', 'Wrong old password!']);
        }
    }

    public function getEditWeeks()
    {
        $weeks = Week::all();
        return view('admin.editweeks',['weeks' => $weeks]);
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

    public function getEditUserAccounts()
    {
        $user = User::all();
        return view('admin.editaccounts',['users' => $user]);
    }

    public function getEditUserAccount($uid)
    {
        $user = User::where('id',$uid)->first();
        return view('admin.edituser',['user' => $user]);
    }
    
    public function postEditUserAccount(Request $request)
    {
        $user = User::where('id',$request->id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->birthdate = $request->birthdate;
        $user->phone = $request->phone;
        $user->active= $request->is_subscribed;
        $user->password = Hash::make(Input::get('password'));
        $user->save();

        return redirect()->back();

    }

    public function getEditWeek($wid)
    {
        $video = Video::where('week_id',$wid)->first();
        $audio = Audio::where('week_id',$wid)->first();
        $image = Image::where('week_id',$wid)->first();
        $document = Document::where('week_id',$wid)->first();
        $week = Week::where('id', $wid)->first();
        $w = Week::where('id', $wid)->with('videos')->first();
        $video2 = $w->videos[1];

        if($w->videos->count()>2){
        $video2 = $w->videos[1];
        return view('admin.editweek', ['doc' => $document['path'], 'aud' => $audio['path'] , 'vid' => $video['path'], 'logo' => $image['path'], 'week' => $week , 'vid2' => $video2['path'] ]);
        }

        return view('admin.editweek', ['vid2' => $video2['path'] ,'doc' => $document['path'], 'aud' => $audio['path'] , 'vid' => $video['path'], 'logo' => $image['path'], 'week' => $week  ]);
    }

    public function expertEdit(Request $request)
    {
        // get current time and append the upload file extension to it,
        // then put that name to $photoName variable.
        if($request->photo)
        {
        $photoName = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('img'), $photoName);
        }
        /*
            talk the select file and move it public directory and make avatars
            folder if doesn't exsit then give it that unique name.
        */
        $expert = Expert::where('id', Input::get('eid'))->first();

        if(!isset($expert->path))
        {
            if($request->photo){
            $expert->path = '/img/' . $photoName;
            }
        $expert->title = $request->title;
        $expert->role = $request->role;
        $expert->save();
        }else{
            if($request->photo){
            $oldimage = public_path($expert->path);
            $expert->path = '/img/' . $photoName;
            if(file_exists($oldimage))
                {
                    unlink($oldimage);
                }
            }
            $expert->title = $request->title;
            $expert->role = $request->role;
            $expert->save();
        }
        return redirect()->back();
    }


    public function partnerEdit(Request $request)
    {
        // get current time and append the upload file extension to it,
        // then put that name to $photoName variable.
        if($request->photo)
        {
        $photoName = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('img'), $photoName);
        }
        /*
            talk the select file and move it public directory and make avatars
            folder if doesn't exsit then give it that unique name.
        */
        $partner = Partner::where('id', Input::get('pid'))->first();

        if(!isset($partner->path))
        {
            if($request->photo){
            $partner->path = '/img/' . $photoName;
            }
        $partner->title = $request->title;
        $partner->save();
        }else{
            if($request->photo){
            $oldimage = public_path($partner->path);
            $partner->path = '/img/' . $photoName;
            if(file_exists($oldimage))
                {
                    unlink($oldimage);
                }
            }
            $partner->title = $request->title;
            $partner->save();
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

    public function postEditWeek()
    {
        $week = Week::where('id', Input::get('wid'))->first();
        $week->name = Input::get('week_name');
        $week->about = Input::get('week_about');
        $week->exercise = Input::get('week_exercise');
        $week->self_realization_title = Input::get('self_realization_title');
        $week->wisdome_title = Input::get('wisdome_title');
        $week->healthy_mind_title = Input::get('healthy_mind_title');
        $week->save();
        return redirect()->back();
    }

    public function postGenerateAccount(Request $request)
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
        if (!strcmp(Input::get('password'), Input::get('password_confirmation'))){
            $user = new User(Input::all());
            $user->password = Hash::make(Input::get('password'));
            $user->is_subscribed = 2;
            $user->m_week = $request->m_week;
            $user->save();
            return redirect()->route('getAdminHome');
        } else {
            return Redirect::back()->withErrors(['error', "Password does not match!"]);
            }
    }
    
    public function postEditSubscriptions(Request $request)
    {
        $sub_t=SubscriptionType::where('id', Input::get('sub_id'))->first();
        //return $sub_t;
        $sub_t->name = $request->sub_name;
        $sub_t->price = $request->sub_price;
        $sub_t->description = $request->sub_description;
        $sub_t->save();
        return redirect()->back();
    }


}
