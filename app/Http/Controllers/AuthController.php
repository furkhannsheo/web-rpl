<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function storeLogin(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:3"
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('beranda.admin');
        }

        return redirect()->back()->with("gagal", "Email atau Password salah, silakan coba kembali.");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('view.beranda')->with('sukses', "Berhasil Logout.");
    }
}
