
@extends('layouts.public')

@section('title', 'Registrasi | PT Equityworld Futures')

@section('content')

<main class="relative flex min-h-screen items-center justify-center overflow-hidden bg-[#F8F6F2] px-4 py-6 font-sans sm:px-6 lg:py-5">
    
    {{-- BACKGROUND DECORATION --}}
    <div class="pointer-events-none absolute -left-32 top-10 h-80 w-80 rounded-full bg-[#D5B893]/15 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-32 bottom-0 h-96 w-96 rounded-full bg-[#617891]/10 blur-3xl"></div>

    <div class="relative mx-auto grid w-full max-w-5xl overflow-hidden rounded-2xl border border-[#D5B893]/30 bg-white shadow-[0_20px_60px_rgba(37,52,79,0.12)] lg:h-[min(750px,calc(100vh-3rem))] lg:grid-cols-[0.9fr_1.1fr] lg:grid-rows-1">

        {{-- LEFT PANEL --}}
        <section class="relative flex flex-col justify-between overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] p-6 text-white sm:p-7 lg:h-full lg:p-8">

            {{-- DECORATION --}}
            <div class="pointer-events-none absolute -right-20 -top-20 h-72 w-72 rounded-full border border-[#D5B893]/25"></div>
            <div class="pointer-events-none absolute -right-10 -top-10 h-52 w-52 rounded-full border border-[#D5B893]/20"></div>
            <div class="pointer-events-none absolute -bottom-32 -left-20 h-80 w-80 rounded-full bg-[#D5B893]/10 blur-2xl"></div>
            <div class="pointer-events-none absolute bottom-32 right-12 h-20 w-20 rotate-45 border border-white/10"></div>

            {{-- LOGO --}}
            <div class="relative z-10 flex items-center gap-4">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center">
                    <img
                        src="{{ asset('ewf-logo.png') }}"
                        alt="Logo Equityworld Futures"
                        class="h-full w-full object-contain"
                    >
                </div>

                <div>
                    <h2 class="font-['Manrope'] text-lg font-extrabold tracking-wide">
                        EQUITYWORLD
                    </h2>
                    <p class="text-xs font-medium tracking-[0.25em] text-[#D5B893]">
                        FUTURES
                    </p>
                </div>
            </div>

            {{-- INTRODUCTION --}}
            <div class="relative z-10 my-5">

                <span class="mb-4 inline-flex items-center gap-2 rounded-full border border-[#D5B893]/40 bg-white/10 px-4 py-2 text-xs font-semibold tracking-wider text-[#D5B893]">
                    <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>
                    CREATE YOUR ACCOUNT
                </span>

                <h1 class="max-w-md font-['Manrope'] text-3xl font-extrabold leading-tight sm:text-4xl">                    Bergabung
                    <span class="mt-1 block text-[#D5B893]">
                        Bersama Kami!
                    </span>
                </h1>

                <p class="mt-3 max-w-md text-sm leading-6 text-white/80">
                    Buat akun Anda untuk mengakses sistem informasi
                    PT Equityworld Futures dan mendapatkan kemudahan
                    dalam menggunakan layanan serta informasi perusahaan.
                </p>

                {{-- BENEFITS --}}
                <div class="mt-5 space-y-3">

                    <div class="flex items-center gap-3">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl border border-[#D5B893]/20 bg-white/10 text-[#D5B893]">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-sm text-white/85">
                            Registrasi akun dengan mudah
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl border border-[#D5B893]/20 bg-white/10 text-[#D5B893]">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-white/85">
                            Akses informasi perusahaan
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl border border-[#D5B893]/20 bg-white/10 text-[#D5B893]">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m16 0v-2a4 4 0 00-3-3.87M14 3.13a4 4 0 010 7.75M14 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-white/85">
                            Pengalaman layanan yang terorganisasi
                        </span>
                    </div>

                </div>

                {{-- DECORATIVE LINE --}}
                <div class="mt-6 flex items-center gap-3">
                    <div class="h-1 w-14 rounded-full bg-[#D5B893]"></div>
                    <div class="h-1 w-5 rounded-full bg-white/40"></div>
                    <div class="h-1 w-5 rounded-full bg-white/20"></div>
                </div>

            </div>

            {{-- BOTTOM INFORMATION --}}
            <div class="relative z-10 border-t border-white/20 pt-4">
                <p class="text-xs leading-5 text-white/65">
                    PT Equityworld Futures
                </p>
                <p class="mt-1 text-xs font-medium text-[#D5B893]">
                    Professional Service · Trust · Commitment
                </p>
            </div>

        </section>

        {{-- RIGHT PANEL: REGISTER FORM --}}
        <section class="flex min-h-0 flex-col overflow-y-auto overscroll-contain bg-white p-5 sm:p-7 lg:h-full lg:p-8 [scrollbar-width:thin] [scrollbar-color:#9B1C24_transparent] [&::-webkit-scrollbar]:w-[6px] [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-[#9B1C24]">

            <div class="mx-auto w-full max-w-md shrink-0">

                {{-- FORM HEADING --}}
                <div class="mb-4">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#6F4D38]">
                        Account Registration
                    </span>

                    <h2 class="mt-2 font-['Manrope'] text-3xl font-extrabold tracking-tight text-[#25344F] sm:text-4xl">
                        Buat Akun
                    </h2>

                    <p class="mt-2 text-sm leading-5 text-[#617891]">
                        Lengkapi informasi berikut untuk membuat akun
                        dan melanjutkan ke layanan kami.
                    </p>

                </div>

                {{-- SUCCESS MESSAGE --}}
                @if (session('success'))
                    <div class="mb-4 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- ERROR MESSAGE --}}
                @if ($errors->any())
                    <div class="mb-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">

                        <p class="mb-2 font-semibold">
                            Registrasi belum berhasil.
                        </p>

                        <ul class="list-inside list-disc space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                    </div>
                @endif

                {{-- REGISTER FORM --}}
                <form
                    action="{{ route('register.process') }}"
                    method="POST"
                    class="space-y-2.5"
                >
                    @csrf

                    {{-- FULL NAME --}}
                    <div>

                        <label for="name" class="mb-1 block text-sm font-semibold text-[#25344F]">
                            Nama Lengkap
                        </label>

                        <div class="relative">

                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-[#617891]">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m12-14a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama lengkap"
                                autocomplete="name"
                                required
                                class="w-full rounded-xl border border-[#D5B893]/60 bg-white py-2.5 pl-12 pr-4 text-sm text-[#25344F] outline-none transition duration-300 placeholder:text-[#617891]/60 hover:border-[#6F4D38] focus:border-[#632024] focus:ring-4 focus:ring-[#632024]/10"
                            >

                        </div>

                        @error('name')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror

                    </div>

                    {{-- EMAIL --}}
                    <div>

                        <label for="email" class="mb-1 block text-sm font-semibold text-[#25344F]">
                            Email
                        </label>

                        <div class="relative">

                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-[#617891]">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M3 8l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/>
                                </svg>
                            </div>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="nama@email.com"
                                autocomplete="email"
                                required
                                class="w-full rounded-xl border border-[#D5B893]/60 bg-white py-2.5 pl-12 pr-4 text-sm text-[#25344F] outline-none transition duration-300 placeholder:text-[#617891]/60 hover:border-[#6F4D38] focus:border-[#632024] focus:ring-4 focus:ring-[#632024]/10"
                            >

                        </div>

                        @error('email')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror

                    </div>

                    {{-- PHONE NUMBER --}}
                    <div>

                        <label for="phone" class="mb-1 block text-sm font-semibold text-[#25344F]">
                            Nomor Telepon
                        </label>

                        <div class="relative">

                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-[#617891]">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M3 5a2 2 0 012-2h3l2 5-2 2a16 16 0 007 7l2-2 5 2v3a2 2 0 01-2 2h-1C11.16 22 2 12.84 2 6V5h1z"/>
                                </svg>
                            </div>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="Contoh: 081234567890"
                                autocomplete="tel"
                                required
                                class="w-full rounded-xl border border-[#D5B893]/60 bg-white py-2.5 pl-12 pr-4 text-sm text-[#25344F] outline-none transition duration-300 placeholder:text-[#617891]/60 hover:border-[#6F4D38] focus:border-[#632024] focus:ring-4 focus:ring-[#632024]/10"
                            >

                        </div>

                        @error('phone')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror

                    </div>

                    {{-- PASSWORD --}}
                    <div>

                        <label for="password" class="mb-1 block text-sm font-semibold text-[#25344F]">
                            Password
                        </label>

                        <div class="relative">

                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-[#617891]">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M12 15v2m-6 4h12a2 2 0 002-2v-7a2 2 0 00-2-2H6a2 2 0 00-2 2v7a2 2 0 002 2zm2-9V7a4 4 0 118 0v3"/>
                                </svg>
                            </div>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Minimal 8 karakter"
                                autocomplete="new-password"
                                required
                                class="w-full rounded-xl border border-[#D5B893]/60 bg-white py-2.5 pl-12 pr-12 text-sm text-[#25344F] outline-none transition duration-300 placeholder:text-[#617891]/60 hover:border-[#6F4D38] focus:border-[#632024] focus:ring-4 focus:ring-[#632024]/10"
                            >

                            <button
                                type="button"
                                id="togglePassword"
                                class="absolute inset-y-0 right-0 flex items-center px-4 text-[#617891] transition hover:text-[#632024]"
                                aria-label="Tampilkan password"
                            >
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>
                                    <circle cx="12" cy="12" r="3" stroke-width="1.7"/>
                                </svg>
                            </button>

                        </div>

                        @error('password')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror

                    </div>

                    {{-- CONFIRM PASSWORD --}}
                    <div>

                        <label for="password_confirmation" class="mb-1 block text-sm font-semibold text-[#25344F]">
                            Konfirmasi Password
                        </label>

                        <div class="relative">

                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-[#617891]">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M12 15v2m-6 4h12a2 2 0 002-2v-7a2 2 0 00-2-2H6a2 2 0 00-2 2v7a2 2 0 002 2zm2-9V7a4 4 0 118 0v3"/>
                                </svg>
                            </div>

                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Masukkan ulang password"
                                autocomplete="new-password"
                                required
                                class="w-full rounded-xl border border-[#D5B893]/60 bg-white py-2.5 pl-12 pr-12 text-sm text-[#25344F] outline-none transition duration-300 placeholder:text-[#617891]/60 hover:border-[#6F4D38] focus:border-[#632024] focus:ring-4 focus:ring-[#632024]/10"
                            >

                            <button
                                type="button"
                                id="togglePasswordConfirmation"
                                class="absolute inset-y-0 right-0 flex items-center px-4 text-[#617891] transition hover:text-[#632024]"
                                aria-label="Tampilkan konfirmasi password"
                            >
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>
                                    <circle cx="12" cy="12" r="3" stroke-width="1.7"/>
                                </svg>
                            </button>

                        </div>

                    </div>

                    {{-- TERMS INFORMATION --}}
                    <div class="flex items-start gap-2.5 pt-1">

                        <input
                            type="checkbox"
                            id="terms"
                            name="terms"
                            value="1"
                            required
                            class="mt-1 h-4 w-4 shrink-0 rounded border-[#D5B893] accent-[#632024] focus:ring-[#632024]"
                        >

                        <label for="terms" class="text-xs leading-5 text-[#617891]">
                            Saya menyatakan bahwa informasi yang diberikan
                            adalah benar dan dapat dipertanggungjawabkan.
                        </label>

                    </div>

                    {{-- REGISTER BUTTON --}}
                    <button
                        type="submit"
                        class="group flex w-full items-center justify-center gap-3 rounded-xl bg-linear-to-r from-[#632024] to-[#25344F] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-[#25344F]/15 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-[#25344F]/25 active:translate-y-0"
                    >
                        Daftar Akun

                        <svg class="h-5 w-5 transition duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6-6l6 6-6 6"/>
                        </svg>

                    </button>

                </form>

                {{-- LOGIN LINK --}}
                <div class="mt-4 text-center">

                    <p class="text-sm text-[#617891]">
                        Sudah memiliki akun?

                        <a
                            href="{{ route('login') }}"
                            class="font-bold text-[#632024] transition duration-300 hover:text-[#25344F] hover:underline"
                        >
                            Login di Sini
                        </a>
                    </p>

                </div>

                {{-- FOOTER --}}
                <div class="mt-4 border-t border-[#D5B893]/40 pt-3 text-center">

                    <p class="text-xs leading-5 text-[#617891]">
                        Dengan mendaftar, Anda menyetujui penggunaan layanan
                        <span class="font-semibold text-[#632024]">
                            PT Equityworld Futures.
                        </span>
                    </p>

                    <a
                        href="{{ url('/') }}"
                        class="mt-2 inline-flex items-center gap-2 text-sm font-semibold text-[#632024] transition hover:text-[#25344F]"
                    >
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
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
        const confirmPasswordInput = document.getElementById('password_confirmation');

        const togglePassword = document.getElementById('togglePassword');
        const toggleConfirmPassword = document.getElementById('togglePasswordConfirmation');

        // Tampilkan / sembunyikan password
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

        // Tampilkan / sembunyikan konfirmasi password
        if (confirmPasswordInput && toggleConfirmPassword) {

            toggleConfirmPassword.addEventListener('click', function () {

                const isPassword = confirmPasswordInput.type === 'password';

                confirmPasswordInput.type = isPassword ? 'text' : 'password';

                this.setAttribute(
                    'aria-label',
                    isPassword
                        ? 'Sembunyikan konfirmasi password'
                        : 'Tampilkan konfirmasi password'
                );

            });

        }

    });
</script>

@endsection
