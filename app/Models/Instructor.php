<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hourly_rate',
        'vehicle_id',
        'rating',
        'bio',
        'languages',
        'license_type',
        'license_duration',
        'gender',
        'language_preference',
        'is_available',
        'is_verified',
    ];

    protected $casts = [
        'language_preference' => 'array',
        'is_available' => 'boolean',
        'is_verified' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
    }

    public function licenses()
    {
        return $this->hasMany(InstructorDriverLicense::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class, 'user_id', 'user_id');
    }
}
