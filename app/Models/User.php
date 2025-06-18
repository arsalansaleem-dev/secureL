<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'role',
        'profile_image',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // === RELATIONSHIPS ===

    public function instructor()
    {
        return $this->hasOne(Instructor::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    public function preferences()
    {
        return $this->hasOne(UserPreference::class);
    }

    public function learnerBookings()
    {
        return $this->hasMany(Booking::class, 'learner_id');
    }

    public function assignedInstructors()
    {
        return $this->hasMany(LearnerInstructor::class, 'learner_id');
    }

    public function assignedLearners()
    {
        return $this->hasMany(LearnerInstructor::class, 'instructor_id');
    }
}
