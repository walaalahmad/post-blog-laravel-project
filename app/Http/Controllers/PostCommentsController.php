<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {

        # code...
        //add comment for given post
        // dd(request()->all());
        request()->validate([
            'body' => 'required|min:3'
        ]);

        $post->comments()->create([
            'user_id' => auth()->user()->id,
            'post_id' => request('post_id'),
            'body' => request('body'),
        ]);
        return back()->with('success', 'Comment added!');
    }

}
