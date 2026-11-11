<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Menampilkan Dashboard User.
     */
    public function user(Request $request): View|RedirectResponse
    {
        return $this->checkRole(
            $request,
            'user',
            'dashboard.user'
        );
    }

    /**
     * Menampilkan Dashboard Admin.
     */
    public function admin(Request $request): View|RedirectResponse
    {
        return $this->checkRole(
            $request,
            'admin',
            'dashboard.admin'
        );
    }

    /**
     * Menampilkan Dashboard HR.
     */
    public function hr(Request $request): View|RedirectResponse
    {
        return $this->checkRole(
            $request,
            'hr',
            'dashboard.hr'
        );
    }

    /**
     * Memeriksa session dan role pengguna.
     */
    private function checkRole(
        Request $request,
        string $requiredRole,
        string $view
    ): View|RedirectResponse {

        // Memeriksa apakah pengguna sudah login.
        $currentRole = $request->session()->get('demo_role');

        if (!$currentRole) {

            return redirect()
                ->route('login')
                ->with(
                    'login_error',
                    'Silakan login terlebih dahulu.'
                );
        }

        // Memeriksa apakah role sesuai.
        if ($currentRole !== $requiredRole) {

            // Memastikan role session merupakan role yang valid.
            $validRoles = [
                'user',
                'admin',
                'hr',
            ];

            if (!in_array($currentRole, $validRoles, true)) {

                $request->session()->forget([
                    'demo_role',
                    'demo_username',
                ]);

                return redirect()
                    ->route('login')
                    ->with(
                        'login_error',
                        'Session tidak valid. Silakan login kembali.'
                    );
            }

            // Mengarahkan pengguna ke dashboard miliknya.
            return redirect()->route(
                'dashboard.' . $currentRole
            );
        }

        // Mengirim data pengguna ke View.
        return view($view, [
            'username' => $request->session()->get('demo_username'),
            'role' => $currentRole,
        ]);
    }
}
