<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->take(5)->paginate(10);
       
        return view('posts.index', [
            'posts' => $posts  ,
           
        ]);
    }
    public function show(string $slug)
    {
        $post = Post::where('slug',$slug)->firstOrFail();
        
        
        $responses = $post->responses()->latest()->get();
        
        return view('posts.show',[
            'post' => $post,
            'responses' => $responses,
        ]);
    }
}
