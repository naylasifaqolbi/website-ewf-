<?php

namespace App\Http\Controllers;

use App\Models\HomepageContent;
use App\Services\NewsService;
use Illuminate\View\View;

class HomeController extends Controller
{
    protected NewsService $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    public function index(): View
    {
        $content = HomepageContent::getContent();

        // Mengambil berita RSS berbahasa Indonesia.
        $news = collect($this->newsService->getAllNews())
            ->where('language', 'id')
            ->take(3)
            ->values()
            ->all();

        return view('home', compact('content', 'news'));
    }
}
