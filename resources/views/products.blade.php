@extends('layouts.public')

@section('title', 'Produk & Layanan | PT Equityworld Futures')

@section('content')

<main class="bg-white text-[#25344F]">

    {{-- =====================================================
        HERO SECTION
    ====================================================== --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        {{-- Dekorasi --}}
        <div class="pointer-events-none absolute -right-24 -top-28 h-96 w-96 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-12 -top-16 h-72 w-72 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-32 -left-20 h-80 w-80 rounded-full bg-[#6F4D38]/25 blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-0 right-1/3 h-px w-64 bg-linear-to-r from-transparent via-[#D5B893]/60 to-transparent"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-12 lg:px-8 lg:py-16">

            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-3 rounded-full border border-[#D5B893]/40 bg-white/10 px-5 py-2.5 text-xs font-bold uppercase tracking-[0.22em] text-[#D5B893] backdrop-blur-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#D5B893]"></span>
                    Informasi Produk EWF
                </span>

                <h1 class="mt-5 font-['Manrope'] text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                    Solusi Investasi
                    <span class="block text-[#D5B893]">Terbaik</span>
                </h1>

                <p class="mt-7 max-w-2xl text-base leading-8 text-white/80 sm:text-lg">
                    Kenali berbagai produk perdagangan berjangka dan Sistem
                    Perdagangan Alternatif (SPA) yang tercantum dalam informasi
                    produk PT Equityworld Futures. Pelajari kode kontrak,
                    karakteristik, serta risiko setiap produk sebelum bertransaksi.
                </p>

                <div class="mt-9 flex flex-wrap gap-4">
                    <a href="#produk-jfx"
                       class="inline-flex items-center gap-3 rounded-xl bg-[#D5B893] px-7 py-3.5 font-bold text-[#25344F] shadow-lg shadow-black/10 transition duration-300 hover:-translate-y-1 hover:bg-white">
                        Jelajahi Produk
                        <span aria-hidden="true">&darr;</span>
                    </a>

                    <a href="#keunggulan"
                       class="inline-flex items-center gap-3 rounded-xl border border-white/30 bg-white/5 px-7 py-3.5 font-bold text-white transition duration-300 hover:border-[#D5B893] hover:bg-white/10">
                        Keunggulan Produk
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>

            {{-- Ornamen dekoratif --}}
            <div class="pointer-events-none absolute bottom-12 right-10 hidden lg:block">
                <div class="flex items-center gap-4">
                    <div class="h-px w-20 bg-[#D5B893]/60"></div>
                    <span class="text-xs font-semibold uppercase tracking-[0.3em] text-white/50">
                        Equityworld Futures
                    </span>
                </div>
            </div>

        </div>
    </section>


    {{-- =====================================================
        INTRODUCTION
    ====================================================== --}}
    <section class="relative overflow-hidden bg-linear-to-br from-white via-white to-[#D5B893]/15 px-5 py-10 lg:px-8 lg:py-12">

        <div class="pointer-events-none absolute -right-20 top-10 h-64 w-64 rounded-full border border-[#D5B893]/30"></div>

        <div class="relative mx-auto max-w-7xl">
            <div class="max-w-3xl">

                <p class="flex items-center gap-3 text-xs font-extrabold uppercase tracking-[0.22em] text-[#6F4D38]">
                    <span class="h-px w-10 bg-[#D5B893]"></span>
                    Jelajahi Produk
                </p>

                <h2 class="mt-5 font-['Manrope'] text-3xl font-extrabold leading-tight text-[#25344F] sm:text-4xl">
                    Informasi Produk
                    <span class="text-[#632024]">Perdagangan Berjangka</span>
                </h2>

                <p class="mt-6 leading-8 text-[#617891]">
                    EWF menyediakan informasi mengenai berbagai instrumen
                    perdagangan berjangka, termasuk kontrak komoditas dan
                    produk dengan mekanisme Sistem Perdagangan Alternatif.
                    Setiap produk memiliki karakteristik, kode kontrak,
                    mekanisme transaksi, dan risiko yang perlu dipahami.
                </p>

                <div class="mt-8 h-1 w-24 rounded-full bg-linear-to-r from-[#632024] to-[#D5B893]"></div>
            </div>
        </div>
    </section>


    {{-- =====================================================
        PRODUCT DATA
    ====================================================== --}}
    @php
        /*
        |--------------------------------------------------------------------------
        | GAMBAR PRODUK ONLINE
        |--------------------------------------------------------------------------
        | Gambar menggunakan URL langsung dari penyedia gambar online.
        | Tidak perlu menyimpan gambar di folder public atau storage Laravel.
        |--------------------------------------------------------------------------
        */

        $goldImage = 'https://images.pexels.com/photos/8442325/pexels-photo-8442325.jpeg?auto=compress&cs=tinysrgb&w=1200';

        $jfxProducts = [
            [
                'code' => 'GOL250',
                'title' => 'Kontrak Berjangka Emas 250 Gram',
                'description' => 'Kontrak derivatif standar yang berkaitan dengan emas dengan ukuran kontrak 250 gram. Informasi produk mencakup periode kontrak, mekanisme perdagangan, serta ketentuan penyerahan fisik atau penyelesaian sesuai spesifikasi kontrak.',
                'type' => 'Kontrak Berjangka Komoditas',
                'image' => $goldImage,
                'image_alt' => 'Ilustrasi emas batangan untuk kontrak berjangka emas 250 gram',
            ],
            [
                'code' => 'GOL',
                'title' => 'Kontrak Berjangka Emas',
                'description' => 'Kontrak berjangka yang berkaitan dengan pergerakan harga emas. Produk ini dapat digunakan untuk strategi perdagangan atau pengelolaan risiko harga, dengan memperhatikan spesifikasi kontrak, margin, dan risiko pergerakan pasar.',
                'type' => 'Kontrak Berjangka Komoditas',
                'image' => $goldImage,
                'image_alt' => 'Ilustrasi komoditas emas',
            ],
            [
                'code' => 'OLE',
                'title' => 'Kontrak Berjangka Olein',
                'description' => 'Produk perdagangan berjangka berbasis komoditas olein, yaitu minyak kelapa sawit olahan. Kontrak ini berkaitan dengan perubahan harga komoditas dan dapat digunakan untuk strategi perdagangan maupun lindung nilai sesuai ketentuan yang berlaku.',
                'type' => 'Kontrak Berjangka Komoditas',
                'image' => 'https://images.unsplash.com/photo-1474979266404-7eaacbcd87c5?auto=format&fit=crop&w=1200&q=85',
                'image_alt' => 'Ilustrasi minyak nabati dan komoditas olein',
            ],
        ];

        $spaProducts = [
            [
                'codes' => 'GU10F_BBJ & GU1010_BBJ',
                'title' => 'Produk GU',
                'description' => 'Informasi produk dengan kode GU10F_BBJ dan GU1010_BBJ. Spesifikasi, aset acuan, ukuran kontrak, serta ketentuan transaksinya perlu merujuk pada dokumen resmi produk.',
                'type' => 'Produk SPA',
                'image' => $goldImage,
                'image_alt' => 'Ilustrasi perdagangan emas',
            ],
            [
                'codes' => 'EU1010_BBJ & EU10F_BBJ',
                'title' => 'Produk EU',
                'description' => 'Informasi produk dengan kode EU1010_BBJ dan EU10F_BBJ. Pelajari spesifikasi kontrak, aset acuan, mekanisme transaksi, serta risiko sebelum melakukan perdagangan.',
                'type' => 'Produk SPA',
                'image' => 'https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=1200&q=85',
                'image_alt' => 'Ilustrasi mata uang dan perdagangan valuta asing',
            ],
            [
                'codes' => 'UC10F_BBJ & UC1010_BBJ',
                'title' => 'Produk UC',
                'description' => 'Produk dengan kode UC10F_BBJ dan UC1010_BBJ. Deskripsi awal mengaitkannya dengan Spot Gold dan komoditas lainnya; aset acuan serta spesifikasi masing-masing kode perlu dikonfirmasi pada dokumen resmi.',
                'type' => 'Produk SPA',
                'image' => $goldImage,
                'image_alt' => 'Ilustrasi perdagangan Spot Gold',
            ],
            [
                'codes' => 'UJ10F_BBJ & UJ1010_BBJ',
                'title' => 'Produk UJ',
                'description' => 'Produk dengan kode UJ10F_BBJ dan UJ1010_BBJ yang pada informasi awal disebut berkaitan dengan Spot Gold atau emas digital. Pastikan spesifikasi dan karakteristik produknya melalui dokumen resmi.',
                'type' => 'Produk SPA',
                'image' => $goldImage,
                'image_alt' => 'Ilustrasi emas digital dan emas batangan',
            ],
            [
                'codes' => 'JPK50_BBJ & JPK5U_BBJ',
                'title' => 'Kontrak Indeks Saham Jepang',
                'description' => 'Kode kontrak yang pada informasi awal dikaitkan dengan indeks Nikkei 225. Produk disebut tersedia dalam denominasi Rupiah dan USD. Periksa aset acuan, mekanisme kontrak, dan ketentuan perdagangannya sebelum bertransaksi.',
                'type' => 'Produk SPA',
                'image' => 'https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?auto=format&fit=crop&w=1200&q=85',
                'image_alt' => 'Ilustrasi kota Tokyo Jepang untuk indeks saham Nikkei',
            ],
            [
                'codes' => 'BCO10_BBJ & BCOF_BBJ',
                'title' => 'Produk BCO',
                'description' => 'Produk dengan kode BCO10_BBJ dan BCOF_BBJ yang pada informasi awal dikaitkan dengan kontrak derivatif indeks saham. Detail indeks acuan dan spesifikasi kontrak perlu diperiksa pada dokumen resmi.',
                'type' => 'Produk SPA',
                'image' => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=1200&q=85',
                'image_alt' => 'Ilustrasi grafik pergerakan indeks saham',
            ],
            [
                'codes' => 'HKK50_BBJ & HKK5U_BBJ',
                'title' => 'Kontrak Indeks Saham Hong Kong',
                'description' => 'Kode kontrak yang pada informasi awal dikaitkan dengan indeks Hang Seng. Produk disebut tersedia dalam denominasi Rupiah dan USD, dengan harga yang mengacu pada instrumen indeks terkait. Periksa spesifikasi dan risiko kontrak.',
                'type' => 'Produk SPA',
                'image' => 'https://images.unsplash.com/photo-1536599018102-9f803c140fc1?auto=format&fit=crop&w=1200&q=85',
                'image_alt' => 'Ilustrasi gedung dan pemandangan kota Hong Kong untuk indeks Hang Seng',
            ],
            [
                'codes' => 'XUL10 & XULF',
                'title' => 'Produk Emas Loco London',
                'description' => 'Kode kontrak XUL10 dan XULF yang pada informasi awal dikaitkan dengan derivatif emas Loco London. Keduanya disebut menggunakan denominasi Rupiah dan USD. Detail harga acuan, mekanisme kontrak, dan ketentuan transaksi harus mengikuti dokumen resmi.',
                'type' => 'Produk SPA',
                'image' => $goldImage,
                'image_alt' => 'Ilustrasi emas batangan Loco London',
            ],
            [
                'codes' => 'AU1010_BBJ & AU10F_BBJ',
                'title' => 'Produk AU',
                'description' => 'Kode kontrak yang pada informasi awal dikaitkan dengan pergerakan nilai tukar Dolar Australia (AUD) terhadap Dolar AS (USD). Informasi mengenai denominasi dan spesifikasi kontrak perlu dikonfirmasi melalui dokumen produk resmi.',
                'type' => 'Produk SPA',
                'image' => 'https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=1200&q=85',
                'image_alt' => 'Ilustrasi mata uang untuk perdagangan AUD dan USD',
            ],
        ];
    @endphp


    {{-- =====================================================
        JFX PRODUCTS
    ====================================================== --}}
    <section id="produk-jfx" class="scroll-mt-24 bg-[#F8F9FB] px-5 py-10 lg:px-8 lg:py-12">

        <div class="mx-auto max-w-7xl">

            <div class="flex flex-col gap-5 border-b border-[#D5B893]/50 pb-8 sm:flex-row sm:items-end sm:justify-between">

                <div>
                    <span class="inline-flex items-center gap-2 rounded-full border border-[#D5B893] bg-[#D5B893]/15 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#632024]"></span>
                        JFX
                    </span>

                    <h2 class="mt-5 font-['Manrope'] text-3xl font-extrabold text-[#25344F] sm:text-4xl">
                        Kontrak Berjangka
                        <span class="text-[#632024]">Komoditas</span>
                    </h2>

                    <p class="mt-4 max-w-2xl leading-7 text-[#617891]">
                        Kenali kontrak berjangka yang berkaitan dengan
                        komoditas emas dan olein.
                    </p>
                </div>

                <div class="flex items-center gap-3">
                    <span class="h-10 w-1 rounded-full bg-[#D5B893]"></span>
                    <span class="text-sm font-bold text-[#25344F]">
                        {{ count($jfxProducts) }} produk
                    </span>
                </div>
            </div>

            <div class="mt-10 grid gap-7 md:grid-cols-2 lg:grid-cols-3">

                @foreach ($jfxProducts as $index => $product)

                    <article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white shadow-sm transition duration-300 hover:-translate-y-2 hover:border-[#632024]/30 hover:shadow-xl">

                        {{-- GAMBAR PRODUK --}}
                        <div class="relative h-44 overflow-hidden bg-[#25344F]">

                            <img
                                src="{{ $product['image'] }}"
                                alt="{{ $product['image_alt'] }}"
                                width="1200"
                                height="800"
                                loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                                decoding="async"
                                class="product-image h-full w-full object-cover transition duration-700 group-hover:scale-110"
                                onerror="this.style.display='none'; this.parentElement.querySelector('.image-fallback').classList.remove('hidden');"
                            >

                            {{-- FALLBACK GAMBAR --}}
                            <div class="image-fallback absolute inset-0 hidden flex-col items-center justify-center bg-linear-to-br from-[#25344F] to-[#632024]">
                                <div class="text-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-[#D5B893]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                                        <circle cx="8.5" cy="8.5" r="1.5"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 15-5-5L5 21"/>
                                    </svg>
                                    <p class="mt-3 text-sm font-bold tracking-wide">Gambar Produk</p>
                                </div>
                            </div>

                            {{-- OVERLAY --}}
                            <div class="pointer-events-none absolute inset-0 bg-linear-to-t from-[#25344F]/90 via-[#25344F]/10 to-transparent"></div>

                            <span class="absolute bottom-5 left-5 rounded-lg border border-white/30 bg-white/95 px-4 py-2 text-sm font-extrabold tracking-wide text-[#25344F] shadow-lg">
                                {{ $product['code'] }}
                            </span>

                            <span class="absolute right-5 top-5 rounded-full border border-[#D5B893]/60 bg-[#25344F]/85 px-4 py-1.5 text-xs font-extrabold tracking-wider text-[#D5B893] backdrop-blur-sm">
                                JFX
                            </span>
                        </div>

                        {{-- INFORMASI PRODUK --}}
                        <div class="flex flex-1 flex-col p-5">

                            <div class="flex items-start justify-between gap-4">

                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#25344F] text-sm font-extrabold text-[#D5B893]">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>

                                <span class="max-w-[70%] text-right text-[10px] font-extrabold uppercase leading-5 tracking-[0.13em] text-[#617891]">
                                    {{ $product['type'] }}
                                </span>

                            </div>

                            <h3 class="mt-4 font-['Manrope'] text-lg font-extrabold leading-snug text-[#25344F] transition group-hover:text-[#632024]">
                                {{ $product['title'] }}
                            </h3>

                            <p class="mt-4 flex-1 text-sm leading-7 text-[#617891]">
                                {{ $product['description'] }}
                            </p>

                           <a href="{{ route('contact') }}"
                            class="mt-5 inline-flex items-center justify-between gap-3 border-t border-[#D5B893]/50 pt-5 font-bold text-[#632024] transition hover:text-[#6F4D38]">
                                <span>Tanyakan informasi</span>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#D5B893]/20 transition group-hover:bg-[#632024] group-hover:text-white" aria-hidden="true">
                                    &rarr;
                                </span>
                            </a>

                        </div>
                    </article>

                @endforeach

            </div>
        </div>
    </section>


    {{-- =====================================================
        SPA PRODUCTS
    ====================================================== --}}
    <section id="produk-spa" class="scroll-mt-24 bg-white px-5 py-10 lg:px-8 lg:py-12">

        <div class="mx-auto max-w-7xl">

            <div class="flex flex-col gap-5 border-b border-[#D5B893]/50 pb-8 sm:flex-row sm:items-end sm:justify-between">

                <div>
                    <span class="inline-flex items-center gap-2 rounded-full border border-[#617891]/30 bg-[#617891]/10 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.2em] text-[#25344F]">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#617891]"></span>
                        SPA
                    </span>

                    <h2 class="mt-5 font-['Manrope'] text-3xl font-extrabold text-[#25344F] sm:text-4xl">
                        Sistem Perdagangan
                        <span class="text-[#632024]">Alternatif</span>
                    </h2>

                    <p class="mt-4 max-w-2xl leading-7 text-[#617891]">
                        Daftar kode produk SPA berdasarkan informasi yang
                        diberikan. Periksa dokumen resmi untuk memastikan
                        spesifikasi dan karakteristik setiap kontrak.
                    </p>
                </div>

                <div class="flex items-center gap-3">
                    <span class="h-10 w-1 rounded-full bg-[#632024]"></span>
                    <span class="text-sm font-bold text-[#25344F]">
                        {{ count($spaProducts) }} kelompok produk
                    </span>
                </div>
            </div>

            <div class="mt-10 grid gap-7 md:grid-cols-2 lg:grid-cols-3">

                @foreach ($spaProducts as $index => $product)

                    <article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white shadow-sm transition duration-300 hover:-translate-y-2 hover:border-[#632024]/30 hover:shadow-xl">

                        {{-- GAMBAR PRODUK --}}
                        <div class="relative h-44 overflow-hidden bg-[#25344F]">

                            <img
                                src="{{ $product['image'] }}"
                                alt="{{ $product['image_alt'] }}"
                                width="1200"
                                height="800"
                                loading="lazy"
                                decoding="async"
                                class="product-image h-full w-full object-cover transition duration-700 group-hover:scale-110"
                                onerror="this.style.display='none'; this.parentElement.querySelector('.image-fallback').classList.remove('hidden');"
                            >

                            {{-- FALLBACK GAMBAR --}}
                            <div class="image-fallback absolute inset-0 hidden flex-col items-center justify-center bg-linear-to-br from-[#25344F] to-[#632024]">
                                <div class="text-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-[#D5B893]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                                        <circle cx="8.5" cy="8.5" r="1.5"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 15-5-5L5 21"/>
                                    </svg>
                                    <p class="mt-3 text-sm font-bold tracking-wide">Gambar Produk</p>
                                </div>
                            </div>

                            {{-- OVERLAY --}}
                            <div class="pointer-events-none absolute inset-0 bg-linear-to-t from-[#25344F]/90 via-[#25344F]/10 to-transparent"></div>

                            <span class="absolute bottom-5 left-5 max-w-[75%] rounded-lg border border-white/30 bg-white/95 px-4 py-2 text-xs font-extrabold tracking-wide text-[#25344F] shadow-lg">
                                {{ $product['title'] }}
                            </span>

                            <span class="absolute right-5 top-5 rounded-full border border-[#D5B893]/60 bg-[#25344F]/85 px-4 py-1.5 text-xs font-extrabold tracking-wider text-[#D5B893] backdrop-blur-sm">
                                SPA
                            </span>
                        </div>

                        {{-- INFORMASI PRODUK --}}
                        <div class="flex flex-1 flex-col p-5">

                            <div class="flex items-start justify-between gap-4">

                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#D5B893]/25 text-sm font-extrabold text-[#632024]">
                                    {{ str_pad($index + 4, 2, '0', STR_PAD_LEFT) }}
                                </span>

                                <span class="text-xs font-extrabold uppercase tracking-[0.15em] text-[#617891]">
                                    {{ $product['type'] }}
                                </span>

                            </div>

                            <h3 class="mt-4 font-['Manrope'] text-lg font-extrabold leading-snug text-[#25344F] transition group-hover:text-[#632024]">
                                {{ $product['title'] }}
                            </h3>

                            {{-- KODE PRODUK --}}
                            <div class="mt-3 rounded-xl border border-[#D5B893]/60 bg-linear-to-br from-[#D5B893]/15 to-white p-3">
                                <div class="flex items-center gap-2">
                                    <span class="h-1.5 w-1.5 rounded-full bg-[#632024]"></span>
                                    <p class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[#6F4D38]">
                                        Kode Produk
                                    </p>
                                </div>

                                <p class="mt-3 wrap-break-word text-sm font-extrabold leading-6 text-[#25344F]">
                                    {{ $product['codes'] }}
                                </p>
                            </div>

                            <p class="mt-3 flex-1 text-sm leading-6 text-[#617891] line-clamp-3">
                             {{ $product['description'] }}
                            </p>

                            <a href="{{ route('contact') }}"
                            class="mt-5 inline-flex items-center justify-between gap-3 border-t border-[#D5B893]/50 pt-5 font-bold text-[#632024] transition hover:text-[#6F4D38]">                                <span>Tanyakan informasi</span>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#D5B893]/20 transition group-hover:bg-[#632024] group-hover:text-white" aria-hidden="true">
                                    &rarr;
                                </span>
                            </a>

                        </div>
                    </article>

                @endforeach

            </div>
        </div>
    </section>


    {{-- =====================================================
        PRODUCT ADVANTAGES
    ====================================================== --}}
    @php
        $advantages = [
            [
                'number' => '01',
                'icon' => 'wallet',
                'title' => 'Efisiensi Modal',
                'description' => 'Mekanisme margin memungkinkan nasabah membuka posisi dengan dana jaminan sesuai persyaratan kontrak, tanpa harus menyediakan seluruh nilai nosional transaksi. Besarnya margin dan potensi kerugian perlu dipahami sebelum bertransaksi.',
            ],
            [
                'number' => '02',
                'icon' => 'arrows',
                'title' => 'Fleksibilitas Transaksi',
                'description' => 'Karakteristik produk tertentu memungkinkan strategi berdasarkan perkiraan kenaikan maupun penurunan harga. Hasil transaksi tetap bergantung pada kondisi pasar, strategi, dan risiko yang dihadapi.',
            ],
            [
                'number' => '03',
                'icon' => 'chart',
                'title' => 'Pergerakan Harga',
                'description' => 'Pergerakan harga memberikan peluang sekaligus risiko. Nilai per poin, rentang harga, biaya transaksi, serta spesifikasi kontrak berbeda menurut produk dan harus diperiksa melalui ketentuan resminya.',
            ],
            [
                'number' => '04',
                'icon' => 'clock',
                'title' => 'Akses Perdagangan',
                'description' => 'Jam perdagangan, likuiditas, dan ketersediaan harga mengikuti karakteristik instrumen serta ketentuan pasar. Eksekusi transaksi dan ketersediaan harga tidak selalu dapat dijamin setiap saat.',
            ],
        ];
    @endphp

    <section id="keunggulan" class="relative isolate scroll-mt-24 overflow-hidden bg-[#25344F] px-5 py-10 text-white lg:px-8 lg:py-12">

        {{-- Dekorasi --}}
        <div class="pointer-events-none absolute -right-28 -top-32 h-96 w-96 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-40 -left-20 h-96 w-96 rounded-full bg-[#632024]/40 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl">

            <div class="max-w-3xl">

                <p class="flex items-center gap-3 text-xs font-extrabold uppercase tracking-[0.22em] text-[#D5B893]">
                    <span class="h-px w-10 bg-[#D5B893]"></span>
                    Nilai dan Karakteristik
                </p>

                <h2 class="mt-5 font-['Manrope'] text-3xl font-extrabold sm:text-4xl">
                    Keunggulan
                    <span class="text-[#D5B893]">Produk</span>
                </h2>

                <p class="mt-5 leading-8 text-white/70">
                    Keunggulan produk PT Equityworld Futures dirancang
                    untuk mendukung strategi perdagangan nasabah secara
                    efisien dan fleksibel. Setiap karakteristik tetap perlu
                    dipahami bersama risiko dan ketentuan produknya.
                </p>

            </div>

            <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                @foreach ($advantages as $advantage)

                    <article class="group relative overflow-hidden rounded-2xl border border-white/15 bg-white/6 p-6 backdrop-blur-sm transition duration-300 hover:-translate-y-2 hover:border-[#D5B893]/60 hover:bg-white/10">
                        <div class="absolute right-0 top-0 h-24 w-24 rounded-bl-full bg-[#D5B893]/5 transition group-hover:bg-[#D5B893]/10"></div>

                        <div class="relative flex items-center justify-between">

                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893] text-[#25344F]">

                                @if ($advantage['icon'] === 'wallet')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <rect x="3" y="5" width="18" height="15" rx="2"/>
                                        <path d="M3 9h18M16 14h2M6 5V3h12v2"/>
                                    </svg>

                                @elseif ($advantage['icon'] === 'arrows')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path d="M7 7h14l-4-4M17 17H3l4 4"/>
                                        <path d="m17 3 4 4-4 4M7 13l-4 4 4 4"/>
                                    </svg>

                                @elseif ($advantage['icon'] === 'chart')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path d="M3 3v18h18"/>
                                        <path d="m7 14 4-4 4 3 5-7"/>
                                    </svg>

                                @elseif ($advantage['icon'] === 'clock')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <circle cx="12" cy="12" r="9"/>
                                        <path d="M12 7v5l3 2"/>
                                    </svg>
                                @endif

                            </span>

                            <span class="text-4xl font-black text-white/10">
                                {{ $advantage['number'] }}
                            </span>

                        </div>

                        <h3 class="relative mt-5 font-['Manrope'] text-lg font-extrabold leading-snug text-[#D5B893]">
                            {{ $advantage['title'] }}
                        </h3>

                        <p class="relative mt-3 text-sm leading-6 text-white/70">
                            {{ $advantage['description'] }}
                        </p>

                        <div class="mt-5 h-px w-12 bg-[#D5B893]/60 transition-all duration-300 group-hover:w-full">

                        </div>

                    </article>

                @endforeach

            </div>
        </div>
    </section>


    {{-- =====================================================
        INVESTMENT TYPES
    ====================================================== --}}
    <section id="jenis-investasi" class="relative overflow-hidden bg-linear-to-br from-white via-white to-[#D5B893]/15 px-5 py-10 lg:px-8 lg:py-12">

        <div class="pointer-events-none absolute -right-20 bottom-0 h-72 w-72 rounded-full border border-[#D5B893]/30"></div>

        <div class="relative mx-auto max-w-7xl">

            <div class="max-w-3xl">

                <p class="flex items-center gap-3 text-xs font-extrabold uppercase tracking-[0.22em] text-[#6F4D38]">
                    <span class="h-px w-10 bg-[#D5B893]"></span>
                    Pilihan Denominasi
                </p>

                <h2 class="mt-5 font-['Manrope'] text-3xl font-extrabold text-[#25344F] sm:text-4xl">
                    Jenis
                    <span class="text-[#632024]">Investasi</span>
                </h2>

                <p class="mt-5 leading-8 text-[#617891]">
                    Informasi berikut merangkum dua jenis kurs yang
                    tercantum pada materi yang diberikan. Pastikan
                    ketentuan kurs dan biaya sesuai dengan kontrak,
                    rekening, dan perjanjian yang berlaku.
                </p>

            </div>

            <div class="mt-11 grid gap-7 md:grid-cols-2">

                {{-- FIXED RATE --}}
                <article class="group overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="relative overflow-hidden bg-[#25344F] p-8 text-white">

                        <div class="absolute -right-8 -top-12 h-40 w-40 rounded-full border border-[#D5B893]/20"></div>
                        <div class="absolute -right-2 -top-6 h-28 w-28 rounded-full border border-[#D5B893]/15"></div>

                        <div class="relative">
                            <span class="text-xs font-bold uppercase tracking-[0.22em] text-[#D5B893]">
                                Jenis Pertama
                            </span>

                            <h3 class="mt-4 font-['Manrope'] text-3xl font-extrabold">
                                Fixed Rate
                            </h3>

                            <p class="mt-2 text-sm text-white/65">
                                Kurs Tetap
                            </p>

                            <div class="mt-6 h-1 w-14 rounded-full bg-[#D5B893]"></div>
                        </div>

                    </div>

                    <div class="p-6">

                        <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#6F4D38]">
                            Informasi Kurs
                        </p>

                        <p class="mt-3 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                            US$ 1 = Rp10.000
                        </p>

                        <p class="mt-3 text-sm leading-6 text-[#617891]">
                            Nilai kurs tetap sebagaimana tercantum dalam
                            materi yang diberikan. Penerapan kurs ini
                            harus dikonfirmasi berdasarkan ketentuan produk
                            dan perjanjian yang berlaku.
                        </p>

                        <div class="mt-5 rounded-xl border border-[#D5B893]/50 bg-[#D5B893]/10 p-4">

                            <h4 class="font-['Manrope'] font-extrabold text-[#25344F]">
                                Karakteristik
                            </h4>

                            <ul class="mt-3 space-y-3 text-sm leading-6 text-[#617891]">

                                <li class="flex items-start gap-3">
                                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#632024] text-xs font-extrabold text-white">01</span>
                                    <span>Menggunakan nilai kurs tetap sesuai ketentuan produk.</span>
                                </li>

                                <li class="flex items-start gap-3">
                                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#632024] text-xs font-extrabold text-white">02</span>
                                    <span>Perlakuan terhadap perubahan kurs USD/IDR mengikuti perjanjian yang berlaku.</span>
                                </li>

                            </ul>
                        </div>

                    </div>
                </article>


                {{-- FLOATING RATE --}}
                <article class="group overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="relative overflow-hidden bg-[#632024] p-8 text-white">

                        <div class="absolute -right-8 -top-12 h-40 w-40 rounded-full border border-[#D5B893]/25"></div>
                        <div class="absolute -right-2 -top-6 h-28 w-28 rounded-full border border-[#D5B893]/20"></div>

                        <div class="relative">
                            <span class="text-xs font-bold uppercase tracking-[0.22em] text-[#D5B893]">
                                Jenis Kedua
                            </span>

                            <h3 class="mt-4 font-['Manrope'] text-3xl font-extrabold">
                                Floating Rate
                            </h3>

                            <p class="mt-2 text-sm text-white/65">
                                Kurs Berjalan
                            </p>

                            <div class="mt-6 h-1 w-14 rounded-full bg-[#D5B893]"></div>
                        </div>

                    </div>

                    <div class="p-8">

                        <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#6F4D38]">
                            Informasi Kurs
                        </p>

                        <p class="mt-3 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                            Mengikuti Kurs USD/IDR
                        </p>

                        <p class="mt-3 text-sm leading-6 text-[#617891]">
                            Nilai Rupiah mengikuti kurs yang berlaku
                            sesuai ketentuan produk dan waktu transaksi.
                            Dampak perubahan kurs perlu diperhitungkan
                            sebelum melakukan transaksi.
                        </p>

                        <div class="mt-5 rounded-xl border border-[#D5B893]/50 bg-[#D5B893]/10 p-4">

                            <h4 class="font-['Manrope'] font-extrabold text-[#25344F]">
                                Karakteristik
                            </h4>

                            <ul class="mt-3 space-y-3 text-sm leading-6 text-[#617891]">

                                <li class="flex items-start gap-3">
                                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#632024] text-xs font-extrabold text-white">01</span>
                                    <span>Konversi mengikuti kurs yang berlaku sesuai ketentuan produk.</span>
                                </li>

                                <li class="flex items-start gap-3">
                                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#632024] text-xs font-extrabold text-white">02</span>
                                    <span>Ketentuan biaya pembukaan dan penarikan dana USD perlu dikonfirmasi kepada perusahaan.</span>
                                </li>

                            </ul>
                        </div>

                    </div>
                </article>

            </div>

            <div class="mt-7 flex items-start gap-3 rounded-xl border border-[#D5B893]/50 bg-white/80 p-5"><div class="mt-5 flex items-start gap-3 rounded-xl border border-[#D5B893]/50 bg-white/80 p-4">
                <span class="mt-0.5 flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#D5B893]/30 text-[#632024]">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M12 8v4m0 4h.01"/>
                        <circle cx="12" cy="12" r="9"/>
                    </svg>
                </span>

                <p class="text-xs leading-5 text-[#617891]">
                    Catatan: informasi kurs tetap, kurs berjalan, dan biaya
                    pada halaman ini merupakan ringkasan materi awal.
                    Ketentuan yang berlaku harus mengacu pada dokumen resmi
                    produk dan perjanjian nasabah.
                </p>

            </div>

        </div>
    </section>



    {{-- =====================================================
        RISK NOTICE
    ====================================================== --}}
    <section class="bg-white px-5 pb-8 lg:px-8">

        <div class="mx-auto max-w-7xl">

            <div class="relative overflow-hidden rounded-2xl border border-[#D5B893]/70 bg-linear-to-br from-[#D5B893]/15 via-white to-white p-5 sm:p-6">

                <div class="absolute right-0 top-0 h-40 w-40 rounded-bl-full border-b border-l border-[#D5B893]/30"></div>

                <div class="relative flex flex-col gap-4 sm:flex-row sm:items-start">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893] shadow-sm">

                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="M10.3 3.9 2.6 17.2A2 2 0 0 0 4.3 20h15.4a2 2 0 0 0 1.7-2.8L13.7 3.9a2 2 0 0 0-3.4 0Z"/>
                            <path d="M12 9v4M12 17h.01"/>
                        </svg>

                    </div>

                    <div class="max-w-4xl">

                        <span class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#6F4D38]">
                            Informasi Risiko
                        </span>

                        <h2 class="mt-1 font-['Manrope'] text-lg font-extrabold text-[#25344F] sm:text-xl">
                            Pahami Risiko Sebelum Bertransaksi
                        </h2>

                        <p class="mt-3 text-sm leading-6 text-[#617891]">
                            Perdagangan berjangka dan produk derivatif
                            memiliki risiko serta dapat mengakibatkan
                            kerugian. Pahami spesifikasi kontrak, nilai
                            margin, biaya transaksi, mekanisme penyelesaian,
                            dan dokumen pemberitahuan risiko yang berlaku.
                            Pergerakan harga yang menguntungkan tidak dapat
                            dijamin.
                        </p>

                    </div>

                </div>
            </div>

        </div>
    </section>


    {{-- =====================================================
        ANTI-FRAUD NOTICE
    ====================================================== --}}
    <section class="bg-white px-5 pb-10 lg:px-8 lg:pb-12">

        <div class="mx-auto max-w-7xl">

            <div class="overflow-hidden rounded-2xl border border-[#632024]/20 bg-white shadow-sm">

                {{-- HEADER --}}
                <div class="relative overflow-hidden border-b border-[#D5B893]/40 bg-[#25344F] p-5 text-white sm:p-6">

                    <div class="absolute -right-12 -top-24 h-64 w-64 rounded-full border border-[#D5B893]/20"></div>

                    <div class="relative flex items-center gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#632024] text-[#D5B893]">

                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M10.3 3.9 2.6 17.2A2 2 0 0 0 4.3 20h15.4a2 2 0 0 0 1.7-2.8L13.7 3.9a2 2 0 0 0-3.4 0Z"/>
                                <path d="M12 9v4M12 17h.01"/>
                            </svg>

                        </div>

                        <div>
                            <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#D5B893]">
                                Informasi Penting
                            </p>

                            <h2 class="mt-1 font-['Manrope'] text-xl font-extrabold text-white">
                                PERHATIAN
                            </h2>
                        </div>

                    </div>
                </div>

                {{-- CONTENT --}}
                <div class="p-5 sm:p-6">

                    <p class="text-sm leading-6 text-[#617891]">
                        PT Equityworld Futures mengingatkan masyarakat
                        untuk selalu waspada terhadap penipuan yang
                        mengatasnamakan perusahaan melalui media apa pun.
                        Pastikan seluruh transaksi dan setoran hanya
                        dilakukan ke Rekening Terpisah (Segregated Account)
                        resmi atas nama PT Equityworld Futures, bukan
                        perseorangan.
                    </p>

                    <div class="mt-5 rounded-xl border-l-4 border-[#632024] bg-[#D5B893]/15 p-4">

                        <div class="flex items-start gap-3">

                            <span class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-[#632024] text-[#D5B893]">

                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M12 8v4m0 4h.01"/>
                                    <circle cx="12" cy="12" r="9"/>
                                </svg>

                            </span>

                            <p class="text-sm leading-6 text-[#25344F]">
                                <strong class="font-extrabold text-[#632024]">Tips keamanan:</strong>
                                verifikasi identitas pihak yang menghubungi
                                Anda dan pastikan informasi rekening melalui
                                kanal resmi perusahaan sebelum melakukan
                                penyetoran dana.
                            </p>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

</main>

@endsection