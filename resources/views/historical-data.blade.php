
@extends('layouts.public')

@section('title', 'Data Historis | PT Equityworld Futures')

@section('content')

{{-- =========================================================
    HERO SECTION
========================================================= --}}
<section class="bg-[#951A21] text-white">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-24">
        <p class="text-sm font-bold uppercase tracking-[0.2em] text-ewf-hawkbit">
            Informasi Pasar
        </p>

        <h1 class="mt-4 text-4xl font-extrabold sm:text-5xl">
            Data Historis
        </h1>

        <p class="mt-6 max-w-2xl leading-8 text-white/85">
            Halaman untuk melihat data historis produk berdasarkan instrumen
            dan periode waktu setelah sumber data terhubung.
        </p>
    </div>
</section>


{{-- =========================================================
    HISTORICAL DATA CONTENT
========================================================= --}}
<section class="bg-[#FFF9F0] px-6 py-16 lg:py-20">
    <div class="mx-auto max-w-7xl">

        {{-- INTRODUCTION --}}
        <div class="max-w-3xl">
            <p class="text-sm font-bold uppercase tracking-widest text-[#951A21]">
                Riwayat Harga
            </p>

            <h2 class="mt-3 text-3xl font-extrabold text-[#951A21]">
                Jelajahi Data Pasar
            </h2>

            <p class="mt-5 leading-8 text-[#51413E]">
                Data historis dapat digunakan untuk mempelajari pergerakan
                harga pada periode sebelumnya. Data tersebut merupakan
                informasi masa lalu dan tidak menjamin pergerakan harga
                pada masa mendatang.
            </p>
        </div>


        {{-- =====================================================
            PANEL FILTER
        ====================================================== --}}
        <div class="mt-10 rounded-2xl border border-[#951A21]/10 bg-white p-6 shadow-sm sm:p-8">

            <h3 class="text-xl font-extrabold text-[#951A21]">
                Filter Data
            </h3>

            <form id="historical-filter"
                  class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                {{-- INSTRUMENT --}}
                <div>
                    <label for="instrument"
                           class="mb-2 block text-sm font-semibold text-[#51413E]">
                        Instrumen
                    </label>

                    <select id="instrument"
                            name="instrument"
                            class="w-full rounded-lg border border-[#951A21]/20 bg-[#FFF9F0] px-4 py-3 text-sm text-[#51413E] outline-none transition focus:border-[#951A21] focus:ring-2 focus:ring-[#951A21]/10">

                        <option value="">Pilih instrumen</option>
                        <option value="emas">Emas</option>
                        <option value="hang-seng">Hang Seng</option>
                        <option value="nikkei">Nikkei</option>
                    </select>
                </div>


                {{-- START DATE --}}
                <div>
                    <label for="start-date"
                           class="mb-2 block text-sm font-semibold text-[#51413E]">
                        Tanggal Mulai
                    </label>

                    <input id="start-date"
                           name="start_date"
                           type="date"
                           class="w-full rounded-lg border border-[#951A21]/20 bg-[#FFF9F0] px-4 py-3 text-sm text-[#51413E] outline-none transition focus:border-[#951A21] focus:ring-2 focus:ring-[#951A21]/10">
                </div>


                {{-- END DATE --}}
                <div>
                    <label for="end-date"
                           class="mb-2 block text-sm font-semibold text-[#51413E]">
                        Tanggal Akhir
                    </label>

                    <input id="end-date"
                           name="end_date"
                           type="date"
                           class="w-full rounded-lg border border-[#951A21]/20 bg-[#FFF9F0] px-4 py-3 text-sm text-[#51413E] outline-none transition focus:border-[#951A21] focus:ring-2 focus:ring-[#951A21]/10">
                </div>


                {{-- SUBMIT BUTTON --}}
                <div class="flex items-end">
                    <button type="submit"
                            class="w-full rounded-lg bg-[#951A21] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#74141A] focus:outline-none focus:ring-2 focus:ring-[#951A21]/30 focus:ring-offset-2">
                        Tampilkan Data
                    </button>
                </div>

            </form>


            {{-- FILTER MESSAGE --}}
            <p id="filter-message"
               class="mt-4 hidden rounded-lg bg-ewf-hawkbit/25 p-4 text-sm leading-6 text-[#951A21]"
               role="status"></p>

        </div>


        {{-- =====================================================
            TABEL DATA HISTORIS
        ====================================================== --}}
        <div class="mt-8 overflow-hidden rounded-2xl border border-[#951A21]/10 bg-white shadow-sm">

            {{-- TABLE HEADER --}}
            <div class="flex flex-col gap-2 border-b border-[#951A21]/10 p-6 sm:flex-row sm:items-center sm:justify-between">

                <div>
                    <h3 class="text-xl font-extrabold text-[#951A21]">
                        Riwayat Harga
                    </h3>

                    <p class="mt-1 text-sm text-gray-500">
                        Data akan muncul setelah sumber data historis terhubung.
                    </p>
                </div>

                <span class="inline-flex w-fit items-center rounded-full bg-[#EFBB55]/25 px-3 py-1.5 text-xs font-bold text-[#951A21]">
                    Menunggu sumber data
                </span>

            </div>


            {{-- TABLE CONTENT --}}
            <div class="overflow-x-auto">

                <table class="w-full min-w-175 text-left text-sm">

                    <thead class="bg-[#FFF9F0] text-[#951A21]">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-bold">
                                Tanggal
                            </th>

                            <th scope="col" class="px-6 py-4 font-bold">
                                Pembukaan
                            </th>

                            <th scope="col" class="px-6 py-4 font-bold">
                                Tertinggi
                            </th>

                            <th scope="col" class="px-6 py-4 font-bold">
                                Terendah
                            </th>

                            <th scope="col" class="px-6 py-4 font-bold">
                                Penutupan
                            </th>
                        </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <td colspan="5" class="px-6 py-16 text-center">

                                {{-- EMPTY STATE ICON --}}
                                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-[#951A21]/5 text-[#951A21]">

                                    <svg class="h-7 w-7"
                                         viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor"
                                         stroke-width="1.7"
                                         aria-hidden="true">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4 19V5m0 14h16M7 15l4-4 3 2 5-6" />

                                    </svg>

                                </div>


                                {{-- EMPTY STATE TITLE --}}
                                <h4 class="mt-4 font-bold text-[#951A21]">
                                    Data historis belum tersedia
                                </h4>


                                {{-- EMPTY STATE DESCRIPTION --}}
                                <p class="mx-auto mt-2 max-w-lg leading-7 text-gray-500">
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
        <div class="mt-6 rounded-xl border border-[#EFBB55] bg-ewf-hawkbit/20 p-5">

            <h3 class="font-bold text-[#951A21]">
                Catatan data
            </h3>

            <p class="mt-2 text-sm leading-6 text-[#51413E]">
                Data historis pada halaman ini belum terhubung ke penyedia data.
                Jangan menggunakan halaman ini sebagai sumber harga transaksi
                sebelum integrasi data, satuan harga, zona waktu, dan validasi
                data selesai dilakukan.
            </p>

        </div>

    </div>
</section>


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
