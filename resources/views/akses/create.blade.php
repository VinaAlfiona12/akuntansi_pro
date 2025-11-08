@extends('layouts.app')
@section('title', 'Tambah Akses')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Tambah Akses</h4>

    <form action="{{ route('akses.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Akses</label>
            <input type="text" name="nama_akses" class="form-control" value="{{ old('nama_akses') }}" required>
            @error('nama_akses') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3" placeholder="Tuliskan keterangan jika ada...">{{ old('keterangan') }}</textarea>
            @error('keterangan') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('akses.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
