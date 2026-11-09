@extends('layouts.public')

@section('content')
<main class="bg-[#FFF9F0]">
    <section class="bg-[#6D1720]">
        <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
            <span class="text-xs font-bold uppercase tracking-[0.22em] text-[#FFD66E]">Profil Perusahaan</span>
            <h1 class="mt-4 text-4xl font-extrabold sm:text-5xl text-[#FFF9F0]">Tentang Kami</h1>
            <p class="mt-5 max-w-2xl leading-8 text-[#F0DAD5]">
                Kenali PT Equityworld Futures, profil perusahaan, dan komitmen layanan kami.
            </p>
        </div>
    </section>

    <section class="mx-auto grid max-w-7xl gap-10 px-5 py-16 lg:grid-cols-5 lg:px-8 lg:py-20">
        <div class="lg:col-span-3">
            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#9D4C1E]">Siapa Kami</span>
            <h2 class="mt-4 text-3xl font-extrabold leading-tight text-[#6D1720]">
                {{ $content['about_title'] ?? 'PT Equityworld Futures' }}
            </h2>
            <div class="mt-6 space-y-5 leading-8 text-[#675653]">
                <p>
                    PT Equityworld Futures merupakan perusahaan pialang berjangka yang menyediakan layanan terkait perdagangan berjangka sesuai ketentuan yang berlaku.
                </p>
                <p>
                    Kami mengutamakan penyampaian informasi perusahaan dan produk secara jelas agar pengunjung dapat memahami layanan, ketentuan, serta risiko yang berkaitan dengan perdagangan berjangka.
                </p>
                <p>
                    {{ $content['about_description'] ?? 'Untuk mendapatkan informasi lebih lengkap, silakan menghubungi perusahaan melalui halaman Kontak.' }}
                </p>
            </div>
        </div>

        <aside class="lg:col-span-2">
            <div class="rounded-3xl border border-[#EAD8CB] bg-white p-7 shadow-sm">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#FBE5D6] text-xl text-[#951A21]">✦</div>
                <h2 class="mt-5 text-xl font-extrabold text-[#6D1720]">Informasi Perusahaan</h2>
                <dl class="mt-5 space-y-4 text-sm">
                    <div class="border-b border-[#F0E4DA] pb-4">
                        <dt class="text-[#8A7771]">Nama perusahaan</dt>
                        <dd class="mt-1 font-bold text-[#51413E]">PT Equityworld Futures</dd>
                    </div>
                    <div class="border-b border-[#F0E4DA] pb-4">
                        <dt class="text-[#8A7771]">Bidang usaha</dt>
                        <dd class="mt-1 font-bold text-[#51413E]">Perdagangan berjangka</dd>
                    </div>
                    <div>
                        <dt class="text-[#8A7771]">Informasi lebih lanjut</dt>
                        <dd class="mt-1"><a href="{{ route('contact') }}" class="font-bold text-[#951A21]">Hubungi perusahaan →</a></dd>
                    </div>
                </dl>
            </div>
        </aside>
    </section>

    <section class="bg-[#F7EEE6]">
        <div class="mx-auto max-w-7xl px-5 py-14 lg:px-8">
            <div class="grid gap-5 md:grid-cols-2">
                <article class="rounded-2xl border border-[#EAD8CB] bg-[#FFF9F0] p-7">
                    <h2 class="text-xl font-extrabold text-[#6D1720]">Visi</h2>
                    <p class="mt-3 leading-7 text-[#675653]">
                        Menjadi perusahaan yang mengutamakan profesionalisme, transparansi informasi, dan kualitas pelayanan.
                    </p>
                </article>
                <article class="rounded-2xl border border-[#EAD8CB] bg-[#FFF9F0] p-7">
                    <h2 class="text-xl font-extrabold text-[#6D1720]">Misi</h2>
                    <p class="mt-3 leading-7 text-[#675653]">
                        Menyediakan informasi layanan secara jelas, mendukung edukasi pasar, dan menjalankan kegiatan sesuai ketentuan yang berlaku.
                    </p>
                </article>
            </div>
            <p class="mt-5 text-xs leading-6 text-[#8A7771]">
                Catatan: redaksi visi, misi, dan profil pada halaman ini merupakan teks awal desain. Sesuaikan dengan pernyataan resmi perusahaan sebelum dipublikasikan.
            </p>
        </div>
    </section>
</main>
@endsection