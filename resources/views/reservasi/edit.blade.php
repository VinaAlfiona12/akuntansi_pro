@extends('layouts.app')
@section('title', 'Edit Reservasi')

@section('content')
<div class="container">
    <br>
    <h4 class="mb-3">Edit Reservasi</h4>

    <form action="{{ route('reservasi.update', $reservasi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">User</label>
            <select name="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" 
                        {{ old('user_id', $reservasi->user_id) == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            @error('user_id') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Reservasi</label>
            <input type="date" name="tanggal_reservasi" class="form-control" 
                value="{{ old('tanggal_reservasi', $reservasi->tanggal_reservasi) }}" required>
            @error('tanggal_reservasi') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control" required>
                @foreach(['pending','confirmed','cancelled'] as $status)
                    <option value="{{ $status }}" {{ old('status', $reservasi->status) == $status ? 'selected' : '' }}>
                        {{ ucfirst($status) }}
                    </option>
                @endforeach
            </select>
            @error('status') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3">{{ old('keterangan', $reservasi->keterangan) }}</textarea>
            @error('keterangan') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('reservasi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
