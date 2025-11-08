<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'layanan'; // sesuaikan nama tabel layanan

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama_layanan',
        'keterangan',
    ];
}
