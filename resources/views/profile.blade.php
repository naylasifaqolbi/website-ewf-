@extends('layouts.public')

@section('title', 'Profil Perusahaan | PT Equityworld Futures')

@section('content')

<main class="overflow-hidden bg-white text-[#25344F]">

    {{-- =========================================================
        HERO / HEADER PROFIL PERUSAHAAN
    ========================================================== --}}
    <section class="relative isolate overflow-hidden bg-[#25344F] text-white">

        <div class="pointer-events-none absolute -right-24 -top-28 h-96 w-96 rounded-full bg-[#632024]/60 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 -left-20 h-80 w-80 rounded-full bg-[#D5B893]/15 blur-3xl"></div>
        <div class="pointer-events-none absolute right-0 top-0 hidden h-full w-1/2 border-l border-[#D5B893]/10 lg:block"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-28">

            <div class="grid items-center gap-14 lg:grid-cols-[1.2fr_0.8fr]">

                <div class="max-w-3xl">

                    <div class="mb-6 inline-flex items-center gap-3 rounded-full border border-[#D5B893]/40 bg-white/5 px-4 py-2.5">
                        <span class="h-2.5 w-2.5 rounded-full bg-[#D5B893]"></span>
                        <span class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#D5B893]">
                            Mengenal EWF
                        </span>
                    </div>

                    <h1 class="text-4xl font-extrabold leading-[1.12] tracking-tight sm:text-5xl lg:text-6xl">
                        PT Equityworld
                        <span class="block text-[#D5B893]">Futures</span>
                    </h1>

                    <div class="mt-7 h-1 w-24 rounded-full bg-linear-to-r from-[#D5B893] to-[#632024]"></div>

                    <p class="mt-7 max-w-2xl text-base leading-8 text-white/80 sm:text-lg">
                        Mengenal perusahaan, visi, misi, dan nilai-nilai yang menjadi
                        landasan dalam menjalankan kegiatan usaha perdagangan berjangka.
                    </p>

                    <a href="#tentang-perusahaan"
                       class="mt-9 inline-flex items-center gap-3 rounded-xl bg-[#632024] px-7 py-3.5 font-bold text-white shadow-lg shadow-black/10 transition duration-300 hover:-translate-y-1 hover:bg-[#7A3035] focus:outline-none focus:ring-2 focus:ring-[#D5B893] focus:ring-offset-2 focus:ring-offset-[#25344F]">

                        Kenali Perusahaan

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M5 12h14m-6-6 6 6-6 6"/>
                        </svg>
                    </a>

                </div>

                <div class="relative hidden lg:block">

                    <div class="absolute -inset-5 rounded-4xl border border-[#D5B893]/20"></div>

                    <div class="relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/5 p-8 shadow-2xl backdrop-blur-sm">

                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-[#D5B893] text-[#25344F]">
                            <svg class="h-9 w-9" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 21h18M5 21V7l7-4 7 4v14M9 10h1m4 0h1M9 14h1m4 0h1M10 21v-4h4v4"/>
                            </svg>
                        </div>

                        <p class="mt-8 text-xs font-bold uppercase tracking-[0.2em] text-[#D5B893]">
                            Company Profile
                        </p>

                        <h2 class="mt-3 text-2xl font-extrabold leading-snug text-white">
                            Membangun Kepercayaan dan Profesionalisme
                        </h2>

                        <p class="mt-4 text-sm leading-7 text-white/65">
                            Mengenal identitas, perjalanan, dan komitmen PT Equityworld Futures
                            dalam industri perdagangan berjangka.
                        </p>

                        <div class="mt-8 grid grid-cols-2 gap-4 border-t border-white/10 pt-6">

                            <div>
                                <p class="text-3xl font-extrabold text-[#D5B893]">2005</p>
                                <p class="mt-1 text-xs text-white/60">Tahun mulai beroperasi</p>
                            </div>

                            <div>
                                <p class="text-3xl font-extrabold text-[#D5B893]">EWF</p>
                                <p class="mt-1 text-xs text-white/60">Equityworld Futures</p>
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
    <section id="tentang-perusahaan" class="scroll-mt-28 bg-white px-5 py-20 sm:px-8 lg:px-10 lg:py-24">

        <div class="mx-auto grid max-w-7xl items-start gap-12 lg:grid-cols-[1.25fr_0.75fr] lg:gap-16">

            <div>

                <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                    Tentang Kami
                </p>

                <h2 class="mt-4 max-w-2xl text-3xl font-extrabold leading-tight text-[#25344F] sm:text-4xl">
                    Mengenal PT Equityworld Futures
                </h2>

                <div class="mt-5 h-1 w-20 rounded-full bg-[#D5B893]"></div>

                <div class="mt-7 space-y-5 text-base leading-8 text-[#617891]">

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
                   class="mt-8 inline-flex items-center gap-3 font-bold text-[#632024] transition duration-300 hover:gap-4 hover:text-[#25344F]">

                    Lihat Informasi Legalitas

                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M5 12h14m-6-6 6 6-6 6"/>
                    </svg>
                </a>

            </div>


            {{-- IDENTITAS PERUSAHAAN --}}
            <aside class="relative overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white shadow-xl shadow-[#25344F]/5">

                <div class="relative overflow-hidden bg-[#25344F] p-7 text-white sm:p-8">

                    <div class="pointer-events-none absolute -right-10 -top-10 h-36 w-36 rounded-full bg-[#D5B893]/15"></div>

                    <div class="relative flex h-14 w-14 items-center justify-center rounded-xl bg-[#D5B893] text-[#25344F]">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 21h18M5 21V7l7-4 7 4v14M9 10h1m4 0h1M9 14h1m4 0h1M10 21v-4h4v4"/>
                        </svg>
                    </div>

                    <h3 class="relative mt-5 text-2xl font-extrabold">
                        Identitas Perusahaan
                    </h3>

                    <p class="relative mt-2 text-sm leading-6 text-white/65">
                        Informasi umum PT Equityworld Futures.
                    </p>

                </div>

                <dl class="divide-y divide-[#D5B893]/40 px-7 sm:px-8">

                    <div class="py-5">
                        <dt class="text-xs font-semibold uppercase tracking-wider text-[#617891]">
                            Nama perusahaan
                        </dt>
                        <dd class="mt-2 font-extrabold text-[#25344F]">
                            PT Equityworld Futures
                        </dd>
                    </div>

                    <div class="py-5">
                        <dt class="text-xs font-semibold uppercase tracking-wider text-[#617891]">
                            Tahun mulai beroperasi
                        </dt>
                        <dd class="mt-2 font-extrabold text-[#25344F]">
                            2005
                        </dd>
                    </div>

                    <div class="py-5">
                        <dt class="text-xs font-semibold uppercase tracking-wider text-[#617891]">
                            Bidang usaha
                        </dt>
                        <dd class="mt-2 font-extrabold text-[#25344F]">
                            Perdagangan berjangka
                        </dd>
                    </div>

                    <div class="py-5">
                        <dt class="text-xs font-semibold uppercase tracking-wider text-[#617891]">
                            Kota kantor operasional yang disebutkan
                        </dt>
                        <dd class="mt-2 font-extrabold leading-7 text-[#25344F]">
                            Jakarta, Surabaya, Semarang, dan Cirebon
                        </dd>

                        <p class="mt-2 text-xs leading-6 text-[#617891]">
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
        VISI
    ========================================================== --}}
    <section class="bg-[#F7F8FA] px-5 py-20 sm:px-8 lg:px-10">

        <div class="mx-auto max-w-5xl">

            <article class="relative overflow-hidden rounded-3xl border border-[#D5B893]/50 bg-white p-8 shadow-sm sm:p-10 lg:p-12">

                <div class="pointer-events-none absolute -right-10 -top-10 h-48 w-48 rounded-full bg-[#D5B893]/20"></div>

                <div class="relative">

                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893] shadow-sm">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7Z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>

                    <p class="mt-6 text-xs font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                        Arah dan Tujuan
                    </p>

                    <h2 class="mt-3 text-3xl font-extrabold text-[#25344F] sm:text-4xl">
                        Visi
                    </h2>

                    <p class="mt-5 max-w-4xl text-lg leading-9 text-[#617891]">
                        Menjadi perusahaan pialang berjangka yang unggul dan
                        terpercaya, dengan standar operasional yang modern,
                        transparan, serta memberikan nilai strategis bagi
                        perkembangan industri dan perekonomian nasional.
                    </p>

                </div>

            </article>

        </div>
    </section>


    {{-- =========================================================
        MISI
    ========================================================== --}}
    <section class="bg-white px-5 py-20 sm:px-8 lg:px-10">

        <div class="mx-auto max-w-7xl">

            <div class="mx-auto max-w-3xl text-center">

                <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                    Langkah Strategis
                </p>

                <h2 class="mt-3 text-3xl font-extrabold text-[#25344F] sm:text-4xl">
                    Misi Perusahaan
                </h2>

                <p class="mt-4 leading-7 text-[#617891]">
                    Komitmen yang menjadi pedoman dalam memberikan layanan dan
                    mengembangkan kegiatan usaha.
                </p>

                <div class="mx-auto mt-6 h-1 w-16 rounded-full bg-[#D5B893]"></div>

            </div>

            @php
                $missions = [
                    [
                        'number' => '01',
                        'title' => 'Layanan Profesional',
                        'description' => 'Menyediakan layanan perdagangan berjangka yang profesional, aman, dan berintegritas tinggi.',
                    ],
                    [
                        'number' => '02',
                        'title' => 'Kualitas Sumber Daya Manusia',
                        'description' => 'Mengembangkan kualitas sumber daya manusia untuk menghadirkan layanan yang kompeten dan berdaya saing.',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Tata Kelola Perusahaan',
                        'description' => 'Mengimplementasikan tata kelola perusahaan yang transparan dan akuntabel.',
                    ],
                    [
                        'number' => '04',
                        'title' => 'Edukasi dan Literasi',
                        'description' => 'Memperluas akses edukasi serta literasi perdagangan berjangka kepada masyarakat.',
                    ],
                    [
                        'number' => '05',
                        'title' => 'Pemanfaatan Teknologi',
                        'description' => 'Mengoptimalkan teknologi untuk mendukung operasional dan pengalaman nasabah secara efisien.',
                    ],
                ];
            @endphp

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($missions as $mission)

                    <article class="group relative overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl hover:shadow-[#25344F]/10">

                        <div class="absolute right-0 top-0 h-24 w-24 rounded-bl-full bg-[#F7F8FA] transition duration-300 group-hover:bg-[#D5B893]/20"></div>

                        <div class="relative flex items-center justify-between">

                            <span class="text-sm font-extrabold tracking-widest text-[#632024]">
                                {{ $mission['number'] }}
                            </span>

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893] transition duration-300 group-hover:bg-[#632024]">

                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 3 5 6v5c0 4.5 3 7.5 7 10 4-2.5 7-5.5 7-10V6l-7-3Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m9 12 2 2 4-4"/>
                                </svg>

                            </div>

                        </div>

                        <h3 class="relative mt-7 text-xl font-extrabold leading-7 text-[#25344F]">
                            {{ $mission['title'] }}
                        </h3>

                        <p class="relative mt-3 text-sm leading-7 text-[#617891]">
                            {{ $mission['description'] }}
                        </p>

                        <div class="relative mt-6 h-1 w-12 rounded-full bg-[#D5B893] transition-all duration-300 group-hover:w-20"></div>

                    </article>

                @endforeach

            </div>

        </div>
    </section>


    {{-- =========================================================
        NILAI-NILAI PERUSAHAAN
    ========================================================== --}}
    <section class="bg-[#F7F8FA] px-5 py-20 sm:px-8 lg:px-10">

        <div class="mx-auto max-w-7xl">

            <div class="max-w-3xl">

                <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                    Prinsip dan Budaya Kerja
                </p>

                <h2 class="mt-3 text-3xl font-extrabold text-[#25344F] sm:text-4xl">
                    Nilai-Nilai Perusahaan
                </h2>

                <p class="mt-4 leading-7 text-[#617891]">
                    Nilai-nilai yang menggambarkan prinsip kerja dan komitmen
                    perusahaan dalam menjalankan kegiatan usahanya.
                </p>

                <div class="mt-6 h-1 w-16 rounded-full bg-[#D5B893]"></div>

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

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                @foreach ($values as $value)

                    <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl hover:shadow-[#25344F]/10">

                        <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893] transition duration-300 group-hover:bg-[#632024]">

                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 3 5 6v5c0 4.5 3 7.5 7 10 4-2.5 7-5.5 7-10V6l-7-3Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m9 12 2 2 4-4"/>
                            </svg>

                        </div>

                        <h3 class="mt-6 text-lg font-extrabold leading-7 text-[#25344F]">
                            {{ $value['title'] }}
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-[#617891]">
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
    <section class="bg-white px-5 py-20 sm:px-8 lg:px-10">

        <div class="mx-auto max-w-7xl">

            <div class="overflow-hidden rounded-3xl border border-[#D5B893]/50 bg-white shadow-xl shadow-[#25344F]/5">

                <div class="grid lg:grid-cols-[280px_1fr]">

                    <div class="relative flex items-center justify-center overflow-hidden bg-[#25344F] p-10 text-[#D5B893]">

                        <div class="absolute -right-10 -top-10 h-48 w-48 rounded-full border border-[#D5B893]/20"></div>
                        <div class="absolute -bottom-14 -left-10 h-48 w-48 rounded-full border border-[#D5B893]/20"></div>

                        <div class="relative flex h-24 w-24 items-center justify-center rounded-full border border-[#D5B893]/40 bg-white/5">

                            <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 3 2.8 20h18.4L12 3Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 9v5m0 3h.01"/>
                            </svg>

                        </div>

                    </div>

                    <div class="p-7 sm:p-10 lg:p-12">

                        <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#632024]">
                            Perhatian
                        </p>

                        <h2 class="mt-3 text-2xl font-extrabold text-[#25344F] sm:text-3xl">
                            Waspada Penipuan yang Mengatasnamakan EWF
                        </h2>

                        <p class="mt-5 leading-8 text-[#617891]">
                            PT Equityworld Futures mengingatkan masyarakat untuk
                            selalu waspada terhadap penipuan yang mengatasnamakan
                            perusahaan melalui media apa pun. Pastikan seluruh
                            transaksi dan setoran hanya dilakukan ke Rekening
                            Terpisah (Segregated Account) resmi atas nama
                            PT Equityworld Futures, bukan perseorangan.
                        </p>

                        <div class="mt-6 flex items-start gap-3 rounded-xl border border-[#D5B893]/60 bg-[#F7F8FA] p-4">

                            <svg class="mt-0.5 h-5 w-5 shrink-0 text-[#632024]"
                                 viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 11v5m0-8h.01"/>
                            </svg>

                            <p class="text-sm leading-6 text-[#25344F]">
                                Verifikasi informasi rekening dan saluran komunikasi
                                melalui kontak resmi perusahaan sebelum melakukan
                                penyetoran dana. Jangan mentransfer dana ke rekening
                                pribadi atas nama perorangan.
                            </p>

                        </div>

                        <a href="{{ route('contact') }}"
                           class="mt-7 inline-flex items-center gap-3 rounded-xl bg-[#632024] px-6 py-3.5 font-bold text-white transition duration-300 hover:-translate-y-1 hover:bg-[#7A3035] focus:outline-none focus:ring-2 focus:ring-[#D5B893] focus:ring-offset-2">

                            Hubungi Kami

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
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