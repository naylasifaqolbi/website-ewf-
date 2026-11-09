<?php

namespace App\Http\Controllers;

use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected NewsService $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    /**
     * Halaman daftar berita.
     */
    public function index(Request $request)
    {
        // Default bahasa Indonesia.
        $language = $request->query('language', 'id');

        // Batasi pilihan bahasa.
        if (!in_array($language, ['id', 'en'])) {
            $language = 'id';
        }

        // Ambil semua berita.
        $allNews = collect($this->newsService->getAllNews());

        // Filter berdasarkan bahasa.
        $articles = $allNews
            ->where('language', $language)
            ->take(30)
            ->values();

        return view('news.index', [
            'articles' => $articles,
            'language' => $language,
            'totalArticles' => $articles->count(),
        ]);
    }

    /**
     * Halaman detail berita.
     */
    public function show(string $slug)
    {
        $article = $this->newsService->getNewsBySlug($slug);

        if (!$article) {
            abort(404, 'Berita tidak ditemukan.');
        }

        return view('news.show', [
            'article' => $article,
        ]);
    }
}
