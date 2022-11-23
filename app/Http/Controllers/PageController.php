<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home() {
        $posts = Post::all();
        return view('home', compact('posts'));
    }
}
