@extends('layouts.public')

@section('title', 'Login | PT Equityworld Futures')

@section('content')

<main class="relative min-h-[calc(100vh-80px)] overflow-hidden bg-[#FFF9F0] px-4 py-5 sm:px-6 lg:py-6">

    {{-- BACKGROUND DECORATION --}}
    <div class="pointer-events-none absolute -left-32 top-20 h-80 w-80 rounded-full bg-[#FFA368]/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-32 bottom-10 h-96 w-96 rounded-full bg-[#EFBB55]/15 blur-3xl"></div>

    <div class="relative mx-auto grid w-full max-w-6xl overflow-hidden rounded-3xl bg-white shadow-[0_20px_70px_rgba(80,30,30,0.10)] lg:grid-cols-2">

        {{-- LEFT PANEL --}}
        <section class="relative flex min-h-75 flex-col justify-between overflow-hidden bg-linear-to-br from-[#951A21] via-[#801820] to-[#5F1119] p-7 text-white sm:p-10 lg:min-h-140 lg:p-10">

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
                    <p class="text-xs font-medium tracking-[0.25em] text-ewf-hawkbit">
                        FUTURES
                    </p>
                </div>
            </div>

            {{-- INTRODUCTION --}}
            <div class="relative z-10 my-6 lg:my-5">

                <span class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-semibold tracking-wider text-ewf-hawkbit">
                    <span class="h-2 w-2 rounded-full bg-ewf-hawkbit"></span>
                    OFFICIAL MEMBER AREA
                </span>

                <h1 class="max-w-md text-3xl font-extrabold leading-tight sm:text-4xl lg:text-5xl">
                    Selamat Datang
                    <span class="mt-2 block text-ewf-hawkbit">
                        Kembali!
                    </span>
                </h1>

                <p class="mt-4 max-w-md text-sm leading-7 text-white/75 sm:text-base">
                    Akses sistem informasi PT Equityworld Futures
                    melalui satu pintu untuk mendapatkan informasi
                    dan layanan perusahaan.
                </p>

                {{-- DECORATIVE LINE --}}
                <div class="mt-6 flex items-center gap-3">
                    <div class="h-1 w-14 rounded-full bg-ewf-hawkbit"></div>
                    <div class="h-1 w-5 rounded-full bg-white/40"></div>
                    <div class="h-1 w-5 rounded-full bg-white/20"></div>
                </div>

            </div>

            {{-- BOTTOM INFORMATION --}}
            <div class="relative z-10 border-t border-white/15 pt-4">
                <p class="text-xs leading-6 text-white/60">
                    PT Equityworld Futures
                </p>
                <p class="mt-1 text-xs font-medium text-white/80">
                    Professional Service · Trust · Commitment
                </p>
            </div>

        </section>

        {{-- RIGHT PANEL: LOGIN FORM --}}
        <section class="flex flex-col justify-center p-6 sm:p-10 lg:p-10">

            <div class="mx-auto w-full max-w-md">

                {{-- FORM HEADING --}}
                <div class="mb-6">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-ewf-red-poppy">
                        Account Access
                    </span>

                    <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-[#401C20] sm:text-4xl">
                        Login
                    </h2>

                    <p class="mt-2 text-sm leading-6 text-gray-500">
                        Silakan masuk menggunakan username dan password
                        akun Anda untuk melanjutkan.
                    </p>

                </div>

                {{-- SUCCESS MESSAGE --}}
                @if (session('success'))
                    <div class="mb-5 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- ERROR MESSAGE --}}
                @if (session('login_error'))
                    <div class="mb-5 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        {{ session('login_error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-5 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
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
                    class="space-y-4"
                >
                    @csrf

                    {{-- USERNAME --}}
                    <div>

                        <label for="username" class="mb-2 block text-sm font-semibold text-[#401C20]">
                            Username
                        </label>

                        <div class="relative">

                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                                        d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-10a4 4 0 100-8 4 4 0 000 8z"/>
                                </svg>
                            </div>

                            <input
                                type="text"
                                id="username"
                                name="username"
                                value="{{ old('username') }}"
                                placeholder="Masukkan username"
                                autocomplete="username"
                                required
                                autofocus
                                class="w-full rounded-xl border border-gray-200 bg-[#FFFEFC] py-3 pl-12 pr-4 text-sm text-[#401C20] outline-none transition duration-300 placeholder:text-gray-400 hover:border-[#FFA368] focus:border-[#951A21] focus:ring-4 focus:ring-[#951A21]/10"
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
                                class="w-full rounded-xl border border-gray-200 bg-[#FFFEFC] py-3 pl-12 pr-12 text-sm text-[#401C20] outline-none transition duration-300 placeholder:text-gray-400 hover:border-[#FFA368] focus:border-[#951A21] focus:ring-4 focus:ring-[#951A21]/10"
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
                        type="submit"
                        class="group flex w-full items-center justify-center gap-3 rounded-xl bg-linear-to-r from-[#951A21] to-[#722F37] px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-[#951A21]/15 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-[#951A21]/25 active:translate-y-0"
                    >
                        Masuk ke Akun

                        <svg class="h-5 w-5 transition duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-6-6l6 6-6 6"/>
                        </svg>
                    </button>

                </form>

                {{-- DEMO LOGIN INFORMATION --}}
                <div class="mt-5 rounded-xl border border-[#EAD8CB] bg-[#FFF9F0] p-4">

                    <p class="text-xs font-bold uppercase tracking-wider text-[#951A21]">
                        Informasi Login Sementara
                    </p>

                    <div class="mt-3 space-y-2 text-xs text-[#675653]">
                        <p>Username <span class="font-bold text-[#401C20]">user</span> untuk Dashboard User</p>
                        <p>Username <span class="font-bold text-[#401C20]">admin</span> untuk Dashboard Admin</p>
                        <p>Username <span class="font-bold text-[#401C20]">hr</span> untuk Dashboard HR</p>
                    </div>

                    <p class="mt-3 text-[11px] leading-5 text-[#786662]">
                        Password belum digunakan dalam proses login simulasi ini.
                    </p>

                </div>

                {{-- REGISTRATION LINK --}}
                <div class="mt-6 text-center">

                    <p class="text-sm text-gray-500">
                        Belum memiliki akun?
                        <a
                            href="{{ route('register') }}"
                            class="font-bold text-[#951A21] transition duration-300 hover:text-ewf-red-poppy hover:underline"
                        >
                            Daftar Sekarang
                        </a>
                    </p>

                </div>

                {{-- FOOTER FORM --}}
                <div class="mt-5 border-t border-gray-100 pt-4 text-center">

                    <p class="text-xs leading-6 text-gray-400">
                        Dengan melanjutkan, Anda menyetujui penggunaan layanan
                        <span class="font-semibold text-[#951A21]">
                            PT Equityworld Futures.
                        </span>
                    </p>

                    <a
                        href="{{ url('/') }}"
                        class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-[#951A21] transition hover:text-ewf-red-poppy"
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