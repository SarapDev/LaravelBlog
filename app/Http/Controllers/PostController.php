<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = App\Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        return view('posts.show', ['post' => App\Post::find($id)]);
    }
}
