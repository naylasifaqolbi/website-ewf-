@extends('layouts.public')

@section('title', 'Badan Regulasi | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-white">

    {{-- =====================================================
        HERO SECTION
    ====================================================== --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        {{-- Dekorasi lengkungan --}}
        <div class="pointer-events-none absolute -right-28 -top-32 h-12030rem] rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-12 -top-16 h-88 w-88 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -bottom-32 left-[35%] h-80 w-80 rounded-full bg-[#6F4D38]/25 blur-3xl"></div>
        <div class="pointer-events-none absolute right-1/4 top-1/3 h-52 w-52 rounded-full bg-[#632024]/30 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">

            <div class="max-w-4xl">
                <div class="inline-flex items-center gap-3 rounded-full border border-[#D5B893]/40 bg-white/5 px-5 py-2.5 backdrop-blur-sm">
                    <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-[#D5B893]">
                        Regulasi dan Pengawasan
                    </span>
                </div>

                <h1 class="mt-7 font-['Manrope'] text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                    Badan
                    <span class="text-[#D5B893]">Regulasi</span>
                </h1>

                <div class="mt-6 h-px w-24 bg-[#D5B893]"></div>

                <p class="mt-7 max-w-3xl text-base leading-8 text-white/80 sm:text-lg">
                    Mengenal lembaga regulasi dan sistem informasi yang berkaitan
                    dengan industri perdagangan berjangka dan sektor keuangan di Indonesia.
                </p>

                <a href="#profil-regulasi"
                   class="mt-9 inline-flex items-center gap-3 rounded-xl bg-[#632024] px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-black/10 transition duration-300 hover:-translate-y-1 hover:bg-[#6F4D38]">
                    Kenali Badan Regulasi
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9"/>
                    </svg>
                </a>
            </div>

            {{-- Elemen editorial hero --}}
            <div class="mt-16 flex items-center gap-4">
                <span class="h-px w-12 bg-[#D5B893]"></span>
                <span class="text-[11px] font-semibold uppercase tracking-[0.25em] text-white/55">
                    PT Equityworld Futures
                </span>
            </div>
        </div>
    </section>


    {{-- =====================================================
        PROFIL BADAN REGULASI
    ====================================================== --}}
    <section id="profil-regulasi" class="scroll-mt-24 bg-linear-to-b from-white via-white to-[#F5F1EC] px-6 py-16 lg:px-8 lg:py-24">

        <div class="mx-auto max-w-7xl">

            {{-- Heading --}}
            <div class="grid gap-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-end">

                <div>
                    <div class="flex items-center gap-3">
                        <span class="h-px w-10 bg-[#D5B893]"></span>
                        <p class="text-xs font-extrabold uppercase tracking-[0.22em] text-[#632024]">
                            Profil Badan Regulasi
                        </p>
                    </div>

                    <h2 class="mt-5 max-w-xl font-['Manrope'] text-3xl font-extrabold leading-tight text-[#25344F] sm:text-4xl">
                        Mengenal Lembaga Pengawas dan Pendukung Industri Keuangan
                    </h2>
                </div>

                <div class="lg:border-l lg:border-[#D5B893]/70 lg:pl-8">
                    <p class="text-base leading-8 text-[#6F4D38]">
                        Berikut adalah badan-badan regulasi utama yang mengawasi industri
                        perdagangan berjangka dan sektor keuangan di Indonesia. Setiap
                        lembaga memiliki peran strategis dalam menjaga stabilitas,
                        transparansi, dan integritas pasar.
                    </p>
                </div>
            </div>


            {{-- DATA LEMBAGA --}}
            @php
                $regulators = [
                    [
                        'number' => '01',
                        'name' => 'BADAN PENGAWAS PERDAGANGAN BERJANGKA KOMODITI (BAPPEBTI)',
                        'short_name' => 'BAPPEBTI',
                        'logo' => 'https://www.equityworld-futures.com/_next/image?url=%2Fassets%2Flogo-kemendag.png&w=3840&q=75',
                        'alt' => 'Logo Kementerian Perdagangan yang digunakan pada informasi BAPPEBTI',
                        'description' => 'BAPPEBTI adalah lembaga pemerintah di bawah Kementerian Perdagangan yang diberi mandat untuk memastikan industri perdagangan berjangka berjalan secara tertib, transparan, dan aman. Melalui regulasi serta pengawasan yang ketat, BAPPEBTI menjaga kepercayaan publik dan integritas pasar, sehingga setiap kegiatan transaksi berjangka di Indonesia berlangsung sesuai aturan dan standar yang berlaku.',
                        'url' => 'https://bappebti.go.id/',
                        'button' => 'Kunjungi situs BAPPEBTI',
                        'accent' => 'bg-[#F5F1EC]',
                    ],
                    [
                        'number' => '02',
                        'name' => 'OTORITAS JASA KEUANGAN (OJK)',
                        'short_name' => 'OJK',
                        'logo' => 'https://www.equityworld-futures.com/_next/image?url=%2Fassets%2FOJK_Logo.png&w=3840&q=75',
                        'alt' => 'Logo Otoritas Jasa Keuangan',
                        'description' => 'Otoritas Jasa Keuangan merupakan lembaga independen negara yang bertugas menyelenggarakan sistem pengaturan dan pengawasan terintegrasi terhadap seluruh kegiatan di sektor jasa keuangan. OJK berfungsi memastikan industri keuangan berjalan secara transparan, adil, dan stabil, sehingga mampu melindungi kepentingan konsumen serta mendukung pertumbuhan ekonomi nasional.',
                        'url' => 'https://www.ojk.go.id/',
                        'button' => 'Kunjungi situs OJK',
                        'accent' => 'bg-[#F3EDE7]',
                    ],
                    [
                        'number' => '03',
                        'name' => 'BANK INDONESIA (BI)',
                        'short_name' => 'BI',
                        'logo' => 'https://www.equityworld-futures.com/_next/image?url=%2Fassets%2FBI_Logo.png&w=3840&q=75',
                        'alt' => 'Logo Bank Indonesia',
                        'description' => 'Bank Indonesia adalah bank sentral Republik Indonesia yang memegang mandat utama menjaga kestabilan nilai rupiah. Melalui kebijakan moneter, sistem pembayaran yang andal, dan pengawasan makroprudensial, BI berperan strategis dalam menjaga stabilitas ekonomi dan mendukung sistem keuangan nasional yang kuat.',
                        'url' => 'https://www.bi.go.id/',
                        'button' => 'Kunjungi situs Bank Indonesia',
                        'accent' => 'bg-[#F5F1EC]',
                    ],
                    [
                        'number' => '04',
                        'name' => 'SISTEM INFORMASI TRANSAKSI NASIONAL (SITNA)',
                        'short_name' => 'SITNA',
                        'logo' => 'https://www.equityworld-futures.com/_next/image?url=%2Fassets%2Fsitna-logo.png&w=3840&q=75',
                        'alt' => 'Logo Sistem Informasi Transaksi Nasional',
                        'description' => 'Sistem Informasi Transaksi Nasional (SITNA) adalah sistem elektronik yang dibentuk oleh BAPPEBTI untuk mencatat dan melaporkan seluruh transaksi perdagangan berjangka komoditi yang dilakukan oleh Bursa Berjangka, Kliring Berjangka, dan Pialang Berjangka di Indonesia. SITNA berfungsi untuk meningkatkan transparansi, efisiensi, dan pengawasan di pasar berjangka, serta melindungi kepentingan masyarakat investor.',
                        'url' => null,
                        'button' => null,
                        'accent' => 'bg-[#F3EDE7]',
                    ],
                ];
            @endphp


            {{-- GRID REGULATOR --}}
            <div class="mt-14 grid gap-7 md:grid-cols-2">

                @foreach ($regulators as $regulator)

                    <article class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white shadow-[0_8px_30px_rgba(37,52,79,0.05)] transition duration-300 hover:-translate-y-1 hover:border-[#632024]/30 hover:shadow-[0_18px_45px_rgba(37,52,79,0.12)]">

                        {{-- Garis aksen --}}
                        <div class="h-1.5 bg-linear-to-r from-[#25344F] via-[#632024] to-[#D5B893]"></div>

                        {{-- Logo --}}
                        <div class="relative flex h-52 items-center justify-center overflow-hidden border-b border-[#D5B893]/40 {{ $regulator['accent'] }} px-8 py-7">

                            <span class="absolute right-5 top-3 font-['Manrope'] text-6xl font-extrabold text-[#25344F]/6">
                                {{ $regulator['number'] }}
                            </span>

                            <span class="absolute bottom-0 left-0 h-px w-1/3 bg-[#D5B893]"></span>

                            <img
                                src="{{ $regulator['logo'] }}"
                                alt="{{ $regulator['alt'] }}"
                                loading="lazy"
                                class="relative z-10 max-h-32 max-w-[85%] object-contain transition duration-500 group-hover:scale-105"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                            >

                            <div class="hidden h-24 w-24 items-center justify-center rounded-2xl border border-[#D5B893]/60 bg-white font-['Manrope'] text-xl font-extrabold text-[#25344F] shadow-sm">
                                {{ $regulator['short_name'] }}
                            </div>
                        </div>


                        {{-- Informasi --}}
                        <div class="flex flex-1 flex-col p-7 sm:p-8">

                            <div class="flex items-center gap-3">
                                <span class="text-xs font-extrabold tracking-[0.2em] text-[#632024]">
                                    {{ $regulator['number'] }}
                                </span>
                                <span class="h-px flex-1 bg-[#D5B893]/70"></span>
                                <span class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#617891]">
                                    {{ $regulator['short_name'] }}
                                </span>
                            </div>

                            <h3 class="mt-5 font-['Manrope'] text-xl font-extrabold leading-7 text-[#25344F]">
                                {{ $regulator['name'] }}
                            </h3>

                            <p class="mt-4 flex-1 text-sm leading-8 text-[#6F4D38]">
                                {{ $regulator['description'] }}
                            </p>

                            @if ($regulator['url'])
                                <a
                                    href="{{ $regulator['url'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="mt-7 inline-flex w-fit items-center gap-3 rounded-lg bg-[#632024] px-5 py-3 text-sm font-bold text-white transition duration-300 hover:bg-[#25344F]"
                                >
                                    {{ $regulator['button'] }}

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9"/>
                                    </svg>
                                </a>
                            @else
                                <div class="mt-7 inline-flex w-fit items-center gap-3 rounded-lg border border-[#D5B893]/70 bg-[#F5F1EC] px-5 py-3 text-sm font-semibold text-[#617891]">
                                    <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>
                                    Sistem Informasi Transaksi
                                </div>
                            @endif

                        </div>
                    </article>

                @endforeach

            </div>


            {{-- CATATAN INFORMASI --}}
            <div class="relative mt-10 overflow-hidden rounded-2xl border border-[#D5B893]/70 bg-linear-to-r from-white to-[#F5F1EC] p-6 sm:p-8">

                <div class="absolute right-0 top-0 h-full w-1.5 bg-[#D5B893]"></div>

                <div class="flex items-start gap-5">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 4h.01M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>
                        </svg>
                    </div>

                    <div class="pr-4">
                        <h3 class="font-['Manrope'] text-lg font-extrabold text-[#25344F]">
                            Catatan Informasi
                        </h3>

                        <p class="mt-2 text-sm leading-8 text-[#6F4D38]">
                            Setiap lembaga memiliki mandat dan ruang lingkup kewenangan
                            yang berbeda. Informasi di halaman ini merupakan pengenalan
                            umum; keterkaitan pengawasan dengan produk atau kegiatan
                            tertentu perlu diperiksa melalui ketentuan dan sumber resmi
                            yang berlaku.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    {{-- =====================================================
        PERINGATAN PENIPUAN
    ====================================================== --}}
    <section class="bg-white px-6 py-16 lg:px-8 lg:py-20">

        <div class="mx-auto max-w-7xl">

            <div class="relative overflow-hidden rounded-2xl border border-[#632024]/20 bg-white shadow-[0_12px_40px_rgba(37,52,79,0.08)]">

                <div class="h-1.5 bg-linear-to-r from-[#632024] via-[#6F4D38] to-[#D5B893]"></div>

                <div class="grid lg:grid-cols-[0.35fr_1.65fr]">

                    <div class="relative flex min-h-48 items-center justify-center overflow-hidden bg-[#25344F] p-8 text-[#D5B893]">

                        <div class="absolute -right-12 -top-12 h-44 w-44 rounded-full border border-[#D5B893]/20"></div>
                        <div class="absolute -bottom-16 -left-10 h-44 w-44 rounded-full border border-[#D5B893]/20"></div>

                        <div class="relative flex h-20 w-20 items-center justify-center rounded-2xl border border-[#D5B893]/40 bg-white/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 4h.01M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="p-7 sm:p-9 lg:p-11">

                        <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                            Pemberitahuan Penting
                        </p>

                        <h2 class="mt-3 font-['Manrope'] text-3xl font-extrabold text-[#25344F]">
                            PERHATIAN
                        </h2>

                        <div class="mt-4 h-px w-16 bg-[#D5B893]"></div>

                        <p class="mt-6 leading-8 text-[#6F4D38]">
                            PT Equityworld Futures mengingatkan masyarakat untuk selalu
                            waspada terhadap penipuan yang mengatasnamakan perusahaan
                            melalui media apa pun. Pastikan seluruh transaksi dan setoran
                            hanya dilakukan ke Rekening Terpisah (Segregated Account)
                            resmi atas nama PT Equityworld Futures, bukan perseorangan.
                        </p>

                        <div class="mt-6 rounded-xl border-l-4 border-[#632024] bg-[#F5F1EC] p-5">
                            <p class="text-sm leading-7 text-[#25344F]">
                                Verifikasi informasi rekening dan identitas pihak yang
                                menghubungi kamu melalui saluran resmi perusahaan
                                sebelum melakukan transaksi atau penyetoran dana.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
@endsection