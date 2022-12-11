<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post) 
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
    
        $input += ['user_id' => $request->user()->id];
        //dd($input);
        $post->fill($input)->save();
        return redirect('/');
    }
    
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $input_post += ['user_id' => $request->user()->id];  
        $post->fill($input_post)->save();
        return redirect('/');
    }
    /*
    public function post(Post $post)
    {
        return view('posts/post')->with(['post' => $post]);
    }
    */
}