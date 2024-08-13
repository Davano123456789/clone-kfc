<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login() {
        if(Auth::user()){
            $user = Auth::user();
            if($user->role_id == 1){

                return redirect()->route('dashboard'); // Ganti dengan route yang sesuai
            }else{
                return redirect()->route('beranda'); // Ganti dengan route yang sesuai

            }

        }
        return view('login');
        
    }
    public function dashboard() {
        return view('dashboard');
        
    }
    public function beranda() {
        return view('beranda');
        
    }
    public function loginNow(Request $request) {
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string'
    ]);

    $credentials = $request->only('username','password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if($user->role_id ==  1){
            return redirect()->intended('/dashboard'); // Ganti '/home' dengan route tujuan setelah login berhasil
        }else{
            return redirect()->intended('/beranda'); // Ganti '/home' dengan route tujuan setelah login berhasil

        }

        }else{
            return redirect()->back()->withErrors([
                'login_error' => 'Username atau password salah.',
            ]);
        }
        
    }
     public function logout(Request $request)
    {
        // Log out pengguna
        Auth::logout();

        // Menghapus sesi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Arahkan pengguna ke halaman login atau halaman lainnya
        return redirect('/'); // Ganti '/' dengan route tujuan setelah logout
    }
}
