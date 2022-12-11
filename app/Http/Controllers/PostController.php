<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post) 
    {
        //
        $is_like=Like::where('user_id', '=', Auth::user()->id)->pluck('post_id')->toArray();
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()])->with(['is_like' => $is_like]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
    
        $input += ['user_id' => $request->user()->id];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $input_post += ['user_id' => $request->user()->id];  
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function post(Post $post)
    {
        return view('posts/post')->with(['post' => $post]);
    }
}