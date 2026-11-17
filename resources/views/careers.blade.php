@extends('layouts.public')

@section('title', 'Karier | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-white">

    {{-- HERO --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        {{-- DEKORASI --}}
        <div class="pointer-events-none absolute -right-24 -top-28 h-96 w-96 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-12 -top-16 h-72 w-72 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-32 left-1/3 h-80 w-80 rounded-full bg-[#D5B893]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">

            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-3">
                    <span class="h-px w-10 bg-[#D5B893]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.22em] text-[#D5B893]">
                        Bergabung Bersama Kami
                    </span>
                </div>

                <h1 class="mt-6 font-['Manrope'] text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    Karier
                </h1>

                <p class="mt-5 max-w-2xl font-['DM_Sans'] leading-8 text-white/80">
                    Temukan peluang karier dan program magang di PT Equityworld
                    Futures. Pilih jalur yang sesuai dengan latar belakang dan
                    minat Anda untuk melihat informasi lebih lanjut.
                </p>

                <div class="mt-8 flex items-center gap-3">
                    <span class="h-1 w-12 rounded-full bg-[#D5B893]"></span>
                    <span class="h-1 w-3 rounded-full bg-white/40"></span>
                    <span class="h-1 w-3 rounded-full bg-white/20"></span>
                </div>
            </div>

        </div>
    </section>


    {{-- PILIHAN KARIER --}}
    <section class="bg-linear-to-b from-white to-[#D5B893]/10 px-5 py-16 lg:px-8 lg:py-20">

        <div class="mx-auto max-w-7xl">

            {{-- SECTION INTRODUCTION --}}
            <div class="max-w-2xl">

                <div class="inline-flex items-center gap-3">
                    <span class="h-px w-8 bg-[#6F4D38]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#6F4D38]">
                        Peluang Bergabung
                    </span>
                </div>

                <h2 class="mt-4 font-['Manrope'] text-3xl font-extrabold text-[#25344F] sm:text-4xl">
                    Pilih Jalur yang Sesuai
                </h2>

                <p class="mt-4 font-['DM_Sans'] leading-7 text-[#617891]">
                    Silakan pilih salah satu kategori berikut untuk melihat
                    informasi dan ketentuan pendaftarannya.
                </p>

                <div class="mt-6 h-px w-24 bg-[#D5B893]"></div>

            </div>


            {{-- CAREER CARDS --}}
            <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">


                {{-- CARD LOWONGAN KERJA --}}
                <article class="group relative flex flex-col overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white p-7 shadow-[0_8px_30px_rgba(37,52,79,0.04)] transition duration-300 hover:-translate-y-2 hover:border-[#632024]/50 hover:shadow-[0_18px_45px_rgba(37,52,79,0.12)]">

                    <div class="absolute right-0 top-0 h-24 w-24 rounded-bl-full bg-[#D5B893]/10 transition duration-300 group-hover:bg-[#D5B893]/25"></div>

                    <div class="relative flex h-14 w-14 items-center justify-center rounded-xl border border-[#D5B893]/50 bg-[#D5B893]/15 text-[#25344F] transition duration-300 group-hover:bg-[#632024] group-hover:text-[#D5B893]">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-7 w-7"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="1.8"
                             aria-hidden="true">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M20 7h-3V5a2 2 0 00-2-2H9a2 2 0 00-2 2v2H4a2 2 0 00-2 2v9a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zM7 7V5h8v2M2 12h20"/>

                        </svg>

                    </div>

                    <h3 class="relative mt-6 font-['Manrope'] text-xl font-extrabold text-[#25344F]">
                        Lowongan Kerja
                    </h3>

                    <p class="relative mt-3 flex-1 font-['DM_Sans'] text-sm leading-7 text-[#617891]">
                        Temukan informasi lowongan pekerjaan, posisi yang
                        tersedia, persyaratan kandidat, dan tahapan seleksi
                        calon karyawan.
                    </p>

                    <div class="mt-7 border-t border-[#D5B893]/40 pt-5">

                        <a href="{{ route('careers.jobs') }}"
                           class="inline-flex items-center gap-2 font-['DM_Sans'] text-sm font-bold text-[#632024] transition duration-300 hover:gap-3 hover:text-[#25344F]">

                            Lihat Lowongan Kerja
                            <span aria-hidden="true">→</span>

                        </a>

                    </div>

                </article>


                {{-- CARD MAGANG MAHASISWA --}}
                <article class="group relative flex flex-col overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white p-7 shadow-[0_8px_30px_rgba(37,52,79,0.04)] transition duration-300 hover:-translate-y-2 hover:border-[#632024]/50 hover:shadow-[0_18px_45px_rgba(37,52,79,0.12)]">

                    <div class="absolute right-0 top-0 h-24 w-24 rounded-bl-full bg-[#D5B893]/10 transition duration-300 group-hover:bg-[#D5B893]/25"></div>

                    <div class="relative flex h-14 w-14 items-center justify-center rounded-xl border border-[#D5B893]/50 bg-[#D5B893]/15 text-[#25344F] transition duration-300 group-hover:bg-[#632024] group-hover:text-[#D5B893]">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-7 w-7"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="1.8"
                             aria-hidden="true">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.42A12.08 12.08 0 0118 16.5c-1.65 1.15-3.7 1.82-6 1.82s-4.35-.67-6-1.82a12.08 12.08 0 01-.16-5.92L12 14zm7-3v6"/>

                        </svg>

                    </div>

                    <h3 class="relative mt-6 font-['Manrope'] text-xl font-extrabold text-[#25344F]">
                        Magang Mahasiswa
                    </h3>

                    <p class="relative mt-3 flex-1 font-['DM_Sans'] text-sm leading-7 text-[#617891]">
                        Pelajari informasi program magang bagi mahasiswa,
                        persyaratan pendaftaran, dokumen yang diperlukan,
                        dan alur pengajuan magang.
                    </p>

                    <div class="mt-7 border-t border-[#D5B893]/40 pt-5">

                        <a href="{{ route('careers.internship-student') }}"
                           class="inline-flex items-center gap-2 font-['DM_Sans'] text-sm font-bold text-[#632024] transition duration-300 hover:gap-3 hover:text-[#25344F]">

                            Lihat Magang Mahasiswa
                            <span aria-hidden="true">→</span>

                        </a>

                    </div>

                </article>


                {{-- CARD MAGANG SMA/SMK --}}
                <article class="group relative flex flex-col overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white p-7 shadow-[0_8px_30px_rgba(37,52,79,0.04)] transition duration-300 hover:-translate-y-2 hover:border-[#632024]/50 hover:shadow-[0_18px_45px_rgba(37,52,79,0.12)]">

                    <div class="absolute right-0 top-0 h-24 w-24 rounded-bl-full bg-[#D5B893]/10 transition duration-300 group-hover:bg-[#D5B893]/25"></div>

                    <div class="relative flex h-14 w-14 items-center justify-center rounded-xl border border-[#D5B893]/50 bg-[#D5B893]/15 text-[#25344F] transition duration-300 group-hover:bg-[#632024] group-hover:text-[#D5B893]">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-7 w-7"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="1.8"
                             aria-hidden="true">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M12 3L2 8l10 5 10-5-10-5zM6 10v6c3.5 3 8.5 3 12 0v-6M22 8v7"/>

                        </svg>

                    </div>

                    <h3 class="relative mt-6 font-['Manrope'] text-xl font-extrabold text-[#25344F]">
                        Magang SMA/SMK
                    </h3>

                    <p class="relative mt-3 flex-1 font-['DM_Sans'] text-sm leading-7 text-[#617891]">
                        Dapatkan informasi program magang atau praktik kerja
                        lapangan bagi siswa SMA/SMK beserta persyaratan dan
                        proses pendaftarannya.
                    </p>

                    <div class="mt-7 border-t border-[#D5B893]/40 pt-5">

                        <a href="{{ route('careers.internship-school') }}"
                           class="inline-flex items-center gap-2 font-['DM_Sans'] text-sm font-bold text-[#632024] transition duration-300 hover:gap-3 hover:text-[#25344F]">

                            Lihat Magang SMA/SMK
                            <span aria-hidden="true">→</span>

                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>

</main>
@endsection