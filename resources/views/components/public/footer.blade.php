<footer id="footer" class="bg-[#632024] text-white">

    {{-- TOP ACCENT --}}
    <div class="h-1 w-full bg-linear-to-r from-[#6F4D38] via-[#D5B893] to-[#6F4D38]"></div>

    {{-- FOOTER CONTENT --}}
    <div class="mx-auto max-w-7xl px-5 py-12 sm:px-8 lg:px-10 lg:py-14">

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-12 lg:gap-12">

            {{-- COMPANY IDENTITY --}}
            <div class="lg:col-span-5">


                <a href="{{ route('home') }}"
                   class="inline-flex items-center gap-3"
                   aria-label="PT Equityworld Futures - Beranda">

                    {{-- Logo --}}
<div class="flex h-14 w-14 shrink-0 items-center justify-center">
    <img src="{{ asset('ewf-logo.png') }}"
     alt="Logo Equityworld Futures"
     class="h-full w-full object-contain">

</div>
                    {{-- Brand Name --}}
                    <div>
                        <span class="block text-lg font-extrabold tracking-[0.12em]">
                            EQUITYWORLD
                        </span>

                        <span class="mt-1 block text-[10px] font-bold tracking-[0.35em] text-[#D5B893]">
                            FUTURES
                        </span>
                    </div>

                </a>

                {{-- Description --}}
                <p class="mt-5 max-w-sm text-sm leading-7 text-white/75">
                    Informasi perusahaan, produk, layanan, dan peluang karier
                    PT Equityworld Futures.
                </p>

            </div>


            {{-- NAVIGATION --}}
            <div class="lg:col-span-3">

                <h2 class="text-sm font-bold text-[#D5B893]">
                    Navigasi
                </h2>

                <ul class="mt-5 space-y-3 text-sm">

                    <li>
                        <a href="{{ route('home') }}"
                        class="inline-flex items-center transition-all duration-300 hover:translate-x-1 hover:text-[#D5B893]">
                        Beranda
                    </a>
                </li>

                    <li>
                        <a href="{{ route('about') }}"
                           class="inline-flex items-center transition-all duration-300 hover:translate-x-1 hover:text-[#D5B893]">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('products') }}"
                           class="inline-flex items-center transition-all duration-300 hover:translate-x-1 hover:text-[#D5B893]">
                            Produk & Layanan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('facilities') }}"
                           class="inline-flex items-center transition-all duration-300 hover:translate-x-1 hover:text-[#D5B893]">
                            Fasilitas Layanan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('news.index') }}"
                           class="inline-flex items-center transition-all duration-300 hover:translate-x-1 hover:text-[#D5B893]">
                            Berita
                        </a>
                    </li>

                </ul>

            </div>


            {{-- COMPANY INFORMATION --}}
            <div class="lg:col-span-4">

                <h2 class="text-sm font-bold text-[#D5B893]">
                    Informasi
                </h2>

                <ul class="mt-5 space-y-3 text-sm">

                    <li>
                        <a href="{{ route('profile') }}"
                           class="inline-flex items-center transition-all duration-300 hover:translate-x-1 hover:text-[#D5B893]">
                            Profil Perusahaan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('legality') }}"
                           class="inline-flex items-center transition-all duration-300 hover:translate-x-1 hover:text-[#D5B893]">
                            Legalitas
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('regulators') }}"
                           class="inline-flex items-center transition-all duration-300 hover:translate-x-1 hover:text-[#D5B893]">
                            Badan Regulasi
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('brokers') }}"
                           class="inline-flex items-center transition-all duration-300 hover:translate-x-1 hover:text-[#D5B893]">
                            Wakil Pialang
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('careers') }}"
                           class="inline-flex items-center transition-all duration-300 hover:translate-x-1 hover:text-[#D5B893]">
                            Karier & Magang
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center transition-all duration-300 hover:translate-x-1 hover:text-[#D5B893]">
                            Hubungi Kami
                        </a>
                    </li>

                </ul>

                
            </div>

        </div>

    </div>


    {{-- COPYRIGHT --}}
    <div class="border-t border-white/15 bg-[#25344F]">

        <div class="mx-auto flex max-w-7xl flex-col gap-2 px-5 py-4 sm:px-8 md:flex-row md:items-center md:justify-between lg:px-10">

            <p class="text-xs text-white/75">
                © {{ date('Y') }}
                <span class="font-semibold text-[#D5B893]">
                    PT Equityworld Futures.
                </span>
                Hak cipta dilindungi.
            </p>

            <p class="text-xs leading-5 text-white/60 md:text-right">
                Perdagangan berjangka memiliki risiko.
            </p>

        </div>

    </div>

</footer>