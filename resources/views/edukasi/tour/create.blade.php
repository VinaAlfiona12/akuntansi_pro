@extends('layouts.app')
@section('title', 'Tambah Tour')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Tambah Tour</h4>

    <form method="POST" action="{{ route('tour.store') }}">
        @csrf
        <div class="mb-3">
            <label>Nama Tour</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Berangkat</label>
            <input type="date" name="tanggal_berangkat" class="form-control">
        </div>
        <div class="mb-3">
            <label>Tujuan</label>
            <input type="text" name="tujuan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Durasi</label>
            <input type="text" name="durasi" class="form-control" placeholder="Contoh: 3 Hari 2 Malam">
        </div>
        <div class="mb-3">
            <label>Harga (Rp)</label>
            <input type="number" name="harga" class="form-control" step="0.01" placeholder="Contoh: 1500000">
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" placeholder="Deskripsi singkat tour..."></textarea>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('tour.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
