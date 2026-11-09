<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PublicPageController extends Controller
{
    public function about(): View
    {
        return view('about');
    }

    public function profile(): View
    {
        return view('profile');
    }

    public function products(): View
    {
        return view('products');
    }

    public function facilities(): View
    {
        return view('facilities');
    }

    public function legality(): View
    {
        return view('legality');
    }

    public function brokers(): View
    {
        return view('brokers');
    }

    public function regulators(): View
    {
        return view('regulators');
    }

    public function historicalData(): View
    {
        return view('historical-data');
    }

    public function contact(): View
    {
        return view('contact');
    }
}
