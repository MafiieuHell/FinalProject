<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;
use App\Models\Post;


class ResponseController extends Controller
{
        public function store(int $id, Request $request)
    {
        $request->validate([
            'pseudo' => 'required|min:3',
            'content' => 'required|min:3',
        ]);
        
        
        $post = Post::findOrFail($id);
        
        $response = new Response();
        $response->pseudo = $request->input('pseudo');
        $response->content = $request->input('content');
        $response->post_id = $id;
        $response->save();
        
        return redirect()->route('posts.show', ['slug' => $post->slug]);
    }
}
