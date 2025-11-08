@extends('layouts.app')

@section('title', 'Daftar Tipe Kamar')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
<div class="container">
    <br>
    <h4>Daftar Tipe Kamar</h4>

    <a href="{{ route('tipe_kamar.create') }}" class="btn btn-primary mb-3">+ Tambah Tipe Kamar</a>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tabel daftar tipe kamar --}}
    <table class="table table-bordered table-sm" id="tabel-tipe-kamar">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Tipe Kamar</th>
                <th>Deskripsi</th>
                <th>Harga per Malam</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tipeKamar as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama_tipe }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>Rp {{ number_format($item->harga_per_malam, 0, ',', '.') }}</td>
                <td class="text-center">
                    <a href="{{ route('tipe_kamar.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('tipe_kamar.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus tipe kamar ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data tipe kamar.</td>
            </tr>
            @endforelse
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
        $('#tabel-tipe-kamar').DataTable({
            columnDefs: [
                { orderable: false, targets: 4 }
            ]
        });
    });
</script>
@endpush