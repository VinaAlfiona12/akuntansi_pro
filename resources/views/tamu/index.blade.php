@extends('layouts.app')

@section('title', 'Daftar Tamu')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
<div class="container">
    <br>
    <h4>Daftar Tamu</h4>
    <a href="{{ route('tamu.create') }}" class="btn btn-primary mb-3">Tambah Tamu</a>

    <table class="table table-bordered table-sm" id="tabel-tamu">
        <thead class="table-light">
            <tr>
                <th style="text-align: center">#</th>
                <th>Nama Tamu</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tamu as $t)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $t->nama_tamu }}</td>
                <td>{{ $t->email }}</td>
                <td>{{ $t->no_telepon }}</td>
                <td>{{ $t->alamat }}</td>
                <td class="text-center">
                    <a href="{{ route('tamu.edit', $t->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('tamu.destroy', $t->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin ingin menghapus tamu ini?')">
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
        $('#tabel-tamu').DataTable({
            columnDefs: [
                { orderable: false, targets: 5 } // Non-sortable kolom Aksi
            ]
        });
    });
</script>
@endpush
