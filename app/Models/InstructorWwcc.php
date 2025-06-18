<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstructorWwcc extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'full_name',
        'date_of_birth',
        'wwcc_number',
        'expiry_date',
        'verification_date',
        'is_verified',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'expiry_date' => 'date',
        'verification_date' => 'date',
        'is_verified' => 'boolean',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
