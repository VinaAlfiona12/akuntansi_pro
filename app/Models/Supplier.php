<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table ="supplier"; 
    protected $primaryKey ="id";
    protected $fillable = ['nama_supplier', 'alamat', 'handphone',];

    public function journalDetails()
    {
        return $this->hasMany(JournalDetail::class);
    }

}
