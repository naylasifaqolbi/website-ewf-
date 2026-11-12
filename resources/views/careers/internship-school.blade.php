@extends('layouts.public')

@section('title', 'Magang SMA/SMK | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-[#FFF9F0]">

    <section class="bg-ewf-wine-dark text-white">
        <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
            <a href="{{ route('careers') }}"
               class="inline-flex items-center gap-2 text-sm font-semibold text-ewf-hawkbit hover:text-white">
                ← Kembali ke Karier
            </a>

            <p class="mt-8 text-xs font-bold uppercase tracking-[0.22em] text-ewf-hawkbit">
                Program Praktik Kerja
            </p>

            <h1 class="mt-4 text-4xl font-extrabold sm:text-5xl">
                Magang SMA/SMK
            </h1>

            <p class="mt-5 max-w-2xl leading-8 text-white/80">
                Informasi program magang atau Praktik Kerja Lapangan (PKL)
                bagi siswa SMA/SMK yang ingin mengenal lingkungan kerja
                secara langsung.
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
        <div class="max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#951A21]">
                Informasi Program
            </span>

            <h2 class="mt-3 text-3xl font-extrabold text-ewf-wine-dark">
                Program PKL untuk Siswa
            </h2>

            <p class="mt-4 leading-8 text-[#675653]">
                Halaman ini menyediakan informasi awal mengenai program
                magang atau PKL untuk siswa SMA/SMK. Penerimaan peserta
                menyesuaikan kebutuhan perusahaan dan ketentuan yang berlaku.
            </p>
        </div>

        <div class="mt-9 grid gap-6 md:grid-cols-2">
            <article class="rounded-2xl border border-[#EAD8CB] bg-white p-7">
                <h3 class="text-xl font-bold text-ewf-wine-dark">
                    Persyaratan Umum
                </h3>

                <ul class="mt-5 space-y-4 text-sm leading-7 text-[#786662]">
                    <li class="flex gap-3">
                        <span class="font-bold text-[#951A21]">01.</span>
                        <span>Berstatus siswa SMA/SMK yang akan melaksanakan program magang atau PKL.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="font-bold text-[#951A21]">02.</span>
                        <span>Menyiapkan surat pengantar dari sekolah apabila dipersyaratkan.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="font-bold text-[#951A21]">03.</span>
                        <span>Menyiapkan identitas dan dokumen pendukung yang diminta.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="font-bold text-[#951A21]">04.</span>
                        <span>Mengikuti jadwal dan ketentuan program yang ditetapkan perusahaan.</span>
                    </li>
                </ul>

                <p class="mt-5 text-xs leading-6 text-[#786662]">
                    Persyaratan ini merupakan gambaran awal, bukan
                    pengumuman resmi pembukaan program.
                </p>
            </article>

            <article class="rounded-2xl border border-[#EAD8CB] bg-white p-7">
                <h3 class="text-xl font-bold text-ewf-wine-dark">
                    Tahapan Pengajuan
                </h3>

                <ol class="mt-5 space-y-4 text-sm leading-7 text-[#786662]">
                    <li class="flex gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#FBE5D6] font-bold text-[#951A21]">1</span>
                        <span>Pelajari informasi program dan ketentuan penerimaan siswa.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#FBE5D6] font-bold text-[#951A21]">2</span>
                        <span>Koordinasikan pengajuan dengan pihak sekolah atau pembimbing PKL.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#FBE5D6] font-bold text-[#951A21]">3</span>
                        <span>Siapkan dan ajukan dokumen sesuai mekanisme resmi perusahaan.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#FBE5D6] font-bold text-[#951A21]">4</span>
                        <span>Tunggu konfirmasi mengenai penerimaan dan jadwal pelaksanaan program.</span>
                    </li>
                </ol>
            </article>
        </div>

        <div class="mt-8 rounded-2xl bg-[#F7EEE6] p-6 sm:p-8">
            <h2 class="text-xl font-extrabold text-ewf-wine-dark">
                Informasi Program PKL
            </h2>

            <p class="mt-3 leading-7 text-[#675653]">
                Periode pelaksanaan, kuota peserta, bidang penempatan,
                dan mekanisme pengajuan perlu mengikuti informasi resmi
                dari perusahaan.
            </p>

            {{-- TOMBOL DAFTAR SEKARANG --}}
            <a href="{{ route('login') }}"
               class="mt-6 inline-flex rounded-full bg-[#951A21] px-6 py-3 font-bold text-white transition hover:bg-ewf-wine-dark">
                Daftar Sekarang
            </a>
        </div>
    </section>
</main>
@endsection