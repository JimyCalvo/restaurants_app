<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Public;
use Cloudder;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class ProfileController extends Controller
{
    public function show()
    {
        $idp=DB::table('profiles')->where('user_id',auth()->user()->id)->value('id');
        $profile=Profile::findOrFail($idp);
        return view('pages.auth.profileView', compact('profile'));
        
    }
    public function edit()
    {   $idp=DB::table('profiles')->where('user_id',auth()->user()->id)->value('id');
        $profile=Profile::findOrFail($idp);
        return view('pages.auth.profile', compact('profile'));
    }
    public function update(Request $request)
    {


        
        $idp=DB::table('profiles')->where('user_id',auth()->user()->id)->value('id');
        $profile=Profile::findOrFail($idp);
        $profile->name=$request->input('name');
        $profile->address=$request->input('address');
        $profile->movil=$request->input('movil');
        $profile->last_name=$request->input('last_name');
        
        if(isset($request['avatar'])){
            $aux = $profile->avatar;
                $result = str_replace(array(".jpg", ".png", ".gif","https://res.cloudinary.com/dwtkvizrm/image/upload/"), '', $aux);
                $res2 = substr($result, 0, 12);
                $res3 = str_replace($res2, '', $result);
                Cloudinary::destroy($res3);
            
            
            $filename=time().".".$request['avatar']->extension();
            $foto = $request->file('avatar');
            $obj = Cloudinary::upload($foto->getRealPath(),['folder'=>'avatar']);
            $url = $obj -> getSecurePath();
            $profile->avatar=$url;
        }
        // $profile->avatar=$request->input('avatar');
        $user=User::findOrFail(auth()->user()->id);
        $user->email=$request->input('email');
        $user->name=$request->input('name');
        $user->birthday=$request->input('birthday');

        $profile->save();
        $user->save();
        return to_route('profile');
    }
}