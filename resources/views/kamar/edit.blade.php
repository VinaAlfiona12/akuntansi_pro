@extends('layouts.app')
@section('title', 'Edit Kamar')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Edit Kamar</h4>

    <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nomor Kamar</label>
            <input type="text" name="nomor_kamar" class="form-control"
                value="{{ old('nomor_kamar', $kamar->nomor_kamar) }}" required>
            @error('nomor_kamar') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tipe Kamar</label>
            <input type="text" name="tipe_kamar" class="form-control"
                value="{{ old('tipe_kamar', $kamar->tipe_kamar) }}" required>
            @error('tipe_kamar') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Harga per Malam</label>
            <input type="number" name="harga_per_malam" class="form-control"
                step="0.01" value="{{ old('harga_per_malam', $kamar->harga_per_malam) }}" required>
            @error('harga_per_malam') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
           <select name="status" class="form-select" required>
    <option value="tersedia" {{ old('status', $kamar->status ?? '') == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
    <option value="terisi" {{ old('status', $kamar->status ?? '') == 'terisi' ? 'selected' : '' }}>Terisi</option>
    <option value="perawatan" {{ old('status', $kamar->status ?? '') == 'perawatan' ? 'selected' : '' }}>Perawatan</option>
</select>


            @error('status') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3">{{ old('keterangan', $kamar->keterangan) }}</textarea>
            @error('keterangan') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
