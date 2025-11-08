@extends('layouts.app')
@section('title', 'Edit Servis')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Edit Servis</h4>

    <form action="{{ route('servis.update', $servis->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Servis</label>
            <input type="text" name="nama_servis" class="form-control" 
                value="{{ old('nama_servis', $servis->nama_servis) }}" required>
            @error('nama_servis') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3">{{ old('keterangan', $servis->keterangan) }}</textarea>
            @error('keterangan') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('servis.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
