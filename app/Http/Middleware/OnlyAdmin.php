<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class OnlyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Pastikan pengguna terautentikasi
        if (Auth::check()) {
            $user = Auth::user();
            // Periksa role_id pengguna
            if ($user->role_id == 1) {
                // Jika role_id adalah 1 (admin), lanjutkan ke request berikutnya
                return $next($request);
            }
        }

        // Jika bukan admin, arahkan ke halaman lain (misalnya, halaman beranda)
        return redirect('/beranda'); // Ganti dengan route atau halaman yang sesuai
    }
}
