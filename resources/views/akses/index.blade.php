@extends('layouts.app')

@section('title', 'Daftar Akses')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
<div class="container">
    <br>
    <h4>Daftar Akses</h4>
    <a href="{{ route('akses.create') }}" class="btn btn-primary mb-3">Tambah Akses</a>

    <table class="table table-bordered table-sm" id="tabel-akses">
        <thead class="table-light">
            <tr>
                <th style="text-align: center">#</th>
                <th>Nama Akses</th>
                <th>Keterangan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($akses as $a)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $a->nama_akses }}</td>
                <td>{{ $a->keterangan ?? '-' }}</td>
                <td class="text-center">
                    <a href="{{ route('akses.edit', $a->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('akses.destroy', $a->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin ingin menghapus data akses ini?')">
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
        $('#tabel-akses').DataTable({
            columnDefs: [
                { orderable: false, targets: 3 } // kolom aksi tidak bisa diurutkan
            ]
        });
    });
</script>
@endpush
