<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function showLogin(Request $request): View
    {
    if ($request->query('destination') === 'dashboard') {
        $request->session()->put('login_destination', 'dashboard');
    }

    return view('auth.login');
    }

    /**
     * Menampilkan halaman registrasi.
     */
    public function showRegister(): View
    {
        return view('auth.register');
    }

    /**
     * Memproses registrasi pengguna.
     */
    public function register(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:20'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terms' => ['accepted'],
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'phone.required' => 'Nomor telepon wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai.',
            'terms.accepted' => 'Kamu harus menyetujui syarat dan ketentuan.',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()
            ->route('login')
            ->with('success', 'Registrasi berhasil. Silakan login menggunakan akun kamu.');
    }

    /**
     * Memproses login pengguna.
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
        ]);

        if (!Auth::attempt($credentials)) {
            return back()
                ->withInput($request->only('email'))
                ->with('login_error', 'Email atau password tidak sesuai.');
        }

        $request->session()->regenerate();

        $user = Auth::user();

        if (!$user->is_active) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()
                ->route('login')
                ->with('login_error', 'Akun kamu sedang dinonaktifkan.');
        }

        $defaultDashboard = match ($user->role) {
            'user' => route('dashboard.user'),
            'admin' => route('dashboard.admin'),
            'hr' => route('dashboard.hr'),
            default => null,
        };

        if (!$defaultDashboard) {
            return $this->logoutInvalidRole($request);
        }

        if ($request->session()->pull('login_destination') === 'dashboard') {
            $request->session()->forget('url.intended');

            return redirect()->to($defaultDashboard);
        }

        return redirect()->intended($defaultDashboard);
    }

    /**
     * Logout jika role tidak dikenali.
     */
    private function logoutInvalidRole(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('login_error', 'Role akun tidak dikenali.');
    }

    /**
     * Memproses logout.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()
            ->route('login')
            ->with('success', 'Anda berhasil keluar dari sistem.');
    }
}
