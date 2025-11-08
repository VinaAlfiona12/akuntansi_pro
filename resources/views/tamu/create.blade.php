@extends('layouts.app')
@section('title', 'Tambah Tamu')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Tambah Tamu</h4>

    <form action="{{ route('tamu.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Tamu</label>
            <input type="text" name="nama_tamu" class="form-control" value="{{ old('nama_tamu') }}" required>
            @error('nama_tamu') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            @error('email') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nomor Telepon</label>
            <input type="text" name="no_telepon" class="form-control" value="{{ old('no_telepon') }}" required>
            @error('no_telepon') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3">{{ old('alamat') }}</textarea>
            @error('alamat') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('tamu.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
