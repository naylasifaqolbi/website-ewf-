@extends('layouts.public')

@section('title', 'Badan Regulasi | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-[#FFF9F0]">

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-[#951A21] text-white">
        <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full bg-[#7A1720] blur-3xl"></div>
        <div class="absolute -bottom-20 left-1/3 h-56 w-56 rounded-full bg-[#FFA368]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
            <span class="inline-flex items-center gap-2 rounded-full border border-ewf-hawkbit/30 bg-white/5 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-ewf-hawkbit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"/>
                </svg>
                Regulasi dan Pengawasan
            </span>

            <h1 class="mt-5 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Badan Regulasi
            </h1>

            <p class="mt-5 max-w-3xl leading-8 text-white/80 sm:text-lg">
                Mengenal lembaga regulasi dan sistem informasi yang berkaitan
                dengan industri perdagangan berjangka dan sektor keuangan di Indonesia.
            </p>

            <a href="#profil-regulasi"
               class="mt-8 inline-flex items-center gap-2 rounded-xl bg-ewf-hawkbit px-6 py-3 font-bold text-[#64151B] transition hover:bg-[#EFBB55]">
                Kenali Badan Regulasi
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
        </div>
    </section>


    {{-- PROFIL BADAN REGULASI --}}
    <section id="profil-regulasi" class="scroll-mt-24 bg-[#FFF9F0] px-5 py-14 lg:px-8 lg:py-20">
        <div class="mx-auto max-w-7xl">

            <div class="max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-[0.18em] text-[#951A21]">
                    Profil Badan Regulasi
                </p>

                <h2 class="mt-3 text-3xl font-extrabold leading-tight text-[#951A21] sm:text-4xl">
                    Mengenal Lembaga Pengawas dan Pendukung Industri Keuangan
                </h2>

                <p class="mt-5 leading-8 text-[#51413E]">
                    Berikut adalah badan-badan regulasi utama yang mengawasi industri
                    perdagangan berjangka dan sektor keuangan di Indonesia. Setiap
                    lembaga memiliki peran strategis dalam menjaga stabilitas,
                    transparansi, dan integritas pasar.
                </p>
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
                        'accent' => 'bg-[#FBE5D6]',
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
                        'accent' => 'bg-[#FFF0D0]',
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
                        'accent' => 'bg-[#FBE5D6]',
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
                        'accent' => 'bg-[#FFF0D0]',
                    ],
                ];
            @endphp


            <div class="mt-10 grid gap-7 md:grid-cols-2">
                @foreach ($regulators as $regulator)
                    <article class="group flex h-full flex-col overflow-hidden rounded-3xl border border-[#EAD8CB] bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#D9A49A] hover:shadow-lg">

                        {{-- BAGIAN LOGO --}}
                        <div class="relative flex h-52 items-center justify-center border-b border-[#EAD8CB] {{ $regulator['accent'] }} px-8 py-6">
                            <span class="absolute left-5 top-5 flex h-9 w-9 items-center justify-center rounded-full bg-white/80 text-xs font-extrabold text-[#951A21]">
                                {{ $regulator['number'] }}
                            </span>

                            <img
                                src="{{ $regulator['logo'] }}"
                                alt="{{ $regulator['alt'] }}"
                                loading="lazy"
                                class="max-h-32 max-w-[85%] object-contain transition duration-300 group-hover:scale-105"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                            >

                            <div class="hidden h-24 w-24 items-center justify-center rounded-2xl bg-white text-2xl font-extrabold text-[#951A21] shadow-sm">
                                {{ $regulator['short_name'] }}
                            </div>
                        </div>


                        {{-- INFORMASI LEMBAGA --}}
                        <div class="flex flex-1 flex-col p-6 sm:p-8">
                            <span class="text-xs font-bold uppercase tracking-[0.15em] text-[#951A21]">
                                {{ $regulator['short_name'] }}
                            </span>

                            <h3 class="mt-3 text-xl font-extrabold leading-7 text-[#951A21]">
                                {{ $regulator['name'] }}
                            </h3>

                            <p class="mt-4 flex-1 text-sm leading-8 text-[#51413E]">
                                {{ $regulator['description'] }}
                            </p>

                            @if ($regulator['url'])
                                <a
                                    href="{{ $regulator['url'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="mt-6 inline-flex w-fit items-center gap-2 rounded-xl bg-[#951A21] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#7A1720]"
                                >
                                    {{ $regulator['button'] }}

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9"/>
                                    </svg>
                                </a>
                            @else
                                <div class="mt-6 inline-flex w-fit items-center gap-2 rounded-xl border border-[#EAD8CB] bg-[#FFF9F0] px-5 py-3 text-sm font-semibold text-[#786662]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#951A21]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2m5-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Sistem Informasi Transaksi
                                </div>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>


            {{-- CATATAN --}}
            <div class="mt-8 rounded-2xl border border-[#EFBB55] bg-ewf-hawkbit/20 p-5 sm:p-6">
                <div class="flex items-start gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-6 w-6 shrink-0 text-[#951A21]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 4h.01M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>
                    </svg>

                    <div>
                        <h3 class="font-extrabold text-[#951A21]">
                            Catatan Informasi
                        </h3>
                        <p class="mt-2 text-sm leading-7 text-[#51413E]">
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


    {{-- PERINGATAN PENIPUAN --}}
    <section class="bg-white px-5 py-14 lg:px-8 lg:py-16">
        <div class="mx-auto max-w-7xl">
            <div class="overflow-hidden rounded-3xl border border-[#E9B5AD] bg-white shadow-sm">
                <div class="h-2 bg-ewf-red-poppy"></div>

                <div class="p-6 sm:p-9 lg:p-10">
                    <div class="flex flex-col gap-5 sm:flex-row sm:items-start">

                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-[#FCE7E3] text-ewf-red-poppy">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 4h.01M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-ewf-red-poppy">
                                Pemberitahuan Penting
                            </p>

                            <h2 class="mt-2 text-2xl font-extrabold text-[#951A21] sm:text-3xl">
                                PERHATIAN
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
                                    Verifikasi informasi rekening dan identitas pihak yang
                                    menghubungi kamu melalui saluran resmi perusahaan
                                    sebelum melakukan transaksi atau penyetoran dana.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection