<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'duration_minutes',
        'includes_vehicle',
        'pickup_dropoff',
        'warmup_minutes',
        'price',
    ];

    protected $casts = [
        'includes_vehicle' => 'boolean',
        'pickup_dropoff' => 'boolean',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
