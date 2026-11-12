
<header class="sticky top-0 z-50 border-b border-[#951A21]/10 bg-[#FFF9F0]/95 shadow-sm backdrop-blur-md">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex min-h-19.5 items-center justify-between gap-4">

            {{-- LOGO PERUSAHAAN --}}
            <a href="{{ route('home') }}"
               class="flex shrink-0 items-center"
               aria-label="EWF - Beranda">

                <img
                    src="{{ asset('ewf-logo.png') }}"
                    alt="Logo PT Equityworld Futures"
                    class="h-12 w-auto object-contain"
                >
            </a>

            {{-- NAVIGASI DESKTOP --}}
            <nav class="hidden items-center gap-1 xl:flex"
                 aria-label="Navigasi utama">

                {{-- BERANDA --}}
                <a href="{{ route('home') }}"
                   class="rounded-lg px-3 py-2.5 text-sm font-semibold transition
                   {{ request()->routeIs('home')
                       ? 'bg-[#951A21]/10 text-[#951A21]'
                       : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                    Beranda
                </a>

                {{-- DROPDOWN TENTANG KAMI --}}
                <div class="group relative">

                    <button type="button"
                            class="flex items-center gap-1 rounded-lg px-3 py-2.5 text-sm font-semibold transition hover:bg-[#951A21]/5 hover:text-[#951A21]
                            {{ request()->routeIs('profile', 'legality', 'brokers', 'regulators', 'facilities')
                                ? 'bg-[#951A21]/10 text-[#951A21]'
                                : 'text-[#51413E]' }}"
                            aria-haspopup="true">

                        Tentang Kami

                        <svg class="h-4 w-4 transition-transform group-hover:rotate-180 group-focus-within:rotate-180"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div class="invisible absolute left-0 top-full z-50 mt-2 w-64 translate-y-2 rounded-xl border border-[#951A21]/10 bg-white p-2 opacity-0 shadow-xl transition-all duration-200 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100 group-focus-within:visible group-focus-within:translate-y-0 group-focus-within:opacity-100">

                        {{-- PROFIL PERUSAHAAN --}}
                        <a href="{{ route('profile') }}"
                           class="block rounded-lg px-4 py-3 text-sm transition hover:bg-[#FFF9F0] hover:text-[#951A21] {{ request()->routeIs('profile') ? 'bg-[#FFF9F0] text-[#951A21]' : 'text-[#51413E]' }}">

                            <span class="block font-semibold">
                                Profil Perusahaan
                            </span>

                            <span class="mt-1 block text-xs text-gray-500">
                                Informasi dan profil perusahaan
                            </span>
                        </a>

                        {{-- LEGALITAS BISNIS --}}
                        <a href="{{ route('legality') }}"
                           class="block rounded-lg px-4 py-3 text-sm transition hover:bg-[#FFF9F0] hover:text-[#951A21] {{ request()->routeIs('legality') ? 'bg-[#FFF9F0] text-[#951A21]' : 'text-[#51413E]' }}">

                            <span class="block font-semibold">
                                Legalitas Bisnis
                            </span>

                            <span class="mt-1 block text-xs text-gray-500">
                                Informasi legalitas perusahaan
                            </span>
                        </a>

                        {{-- WAKIL PIALANG --}}
                        <a href="{{ route('brokers') }}"
                           class="block rounded-lg px-4 py-3 text-sm transition hover:bg-[#FFF9F0] hover:text-[#951A21] {{ request()->routeIs('brokers') ? 'bg-[#FFF9F0] text-[#951A21]' : 'text-[#51413E]' }}">

                            <span class="block font-semibold">
                                Wakil Pialang
                            </span>

                            <span class="mt-1 block text-xs text-gray-500">
                                Informasi terkait wakil pialang
                            </span>
                        </a>

                        {{-- BADAN REGULASI --}}
                        <a href="{{ route('regulators') }}"
                           class="block rounded-lg px-4 py-3 text-sm transition hover:bg-[#FFF9F0] hover:text-[#951A21] {{ request()->routeIs('regulators') ? 'bg-[#FFF9F0] text-[#951A21]' : 'text-[#51413E]' }}">

                            <span class="block font-semibold">
                                Badan Regulasi
                            </span>

                            <span class="mt-1 block text-xs text-gray-500">
                                Informasi regulasi dan pengawasan
                            </span>
                        </a>

                        {{-- FASILITAS DAN LAYANAN --}}
                        <a href="{{ route('facilities') }}"
                           class="block rounded-lg px-4 py-3 text-sm transition hover:bg-[#FFF9F0] hover:text-[#951A21] {{ request()->routeIs('facilities') ? 'bg-[#FFF9F0] text-[#951A21]' : 'text-[#51413E]' }}">

                            <span class="block font-semibold">
                                Fasilitas &amp; Layanan
                            </span>

                            <span class="mt-1 block text-xs text-gray-500">
                                Informasi fasilitas perusahaan
                            </span>
                        </a>

                    </div>
                </div>

                {{-- PRODUK DAN LAYANAN --}}
                <a href="{{ route('products') }}"
                   class="rounded-lg px-3 py-2.5 text-sm font-semibold transition
                   {{ request()->routeIs('products')
                       ? 'bg-[#951A21]/10 text-[#951A21]'
                       : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                    Produk &amp; Layanan
                </a>

                {{-- DROPDOWN ANALISIS --}}
                <div class="group relative">

                    <button type="button"
                            class="flex items-center gap-1 rounded-lg px-3 py-2.5 text-sm font-semibold transition hover:bg-[#951A21]/5 hover:text-[#951A21]
                            {{ request()->routeIs('news.*', 'historical-data')
                                ? 'bg-[#951A21]/10 text-[#951A21]'
                                : 'text-[#51413E]' }}"
                            aria-haspopup="true">

                        Analisis

                        <svg class="h-4 w-4 transition-transform group-hover:rotate-180 group-focus-within:rotate-180"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div class="invisible absolute left-0 top-full z-50 mt-2 w-64 translate-y-2 rounded-xl border border-[#951A21]/10 bg-white p-2 opacity-0 shadow-xl transition-all duration-200 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100 group-focus-within:visible group-focus-within:translate-y-0 group-focus-within:opacity-100">

                        {{-- BERITA --}}
                        <a href="{{ route('news.index') }}"
                           class="block rounded-lg px-4 py-3 text-sm transition hover:bg-[#FFF9F0] hover:text-[#951A21] {{ request()->routeIs('news.*') ? 'bg-[#FFF9F0] text-[#951A21]' : 'text-[#51413E]' }}">

                            <span class="block font-semibold">
                                Berita
                            </span>

                            <span class="mt-1 block text-xs text-gray-500">
                                Informasi dan berita pasar
                            </span>
                        </a>

                        {{-- DATA HISTORIS --}}
                        <a href="{{ route('historical-data') }}"
                           class="block rounded-lg px-4 py-3 text-sm transition hover:bg-[#FFF9F0] hover:text-[#951A21] {{ request()->routeIs('historical-data') ? 'bg-[#FFF9F0] text-[#951A21]' : 'text-[#51413E]' }}">

                            <span class="block font-semibold">
                                Data Historis
                            </span>

                            <span class="mt-1 block text-xs text-gray-500">
                                Data produk dan informasi pasar
                            </span>
                        </a>

                    </div>
                </div>

                {{-- KARIER --}}
                <a href="{{ route('careers') }}"
                   class="rounded-lg px-3 py-2.5 text-sm font-semibold transition
                   {{ request()->routeIs('careers')
                       ? 'bg-[#951A21]/10 text-[#951A21]'
                       : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                    Karier
                </a>

                {{-- HUBUNGI KAMI --}}
                <a href="{{ route('contact') }}"
                   class="rounded-lg px-3 py-2.5 text-sm font-semibold transition
                   {{ request()->routeIs('contact')
                       ? 'bg-[#951A21]/10 text-[#951A21]'
                       : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                    Hubungi Kami
                </a>

            </nav>

            {{-- LOGIN DESKTOP --}}
            <a href="{{ route('login') }}"
               class="hidden shrink-0 items-center justify-center rounded-lg bg-[#951A21] px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-ewf-wine-dark xl:inline-flex">
                Login
            </a>

            {{-- TOMBOL MENU MOBILE --}}
            <button id="mobile-menu-button"
                    type="button"
                    class="inline-flex h-11 w-11 items-center justify-center rounded-lg border border-[#951A21]/20 text-[#951A21] transition hover:bg-[#951A21]/5 xl:hidden"
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

        {{-- MENU MOBILE --}}
        <div id="mobile-menu"
             class="hidden border-t border-[#951A21]/10 py-4 xl:hidden">

            <nav class="flex flex-col gap-1"
                 aria-label="Navigasi mobile">

                {{-- BERANDA --}}
                <a href="{{ route('home') }}"
                   class="rounded-lg px-4 py-3 text-sm font-semibold {{ request()->routeIs('home') ? 'bg-[#951A21]/10 text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                    Beranda
                </a>

                {{-- DROPDOWN TENTANG KAMI MOBILE --}}
                <div>

                    <button type="button"
                            class="mobile-dropdown-button flex w-full items-center justify-between rounded-lg px-4 py-3 text-left text-sm font-semibold {{ request()->routeIs('profile', 'legality', 'brokers', 'regulators', 'facilities') ? 'bg-[#951A21]/10 text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}"
                            aria-expanded="false"
                            aria-controls="mobile-about-submenu">

                        Tentang Kami

                        <svg class="mobile-dropdown-icon h-4 w-4 transition-transform"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd" />
                        </svg>

                    </button>

                    <div id="mobile-about-submenu"
                         class="hidden space-y-1 pb-2 pl-4">

                        {{-- PROFIL PERUSAHAAN --}}
                        <a href="{{ route('profile') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm {{ request()->routeIs('profile') ? 'bg-[#951A21]/10 font-semibold text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                            Profil Perusahaan
                        </a>

                        {{-- LEGALITAS BISNIS --}}
                        <a href="{{ route('legality') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm {{ request()->routeIs('legality') ? 'bg-[#951A21]/10 font-semibold text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                            Legalitas Bisnis
                        </a>

                        {{-- WAKIL PIALANG --}}
                        <a href="{{ route('brokers') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm {{ request()->routeIs('brokers') ? 'bg-[#951A21]/10 font-semibold text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                            Wakil Pialang
                        </a>

                        {{-- BADAN REGULASI --}}
                        <a href="{{ route('regulators') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm {{ request()->routeIs('regulators') ? 'bg-[#951A21]/10 font-semibold text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                            Badan Regulasi
                        </a>

                        {{-- FASILITAS DAN LAYANAN --}}
                        <a href="{{ route('facilities') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm {{ request()->routeIs('facilities') ? 'bg-[#951A21]/10 font-semibold text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                            Fasilitas &amp; Layanan
                        </a>

                    </div>
                </div>

                {{-- PRODUK DAN LAYANAN --}}
                <a href="{{ route('products') }}"
                   class="rounded-lg px-4 py-3 text-sm font-semibold {{ request()->routeIs('products') ? 'bg-[#951A21]/10 text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                    Produk &amp; Layanan
                </a>

                {{-- DROPDOWN ANALISIS MOBILE --}}
                <div>

                    <button type="button"
                            class="mobile-dropdown-button flex w-full items-center justify-between rounded-lg px-4 py-3 text-left text-sm font-semibold {{ request()->routeIs('news.*', 'historical-data') ? 'bg-[#951A21]/10 text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}"
                            aria-expanded="false"
                            aria-controls="mobile-analysis-submenu">

                        Analisis

                        <svg class="mobile-dropdown-icon h-4 w-4 transition-transform"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd" />
                        </svg>

                    </button>

                    <div id="mobile-analysis-submenu"
                         class="hidden space-y-1 pb-2 pl-4">

                        {{-- BERITA --}}
                        <a href="{{ route('news.index') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm {{ request()->routeIs('news.*') ? 'bg-[#951A21]/10 font-semibold text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                            Berita
                        </a>

                        {{-- DATA HISTORIS --}}
                        <a href="{{ route('historical-data') }}"
                           class="block rounded-lg px-4 py-2.5 text-sm {{ request()->routeIs('historical-data') ? 'bg-[#951A21]/10 font-semibold text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                            Data Historis
                        </a>

                    </div>
                </div>

                {{-- KARIER --}}
                <a href="{{ route('careers') }}"
                   class="rounded-lg px-4 py-3 text-sm font-semibold {{ request()->routeIs('careers') ? 'bg-[#951A21]/10 text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                    Karier
                </a>

                {{-- HUBUNGI KAMI --}}
                <a href="{{ route('contact') }}"
                   class="rounded-lg px-4 py-3 text-sm font-semibold {{ request()->routeIs('contact') ? 'bg-[#951A21]/10 text-[#951A21]' : 'text-[#51413E] hover:bg-[#951A21]/5 hover:text-[#951A21]' }}">
                    Hubungi Kami
                </a>

                {{-- LOGIN MOBILE --}}
                <a href="{{ route('login') }}"
                   class="mt-2 flex items-center justify-center rounded-lg bg-[#951A21] px-4 py-3 text-sm font-bold text-white transition hover:bg-ewf-wine-dark">
                    Login
                </a>

            </nav>
        </div>
    </div>
</header>

{{-- JAVASCRIPT MENU MOBILE --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    const openIcon = document.getElementById('mobile-menu-open-icon');
    const closeIcon = document.getElementById('mobile-menu-close-icon');

    // BUKA DAN TUTUP MENU UTAMA MOBILE
    if (menuButton && mobileMenu) {

        menuButton.addEventListener('click', function () {

            const isExpanded =
                menuButton.getAttribute('aria-expanded') === 'true';

            menuButton.setAttribute('aria-expanded', String(!isExpanded));

            mobileMenu.classList.toggle('hidden', isExpanded);

            if (openIcon) {
                openIcon.classList.toggle('hidden', !isExpanded);
            }

            if (closeIcon) {
                closeIcon.classList.toggle('hidden', isExpanded);
            }

            menuButton.setAttribute(
                'aria-label',
                isExpanded ? 'Buka menu navigasi' : 'Tutup menu navigasi'
            );

        });
    }

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
