<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan form login.
     */
    public function showLoginForm()
    {
        if (Auth::guard('pegawai')->check()) {
            return redirect('/');
        }

        return view('login');
    }

    /**
     * Memproses percobaan login pegawai menggunakan nama dan password.
     */
    public function login(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'password' => 'required|string',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $credentials = [
            'nama' => $request->nama,
            'password' => $request->password,
        ];

        $remember = $request->has('remember');

        if (Auth::guard('pegawai')->attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Selamat datang, ' . Auth::guard('pegawai')->user()->nama . '!');
        }

        return back()
            ->withInput($request->only('nama', 'remember'))
            ->with('error', 'Nama pegawai atau password tidak sesuai!');
    }

    /**
     * Memproses logout pegawai.
     */
    public function logout(Request $request)
    {
        Auth::guard('pegawai')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda telah berhasil logout.');
    }
}
