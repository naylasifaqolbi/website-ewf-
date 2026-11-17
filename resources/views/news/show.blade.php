
@extends('layouts.public')

@section('title', $article['title'] . ' | Berita EWF')

@section('content')
<main class="min-h-screen bg-white">

    {{-- ==========================================
        HEADER DETAIL BERITA
    ========================================== --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        {{-- Dekorasi --}}
        <div class="pointer-events-none absolute -right-24 -top-28 h-96 w-96 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-12 -top-16 h-72 w-72 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-28 -left-20 h-72 w-72 rounded-full bg-[#6F4D38]/25 blur-3xl"></div>

        <div class="relative mx-auto max-w-5xl px-5 py-16 lg:px-8 lg:py-20">

            {{-- Back Navigation --}}
            <a href="{{ route('news.index', ['language' => $article['language']]) }}"
               class="group inline-flex items-center gap-3 text-sm font-semibold text-white/75 transition hover:text-[#D5B893]">

                <span class="flex h-9 w-9 items-center justify-center rounded-full border border-white/25 transition group-hover:border-[#D5B893] group-hover:bg-white/10">
                    &larr;
                </span>

                {{ $article['language'] === 'id'
                    ? 'Kembali ke Berita'
                    : 'Back to News' }}

            </a>

            <div class="mt-10 max-w-4xl">

                {{-- Category --}}
                <span class="inline-flex items-center gap-2 rounded-full border border-[#D5B893]/50 bg-white/10 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.18em] text-[#D5B893] backdrop-blur-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#D5B893]"></span>
                    {{ $article['category'] }}
                </span>

                {{-- Title --}}
                <h1 class="mt-7 font-['Manrope'] text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl lg:text-5xl">
                    {{ $article['title'] }}
                </h1>

                {{-- Source and Date --}}
                <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-4 text-sm text-white/65">

                    <span class="inline-flex items-center gap-2 font-bold text-[#D5B893]">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#D5B893]"></span>
                        {{ $article['source'] }}
                    </span>

                    <span class="inline-flex items-center gap-2">
                        <svg class="h-4 w-4 text-[#D5B893]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                            <rect x="3" y="5" width="18" height="16" rx="2"/>
                            <path d="M16 3v4M8 3v4M3 10h18"/>
                        </svg>

                        {{ \Carbon\Carbon::parse($article['published_at'])->format('d F Y, H:i') }}
                    </span>

                </div>

                <div class="mt-9 h-px w-full bg-linear-to-r from-[#D5B893]/60 via-white/15 to-transparent"></div>

            </div>
        </div>
    </section>


    {{-- ==========================================
        DETAIL BERITA
    ========================================== --}}
    <section class="relative overflow-hidden bg-linear-to-br from-white via-white to-[#D5B893]/10 px-5 py-12 lg:px-8 lg:py-16">

        <div class="pointer-events-none absolute -right-24 top-20 h-72 w-72 rounded-full border border-[#D5B893]/25"></div>

        <div class="relative mx-auto max-w-5xl">

            <article class="overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white shadow-sm">

                {{-- IMAGE --}}
                @if (!empty($article['image']))

                    <div class="relative max-h-130 overflow-hidden bg-[#25344F]">

                        <img
                            src="{{ $article['image'] }}"
                            alt="{{ $article['title'] }}"
                            loading="eager"
                            decoding="async"
                            class="max-h-130 w-full object-cover"
                            onerror="this.style.display='none';"
                        >

                        <div class="pointer-events-none absolute inset-0 bg-linear-to-t from-[#25344F]/25 via-transparent to-transparent"></div>

                    </div>

                @endif


                {{-- ARTICLE CONTENT --}}
                <div class="p-6 sm:p-10 lg:p-12">

                    {{-- ARTICLE META --}}
                    <div class="flex flex-wrap items-center justify-between gap-4 border-b border-[#D5B893]/40 pb-6">

                        <div>
                            <span class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#632024]">
                                {{ $article['language'] === 'id'
                                    ? 'Berita Indonesia'
                                    : 'International News' }}
                            </span>

                            <p class="mt-2 text-sm font-medium text-[#617891]">
                                {{ $article['source'] }}
                            </p>
                        </div>

                        <span class="inline-flex items-center gap-2 rounded-lg border border-[#D5B893]/60 bg-[#D5B893]/15 px-4 py-2 text-xs font-bold text-[#632024]">
                            <span class="h-1.5 w-1.5 rounded-full bg-[#632024]"></span>
                            {{ $article['category'] }}
                        </span>

                    </div>


                    {{-- EXCERPT --}}
                    <div class="mt-9">

                        <div class="flex items-center gap-3">
                            <span class="h-7 w-1 rounded-full bg-[#632024]"></span>

                            <h2 class="font-['Manrope'] text-xl font-extrabold text-[#25344F]">
                                {{ $article['language'] === 'id'
                                    ? 'Ringkasan Berita'
                                    : 'News Summary' }}
                            </h2>
                        </div>

                        <p class="mt-5 text-base leading-8 text-[#617891]">
                            {{ $article['excerpt'] }}
                        </p>

                    </div>


                    {{-- ORIGINAL SOURCE LINK --}}
                    <div class="relative mt-11 overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-linear-to-br from-[#D5B893]/20 via-white to-white p-6 sm:p-8">

                        <div class="pointer-events-none absolute -right-10 -top-16 h-40 w-40 rounded-full border border-[#D5B893]/30"></div>

                        <div class="relative">

                            <div class="flex items-center gap-3">

                                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893]">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path d="M14 3h7v7M10 14 21 3"/>
                                        <path d="M19 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h6"/>
                                    </svg>
                                </span>

                                <div>
                                    <h3 class="font-['Manrope'] text-lg font-extrabold text-[#25344F]">
                                        {{ $article['language'] === 'id'
                                            ? 'Baca Berita Lengkap'
                                            : 'Read the Full Article' }}
                                    </h3>

                                    <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-[#6F4D38]">
                                        Original News Publisher
                                    </p>
                                </div>

                            </div>

                            <p class="mt-5 text-sm leading-7 text-[#617891]">
                                {{ $article['language'] === 'id'
                                    ? 'Untuk membaca isi berita secara lengkap, silakan kunjungi situs resmi sumber berita berikut.'
                                    : 'To read the complete article, please visit the original news publisher website.' }}
                            </p>

                            <a href="{{ $article['link'] }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="mt-6 inline-flex items-center justify-center gap-3 rounded-xl bg-[#632024] px-6 py-3.5 text-sm font-bold text-white shadow-md transition duration-300 hover:-translate-y-1 hover:bg-[#25344F]">

                                {{ $article['language'] === 'id'
                                    ? 'Kunjungi Sumber Berita'
                                    : 'Visit News Source' }}

                                <span aria-hidden="true">&nearr;</span>

                            </a>

                        </div>
                    </div>

                </div>

            </article>


            {{-- BACK BUTTON --}}
            <div class="mt-9">

                <a href="{{ route('news.index', ['language' => $article['language']]) }}"
                   class="group inline-flex items-center gap-3 text-sm font-bold text-[#25344F] transition hover:text-[#632024]">

                    <span class="flex h-9 w-9 items-center justify-center rounded-full border border-[#D5B893] transition group-hover:bg-[#25344F] group-hover:text-white">
                        &larr;
                    </span>

                    {{ $article['language'] === 'id'
                        ? 'Kembali ke Daftar Berita'
                        : 'Back to News List' }}

                </a>

            </div>

        </div>
    </section>

</main>
@endsection
