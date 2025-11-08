@extends('layouts.app')

@section('title', 'Daftar Servis')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
<div class="container">
    <br>
    <h4>Daftar Servis</h4>
    <a href="{{ route('servis.create') }}" class="btn btn-primary mb-3">Tambah Servis</a>

    <table class="table table-bordered table-sm" id="tabel-servis">
        <thead class="table-light">
            <tr>
                <th style="text-align: center">#</th>
                <th>Nama Servis</th>
                <th>Keterangan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servis as $s)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $s->nama_servis }}</td>
                <td>{{ $s->keterangan ?? '-' }}</td>
                <td class="text-center">
                    <a href="{{ route('servis.edit', $s->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('servis.destroy', $s->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin ingin menghapus servis ini?')">
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
        $('#tabel-servis').DataTable({
            columnDefs: [
                { orderable: false, targets: 3 } // kolom aksi tidak bisa diurutkan
            ]
        });
    });
</script>
@endpush
