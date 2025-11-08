@extends('layouts.app')
@section('title', 'Edit Tour')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Edit Tour</h4>

    <form method="POST" action="{{ route('tour.update', $tour->tour_id) }}">
        @csrf 
        @method('PUT')

        <div class="mb-3">
            <label>Nama Tour</label>
            <input type="text" name="nama" value="{{ $tour->nama }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Berangkat</label>
            <input type="date" name="tanggal_berangkat" value="{{ $tour->tanggal_berangkat }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Tujuan</label>
            <input type="text" name="tujuan" value="{{ $tour->tujuan }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Durasi</label>
            <input type="text" name="durasi" value="{{ $tour->durasi }}" class="form-control" placeholder="Contoh: 3 Hari 2 Malam">
        </div>

        <div class="mb-3">
            <label>Harga (Rp)</label>
            <input type="number" name="harga" value="{{ $tour->harga }}" class="form-control" step="0.01">
        </div>

        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $tour->keterangan }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('tour.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
