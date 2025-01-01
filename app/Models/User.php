<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $fillable = [
        'nama', 'username', 'password', 'role',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}

