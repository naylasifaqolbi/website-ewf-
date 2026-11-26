<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Application;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Menampilkan Dashboard User.
     */
    public function user(): View|RedirectResponse
    {
        return $this->checkRole('user', 'dashboard.user');
    }

    /**
     * Menampilkan Dashboard Admin.
     */
    public function admin(): View|RedirectResponse
    {
        return $this->checkRole('admin', 'dashboard.admin');
    }

    /**
     * Menampilkan Dashboard HR.
     */
    public function hr(): View|RedirectResponse
    {
        return $this->checkRole('hr', 'dashboard.hr');
    }

    /**
     * Memeriksa autentikasi dan role pengguna.
     */
    private function checkRole(
        string $requiredRole,
        string $view
    ): View|RedirectResponse {

        $user = Auth::user();

        // Memeriksa apakah pengguna sudah login.
        if (!$user) {
            return redirect()
                ->route('login')
                ->with('login_error', 'Silakan login terlebih dahulu.');
        }

        // Memeriksa status akun.
        if (!$user->is_active) {
            Auth::logout();

            return redirect()
                ->route('login')
                ->with('login_error', 'Akun kamu sedang dinonaktifkan.');
        }

        // Memeriksa kesesuaian role.
        if ($user->role !== $requiredRole) {
            return match ($user->role) {
                'user' => redirect()->route('dashboard.user'),
                'admin' => redirect()->route('dashboard.admin'),
                'hr' => redirect()->route('dashboard.hr'),
                default => redirect()
                    ->route('login')
                    ->with('login_error', 'Role akun tidak dikenali.'),
            };
        }
        
        // Data dasar pengguna.
        $dashboardData = [
            'username' => $user->name,
            'role' => $user->role,
            'isActive' => $user->is_active,
        ];

        // Mengambil data pengajuan khusus Dashboard User.
        if ($requiredRole === 'user') {

            $userApplications = Application::where('user_id', $user->id);

            $dashboardData['totalApplications'] = (clone $userApplications)->count();

            $dashboardData['pendingApplications'] = (clone $userApplications)
                ->where('status', 'pending')
                ->count();

            $dashboardData['processingApplications'] = (clone $userApplications)
                ->where('status', 'in_selection')
                ->count();

            $dashboardData['completedApplications'] = (clone $userApplications)
                ->whereIn('status', ['accepted', 'rejected', 'completed'])
                ->count();

            // Mengambil lima pengajuan terbaru.
            $dashboardData['latestApplications'] = (clone $userApplications)
                ->with(['internshipDetail', 'jobDetail'])
                ->orderByDesc('submitted_at')
                ->orderByDesc('id')
                ->limit(5)
                ->get();
        }

        return view($view, $dashboardData);

    }
}
