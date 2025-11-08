<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\User;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Menampilkan daftar reservasi
     */
    public function index()
    {
        $reservasi = Reservasi::with('user')->orderBy('tanggal_reservasi', 'desc')->get();
        return view('reservasi.index', compact('reservasi'));
    }

    /**
     * Menampilkan form tambah reservasi
     */
    public function create()
    {
        $users = User::all();
        return view('reservasi.create', compact('users'));
    }

    /**
     * Menyimpan reservasi baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'tanggal_reservasi' => 'required|date',
            'status' => 'required|in:pending,confirmed,cancelled',
            'keterangan' => 'nullable|string|max:255',
        ]);

        Reservasi::create($request->all());

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit reservasi
     */
    public function edit($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $users = User::all();
        return view('reservasi.edit', compact('reservasi', 'users'));
    }

    /**
     * Mengupdate reservasi
     */
    public function update(Request $request, $id)
    {
        $reservasi = Reservasi::findOrFail($id);

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'tanggal_reservasi' => 'required|date',
            'status' => 'required|in:pending,confirmed,cancelled',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $reservasi->update($request->all());

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil diperbarui.');
    }

    /**
     * Menghapus reservasi
     */
    public function destroy($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus.');
    }
}
