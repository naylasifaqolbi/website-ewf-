
<footer id="footer" class="relative isolate overflow-hidden bg-[#25344F] text-white">

    {{-- =====================================================
        BACKGROUND DECORATION
    ====================================================== --}}
    <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">

        {{-- Coffee decoration --}}
        <div class="absolute -right-32 -top-32 h-105 w-105 rounded-full bg-[#6F4D38]/35 blur-[100px]"></div>

        {{-- Burgundy decoration --}}
        <div class="absolute -bottom-40 -left-32 h-105 w-105 rounded-full bg-[#632024]/40 blur-[110px]"></div>

        {{-- Tan glow --}}
        <div class="absolute right-[38%] top-[45%] h-64 w-64 rounded-full bg-[#D5B893]/10 blur-[100px]"></div>

        {{-- Subtle pattern --}}
        <div class="absolute inset-0 opacity-[0.06]"
             style="background-image: radial-gradient(#FFFFFF 1px, transparent 1px); background-size: 28px 28px;">
        </div>

        {{-- Decorative circle --}}
        <div class="absolute -right-20 bottom-20 h-72 w-72 rounded-full border border-[#D5B893]/20"></div>
        <div class="absolute -right-10 bottom-32 h-52 w-52 rounded-full border border-[#D5B893]/15"></div>

    </div>

    {{-- =====================================================
        TOP ACCENT
    ====================================================== --}}
    <div class="h-1.5 w-full bg-linear-to-r from-[#632024] via-[#D5B893] to-[#6F4D38]"></div>


    {{-- =====================================================
        FOOTER MAIN CONTENT
    ====================================================== --}}
    <div class="relative mx-auto max-w-7xl px-5 pb-14 pt-16 sm:px-8 lg:px-10 lg:pt-20">

        <div class="grid gap-12 lg:grid-cols-12 lg:gap-10">

            {{-- =================================================
                COMPANY IDENTITY
            ================================================== --}}
            <div class="lg:col-span-5">

                {{-- Brand --}}
                <a href="{{ route('home') }}"
                   class="group inline-flex items-center gap-4"
                   aria-label="PT Equityworld Futures - Beranda">

                    {{-- Logo box --}}
                    <div class="relative flex h-17 w-17 shrink-0 items-center justify-center overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-linear-to-br from-[#6F4D38] to-[#632024] shadow-xl shadow-black/20 transition duration-300 group-hover:-translate-y-1">

                        <div class="absolute -right-4 -top-4 h-12 w-12 rounded-full border border-white/20"></div>

                        <span class="relative text-xl font-black tracking-widest text-white">
                            EWF
                        </span>
                    </div>

                    {{-- Brand name --}}
                    <div>
                        <span class="block text-xl font-extrabold tracking-[0.13em] text-white sm:text-2xl">
                            EQUITYWORLD
                        </span>

                        <span class="mt-1.5 block text-[11px] font-bold tracking-[0.42em] text-[#D5B893]">
                            FUTURES
                        </span>
                    </div>

                </a>


                {{-- Decorative divider --}}
                <div class="mt-8 flex items-center gap-3">
                    <span class="h-1 w-12 rounded-full bg-[#D5B893]"></span>
                    <span class="h-1 w-5 rounded-full bg-[#6F4D38]"></span>
                    <span class="h-1 w-2 rounded-full bg-[#632024]"></span>
                </div>


                {{-- Description --}}
                <p class="mt-7 max-w-md text-sm leading-8 text-[#F4F1EB]">
                    PT Equityworld Futures menyediakan informasi perusahaan,
                    produk, layanan, legalitas, serta informasi terkait
                    perdagangan berjangka sebagai bagian dari komitmen
                    terhadap keterbukaan informasi kepada masyarakat.
                </p>


                {{-- Company CTA --}}
                <a href="{{ route('profile') }}"
                   class="group mt-8 inline-flex items-center gap-3 rounded-xl border border-[#D5B893]/60 bg-[#6F4D38]/35 px-5 py-3.5 text-sm font-bold text-[#F5DDB7] shadow-lg shadow-black/10 transition duration-300 hover:border-[#D5B893] hover:bg-[#D5B893] hover:text-[#25344F]">

                    <span>Mengenal Perusahaan</span>

                    <span class="text-lg transition-transform duration-300 group-hover:translate-x-1">
                        →
                    </span>

                </a>


                {{-- Brand decoration card --}}
                <div class="mt-10 max-w-md rounded-2xl border border-white/10 bg-white/6 p-5 backdrop-blur-sm">

                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#D5B893]/15 text-[#E9CFA5]">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="1.7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 3v18m-7-7 7 7 7-7M5 7l7-4 7 4"/>
                            </svg>
                        </div>

                        <div>
                            <p class="text-sm font-bold text-white">
                                Informasi Perusahaan
                            </p>

                            <p class="mt-1 text-xs leading-5 text-[#D8DDE5]">
                                Kenali profil, layanan, dan informasi resmi perusahaan.
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                NAVIGATION
            ================================================== --}}
            <div class="lg:col-span-3">

                {{-- Heading --}}
                <div class="mb-7">
                    <span class="text-[10px] font-extrabold uppercase tracking-[0.3em] text-[#D5B893]">
                        Explore
                    </span>

                    <h2 class="mt-2 text-lg font-extrabold text-white">
                        Navigasi
                    </h2>

                    <div class="mt-3 h-0.5 w-12 rounded-full bg-[#D5B893]"></div>
                </div>


                <ul class="space-y-4 text-sm">

                    <li>
                        <a href="{{ route('home') }}"
                           class="group inline-flex items-center gap-3 text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="flex h-6 w-6 items-center justify-center rounded-md bg-white/10 text-[11px] text-[#D5B893] transition duration-300 group-hover:bg-[#D5B893] group-hover:text-[#25344F]">
                                →
                            </span>

                            <span>Beranda</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}"
                           class="group inline-flex items-center gap-3 text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="flex h-6 w-6 items-center justify-center rounded-md bg-white/10 text-[11px] text-[#D5B893] transition duration-300 group-hover:bg-[#D5B893] group-hover:text-[#25344F]">
                                →
                            </span>

                            <span>Tentang Kami</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('products') }}"
                           class="group inline-flex items-center gap-3 text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="flex h-6 w-6 items-center justify-center rounded-md bg-white/10 text-[11px] text-[#D5B893] transition duration-300 group-hover:bg-[#D5B893] group-hover:text-[#25344F]">
                                →
                            </span>

                            <span>Produk dan Layanan</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('facilities') }}"
                           class="group inline-flex items-center gap-3 text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="flex h-6 w-6 items-center justify-center rounded-md bg-white/10 text-[11px] text-[#D5B893] transition duration-300 group-hover:bg-[#D5B893] group-hover:text-[#25344F]">
                                →
                            </span>

                            <span>Fasilitas Layanan</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('historical-data') }}"
                           class="group inline-flex items-center gap-3 text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="flex h-6 w-6 items-center justify-center rounded-md bg-white/10 text-[11px] text-[#D5B893] transition duration-300 group-hover:bg-[#D5B893] group-hover:text-[#25344F]">
                                →
                            </span>

                            <span>Data Historis</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('news.index') }}"
                           class="group inline-flex items-center gap-3 text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="flex h-6 w-6 items-center justify-center rounded-md bg-white/10 text-[11px] text-[#D5B893] transition duration-300 group-hover:bg-[#D5B893] group-hover:text-[#25344F]">
                                →
                            </span>

                            <span>Berita</span>
                        </a>
                    </li>

                </ul>

            </div>


            {{-- =================================================
                COMPANY INFORMATION
            ================================================== --}}
            <div class="lg:col-span-4">

                {{-- Heading --}}
                <div class="mb-7">
                    <span class="text-[10px] font-extrabold uppercase tracking-[0.3em] text-[#D5B893]">
                        Company
                    </span>

                    <h2 class="mt-2 text-lg font-extrabold text-white">
                        Informasi Perusahaan
                    </h2>

                    <div class="mt-3 h-0.5 w-12 rounded-full bg-[#632024]"></div>
                </div>


                <ul class="grid gap-x-5 gap-y-4 sm:grid-cols-2 lg:grid-cols-1">

                    <li>
                        <a href="{{ route('profile') }}"
                           class="group flex items-center gap-3 text-sm text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="h-2 w-2 shrink-0 rotate-45 rounded-xs bg-[#D5B893] transition duration-300 group-hover:rotate-90 group-hover:bg-[#F0D2A0]"></span>

                            <span>Profil Perusahaan</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('legality') }}"
                           class="group flex items-center gap-3 text-sm text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="h-2 w-2 shrink-0 rotate-45 rounded-xs bg-[#D5B893] transition duration-300 group-hover:rotate-90 group-hover:bg-[#F0D2A0]"></span>

                            <span>Legalitas</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('regulators') }}"
                           class="group flex items-center gap-3 text-sm text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="h-2 w-2 shrink-0 rotate-45 rounded-xs bg-[#D5B893] transition duration-300 group-hover:rotate-90 group-hover:bg-[#F0D2A0]"></span>

                            <span>Badan Regulasi</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('brokers') }}"
                           class="group flex items-center gap-3 text-sm text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="h-2 w-2 shrink-0 rotate-45 rounded-xs bg-[#D5B893] transition duration-300 group-hover:rotate-90 group-hover:bg-[#F0D2A0]"></span>

                            <span>Wakil Pialang</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('careers') }}"
                           class="group flex items-center gap-3 text-sm text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="h-2 w-2 shrink-0 rotate-45 rounded-xs bg-[#D5B893] transition duration-300 group-hover:rotate-90 group-hover:bg-[#F0D2A0]"></span>

                            <span>Karier dan Magang</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}"
                           class="group flex items-center gap-3 text-sm text-[#E5E8ED] transition duration-300 hover:translate-x-1 hover:text-[#F0D2A0]">

                            <span class="h-2 w-2 shrink-0 rotate-45 rounded-xs bg-[#D5B893] transition duration-300 group-hover:rotate-90 group-hover:bg-[#F0D2A0]"></span>

                            <span>Hubungi Kami</span>
                        </a>
                    </li>

                </ul>


                {{-- Decorative information panel --}}
                <div class="relative mt-9 overflow-hidden rounded-2xl border border-[#D5B893]/30 bg-linear-to-br from-[#632024] to-[#6F4D38] p-5 shadow-xl shadow-black/15">

                    <div class="absolute -right-8 -top-8 h-28 w-28 rounded-full border border-white/15"></div>
                    <div class="absolute -right-3 -top-3 h-16 w-16 rounded-full border border-white/10"></div>

                    <div class="relative">
                        <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-[#F0D2A0]">
                            Equityworld Futures
                        </p>

                        <p class="mt-2 text-sm font-bold leading-6 text-white">
                            Temukan informasi perusahaan melalui halaman resmi kami.
                        </p>

                        <a href="{{ route('contact') }}"
                           class="mt-4 inline-flex items-center gap-2 text-xs font-bold text-[#F5DDB7] transition hover:text-white">
                            Hubungi Kami
                            <span class="text-base">→</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
        COPYRIGHT SECTION
    ====================================================== --}}
    <div class="relative border-t border-white/15 bg-[#1B293F]/90">

        {{-- Top accent --}}
        <div class="absolute left-0 top-0 h-px w-full bg-linear-to-r from-transparent via-[#D5B893]/50 to-transparent"></div>

        <div class="mx-auto flex max-w-7xl flex-col gap-4 px-5 py-6 sm:px-8 md:flex-row md:items-center md:justify-between lg:px-10">

            <p class="text-xs font-medium leading-6 text-[#E1E5EB]">
                © {{ date('Y') }}
                <span class="font-bold text-[#F0D2A0]">PT Equityworld Futures.</span>
                Hak cipta dilindungi.
            </p>

            <p class="max-w-xl text-xs leading-6 text-[#D8DDE5] md:text-right">
                Informasi pada website ini bukan jaminan keuntungan perdagangan.
            </p>

        </div>

    </div>

</footer>
