
@extends('layouts.public')

@section('title', 'Riwayat Pengajuan | PT Equityworld Futures')

@section('content')

<main class="min-h-screen bg-linear-to-b from-white via-white to-[#D5B893]/10 font-['DM_Sans']">

    {{-- HEADER HALAMAN --}}
    <section class="relative isolate overflow-hidden bg-linear-to-br from-[#25344F] via-[#25344F] to-[#632024] text-white">
        <div class="pointer-events-none absolute -right-20 -top-24 h-80 w-80 rounded-full border border-[#D5B893]/20"></div>
        <div class="pointer-events-none absolute -right-5 -top-10 h-52 w-52 rounded-full border border-[#D5B893]/15"></div>
        <div class="pointer-events-none absolute -bottom-32 left-1/3 h-72 w-72 rounded-full bg-[#D5B893]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-12 lg:px-8 lg:py-16">
            <span class="inline-flex items-center gap-2 rounded-full border border-[#D5B893]/40 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-[#D5B893]">
                <span class="h-2 w-2 rounded-full bg-[#D5B893]"></span>
                Applicant Portal
            </span>

            <h1 class="mt-5 font-['Manrope'] text-3xl font-extrabold sm:text-4xl lg:text-5xl">
                Riwayat Pengajuan
            </h1>

            <p class="mt-4 max-w-2xl text-sm leading-7 text-white/80 sm:text-base">
                Lihat seluruh riwayat pendaftaran magang dan lamaran pekerjaan
                yang telah kamu kirimkan melalui portal PT Equityworld Futures.
            </p>

            <a href="{{ route('dashboard.user') }}"
               class="mt-6 inline-flex items-center rounded-xl border border-white/40 px-5 py-3 text-sm font-bold text-white transition hover:border-[#D5B893] hover:bg-white/10">
                ← Kembali ke Dashboard
            </a>
        </div>
    </section>

    {{-- DAFTAR RIWAYAT --}}
    <section class="mx-auto max-w-7xl px-5 py-12 lg:px-8">

        <div class="mb-7">
            <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#632024]">
                Monitoring
            </span>

            <h2 class="mt-2 font-['Manrope'] text-2xl font-extrabold text-[#25344F]">
                Semua Pengajuan Anda
            </h2>

            <p class="mt-2 text-sm text-[#617891]">
                Total {{ $applications->total() }} pengajuan telah tercatat.
            </p>
        </div>

        <div class="overflow-hidden rounded-2xl border border-[#D5B893]/50 bg-white shadow-sm">

            <div class="overflow-x-auto">
                <table class="w-full min-w-162.5 text-left text-sm">

                    <thead class="bg-[#25344F] text-white">
                        <tr>
                            <th class="px-6 py-4 font-bold">Jenis Pengajuan</th>
                            <th class="px-6 py-4 font-bold">Tanggal</th>
                            <th class="px-6 py-4 font-bold">Posisi / Program</th>
                            <th class="px-6 py-4 font-bold">Status</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-[#D5B893]/40">

                        @forelse ($applications as $application)

                            <tr class="transition hover:bg-[#D5B893]/5">

                                {{-- JENIS PENGAJUAN --}}
                                <td class="px-6 py-5 font-semibold text-[#25344F]">
                                    {{ $application->application_type === 'internship' ? 'Magang' : 'Lamaran Kerja' }}
                                </td>

                                {{-- TANGGAL --}}
                                <td class="px-6 py-5 text-[#617891]">
                                    {{ $application->submitted_at?->format('d M Y') ?? '-' }}
                                </td>

                                {{-- POSISI / PROGRAM --}}
                                <td class="px-6 py-5 text-[#617891]">
                                    @if ($application->application_type === 'internship')
                                        {{ $application->internshipDetail?->internship_field ?? '-' }}
                                    @else
                                        {{ $application->jobDetail?->position ?? '-' }}
                                    @endif
                                </td>

                                {{-- STATUS --}}
                                <td class="px-6 py-5">
                                    @php
                                        $statusLabels = [
                                            'pending' => 'Menunggu Verifikasi',
                                            'in_selection' => 'Dalam Proses Seleksi',
                                            'accepted' => 'Diterima',
                                            'rejected' => 'Ditolak',
                                            'completed' => 'Selesai',
                                        ];

                                        $statusColors = [
                                            'pending' => 'bg-amber-100 text-amber-800',
                                            'in_selection' => 'bg-blue-100 text-blue-800',
                                            'accepted' => 'bg-green-100 text-green-800',
                                            'rejected' => 'bg-red-100 text-red-800',
                                            'completed' => 'bg-slate-100 text-slate-700',
                                        ];
                                    @endphp

                                    <span class="inline-flex whitespace-nowrap rounded-full px-3 py-1 text-xs font-bold {{ $statusColors[$application->status] ?? 'bg-gray-100 text-gray-700' }}">
                                        {{ $statusLabels[$application->status] ?? $application->status }}
                                    </span>
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="4" class="px-6 py-16 text-center">

                                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-[#D5B893]/25 text-[#25344F]">
                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m-7 4h14a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v14z"/>
                                        </svg>
                                    </div>

                                    <h3 class="mt-4 font-['Manrope'] font-bold text-[#25344F]">
                                        Belum Ada Pengajuan
                                    </h3>

                                    <p class="mt-2 text-sm text-[#617891]">
                                        Kamu belum mengirimkan pendaftaran magang atau lamaran pekerjaan.
                                    </p>

                                    <a href="{{ url('/karier') }}"
                                       class="mt-5 inline-flex rounded-xl bg-[#632024] px-5 py-2.5 text-xs font-bold text-white transition hover:bg-[#25344F]">
                                        Mulai Pendaftaran
                                    </a>

                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>
            </div>
        </div>

        {{-- PAGINATION --}}
        @if ($applications->hasPages())
            <div class="mt-6">
                {{ $applications->links() }}
            </div>
        @endif

    </section>

</main>

@endsection
