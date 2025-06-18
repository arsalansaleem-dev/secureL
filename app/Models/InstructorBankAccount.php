<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstructorBankAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'account_name',
        'account_number',
        'bsb',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}

