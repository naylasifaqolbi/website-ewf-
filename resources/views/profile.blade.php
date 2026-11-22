
@extends('layouts.public')

@section('title', 'Profil Perusahaan | PT Equityworld Futures')

@section('content')

<main class="overflow-hidden bg-white text-[#25344F]">

    {{-- =========================================================
        HERO / HEADER PROFIL PERUSAHAAN
    ========================================================== --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        <div class="pointer-events-none absolute -right-24 -top-28 h-80 w-80 rounded-full bg-[#632024]/60 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 -left-20 h-72 w-72 rounded-full bg-[#D5B893]/15 blur-3xl"></div>
        <div class="pointer-events-none absolute right-0 top-0 hidden h-full w-1/2 border-l border-[#D5B893]/10 lg:block"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-12 sm:px-8 lg:px-10 lg:py-16">

            <div class="grid items-center gap-10 lg:grid-cols-[1.2fr_0.8fr]">

                <div class="max-w-3xl">

                    <div class="mb-5 inline-flex items-center gap-3 rounded-full border border-[#D5B893]/40 bg-white/5 px-4 py-2">
                        <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>

                        <span class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#D5B893]">
                            Mengenal EWF
                        </span>
                    </div>

                    <h1 class="font-['Manrope'] text-4xl font-extrabold leading-[1.12] tracking-tight sm:text-5xl lg:text-6xl">
                        PT Equityworld
                        <span class="block text-[#D5B893]">Futures</span>
                    </h1>

                    <div class="mt-5 h-1 w-20 rounded-full bg-linear-to-r from-[#D5B893] to-[#632024]"></div>

                    <p class="mt-5 max-w-2xl text-sm leading-7 text-white/80 sm:text-base">
                        Mengenal perusahaan, visi, misi, dan nilai-nilai yang menjadi
                        landasan dalam menjalankan kegiatan usaha perdagangan berjangka.
                    </p>

                    <a href="#tentang-perusahaan"
                       class="mt-6 inline-flex items-center gap-3 rounded-lg bg-[#632024] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-black/10 transition duration-300 hover:-translate-y-1 hover:bg-[#7A3035] focus:outline-none focus:ring-2 focus:ring-[#D5B893] focus:ring-offset-2 focus:ring-offset-[#25344F]">

                        Kenali Perusahaan

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M5 12h14m-6-6 6 6-6 6"/>
                        </svg>
                    </a>

                </div>


                {{-- COMPANY PROFILE CARD --}}
                <div class="relative hidden lg:block">

                    <div class="absolute -inset-3 rounded-3xl border border-[#D5B893]/20"></div>

                    <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-white/5 p-6 shadow-xl backdrop-blur-sm">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893] text-[#25344F]">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 21h18M5 21V7l7-4 7 4v14M9 10h1m4 0h1M9 14h1m4 0h1M10 21v-4h4v4"/>
                            </svg>
                        </div>

                        <p class="mt-5 text-[10px] font-bold uppercase tracking-[0.2em] text-[#D5B893]">
                            Company Profile
                        </p>

                        <h2 class="mt-2 text-xl font-extrabold leading-snug text-white">
                            Membangun Kepercayaan dan Profesionalisme
                        </h2>

                        <p class="mt-3 text-xs leading-6 text-white/65">
                            Mengenal identitas, perjalanan, dan komitmen PT Equityworld Futures
                            dalam industri perdagangan berjangka.
                        </p>

                        <div class="mt-5 grid grid-cols-2 gap-4 border-t border-white/10 pt-5">

                            <div>
                                <p class="text-2xl font-extrabold text-[#D5B893]">2005</p>
                                <p class="mt-1 text-[11px] text-white/60">Tahun mulai beroperasi</p>
                            </div>

                            <div>
                                <p class="text-2xl font-extrabold text-[#D5B893]">EWF</p>
                                <p class="mt-1 text-[11px] text-white/60">Equityworld Futures</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
        TENTANG KAMI
    ========================================================== --}}
    <section id="tentang-perusahaan" class="scroll-mt-28 bg-white px-5 py-12 sm:px-8 lg:px-10 lg:py-14">

        <div class="mx-auto grid max-w-7xl items-start gap-8 lg:grid-cols-[1.3fr_0.7fr] lg:gap-12">

            {{-- DESKRIPSI PERUSAHAAN --}}
            <div>

                <p class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                    Tentang Kami
                </p>

                <h2 class="mt-3 max-w-2xl font-['Manrope'] text-2xl font-extrabold leading-tight text-[#25344F] sm:text-3xl">
                    Mengenal PT Equityworld Futures
                </h2>

                <div class="mt-4 h-1 w-16 rounded-full bg-[#D5B893]"></div>

                <div class="mt-5 space-y-4 text-sm leading-7 text-[#617891]">

                    <p>
                        PT Equityworld Futures ("EWF") hadir sebagai mitra investasi
                        yang mengutamakan kepercayaan dan profesionalisme di industri
                        perdagangan berjangka. Dengan fokus pada kualitas layanan dan
                        edukasi berkelanjutan, EWF membantu nasabah menavigasi peluang
                        pasar secara lebih terarah dan aman.
                    </p>

                    <p>
                        Sejak mulai beroperasi pada tahun 2005, EWF terus tumbuh dan
                        memperluas jangkauan layanan hingga memiliki enam kantor
                        operasional di Jakarta, Surabaya, Semarang, dan Cirebon.
                        Sebagai perusahaan pialang berjangka resmi, EWF terdaftar dan
                        diawasi oleh Badan Pengawas Perdagangan Berjangka Komoditi
                        (BAPPEBTI), Otoritas Jasa Keuangan (OJK), dan Bank Indonesia
                        (BI), serta menjadi anggota PT Bursa Berjangka Jakarta (BBJ)
                        dan PT Kliring Berjangka Indonesia (Persero). Dengan landasan
                        regulasi yang kuat, EWF berkomitmen memberikan pengalaman
                        transaksi yang transparan, akuntabel, dan berstandar tinggi.
                    </p>

                </div>

                <a href="{{ route('legality') }}"
                   class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-[#632024] transition duration-300 hover:gap-3 hover:text-[#25344F]">

                    Lihat Informasi Legalitas

                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M5 12h14m-6-6 6 6-6 6"/>
                    </svg>
                </a>

            </div>


            {{-- IDENTITAS PERUSAHAAN --}}
            <aside class="overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white shadow-[0_10px_30px_rgba(37,52,79,0.06)]">

                <div class="relative overflow-hidden bg-[#25344F] p-5 text-white">

                    <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full bg-[#D5B893]/15"></div>

                    <div class="relative flex h-11 w-11 items-center justify-center rounded-lg bg-[#D5B893] text-[#25344F]">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 21h18M5 21V7l7-4 7 4v14M9 10h1m4 0h1M9 14h1m4 0h1M10 21v-4h4v4"/>
                        </svg>
                    </div>

                    <h3 class="relative mt-3 text-lg font-extrabold">
                        Identitas Perusahaan
                    </h3>

                    <p class="relative mt-1 text-xs text-white/65">
                        Informasi umum PT Equityworld Futures.
                    </p>

                </div>

                <dl class="divide-y divide-[#D5B893]/35 px-5">

                    <div class="py-3">
                        <dt class="text-[10px] font-semibold uppercase tracking-wider text-[#617891]">
                            Nama Perusahaan
                        </dt>
                        <dd class="mt-1 text-sm font-extrabold text-[#25344F]">
                            PT Equityworld Futures
                        </dd>
                    </div>

                    <div class="py-3">
                        <dt class="text-[10px] font-semibold uppercase tracking-wider text-[#617891]">
                            Tahun Mulai Beroperasi
                        </dt>
                        <dd class="mt-1 text-sm font-extrabold text-[#25344F]">
                            2005
                        </dd>
                    </div>

                    <div class="py-3">
                        <dt class="text-[10px] font-semibold uppercase tracking-wider text-[#617891]">
                            Bidang Usaha
                        </dt>
                        <dd class="mt-1 text-sm font-extrabold text-[#25344F]">
                            Perdagangan berjangka
                        </dd>
                    </div>

                    <div class="py-3">
                        <dt class="text-[10px] font-semibold uppercase tracking-wider text-[#617891]">
                            Kota Kantor Operasional yang Disebutkan
                        </dt>
                        <dd class="mt-1 text-sm font-extrabold leading-6 text-[#25344F]">
                            Jakarta, Surabaya, Semarang, dan Cirebon
                        </dd>

                        <p class="mt-1 text-[11px] leading-5 text-[#617891]">
                            Deskripsi perusahaan menyebutkan enam kantor operasional.
                            Silakan verifikasi daftar lengkap lokasi kantor melalui
                            sumber resmi perusahaan.
                        </p>
                    </div>

                </dl>

            </aside>

        </div>
    </section>


    {{-- =========================================================
        VISI DAN MISI
    ========================================================== --}}
    <section class="bg-[#F7F8FA] px-5 py-12 sm:px-8 lg:px-10 lg:py-14">

        <div class="mx-auto max-w-7xl">

            {{-- SECTION HEADING --}}
            <div class="mb-7">

                <p class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                    Arah dan Tujuan
                </p>

                <h2 class="mt-2 font-['Manrope'] text-2xl font-extrabold text-[#25344F] sm:text-3xl">
                    Visi &amp; Misi Perusahaan
                </h2>

                <div class="mt-4 h-1 w-16 rounded-full bg-[#D5B893]"></div>

            </div>


            <div class="grid items-stretch gap-5 lg:grid-cols-2">

                {{-- VISI --}}
                <article class="relative overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm sm:p-7">

                    <div class="pointer-events-none absolute -right-10 -top-10 h-36 w-36 rounded-full bg-[#D5B893]/15"></div>

                    <div class="relative">

                        <div class="flex items-center gap-3">

                            <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-[#25344F] text-[#D5B893]">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7Z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#632024]">
                                    Arah Perusahaan
                                </p>
                                <h3 class="mt-0.5 text-xl font-extrabold text-[#25344F]">
                                    Visi
                                </h3>
                            </div>

                        </div>

                        <p class="mt-5 text-sm leading-7 text-[#617891]">
                            Menjadi perusahaan pialang berjangka yang unggul dan
                            terpercaya, dengan standar operasional yang modern,
                            transparan, serta memberikan nilai strategis bagi
                            perkembangan industri dan perekonomian nasional.
                        </p>

                    </div>

                </article>


                {{-- MISI --}}
                <article class="relative overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm sm:p-7">

                    <div class="pointer-events-none absolute -right-10 -top-10 h-36 w-36 rounded-full bg-[#D5B893]/15"></div>

                    <div class="relative">

                        <div class="flex items-center gap-3">

                            <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-[#632024] text-[#D5B893]">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M5 4h14v16H5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m8 9 1.5 1.5L12 8m1 2h3M8 15l1.5 1.5L12 14m1 2h3"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#632024]">
                                    Langkah Strategis
                                </p>
                                <h3 class="mt-0.5 text-xl font-extrabold text-[#25344F]">
                                    Misi
                                </h3>
                            </div>

                        </div>


                        @php
                            $missions = [
                                [
                                    'title' => 'Layanan Profesional',
                                    'description' => 'Menyediakan layanan perdagangan berjangka yang profesional, aman, dan berintegritas tinggi.',
                                ],
                                [
                                    'title' => 'Kualitas Sumber Daya Manusia',
                                    'description' => 'Mengembangkan kualitas sumber daya manusia untuk menghadirkan layanan yang kompeten dan berdaya saing.',
                                ],
                                [
                                    'title' => 'Tata Kelola Perusahaan',
                                    'description' => 'Mengimplementasikan tata kelola perusahaan yang transparan dan akuntabel.',
                                ],
                                [
                                    'title' => 'Edukasi dan Literasi',
                                    'description' => 'Memperluas akses edukasi serta literasi perdagangan berjangka kepada masyarakat.',
                                ],
                                [
                                    'title' => 'Pemanfaatan Teknologi',
                                    'description' => 'Mengoptimalkan teknologi untuk mendukung operasional dan pengalaman nasabah secara efisien.',
                                ],
                            ];
                        @endphp

                        <ol class="mt-5 space-y-3">

                            @foreach ($missions as $index => $mission)

                                <li class="flex items-start gap-3">

                                    <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-[#D5B893]/25 text-[10px] font-extrabold text-[#632024]">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </span>

                                    <div>
                                        <h4 class="text-sm font-extrabold text-[#25344F]">
                                            {{ $mission['title'] }}
                                        </h4>

                                        <p class="mt-1 text-xs leading-5 text-[#617891]">
                                            {{ $mission['description'] }}
                                        </p>
                                    </div>

                                </li>

                            @endforeach

                        </ol>

                    </div>

                </article>

            </div>

        </div>
    </section>


    {{-- =========================================================
        NILAI-NILAI PERUSAHAAN
    ========================================================== --}}
    <section class="bg-white px-5 py-12 sm:px-8 lg:px-10 lg:py-14">

        <div class="mx-auto max-w-7xl">

            <div class="max-w-3xl">

                <p class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                    Prinsip dan Budaya Kerja
                </p>

                <h2 class="mt-2 font-['Manrope'] text-2xl font-extrabold text-[#25344F] sm:text-3xl">
                    Nilai-Nilai Perusahaan
                </h2>

                <p class="mt-3 text-sm leading-6 text-[#617891]">
                    Nilai-nilai yang menggambarkan prinsip kerja dan komitmen
                    perusahaan dalam menjalankan kegiatan usahanya.
                </p>

                <div class="mt-4 h-1 w-16 rounded-full bg-[#D5B893]"></div>

            </div>


            @php
                $values = [
                    [
                        'title' => 'Integritas Profesional',
                        'description' => 'Menegakkan standar etika yang tinggi serta menjaga konsistensi tindakan dan keputusan dalam setiap aktivitas perusahaan.',
                    ],
                    [
                        'title' => 'Fokus pada Nasabah',
                        'description' => 'Mengutamakan kebutuhan dan tujuan investasi nasabah melalui layanan yang responsif, akurat, dan transparan.',
                    ],
                    [
                        'title' => 'Disiplin Kepatuhan',
                        'description' => 'Menjalankan seluruh proses bisnis sesuai kerangka regulasi dengan kontrol internal yang kuat dan berkelanjutan.',
                    ],
                    [
                        'title' => 'Inovasi Berkelanjutan',
                        'description' => 'Mendorong pengembangan teknologi, produk, dan proses kerja untuk menghadirkan pengalaman transaksi yang semakin efisien dan kompetitif.',
                    ],
                ];
            @endphp

            <div class="mt-7 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

                @foreach ($values as $value)

                    <article class="group rounded-xl border border-[#D5B893]/50 bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-lg hover:shadow-[#25344F]/5">

                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#25344F] text-[#D5B893] transition duration-300 group-hover:bg-[#632024]">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 3 5 6v5c0 4.5 3 7.5 7 10 4-2.5 7-5.5 7-10V6l-7-3Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m9 12 2 2 4-4"/>
                            </svg>

                        </div>

                        <h3 class="mt-4 text-base font-extrabold leading-6 text-[#25344F]">
                            {{ $value['title'] }}
                        </h3>

                        <p class="mt-2 text-xs leading-6 text-[#617891]">
                            {{ $value['description'] }}
                        </p>

                    </article>

                @endforeach

            </div>

        </div>
    </section>


    {{-- =========================================================
        PERINGATAN PENIPUAN
    ========================================================== --}}
    <section class="bg-[#F7F8FA] px-5 py-10 sm:px-8 lg:px-10 lg:py-12">

        <div class="mx-auto max-w-7xl">

            <div class="relative overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white">

                <div class="pointer-events-none absolute -right-12 -top-20 h-56 w-56 rounded-full border border-[#D5B893]/20"></div>

                <div class="relative flex flex-col gap-4 p-5 sm:flex-row sm:items-start sm:gap-5 sm:p-6">

                    {{-- ICON --}}
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893]">

                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 3 2.8 20h18.4L12 3Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v5m0 3h.01"/>
                        </svg>

                    </div>


                    {{-- WARNING CONTENT --}}
                    
<div class="min-w-0 flex-1">

    <p class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[#632024]">
        Perhatian
    </p>

    <h2 class="mt-1 font-['Manrope'] text-lg font-extrabold text-[#25344F] sm:text-xl">
        Waspada Penipuan yang Mengatasnamakan EWF
    </h2>

    <p class="mt-2 text-sm leading-6 text-[#617891]">
        PT Equityworld Futures mengingatkan masyarakat untuk
        selalu waspada terhadap penipuan yang mengatasnamakan
        perusahaan melalui media apa pun. Pastikan seluruh
        transaksi dan setoran hanya dilakukan ke Rekening
        Terpisah (Segregated Account) resmi atas nama
        PT Equityworld Futures, bukan perseorangan.
    </p>

    {{-- VERIFIKASI DAN TOMBOL --}}
    <div class="mt-5 flex flex-col gap-3 border-t border-[#D5B893]/40 pt-4 md:flex-row md:items-center">

        {{-- INFORMASI VERIFIKASI --}}
        <div class="flex flex-1 items-start gap-3 rounded-lg border border-[#D5B893]/50 bg-[#F7F8FA] p-3">

            <svg class="mt-0.5 h-4 w-4 shrink-0 text-[#632024]"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="1.8"
                 aria-hidden="true">
                <circle cx="12" cy="12" r="9"/>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 11v5m0-8h.01"/>
            </svg>

            <p class="text-xs leading-5 text-[#25344F]">
                Verifikasi informasi rekening dan saluran komunikasi
                melalui kontak resmi perusahaan sebelum melakukan
                penyetoran dana. Jangan mentransfer dana ke rekening
                pribadi atas nama perorangan.
            </p>

        </div>

        {{-- TOMBOL HUBUNGI KAMI --}}
        <a href="{{ route('contact') }}"
           class="inline-flex shrink-0 items-center justify-center gap-2 rounded-lg bg-[#632024] px-5 py-3 text-sm font-bold text-white transition duration-300 hover:-translate-y-0.5 hover:bg-[#7A3035] focus:outline-none focus:ring-2 focus:ring-[#D5B893] focus:ring-offset-2">

            Hubungi Kami

            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M5 12h14m-6-6 6 6-6 6"/>
            </svg>

        </a>

    </div>

</div>

            </div>

        </div>
    </section>

</main>

@endsection
