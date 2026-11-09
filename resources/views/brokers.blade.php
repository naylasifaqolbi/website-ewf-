
@extends('layouts.public')

@section('title', 'Wakil Pialang | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-[#FFF9F0]">

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-[#6D1720] text-white">
        <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full bg-[#951A21] blur-3xl"></div>
        <div class="absolute -bottom-20 left-1/3 h-56 w-56 rounded-full bg-[#FFA368]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
            <span class="inline-flex items-center gap-2 rounded-full border border-[#FFD66E]/30 bg-white/5 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-[#FFD66E]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m6-10a4 4 0 100-8 4 4 0 000 8zm10 10v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                </svg>
                Informasi Perusahaan
            </span>

            <h1 class="mt-5 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Wakil Pialang
            </h1>

            <p class="mt-5 max-w-3xl leading-8 text-white/80 sm:text-lg">
                Informasi daftar Wakil Pialang Berjangka PT Equityworld Futures
                untuk kantor Surabaya – Trillium.
            </p>

            <a href="#daftar-wakil-pialang"
               class="mt-8 inline-flex items-center gap-2 rounded-xl bg-[#FFD66E] px-6 py-3 font-bold text-[#6D1720] transition hover:bg-[#EFBB55]">
                Lihat Daftar Wakil Pialang
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
        </div>
    </section>


    {{-- PENJELASAN --}}
    <section class="mx-auto max-w-7xl px-5 py-12 lg:px-8">
        <div class="grid gap-6 md:grid-cols-[1fr_auto] md:items-center">
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.15em] text-[#951A21]">
                    Informasi Wakil Pialang
                </p>

                <h2 class="mt-3 text-2xl font-extrabold text-[#6D1720] sm:text-3xl">
                    Daftar Wakil Pialang Berjangka
                </h2>

                <p class="mt-4 max-w-3xl leading-8 text-[#675653]">
                    Halaman ini menampilkan nama, nomor izin Wakil Pialang Berjangka
                    (WPB), dan status sebagaimana tercantum dalam data yang diberikan.
                    Gunakan pencarian untuk menemukan nama atau nomor izin tertentu.
                </p>
            </div>

            <div class="rounded-2xl border border-[#EAD8CB] bg-white p-5 md:min-w-52">
                <p class="text-sm text-[#786662]">Lokasi Kantor</p>
                <div class="mt-2 flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#FBE5D6] text-[#951A21]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4M9 9v.01M9 12v.01M9 15v.01M9 18v.01M15 12v.01M15 15v.01M15 18v.01"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-extrabold text-[#6D1720]">Surabaya</p>
                        <p class="text-sm text-[#786662]">Trillium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- DATA WAKIL PIALANG --}}
    @php
        $brokers = [
            ['name' => 'TAN JIMMY TANRIAN', 'license' => '495/BAPPEBTI/ SI/07/2009', 'status' => 'Aktif'],
            ['name' => 'CHOIRUL AMIN', 'license' => '051/UPP/SI/02/2014', 'status' => 'Aktif'],
            ['name' => 'RIA HERMAWATI', 'license' => '407/BAPPEBTI/SI/05/2009', 'status' => 'Aktif'],
            ['name' => 'BETANTY PRASETYA SADEWI', 'license' => '052/UPP/SI/02/2014', 'status' => 'Aktif'],
            ['name' => 'YULINUR PRASTIANI', 'license' => '049/UPP/SI/02/2014', 'status' => 'Aktif'],
            ['name' => 'ENDIK BUDI WALUYO', 'license' => '095/UPTP/SI/06/2015', 'status' => 'Aktif'],
            ['name' => 'JIHAN JOHANITA', 'license' => '098/UPTP/SI/06/2015', 'status' => 'Aktif'],
            ['name' => 'NISSA AULIYAH PUSPITA', 'license' => '106/UPTP/SI/06/2015', 'status' => 'Aktif'],
            ['name' => 'C. DEDY SULISTIYANTO', 'license' => '124/UPTP/SI/07/2015', 'status' => 'Aktif'],
            ['name' => 'GINTA', 'license' => '125/UPTP/SI/07/2015', 'status' => 'Aktif'],
            ['name' => 'NURLAILIN', 'license' => '130/UPTP/SI/07/2015', 'status' => 'Aktif'],
            ['name' => 'SRI KADARWATI', 'license' => '132/UPTP/SI/07/2015', 'status' => 'Aktif'],
            ['name' => 'FECHY EVER PONGOH', 'license' => '144/UPTP/SI/07/2015', 'status' => 'Aktif'],
            ['name' => 'ITA MELANI', 'license' => '169/UPTP/SI/07/2015', 'status' => 'Aktif'],
            ['name' => 'SITI NURHAYATI', 'license' => '0109/UPTP/SI/8/2017', 'status' => 'Aktif'],
            ['name' => 'CAHYO NUNGARSO SETIADJI', 'license' => '044/UPP/SI/02/2014', 'status' => 'Aktif'],
            ['name' => 'HERVINA PUJIASTUTI', 'license' => '0113/UPTP/SI/07/2018', 'status' => 'Aktif'],
            ['name' => 'BAMBANG HARIYONO', 'license' => '577/BAPPEBTI/SI/09/2009', 'status' => 'Aktif'],
            ['name' => 'INDAH CUDI ALOUIS', 'license' => '0164/UPTP/SI/8/2018', 'status' => 'Aktif'],
            ['name' => 'CHRISTIANA', 'license' => '210/BAPPEBTI/SI/04/2011', 'status' => 'Aktif'],
            ['name' => 'ANITA RAHMA KRISNAWATI', 'license' => '330/BAPPEBTI/SI/07/2011', 'status' => 'Aktif'],
            ['name' => 'DEBORACHTI MOREJANI', 'license' => '0158/UPTP/SI/8/2018', 'status' => 'Aktif'],
            ['name' => 'ANDA OKTOBA', 'license' => '0148/UPTP/SI/8/2018', 'status' => 'Aktif'],
            ['name' => 'RUDY EFFENDY', 'license' => '360/BAPPEBTI/SI/08/2011', 'status' => 'Aktif'],
            ['name' => 'NENNI ENDAH SAFITRI', 'license' => '445/BAPPEBTI/SI/09/2011', 'status' => 'Aktif'],
            ['name' => 'ANDRI NANSETYO TRIPRATAMA', 'license' => '123/BAPPEBTI/SI/02/2012', 'status' => 'Aktif'],
            ['name' => 'DIAH APRILIANI SANTOSO', 'license' => '0027/UPTP/SI/2/2019', 'status' => 'Aktif'],
            ['name' => 'PENNY MARANTI', 'license' => '046/UPP/SI/02/2014', 'status' => 'Aktif'],
            ['name' => 'DEDY WAHYULIANTO', 'license' => '0108/UPTP/SI/06/2019', 'status' => 'Aktif'],
            ['name' => 'ACHMAD FARID', 'license' => '0134/UPTP/SI/08/2016', 'status' => 'Aktif'],
            ['name' => 'ANDREAS NATHANIEL', 'license' => '0091/UPTP/SI/04/2020', 'status' => 'Aktif'],
            ['name' => 'TRIUS ANDIANTO', 'license' => '0139/UPTP/SI/7/2020', 'status' => 'Aktif'],
            ['name' => 'DIMAS HENDRA NURDIANSA', 'license' => '0215/UPTP/SI/10/2020', 'status' => 'Aktif'],
            ['name' => 'FARIZ BUDIONO', 'license' => '0245/UPTP/SI/11/2020', 'status' => 'Aktif'],
            ['name' => 'MAKHFIRAH', 'license' => '0320/UPTP/SI/12/2020', 'status' => 'Aktif'],
            ['name' => 'CRISTHISHA BAYU IRWANDA', 'license' => '0128/UPTP/SI/09/2021', 'status' => 'Aktif'],
            ['name' => 'SUSIE BROTOMUHALIM', 'license' => '0012/UPTP/SI/01/2022', 'status' => 'Aktif'],
            ['name' => 'IWAN KURNIAWAN', 'license' => '383/UPTP/SI/12/2022', 'status' => 'Aktif'],
            ['name' => 'ADIETYA YUDHISTIRA', 'license' => '0046/UPTP/SI/1/2023', 'status' => 'Aktif'],
            ['name' => 'DANIAR NOVANDYA', 'license' => '0072/UPTP/SI/1/2023', 'status' => 'Aktif'],
            ['name' => 'ARINDI PUSFITASARI', 'license' => '0047/UPTP/SI/1/2023', 'status' => 'Aktif'],
            ['name' => 'STEFFY ENGELHARD KATIHO', 'license' => '0042/UPTP/SI/1/2023', 'status' => 'Aktif'],
            ['name' => 'NI GUSTI NYOMAN LILA ANDINI', 'license' => '0243/UPTP/S1/3/2023', 'status' => 'Aktif'],
            ['name' => 'YUDHA CHRISTIAN NUGROHO', 'license' => '0315/UPTP/S1/4/2023', 'status' => 'Aktif'],
            ['name' => 'TIO ANUGRAH PRADANA', 'license' => '0316/UPTP/S1/4/2023', 'status' => 'Aktif'],
            ['name' => 'TATIK IRAWATI', 'license' => '0317/UPTP/S1/4/2023', 'status' => 'Aktif'],
            ['name' => 'RIFKI AGUS TRI SATYA UTAMA', 'license' => '0318/UPTP/S1/4/2023', 'status' => 'Aktif'],
            ['name' => 'ELISABETH', 'license' => '0346/UPTP/SI/4/2023', 'status' => 'Aktif'],
            ['name' => 'FEBBY AYU SAFITRI', 'license' => '0427/UPTP/SI/6/2023', 'status' => 'Aktif'],
            ['name' => 'CATUR AYU WULANDARI', 'license' => '0431/UPTP/SI/6/2023', 'status' => 'Aktif'],
            ['name' => 'FITRI ANIS SYALFAH', 'license' => '0434/UPTP/SI/6/2023', 'status' => 'Aktif'],
            ['name' => 'WINNI ROVICA WIHARTO PUTRI', 'license' => '0456/UPTP/SI/6/2023', 'status' => 'Aktif'],
            ['name' => 'YOHANES EKSELENSO A KORBAFFO', 'license' => '0472/UPTP/SI/6/2023', 'status' => 'Aktif'],
            ['name' => 'ROBBI SASMITA HARJA', 'license' => '0575/UPTP/SI/8/2023', 'status' => 'Aktif'],
            ['name' => 'HENI PUJIASTUTI', 'license' => '0609/UPTP/SI/8/2023', 'status' => 'Aktif'],
            ['name' => 'NOVI LESTARI', 'license' => '0610/UPTP/SI/8/2023', 'status' => 'Aktif'],
            ['name' => 'ISMAWATI', 'license' => '0611/UPTP/SI/8/2023', 'status' => 'Aktif'],
            ['name' => 'ABDUL ROZAK', 'license' => '0612/UPTP/SI/8/2023', 'status' => 'Aktif'],
            ['name' => 'ANDHIKA JAYAPURBAYA', 'license' => '0614/UPTP/SI/8/2023', 'status' => 'Aktif'],
            ['name' => 'MUHAMMAD IDRIS RIDHOI', 'license' => '0616/UPTP/SI/8/2023', 'status' => 'Aktif'],
            ['name' => 'DANIK RAHMAWATI', 'license' => '744/UPTP/SI/10/2023', 'status' => 'Aktif'],
            ['name' => 'FARIS WILDAN MUTAWALLY', 'license' => '746/UPTP/SI/10/2023', 'status' => 'Aktif'],
            ['name' => 'YAKUB KUSWANTO', 'license' => '891/UPTP/SI/12/2023', 'status' => 'Aktif'],
            ['name' => 'RENDY ANGGARA PUTRA', 'license' => '864/UPTP/SI/12/2023', 'status' => 'Aktif'],
            ['name' => 'TRI LESTIONINGRUM', 'license' => '884/UPTP/SI/12/2023', 'status' => 'Aktif'],
            ['name' => 'SELY NUR AZIZAH', 'license' => '861/UPTP/SI/12/2023', 'status' => 'Aktif'],
            ['name' => 'NAWARDI', 'license' => '853/UPTP/SI/12/2023', 'status' => 'Aktif'],
            ['name' => 'FANNY OKTAVIANI L', 'license' => '844/UPTP/SI/12/2023', 'status' => 'Aktif'],
            ['name' => 'YANI DWI LESTARI', 'license' => '070/UPTP/SI/9/2025', 'status' => 'Aktif'],
        ];
    @endphp

    <section id="daftar-wakil-pialang" class="scroll-mt-24 pb-16">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">

            <div class="overflow-hidden rounded-3xl border border-[#EAD8CB] bg-white shadow-sm">

                {{-- HEADER TABEL --}}
                <div class="border-b border-[#EAD8CB] bg-white p-5 sm:p-7">
                    <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">
                        <div>
                            <h2 class="text-xl font-extrabold text-[#6D1720] sm:text-2xl">
                                Surabaya – Trillium
                            </h2>
                            <p class="mt-2 text-sm text-[#786662]">
                                Daftar nama dan nomor izin Wakil Pialang Berjangka
                            </p>
                        </div>

                        <div class="rounded-xl bg-[#FBE5D6] px-4 py-3">
                            <p class="text-xs font-semibold text-[#786662]">
                                Jumlah data
                            </p>
                            <p class="mt-1 text-2xl font-extrabold text-[#951A21]">
                                {{ count($brokers) }}
                                <span class="text-sm font-semibold">Wakil Pialang</span>
                            </p>
                        </div>
                    </div>

                    {{-- PENCARIAN --}}
                    <div class="mt-6">
                        <label for="brokerSearch" class="mb-2 block text-sm font-bold text-[#6D1720]">
                            Cari nama atau nomor izin
                        </label>

                        <div class="relative max-w-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-[#951A21]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <circle cx="11" cy="11" r="7"/>
                                <path stroke-linecap="round" d="M16 16l4 4"/>
                            </svg>

                            <input
                                id="brokerSearch"
                                type="search"
                                placeholder="Contoh: TAN JIMMY atau BAPPEBTI..."
                                class="w-full rounded-xl border border-[#EAD8CB] bg-[#FFF9F0] py-3 pl-12 pr-4 text-sm text-[#51413E] outline-none transition placeholder:text-[#A4938D] focus:border-[#951A21] focus:ring-2 focus:ring-[#951A21]/10"
                            />
                        </div>

                        <p class="mt-2 text-xs text-[#786662]">
                            Pencarian tidak membedakan huruf besar dan huruf kecil.
                        </p>
                    </div>
                </div>


                {{-- TABEL --}}
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[760px] border-collapse text-left">
                        <thead>
                            <tr class="bg-[#6D1720] text-white">
                                <th class="w-20 px-5 py-4 text-center text-xs font-bold uppercase tracking-wider">
                                    No.
                                </th>
                                <th class="px-5 py-4 text-xs font-bold uppercase tracking-wider">
                                    Nama
                                </th>
                                <th class="px-5 py-4 text-xs font-bold uppercase tracking-wider">
                                    Nomor Izin WPB
                                </th>
                                <th class="w-36 px-5 py-4 text-center text-xs font-bold uppercase tracking-wider">
                                    Status
                                </th>
                            </tr>
                        </thead>

                        <tbody id="brokerTableBody" class="divide-y divide-[#F0E4DC]">
                            @foreach ($brokers as $index => $broker)
                                <tr
                                    class="broker-row transition hover:bg-[#FFF5E8]"
                                    data-search="{{ strtolower($broker['name'] . ' ' . $broker['license'] . ' ' . $broker['status']) }}"
                                >
                                    <td class="px-5 py-4 text-center text-sm text-[#786662]">
                                        {{ $index + 1 }}
                                    </td>

                                    <td class="px-5 py-4">
                                        <span class="font-bold text-[#6D1720]">
                                            {{ $broker['name'] }}
                                        </span>
                                    </td>

                                    <td class="px-5 py-4">
                                        <span class="font-mono text-sm text-[#51413E]">
                                            {{ $broker['license'] }}
                                        </span>
                                    </td>

                                    <td class="px-5 py-4 text-center">
                                        <span class="inline-flex items-center gap-2 rounded-full border border-green-200 bg-green-50 px-3 py-1.5 text-xs font-bold text-green-700">
                                            <span class="h-2 w-2 rounded-full bg-green-500"></span>
                                            {{ $broker['status'] }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- HASIL PENCARIAN --}}
                <div class="flex flex-col gap-2 border-t border-[#EAD8CB] bg-[#FFF9F0] px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
                    <p id="brokerResultCount" class="text-sm text-[#675653]" aria-live="polite">
                        Menampilkan {{ count($brokers) }} data wakil pialang.
                    </p>

                    <button
                        id="resetBrokerSearch"
                        type="button"
                        class="self-start rounded-lg px-3 py-2 text-sm font-bold text-[#951A21] transition hover:bg-[#FBE5D6] sm:self-auto"
                    >
                        Reset pencarian
                    </button>
                </div>
            </div>

            <p class="mt-4 text-xs leading-6 text-[#786662]">
                Catatan: daftar dan status pada halaman ini mengikuti data yang
                diberikan dan perlu dicocokkan dengan sumber resmi terbaru.
            </p>

        </div>
    </section>


    {{-- PERINGATAN PENIPUAN --}}
    <section class="mx-auto max-w-7xl px-5 pb-16 lg:px-8">
        <div class="overflow-hidden rounded-3xl border border-[#E9B5AD] bg-white shadow-sm">
            <div class="h-2 bg-[#CF3021]"></div>

            <div class="p-6 sm:p-9">
                <div class="flex flex-col gap-5 sm:flex-row sm:items-start">
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-[#FCE7E3] text-[#CF3021]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 4h.01M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>
                        </svg>
                    </div>

                    <div class="flex-1">
                        <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#CF3021]">
                            Pemberitahuan Penting
                        </p>

                        <h2 class="mt-2 text-2xl font-extrabold text-[#6D1720] sm:text-3xl">
                            PERHATIAN
                        </h2>

                        <p class="mt-4 leading-8 text-[#675653]">
                            PT Equityworld Futures mengingatkan masyarakat untuk selalu
                            waspada terhadap penipuan yang mengatasnamakan perusahaan
                            melalui media apa pun. Pastikan seluruh transaksi dan setoran
                            hanya dilakukan ke Rekening Terpisah (Segregated Account)
                            resmi atas nama PT Equityworld Futures, bukan perseorangan.
                        </p>

                        <div class="mt-5 rounded-xl bg-[#FFF4F1] p-4">
                            <p class="text-sm leading-7 text-[#8D2921]">
                                Pastikan identitas pihak yang menghubungi kamu dan
                                informasi rekening melalui saluran resmi perusahaan
                                sebelum melakukan transaksi atau penyetoran dana.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


{{-- JAVASCRIPT PENCARIAN TABEL --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('brokerSearch');
        const resetButton = document.getElementById('resetBrokerSearch');
        const rows = Array.from(document.querySelectorAll('.broker-row'));
        const resultCount = document.getElementById('brokerResultCount');

        function filterBrokers() {
            const keyword = searchInput.value.trim().toLowerCase();
            let visibleCount = 0;

            rows.forEach(function (row) {
                const searchableText = row.dataset.search || '';
                const matches = searchableText.includes(keyword);

                row.classList.toggle('hidden', !matches);

                if (matches) {
                    visibleCount++;
                }
            });

            resultCount.textContent =
                'Menampilkan ' + visibleCount + ' dari ' +
                rows.length + ' data wakil pialang.';
        }

        searchInput.addEventListener('input', filterBrokers);

        resetButton.addEventListener('click', function () {
            searchInput.value = '';
            filterBrokers();
            searchInput.focus();
        });
    });
</script>
@endsection
