<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $posts = Post::published()
            ->latest()
            ->take(6)
            ->get();

        return view('home', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::published()
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(5)
            ->get();

        return view('web.posts.show', compact('post', 'relatedPosts'));
    }

    public function faq()
    {
        $post = (object) [
            'title' => 'Frequently Asked Questions',
            'content' => view('web.pages.faq')->render(),
            'cover' => null,
            'published_at' => null,
            'post_type' => 'halaman',
            'is_static' => true,
        ];

        return view('web.posts.show-static', compact('post'));
    }

    public function artikel()
    {
        $posts = Post::published()
            ->where('post_type', 'article')
            ->latest()
            ->get();

        $post = (object) [
            'title' => 'Artikel Pilihan',
            'content' => view('web.pages.artikel-index', compact('posts'))->render(),
            'cover' => null,
            'published_at' => now(),
            'post_type' => 'halaman',
            'is_static' => true,
        ];

        $relatedPosts = Post::published()
            ->where('post_type', 'article')
            ->inRandomOrder()
            ->take(5)
            ->get();

        return view('web.posts.show', compact('post', 'relatedPosts'));
    }
}
