
@extends('layouts.public')

@section('title', 'Berita | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-white">

    {{-- ==========================================
        HERO SECTION
    ========================================== --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        {{-- Dekorasi --}}
        <div class="pointer-events-none absolute -right-24 -top-28 h-96 w-96 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-12 -top-16 h-72 w-72 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-24 left-1/4 h-64 w-64 rounded-full bg-[#6F4D38]/25 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-24">

            <div class="max-w-3xl">

                <span class="inline-flex items-center gap-3 rounded-full border border-[#D5B893]/40 bg-white/10 px-5 py-2.5 text-xs font-extrabold uppercase tracking-[0.22em] text-[#D5B893] backdrop-blur-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#D5B893]"></span>
                    Kabar dan Wawasan
                </span>

                @if ($language === 'id')

                    <h1 class="mt-7 font-['Manrope'] text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Berita
                        <span class="block text-[#D5B893]">Indonesia</span>
                    </h1>

                    <p class="mt-6 max-w-2xl text-base leading-8 text-white/75 sm:text-lg">
                        Dapatkan informasi terbaru seputar ekonomi, bisnis,
                        finansial, dan perkembangan pasar dari berbagai sumber
                        berita terpercaya di Indonesia.
                    </p>

                @else

                    <h1 class="mt-7 font-['Manrope'] text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                        International
                        <span class="block text-[#D5B893]">News</span>
                    </h1>

                    <p class="mt-6 max-w-2xl text-base leading-8 text-white/75 sm:text-lg">
                        Explore international business, global economy,
                        financial markets, and worldwide developments
                        from various international news sources.
                    </p>

                @endif

                <div class="mt-9 flex items-center gap-3">
                    <span class="h-1 w-14 rounded-full bg-[#D5B893]"></span>
                    <span class="text-xs font-semibold uppercase tracking-[0.2em] text-white/50">
                        Equityworld Futures
                    </span>
                </div>

            </div>
        </div>
    </section>


    {{-- ==========================================
        NEWS CONTENT
    ========================================== --}}
    <section class="relative overflow-hidden bg-linear-to-brrom-white via-white to-[#D5B893]/10 px-5 py-14 lg:px-8 lg:py-20">

        <div class="pointer-events-none absolute -right-24 top-32 h-72 w-72 rounded-full border border-[#D5B893]/25"></div>

        <div class="relative mx-auto max-w-7xl">

            {{-- SECTION TITLE --}}
            <div class="flex flex-col justify-between gap-5 border-b border-[#D5B893]/50 pb-8 sm:flex-row sm:items-end">

                <div>

                    <span class="flex items-center gap-3 text-xs font-extrabold uppercase tracking-[0.22em] text-[#6F4D38]">
                        <span class="h-px w-9 bg-[#D5B893]"></span>
                        Kabar dan Informasi Pasar
                    </span>

                    <h2 class="mt-5 font-['Manrope'] text-3xl font-extrabold text-[#25344F] sm:text-4xl">
                        {{ $language === 'id' ? 'Informasi Terbaru' : 'Latest News' }}
                    </h2>

                    <p class="mt-4 max-w-2xl text-sm leading-7 text-[#617891]">
                        {{ $language === 'id'
                            ? 'Berita terkini yang dikumpulkan dari berbagai sumber informasi.'
                            : 'Latest updates collected from multiple international news sources.' }}
                    </p>

                </div>

                <div class="flex items-center gap-3">

                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="M4 4h16v16H4z"/>
                            <path d="M8 8h8M8 12h8M8 16h5"/>
                        </svg>
                    </span>

                    <div>
                        <p class="text-xl font-extrabold text-[#25344F]">
                            {{ $totalArticles }}
                        </p>

                        <p class="text-xs font-semibold text-[#617891]">
                            {{ $language === 'id' ? 'berita tersedia' : 'articles available' }}
                        </p>
                    </div>

                </div>

            </div>


            {{-- ======================================
                LANGUAGE TABS
            ====================================== --}}
            <div class="mt-9 flex flex-wrap gap-3 border-b border-[#D5B893]/40 pb-6">

                {{-- INDONESIA --}}
                <a href="{{ route('news.index', ['language' => 'id']) }}"
                   class="inline-flex items-center gap-3 rounded-xl px-5 py-3.5 text-sm font-bold transition duration-300
                   {{ $language === 'id'
                        ? 'bg-[#25344F] text-white shadow-lg shadow-[#25344F]/15'
                        : 'border border-[#D5B893]/60 bg-white text-[#25344F] hover:border-[#632024] hover:bg-[#D5B893]/10' }}">

                    <span class="flex h-7 w-7 items-center justify-center rounded-lg {{ $language === 'id' ? 'bg-[#D5B893] text-[#25344F]' : 'bg-[#D5B893]/25 text-[#632024]' }}">
                        ID
                    </span>

                    <span>Berita Indonesia</span>

                </a>

                {{-- INTERNATIONAL --}}
                <a href="{{ route('news.index', ['language' => 'en']) }}"
                   class="inline-flex items-center gap-3 rounded-xl px-5 py-3.5 text-sm font-bold transition duration-300
                   {{ $language === 'en'
                        ? 'bg-[#25344F] text-white shadow-lg shadow-[#25344F]/15'
                        : 'border border-[#D5B893]/60 bg-white text-[#25344F] hover:border-[#632024] hover:bg-[#D5B893]/10' }}">

                    <span class="flex h-7 w-7 items-center justify-center rounded-lg {{ $language === 'en' ? 'bg-[#D5B893] text-[#25344F]' : 'bg-[#D5B893]/25 text-[#632024]' }}">
                        EN
                    </span>

                    <span>International News</span>

                </a>

            </div>


            {{-- ======================================
                NEWS GRID
            ====================================== --}}
            @if ($articles->isNotEmpty())

                <div class="mt-10 grid gap-7 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach ($articles as $article)

                        <article class="group flex flex-col overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white shadow-sm transition duration-300 hover:-translate-y-2 hover:border-[#632024]/30 hover:shadow-xl">

                            {{-- NEWS IMAGE --}}
                            <div class="relative h-56 overflow-hidden bg-linear-to-br from-[#25344F] to-[#632024]">

                                @if (!empty($article['image']))

                                    <img
                                        src="{{ $article['image'] }}"
                                        alt="{{ $article['title'] }}"
                                        loading="lazy"
                                        decoding="async"
                                        class="news-image h-full w-full object-cover transition duration-700 group-hover:scale-110"
                                        onerror="this.style.display='none'; this.parentElement.querySelector('.image-fallback').classList.remove('hidden');"
                                    >

                                    {{-- FALLBACK JIKA GAMBAR GAGAL --}}
                                    <div class="image-fallback absolute inset-0 hidden flex-col items-center justify-center text-white">

                                        <div class="text-center">
                                            <span class="font-['Manrope'] text-4xl font-extrabold tracking-[0.15em] text-[#D5B893]">
                                                EWF
                                            </span>

                                            <p class="mt-3 text-xs font-semibold uppercase tracking-[0.22em] text-white/60">
                                                Market News
                                            </p>
                                        </div>

                                    </div>

                                @else

                                    <div class="flex h-full items-center justify-center">

                                        <div class="text-center text-white">
                                            <div class="font-['Manrope'] text-4xl font-extrabold tracking-[0.15em] text-[#D5B893]">
                                                EWF
                                            </div>

                                            <p class="mt-3 text-xs font-semibold uppercase tracking-[0.22em] text-white/60">
                                                Market News
                                            </p>
                                        </div>

                                    </div>

                                @endif

                                {{-- IMAGE OVERLAY --}}
                                <div class="pointer-events-none absolute inset-0 bg-linear-to-t from-[#25344F]/85 via-transparent to-transparent"></div>

                                {{-- CATEGORY --}}
                                <div class="absolute bottom-5 left-5">
                                    <span class="inline-flex items-center gap-2 rounded-full border border-[#D5B893]/50 bg-[#25344F]/90 px-4 py-2 text-xs font-bold text-[#D5B893] backdrop-blur-sm">
                                        <span class="h-1.5 w-1.5 rounded-full bg-[#D5B893]"></span>
                                        {{ $article['category'] }}
                                    </span>
                                </div>

                            </div>


                            {{-- NEWS INFORMATION --}}
                            <div class="flex flex-1 flex-col p-6 sm:p-7">

                                {{-- SOURCE AND DATE --}}
                                <div class="flex flex-wrap items-center justify-between gap-3">

                                    <span class="text-xs font-extrabold uppercase tracking-wider text-[#632024]">
                                        {{ $article['source'] }}
                                    </span>

                                    <span class="inline-flex items-center gap-1.5 text-xs font-medium text-[#617891]">

                                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                                            <rect x="3" y="5" width="18" height="16" rx="2"/>
                                            <path d="M16 3v4M8 3v4M3 10h18"/>
                                        </svg>

                                        {{ \Carbon\Carbon::parse($article['published_at'])->format('d M Y, H:i') }}

                                    </span>

                                </div>


                                {{-- TITLE --}}
                                <h3 class="mt-5 font-['Manrope'] text-lg font-extrabold leading-7 text-[#25344F] transition duration-300 group-hover:text-[#632024]">

                                    <a href="{{ route('news.show', ['slug' => $article['slug']]) }}">
                                        {{ $article['title'] }}
                                    </a>

                                </h3>


                                {{-- EXCERPT --}}
                                <p class="mt-4 flex-1 text-sm leading-7 text-[#617891]">
                                    {{ $article['excerpt'] }}
                                </p>


                                {{-- READ MORE --}}
                                <div class="mt-7 border-t border-[#D5B893]/40 pt-5">

                                    <a href="{{ route('news.show', ['slug' => $article['slug']]) }}"
                                       class="inline-flex items-center gap-3 text-sm font-bold text-[#632024] transition duration-300 hover:gap-5 hover:text-[#6F4D38]">

                                        {{ $language === 'id' ? 'Baca selengkapnya' : 'Read more' }}

                                        <span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#D5B893]/20 transition group-hover:bg-[#632024] group-hover:text-white" aria-hidden="true">
                                            &rarr;
                                        </span>

                                    </a>

                                </div>

                            </div>

                        </article>

                    @endforeach

                </div>

            @else

                {{-- EMPTY STATE --}}
                <div class="mt-10 overflow-hidden rounded-2xl border border-dashed border-[#D5B893] bg-white px-6 py-16 text-center">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#25344F] text-[#D5B893]">

                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                            <path d="M4 4h16v16H4z"/>
                            <path d="M8 8h8M8 12h8M8 16h5"/>
                        </svg>

                    </div>

                    <h3 class="mt-6 font-['Manrope'] text-xl font-extrabold text-[#25344F]">
                        {{ $language === 'id'
                            ? 'Berita belum tersedia'
                            : 'No News Available' }}
                    </h3>

                    <p class="mx-auto mt-4 max-w-lg text-sm leading-7 text-[#617891]">
                        {{ $language === 'id'
                            ? 'Saat ini belum ada berita yang berhasil diambil dari sumber berita. Silakan coba kembali beberapa saat lagi.'
                            : 'No articles could currently be retrieved from the news sources. Please try again later.' }}
                    </p>

                    <a href="{{ route('news.index', ['language' => $language]) }}"
                       class="mt-7 inline-flex items-center gap-3 rounded-xl bg-[#25344F] px-6 py-3.5 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:bg-[#632024]">

                        {{ $language === 'id' ? 'Muat Ulang Berita' : 'Reload News' }}

                        <span aria-hidden="true">&rarr;</span>

                    </a>

                </div>

            @endif


            {{-- NEWS SOURCE INFORMATION --}}
            <div class="mt-14 rounded-2xl border border-[#D5B893]/50 bg-white p-6 sm:p-7">

                <div class="flex items-start gap-4">

                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893]">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <circle cx="12" cy="12" r="9"/>
                            <path d="M12 11v5M12 8h.01"/>
                        </svg>

                    </span>

                    <div>

                        <h3 class="font-['Manrope'] text-sm font-extrabold text-[#25344F]">
                            Sumber Informasi
                        </h3>

                        <p class="mt-3 text-xs leading-7 text-[#617891]">
                            {{ $language === 'id'
                                ? 'Berita ditampilkan melalui feed RSS dari berbagai sumber berita. Judul dan ringkasan merupakan informasi dari penerbit asli. Klik Baca selengkapnya untuk membaca berita lengkap pada situs sumber.'
                                : 'News is displayed through RSS feeds from various publishers. Headlines and summaries are provided by the original publishers. Select Read more to access the full article on its original website.' }}
                        </p>

                    </div>

                </div>

            </div>

        </div>
    </section>

</main>
@endsection
