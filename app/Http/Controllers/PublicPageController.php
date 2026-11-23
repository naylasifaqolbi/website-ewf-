<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
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

    public function historicalData(Request $request): View
{
    $apiAvailable = false;
    $historicalData = collect();

    try {
        $response = Http::acceptJson()
            ->timeout(20)
            ->get('https://www.newsmaker.id/api/historical-data');

        if ($response->successful()) {
            $historicalData = collect($response->json('data', []))
                ->whereIn('category', [
                    'LGD Daily',
                    'HSI Daily',
                    'SNI Daily',
                ]);

            $apiAvailable = true;
        }
    } catch (\Throwable $e) {
        $apiAvailable = false;
    }

    // LGD menjadi instrumen default saat halaman pertama dibuka.
    $categories = [
        'lgd' => 'LGD Daily',
        'hsi' => 'HSI Daily',
        'sni' => 'SNI Daily',
    ];

    $instrument = $request->query('instrument', 'lgd');

    // Jika instrumen tidak valid, kembalikan ke LGD.
    if (!isset($categories[$instrument])) {
        $instrument = 'lgd';
    }

    // Filter berdasarkan instrumen.
    $historicalData = $historicalData->where(
        'category',
        $categories[$instrument]
    );

    // Filter tanggal mulai.
    $startDate = $request->query('start_date');

    if ($startDate) {
        $historicalData = $historicalData->where(
            'tanggal',
            '>=',
            $startDate
        );
    }

    // Filter tanggal akhir.
    $endDate = $request->query('end_date');

    if ($endDate) {
        $historicalData = $historicalData->where(
            'tanggal',
            '<=',
            $endDate
        );
    }

    // Urutkan data dari tanggal terbaru.
    $historicalData = $historicalData
        ->sortByDesc('tanggal')
        ->values();

    // Ambil periode tanggal dari seluruh hasil filter.
    $periodStart = $historicalData->isNotEmpty()
        ? $historicalData->last()['tanggal']
        : null;

    $periodEnd = $historicalData->isNotEmpty()
        ? $historicalData->first()['tanggal']
        : null;

    // Pagination: 10 data per halaman.
    $perPage = 10;
    $currentPage = LengthAwarePaginator::resolveCurrentPage();

    $paginatedItems = $historicalData->forPage(
        $currentPage,
        $perPage
    );

    $historicalData = new LengthAwarePaginator(
        $paginatedItems,
        $historicalData->count(),
        $perPage,
        $currentPage,
        [
            'path' => $request->url(),
            'query' => $request->query(),
        ]
    );

    return view('historical-data', compact(
        'historicalData',
        'apiAvailable',
        'instrument',
        'startDate',
        'endDate',
        'periodStart',
        'periodEnd'
    ));
}

    public function contact(): View
    {
        return view('contact');
    }
}
