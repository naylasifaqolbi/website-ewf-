<?php

namespace App\Http\Controllers;

use App\Models\HomepageContent;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $content = HomepageContent::getContent();

        return view('home', compact('content'));
    }
}