<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WwccSubmissionHistory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'instructor_id',
        'wwcc_number',
        'submitted_at',
        'status',
        'notes',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
