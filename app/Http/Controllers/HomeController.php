<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $featuredPosts = Post::where('is_published', true)
            ->with('author') // Eager load the author relationship
            ->orderBy('views', 'desc') // Most viewed first
            ->orderBy('published_at', 'desc') // Then newest first
            ->limit(4) // Get 4 posts (1 main + 3 grid)
            ->get();

        return view('home', [
            'mainFeaturedPost' => $featuredPosts->first(),
            'gridFeaturedPosts' => $featuredPosts->slice(1), // Get remaining 3 posts
            'totalPostsCount' => Post::where('is_published', true)->count()
        ]);
    }
}
