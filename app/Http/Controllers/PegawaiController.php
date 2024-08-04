<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pegawai' => 'required|string|max:150',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:L,P',
            'jabatan' => 'required|in:teknisi,admin,spv',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);

        Pegawai::create($validated);

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai created successfully.');
    }

    public function show(Pegawai $pegawai)
    {
        return view('pegawai.show', compact('pegawai'));
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $validated = $request->validate([
            'nama_pegawai' => 'required|string|max:150',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:L,P',
            'jabatan' => 'required|in:teknisi,admin,spv',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);

        $pegawai->update($validated);

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai updated successfully');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai deleted successfully');
    }
}
