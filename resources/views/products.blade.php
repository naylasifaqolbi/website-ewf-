
@extends('layouts.public')

@section('title', 'Produk & Layanan | PT Equityworld Futures')

@section('content')

<main class="bg-[#FFF9F0]">

    {{-- =====================================================
        HERO SECTION
    ====================================================== --}}
    <section class="relative overflow-hidden bg-[#951A21] text-white">
        <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full bg-[#CF3021]/40 blur-3xl"></div>
        <div class="absolute -bottom-24 left-1/3 h-64 w-64 rounded-full bg-[#FFA368]/20 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-20 lg:px-8 lg:py-24">
            <span class="inline-flex rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-[#FFD66E]">
                Informasi Produk EWF
            </span>

            <h1 class="mt-6 max-w-3xl text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Solusi Investasi Terbaik
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-white/85 sm:text-lg">
                Kenali berbagai produk perdagangan berjangka dan Sistem
                Perdagangan Alternatif (SPA) yang tercantum dalam informasi
                produk PT Equityworld Futures. Pelajari kode kontrak,
                karakteristik, serta risiko setiap produk sebelum bertransaksi.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <a href="#produk-jfx"
                   class="inline-flex items-center gap-2 rounded-xl bg-[#FFD66E] px-6 py-3.5 font-bold text-[#6D1720] transition hover:bg-[#EFBB55]">
                    Jelajahi Produk
                    <span aria-hidden="true">&darr;</span>
                </a>

                <a href="#keunggulan"
                   class="inline-flex items-center rounded-xl border border-white/30 px-6 py-3.5 font-bold text-white transition hover:bg-white/10">
                    Keunggulan Produk
                </a>
            </div>
        </div>
    </section>


    {{-- =====================================================
        INTRODUCTION
    ====================================================== --}}
    <section class="px-5 py-14 lg:px-8 lg:py-16">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#951A21]">
                    Jelajahi Produk
                </p>

                <h2 class="mt-3 text-3xl font-extrabold leading-tight text-[#6D1720] sm:text-4xl">
                    Informasi Produk Perdagangan Berjangka
                </h2>

                <p class="mt-5 leading-8 text-[#51413E]">
                    EWF menyediakan informasi mengenai berbagai instrumen
                    perdagangan berjangka, termasuk kontrak komoditas dan
                    produk dengan mekanisme Sistem Perdagangan Alternatif.
                    Setiap produk memiliki karakteristik, kode kontrak,
                    mekanisme transaksi, dan risiko yang perlu dipahami.
                </p>
            </div>
        </div>
    </section>


    {{-- =====================================================
        JFX PRODUCTS
    ====================================================== --}}
    @php
        $jfxProducts = [
            [
                'code' => 'GOL250',
                'title' => 'Kontrak Berjangka Emas 250 Gram',
                'description' => 'Kontrak derivatif standar yang berkaitan dengan emas dengan ukuran kontrak 250 gram. Informasi produk mencakup periode kontrak, mekanisme perdagangan, serta ketentuan penyerahan fisik atau penyelesaian sesuai spesifikasi kontrak.',
                'type' => 'Kontrak Berjangka Komoditas',
            ],
            [
                'code' => 'GOL',
                'title' => 'Kontrak Berjangka Emas',
                'description' => 'Kontrak berjangka yang berkaitan dengan pergerakan harga emas. Produk ini dapat digunakan untuk strategi perdagangan atau pengelolaan risiko harga, dengan memperhatikan spesifikasi kontrak, margin, dan risiko pergerakan pasar.',
                'type' => 'Kontrak Berjangka Komoditas',
            ],
            [
                'code' => 'OLE',
                'title' => 'Kontrak Berjangka Olein',
                'description' => 'Produk perdagangan berjangka berbasis komoditas olein, yaitu minyak kelapa sawit olahan. Kontrak ini berkaitan dengan perubahan harga komoditas dan dapat digunakan untuk strategi perdagangan maupun lindung nilai sesuai ketentuan yang berlaku.',
                'type' => 'Kontrak Berjangka Komoditas',
            ],
        ];

        $spaProducts = [
            [
                'codes' => 'GU10F_BBJ & GU1010_BBJ',
                'title' => 'Produk GU',
                'description' => 'Informasi produk dengan kode GU10F_BBJ dan GU1010_BBJ. Spesifikasi, aset acuan, ukuran kontrak, serta ketentuan transaksinya perlu merujuk pada dokumen resmi produk.',
                'type' => 'Produk SPA',
            ],
            [
                'codes' => 'EU1010_BBJ & EU10F_BBJ',
                'title' => 'Produk EU',
                'description' => 'Informasi produk dengan kode EU1010_BBJ dan EU10F_BBJ. Pelajari spesifikasi kontrak, aset acuan, mekanisme transaksi, serta risiko sebelum melakukan perdagangan.',
                'type' => 'Produk SPA',
            ],
            [
                'codes' => 'UC10F_BBJ & UC1010_BBJ',
                'title' => 'Produk UC',
                'description' => 'Produk dengan kode UC10F_BBJ dan UC1010_BBJ. Deskripsi awal mengaitkannya dengan Spot Gold dan komoditas lainnya; aset acuan serta spesifikasi masing-masing kode perlu dikonfirmasi pada dokumen resmi.',
                'type' => 'Produk SPA',
            ],
            [
                'codes' => 'UJ10F_BBJ & UJ1010_BBJ',
                'title' => 'Produk UJ',
                'description' => 'Produk dengan kode UJ10F_BBJ dan UJ1010_BBJ yang pada informasi awal disebut berkaitan dengan Spot Gold atau emas digital. Pastikan spesifikasi dan karakteristik produknya melalui dokumen resmi.',
                'type' => 'Produk SPA',
            ],
            [
                'codes' => 'JPK50_BBJ & JPK5U_BBJ',
                'title' => 'Kontrak Indeks Saham Jepang',
                'description' => 'Kode kontrak yang pada informasi awal dikaitkan dengan indeks Nikkei 225. Produk disebut tersedia dalam denominasi Rupiah dan USD. Periksa aset acuan, mekanisme kontrak, dan ketentuan perdagangannya sebelum bertransaksi.',
                'type' => 'Produk SPA',
            ],
            [
                'codes' => 'BCO10_BBJ & BCOF_BBJ',
                'title' => 'Produk BCO',
                'description' => 'Produk dengan kode BCO10_BBJ dan BCOF_BBJ yang pada informasi awal dikaitkan dengan kontrak derivatif indeks saham. Detail indeks acuan dan spesifikasi kontrak perlu diperiksa pada dokumen resmi.',
                'type' => 'Produk SPA',
            ],
            [
                'codes' => 'HKK50_BBJ & HKK5U_BBJ',
                'title' => 'Kontrak Indeks Saham Hong Kong',
                'description' => 'Kode kontrak yang pada informasi awal dikaitkan dengan indeks Hang Seng. Produk disebut tersedia dalam denominasi Rupiah dan USD, dengan harga yang mengacu pada instrumen indeks terkait. Periksa spesifikasi dan risiko kontrak.',
                'type' => 'Produk SPA',
            ],
            [
                'codes' => 'XUL10 & XULF',
                'title' => 'Produk Emas Loco London',
                'description' => 'Kode kontrak XUL10 dan XULF yang pada informasi awal dikaitkan dengan derivatif emas Loco London. Keduanya disebut menggunakan denominasi Rupiah dan USD. Detail harga acuan, mekanisme kontrak, dan ketentuan transaksi harus mengikuti dokumen resmi.',
                'type' => 'Produk SPA',
            ],
            [
                'codes' => 'AU1010_BBJ & AU10F_BBJ',
                'title' => 'Produk AU',
                'description' => 'Kode kontrak yang pada informasi awal dikaitkan dengan pergerakan nilai tukar Dolar Australia (AUD) terhadap Dolar AS (USD). Informasi mengenai denominasi dan spesifikasi kontrak perlu dikonfirmasi melalui dokumen produk resmi.',
                'type' => 'Produk SPA',
            ],
        ];
    @endphp

    <section id="produk-jfx" class="scroll-mt-24 bg-white px-5 py-16 lg:px-8 lg:py-20">
        <div class="mx-auto max-w-7xl">

            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <span class="inline-flex rounded-full bg-[#FBE5D6] px-4 py-2 text-xs font-extrabold uppercase tracking-widest text-[#951A21]">
                        JFX
                    </span>

                    <h2 class="mt-4 text-3xl font-extrabold text-[#6D1720] sm:text-4xl">
                        Kontrak Berjangka Komoditas
                    </h2>

                    <p class="mt-3 max-w-2xl leading-7 text-[#675653]">
                        Kenali kontrak berjangka yang berkaitan dengan
                        komoditas emas dan olein.
                    </p>
                </div>

                <span class="text-sm font-semibold text-[#951A21]">
                    {{ count($jfxProducts) }} produk
                </span>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($jfxProducts as $index => $product)
                    <article class="group flex h-full flex-col rounded-2xl border border-[#951A21]/10 bg-[#FFF9F0] p-7 transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-xl">

                        <div class="flex items-start justify-between gap-4">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#951A21] text-sm font-extrabold text-white">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </span>

                            <span class="rounded-full bg-[#EFBB55]/30 px-3 py-1.5 text-xs font-bold text-[#6D1720]">
                                JFX
                            </span>
                        </div>

                        <p class="mt-6 text-xs font-bold uppercase tracking-widest text-[#951A21]">
                            {{ $product['type'] }}
                        </p>

                        <h3 class="mt-2 text-xl font-extrabold leading-snug text-[#6D1720]">
                            {{ $product['title'] }}
                        </h3>

                        <div class="mt-4 inline-flex w-fit rounded-lg border border-[#951A21]/10 bg-white px-3 py-2">
                            <span class="text-sm font-extrabold tracking-wide text-[#951A21]">
                                {{ $product['code'] }}
                            </span>
                        </div>

                        <p class="mt-4 flex-1 text-sm leading-7 text-[#675653]">
                            {{ $product['description'] }}
                        </p>

                        <a href="{{ route('contact') }}"
                           class="mt-6 inline-flex items-center gap-2 border-t border-[#951A21]/10 pt-5 font-bold text-[#951A21] transition hover:text-[#CF3021]">
                            Tanyakan informasi
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>


    {{-- =====================================================
        SPA PRODUCTS
    ====================================================== --}}
    <section id="produk-spa" class="scroll-mt-24 px-5 py-16 lg:px-8 lg:py-20">
        <div class="mx-auto max-w-7xl">

            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <span class="inline-flex rounded-full bg-[#EFBB55]/30 px-4 py-2 text-xs font-extrabold uppercase tracking-widest text-[#6D1720]">
                        SPA
                    </span>

                    <h2 class="mt-4 text-3xl font-extrabold text-[#6D1720] sm:text-4xl">
                        Sistem Perdagangan Alternatif
                    </h2>

                    <p class="mt-3 max-w-2xl leading-7 text-[#675653]">
                        Daftar kode produk SPA berdasarkan informasi yang
                        diberikan. Periksa dokumen resmi untuk memastikan
                        spesifikasi dan karakteristik setiap kontrak.
                    </p>
                </div>

                <span class="text-sm font-semibold text-[#951A21]">
                    {{ count($spaProducts) }} kelompok produk
                </span>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($spaProducts as $index => $product)
                    <article class="group flex h-full flex-col rounded-2xl border border-[#EAD8CB] bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#D9A27D] hover:shadow-xl">

                        <div class="flex items-start justify-between gap-4">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#FBE5D6] text-sm font-extrabold text-[#951A21]">
                                {{ str_pad($index + 4, 2, '0', STR_PAD_LEFT) }}
                            </span>

                            <span class="rounded-full bg-[#FFF0DF] px-3 py-1.5 text-xs font-bold text-[#951A21]">
                                SPA
                            </span>
                        </div>

                        <h3 class="mt-6 text-xl font-extrabold leading-snug text-[#6D1720]">
                            {{ $product['title'] }}
                        </h3>

                        <div class="mt-4 rounded-xl border border-[#951A21]/10 bg-[#FFF9F0] p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-[#786662]">
                                Kode Produk
                            </p>

                            <p class="mt-2 break-words text-sm font-extrabold leading-6 text-[#951A21]">
                                {{ $product['codes'] }}
                            </p>
                        </div>

                        <p class="mt-4 flex-1 text-sm leading-7 text-[#675653]">
                            {{ $product['description'] }}
                        </p>

                        <a href="{{ route('contact') }}"
                           class="mt-6 inline-flex items-center gap-2 border-t border-[#951A21]/10 pt-5 font-bold text-[#951A21] transition hover:text-[#CF3021]">
                            Tanyakan informasi
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>


    {{-- =====================================================
        PRODUCT ADVANTAGES
    ====================================================== --}}
    @php
        $advantages = [
            [
                'number' => '01',
                'icon' => 'wallet',
                'title' => 'Efisiensi Modal',
                'description' => 'Mekanisme margin memungkinkan nasabah membuka posisi dengan dana jaminan sesuai persyaratan kontrak, tanpa harus menyediakan seluruh nilai nosional transaksi. Besarnya margin dan potensi kerugian perlu dipahami sebelum bertransaksi.',
            ],
            [
                'number' => '02',
                'icon' => 'arrows',
                'title' => 'Fleksibilitas Transaksi',
                'description' => 'Karakteristik produk tertentu memungkinkan strategi berdasarkan perkiraan kenaikan maupun penurunan harga. Hasil transaksi tetap bergantung pada kondisi pasar, strategi, dan risiko yang dihadapi.',
            ],
            [
                'number' => '03',
                'icon' => 'chart',
                'title' => 'Pergerakan Harga',
                'description' => 'Pergerakan harga memberikan peluang sekaligus risiko. Nilai per poin, rentang harga, biaya transaksi, serta spesifikasi kontrak berbeda menurut produk dan harus diperiksa melalui ketentuan resminya.',
            ],
            [
                'number' => '04',
                'icon' => 'clock',
                'title' => 'Akses Perdagangan',
                'description' => 'Jam perdagangan, likuiditas, dan ketersediaan harga mengikuti karakteristik instrumen serta ketentuan pasar. Eksekusi transaksi dan ketersediaan harga tidak selalu dapat dijamin setiap saat.',
            ],
        ];
    @endphp

    <section id="keunggulan" class="scroll-mt-24 bg-[#6D1720] px-5 py-16 text-white lg:px-8 lg:py-20">
        <div class="mx-auto max-w-7xl">

            <div class="max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#FFD66E]">
                    Nilai dan Karakteristik
                </p>

                <h2 class="mt-3 text-3xl font-extrabold sm:text-4xl">
                    Keunggulan Produk
                </h2>

                <p class="mt-5 leading-8 text-white/80">
                    Keunggulan produk PT Equityworld Futures dirancang
                    untuk mendukung strategi perdagangan nasabah secara
                    efisien dan fleksibel. Setiap karakteristik tetap perlu
                    dipahami bersama risiko dan ketentuan produknya.
                </p>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($advantages as $advantage)
                    <article class="rounded-2xl border border-white/10 bg-white/[0.06] p-6 transition hover:-translate-y-1 hover:bg-white/[0.10]">

                        <div class="flex items-center justify-between">
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FFD66E] text-[#6D1720]">
                                @if ($advantage['icon'] === 'wallet')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <rect x="3" y="5" width="18" height="15" rx="2"/>
                                        <path d="M3 9h18M16 14h2M6 5V3h12v2"/>
                                    </svg>
                                @elseif ($advantage['icon'] === 'arrows')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path d="M7 7h14l-4-4M17 17H3l4 4"/>
                                        <path d="m17 3 4 4-4 4M7 13l-4 4 4 4"/>
                                    </svg>
                                @elseif ($advantage['icon'] === 'chart')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path d="M3 3v18h18"/>
                                        <path d="m7 14 4-4 4 3 5-7"/>
                                    </svg>
                                @elseif ($advantage['icon'] === 'clock')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <circle cx="12" cy="12" r="9"/>
                                        <path d="M12 7v5l3 2"/>
                                    </svg>
                                @endif
                            </span>

                            <span class="text-3xl font-black text-white/15">
                                {{ $advantage['number'] }}
                            </span>
                        </div>

                        <h3 class="mt-6 text-xl font-extrabold text-[#FFD66E]">
                            {{ $advantage['title'] }}
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-white/75">
                            {{ $advantage['description'] }}
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>


    {{-- =====================================================
        INVESTMENT TYPES
    ====================================================== --}}
    <section id="jenis-investasi" class="px-5 py-16 lg:px-8 lg:py-20">
        <div class="mx-auto max-w-7xl">

            <div class="max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#951A21]">
                    Pilihan Denominasi
                </p>

                <h2 class="mt-3 text-3xl font-extrabold text-[#6D1720] sm:text-4xl">
                    Jenis Investasi
                </h2>

                <p class="mt-4 leading-7 text-[#675653]">
                    Informasi berikut merangkum dua jenis kurs yang
                    tercantum pada materi yang diberikan. Pastikan
                    ketentuan kurs dan biaya sesuai dengan kontrak,
                    rekening, dan perjanjian yang berlaku.
                </p>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2">

                {{-- FIXED RATE --}}
                <article class="overflow-hidden rounded-2xl border border-[#951A21]/10 bg-white shadow-sm transition hover:shadow-lg">
                    <div class="bg-[#951A21] p-7 text-white">
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#FFD66E]">
                            Jenis Pertama
                        </span>

                        <h3 class="mt-3 text-2xl font-extrabold">
                            Fixed Rate
                        </h3>

                        <p class="mt-1 text-white/75">
                            Kurs Tetap
                        </p>
                    </div>

                    <div class="p-7">
                        <p class="text-sm font-bold uppercase tracking-widest text-[#786662]">
                            Informasi Kurs
                        </p>

                        <p class="mt-2 text-2xl font-extrabold text-[#951A21]">
                            US$ 1 = Rp10.000
                        </p>

                        <p class="mt-2 text-sm leading-7 text-[#675653]">
                            Nilai kurs tetap sebagaimana tercantum dalam
                            materi yang diberikan. Penerapan kurs ini
                            harus dikonfirmasi berdasarkan ketentuan produk
                            dan perjanjian yang berlaku.
                        </p>

                        <div class="mt-6 rounded-xl bg-[#FFF9F0] p-5">
                            <h4 class="font-extrabold text-[#6D1720]">
                                Karakteristik
                            </h4>

                            <ul class="mt-3 space-y-3 text-sm leading-6 text-[#675653]">
                                <li class="flex gap-3">
                                    <span class="font-black text-[#951A21]">01</span>
                                    <span>Menggunakan nilai kurs tetap sesuai ketentuan produk.</span>
                                </li>

                                <li class="flex gap-3">
                                    <span class="font-black text-[#951A21]">02</span>
                                    <span>Perlakuan terhadap perubahan kurs USD/IDR mengikuti perjanjian yang berlaku.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>


                {{-- FLOATING RATE --}}
                <article class="overflow-hidden rounded-2xl border border-[#951A21]/10 bg-white shadow-sm transition hover:shadow-lg">
                    <div class="bg-[#EFBB55] p-7 text-[#6D1720]">
                        <span class="text-xs font-bold uppercase tracking-[0.2em]">
                            Jenis Kedua
                        </span>

                        <h3 class="mt-3 text-2xl font-extrabold">
                            Floating Rate
                        </h3>

                        <p class="mt-1 text-[#6D1720]/75">
                            Kurs Berjalan
                        </p>
                    </div>

                    <div class="p-7">
                        <p class="text-sm font-bold uppercase tracking-widest text-[#786662]">
                            Informasi Kurs
                        </p>

                        <p class="mt-2 text-2xl font-extrabold text-[#951A21]">
                            Mengikuti Kurs USD/IDR
                        </p>

                        <p class="mt-2 text-sm leading-7 text-[#675653]">
                            Nilai Rupiah mengikuti kurs yang berlaku
                            sesuai ketentuan produk dan waktu transaksi.
                            Dampak perubahan kurs perlu diperhitungkan
                            sebelum melakukan transaksi.
                        </p>

                        <div class="mt-6 rounded-xl bg-[#FFF9F0] p-5">
                            <h4 class="font-extrabold text-[#6D1720]">
                                Karakteristik
                            </h4>

                            <ul class="mt-3 space-y-3 text-sm leading-6 text-[#675653]">
                                <li class="flex gap-3">
                                    <span class="font-black text-[#951A21]">01</span>
                                    <span>Konversi mengikuti kurs yang berlaku sesuai ketentuan produk.</span>
                                </li>

                                <li class="flex gap-3">
                                    <span class="font-black text-[#951A21]">02</span>
                                    <span>Ketentuan biaya pembukaan dan penarikan dana USD perlu dikonfirmasi kepada perusahaan.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>

            </div>

            <p class="mt-6 text-xs leading-6 text-[#786662]">
                Catatan: informasi kurs tetap, kurs berjalan, dan biaya
                pada halaman ini merupakan ringkasan materi awal.
                Ketentuan yang berlaku harus mengacu pada dokumen resmi
                produk dan perjanjian nasabah.
            </p>
        </div>
    </section>


    {{-- =====================================================
        RISK NOTICE
    ====================================================== --}}
    <section class="px-5 pb-10 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="rounded-2xl border border-[#EFBB55] bg-[#FFF0DF] p-6 sm:p-8">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#EFBB55]/40 text-[#6D1720]">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="M10.3 3.9 2.6 17.2A2 2 0 0 0 4.3 20h15.4a2 2 0 0 0 1.7-2.8L13.7 3.9a2 2 0 0 0-3.4 0Z"/>
                            <path d="M12 9v4M12 17h.01"/>
                        </svg>
                    </div>

                    <div>
                        <h2 class="text-xl font-extrabold text-[#6D1720]">
                            Pahami Risiko Sebelum Bertransaksi
                        </h2>

                        <p class="mt-3 leading-7 text-[#675653]">
                            Perdagangan berjangka dan produk derivatif
                            memiliki risiko serta dapat mengakibatkan
                            kerugian. Pahami spesifikasi kontrak, nilai
                            margin, biaya transaksi, mekanisme penyelesaian,
                            dan dokumen pemberitahuan risiko yang berlaku.
                            Pergerakan harga yang menguntungkan tidak dapat
                            dijamin.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- =====================================================
        ANTI-FRAUD NOTICE
    ====================================================== --}}
    <section class="px-5 pb-16 lg:px-8 lg:pb-20">
        <div class="mx-auto max-w-7xl">
            <div class="overflow-hidden rounded-3xl border border-[#CF3021]/20 bg-white">

                <div class="flex items-center gap-4 border-b border-[#CF3021]/10 bg-[#CF3021]/[0.06] p-6 sm:p-8">
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-[#CF3021]/10 text-[#951A21]">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="M10.3 3.9 2.6 17.2A2 2 0 0 0 4.3 20h15.4a2 2 0 0 0 1.7-2.8L13.7 3.9a2 2 0 0 0-3.4 0Z"/>
                            <path d="M12 9v4M12 17h.01"/>
                        </svg>
                    </div>

                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#CF3021]">
                            Informasi Penting
                        </p>

                        <h2 class="mt-1 text-2xl font-extrabold text-[#6D1720]">
                            PERHATIAN
                        </h2>
                    </div>
                </div>

                <div class="p-6 sm:p-8">
                    <p class="leading-8 text-[#51413E]">
                        PT Equityworld Futures mengingatkan masyarakat
                        untuk selalu waspada terhadap penipuan yang
                        mengatasnamakan perusahaan melalui media apa pun.
                        Pastikan seluruh transaksi dan setoran hanya
                        dilakukan ke Rekening Terpisah (Segregated Account)
                        resmi atas nama PT Equityworld Futures, bukan
                        perseorangan.
                    </p>

                    <div class="mt-6 rounded-xl border-l-4 border-[#CF3021] bg-[#FFF9F0] p-5">
                        <p class="text-sm leading-7 text-[#6D1720]">
                            <strong>Tips keamanan:</strong>
                            verifikasi identitas pihak yang menghubungi
                            Anda dan pastikan informasi rekening melalui
                            kanal resmi perusahaan sebelum melakukan
                            penyetoran dana.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
