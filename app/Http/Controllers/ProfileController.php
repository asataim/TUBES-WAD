<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('profile.index', compact('profiles'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'contact' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        Profile::create($validated);

        return redirect()->route('profile.index')->with('success', 'Profile created successfully!');
    }

    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.show', compact('profile'));
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'contact' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $profile = Profile::findOrFail($id);
        $profile->update($validated);

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully!');
    }

    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();

        return redirect()->route('profile.index')->with('success', 'Profile deleted successfully!');
    }
}