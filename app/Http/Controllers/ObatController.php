<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use App\Models\DistributorObat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // index obat
        return view('obat.index', [
            'title' => 'Obat',
            'obats' => Obat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create', [
            'title' => 'Tambah Obat',
            'distributor_obats' => DistributorObat::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_obat' => 'required',
            'nama_obat' => 'required',
            'satuan_obat' => 'required',
            'harga_obat' => 'required',
            'stok_obat' => 'required',
            'distributor_obat_id' => 'required',
        ]);

        Obat::create($request->all());

        return redirect()->route('obats.index')->with('status', 'Data obat berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        // obat detail
        return view('obat.show', [
            'title' => 'Detail Obat',
            'obat' => $obat->load('obatTransaksiDetail')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
        // edit obat
        return view('obat.edit', [
            'title' => 'Edit Obat',
            'obat' => $obat,
            'distributor_obats' => DistributorObat::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
        $request->validate([
            'kode_obat' => 'required',
            'nama_obat' => 'required',
            'satuan_obat' => 'required',
            'harga_obat' => 'required',
            'stok_obat' => 'required',
            'distributor_obat_id' => 'required',
        ]);

        $obat->update($request->except('_token', '_method'));

        return redirect()->route('obats.index')->with('status', 'Data obat berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        $obat->delete();

        return redirect()->route('obats.index')->with('status', 'Data obat berhasil dihapus!');
    }
}
