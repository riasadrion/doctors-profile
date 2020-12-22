<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\User;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function profile(){
        return view('pages.profile');
    }

    public function editProfile(){
        return view('pages.edit-profile');
    }

    public function uploadPic(Request $request){
        $data = User::first();
        $oldImage = $data->profile_pic;
        if ($request->hasFile('profile_pic')) {
            Storage::disk('public')->delete('profile-pic/' . $oldImage);
            $file = $request->file('profile_pic');
            $filename = time() . "." . $file->getClientOriginalExtension();
            $upload = $file->storeAs('public/profile-pic/', $filename);
            $image = Image::make(public_path('/storage/profile-pic/' . $filename))->resize(400, 400)->save();
            $data->profile_pic = $filename;
        } else {
            $data->profile_pic = $oldImage;
        }

        if ($data->save()) {
            return  redirect()->back();
        } else {
            return  redirect()->back();
        }
    }

    public function updateProfile(Request $request){
        $user = User::first();

        $user->name = $request->name;
        $user->tagline = $request->tagline;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->about = $request->about;
        $user->dob = $request->dob;
        $user->web = $request->web;
        $user->address_line_1 = $request->address_line_1;
        $user->address_line_2 = $request->address_line_2;
        $user->institute = $request->institute;
        $user->fb = $request->fb;
        $user->tw = $request->tw;
        $user->in = $request->in;
        $user->gram = $request->gram;

        if ($user->save()) {
            return  redirect()->back();
        }
    }
}
