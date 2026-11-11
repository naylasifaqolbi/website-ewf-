<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function showLogin(): View
    {
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
     * Memproses login sementara tanpa database.
     */
    public function login(Request $request): RedirectResponse
    {
        // Validasi username.
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:100'],
        ], [
            'username.required' => 'Username wajib diisi.',
        ]);

        // Mengambil username dan mengubahnya menjadi huruf kecil.
        $username = strtolower(trim($validated['username']));

        // Menentukan role berdasarkan username.
        $roles = [
            'user' => 'user',
            'admin' => 'admin',
            'hr' => 'hr',
        ];

        // Memeriksa apakah username dikenali.
        if (!isset($roles[$username])) {

            return back()
                ->withInput()
                ->with(
                    'login_error',
                    'Username tidak dikenali. Silakan gunakan user, admin, atau hr.'
                );
        }

        // Menentukan role pengguna.
        $role = $roles[$username];

        // Memperbarui session untuk keamanan.
        $request->session()->regenerate();

        // Menyimpan informasi login ke session.
        $request->session()->put([
            'demo_role' => $role,
            'demo_username' => $username,
        ]);

        // Mengarahkan pengguna sesuai role.
        switch ($role) {

            case 'user':
                return redirect()->route('dashboard.user');

            case 'admin':
                return redirect()->route('dashboard.admin');

            case 'hr':
                return redirect()->route('dashboard.hr');

            default:
                return back()
                    ->withInput()
                    ->with(
                        'login_error',
                        'Role pengguna tidak dikenali.'
                    );
        }
    }

    /**
     * Memproses logout.
     */
    public function logout(Request $request): RedirectResponse
    {
        // Menghapus session login sementara.
        $request->session()->forget([
            'demo_role',
            'demo_username',
        ]);

        // Memperbarui token session.
        $request->session()->regenerateToken();

        // Kembali ke halaman login.
        return redirect()
            ->route('login')
            ->with(
                'success',
                'Anda berhasil keluar dari sistem.'
            );
    }
}
