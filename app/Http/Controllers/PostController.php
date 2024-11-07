<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

use function Pest\Laravel\post;

class PostController extends Controller
{
    public function store() { //tvorenie idei
        request()->validate([
            'content' => 'required|min:3|max:240'
        ]);

        $post = Post::create(
            [
            'content' => request()->get('content','nefunguje ti request bracho'),
            'likes' => 36,
            'name' => 'Matko',
        ]);
        return redirect()->route('dashboard')->with('success' , 'Post was created successfully!');
    }

    public function destroy(Post $post) { //mazanie idei

        $post->delete();

        return redirect()->route('dashboard')->with('success' , 'Post deleted successfully!');
    }

    public function show(Post $singlePost) { //single idei
        
        return view('posts.show', [
            'singlePost' => $singlePost
        ]);
    }

    public function edit(Post $post) { //single post edit
        $editing = true;
        return view('posts.show', compact('post','editing')); //compact spravi...
    }

    public function update(Post $post) { //single post update
        request()->validate([
            'content' => 'required|min:3|max:240'
        ]);

        $post->content = request()->get('content', '');
        $post->save();
        return redirect()->route('posts.show', $post->id)->with('success',"Post updated successfully");
    }

    public function search(Request $request) {

        $content = request()->get('content', '');

        $post = Post::where('content', 'LIKE', '%'. $content . '%')->first();

        return view('posts.show', compact('post'));
    }
}
