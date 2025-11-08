@extends('layouts.app')
@section('title', 'Tambah Checkin')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Tambah Checkin</h4>

    <form action="{{ route('checkin.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Tamu</label>
            <input type="text" name="nama_tamu" class="form-control" value="{{ old('nama_tamu') }}" required>
            @error('nama_tamu') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Kamar</label>
            <input type="text" name="kamar" class="form-control" value="{{ old('kamar') }}" required>
            @error('kamar') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Check-in</label>
            <input type="date" name="tanggal_checkin" class="form-control" value="{{ old('tanggal_checkin') }}" required>
            @error('tanggal_checkin') 
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
        <a href="{{ route('checkin.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
