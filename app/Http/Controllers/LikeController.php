<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Post $post, Request $request)
    {
        $like = New Like();
        $like->post_id = $post->id;
        $like->user_id = Auth::user()->id;
        $nice->save();
        return back();
    }
    
    public function unlike(Post $post, Request $request)
    {
        $user = Auth::user()->id;
        $like = Nice::where('post_id', $post->id)->where('user_id', $user)->first();
        $like->delete();
        return back();
    }
}
