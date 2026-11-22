
@extends('layouts.public')

@section('title', 'Fasilitas & Layanan | PT Equityworld Futures')

@section('content')

<main class="min-h-screen bg-white">

    {{-- =====================================================
        HERO SECTION
    ====================================================== --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        {{-- Dekorasi lengkungan --}}
        <div class="pointer-events-none absolute -right-28 -top-32 h-120 w-120 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-12 -top-16 h-88 w-88 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -bottom-28 left-1/3 h-80 w-80 rounded-full bg-[#6F4D38]/25 blur-3xl"></div>
        <div class="pointer-events-none absolute right-1/4 top-1/3 h-48 w-48 rounded-full bg-[#632024]/30 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-12 sm:px-8 lg:px-10 lg:py-16">

            <div class="max-w-4xl">

                <div class="inline-flex items-center gap-3 rounded-full border border-[#D5B893]/40 bg-white/5 px-4 py-2 backdrop-blur-sm">
                    <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>
                    <span class="text-[11px] font-bold uppercase tracking-[0.24em] text-[#D5B893]">
                        Dukungan dan Kemudahan Nasabah
                    </span>
                </div>

                <h1 class="mt-5 font-['Manrope'] text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                    Fasilitas
                    <span class="text-[#D5B893]">&amp; Layanan</span>
                </h1>

                <div class="mt-5 h-px w-20 bg-[#D5B893]"></div>

                <p class="mt-4 max-w-2xl text-sm leading-7 text-white/80 sm:text-base">
                    Informasi tentang fasilitas dan layanan yang tersedia di
                    PT. Equityworld Futures untuk mendukung kebutuhan informasi,
                    keamanan, dan kenyamanan nasabah.
                </p>

                <a href="#daftar-layanan"
                   class="mt-6 inline-flex items-center gap-2.5 rounded-lg bg-[#632024] px-5 py-3 text-xs font-bold text-white shadow-lg shadow-black/10 transition duration-300 hover:-translate-y-1 hover:bg-[#6F4D38]">
                    Jelajahi Fasilitas
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9"/>
                    </svg>
                </a>

            </div>

            <div class="mt-8 flex items-center gap-3">
                <span class="h-px w-10 bg-[#D5B893]"></span>
                <span class="text-[10px] font-semibold uppercase tracking-[0.25em] text-white/55">
                    PT Equityworld Futures
                </span>
            </div>

        </div>
    </section>


    {{-- =====================================================
        INTRODUCTION
    ====================================================== --}}
    <section class="bg-linear-to-b from-white to-[#F5F1EC] px-5 py-10 sm:px-8 lg:px-10 lg:py-12">

        <div class="mx-auto grid max-w-7xl gap-6 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">

            <div>
                <div class="flex items-center gap-3">
                    <span class="h-px w-10 bg-[#D5B893]"></span>
                    <p class="text-[11px] font-extrabold uppercase tracking-[0.22em] text-[#632024]">
                        Informasi Layanan
                    </p>
                </div>

                <h2 class="mt-4 font-['Manrope'] text-2xl font-extrabold leading-tight text-[#25344F] sm:text-3xl">
                    Fasilitas untuk Mendukung Kebutuhan Nasabah
                </h2>

                <div class="mt-4 h-px w-16 bg-[#D5B893]"></div>
            </div>

            <div class="lg:border-l lg:border-[#D5B893]/70 lg:pl-6">
                <p class="text-sm leading-7 text-[#6F4D38]">
                    EWF menyediakan beragam fasilitas dan layanan yang berkaitan
                    dengan perdagangan berjangka, mulai dari dukungan tenaga
                    profesional, sistem transaksi online, informasi transaksi,
                    hingga sarana pengaduan nasabah.
                </p>

                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="rounded-lg border border-[#D5B893]/70 bg-white px-3 py-1.5 text-[11px] font-semibold text-[#25344F]">
                        Layanan Nasabah
                    </span>
                    <span class="rounded-lg border border-[#D5B893]/70 bg-white px-3 py-1.5 text-[11px] font-semibold text-[#25344F]">
                        Sistem Transaksi
                    </span>
                    <span class="rounded-lg border border-[#D5B893]/70 bg-white px-3 py-1.5 text-[11px] font-semibold text-[#25344F]">
                        Keamanan
                    </span>
                </div>
            </div>

        </div>
    </section>


    {{-- =====================================================
        FACILITIES AND SERVICES
    ====================================================== --}}
    <section id="daftar-layanan" class="scroll-mt-24 bg-white px-5 py-10 sm:px-8 lg:px-10 lg:py-12">

        <div class="mx-auto max-w-7xl">

            {{-- Section heading --}}
            <div class="mb-7 flex flex-col gap-4 md:flex-row md:items-end md:justify-between">

                <div class="max-w-2xl">
                    <div class="flex items-center gap-3">
                        <span class="h-px w-10 bg-[#D5B893]"></span>
                        <p class="text-[11px] font-extrabold uppercase tracking-[0.22em] text-[#632024]">
                            Layanan Perusahaan
                        </p>
                    </div>

                    <h2 class="mt-3 font-['Manrope'] text-2xl font-extrabold leading-tight text-[#25344F] sm:text-3xl">
                        Fasilitas dan Layanan EWF
                    </h2>
                </div>

                <p class="max-w-md text-xs leading-6 text-[#6F4D38]">
                    Kenali berbagai fasilitas yang tersedia untuk mendukung
                    informasi, proses transaksi, dan kebutuhan layanan nasabah.
                </p>

            </div>


            @php
                $services = [
                    [
                        'number' => '01',
                        'icon' => 'user-check',
                        'title' => 'Wakil Pialang Berjangka Profesional',
                        'description' => 'EWF didukung oleh tenaga Wakil Pialang Berjangka tersertifikasi yang memiliki kompetensi dan kredibilitas sesuai standar Bappebti, untuk membantu nasabah memperoleh bimbingan profesional.',
                    ],
                    [
                        'number' => '02',
                        'icon' => 'shield',
                        'title' => 'Sistem Keamanan 2FA',
                        'description' => 'Sistem online trading dilengkapi autentikasi OTP (One Time Password) sebagai lapisan perlindungan tambahan saat login.',
                    ],
                    [
                        'number' => '03',
                        'icon' => 'chart',
                        'title' => 'Online Trading & Demo Account',
                        'description' => 'Platform transaksi online dengan informasi harga, chart interaktif, dan informasi pasar. Tersedia pula Demo Account untuk berlatih sebelum melakukan perdagangan riil.',
                    ],
                    [
                        'number' => '04',
                        'icon' => 'clipboard',
                        'title' => 'Registrasi Online',
                        'description' => 'Calon nasabah dapat memulai proses pembukaan akun secara online melalui kanal resmi EWF, sesuai prosedur dan persyaratan yang berlaku.',
                    ],
                    [
                        'number' => '05',
                        'icon' => 'mail',
                        'title' => 'Laporan Transaksi Harian',
                        'description' => 'Aktivitas perdagangan nasabah dapat diinformasikan melalui statement harian yang dikirimkan melalui email sebagai sarana pemantauan transaksi.',
                    ],
                    [
                        'number' => '06',
                        'icon' => 'wallet',
                        'title' => 'Penarikan Dana (Withdrawal)',
                        'description' => 'Penarikan dana dilakukan melalui prosedur yang berlaku. Waktu pemrosesan mengikuti kelengkapan persyaratan serta ketentuan perusahaan.',
                    ],
                    [
                        'number' => '07',
                        'icon' => 'landmark',
                        'title' => 'Rekening Terpisah (Segregated Account)',
                        'description' => 'Dana nasabah ditempatkan pada Rekening Terpisah sesuai ketentuan yang berlaku, terpisah dari aset operasional perusahaan.',
                    ],
                    [
                        'number' => '08',
                        'icon' => 'arrows',
                        'title' => 'Fleksibilitas Transaksi',
                        'description' => 'Perdagangan berjangka memungkinkan pelaku pasar mengambil posisi sesuai analisis pergerakan harga, dengan tetap memperhatikan risiko dan ketentuan setiap instrumen.',
                    ],
                    [
                        'number' => '09',
                        'icon' => 'message',
                        'title' => 'Sarana Penyelesaian Perselisihan',
                        'description' => 'Pengaduan dan perselisihan nasabah ditangani melalui mekanisme yang berlaku dengan mengacu pada ketentuan regulator terkait.',
                    ],
                    [
                        'number' => '10',
                        'icon' => 'file-check',
                        'title' => 'Program SITNA',
                        'description' => 'Sistem Informasi Transaksi Nasabah (SITNA) menjadi sarana untuk memantau informasi transaksi melalui sistem yang disediakan oleh pihak terkait.',
                    ],
                ];
            @endphp


            {{-- Grid layanan --}}
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($services as $service)

                    <article class="group relative flex h-full flex-col overflow-hidden rounded-xl border border-[#D5B893]/60 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/30 hover:shadow-lg">

                        {{-- Nomor editorial --}}
                        <div class="absolute right-4 top-3 font-['Manrope'] text-4xl font-extrabold text-[#25344F]/6 transition duration-300 group-hover:text-[#632024]/10">
                            {{ $service['number'] }}
                        </div>

                        {{-- Ikon --}}
                        @if ($loop->even)
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#632024]/10 text-[#632024] transition duration-300 group-hover:bg-[#632024] group-hover:text-white">
                        @else
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#D5B893]/30 text-[#25344F] transition duration-300 group-hover:bg-[#25344F] group-hover:text-[#D5B893]">
                        @endif

                            @if ($service['icon'] === 'user-check')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M2 21v-2a7 7 0 0 1 14 0v2"/>
                                    <path d="m16 11 2 2 4-4"/>
                                </svg>

                            @elseif ($service['icon'] === 'shield')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/>
                                    <path d="m9 12 2 2 4-4"/>
                                </svg>

                            @elseif ($service['icon'] === 'chart')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M3 3v18h18"/>
                                    <path d="m7 14 4-4 4 3 5-7"/>
                                </svg>

                            @elseif ($service['icon'] === 'clipboard')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <rect x="5" y="4" width="14" height="18" rx="2"/>
                                    <path d="M9 4.5V3h6v1.5M9 12h6M9 16h6"/>
                                </svg>

                            @elseif ($service['icon'] === 'mail')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <rect x="3" y="5" width="18" height="14" rx="2"/>
                                    <path d="m3 7 9 6 9-6"/>
                                </svg>

                            @elseif ($service['icon'] === 'wallet')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <rect x="3" y="5" width="18" height="15" rx="2"/>
                                    <path d="M3 9h18M16 14h2"/>
                                    <path d="M6 5V3h12v2"/>
                                </svg>

                            @elseif ($service['icon'] === 'landmark')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="m3 9 9-6 9 6H3Z"/>
                                    <path d="M5 10v8M9 10v8M15 10v8M19 10v8M3 21h18M2 18h20"/>
                                </svg>

                            @elseif ($service['icon'] === 'arrows')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M7 7h14l-4-4M17 17H3l4 4"/>
                                    <path d="M17 3 21 7l-4 4M7 13l-4 4 4 4"/>
                                </svg>

                            @elseif ($service['icon'] === 'message')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M21 11.5a8.5 8.5 0 0 1-8.5 8.5H4l1.8-4A8.5 8.5 0 1 1 21 11.5Z"/>
                                    <path d="M8 12h8M8 9h5"/>
                                </svg>

                            @elseif ($service['icon'] === 'file-check')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/>
                                    <path d="M14 2v6h6M8 15l2.5 2.5L16 12"/>
                                </svg>
                            @endif

                        </div>

                        {{-- Isi card --}}
                        <div class="mt-4 flex flex-1 flex-col">

                            <div class="mb-2 flex items-center gap-3">
                                <span class="text-[10px] font-extrabold tracking-[0.2em] text-[#632024]">
                                    LAYANAN {{ $service['number'] }}
                                </span>
                                <span class="h-px flex-1 bg-[#D5B893]/60"></span>
                            </div>

                            <h3 class="font-['Manrope'] text-base font-extrabold leading-snug text-[#25344F]">
                                {{ $service['title'] }}
                            </h3>

                            <p class="mt-3 flex-1 text-xs leading-6 text-[#6F4D38]">
                                {{ $service['description'] }}
                            </p>

                            <div class="mt-5 h-1 w-10 rounded-full bg-[#D5B893] transition-all duration-300 group-hover:w-16 group-hover:bg-[#632024]"></div>

                        </div>
                    </article>

                @endforeach

            </div>
        </div>
    </section>


    {{-- =====================================================
        WHY CHOOSE US
    ====================================================== --}}
    <section class="relative isolate overflow-hidden bg-[#25344F] px-5 py-10 text-white sm:px-8 lg:px-10 lg:py-12">

        {{-- Dekorasi --}}
        <div class="pointer-events-none absolute -right-24 -top-28 h-80 w-80 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-10 -top-14 h-56 w-56 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-24 left-1/4 h-64 w-64 rounded-full bg-[#6F4D38]/20 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl">

            <div class="mx-auto max-w-3xl text-center">

                <div class="flex items-center justify-center gap-3">
                    <span class="h-px w-10 bg-[#D5B893]"></span>
                    <p class="text-[11px] font-extrabold uppercase tracking-[0.22em] text-[#D5B893]">
                        Keunggulan Layanan
                    </p>
                    <span class="h-px w-10 bg-[#D5B893]"></span>
                </div>

                <h2 class="mt-4 font-['Manrope'] text-2xl font-extrabold sm:text-3xl">
                    Mengapa <span class="text-[#D5B893]">Memilih Kami?</span>
                </h2>

                <p class="mt-3 text-sm leading-7 text-white/70">
                    Kenali dukungan dan fasilitas yang dirancang untuk membantu
                    nasabah memperoleh informasi serta mengakses layanan perusahaan.
                </p>

            </div>


            @php
                $advantages = [
                    [
                        'icon' => 'shield',
                        'title' => 'Aman & Terpercaya',
                        'description' => 'Perusahaan berada dalam kerangka pengawasan regulator sesuai ketentuan yang berlaku.',
                    ],
                    [
                        'icon' => 'clock',
                        'title' => 'Proses yang Terarah',
                        'description' => 'Informasi mengenai proses layanan tersedia untuk membantu nasabah memahami prosedur yang berlaku.',
                    ],
                    [
                        'icon' => 'support',
                        'title' => 'Dukungan Profesional',
                        'description' => 'Nasabah dapat menghubungi kanal layanan resmi untuk mendapatkan informasi dan bantuan.',
                    ],
                ];
            @endphp


            <div class="mt-8 grid gap-4 md:grid-cols-3">

                @foreach ($advantages as $advantage)

                    <article class="group rounded-xl border border-white/10 bg-white/6 p-5 text-center backdrop-blur-sm transition duration-300 hover:-translate-y-1 hover:border-[#D5B893]/50 hover:bg-white/10">

                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl border border-[#D5B893]/40 bg-[#D5B893]/10 text-[#D5B893] transition duration-300 group-hover:bg-[#D5B893] group-hover:text-[#25344F]">

                            @if ($advantage['icon'] === 'shield')
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/>
                                    <path d="m9 12 2 2 4-4"/>
                                </svg>

                            @elseif ($advantage['icon'] === 'clock')
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="M12 7v5l3 2"/>
                                </svg>

                            @elseif ($advantage['icon'] === 'support')
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M4 13v-2a8 8 0 0 1 16 0v2"/>
                                    <rect x="3" y="12" width="4" height="7" rx="2"/>
                                    <rect x="17" y="12" width="4" height="7" rx="2"/>
                                    <path d="M17 19a5 5 0 0 1-5 3h-1"/>
                                </svg>
                            @endif

                        </div>

                        <h3 class="mt-4 font-['Manrope'] text-base font-extrabold text-white">
                            {{ $advantage['title'] }}
                        </h3>

                        <p class="mt-2 text-xs leading-6 text-white/65">
                            {{ $advantage['description'] }}
                        </p>

                        <div class="mx-auto mt-5 h-px w-10 bg-[#D5B893] transition-all duration-300 group-hover:w-16"></div>

                    </article>

                @endforeach

            </div>

        </div>
    </section>


    {{-- =====================================================
        ANTI-FRAUD WARNING
    ====================================================== --}}
    <section class="bg-linear-to-b from-[#F5F1EC] to-white px-5 py-10 sm:px-8 lg:px-10 lg:py-12">

        <div class="mx-auto max-w-7xl">

            <div class="overflow-hidden rounded-xl border border-[#632024]/20 bg-white shadow-sm">

                <div class="grid lg:grid-cols-[150px_1fr]">

                    {{-- Panel peringatan --}}
                    <div class="relative flex min-h-36 items-center justify-center overflow-hidden bg-linear-to-br from-[#632024] to-[#25344F] p-6 text-[#D5B893]">

                        <div class="absolute -right-12 -top-12 h-44 w-44 rounded-full border border-[#D5B893]/20"></div>
                        <div class="absolute -bottom-16 -left-10 h-44 w-44 rounded-full border border-[#D5B893]/20"></div>

                        <div class="relative flex h-14 w-14 items-center justify-center rounded-xl border border-[#D5B893]/40 bg-white/5">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M10.3 3.9 2.6 17.2A2 2 0 0 0 4.3 20h15.4a2 2 0 0 0 1.7-2.8L13.7 3.9a2 2 0 0 0-3.4 0Z"/>
                                <path d="M12 9v4M12 17h.01"/>
                            </svg>
                        </div>

                    </div>


                    {{-- Isi peringatan --}}
                    <div class="p-5 sm:p-7">

                        <p class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                            Informasi Penting
                        </p>

                        <h2 class="mt-2 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                            PERHATIAN
                        </h2>

                        <div class="mt-3 h-px w-14 bg-[#D5B893]"></div>

                        <p class="mt-4 text-sm leading-7 text-[#6F4D38]">
                            PT Equityworld Futures mengingatkan masyarakat untuk selalu
                            waspada terhadap penipuan yang mengatasnamakan perusahaan
                            melalui media apa pun. Pastikan seluruh transaksi dan
                            setoran hanya dilakukan ke Rekening Terpisah
                            (Segregated Account) resmi atas nama PT Equityworld Futures,
                            bukan perseorangan.
                        </p>

                        <div class="mt-4 rounded-lg border-l-4 border-[#632024] bg-[#F5F1EC] p-4">
                            <p class="text-xs leading-6 text-[#25344F]">
                                <strong class="font-extrabold text-[#632024]">Tips keamanan:</strong>
                                verifikasi identitas pihak yang menghubungi Anda dan
                                konfirmasikan informasi rekening melalui kanal resmi
                                perusahaan sebelum melakukan transaksi atau penyetoran dana.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

@endsection
