@extends('layouts.public')

@section('title', 'Kontak | PT Equityworld Futures')

@section('content')

<main class="min-h-screen bg-white">

    {{-- =========================================================
        HERO SECTION
    ========================================================== --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        {{-- DEKORASI LATAR --}}
        <div class="pointer-events-none absolute -right-24 -top-28 h-96 w-96 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-12 -top-16 h-72 w-72 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-32 left-1/3 h-80 w-80 rounded-full bg-[#D5B893]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">

            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-3">
                    <span class="h-px w-10 bg-[#D5B893]"></span>

                    <span class="font-['DM_Sans'] text-xs font-bold uppercase tracking-[0.22em] text-[#D5B893]">
                        Kami Siap Membantu
                    </span>
                </div>

                <h1 class="mt-6 font-['Manrope'] text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    Hubungi Kami
                </h1>

                <p class="mt-5 max-w-2xl font-['DM_Sans'] leading-8 text-white/80">
                    Temukan informasi alamat kantor cabang dan kontak resmi
                    PT Equityworld Futures untuk kebutuhan informasi lebih lanjut.
                </p>

                <div class="mt-8 flex items-center gap-3">
                    <span class="h-1 w-12 rounded-full bg-[#D5B893]"></span>
                    <span class="h-1 w-3 rounded-full bg-white/40"></span>
                    <span class="h-1 w-3 rounded-full bg-white/20"></span>
                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        INFORMASI KONTAK
    ========================================================== --}}
    <section class="bg-linear-to-b from-white to-[#D5B893]/10 px-5 py-16 lg:px-8 lg:py-20">

        <div class="mx-auto max-w-7xl">

            {{-- SECTION INTRODUCTION --}}
            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-3">
                    <span class="h-px w-8 bg-[#6F4D38]"></span>

                    <span class="font-['DM_Sans'] text-xs font-bold uppercase tracking-[0.2em] text-[#6F4D38]">
                        Informasi Kontak
                    </span>
                </div>

                <h2 class="mt-4 font-['Manrope'] text-3xl font-extrabold text-[#25344F] sm:text-4xl">
                    Kantor Cabang
                </h2>

                <p class="mt-4 max-w-2xl font-['DM_Sans'] leading-7 text-[#617891]">
                    Berikut informasi kantor cabang Surabaya Trillium
                    dan alamat email perusahaan yang dapat dihubungi.
                </p>

                <div class="mt-6 h-px w-24 bg-[#D5B893]"></div>

            </div>


            {{-- =====================================================
                INFORMASI KANTOR
            ====================================================== --}}
            <div class="mt-10 max-w-4xl">

                <article class="overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white shadow-[0_16px_50px_rgba(37,52,79,0.08)] transition duration-300 hover:shadow-[0_20px_60px_rgba(37,52,79,0.12)]">

                    {{-- HEADER KANTOR --}}
                    <div class="relative isolate overflow-hidden bg-linear-to-r from-[#25344F] to-[#632024] px-6 py-7 text-white sm:px-8">

                        {{-- DEKORASI HEADER --}}
                        <div class="pointer-events-none absolute -right-10 -top-20 h-48 w-48 rounded-full border border-[#D5B893]/20"></div>
                        <div class="pointer-events-none absolute -right-5 -top-14 h-36 w-36 rounded-full border border-[#D5B893]/15"></div>

                        <div class="relative flex items-center gap-4">

                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl border border-[#D5B893]/30 bg-white/10 text-[#D5B893]">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-6 w-6"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8"
                                     aria-hidden="true">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M12 21s8-7.2 8-13a8 8 0 10-16 0c0 5.8 8 13 8 13z"/>

                                    <circle cx="12" cy="8" r="2.5"/>

                                </svg>

                            </div>

                            <div>

                                <p class="font-['DM_Sans'] text-xs font-bold uppercase tracking-[0.18em] text-[#D5B893]">
                                    Kantor Cabang
                                </p>

                                <h3 class="mt-1 font-['Manrope'] text-xl font-extrabold tracking-wide sm:text-2xl">
                                    SURABAYA TRILLIUM
                                </h3>

                            </div>

                        </div>

                    </div>


                    {{-- DETAIL INFORMASI KANTOR --}}
                    <div class="p-6 sm:p-8">


                        {{-- ALAMAT --}}
                        <div class="flex gap-4">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-[#D5B893]/50 bg-[#D5B893]/15 text-[#25344F]">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8"
                                     aria-hidden="true">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4M8 9v.01M8 12v.01M8 15v.01M8 18v.01M15 12v.01M15 15v.01M15 18v.01"/>

                                </svg>

                            </div>

                            <div>

                                <h4 class="font-['Manrope'] font-extrabold text-[#25344F]">
                                    Alamat Kantor
                                </h4>

                                <p class="mt-2 font-['DM_Sans'] leading-7 text-[#617891]">
                                    Trillium Office &amp; Residence, Lt. 2 &amp; 3<br>
                                    Jl. Pemuda No. 108–116<br>
                                    Surabaya 60271
                                </p>

                            </div>

                        </div>


                        <div class="my-7 border-t border-[#D5B893]/40"></div>


                        {{-- TELEPON --}}
                        <div class="flex gap-4">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-[#D5B893]/50 bg-[#D5B893]/15 text-[#25344F]">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8"
                                     aria-hidden="true">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M3 5a2 2 0 012-2h3.3a1 1 0 01.95.68l1.5 4.5a1 1 0 01-.5 1.2l-2.3 1.15a11 11 0 005.52 5.52l1.15-2.3a1 1 0 011.2-.5l4.5 1.5a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C9.4 21 3 14.6 3 6V5z"/>

                                </svg>

                            </div>

                            <div>

                                <h4 class="font-['Manrope'] font-extrabold text-[#25344F]">
                                    Telepon
                                </h4>

                                <a href="tel:+623160003788"
                                   class="mt-2 inline-block font-['DM_Sans'] leading-7 text-[#617891] transition duration-200 hover:text-[#632024]">
                                    +62 31 6000 3788 (Hunting)
                                </a>

                            </div>

                        </div>


                        <div class="my-7 border-t border-[#D5B893]/40"></div>


                        {{-- FAX --}}
                        <div class="flex gap-4">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-[#D5B893]/50 bg-[#D5B893]/15 text-[#25344F]">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8"
                                     aria-hidden="true">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M6 9V3h12v6M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2M6 14h12v7H6z"/>

                                    <path stroke-linecap="round" d="M17 12h.01"/>

                                </svg>

                            </div>

                            <div>

                                <h4 class="font-['Manrope'] font-extrabold text-[#25344F]">
                                    Fax
                                </h4>

                                <p class="mt-2 font-['DM_Sans'] leading-7 text-[#617891]">
                                    +62 31 6000 3688
                                </p>

                            </div>

                        </div>


                        <div class="my-7 border-t border-[#D5B893]/40"></div>


                        {{-- EMAIL --}}
                        <div class="flex gap-4">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-[#D5B893]/50 bg-[#D5B893]/15 text-[#25344F]">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8"
                                     aria-hidden="true">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M4 5h16a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V7a2 2 0 012-2z"/>

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="m3 6 9 7 9-7"/>

                                </svg>

                            </div>

                            <div class="min-w-0">

                                <h4 class="font-['Manrope'] font-extrabold text-[#25344F]">
                                    Email
                                </h4>

                                <a href="mailto:corporate@equityworld-futures.co.id"
                                   class="mt-2 inline-block break-all font-['DM_Sans'] leading-7 text-[#632024] transition duration-200 hover:text-[#25344F] hover:underline">
                                    corporate@equityworld-futures.co.id
                                </a>

                            </div>

                        </div>


                        {{-- TOMBOL PETA --}}
                        <div class="mt-8 border-t border-[#D5B893]/40 pt-7">

                            <a href="https://www.google.com/maps/search/?api=1&query=Trillium+Office+Residence+Jl+Pemuda+108-116+Surabaya"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="group inline-flex w-full items-center justify-center gap-3 rounded-lg bg-[#632024] px-6 py-3.5 font-['DM_Sans'] text-sm font-bold text-white shadow-sm transition duration-300 hover:bg-[#25344F] hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-[#632024]/20 sm:w-auto">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5 text-[#D5B893] transition-transform duration-300 group-hover:scale-110"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8"
                                     aria-hidden="true">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M9 20l-6-3V5l6 3m0 12l6-3m-6 3V8m6 9l6 3V7l-6-3m0 13V4m0 0L9 8"/>

                                </svg>

                                Lihat di Peta

                                <span aria-hidden="true" class="transition-transform duration-300 group-hover:translate-x-1">
                                    ↗
                                </span>

                            </a>

                        </div>

                    </div>

                </article>

            </div>


            {{-- =====================================================
                PERINGATAN PENIPUAN
            ====================================================== --}}
            <section class="relative mt-10 overflow-hidden rounded-2xl border border-[#D5B893]/70 bg-linear-to-r from-[#D5B893]/20 to-white">

                {{-- AKSEN SAMPING --}}
                <div class="absolute bottom-0 left-0 top-0 w-1.5 bg-[#632024]"></div>

                <div class="flex flex-col gap-5 p-6 sm:flex-row sm:gap-6 sm:p-8">

                    {{-- ICON --}}
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-[#632024] text-[#D5B893] shadow-sm">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="1.8"
                             aria-hidden="true">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M12 9v4m0 4h.01M10.3 3.9L1.8 18.2A2 2 0 003.5 21h17a2 2 0 001.7-2.8L13.7 3.9a2 2 0 00-3.4 0z"/>

                        </svg>

                    </div>


                    {{-- WARNING CONTENT --}}
                    <div>

                        <p class="font-['DM_Sans'] text-xs font-extrabold uppercase tracking-[0.18em] text-[#632024]">
                            Perhatian
                        </p>

                        <h2 class="mt-2 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                            Waspada terhadap Penipuan
                        </h2>

                        <p class="mt-4 font-['DM_Sans'] leading-8 text-[#617891]">
                            PT Equityworld Futures mengingatkan masyarakat untuk
                            selalu waspada terhadap penipuan yang mengatasnamakan
                            perusahaan melalui media apa pun. Pastikan seluruh
                            transaksi dan setoran hanya dilakukan ke Rekening
                            Terpisah (Segregated Account) resmi atas nama
                            PT Equityworld Futures, bukan perseorangan.
                        </p>

                    </div>

                </div>

            </section>

        </div>

    </section>

</main>

@endsection