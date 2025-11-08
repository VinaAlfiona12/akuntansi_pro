@extends('layouts.app')
@section('title', 'Tambah Promo')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Tambah Promo</h4>

    <form action="{{ route('promo.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Promo</label>
            <input type="text" name="nama_promo" class="form-control" value="{{ old('nama_promo') }}" required>
            @error('nama_promo') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Diskon</label>
            <input type="number" name="diskon" class="form-control" value="{{ old('diskon') }}" step="0.01" required>
            @error('diskon') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan (opsional)</label>
            <textarea name="keterangan" class="form-control" rows="3" placeholder="Tuliskan keterangan jika ada...">{{ old('keterangan') }}</textarea>
            @error('keterangan') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('promo.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
