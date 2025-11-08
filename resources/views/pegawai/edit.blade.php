@extends('layouts.app')

@section('title', 'Edit Pegawai')

@section('content')
<div class="container">
    <br>
    <h4>Edit Pegawai</h4>

    <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $pegawai->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select class="form-control" name="jabatan" required>
            <option value="Manager" {{ $pegawai->jabatan == 'Manager' ? 'selected' : '' }}>Manager</option>
            <option value="Staff" {{ $pegawai->jabatan == 'Staff' ? 'selected' : '' }}>Staff</option>
            <option value="Resepsionis" {{ $pegawai->jabatan == 'Resepsionis' ? 'selected' : '' }}>Resepsionis</option>
            <option value="Cleaning Service" {{ $pegawai->jabatan == 'Cleaning Service' ? 'selected' : '' }}>Cleaning Service</option>
            <option value="Keamanan" {{ $pegawai->jabatan == 'Keamanan' ? 'selected' : '' }}>Keamanan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $pegawai->email }}" required>
        </div>

        <div class="mb-3">
            <label for="no_telp" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" name="no_telp" value="{{ $pegawai->no_telp }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
