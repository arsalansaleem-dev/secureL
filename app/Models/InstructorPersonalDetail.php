<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstructorPersonalDetail extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'instructor_id',
        'first_name',
        'preferred_name',
        'last_name',
        'gender',
        'email',
        'phone',
        'postcode',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
