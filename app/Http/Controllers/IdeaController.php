<?php

namespace App\Http\Controllers;

use App\Models\Idea;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store() {
        request()->validate([
            'idea' => 'required|min:3|max:240'
        ]);

        $idea = Idea::create(
            [
                'content' => request()->get('idea', 'si v pici no'),
            'likes' => 36,
            'name' => 'Matko',
        ]);
        return redirect()->route('dashboard')->with('success' , 'Idea was created successfully!');
    }

    public function destroy($id) {
        $idea = Idea::where('id', $id)->firstOrFail();

        $idea->delete();

        return redirect()->route('dashboard')->with('success' , 'Idea deleted successfully!');
    }
}