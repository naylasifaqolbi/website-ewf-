@extends('layouts.public')

@section('title', 'Berita | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-[#FFF9F0]">

    {{-- ========================================== --}}
    {{-- HERO SECTION --}}
    {{-- ========================================== --}}
    <section class="relative overflow-hidden bg-linear-to-br from-[#4A1018] via-ewf-wine-dark to-[#951A21]">

        <div class="absolute left-0 top-0 h-full w-2 bg-[#FFA368]"></div>

        <div class="pointer-events-none absolute -right-20 -top-24 h-72 w-72 rounded-full bg-[#FFA368]/15 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-24 right-1/4 h-64 w-64 rounded-full bg-[#EFBB55]/15 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">

            <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.22em] text-ewf-hawkbit">
                <span class="h-1.5 w-7 rounded-full bg-[#FFA368]"></span>
                Kabar dan Wawasan
            </span>

            @if ($language === 'id')

                <h1 class="mt-4 text-4xl font-extrabold text-[#FFF9F0] sm:text-5xl">
                    Berita Indonesia
                </h1>

                <p class="mt-5 max-w-2xl text-base leading-8 text-[#FFF9F0]/90">
                    Dapatkan informasi terbaru seputar ekonomi, bisnis,
                    finansial, dan perkembangan pasar dari berbagai sumber
                    berita terpercaya di Indonesia.
                </p>

            @else

                <h1 class="mt-4 text-4xl font-extrabold text-[#FFF9F0] sm:text-5xl">
                    International News
                </h1>

                <p class="mt-5 max-w-2xl text-base leading-8 text-[#FFF9F0]/90">
                    Explore international business, global economy,
                    financial markets, and worldwide developments
                    from various international news sources.
                </p>

            @endif

            <div class="mt-8 h-1 w-20 rounded-full bg-[#FFA368]"></div>

        </div>
    </section>


    {{-- ========================================== --}}
    {{-- NEWS CONTENT --}}
    {{-- ========================================== --}}
    <section class="mx-auto max-w-7xl px-5 py-14 lg:px-8 lg:py-16">

        {{-- SECTION TITLE --}}
        <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">

            <div>
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#951A21]">
                    Kabar dan Informasi Pasar
                </span>

                <h2 class="mt-3 text-3xl font-extrabold text-ewf-wine-dark">
                    {{ $language === 'id' ? 'Informasi Terbaru' : 'Latest News' }}
                </h2>

                <p class="mt-2 max-w-2xl text-sm leading-7 text-[#62565A]">
                    {{ $language === 'id'
                        ? 'Berita terkini yang dikumpulkan dari berbagai sumber informasi.'
                        : 'Latest updates collected from multiple international news sources.' }}
                </p>
            </div>

            <p class="text-sm font-medium text-[#62565A]">
                {{ $totalArticles }}
                {{ $language === 'id' ? 'berita tersedia' : 'articles available' }}
            </p>

        </div>


        {{-- ====================================== --}}
        {{-- LANGUAGE TABS --}}
        {{-- ====================================== --}}
        <div class="mt-8 flex flex-wrap gap-3 border-b border-[#EAD8CB] pb-4">

            {{-- INDONESIA --}}
            <a href="{{ route('news.index', ['language' => 'id']) }}"
               class="inline-flex items-center gap-2 rounded-xl px-5 py-3 text-sm font-bold transition
               {{ $language === 'id'
                    ? 'bg-[#951A21] text-white shadow-md'
                    : 'border border-[#EAD8CB] bg-white text-ewf-wine-dark hover:bg-[#951A21]/5' }}">

                <span>ID</span>
                <span>Berita Indonesia</span>

            </a>

            {{-- INTERNATIONAL --}}
            <a href="{{ route('news.index', ['language' => 'en']) }}"
               class="inline-flex items-center gap-2 rounded-xl px-5 py-3 text-sm font-bold transition
               {{ $language === 'en'
                    ? 'bg-[#951A21] text-white shadow-md'
                    : 'border border-[#EAD8CB] bg-white text-ewf-wine-dark hover:bg-[#951A21]/5' }}">

                <span>EN</span>
                <span>International News</span>

            </a>

        </div>


        {{-- ====================================== --}}
        {{-- NEWS GRID --}}
        {{-- ====================================== --}}
        @if ($articles->isNotEmpty())

            <div class="mt-9 grid gap-7 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($articles as $article)

                    <article
                        class="group flex flex-col overflow-hidden rounded-2xl border border-[#EAD8CB] bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                        {{-- NEWS IMAGE --}}
                        <div class="relative h-52 overflow-hidden bg-linear-to-br from-ewf-wine-dark via-[#951A21] to-ewf-red-poppy">

                            @if (!empty($article['image']))

                                <img
                                    src="{{ $article['image'] }}"
                                    alt="{{ $article['title'] }}"
                                    loading="lazy"
                                    class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                    onerror="this.style.display='none';"
                                >

                            @else

                                <div class="flex h-full items-center justify-center">
                                    <div class="text-center text-white">

                                        <div class="text-4xl font-extrabold opacity-80">
                                            EWF
                                        </div>

                                        <p class="mt-2 text-xs font-semibold uppercase tracking-[0.2em] text-white/70">
                                            Market News
                                        </p>

                                    </div>
                                </div>

                            @endif

                            {{-- CATEGORY --}}
                            <div class="absolute bottom-4 left-4">
                                <span class="rounded-full bg-ewf-hawkbit px-3 py-1.5 text-xs font-bold text-ewf-wine-dark shadow-sm">
                                    {{ $article['category'] }}
                                </span>
                            </div>

                        </div>


                        {{-- NEWS INFORMATION --}}
                        <div class="flex flex-1 flex-col p-6">

                            {{-- SOURCE AND DATE --}}
                            <div class="flex flex-wrap items-center justify-between gap-2">

                                <span class="text-xs font-bold text-[#951A21]">
                                    {{ $article['source'] }}
                                </span>

                                <span class="text-xs text-[#8A7771]">
                                    {{ \Carbon\Carbon::parse($article['published_at'])->format('d M Y, H:i') }}
                                </span>

                            </div>


                            {{-- TITLE --}}
                            <h3 class="mt-4 text-lg font-extrabold leading-7 text-ewf-wine-dark transition group-hover:text-[#951A21]">

                                <a href="{{ route('news.show', ['slug' => $article['slug']]) }}">
                                    {{ $article['title'] }}
                                </a>

                            </h3>


                            {{-- EXCERPT --}}
                            <p class="mt-3 flex-1 text-sm leading-7 text-[#62565A]">
                                {{ $article['excerpt'] }}
                            </p>


                            {{-- READ MORE --}}
                            <div class="mt-6 border-t border-[#F0E5DE] pt-4">

                                <a href="{{ route('news.show', ['slug' => $article['slug']]) }}"
                                   class="inline-flex items-center gap-2 text-sm font-bold text-[#951A21] transition hover:gap-3 hover:text-ewf-red-poppy">

                                    {{ $language === 'id' ? 'Baca selengkapnya' : 'Read more' }}

                                    <span aria-hidden="true">→</span>

                                </a>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        @else

            {{-- EMPTY STATE --}}
            <div class="mt-10 rounded-2xl border border-dashed border-[#D9BDB0] bg-white px-6 py-16 text-center">

                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-[#951A21]/10 text-3xl text-[#951A21]">
                    <span>!</span>
                </div>

                <h3 class="mt-5 text-xl font-extrabold text-ewf-wine-dark">
                    {{ $language === 'id'
                        ? 'Berita belum tersedia'
                        : 'No News Available' }}
                </h3>

                <p class="mx-auto mt-3 max-w-lg text-sm leading-7 text-[#62565A]">
                    {{ $language === 'id'
                        ? 'Saat ini belum ada berita yang berhasil diambil dari sumber berita. Silakan coba kembali beberapa saat lagi.'
                        : 'No articles could currently be retrieved from the news sources. Please try again later.' }}
                </p>

                <a href="{{ route('news.index', ['language' => $language]) }}"
                   class="mt-6 inline-flex rounded-lg bg-[#951A21] px-5 py-3 text-sm font-bold text-white transition hover:bg-ewf-wine-dark">

                    {{ $language === 'id' ? 'Muat Ulang Berita' : 'Reload News' }}

                </a>

            </div>

        @endif


        {{-- NEWS SOURCE INFORMATION --}}
        <div class="mt-12 rounded-xl border border-[#EAD8CB] bg-white p-5">

            <h3 class="text-sm font-extrabold text-ewf-wine-dark">
                Sumber Informasi
            </h3>

            <p class="mt-2 text-xs leading-6 text-[#62565A]">
                {{ $language === 'id'
                    ? 'Berita ditampilkan melalui feed RSS dari berbagai sumber berita. Judul dan ringkasan merupakan informasi dari penerbit asli. Klik Baca selengkapnya untuk membaca berita lengkap pada situs sumber.'
                    : 'News is displayed through RSS feeds from various publishers. Headlines and summaries are provided by the original publishers. Select Read more to access the full article on its original website.' }}
            </p>

        </div>

    </section>

</main>
@endsection