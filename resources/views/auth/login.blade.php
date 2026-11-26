
@extends('layouts.public')

@section('title', 'Login | PT Equityworld Futures')

@section('content')

<main class="relative flex min-h-screen items-center justify-center overflow-hidden bg-[#F8F6F2] px-4 py-6 font-sans sm:px-6 lg:py-5">

    {{-- BACKGROUND DECORATION --}}
    <div class="pointer-events-none absolute -left-32 top-10 h-80 w-80 rounded-full bg-[#D5B893]/15 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-32 bottom-0 h-96 w-96 rounded-full bg-[#617891]/10 blur-3xl"></div>

    {{-- LOGIN CARD --}}
    <div class="relative mx-auto grid w-full max-w-5xl overflow-hidden rounded-2xl border border-[#D5B893]/30 bg-white shadow-[0_20px_60px_rgba(37,52,79,0.12)] lg:h-[min(680px,calc(100svh_-_40px))] lg:min-h-0 lg:grid-cols-[0.9fr_1.1fr]">

        {{-- LEFT PANEL --}}
        <section class="relative flex min-h-80 flex-col justify-between overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] p-7 text-white sm:p-9 lg:min-h-0 lg:p-9">

            {{-- DECORATION --}}
            <div class="pointer-events-none absolute -right-20 -top-20 h-64 w-64 rounded-full border border-[#D5B893]/20"></div>
            <div class="pointer-events-none absolute -right-10 -top-10 h-44 w-44 rounded-full border border-[#D5B893]/15"></div>
            <div class="pointer-events-none absolute -bottom-28 -left-20 h-72 w-72 rounded-full bg-[#D5B893]/10 blur-2xl"></div>
            <div class="pointer-events-none absolute bottom-20 right-8 h-20 w-20 rotate-45 border border-white/10"></div>

            {{-- BRAND --}}
            <div class="relative z-10 flex items-center gap-3">
                <div class="flex h-14 w-14 shrink-0 items-center justify-center">
                <img
                    src="{{ asset('ewf-logo.png') }}"
                    alt="Logo Equityworld Futures"
                    class="h-full w-full object-contain"
                    >
                </div>

                <div>
                    <h2 class="font-['Manrope'] text-base font-extrabold tracking-wide">
                        EQUITYWORLD
                    </h2>
                    <p class="mt-0.5 text-[10px] font-medium tracking-[0.3em] text-[#D5B893]">
                        FUTURES
                    </p>
                </div>
            </div>

            {{-- INTRODUCTION --}}
            <div class="relative z-10 my-8 lg:my-0">

                <span class="mb-5 inline-flex items-center gap-2 rounded-full border border-[#D5B893]/35 bg-white/10 px-3.5 py-2 text-[10px] font-semibold tracking-wider text-[#D5B893]">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#D5B893]"></span>
                    OFFICIAL MEMBER AREA
                </span>

                <h1 class="font-['Manrope'] text-4xl font-extrabold leading-tight tracking-tight xl:text-[2.65rem]">
                    Selamat Datang
                    <span class="mt-1 block text-[#D5B893]">
                        Kembali!
                    </span>
                </h1>

                <p class="mt-4 max-w-sm text-sm leading-6 text-white/75">
                    Akses sistem informasi PT Equityworld Futures
                    melalui satu pintu untuk mendapatkan informasi
                    dan layanan perusahaan.
                </p>

                {{-- DECORATIVE LINE --}}
                <div class="mt-6 flex items-center gap-2.5">
                    <div class="h-1 w-12 rounded-full bg-[#D5B893]"></div>
                    <div class="h-1 w-4 rounded-full bg-white/40"></div>
                    <div class="h-1 w-4 rounded-full bg-white/20"></div>
                </div>

            </div>

            {{-- BOTTOM INFORMATION --}}
            <div class="relative z-10 border-t border-white/15 pt-4">
                <p class="text-[11px] text-white/60">
                    PT Equityworld Futures
                </p>
                <p class="mt-1 text-[11px] font-medium tracking-wide text-[#D5B893]">
                    Professional Service · Trust · Commitment
                </p>
            </div>

        </section>

        {{-- RIGHT PANEL: LOGIN FORM --}}
        <section class="flex min-h-0 flex-col justify-center bg-white p-6 sm:p-9 lg:overflow-y-auto lg:p-8">

            <div class="mx-auto w-full max-w-md">

                {{-- FORM HEADING --}}
                <div class="mb-5">

                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#6F4D38]">
                        Account Access
                    </span>

                    <h2 class="mt-1.5 font-['Manrope'] text-3xl font-extrabold tracking-tight text-[#25344F]">
                        Login
                    </h2>

                    <p class="mt-2 text-sm leading-6 text-[#617891]">
                        Silakan masuk menggunakan email dan password akun Anda.
                    </p>

                </div>

                {{-- SUCCESS MESSAGE --}}
                @if (session('success'))
                    <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-3.5 py-2.5 text-xs text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- ERROR MESSAGE --}}
                @if (session('login_error'))
                    <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-3.5 py-2.5 text-xs text-red-700">
                        {{ session('login_error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-3.5 py-2.5 text-xs text-red-700">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                {{-- LOGIN FORM --}}
                <form
                    id="loginForm"
                    action="{{ route('login.process') }}"
                    method="POST"
                    class="space-y-3.5"
                >
                    @csrf

                    
{{-- EMAIL --}}
<div>
    <label for="email" class="mb-1.5 block text-sm font-semibold text-[#25344F]">
        Email
    </label>

    <div class="relative">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-[#617891]">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                    d="M3 6l9 7 9-7M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/>
            </svg>
        </div>

        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="Masukkan email"
            autocomplete="email"
            required
            autofocus
            class="w-full rounded-lg border border-[#D5B893]/60 bg-white py-2.5 pl-11 pr-4 text-sm text-[#25344F] outline-none transition duration-200 placeholder:text-[#617891]/60 hover:border-[#6F4D38] focus:border-[#632024] focus:ring-4 focus:ring-[#632024]/10"
        >
    </div>
</div>


                    {{-- PASSWORD --}}
                    <div>

                        <label for="password" class="mb-1.5 block text-sm font-semibold text-[#25344F]">
                            Password
                        </label>

                        <div class="relative">

                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-[#617891]">
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
                                required
                                class="w-full rounded-lg border border-[#D5B893]/60 bg-white py-2.5 pl-11 pr-11 text-sm text-[#25344F] outline-none transition duration-200 placeholder:text-[#617891]/60 hover:border-[#6F4D38] focus:border-[#632024] focus:ring-4 focus:ring-[#632024]/10"
                            >

                            {{-- TOGGLE PASSWORD --}}
                            <button
                                type="button"
                                id="togglePassword"
                                class="absolute inset-y-0 right-0 flex items-center px-3.5 text-[#617891] transition hover:text-[#632024]"
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
                    <div class="flex items-center justify-between pt-0.5">

                        <label class="flex cursor-pointer items-center gap-2">
                            <input
                                type="checkbox"
                                id="remember"
                                name="remember"
                                class="h-4 w-4 rounded border-[#D5B893] accent-[#632024] focus:ring-[#632024]"
                            >

                            <span class="text-sm text-[#617891]">
                                Ingat saya
                            </span>
                        </label>

                    </div>

                    {{-- LOGIN BUTTON --}}
                    <button
                        type="submit"
                        class="group flex w-full items-center justify-center gap-2.5 rounded-lg bg-linear-to-r from-[#632024] to-[#25344F] px-5 py-3 text-sm font-bold text-white shadow-md shadow-[#25344F]/15 transition duration-200 hover:-translate-y-0.5 hover:shadow-lg active:translate-y-0"
                    >
                        Masuk ke Akun

                        <svg class="h-4 w-4 transition duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-6-6l6 6-6 6"/>
                        </svg>
                    </button>

                </form>



                {{-- REGISTRATION LINK --}}
                <div class="mt-4 text-center">

                    <p class="text-xs text-[#617891] sm:text-sm">
                        Belum memiliki akun?

                        <a
                            href="{{ route('register') }}"
                            class="font-bold text-[#632024] transition hover:text-[#25344F] hover:underline"
                        >
                            Daftar Sekarang
                        </a>
                    </p>

                </div>

                {{-- BOTTOM INFORMATION --}}
                <div class="mt-4 border-t border-[#D5B893]/35 pt-3 text-center">

                    <p class="text-[10px] leading-5 text-[#617891]">
                        Dengan melanjutkan, Anda menyetujui penggunaan layanan
                        <span class="font-semibold text-[#632024]">
                            PT Equityworld Futures.
                        </span>
                    </p>

                    <a
                        href="{{ url('/') }}"
                        class="mt-2 inline-flex items-center gap-1.5 text-xs font-semibold text-[#632024] transition hover:text-[#25344F]"
                    >
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
