
@extends('layouts.public')

@section('title', 'Pendaftaran Magang | PT Equityworld Futures')

@section('content')
<main class="min-h-screen bg-[#F5F6F8] pb-16">

    {{-- =====================================================
         HERO SECTION
    ====================================================== --}}
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
                PROGRAM PENGEMBANGAN TALENTA
            </div>

            <h1 class="font-['Manrope'] text-3xl font-extrabold leading-tight md:text-5xl">
                Formulir Pendaftaran Magang
            </h1>

            <p class="mt-5 max-w-2xl text-sm leading-7 text-white/75 md:text-base">
                Lengkapi informasi diri, pendidikan, dan dokumen pendukung
                untuk mengajukan permohonan program magang di
                PT Equityworld Futures.
            </p>
        </div>
    </section>

    <div class="mx-auto -mt-6 max-w-5xl px-4 sm:px-6">

        {{-- =====================================================
             INFORMASI PENDAFTARAN
        ====================================================== --}}
        <div class="mb-7 rounded-2xl border border-[#E5E8ED] bg-white p-5 shadow-sm md:p-6">
            <div class="flex items-start gap-4">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#F5EFE6] text-xl text-[#8A672F]">
                    ⓘ
                </div>

                <div>
                    <h2 class="font-['Manrope'] text-base font-bold text-[#25344F]">
                        Informasi Pendaftaran
                    </h2>

                    <p class="mt-1 text-sm leading-6 text-[#617891]">
                        Terdapat dua kategori program magang yang dapat dipilih,
                        yaitu magang sekolah untuk siswa SMA/SMK dan magang
                        kuliah untuk mahasiswa perguruan tinggi. Pilih kategori
                        sesuai dengan status pendidikan Anda.
                    </p>
                </div>
            </div>
        </div>

        <form id="internshipForm" class="space-y-7">

            {{-- =================================================
                 01. PILIH JENIS MAGANG
            ================================================== --}}
            <section class="overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">

                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">
                            01
                        </span>

                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">
                                Pilih Jenis Program Magang
                            </h2>

                            <p class="mt-1 text-xs text-[#8290A2]">
                                Tentukan kategori magang yang sesuai dengan pendidikan Anda
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-4 px-6 py-6 md:grid-cols-2 md:px-8">

                    {{-- MAGANG SEKOLAH --}}
                    <label class="category-option cursor-pointer">
                        <input
                            type="radio"
                            name="kategori_magang"
                            value="Magang Sekolah"
                            class="category-radio"
                            required
                        >

                        <div class="category-card h-full rounded-2xl border-2 border-[#E1E5EB] p-5 transition duration-200">

                            <div class="mb-4 flex items-center justify-between">
                                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#F5EFE6] text-2xl">
                                    🎓
                                </div>

                                <span class="category-check hidden h-6 w-6 items-center justify-center rounded-full bg-[#632024] text-xs text-white">
                                    ✓
                                </span>
                            </div>

                            <h3 class="font-['Manrope'] text-lg font-extrabold text-[#25344F]">
                                Magang Sekolah
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-[#617891]">
                                Program magang untuk siswa Sekolah Menengah Atas
                                (SMA) dan Sekolah Menengah Kejuruan (SMK).
                            </p>

                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="rounded-full bg-[#F1F3F6] px-3 py-1 text-xs font-semibold text-[#617891]">
                                    SMA
                                </span>

                                <span class="rounded-full bg-[#F1F3F6] px-3 py-1 text-xs font-semibold text-[#617891]">
                                    SMK
                                </span>
                            </div>
                        </div>
                    </label>

                    {{-- MAGANG KULIAH --}}
                    <label class="category-option cursor-pointer">
                        <input
                            type="radio"
                            name="kategori_magang"
                            value="Magang Kuliah"
                            class="category-radio"
                            required
                        >

                        <div class="category-card h-full rounded-2xl border-2 border-[#E1E5EB] p-5 transition duration-200">

                            <div class="mb-4 flex items-center justify-between">
                                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#E9EEF5] text-2xl">
                                    🏛️
                                </div>

                                <span class="category-check hidden h-6 w-6 items-center justify-center rounded-full bg-[#632024] text-xs text-white">
                                    ✓
                                </span>
                            </div>

                            <h3 class="font-['Manrope'] text-lg font-extrabold text-[#25344F]">
                                Magang Kuliah
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-[#617891]">
                                Program magang untuk mahasiswa perguruan tinggi
                                yang ingin memperoleh pengalaman kerja profesional.
                            </p>

                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="rounded-full bg-[#F1F3F6] px-3 py-1 text-xs font-semibold text-[#617891]">
                                    D3
                                </span>

                                <span class="rounded-full bg-[#F1F3F6] px-3 py-1 text-xs font-semibold text-[#617891]">
                                    D4
                                </span>

                                <span class="rounded-full bg-[#F1F3F6] px-3 py-1 text-xs font-semibold text-[#617891]">
                                    S1
                                </span>
                            </div>
                        </div>
                    </label>

                </div>

                <div id="categoryNotice" class="hidden mx-6 mb-6 rounded-xl border border-[#D5B893]/50 bg-[#FAF6EF] p-4 md:mx-8">
                    <p id="categoryNoticeText" class="text-sm leading-6 text-[#755B37]"></p>
                </div>

            </section>

            {{-- =================================================
                 02. DATA DIRI
            ================================================== --}}
            <section class="overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">

                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">
                            02
                        </span>

                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">
                                Data Diri
                            </h2>

                            <p class="mt-1 text-xs text-[#8290A2]">
                                Informasi identitas dan kontak pendaftar
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 px-6 py-6 md:grid-cols-2 md:px-8">

                    <div class="md:col-span-2">
                        <label for="nama" class="form-label">
                            Nama Lengkap <span class="required">*</span>
                        </label>

                        <input id="nama" name="nama" type="text" required
                               autocomplete="name"
                               placeholder="Masukkan nama lengkap"
                               class="form-input">
                    </div>

                    <div>
                        <label for="email" class="form-label">
                            Alamat Email <span class="required">*</span>
                        </label>

                        <input id="email" name="email" type="email" required
                               autocomplete="email"
                               placeholder="nama@email.com"
                               class="form-input">
                    </div>

                    <div>
                        <label for="telepon" class="form-label">
                            Nomor Telepon <span class="required">*</span>
                        </label>

                        <input id="telepon" name="telepon" type="tel" required
                               autocomplete="tel"
                               placeholder="Contoh: 081234567890"
                               class="form-input">
                    </div>

                    <div>
                        <label for="tempat_lahir" class="form-label">
                            Tempat Lahir
                        </label>

                        <input id="tempat_lahir" name="tempat_lahir" type="text"
                               placeholder="Masukkan tempat lahir"
                               class="form-input">
                    </div>

                    <div>
                        <label for="tanggal_lahir" class="form-label">
                            Tanggal Lahir
                        </label>

                        <input id="tanggal_lahir" name="tanggal_lahir" type="date"
                               class="form-input">
                    </div>

                    <div class="md:col-span-2">
                        <label for="alamat" class="form-label">
                            Alamat Lengkap <span class="required">*</span>
                        </label>

                        <textarea id="alamat" name="alamat" rows="3" required
                                  placeholder="Masukkan alamat tempat tinggal"
                                  class="form-input resize-y"></textarea>
                    </div>

                </div>
            </section>

            {{-- =================================================
                 03. PENDIDIKAN MAGANG SEKOLAH
            ================================================== --}}
            <section id="schoolEducation" class="conditional-section hidden overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">

                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">
                            03
                        </span>

                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">
                                Informasi Pendidikan Sekolah
                            </h2>

                            <p class="mt-1 text-xs text-[#8290A2]">
                                Informasi sekolah dan identitas siswa SMA/SMK
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 px-6 py-6 md:grid-cols-2 md:px-8">

                    <div>
                        <label for="school_type" class="form-label">
                            Jenis Sekolah <span class="required">*</span>
                        </label>

                        <select id="school_type" name="jenis_sekolah"
                                class="form-input conditional-required">
                            <option value="">Pilih jenis sekolah</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                        </select>
                    </div>

                    <div>
                        <label for="school_name" class="form-label">
                            Nama Sekolah <span class="required">*</span>
                        </label>

                        <input id="school_name" name="nama_sekolah" type="text"
                               placeholder="Masukkan nama sekolah"
                               class="form-input conditional-required">
                    </div>

                    <div>
                        <label for="nis" class="form-label">
                            NIS / NISN
                        </label>

                        <input id="nis" name="nis_nisn" type="text"
                               placeholder="Masukkan nomor induk siswa"
                               class="form-input">
                    </div>

                    <div>
                        <label for="school_major" class="form-label">
                            Jurusan <span class="required">*</span>
                        </label>

                        <input id="school_major" name="jurusan_sekolah" type="text"
                               placeholder="Contoh: Akuntansi, RPL, IPS"
                               class="form-input conditional-required">
                    </div>

                    <div>
                        <label for="school_class" class="form-label">
                            Kelas <span class="required">*</span>
                        </label>

                        <select id="school_class" name="kelas"
                                class="form-input conditional-required">
                            <option value="">Pilih kelas</option>
                            <option value="X">Kelas X</option>
                            <option value="XI">Kelas XI</option>
                            <option value="XII">Kelas XII</option>
                        </select>
                    </div>

                    <div>
                        <label for="school_supervisor" class="form-label">
                            Nama Guru Pembimbing
                        </label>

                        <input id="school_supervisor" name="guru_pembimbing" type="text"
                               placeholder="Masukkan nama guru pembimbing"
                               class="form-input">
                    </div>

                    <div>
                        <label for="school_supervisor_phone" class="form-label">
                            Nomor Telepon Guru Pembimbing
                        </label>

                        <input id="school_supervisor_phone" name="telepon_guru_pembimbing" type="tel"
                               placeholder="Nomor telepon guru"
                               class="form-input">
                    </div>

                    <div>
                        <label for="school_year" class="form-label">
                            Tahun Ajaran
                        </label>

                        <input id="school_year" name="tahun_ajaran" type="text"
                               placeholder="Contoh: 2026/2027"
                               class="form-input">
                    </div>

                </div>
            </section>

            {{-- =================================================
                 04. PENDIDIKAN MAGANG KULIAH
            ================================================== --}}
            <section id="collegeEducation" class="conditional-section hidden overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">

                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">
                            03
                        </span>

                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">
                                Informasi Pendidikan Perguruan Tinggi
                            </h2>

                            <p class="mt-1 text-xs text-[#8290A2]">
                                Informasi universitas dan identitas mahasiswa
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 px-6 py-6 md:grid-cols-2 md:px-8">

                    <div>
                        <label for="college_level" class="form-label">
                            Jenjang Pendidikan <span class="required">*</span>
                        </label>

                        <select id="college_level" name="jenjang_kuliah"
                                class="form-input conditional-required">
                            <option value="">Pilih jenjang</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>

                    <div>
                        <label for="university" class="form-label">
                            Nama Perguruan Tinggi <span class="required">*</span>
                        </label>

                        <input id="university" name="nama_universitas" type="text"
                               placeholder="Masukkan nama universitas"
                               class="form-input conditional-required">
                    </div>

                    <div>
                        <label for="faculty" class="form-label">
                            Fakultas <span class="required">*</span>
                        </label>

                        <input id="faculty" name="fakultas" type="text"
                               placeholder="Masukkan nama fakultas"
                               class="form-input conditional-required">
                    </div>

                    <div>
                        <label for="study_program" class="form-label">
                            Program Studi <span class="required">*</span>
                        </label>

                        <input id="study_program" name="program_studi" type="text"
                               placeholder="Masukkan program studi"
                               class="form-input conditional-required">
                    </div>

                    <div>
                        <label for="nim" class="form-label">
                            NIM <span class="required">*</span>
                        </label>

                        <input id="nim" name="nim" type="text"
                               placeholder="Masukkan nomor induk mahasiswa"
                               class="form-input conditional-required">
                    </div>

                    <div>
                        <label for="semester" class="form-label">
                            Semester <span class="required">*</span>
                        </label>

                        <select id="semester" name="semester"
                                class="form-input conditional-required">
                            <option value="">Pilih semester</option>
                            @for ($i = 1; $i <= 14; $i++)
                                <option value="{{ $i }}">Semester {{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div>
                        <label for="college_supervisor" class="form-label">
                            Nama Dosen Pembimbing
                        </label>

                        <input id="college_supervisor" name="dosen_pembimbing" type="text"
                               placeholder="Masukkan nama dosen pembimbing"
                               class="form-input">
                    </div>

                    <div>
                        <label for="college_supervisor_phone" class="form-label">
                            Nomor Telepon Dosen Pembimbing
                        </label>

                        <input id="college_supervisor_phone" name="telepon_dosen_pembimbing" type="tel"
                               placeholder="Nomor telepon dosen"
                               class="form-input">
                    </div>

                </div>
            </section>

            {{-- =================================================
                 05. PROGRAM DAN PERIODE MAGANG
            ================================================== --}}
            <section class="overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">

                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">
                            04
                        </span>

                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">
                                Pilihan Program Magang
                            </h2>

                            <p class="mt-1 text-xs text-[#8290A2]">
                                Preferensi bidang dan periode magang
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 px-6 py-6 md:grid-cols-2 md:px-8">

                    <div class="md:col-span-2">
                        <label for="bidang" class="form-label">
                            Bidang / Divisi yang Diminati <span class="required">*</span>
                        </label>

                        <select id="bidang" name="bidang" required class="form-input">
                            <option value="">Pilih bidang yang diminati</option>
                            <option value="Administrasi">Administrasi</option>
                            <option value="Human Resources">Human Resources</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Finance">Finance</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div>
                        <label for="tanggal_mulai" class="form-label">
                            Rencana Tanggal Mulai <span class="required">*</span>
                        </label>

                        <input id="tanggal_mulai" name="tanggal_mulai" type="date"
                               required class="form-input">
                    </div>

                    <div>
                        <label for="tanggal_selesai" class="form-label">
                            Rencana Tanggal Selesai <span class="required">*</span>
                        </label>

                        <input id="tanggal_selesai" name="tanggal_selesai" type="date"
                               required class="form-input">
                    </div>

                    <div>
                        <label for="durasi" class="form-label">
                            Durasi Magang
                        </label>

                        <select id="durasi" name="durasi" class="form-input">
                            <option value="">Pilih durasi</option>
                            <option value="1 Bulan">1 Bulan</option>
                            <option value="2 Bulan">2 Bulan</option>
                            <option value="3 Bulan">3 Bulan</option>
                            <option value="4 Bulan">4 Bulan</option>
                            <option value="5 Bulan">5 Bulan</option>
                            <option value="6 Bulan">6 Bulan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div>
                        <label for="sumber_informasi" class="form-label">
                            Sumber Informasi Magang
                        </label>

                        <select id="sumber_informasi" name="sumber_informasi" class="form-input">
                            <option value="">Pilih sumber informasi</option>
                            <option value="Website Perusahaan">Website Perusahaan</option>
                            <option value="Kampus / Sekolah">Kampus / Sekolah</option>
                            <option value="Media Sosial">Media Sosial</option>
                            <option value="Teman / Keluarga">Teman / Keluarga</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div class="md:col-span-2">
                        <label for="tujuan" class="form-label">
                            Tujuan Mengikuti Program Magang
                        </label>

                        <textarea id="tujuan" name="tujuan" rows="4"
                                  placeholder="Ceritakan tujuan dan hal yang ingin Anda pelajari selama magang..."
                                  class="form-input resize-y"></textarea>
                    </div>

                </div>
            </section>

            {{-- =================================================
                 06. DOKUMEN MAGANG SEKOLAH
            ================================================== --}}
            <section id="schoolDocuments" class="conditional-section hidden overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">

                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">
                            05
                        </span>

                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">
                                Dokumen Magang Sekolah
                            </h2>

                            <p class="mt-1 text-xs text-[#8290A2]">
                                Dokumen pendukung dari pihak sekolah
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 px-6 py-6 md:grid-cols-2 md:px-8">

                    <div>
                        <label for="school_letter" class="form-label">
                            Surat Pengantar Sekolah <span class="required">*</span>
                        </label>

                        <input id="school_letter" name="surat_pengantar_sekolah"
                               type="file" accept=".pdf,.doc,.docx"
                               class="form-file conditional-required">

                        <p class="form-help">
                            Surat resmi pengantar magang dari sekolah.
                        </p>
                    </div>

                    <div>
                        <label for="school_report" class="form-label">
                            Rapor / Hasil Belajar
                        </label>

                        <input id="school_report" name="rapor"
                               type="file" accept=".pdf,.jpg,.jpeg,.png"
                               class="form-file">

                        <p class="form-help">
                            Dokumen rapor atau hasil belajar siswa.
                        </p>
                    </div>

                </div>
            </section>

            {{-- =================================================
                 07. DOKUMEN MAGANG KULIAH
            ================================================== --}}
            <section id="collegeDocuments" class="conditional-section hidden overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">

                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">
                            05
                        </span>

                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">
                                Dokumen Magang Kuliah
                            </h2>

                            <p class="mt-1 text-xs text-[#8290A2]">
                                Dokumen pendukung dari pihak perguruan tinggi
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 px-6 py-6 md:grid-cols-2 md:px-8">

                    <div>
                        <label for="college_letter" class="form-label">
                            Surat Pengantar Kampus <span class="required">*</span>
                        </label>

                        <input id="college_letter" name="surat_pengantar_kampus"
                               type="file" accept=".pdf,.doc,.docx"
                               class="form-file conditional-required">

                        <p class="form-help">
                            Surat resmi pengantar magang dari perguruan tinggi.
                        </p>
                    </div>

                    <div>
                        <label for="college_transcript" class="form-label">
                            Transkrip Nilai
                        </label>

                        <input id="college_transcript" name="transkrip_nilai"
                               type="file" accept=".pdf,.jpg,.jpeg,.png"
                               class="form-file">

                        <p class="form-help">
                            Dokumen transkrip nilai mahasiswa.
                        </p>
                    </div>

                </div>
            </section>

            {{-- =================================================
                 08. DOKUMEN UMUM
            ================================================== --}}
            <section class="overflow-hidden rounded-2xl border border-[#E5E8ED] bg-white shadow-sm">

                <div class="border-b border-[#E9ECF0] px-6 py-5 md:px-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#25344F] text-sm font-bold text-white">
                            06
                        </span>

                        <div>
                            <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">
                                Dokumen Pendukung Umum
                            </h2>

                            <p class="mt-1 text-xs text-[#8290A2]">
                                Dokumen yang berlaku untuk seluruh kategori magang
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 px-6 py-6 md:grid-cols-2 md:px-8">

                    <div>
                        <label for="cv" class="form-label">
                            Curriculum Vitae (CV) <span class="required">*</span>
                        </label>

                        <input id="cv" name="cv" type="file" required
                               accept=".pdf,.doc,.docx"
                               class="form-file">

                        <p class="form-help">
                            Format PDF, DOC, atau DOCX.
                        </p>
                    </div>

                    <div>
                        <label for="additional_document" class="form-label">
                            Dokumen Tambahan
                        </label>

                        <input id="additional_document" name="dokumen_tambahan"
                               type="file"
                               accept=".pdf,.jpg,.jpeg,.png,.doc,.docx"
                               class="form-file">

                        <p class="form-help">
                            Sertifikat, portofolio, atau dokumen pendukung lainnya.
                        </p>
                    </div>

                </div>
            </section>

            {{-- =================================================
                 09. PERNYATAAN
            ================================================== --}}
            <section class="rounded-2xl border border-[#E5E8ED] bg-white p-6 shadow-sm md:p-8">

                <h2 class="font-['Manrope'] text-lg font-bold text-[#25344F]">
                    Pernyataan Pendaftar
                </h2>

                <p class="mt-2 text-sm leading-6 text-[#8290A2]">
                    Pastikan seluruh data yang dimasukkan telah sesuai
                    dengan informasi dan dokumen yang Anda miliki.
                </p>

                <label class="mt-5 flex cursor-pointer items-start gap-3">
                    <input type="checkbox" name="persetujuan" required
                           class="mt-1 h-4 w-4 shrink-0 accent-[#632024]">

                    <span class="text-sm leading-6 text-[#617891]">
                        Saya menyatakan bahwa seluruh informasi dan dokumen
                        yang saya berikan dalam formulir pendaftaran ini
                        adalah benar dan dapat dipertanggungjawabkan.
                    </span>
                </label>

            </section>

            {{-- =================================================
                 TOMBOL FORMULIR
            ================================================== --}}
            <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-between">

                <a href="{{ url('/dashboard/user') }}"
                   class="inline-flex items-center justify-center rounded-xl border border-[#D9DEE6] bg-white px-6 py-3 text-sm font-bold text-[#617891] transition hover:bg-[#F5F6F8]">
                    Kembali ke Dashboard
                </a>

                <button type="submit"
                        class="inline-flex items-center justify-center rounded-xl bg-[#632024] px-8 py-3.5 text-sm font-bold text-white shadow-lg shadow-[#632024]/15 transition hover:bg-[#4E191D]">
                    Kirim Formulir Pendaftaran
                    <span class="ml-2" aria-hidden="true">→</span>
                </button>

            </div>

        </form>

        <p class="mt-8 text-center text-xs leading-6 text-[#8290A2]">
            PT Equityworld Futures · Formulir Pendaftaran Magang
        </p>

    </div>
</main>

{{-- =========================================================
     CUSTOM STYLE
========================================================= --}}
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

    .form-help {
        margin-top: 8px;
        color: #8290A2;
        font-size: 11px;
        line-height: 1.6;
    }

    .category-radio {
        position: absolute;
        opacity: 0;
        pointer-events: none;
    }

    .category-option {
        display: block;
        position: relative;
    }

    .category-card {
        background: #FFFFFF;
    }

    .category-option:hover .category-card {
        border-color: #D5B893;
        background: #FFFEFC;
        transform: translateY(-2px);
    }

    .category-radio:checked + .category-card {
        border-color: #632024;
        background: #FCF8F7;
        box-shadow: 0 0 0 3px rgba(99, 32, 36, .07);
    }

    .category-radio:checked + .category-card .category-check {
        display: flex;
    }

    .category-radio:focus-visible + .category-card {
        outline: 3px solid rgba(213, 184, 147, .65);
        outline-offset: 3px;
    }

    /*
     * Memastikan bagian kondisional yang disembunyikan
     * tidak ditampilkan oleh CSS lainnya.
     */
    .conditional-section[hidden] {
        display: none !important;
    }
</style>

{{-- =========================================================
     JAVASCRIPT
========================================================= --}}
<script>
    (function () {

        function initializeInternshipForm() {

            const form = document.getElementById('internshipForm');

            if (!form || form.dataset.initialized === 'true') {
                return;
            }

            form.dataset.initialized = 'true';

            const categoryRadios = document.querySelectorAll(
                'input[name="kategori_magang"]'
            );

            const schoolEducation = document.getElementById('schoolEducation');
            const collegeEducation = document.getElementById('collegeEducation');

            const schoolDocuments = document.getElementById('schoolDocuments');
            const collegeDocuments = document.getElementById('collegeDocuments');

            const categoryNotice = document.getElementById('categoryNotice');
            const categoryNoticeText = document.getElementById('categoryNoticeText');

            const schoolSections = [
                schoolEducation,
                schoolDocuments
            ];

            const collegeSections = [
                collegeEducation,
                collegeDocuments
            ];

            /**
             * Mengatur visibilitas bagian formulir.
             *
             * Perbaikan utama:
             * class Tailwind "hidden" juga dihapus ketika
             * bagian formulir harus ditampilkan.
             */
            function setSectionVisibility(sections, visible) {

                sections.forEach(function (section) {

                    if (!section) {
                        return;
                    }

                    // Mengubah class Tailwind hidden.
                    section.classList.toggle('hidden', !visible);

                    // Mengatur atribut hidden.
                    section.hidden = !visible;

                    const fields = section.querySelectorAll(
                        'input, select, textarea'
                    );

                    fields.forEach(function (field) {

                        // Field conditional-required hanya wajib
                        // ketika bagian formulir sedang ditampilkan.
                        if (field.classList.contains('conditional-required')) {
                            field.required = visible;
                        }

                        // Field pada bagian tersembunyi dinonaktifkan.
                        field.disabled = !visible;

                    });

                });

            }

            /**
             * Mengatur formulir sesuai kategori yang dipilih.
             */
            function updateInternshipCategory() {

                const selectedCategory = document.querySelector(
                    'input[name="kategori_magang"]:checked'
                );

                // Jika belum memilih kategori.
                if (!selectedCategory) {

                    setSectionVisibility(schoolSections, false);
                    setSectionVisibility(collegeSections, false);

                    if (categoryNotice) {
                        categoryNotice.classList.add('hidden');
                    }

                    return;
                }

                const category = selectedCategory.value;

                // KATEGORI MAGANG SEKOLAH.
                if (category === 'Magang Sekolah') {

                    setSectionVisibility(schoolSections, true);
                    setSectionVisibility(collegeSections, false);

                    if (categoryNoticeText) {
                        categoryNoticeText.textContent =
                            'Anda memilih Magang Sekolah. Silakan lengkapi informasi pendidikan SMA/SMK dan dokumen pengantar dari sekolah.';
                    }

                }

                // KATEGORI MAGANG KULIAH.
                else if (category === 'Magang Kuliah') {

                    setSectionVisibility(schoolSections, false);
                    setSectionVisibility(collegeSections, true);

                    if (categoryNoticeText) {
                        categoryNoticeText.textContent =
                            'Anda memilih Magang Kuliah. Silakan lengkapi informasi perguruan tinggi dan dokumen pengantar dari kampus.';
                    }

                }

                if (categoryNotice) {
                    categoryNotice.classList.remove('hidden');
                }

            }

            // Event ketika kategori magang dipilih.
            categoryRadios.forEach(function (radio) {

                radio.addEventListener('change', updateInternshipCategory);

            });

            // Terapkan kondisi awal ketika halaman selesai dimuat.
            updateInternshipCategory();

            /**
             * Validasi tanggal mulai dan tanggal selesai.
             */
            const startDate = document.getElementById('tanggal_mulai');
            const endDate = document.getElementById('tanggal_selesai');

            if (startDate && endDate) {

                startDate.addEventListener('change', function () {

                    endDate.min = this.value;

                    if (endDate.value && endDate.value < this.value) {
                        endDate.value = '';
                    }

                });

            }

            /**
             * Formulir masih berupa frontend.
             * Data belum disimpan ke database.
             */
            form.addEventListener('submit', function (event) {

                event.preventDefault();

                const selectedCategory = document.querySelector(
                    'input[name="kategori_magang"]:checked'
                );

                if (!selectedCategory) {
                    alert('Silakan pilih jenis program magang terlebih dahulu.');
                    return;
                }

                if (
                    startDate &&
                    endDate &&
                    startDate.value &&
                    endDate.value &&
                    endDate.value < startDate.value
                ) {

                    alert('Tanggal selesai magang tidak boleh lebih awal dari tanggal mulai.');

                    endDate.focus();

                    return;
                }

                alert(
                    'Formulir ' + selectedCategory.value +
                    ' telah berhasil melewati validasi browser. ' +
                    'Fitur pengiriman belum tersedia karena halaman ini belum terhubung dengan database.'
                );

            });

        }

        /*
         * Memastikan JavaScript tetap berjalan baik ketika
         * halaman masih loading maupun sudah selesai dimuat.
         */
        if (document.readyState === 'loading') {

            document.addEventListener(
                'DOMContentLoaded',
                initializeInternshipForm
            );

        } else {

            initializeInternshipForm();

        }

    })();
</script>
@endsection
