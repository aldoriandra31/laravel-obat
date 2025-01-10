<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatTransaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_transaksi',
        'tanggal_transaksi',
        'total_harga',
    ];

    // obatTransaksiDetail
    public function obatTransaksiDetail()
    {
        return $this->belongsToMany(Obat::class, 'obat_transaksi_details', 'obat_transaksi_id', 'obat_id');
    }

    public function transaksiDetail()
    {
        return $this->hasMany(obatTransaksiDetail::class);
    }
}
