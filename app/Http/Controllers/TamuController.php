<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Menampilkan daftar tamu
     */
    public function index()
    {
        $tamu = Tamu::orderBy('nama_tamu')->get();
        return view('tamu.index', compact('tamu'));
    }

    /**
     * Menampilkan form tambah tamu
     */
    public function create()
    {
        return view('tamu.create');
    }

    /**
     * Menyimpan data tamu baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tamu' => 'required|string|max:100',
            'email' => 'nullable|email|unique:tamu,email',
            'no_telepon' => 'required|string|max:15',
            'alamat' => 'nullable|string|max:255',
        ]);

        Tamu::create($request->all());
        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit tamu
     */
    public function edit($id)
    {
        $tamu = Tamu::findOrFail($id);
        return view('tamu.edit', compact('tamu'));
    }

    /**
     * Mengupdate data tamu
     */
    public function update(Request $request, $id)
    {
        $tamu = Tamu::findOrFail($id);

        $request->validate([
            'nama_tamu' => 'required|string|max:100',
            'email' => 'nullable|email|unique:tamu,email,' . $tamu->id,
            'no_telepon' => 'required|string|max:15',
            'alamat' => 'nullable|string|max:255',
        ]);

        $tamu->update($request->all());
        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil diperbarui.');
    }

    /**
     * Menghapus data tamu
     */
    public function destroy($id)
    {
        $tamu = Tamu::findOrFail($id);
        $tamu->delete();

        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil dihapus.');
    }
}
