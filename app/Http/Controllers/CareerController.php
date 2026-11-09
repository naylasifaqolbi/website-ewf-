<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CareerController extends Controller
{
    public function index(): View
    {
        return view('careers');
    }

    public function jobs(): View
    {
        return view('careers.jobs');
    }

    public function studentInternship(): View
    {
        return view('careers.internship-student');
    }

    public function schoolInternship(): View
    {
        return view('careers.internship-school');
    }
}
