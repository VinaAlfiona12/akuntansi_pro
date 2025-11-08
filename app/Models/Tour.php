<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';
    protected $primaryKey = 'tour_id';

    protected $fillable = [
        'nama',
        'tanggal_berangkat',
        'tujuan',
        'durasi',
        'harga',
        'keterangan',
    ];
}
