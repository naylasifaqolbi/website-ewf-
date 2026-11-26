
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('internship_details', function (Blueprint $table) {
            $table->id();

            // Relasi ke pengajuan magang
            $table->foreignId('application_id')
                ->constrained('applications')
                ->cascadeOnDelete()
                ->unique();

            // Kategori magang
            $table->enum('category', ['school', 'college']);

            // Data magang sekolah
            $table->string('school_type')->nullable();
            $table->string('school_name')->nullable();
            $table->string('school_identification_number')->nullable();
            $table->string('school_major')->nullable();
            $table->string('school_grade')->nullable();
            $table->string('school_supervisor')->nullable();
            $table->string('school_supervisor_phone', 20)->nullable();
            $table->string('academic_year')->nullable();

            // Data magang kuliah
            $table->string('college_level')->nullable();
            $table->string('university_name')->nullable();
            $table->string('faculty')->nullable();
            $table->string('study_program')->nullable();
            $table->string('student_identification_number')->nullable();
            $table->unsignedTinyInteger('semester')->nullable();
            $table->string('college_supervisor')->nullable();
            $table->string('college_supervisor_phone', 20)->nullable();

            // Informasi program magang
            $table->string('internship_field');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('duration')->nullable();
            $table->string('information_source')->nullable();
            $table->text('internship_objective')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('internship_details');
    }
};
