<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get() // Penggunaan Eager Loading // dipanggil dari Post Model Protected With
        ]);
    }

    public function show(Post $post)
    {
        return view ('post',[
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
