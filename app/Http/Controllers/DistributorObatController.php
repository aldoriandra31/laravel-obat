<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DistributorObat;

class DistributorObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // distributor obat
        return view('distributor.index', [
            'distributor_obats' => DistributorObat::all(),
            'title' => 'Distributor Obat',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('distributor.create', [
            'title' => 'Tambah Distributor Obat',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_distributor' => 'required',
            'nama_distributor' => 'required',
            'alamat_distributor' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'telp_distributor' => 'required',
        ]);

        DistributorObat::create($request->all());

        return redirect()->route('distributor-obats.index')->with('status', 'Data distributor obat berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DistributorObat $distributorObat)
    {

        // distributor
        return view('distributor.show', [
            'title' => 'Detail Distributor Obat',
            'distributor_obat' => $distributorObat,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DistributorObat $distributorObat)
    {
        return view('distributor.edit', [
            'title' => 'Edit Distributor Obat',
            'distributor_obat' => $distributorObat,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DistributorObat $distributorObat)
    {
        $request->validate([
            'kode_distributor' => 'required',
            'nama_distributor' => 'required',
            'alamat_distributor' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'telp_distributor' => 'required',
        ]);

        $distributorObat->update($request->all());

        return redirect()->route('distributor-obats.index')->with('status', 'Data distributor obat berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DistributorObat $distributorObat)
    {
        $distributorObat->delete();

        return redirect()->route('distributor-obats.index')->with('status', 'Data distributor obat berhasil dihapus!');
    }
}
