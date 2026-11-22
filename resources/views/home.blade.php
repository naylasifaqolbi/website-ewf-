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
    <span class="text-xs font-semibold tracking-[0.25em] text-[#D5B893]">
        EXPLORE EQUITYWORLD
    </span>

    <h2 class="mt-4 text-3xl font-bold text-white">
        Mengenal Equityworld
    </h2>

    <p class="mt-4 text-sm leading-7 text-white/70">
        Informasi perusahaan, produk, dan peluang karier dalam satu platform.
    </p>
</div>

{{-- Visual Information --}}
<div class="mt-10 grid grid-cols-2 gap-3">

    <div class="rounded-2xl border border-white/15 bg-white/10 p-4 backdrop-blur-sm">

        <div class="text-2xl font-extrabold text-[#D5B893]">
            PROFIL
        </div>

        <p class="mt-2 text-xs leading-5 text-white/85">
            Perusahaan & Legalitas
        </p>

    </div>

    <div class="rounded-2xl border border-white/15 bg-white/10 p-4 backdrop-blur-sm">

        <div class="text-2xl font-extrabold text-[#D5B893]">
            PASAR
        </div>

        <p class="mt-2 text-xs leading-5 text-white/85">
            Produk & Layanan
        </p>

    </div>

</div>

{{-- Bottom Information --}}
<div class="mt-7 border-t border-white/20 pt-5">
    <p class="text-sm font-semibold text-white">
        Informasi & Peluang
    </p>

    <p class="mt-2 text-sm text-white/60">
        Dapatkan berita terbaru serta informasi karier Equityworld.
    </p>
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
<div class="relative mx-auto w-full max-w-lg">

    {{-- Decorative Shapes --}}
    <div class="pointer-events-none absolute -right-5 -top-5 h-32 w-32 rounded-full border border-[#D5B893]"></div>
    <div class="pointer-events-none absolute -bottom-5 -left-5 h-28 w-28 rounded-3xl bg-[#632024]/10"></div>

    {{-- Building Image --}}
    <div class="relative overflow-hidden rounded-[28px] border border-[#D5B893]/60 bg-white p-2 shadow-[0_20px_45px_rgba(37,52,79,0.15)]">

        <div class="relative overflow-hidden rounded-[22px]">
            <img
    src="{{ asset('images/trillium-kantor.jpg') }}"
    alt="Gedung PT Equityworld Futures"
    class="h-[420px] w-full object-cover object-[center_35%] transition duration-700 hover:scale-105 sm:h-[500px]"
