<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'contact',
        'address',
    ];


public function reports()
    {
        return $this->hasMany(Report::class, 'id_mitra');
    }
}