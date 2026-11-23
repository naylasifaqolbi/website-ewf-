
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
            dan periode waktu.
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
                  action="{{ route('historical-data') }}"
                  method="GET"
                  class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                {{-- INSTRUMENT --}}
                <div>
                    <label for="instrument"
                           class="mb-2 block text-sm font-semibold text-[#51413E]">
                        Instrumen
                    </label>

                    <select id="instrument"
                            name="instrument"
                            required
                            class="w-full rounded-lg border border-[#951A21]/20 bg-[#FFF9F0] px-4 py-3 text-sm text-[#51413E] outline-none transition focus:border-[#951A21] focus:ring-2 focus:ring-[#951A21]/10">

                        <option value="">Pilih instrumen</option>

                        <option value="lgd" {{ ($instrument ?? 'lgd') === 'lgd' ? 'selected' : '' }}>
                            LGD - Gold
                        </option>

                        <option value="hsi" {{ ($instrument ?? '') === 'hsi' ? 'selected' : '' }}>
                            HSI - Hang Seng
                        </option>

                        <option value="sni" {{ ($instrument ?? '') === 'sni' ? 'selected' : '' }}>
                            SNI - Nikkei
                        </option>
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
                           value="{{ $startDate ?? '' }}"
                           max="{{ $endDate ?? '' }}"
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
                           value="{{ $endDate ?? '' }}"
                           min="{{ $startDate ?? '' }}"
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

    <div class="mt-2 space-y-1">
        <p class="text-sm font-medium text-[#51413E]">
            Data historis
            <span class="font-bold text-[#951A21]">
                {{ strtoupper($instrument) }}
            </span>
            <span class="text-gray-400">•</span>
            {{ $historicalData->total() }} data tersedia
        </p>

        @if($periodStart && $periodEnd)
            <p class="text-xs text-gray-500">
                Periode data:
                {{ \Carbon\Carbon::parse($periodStart)->format('d/m/Y') }}
                –
                {{ \Carbon\Carbon::parse($periodEnd)->format('d/m/Y') }}
            </p>
        @endif
    </div>
</div>


                {{-- API STATUS --}}
                @if($apiAvailable ?? false)
                    <span class="inline-flex w-fit items-center gap-2 rounded-full bg-green-100 px-3 py-1.5 text-xs font-bold text-green-700">
                        <span class="h-2 w-2 rounded-full bg-green-500"></span>
                        Sumber data terhubung
                    </span>
                @else
                    <span class="inline-flex w-fit items-center gap-2 rounded-full bg-red-100 px-3 py-1.5 text-xs font-bold text-red-700">
                        <span class="h-2 w-2 rounded-full bg-red-500"></span>
                        Sumber data tidak tersedia
                    </span>
                @endif

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


                    <tbody class="divide-y divide-[#D5B893]/30">

                        @forelse($historicalData as $item)

                            <tr class="transition hover:bg-[#D5B893]/10">

                                <td class="whitespace-nowrap px-6 py-4 font-medium text-[#51413E]">
                                    {{ \Carbon\Carbon::parse($item['tanggal'])->format('d/m/Y') }}
                                </td>

                                <td class="whitespace-nowrap px-6 py-4 text-[#51413E]">
                                    {{ number_format((float) $item['open'], $instrument === 'lgd' ? 2 : 0, ',', '') }}
                                </td>

                                <td class="whitespace-nowrap px-6 py-4 text-[#51413E]">
                                    {{ number_format((float) $item['high'], $instrument === 'lgd' ? 2 : 0, ',', '') }}
                                </td>

                                <td class="whitespace-nowrap px-6 py-4 text-[#51413E]">
                                    {{ number_format((float) $item['low'], $instrument === 'lgd' ? 2 : 0, ',', '') }}
                                </td>

                                <td class="whitespace-nowrap px-6 py-4 font-semibold text-[#951A21]">
                                    {{ number_format((float) $item['close'], $instrument === 'lgd' ? 2 : 0, ',', '') }}
                                </td>

                            </tr>

                        @empty

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

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M4 19V5m0 14h16M7 15l4-4 3 2 5-6" />

                                        </svg>

                                    </div>


                                    {{-- EMPTY STATE TITLE --}}
                                    <h4 class="mt-4 font-bold text-[#951A21]">
                                        @if(!($apiAvailable ?? false))
                                            Data historis belum dapat dimuat
                                        @else
                                            Data historis tidak ditemukan
                                        @endif
                                    </h4>


                                    {{-- EMPTY STATE DESCRIPTION --}}
                                    <p class="mx-auto mt-2 max-w-lg leading-7 text-gray-500">
                                        @if(!($apiAvailable ?? false))
                                            Sumber data sedang tidak dapat diakses.
                                            Silakan coba kembali beberapa saat lagi.
                                        @else
                                            Tidak ditemukan data historis yang sesuai
                                            dengan instrumen atau periode tanggal yang dipilih.
                                        @endif
                                    </p>

                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>


            </div>


           
{{-- =====================================================
     PAGINATION
====================================================== --}}
@if($historicalData->hasPages())

    <div class="flex flex-col gap-4 border-t border-[#951A21]/10 px-6 py-5 sm:flex-row sm:items-center sm:justify-between">

        {{-- JUMLAH DATA --}}
        <p class="text-sm text-gray-500">
            Menampilkan
            {{ $historicalData->firstItem() }}
            –
            {{ $historicalData->lastItem() }}
            dari
            {{ $historicalData->total() }} data
        </p>

        {{-- NAVIGASI HALAMAN --}}
        <div class="flex items-center justify-between gap-3">

            {{-- PREVIOUS --}}
            @if($historicalData->previousPageUrl())
                <a href="{{ $historicalData->previousPageUrl() }}"
                   class="inline-flex items-center gap-1 rounded-lg border border-[#951A21]/20 px-3 py-2 text-sm font-semibold text-[#951A21] transition hover:bg-[#951A21] hover:text-white">

                    <svg class="h-4 w-4"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M15 19l-7-7 7-7"/>
                    </svg>

                    Sebelumnya
                </a>
            @else
                <span class="inline-flex cursor-not-allowed items-center gap-1 rounded-lg border border-gray-200 px-3 py-2 text-sm font-semibold text-gray-300">
                    <svg class="h-4 w-4"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M15 19l-7-7 7-7"/>
                    </svg>
                    Sebelumnya
                </span>
            @endif


            {{-- CURRENT PAGE --}}
            <span class="whitespace-nowrap text-sm font-semibold text-[#951A21]">
                {{ $historicalData->currentPage() }}
                / 
                {{ $historicalData->lastPage() }}
            </span>


            {{-- NEXT --}}
            @if($historicalData->nextPageUrl())
                <a href="{{ $historicalData->nextPageUrl() }}"
                   class="inline-flex items-center gap-1 rounded-lg bg-[#951A21] px-3 py-2 text-sm font-semibold text-white transition hover:bg-[#74141A]">

                    Selanjutnya

                    <svg class="h-4 w-4"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            @else
                <span class="inline-flex cursor-not-allowed items-center gap-1 rounded-lg bg-gray-200 px-3 py-2 text-sm font-semibold text-gray-400">
                    Selanjutnya
                    <svg class="h-4 w-4"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 5l7 7-7 7"/>
                    </svg>
                </span>
            @endif

        </div>

    </div>

