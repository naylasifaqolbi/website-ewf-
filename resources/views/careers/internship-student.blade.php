
@extends('layouts.public')

@section('title', 'Magang Mahasiswa | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-[#FFF9F0]">

    <section class="bg-[#6D1720] text-white">
        <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
            <a href="{{ route('careers') }}"
               class="inline-flex items-center gap-2 text-sm font-semibold text-[#FFD66E] hover:text-white">
                ← Kembali ke Karier
            </a>

            <p class="mt-8 text-xs font-bold uppercase tracking-[0.22em] text-[#FFD66E]">
                Program Pengembangan Mahasiswa
            </p>

            <h1 class="mt-4 text-4xl font-extrabold sm:text-5xl">
                Magang Mahasiswa
            </h1>

            <p class="mt-5 max-w-2xl leading-8 text-white/80">
                Dapatkan informasi mengenai program magang mahasiswa
                dan persiapkan dokumen yang diperlukan untuk mengajukan
                permohonan magang.
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
        <div class="max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#951A21]">
                Informasi Program
            </span>

            <h2 class="mt-3 text-3xl font-extrabold text-[#6D1720]">
                Program Magang untuk Mahasiswa
            </h2>

            <p class="mt-4 leading-8 text-[#675653]">
                Halaman ini ditujukan bagi mahasiswa yang ingin memperoleh
                informasi mengenai kesempatan magang di PT Equityworld
                Futures. Pelaksanaan program mengikuti ketentuan dan
                kebutuhan perusahaan.
            </p>
        </div>

        <div class="mt-9 grid gap-6 md:grid-cols-2">
            <article class="rounded-2xl border border-[#EAD8CB] bg-white p-7">
                <h3 class="text-xl font-bold text-[#6D1720]">
                    Persyaratan Umum
                </h3>

                <ul class="mt-5 space-y-4 text-sm leading-7 text-[#786662]">
                    <li class="flex gap-3">
                        <span class="font-bold text-[#951A21]">01.</span>
                        <span>Berstatus mahasiswa aktif dari perguruan tinggi.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="font-bold text-[#951A21]">02.</span>
                        <span>Menyiapkan surat pengantar atau surat permohonan magang apabila dipersyaratkan.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="font-bold text-[#951A21]">03.</span>
                        <span>Menyiapkan CV dan dokumen pendukung sesuai ketentuan pendaftaran.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="font-bold text-[#951A21]">04.</span>
                        <span>Mengikuti proses seleksi dan ketentuan program yang berlaku.</span>
                    </li>
                </ul>

                <p class="mt-5 text-xs leading-6 text-[#786662]">
                    Persyaratan di atas merupakan gambaran awal dan perlu
                    disesuaikan dengan ketentuan resmi perusahaan.
                </p>
            </article>

            <article class="rounded-2xl border border-[#EAD8CB] bg-white p-7">
                <h3 class="text-xl font-bold text-[#6D1720]">
                    Dokumen dan Alur Pendaftaran
                </h3>

                <ol class="mt-5 space-y-4 text-sm leading-7 text-[#786662]">
                    <li class="flex gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#FBE5D6] font-bold text-[#951A21]">1</span>
                        <span>Pelajari informasi dan persyaratan program magang.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#FBE5D6] font-bold text-[#951A21]">2</span>
                        <span>Siapkan identitas, CV, surat pengantar, dan dokumen yang diminta.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#FBE5D6] font-bold text-[#951A21]">3</span>
                        <span>Ajukan pendaftaran melalui mekanisme resmi yang ditetapkan perusahaan.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#FBE5D6] font-bold text-[#951A21]">4</span>
                        <span>Tunggu informasi hasil pemeriksaan berkas atau tahapan seleksi berikutnya.</span>
                    </li>
                </ol>
            </article>
        </div>

        <div class="mt-8 rounded-2xl bg-[#F7EEE6] p-6 sm:p-8">
            <h2 class="text-xl font-extrabold text-[#6D1720]">
                Informasi Pendaftaran
            </h2>

            <p class="mt-3 leading-7 text-[#675653]">
                Informasi periode pendaftaran, kuota, dan mekanisme
                pengajuan perlu disesuaikan dengan program magang yang
                benar-benar dibuka oleh perusahaan.
            </p>

            <a href="{{ route('careers') }}"
               class="mt-6 inline-flex rounded-full bg-[#951A21] px-6 py-3 font-bold text-white transition hover:bg-[#6D1720]">
                Kembali ke Halaman Karier
            </a>
        </div>
    </section>
</main>
@endsection
