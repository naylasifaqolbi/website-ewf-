@extends('layouts.public')

@section('title', 'Dashboard HR | PT Equityworld Futures')

@section('content')

<main class="min-h-screen bg-linear-to-b from-white via-white to-[#D5B893]/10 font-['DM_Sans']">

    {{-- HEADER DASHBOARD --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        <div class="pointer-events-none absolute -right-20 -top-24 h-72 w-72 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-4 -top-8 h-48 w-48 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-32 left-1/3 h-64 w-64 rounded-full bg-[#D5B893]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-10 lg:px-8 lg:py-14">
            <div class="flex flex-col justify-between gap-8 sm:flex-row sm:items-center">

                <div>
                    <div class="inline-flex items-center gap-2 rounded-full border border-[#D5B893]/40 bg-white/10 px-4 py-2">
                        <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>
                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#D5B893]">
                            Human Resources Area
                        </span>
                    </div>

                    <h1 class="mt-5 font-['Manrope'] text-3xl font-extrabold tracking-tight sm:text-4xl lg:text-5xl">
                        Dashboard HR
                    </h1>

                    <p class="mt-4 max-w-2xl text-sm leading-7 text-white/80 sm:text-base">
                        Pusat pengelolaan rekrutmen, pendaftaran magang,
                        data pelamar, dan proses penerimaan calon karyawan
                        maupun peserta magang PT Equityworld Futures.
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-3">
                    <div class="rounded-xl border border-white/20 bg-white/10 px-5 py-3 backdrop-blur-sm">
                        <p class="text-xs text-white/65">Akses pengguna</p>
                        <p class="mt-1 font-bold text-[#D5B893]">Human Resources</p>
                    </div>

                    <a href="{{ route('logout') }}"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#D5B893] px-6 py-3 text-sm font-bold text-[#25344F] shadow-sm transition hover:bg-white">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H9m4 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        Keluar
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- MAIN CONTENT --}}
    <section class="mx-auto max-w-7xl px-5 py-10 lg:px-8 lg:py-12">

        {{-- SAMBUTAN --}}
        <div class="relative overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm sm:p-8">
            <div class="pointer-events-none absolute -right-4 -top-8 h-40 w-40 rounded-full bg-[#D5B893]/20"></div>
            <div class="pointer-events-none absolute right-16 top-12 h-20 w-20 rounded-full border border-[#D5B893]/40"></div>

            <div class="relative flex flex-col justify-between gap-5 md:flex-row md:items-center">
                <div>
                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#632024]">Human Resources</span>
                    <h2 class="mt-3 font-['Manrope'] text-2xl font-extrabold text-[#25344F] sm:text-3xl">
                        Selamat Datang, HR!
                    </h2>
                    <p class="mt-3 max-w-2xl text-sm leading-7 text-[#617891]">
                        Selamat bekerja. Melalui dashboard ini, Anda dapat
                        mengelola lowongan pekerjaan, pendaftaran magang,
                        data pelamar, verifikasi dokumen, hingga tahapan
                        seleksi dan pengumuman hasil penerimaan.
                    </p>
                </div>

                <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-[#25344F] text-[#D5B893] shadow-sm">
                    <svg class="h-9 w-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                            d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8zm8 10v-2a4 4 0 00-3-3.87m0-11.13a4 4 0 010 7.75"/>
                    </svg>
                </div>
            </div>

            <div class="relative mt-6 flex flex-wrap gap-3">
                <span class="inline-flex items-center rounded-full border border-[#632024]/15 bg-[#632024]/10 px-4 py-2 text-xs font-bold text-[#632024]">
                    Role: HR
                </span>
                <span class="inline-flex items-center rounded-full border border-[#D5B893]/50 bg-[#D5B893]/20 px-4 py-2 text-xs font-bold text-[#6F4D38]">
                    Pengelolaan Rekrutmen
                </span>
            </div>
        </div>

        {{-- RINGKASAN DATA --}}
        <div class="mt-10">
            <div class="flex flex-col justify-between gap-2 sm:flex-row sm:items-end">
                <div>
                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#632024]">Ringkasan</span>
                    <h2 class="mt-2 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">Informasi Rekrutmen</h2>
                    <p class="mt-2 text-sm text-[#617891]">Gambaran umum data penerimaan dan pendaftaran.</p>
                </div>
                <span class="text-xs text-[#617891]">Data contoh / sementara</span>
            </div>

            <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                {{-- LOWONGAN AKTIF --}}
                <article class="rounded-2xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/25 text-[#25344F]">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v14H4V6a1 1 0 011-1z"/>
                            </svg>
                        </div>
                        <span class="rounded-full bg-[#D5B893]/25 px-3 py-1 text-xs font-bold text-[#6F4D38]">Lowongan</span>
                    </div>
                    <p class="mt-5 text-sm font-medium text-[#617891]">Lowongan Aktif</p>
                    <h3 class="mt-1 font-['Manrope'] text-3xl font-extrabold text-[#25344F]">03</h3>
                    <p class="mt-2 text-xs text-[#617891]">Posisi pekerjaan tersedia</p>
                </article>

                {{-- PELAMAR KERJA --}}
                <article class="rounded-2xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#617891]/15 text-[#25344F]">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8zm8 10v-2a4 4 0 00-3-3.87m0-11.13a4 4 0 010 7.75"/>
                            </svg>
                        </div>
                        <span class="rounded-full bg-[#617891]/15 px-3 py-1 text-xs font-bold text-[#25344F]">Pekerjaan</span>
                    </div>
                    <p class="mt-5 text-sm font-medium text-[#617891]">Pelamar Kerja</p>
                    <h3 class="mt-1 font-['Manrope'] text-3xl font-extrabold text-[#25344F]">24</h3>
                    <p class="mt-2 text-xs text-[#617891]">Total pengajuan lamaran</p>
                </article>

                {{-- PENDAFTAR MAGANG --}}
                <article class="rounded-2xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#6F4D38]/10 text-[#6F4D38]">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.42A12 12 0 0118 16.5c-3.3 2-8.7 2-12 0a12 12 0 01-.16-5.92L12 14zm-7 1v4"/>
                            </svg>
                        </div>
                        <span class="rounded-full bg-[#6F4D38]/10 px-3 py-1 text-xs font-bold text-[#6F4D38]">Magang</span>
                    </div>
                    <p class="mt-5 text-sm font-medium text-[#617891]">Pendaftar Magang</p>
                    <h3 class="mt-1 font-['Manrope'] text-3xl font-extrabold text-[#25344F]">18</h3>
                    <p class="mt-2 text-xs text-[#617891]">SMA/SMK dan mahasiswa</p>
                </article>

                {{-- PERLU VERIFIKASI --}}
                <article class="rounded-2xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#632024]/10 text-[#632024]">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5-3v12a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2z"/>
                            </svg>
                        </div>
                        <span class="rounded-full bg-[#632024]/10 px-3 py-1 text-xs font-bold text-[#632024]">Perlu Ditinjau</span>
                    </div>
                    <p class="mt-5 text-sm font-medium text-[#617891]">Menunggu Verifikasi</p>
                    <h3 class="mt-1 font-['Manrope'] text-3xl font-extrabold text-[#25344F]">12</h3>
                    <p class="mt-2 text-xs text-[#617891]">Pengajuan belum diperiksa</p>
                </article>

            </div>
        </div>

        {{-- STATUS SELEKSI --}}
        <div class="mt-12">
            <div>
                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#632024]">Pemantauan</span>
                <h2 class="mt-2 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">Tahapan Seleksi Pelamar</h2>
                <p class="mt-2 text-sm text-[#617891]">
                    Ringkasan perkembangan proses penerimaan calon karyawan dan peserta magang.
                </p>
            </div>

            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
                <div class="rounded-xl border border-[#D5B893]/50 bg-white p-5 shadow-sm">
                    <div class="h-2 w-10 rounded-full bg-[#D5B893]"></div>
                    <p class="mt-4 text-sm text-[#617891]">Menunggu Review</p>
                    <h3 class="mt-1 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">12</h3>
                </div>

                <div class="rounded-xl border border-[#D5B893]/50 bg-white p-5 shadow-sm">
                    <div class="h-2 w-10 rounded-full bg-[#6F4D38]"></div>
                    <p class="mt-4 text-sm text-[#617891]">Lolos Administrasi</p>
                    <h3 class="mt-1 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">10</h3>
                </div>

                <div class="rounded-xl border border-[#D5B893]/50 bg-white p-5 shadow-sm">
                    <div class="h-2 w-10 rounded-full bg-[#617891]"></div>
                    <p class="mt-4 text-sm text-[#617891]">Tahap Wawancara</p>
                    <h3 class="mt-1 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">08</h3>
                </div>

                <div class="rounded-xl border border-[#D5B893]/50 bg-white p-5 shadow-sm">
                    <div class="h-2 w-10 rounded-full bg-[#632024]"></div>
                    <p class="mt-4 text-sm text-[#617891]">Diterima</p>
                    <h3 class="mt-1 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">07</h3>
                </div>

                <div class="rounded-xl border border-[#D5B893]/50 bg-white p-5 shadow-sm">
                    <div class="h-2 w-10 rounded-full bg-[#617891]/50"></div>
                    <p class="mt-4 text-sm text-[#617891]">Tidak Lolos</p>
                    <h3 class="mt-1 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">05</h3>
                </div>
            </div>
        </div>

        {{-- MENU MANAJEMEN HR --}}
        <div class="mt-12">
            <div>
                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#632024]">Menu Utama</span>
                <h2 class="mt-2 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">Manajemen Sumber Daya Manusia</h2>
                <p class="mt-2 text-sm text-[#617891]">
                    Pilih menu berikut untuk mengelola informasi rekrutmen dan proses penerimaan.
                </p>
            </div>

            <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                {{-- LOWONGAN KERJA --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/25 text-[#25344F] transition group-hover:bg-[#25344F] group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v14H4V6a1 1 0 011-1z"/>
                        </svg>
                    </div>
                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">Lowongan Kerja</h3>
                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Mengelola informasi lowongan pekerjaan, posisi yang tersedia,
                        serta status pembukaan dan penutupan lowongan.
                    </p>
                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">
                        <span class="text-xs font-semibold text-[#617891]">Manajemen Lowongan</span>
                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">→</span>
                    </div>
                </article>

                {{-- MAGANG SMA/SMK --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/25 text-[#25344F] transition group-hover:bg-[#25344F] group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.42A12 12 0 0118 16.5c-3.3 2-8.7 2-12 0a12 12 0 01-.16-5.92L12 14zm-7 1v4"/>
                        </svg>
                    </div>
                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">Magang SMA/SMK</h3>
                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Mengelola pendaftaran, pemeriksaan persyaratan,
                        dan proses penerimaan peserta praktik kerja lapangan.
                    </p>
                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">
                        <span class="text-xs font-semibold text-[#617891]">Penerimaan Peserta PKL</span>
                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">→</span>
                    </div>
                </article>

                {{-- MAGANG MAHASISWA --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/25 text-[#25344F] transition group-hover:bg-[#25344F] group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.42A12 12 0 0118 16.5c-3.3 2-8.7 2-12 0a12 12 0 01-.16-5.92L12 14zm-7 1v4"/>
                        </svg>
                    </div>
                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">Magang Mahasiswa</h3>
                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Mengelola pengajuan magang mahasiswa,
                        persyaratan perguruan tinggi, dan proses penerimaan.
                    </p>
                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">
                        <span class="text-xs font-semibold text-[#617891]">Penerimaan Mahasiswa</span>
                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">→</span>
                    </div>
                </article>

                {{-- DATA PELAMAR --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/25 text-[#25344F] transition group-hover:bg-[#25344F] group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8zm8 10v-2a4 4 0 00-3-3.87m0-11.13a4 4 0 010 7.75"/>
                        </svg>
                    </div>
                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">Data Pelamar</h3>
                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Melihat informasi identitas, pendidikan, pengalaman,
                        dan dokumen calon karyawan maupun peserta magang.
                    </p>
                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">
                        <span class="text-xs font-semibold text-[#617891]">Data Calon Peserta</span>
                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">→</span>
                    </div>
                </article>

                {{-- SELEKSI PELAMAR --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/25 text-[#25344F] transition group-hover:bg-[#25344F] group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5-3v12a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2z"/>
                        </svg>
                    </div>
                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">Seleksi Pelamar</h3>
                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Mengelola tahapan seleksi, penilaian,
                        catatan evaluasi, dan keputusan hasil penerimaan.
                    </p>
                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">
                        <span class="text-xs font-semibold text-[#617891]">Proses Seleksi</span>
                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">→</span>
                    </div>
                </article>

                {{-- LAMARAN PEKERJAAN --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/25 text-[#25344F] transition group-hover:bg-[#25344F] group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7h8m-8 4h8m-8 4h5m-9 5h14a2 2 0 002-2V5a2 2 0 00-2-2H6a2 2 0 00-2 2v13a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">Lamaran Pekerjaan</h3>
                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Memeriksa pengajuan lamaran berdasarkan posisi,
                        kelengkapan berkas, dan persyaratan pekerjaan.
                    </p>
                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">
                        <span class="text-xs font-semibold text-[#617891]">Pengajuan Lamaran</span>
                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">→</span>
                    </div>
                </article>

            </div>
        </div>

        {{-- AKTIVITAS TERBARU --}}
        <div class="mt-12 grid gap-6 lg:grid-cols-3">

            {{-- TABEL AKTIVITAS --}}
            <div class="overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white shadow-sm lg:col-span-2">
                <div class="border-b border-[#D5B893]/40 p-6">
                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#632024]">Aktivitas</span>
                    <h2 class="mt-2 font-['Manrope'] text-xl font-extrabold text-[#25344F]">Pengajuan Terbaru</h2>
                    <p class="mt-2 text-sm text-[#617891]">Contoh daftar pengajuan yang perlu diperhatikan oleh HR.</p>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full min-w-150 text-left text-sm">
                        <thead class="bg-[#25344F] text-xs uppercase tracking-wider text-white">
                            <tr>
                                <th class="px-6 py-4 font-bold">Nama Pelamar</th>
                                <th class="px-6 py-4 font-bold">Jenis Pengajuan</th>
                                <th class="px-6 py-4 font-bold">Tanggal</th>
                                <th class="px-6 py-4 font-bold">Status</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-[#D5B893]/40">
                            <tr class="transition hover:bg-[#D5B893]/10">
                                <td class="px-6 py-4 font-semibold text-[#25344F]">Andi Pratama</td>
                                <td class="px-6 py-4 text-[#617891]">Lamaran Kerja</td>
                                <td class="px-6 py-4 text-[#617891]">10 Nov 2026</td>
                                <td class="px-6 py-4">
                                    <span class="rounded-full border border-[#D5B893]/60 bg-[#D5B893]/20 px-3 py-1 text-xs font-bold text-[#6F4D38]">
                                        Menunggu
                                    </span>
                                </td>
                            </tr>

                            <tr class="transition hover:bg-[#D5B893]/10">
                                <td class="px-6 py-4 font-semibold text-[#25344F]">Siti Rahma</td>
                                <td class="px-6 py-4 text-[#617891]">Magang Mahasiswa</td>
                                <td class="px-6 py-4 text-[#617891]">09 Nov 2026</td>
                                <td class="px-6 py-4">
                                    <span class="rounded-full bg-[#617891]/15 px-3 py-1 text-xs font-bold text-[#25344F]">
                                        Ditinjau
                                    </span>
                                </td>
                            </tr>

                            <tr class="transition hover:bg-[#D5B893]/10">
                                <td class="px-6 py-4 font-semibold text-[#25344F]">Budi Santoso</td>
                                <td class="px-6 py-4 text-[#617891]">Magang SMA/SMK</td>
                                <td class="px-6 py-4 text-[#617891]">08 Nov 2026</td>
                                <td class="px-6 py-4">
                                    <span class="rounded-full bg-[#632024]/10 px-3 py-1 text-xs font-bold text-[#632024]">
                                        Perlu Verifikasi
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="border-t border-[#D5B893]/40 px-6 py-4">
                    <p class="text-xs text-[#617891]">
                        Data di atas hanya contoh tampilan dan belum terhubung dengan database.
                    </p>
                </div>
            </div>

            {{-- INFORMASI HR --}}
            <aside class="relative overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm">
                <div class="pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-[#D5B893]/20"></div>

                <div class="relative">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893]">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 9v3m0 4h.01M10.3 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.7 3.86a2 2 0 00-3.4 0z"/>
                        </svg>
                    </div>

                    <h3 class="mt-5 font-['Manrope'] text-lg font-extrabold text-[#25344F]">Informasi HR</h3>
                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Pastikan setiap pengajuan pelamar diperiksa
                        berdasarkan persyaratan dan ketentuan penerimaan.
                    </p>

                    <div class="mt-6 space-y-4">
                        <div class="flex gap-3">
                            <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#632024]"></span>
                            <p class="text-sm leading-6 text-[#617891]">Periksa kelengkapan dokumen setiap pelamar.</p>
                        </div>

                        <div class="flex gap-3">
                            <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#6F4D38]"></span>
                            <p class="text-sm leading-6 text-[#617891]">Perbarui status seleksi sesuai tahapan penerimaan.</p>
                        </div>

                        <div class="flex gap-3">
                            <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#D5B893]"></span>
                            <p class="text-sm leading-6 text-[#617891]">Sampaikan hasil seleksi kepada pelamar.</p>
                        </div>
                    </div>
                </div>
            </aside>

        </div>

        {{-- KEMBALI KE BERANDA --}}
        <div class="mt-10 border-t border-[#D5B893]/50 pt-6">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-sm font-bold text-[#632024] transition hover:text-[#25344F]">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Beranda
            </a>
        </div>

    </section>

</main>

@endsection