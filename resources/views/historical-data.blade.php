@extends('layouts.public')

@section('title', 'Data Historis | PT Equityworld Futures')

@section('content')

<main class="min-h-screen bg-white">

    {{-- =========================================================
        HERO SECTION
    ========================================================== --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        {{-- DEKORASI LATAR --}}
        <div class="pointer-events-none absolute -right-24 -top-28 h-96 w-96 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-12 -top-16 h-72 w-72 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-32 left-1/3 h-80 w-80 rounded-full bg-[#D5B893]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 lg:py-24">

            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-3">
                    <span class="h-px w-10 bg-[#D5B893]"></span>
                    <p class="text-xs font-bold uppercase tracking-[0.24em] text-[#D5B893]">
                        Informasi Pasar
                    </p>
                </div>

                <h1 class="mt-6 font-['Manrope'] text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                    Data Historis
                </h1>

                <p class="mt-6 max-w-2xl font-['DM_Sans'] text-base leading-8 text-white/80 sm:text-lg">
                    Halaman untuk melihat data historis produk berdasarkan instrumen
                    dan periode waktu setelah sumber data terhubung.
                </p>

                <div class="mt-9 flex items-center gap-3">
                    <span class="h-1 w-12 rounded-full bg-[#D5B893]"></span>
                    <span class="h-1 w-3 rounded-full bg-white/40"></span>
                    <span class="h-1 w-3 rounded-full bg-white/20"></span>
                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
        HISTORICAL DATA CONTENT
    ========================================================== --}}
    <section class="bg-linear-to-b from-white to-[#D5B893]/10 px-6 py-16 lg:py-20">

        <div class="mx-auto max-w-7xl">

            {{-- INTRODUCTION --}}
            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-3">
                    <span class="h-px w-8 bg-[#6F4D38]"></span>
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#6F4D38]">
                        Riwayat Harga
                    </p>
                </div>

                <h2 class="mt-4 font-['Manrope'] text-3xl font-extrabold leading-tight text-[#25344F] sm:text-4xl">
                    Jelajahi Data Pasar
                </h2>

                <p class="mt-5 font-['DM_Sans'] leading-8 text-[#617891]">
                    Data historis dapat digunakan untuk mempelajari pergerakan
                    harga pada periode sebelumnya. Data tersebut merupakan
                    informasi masa lalu dan tidak menjamin pergerakan harga
                    pada masa mendatang.
                </p>

                <div class="mt-6 h-px w-24 bg-[#D5B893]"></div>

            </div>


            {{-- =====================================================
                PANEL FILTER
            ====================================================== --}}
            <div class="mt-10 overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white shadow-[0_12px_40px_rgba(37,52,79,0.06)]">

                {{-- PANEL HEADER --}}
                <div class="border-b border-[#D5B893]/40 bg-linear-to-r from-[#25344F]/4 to-white px-6 py-6 sm:px-8">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893]">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 stroke-width="1.7"
                                 aria-hidden="true">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M4 5h16M7 12h10m-7 7h4"/>

                            </svg>

                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#6F4D38]">
                                Pencarian Data
                            </p>

                            <h3 class="mt-1 font-['Manrope'] text-xl font-extrabold text-[#25344F]">
                                Filter Data
                            </h3>
                        </div>

                    </div>

                </div>


                {{-- FILTER FORM --}}
                <div class="p-6 sm:p-8">

                    <form id="historical-filter"
                          class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                        {{-- INSTRUMENT --}}
                        <div>

                            <label for="instrument"
                                   class="mb-2 block font-['DM_Sans'] text-sm font-bold text-[#25344F]">
                                Instrumen
                            </label>

                            <select id="instrument"
                                    name="instrument"
                                    class="w-full rounded-lg border border-[#D5B893]/70 bg-white px-4 py-3.5 font-['DM_Sans'] text-sm text-[#25344F] outline-none transition duration-200 hover:border-[#617891] focus:border-[#25344F] focus:ring-4 focus:ring-[#25344F]/10">

                                <option value="">Pilih instrumen</option>
                                <option value="emas">Emas</option>
                                <option value="hang-seng">Hang Seng</option>
                                <option value="nikkei">Nikkei</option>

                            </select>

                        </div>


                        {{-- START DATE --}}
                        <div>

                            <label for="start-date"
                                   class="mb-2 block font-['DM_Sans'] text-sm font-bold text-[#25344F]">
                                Tanggal Mulai
                            </label>

                            <input id="start-date"
                                   name="start_date"
                                   type="date"
                                   class="w-full rounded-lg border border-[#D5B893]/70 bg-white px-4 py-3.5 font-['DM_Sans'] text-sm text-[#25344F] outline-none transition duration-200 hover:border-[#617891] focus:border-[#25344F] focus:ring-4 focus:ring-[#25344F]/10">

                        </div>


                        {{-- END DATE --}}
                        <div>

                            <label for="end-date"
                                   class="mb-2 block font-['DM_Sans'] text-sm font-bold text-[#25344F]">
                                Tanggal Akhir
                            </label>

                            <input id="end-date"
                                   name="end_date"
                                   type="date"
                                   class="w-full rounded-lg border border-[#D5B893]/70 bg-white px-4 py-3.5 font-['DM_Sans'] text-sm text-[#25344F] outline-none transition duration-200 hover:border-[#617891] focus:border-[#25344F] focus:ring-4 focus:ring-[#25344F]/10">

                        </div>


                        {{-- SUBMIT BUTTON --}}
                        <div class="flex items-end">

                            <button type="submit"
                                    class="group inline-flex w-full items-center justify-center gap-2 rounded-lg bg-[#632024] px-5 py-3.5 font-['DM_Sans'] text-sm font-bold text-white shadow-sm transition duration-300 hover:bg-[#25344F] hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-[#632024]/20">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-4 w-4 transition-transform duration-300 group-hover:scale-110"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     aria-hidden="true">

                                    <circle cx="11" cy="11" r="7"/>
                                    <path stroke-linecap="round" d="m16 16 4 4"/>

                                </svg>

                                Tampilkan Data

                            </button>

                        </div>

                    </form>


                    {{-- FILTER MESSAGE --}}
                    <p id="filter-message"
                       class="mt-5 hidden rounded-xl border border-[#D5B893]/60 bg-[#D5B893]/15 p-4 font-['DM_Sans'] text-sm leading-6 text-[#25344F]"
                       role="status"></p>

                </div>

            </div>


            {{-- =====================================================
                TABEL DATA HISTORIS
            ====================================================== --}}
            <div class="mt-8 overflow-hidden rounded-2xl border border-[#D5B893]/60 bg-white shadow-[0_12px_40px_rgba(37,52,79,0.05)]">

                {{-- TABLE HEADER --}}
                <div class="flex flex-col gap-4 border-b border-[#D5B893]/40 bg-white p-6 sm:flex-row sm:items-center sm:justify-between sm:px-8">

                    <div>

                        <div class="flex items-center gap-3">
                            <span class="h-8 w-1 rounded-full bg-[#632024]"></span>

                            <h3 class="font-['Manrope'] text-xl font-extrabold text-[#25344F]">
                                Riwayat Harga
                            </h3>
                        </div>

                        <p class="mt-2 pl-4 font-['DM_Sans'] text-sm text-[#617891]">
                            Data akan muncul setelah sumber data historis terhubung.
                        </p>

                    </div>

                    <span class="inline-flex w-fit items-center gap-2 rounded-full border border-[#D5B893]/60 bg-[#D5B893]/15 px-4 py-2 font-['DM_Sans'] text-xs font-bold text-[#6F4D38]">

                        <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>

                        Menunggu sumber data

                    </span>

                </div>


                {{-- TABLE CONTENT --}}
                <div class="overflow-x-auto">

                    <table class="w-full min-w-175 text-left font-['DM_Sans'] text-sm">

                        <thead class="bg-[#25344F] text-white">

                            <tr>

                                <th scope="col" class="px-6 py-5 font-bold">
                                    Tanggal
                                </th>

                                <th scope="col" class="px-6 py-5 font-bold">
                                    Pembukaan
                                </th>

                                <th scope="col" class="px-6 py-5 font-bold">
                                    Tertinggi
                                </th>

                                <th scope="col" class="px-6 py-5 font-bold">
                                    Terendah
                                </th>

                                <th scope="col" class="px-6 py-5 font-bold">
                                    Penutupan
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td colspan="5" class="px-6 py-16 text-center">

                                    {{-- EMPTY STATE ICON --}}
                                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl border border-[#D5B893]/60 bg-[#D5B893]/15 text-[#25344F]">

                                        <svg class="h-7 w-7"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="1.7"
                                             aria-hidden="true">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M4 19V5m0 14h16M7 15l4-4 3 2 5-6"/>

                                        </svg>

                                    </div>


                                    {{-- EMPTY STATE TITLE --}}
                                    <h4 class="mt-5 font-['Manrope'] text-lg font-extrabold text-[#25344F]">
                                        Data historis belum tersedia
                                    </h4>


                                    {{-- EMPTY STATE DESCRIPTION --}}
                                    <p class="mx-auto mt-3 max-w-lg font-['DM_Sans'] leading-7 text-[#617891]">
                                        Hubungkan halaman ini ke API atau basis data
                                        historis terlebih dahulu agar harga pembukaan,
                                        tertinggi, terendah, dan penutupan dapat
                                        ditampilkan berdasarkan tanggal.
                                    </p>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            {{-- =====================================================
                CATATAN DATA
            ====================================================== --}}
            <div class="relative mt-7 overflow-hidden rounded-2xl border border-[#D5B893]/70 bg-[#D5B893]/15 p-6 sm:p-7">

                <div class="absolute right-0 top-0 h-full w-1.5 bg-[#6F4D38]"></div>

                <div class="flex items-start gap-4">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#632024] text-white">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="1.8"
                             aria-hidden="true">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M12 9v3m0 4h.01M10.3 3.9L1.8 18.2A2 2 0 003.5 21h17a2 2 0 001.7-2.8L13.7 3.9a2 2 0 00-3.4 0z"/>

                        </svg>

                    </div>

                    <div>

                        <h3 class="font-['Manrope'] text-lg font-extrabold text-[#25344F]">
                            Catatan Data
                        </h3>

                        <p class="mt-2 font-['DM_Sans'] text-sm leading-7 text-[#617891]">
                            Data historis pada halaman ini belum terhubung ke penyedia data.
                            Jangan menggunakan halaman ini sebagai sumber harga transaksi
                            sebelum integrasi data, satuan harga, zona waktu, dan validasi
                            data selesai dilakukan.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>


{{-- =========================================================
    JAVASCRIPT FILTER
========================================================= --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('historical-filter');
    const startDate = document.getElementById('start-date');
    const endDate = document.getElementById('end-date');
    const message = document.getElementById('filter-message');

    if (!form || !startDate || !endDate || !message) {
        return;
    }

    // Validasi tanggal mulai
    startDate.addEventListener('change', function () {

        endDate.min = startDate.value;

        if (endDate.value && endDate.value < startDate.value) {
            endDate.value = '';
        }

    });


    // Proses submit filter
    form.addEventListener('submit', function (event) {

        event.preventDefault();

        message.classList.remove('hidden');

        // Validasi instrumen
        if (!form.instrument.value) {
            message.textContent = 'Silakan pilih instrumen terlebih dahulu.';
            return;
        }

        // Validasi rentang tanggal
        if (startDate.value && endDate.value && endDate.value < startDate.value) {
            message.textContent = 'Tanggal akhir tidak boleh lebih awal dari tanggal mulai.';
            return;
        }

        // Informasi integrasi data
        message.textContent =
            'Filter sudah diisi, tetapi data belum dapat ditampilkan karena API atau basis data historis belum terhubung.';

    });

});
</script>

@endsection