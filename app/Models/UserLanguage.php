<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLanguage extends Model
{
    protected $fillable = ['user_id', 'language'];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
