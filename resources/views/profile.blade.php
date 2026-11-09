
@extends('layouts.public')

@section('title', 'Profil Perusahaan | PT Equityworld Futures')

@section('content')

{{-- =========================================================
     HERO / HEADER PROFIL PERUSAHAAN
========================================================= --}}
<section class="relative isolate overflow-hidden bg-[#951A21] text-white">
    <div class="absolute -right-20 -top-24 -z-10 h-80 w-80 rounded-full bg-[#FFA368]/20 blur-3xl"></div>
    <div class="absolute -bottom-32 -left-20 -z-10 h-72 w-72 rounded-full bg-[#FFD66E]/10 blur-3xl"></div>

    <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-28">
        <div class="max-w-3xl">
            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-semibold text-[#FFD66E]">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3 21h18M5 21V7l7-4 7 4v14M9 10h1m4 0h1M9 14h1m4 0h1M10 21v-4h4v4"/>
                </svg>
                Mengenal EWF
            </div>

            <h1 class="text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                PT Equityworld Futures
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-white/85 sm:text-lg">
                Mengenal perusahaan, visi, misi, dan nilai-nilai yang menjadi
                landasan dalam menjalankan kegiatan usaha perdagangan berjangka.
            </p>

            <a href="#tentang-perusahaan"
               class="mt-8 inline-flex items-center gap-2 rounded-xl bg-[#FFD66E] px-6 py-3.5 font-bold text-[#6D1720] transition hover:bg-[#EFBB55]">
                Kenali Perusahaan
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M5 12h14m-6-6 6 6-6 6"/>
                </svg>
            </a>
        </div>
    </div>
</section>


{{-- =========================================================
     TENTANG KAMI
========================================================= --}}
<section id="tentang-perusahaan" class="scroll-mt-28 bg-[#FFF9F0] px-6 py-16 sm:py-20 lg:px-8 lg:py-24">
    <div class="mx-auto grid max-w-7xl items-start gap-12 lg:grid-cols-[1.35fr_0.85fr] lg:gap-16">

        <div>
            <p class="text-sm font-extrabold uppercase tracking-[0.18em] text-[#951A21]">
                Tentang Kami
            </p>

            <h2 class="mt-3 text-3xl font-extrabold leading-tight text-[#6D1720] sm:text-4xl">
                Mengenal PT Equityworld Futures
            </h2>

            <div class="mt-6 space-y-5 text-base leading-8 text-[#51413E]">
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
               class="mt-7 inline-flex items-center gap-2 font-bold text-[#951A21] transition hover:text-[#CF3021]">
                Lihat Informasi Legalitas
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M5 12h14m-6-6 6 6-6 6"/>
                </svg>
            </a>
        </div>

        {{-- IDENTITAS PERUSAHAAN --}}
        <aside class="overflow-hidden rounded-3xl border border-[#951A21]/10 bg-white shadow-sm">
            <div class="bg-[#951A21] p-7 text-white sm:p-8">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white/15">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 21h18M5 21V7l7-4 7 4v14M9 10h1m4 0h1M9 14h1m4 0h1M10 21v-4h4v4"/>
                    </svg>
                </div>

                <h3 class="mt-5 text-2xl font-extrabold">
                    Identitas Perusahaan
                </h3>
                <p class="mt-2 text-sm leading-6 text-white/80">
                    Informasi umum PT Equityworld Futures.
                </p>
            </div>

            <dl class="divide-y divide-[#951A21]/10 px-7 sm:px-8">
                <div class="py-5">
                    <dt class="text-sm text-gray-500">Nama perusahaan</dt>
                    <dd class="mt-1 font-bold text-[#6D1720]">
                        PT Equityworld Futures
                    </dd>
                </div>

                <div class="py-5">
                    <dt class="text-sm text-gray-500">Tahun mulai beroperasi</dt>
                    <dd class="mt-1 font-bold text-[#6D1720]">2005</dd>
                </div>

                <div class="py-5">
                    <dt class="text-sm text-gray-500">Bidang usaha</dt>
                    <dd class="mt-1 font-bold text-[#6D1720]">
                        Perdagangan berjangka
                    </dd>
                </div>

                <div class="py-5">
                    <dt class="text-sm text-gray-500">Kota kantor operasional yang disebutkan</dt>
                    <dd class="mt-1 font-bold leading-7 text-[#6D1720]">
                        Jakarta, Surabaya, Semarang, dan Cirebon
                    </dd>
                    <p class="mt-2 text-xs leading-5 text-gray-500">
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
========================================================= --}}
<section class="bg-white px-6 py-16 sm:py-20 lg:px-8">
    <div class="mx-auto max-w-5xl">
        <article class="relative overflow-hidden rounded-3xl border border-[#951A21]/10 bg-[#FFF9F0] p-8 sm:p-10 lg:p-12">
            <div class="absolute -right-8 -top-8 h-36 w-36 rounded-full bg-[#FFA368]/15"></div>

            <div class="relative">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#951A21] text-white shadow-sm">
                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7Z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>

                <p class="mt-6 text-sm font-extrabold uppercase tracking-[0.18em] text-[#951A21]">
                    Arah dan Tujuan
                </p>

                <h2 class="mt-2 text-3xl font-extrabold text-[#6D1720] sm:text-4xl">
                    Visi
                </h2>

                <p class="mt-5 max-w-4xl text-lg leading-9 text-[#51413E]">
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
========================================================= --}}
<section class="bg-[#FFF9F0] px-6 py-16 sm:py-20 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-extrabold uppercase tracking-[0.18em] text-[#951A21]">
                Langkah Strategis
            </p>
            <h2 class="mt-3 text-3xl font-extrabold text-[#6D1720] sm:text-4xl">
                Misi Perusahaan
            </h2>
            <p class="mt-4 leading-7 text-[#51413E]">
                Komitmen yang menjadi pedoman dalam memberikan layanan dan
                mengembangkan kegiatan usaha.
            </p>
        </div>

        @php
            $missions = [
                [
                    'number' => '01',
                    'title' => 'Layanan Profesional',
                    'description' => 'Menyediakan layanan perdagangan berjangka yang profesional, aman, dan berintegritas tinggi.',
                    'icon' => 'service',
                ],
                [
                    'number' => '02',
                    'title' => 'Kualitas Sumber Daya Manusia',
                    'description' => 'Mengembangkan kualitas sumber daya manusia untuk menghadirkan layanan yang kompeten dan berdaya saing.',
                    'icon' => 'people',
                ],
                [
                    'number' => '03',
                    'title' => 'Tata Kelola Perusahaan',
                    'description' => 'Mengimplementasikan tata kelola perusahaan yang transparan dan akuntabel.',
                    'icon' => 'governance',
                ],
                [
                    'number' => '04',
                    'title' => 'Edukasi dan Literasi',
                    'description' => 'Memperluas akses edukasi serta literasi perdagangan berjangka kepada masyarakat.',
                    'icon' => 'education',
                ],
                [
                    'number' => '05',
                    'title' => 'Pemanfaatan Teknologi',
                    'description' => 'Mengoptimalkan teknologi untuk mendukung operasional dan pengalaman nasabah secara efisien.',
                    'icon' => 'technology',
                ],
            ];
        @endphp

        <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($missions as $mission)
                <article class="group rounded-2xl border border-[#951A21]/10 bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#FFA368] hover:shadow-lg">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-extrabold tracking-widest text-[#951A21]">
                            {{ $mission['number'] }}
                        </span>

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#951A21]/5 text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">
                            @if ($mission['icon'] === 'service')
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 5 6v5c0 4.5 3 7.5 7 10 4-2.5 7-5.5 7-10V6l-7-3Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/>
                                </svg>
                            @elseif ($mission['icon'] === 'people')
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <circle cx="9" cy="8" r="3"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 20v-2a6 6 0 0 1 12 0v2M16 5.5a3 3 0 0 1 0 5.8M18 14a4 4 0 0 1 3 4v2"/>
                                </svg>
                            @elseif ($mission['icon'] === 'governance')
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V8l7-4 7 4v13M9 12h1m4 0h1m-6 4h1m4 0h1"/>
                                </svg>
                            @elseif ($mission['icon'] === 'education')
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2 9 10-5 10 5-10 5L2 9Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 11v5c4 3 8 3 12 0v-5M22 9v6"/>
                                </svg>
                            @else
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <rect x="3" y="4" width="18" height="13" rx="2"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 21h8m-4-4v4M7 9h4m-4 4h10"/>
                                </svg>
                            @endif
                        </div>
                    </div>

                    <h3 class="mt-6 text-xl font-extrabold text-[#6D1720]">
                        {{ $mission['title'] }}
                    </h3>

                    <p class="mt-3 leading-7 text-[#51413E]">
                        {{ $mission['description'] }}
                    </p>
                </article>
            @endforeach
        </div>
    </div>
</section>


{{-- =========================================================
     NILAI-NILAI PERUSAHAAN
========================================================= --}}
<section class="bg-white px-6 py-16 sm:py-20 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="max-w-3xl">
            <p class="text-sm font-extrabold uppercase tracking-[0.18em] text-[#951A21]">
                Prinsip dan Budaya Kerja
            </p>
            <h2 class="mt-3 text-3xl font-extrabold text-[#6D1720] sm:text-4xl">
                Nilai-Nilai Perusahaan
            </h2>
            <p class="mt-4 leading-7 text-[#51413E]">
                Nilai-nilai yang menggambarkan prinsip kerja dan komitmen
                perusahaan dalam menjalankan kegiatan usahanya.
            </p>
        </div>

        @php
            $values = [
                [
                    'title' => 'Integritas Profesional',
                    'description' => 'Menegakkan standar etika yang tinggi serta menjaga konsistensi tindakan dan keputusan dalam setiap aktivitas perusahaan.',
                    'icon' => 'integrity',
                ],
                [
                    'title' => 'Fokus pada Nasabah',
                    'description' => 'Mengutamakan kebutuhan dan tujuan investasi nasabah melalui layanan yang responsif, akurat, dan transparan.',
                    'icon' => 'customer',
                ],
                [
                    'title' => 'Disiplin Kepatuhan',
                    'description' => 'Menjalankan seluruh proses bisnis sesuai kerangka regulasi dengan kontrol internal yang kuat dan berkelanjutan.',
                    'icon' => 'compliance',
                ],
                [
                    'title' => 'Inovasi Berkelanjutan',
                    'description' => 'Mendorong pengembangan teknologi, produk, dan proses kerja untuk menghadirkan pengalaman transaksi yang semakin efisien dan kompetitif.',
                    'icon' => 'innovation',
                ],
            ];
        @endphp

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($values as $value)
                <article class="group rounded-2xl border border-[#951A21]/10 bg-[#FFF9F0] p-7 transition duration-300 hover:-translate-y-1 hover:border-[#FFA368] hover:shadow-lg">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#951A21] text-white transition group-hover:bg-[#CF3021]">
                        @if ($value['icon'] === 'integrity')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 5 6v5c0 4.5 3 7.5 7 10 4-2.5 7-5.5 7-10V6l-7-3Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/>
                            </svg>
                        @elseif ($value['icon'] === 'customer')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <circle cx="9" cy="8" r="3"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 20v-2a6 6 0 0 1 12 0v2m1-10 2 2 4-4"/>
                            </svg>
                        @elseif ($value['icon'] === 'compliance')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 5 6v5c0 4.5 3 7.5 7 10 4-2.5 7-5.5 7-10V6l-7-3Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6"/>
                            </svg>
                        @else
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="13" rx="2"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 21h8m-4-4v4M7 9h4m-4 4h10"/>
                            </svg>
                        @endif
                    </div>

                    <h3 class="mt-6 text-lg font-extrabold leading-7 text-[#6D1720]">
                        {{ $value['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-[#51413E]">
                        {{ $value['description'] }}
                    </p>
                </article>
            @endforeach
        </div>
    </div>
</section>


{{-- =========================================================
     PERINGATAN PENIPUAN
========================================================= --}}
<section class="bg-[#FFF9F0] px-6 py-16 sm:py-20 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="overflow-hidden rounded-3xl border border-[#CF3021]/20 bg-white shadow-sm">
            <div class="grid lg:grid-cols-[auto_1fr]">
                <div class="flex items-center justify-center bg-[#951A21] p-8 text-white lg:px-10">
                    <div class="flex h-20 w-20 items-center justify-center rounded-full border border-white/25 bg-white/10">
                        <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 3 2.8 20h18.4L12 3Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v5m0 3h.01"/>
                        </svg>
                    </div>
                </div>

                <div class="p-7 sm:p-10 lg:p-12">
                    <p class="text-sm font-extrabold uppercase tracking-[0.18em] text-[#CF3021]">
                        Perhatian
                    </p>

                    <h2 class="mt-3 text-2xl font-extrabold text-[#6D1720] sm:text-3xl">
                        Waspada Penipuan yang Mengatasnamakan EWF
                    </h2>

                    <p class="mt-5 leading-8 text-[#51413E]">
                        PT Equityworld Futures mengingatkan masyarakat untuk
                        selalu waspada terhadap penipuan yang mengatasnamakan
                        perusahaan melalui media apa pun. Pastikan seluruh
                        transaksi dan setoran hanya dilakukan ke Rekening
                        Terpisah (Segregated Account) resmi atas nama
                        PT Equityworld Futures, bukan perseorangan.
                    </p>

                    <div class="mt-6 flex items-start gap-3 rounded-xl border border-[#EFBB55]/60 bg-[#FFD66E]/20 p-4">
                        <svg class="mt-0.5 h-5 w-5 shrink-0 text-[#951A21]"
                             viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 11v5m0-8h.01"/>
                        </svg>

                        <p class="text-sm leading-6 text-[#6D1720]">
                            Verifikasi informasi rekening dan saluran komunikasi
                            melalui kontak resmi perusahaan sebelum melakukan
                            penyetoran dana. Jangan mentransfer dana ke rekening
                            pribadi atas nama perorangan.
                        </p>
                    </div>

                    <a href="{{ route('contact') }}"
                       class="mt-7 inline-flex items-center gap-2 rounded-xl bg-[#951A21] px-5 py-3 font-bold text-white transition hover:bg-[#6D1720]">
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

@endsection
