
@extends('layouts.public')

@section('title', 'Kontak | PT Equityworld Futures')

@section('content')

<main class="min-h-screen bg-white">

    {{-- =========================================================
        HERO SECTION
    ========================================================== --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        <div class="pointer-events-none absolute -right-24 -top-28 h-80 w-80 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-12 -top-16 h-60 w-60 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-32 left-1/3 h-72 w-72 rounded-full bg-[#D5B893]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-12 lg:px-8 lg:py-14">

            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-3">
                    <span class="h-px w-10 bg-[#D5B893]"></span>

                    <span class="font-['DM_Sans'] text-xs font-bold uppercase tracking-[0.22em] text-[#D5B893]">
                        Kami Siap Membantu
                    </span>
                </div>

                <h1 class="mt-4 font-['Manrope'] text-4xl font-extrabold tracking-tight sm:text-5xl">
                    Hubungi Kami
                </h1>

                <p class="mt-4 max-w-2xl font-['DM_Sans'] text-sm leading-7 text-white/80 sm:text-base">
                    Temukan informasi alamat kantor cabang dan kontak resmi
                    PT Equityworld Futures untuk kebutuhan informasi lebih lanjut.
                </p>

                <div class="mt-6 flex items-center gap-3">
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
    <section class="bg-linear-to-b from-white to-[#D5B893]/10 px-5 py-10 lg:px-8 lg:py-14">

        <div class="mx-auto max-w-7xl">

            {{-- SECTION INTRODUCTION --}}
            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-3">
                    <span class="h-px w-8 bg-[#6F4D38]"></span>

                    <span class="font-['DM_Sans'] text-xs font-bold uppercase tracking-[0.2em] text-[#6F4D38]">
                        Informasi Kontak
                    </span>
                </div>

                <h2 class="mt-3 font-['Manrope'] text-2xl font-extrabold text-[#25344F] sm:text-3xl">
                    Kantor Cabang
                </h2>

                <p class="mt-3 max-w-2xl font-['DM_Sans'] text-sm leading-6 text-[#617891]">
                    Berikut informasi kantor cabang Surabaya Trillium
                    dan alamat email perusahaan yang dapat dihubungi.
                </p>

                <div class="mt-5 h-px w-20 bg-[#D5B893]"></div>

            </div>


            {{-- =====================================================
                INFORMASI KANTOR
            ====================================================== --}}
            <div class="mx-auto mt-7 max-w-5xl">

                <article class="overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white shadow-[0_12px_35px_rgba(37,52,79,0.07)]">

                    {{-- HEADER KANTOR --}}
                    <div class="relative isolate overflow-hidden bg-linear-to-r from-[#25344F] to-[#632024] px-5 py-5 sm:px-7">

                        <div class="pointer-events-none absolute -right-10 -top-20 h-40 w-40 rounded-full border border-[#D5B893]/20"></div>
                        <div class="pointer-events-none absolute -right-5 -top-14 h-28 w-28 rounded-full border border-[#D5B893]/15"></div>

                        <div class="relative flex items-center gap-3">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-[#D5B893]/30 bg-white/10 text-[#D5B893]">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5"
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
                                <p class="font-['DM_Sans'] text-[10px] font-bold uppercase tracking-[0.18em] text-[#D5B893]">
                                    Kantor Cabang
                                </p>

                                <h3 class="mt-1 font-['Manrope'] text-lg font-extrabold tracking-wide text-white sm:text-xl">
                                    SURABAYA TRILLIUM
                                </h3>

                            </div>

                        </div>

                    </div>


                    {{-- DETAIL INFORMASI KANTOR --}}
                    <div class="p-5 sm:p-7">

                        <div class="grid grid-cols-1 gap-x-10 gap-y-6 sm:grid-cols-2">

                            {{-- ALAMAT --}}
                            <div class="flex gap-3 border-b border-[#D5B893]/30 pb-5">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-[#D5B893]/50 bg-[#D5B893]/15 text-[#25344F]">

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
                                    <h4 class="font-['Manrope'] text-sm font-extrabold text-[#25344F]">
                                        Alamat Kantor
                                    </h4>

                                    <p class="mt-1.5 font-['DM_Sans'] text-sm leading-6 text-[#617891]">
                                        Trillium Office &amp; Residence, Lt. 2 &amp; 3<br>
                                        Jl. Pemuda No. 108–116<br>
                                        Surabaya 60271
                                    </p>
                                </div>

                            </div>


                            {{-- TELEPON --}}
                            <div class="flex gap-3 border-b border-[#D5B893]/30 pb-5">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-[#D5B893]/50 bg-[#D5B893]/15 text-[#25344F]">

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
                                    <h4 class="font-['Manrope'] text-sm font-extrabold text-[#25344F]">
                                        Telepon
                                    </h4>

                                    <a href="tel:+623160003788"
                                       class="mt-1.5 inline-block font-['DM_Sans'] text-sm leading-6 text-[#617891] transition hover:text-[#632024]">
                                        +62 31 6000 3788 (Hunting)
                                    </a>
                                </div>

                            </div>


                            {{-- FAX --}}
                            <div class="flex gap-3 border-b border-[#D5B893]/30 pb-5">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-[#D5B893]/50 bg-[#D5B893]/15 text-[#25344F]">

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
                                    <h4 class="font-['Manrope'] text-sm font-extrabold text-[#25344F]">
                                        Fax
                                    </h4>

                                    <p class="mt-1.5 font-['DM_Sans'] text-sm leading-6 text-[#617891]">
                                        +62 31 6000 3688
                                    </p>
                                </div>

                            </div>


                            {{-- EMAIL --}}
                            <div class="flex gap-3 border-b border-[#D5B893]/30 pb-5">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-[#D5B893]/50 bg-[#D5B893]/15 text-[#25344F]">

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
                                    <h4 class="font-['Manrope'] text-sm font-extrabold text-[#25344F]">
                                        Email
                                    </h4>

                                    <a href="mailto:corporate@equityworld-futures.co.id"
                                       class="mt-1.5 inline-block break-all font-['DM_Sans'] text-sm leading-6 text-[#632024] transition hover:text-[#25344F] hover:underline">
                                        corporate@equityworld-futures.co.id
                                    </a>
                                </div>

                            </div>

                        </div>


                        {{-- TOMBOL PETA --}}
                        <div class="mt-5 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

                            <p class="font-['DM_Sans'] text-xs text-[#617891]">
                                Kunjungi lokasi kantor kami di Surabaya.
                            </p>

                            <a href="https://www.google.com/maps/search/?api=1&query=Trillium+Office+Residence+Jl+Pemuda+108-116+Surabaya"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="group inline-flex w-fit items-center justify-center gap-2 rounded-lg bg-[#632024] px-5 py-2.5 font-['DM_Sans'] text-xs font-bold text-white shadow-sm transition duration-300 hover:bg-[#25344F] hover:shadow-md focus:outline-none focus:ring-4 focus:ring-[#632024]/20">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-4 w-4 text-[#D5B893] transition-transform duration-300 group-hover:scale-110"
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
            <div class="mx-auto mt-6 max-w-5xl">

                <div class="flex items-start gap-4 rounded-xl border border-[#D5B893]/60 bg-[#D5B893]/10 px-5 py-4 sm:px-6">

                    <div class="mt-0.5 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-[#632024]/20 bg-[#632024]/5 text-[#632024]">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5"
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

                    <div class="min-w-0">

                        <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                            <h2 class="font-['Manrope'] text-sm font-extrabold text-[#25344F]">
                                Waspada terhadap Penipuan
                            </h2>

                            <span class="rounded-full bg-[#632024]/10 px-2.5 py-1 font-['DM_Sans'] text-[9px] font-bold uppercase tracking-wider text-[#632024]">
                                Informasi Penting
                            </span>
                        </div>

                        <p class="mt-2 font-['DM_Sans'] text-xs leading-6 text-[#617891] sm:text-sm">
                            PT Equityworld Futures mengingatkan masyarakat untuk selalu waspada terhadap penipuan yang mengatasnamakan perusahaan melalui media apa pun. Pastikan seluruh transaksi dan setoran hanya dilakukan ke Rekening Terpisah (Segregated Account) resmi atas nama PT Equityworld Futures, bukan perseorangan.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

@endsection