@endif


        </div>


        {{-- =====================================================
             CATATAN DATA
        ====================================================== --}}
        <div class="mt-6 rounded-xl border border-[#EFBB55] bg-ewf-hawkbit/20 p-5">

            <h3 class="font-bold text-[#951A21]">
                Catatan data
            </h3>

            <p class="mt-2 text-sm leading-6 text-[#51413E]">
                Data historis pada halaman ini bersumber dari NewsMaker.
                Data merupakan informasi harga pada periode sebelumnya dan
                digunakan untuk keperluan informasi. Pastikan satuan harga,
                zona waktu, serta validitas data diperhatikan sebelum digunakan
                sebagai referensi.
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
    const instrument = document.getElementById('instrument');
    const startDate = document.getElementById('start-date');
    const endDate = document.getElementById('end-date');
    const message = document.getElementById('filter-message');

    if (!form || !instrument || !startDate || !endDate || !message) {
        return;
    }

    // Validasi tanggal mulai
    startDate.addEventListener('change', function () {

        endDate.min = startDate.value;

        if (endDate.value && endDate.value < startDate.value) {
            endDate.value = '';
        }

    });


    // Validasi tanggal akhir
    endDate.addEventListener('change', function () {

        if (startDate.value) {
            endDate.min = startDate.value;
        }

    });

    // Otomatis tampilkan data saat instrumen diganti
instrument.addEventListener('change', function () {
    form.submit();
});


    // Proses submit filter
    form.addEventListener('submit', function (event) {

        message.classList.add('hidden');
        message.textContent = '';

        // Validasi instrumen
        if (!instrument.value) {

            event.preventDefault();

            message.textContent = 'Silakan pilih instrumen terlebih dahulu.';
            message.classList.remove('hidden');

            instrument.focus();

            return;
        }


        // Validasi rentang tanggal
        if (
            startDate.value &&
            endDate.value &&
            endDate.value < startDate.value
        ) {

            event.preventDefault();

            message.textContent = 'Tanggal akhir tidak boleh lebih awal dari tanggal mulai.';
            message.classList.remove('hidden');

            endDate.focus();

            return;
        }

        // Jika valid, form dikirim menggunakan GET ke Laravel.

    });

});
</script>

@endsection
