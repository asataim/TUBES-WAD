<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    // Display the profile page
    public function index()
    {
        $profiles = Profile::all(); // Fetch all profiles
        return view('profile.index', compact('profiles'));
    }

    // Show the form for creating a new profile
    public function create()
    {
        return view('profile.create');
    }

    // Store a newly created profile in the database
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

    // Display the specified profile
    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.show', compact('profile'));
    }

    // Show the form for editing the specified profile
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.edit', compact('profile'));
    }

    // Update the specified profile in the database
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

    // Remove the specified profile from the database
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();

        return redirect()->route('profile.index')->with('success', 'Profile deleted successfully!');
    }
}