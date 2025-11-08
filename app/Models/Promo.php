<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'promos'; // gunakan bentuk jamak sesuai konvensi Laravel

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama_promo',
        'diskon',
        'keterangan',
    ];
}
