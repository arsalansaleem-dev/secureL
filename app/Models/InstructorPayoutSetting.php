<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstructorPayoutSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'payout_frequency',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
