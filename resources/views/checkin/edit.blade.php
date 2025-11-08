@extends('layouts.app')
@section('title', 'Edit Checkin')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Edit Checkin</h4>

    <form action="{{ route('checkin.update', $checkin->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Tamu</label>
            <input type="text" name="nama_tamu" class="form-control" 
                value="{{ old('nama_tamu', $checkin->nama_tamu) }}" required>
            @error('nama_tamu') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Kamar</label>
            <input type="text" name="kamar" class="form-control" 
                value="{{ old('kamar', $checkin->kamar) }}" required>
            @error('kamar') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Check-in</label>
            <input type="date" name="tanggal_checkin" class="form-control" 
                value="{{ old('tanggal_checkin', $checkin->tanggal_checkin) }}" required>
            @error('tanggal_checkin') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan (opsional)</label>
            <textarea name="keterangan" class="form-control" rows="3">{{ old('keterangan', $checkin->keterangan) }}</textarea>
            @error('keterangan') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('checkin.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
