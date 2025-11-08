<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->enum('jabatan', ['Manager', 'Staff', 'Resepsionis', 'Cleaning Service', 'Keamanan']);
            $table->string('email')->unique();
            $table->string('no_telp', 15);
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
