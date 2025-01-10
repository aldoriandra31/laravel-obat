<?php

namespace App\Http\Controllers;

use App;
use App\Models\Obat;
use Illuminate\Http\Request;
use App\Models\ObatTransaksi;
use Illuminate\Support\Facades\DB;
use App\Models\ObatTransaksiDetail;

class ObatTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // indextransaski
        return view('penjualan.index', [
            'title' => 'Penjualan',
            'penjualans' => ObatTransaksi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualan.create', [
            'title' => 'Tambah Penjualan',
            'obats' => Obat::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'obats' => 'required',
            'jumlah' => 'required',
        ]);

        try {
            DB::transaction(function () use ($request) {
                $obatTransaksi = ObatTransaksi::create([
                    'kode_transaksi' => str()->random(),
                    'tanggal_transaksi' => date("Y-m-d"),
                    'total_harga' => 0
                ]);
                $totalHarga = 0;
                foreach ($request->obats as $index => $obat) {
                    $obatModel = Obat::find($obat);
                    // $obatTransaksi->total_harga += $obat['jumlah'] * $obat['harga'];
                    $obatTransaksi->obatTransaksiDetail()->attach($obatModel->id, [
                        'jumlah' => $request->jumlah[$index],
                        'harga' => $obatModel->harga_obat,
                        'subtotal' => $request->jumlah[$index] * $obatModel->harga_obat
                    ]);
                    $obatModel->stok_obat = $obatModel->stok_obat - $request->jumlah[$index];
                    $obatModel->save();

                    $totalHarga += $request->jumlah[$index] * $obatModel->harga_obat;
                }
                $obatTransaksi->total_harga = $totalHarga;
                $obatTransaksi->save();
            });
            return redirect()->back()->with('success', 'Penjualan berhasil disimpan');
        } catch (\Exception $e) {
            // dd($e);
            return redirect()->back()->with('error', 'Kesalahan diserver');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ObatTransaksi $penjualan)
    {
        // $obatTransaksiDetail = ObatTransaksiDetail::where('obat_transaksi_id', $id);
        // $obatTransaksiDetail->delete();

        // $obatTransaksi = Obat::find($id);
        $penjualan->delete();
        return redirect()->back()->with('success', 'Data penjualan berhasil dihapus');
    }

    public function cetak(ObatTransaksi $penjualan)
    {
        $pdf = app('dompdf.wrapper');
        $pdf->loadview('penjualan.cetak', ['penjualan' => $penjualan->load('obatTransaksiDetail')]);
        return $pdf->download('laporan-penjualan-pdf');
        // $pdf = PDF::loadview('penjualan.cetak', ['penjualan' => $penjualan->load('obatTransaksiDetail')]);
        // return $pdf->download('laporan-penjualan-pdf');
        // return view('penjualan.cetak', ['penjualan' => $penjualan->load('obatTransaksiDetail')]);
        // cetak pdf

    }
}
