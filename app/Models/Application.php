<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Application extends Model
{
        protected $fillable = [
        'user_id',
        'application_type',
        'full_name',
        'email',
        'phone',
        'birth_place',
        'birth_date',
        'gender',
        'marital_status',
        'address',
        'status',
        'submitted_at',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
            'submitted_at' => 'datetime',
        ];
    }

    // Relasi ke akun pengguna
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke detail magang
    public function internshipDetail(): HasOne
    {
        return $this->hasOne(InternshipDetail::class);
    }

    // Relasi ke detail lamaran kerja
    public function jobDetail(): HasOne
    {
        return $this->hasOne(JobDetail::class);
    }

    // Relasi ke dokumen pengajuan
    public function documents(): HasMany
    {
        return $this->hasMany(ApplicationDocument::class);
    }
}
