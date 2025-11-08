<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang digunakan oleh model ini.
     *
     * Laravel secara default akan menambahkan 's' di akhir nama model,
     * jadi kita tentukan manual agar menggunakan tabel 'pegawai'.
     */
    protected $table = 'pegawai';

    /**
     * Kolom yang dapat diisi secara massal.
     */
    protected $fillable = [
        'nama',
        'jabatan',
        'email',
        'no_telp',
    ];

    /**
     * (Opsional) Atur default value jabatan jika belum diisi.
     */
    protected $attributes = [
        'jabatan' => 'Staff',
    ];
}
