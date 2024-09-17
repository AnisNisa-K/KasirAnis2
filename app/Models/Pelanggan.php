<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    // Untuk kolom supaya bisa diisi
    protected $fillable = [
        'NamaPelanggan',
        'Alamat',
        'NomorTelepon',
    ];
    public function Pelanggan()
    {
        return $this->hasMany(Pelanggan::class, 'PelangganID', 'id');
    }
}
