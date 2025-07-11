@extends('layouts.app')
@section('title', 'Edit Akun')

@section('content')
<div class="container">
    <div class="container">
    <br>
    <h4 class="mb-3">Tambah Supplier</h4>

    <form action="{{ route('supplier.store') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" name="nis" class="form-control" value="{{ old('id') }}" required>
            @error('no') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Supplier</label>
            <input type="text" name="nama_supplier" class="form-control" value="{{ old('nama_supplier') }}" required>
            @error('nama_supplier') <small class="text-danger">{{ $message }}</small> @enderror
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

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
