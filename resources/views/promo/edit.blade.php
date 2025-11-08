@extends('layouts.app')
@section('title', 'Edit Promo')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Edit Promo</h4>

    <form action="{{ route('promo.update', $promo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Promo</label>
            <input type="text" name="nama_promo" class="form-control" 
                value="{{ old('nama_promo', $promo->nama_promo) }}" required>
            @error('nama_promo') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Diskon</label>
            <input type="number" name="diskon" class="form-control" 
                value="{{ old('diskon', $promo->diskon) }}" step="0.01" required>
            @error('diskon') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan (opsional)</label>
            <textarea name="keterangan" class="form-control" rows="3">{{ old('keterangan', $promo->keterangan) }}</textarea>
            @error('keterangan') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('promo.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
