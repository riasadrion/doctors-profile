<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->user_id = 1;
        $post->title = $request->title;
        $post->descr = $request->descr;

        if ($request->hasFile('thumb')) {
            // Storage::disk('public')->delete('profile-pic/' . $oldImage);
            $file = $request->file('thumb');
            $filename = time() . "." . $file->getClientOriginalExtension();
            $upload = $file->storeAs('public/post-images/', $filename);
            $image = Image::make(public_path('/storage/post-images/' . $filename))->resize(640, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save();
            $post->thumb = $filename;
        }

        if ($post->save()) {
            return  redirect()->back();
        } else {
            return  redirect()->back();
        }

    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->user_id = 1;
        $post->title = $request->title;
        $post->descr = $request->descr;
        $oldImage = $post->thumb;
        if ($request->hasFile('thumb')) {
            Storage::disk('public')->delete('post-images/' . $oldImage);
            $file = $request->file('thumb');
            $filename = time() . "." . $file->getClientOriginalExtension();
            $upload = $file->storeAs('public/post-images/', $filename);
            $image = Image::make(public_path('/storage/post-images/' . $filename))->resize(640, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save();
            $post->thumb = $filename;
        }else{
             $post->thumb = $oldImage;
        }

        if ($post->save()) {
            return  redirect()->back();
        } else {
            return  redirect()->back();
        }
    }

    public function destroy(Post $post)
    {
        //
    }
}
