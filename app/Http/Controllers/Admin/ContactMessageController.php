<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index()
    {
        $title = 'Management';
        $moduleName = 'Contact Messages';
        $data = ContactMessage::orderByDesc('created_at')->get();
        return view('logged.contact.index', compact('title', 'moduleName', 'data'));
    }

    public function show($id)
    {
        $title = 'Contact Message';
        $moduleName = 'Contact Messages';
        $data = ContactMessage::findOrFail($id);
        return view('logged.contact.show', compact('title', 'moduleName', 'data'));
    }

    public function destroy($id)
    {
        $item = ContactMessage::findOrFail($id);
        $item->delete();

        return redirect()
            ->route('contact-messages.index')
            ->with('success', 'Contact message deleted successfully.');
    }
}
