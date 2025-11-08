@extends('layouts.app')

@section('title', 'Daftar Kamar')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
<div class="container">
    <br>
    <h4>Daftar Kamar</h4>
    <a href="{{ route('kamar.create') }}" class="btn btn-primary mb-3">Tambah Kamar</a>

    <table class="table table-bordered table-sm" id="tabel-kamar">
        <thead class="table-light">
            <tr>
                <th style="text-align: center">#</th>
                <th>Nomor Kamar</th>
                <th>Tipe Kamar</th>
                <th>Harga per Malam</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kamar as $k)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $k->nomor_kamar }}</td>
                <td>{{ $k->tipe_kamar }}</td>
                <td>Rp {{ number_format($k->harga_per_malam, 0, ',', '.') }}</td>
                <td>
                    @if($k->status == 'tersedia')
                        <span class="badge bg-success">Tersedia</span>
                    @elseif($k->status == 'terisi')
                        <span class="badge bg-warning text-dark">Terisi</span>
                    @else
                        <span class="badge bg-secondary">Perawatan</span>
                    @endif
                </td>
                <td>{{ $k->keterangan ?? '-' }}</td>
                <td class="text-center">
                    <a href="{{ route('kamar.edit', $k->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('kamar.destroy', $k->id) }}" method="POST" 
                          style="display: inline-block;" 
                          onsubmit="return confirm('Yakin ingin menghapus kamar ini?')">
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
        $('#tabel-kamar').DataTable({
            columnDefs: [
                { orderable: false, targets: 6 } // kolom aksi tidak bisa diurutkan
            ]
        });
    });
</script>
@endpush
