<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $title = 'Home';
        $data = Project::with('category')->orderBy('year', 'desc')->take(6)->get();
        return view('landing.home', compact('title', 'data'));
    }
}
