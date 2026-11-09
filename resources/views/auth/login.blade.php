
@extends('layouts.public')

@section('title', 'Login | PT Equityworld Futures')

@section('content')

<main class="relative min-h-[calc(100vh-80px)] overflow-hidden bg-[#FFF9F0] px-4 py-12 sm:px-6 lg:py-16">

    {{-- BACKGROUND DECORATION --}}
    <div class="pointer-events-none absolute -left-32 top-20 h-80 w-80 rounded-full bg-[#FFA368]/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-32 bottom-10 h-96 w-96 rounded-full bg-[#EFBB55]/15 blur-3xl"></div>

    <div class="relative mx-auto grid w-full max-w-6xl overflow-hidden rounded-3xl bg-white shadow-[0_20px_70px_rgba(80,30,30,0.10)] lg:grid-cols-2">

        {{-- LEFT PANEL --}}
        <section class="relative flex min-h-[300px] flex-col justify-between overflow-hidden bg-gradient-to-br from-[#951A21] via-[#801820] to-[#5F1119] p-8 text-white sm:p-12 lg:min-h-[650px]">

            {{-- DECORATION --}}
            <div class="pointer-events-none absolute -right-20 -top-20 h-72 w-72 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -right-10 -top-10 h-52 w-52 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -bottom-32 -left-20 h-80 w-80 rounded-full bg-[#FFA368]/10 blur-2xl"></div>

            {{-- LOGO --}}
            <div class="relative z-10 flex items-center gap-4">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white text-xl font-black text-[#951A21] shadow-lg">
                    EWF
                </div>

                <div>
                    <h2 class="text-lg font-extrabold tracking-wide">
                        EQUITYWORLD
                    </h2>
                    <p class="text-xs font-medium tracking-[0.25em] text-[#FFD66E]">
                        FUTURES
                    </p>
                </div>
            </div>

            {{-- INTRODUCTION --}}
            <div class="relative z-10 my-10">
                <span class="mb-5 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-semibold tracking-wider text-[#FFD66E]">
                    <span class="h-2 w-2 rounded-full bg-[#FFD66E]"></span>
                    OFFICIAL MEMBER AREA
                </span>

                <h1 class="max-w-md text-3xl font-extrabold leading-tight sm:text-4xl lg:text-5xl">
                    Selamat Datang
                    <span class="mt-2 block text-[#FFD66E]">
                        Kembali!
                    </span>
                </h1>

                <p class="mt-6 max-w-md text-sm leading-7 text-white/75 sm:text-base">
                    Akses sistem informasi PT Equityworld Futures
                    melalui satu pintu untuk mendapatkan informasi
                    dan layanan perusahaan.
                </p>

                {{-- DECORATIVE LINE --}}
                <div class="mt-8 flex items-center gap-3">
                    <div class="h-1 w-14 rounded-full bg-[#FFD66E]"></div>
                    <div class="h-1 w-5 rounded-full bg-white/40"></div>
                    <div class="h-1 w-5 rounded-full bg-white/20"></div>
                </div>
            </div>

            {{-- BOTTOM INFORMATION --}}
            <div class="relative z-10 border-t border-white/15 pt-6">
                <p class="text-xs leading-6 text-white/60">
                    PT Equityworld Futures
                </p>
                <p class="mt-1 text-xs font-medium text-white/80">
                    Professional Service · Trust · Commitment
                </p>
            </div>

        </section>


        {{-- RIGHT PANEL: LOGIN FORM --}}
        <section class="flex flex-col justify-center p-7 sm:p-12 lg:p-14">

            <div class="mx-auto w-full max-w-md">

                {{-- FORM HEADING --}}
                <div class="mb-9">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#CF3021]">
                        Account Access
                    </span>

                    <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-[#401C20] sm:text-4xl">
                        Login
                    </h2>

                    <p class="mt-3 text-sm leading-6 text-gray-500">
                        Silakan masuk menggunakan email dan password
                        akun Anda untuk melanjutkan.
                    </p>
                </div>


                {{-- LOGIN FORM --}}
                <form id="loginForm" class="space-y-6" onsubmit="return false;">

                    {{-- EMAIL --}}
                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-[#401C20]">
                            Email
                        </label>

                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                                        d="M3 8l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/>
                                </svg>
                            </div>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="nama@email.com"
                                autocomplete="email"
                                class="w-full rounded-xl border border-gray-200 bg-[#FFFEFC] py-3.5 pl-12 pr-4 text-sm text-[#401C20] outline-none transition duration-300 placeholder:text-gray-400 hover:border-[#FFA368] focus:border-[#951A21] focus:ring-4 focus:ring-[#951A21]/10"
                            >
                        </div>
                    </div>


                    {{-- PASSWORD --}}
                    <div>
                        <div class="mb-2 flex items-center justify-between">
                            <label for="password" class="block text-sm font-semibold text-[#401C20]">
                                Password
                            </label>
                        </div>

                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-7a2 2 0 00-2-2H6a2 2 0 00-2 2v7a2 2 0 002 2zm2-9V7a4 4 0 118 0v3"/>
                                </svg>
                            </div>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Masukkan password"
                                autocomplete="current-password"
                                class="w-full rounded-xl border border-gray-200 bg-[#FFFEFC] py-3.5 pl-12 pr-12 text-sm text-[#401C20] outline-none transition duration-300 placeholder:text-gray-400 hover:border-[#FFA368] focus:border-[#951A21] focus:ring-4 focus:ring-[#951A21]/10"
                            >

                            {{-- TOGGLE PASSWORD --}}
                            <button
                                type="button"
                                id="togglePassword"
                                class="absolute inset-y-0 right-0 flex items-center px-4 text-gray-400 transition hover:text-[#951A21]"
                                aria-label="Tampilkan password"
                            >
                                <svg id="eyeIcon" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                                        d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>
                                    <circle cx="12" cy="12" r="3" stroke-width="1.7"/>
                                </svg>
                            </button>
                        </div>
                    </div>


                    {{-- REMEMBER ME --}}
                    <div class="flex items-center justify-between">
                        <label class="flex cursor-pointer items-center gap-2.5">
                            <input
                                type="checkbox"
                                id="remember"
                                name="remember"
                                class="h-4 w-4 rounded border-gray-300 accent-[#951A21] focus:ring-[#951A21]"
                            >

                            <span class="text-sm text-gray-600">
                                Ingat saya
                            </span>
                        </label>

                        <span class="cursor-default text-sm font-semibold text-[#951A21]/70">
                            Lupa password?
                        </span>
                    </div>


                    {{-- LOGIN BUTTON --}}
                    <button
                        type="button"
                        class="group flex w-full items-center justify-center gap-3 rounded-xl bg-gradient-to-r from-[#951A21] to-[#722F37] px-6 py-4 text-sm font-bold text-white shadow-lg shadow-[#951A21]/15 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-[#951A21]/25 active:translate-y-0"
                    >
                        Masuk ke Akun

                        <svg class="h-5 w-5 transition duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-6-6l6 6-6 6"/>
                        </svg>
                    </button>

                </form>


                {{-- FOOTER FORM --}}
                <div class="mt-9 border-t border-gray-100 pt-6 text-center">
                    <p class="text-xs leading-6 text-gray-400">
                        Dengan masuk, Anda menggunakan layanan
                        <span class="font-semibold text-[#951A21]">
                            PT Equityworld Futures.
                        </span>
                    </p>

                    <a
                        href="{{ url('/') }}"
                        class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#951A21] transition hover:text-[#CF3021]"
                    >
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7"/>
                        </svg>

                        Kembali ke Beranda
                    </a>
                </div>

            </div>

        </section>

    </div>

</main>


{{-- PASSWORD VISIBILITY SCRIPT --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        if (passwordInput && togglePassword) {
            togglePassword.addEventListener('click', function () {
                const isPassword = passwordInput.type === 'password';

                passwordInput.type = isPassword ? 'text' : 'password';

                this.setAttribute(
                    'aria-label',
                    isPassword ? 'Sembunyikan password' : 'Tampilkan password'
                );
            });
        }
    });
</script>

@endsection
