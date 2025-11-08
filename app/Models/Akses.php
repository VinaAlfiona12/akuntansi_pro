<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'akses'; // tidak pakai 's' di akhir

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama_akses',
        'keterangan',
    ];
}
