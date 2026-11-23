<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ApplicantPageController extends Controller
{
    /**
     * Menampilkan halaman formulir pendaftaran magang.
     */
    public function pendaftaranMagang(): View
    {
        return view('applicant.pendaftaran-magang');
    }

    /**
     * Menampilkan halaman formulir lamaran kerja.
     */
    public function lamaranKerja(): View
    {
        return view('applicant.lamaran-kerja');
    }
}