<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'make',
        'model',
        'year',
        'ancap_rating',
        'is_dual_controlled',
        'image',
    ];

    protected $casts = [
        'is_dual_controlled' => 'boolean',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
