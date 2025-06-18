<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstructorDriverLicense extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'license_number',
        'expiry_date',
        'front_image_url',
        'back_image_url',
        'is_verified',
        'verified_at',
    ];

    protected $casts = [
        'expiry_date' => 'date',
        'is_verified' => 'boolean',
        'verified_at' => 'datetime',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
