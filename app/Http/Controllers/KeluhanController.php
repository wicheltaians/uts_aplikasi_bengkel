<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\Customer;
use App\Models\Kendaraan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index()
    {
        $keluhans = Keluhan::all();
        return view('keluhan.index', compact('keluhans'));
    }

    public function create()
    {
        $customers = Customer::all();
        $kendaraans = Kendaraan::all();
        $pegawais = Pegawai::all();
        return view('keluhan.create', compact('customers', 'kendaraans', 'pegawais'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_keluhan' => 'required|string',
            'ongkos' => 'required|integer',
            'no_pol' => 'required|string|max:10',
            'customer_id' => 'required|integer',
            'id_pegawai' => 'required|integer',
        ]);

        Keluhan::create($validated);

        return redirect()->route('keluhan.index')
            ->with('success', 'Keluhan created successfully.');
    }

    public function show(Keluhan $keluhan)
    {
        return view('keluhan.show', compact('keluhan'));
    }

    public function edit(Keluhan $keluhan)
    {
        $customers = Customer::all();
        $kendaraans = Kendaraan::all();
        $pegawais = Pegawai::all();
        return view('keluhan.edit', compact('keluhan', 'customers', 'kendaraans', 'pegawais'));
    }

    public function update(Request $request, Keluhan $keluhan)
    {
        $validated = $request->validate([
            'nama_keluhan' => 'required|string',
            'ongkos' => 'required|integer',
            'no_pol' => 'required|string|max:10',
            'customer_id' => 'required|integer',
            'id_pegawai' => 'required|integer',
        ]);

        $keluhan->update($validated);

        return redirect()->route('keluhan.index')
            ->with('success', 'Keluhan updated successfully');
    }

    public function destroy(Keluhan $keluhan)
    {
        $keluhan->delete();

        return redirect()->route('keluhan.index')
            ->with('success', 'Keluhan deleted successfully');
    }
}
