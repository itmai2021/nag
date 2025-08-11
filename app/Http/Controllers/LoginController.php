<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return view('layouts.app');
        } else {
            return view('admin.login');
        }
    }
    public function auth(Request $request)
    {
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {
            $request->session()->regenerate();
            return redirect('/admin/company');
        }

        return redirect()->back()->with(['error' => 'Email / Password Salah']);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // hapus session auth

        // invalidate seluruh session
        $request->session()->invalidate();

        // regenerate CSRF token supaya aman
        $request->session()->regenerateToken();

        return redirect('/login'); // arahkan ke halaman login
    }
}
