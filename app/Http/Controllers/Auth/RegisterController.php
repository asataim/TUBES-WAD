<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Buat pengguna baru dengan role yang sudah ditentukan (user)
        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'user', // Role secara otomatis diatur menjadi 'user'
        ]);

        // Login otomatis setelah registrasi
        auth()->attempt($request->only('username', 'password'));

        // Arahkan ke halaman home untuk user
        return redirect()->route('main');
    }
}
