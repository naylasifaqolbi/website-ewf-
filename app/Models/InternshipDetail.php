<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InternshipDetail extends Model
{
    protected $fillable = [
        'application_id',
        'category',
        'school_type',
        'school_name',
        'school_identification_number',
        'school_major',
        'school_grade',
        'school_supervisor',
        'school_supervisor_phone',
        'academic_year',
        'college_level',
        'university_name',
        'faculty',
        'study_program',
        'student_identification_number',
        'semester',
        'college_supervisor',
        'college_supervisor_phone',
        'internship_field',
        'start_date',
        'end_date',
        'duration',
        'information_source',
        'internship_objective',
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
            'semester' => 'integer',
        ];
    }

    // Relasi ke pengajuan utama
    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }
}
