@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Pengguna</h1>

    <form action="{{ route('pengguna.update', $pengguna->pengguna_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" value="{{ $pengguna->nama }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $pengguna->email }}" required>
        </div>

        <div class="mb-3">
            <label>No. HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $pengguna->no_hp }}">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="3">{{ $pengguna->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="tamu" {{ $pengguna->role == 'tamu' ? 'selected' : '' }}>Tamu</option>
                <option value="admin" {{ $pengguna->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="staf" {{ $pengguna->role == 'staf' ? 'selected' : '' }}>Staf</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Password (kosongkan jika tidak ingin diubah)</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password baru">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
