<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class DefaultController extends Controller
{
    //
=======
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
>>>>>>> 2f0204c532da7ee68df451ca110dab49887a7b86
}
