<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        Like::create([
            'user_id'=>Auth::user()->id,
            'post_id'=>$request->post_id,
            ]);
        
        return redirect('/');
    }
    
    public function unlike(Like $like, Request $request)
    {
        $unlike=$like->where('user_id', '=', Auth::user()->id)
                        ->where('post_id', '=', $request->post_id);
        $unlike->delete();
        
        return redirect('/');
    }
}
