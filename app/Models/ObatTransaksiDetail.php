<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatTransaksiDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'obat_transaksi_id',
        'obat_id',
        'jumlah',
        'harga',
    ];

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
