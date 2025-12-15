<?php

namespace App\Http\Controllers;

use App\Models\HelpSupport;
use Illuminate\Http\Request;

class HelpSupportController extends Controller
{
    public function create()
    {
        return view('help-support.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required|max:255',
            'section' => 'required',
            'body' => 'required',
            'city' => 'nullable|max:255',
            'state' => 'nullable|max:255',
            'zip' => 'nullable|max:10'
        ]);

        HelpSupport::create($validated);

        return redirect()->route('help-support.index')
            ->with('success', 'Help and support article created successfully.');
    }
}
