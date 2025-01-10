<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_obat',
        'nama_obat',
        'satuan_obat',
        'harga_obat',
        'stok_obat',
        'distributor_obat_id',
    ];

    public function distributor_obat()
    {
        return $this->belongsTo(DistributorObat::class);
    }

    public function obatTransaksiDetail()
    {
        return $this->hasMany(ObatTransaksiDetail::class);
    }
}
