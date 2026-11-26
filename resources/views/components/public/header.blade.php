
<header class="sticky top-0 z-50 border-b border-[#D5B893]/40 bg-white shadow-[0_5px_24px_rgba(37,52,79,0.09)]">

    @php
        $currentUser = Auth::user();

        $dashboardRoute = match ($currentUser?->role) {
            'admin' => route('dashboard.admin'),
            'hr' => route('dashboard.hr'),
            'user' => route('dashboard.user'),
            default => route('home'),
        };
    @endphp

    {{-- AKSEN BAGIAN ATAS --}}
    <div class="h-1 w-full bg-linear-to-r from-[#632024] via-[#D5B893] to-[#6F4D38]"></div>

    {{-- DEKORASI BACKGROUND --}}
    <div class="pointer-events-none absolute right-[20%] top-0 hidden h-20 w-40 rounded-full bg-[#D5B893]/10 blur-3xl lg:block"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex min-h-21 items-center justify-between gap-4">

            {{-- =================================================
                LOGO PERUSAHAAN
            ================================================== --}}
            <a href="{{ route('home') }}"
               class="group flex shrink-0 items-center"
               aria-label="EWF - Beranda">

                <div class="relative flex items-center">

                    <img
                        src="{{ asset('ewf-logo.png') }}"
                        alt="Logo PT Equityworld Futures"
                        class="h-12 w-auto object-contain transition duration-300 group-hover:scale-[1.03]"
                    >

                </div>

            </a>


            {{-- =================================================
                NAVIGASI DESKTOP
            ================================================== --}}
            <nav class="hidden items-center gap-1 xl:flex"
                 aria-label="Navigasi utama">

                {{-- BERANDA --}}
                <a href="{{ route('home') }}"
                   class="relative rounded-xl px-3.5 py-3 text-sm font-bold transition duration-300
                   {{ request()->routeIs('home')
                       ? 'bg-[#632024]/10 text-[#632024]'
                       : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">

                    Beranda

                    @if(request()->routeIs('home'))
                        <span class="absolute bottom-1 left-3.5 right-3.5 h-0.5 rounded-full bg-[#632024]"></span>
                    @endif
                </a>


                {{-- =================================================
                    DROPDOWN TENTANG KAMI
                ================================================== --}}
                <div class="group relative">

                    <button type="button"
                            class="flex items-center gap-1.5 rounded-xl px-3.5 py-3 text-sm font-bold transition duration-300
                            {{ request()->routeIs('profile', 'legality', 'brokers', 'regulators', 'facilities')
                                ? 'bg-[#632024]/10 text-[#632024]'
                                : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}"
                            aria-haspopup="true">

                        Tentang Kami

                        <svg class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180 group-focus-within:rotate-180"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd" />
                        </svg>

                    </button>


                    {{-- DROPDOWN PANEL --}}
                    <div class="invisible absolute left-0 top-full z-50 mt-3 w-72 translate-y-2 overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white p-2 opacity-0 shadow-[0_18px_45px_rgba(37,52,79,0.16)] transition-all duration-200 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100 group-focus-within:visible group-focus-within:translate-y-0 group-focus-within:opacity-100">

                        <div class="rounded-xl bg-linear-to-r from-[#25344F] to-[#354A67] px-4 py-3">
                            <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-[#D5B893]">
                                Company Information
                            </p>
                            <p class="mt-1 text-sm font-bold text-white">
                                Tentang Perusahaan
                            </p>
                        </div>


                        {{-- PROFIL PERUSAHAAN --}}
                        <a href="{{ route('profile') }}"
                           class="mt-2 block rounded-xl px-4 py-3 text-sm transition duration-200
                           {{ request()->routeIs('profile')
                               ? 'bg-[#632024]/10 text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">

                            <span class="block font-bold">
                                Profil Perusahaan
                            </span>

                            <span class="mt-1 block text-xs text-[#617891]">
                                Informasi dan profil perusahaan
                            </span>
                        </a>


                        {{-- LEGALITAS BISNIS --}}
                        <a href="{{ route('legality') }}"
                           class="block rounded-xl px-4 py-3 text-sm transition duration-200
                           {{ request()->routeIs('legality')
                               ? 'bg-[#632024]/10 text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">

                            <span class="block font-bold">
                                Legalitas Bisnis
                            </span>

                            <span class="mt-1 block text-xs text-[#617891]">
                                Informasi legalitas perusahaan
                            </span>
                        </a>


                        {{-- WAKIL PIALANG --}}
                        <a href="{{ route('brokers') }}"
                           class="block rounded-xl px-4 py-3 text-sm transition duration-200
                           {{ request()->routeIs('brokers')
                               ? 'bg-[#632024]/10 text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">

                            <span class="block font-bold">
                                Wakil Pialang
                            </span>

                            <span class="mt-1 block text-xs text-[#617891]">
                                Informasi terkait wakil pialang
                            </span>
                        </a>


                        {{-- BADAN REGULASI --}}
                        <a href="{{ route('regulators') }}"
                           class="block rounded-xl px-4 py-3 text-sm transition duration-200
                           {{ request()->routeIs('regulators')
                               ? 'bg-[#632024]/10 text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">

                            <span class="block font-bold">
                                Badan Regulasi
                            </span>

                            <span class="mt-1 block text-xs text-[#617891]">
                                Informasi regulasi dan pengawasan
                            </span>
                        </a>


                        {{-- FASILITAS DAN LAYANAN --}}
                        <a href="{{ route('facilities') }}"
                           class="block rounded-xl px-4 py-3 text-sm transition duration-200
                           {{ request()->routeIs('facilities')
                               ? 'bg-[#632024]/10 text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">

                            <span class="block font-bold">
                                Fasilitas &amp; Layanan
                            </span>

                            <span class="mt-1 block text-xs text-[#617891]">
                                Informasi fasilitas perusahaan
                            </span>
                        </a>

                    </div>
                </div>


                {{-- PRODUK DAN LAYANAN --}}
                <a href="{{ route('products') }}"
                   class="relative rounded-xl px-3.5 py-3 text-sm font-bold transition duration-300
                   {{ request()->routeIs('products')
                       ? 'bg-[#632024]/10 text-[#632024]'
                       : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">

                    Produk &amp; Layanan

                    @if(request()->routeIs('products'))
                        <span class="absolute bottom-1 left-3.5 right-3.5 h-0.5 rounded-full bg-[#632024]"></span>
                    @endif
                </a>


                {{-- =================================================
                    DROPDOWN ANALISIS
                ================================================== --}}
                <div class="group relative">

                    <button type="button"
                            class="flex items-center gap-1.5 rounded-xl px-3.5 py-3 text-sm font-bold transition duration-300
                            {{ request()->routeIs('news.*', 'historical-data')
                                ? 'bg-[#632024]/10 text-[#632024]'
                                : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}"
                            aria-haspopup="true">

                        Analisis

                        <svg class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180 group-focus-within:rotate-180"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd" />
                        </svg>

                    </button>


                    {{-- DROPDOWN PANEL --}}
                    <div class="invisible absolute left-0 top-full z-50 mt-3 w-72 translate-y-2 overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white p-2 opacity-0 shadow-[0_18px_45px_rgba(37,52,79,0.16)] transition-all duration-200 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100 group-focus-within:visible group-focus-within:translate-y-0 group-focus-within:opacity-100">

                        <div class="rounded-xl bg-linear-to-r from-[#632024] to-[#6F4D38] px-4 py-3">
                            <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-[#F0D2A0]">
                                Market Information
                            </p>
                            <p class="mt-1 text-sm font-bold text-white">
                                Analisis dan Informasi
                            </p>
                        </div>


                        {{-- BERITA --}}
                        <a href="{{ route('news.index') }}"
                           class="mt-2 block rounded-xl px-4 py-3 text-sm transition duration-200
                           {{ request()->routeIs('news.*')
                               ? 'bg-[#632024]/10 text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">

                            <span class="block font-bold">
                                Berita
                            </span>

                            <span class="mt-1 block text-xs text-[#617891]">
                                Informasi dan berita pasar
                            </span>
                        </a>


                        {{-- DATA HISTORIS --}}
                        <a href="{{ route('historical-data') }}"
                           class="block rounded-xl px-4 py-3 text-sm transition duration-200
                           {{ request()->routeIs('historical-data')
                               ? 'bg-[#632024]/10 text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">

                            <span class="block font-bold">
                                Data Historis
                            </span>

                            <span class="mt-1 block text-xs text-[#617891]">
                                Data produk dan informasi pasar
                            </span>
                        </a>

                    </div>
                </div>


                {{-- KARIER --}}
                <a href="{{ route('careers') }}"
                   class="relative rounded-xl px-3.5 py-3 text-sm font-bold transition duration-300
                   {{ request()->routeIs('careers')
                       ? 'bg-[#632024]/10 text-[#632024]'
                       : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">

                    Karier

                    @if(request()->routeIs('careers'))
                        <span class="absolute bottom-1 left-3.5 right-3.5 h-0.5 rounded-full bg-[#632024]"></span>
                    @endif
                </a>


                {{-- HUBUNGI KAMI --}}
                <a href="{{ route('contact') }}"
                   class="relative rounded-xl px-3.5 py-3 text-sm font-bold transition duration-300
                   {{ request()->routeIs('contact')
                       ? 'bg-[#632024]/10 text-[#632024]'
                       : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">

                    Hubungi Kami

                    @if(request()->routeIs('contact'))
                        <span class="absolute bottom-1 left-3.5 right-3.5 h-0.5 rounded-full bg-[#632024]"></span>
                    @endif
                </a>

            </nav>


            {{-- =================================================
                LOGIN / AKUN DESKTOP
            ================================================== --}}
            
            @if ($currentUser)
                <div class="relative hidden xl:block">

                    <details class="group relative">

                        {{-- TOMBOL AKUN --}}
                        <summary class="flex cursor-pointer list-none items-center gap-3 rounded-xl border border-[#D5B893]/60 bg-[#F5F1EB] px-4 py-2.5 text-[#632024] transition hover:bg-[#EAD9C5]">

                            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-[#632024] text-sm font-bold text-white">
                                {{ strtoupper(substr($currentUser->name, 0, 1)) }}
                            </span>

                            <span class="text-left">
                                <span class="block text-sm font-bold">
                                    {{ $currentUser->name }}
                                </span>
                                <span class="block text-xs text-[#617891]">
                                    {{ ucfirst($currentUser->role) }}
                                </span>
                            </span>

                            <svg class="h-4 w-4 transition-transform duration-200 group-open:rotate-180"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </summary>

                        {{-- DROPDOWN MENU --}}
                        <div class="absolute right-0 top-full z-50 mt-3 w-64 overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white p-2 shadow-[0_18px_45px_rgba(37,52,79,0.16)]">

                            <div class="rounded-xl bg-linear-to-r from-[#25344F] to-[#354A67] px-4 py-3">
                                <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#D5B893]">
                                    Account Menu
                                </p>
                                <p class="mt-1 text-sm font-bold text-white">
                                    {{ $currentUser->name }}
                                </p>
                            </div>

                            {{-- DASHBOARD --}}
                            <a href="{{ $dashboardRoute }}"
                            class="mt-2 flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-[#25344F] transition hover:bg-[#F5F1EB] hover:text-[#632024]">

                                <svg class="h-5 w-5" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.8">
                                    <rect x="3" y="3" width="8" height="8" rx="1.5"/>
                                    <rect x="13" y="3" width="8" height="5" rx="1.5"/>
                                    <rect x="13" y="10" width="8" height="11" rx="1.5"/>
                                    <rect x="3" y="13" width="8" height="8" rx="1.5"/>
                                </svg>

                                Dashboard Saya
                            </a>

                            <div class="my-2 border-t border-[#E9ECF0]"></div>

                            {{-- LOGOUT --}}
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf

                                <button type="submit"
                                        class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-red-700 transition hover:bg-red-50">

                                    <svg class="h-5 w-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10 17l5-5-5-5M15 12H3m9-9h6a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-6"/>
                                    </svg>

                                    Keluar
                                </button>
                            </form>

                        </div>

                    </details>

                </div>


            @else
                <a href="{{ route('login', ['destination' => 'dashboard']) }}"
                class="hidden shrink-0 items-center justify-center gap-2 rounded-xl border border-[#632024] bg-[#632024] px-5 py-3 text-sm font-extrabold text-white shadow-md shadow-[#632024]/15 transition duration-300 hover:-translate-y-0.5 hover:border-[#6F4D38] hover:bg-[#6F4D38] hover:shadow-lg xl:inline-flex">
                    Login
                </a>

            @endif


            {{-- =================================================
                TOMBOL MENU MOBILE
            ================================================== --}}
            <button id="mobile-menu-button"
                    type="button"
                    class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-[#D5B893] bg-[#F5F1EB] text-[#25344F] transition duration-300 hover:border-[#632024] hover:bg-[#632024] hover:text-white xl:hidden"
                    aria-label="Buka menu navigasi"
                    aria-controls="mobile-menu"
                    aria-expanded="false">

                <svg id="mobile-menu-open-icon"
                     class="h-6 w-6"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     aria-hidden="true">
                    <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg id="mobile-menu-close-icon"
                     class="hidden h-6 w-6"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     aria-hidden="true">
                    <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                </svg>

            </button>

        </div>


        {{-- =================================================
            MENU MOBILE
        ================================================== --}}
        <div id="mobile-menu"
             class="hidden border-t border-[#D5B893]/40 bg-white py-4 xl:hidden">

            <nav class="flex flex-col gap-1"
                 aria-label="Navigasi mobile">


                {{-- BERANDA --}}
                <a href="{{ route('home') }}"
                   class="rounded-xl px-4 py-3 text-sm font-bold transition
                   {{ request()->routeIs('home')
                       ? 'bg-[#632024]/10 text-[#632024]'
                       : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">
                    Beranda
                </a>


                {{-- DROPDOWN TENTANG KAMI MOBILE --}}
                <div>

                    <button type="button"
                            class="mobile-dropdown-button flex w-full items-center justify-between rounded-xl px-4 py-3 text-left text-sm font-bold transition
                            {{ request()->routeIs('profile', 'legality', 'brokers', 'regulators', 'facilities')
                                ? 'bg-[#632024]/10 text-[#632024]'
                                : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}"
                            aria-expanded="false"
                            aria-controls="mobile-about-submenu">

                        Tentang Kami

                        <svg class="mobile-dropdown-icon h-4 w-4 transition-transform duration-300"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd" />
                        </svg>

                    </button>


                    <div id="mobile-about-submenu"
                         class="ml-4 hidden space-y-1 border-l-2 border-[#D5B893] pb-2 pl-4">

                        <a href="{{ route('profile') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm transition
                           {{ request()->routeIs('profile')
                               ? 'bg-[#632024]/10 font-bold text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">
                            Profil Perusahaan
                        </a>

                        <a href="{{ route('legality') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm transition
                           {{ request()->routeIs('legality')
                               ? 'bg-[#632024]/10 font-bold text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">
                            Legalitas Bisnis
                        </a>

                        <a href="{{ route('brokers') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm transition
                           {{ request()->routeIs('brokers')
                               ? 'bg-[#632024]/10 font-bold text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">
                            Wakil Pialang
                        </a>

                        <a href="{{ route('regulators') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm transition
                           {{ request()->routeIs('regulators')
                               ? 'bg-[#632024]/10 font-bold text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">
                            Badan Regulasi
                        </a>

                        <a href="{{ route('facilities') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm transition
                           {{ request()->routeIs('facilities')
                               ? 'bg-[#632024]/10 font-bold text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">
                            Fasilitas &amp; Layanan
                        </a>

                    </div>

                </div>


                {{-- PRODUK DAN LAYANAN --}}
                <a href="{{ route('products') }}"
                   class="rounded-xl px-4 py-3 text-sm font-bold transition
                   {{ request()->routeIs('products')
                       ? 'bg-[#632024]/10 text-[#632024]'
                       : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">
                    Produk &amp; Layanan
                </a>


                {{-- DROPDOWN ANALISIS MOBILE --}}
                <div>

                    <button type="button"
                            class="mobile-dropdown-button flex w-full items-center justify-between rounded-xl px-4 py-3 text-left text-sm font-bold transition
                            {{ request()->routeIs('news.*', 'historical-data')
                                ? 'bg-[#632024]/10 text-[#632024]'
                                : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}"
                            aria-expanded="false"
                            aria-controls="mobile-analysis-submenu">

                        Analisis

                        <svg class="mobile-dropdown-icon h-4 w-4 transition-transform duration-300"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd" />
                        </svg>

                    </button>


                    <div id="mobile-analysis-submenu"
                         class="ml-4 hidden space-y-1 border-l-2 border-[#D5B893] pb-2 pl-4">

                        <a href="{{ route('news.index') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm transition
                           {{ request()->routeIs('news.*')
                               ? 'bg-[#632024]/10 font-bold text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">
                            Berita
                        </a>

                        <a href="{{ route('historical-data') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm transition
                           {{ request()->routeIs('historical-data')
                               ? 'bg-[#632024]/10 font-bold text-[#632024]'
                               : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">
                            Data Historis
                        </a>

                    </div>

                </div>


                {{-- KARIER --}}
                <a href="{{ route('careers') }}"
                   class="rounded-xl px-4 py-3 text-sm font-bold transition
                   {{ request()->routeIs('careers')
                       ? 'bg-[#632024]/10 text-[#632024]'
                       : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">
                    Karier
                </a>


                {{-- HUBUNGI KAMI --}}
                <a href="{{ route('contact') }}"
                   class="rounded-xl px-4 py-3 text-sm font-bold transition
                   {{ request()->routeIs('contact')
                       ? 'bg-[#632024]/10 text-[#632024]'
                       : 'text-[#25344F] hover:bg-[#F5F1EB] hover:text-[#632024]' }}">
                    Hubungi Kami
                </a>


                {{-- LOGIN / AKUN MOBILE --}}
                    @if ($currentUser)
                        <div class="mt-3 border-t border-[#D5B893]/40 pt-4">

                            <div class="mb-3 rounded-xl bg-[#F5F1EB] px-4 py-3">
                                <p class="text-xs text-[#617891]">Sedang login sebagai</p>
                                <p class="mt-1 font-bold text-[#632024]">
                                    {{ $currentUser->name }}
                                </p>
                                <p class="text-xs text-[#617891]">
                                    {{ ucfirst($currentUser->role) }}
                                </p>
                            </div>

                            <a href="{{ $dashboardRoute }}"
                            class="flex items-center justify-center rounded-xl border border-[#D5B893] px-4 py-3 text-sm font-bold text-[#632024] transition hover:bg-[#F5F1EB]">
                                Dashboard
                            </a>

                            <form action="{{ route('logout') }}" method="POST" class="mt-2">
                                @csrf
                                <button type="submit"
                                        class="flex w-full items-center justify-center rounded-xl bg-[#632024] px-4 py-3.5 text-sm font-extrabold text-white transition hover:bg-[#6F4D38]">
                                    Keluar
                                </button>
                            </form>

                        </div>
                    @else
                        <a href="{{ route('login', ['destination' => 'dashboard']) }}"
                        class="mt-3 flex items-center justify-center gap-2 rounded-xl border border-[#632024] bg-[#632024] px-4 py-3.5 text-sm font-extrabold text-white shadow-md shadow-[#632024]/15 transition duration-300 hover:border-[#6F4D38] hover:bg-[#6F4D38]">
                            Login
                        </a>
                    @endif

            </nav>

        </div>

    </div>

</header>


{{-- =========================================================
    JAVASCRIPT MENU MOBILE
========================================================= --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    const openIcon = document.getElementById('mobile-menu-open-icon');
    const closeIcon = document.getElementById('mobile-menu-close-icon');


    // BUKA DAN TUTUP MENU UTAMA MOBILE
    


    // BUKA DAN TUTUP SETIAP SUBMENU MOBILE
    document.querySelectorAll('.mobile-dropdown-button').forEach(function (button) {

        button.addEventListener('click', function () {

            const submenuId = button.getAttribute('aria-controls');
            const submenu = document.getElementById(submenuId);
            const icon = button.querySelector('.mobile-dropdown-icon');

            if (!submenu) {
                return;
            }

            const isExpanded =
                button.getAttribute('aria-expanded') === 'true';

            button.setAttribute('aria-expanded', String(!isExpanded));

            submenu.classList.toggle('hidden', isExpanded);

            if (icon) {
                icon.classList.toggle('rotate-180', !isExpanded);
            }

        });

    });


    // TUTUP MENU MOBILE SETELAH TAUTAN DIPILIH
    if (mobileMenu) {

        mobileMenu.querySelectorAll('a').forEach(function (link) {

            link.addEventListener('click', function () {

                mobileMenu.classList.add('hidden');

                if (menuButton) {

                    menuButton.setAttribute('aria-expanded', 'false');

                    menuButton.setAttribute(
                        'aria-label',
                        'Buka menu navigasi'
                    );

                }

                if (openIcon) {
                    openIcon.classList.remove('hidden');
                }

                if (closeIcon) {
                    closeIcon.classList.add('hidden');
                }

            });

        });

    }

});
</script>
