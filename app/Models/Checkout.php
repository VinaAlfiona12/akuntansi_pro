<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'checkout'; // nama tabel 'checkout'

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama_tamu',
        'kamar',
        'tanggal_checkout',
        'keterangan',
    ];
}
