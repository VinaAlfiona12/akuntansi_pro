<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'checkin'; // sesuaikan nama tabel

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama_tamu',
        'kamar',
        'tanggal_checkin',
        'keterangan',
    ];
}
