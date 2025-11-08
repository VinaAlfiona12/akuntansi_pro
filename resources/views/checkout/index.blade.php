@extends('layouts.app')

@section('title', 'Daftar Checkout')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
<div class="container">
    <br>
    <h4>Daftar Checkout</h4>
    <a href="{{ route('checkout.create') }}" class="btn btn-primary mb-3">Tambah Checkout</a>

    <table class="table table-bordered table-sm" id="tabel-checkout">
        <thead class="table-light">
            <tr>
                <th style="text-align: center">#</th>
                <th>Nama Tamu</th>
                <th>Kamar</th>
                <th>Tanggal Checkout</th>
                <th>Keterangan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($checkouts as $c)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $c->nama_tamu }}</td>
                <td>{{ $c->kamar }}</td>
                <td>{{ $c->tanggal_checkout }}</td>
                <td>{{ $c->keterangan ?? '-' }}</td>
                <td class="text-center">
                    <a href="{{ route('checkout.edit', $c->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('checkout.destroy', $c->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin ingin menghapus checkout ini?')">
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
        $('#tabel-checkout').DataTable({
            columnDefs: [
                { orderable: false, targets: 5 } // kolom aksi tidak bisa diurutkan
            ]
        });
    });
</script>
@endpush
