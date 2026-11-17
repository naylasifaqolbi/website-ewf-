@extends('layouts.public')

@section('title', 'Magang Mahasiswa | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-white">

    {{-- HERO --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        {{-- DEKORASI --}}
        <div class="pointer-events-none absolute -right-24 -top-28 h-96 w-96 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-12 -top-16 h-72 w-72 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-32 left-1/3 h-80 w-80 rounded-full bg-[#D5B893]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">

            <a href="{{ route('careers') }}"
               class="inline-flex items-center gap-2 font-['DM_Sans'] text-sm font-semibold text-[#D5B893] transition hover:text-white">
                <span>←</span>
                Kembali ke Karier
            </a>

            <div class="mt-9 inline-flex items-center gap-3">
                <span class="h-px w-9 bg-[#D5B893]"></span>
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#D5B893]">
                    Program Pengembangan Mahasiswa
                </p>
            </div>

            <h1 class="mt-5 font-['Manrope'] text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                Magang Mahasiswa
            </h1>

            <p class="mt-5 max-w-2xl font-['DM_Sans'] leading-8 text-white/80">
                Dapatkan informasi mengenai program magang mahasiswa
                dan persiapkan dokumen yang diperlukan untuk mengajukan
                permohonan magang.
            </p>

            <div class="mt-8 h-1 w-16 rounded-full bg-[#D5B893]"></div>

        </div>
    </section>


    {{-- INFORMASI PROGRAM --}}
    <section class="bg-linear-to-b from-white to-[#D5B893]/10 px-5 py-16 lg:px-8 lg:py-20">

        <div class="mx-auto max-w-7xl">

            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-3">
                    <span class="h-px w-8 bg-[#6F4D38]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#6F4D38]">
                        Informasi Program
                    </span>
                </div>

                <h2 class="mt-4 font-['Manrope'] text-3xl font-extrabold text-[#25344F] sm:text-4xl">
                    Program Magang untuk Mahasiswa
                </h2>

                <p class="mt-4 font-['DM_Sans'] leading-8 text-[#617891]">
                    Halaman ini ditujukan bagi mahasiswa yang ingin memperoleh
                    informasi mengenai kesempatan magang di PT Equityworld
                    Futures. Pelaksanaan program mengikuti ketentuan dan
                    kebutuhan perusahaan.
                </p>

                <div class="mt-6 h-px w-24 bg-[#D5B893]"></div>

            </div>


            {{-- PERSYARATAN DAN ALUR --}}
            <div class="mt-10 grid gap-6 md:grid-cols-2">


                {{-- PERSYARATAN UMUM --}}
                <article class="overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white shadow-[0_10px_35px_rgba(37,52,79,0.05)]">

                    <div class="border-b border-[#D5B893]/40 bg-[#25344F]/3 p-6 sm:p-7">

                        <div class="flex items-center gap-4">

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893]">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-6 w-6"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8"
                                     aria-hidden="true">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.42A12.08 12.08 0 0118 16.5c-1.65 1.15-3.7 1.82-6 1.82s-4.35-.67-6-1.82a12.08 12.08 0 01-.16-5.92L12 14z"/>

                                </svg>

                            </div>

                            <h3 class="font-['Manrope'] text-xl font-extrabold text-[#25344F]">
                                Persyaratan Umum
                            </h3>

                        </div>

                    </div>

                    <div class="p-6 sm:p-7">

                        <ul class="space-y-5 font-['DM_Sans'] text-sm leading-7 text-[#617891]">

                            <li class="flex gap-4">
                                <span class="shrink-0 font-bold text-[#632024]">01.</span>
                                <span>Berstatus mahasiswa aktif dari perguruan tinggi.</span>
                            </li>

                            <li class="flex gap-4">
                                <span class="shrink-0 font-bold text-[#632024]">02.</span>
                                <span>Menyiapkan surat pengantar atau surat permohonan magang apabila dipersyaratkan.</span>
                            </li>

                            <li class="flex gap-4">
                                <span class="shrink-0 font-bold text-[#632024]">03.</span>
                                <span>Menyiapkan CV dan dokumen pendukung sesuai ketentuan pendaftaran.</span>
                            </li>

                            <li class="flex gap-4">
                                <span class="shrink-0 font-bold text-[#632024]">04.</span>
                                <span>Mengikuti proses seleksi dan ketentuan program yang berlaku.</span>
                            </li>

                        </ul>

                        <div class="mt-7 border-t border-[#D5B893]/40 pt-5">

                            <p class="font-['DM_Sans'] text-xs leading-6 text-[#617891]">
                                Persyaratan di atas merupakan gambaran awal dan perlu
                                disesuaikan dengan ketentuan resmi perusahaan.
                            </p>

                        </div>

                    </div>

                </article>


                {{-- DOKUMEN DAN ALUR PENDAFTARAN --}}
                <article class="overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white shadow-[0_10px_35px_rgba(37,52,79,0.05)]">

                    <div class="border-b border-[#D5B893]/40 bg-[#25344F]/3 p-6 sm:p-7">

                        <div class="flex items-center gap-4">

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#632024] text-[#D5B893]">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-6 w-6"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8"
                                     aria-hidden="true">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 8h6m-6 4h6"/>

                                </svg>

                            </div>

                            <h3 class="font-['Manrope'] text-xl font-extrabold text-[#25344F]">
                                Dokumen dan Alur Pendaftaran
                            </h3>

                        </div>

                    </div>

                    <div class="p-6 sm:p-7">

                        <ol class="space-y-5 font-['DM_Sans'] text-sm leading-7 text-[#617891]">

                            <li class="flex gap-4">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#D5B893]/25 font-bold text-[#632024]">1</span>
                                <span>Pelajari informasi dan persyaratan program magang.</span>
                            </li>

                            <li class="flex gap-4">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#D5B893]/25 font-bold text-[#632024]">2</span>
                                <span>Siapkan identitas, CV, surat pengantar, dan dokumen yang diminta.</span>
                            </li>

                            <li class="flex gap-4">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#D5B893]/25 font-bold text-[#632024]">3</span>
                                <span>Ajukan pendaftaran melalui mekanisme resmi yang ditetapkan perusahaan.</span>
                            </li>

                            <li class="flex gap-4">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#D5B893]/25 font-bold text-[#632024]">4</span>
                                <span>Tunggu informasi hasil pemeriksaan berkas atau tahapan seleksi berikutnya.</span>
                            </li>

                        </ol>

                    </div>

                </article>

            </div>


            {{-- INFORMASI PENDAFTARAN --}}
            <div class="relative mt-9 overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-linear-to-r from-[#25344F] to-[#632024] p-7 text-white sm:p-9">

                <div class="pointer-events-none absolute -right-12 -top-20 h-56 w-56 rounded-full border border-[#D5B893]/20"></div>

                <div class="relative max-w-3xl">

                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#D5B893]">
                        Informasi Pendaftaran
                    </p>

                    <h2 class="mt-3 font-['Manrope'] text-2xl font-extrabold">
                        Informasi Pendaftaran
                    </h2>

                    <p class="mt-3 font-['DM_Sans'] leading-7 text-white/80">
                        Informasi periode pendaftaran, kuota, dan mekanisme
                        pengajuan perlu disesuaikan dengan program magang yang
                        benar-benar dibuka oleh perusahaan.
                    </p>

                    <a href="{{ route('login') }}"
                       class="mt-7 inline-flex items-center gap-3 rounded-lg bg-[#D5B893] px-6 py-3.5 font-['DM_Sans'] text-sm font-extrabold text-[#25344F] transition duration-300 hover:bg-white">

                        Daftar Sekarang
                        <span aria-hidden="true">→</span>

                    </a>

                </div>

            </div>

        </div>

    </section>

</main>
@endsection