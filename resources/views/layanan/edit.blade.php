@extends('layouts.app')
@section('title', 'Edit Layanan')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Edit Layanan</h4>

    <form action="{{ route('layanan.update', $layanan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Layanan</label>
            <input type="text" name="nama_layanan" class="form-control" 
                value="{{ old('nama_layanan', $layanan->nama_layanan) }}" required>
            @error('nama_layanan') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3">{{ old('keterangan', $layanan->keterangan) }}</textarea>
            @error('keterangan') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('layanan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
