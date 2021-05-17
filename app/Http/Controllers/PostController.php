<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest(5);
        
        return view('posts.index', [
            'posts' =>$posts    
        ]);
    }
}
