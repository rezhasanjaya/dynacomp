<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {   
        $title = 'Articles';
        $data = Article::with('category')
            ->orderByDesc('published_date')
            ->get();
        return view('landing.news', compact('title', 'data'));
    }

    public function read($uuid)
    {
        $data = Article::with('category')->where('uuid', $uuid)->firstOrFail();
        $title = $data->title;
        return view('landing.news-read', compact('title', 'data'));
    }
}
