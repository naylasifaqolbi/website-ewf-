
<footer id="footer" class="bg-ewf-wine text-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-14 sm:px-8 md:grid-cols-2 lg:grid-cols-4 lg:px-10">

        {{-- Identitas Perusahaan --}}
        <div class="lg:col-span-2">
            <a href="{{ route('home') }}"
               class="inline-flex items-center gap-3"
               aria-label="PT Equityworld Futures - Beranda">

                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-white text-sm font-extrabold text-ewf-wine">
                    EWF
                </span>

                <span>
                    <span class="block font-extrabold tracking-wide text-white">
                        EQUITYWORLD
                    </span>
                    <span class="mt-1 block text-[10px] font-semibold tracking-[0.24em] text-ewf-soft-blue">
                        FUTURES
                    </span>
                </span>
            </a>

            <p class="mt-5 max-w-md text-sm leading-7 text-white/80">
                PT Equityworld Futures menyediakan informasi perusahaan,
                produk, layanan, legalitas, serta informasi terkait
                perdagangan berjangka.
            </p>

            <a href="{{ route('profile') }}"
               class="footer-link mt-5 inline-flex items-center gap-2 text-sm font-semibold text-ewf-soft-blue">
                Mengenal Perusahaan
                <span aria-hidden="true">→</span>
            </a>
        </div>

        {{-- Navigasi Utama --}}
        <div>
            <h2 class="text-sm font-bold text-white">
                Navigasi
            </h2>

            <ul class="mt-5 space-y-3 text-sm">
                <li>
                    <a class="footer-link" href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>

                <li>
                    <a class="footer-link" href="{{ route('about') }}">
                        Tentang Kami
                    </a>
                </li>

                <li>
                    <a class="footer-link" href="{{ route('products') }}">
                        Produk dan Layanan
                    </a>
                </li>

                <li>
                    <a class="footer-link" href="{{ route('facilities') }}">
                        Fasilitas Layanan
                    </a>
                </li>

                <li>
                    <a class="footer-link" href="{{ route('historical-data') }}">
                        Data Historis
                    </a>
                </li>

                <li>
                    <a class="footer-link" href="{{ route('news.index') }}">
                        Berita
                    </a>
                </li>
            </ul>
        </div>

        {{-- Informasi Perusahaan --}}
        <div>
            <h2 class="text-sm font-bold text-white">
                Informasi Perusahaan
            </h2>

            <ul class="mt-5 space-y-3 text-sm">
                <li>
                    <a class="footer-link" href="{{ route('profile') }}">
                        Profil Perusahaan
                    </a>
                </li>

                <li>
                    <a class="footer-link" href="{{ route('legality') }}">
                        Legalitas
                    </a>
                </li>

                <li>
                    <a class="footer-link" href="{{ route('regulators') }}">
                        Badan Regulasi
                    </a>
                </li>

                <li>
                    <a class="footer-link" href="{{ route('brokers') }}">
                        Wakil Pialang
                    </a>
                </li>

                <li>
                    <a class="footer-link" href="{{ route('careers') }}">
                        Karier dan Magang
                    </a>
                </li>

                <li>
                    <a class="footer-link" href="{{ route('contact') }}">
                        Hubungi Kami
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Informasi Hak Cipta --}}
    <div class="border-t border-white/20">
        <div class="mx-auto flex max-w-7xl flex-col gap-3 px-5 py-5 text-xs sm:px-8 md:flex-row md:items-center md:justify-between lg:px-10">

            <p class="text-white/70">
                © {{ date('Y') }} PT Equityworld Futures.
                Hak cipta dilindungi.
            </p>

            <p class="text-white/70">
                Informasi pada website ini bukan jaminan keuntungan perdagangan.
            </p>
        </div>
    </div>
</footer>
