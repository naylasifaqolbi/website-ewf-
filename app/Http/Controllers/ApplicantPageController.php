<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\InternshipDetail;
use App\Models\JobDetail;
use App\Models\ApplicationDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ApplicantPageController extends Controller
{
    /**
     * Menampilkan halaman formulir pendaftaran magang.
     */
    public function pendaftaranMagang(): View
    {
        return view('applicant.pendaftaran-magang');
    }

    /**
     * Menampilkan halaman formulir lamaran kerja.
     */
    public function lamaranKerja(): View
    {
        return view('applicant.lamaran-kerja');
    }

    /**
     * Memproses pengajuan pendaftaran magang.
     */
    public function storeInternship(Request $request): RedirectResponse {
    // Periksa jumlah pengajuan aktif milik pengguna
    $activeApplications = Application::where('user_id', Auth::id())
        ->whereIn('status', ['pending', 'in_selection', 'accepted'])
        ->count();

    // Batasi maksimal 3 pengajuan aktif
    if ($activeApplications >= 3) {
        return back()
            ->withInput()
            ->with('error', 'Kamu sudah memiliki 3 pengajuan aktif. Selesaikan atau tunggu hasil pengajuan sebelumnya sebelum mengajukan kembali.');
    }

    $validated = $request->validate([
    // Kategori pendaftaran
    'kategori_magang' => 'required|in:Magang Sekolah,Magang Kuliah',

    // Data diri
    'nama' => 'required|string|max:255',
    'email' => 'required|email|max:255',
    'telepon' => 'required|string|max:20',
    'tempat_lahir' => 'nullable|string|max:100',
    'tanggal_lahir' => 'nullable|date',
    'alamat' => 'required|string',

    // Data sekolah
    'jenis_sekolah' => 'required_if:kategori_magang,Magang Sekolah|nullable|in:SMA,SMK',
    'nama_sekolah' => 'required_if:kategori_magang,Magang Sekolah|nullable|string|max:255',
    'nis_nisn' => 'nullable|string|max:50',
    'jurusan_sekolah' => 'required_if:kategori_magang,Magang Sekolah|nullable|string|max:255',
    'kelas' => 'required_if:kategori_magang,Magang Sekolah|nullable|string|max:10',
    'guru_pembimbing' => 'required_if:kategori_magang,Magang Sekolah|nullable|string|max:255',
    'telepon_guru_pembimbing' => 'required_if:kategori_magang,Magang Sekolah|nullable|string|max:20',
    'tahun_ajaran' => 'nullable|string|max:20',

    // Data kuliah
    'jenjang_kuliah' => 'required_if:kategori_magang,Magang Kuliah|nullable|string|max:20',
    'nama_universitas' => 'required_if:kategori_magang,Magang Kuliah|nullable|string|max:255',
    'fakultas' => 'required_if:kategori_magang,Magang Kuliah|nullable|string|max:255',
    'program_studi' => 'required_if:kategori_magang,Magang Kuliah|nullable|string|max:255',
    'nim' => 'required_if:kategori_magang,Magang Kuliah|nullable|string|max:50',
    'semester' => 'required_if:kategori_magang,Magang Kuliah|nullable|integer|min:1|max:14',
    'dosen_pembimbing' => 'nullable|string|max:255',
    'telepon_dosen_pembimbing' => 'nullable|string|max:20',

    // Program magang
    'bidang' => 'required|string|max:100',
    'tanggal_mulai' => 'required|date',
    'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
    'durasi' => 'nullable|string|max:100',
    'sumber_informasi' => 'nullable|string|max:255',
    'tujuan' => 'nullable|string',

    // Dokumen sekolah
    'surat_pengantar_sekolah' => 'required_if:kategori_magang,Magang Sekolah|nullable|file|mimes:pdf,doc,docx|max:5120',
    'rapor' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',

    // Dokumen kuliah
    'surat_pengantar_kampus' => 'required_if:kategori_magang,Magang Kuliah|nullable|file|mimes:pdf,doc,docx|max:5120',
    'transkrip_nilai' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',

    // Dokumen umum
    'cv' => 'required|file|mimes:pdf,doc,docx|max:5120',
    'dokumen_tambahan' => 'nullable|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:5120',

    // Persetujuan
    'persetujuan' => 'accepted',
    ]);

    // Periksa apakah pengguna masih memiliki pengajuan aktif
    // pada divisi yang sama
    $duplicateApplication = Application::where('user_id', Auth::id())
        ->where('application_type', 'internship')
        ->whereIn('status', ['pending', 'in_selection', 'accepted'])
        ->whereHas('internshipDetail', function ($query) use ($validated) {
            $query->where('internship_field', $validated['bidang']);
        })
        ->exists();

// Tolak jika masih ada pengajuan aktif pada divisi yang sama
if ($duplicateApplication) {
    return back()
        ->withInput()
        ->with('error', 'Kamu masih memiliki pengajuan aktif pada divisi ' . $validated['bidang'] . '. Tunggu hingga pengajuan tersebut selesai sebelum mengajukan kembali pada divisi yang sama.');
}

    // Menampung lokasi file yang berhasil diunggah
        $uploadedPaths = [];

        try {
    // Simpan data pendaftaran dan detail magang
    DB::transaction(function () use ($validated, $request, &$uploadedPaths) {

    // Simpan data utama pengajuan
    $application = Application::create([
        'user_id' => Auth::id(),
        'application_type' => 'internship',
        'full_name' => $validated['nama'],
        'email' => $validated['email'],
        'phone' => $validated['telepon'],
        'birth_place' => $validated['tempat_lahir'] ?? null,
        'birth_date' => $validated['tanggal_lahir'] ?? null,
        'address' => $validated['alamat'],
        'status' => 'pending',
        'submitted_at' => now(),
    ]);

        // Simpan detail pendidikan dan program magang
    InternshipDetail::create([
        'application_id' => $application->id,

        // Kategori magang
        'category' => $validated['kategori_magang'] === 'Magang Sekolah'
            ? 'school'
            : 'college',

        // Data sekolah
        'school_type' => $validated['jenis_sekolah'] ?? null,
        'school_name' => $validated['nama_sekolah'] ?? null,
        'school_identification_number' => $validated['nis_nisn'] ?? null,
        'school_major' => $validated['jurusan_sekolah'] ?? null,
        'school_grade' => $validated['kelas'] ?? null,
        'school_supervisor' => $validated['guru_pembimbing'] ?? null,
        'school_supervisor_phone' => $validated['telepon_guru_pembimbing'] ?? null,
        'academic_year' => $validated['tahun_ajaran'] ?? null,

        // Data kuliah
        'college_level' => $validated['jenjang_kuliah'] ?? null,
        'university_name' => $validated['nama_universitas'] ?? null,
        'faculty' => $validated['fakultas'] ?? null,
        'study_program' => $validated['program_studi'] ?? null,
        'student_identification_number' => $validated['nim'] ?? null,
        'semester' => $validated['semester'] ?? null,
        'college_supervisor' => $validated['dosen_pembimbing'] ?? null,
        'college_supervisor_phone' => $validated['telepon_dosen_pembimbing'] ?? null,

        // Program magang
        'internship_field' => $validated['bidang'],
        'start_date' => $validated['tanggal_mulai'],
        'end_date' => $validated['tanggal_selesai'],
        'duration' => $validated['durasi'] ?? null,
        'information_source' => $validated['sumber_informasi'] ?? null,
        'internship_objective' => $validated['tujuan'] ?? null,
        ]);

                // Daftar dokumen yang diunggah
        $documents = [
            'cv' => 'cv',
            'surat_pengantar_sekolah' => 'school_letter',
            'rapor' => 'school_report',
            'surat_pengantar_kampus' => 'college_letter',
            'transkrip_nilai' => 'college_transcript',
            'dokumen_tambahan' => 'additional_document',
        ];

        // Proses upload dan penyimpanan dokumen
        foreach ($documents as $field => $documentType) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);

                $filePath = $file->store(
                    'application-documents/' . $application->id,
                    'public'
                );

                $uploadedPaths[] = $filePath;

                ApplicationDocument::create([
                    'application_id' => $application->id,
                    'document_type' => $documentType,
                    'original_name' => mb_substr($file->getClientOriginalName(), 0, 255),
                    'file_path' => $filePath,
                    'mime_type' => $file->getMimeType(),
                    'file_size' => $file->getSize(),
                ]);
                   }
         }

    });

        } catch (\Throwable $e) {
            // Hapus file yang sudah terunggah jika transaksi gagal
            Storage::disk('public')->delete($uploadedPaths);

            // Catat detail kesalahan untuk diperiksa
            report($e);

            return back()
                ->withInput()
                ->with('error', 'Pendaftaran gagal disimpan. Silakan coba kembali.');
        }
    // Kembali ke halaman formulir setelah berhasil menyimpan
    return redirect()
        ->route('pendaftaran.magang')
        ->with('success', 'Pendaftaran magang berhasil dikirim.');
    }


    /**
     * Memproses pengajuan lamaran kerja.
     */
    public function storeJob(Request $request): RedirectResponse
    {
        // Periksa jumlah pengajuan aktif milik pengguna
        $activeApplications = Application::where('user_id', Auth::id())
            ->whereIn('status', ['pending', 'in_selection', 'accepted'])
            ->count();

        // Batasi maksimal 3 pengajuan aktif
        if ($activeApplications >= 3) {
            return back()
                ->withInput()
                ->with('error', 'Kamu sudah memiliki 3 pengajuan aktif. Selesaikan atau tunggu hasil pengajuan sebelumnya sebelum mengajukan kembali.');
        }

        // Validasi data formulir
        $validated = $request->validate([
            // Data diri
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
            'tempat_lahir' => 'nullable|string|max:100',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'status_perkawinan' => 'nullable|in:Belum Menikah,Menikah,Lainnya',
            'alamat' => 'required|string',

            // Pendidikan
            'pendidikan' => 'required|in:SMA,SMK,D1,D2,D3,D4,S1,S2,S3',
            'institusi' => 'required|string|max:255',
            'jurusan' => 'nullable|string|max:255',
            'tahun_lulus' => 'required|integer|min:1950|max:2100',
            'nilai' => 'nullable|numeric|min:0|max:100',

            // Posisi pekerjaan
            'posisi' => 'required|in:Staf,Konsultan Bisnis,Pengemudi',
            'tanggal_bersedia' => 'nullable|date',
            'pengalaman' => 'nullable|in:Belum Memiliki Pengalaman,Kurang dari 1 Tahun,1-2 Tahun,3-5 Tahun,Lebih dari 5 Tahun',

            // Pengalaman dan kompetensi
            'riwayat_pengalaman' => 'nullable|string',
            'keahlian' => 'nullable|string',
            'motivasi' => 'required|string',

            // Dokumen wajib
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120',
            'surat_lamaran' => 'required|file|mimes:pdf,doc,docx|max:5120',

            // Dokumen tambahan
            'ijazah' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'transkrip' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'portofolio' => 'nullable|file|mimes:pdf,zip,jpg,jpeg,png|max:5120',
            'sertifikat' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',

            // Persetujuan
            'persetujuan' => 'accepted',
        ]);

        // Cegah pengajuan aktif pada posisi yang sama
        $duplicateApplication = Application::where('user_id', Auth::id())
            ->where('application_type', 'job')
            ->whereIn('status', ['pending', 'in_selection', 'accepted'])
            ->whereHas('jobDetail', function ($query) use ($validated) {
                $query->where('position', $validated['posisi']);
            })
            ->exists();

        if ($duplicateApplication) {
            return back()
                ->withInput()
                ->with('error', 'Kamu masih memiliki pengajuan aktif pada posisi ' . $validated['posisi'] . '. Tunggu hingga pengajuan tersebut selesai sebelum mengajukan kembali pada posisi yang sama.');
        }

        // Menampung lokasi file yang berhasil diunggah
        $uploadedPaths = [];

        try {
            DB::transaction(function () use ($validated, $request, &$uploadedPaths) {

                // Simpan data utama lamaran
                $application = Application::create([
                    'user_id' => Auth::id(),
                    'application_type' => 'job',
                    'full_name' => $validated['nama'],
                    'email' => $validated['email'],
                    'phone' => $validated['telepon'],
                    'birth_place' => $validated['tempat_lahir'] ?? null,
                    'birth_date' => $validated['tanggal_lahir'] ?? null,
                    'gender' => $validated['jenis_kelamin'] ?? null,
                    'marital_status' => $validated['status_perkawinan'] ?? null,
                    'address' => $validated['alamat'],
                    'status' => 'pending',
                    'submitted_at' => now(),
                ]);

                // Simpan detail pendidikan dan pekerjaan
                JobDetail::create([
                    'application_id' => $application->id,
                    'education_level' => $validated['pendidikan'],
                    'institution' => $validated['institusi'],
                    'major' => $validated['jurusan'] ?? null,
                    'graduation_year' => $validated['tahun_lulus'],
                    'grade' => $validated['nilai'] ?? null,
                    'position' => $validated['posisi'],
                    'available_date' => $validated['tanggal_bersedia'] ?? null,
                    'experience_level' => $validated['pengalaman'] ?? null,
                    'work_experience' => $validated['riwayat_pengalaman'] ?? null,
                    'skills' => $validated['keahlian'] ?? null,
                    'motivation' => $validated['motivasi'],
                ]);

                // Daftar dokumen yang diunggah
                $documents = [
                    'cv' => 'cv',
                    'surat_lamaran' => 'cover_letter',
                    'ijazah' => 'diploma',
                    'transkrip' => 'transcript',
                    'portofolio' => 'portfolio',
                    'sertifikat' => 'certificate',
                ];

                // Proses upload dan penyimpanan dokumen
                foreach ($documents as $field => $documentType) {
                    if ($request->hasFile($field)) {
                        $file = $request->file($field);

                        $filePath = $file->store(
                            'application-documents/' . $application->id,
                            'public'
                        );

                        $uploadedPaths[] = $filePath;

                        ApplicationDocument::create([
                            'application_id' => $application->id,
                            'document_type' => $documentType,
                            'original_name' => mb_substr($file->getClientOriginalName(), 0, 255),
                            'file_path' => $filePath,
                            'mime_type' => $file->getMimeType(),
                            'file_size' => $file->getSize(),
                        ]);
                    }
                }
            });
        } catch (\Throwable $e) {
            // Hapus file jika penyimpanan database gagal
            Storage::disk('public')->delete($uploadedPaths);

            report($e);

            return back()
                ->withInput()
                ->with('error', 'Lamaran gagal disimpan. Silakan coba kembali.');
        }

        return redirect()
            ->route('lamaran.kerja')
            ->with('success', 'Lamaran kerja berhasil dikirim.');
    }

    public function riwayatPengajuan(): View
    {
        $applications = Application::where('user_id', Auth::id())
            ->with(['internshipDetail', 'jobDetail'])
            ->orderByDesc('submitted_at')
            ->orderByDesc('id')
            ->paginate(10);

        return view('applicant.riwayat-pengajuan', compact('applications'));
    }
}
