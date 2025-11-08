<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = siswa::orderBy('nis')->get();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswa',
            'nama_siswa' => 'required',
            'alamat' => 'required',
            'handphone' => 'required'
        ]);

        siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    public function edit(string $id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, string $id)
    {
        $siswa = siswa::findOrFail($id);

        $request->validate([
            'nis' => 'required|unique:siswa' . $siswa->id,
            'nama_siswa' => 'required',
            'alamat' => 'required',
            'handphone' => 'required'
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Akun berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $siswa = siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Akun berhasil dihapus');
    }
}
