@extends('layouts.app')
@section('title', 'Tour')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Data Tour</h4>

    <a href="{{ route('tour.create') }}" class="btn btn-primary mb-3">+ Tambah Tour</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama Tour</th>
                <th>Tanggal Berangkat</th>
                <th>Tujuan</th>
                <th>Durasi</th>
                <th>Harga (Rp)</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tours as $tour)
                <tr>
                    <td>{{ $tour->nama }}</td>
                    <td>{{ $tour->tanggal_berangkat }}</td>
                    <td>{{ $tour->tujuan }}</td>
                    <td>{{ $tour->durasi }}</td>
                    <td>{{ number_format($tour->harga, 0, ',', '.') }}</td>
                    <td>{{ $tour->keterangan }}</td>
                    <td>
                        <a href="{{ route('tour.edit', $tour->tour_id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('tour.destroy', $tour->tour_id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">Belum ada data tour</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
