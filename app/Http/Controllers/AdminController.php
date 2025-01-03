<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $column = $request->get('sort_by', 'id');
        $direction = $request->get('direction', 'asc');
        
        $admins = Admin::orderBy($column, $direction)->get();
        
        return view('admin.index', compact('admins', 'column', 'direction'));
    }

    public function create()
    {
        $userTypes = Admin::userTypes();
        return view('admin.create', compact('userTypes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'role' => 'required|in:admin,user',
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:8',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        
        Admin::create($validated);
        
        return redirect()->route('admin.index')->with('success', 'Account created successfully');
    }

    public function edit(Admin $admin)
    {
        $userTypes = Admin::userTypes();
        return view('admin.edit', compact('admin', 'userTypes'));
    }

    public function update(Request $request, Admin $admin)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'admin/user' => 'required|in:admin,user',
            'username' => 'required|string|unique:users,username,' . $admin->id,
            'password' => [
                'nullable',
                'string',
                'min:8',
                'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]+$/'
            ],
        ]);

        if ($validated['password']) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $admin->update($validated);
        
        return redirect()->route('admin.index')->with('success', 'Account updated successfully');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Account deleted successfully');
    }
}