<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    // supaya bisa ditambah
    protected $fillable = [
        'TanggalPenjualan',
        'TotalHarga',
        'PelangganID'
    ];
    public function Pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'PelangganID', 'id');
    }
}
