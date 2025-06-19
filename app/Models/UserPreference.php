<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPreference extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'preferred_transmission',
        'notification_settings',
        'suburb',
        'state',
        'note',
        'preferred_pickup_address',
    ];

    protected $casts = [
        'notification_settings' => 'array',
        'language' => 'array',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
