<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Throwable;

class ContactController extends Controller
{
    public function index()
    {
        $title = 'Contact';
        $categories = ProjectCategory::orderBy('category')->get();
        return view('landing.contact', compact('title', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'project_type' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            ContactMessage::create([
                'uuid' => (string) Str::uuid(),
                'name' => $request->name,
                'email' => $request->email,
                'project_type' => $request->project_type,
                'message' => $request->message,
            ]);
        } catch (Throwable $e) {
            return redirect()
                ->route('contact')
                ->with('error', 'Failed to send message. Please try again.');
        }

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you! Your message has been sent.');
    }
}
