<?php

namespace App\Http\Controllers\Api;

use App\Models\Obat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ObatResource;

class ObatController extends Controller
{
    // stock obat
    public function stock(Obat $obat)
    {
        // dd($obat);
        //return collection of posts as a resource
        return new ObatResource(true, 'List Stock Obat', $obat->stok_obat);
        // return response()->json($obats);
    }
}
