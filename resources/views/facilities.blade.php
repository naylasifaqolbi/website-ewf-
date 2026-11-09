
@extends('layouts.public')

@section('title', 'Fasilitas & Layanan | PT Equityworld Futures')

@section('content')

{{-- =========================================================
    HERO SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-[#951A21] text-white">
    <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full bg-[#CF3021]/40 blur-3xl"></div>
    <div class="absolute -bottom-24 left-1/3 h-64 w-64 rounded-full bg-[#FFA368]/20 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 py-20 lg:py-24">
        <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#FFD66E]">
            Dukungan dan Kemudahan Nasabah
        </p>

        <h1 class="mt-4 max-w-3xl text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
            Fasilitas &amp; Layanan
        </h1>

        <p class="mt-6 max-w-2xl text-base leading-8 text-white/85 sm:text-lg">
            Informasi tentang fasilitas dan layanan yang tersedia di
            PT. Equityworld Futures untuk mendukung kebutuhan informasi,
            keamanan, dan kenyamanan nasabah.
        </p>

        <a href="#daftar-layanan"
           class="mt-8 inline-flex items-center gap-2 rounded-xl bg-[#FFD66E] px-6 py-3.5 font-bold text-[#6D1720] transition hover:bg-[#EFBB55]">
            Jelajahi Fasilitas
            <span aria-hidden="true">&darr;</span>
        </a>
    </div>
</section>


{{-- =========================================================
    INTRODUCTION
========================================================= --}}
<section class="bg-[#FFF9F0] px-6 py-14 lg:py-16">
    <div class="mx-auto max-w-7xl">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-bold uppercase tracking-[0.18em] text-[#951A21]">
                Informasi Layanan
            </p>

            <h2 class="mt-3 text-3xl font-extrabold leading-tight text-[#6D1720] sm:text-4xl">
                Fasilitas untuk Mendukung Kebutuhan Nasabah
            </h2>

            <p class="mt-5 leading-8 text-[#51413E]">
                EWF menyediakan beragam fasilitas dan layanan yang berkaitan
                dengan perdagangan berjangka, mulai dari dukungan tenaga
                profesional, sistem transaksi online, informasi transaksi,
                hingga sarana pengaduan nasabah.
            </p>
        </div>
    </div>
</section>


{{-- =========================================================
    FACILITIES AND SERVICES
========================================================= --}}
<section id="daftar-layanan" class="scroll-mt-24 bg-[#FFF9F0] px-6 pb-20">
    <div class="mx-auto max-w-7xl">

        @php
            $services = [
                [
                    'number' => '01',
                    'icon' => 'user-check',
                    'title' => 'Wakil Pialang Berjangka Profesional',
                    'description' => 'EWF didukung oleh tenaga Wakil Pialang Berjangka tersertifikasi yang memiliki kompetensi dan kredibilitas sesuai standar Bappebti, untuk membantu nasabah memperoleh bimbingan profesional.',
                    'color' => '#FFA368',
                ],
                [
                    'number' => '02',
                    'icon' => 'shield',
                    'title' => 'Sistem Keamanan 2FA',
                    'description' => 'Sistem online trading dilengkapi autentikasi OTP (One Time Password) sebagai lapisan perlindungan tambahan saat login.',
                    'color' => '#EFBB55',
                ],
                [
                    'number' => '03',
                    'icon' => 'chart',
                    'title' => 'Online Trading & Demo Account',
                    'description' => 'Platform transaksi online dengan informasi harga, chart interaktif, dan informasi pasar. Tersedia pula Demo Account untuk berlatih sebelum melakukan perdagangan riil.',
                    'color' => '#FFA368',
                ],
                [
                    'number' => '04',
                    'icon' => 'clipboard',
                    'title' => 'Registrasi Online',
                    'description' => 'Calon nasabah dapat memulai proses pembukaan akun secara online melalui kanal resmi EWF, sesuai prosedur dan persyaratan yang berlaku.',
                    'color' => '#EFBB55',
                ],
                [
                    'number' => '05',
                    'icon' => 'mail',
                    'title' => 'Laporan Transaksi Harian',
                    'description' => 'Aktivitas perdagangan nasabah dapat diinformasikan melalui statement harian yang dikirimkan melalui email sebagai sarana pemantauan transaksi.',
                    'color' => '#FFA368',
                ],
                [
                    'number' => '06',
                    'icon' => 'wallet',
                    'title' => 'Penarikan Dana (Withdrawal)',
                    'description' => 'Penarikan dana dilakukan melalui prosedur yang berlaku. Waktu pemrosesan mengikuti kelengkapan persyaratan serta ketentuan perusahaan.',
                    'color' => '#EFBB55',
                ],
                [
                    'number' => '07',
                    'icon' => 'landmark',
                    'title' => 'Rekening Terpisah (Segregated Account)',
                    'description' => 'Dana nasabah ditempatkan pada Rekening Terpisah sesuai ketentuan yang berlaku, terpisah dari aset operasional perusahaan.',
                    'color' => '#FFA368',
                ],
                [
                    'number' => '08',
                    'icon' => 'arrows',
                    'title' => 'Fleksibilitas Transaksi',
                    'description' => 'Perdagangan berjangka memungkinkan pelaku pasar mengambil posisi sesuai analisis pergerakan harga, dengan tetap memperhatikan risiko dan ketentuan setiap instrumen.',
                    'color' => '#EFBB55',
                ],
                [
                    'number' => '09',
                    'icon' => 'message',
                    'title' => 'Sarana Penyelesaian Perselisihan',
                    'description' => 'Pengaduan dan perselisihan nasabah ditangani melalui mekanisme yang berlaku dengan mengacu pada ketentuan regulator terkait.',
                    'color' => '#FFA368',
                ],
                [
                    'number' => '10',
                    'icon' => 'file-check',
                    'title' => 'Program SITNA',
                    'description' => 'Sistem Informasi Transaksi Nasabah (SITNA) menjadi sarana untuk memantau informasi transaksi melalui sistem yang disediakan oleh pihak terkait.',
                    'color' => '#EFBB55',
                ],
            ];
        @endphp

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $service)
                <article class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#951A21]/10 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-xl">

                    <div class="absolute right-5 top-5 text-4xl font-black text-[#951A21]/[0.07]">
                        {{ $service['number'] }}
                    </div>

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl"
                         style="background-color: {{ $service['color'] }}30; color: #951A21;">

                        @if ($service['icon'] === 'user-check')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M2 21v-2a7 7 0 0 1 14 0v2"/>
                                <path d="m16 11 2 2 4-4"/>
                            </svg>
                        @elseif ($service['icon'] === 'shield')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/>
                                <path d="m9 12 2 2 4-4"/>
                            </svg>
                        @elseif ($service['icon'] === 'chart')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M3 3v18h18"/>
                                <path d="m7 14 4-4 4 3 5-7"/>
                            </svg>
                        @elseif ($service['icon'] === 'clipboard')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <rect x="5" y="4" width="14" height="18" rx="2"/>
                                <path d="M9 4.5V3h6v1.5M9 12h6M9 16h6"/>
                            </svg>
                        @elseif ($service['icon'] === 'mail')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <rect x="3" y="5" width="18" height="14" rx="2"/>
                                <path d="m3 7 9 6 9-6"/>
                            </svg>
                        @elseif ($service['icon'] === 'wallet')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <rect x="3" y="5" width="18" height="15" rx="2"/>
                                <path d="M3 9h18M16 14h2"/>
                                <path d="M6 5V3h12v2"/>
                            </svg>
                        @elseif ($service['icon'] === 'landmark')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="m3 9 9-6 9 6H3Z"/>
                                <path d="M5 10v8M9 10v8M15 10v8M19 10v8M3 21h18M2 18h20"/>
                            </svg>
                        @elseif ($service['icon'] === 'arrows')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M7 7h14l-4-4M17 17H3l4 4"/>
                                <path d="M17 3 21 7l-4 4M7 13l-4 4 4 4"/>
                            </svg>
                        @elseif ($service['icon'] === 'message')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M21 11.5a8.5 8.5 0 0 1-8.5 8.5H4l1.8-4A8.5 8.5 0 1 1 21 11.5Z"/>
                                <path d="M8 12h8M8 9h5"/>
                            </svg>
                        @elseif ($service['icon'] === 'file-check')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/>
                                <path d="M14 2v6h6M8 15l2.5 2.5L16 12"/>
                            </svg>
                        @endif
                    </div>

                    <h3 class="mt-6 text-xl font-extrabold leading-snug text-[#6D1720]">
                        {{ $service['title'] }}
                    </h3>

                    <p class="mt-3 flex-1 text-sm leading-7 text-[#51413E]">
                        {{ $service['description'] }}
                    </p>

                    <div class="mt-6 h-1 w-12 rounded-full bg-[#FFA368] transition-all duration-300 group-hover:w-20"></div>
                </article>
            @endforeach
        </div>
    </div>
</section>


{{-- =========================================================
    WHY CHOOSE US
========================================================= --}}
<section class="bg-white px-6 py-16 lg:py-20">
    <div class="mx-auto max-w-7xl">

        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-bold uppercase tracking-[0.18em] text-[#951A21]">
                Keunggulan Layanan
            </p>

            <h2 class="mt-3 text-3xl font-extrabold text-[#6D1720] sm:text-4xl">
                Mengapa Memilih Kami?
            </h2>

            <p class="mt-4 leading-7 text-[#51413E]">
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
                    'color' => '#FFA368',
                ],
                [
                    'icon' => 'clock',
                    'title' => 'Proses yang Terarah',
                    'description' => 'Informasi mengenai proses layanan tersedia untuk membantu nasabah memahami prosedur yang berlaku.',
                    'color' => '#EFBB55',
                ],
                [
                    'icon' => 'support',
                    'title' => 'Dukungan Profesional',
                    'description' => 'Nasabah dapat menghubungi kanal layanan resmi untuk mendapatkan informasi dan bantuan.',
                    'color' => '#FFD66E',
                ],
            ];
        @endphp

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            @foreach ($advantages as $advantage)
                <article class="rounded-2xl border border-[#951A21]/10 bg-[#FFF9F0] p-8 text-center transition hover:-translate-y-1 hover:shadow-lg">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl"
                         style="background-color: {{ $advantage['color'] }}50; color: #951A21;">

                        @if ($advantage['icon'] === 'shield')
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/>
                                <path d="m9 12 2 2 4-4"/>
                            </svg>
                        @elseif ($advantage['icon'] === 'clock')
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <circle cx="12" cy="12" r="9"/>
                                <path d="M12 7v5l3 2"/>
                            </svg>
                        @elseif ($advantage['icon'] === 'support')
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M4 13v-2a8 8 0 0 1 16 0v2"/>
                                <rect x="3" y="12" width="4" height="7" rx="2"/>
                                <rect x="17" y="12" width="4" height="7" rx="2"/>
                                <path d="M17 19a5 5 0 0 1-5 3h-1"/>
                            </svg>
                        @endif
                    </div>

                    <h3 class="mt-5 text-xl font-extrabold text-[#6D1720]">
                        {{ $advantage['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-[#51413E]">
                        {{ $advantage['description'] }}
                    </p>
                </article>
            @endforeach
        </div>
    </div>
</section>


{{-- =========================================================
    ANTI-FRAUD WARNING
========================================================= --}}
<section class="bg-[#FFF9F0] px-6 py-16">
    <div class="mx-auto max-w-7xl">
        <div class="overflow-hidden rounded-3xl border border-[#CF3021]/20 bg-white shadow-sm">

            <div class="flex flex-col gap-5 border-b border-[#CF3021]/10 bg-[#CF3021]/[0.06] p-7 sm:flex-row sm:items-center sm:p-9">

                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-[#CF3021]/10 text-[#951A21]">
                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path d="M10.3 3.9 2.6 17.2A2 2 0 0 0 4.3 20h15.4a2 2 0 0 0 1.7-2.8L13.7 3.9a2 2 0 0 0-3.4 0Z"/>
                        <path d="M12 9v4M12 17h.01"/>
                    </svg>
                </div>

                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-[#CF3021]">
                        Informasi Penting
                    </p>

                    <h2 class="mt-1 text-2xl font-extrabold text-[#6D1720] sm:text-3xl">
                        PERHATIAN
                    </h2>
                </div>
            </div>

            <div class="p-7 sm:p-9">
                <p class="leading-8 text-[#51413E]">
                    PT Equityworld Futures mengingatkan masyarakat untuk selalu
                    waspada terhadap penipuan yang mengatasnamakan perusahaan
                    melalui media apa pun. Pastikan seluruh transaksi dan
                    setoran hanya dilakukan ke Rekening Terpisah
                    (Segregated Account) resmi atas nama PT Equityworld Futures,
                    bukan perseorangan.
                </p>

                <div class="mt-6 rounded-xl border-l-4 border-[#CF3021] bg-[#FFF9F0] p-5">
                    <p class="text-sm leading-7 text-[#6D1720]">
                        <strong>Tips keamanan:</strong> verifikasi identitas
                        pihak yang menghubungi Anda dan konfirmasikan informasi
                        rekening melalui kanal resmi perusahaan sebelum
                        melakukan transaksi atau penyetoran dana.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