>

            {{-- Image Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-[#25344F]/75 via-transparent to-transparent"></div>

            {{-- Image Caption --}}
            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">

                <span class="text-[10px] font-extrabold uppercase tracking-[0.22em] text-[#D5B893]">
                    PT Equityworld Futures
                </span>

                <h3 class="mt-2 text-2xl font-extrabold text-white sm:text-3xl">
                    Gedung Perusahaan
                </h3>

                <p class="mt-2 text-sm text-white/80">
                    Mengenal Equityworld Futures lebih dekat.
                </p>

            </div>
        </div>

    </div>

    {{-- Small Decorative Accent --}}
    <div class="absolute -bottom-3 right-8 h-2 w-20 rounded-full bg-[#D5B893]"></div>

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


@if (!empty($news) && count($news) > 0)
    <div class="mt-11 grid gap-7 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($news as $item)
            <article class="group overflow-hidden rounded-2xl border border-[#EAD9C5] bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                {{-- Gambar Berita --}}
                <div class="relative h-52 overflow-hidden">
                    @if (!empty($item['image']))
                        <img
                            src="{{ $item['image'] }}"
                            alt="{{ $item['title'] }}"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                    @else
                        <div class="flex h-full items-center justify-center bg-linear-to-br from-[#25344F] to-[#632024]">
                            <span class="text-3xl font-bold tracking-widest text-white">EWF</span>
                        </div>
                    @endif
                </div>

                {{-- Informasi Berita --}}
                <div class="p-6">
                    <div class="mb-3 flex flex-wrap items-center gap-2 text-xs">
                        <span class="rounded-full bg-[#F7F1EB] px-3 py-1 font-medium text-[#632024]">
                            {{ $item['category'] }}
                        </span>

                        <span class="text-gray-500">
                            {{ $item['source'] }}
                        </span>
                    </div>

                    <h3 class="mb-3 text-lg font-semibold leading-snug text-[#292323]">
                        {{ $item['title'] }}
                    </h3>

                    <p class="mb-5 text-sm leading-relaxed text-gray-600">
                       {{ Str::limit($item['excerpt'] ?? '', 120) }}
                    </p>

                    <div class="flex items-center justify-between border-t border-[#EAD9C5] pt-4">
                        <span class="text-xs text-gray-500">
                            {{ \Carbon\Carbon::parse($item['published_at'])->format('d M Y') }}
                        </span>

                        <a
                            href="{{ route('news.show', $item['slug']) }}"
                            class="text-sm font-semibold text-[#632024] transition hover:text-[#8A3545]"
                        >
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
@else
    <div class="mt-11 rounded-2xl border border-[#EAD9C5] bg-white px-6 py-12 text-center">
        <p class="text-gray-600">
            Berita belum tersedia saat ini.
        </p>
    </div>
    @endif

        </div>

    </section>


{{-- =====================================================
     5. CONTACT CTA
====================================================== --}}
<section class="relative overflow-hidden bg-[#F7F8FA] py-14 lg:py-16">

    <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">

        <div class="relative overflow-hidden rounded-[26px] bg-linear-to-br from-[#25344F] via-[#354963] to-[#632024] px-6 py-8 text-white shadow-[0_20px_45px_rgba(37,52,79,0.16)] sm:px-9 sm:py-10 lg:px-12">

            {{-- Decorative Circles --}}
            <div class="pointer-events-none absolute -right-16 -top-20 h-64 w-64 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -right-5 -top-10 h-44 w-44 rounded-full border border-[#D5B893]/20"></div>
            <div class="pointer-events-none absolute bottom-0 right-1/4 h-40 w-40 rounded-full bg-[#6F4D38]/20 blur-3xl"></div>

            {{-- Decorative Accent --}}
            <div class="pointer-events-none absolute bottom-0 left-0 h-1 w-full bg-linear-to-r from-[#632024] via-[#D5B893] to-[#6F4D38]"></div>

            {{-- Content --}}
            <div class="relative z-10 flex flex-col justify-between gap-6 lg:flex-row lg:items-center lg:gap-10">

                {{-- Text --}}
                <div class="max-w-2xl">

                    <span class="inline-flex items-center gap-2 rounded-full border border-[#D5B893]/40 bg-white/10 px-3 py-2 text-[10px] font-extrabold uppercase tracking-[0.2em] text-[#E8D3B2]">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#D5B893]"></span>
                        Butuh Informasi?
                    </span>

                    <h2 class="mt-4 text-2xl font-extrabold leading-tight text-white sm:text-3xl lg:text-4xl">
                        Mari Mengenal Equityworld Futures Lebih Dekat.
                    </h2>

                    <p class="mt-3 max-w-xl text-sm leading-7 text-white/80 sm:text-base">
                        Kunjungi halaman kontak untuk menemukan informasi perusahaan dan saluran komunikasi yang tersedia.
                    </p>

                </div>

                {{-- Button --}}
                <a href="{{ route('contact') }}"
                   class="group inline-flex shrink-0 items-center justify-center gap-3 self-start rounded-xl border border-[#D5B893] bg-[#D5B893] px-6 py-3.5 text-sm font-extrabold text-[#25344F] shadow-md transition duration-300 hover:-translate-y-1 hover:border-white hover:bg-white hover:shadow-lg lg:self-center">

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