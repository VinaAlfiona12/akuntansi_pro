@extends('layouts.app')

@section('title', 'Tambah Pegawai')

@section('content')
<div class="container">
    <br>
    <h4>Tambah Pegawai</h4>

    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select class="form-control" name="jabatan" required>
                <option value="">-- Pilih Jabatan --</option>
                <option value="Manager">Manager</option>
                <option value="Staff">Staff</option>
                <option value="Resepsionis">Resepsionis</option>
                <option value="Cleaning Service">Cleaning Service</option>
                <option value="Keamanan">Keamanan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label for="no_telp" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" name="no_telp" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
