
@extends('layouts.public')

@section('title', 'Karier | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-[#FFF9F0]">

    {{-- HERO --}}
    <section class="bg-ewf-wine-dark text-white">
        <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
            <span class="text-xs font-bold uppercase tracking-[0.22em] text-ewf-hawkbit">
                Bergabung Bersama Kami
            </span>

            <h1 class="mt-4 text-4xl font-extrabold sm:text-5xl">
                Karier
            </h1>

            <p class="mt-5 max-w-2xl leading-8 text-white/80">
                Temukan peluang karier dan program magang di PT Equityworld
                Futures. Pilih jalur yang sesuai dengan latar belakang dan
                minat Anda untuk melihat informasi lebih lanjut.
            </p>
        </div>
    </section>

    {{-- PILIHAN KARIER --}}
    <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">

        <div class="max-w-2xl">
            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#951A21]">
                Peluang Bergabung
            </span>

            <h2 class="mt-3 text-3xl font-extrabold text-ewf-wine-dark">
                Pilih Jalur yang Sesuai
            </h2>

            <p class="mt-4 leading-7 text-[#675653]">
                Silakan pilih salah satu kategori berikut untuk melihat
                informasi dan ketentuan pendaftarannya.
            </p>
        </div>

        <div class="mt-9 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            {{-- CARD LOWONGAN KERJA --}}
            <article class="group flex flex-col rounded-2xl border border-[#EAD8CB] bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#951A21] hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-7 w-7"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="1.8">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M20 7h-3V5a2 2 0 00-2-2H9a2 2 0 00-2 2v2H4a2 2 0 00-2 2v9a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zM7 7V5h8v2M2 12h20" />
                    </svg>
                </div>

                <h3 class="mt-5 text-xl font-extrabold text-ewf-wine-dark">
                    Lowongan Kerja
                </h3>

                <p class="mt-3 flex-1 text-sm leading-7 text-[#786662]">
                    Temukan informasi lowongan pekerjaan, posisi yang
                    tersedia, persyaratan kandidat, dan tahapan seleksi
                    calon karyawan.
                </p>

                <a href="{{ route('careers.jobs') }}"
                   class="mt-6 inline-flex items-center gap-2 font-bold text-[#951A21] transition hover:gap-3 hover:text-ewf-red-poppy">
                    Lihat Lowongan Kerja
                    <span aria-hidden="true">→</span>
                </a>
            </article>

            {{-- CARD MAGANG MAHASISWA --}}
            <article class="group flex flex-col rounded-2xl border border-[#EAD8CB] bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#951A21] hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#FFF0DF] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-7 w-7"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="1.8">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.42A12.08 12.08 0 0118 16.5c-1.65 1.15-3.7 1.82-6 1.82s-4.35-.67-6-1.82a12.08 12.08 0 01-.16-5.92L12 14zm7-3v6" />
                    </svg>
                </div>

                <h3 class="mt-5 text-xl font-extrabold text-ewf-wine-dark">
                    Magang Mahasiswa
                </h3>

                <p class="mt-3 flex-1 text-sm leading-7 text-[#786662]">
                    Pelajari informasi program magang bagi mahasiswa,
                    persyaratan pendaftaran, dokumen yang diperlukan,
                    dan alur pengajuan magang.
                </p>

                <a href="{{ route('careers.internship-student') }}"
                   class="mt-6 inline-flex items-center gap-2 font-bold text-[#951A21] transition hover:gap-3 hover:text-ewf-red-poppy">
                    Lihat Magang Mahasiswa
                    <span aria-hidden="true">→</span>
                </a>
            </article>

            {{-- CARD MAGANG SMA/SMK --}}
            <article class="group flex flex-col rounded-2xl border border-[#EAD8CB] bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#951A21] hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21] transition group-hover:bg-[#951A21] group-hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-7 w-7"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="1.8">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M12 3L2 8l10 5 10-5-10-5zM6 10v6c3.5 3 8.5 3 12 0v-6M22 8v7" />
                    </svg>
                </div>

                <h3 class="mt-5 text-xl font-extrabold text-ewf-wine-dark">
                    Magang SMA/SMK
                </h3>

                <p class="mt-3 flex-1 text-sm leading-7 text-[#786662]">
                    Dapatkan informasi program magang atau praktik kerja
                    lapangan bagi siswa SMA/SMK beserta persyaratan dan
                    proses pendaftarannya.
                </p>

                <a href="{{ route('careers.internship-school') }}"
                   class="mt-6 inline-flex items-center gap-2 font-bold text-[#951A21] transition hover:gap-3 hover:text-ewf-red-poppy">
                    Lihat Magang SMA/SMK
                    <span aria-hidden="true">→</span>
                </a>
            </article>

        </div>
    </section>

</main>
@endsection
