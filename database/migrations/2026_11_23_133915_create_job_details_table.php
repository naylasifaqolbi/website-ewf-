
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();

            // Relasi ke pengajuan lamaran kerja
            $table->foreignId('application_id')
                ->constrained('applications')
                ->cascadeOnDelete()
                ->unique();

            // Informasi pendidikan
            $table->string('education_level');
            $table->string('institution');
            $table->string('major')->nullable();
            $table->year('graduation_year')->nullable();
            $table->decimal('grade', 5, 2)->nullable();

            // Informasi posisi yang dilamar
            $table->string('position');
            $table->date('available_date')->nullable();
            $table->string('experience_level')->nullable();

            // Pengalaman dan kemampuan pelamar
            $table->text('work_experience')->nullable();
            $table->text('skills')->nullable();
            $table->text('motivation');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};
