<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'learner_id',
        'instructor_id',
        'vehicle_id',
        'package_id',
        'status',
        'booking_datetime',
        'pickup_location',
        'dropoff_location',
        'total_price',
    ];

    protected $casts = [
        'booking_datetime' => 'datetime',
    ];

    public function learner()
    {
        return $this->belongsTo(User::class, 'learner_id');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
