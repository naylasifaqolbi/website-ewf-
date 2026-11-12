
@extends('layouts.public')

@section('title', 'Legalitas | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-[#FFF9F0]">

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-[#951A21] text-white">
        <div class="pointer-events-none absolute -right-20 -top-24 h-72 w-72 rounded-full bg-ewf-red-poppy/40 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-24 right-1/3 h-56 w-56 rounded-full bg-[#FFA368]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-8 lg:py-20">
            <span class="inline-flex items-center gap-2 rounded-full border border-ewf-hawkbit/30 bg-white/5 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-ewf-hawkbit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5-2a2 2 0 00-2-2h-1V5a2 2 0 00-2-2H9a2 2 0 00-2 2v1H6a2 2 0 00-2 2v9a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                </svg>
                Informasi Perusahaan
            </span>

            <h1 class="mt-5 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Legalitas Bisnis
            </h1>

            <p class="mt-5 max-w-3xl text-base leading-8 text-white/80 sm:text-lg">
                Komitmen PT Equityworld Futures terhadap kepatuhan, transparansi,
                dan penyelenggaraan perdagangan berjangka sesuai ketentuan yang berlaku.
            </p>

            <a href="#dokumen-legalitas"
               class="mt-8 inline-flex items-center gap-2 rounded-xl bg-ewf-hawkbit px-6 py-3 font-bold text-[#951A21] transition duration-300 hover:bg-[#EFBB55] focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-[#951A21]">
                Lihat Dokumen Legalitas

                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
        </div>
    </section>


    {{-- TENTANG LEGALITAS --}}
    <section class="mx-auto max-w-7xl px-5 py-14 sm:px-6 lg:px-8 lg:py-16">
        <div class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">

            <div>
                <span class="text-sm font-bold uppercase tracking-[0.15em] text-[#951A21]">
                    Tentang Legalitas Kami
                </span>

                <h2 class="mt-3 text-3xl font-extrabold leading-tight text-[#951A21] sm:text-4xl">
                    Menjalankan Bisnis dengan Kepatuhan dan Transparansi
                </h2>

                <p class="mt-5 leading-8 text-[#675653]">
                    PT Equityworld Futures beroperasi di bawah kerangka regulasi nasional
                    yang diawasi langsung oleh Badan Pengawas Perdagangan Berjangka
                    Komoditi (BAPPEBTI). Seluruh aktivitas perusahaan mengikuti standar
                    pengawasan, perlindungan, dan tata kelola yang ditetapkan pemerintah
                    untuk memastikan perdagangan berjangka berlangsung transparan,
                    terpercaya, dan sesuai ketentuan yang berlaku.
                </p>
            </div>

            <div class="rounded-3xl border border-[#EAD8CB] bg-white p-7 shadow-sm sm:p-9">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#FBE5D6] text-[#951A21]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"/>
                    </svg>
                </div>

                <h3 class="mt-5 text-xl font-extrabold text-[#951A21]">
                    Komitmen terhadap Kepatuhan
                </h3>

                <p class="mt-3 text-sm leading-7 text-[#786662]">
                    Informasi legalitas disajikan untuk membantu pengunjung mengenali
                    dokumen pendirian, perizinan, keanggotaan, dan persetujuan yang
                    berkaitan dengan perusahaan.
                </p>

                <div class="mt-6 h-1.5 w-20 rounded-full bg-[#FFA368]"></div>
            </div>

        </div>
    </section>


    {{-- DAFTAR DOKUMEN LEGALITAS --}}
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

    <section id="dokumen-legalitas" class="scroll-mt-24 bg-white">
        <div class="mx-auto max-w-7xl px-5 py-14 sm:px-6 lg:px-8 lg:py-16">

            <div class="max-w-3xl">
                <span class="text-sm font-bold uppercase tracking-[0.15em] text-[#951A21]">
                    Dokumen dan Perizinan
                </span>

                <h2 class="mt-3 text-3xl font-extrabold text-[#951A21] sm:text-4xl">
                    Legalitas PT Equityworld Futures
                </h2>

                <p class="mt-4 leading-7 text-[#786662]">
                    Daftar berikut memuat informasi dokumen pendirian, perizinan,
                    keanggotaan, serta persetujuan yang berkaitan dengan perusahaan.
                </p>
            </div>

            <div class="mt-9 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($legalities as $index => $item)
                    <article class="group flex h-full flex-col rounded-2xl border border-[#EAD8CB] bg-[#FFF9F0] p-6 transition duration-300 hover:-translate-y-1 hover:border-[#D9A49A] hover:shadow-lg">

                        <div class="flex items-start justify-between gap-3">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition duration-300 group-hover:bg-[#951A21] group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l5 5v11a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 3v5h5M8 13h8M8 17h8"/>
                                </svg>
                            </div>

                            <span class="flex h-8 min-w-8 items-center justify-center rounded-full bg-[#951A21] px-2 text-xs font-extrabold text-white">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </span>
                        </div>

                        <span class="mt-5 text-xs font-bold uppercase tracking-wider text-[#951A21]">
                            {{ $item['category'] }}
                        </span>

                        <h3 class="mt-2 text-lg font-extrabold leading-7 text-[#951A21]">
                            {{ $item['title'] }}
                        </h3>

                        <p class="mt-3 flex-1 text-sm leading-7 text-[#786662]">
                            {{ $item['description'] }}
                        </p>

                        <div class="mt-5 h-1 w-12 rounded-full bg-[#EFBB55] transition-all duration-300 group-hover:w-20"></div>
                    </article>
                @endforeach
            </div>

            <div class="mt-8 rounded-2xl border border-[#F0D9A5] bg-[#FFF8E6] p-5 sm:p-6">
                <div class="flex items-start gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-6 w-6 shrink-0 text-[#951A21]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 4h.01M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>
                    </svg>

                    <div>
                        <h3 class="font-extrabold text-[#951A21]">
                            Informasi Dokumen
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-[#675653]">
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


    {{-- PERINGATAN PENIPUAN --}}
    <section class="mx-auto max-w-7xl px-5 py-14 sm:px-6 lg:px-8 lg:py-16">
        <div class="overflow-hidden rounded-3xl border border-ewf-red-poppy/20 bg-white shadow-sm">
            <div class="h-2 bg-ewf-red-poppy"></div>

            <div class="p-6 sm:p-9 lg:p-10">
                <div class="flex flex-col gap-5 sm:flex-row sm:items-start">

                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-[#FCE7E3] text-ewf-red-poppy">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 4h.01M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>
                        </svg>
                    </div>

                    <div class="flex-1">
                        <span class="text-xs font-extrabold uppercase tracking-[0.18em] text-ewf-red-poppy">
                            Pemberitahuan Penting
                        </span>

                        <h2 class="mt-2 text-2xl font-extrabold text-[#951A21] sm:text-3xl">
                            PERHATIAN: Waspada Penipuan
                        </h2>

                        <p class="mt-4 leading-8 text-[#675653]">
                            PT Equityworld Futures mengingatkan masyarakat untuk selalu
                            waspada terhadap penipuan yang mengatasnamakan perusahaan
                            melalui media apa pun. Pastikan seluruh transaksi dan setoran
                            hanya dilakukan ke Rekening Terpisah (Segregated Account)
                            resmi atas nama PT Equityworld Futures, bukan perseorangan.
                        </p>

                        <div class="mt-5 rounded-xl bg-[#FFF4F1] p-4">
                            <p class="text-sm leading-7 text-[#8D2921]">
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
