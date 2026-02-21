<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {   
        $title = 'About Us';
        return view('landing.about', compact('title'));
    }
}
