<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard', [
            'posts' => Post::orderBy('created_at', 'DESC')->paginate(3)
        ]);
    }
}
