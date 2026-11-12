
@extends('layouts.public')

@section('content')
<main>

    {{-- =====================================================
         1. HERO SECTION
    ====================================================== --}}
    <section class="relative overflow-hidden bg-[#FFF9F0]">

        {{-- Background Decoration --}}
        <div class="pointer-events-none absolute -left-20 top-20 h-64 w-64 rounded-full bg-[#FFA368]/15 blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-0 right-0 h-80 w-80 rounded-full bg-ewf-hawkbit/20 blur-3xl"></div>

        <div class="mx-auto grid max-w-7xl items-center gap-14 px-5 py-20 sm:px-8 lg:grid-cols-2 lg:px-10 lg:py-28">

            {{-- HERO CONTENT --}}
            <div class="relative z-10">

                <span class="inline-flex items-center gap-2 rounded-full border border-[#951A21]/15 bg-white/80 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.16em] text-[#951A21] shadow-sm">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-ewf-red-poppy"></span>
                    {{ $content['hero_label'] ?? 'Mitra Perdagangan Berjangka' }}
                </span>

                <h1 class="mt-7 max-w-2xl text-4xl font-extrabold leading-[1.12] tracking-tight text-[#951A21] sm:text-5xl lg:text-[3.8rem]">
                    {!! nl2br(e($content['hero_title'] ?? 'Membangun Kepercayaan, Memahami Peluang Pasar')) !!}
                </h1>

                <div class="mt-6 h-1.5 w-20 rounded-full bg-linear-to-r from-[#951A21] via-ewf-red-poppy to-[#FFA368]"></div>

                <p class="mt-7 max-w-xl text-base leading-8 text-[#75676A]">
                    {{ $content['hero_description'] ?? 'Kenali PT Equityworld Futures, produk dan layanan, serta informasi perusahaan melalui situs resmi kami.' }}
                </p>

                <div class="mt-9 flex flex-wrap gap-3">

                    <a href="{{ route('about') }}"
                       class="inline-flex items-center gap-3 rounded-xl bg-[#951A21] px-7 py-4 text-sm font-extrabold text-white shadow-lg transition duration-300 hover:-translate-y-1 hover:bg-ewf-red-poppy hover:shadow-xl">
                        Tentang Kami
                        <span aria-hidden="true">→</span>
                    </a>

                    <a href="{{ route('products') }}"
                       class="inline-flex items-center gap-3 rounded-xl border-2 border-[#951A21] bg-transparent px-7 py-4 text-sm font-extrabold text-[#951A21] transition duration-300 hover:-translate-y-1 hover:bg-[#951A21] hover:text-white">
                        Jelajahi Produk
                    </a>

                </div>

                <div class="mt-10 flex flex-wrap gap-x-7 gap-y-4 text-sm font-semibold text-[#75676A]">

                    <span class="inline-flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#EFBB55]/30 text-xs text-[#951A21]">
                            ✓
                        </span>
                        Informasi Perusahaan
                    </span>

                    <span class="inline-flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#FFA368]/30 text-xs text-[#951A21]">
                            ✓
                        </span>
                        Informasi Produk
                    </span>

                    <span class="inline-flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-ewf-hawkbit/40 text-xs text-[#951A21]">
                            ✓
                        </span>
                        Informasi Legalitas
                    </span>

                </div>
            </div>

            {{-- HERO VISUAL --}}
            <div class="relative mx-auto w-full max-w-lg">

                <div class="relative overflow-hidden rounded-[30px] bg-linear-to-br from-ewf-wine-dark via-[#951A21] to-ewf-red-poppy p-8 text-white shadow-2xl sm:p-10">

                    {{-- Decorative Circles --}}
                    <div class="pointer-events-none absolute -right-20 -top-20 h-80 w-80 rounded-full border border-white/15"></div>
                    <div class="pointer-events-none absolute -right-8 top-10 h-56 w-56 rounded-full border border-ewf-hawkbit/30"></div>
                    <div class="pointer-events-none absolute bottom-20 right-10 h-32 w-32 rounded-full bg-[#FFA368]/10 blur-2xl"></div>

                    {{-- Decorative Lines --}}
                    <div class="pointer-events-none absolute right-0 top-0 h-full w-1/2 opacity-20">
                        <svg class="h-full w-full" viewBox="0 0 300 400" preserveAspectRatio="none" aria-hidden="true">
                            <defs>
                                <pattern id="hero-diagonal-pattern" width="35" height="35" patternUnits="userSpaceOnUse">
                                    <path d="M0 35 L35 0" fill="none" stroke="#FFD66E" stroke-width="1.5"/>
                                </pattern>
                            </defs>
                            <rect width="300" height="400" fill="url(#hero-diagonal-pattern)"/>
                        </svg>
                    </div>

                    <div class="relative z-10">

                        <div class="flex items-center justify-between gap-3">

                            <span class="text-xs font-extrabold uppercase tracking-[0.22em] text-ewf-hawkbit">
                                PT Equityworld Futures
                            </span>

                            <span class="rounded-full border border-white/20 bg-white/10 px-3 py-1 text-[10px] font-semibold tracking-wider text-white/80">
                                EWF
                            </span>

                        </div>

                        <div class="mt-14">

                            <span class="text-sm font-semibold tracking-widest text-ewf-hawkbit">
                                EQUITYWORLD
                            </span>

                            <h2 class="mt-4 max-w-md text-3xl font-extrabold leading-tight sm:text-4xl">
                                Mengenal Perusahaan Lebih Dekat
                            </h2>

                            <p class="mt-5 max-w-sm text-sm leading-7 text-white/75">
                                Temukan informasi profil, produk, layanan, legalitas, serta peluang karier melalui website resmi kami.
                            </p>

                        </div>

                        {{-- Visual Information --}}
                        <div class="mt-12 grid grid-cols-2 gap-3">

                            <div class="rounded-2xl border border-white/15 bg-white/10 p-4 backdrop-blur-sm">

                                <div class="text-2xl font-extrabold text-ewf-hawkbit">
                                    EWF
                                </div>

                                <p class="mt-2 text-xs text-white/75">
                                    Informasi Perusahaan
                                </p>

                            </div>

                            <div class="rounded-2xl border border-white/15 bg-white/10 p-4 backdrop-blur-sm">

                                <div class="text-2xl font-extrabold text-ewf-hawkbit">
                                    360°
                                </div>

                                <p class="mt-2 text-xs text-white/75">
                                    Informasi dan Layanan
                                </p>

                            </div>

                        </div>

                        <div class="mt-8 border-t border-white/20 pt-6">

                            <a href="{{ route('contact') }}"
                               class="inline-flex items-center gap-3 text-sm font-bold text-ewf-hawkbit transition-all hover:gap-5 hover:text-white">
                                Hubungi Kami
                                <span aria-hidden="true">→</span>
                            </a>

                        </div>

                    </div>
                </div>

                {{-- Floating Decoration --}}
                <div class="absolute -left-7 top-1/3 hidden h-16 w-16 animate-bounce items-center justify-center rounded-2xl border border-white/60 bg-ewf-hawkbit shadow-xl [animation-duration:4s] sm:flex">
                    <span class="text-2xl font-extrabold text-[#951A21]">
                        E
                    </span>
                </div>

                <div class="absolute -bottom-5 -right-4 h-20 w-20 rounded-full border-10 border-[#FFA368]/30"></div>

            </div>

        </div>

        {{-- Bottom Decorative Transition --}}
        <div class="h-2 bg-linear-to-r from-[#951A21] via-[#EFBB55] to-[#FFA368]"></div>

    </section>


    {{-- =====================================================
         2. QUICK NAVIGATION
    ====================================================== --}}
    <section class="relative z-10 border-b border-[#EADCDD] bg-white py-10">

        <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">

            <div class="mb-6 flex flex-wrap items-center justify-between gap-3">

                <div>

                    <span class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#951A21]">
                        Explore EWF
                    </span>

                    <h2 class="mt-2 text-xl font-extrabold text-[#35282A]">
                        Jelajahi Informasi Kami
                    </h2>

                </div>

                <span class="text-sm text-[#75676A]">
                    Temukan informasi yang kamu butuhkan
                </span>

            </div>

            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

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
                        'color' => 'orange'
                    ],
                    [
                        'number' => '03',
                        'title' => 'Legalitas',
                        'description' => 'Ketahui informasi legalitas perusahaan.',
                        'route' => 'legality',
                        'symbol' => '03',
                        'color' => 'yellow'
                    ],
                    [
                        'number' => '04',
                        'title' => 'Karier',
                        'description' => 'Temukan peluang karier dan magang.',
                        'route' => 'careers',
                        'symbol' => '04',
                        'color' => 'orange'
                    ],
                ] as $item)

                    @php
                        $cardColor = match ($item['color']) {
                            'rose' => 'bg-[#F5E6E6]',
                            'orange' => 'bg-[#FFF0E6]',
                            'yellow' => 'bg-[#FFF6DE]',
                            default => 'bg-[#FFF0E6]',
                        };
                    @endphp

                    <a href="{{ route($item['route']) }}"
                       class="group relative overflow-hidden rounded-2xl border border-[#EADCDD] bg-[#FFF9F0] p-6 transition duration-300 hover:-translate-y-2 hover:border-[#951A21]/30 hover:bg-white hover:shadow-xl">

                        <div class="absolute -right-5 -top-5 h-24 w-24 rounded-full opacity-60 transition duration-500 group-hover:scale-150 {{ $cardColor }}"></div>

                        <div class="relative z-10">

                            <div class="flex items-center justify-between">

                                <span class="text-xs font-extrabold tracking-widest text-ewf-red-poppy">
                                    {{ $item['number'] }}
                                </span>

                                <span class="flex h-10 w-10 items-center justify-center rounded-xl text-xs font-extrabold text-[#951A21] transition duration-300 group-hover:rotate-12 group-hover:scale-110 {{ $cardColor }}">
                                    {{ $item['symbol'] }}
                                </span>

                            </div>

                            <h3 class="mt-6 text-lg font-extrabold text-[#951A21]">
                                {{ $item['title'] }}
                            </h3>

                            <p class="mt-2 min-h-12 text-sm leading-6 text-[#75676A]">
                                {{ $item['description'] }}
                            </p>

                            <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-[#951A21] transition-all group-hover:gap-4">
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
    <section class="relative bg-[#FFF9F0] py-20 lg:py-28">

        {{-- Background Decoration --}}
        <div class="pointer-events-none absolute right-0 top-0 h-72 w-72 rounded-full bg-ewf-hawkbit/10 blur-3xl"></div>

        <div class="relative z-10 mx-auto grid max-w-7xl items-center gap-12 px-5 sm:px-8 lg:grid-cols-2 lg:px-10">

            <div>

                <span class="inline-flex rounded-full border border-[#951A21]/15 bg-white/80 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.18em] text-[#951A21]">
                    Mengenal Perusahaan
                </span>

                <h2 class="mt-6 text-3xl font-extrabold leading-tight tracking-tight text-[#951A21] sm:text-4xl lg:text-5xl">
                    {{ $content['about_title'] ?? 'Mengenal PT Equityworld Futures' }}
                </h2>

                <div class="mt-6 h-1 w-20 rounded-full bg-[#EFBB55]"></div>

                <p class="mt-7 text-base leading-8 text-[#75676A]">
                    {{ $content['about_description'] ?? 'Pelajari profil dan informasi perusahaan melalui halaman Tentang Kami.' }}
                </p>

                <a href="{{ route('about') }}"
                   class="mt-8 inline-flex items-center gap-3 font-extrabold text-[#951A21] transition-all hover:gap-5 hover:text-ewf-red-poppy">
                    Mengenal Perusahaan
                    <span aria-hidden="true">→</span>
                </a>

            </div>

            {{-- Company Visual --}}
            <div class="relative">

                <div class="absolute -right-5 -top-5 h-32 w-32 rounded-full bg-ewf-hawkbit/50 blur-sm"></div>
                <div class="absolute -bottom-5 -left-5 h-28 w-28 rounded-3xl bg-[#FFA368]/35"></div>

                <div class="relative overflow-hidden rounded-[28px] border border-[#951A21]/10 bg-linear-to-br from-white via-[#F8EBE9] to-[#FFF0E6] p-8 shadow-xl sm:p-10">

                    <div class="absolute -right-14 -top-14 h-52 w-52 rounded-full border border-[#951A21]/10"></div>
                    <div class="absolute -right-5 -top-5 h-36 w-36 rounded-full border border-[#951A21]/10"></div>

                    <div class="relative z-10">

                        <span class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#951A21]">
                            Equityworld Futures
                        </span>

                        <h3 class="mt-5 max-w-md text-3xl font-extrabold leading-snug text-ewf-wine-dark">
                            Mengenal layanan dan informasi perusahaan dalam satu tempat.
                        </h3>

                        <p class="mt-5 text-sm leading-7 text-[#75676A]">
                            Akses informasi perusahaan, produk, fasilitas, dan berbagai informasi pendukung lainnya.
                        </p>

                        <div class="mt-9 flex items-center gap-4 border-t border-[#951A21]/15 pt-6">

                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#951A21] text-lg font-extrabold text-white shadow-lg">
                                EWF
                            </div>

                            <div>

                                <p class="font-extrabold text-[#951A21]">
                                    PT Equityworld Futures
                                </p>

                                <p class="mt-1 text-xs text-[#75676A]">
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
    <section class="relative overflow-hidden bg-[#FFF3D9] py-20 lg:py-24">

        {{-- Background Decoration --}}
        <div class="pointer-events-none absolute -left-20 top-20 h-72 w-72 rounded-full bg-[#FFA368]/10 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-20 right-0 h-80 w-80 rounded-full bg-ewf-hawkbit/20 blur-3xl"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">

            <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">

                <div>

                    <span class="inline-flex rounded-full border border-[#951A21]/15 bg-white/70 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.18em] text-[#951A21]">
                        Kabar Terkini
                    </span>

                    <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-[#951A21] sm:text-4xl">
                        Berita dan Informasi
                    </h2>

                    <p class="mt-4 max-w-xl leading-7 text-[#75676A]">
                        Ikuti informasi dan artikel terbaru yang tersedia melalui website PT Equityworld Futures.
                    </p>

                </div>

                <a href="{{ route('news.index') }}"
                   class="inline-flex items-center gap-2 font-extrabold text-[#951A21] transition-all hover:gap-4 hover:text-ewf-red-poppy">
                    Lihat Semua Berita
                    <span aria-hidden="true">→</span>
                </a>

            </div>

            @if (!empty($content['news']) && count($content['news']) > 0)

                <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                    @foreach (array_slice($content['news'], 0, 3) as $item)

                        <article class="group overflow-hidden rounded-2xl border border-[#EADCDD] bg-white shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                            {{-- News Visual --}}
                            <div class="relative flex min-h-46.25 items-end justify-between overflow-hidden bg-linear-to-br from-ewf-wine-dark via-[#951A21] to-ewf-red-poppy p-6">

                                <div class="pointer-events-none absolute -right-10 -top-10 h-48 w-48 rounded-full border border-white/15"></div>
                                <div class="pointer-events-none absolute -right-5 top-5 h-32 w-32 rounded-full border border-ewf-hawkbit/25"></div>
                                <div class="pointer-events-none absolute bottom-0 left-0 h-32 w-32 rounded-full bg-[#FFA368]/10 blur-2xl"></div>

                                <div class="relative z-10">

                                    <span class="rounded-full bg-ewf-hawkbit px-3 py-2 text-xs font-extrabold text-ewf-wine-dark">
                                        INFORMASI TERKINI
                                    </span>

                                </div>

                                <span class="relative z-10 text-4xl font-extrabold text-white/90 transition duration-300 group-hover:scale-110">
                                    EWF
                                </span>

                            </div>

                            <div class="p-7">

                                <span class="text-xs font-extrabold uppercase tracking-wider text-ewf-red-poppy">
                                    Berita Perusahaan
                                </span>

                                <h3 class="mt-4 line-clamp-2 text-lg font-extrabold leading-7 text-[#951A21]">
                                    {{ $item['title'] ?? 'Informasi terbaru' }}
                                </h3>

                                <p class="mt-4 line-clamp-3 text-sm leading-7 text-[#75676A]">
                                    {{ \Illuminate\Support\Str::limit(
                                        $item['description'] ?? $item['excerpt'] ?? $item['content'] ?? 'Baca informasi selengkapnya di halaman berita.',
                                        120
                                    ) }}
                                </p>

                                <a href="{{ route('news.index') }}"
                                   class="mt-6 inline-flex items-center gap-2 text-sm font-extrabold text-[#951A21] transition-all group-hover:gap-4">
                                    Baca Selengkapnya
                                    <span aria-hidden="true">→</span>
                                </a>

                            </div>

                        </article>

                    @endforeach

                </div>

            @else

                <div class="mt-10 rounded-3xl border border-dashed border-[#D9B9A7] bg-white/80 p-12 text-center">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-ewf-wine-soft text-2xl font-extrabold text-[#951A21]">
                        E
                    </div>

                    <h3 class="mt-5 text-lg font-extrabold text-[#951A21]">
                        Berita Akan Segera Ditampilkan
                    </h3>

                    <p class="mt-2 text-sm text-[#75676A]">
                        Kunjungi halaman berita untuk melihat informasi yang tersedia.
                    </p>

                    <a href="{{ route('news.index') }}"
                       class="mt-6 inline-flex font-bold text-[#951A21] transition hover:text-ewf-red-poppy">
                        Kunjungi Halaman Berita →
                    </a>

                </div>

            @endif

        </div>

    </section>


    {{-- =====================================================
         5. CONTACT CTA
    ====================================================== --}}
    <section class="relative overflow-hidden bg-[#FFF9F0] py-20 lg:py-24">

        <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">

            <div class="relative overflow-hidden rounded-[30px] bg-linear-to-br from-ewf-wine-dark via-[#951A21] to-[#722F37] px-8 py-12 text-white shadow-2xl sm:px-12 lg:px-16 lg:py-14">

                {{-- Decorative Circles --}}
                <div class="pointer-events-none absolute -right-20 -top-32 h-96 w-96 rounded-full border border-white/15"></div>
                <div class="pointer-events-none absolute -right-5 -top-16 h-64 w-64 rounded-full border border-ewf-hawkbit/25"></div>
                <div class="pointer-events-none absolute -bottom-24 left-1/3 h-64 w-64 rounded-full bg-ewf-red-poppy/30 blur-3xl"></div>

                <div class="relative z-10 flex flex-col items-start justify-between gap-8 lg:flex-row lg:items-center">

                    <div class="max-w-2xl">

                        <span class="inline-flex rounded-full border border-ewf-hawkbit/30 bg-white/10 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.18em] text-ewf-hawkbit">
                            Butuh Informasi?
                        </span>

                        <h2 class="mt-6 text-3xl font-extrabold leading-tight sm:text-4xl">
                            Mari Mengenal Equityworld Futures Lebih Dekat.
                        </h2>

                        <p class="mt-5 max-w-xl text-sm leading-8 text-white/75 sm:text-base">
                            Kunjungi halaman kontak untuk menemukan informasi perusahaan dan saluran komunikasi yang tersedia.
                        </p>

                    </div>

                    <a href="{{ route('contact') }}"
                       class="inline-flex shrink-0 items-center gap-3 rounded-xl bg-ewf-hawkbit px-7 py-4 text-sm font-extrabold text-ewf-wine-dark shadow-lg transition-all hover:-translate-y-1 hover:bg-[#EFBB55] hover:shadow-xl">
                        Hubungi Kami
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>

        </div>

    </section>

</main>
@endsection
