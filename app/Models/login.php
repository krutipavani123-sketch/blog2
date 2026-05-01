<?php

namespace App\Models;

// 1. You MUST import this specific class
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// 2. Change "extends Model" to "extends Authenticatable"
class login extends Authenticatable
{
    use Notifiable;

    protected $table = 'logins';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Hidden fields for security
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
