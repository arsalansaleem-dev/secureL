<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstructorBillingInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'business_name',
        'abn',
        'billing_address',
        'gst_registered',
        'suburb',
        'postcode',
        'state',
    ];

    protected $casts = [
        'gst_registered' => 'boolean',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
