<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Memeriksa apakah pengguna sudah login.
        if (!Auth::check()) {
            return redirect()
                ->route('login')
                ->with('login_error', 'Silakan login terlebih dahulu.');
        }

        $user = Auth::user();

        // Memeriksa status akun.
        if (!$user->is_active) {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()
                ->route('login')
                ->with('login_error', 'Akun kamu sedang dinonaktifkan.');
        }

        // Memeriksa kesesuaian role.
        if ($user->role !== $role) {
            return match ($user->role) {
                'user' => redirect()->route('dashboard.user'),
                'admin' => redirect()->route('dashboard.admin'),
                'hr' => redirect()->route('dashboard.hr'),
                default => redirect()
                    ->route('login')
                    ->with('login_error', 'Role akun tidak dikenali.'),
            };
        }

        return $next($request);
    }
}
