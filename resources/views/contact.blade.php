
@extends('layouts.public')

@section('title', 'Kontak | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-[#FFF9F0]">

    {{-- HERO --}}
    <section class="bg-ewf-wine-dark text-white">
        <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
            <span class="text-xs font-bold uppercase tracking-[0.22em] text-ewf-hawkbit">
                Kami Siap Membantu
            </span>

            <h1 class="mt-4 text-4xl font-extrabold sm:text-5xl">
                Hubungi Kami
            </h1>

            <p class="mt-5 max-w-2xl leading-8 text-white/80">
                Temukan informasi alamat kantor cabang dan kontak resmi
                PT Equityworld Futures untuk kebutuhan informasi lebih lanjut.
            </p>
        </div>
    </section>

    {{-- INFORMASI KONTAK --}}
    <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">

        <div class="max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#951A21]">
                Informasi Kontak
            </span>

            <h2 class="mt-3 text-3xl font-extrabold text-ewf-wine-dark sm:text-4xl">
                Kantor Cabang
            </h2>

            <p class="mt-4 leading-7 text-[#675653]">
                Berikut informasi kantor cabang Surabaya Trillium
                dan alamat email perusahaan yang dapat dihubungi.
            </p>
        </div>

        <div class="mt-10 max-w-4xl">

            {{-- INFORMASI KANTOR --}}
            <article class="overflow-hidden rounded-3xl border border-[#EAD8CB] bg-white shadow-sm">

                {{-- HEADER KANTOR --}}
                <div class="bg-[#951A21] px-6 py-6 text-white sm:px-8">
                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-white/10">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 stroke-width="1.8">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M12 21s8-7.2 8-13a8 8 0 10-16 0c0 5.8 8 13 8 13z"/>
                                <circle cx="12" cy="8" r="2.5"/>
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-ewf-hawkbit">
                                Kantor Cabang
                            </p>

                            <h3 class="mt-1 text-xl font-extrabold sm:text-2xl">
                                SURABAYA TRILLIUM
                            </h3>
                        </div>

                    </div>
                </div>

                <div class="p-6 sm:p-8">

                    {{-- ALAMAT --}}
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21]">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 stroke-width="1.8">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4M8 9v.01M8 12v.01M8 15v.01M8 18v.01M15 12v.01M15 15v.01M15 18v.01"/>
                            </svg>
                        </div>

                        <div>
                            <h4 class="font-bold text-ewf-wine-dark">
                                Alamat Kantor
                            </h4>

                            <p class="mt-2 leading-7 text-[#675653]">
                                Trillium Office &amp; Residence, Lt. 2 &amp; 3<br>
                                Jl. Pemuda No. 108–116<br>
                                Surabaya 60271
                            </p>
                        </div>
                    </div>

                    <div class="my-6 border-t border-[#EAD8CB]"></div>

                    {{-- TELEPON --}}
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#FFF0DF] text-[#951A21]">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 stroke-width="1.8">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M3 5a2 2 0 012-2h3.3a1 1 0 01.95.68l1.5 4.5a1 1 0 01-.5 1.2l-2.3 1.15a11 11 0 005.52 5.52l1.15-2.3a1 1 0 011.2-.5l4.5 1.5a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C9.4 21 3 14.6 3 6V5z"/>
                            </svg>
                        </div>

                        <div>
                            <h4 class="font-bold text-ewf-wine-dark">
                                Telepon
                            </h4>

                            <a href="tel:+623160003788"
                               class="mt-2 inline-block leading-7 text-[#675653] transition hover:text-[#951A21]">
                                +62 31 6000 3788 (Hunting)
                            </a>
                        </div>
                    </div>

                    <div class="my-6 border-t border-[#EAD8CB]"></div>

                    {{-- FAX --}}
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21]">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 stroke-width="1.8">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M6 9V3h12v6M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2M6 14h12v7H6z"/>
                                <path stroke-linecap="round" d="M17 12h.01"/>
                            </svg>
                        </div>

                        <div>
                            <h4 class="font-bold text-ewf-wine-dark">
                                Fax
                            </h4>

                            <p class="mt-2 leading-7 text-[#675653]">
                                +62 31 6000 3688
                            </p>
                        </div>
                    </div>

                    <div class="my-6 border-t border-[#EAD8CB]"></div>

                    {{-- EMAIL --}}
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#FFF0DF] text-[#951A21]">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 stroke-width="1.8">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M4 5h16a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V7a2 2 0 012-2z"/>
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="m3 6 9 7 9-7"/>
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <h4 class="font-bold text-ewf-wine-dark">
                                Email
                            </h4>

                            <a href="mailto:corporate@equityworld-futures.co.id"
                               class="mt-2 inline-block break-all leading-7 text-[#951A21] transition hover:text-ewf-red-poppy hover:underline">
                                corporate@equityworld-futures.co.id
                            </a>
                        </div>
                    </div>

                    {{-- TOMBOL PETA --}}
                    <div class="mt-8 border-t border-[#EAD8CB] pt-7">
                        <a href="https://www.google.com/maps/search/?api=1&query=Trillium+Office+Residence+Jl+Pemuda+108-116+Surabaya"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-[#951A21] px-6 py-3.5 text-sm font-bold text-white transition hover:bg-ewf-wine-dark sm:w-auto">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 stroke-width="1.8">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M9 20l-6-3V5l6 3m0 12l6-3m-6 3V8m6 9l6 3V7l-6-3m0 13V4m0 0L9 8"/>
                            </svg>

                            Lihat di Peta
                            <span aria-hidden="true">↗</span>
                        </a>
                    </div>

                </div>
            </article>

        </div>

        {{-- PERINGATAN PENIPUAN --}}
        <section class="mt-10 overflow-hidden rounded-2xl border border-[#E9C7A9] bg-[#FFF0DF]">

            <div class="flex flex-col gap-4 p-6 sm:flex-row sm:gap-5 sm:p-8">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#951A21] text-white">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-6 w-6"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="1.8">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M12 9v4m0 4h.01M10.3 3.9L1.8 18.2A2 2 0 003.5 21h17a2 2 0 001.7-2.8L13.7 3.9a2 2 0 00-3.4 0z"/>
                    </svg>
                </div>

                <div>
                    <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#951A21]">
                        Perhatian
                    </p>

                    <h2 class="mt-2 text-2xl font-extrabold text-ewf-wine-dark">
                        Waspada terhadap Penipuan
                    </h2>

                    <p class="mt-4 leading-8 text-[#675653]">
                        PT Equityworld Futures mengingatkan masyarakat untuk
                        selalu waspada terhadap penipuan yang mengatasnamakan
                        perusahaan melalui media apa pun. Pastikan seluruh
                        transaksi dan setoran hanya dilakukan ke Rekening
                        Terpisah (Segregated Account) resmi atas nama
                        PT Equityworld Futures, bukan perseorangan.
                    </p>
                </div>

            </div>
        </section>

    </section>
</main>
@endsection
