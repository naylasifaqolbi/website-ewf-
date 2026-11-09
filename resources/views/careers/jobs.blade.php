
@extends('layouts.public')

@section('title', 'Lowongan Kerja | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-[#FFF9F0]">

    {{-- ========================================== --}}
    {{-- HERO SECTION --}}
    {{-- ========================================== --}}
    <section class="relative overflow-hidden bg-[#6D1720] text-white">
        <div class="absolute -right-20 -top-24 h-80 w-80 rounded-full bg-[#951A21] opacity-50 blur-3xl"></div>
        <div class="absolute -bottom-32 -left-20 h-80 w-80 rounded-full bg-[#CF3021] opacity-20 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">

            <a href="{{ route('careers') }}"
               class="inline-flex items-center gap-2 text-sm font-semibold text-[#FFD66E] transition hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15 19l-7-7 7-7"/>
                </svg>
                Kembali ke Karier
            </a>

            <p class="mt-8 text-xs font-bold uppercase tracking-[0.22em] text-[#FFD66E]">
                Peluang Karier
            </p>

            <h1 class="mt-4 text-4xl font-extrabold sm:text-5xl lg:text-6xl">
                Lowongan Kerja
            </h1>

            <p class="mt-5 max-w-2xl text-sm leading-8 text-white/85 sm:text-base">
                Temukan peluang karier dan posisi pekerjaan yang tersedia
                di PT Equityworld Futures. Bergabunglah dan kembangkan
                potensi profesional Anda bersama kami.
            </p>

            <div class="mt-8 flex flex-wrap gap-3">
                <span class="rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-medium text-white">
                    3 Posisi Tersedia
                </span>
                <span class="rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-medium text-white">
                    Kesempatan Berkarier
                </span>
            </div>

        </div>
    </section>


    {{-- ========================================== --}}
    {{-- INFORMASI LOWONGAN --}}
    {{-- ========================================== --}}
    <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">

        <div class="mx-auto max-w-3xl text-center">

            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#951A21]">
                Informasi Rekrutmen
            </span>

            <h2 class="mt-3 text-3xl font-extrabold text-[#6D1720] sm:text-4xl">
                Posisi yang Tersedia
            </h2>

            <p class="mt-5 leading-8 text-[#675653]">
                PT Equityworld Futures membuka kesempatan bagi kandidat
                yang memiliki semangat kerja, tanggung jawab, dan keinginan
                untuk berkembang. Berikut posisi pekerjaan yang tersedia.
            </p>

        </div>


        {{-- ========================================== --}}
        {{-- DAFTAR POSISI --}}
        {{-- ========================================== --}}
        <div class="mt-12 grid gap-7 md:grid-cols-2 lg:grid-cols-3">


            {{-- POSISI 1: STAF --}}
            <article class="group flex flex-col rounded-2xl border border-[#EAD8CB] bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-[#951A21]/40 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="1.7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m16 0v-2a4 4 0 00-3-3.87M10 11a4 4 0 100-8 4 4 0 000 8zm7-7.87a4 4 0 010 7.75"/>
                    </svg>

                </div>

                <div class="mt-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#CF3021]">
                        Posisi 01
                    </span>

                    <h3 class="mt-2 text-2xl font-extrabold text-[#6D1720]">
                        Staf
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-[#786662]">
                        Kesempatan berkarier dalam mendukung kegiatan
                        operasional dan administrasi perusahaan.
                        Kandidat diharapkan memiliki ketelitian,
                        kedisiplinan, serta kemampuan bekerja sama.
                    </p>
                </div>

                <div class="mt-6 border-t border-[#F0E4DB] pt-5">

                    <h4 class="text-sm font-bold text-[#6D1720]">
                        Gambaran Pekerjaan
                    </h4>

                    <ul class="mt-3 space-y-2 text-sm leading-6 text-[#786662]">
                        <li class="flex gap-2">
                            <span class="text-[#CF3021]">✓</span>
                            Mendukung kegiatan operasional perusahaan.
                        </li>
                        <li class="flex gap-2">
                            <span class="text-[#CF3021]">✓</span>
                            Melaksanakan tugas administrasi sesuai tanggung jawab.
                        </li>
                        <li class="flex gap-2">
                            <span class="text-[#CF3021]">✓</span>
                            Berkoordinasi dengan tim dan bagian terkait.
                        </li>
                    </ul>

                </div>

                <div class="mt-auto pt-7">
                    <div class="rounded-xl bg-[#FFF9F0] p-4">
                        <p class="text-xs font-semibold text-[#951A21]">
                            Kualifikasi Umum
                        </p>
                        <p class="mt-2 text-sm leading-6 text-[#675653]">
                            Memiliki komunikasi yang baik, teliti,
                            disiplin, dan bertanggung jawab.
                        </p>
                    </div>
                </div>

            </article>


            {{-- POSISI 2: KONSULTAN BISNIS --}}
            <article class="group flex flex-col rounded-2xl border border-[#EAD8CB] bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-[#951A21]/40 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#FFF0DF] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="1.7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M17 20h5v-2a4 4 0 00-5.5-3.72M17 20H7m10 0v-2c0-.68-.13-1.33-.37-1.92M7 20H2v-2a4 4 0 015.5-3.72M7 20v-2c0-.68.13-1.33.37-1.92m0 0a5 5 0 019.26 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>

                </div>

                <div class="mt-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#CF3021]">
                        Posisi 02
                    </span>

                    <h3 class="mt-2 text-2xl font-extrabold text-[#6D1720]">
                        Konsultan Bisnis
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-[#786662]">
                        Peluang bagi individu yang memiliki kemampuan
                        komunikasi dan ketertarikan dalam bidang bisnis
                        untuk membangun hubungan profesional dengan
                        calon nasabah maupun nasabah perusahaan.
                    </p>
                </div>

                <div class="mt-6 border-t border-[#F0E4DB] pt-5">

                    <h4 class="text-sm font-bold text-[#6D1720]">
                        Gambaran Pekerjaan
                    </h4>

                    <ul class="mt-3 space-y-2 text-sm leading-6 text-[#786662]">
                        <li class="flex gap-2">
                            <span class="text-[#CF3021]">✓</span>
                            Memberikan informasi mengenai produk dan layanan perusahaan.
                        </li>
                        <li class="flex gap-2">
                            <span class="text-[#CF3021]">✓</span>
                            Membangun dan menjaga hubungan dengan nasabah.
                        </li>
                        <li class="flex gap-2">
                            <span class="text-[#CF3021]">✓</span>
                            Melakukan komunikasi dan tindak lanjut kepada calon nasabah.
                        </li>
                    </ul>

                </div>

                <div class="mt-auto pt-7">
                    <div class="rounded-xl bg-[#FFF9F0] p-4">
                        <p class="text-xs font-semibold text-[#951A21]">
                            Kualifikasi Umum
                        </p>
                        <p class="mt-2 text-sm leading-6 text-[#675653]">
                            Memiliki kemampuan komunikasi, percaya diri,
                            berorientasi pada target, dan mampu bekerja
                            secara individu maupun tim.
                        </p>
                    </div>
                </div>

            </article>


            {{-- POSISI 3: PENGEMUDI --}}
            <article class="group flex flex-col rounded-2xl border border-[#EAD8CB] bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-[#951A21]/40 hover:shadow-xl md:col-span-2 lg:col-span-1">

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#FFF2D9] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="1.7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8 17h8m-9 0H5a2 2 0 01-2-2v-3l2-6h14l2 6v3a2 2 0 01-2 2h-2m-10 0a2 2 0 104 0m-4 0H7m10 0a2 2 0 104 0m-4 0h4M5 12h14"/>
                    </svg>

                </div>

                <div class="mt-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#CF3021]">
                        Posisi 03
                    </span>

                    <h3 class="mt-2 text-2xl font-extrabold text-[#6D1720]">
                        Pengemudi
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-[#786662]">
                        Kesempatan bagi individu yang bertanggung jawab
                        dalam mendukung kebutuhan transportasi dan
                        mobilitas perusahaan dengan mengutamakan
                        keselamatan serta ketepatan waktu.
                    </p>
                </div>

                <div class="mt-6 border-t border-[#F0E4DB] pt-5">

                    <h4 class="text-sm font-bold text-[#6D1720]">
                        Gambaran Pekerjaan
                    </h4>

                    <ul class="mt-3 space-y-2 text-sm leading-6 text-[#786662]">
                        <li class="flex gap-2">
                            <span class="text-[#CF3021]">✓</span>
                            Mengantar dan menjemput sesuai kebutuhan perusahaan.
                        </li>
                        <li class="flex gap-2">
                            <span class="text-[#CF3021]">✓</span>
                            Menjaga kebersihan dan kondisi kendaraan.
                        </li>
                        <li class="flex gap-2">
                            <span class="text-[#CF3021]">✓</span>
                            Mematuhi peraturan lalu lintas dan keselamatan berkendara.
                        </li>
                    </ul>

                </div>

                <div class="mt-auto pt-7">
                    <div class="rounded-xl bg-[#FFF9F0] p-4">
                        <p class="text-xs font-semibold text-[#951A21]">
                            Kualifikasi Umum
                        </p>
                        <p class="mt-2 text-sm leading-6 text-[#675653]">
                            Memiliki SIM yang sesuai dengan jenis kendaraan,
                            memahami rute perjalanan, disiplin, dan
                            bertanggung jawab.
                        </p>
                    </div>
                </div>

            </article>

        </div>


        {{-- ========================================== --}}
        {{-- INFORMASI PERSYARATAN --}}
        {{-- ========================================== --}}
        <div class="mt-12 rounded-2xl border border-[#EAD8CB] bg-white p-7 shadow-sm sm:p-9">

            <div class="flex flex-col gap-5 sm:flex-row sm:items-start">

                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-[#FBE5D6] text-[#951A21]">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12l2 2 4-4m5.5-4.5A11 11 0 0112 3a11 11 0 01-8.5 2.5A11 11 0 003 8c0 5 3.5 9.5 9 13 5.5-3.5 9-8 9-13 0-.9-.2-1.7-.5-2.5z"/>
                    </svg>

                </div>

                <div>
                    <h2 class="text-xl font-extrabold text-[#6D1720] sm:text-2xl">
                        Persyaratan dan Proses Seleksi
                    </h2>

                    <p class="mt-3 leading-8 text-[#675653]">
                        Setiap posisi memiliki kualifikasi dan tanggung
                        jawab yang berbeda. Calon pelamar diharapkan
                        memperhatikan persyaratan pada posisi yang
                        diminati dan mempersiapkan dokumen lamaran
                        sesuai ketentuan perusahaan.
                    </p>

                    <div class="mt-5 grid gap-4 sm:grid-cols-2">

                        <div class="rounded-xl bg-[#FFF9F0] p-5">
                            <h3 class="font-bold text-[#6D1720]">
                                Dokumen Lamaran
                            </h3>
                            <p class="mt-2 text-sm leading-7 text-[#786662]">
                                Siapkan CV, surat lamaran, dan dokumen
                                pendukung lainnya sesuai persyaratan
                                posisi yang dilamar.
                            </p>
                        </div>

                        <div class="rounded-xl bg-[#FFF9F0] p-5">
                            <h3 class="font-bold text-[#6D1720]">
                                Tahapan Seleksi
                            </h3>
                            <p class="mt-2 text-sm leading-7 text-[#786662]">
                                Kandidat akan mengikuti tahapan
                                seleksi sesuai dengan kebijakan
                                dan kebutuhan rekrutmen perusahaan.
                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </div>


        {{-- ========================================== --}}
        {{-- CTA SECTION --}}
        {{-- ========================================== --}}
        <div class="relative mt-10 overflow-hidden rounded-2xl bg-[#6D1720] p-8 text-white sm:p-10">

            <div class="absolute -right-10 -top-20 h-64 w-64 rounded-full bg-[#951A21] opacity-60 blur-3xl"></div>

            <div class="relative flex flex-col items-start justify-between gap-7 md:flex-row md:items-center">

                <div class="max-w-2xl">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#FFD66E]">
                        Bergabung Bersama Kami
                    </span>

                    <h2 class="mt-3 text-2xl font-extrabold sm:text-3xl">
                        Siap Mengembangkan Karier Anda?
                    </h2>

                    <p class="mt-4 leading-8 text-white/80">
                        Temukan peluang yang sesuai dengan kemampuan
                        dan minat Anda. Persiapkan diri untuk menjadi
                        bagian dari PT Equityworld Futures.
                    </p>
                </div>

                <a href="{{ route('careers') }}"
                   class="inline-flex shrink-0 items-center gap-2 rounded-full bg-[#FFD66E] px-7 py-3.5 font-bold text-[#6D1720] transition hover:bg-white">
                    Kembali ke Karier

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 5l7 7-7 7"/>
                    </svg>
                </a>

            </div>

        </div>

    </section>

</main>
@endsection
