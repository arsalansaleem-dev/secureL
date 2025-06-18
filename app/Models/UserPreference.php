<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPreference extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'preferred_language',
        'preferred_transmission',
        'notification_settings',
    ];

    protected $casts = [
        'notification_settings' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
