<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Models\User;
use App\Models\Education;
use App\Models\Work;
use App\Models\Skill;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        foreach($posts as $post){
            $post->title = Str::limit($post->title, 50);
            $post->descr = strip_tags(Str::limit($post->descr, 140));
        }
        return view('pages.index', compact('posts'));
    }

    public function profile(){
        $educations = Education::orderBy('id', 'desc')->get();
        $works = Work::orderBy('id', 'desc')->get();
        $skills = Skill::orderBy('id', 'desc')->get();
        return view('pages.profile', compact('educations', 'works', 'skills'));
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

    public function uploadLogo(Request $request){
        $data = User::first();
        $oldImage = $data->logo;
        if ($request->hasFile('logo')) {
            Storage::disk('public')->delete('logo/' . $oldImage);
            $file = $request->file('logo');
            $filename = time() . "." . $file->getClientOriginalExtension();
            $upload = $file->storeAs('public/logo/', $filename);
            $image = Image::make(public_path('/storage/logo/' . $filename))->resize(250, 55)->save();
            $data->logo = $filename;
        } else {
            $data->logo = $oldImage;
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
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            return  redirect()->back();
        }
    }

    public function search(Request $request){
        $search = $request->search;
        $posts = Post::where('title', 'like', "%{$request->search}%")->get();
        foreach($posts as $post){
            $post->title = Str::limit($post->title, 50);
            $post->descr = strip_tags(Str::limit($post->descr, 140));
        }
        return view('pages.search', compact('posts', 'search'));
    }
    public function contact(Request $request){
        return view('pages.contact');
    }
    public function contactEmail(Request $request){
        $user = User::first();

        Mail::send('emails.contact',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'user_message' => $request->get('body'),
             ), function($message) use ($request, $user){
                  $message->from($request->email);
                  $message->to($user->email);
                  $message->subject($request->subject);
        });
        return  redirect()->back();
    }
    public function createEducation(Request $request){
        $education = new Education;

        $education->degree = $request->degree;
        $education->institute = $request->institute;
        $education->from_to = $request->from_to;
        if ($education->save()) {
            return  redirect()->back();
        }
    }
    public function deleteEducation($id){
        $education = Education::find($id);
        if ($education->delete()) {
            return  redirect()->back();
        }
    }
    public function createWork(Request $request){
        $work = new Work;

        $work->designation = $request->designation;
        $work->institute = $request->institute;
        $work->from_to = $request->from_to;
        if ($work->save()) {
            return  redirect()->back();
        }
    }
    public function deleteWork($id){
        $work = Work::find($id);
        if ($work->delete()) {
            return  redirect()->back();
        }
    }
    public function createSkill(Request $request){
        $skill = new Skill;

        $skill->name = $request->name;
        $skill->percent = $request->percent;
        if ($skill->save()) {
            return  redirect()->back();
        }
    }
    public function deleteSkill($id){
        $skill = Skill::find($id);
        if ($skill->delete()) {
            return  redirect()->back();
        }
    }
}
