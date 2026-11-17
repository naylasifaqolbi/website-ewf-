
@extends('layouts.public')

@section('title', 'Dashboard Admin | PT Equityworld Futures')

@section('content')

<main class="min-h-screen bg-linear-to-b from-white via-white to-[#D5B893]/10 font-['DM_Sans']">

    {{-- =====================================================
         HEADER DASHBOARD ADMIN
    ====================================================== --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        {{-- DEKORASI HERO --}}
        <div class="pointer-events-none absolute -right-20 -top-24 h-80 w-80 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-5 -top-10 h-56 w-56 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-32 left-1/3 h-72 w-72 rounded-full bg-[#D5B893]/10 blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-0 right-1/4 h-px w-64 bg-linear-to-r from-transparent via-[#D5B893]/50 to-transparent"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-10 lg:px-8 lg:py-16">

            <div class="flex flex-col justify-between gap-8 sm:flex-row sm:items-center">

                <div>

                    <div class="inline-flex items-center gap-2 rounded-full border border-[#D5B893]/30 bg-white/10 px-4 py-2 backdrop-blur-sm">

                        <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>

                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#D5B893]">
                            Administrator Area
                        </span>

                    </div>

                    <h1 class="mt-5 font-['Manrope'] text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">
                        Dashboard Admin
                    </h1>

                    <p class="mt-4 max-w-2xl text-sm leading-7 text-white/80 sm:text-base">
                        Pusat pengelolaan konfigurasi akses, administrasi akun,
                        keamanan, dan pemantauan aktivitas sistem informasi
                        PT Equityworld Futures.
                    </p>

                </div>

                <div class="flex flex-wrap items-center gap-3">

                    <div class="rounded-xl border border-white/20 bg-white/10 px-5 py-3 backdrop-blur-sm">

                        <p class="text-xs text-white/65">
                            Akses pengguna
                        </p>

                        <p class="mt-1 font-bold text-[#D5B893]">
                            Administrator
                        </p>

                    </div>

                    <a href="{{ route('logout') }}"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#D5B893] px-6 py-3 text-sm font-bold text-[#25344F] shadow-md transition duration-300 hover:bg-white hover:shadow-lg">

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
        <div class="relative overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm sm:p-8">

            <div class="pointer-events-none absolute -right-5 -top-8 h-40 w-40 rounded-bl-full bg-[#D5B893]/15"></div>
            <div class="pointer-events-none absolute right-24 top-0 h-24 w-24 rounded-full border border-[#D5B893]/20"></div>

            <div class="relative flex flex-col justify-between gap-5 md:flex-row md:items-center">

                <div>

                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#632024]">
                        Administrator
                    </span>

                    <h2 class="mt-3 font-['Manrope'] text-2xl font-extrabold text-[#25344F] sm:text-3xl">
                        Selamat Datang, Admin!
                    </h2>

                    <p class="mt-3 max-w-2xl text-sm leading-7 text-[#617891]">
                        Anda berhasil masuk ke Dashboard Admin.
                        Melalui halaman ini, Anda dapat mengelola akun pengguna,
                        mengatur role dan hak akses, memantau aktivitas sistem,
                        serta memastikan keamanan akses pengguna.
                    </p>

                </div>

                <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl border border-[#D5B893]/40 bg-[#D5B893]/20 text-[#632024]">

                    <svg class="h-9 w-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-7a2 2 0 00-2-2H6a2 2 0 00-2 2v7a2 2 0 002 2zm2-11V7a4 4 0 118 0v3"/>
                    </svg>

                </div>

            </div>

            <div class="relative mt-6 flex flex-wrap gap-3">

                <span class="inline-flex items-center rounded-full border border-[#D5B893]/50 bg-[#D5B893]/20 px-4 py-2 text-xs font-bold text-[#632024]">
                    Role: Admin
                </span>

                <span class="inline-flex items-center rounded-full border border-[#617891]/20 bg-[#617891]/10 px-4 py-2 text-xs font-bold text-[#25344F]">
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

                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#632024]">
                        Ringkasan Sistem
                    </span>

                    <h2 class="mt-2 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                        Informasi Administrasi
                    </h2>

                    <p class="mt-2 text-sm text-[#617891]">
                        Gambaran umum akun pengguna dan kondisi operasional sistem.
                    </p>

                </div>

                <span class="text-xs text-[#617891]">
                    Data contoh / sementara
                </span>

            </div>


            <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">


                {{-- TOTAL PENGGUNA --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-lg">

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/20 text-[#632024] transition duration-300 group-hover:bg-[#632024] group-hover:text-white">

                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8zm8 10v-2a4 4 0 00-3-3.87m0-11.13a4 4 0 010 7.75"/>
                            </svg>

                        </div>

                        <span class="rounded-full bg-[#D5B893]/20 px-3 py-1 text-xs font-bold text-[#632024]">
                            Pengguna
                        </span>

                    </div>

                    <p class="mt-5 text-sm font-medium text-[#617891]">
                        Total Pengguna
                    </p>

                    <h3 class="mt-1 font-['Manrope'] text-3xl font-extrabold text-[#25344F]">
                        48
                    </h3>

                    <p class="mt-2 text-xs text-[#617891]">
                        Seluruh akun terdaftar
                    </p>

                </article>


                {{-- AKUN AKTIF --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-lg">

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#617891]/10 text-[#25344F] transition duration-300 group-hover:bg-[#25344F] group-hover:text-white">

                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M9 12l2 2 4-4m5-3v12a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2z"/>
                            </svg>

                        </div>

                        <span class="rounded-full bg-[#617891]/10 px-3 py-1 text-xs font-bold text-[#25344F]">
                            Aktif
                        </span>

                    </div>

                    <p class="mt-5 text-sm font-medium text-[#617891]">
                        Akun Aktif
                    </p>

                    <h3 class="mt-1 font-['Manrope'] text-3xl font-extrabold text-[#25344F]">
                        43
                    </h3>

                    <p class="mt-2 text-xs text-[#617891]">
                        Akun dapat mengakses sistem
                    </p>

                </article>


                {{-- ROLE PENGGUNA --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-lg">

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/25 text-[#6F4D38] transition duration-300 group-hover:bg-[#6F4D38] group-hover:text-white">

                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M17 20h5v-2a4 4 0 00-5.5-3.7M9 20H2v-2a4 4 0 017-2.65M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a3 3 0 10-6 0 3 3 0 006 0z"/>
                            </svg>

                        </div>

                        <span class="rounded-full bg-[#D5B893]/25 px-3 py-1 text-xs font-bold text-[#6F4D38]">
                            Role
                        </span>

                    </div>

                    <p class="mt-5 text-sm font-medium text-[#617891]">
                        Kategori Role
                    </p>

                    <h3 class="mt-1 font-['Manrope'] text-3xl font-extrabold text-[#25344F]">
                        05
                    </h3>

                    <p class="mt-2 text-xs text-[#617891]">
                        Kelompok hak akses pengguna
                    </p>

                </article>


                {{-- AKUN NONAKTIF --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-lg">

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#632024]/10 text-[#632024] transition duration-300 group-hover:bg-[#632024] group-hover:text-white">

                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M12 9v4m0 4h.01M10.3 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.7 3.86a2 2 0 00-3.4 0z"/>
                            </svg>

                        </div>

                        <span class="rounded-full bg-[#632024]/10 px-3 py-1 text-xs font-bold text-[#632024]">
                            Nonaktif
                        </span>

                    </div>

                    <p class="mt-5 text-sm font-medium text-[#617891]">
                        Akun Nonaktif
                    </p>

                    <h3 class="mt-1 font-['Manrope'] text-3xl font-extrabold text-[#25344F]">
                        05
                    </h3>

                    <p class="mt-2 text-xs text-[#617891]">
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

                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#632024]">
                    Pengelompokan Akun
                </span>

                <h2 class="mt-2 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                    Distribusi Role Pengguna
                </h2>

                <p class="mt-2 text-sm text-[#617891]">
                    Gambaran pembagian akun berdasarkan kategori peran dalam sistem.
                </p>

            </div>


            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">


                <div class="rounded-xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="h-1.5 w-10 rounded-full bg-[#632024]"></div>

                    <p class="mt-4 text-sm text-[#617891]">
                        Admin
                    </p>

                    <h3 class="mt-1 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                        03
                    </h3>

                    <p class="mt-1 text-xs text-[#617891]">
                        Administrator sistem
                    </p>

                </div>


                <div class="rounded-xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="h-1.5 w-10 rounded-full bg-[#25344F]"></div>

                    <p class="mt-4 text-sm text-[#617891]">
                        HR / Recruitment
                    </p>

                    <h3 class="mt-1 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                        05
                    </h3>

                    <p class="mt-1 text-xs text-[#617891]">
                        Pengelola rekrutmen
                    </p>

                </div>


                <div class="rounded-xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="h-1.5 w-10 rounded-full bg-[#6F4D38]"></div>

                    <p class="mt-4 text-sm text-[#617891]">
                        Staff
                    </p>

                    <h3 class="mt-1 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                        08
                    </h3>

                    <p class="mt-1 text-xs text-[#617891]">
                        Pengelola operasional
                    </p>

                </div>


                <div class="rounded-xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="h-1.5 w-10 rounded-full bg-[#D5B893]"></div>

                    <p class="mt-4 text-sm text-[#617891]">
                        Management / Executive
                    </p>

                    <h3 class="mt-1 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                        02
                    </h3>

                    <p class="mt-1 text-xs text-[#617891]">
                        Pemantauan kinerja
                    </p>

                </div>


                <div class="rounded-xl border border-[#D5B893]/50 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="h-1.5 w-10 rounded-full bg-[#617891]"></div>

                    <p class="mt-4 text-sm text-[#617891]">
                        Applicant / User
                    </p>

                    <h3 class="mt-1 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                        30
                    </h3>

                    <p class="mt-1 text-xs text-[#617891]">
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

                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#632024]">
                    Menu Utama
                </span>

                <h2 class="mt-2 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                    Pengelolaan Sistem
                </h2>

                <p class="mt-2 text-sm text-[#617891]">
                    Kelola akun, konfigurasi akses, keamanan, dan pemantauan sistem perusahaan.
                </p>

            </div>


            <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">


                {{-- USER MANAGEMENT --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/20 text-[#632024] transition duration-300 group-hover:bg-[#632024] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8zm8 10v-2a4 4 0 00-3-3.87m0-11.13a4 4 0 010 7.75"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">
                        User Management
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Membuat, melihat, memperbarui, menonaktifkan,
                        dan mengelola akun pengguna sistem.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">

                        <span class="text-xs font-semibold text-[#6F4D38]">
                            Manajemen Pengguna
                        </span>

                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- ROLE MANAGEMENT --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/20 text-[#632024] transition duration-300 group-hover:bg-[#632024] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M17 20h5v-2a4 4 0 00-5.5-3.7M9 20H2v-2a4 4 0 017-2.65M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a3 3 0 10-6 0 3 3 0 006 0z"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">
                        Role Management
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Mengelola kategori peran Admin, Staff, HR,
                        Management/Executive, dan Applicant/User.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">

                        <span class="text-xs font-semibold text-[#6F4D38]">
                            Pengaturan Role
                        </span>

                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- PERMISSION MANAGEMENT --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/20 text-[#632024] transition duration-300 group-hover:bg-[#632024] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-7a2 2 0 00-2-2H6a2 2 0 00-2 2v7a2 2 0 002 2zm2-11V7a4 4 0 118 0v3"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">
                        Permission Management
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Mengatur hak akses setiap role terhadap
                        menu, data, dan tindakan di dalam sistem.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">

                        <span class="text-xs font-semibold text-[#6F4D38]">
                            Pengaturan Hak Akses
                        </span>

                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- MONITORING DATA OPERASIONAL --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/20 text-[#632024] transition duration-300 group-hover:bg-[#632024] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M3 3v18h18M7 14l4-4 4 4 5-7"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">
                        Monitoring Data Operasional
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Memantau data dan aktivitas operasional
                        sesuai kewenangan administrator sistem.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">

                        <span class="text-xs font-semibold text-[#6F4D38]">
                            Monitoring Operasional
                        </span>

                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- AUDIT LOG --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/20 text-[#632024] transition duration-300 group-hover:bg-[#632024] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2zM14 3v5h5"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">
                        Audit Log
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Menampilkan catatan perubahan data,
                        pengelolaan akun, dan tindakan administratif.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">

                        <span class="text-xs font-semibold text-[#6F4D38]">
                            Riwayat Aktivitas Sistem
                        </span>

                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- LOGIN ACTIVITY --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/20 text-[#632024] transition duration-300 group-hover:bg-[#632024] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4m-5-4l4-5-4-5m4 5H3"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">
                        Login Activity
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Memantau riwayat login pengguna, waktu masuk,
                        dan informasi aktivitas akses yang tersedia.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">

                        <span class="text-xs font-semibold text-[#6F4D38]">
                            Riwayat Login
                        </span>

                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- SECURITY MANAGEMENT --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/20 text-[#632024] transition duration-300 group-hover:bg-[#632024] group-hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9 12l2 2 4-4"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">
                        Security Management
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Mengelola keamanan akun, penonaktifan akun,
                        dan penanganan masalah akses pengguna.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">

                        <span class="text-xs font-semibold text-[#6F4D38]">
                            Keamanan Sistem
                        </span>

                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">
                            →
                        </span>

                    </div>

                </article>


                {{-- EXECUTIVE DASHBOARD --}}
                <article class="group rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#632024]/40 hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/30 text-[#6F4D38] transition duration-300 group-hover:bg-[#D5B893] group-hover:text-[#25344F]">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M3 3v18h18M7 14l4-4 4 4 5-7"/>
                        </svg>

                    </div>

                    <h3 class="mt-5 font-['Manrope'] text-lg font-bold text-[#25344F]">
                        Executive Dashboard
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Mengakses ringkasan indikator dan informasi
                        kinerja perusahaan untuk keperluan pemantauan.
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-[#D5B893]/40 pt-4">

                        <span class="text-xs font-semibold text-[#6F4D38]">
                            Monitoring Kinerja
                        </span>

                        <span class="text-lg font-bold text-[#632024] transition group-hover:translate-x-1">
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
            <div class="overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white shadow-sm lg:col-span-2">

                <div class="border-b border-[#D5B893]/40 p-6">

                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#632024]">
                        System Activity
                    </span>

                    <h2 class="mt-2 font-['Manrope'] text-xl font-extrabold text-[#25344F]">
                        Aktivitas Sistem Terbaru
                    </h2>

                    <p class="mt-2 text-sm text-[#617891]">
                        Contoh catatan aktivitas pengguna dalam sistem.
                    </p>

                </div>


                <div class="overflow-x-auto">

                    <table class="w-full min-w-162.5 text-left text-sm">

                        <thead class="bg-[#25344F] text-xs uppercase tracking-wider text-white">

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


                        <tbody class="divide-y divide-[#D5B893]/30">


                            <tr class="transition hover:bg-[#D5B893]/10">

                                <td class="px-6 py-4">

                                    <p class="font-semibold text-[#25344F]">
                                        Admin Utama
                                    </p>

                                    <p class="mt-1 text-xs text-[#617891]">
                                        Administrator
                                    </p>

                                </td>

                                <td class="px-6 py-4 text-[#617891]">
                                    Login ke sistem
                                </td>

                                <td class="px-6 py-4 text-[#617891]">
                                    10 Nov 2026, 08.00
                                </td>

                                <td class="px-6 py-4">

                                    <span class="rounded-full bg-[#617891]/10 px-3 py-1 text-xs font-bold text-[#25344F]">
                                        Berhasil
                                    </span>

                                </td>

                            </tr>


                            <tr class="transition hover:bg-[#D5B893]/10">

                                <td class="px-6 py-4">

                                    <p class="font-semibold text-[#25344F]">
                                        HR Recruitment
                                    </p>

                                    <p class="mt-1 text-xs text-[#617891]">
                                        HR
                                    </p>

                                </td>

                                <td class="px-6 py-4 text-[#617891]">
                                    Mengakses data pelamar
                                </td>

                                <td class="px-6 py-4 text-[#617891]">
                                    10 Nov 2026, 08.15
                                </td>

                                <td class="px-6 py-4">

                                    <span class="rounded-full bg-[#617891]/10 px-3 py-1 text-xs font-bold text-[#25344F]">
                                        Berhasil
                                    </span>

                                </td>

                            </tr>


                            <tr class="transition hover:bg-[#D5B893]/10">

                                <td class="px-6 py-4">

                                    <p class="font-semibold text-[#25344F]">
                                        Staff Operasional
                                    </p>

                                    <p class="mt-1 text-xs text-[#617891]">
                                        Staff
                                    </p>

                                </td>

                                <td class="px-6 py-4 text-[#617891]">
                                    Memperbarui data operasional
                                </td>

                                <td class="px-6 py-4 text-[#617891]">
                                    10 Nov 2026, 08.30
                                </td>

                                <td class="px-6 py-4">

                                    <span class="rounded-full bg-[#617891]/10 px-3 py-1 text-xs font-bold text-[#25344F]">
                                        Berhasil
                                    </span>

                                </td>

                            </tr>


                            <tr class="transition hover:bg-[#D5B893]/10">

                                <td class="px-6 py-4">

                                    <p class="font-semibold text-[#25344F]">
                                        Applicant User
                                    </p>

                                    <p class="mt-1 text-xs text-[#617891]">
                                        Applicant
                                    </p>

                                </td>

                                <td class="px-6 py-4 text-[#617891]">
                                    Percobaan login
                                </td>

                                <td class="px-6 py-4 text-[#617891]">
                                    10 Nov 2026, 08.45
                                </td>

                                <td class="px-6 py-4">

                                    <span class="rounded-full bg-[#D5B893]/30 px-3 py-1 text-xs font-bold text-[#6F4D38]">
                                        Simulasi
                                    </span>

                                </td>

                            </tr>


                        </tbody>

                    </table>

                </div>


                <div class="border-t border-[#D5B893]/40 px-6 py-4">

                    <p class="text-xs text-[#617891]">
                        Aktivitas di atas merupakan data contoh dan belum berasal dari audit log sebenarnya.
                    </p>

                </div>

            </div>


            {{-- INFORMASI KEAMANAN --}}
            <aside class="rounded-2xl border border-[#D5B893]/50 bg-white p-6 shadow-sm">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#D5B893]/20 text-[#632024]">

                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M9 12l2 2 4-4"/>
                    </svg>

                </div>


                <h3 class="mt-5 font-['Manrope'] text-lg font-extrabold text-[#25344F]">
                    Informasi Keamanan
                </h3>

                <p class="mt-2 text-sm leading-6 text-[#617891]">
                    Perhatikan pengelolaan akses dan aktivitas akun
                    untuk menjaga keamanan sistem informasi.
                </p>


                <div class="mt-6 space-y-4">


                    <div class="flex gap-3">

                        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#632024]"></span>

                        <p class="text-sm leading-6 text-[#617891]">
                            Pastikan setiap pengguna memiliki role yang sesuai.
                        </p>

                    </div>


                    <div class="flex gap-3">

                        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#6F4D38]"></span>

                        <p class="text-sm leading-6 text-[#617891]">
                            Periksa aktivitas login dan perubahan data pengguna.
                        </p>

                    </div>


                    <div class="flex gap-3">

                        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#D5B893]"></span>

                        <p class="text-sm leading-6 text-[#617891]">
                            Nonaktifkan akun yang tidak lagi memiliki kewenangan akses.
                        </p>

                    </div>


                    <div class="flex gap-3">

                        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-[#25344F]"></span>

                        <p class="text-sm leading-6 text-[#617891]">
                            Tinjau kembali permission setiap kategori role.
                        </p>

                    </div>

                </div>

            </aside>

        </div>


        {{-- =====================================================
             AKSES EXECUTIVE DASHBOARD
        ====================================================== --}}
        <div class="relative mt-10 overflow-hidden rounded-2xl bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] p-6 text-white shadow-lg sm:p-8">

            <div class="pointer-events-none absolute -right-10 -top-20 h-64 w-64 rounded-full border border-[#D5B893]/20"></div>
            <div class="pointer-events-none absolute -right-4 -top-12 h-44 w-44 rounded-full border border-[#D5B893]/15"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-48 w-48 rounded-full bg-[#D5B893]/10 blur-3xl"></div>

            <div class="relative flex flex-col justify-between gap-6 md:flex-row md:items-center">

                <div class="max-w-2xl">

                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#D5B893]">
                        Akses Pemantauan
                    </span>

                    <h2 class="mt-3 font-['Manrope'] text-2xl font-extrabold text-white">
                        Executive Dashboard
                    </h2>

                    <p class="mt-3 text-sm leading-7 text-white/80">
                        Akses ringkasan indikator dan informasi kinerja perusahaan
                        untuk membantu pemantauan sistem dan operasional.
                        Akses ini disediakan bagi Admin sesuai kewenangan yang diberikan.
                    </p>

                </div>


                <div class="relative shrink-0">

                    <a href="#"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#D5B893] px-6 py-3 text-sm font-bold text-[#25344F] shadow-md transition duration-300 hover:bg-white hover:shadow-lg">

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
        <div class="mt-10 border-t border-[#D5B893]/50 pt-6">

            <a href="{{ url('/') }}"
               class="inline-flex items-center gap-2 text-sm font-bold text-[#632024] transition duration-300 hover:text-[#25344F]">

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
