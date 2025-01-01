<?php

namespace App\Models;

<<<<<<< Updated upstream
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> Stashed changes
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
<<<<<<< Updated upstream
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
=======
    protected $table = 'transaksi';
    
>>>>>>> Stashed changes
    protected $fillable = [
        'id_mitra',
        'jumlah',
        'tanggal',
        'status',
<<<<<<< Updated upstream
        'keterangan',
    ];

    /**
     * Get the mitra that owns the transaction.
     */
    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra');
=======
        'keterangan'
    ];

    protected $casts = [
        'tanggal' => 'date'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'id_mitra');
>>>>>>> Stashed changes
    }
}
