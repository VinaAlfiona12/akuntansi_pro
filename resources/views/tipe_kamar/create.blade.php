@extends('layouts.app')

@section('title', 'Tambah Tipe Kamar')

@section('content')
<div class="container">
    <br>
    <h4>Tambah Tipe Kamar</h4>

    {{-- Tampilkan pesan error validasi jika ada --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi Kesalahan!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tipe_kamar.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_tipe" class="form-label">Nama Tipe Kamar</label>
            <input type="text" class="form-control" id="nama_tipe" name="nama_tipe" value="{{ old('nama_tipe') }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="harga_per_malam" class="form-label">Harga per Malam (Rp)</label>
            <input type="number" step="0.01" class="form-control" id="harga_per_malam" name="harga_per_malam" value="{{ old('harga_per_malam') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('tipe_kamar.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection