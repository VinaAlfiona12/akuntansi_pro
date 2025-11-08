<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'kamar'; // sesuai nama tabel di database

    // Kolom yang dapat diisi
    protected $fillable = [
        'nomor_kamar',
        'tipe_kamar',
        'harga_per_malam',
        'status',
        'keterangan',
    ];
}
