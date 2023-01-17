<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'avatar',
        'name',
        'last_name',
        'address',
        'movil',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'birthday'=>'date',
    ];
}
