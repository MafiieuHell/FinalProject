<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class DefaultController extends Controller
{
    public function home()
    {
       
        $posts = Post::latest()->take(5)->with('user')->get();
        
        return view('home', [
            'posts' => $posts    
        ]);
    }

}
