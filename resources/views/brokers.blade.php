@extends('layouts.public')

@section('title', 'Wakil Pialang | PT Equityworld Futures')

@section('content')

<main class="min-h-screen bg-white font-['DM_Sans'] text-[#25344F]">

    {{-- HERO SECTION --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">

        <div class="pointer-events-none absolute -right-32 -top-32 h-112.5 w-112.5 rounded-full border border-[#D5B893]/25"></div>
        <div class="pointer-events-none absolute -right-16 top-10 h-80 w-[320px] rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-36 -left-20 h-96 w-96 rounded-full bg-[#6F4D38]/30 blur-3xl"></div>
        <div class="pointer-events-none absolute right-1/4 top-1/3 h-64 w-64 rounded-full bg-[#632024]/30 blur-3xl"></div>
        <div class="pointer-events-none absolute right-16 top-0 hidden h-full w-px bg-linear-to-b from-transparent via-[#D5B893]/40 to-transparent lg:block"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-12 sm:px-8 lg:py-16">

            <div class="max-w-4xl">

                <div class="mb-4 flex items-center gap-4">
                    <span class="h-px w-10 bg-[#D5B893]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.28em] text-[#D5B893]">
                        PT Equityworld Futures
                    </span>
                </div>

                <div class="inline-flex items-center gap-3 rounded-full border border-[#D5B893]/30 bg-white/5 px-4 py-2 backdrop-blur-sm">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#D5B893]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m6-10a4 4 0 100-8 4 4 0 000 8zm10 10v-2a3 3 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                    </svg>

                    <span class="text-[11px] font-semibold uppercase tracking-[0.16em] text-[#E8D8C0]">
                        Informasi Perusahaan
                    </span>

                </div>

                <h1 class="mt-5 font-['Manrope'] text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                    Wakil Pialang
                    <span class="block text-[#D5B893]">Berjangka</span>
                </h1>

                <div class="mt-5 h-1 w-20 rounded-full bg-linear-to-r from-[#D5B893] to-[#632024]"></div>

                <p class="mt-4 max-w-2xl text-sm leading-7 text-white/80 sm:text-base">
                    Informasi daftar Wakil Pialang Berjangka PT Equityworld Futures
                    untuk kantor Surabaya – Trillium. Temukan informasi nama dan
                    nomor izin Wakil Pialang melalui halaman informasi resmi perusahaan.
                </p>

                <div class="mt-6 flex flex-wrap items-center gap-3">

                    <a href="#daftar-wakil-pialang"
                       class="group inline-flex items-center gap-2.5 rounded-lg bg-[#632024] px-5 py-3 text-xs font-bold text-white shadow-lg shadow-black/15 transition duration-300 hover:-translate-y-1 hover:bg-[#6F4D38]">

                        Lihat Daftar Wakil Pialang

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300 group-hover:translate-y-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>

                    </a>

                    <a href="#informasi-wakil-pialang"
                       class="inline-flex items-center gap-2 rounded-lg border border-[#D5B893]/60 px-5 py-3 text-xs font-bold text-[#F4E9D8] transition duration-300 hover:bg-[#D5B893] hover:text-[#25344F]">
                        Informasi Lebih Lanjut
                    </a>

                </div>

                <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3 border-t border-white/15 pt-5">

                    <div class="flex items-center gap-2.5">
                        <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>
                        <span class="text-xs font-medium tracking-wide text-white/70">
                            Surabaya – Trillium
                        </span>
                    </div>

                    <div class="hidden h-4 w-px bg-white/20 sm:block"></div>

                    <div class="flex items-center gap-2.5">
                        <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>
                        <span class="text-xs font-medium tracking-wide text-white/70">
                            Informasi Wakil Pialang Berjangka
                        </span>
                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- INFORMASI WAKIL PIALANG --}}
    <section id="informasi-wakil-pialang"
             class="relative overflow-hidden bg-linear-to-b from-white to-[#F8F5F0] py-10 lg:py-12">

        <div class="pointer-events-none absolute -right-20 top-20 h-72 w-72 rounded-full bg-[#D5B893]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 sm:px-8">

            <div class="grid gap-6 lg:grid-cols-[1fr_300px] lg:items-center">

                <div>

                    <div class="mb-4 flex items-center gap-3">
                        <span class="h-px w-10 bg-[#6F4D38]"></span>
                        <p class="text-[11px] font-extrabold uppercase tracking-[0.22em] text-[#6F4D38]">
                            Informasi Wakil Pialang
                        </p>
                    </div>

                    <h2 class="font-['Manrope'] text-2xl font-extrabold leading-tight text-[#25344F] sm:text-3xl">
                        Daftar Wakil Pialang
                        <span class="text-[#632024]">Berjangka</span>
                    </h2>

                    <div class="mt-4 h-1 w-16 rounded-full bg-[#D5B893]"></div>

                    <p class="mt-4 max-w-3xl text-sm leading-7 text-[#617891]">
                        Halaman ini menampilkan nama, nomor izin Wakil Pialang
                        Berjangka (WPB), dan status sebagaimana tercantum dalam
                        data yang diberikan. Gunakan fitur pencarian untuk
                        menemukan nama atau nomor izin tertentu dengan lebih mudah.
                    </p>

                </div>

                {{-- INFORMASI LOKASI --}}
                <div class="relative overflow-hidden rounded-xl border border-[#D5B893]/50 bg-white p-5 shadow-sm">

                    <div class="absolute right-0 top-0 h-24 w-24 rounded-bl-full bg-[#D5B893]/15"></div>

                    <div class="relative">

                        <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#617891]">
                            Lokasi Kantor
                        </p>

                        <div class="mt-3 flex items-center gap-3">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#25344F] text-[#D5B893]">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4M9 9v.01M9 12v.01M9 15v.01M9 18v.01M15 12v.01M15 15v.01M15 18v.01"/>
                                </svg>

                            </div>

                            <div>
                                <h3 class="font-['Manrope'] text-lg font-extrabold text-[#25344F]">
                                    Surabaya
                                </h3>
                                <p class="mt-0.5 text-xs font-medium text-[#6F4D38]">
                                    Trillium
                                </p>
                            </div>

                        </div>

                        <div class="mt-4 border-t border-[#D5B893]/40 pt-3">
                            <p class="text-xs leading-5 text-[#617891]">
                                Informasi Wakil Pialang Berjangka PT Equityworld Futures.
                            </p>
                        </div>

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

        {{-- DAFTAR WAKIL PIALANG --}}
    <section id="daftar-wakil-pialang"
             class="scroll-mt-24 bg-white px-5 py-10 sm:px-8 lg:py-12">

        <div class="mx-auto max-w-7xl">

            {{-- JUDUL SECTION --}}
            <div class="mb-6 flex flex-col justify-between gap-4 md:flex-row md:items-end">

                <div>

                    <div class="mb-3 flex items-center gap-3">
                        <span class="h-px w-10 bg-[#D5B893]"></span>
                        <p class="text-[11px] font-extrabold uppercase tracking-[0.22em] text-[#6F4D38]">
                            Data dan Legalitas
                        </p>
                    </div>

                    <h2 class="font-['Manrope'] text-2xl font-extrabold text-[#25344F] sm:text-3xl">
                        Daftar Wakil Pialang
                    </h2>

                    <p class="mt-2 max-w-2xl text-sm leading-6 text-[#617891]">
                        Surabaya – Trillium. Informasi nama dan nomor izin
                        Wakil Pialang Berjangka.
                    </p>

                </div>

                {{-- STATISTIK --}}
                <div class="relative overflow-hidden rounded-xl bg-linear-to-br from-[#25344F] to-[#632024] px-5 py-3.5 text-white shadow-sm">

                    <div class="absolute -right-5 -top-8 h-24 w-24 rounded-full border border-[#D5B893]/30"></div>

                    <div class="relative">

                        <p class="text-[10px] font-semibold uppercase tracking-[0.15em] text-[#D5B893]">
                            Total Terdaftar
                        </p>

                        <div class="mt-1 flex items-baseline gap-2">

                            <span class="font-['Manrope'] text-3xl font-extrabold">
                                {{ count($brokers) }}
                            </span>

                            <span class="text-xs font-medium text-white/80">
                                Wakil Pialang
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- TABEL UTAMA --}}
            <div class="overflow-hidden rounded-xl border border-[#D5B893]/40 bg-white shadow-sm">

                {{-- HEADER TABEL --}}
                <div class="border-b border-[#D5B893]/40 bg-linear-to-r from-[#F8F5F0] to-white p-4 sm:p-5">

                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

                        <div>

                            <div class="flex items-center gap-3">
                                <span class="h-7 w-1 rounded-full bg-[#632024]"></span>

                                <h3 class="font-['Manrope'] text-lg font-extrabold text-[#25344F]">
                                    Surabaya – Trillium
                                </h3>
                            </div>

                            <p class="mt-2 pl-4 text-xs text-[#617891]">
                                Daftar nama dan nomor izin Wakil Pialang Berjangka
                            </p>

                        </div>

                        <div class="inline-flex items-center gap-2.5 self-start rounded-lg border border-[#D5B893]/50 bg-white px-3 py-2">

                            <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#632024]/10 text-[#632024]">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M17 20h5v-2a3 3 0 00-5.196-2.03M9 20H2v-2a4 4 0 017.75-1.5M9 20h6m-6 0v-2a3 3 0 016 0v2m-3-9a3 3 0 100-6 3 3 0 000 6zm8-3a3 3 0 11-6 0 3 3 0 016 0z"/>

                                </svg>

                            </div>

                            <div>

                                <p class="text-[10px] font-semibold uppercase tracking-wider text-[#617891]">
                                    Jumlah Data
                                </p>

                                <p class="mt-0.5 font-['Manrope'] text-base font-extrabold text-[#25344F]">
                                    {{ count($brokers) }}
                                    <span class="text-[10px] font-semibold text-[#6F4D38]">
                                        Data
                                    </span>
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- PENCARIAN --}}
                    <div class="mt-5">

                        <label for="brokerSearch"
                               class="mb-2 block text-xs font-bold text-[#25344F]">
                            Cari Nama atau Nomor Izin
                        </label>

                        <div class="relative max-w-xl">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="pointer-events-none absolute left-3.5 top-1/2 h-4 w-4 -translate-y-1/2 text-[#6F4D38]"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 stroke-width="1.8">

                                <circle cx="11" cy="11" r="7"/>
                                <path stroke-linecap="round" d="M16 16l4 4"/>

                            </svg>

                            <input
                                id="brokerSearch"
                                type="search"
                                placeholder="Contoh: TAN JIMMY atau BAPPEBTI..."
                                class="w-full rounded-lg border border-[#D5B893]/60 bg-white py-2.5 pl-11 pr-4 text-sm text-[#25344F] outline-none transition duration-300 placeholder:text-[#617891]/70 hover:border-[#617891] focus:border-[#632024] focus:ring-2 focus:ring-[#632024]/10"
                            />

                        </div>

                        <p class="mt-2 text-[11px] text-[#617891]">
                            Pencarian tidak membedakan huruf besar dan huruf kecil.
                        </p>

                    </div>

                </div>


                {{-- TABEL DATA --}}
                <div class="overflow-x-auto">

                    <table class="w-full min-w-190 border-collapse text-left">

                        <thead>

                            <tr class="bg-[#25344F] text-white">

                                <th class="w-16 px-4 py-3 text-center text-[10px] font-bold uppercase tracking-[0.15em]">
                                    No.
                                </th>

                                <th class="px-4 py-3 text-[10px] font-bold uppercase tracking-[0.15em]">
                                    Nama Wakil Pialang
                                </th>

                                <th class="px-4 py-3 text-[10px] font-bold uppercase tracking-[0.15em]">
                                    Nomor Izin WPB
                                </th>

                                <th class="w-28 px-4 py-3 text-center text-[10px] font-bold uppercase tracking-[0.15em]">
                                    Status
                                </th>

                            </tr>

                        </thead>

                        <tbody id="brokerTableBody" class="divide-y divide-[#E9E3DB]">

                            @foreach ($brokers as $index => $broker)

                                <tr
                                    class="broker-row transition duration-200 hover:bg-[#F8F5F0]"
                                    data-search="{{ strtolower($broker['name'] . ' ' . $broker['license'] . ' ' . $broker['status']) }}"
                                >

                                    <td class="px-4 py-2.5 text-center">

                                        <span class="inline-flex h-6 w-6 items-center justify-center rounded-md bg-[#F3EFE8] text-[10px] font-bold text-[#6F4D38]">
                                            {{ $index + 1 }}
                                        </span>

                                    </td>

                                    <td class="px-4 py-2.5">

                                        <span class="text-xs font-bold text-[#25344F]">
                                            {{ $broker['name'] }}
                                        </span>

                                    </td>

                                    <td class="px-4 py-2.5">

                                        <span class="font-mono text-[11px] font-medium tracking-wide text-[#617891] sm:text-xs">
                                            {{ $broker['license'] }}
                                        </span>

                                    </td>

                                    <td class="px-4 py-2.5 text-center">

                                        <span class="inline-flex items-center gap-1.5 rounded-full border border-[#D5B893]/60 bg-[#F8F5F0] px-2.5 py-1 text-[10px] font-bold text-[#6F4D38]">

                                            <span class="h-1.5 w-1.5 rounded-full bg-[#6F4D38]"></span>

                                            {{ $broker['status'] }}

                                        </span>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                    {{-- TIDAK ADA HASIL --}}
                    <div id="brokerNoResult" class="hidden px-6 py-10 text-center">

                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-[#F3EFE8] text-[#6F4D38]">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 stroke-width="1.8">

                                <circle cx="11" cy="11" r="7"/>
                                <path stroke-linecap="round" d="M16 16l4 4"/>

                            </svg>

                        </div>

                        <h4 class="mt-3 font-['Manrope'] text-base font-bold text-[#25344F]">
                            Data Tidak Ditemukan
                        </h4>

                        <p class="mt-1 text-xs text-[#617891]">
                            Tidak ada wakil pialang yang sesuai dengan pencarian.
                        </p>

                    </div>

                </div>


                {{-- FOOTER TABEL --}}
                <div class="flex flex-col gap-2 border-t border-[#D5B893]/40 bg-[#F8F5F0] px-4 py-3 sm:flex-row sm:items-center sm:justify-between">

                    <p id="brokerResultCount"
                       class="text-xs font-medium text-[#617891]"
                       aria-live="polite">
                        Menampilkan {{ count($brokers) }} data wakil pialang.
                    </p>

                    <button
                        id="resetBrokerSearch"
                        type="button"
                        class="inline-flex items-center justify-center gap-2 self-start rounded-lg px-3 py-2 text-[11px] font-bold text-[#632024] transition duration-300 hover:bg-[#632024] hover:text-white sm:self-auto"
                    >

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="1.8">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M4 4v5h5M20 20v-5h-5M5.6 15a7 7 0 0012.8 2M18.4 9A7 7 0 005.6 7"/>

                        </svg>

                        Reset Pencarian

                    </button>

                </div>

            </div>


            {{-- CATATAN DATA --}}
            <div class="mt-4 flex items-start gap-3 rounded-lg border border-[#D5B893]/40 bg-[#F8F5F0] px-4 py-3">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="mt-0.5 h-4 w-4 shrink-0 text-[#6F4D38]"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="1.8">

                    <circle cx="12" cy="12" r="9"/>
                    <path stroke-linecap="round" d="M12 11v5m0-8h.01"/>

                </svg>

                <p class="text-[11px] leading-5 text-[#617891]">
                    Catatan: daftar dan status pada halaman ini mengikuti data
                    yang diberikan dan perlu dicocokkan dengan sumber resmi terbaru.
                </p>

            </div>

        </div>

    </section>


    {{-- PERINGATAN PENIPUAN --}}
    <section class="relative overflow-hidden bg-linear-to-b from-[#F8F5F0] to-white px-5 py-10 sm:px-8 lg:py-12">

        <div class="mx-auto max-w-7xl">

            <div class="relative isolate overflow-hidden rounded-2xl bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] shadow-lg shadow-[#25344F]/10">

                <div class="pointer-events-none absolute -right-20 -top-24 h-80 w-80 rounded-full border border-[#D5B893]/25"></div>
                <div class="pointer-events-none absolute -right-10 -bottom-32 h-80 w-80 rounded-full bg-[#6F4D38]/30 blur-3xl"></div>
                <div class="pointer-events-none absolute left-0 top-0 h-full w-1 bg-[#D5B893]"></div>

                <div class="relative p-5 sm:p-7">

                    <div class="flex flex-col gap-4 sm:flex-row sm:items-start">

                        {{-- ICON --}}
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl border border-[#D5B893]/40 bg-white/10 text-[#D5B893]">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 stroke-width="1.7">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M12 9v3m0 4h.01M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>

                            </svg>

                        </div>

                        {{-- KONTEN PERINGATAN --}}
                        <div class="flex-1">

                            <div class="flex items-center gap-3">
                                <span class="h-px w-7 bg-[#D5B893]"></span>
                                <p class="text-[10px] font-extrabold uppercase tracking-[0.22em] text-[#D5B893]">
                                    Pemberitahuan Penting
                                </p>
                            </div>

                            <h2 class="mt-2 font-['Manrope'] text-xl font-extrabold text-white sm:text-2xl">
                                PERHATIAN
                            </h2>

                            <div class="mt-3 h-1 w-14 rounded-full bg-[#D5B893]"></div>

                            <p class="mt-4 max-w-4xl text-xs leading-6 text-white/80 sm:text-sm">
                                PT Equityworld Futures mengingatkan masyarakat untuk
                                selalu waspada terhadap penipuan yang mengatasnamakan
                                perusahaan melalui media apa pun. Pastikan seluruh
                                transaksi dan setoran hanya dilakukan ke Rekening
                                Terpisah (Segregated Account) resmi atas nama
                                PT Equityworld Futures, bukan perseorangan.
                            </p>

                            {{-- INFORMASI TAMBAHAN --}}
                            <div class="mt-4 rounded-xl border border-[#D5B893]/30 bg-white/5 p-3.5 backdrop-blur-sm">

                                <div class="flex items-start gap-2.5">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="mt-0.5 h-4 w-4 shrink-0 text-[#D5B893]"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor"
                                         stroke-width="1.8">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 3c-2.755 0-5.275.93-7.294 2.484A12.04 12.04 0 004 12c0 4.418 3.582 8 8 8s8-3.582 8-8c0-1.409-.365-2.733-1.006-3.884"/>

                                    </svg>

                                    <p class="text-xs leading-6 text-[#F0E5D5]">
                                        Pastikan identitas pihak yang menghubungi kamu
                                        dan informasi rekening melalui saluran resmi
                                        perusahaan sebelum melakukan transaksi atau
                                        penyetoran dana.
                                    </p>

                                </div>

                            </div>

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
        const noResult = document.getElementById('brokerNoResult');

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

            noResult.classList.toggle('hidden', visibleCount !== 0);

        }

        // PENCARIAN OTOMATIS
        searchInput.addEventListener('input', filterBrokers);

        // RESET PENCARIAN
        resetButton.addEventListener('click', function () {

            searchInput.value = '';

            filterBrokers();

            searchInput.focus();

        });

    });
</script>

@endsection
