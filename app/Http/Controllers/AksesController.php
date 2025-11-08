<?php

namespace App\Http\Controllers;

use App\Models\Akses;
use Illuminate\Http\Request;

class AksesController extends Controller
{
    /**
     * Menampilkan daftar data akses
     */
    public function index()
    {
        $akses = Akses::orderBy('nama_akses')->get();
        return view('akses.index', compact('akses'));
    }

    /**
     * Menampilkan form tambah data akses
     */
    public function create()
    {
        return view('akses.create');
    }

    /**
     * Menyimpan data akses baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_akses' => 'required|string|max:100',
            'keterangan' => 'nullable|string|max:255',
        ]);

        Akses::create($request->all());
        return redirect()->route('akses.index')->with('success', 'Data akses berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit data akses
     */
    public function edit($id)
    {
        $akses = Akses::findOrFail($id);
        return view('akses.edit', compact('akses'));
    }

    /**
     * Mengupdate data akses
     */
    public function update(Request $request, $id)
    {
        $akses = Akses::findOrFail($id);

        $request->validate([
            'nama_akses' => 'required|string|max:100',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $akses->update($request->all());
        return redirect()->route('akses.index')->with('success', 'Data akses berhasil diperbarui.');
    }

    /**
     * Menghapus data akses
     */
    public function destroy($id)
    {
        $akses = Akses::findOrFail($id);
        $akses->delete();

        return redirect()->route('akses.index')->with('success', 'Data akses berhasil dihapus.');
    }
}
