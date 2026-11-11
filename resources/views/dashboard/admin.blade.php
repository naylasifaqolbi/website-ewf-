
@extends('layouts.public')

@section('title', 'Dashboard Admin | PT Equityworld Futures')

@section('content')

<main class="min-h-screen bg-[#FFF9F0]">

    {{-- =====================================================
         HEADER DASHBOARD ADMIN
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
                            Administrator Area
                        </span>

                    </div>

                    <h1 class="mt-5 text-3xl font-extrabold tracking-tight sm:text-4xl lg:text-5xl">
                        Dashboard Admin
                    </h1>

                    <p class="mt-4 max-w-2xl text-sm leading-7 text-white/80 sm:text-base">
                        Pusat pengelolaan konfigurasi akses, administrasi akun,
                        keamanan, dan pemantauan aktivitas sistem informasi
                        PT Equityworld Futures.
                    </p>

                </div>

                <div class="flex flex-wrap items-center gap-3">

                    <div class="rounded-xl border border-white/20 bg-white/10 px-5 py-3">

                        <p class="text-xs text-white/70">
                            Akses pengguna
                        </p>

                        <p class="mt-1 font-bold text-[#FFD66E]">
                            Administrator
                        </p>

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


        {{-- SAMBUTAN ADMIN --}}
        <div class="relative overflow-hidden rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm sm:p-8">

            <div class="absolute right-0 top-0 h-32 w-32 rounded-bl-full bg-[#FBE5D6]/70"></div>

            <div class="relative flex flex-col justify-between gap-5 md:flex-row md:items-center">

                <div>

                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                        Administrator
                    </span>

                    <h2 class="mt-3 text-2xl font-extrabold text-[#401C20] sm:text-3xl">
                        Selamat Datang, Admin!
                    </h2>

                    <p class="mt-3 max-w-2xl text-sm leading-7 text-[#786662]">
                        Anda berhasil masuk ke Dashboard Admin.
                        Melalui halaman ini, Anda dapat mengelola akun pengguna,
                        mengatur role dan hak akses, memantau aktivitas sistem,
                        serta memastikan keamanan akses pengguna.
                    </p>

                </div>

                <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-[#FBE5D6] text-[#951A21]">

                    <svg class="h-9 w-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-7a2 2 0 00-2-2H6a2 2 0 00-2 2v7a2 2 0 002 2zm2-11V7a4 4 0 118 0v3"/>
                    </svg>

                </div>

            </div>

            <div class="relative mt-6 flex flex-wrap gap-3">

                <span class="inline-flex items-center rounded-full bg-[#FBE5D6] px-4 py-2 text-xs font-bold text-[#951A21]">
                    Role: Admin
                </span>

                <span class="inline-flex items-center rounded-full bg-[#FFF4D8] px-4 py-2 text-xs font-bold text-[#8A5B13]">
                    Administrator Sistem
                </span>

            </div>

        </div>


        {{-- =====================================================
             RINGKASAN KONDISI SISTEM
        ====================================================== --}}
        <div class="mt-10">

            <div class="flex flex-col justify-between gap-2 sm:flex-row sm:items-end">

                <div>

                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                        Ringkasan Sistem
                    </span>

                    <h2 class="mt-2 text-2xl font-extrabold text-[#401C20]">
                        Informasi Administrasi
                    </h2>

                    <p class="mt-2 text-sm text-[#786662]">
                        Gambaran umum akun pengguna dan kondisi operasional sistem.
                    </p>

                </div>

                <span class="text-xs text-[#9A8279]">
                    Data contoh / sementara
                </span>

            </div>


            <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">


                {{-- TOTAL PENGGUNA --}}
                <article class="rounded-2xl border border-[#EAD8CB] bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21]">

                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8zm8 10v-2a4 4 0 00-3-3.87m0-11.13a4 4 0 010 7.75"/>
                            </svg>

                        </div>

                        <span class="rounded-full bg-[#FBE5D6] px-3 py-1 text-xs font-bold text-[#951A21]">
                            Pengguna
                        </span>

                    </div>

                    <p class="mt-5 text-sm font-medium text-[#786662]">
                        Total Pengguna
                    </p>

                    <h3 class="mt-1 text-3xl font-extrabold text-[#401C20]">
                        48
                    </h3>

                    <p class="mt-2 text-xs text-[#9A8279]">
                        Seluruh akun terdaftar
                    </p>

                </article>


                {{-- AKUN AKTIF --}}
                <article class="rounded-2xl border border-[#EAD8CB] bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#E8F4EA] text-[#3D8050]">

                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M9 12l2 2 4-4m5-3v12a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2z"/>
                            </svg>

                        </div>

                        <span class="rounded-full bg-[#E8F4EA] px-3 py-1 text-xs font-bold text-[#3D8050]">
                            Aktif
                        </span>

                    </div>

                    <p class="mt-5 text-sm font-medium text-[#786662]">
                        Akun Aktif
                    </p>

                    <h3 class="mt-1 text-3xl font-extrabold text-[#401C20]">
                        43
                    </h3>

                    <p class="mt-2 text-xs text-[#9A8279]">
                        Akun dapat mengakses sistem
                    </p>

                </article>


                {{-- ROLE PENGGUNA --}}
                <article class="rounded-2xl border border-[#EAD8CB] bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FFF4D8] text-[#A56B16]">

                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M17 20h5v-2a4 4 0 00-5.5-3.7M9 20H2v-2a4 4 0 017-2.65M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a3 3 0 10-6 0 3 3 0 006 0z"/>
                            </svg>

                        </div>

                        <span class="rounded-full bg-[#FFF4D8] px-3 py-1 text-xs font-bold text-[#8A5B13]">
                            Role
                        </span>

                    </div>

                    <p class="mt-5 text-sm font-medium text-[#786662]">
                        Kategori Role
                    </p>

                    <h3 class="mt-1 text-3xl font-extrabold text-[#401C20]">
                        05
                    </h3>

                    <p class="mt-2 text-xs text-[#9A8279]">
                        Kelompok hak akses pengguna
                    </p>

                </article>


                {{-- AKUN NONAKTIF --}}
                <article class="rounded-2xl border border-[#EAD8CB] bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FCE8E8] text-[#CF3021]">

                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M12 9v4m0 4h.01M10.3 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.7 3.86a2 2 0 00-3.4 0z"/>
                            </svg>

                        </div>

                        <span class="rounded-full bg-[#FCE8E8] px-3 py-1 text-xs font-bold text-[#CF3021]">
                            Nonaktif
                        </span>

                    </div>

                    <p class="mt-5 text-sm font-medium text-[#786662]">
                        Akun Nonaktif
                    </p>

                    <h3 class="mt-1 text-3xl font-extrabold text-[#401C20]">
                        05
                    </h3>

                    <p class="mt-2 text-xs text-[#9A8279]">
                        Akun yang dinonaktifkan
                    </p>

                </article>

            </div>

        </div>


        {{-- =====================================================
             DISTRIBUSI ROLE
        ====================================================== --}}
        <div class="mt-12">

            <div>

                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                    Pengelompokan Akun
                </span>

                <h2 class="mt-2 text-2xl font-extrabold text-[#401C20]">
                    Distribusi Role Pengguna
                </h2>

                <p class="mt-2 text-sm text-[#786662]">
                    Gambaran pembagian akun berdasarkan kategori peran dalam sistem.
                </p>

            </div>


            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">


                <div class="rounded-xl border border-[#EAD8CB] bg-white p-5">

                    <div class="h-2 w-10 rounded-full bg-[#951A21]"></div>

                    <p class="mt-4 text-sm text-[#786662]">
                        Admin
                    </p>

                    <h3 class="mt-1 text-2xl font-extrabold text-[#401C20]">
                        03
                    </h3>

                    <p class="mt-1 text-xs text-[#9A8279]">
                        Administrator sistem
                    </p>

                </div>


                <div class="rounded-xl border border-[#EAD8CB] bg-white p-5">

                    <div class="h-2 w-10 rounded-full bg-[#CF3021]"></div>

                    <p class="mt-4 text-sm text-[#786662]">
                        HR / Recruitment
                    </p>

                    <h3 class="mt-1 text-2xl font-extrabold text-[#401C20]">
                        05
                    </h3>

                    <p class="mt-1 text-xs text-[#9A8279]">
                        Pengelola rekrutmen
                    </p>

                </div>


                <div class="rounded-xl border border-[#EAD8CB] bg-white p-5">

                    <div class="h-2 w-10 rounded-full bg-[#FFA368]"></div>

                    <p class="mt-4 text-sm text-[#786662]">
                        Staff
                    </p>

                    <h3 class="mt-1 text-2xl font-extrabold text-[#401C20]">
                        08
                    </h3>

                    <p class="mt-1 text-xs text-[#9A8279]">
                        Pengelola operasional
                    </p>

                </div>


                <div class="rounded-xl border border-[#EAD8CB] bg-white p-5">

                    <div class="h-2 w-10 rounded-full bg-[#EFBB55]"></div>

                    <p class="mt-4 text-sm text-[#786662]">
                        Management / Executive
                    </p>

                    <h3 class="mt-1 text-2xl font-extrabold text-[#401C20]">
                        02
                    </h3>

                    <p class="mt-1 text-xs text-[#9A8279]">
                        Pemantauan kinerja
                    </p>

                </div>


                <div class="rounded-xl border border-[#EAD8CB] bg-white p-5">

                    <div class="h-2 w-10 rounded-full bg-[#B8A6A0]"></div>

                    <p class="mt-4 text-sm text-[#786662]">
                        Applicant / User
                    </p>

                    <h3 class="mt-1 text-2xl font-extrabold text-[#401C20]">
                        30
                    </h3>

                    <p class="mt-1 text-xs text-[#9A8279]">
                        Pengguna pendaftar
                    </p>

                </div>

            </div>

        </div>


        {{-- =====================================================
             MENU ADMIN
        ====================================================== --}}
        <div class="mt-12">

            <div>

                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                    Menu Utama
                </span>

                <h2 class="mt-2 text-2xl font-extrabold text-[#401C20]">
                    Pengelolaan Sistem
                </h2>

                <p class="mt-2 text-sm text-[#786662]">
                    Kelola akun, konfigurasi akses, keamanan, dan pemantauan sistem perusahaan.
                </p>

            </div>


            <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">


                {{-- USER MANAGEMENT --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8zm8 10v-2a4 4 0 00-3-3.87m0-11.13a4 4 0 010 7.75"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        User Management
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Membuat, melihat, memperbarui, menonaktifkan,
                        dan mengelola akun pengguna sistem.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">

                        <span class="text-xs font-semibold text-[#9A8279]">
                            Manajemen Pengguna
                        </span>

                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- ROLE MANAGEMENT --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M17 20h5v-2a4 4 0 00-5.5-3.7M9 20H2v-2a4 4 0 017-2.65M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a3 3 0 10-6 0 3 3 0 006 0z"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Role Management
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Mengelola kategori peran Admin, Staff, HR,
                        Management/Executive, dan Applicant/User.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">

                        <span class="text-xs font-semibold text-[#9A8279]">
                            Pengaturan Role
                        </span>

                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- PERMISSION MANAGEMENT --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-7a2 2 0 00-2-2H6a2 2 0 00-2 2v7a2 2 0 002 2zm2-11V7a4 4 0 118 0v3"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Permission Management
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Mengatur hak akses setiap role terhadap
                        menu, data, dan tindakan di dalam sistem.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">

                        <span class="text-xs font-semibold text-[#9A8279]">
                            Pengaturan Hak Akses
                        </span>

                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- MONITORING DATA OPERASIONAL --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M3 3v18h18M7 14l4-4 4 4 5-7"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Monitoring Data Operasional
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Memantau data dan aktivitas operasional
                        sesuai kewenangan administrator sistem.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">

                        <span class="text-xs font-semibold text-[#9A8279]">
                            Monitoring Operasional
                        </span>

                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- AUDIT LOG --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2zM14 3v5h5"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Audit Log
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Menampilkan catatan perubahan data,
                        pengelolaan akun, dan tindakan administratif.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">

                        <span class="text-xs font-semibold text-[#9A8279]">
                            Riwayat Aktivitas Sistem
                        </span>

                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- LOGIN ACTIVITY --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4m-5-4l4-5-4-5m4 5H3"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Login Activity
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Memantau riwayat login pengguna, waktu masuk,
                        dan informasi aktivitas akses yang tersedia.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">

                        <span class="text-xs font-semibold text-[#9A8279]">
                            Riwayat Login
                        </span>

                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- SECURITY MANAGEMENT --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9 12l2 2 4-4"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Security Management
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Mengelola keamanan akun, penonaktifan akun,
                        dan penanganan masalah akses pengguna.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">

                        <span class="text-xs font-semibold text-[#9A8279]">
                            Keamanan Sistem
                        </span>

                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- EXECUTIVE DASHBOARD --}}
                <article class="group rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#951A21]/30 hover:shadow-lg">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FFF4D8] text-[#A56B16] transition group-hover:bg-[#EFBB55] group-hover:text-[#401C20]">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M3 3v18h18M7 14l4-4 4 4 5-7"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-[#401C20]">
                        Executive Dashboard
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#786662]">
                        Mengakses ringkasan indikator dan informasi
                        kinerja perusahaan untuk keperluan pemantauan.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#F1E5DE] pt-4">

                        <span class="text-xs font-semibold text-[#9A8279]">
                            Monitoring Kinerja
                        </span>

                        <span class="text-lg font-bold text-[#951A21] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>

            </div>

        </div>


        {{-- =====================================================
             AKTIVITAS SISTEM DAN INFORMASI KEAMANAN
        ====================================================== --}}
        <div class="mt-12 grid gap-6 lg:grid-cols-3">


            {{-- AKTIVITAS TERBARU --}}
            <div class="overflow-hidden rounded-2xl border border-[#EAD8CB] bg-white shadow-sm lg:col-span-2">

                <div class="border-b border-[#F1E5DE] p-6">

                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#951A21]">
                        System Activity
                    </span>

                    <h2 class="mt-2 text-xl font-extrabold text-[#401C20]">
                        Aktivitas Sistem Terbaru
                    </h2>

                    <p class="mt-2 text-sm text-[#786662]">
                        Contoh catatan aktivitas pengguna dalam sistem.
                    </p>

                </div>


                <div class="overflow-x-auto">

                    <table class="w-full min-w-[650px] text-left text-sm">

                        <thead class="bg-[#FFF9F0] text-xs uppercase tracking-wider text-[#786662]">

                            <tr>

                                <th class="px-6 py-4 font-bold">
                                    Pengguna
                                </th>

                                <th class="px-6 py-4 font-bold">
                                    Aktivitas
                                </th>

                                <th class="px-6 py-4 font-bold">
                                    Waktu
                                </th>

                                <th class="px-6 py-4 font-bold">
                                    Status
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-[#F1E5DE]">


                            <tr class="transition hover:bg-[#FFF9F0]">

                                <td class="px-6 py-4">

                                    <p class="font-semibold text-[#401C20]">
                                        Admin Utama
                                    </p>

                                    <p class="mt-1 text-xs text-[#9A8279]">
                                        Administrator
                                    </p>

                                </td>

                                <td class="px-6 py-4 text-[#786662]">
                                    Login ke sistem
                                </td>

                                <td class="px-6 py-4 text-[#786662]">
                                    10 Nov 2026, 08.00
                                </td>

                                <td class="px-6 py-4">

                                    <span class="rounded-full bg-[#E8F4EA] px-3 py-1 text-xs font-bold text-[#3D8050]">
                                        Berhasil
                                    </span>

                                </td>

                            </tr>


                            <tr class="transition hover:bg-[#FFF9F0]">

                                <td class="px-6 py-4">

                                    <p class="font-semibold text-[#401C20]">
                                        HR Recruitment
                                    </p>

                                    <p class="mt-1 text-xs text-[#9A8279]">
                                        HR
                                    </p>

                                </td>

                                <td class="px-6 py-4 text-[#786662]">
                                    Mengakses data pelamar
                                </td>

                                <td class="px-6 py-4 text-[#786662]">
                                    10 Nov 2026, 08.15
                                </td>

                                <td class="px-6 py-4">

                                    <span class="rounded-full bg-[#E8F4EA] px-3 py-1 text-xs font-bold text-[#3D8050]">
                                        Berhasil
                                    </span>

                                </td>

                            </tr>


                            <tr class="transition hover:bg-[#FFF9F0]">

                                <td class="px-6 py-4">

                                    <p class="font-semibold text-[#401C20]">
                                        Staff Operasional
                                    </p>

                                    <p class="mt-1 text-xs text-[#9A8279]">
                                        Staff
                                    </p>

                                </td>

                                <td class="px-6 py-4 text-[#786662]">
                                    Memperbarui data operasional
                                </td>

                                <td class="px-6 py-4 text-[#786662]">
                                    10 Nov 2026, 08.30
                                </td>

                                <td class="px-6 py-4">

                                    <span class="rounded-full bg-[#E8F4EA] px-3 py-1 text-xs font-bold text-[#3D8050]">
                                        Berhasil
                                    </span>

                                </td>

                            </tr>


                            <tr class="transition hover:bg-[#FFF9F0]">

                                <td class="px-6 py-4">

                                    <p class="font-semibold text-[#401C20]">
                                        Applicant User
                                    </p>

                                    <p class="mt-1 text-xs text-[#9A8279]">
                                        Applicant
                                    </p>

                                </td>

                                <td class="px-6 py-4 text-[#786662]">
                                    Percobaan login
                                </td>

                                <td class="px-6 py-4 text-[#786662]">
                                    10 Nov 2026, 08.45
                                </td>

                                <td class="px-6 py-4">

                                    <span class="rounded-full bg-[#FFF4D8] px-3 py-1 text-xs font-bold text-[#8A5B13]">
                                        Simulasi
                                    </span>

                                </td>

                            </tr>


                        </tbody>

                    </table>

                </div>


                <div class="border-t border-[#F1E5DE] px-6 py-4">

                    <p class="text-xs text-[#9A8279]">
                        Aktivitas di atas merupakan data contoh dan belum berasal dari audit log sebenarnya.
                    </p>

                </div>

            </div>


            {{-- INFORMASI KEAMANAN --}}
            <aside class="rounded-2xl border border-[#EAD8CB] bg-white p-6 shadow-sm">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21]">

                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M9 12l2 2 4-4"/>
                    </svg>

                </div>


                <h3 class="mt-5 text-lg font-extrabold text-[#401C20]">
                    Informasi Keamanan
                </h3>

                <p class="mt-2 text-sm leading-6 text-[#786662]">
                    Perhatikan pengelolaan akses dan aktivitas akun
                    untuk menjaga keamanan sistem informasi.
                </p>


                <div class="mt-6 space-y-4">


                    <div class="flex gap-3">

                        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#951A21]"></span>

                        <p class="text-sm leading-6 text-[#786662]">
                            Pastikan setiap pengguna memiliki role yang sesuai.
                        </p>

                    </div>


                    <div class="flex gap-3">

                        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#FFA368]"></span>

                        <p class="text-sm leading-6 text-[#786662]">
                            Periksa aktivitas login dan perubahan data pengguna.
                        </p>

                    </div>


                    <div class="flex gap-3">

                        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#EFBB55]"></span>

                        <p class="text-sm leading-6 text-[#786662]">
                            Nonaktifkan akun yang tidak lagi memiliki kewenangan akses.
                        </p>

                    </div>


                    <div class="flex gap-3">

                        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#CF3021]"></span>

                        <p class="text-sm leading-6 text-[#786662]">
                            Tinjau kembali permission setiap kategori role.
                        </p>

                    </div>

                </div>

            </aside>

        </div>


        {{-- =====================================================
             AKSES EXECUTIVE DASHBOARD
        ====================================================== --}}
        <div class="mt-10 overflow-hidden rounded-2xl bg-gradient-to-r from-[#6D1720] via-[#951A21] to-[#CF3021] p-6 text-white shadow-sm sm:p-8">

            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-center">

                <div class="max-w-2xl">

                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#FFD66E]">
                        Akses Pemantauan
                    </span>

                    <h2 class="mt-3 text-2xl font-extrabold">
                        Executive Dashboard
                    </h2>

                    <p class="mt-3 text-sm leading-7 text-white/80">
                        Akses ringkasan indikator dan informasi kinerja perusahaan
                        untuk membantu pemantauan sistem dan operasional.
                        Akses ini disediakan bagi Admin sesuai kewenangan yang diberikan.
                    </p>

                </div>


                <div class="shrink-0">

                    <a href="#"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#FFD66E] px-6 py-3 text-sm font-bold text-[#6D1720] transition hover:bg-white">

                        Lihat Executive Dashboard

                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 17L17 7M7 7h10v10"/>
                        </svg>

                    </a>

                </div>

            </div>

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
