<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearnerProfile extends Model
{
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'phone', 'dob'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
