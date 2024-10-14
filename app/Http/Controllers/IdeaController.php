<?php

namespace App\Http\Controllers;

use App\Models\Idea;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store() { //tvorenie idei
        request()->validate([
            'content' => 'required|min:3|max:240'
        ]);

        $idea = Idea::create(
            [
            'content' => request()->get('content','nefunguje ti request bracho'),
            'likes' => 36,
            'name' => 'Matko',
        ]);
        return redirect()->route('dashboard')->with('success' , 'Idea was created successfully!');
    }

    public function destroy(Idea $idea) { //mazanie idei

        $idea->delete();

        return redirect()->route('dashboard')->with('success' , 'Idea deleted successfully!');
    }

    public function show(Idea $idea) { //single idei
        return view('ideas.show', [
            'idea' => $idea
        ]);
    }

    public function edit(Idea $idea) { //single idea edit
        $editing = true;
        return view('ideas.show', compact('idea','editing')); //compact spravi...
    }

    public function update(Idea $idea) { //single idea update
        request()->validate([
            'content' => 'required|min:3|max:240'
        ]);

        $idea->content = request()->get('content', '');
        $idea->save();
        return redirect()->route('ideas.show', $idea->id)->with('success',"Idea updated successfully");
    }
}
