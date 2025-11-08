<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    /**
     * Menampilkan daftar check-in
     */
    public function index()
    {
        $checkins = Checkin::orderBy('tanggal_checkin', 'desc')->get();
        return view('checkin.index', compact('checkins'));
    }

    /**
     * Menampilkan form tambah check-in
     */
    public function create()
    {
        return view('checkin.create');
    }

    /**
     * Menyimpan check-in baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tamu' => 'required|string|max:100',
            'kamar' => 'required|string|max:50',
            'tanggal_checkin' => 'required|date',
            'keterangan' => 'nullable|string|max:255',
        ]);

        Checkin::create($request->all());
        return redirect()->route('checkin.index')->with('success', 'Check-in berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit check-in
     */
    public function edit($id)
    {
        $checkin = Checkin::findOrFail($id);
        return view('checkin.edit', compact('checkin'));
    }

    /**
     * Mengupdate data check-in
     */
    public function update(Request $request, $id)
    {
        $checkin = Checkin::findOrFail($id);

        $request->validate([
            'nama_tamu' => 'required|string|max:100',
            'kamar' => 'required|string|max:50',
            'tanggal_checkin' => 'required|date',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $checkin->update($request->all());
        return redirect()->route('checkin.index')->with('success', 'Check-in berhasil diperbarui.');
    }

    /**
     * Menghapus data check-in
     */
    public function destroy($id)
    {
        $checkin = Checkin::findOrFail($id);
        $checkin->delete();

        return redirect()->route('checkin.index')->with('success', 'Check-in berhasil dihapus.');
    }
}
