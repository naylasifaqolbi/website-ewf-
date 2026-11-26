<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobDetail extends Model
{
    protected $fillable = [
        'application_id',
        'education_level',
        'institution',
        'major',
        'graduation_year',
        'grade',
        'position',
        'available_date',
        'experience_level',
        'work_experience',
        'skills',
        'motivation',
    ];

    protected function casts(): array
    {
        return [
            'graduation_year' => 'integer',
            'grade' => 'decimal:2',
            'available_date' => 'date',
        ];
    }

    // Relasi ke pengajuan utama
    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }
}
