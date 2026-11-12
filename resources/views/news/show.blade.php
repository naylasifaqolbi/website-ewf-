
@extends('layouts.public')

@section('title', $article['title'] . ' | Berita EWF')

@section('content')
<main class="min-h-screen bg-[#FFF9F0]">

    {{-- ========================================== --}}
    {{-- HEADER DETAIL BERITA --}}
    {{-- ========================================== --}}
    <section class="bg-ewf-wine-dark text-white">

        <div class="mx-auto max-w-5xl px-5 py-14 lg:px-8 lg:py-16">

            <a href="{{ route('news.index', ['language' => $article['language']]) }}"
               class="inline-flex items-center gap-2 text-sm font-semibold text-white/80 transition hover:text-ewf-hawkbit">

                <span>←</span>

                {{ $article['language'] === 'id'
                    ? 'Kembali ke Berita'
                    : 'Back to News' }}

            </a>

            <div class="mt-8">

                <span class="inline-flex rounded-full bg-ewf-hawkbit px-4 py-2 text-xs font-bold text-ewf-wine-dark">
                    {{ $article['category'] }}
                </span>

                <h1 class="mt-6 text-3xl font-extrabold leading-tight sm:text-4xl lg:text-5xl">
                    {{ $article['title'] }}
                </h1>

                <div class="mt-6 flex flex-wrap items-center gap-x-5 gap-y-3 text-sm text-white/75">

                    <span class="font-semibold text-ewf-hawkbit">
                        {{ $article['source'] }}
                    </span>

                    <span>
                        {{ \Carbon\Carbon::parse($article['published_at'])->format('d F Y, H:i') }}
                    </span>

                </div>

            </div>

        </div>

    </section>


    {{-- ========================================== --}}
    {{-- DETAIL BERITA --}}
    {{-- ========================================== --}}
    <section class="mx-auto max-w-5xl px-5 py-12 lg:px-8 lg:py-16">

        <article class="overflow-hidden rounded-2xl border border-[#EAD8CB] bg-white shadow-sm">

            {{-- IMAGE --}}
            @if (!empty($article['image']))

                <div class="max-h-120 overflow-hidden bg-[#F3E8DF]">

                    <img
                        src="{{ $article['image'] }}"
                        alt="{{ $article['title'] }}"
                        class="max-h-120 w-full object-cover"
                        onerror="this.style.display='none';"
                    >

                </div>

            @endif


            {{-- ARTICLE CONTENT --}}
            <div class="p-6 sm:p-10">

                <div class="flex flex-wrap items-center justify-between gap-3 border-b border-[#F0E5DE] pb-5">

                    <div>
                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                            {{ $article['language'] === 'id'
                                ? 'Berita Indonesia'
                                : 'International News' }}
                        </span>

                        <p class="mt-1 text-sm text-[#786662]">
                            {{ $article['source'] }}
                        </p>
                    </div>

                    <span class="rounded-lg bg-[#FFF9F0] px-3 py-2 text-xs font-semibold text-ewf-wine-dark">
                        {{ $article['category'] }}
                    </span>

                </div>


                {{-- EXCERPT --}}
                <div class="mt-8">

                    <h2 class="text-xl font-extrabold text-ewf-wine-dark">
                        {{ $article['language'] === 'id'
                            ? 'Ringkasan Berita'
                            : 'News Summary' }}
                    </h2>

                    <p class="mt-4 text-base leading-8 text-[#51413E]">
                        {{ $article['excerpt'] }}
                    </p>

                </div>


                {{-- ORIGINAL SOURCE LINK --}}
                <div class="mt-10 rounded-xl border border-[#EAD8CB] bg-[#FFF9F0] p-6">

                    <h3 class="text-lg font-extrabold text-ewf-wine-dark">
                        {{ $article['language'] === 'id'
                            ? 'Baca Berita Lengkap'
                            : 'Read the Full Article' }}
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-[#786662]">
                        {{ $article['language'] === 'id'
                            ? 'Untuk membaca isi berita secara lengkap, silakan kunjungi situs resmi sumber berita berikut.'
                            : 'To read the complete article, please visit the original news publisher website.' }}
                    </p>

                    <a href="{{ $article['link'] }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="mt-5 inline-flex items-center justify-center gap-2 rounded-lg bg-[#951A21] px-6 py-3 text-sm font-bold text-white transition hover:bg-ewf-wine-dark">

                        {{ $article['language'] === 'id'
                            ? 'Kunjungi Sumber Berita'
                            : 'Visit News Source' }}

                        <span aria-hidden="true">↗</span>

                    </a>

                </div>

            </div>

        </article>


        {{-- BACK BUTTON --}}
        <div class="mt-8">

            <a href="{{ route('news.index', ['language' => $article['language']]) }}"
               class="inline-flex items-center gap-2 text-sm font-bold text-[#951A21] transition hover:text-ewf-red-poppy">

                ←

                {{ $article['language'] === 'id'
                    ? 'Kembali ke Daftar Berita'
                    : 'Back to News List' }}

            </a>

        </div>

    </section>

</main>
@endsection
