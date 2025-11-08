<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('edukasi.Tour.index', compact('tours'));
    }

    public function create()
    {
        return view('edukasi.Tour.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_berangkat' => 'nullable|date',
            'tujuan' => 'required|string|max:255',
            'durasi' => 'nullable|string|max:50',
            'harga' => 'nullable|numeric',
            'keterangan' => 'nullable|string',
        ]);

        Tour::create($request->all());
        return redirect()->route('tour.index')->with('success', 'Data tour berhasil ditambahkan.');
    }

    public function edit(Tour $tour)
    {
        return view('edukasi.Tour.edit', compact('tour'));
    }

    public function update(Request $request, Tour $tour)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_berangkat' => 'nullable|date',
            'tujuan' => 'required|string|max:255',
            'durasi' => 'nullable|string|max:50',
            'harga' => 'nullable|numeric',
            'keterangan' => 'nullable|string',
        ]);

        $tour->update($request->all());
        return redirect()->route('tour.index')->with('success', 'Data tour berhasil diperbarui.');
    }

    public function destroy(Tour $tour)
    {
        $tour->delete();
        return redirect()->route('tour.index')->with('success', 'Data tour berhasil dihapus.');
    }
}
