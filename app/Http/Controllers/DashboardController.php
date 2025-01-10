<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'title' => 'Dashboard',
            // obat dan total penjualan
            'obats' => Obat::withCount('obatTransaksiDetail')->get()
        ]);
    }
}
