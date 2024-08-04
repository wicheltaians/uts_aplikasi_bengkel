<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_pol' => 'required|string|max:10|unique:kendaraan,no_pol',
            'no_mesin' => 'required|string|max:15',
            'merek' => 'required|in:Honda,Yamaha,Suzuki,Kawasaki,Lain',
            'warna' => 'required|in:Putih,Hitam,Hijau,Biru,Merah,Lain',
        ]);

        Kendaraan::create($validated);

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan created successfully.');
    }

    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        $validated = $request->validate([
            'no_pol' => 'required|string|max:10|unique:kendaraan,no_pol,' . $kendaraan->id,
            'no_mesin' => 'required|string|max:15',
            'merek' => 'required|in:Honda,Yamaha,Suzuki,Kawasaki,Lain',
            'warna' => 'required|in:Putih,Hitam,Hijau,Biru,Merah,Lain',
        ]);

        $kendaraan->update($validated);

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan updated successfully');
    }


    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan deleted successfully');
    }
}
