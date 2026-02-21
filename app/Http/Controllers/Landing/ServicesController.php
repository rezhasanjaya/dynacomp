<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {   
        $data = ProjectCategory::all();
        $title = 'Services';
        return view('landing.services', compact('title', 'data'));
    }
}
