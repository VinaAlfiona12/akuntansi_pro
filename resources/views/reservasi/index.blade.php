@extends('layouts.app')

@section('title', 'Daftar Reservasi')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
<div class="container">
    <br>
    <h4>Daftar Reservasi</h4>
    <a href="{{ route('reservasi.create') }}" class="btn btn-primary mb-3">Tambah Reservasi</a>

    <table class="table table-bordered table-sm" id="tabel-reservasi">
        <thead class="table-light">
            <tr>
                <th style="text-align: center">#</th>
                <th>User</th>
                <th>Tanggal Reservasi</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservasi as $r)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $r->user->name ?? '-' }}</td>
                <td>{{ $r->tanggal_reservasi }}</td>
                <td>{{ ucfirst($r->status) }}</td>
                <td>{{ $r->keterangan ?? '-' }}</td>
                <td class="text-center">
                    <a href="{{ route('reservasi.edit', $r->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('reservasi.destroy', $r->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin ingin menghapus reservasi ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#tabel-reservasi').DataTable({
            columnDefs: [
                { orderable: false, targets: 5 } // kolom aksi tidak bisa diurutkan
            ]
        });
    });
</script>
@endpush
