<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $posts = Post::published()->latest()->take(6)->get(); // misalnya 6 artikel terbaru
        return view('home', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }
}
