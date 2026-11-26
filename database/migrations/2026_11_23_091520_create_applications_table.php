
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            // Relasi ke akun pengguna
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            // Jenis pengajuan
            $table->enum('application_type', ['internship', 'job']);

            // Identitas pelamar
            $table->string('full_name');
            $table->string('email');
            $table->string('phone', 20);
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->text('address');

            // Status pengajuan
            $table->enum('status', [
                'pending',
                'in_selection',
                'accepted',
                'rejected',
                'completed',
            ])->default('pending');

            // Waktu pengajuan
            $table->timestamp('submitted_at')->useCurrent();

            $table->timestamps();

            // Mempermudah pencarian pengajuan pengguna
            $table->index(['user_id', 'status']);
            $table->index(['application_type', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
