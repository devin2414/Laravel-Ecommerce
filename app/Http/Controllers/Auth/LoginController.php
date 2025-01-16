<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba autentikasi
        if (Auth::attempt($credentials)) {
            // Regenerasi sesi untuk menghindari serangan session fixation
            $request->session()->regenerate();

            $user = Auth::user();

            // Redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard'); // Dashboard untuk admin
            }

            return redirect()->route('admin.dashboard'); // Dashboard untuk user biasa
        }

        // Jika autentikasi gagal, lempar pesan error
        return back()->withErrors([
            'email' => __('The provided credentials do not match our records.'),
        ])->onlyInput('email'); // Tetap simpan input email agar user tidak perlu mengetik ulang
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
