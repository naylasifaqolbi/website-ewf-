@extends('layouts.public')

@section('title', 'Legalitas | PT Equityworld Futures')

@section('content')

<main class="min-h-screen overflow-hidden bg-white text-[#25344F]">

    {{-- =========================================================
        HERO
    ========================================================== --}}
    <section class="relative isolate overflow-hidden bg-[#25344F] text-white">

        <div class="pointer-events-none absolute -right-24 -top-24 h-96 w-96 rounded-full bg-[#632024]/60 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 -left-20 h-80 w-80 rounded-full bg-[#D5B893]/15 blur-3xl"></div>
        <div class="pointer-events-none absolute right-0 top-0 hidden h-full w-1/2 border-l border-[#D5B893]/10 lg:block"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-20 sm:px-8 lg:px-10 lg:py-24">

            <div class="max-w-3xl">

                <span class="inline-flex items-center gap-3 rounded-full border border-[#D5B893]/40 bg-white/5 px-4 py-2.5 text-xs font-extrabold uppercase tracking-[0.2em] text-[#D5B893]">

                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12l2 2 4-4m5-2a2 2 0 00-2-2h-1V5a2 2 0 00-2-2H9a2 2 0 00-2 2v1H6a2 2 0 00-2 2v9a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                    </svg>

                    Informasi Perusahaan

                </span>

                <h1 class="mt-7 text-4xl font-extrabold leading-[1.12] tracking-tight sm:text-5xl lg:text-6xl">
                    Legalitas
                    <span class="block text-[#D5B893]">Bisnis</span>
                </h1>

                <div class="mt-7 h-1 w-24 rounded-full bg-linear-to-r from-[#D5B893] to-[#632024]"></div>

                <p class="mt-7 max-w-3xl text-base leading-8 text-white/75 sm:text-lg">
                    Komitmen PT Equityworld Futures terhadap kepatuhan, transparansi,
                    dan penyelenggaraan perdagangan berjangka sesuai ketentuan yang berlaku.
                </p>

                <a href="#dokumen-legalitas"
                   class="mt-9 inline-flex items-center gap-3 rounded-xl bg-[#632024] px-7 py-3.5 font-bold text-white shadow-lg shadow-black/10 transition duration-300 hover:-translate-y-1 hover:bg-[#7A3035] focus:outline-none focus:ring-2 focus:ring-[#D5B893] focus:ring-offset-2 focus:ring-offset-[#25344F]">

                    Lihat Dokumen Legalitas

                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19 9l-7 7-7-7"/>
                    </svg>

                </a>

            </div>

        </div>
    </section>


    {{-- =========================================================
        TENTANG LEGALITAS
    ========================================================== --}}
    <section class="mx-auto max-w-7xl px-5 py-20 sm:px-8 lg:px-10 lg:py-24">

        <div class="grid items-center gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:gap-16">

            <div>

                <span class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                    Tentang Legalitas Kami
                </span>

                <h2 class="mt-4 text-3xl font-extrabold leading-tight text-[#25344F] sm:text-4xl">
                    Menjalankan Bisnis dengan Kepatuhan dan Transparansi
                </h2>

                <div class="mt-6 h-1 w-20 rounded-full bg-[#D5B893]"></div>

                <p class="mt-7 text-base leading-8 text-[#617891]">
                    PT Equityworld Futures beroperasi di bawah kerangka regulasi nasional
                    yang diawasi langsung oleh Badan Pengawas Perdagangan Berjangka
                    Komoditi (BAPPEBTI). Seluruh aktivitas perusahaan mengikuti standar
                    pengawasan, perlindungan, dan tata kelola yang ditetapkan pemerintah
                    untuk memastikan perdagangan berjangka berlangsung transparan,
                    terpercaya, dan sesuai ketentuan yang berlaku.
                </p>

            </div>


            {{-- KARTU KOMITMEN --}}
            <div class="relative overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-[#F7F8FA] p-7 shadow-sm sm:p-9">

                <div class="pointer-events-none absolute -right-12 -top-12 h-40 w-40 rounded-full bg-[#D5B893]/20"></div>

                <div class="relative">

                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-[#25344F] text-[#D5B893]">

                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 12l2 2 4-4"/>
                        </svg>

                    </div>

                    <h3 class="mt-6 text-xl font-extrabold text-[#25344F]">
                        Komitmen terhadap Kepatuhan
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-[#617891]">
                        Informasi legalitas disajikan untuk membantu pengunjung mengenali
                        dokumen pendirian, perizinan, keanggotaan, dan persetujuan yang
                        berkaitan dengan perusahaan.
                    </p>

                    <div class="mt-7 h-1.5 w-20 rounded-full bg-[#D5B893]"></div>

                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
        DATA DOKUMEN LEGALITAS
    ========================================================== --}}
    @php
        $legalities = [
            [
                'title' => 'Akta Pendirian Perseroan Terbatas',
                'description' => 'Diresmikan melalui Akta Nomor 01 tanggal 2 Juli 2005 oleh Notaris Tan Susy, S.H., dengan nama awal PT Goldmany Futures.',
                'category' => 'Dokumen Pendirian',
            ],
            [
                'title' => 'Pengesahan Departemen Hukum dan HAM',
                'description' => 'Disahkan melalui Surat Keputusan Nomor C-29097 HT.01.010 TH.2005.',
                'category' => 'Pengesahan Perusahaan',
            ],
            [
                'title' => 'Akta Perubahan Nama',
                'description' => 'Perusahaan resmi berganti nama menjadi PT Equityworld Futures berdasarkan Akta Nomor 11 tanggal 4 November 2008 oleh Notaris Tan Susy, S.H.',
                'category' => 'Perubahan Perusahaan',
            ],
            [
                'title' => 'Pengesahan Kementerian Hukum dan HAM',
                'description' => 'Pengesahan perubahan nama melalui Surat Keputusan Kementerian Hukum dan HAM Nomor AHU-95798.AH.01.02.Tahun 2008.',
                'category' => 'Pengesahan Perusahaan',
            ],
            [
                'title' => 'Surat Persetujuan Anggota Bursa (SPAB)',
                'description' => 'Terdaftar sebagai Anggota Bursa Berjangka Jakarta dengan Nomor SPAB-143/BBJ/09/05.',
                'category' => 'Keanggotaan Bursa',
            ],
            [
                'title' => 'Izin Usaha Pialang Berjangka',
                'description' => 'Ditetapkan berdasarkan Keputusan Kepala BAPPEBTI Nomor 850/BAPPEBTI/SI/12/2005.',
                'category' => 'Izin Usaha',
            ],
            [
                'title' => 'Keanggotaan Lembaga Kliring Berjangka Indonesia',
                'description' => 'Resmi terdaftar sebagai anggota Kliring Berjangka Indonesia dengan Nomor 36/AK-KBI/IV/2006.',
                'category' => 'Keanggotaan Kliring',
            ],
            [
                'title' => 'Perjanjian Kerja Sama Sistem Perdagangan Alternatif',
                'description' => 'Kerja sama dengan PT Royal Assetindo melalui Surat Nomor 162/GM/DIR/V/2006.',
                'category' => 'Kerja Sama',
            ],
            [
                'title' => 'SK BAPPEBTI Peserta SPA',
                'description' => 'Persetujuan sebagai Peserta Sistem Perdagangan Alternatif (SPA) berdasarkan SK BAPPEBTI Nomor 1524/BAPPEBTI/SP/4/2007.',
                'category' => 'Persetujuan SPA',
            ],
            [
                'title' => 'SK BAPPEBTI Perubahan Nama',
                'description' => 'Persetujuan perubahan nama dari PT Goldmany Futures menjadi PT Equityworld Futures berdasarkan SK BAPPEBTI Nomor 05/BAPPEBTI/PN/3/2009.',
                'category' => 'Perubahan Nama',
            ],
            [
                'title' => 'Pialang Berjangka Online',
                'description' => 'Penetapan sebagai Pialang Berjangka yang melaksanakan registrasi nasabah secara elektronik (online) melalui Surat Penetapan BAPPEBTI Nomor 26/BAPPEBTI/KEP-PBK/08/2014.',
                'category' => 'Registrasi Elektronik',
            ],
            [
                'title' => 'Persetujuan Prinsip OJK Derivatif Keuangan',
                'description' => 'Persetujuan Prinsip sebagai Pelaku Derivatif Keuangan untuk beroperasi sebagai Perantara Perdagangan Efek Derivatif Keuangan, sesuai dengan ketentuan Otoritas Jasa Keuangan melalui Nomor S-298/PM.02/2025.',
                'category' => 'Persetujuan OJK',
            ],
            [
                'title' => 'Pialang Berjangka Peserta SPA Derivatif PUVA',
                'description' => 'Tercatat sebagai Pialang Berjangka Peserta Sistem Perdagangan Alternatif Derivatif PUVA berdasarkan surat penetapan Bank Indonesia Nomor 27/596/DPPK/Srt/B.',
                'category' => 'Persetujuan Derivatif PUVA',
            ],
        ];
    @endphp


    {{-- =========================================================
        DAFTAR DOKUMEN LEGALITAS
    ========================================================== --}}
    <section id="dokumen-legalitas" class="scroll-mt-24 bg-[#F7F8FA]">

        <div class="mx-auto max-w-7xl px-5 py-20 sm:px-8 lg:px-10 lg:py-24">

            <div class="max-w-3xl">

                <span class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                    Dokumen dan Perizinan
                </span>

                <h2 class="mt-4 text-3xl font-extrabold text-[#25344F] sm:text-4xl">
                    Legalitas PT Equityworld Futures
                </h2>

                <div class="mt-6 h-1 w-20 rounded-full bg-[#D5B893]"></div>

                <p class="mt-5 leading-8 text-[#617891]">
                    Daftar berikut memuat informasi dokumen pendirian, perizinan,
                    keanggotaan, serta persetujuan yang berkaitan dengan perusahaan.
                </p>

            </div>


            <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">

                @foreach ($legalities as $index => $item)

                    <article class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl hover:shadow-[#25344F]/10">

                        <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-[#F7F8FA] transition duration-300 group-hover:bg-[#D5B893]/20"></div>

                        <div class="relative flex items-start justify-between gap-3">

                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893] transition duration-300 group-hover:bg-[#632024]">

                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M7 3h7l5 5v11a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M14 3v5h5M8 13h8M8 17h8"/>
                                </svg>

                            </div>

                            <span class="flex h-9 min-w-9 items-center justify-center rounded-full bg-[#632024] px-2 text-xs font-extrabold text-white">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </span>

                        </div>

                        <span class="relative mt-6 text-xs font-extrabold uppercase tracking-[0.15em] text-[#632024]">
                            {{ $item['category'] }}
                        </span>

                        <h3 class="relative mt-3 text-lg font-extrabold leading-7 text-[#25344F]">
                            {{ $item['title'] }}
                        </h3>

                        <p class="relative mt-3 flex-1 text-sm leading-7 text-[#617891]">
                            {{ $item['description'] }}
                        </p>

                        <div class="relative mt-7 h-1 w-12 rounded-full bg-[#D5B893] transition-all duration-300 group-hover:w-20"></div>

                    </article>

                @endforeach

            </div>


            {{-- INFORMASI DOKUMEN --}}
            <div class="mt-10 rounded-2xl border border-[#D5B893]/60 bg-white p-6 shadow-sm sm:p-7">

                <div class="flex items-start gap-4">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#F7F8FA] text-[#632024]">

                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3m0 4h.01M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>
                        </svg>

                    </div>

                    <div>

                        <h3 class="font-extrabold text-[#25344F]">
                            Informasi Dokumen
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-[#617891]">
                            Daftar ini merupakan informasi ringkas, bukan pengganti dokumen
                            legalitas asli. Nomor, nama dokumen, status keberlakuan, dan
                            kewenangan lembaga terkait perlu diperiksa berdasarkan dokumen
                            resmi terbaru sebelum dipublikasikan.
                        </p>

                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
        PERINGATAN PENIPUAN
    ========================================================== --}}
    <section class="mx-auto max-w-7xl px-5 py-20 sm:px-8 lg:px-10 lg:py-24">

        <div class="overflow-hidden rounded-3xl border border-[#D5B893]/50 bg-white shadow-xl shadow-[#25344F]/5">

            <div class="h-2 bg-[#632024]"></div>

            <div class="p-7 sm:p-10 lg:p-12">

                <div class="flex flex-col gap-6 sm:flex-row sm:items-start">

                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-[#F7F8FA] text-[#632024]">

                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v3m0 4h.01M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>
                        </svg>

                    </div>

                    <div class="flex-1">

                        <span class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                            Pemberitahuan Penting
                        </span>

                        <h2 class="mt-3 text-2xl font-extrabold text-[#25344F] sm:text-3xl">
                            PERHATIAN: Waspada Penipuan
                        </h2>

                        <p class="mt-5 leading-8 text-[#617891]">
                            PT Equityworld Futures mengingatkan masyarakat untuk selalu
                            waspada terhadap penipuan yang mengatasnamakan perusahaan
                            melalui media apa pun. Pastikan seluruh transaksi dan setoran
                            hanya dilakukan ke Rekening Terpisah (Segregated Account)
                            resmi atas nama PT Equityworld Futures, bukan perseorangan.
                        </p>

                        <div class="mt-6 rounded-xl border border-[#D5B893]/50 bg-[#F7F8FA] p-5">

                            <p class="text-sm leading-7 text-[#25344F]">
                                Jangan melakukan transfer ke rekening pribadi atau pihak
                                yang identitas dan kewenangannya belum dipastikan.
                                Verifikasi informasi rekening melalui saluran resmi
                                perusahaan sebelum melakukan transaksi.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

@endsection