@extends('layouts.app')
@section('title', 'Edit Checkout')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Edit Checkout</h4>

    <form action="{{ route('checkout.update', $checkout->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Tamu</label>
            <input type="text" name="nama_tamu" class="form-control" 
                value="{{ old('nama_tamu', $checkout->nama_tamu) }}" required>
            @error('nama_tamu') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Kamar</label>
            <input type="text" name="kamar" class="form-control" 
                value="{{ old('kamar', $checkout->kamar) }}" required>
            @error('kamar') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Checkout</label>
            <input type="date" name="tanggal_checkout" class="form-control" 
                value="{{ old('tanggal_checkout', $checkout->tanggal_checkout) }}" required>
            @error('tanggal_checkout') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan (opsional)</label>
            <textarea name="keterangan" class="form-control" rows="3">{{ old('keterangan', $checkout->keterangan) }}</textarea>
            @error('keterangan') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('checkout.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
