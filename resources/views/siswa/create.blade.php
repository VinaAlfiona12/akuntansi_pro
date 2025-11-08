@extends('layouts.app')
<<<<<<< HEAD
@section('title', 'Tambah Siswa')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Tambah Siswa</h4>
=======
@section('title', 'Tambah Akun')

@section('content')
<div class="container">
    <div class="container">
    <br>
    <h4 class="mb-3">Tambah siswa</h4>
>>>>>>> 6cbd143958acfc6370c8aa2f0242aeff53ed8c82

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
<<<<<<< HEAD
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ old('nim') }}" required>
            @error('nim') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
            @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}" required>
            @error('no_hp') <small class="text-danger">{{ $message }}</small> @enderror
=======
            <label class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control" value="{{ old('nis') }}" required>
            @error('nis') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control" value="{{ old('nama_siswa') }}" required>
            @error('nama_siswa') <small class="text-danger">{{ $message }}</small> @enderror
>>>>>>> 6cbd143958acfc6370c8aa2f0242aeff53ed8c82
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
<<<<<<< HEAD
            <textarea name="alamat" class="form-control" rows="3" required>{{ old('alamat') }}</textarea>
            @error('alamat') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

=======
            <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
            @error('alamat') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
           <label class="form-label">Handphone</label>
            <input type="text" name="handphone" class="form-control" value="{{ old('handphone') }}" required>
            @error('handphone') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

>>>>>>> 6cbd143958acfc6370c8aa2f0242aeff53ed8c82
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
<<<<<<< HEAD
=======
</div>
>>>>>>> 6cbd143958acfc6370c8aa2f0242aeff53ed8c82
@endsection
