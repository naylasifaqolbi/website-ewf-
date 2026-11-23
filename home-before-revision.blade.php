@extends('layouts.public')

@section('content')
<main class="overflow-hidden bg-white text-[#25344F]">

    {{-- =====================================================
         1. HERO SECTION
    ====================================================== --}}
    <section class="relative isolate overflow-hidden bg-[#632024]">

        {{-- Background Decoration --}}
        <div class="pointer-events-none absolute -left-32 top-10 h-80 w-80 rounded-full bg-[#D5B893]/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -right-24 bottom-0 h-96 w-96 rounded-full bg-[#617891]/20 blur-3xl"></div>

        <div class="pointer-events-none absolute inset-y-0 right-0 hidden w-1/2 bg-linear-to-l from-[#25344F]/20 to-transparent lg:block"></div>

        <div class="relative mx-auto grid max-w-7xl items-center gap-10 px-5 py-14 sm:px-8 lg:grid-cols-2 lg:gap-12 lg:px-10 lg:py-16">

            {{-- HERO CONTENT --}}
            <div class="relative z-10">

                <h1 class="max-w-2xl text-4xl font-extrabold leading-[1.13] tracking-tight text-white sm:text-5xl lg:text-[3.7rem]">
                    {!! nl2br(e($content['hero_title'] ?? 'Membangun Kepercayaan, Memahami Peluang Pasar')) !!}
                </h1>

                <div class="mt-7 flex items-center gap-3">
                    <span class="h-1.5 w-14 rounded-full bg-[#D5B893]"></span>
                    <span class="h-1.5 w-8 rounded-full bg-[#FFA368]"></span>
                    <span class="h-1.5 w-3 rounded-full bg-white"></span>
                </div>

                <p class="mt-7 max-w-xl text-base leading-8 text-[#E8D3B2]">
                    {{ $content['hero_description'] ?? 'Kenali PT Equityworld Futures, produk dan layanan, serta informasi perusahaan melalui situs resmi kami.' }}
                </p>

                {{-- HERO BUTTONS --}}
                <div class="mt-9 flex flex-wrap gap-4">

                    <a href="{{ route('about') }}"
                       class="group inline-flex items-center gap-3 rounded-xl bg-[#D5B893] px-7 py-4 text-sm font-extrabold text-[#632024] shadow-lg shadow-black/15 transition duration-300 hover:-translate-y-1 hover:bg-white hover:shadow-xl">

                        Tentang Kami

                        <span class="transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">
                            →
                        </span>

                    </a>

                    <a href="{{ route('products') }}"
                       class="group inline-flex items-center gap-3 rounded-xl border border-white/50 bg-white/10 px-7 py-4 text-sm font-extrabold text-white shadow-sm backdrop-blur-sm transition duration-300 hover:-translate-y-1 hover:border-[#D5B893] hover:bg-white hover:text-[#632024]">

                        Jelajahi Produk

                        <span class="transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">
                            →
                        </span>

                    </a>

                </div>

                {{-- HERO INFORMATION --}}
                <div class="mt-11 flex flex-wrap gap-x-7 gap-y-4 border-t border-white/20 pt-7 text-sm font-semibold text-[#F5E9D8]">

                    <span class="inline-flex items-center gap-2.5">
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#D5B893] text-xs font-extrabold text-[#632024]">
                            ✓
                        </span>
                        Informasi Perusahaan
                    </span>

                    <span class="inline-flex items-center gap-2.5">
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#FFA368] text-xs font-extrabold text-[#632024]">
                            ✓
                        </span>
                        Informasi Produk
                    </span>

                    <span class="inline-flex items-center gap-2.5">
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-white text-xs font-extrabold text-[#632024]">
                            ✓
                        </span>
                        Informasi Legalitas
                    </span>

                </div>

            </div>


            {{-- HERO VISUAL --}}
            <div class="relative mx-auto w-full max-w-lg">

                {{-- Decorative Shapes --}}
                <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full border border-[#D5B893]"></div>
                <div class="pointer-events-none absolute -bottom-8 -left-8 h-36 w-36 rounded-3xl bg-[#D5B893]/30"></div>

                <div class="relative overflow-hidden rounded-[30px] bg-linear-to-br from-[#25344F] via-[#354963] to-[#632024] p-7 text-white shadow-[0_25px_60px_rgba(37,52,79,0.22)] sm:p-9">

                    {{-- Decorative Circles --}}
                    <div class="pointer-events-none absolute -right-20 -top-20 h-80 w-80 rounded-full border border-white/15"></div>
                    <div class="pointer-events-none absolute -right-8 top-10 h-56 w-56 rounded-full border border-[#D5B893]/35"></div>
                    <div class="pointer-events-none absolute bottom-20 right-10 h-36 w-36 rounded-full bg-[#6F4D38]/40 blur-3xl"></div>
                    <div class="pointer-events-none absolute -bottom-24 -left-16 h-64 w-64 rounded-full bg-[#632024]/50 blur-3xl"></div>

                    {{-- Decorative Pattern --}}
                    <div class="pointer-events-none absolute right-0 top-0 h-full w-1/2 opacity-15">
                        <svg class="h-full w-full" viewBox="0 0 300 400" preserveAspectRatio="none" aria-hidden="true">
                            <defs>
                                <pattern id="hero-diagonal-pattern" width="35" height="35" patternUnits="userSpaceOnUse">
                                    <path d="M0 35 L35 0" fill="none" stroke="#D5B893" stroke-width="1.5"/>
                                </pattern>
                            </defs>
                            <rect width="300" height="400" fill="url(#hero-diagonal-pattern)"/>
                        </svg>
                    </div>

                    <div class="relative z-10">

                        <div class="flex items-center justify-between gap-3">

                            <span class="text-[11px] font-extrabold uppercase tracking-[0.23em] text-[#D5B893]">
                                PT Equityworld Futures
                            </span>

                            <span class="rounded-full border border-[#D5B893]/40 bg-white/10 px-3 py-1.5 text-[10px] font-bold tracking-[0.2em] text-white">
                                EWF
                            </span>

                        </div>

                        <div class="mt-12">

                            <span class="text-sm font-bold tracking-[0.25em] text-[#D5B893]">
                                EQUITYWORLD
                            </span>

                            <h2 class="mt-4 max-w-md text-3xl font-extrabold leading-tight text-white sm:text-4xl">
                                Mengenal Perusahaan Lebih Dekat
                            </h2>

                            <p class="mt-5 max-w-sm text-sm leading-7 text-white/85">
                                Temukan informasi profil, produk, layanan, legalitas, serta peluang karier melalui website resmi kami.
                            </p>

                        </div>

                        {{-- Visual Information --}}
                        <div class="mt-10 grid grid-cols-2 gap-3">

                            <div class="rounded-2xl border border-white/15 bg-white/10 p-4 backdrop-blur-sm">

                                <div class="text-2xl font-extrabold text-[#D5B893]">
                                    EWF
                                </div>

                                <p class="mt-2 text-xs leading-5 text-white/85">
                                    Informasi Perusahaan
                                </p>

                            </div>

                            <div class="rounded-2xl border border-white/15 bg-white/10 p-4 backdrop-blur-sm">

                                <div class="text-2xl font-extrabold text-[#D5B893]">
                                    360°
                                </div>

                                <p class="mt-2 text-xs leading-5 text-white/85">
                                    Informasi dan Layanan
                                </p>

                            </div>

                        </div>

                        <div class="mt-7 border-t border-white/20 pt-5">

                            <a href="{{ route('contact') }}"
                               class="group inline-flex items-center gap-3 text-sm font-extrabold text-[#D5B893] transition-all hover:gap-5 hover:text-white">

                                Hubungi Kami

                                <span aria-hidden="true">→</span>

                            </a>

                        </div>

                    </div>

                </div>

                {{-- Floating Decoration --}}
                <div class="absolute -left-7 top-1/3 hidden h-16 w-16 animate-bounce items-center justify-center rounded-2xl border border-[#D5B893] bg-white shadow-xl [animation-duration:4s] sm:flex">
                    <span class="text-2xl font-extrabold text-[#632024]">
                        E
                    </span>
                </div>

                <div class="absolute -bottom-5 -right-4 h-20 w-20 rounded-full border-10 border-[#D5B893]/50"></div>

            </div>

        </div>

        {{-- Bottom Accent --}}
        <div class="h-1.5 bg-linear-to-r from-[#632024] via-[#D5B893] to-[#6F4D38]"></div>

    </section>


    {{-- =====================================================
         2. QUICK NAVIGATION
    ====================================================== --}}
    <section class="relative z-10 border-b border-[#DCE2E9] bg-white py-12">

        <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">

            <div class="mb-7 flex flex-wrap items-end justify-between gap-4">

                <div>

                    <span class="text-[11px] font-extrabold uppercase tracking-[0.22em] text-[#632024]">
                        Explore EWF
                    </span>

                    <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-[#25344F]">
                        Jelajahi Informasi Kami
                    </h2>

                    <div class="mt-3 flex gap-2">
                        <span class="h-1 w-10 rounded-full bg-[#632024]"></span>
                        <span class="h-1 w-5 rounded-full bg-[#D5B893]"></span>
                    </div>

                </div>

                <span class="text-sm font-medium text-[#617891]">
                    Temukan informasi yang kamu butuhkan
                </span>

            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                @foreach ([
                    [
                        'number' => '01',
                        'title' => 'Tentang Kami',
                        'description' => 'Kenali profil dan informasi perusahaan.',
                        'route' => 'about',
                        'symbol' => '01',
                        'color' => 'rose'
                    ],
                    [
                        'number' => '02',
                        'title' => 'Produk & Layanan',
                        'description' => 'Pelajari informasi produk dan layanan.',
                        'route' => 'products',
                        'symbol' => '02',
                        'color' => 'coffee'
                    ],
                    [
                        'number' => '03',
                        'title' => 'Legalitas',
                        'description' => 'Ketahui informasi legalitas perusahaan.',
                        'route' => 'legality',
                        'symbol' => '03',
                        'color' => 'tan'
                    ],
                    [
                        'number' => '04',
                        'title' => 'Karier',
                        'description' => 'Temukan peluang karier dan magang.',
                        'route' => 'careers',
                        'symbol' => '04',
                        'color' => 'slate'
                    ],
                ] as $item)

                    @php
                        $cardColor = match ($item['color']) {
                            'rose' => 'bg-[#632024]/10 text-[#632024]',
                            'coffee' => 'bg-[#6F4D38]/10 text-[#6F4D38]',
                            'tan' => 'bg-[#D5B893]/35 text-[#632024]',
                            'slate' => 'bg-[#617891]/10 text-[#25344F]',
                            default => 'bg-[#F1F3F6] text-[#25344F]',
                        };
                    @endphp

                    <a href="{{ route($item['route']) }}"
                       class="group relative overflow-hidden rounded-2xl border border-[#DCE2E9] bg-white p-6 transition duration-300 hover:-translate-y-2 hover:border-[#D5B893] hover:shadow-[0_18px_35px_rgba(37,52,79,0.10)]">

                        {{-- Decorative Circle --}}
                        <div class="absolute -right-8 -top-8 h-28 w-28 rounded-full bg-[#F5F1EB] transition duration-500 group-hover:scale-150"></div>

                        <div class="relative z-10">

                            <div class="flex items-center justify-between">

                                <span class="text-xs font-extrabold tracking-[0.2em] text-[#617891]">
                                    {{ $item['number'] }}
                                </span>

                                <span class="flex h-11 w-11 items-center justify-center rounded-xl text-xs font-extrabold transition duration-300 group-hover:rotate-6 group-hover:scale-110 {{ $cardColor }}">
                                    {{ $item['symbol'] }}
                                </span>

                            </div>

                            <h3 class="mt-7 text-lg font-extrabold text-[#25344F] transition-colors group-hover:text-[#632024]">
                                {{ $item['title'] }}
                            </h3>

                            <p class="mt-2 min-h-12 text-sm leading-6 text-[#617891]">
                                {{ $item['description'] }}
                            </p>

                            <span class="mt-6 inline-flex items-center gap-2 text-sm font-extrabold text-[#632024] transition-all group-hover:gap-4">
                                Selengkapnya
                                <span aria-hidden="true">→</span>
                            </span>

                        </div>

                    </a>

                @endforeach

            </div>

        </div>

    </section>


    {{-- =====================================================
         3. ABOUT COMPANY
    ====================================================== --}}
    <section class="relative overflow-hidden bg-[#F7F8FA] py-20 lg:py-28">

        {{-- Background Decoration --}}
        <div class="pointer-events-none absolute -right-20 top-0 h-80 w-80 rounded-full bg-[#D5B893]/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-20 -left-20 h-72 w-72 rounded-full bg-[#617891]/10 blur-3xl"></div>

        <div class="relative z-10 mx-auto grid max-w-7xl items-center gap-14 px-5 sm:px-8 lg:grid-cols-2 lg:px-10">

            <div>

                <span class="inline-flex items-center gap-2 rounded-full border border-[#D5B893] bg-white px-4 py-2 text-[11px] font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                    <span class="h-2 w-2 rounded-full bg-[#6F4D38]"></span>
                    Mengenal Perusahaan
                </span>

                <h2 class="mt-7 text-3xl font-extrabold leading-tight tracking-tight text-[#25344F] sm:text-4xl lg:text-5xl">
                    {{ $content['about_title'] ?? 'Mengenal PT Equityworld Futures' }}
                </h2>

                <div class="mt-6 flex gap-2">
                    <span class="h-1.5 w-14 rounded-full bg-[#632024]"></span>
                    <span class="h-1.5 w-7 rounded-full bg-[#D5B893]"></span>
                </div>

                <p class="mt-7 text-base leading-8 text-[#52647A]">
                    {{ $content['about_description'] ?? 'Pelajari profil dan informasi perusahaan melalui halaman Tentang Kami.' }}
                </p>

                <a href="{{ route('about') }}"
                   class="group mt-9 inline-flex items-center gap-3 rounded-xl bg-[#25344F] px-6 py-3.5 text-sm font-extrabold text-white shadow-lg shadow-[#25344F]/15 transition duration-300 hover:-translate-y-1 hover:bg-[#632024]">

                    Mengenal Perusahaan

                    <span class="transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">
                        →
                    </span>

                </a>

            </div>


            {{-- COMPANY VISUAL --}}
            <div class="relative">

                <div class="pointer-events-none absolute -right-5 -top-5 h-32 w-32 rounded-full bg-[#D5B893]/50 blur-sm"></div>
                <div class="pointer-events-none absolute -bottom-5 -left-5 h-28 w-28 rounded-3xl bg-[#632024]/10"></div>

                <div class="relative overflow-hidden rounded-[28px] border border-[#D5B893]/60 bg-linear-to-br from-white via-[#F1F3F6] to-[#EEE7DC] p-8 shadow-[0_20px_45px_rgba(37,52,79,0.10)] sm:p-10">

                    {{-- Decorative Circles --}}
                    <div class="pointer-events-none absolute -right-14 -top-14 h-52 w-52 rounded-full border border-[#632024]/15"></div>
                    <div class="pointer-events-none absolute -right-5 -top-5 h-36 w-36 rounded-full border border-[#D5B893]"></div>
                    <div class="pointer-events-none absolute bottom-0 right-0 h-40 w-40 rounded-full bg-[#D5B893]/15 blur-2xl"></div>

                    <div class="relative z-10">

                        <span class="text-[11px] font-extrabold uppercase tracking-[0.22em] text-[#632024]">
                            Equityworld Futures
                        </span>

                        <h3 class="mt-5 max-w-md text-3xl font-extrabold leading-snug text-[#25344F]">
                            Mengenal layanan dan informasi perusahaan dalam satu tempat.
                        </h3>

                        <p class="mt-5 max-w-md text-sm leading-7 text-[#52647A]">
                            Akses informasi perusahaan, produk, fasilitas, dan berbagai informasi pendukung lainnya.
                        </p>

                        <div class="mt-10 flex items-center gap-4 border-t border-[#25344F]/15 pt-7">

                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-[#632024] text-base font-extrabold tracking-wide text-white shadow-lg shadow-[#632024]/20">
                                EWF
                            </div>

                            <div>

                                <p class="font-extrabold text-[#25344F]">
                                    PT Equityworld Futures
                                </p>

                                <p class="mt-1 text-xs font-medium text-[#617891]">
                                    Informasi dan layanan perusahaan
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         4. LATEST NEWS
    ====================================================== --}}
    <section class="relative overflow-hidden bg-white py-20 lg:py-24">

        {{-- Background Decoration --}}
        <div class="pointer-events-none absolute -left-20 top-20 h-72 w-72 rounded-full bg-[#D5B893]/15 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-20 right-0 h-80 w-80 rounded-full bg-[#617891]/10 blur-3xl"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">

            <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">

                <div>

                    <span class="inline-flex items-center gap-2 rounded-full border border-[#D5B893] bg-[#F7F8FA] px-4 py-2 text-[11px] font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                        Kabar Terkini
                    </span>

                    <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-[#25344F] sm:text-4xl">
                        Berita dan Informasi
                    </h2>

                    <div class="mt-4 flex gap-2">
                        <span class="h-1 w-10 rounded-full bg-[#632024]"></span>
                        <span class="h-1 w-5 rounded-full bg-[#D5B893]"></span>
                    </div>

                    <p class="mt-5 max-w-xl leading-7 text-[#52647A]">
                        Ikuti informasi dan artikel terbaru yang tersedia melalui website PT Equityworld Futures.
                    </p>

                </div>

                <a href="{{ route('news.index') }}"
                   class="group inline-flex items-center gap-2 font-extrabold text-[#632024] transition-all hover:gap-4 hover:text-[#6F4D38]">

                    Lihat Semua Berita

                    <span aria-hidden="true">→</span>

                </a>

            </div>


            @if (!empty($content['news']) && count($content['news']) > 0)

                <div class="mt-11 grid gap-7 md:grid-cols-2 lg:grid-cols-3">

                    @foreach (array_slice($content['news'], 0, 3) as $item)

                        <article class="group overflow-hidden rounded-2xl border border-[#DCE2E9] bg-white shadow-sm transition duration-300 hover:-translate-y-2 hover:border-[#D5B893] hover:shadow-[0_20px_40px_rgba(37,52,79,0.12)]">

                            {{-- NEWS VISUAL --}}
                            <div class="relative flex min-h-48 items-end justify-between overflow-hidden bg-linear-to-br from-[#25344F] via-[#354963] to-[#632024] p-6">

                                {{-- Decorative Shapes --}}
                                <div class="pointer-events-none absolute -right-10 -top-10 h-48 w-48 rounded-full border border-white/15 transition duration-500 group-hover:scale-110"></div>
                                <div class="pointer-events-none absolute -right-5 top-5 h-32 w-32 rounded-full border border-[#D5B893]/35"></div>
                                <div class="pointer-events-none absolute bottom-0 left-0 h-32 w-32 rounded-full bg-[#6F4D38]/30 blur-2xl"></div>

                                <div class="relative z-10">

                                    <span class="inline-flex rounded-full border border-[#D5B893]/50 bg-[#D5B893] px-3 py-2 text-[10px] font-extrabold tracking-[0.12em] text-[#25344F]">
                                        INFORMASI TERKINI
                                    </span>

                                </div>

                                <span class="relative z-10 text-4xl font-extrabold tracking-wider text-white/90 transition duration-300 group-hover:scale-110">
                                    EWF
                                </span>

                            </div>


                            {{-- NEWS CONTENT --}}
                            <div class="p-7">

                                <span class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                                    Berita Perusahaan
                                </span>

                                <h3 class="mt-4 line-clamp-2 text-lg font-extrabold leading-7 text-[#25344F] transition-colors group-hover:text-[#632024]">
                                    {{ $item['title'] ?? 'Informasi terbaru' }}
                                </h3>

                                <p class="mt-4 line-clamp-3 text-sm leading-7 text-[#617891]">
                                    {{ \Illuminate\Support\Str::limit(
                                        $item['description'] ?? $item['excerpt'] ?? $item['content'] ?? 'Baca informasi selengkapnya di halaman berita.',
                                        120
                                    ) }}
                                </p>

                                <div class="mt-6 border-t border-[#DCE2E9] pt-5">

                                    <a href="{{ route('news.index') }}"
                                       class="inline-flex items-center gap-2 text-sm font-extrabold text-[#632024] transition-all group-hover:gap-4">

                                        Baca Selengkapnya

                                        <span aria-hidden="true">→</span>

                                    </a>

                                </div>

                            </div>

                        </article>

                    @endforeach

                </div>

            @else

                {{-- EMPTY NEWS STATE --}}
                <div class="mt-11 overflow-hidden rounded-3xl border border-dashed border-[#D5B893] bg-[#F7F8FA] px-6 py-14 text-center">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#632024] text-2xl font-extrabold text-white shadow-lg shadow-[#632024]/15">
                        E
                    </div>

                    <h3 class="mt-6 text-lg font-extrabold text-[#25344F]">
                        Berita Akan Segera Ditampilkan
                    </h3>

                    <p class="mx-auto mt-2 max-w-md text-sm leading-7 text-[#617891]">
                        Kunjungi halaman berita untuk melihat informasi yang tersedia.
                    </p>

                    <a href="{{ route('news.index') }}"
                       class="mt-6 inline-flex items-center gap-2 font-extrabold text-[#632024] transition-all hover:gap-4 hover:text-[#6F4D38]">

                        Kunjungi Halaman Berita

                        <span aria-hidden="true">→</span>

                    </a>

                </div>

            @endif

        </div>

    </section>


    {{-- =====================================================
         5. CONTACT CTA
    ====================================================== --}}
    <section class="relative overflow-hidden bg-[#F7F8FA] py-20 lg:py-24">

        <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">

            <div class="relative overflow-hidden rounded-[30px] bg-linear-to-br from-[#25344F] via-[#354963] to-[#632024] px-8 py-12 text-white shadow-[0_25px_55px_rgba(37,52,79,0.20)] sm:px-12 lg:px-16 lg:py-16">

                {{-- Decorative Circles --}}
                <div class="pointer-events-none absolute -right-20 -top-32 h-96 w-96 rounded-full border border-white/15"></div>
                <div class="pointer-events-none absolute -right-5 -top-16 h-64 w-64 rounded-full border border-[#D5B893]/35"></div>
                <div class="pointer-events-none absolute -bottom-24 left-1/3 h-64 w-64 rounded-full bg-[#6F4D38]/40 blur-3xl"></div>
                <div class="pointer-events-none absolute -bottom-20 -left-20 h-72 w-72 rounded-full bg-[#632024]/40 blur-3xl"></div>

                {{-- Decorative Accent --}}
                <div class="pointer-events-none absolute bottom-0 left-0 h-1.5 w-full bg-linear-to-r from-[#632024] via-[#D5B893] to-[#6F4D38]"></div>

                <div class="relative z-10 flex flex-col items-start justify-between gap-9 lg:flex-row lg:items-center">

                    <div class="max-w-2xl">

                        <span class="inline-flex items-center gap-2 rounded-full border border-[#D5B893]/40 bg-white/10 px-4 py-2.5 text-[11px] font-extrabold uppercase tracking-[0.2em] text-[#E8D3B2]">
                            <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>
                            Butuh Informasi?
                        </span>

                        <h2 class="mt-7 text-3xl font-extrabold leading-tight text-white sm:text-4xl lg:text-[2.7rem]">
                            Mari Mengenal Equityworld Futures Lebih Dekat.
                        </h2>

                        <p class="mt-5 max-w-xl text-sm leading-8 text-white/85 sm:text-base">
                            Kunjungi halaman kontak untuk menemukan informasi perusahaan dan saluran komunikasi yang tersedia.
                        </p>

                    </div>

                    <a href="{{ route('contact') }}"
                       class="group inline-flex shrink-0 items-center gap-3 rounded-xl border border-[#D5B893] bg-[#D5B893] px-7 py-4 text-sm font-extrabold text-[#25344F] shadow-lg transition duration-300 hover:-translate-y-1 hover:border-white hover:bg-white hover:shadow-xl">

                        Hubungi Kami

                        <span class="transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </section>

</main>
@endsection