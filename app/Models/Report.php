<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    // Nama tabel yang akan digunakan, jika berbeda dari nama model (contoh: 'reports')
    protected $table = 'report';

    // Kolom yang dapat diisi secara massal (mass assignment)
    protected $fillable = [
        'id_mitra',
        'periode',
        'total_transaksi',
        'total_pendapatan',
        'status_kinerja'
    ];

    // Relasi: Setiap laporan berhubungan dengan satu profil
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'id_mitra');
    }
}
