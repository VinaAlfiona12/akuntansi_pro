<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JournalDetail;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa'; 
    
    // Using 'nim' (Student ID) as the primary key, typical for student models
    protected $primaryKey = 'nim'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 
    public $timestamps = false;

    protected $fillable = ['nim', 'nama', 'no_hp', 'alamat'];

    /**
     * Get the journal details associated with the student (Siswa).
     */
    public function journalDetails()
    {
        // Assuming JournalDetail uses the conventional foreign key (siswa_id) 
        // or the custom primary key ('nim') in its foreign key column.
        return $this->hasMany(JournalDetail::class);
    }
}