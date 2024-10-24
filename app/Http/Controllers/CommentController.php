<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Post $post) { //tvorenie commentov
        request()->validate([
            'content' => 'required|min:3|max:240'
        ]);

        $post->comments()->create([
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard')->with('success', 'Comment bo pridany');
    }
}
