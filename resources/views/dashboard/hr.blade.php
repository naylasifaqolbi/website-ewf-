
@extends('layouts.public')

@section('title', 'Dashboard HR | PT Equityworld Futures')

@section('content')

<main class="min-h-screen bg-[#FFF9F0]">

    {{-- =====================================================
         HEADER DASHBOARD
    ====================================================== --}}
    <section class="relative overflow-hidden bg-gradient-to-r from-[#6D1720] via-[#951A21] to-[#CF3021] text-white">

        <div class="pointer-events-none absolute -right-20 -top-24 h-72 w-72 rounded-full bg-[#FFA368]/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 left-1/3 h-64 w-64 rounded-full bg-[#FFD66E]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-10 lg:px-8 lg:py-14">

            <div class="flex flex-col justify-between gap-8 sm:flex-row sm:items-center">

                <div>
                    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2">
                        <span class="h-2 w-2 rounded-full bg-[#FFD66E]"></span>
                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#FFD66E]">
                            Human Resources Area
                        </span>
                    </div>

                    <h1 class="mt-5 text-3xl font-extrabold tracking-tight sm:text-4xl lg:text-5xl">
                        Dashboard HR
                    </h1>

                    <p class="mt-4 max-w-2xl text-sm leading-7 text-white/80 sm:text-base">
                        Pusat pengelolaan rekrutmen, pendaftaran magang,
                        data pelamar, dan proses penerimaan calon karyawan
                        maupun peserta magang PT Equityworld Futures.
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-3">

                    <div class="rounded-xl border border-white/20 bg-white/10 px-5 py-3">
                        <p class="text-xs text-white/70">Akses pengguna</p>
                        <p class="mt-1 font-bold text-[#FFD66E]">Human Resources</p>
                    </div>

                    <a href="{{ route('logout') }}"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#FFD66E] px-6 py-3 text-sm font-bold text-[#6D1720] shadow-sm transition hover:bg-white">

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


    {{-- =====================================================
         MAIN CONTENT
    ====================================================== --}}
    <section class="mx-auto max-w-7xl px-5 py-10 lg:px-8 lg:py-12">

        {{-- SAMBUTAN --}}
        <div class="relative overflow-hidden rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm sm:p-8">

            <div class="absolute right-0 top-0 h-32 w-32 rounded-bl-full bg-[#FBE5D6]/70"></div>

            <div class="relative flex flex-col justify-between gap-5 md:flex-row md:items-center">

                <div>
                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                        Human Resources
                    </span>

                    <h2 class="mt-3 text-2xl font-extrabold text-[#401C20] sm:text-3xl">
                        Selamat Datang, HR!
                    </h2>

                    <p class="mt-3 max-w-2xl text-sm leading-7 text-[#786662]">
                        Selamat bekerja. Melalui dashboard ini, Anda dapat
                        mengelola lowongan pekerjaan, pendaftaran magang,
                        data pelamar, verifikasi dokumen, hingga tahapan
                        seleksi dan pengumuman hasil penerimaan.
                    </p>
                </div>

                <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-[#FBE5D6] text-[#951A21]">

                    <svg class="h-9 w-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                            d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8zm8 10v-2a4 4 0 00-3-3.87m0-11.13a4 4 0 010 7.75"/>
                    </svg>

                </div>

            </div>

            <div class="relative mt-6 flex flex-wrap gap-3">

                <span class="inline-flex items-center rounded-full bg-[#FBE5D6] px-4 py-2 text-xs font-bold text-[#951A21]">
                    Role: HR
                </span>

                <span class="inline-flex items-center rounded-full bg-[#FFF4D8] px-4 py-2 text-xs font-bold text-[#8A5B13]">
                    Pengelolaan Rekrutmen
                </span>

            </div>

        </div>


        {{-- =====================================================
             RINGKASAN DATA
        ====================================================== --}}
        <div class="mt-10">

            <div class="flex flex-col justify-between gap-2 sm:flex-row sm:items-end">

                <div>
                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                        Ringkasan
                    </span>

                    <h2 class="mt-2 text-2xl font-extrabold text-[#401C20]">
                        Informasi Rekrutmen
                    </h2>

                    <p class="mt-2 text-sm text-[#786662]">
                        Gambaran umum data penerimaan dan pendaftaran.
                    </p>
                </div>

                <span class="text-xs text-[#9A8279]">
                    Data contoh / sementara
                </span>

            </div>


            <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                {{-- LOWONGAN AKTIF --}}
                <article class="rounded-2xl border border-[#EAD8CB] bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21]">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v14H4V6a1 1 0 011-1z"/>
                            </svg>
                        </div>

                        <span class="rounded-full bg-[#FBE5D6] px-3 py-1 text-xs font-bold text-[#951A21]">
                            Lowongan
                        </span>
                    </div>

                    <p class="mt-5 text-sm font-medium text-[#786662]">
                        Lowongan Aktif
                    </p>

                    <h3 class="mt-1 text-3xl font-extrabold text-[#401C20]">
                        03
                    </h3>

                    <p class="mt-2 text-xs text-[#9A8279]">
                        Posisi pekerjaan tersedia
                    </p>

                </article>


                {{-- PELAMAR KERJA --}}
                <article class="rounded-2xl border border-[#EAD8CB] bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FFF4D8] text-[#A56B16]">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8zm8 10v-2a4 4 0 00-3-3.87m0-11.13a4 4 0 010 7.75"/>
                            </svg>
                        </div>

                        <span class="rounded-full bg-[#FFF4D8] px-3 py-1 text-xs font-bold text-[#8A5B13]">
                            Pekerjaan
                        </span>
                    </div>

                    <p class="mt-5 text-sm font-medium text-[#786662]">
                        Pelamar Kerja
                    </p>

                    <h3 class="mt-1 text-3xl font-extrabold text-[#401C20]">
                        24
                    </h3>

                    <p class="mt-2 text-xs text-[#9A8279]">
                        Total pengajuan lamaran
                    </p>

                </article>


                {{-- PENDAFTAR MAGANG --}}
                <article class="rounded-2xl border border-[#EAD8CB] bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FFE9DF] text-[#CF5B35]">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.42A12 12 0 0118 16.5c-3.3 2-8.7 2-12 0a12 12 0 01-.16-5.92L12 14zm-7 1v4"/>
                            </svg>
                        </div>

                        <span class="rounded-full bg-[#FFE9DF] px-3 py-1 text-xs font-bold text-[#B84B2A]">
                            Magang
                        </span>
                    </div>

                    <p class="mt-5 text-sm font-medium text-[#786662]">
                        Pendaftar Magang
                    </p>

                    <h3 class="mt-1 text-3xl font-extrabold text-[#401C20]">
                        18
                    </h3>

                    <p class="mt-2 text-xs text-[#9A8279]">
                        SMA/SMK dan mahasiswa
                    </p>

                </article>


                {{-- PERLU VERIFIKASI --}}
                <article class="rounded-2xl border border-[#EAD8CB] bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="flex items-center justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FCE8E8] text-[#CF3021]">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M9 12l2 2 4-4m5-3v12a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2z"/>
                            </svg>
                        </div>

                        <span class="rounded-full bg-[#FCE8E8] px-3 py-1 text-xs font-bold text-[#CF3021]">
                            Perlu Ditinjau
                        </span>
                    </div>

                    <p class="mt-5 text-sm font-medium text-[#786662]">
                        Menunggu Verifikasi
                    </p>

                    <h3 class="mt-1 text-3xl font-extrabold text-[#401C20]">
                        12
                    </h3>

                    <p class="mt-2 text-xs text-[#9A8279]">
                        Pengajuan belum diperiksa
                    </p>

                </article>

            </div>

        </div>


        {{-- =====================================================
             STATUS SELEKSI
        ====================================================== --}}
        <div class="mt-12">

            <div>
                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                    Pemantauan
                </span>

                <h2 class="mt-2 text-2xl font-extrabold text-[#401C20]">
                    Tahapan Seleksi Pelamar
                </h2>

                <p class="mt-2 text-sm text-[#786662]">
                    Ringkasan perkembangan proses penerimaan calon karyawan dan peserta magang.
                </p>
            </div>


            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">

                <div class="rounded-xl border border-[#EAD8CB] bg-white p-5">
                    <div class="h-2 w-10 rounded-full bg-[#FFA368]"></div>
                    <p class="mt-4 text-sm text-[#786662]">Menunggu Review</p>
                    <h3 class="mt-1 text-2xl font-extrabold text-[#401C20]">12</h3>
                </div>

                <div class="rounded-xl border border-[#EAD8CB] bg-white p-5">
                    <div class="h-2 w-10 rounded-full bg-[#EFBB55]"></div>
                    <p class="mt-4 text-sm text-[#786662]">Lolos Administrasi</p>
                    <h3 class="mt-1 text-2xl font-extrabold text-[#401C20]">10</h3>
                </div>

                <div class="rounded-xl border border-[#EAD8CB] bg-white p-5">
                    <div class="h-2 w-10 rounded-full bg-[#CF3021]"></div>
                    <p class="mt-4 text-sm text-[#786662]">Tahap Wawancara</p>
                    <h3 class="mt-1 text-2xl font-extrabold text-[#401C20]">08</h3>
                </div>

                <div class="rounded-xl border border-[#EAD8CB] bg-white p-5">
                    <div class="h-2 w-10 rounded-full bg-[#951A21]"></div>
                    <p class="mt-4 text-sm text-[#786662]">Diterima</p>
                    <h3 class="mt-1 text-2xl font-extrabold text-[#401C20]">07</h3>
                </div>

                <div class="rounded-xl border border-[#EAD8CB] bg-white p-5">
                    <div class="h-2 w-10 rounded-full bg-[#B8A6A0]"></div>
                    <p class="mt-4 text-sm text-[#786662]">Tidak Lolos</p>
                    <h3 class="mt-1 text-2xl font-extrabold text-[#401C20]">05</h3>
                </div>

            </div>

        </div>


        {{-- =====================================================
             MENU MANAJEMEN HR
        ====================================================== --}}
        <div class="mt-12">

            <div>
                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                    Menu Utama
                </span>

                <h2 class="mt-2 text-2xl font-extrabold text-[#401C20]">
                    Manajemen Sumber Daya Manusia
                </h2>

                <p class="mt-2 text-sm text-[#786662]">
                    Pilih menu berikut untuk mengelola informasi rekrutmen dan proses penerimaan.
                </p>
            </div>


            <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">


                {{-- LOWONGAN KERJA --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v14H4V6a1 1 0 011-1z"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Lowongan Kerja
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Mengelola informasi lowongan pekerjaan, posisi yang tersedia,
                        serta status pembukaan dan penutupan lowongan.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">
                        <span class="text-xs font-semibold text-[#9A8279]">Manajemen Lowongan</span>
                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">→</span>
                    </div>

                </article>


                {{-- MAGANG SMA/SMK --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.42A12 12 0 0118 16.5c-3.3 2-8.7 2-12 0a12 12 0 01-.16-5.92L12 14zm-7 1v4"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Magang SMA/SMK
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Mengelola pendaftaran, pemeriksaan persyaratan,
                        dan proses penerimaan peserta praktik kerja lapangan.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">
                        <span class="text-xs font-semibold text-[#9A8279]">Penerimaan Peserta PKL</span>
                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">→</span>
                    </div>

                </article>


                {{-- MAGANG MAHASISWA --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.42A12 12 0 0118 16.5c-3.3 2-8.7 2-12 0a12 12 0 01-.16-5.92L12 14zm-7 1v4"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Magang Mahasiswa
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Mengelola pengajuan magang mahasiswa,
                        persyaratan perguruan tinggi, dan proses penerimaan.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">
                        <span class="text-xs font-semibold text-[#9A8279]">Penerimaan Mahasiswa</span>
                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">→</span>
                    </div>

                </article>


                {{-- DATA PELAMAR --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8zm8 10v-2a4 4 0 00-3-3.87m0-11.13a4 4 0 010 7.75"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Data Pelamar
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Melihat informasi identitas, pendidikan, pengalaman,
                        dan dokumen calon karyawan maupun peserta magang.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">
                        <span class="text-xs font-semibold text-[#9A8279]">Data Calon Peserta</span>
                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">→</span>
                    </div>

                </article>


                {{-- SELEKSI PELAMAR --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9 12l2 2 4-4m5-3v12a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2z"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Seleksi Pelamar
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Mengelola tahapan seleksi, penilaian,
                        catatan evaluasi, dan keputusan hasil penerimaan.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">
                        <span class="text-xs font-semibold text-[#9A8279]">Proses Seleksi</span>
                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">→</span>
                    </div>

                </article>


                {{-- LAMARAN PEKERJAAN --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M8 7h8m-8 4h8m-8 4h5m-9 5h14a2 2 0 002-2V5a2 2 0 00-2-2H6a2 2 0 00-2 2v13a2 2 0 002 2z"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Lamaran Pekerjaan
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Memeriksa pengajuan lamaran berdasarkan posisi,
                        kelengkapan berkas, dan persyaratan pekerjaan.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">
                        <span class="text-xs font-semibold text-[#9A8279]">Pengajuan Lamaran</span>
                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">→</span>
                    </div>

                </article>

            </div>

        </div>


        {{-- =====================================================
             AKTIVITAS TERBARU
        ====================================================== --}}
        <div class="mt-12 grid gap-6 lg:grid-cols-3">

            {{-- TABEL AKTIVITAS --}}
            <div class="overflow-hidden rounded-2xl border border-[#EAD8CB] bg-white shadow-sm lg:col-span-2">

                <div class="border-b border-[#F1E5DE] p-6">

                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                        Aktivitas
                    </span>

                    <h2 class="mt-2 text-xl font-extrabold text-[#401C20]">
                        Pengajuan Terbaru
                    </h2>

                    <p class="mt-2 text-sm text-[#786662]">
                        Contoh daftar pengajuan yang perlu diperhatikan oleh HR.
                    </p>

                </div>


                <div class="overflow-x-auto">

                    <table class="w-full min-w-[600px] text-left text-sm">

                        <thead class="bg-[#FFF9F0] text-xs uppercase tracking-wider text-[#786662]">
                            <tr>
                                <th class="px-6 py-4 font-bold">Nama Pelamar</th>
                                <th class="px-6 py-4 font-bold">Jenis Pengajuan</th>
                                <th class="px-6 py-4 font-bold">Tanggal</th>
                                <th class="px-6 py-4 font-bold">Status</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-[#F1E5DE]">

                            <tr class="transition hover:bg-[#FFF9F0]">
                                <td class="px-6 py-4 font-semibold text-[#401C20]">
                                    Andi Pratama
                                </td>
                                <td class="px-6 py-4 text-[#786662]">
                                    Lamaran Kerja
                                </td>
                                <td class="px-6 py-4 text-[#786662]">
                                    10 Nov 2026
                                </td>
                                <td class="px-6 py-4">
                                    <span class="rounded-full bg-[#FFF4D8] px-3 py-1 text-xs font-bold text-[#8A5B13]">
                                        Menunggu
                                    </span>
                                </td>
                            </tr>

                            <tr class="transition hover:bg-[#FFF9F0]">
                                <td class="px-6 py-4 font-semibold text-[#401C20]">
                                    Siti Rahma
                                </td>
                                <td class="px-6 py-4 text-[#786662]">
                                    Magang Mahasiswa
                                </td>
                                <td class="px-6 py-4 text-[#786662]">
                                    09 Nov 2026
                                </td>
                                <td class="px-6 py-4">
                                    <span class="rounded-full bg-[#FBE5D6] px-3 py-1 text-xs font-bold text-[#951A21]">
                                        Ditinjau
                                    </span>
                                </td>
                            </tr>

                            <tr class="transition hover:bg-[#FFF9F0]">
                                <td class="px-6 py-4 font-semibold text-[#401C20]">
                                    Budi Santoso
                                </td>
                                <td class="px-6 py-4 text-[#786662]">
                                    Magang SMA/SMK
                                </td>
                                <td class="px-6 py-4 text-[#786662]">
                                    08 Nov 2026
                                </td>
                                <td class="px-6 py-4">
                                    <span class="rounded-full bg-[#FCE8E8] px-3 py-1 text-xs font-bold text-[#CF3021]">
                                        Perlu Verifikasi
                                    </span>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

                <div class="border-t border-[#F1E5DE] px-6 py-4">
                    <p class="text-xs text-[#9A8279]">
                        Data di atas hanya contoh tampilan dan belum terhubung dengan database.
                    </p>
                </div>

            </div>


            {{-- INFORMASI HR --}}
            <aside class="rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21]">

                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M12 9v3m0 4h.01M10.3 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.7 3.86a2 2 0 00-3.4 0z"/>
                    </svg>

                </div>

                <h3 class="mt-5 text-lg font-extrabold text-[#401C20]">
                    Informasi HR
                </h3>

                <p class="mt-2 text-sm leading-6 text-[#786662]">
                    Pastikan setiap pengajuan pelamar diperiksa
                    berdasarkan persyaratan dan ketentuan penerimaan.
                </p>

                <div class="mt-6 space-y-4">

                    <div class="flex gap-3">
                        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#951A21]"></span>
                        <p class="text-sm leading-6 text-[#786662]">
                            Periksa kelengkapan dokumen setiap pelamar.
                        </p>
                    </div>

                    <div class="flex gap-3">
                        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#FFA368]"></span>
                        <p class="text-sm leading-6 text-[#786662]">
                            Perbarui status seleksi sesuai tahapan penerimaan.
                        </p>
                    </div>

                    <div class="flex gap-3">
                        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#EFBB55]"></span>
                        <p class="text-sm leading-6 text-[#786662]">
                            Sampaikan hasil seleksi kepada pelamar.
                        </p>
                    </div>

                </div>

            </aside>

        </div>


        {{-- =====================================================
             KEMBALI KE BERANDA
        ====================================================== --}}
        <div class="mt-10 border-t border-[#EAD8CB] pt-6">

            <a href="{{ url('/') }}"
               class="inline-flex items-center gap-2 text-sm font-bold text-[#951A21] transition hover:text-[#CF3021]">

                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>

                Kembali ke Beranda

            </a>

        </div>

    </section>

</main>

@endsection
