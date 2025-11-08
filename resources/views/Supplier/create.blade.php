@extends('layouts.app')
@section('title', 'Tambah Akun')

@section('content')
<div class="container">
    <div class="container">
    <br>
    <h4 class="mb-3">Tambah supplier</h4>

    <form action="{{ route('supplier.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" name="id" class="form-control" value="{{ old('id') }}" required>
            @error('id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Supplier</label>
            <input type="text" name="nama_supplier" class="form-control" value="{{ old('nama_supplier') }}" required>
            @error('nama_suppliier') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
            @error('alamat') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
           <label class="form-label">Handphone</label>
            <input type="text" name="handphone" class="form-control" value="{{ old('handphone') }}" required>
            @error('handphone') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
