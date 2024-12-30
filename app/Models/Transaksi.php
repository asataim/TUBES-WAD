<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = 'transaksi';

    /**
     * The primary key associated with the table.
     */
    protected $primaryKey = 'id_transaksi';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'id_mitra',
        'jumlah',
        'tanggal',
        'status',
        'keterangan',
    ];

    /**
     * Get the mitra that owns the transaction.
     */
    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra');
    }
}
