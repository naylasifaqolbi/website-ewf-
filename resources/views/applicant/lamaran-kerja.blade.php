
@extends('layouts.public')

@section('title', 'Lamaran Kerja | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-[#F5F6F8] pb-16">

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-linear-to-br from-[#25344F] via-[#344663] to-[#632024] px-6 py-14 text-white">
        <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full bg-white/5"></div>
        <div class="absolute -bottom-32 -left-20 h-72 w-72 rounded-full bg-[#D5B893]/10"></div>

        <div class="relative mx-auto max-w-5xl">
            <a href="{{ url('/dashboard/user') }}"
               class="mb-7 inline-flex items-center gap-2 text-sm text-white/75 transition hover:text-white">
                <span aria-hidden="true">←</span>
                Kembali ke Dashboard
            </a>

            <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-[#D5B893]/40 bg-white/10 px-4 py-2 text-xs font-semibold tracking-wider text-[#E8D5B8]">
                <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>
                CAREER OPPORTUNITY
            </div>

            <h1 class="font-['Manrope'] text-3xl font-extrabold leading-tight md:text-5xl">
                Formulir Lamaran Kerja
            </h1>

            <p class="mt-5 max-w-2xl text-sm leading-7 text-white/75 md:text-base">
                Bergabunglah bersama PT Equityworld Futures. Lengkapi data diri,
                pendidikan, pengalaman, dan posisi yang ingin Anda lamar.
            </p>
        </div>
    </section>

    <div class="mx-auto mt-8 max-w-5xl px-4 sm:px-6">

        {{-- INFORMASI --}}
        <div class="mb-7 rounded-2xl border border-[#E5E8ED] bg-white p-5 shadow-sm md:p-6">
            <div class="flex items-start gap-4">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#F5EFE6] text-xl text-[#8A672F]">
                    <span aria-hidden="true">ⓘ</span>
                </div>
                <div>
                    <h2 class="font-['Manrope'] text-base font-bold text-[#25344F]">
                        Informasi Lamaran
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-[#617891]">
                        Isi formulir dengan informasi yang sesuai dengan kondisi Anda.
                        Pastikan CV dan dokumen pendukung telah dipersiapkan.
                    </p>
                </div>
            </div>
        </div>

        {{-- NOTIFIKASI --}}
            @if (session('success'))
                <div class="mb-6 rounded-xl border border-green-200 bg-green-50 p-4 text-sm text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    <p class="mb-2 font-bold">Formulir belum dapat dikirim:</p>
                    <ul class="list-inside list-disc space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <form id="jobForm"
            action="{{ route('lamaran.kerja.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-7">
            @csrf

            {{-- DATA DIRI --}}
            <section class="overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">
                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">01</span>
                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">Data Diri Pelamar</h2>
                            <p class="mt-1 text-xs text-[#8290A2]">Identitas dan informasi kontak</p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 px-6 py-6 md:grid-cols-2 md:px-8">
                    <div class="md:col-span-2">
                        <label for="nama" class="form-label">Nama Lengkap <span class="required">*</span></label>
                        <input id="nama" name="nama" type="text" required autocomplete="name"
                            value="{{ old('nama') }}"
                            placeholder="Masukkan nama lengkap sesuai identitas"
                            class="form-input">
                    </div>

                    <div>
                        <label for="email" class="form-label">Alamat Email <span class="required">*</span></label>
                        <input id="email" name="email" type="email" required autocomplete="email"
                                value="{{ old('email') }}"
                               placeholder="nama@email.com"
                               class="form-input">
                    </div>

                    <div>
                        <label for="telepon" class="form-label">Nomor Telepon <span class="required">*</span></label>
                        <input id="telepon" name="telepon" type="tel" required autocomplete="tel"
                               value="{{ old('telepon') }}"
                                placeholder="Contoh: 081234567890"
                                class="form-input">
                    </div>

                    
                    <div>
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input id="tempat_lahir" name="tempat_lahir" type="text"
                            value="{{ old('tempat_lahir') }}"
                            placeholder="Masukkan tempat lahir"
                            class="form-input">
                    </div>

                    <div>
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input id="tanggal_lahir" name="tanggal_lahir" type="date"
                            value="{{ old('tanggal_lahir') }}"
                            class="form-input">
                    </div>

                    <div>
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-input">
                            <option value="">Pilih jenis kelamin</option>
                            <option value="Laki-laki" @selected(old('jenis_kelamin') == 'Laki-laki')>Laki-laki</option>
                            <option value="Perempuan" @selected(old('jenis_kelamin') == 'Perempuan')>Perempuan</option>
                        </select>
                    </div>

                    <div>
                        <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                        <select id="status_perkawinan" name="status_perkawinan" class="form-input">
                            <option value="">Pilih status</option>
                            <option value="Belum Menikah" @selected(old('status_perkawinan') == 'Belum Menikah')>Belum Menikah</option>
                            <option value="Menikah" @selected(old('status_perkawinan') == 'Menikah')>Menikah</option>
                            <option value="Lainnya" @selected(old('status_perkawinan') == 'Lainnya')>Lainnya</option>
                        </select>
                    </div>


                    <div class="md:col-span-2">
                        <label for="alamat" class="form-label">Alamat Domisili <span class="required">*</span></label>
                        <textarea id="alamat" name="alamat" rows="3" required
                                  <textarea id="alamat" name="alamat" rows="3" required
                                    placeholder="Masukkan alamat tempat tinggal saat ini"
                                    class="form-input resize-y">{{ old('alamat') }}</textarea>
                    </div>
                </div>
            </section>

            {{-- PENDIDIKAN --}}
            <section class="overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">
                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">02</span>
                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">Riwayat Pendidikan</h2>
                            <p class="mt-1 text-xs text-[#8290A2]">Informasi pendidikan terakhir</p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 px-6 py-6 md:grid-cols-2 md:px-8">
                    <div>
                        <label for="pendidikan" class="form-label">Pendidikan Terakhir <span class="required">*</span></label>
                        <select id="pendidikan" name="pendidikan" required class="form-input">
                            <option value="">Pilih pendidikan</option>
                            <option value="SMA" @selected(old('pendidikan') == 'SMA')>SMA</option>
                            <option value="SMK" @selected(old('pendidikan') == 'SMK')>SMK</option>
                            <option value="D1" @selected(old('pendidikan') == 'D1')>D1</option>
                            <option value="D2" @selected(old('pendidikan') == 'D2')>D2</option>
                            <option value="D3" @selected(old('pendidikan') == 'D3')>D3</option>
                            <option value="D4" @selected(old('pendidikan') == 'D4')>D4</option>
                            <option value="S1" @selected(old('pendidikan') == 'S1')>S1</option>
                            <option value="S2" @selected(old('pendidikan') == 'S2')>S2</option>
                            <option value="S3" @selected(old('pendidikan') == 'S3')>S3</option>
                        </select>
                    </div>

                    <div>
                        <label for="institusi" class="form-label">Nama Sekolah / Universitas <span class="required">*</span></label>
                        <input id="institusi" name="institusi" type="text" required
                            value="{{ old('institusi') }}"
                            placeholder="Masukkan nama institusi"
                            class="form-input">
                    </div>

                    <div>
                        <label for="jurusan" class="form-label">Jurusan / Program Studi</label>
                        <input id="jurusan" name="jurusan" type="text"
                                value="{{ old('jurusan') }}"
                                placeholder="Masukkan jurusan"
                                class="form-input">
                    </div>

                    <div>
                        <label for="tahun_lulus" class="form-label">Tahun Lulus <span class="required">*</span></label>
                        <input id="tahun_lulus" name="tahun_lulus" type="number" required
                            min="1950" max="2100"
                            value="{{ old('tahun_lulus') }}"
                            placeholder="Contoh: 2025"
                            class="form-input">
                    </div>

                    <div>
                        <label for="nilai" class="form-label">IPK / Nilai Rata-rata</label>
                        <input id="nilai" name="nilai" type="number" step="0.01"
                            min="0" max="100"
                            value="{{ old('nilai') }}"
                            placeholder="Contoh: 3.75 atau 90.00"
                            class="form-input">
                    </div>
                </div>
            </section>

            {{-- POSISI --}}
            <section class="overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">
                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">03</span>
                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">Informasi Posisi</h2>
                            <p class="mt-1 text-xs text-[#8290A2]">Posisi pekerjaan yang ingin dilamar</p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 px-6 py-6 md:grid-cols-2 md:px-8">
                    <div class="md:col-span-2">
                        <label for="posisi" class="form-label">Posisi yang Dilamar <span class="required">*</span></label>
                        <select id="posisi" name="posisi" required class="form-input">
                            <option value="">Pilih posisi pekerjaan</option>
                            <option value="Staf" @selected(old('posisi') == 'Staf')>Staf</option>
                            <option value="Konsultan Bisnis" @selected(old('posisi') == 'Konsultan Bisnis')>Konsultan Bisnis</option>
                            <option value="Pengemudi" @selected(old('posisi') == 'Pengemudi')>Pengemudi</option>
                        </select>
                        <p class="mt-2 text-xs text-[#8290A2]">
                            Pilih posisi sesuai lowongan yang tersedia.
                        </p>
                    </div>

                    <div>
                        <label for="tanggal_bersedia" class="form-label">Tanggal Bersedia Mulai Bekerja</label>
                        <input id="tanggal_bersedia" name="tanggal_bersedia" type="date"
                            value="{{ old('tanggal_bersedia') }}"
                            class="form-input">
                    </div>

                    <div>
                        <label for="pengalaman" class="form-label">Pengalaman Kerja</label>
                        <select id="pengalaman" name="pengalaman" class="form-input">
                            <<option value="">Pilih pengalaman</option>
                                <option value="Belum Memiliki Pengalaman" @selected(old('pengalaman') == 'Belum Memiliki Pengalaman')>Belum Memiliki Pengalaman</option>
                                <option value="Kurang dari 1 Tahun" @selected(old('pengalaman') == 'Kurang dari 1 Tahun')>Kurang dari 1 Tahun</option>
                                <option value="1-2 Tahun" @selected(old('pengalaman') == '1-2 Tahun')>1-2 Tahun</option>
                                <option value="3-5 Tahun" @selected(old('pengalaman') == '3-5 Tahun')>3-5 Tahun</option>
                                <option value="Lebih dari 5 Tahun" @selected(old('pengalaman') == 'Lebih dari 5 Tahun')>Lebih dari 5 Tahun</option>
                            </select>
                    </div>
                </div>
            </section>

            {{-- PENGALAMAN --}}
            <section class="overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">
                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">04</span>
                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">Pengalaman dan Kompetensi</h2>
                            <p class="mt-1 text-xs text-[#8290A2]">Ceritakan pengalaman dan kemampuan Anda</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-5 px-6 py-6 md:px-8">
                    <div>
                        <label for="riwayat_pengalaman" class="form-label">Riwayat Pengalaman</label>
                        <textarea id="riwayat_pengalaman" name="riwayat_pengalaman" rows="4"
                            placeholder="Tuliskan pengalaman kerja, organisasi, atau kegiatan relevan yang pernah diikuti..."
                            class="form-input resize-y">{{ old('riwayat_pengalaman') }}</textarea>
                    </div>

                    <div>
                        <label for="keahlian" class="form-label">Keahlian / Kompetensi</label>
                        <textarea id="keahlian" name="keahlian" rows="3"
                            placeholder="Contoh: Microsoft Office, komunikasi, administrasi, analisis data..."
                            class="form-input resize-y">{{ old('keahlian') }}</textarea>
                    </div>

                    <div>
                        <label for="motivasi" class="form-label">Alasan Melamar <span class="required">*</span></label>
                        <textarea id="motivasi" name="motivasi" rows="4" required
                            placeholder="Jelaskan alasan Anda tertarik melamar posisi ini..."
                            class="form-input resize-y">{{ old('motivasi') }}</textarea>
                    </div>
                </div>
            </section>

            {{-- DOKUMEN --}}
            <section class="overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">
                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">05</span>
                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">Dokumen Lamaran</h2>
                            <p class="mt-1 text-xs text-[#8290A2]">Unggah dokumen yang diperlukan</p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 px-6 py-6 md:grid-cols-2 md:px-8">
                    <div>
                        <label for="cv" class="form-label">Curriculum Vitae (CV) <span class="required">*</span></label>
                        <input id="cv" name="cv" type="file" required accept=".pdf,.doc,.docx"
                               class="form-file">
                        <p class="mt-2 text-xs text-[#8290A2]">Format PDF, DOC, atau DOCX.</p>
                    </div>

                    <div>
                        <label for="surat_lamaran" class="form-label">Surat Lamaran <span class="required">*</span></label>
                        <input id="surat_lamaran" name="surat_lamaran" type="file" required
                               accept=".pdf,.doc,.docx" class="form-file">
                        <p class="mt-2 text-xs text-[#8290A2]">Surat lamaran pekerjaan.</p>
                    </div>

                    <div>
                        <label for="ijazah" class="form-label">Ijazah / Surat Keterangan Lulus</label>
                        <input id="ijazah" name="ijazah" type="file"
                               accept=".pdf,.jpg,.jpeg,.png" class="form-file">
                        <p class="mt-2 text-xs text-[#8290A2]">Format PDF, JPG, atau PNG.</p>
                    </div>

                    <div>
                        <label for="transkrip" class="form-label">Transkrip Nilai</label>
                        <input id="transkrip" name="transkrip" type="file"
                               accept=".pdf,.jpg,.jpeg,.png" class="form-file">
                        <p class="mt-2 text-xs text-[#8290A2]">Dokumen nilai pendidikan terakhir.</p>
                    </div>

                    <div>
                        <label for="portofolio" class="form-label">Portofolio</label>
                        <input id="portofolio" name="portofolio" type="file"
                               accept=".pdf,.zip,.jpg,.jpeg,.png" class="form-file">
                        <p class="mt-2 text-xs text-[#8290A2]">Dokumen hasil pekerjaan atau proyek.</p>
                    </div>

                    <div>
                        <label for="sertifikat" class="form-label">Sertifikat Pendukung</label>
                        <input id="sertifikat" name="sertifikat" type="file"
                               accept=".pdf,.jpg,.jpeg,.png" class="form-file">
                        <p class="mt-2 text-xs text-[#8290A2]">Sertifikat pelatihan atau kompetensi.</p>
                    </div>
                </div>
            </section>

            {{-- PERNYATAAN --}}
            <section class="rounded-2xl border border-[#E5E8ED] bg-white p-6 shadow-sm md:p-8">
                <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">Pernyataan Pelamar</h2>
                <label class="mt-5 flex cursor-pointer items-start gap-3">
                    <input type="checkbox" name="persetujuan" required
                           class="mt-1 h-4 w-4 shrink-0 accent-[#632024]">
                    <span class="text-sm leading-6 text-[#617891]">
                        Saya menyatakan bahwa seluruh data dan dokumen yang saya berikan
                        dalam formulir lamaran kerja ini adalah benar dan dapat dipertanggungjawabkan.
                    </span>
                </label>
            </section>

            {{-- TOMBOL --}}
            <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-between">
                <a href="{{ url('/dashboard/user') }}"
                   class="inline-flex items-center justify-center rounded-xl border border-[#D9DEE6] bg-white px-6 py-3 text-sm font-bold text-[#617891] transition hover:bg-[#F5F6F8]">
                    Kembali
                </a>

                <button type="submit"
                        class="inline-flex items-center justify-center rounded-xl bg-[#632024] px-8 py-3.5 text-sm font-bold text-white shadow-lg shadow-[#632024]/15 transition hover:bg-[#4E191D]">
                    Kirim Lamaran Kerja
                    <span class="ml-2" aria-hidden="true">→</span>
                </button>
            </div>
        </form>

        <p class="mt-8 text-center text-xs leading-6 text-[#8290A2]">
            PT Equityworld Futures · Formulir Lamaran Kerja
        </p>
    </div>
</main>

<style>
    .form-label {
        display: block;
        margin-bottom: 9px;
        color: #25344F;
        font-size: 13px;
        font-weight: 700;
    }

    .required {
        color: #B4232D;
    }

    .form-input {
        display: block;
        width: 100%;
        min-height: 46px;
        border: 1px solid #DCE1E8;
        border-radius: 10px;
        background: #FFFFFF;
        padding: 11px 13px;
        color: #25344F;
        font-size: 13px;
        outline: none;
        transition: border-color .2s, box-shadow .2s;
    }

    .form-input::placeholder {
        color: #A0AAB7;
    }

    .form-input:focus {
        border-color: #8A672F;
        box-shadow: 0 0 0 3px rgba(213, 184, 147, .2);
    }

    .form-file {
        display: block;
        width: 100%;
        border: 1px dashed #C9D0DA;
        border-radius: 10px;
        background: #F8F9FB;
        padding: 12px;
        color: #617891;
        font-size: 12px;
    }

    .form-file::file-selector-button {
        margin-right: 12px;
        border: 0;
        border-radius: 7px;
        background: #25344F;
        padding: 8px 12px;
        color: white;
        font-size: 11px;
        font-weight: 700;
        cursor: pointer;
    }
</style>


@endsection
