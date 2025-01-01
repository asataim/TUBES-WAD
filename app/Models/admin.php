<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'users';
    protected $fillable = ['nama', 'username', 'password', 'role'];

    public static function userTypes()
    {
        return ['admin', 'user'];
    }
}