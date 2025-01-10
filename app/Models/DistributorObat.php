<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributorObat extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_distributor',
        'nama_distributor',
        'alamat_distributor',
        'latitude',
        'longitude',
        'telp_distributor',
    ];
}
