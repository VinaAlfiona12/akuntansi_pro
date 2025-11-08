<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'reservasi';

    // Kolom yang dapat diisi
    protected $fillable = [
        'user_id',
        'tanggal_reservasi',
        'status',
        'keterangan',
    ];

    /**
     * Relasi ke tabel users
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
