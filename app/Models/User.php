<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $fillable = [
        'nama', 'username', 'password', 'role',
    ];

    // Metode untuk memeriksa apakah pengguna adalah admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}

