
@extends('layouts.public')

@section('title', 'Dashboard User | PT Equityworld Futures')

@section('content')

<main class="min-h-screen bg-[#FFF9F0]">

    {{-- ================================================
         HEADER DASHBOARD
    ================================================= --}}
    <section class="relative overflow-hidden bg-linear-to-r from-ewf-wine-dark via-[#951A21] to-ewf-red-poppy text-white">

        <div class="pointer-events-none absolute -right-20 -top-24 h-80 w-80 rounded-full bg-white/10 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 left-1/3 h-72 w-72 rounded-full bg-ewf-hawkbit/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-10 lg:px-8 lg:py-14">

            <div class="flex flex-col justify-between gap-8 md:flex-row md:items-center">

                <div>
                    <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-ewf-hawkbit">
                        <span class="h-2 w-2 rounded-full bg-ewf-hawkbit"></span>
                        Applicant Portal
                    </span>

                    <h1 class="mt-5 text-3xl font-extrabold leading-tight sm:text-4xl lg:text-5xl">
                        Selamat Datang,<br>
                        <span class="text-ewf-hawkbit">User!</span>
                    </h1>

                    <p class="mt-4 max-w-xl text-sm leading-7 text-white/85 sm:text-base">
                        Selamat datang di portal pendaftaran PT Equityworld Futures.
                        Kelola profil, temukan peluang magang dan pekerjaan,
                        serta pantau perkembangan pengajuan Anda melalui satu halaman.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-3">

                        <a href="#lowongan"
                           class="inline-flex items-center justify-center rounded-full bg-ewf-hawkbit px-6 py-3 text-sm font-bold text-ewf-wine-dark transition hover:bg-white">
                            Lihat Peluang
                            <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7 7 7-7 7"/>
                            </svg>
                        </a>

                        <a href="#pengajuan"
                           class="inline-flex items-center justify-center rounded-full border border-white/40 px-6 py-3 text-sm font-bold text-white transition hover:bg-white/10">
                            Pantau Pengajuan
                        </a>

                    </div>
                </div>

                {{-- INFORMASI AKUN --}}
                <div class="w-full rounded-2xl border border-white/20 bg-white/10 p-6 backdrop-blur-md md:max-w-xs">

                    <div class="flex items-center gap-4">

                        <div class="flex h-14 w-14 items-center justify-center rounded-full bg-ewf-hawkbit text-xl font-extrabold text-ewf-wine-dark">
                            U
                        </div>

                        <div>
                            <p class="text-xs text-white/70">Akun Pengguna</p>
                            <h2 class="mt-1 text-lg font-bold">User</h2>
                            <span class="mt-1 inline-flex rounded-full bg-white/15 px-3 py-1 text-[11px] font-semibold text-ewf-hawkbit">
                                Applicant
                            </span>
                        </div>

                    </div>

                    <div class="mt-5 border-t border-white/20 pt-4">

                        <p class="text-xs text-white/70">Status akun</p>

                        <div class="mt-2 flex items-center gap-2 text-sm font-semibold">
                            <span class="h-2 w-2 rounded-full bg-ewf-hawkbit"></span>
                            Aktif
                        </div>

                        <a href="{{ url('/profil') }}"
                           class="mt-5 flex w-full items-center justify-center rounded-xl bg-white/10 px-4 py-3 text-sm font-semibold transition hover:bg-white/20">
                            Kelola Profil
                            <span class="ml-2">→</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- ================================================
         RINGKASAN AKTIVITAS
    ================================================= --}}
    <section class="mx-auto max-w-7xl px-5 pt-10 lg:px-8">

        <div class="mb-6">
            <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                Ringkasan Aktivitas
            </span>

            <h2 class="mt-2 text-2xl font-extrabold text-[#401C20]">
                Aktivitas Pengajuan Anda
            </h2>

            <p class="mt-2 text-sm text-[#786662]">
                Informasi ringkas mengenai proses pendaftaran Anda.
            </p>
        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

            {{-- TOTAL PENGAJUAN --}}
            <div class="rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm">
                <div class="flex items-center justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21]">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 5h6m-7 4h8m-8 4h8m-8 4h5M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                        </svg>
                    </div>

                    <span class="text-xs font-semibold text-[#786662]">Keseluruhan</span>
                </div>

                <p class="mt-5 text-3xl font-extrabold text-[#401C20]">0</p>
                <p class="mt-1 text-sm text-[#786662]">Total Pengajuan</p>
            </div>


            {{-- MENUNGGU VERIFIKASI --}}
            <div class="rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm">
                <div class="flex items-center justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FFF3D5] text-[#A66C13]">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>

                    <span class="text-xs font-semibold text-[#786662]">Pending</span>
                </div>

                <p class="mt-5 text-3xl font-extrabold text-[#401C20]">0</p>
                <p class="mt-1 text-sm text-[#786662]">Menunggu Verifikasi</p>
            </div>


            {{-- PROSES SELEKSI --}}
            <div class="rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm">
                <div class="flex items-center justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#E8F0F9] text-[#42658B]">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>

                    <span class="text-xs font-semibold text-[#786662]">Diproses</span>
                </div>

                <p class="mt-5 text-3xl font-extrabold text-[#401C20]">0</p>
                <p class="mt-1 text-sm text-[#786662]">Dalam Proses Seleksi</p>
            </div>


            {{-- HASIL --}}
            <div class="rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm">
                <div class="flex items-center justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#E7F4E8] text-[#367344]">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>

                    <span class="text-xs font-semibold text-[#786662]">Hasil</span>
                </div>

                <p class="mt-5 text-3xl font-extrabold text-[#401C20]">0</p>
                <p class="mt-1 text-sm text-[#786662]">Pengajuan Selesai</p>
            </div>

        </div>
    </section>


    {{-- ================================================
         MENU LAYANAN PENGGUNA
    ================================================= --}}
    <section class="mx-auto max-w-7xl px-5 py-12 lg:px-8">

        <div class="mb-7">
            <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                Layanan Pengguna
            </span>

            <h2 class="mt-2 text-2xl font-extrabold text-[#401C20]">
                Apa yang Ingin Anda Lakukan?
            </h2>

            <p class="mt-2 text-sm leading-6 text-[#786662]">
                Pilih layanan yang tersedia untuk memulai aktivitas Anda.
            </p>
        </div>


        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            {{-- LOWONGAN --}}
            <a href="#lowongan"
               class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/40 hover:shadow-lg">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zM8 7V5a2 2 0 012-2h4a2 2 0 012 2v2m-4 5v.01"/>
                    </svg>

                </div>

                <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                    Informasi Lowongan
                </h3>

                <p class="mt-2 text-sm leading-6 text-[#786662]">
                    Lihat informasi program magang dan posisi pekerjaan yang sedang tersedia.
                </p>

                <div class="mt-5 flex items-center text-sm font-bold text-[#951A21]">
                    Lihat Lowongan
                    <span class="ml-2 transition group-hover:translate-x-1">→</span>
                </div>

            </a>


            {{-- PENDAFTARAN MAGANG --}}
            <a href="{{ url('/pendaftaran-magang') }}"
               class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/40 hover:shadow-lg">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#FFF3D5] text-[#A66C13] transition group-hover:bg-[#951A21] group-hover:text-white">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v14H4V6a1 1 0 011-1z"/>
                    </svg>

                </div>

                <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                    Pendaftaran Magang
                </h3>

                <p class="mt-2 text-sm leading-6 text-[#786662]">
                    Isi formulir pendaftaran magang dan lengkapi persyaratan yang dibutuhkan.
                </p>

                <div class="mt-5 flex items-center text-sm font-bold text-[#951A21]">
                    Daftar Magang
                    <span class="ml-2 transition group-hover:translate-x-1">→</span>
                </div>

            </a>


            {{-- LAMARAN KERJA --}}
            <a href="{{ url('/lamaran-kerja') }}"
               class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/40 hover:shadow-lg">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m-7 4h14a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v14zM9 4V2h6v2"/>
                    </svg>

                </div>

                <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                    Lamaran Kerja
                </h3>

                <p class="mt-2 text-sm leading-6 text-[#786662]">
                    Ajukan lamaran pekerjaan dengan mengisi data diri, pendidikan, dan pengalaman.
                </p>

                <div class="mt-5 flex items-center text-sm font-bold text-[#951A21]">
                    Lamar Pekerjaan
                    <span class="ml-2 transition group-hover:translate-x-1">→</span>
                </div>

            </a>


            {{-- PROFIL --}}
            <a href="{{ url('/profil') }}"
               class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/40 hover:shadow-lg">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8z"/>
                    </svg>

                </div>

                <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                    Profil Pengguna
                </h3>

                <p class="mt-2 text-sm leading-6 text-[#786662]">
                    Lihat dan perbarui informasi pribadi untuk kebutuhan pendaftaran.
                </p>

                <div class="mt-5 flex items-center text-sm font-bold text-[#951A21]">
                    Kelola Profil
                    <span class="ml-2 transition group-hover:translate-x-1">→</span>
                </div>

            </a>


            {{-- RIWAYAT PENGAJUAN --}}
            <a href="{{ url('/riwayat-pengajuan') }}"
               class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/40 hover:shadow-lg">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#FFF3D5] text-[#A66C13] transition group-hover:bg-[#951A21] group-hover:text-white">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>

                </div>

                <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                    Riwayat Pengajuan
                </h3>

                <p class="mt-2 text-sm leading-6 text-[#786662]">
                    Lihat seluruh riwayat pendaftaran magang dan lamaran pekerjaan.
                </p>

                <div class="mt-5 flex items-center text-sm font-bold text-[#951A21]">
                    Lihat Riwayat
                    <span class="ml-2 transition group-hover:translate-x-1">→</span>
                </div>

            </a>


            {{-- NOTIFIKASI --}}
            <a href="{{ url('/notifikasi') }}"
               class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/40 hover:shadow-lg">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M18 8a6 6 0 00-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9m-8 12a2 2 0 004 0"/>
                    </svg>

                </div>

                <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                    Notifikasi
                </h3>

                <p class="mt-2 text-sm leading-6 text-[#786662]">
                    Dapatkan informasi terbaru mengenai status dan proses seleksi pengajuan.
                </p>

                <div class="mt-5 flex items-center text-sm font-bold text-[#951A21]">
                    Lihat Notifikasi
                    <span class="ml-2 transition group-hover:translate-x-1">→</span>
                </div>

            </a>

        </div>

    </section>


    {{-- ================================================
         STATUS PENGAJUAN
    ================================================= --}}
    <section id="pengajuan" class="border-y border-[#EAD8CB] bg-white">

        <div class="mx-auto max-w-7xl px-5 py-12 lg:px-8">

            <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">

                <div>
                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                        Monitoring
                    </span>

                    <h2 class="mt-2 text-2xl font-extrabold text-[#401C20]">
                        Status Pengajuan Terbaru
                    </h2>

                    <p class="mt-2 text-sm text-[#786662]">
                        Pantau perkembangan pendaftaran yang telah Anda kirimkan.
                    </p>
                </div>

                <a href="{{ url('/riwayat-pengajuan') }}"
                   class="text-sm font-bold text-[#951A21] transition hover:text-ewf-red-poppy">
                    Lihat Semua Riwayat →
                </a>

            </div>


            <div class="mt-7 overflow-hidden rounded-2xl border border-[#EAD8CB]">

                <div class="overflow-x-auto">

                    <table class="w-full min-w-162.5 text-left text-sm">

                        <thead class="bg-[#FFF9F0] text-[#401C20]">
                            <tr>
                                <th class="px-6 py-4 font-bold">Jenis Pengajuan</th>
                                <th class="px-6 py-4 font-bold">Tanggal Pengajuan</th>
                                <th class="px-6 py-4 font-bold">Posisi / Program</th>
                                <th class="px-6 py-4 font-bold">Status</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-[#EAD8CB] bg-white">

                            <tr>
                                <td colspan="4" class="px-6 py-12 text-center">

                                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-[#FBE5D6] text-[#951A21]">

                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m-7 4h14a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v14z"/>
                                        </svg>

                                    </div>

                                    <h3 class="mt-4 font-bold text-[#401C20]">
                                        Belum Ada Pengajuan
                                    </h3>

                                    <p class="mt-2 text-sm text-[#786662]">
                                        Anda belum mengirimkan pendaftaran magang atau lamaran pekerjaan.
                                    </p>

                                    <a href="#lowongan"
                                       class="mt-5 inline-flex rounded-full bg-[#951A21] px-5 py-2.5 text-xs font-bold text-white transition hover:bg-ewf-wine-dark">
                                        Mulai Pendaftaran
                                    </a>

                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================
         INFORMASI LOWONGAN
    ================================================= --}}
    <section id="lowongan" class="mx-auto max-w-7xl px-5 py-12 lg:px-8">

        <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">

            <div>
                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                    Career Opportunities
                </span>

                <h2 class="mt-2 text-2xl font-extrabold text-[#401C20]">
                    Peluang Bergabung Bersama Kami
                </h2>

                <p class="mt-2 max-w-2xl text-sm leading-7 text-[#786662]">
                    Temukan kesempatan magang dan pekerjaan yang sesuai
                    dengan minat serta kualifikasi Anda.
                </p>
            </div>

            <a href="{{ url('/karier') }}"
               class="text-sm font-bold text-[#951A21] transition hover:text-ewf-red-poppy">
                Lihat Semua Peluang →
            </a>

        </div>


        <div class="mt-7 grid gap-6 md:grid-cols-2">

            {{-- PROGRAM MAGANG --}}
            <div class="relative overflow-hidden rounded-2xl border border-[#EAD8CB] bg-white p-7 shadow-sm">

                <div class="absolute -right-10 -top-10 h-36 w-36 rounded-full bg-ewf-hawkbit/20"></div>

                <div class="relative">

                    <span class="inline-flex rounded-full bg-[#FFF3D5] px-3 py-1.5 text-xs font-bold text-[#94610F]">
                        Program Magang
                    </span>

                    <h3 class="mt-5 text-xl font-extrabold text-[#401C20]">
                        Internship Program
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-[#786662]">
                        Kesempatan bagi siswa dan mahasiswa untuk memperoleh
                        pengalaman kerja serta mengenal lingkungan profesional.
                    </p>

                    <a href="{{ url('/pendaftaran-magang') }}"
                       class="mt-6 inline-flex items-center justify-center rounded-full bg-[#951A21] px-6 py-3 text-sm font-bold text-white transition hover:bg-ewf-wine-dark">
                        Daftar Program Magang →
                    </a>

                </div>

            </div>


            {{-- LOWONGAN KERJA --}}
            <div class="relative overflow-hidden rounded-2xl border border-[#EAD8CB] bg-white p-7 shadow-sm">

                <div class="absolute -right-10 -top-10 h-36 w-36 rounded-full bg-[#FFA368]/20"></div>

                <div class="relative">

                    <span class="inline-flex rounded-full bg-[#FBE5D6] px-3 py-1.5 text-xs font-bold text-[#951A21]">
                        Rekrutmen
                    </span>

                    <h3 class="mt-5 text-xl font-extrabold text-[#401C20]">
                        Career Opportunities
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-[#786662]">
                        Jelajahi kesempatan berkarier dan temukan posisi
                        pekerjaan yang sesuai dengan kemampuan Anda.
                    </p>

                    <a href="{{ url('/karier') }}"
                       class="mt-6 inline-flex items-center justify-center rounded-full bg-[#951A21] px-6 py-3 text-sm font-bold text-white transition hover:bg-ewf-wine-dark">
                        Lihat Lowongan Kerja →
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================
         INFORMASI DOKUMEN
    ================================================= --}}
    <section class="border-y border-[#EAD8CB] bg-white">

        <div class="mx-auto max-w-7xl px-5 py-12 lg:px-8">

            <div class="grid gap-8 lg:grid-cols-2 lg:items-center">

                <div>

                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                        Persiapan Pengajuan
                    </span>

                    <h2 class="mt-2 text-2xl font-extrabold text-[#401C20]">
                        Persiapkan Dokumen Persyaratan
                    </h2>

                    <p class="mt-3 text-sm leading-7 text-[#786662]">
                        Pastikan seluruh dokumen yang diperlukan telah disiapkan
                        sebelum mengirimkan formulir pendaftaran atau lamaran kerja.
                    </p>

                    <a href="{{ url('/pendaftaran-magang') }}"
                       class="mt-6 inline-flex items-center rounded-full bg-[#951A21] px-6 py-3 text-sm font-bold text-white transition hover:bg-ewf-wine-dark">
                        Mulai Pengajuan →
                    </a>

                </div>


                <div class="grid gap-3 sm:grid-cols-2">

                    @foreach ([
                        ['CV / Daftar Riwayat Hidup', 'Dokumen identitas dan pengalaman'],
                        ['Surat Pengantar', 'Surat pengantar dari institusi jika diperlukan'],
                        ['Dokumen Pendidikan', 'Informasi sekolah atau perguruan tinggi'],
                        ['Portofolio', 'Dokumen pendukung kemampuan jika diperlukan'],
                    ] as $document)

                        <div class="flex items-start gap-3 rounded-xl border border-[#EAD8CB] bg-[#FFF9F0] p-4">

                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-[#FBE5D6] text-[#951A21]">

                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 3h7l5 5v13H7a2 2 0 01-2-2V5a2 2 0 012-2zm7 0v5h5M9 13h6m-6 4h6"/>
                                </svg>

                            </div>

                            <div>
                                <h3 class="text-sm font-bold text-[#401C20]">
                                    {{ $document[0] }}
                                </h3>

                                <p class="mt-1 text-xs leading-5 text-[#786662]">
                                    {{ $document[1] }}
                                </p>
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================
         FOOTER DASHBOARD
    ================================================= --}}
    <section class="bg-ewf-wine-dark">

        <div class="mx-auto flex max-w-7xl flex-col justify-between gap-5 px-5 py-8 sm:flex-row sm:items-center lg:px-8">

            <div>
                <h3 class="font-bold text-white">
                    PT Equityworld Futures
                </h3>

                <p class="mt-1 text-xs text-white/70">
                    Applicant Portal - Sistem Informasi Pendaftaran
                </p>
            </div>

            <div class="flex flex-wrap gap-5 text-sm font-medium text-white/80">

                <a href="{{ url('/') }}" class="transition hover:text-ewf-hawkbit">
                    Beranda
                </a>

                <a href="{{ url('/karier') }}" class="transition hover:text-ewf-hawkbit">
                    Karier
                </a>

                <a href="{{ url('/profil-perusahaan') }}" class="transition hover:text-ewf-hawkbit">
                    Tentang Perusahaan
                </a>

                <a href="{{ route('logout') }}" class="transition hover:text-ewf-hawkbit">
                    Keluar
                </a>

            </div>

        </div>

    </section>

</main>

@endsection
