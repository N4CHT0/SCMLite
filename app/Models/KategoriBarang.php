<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    use HasFactory;
    protected $table = 'kategoribarang';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_kategori_barang',
        'deskripsi',
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    public function Stokbarang()
    {
        return $this->hasMany(StokBarang::class);
    }

    public function Jadwalpengiriman()
    {
        return $this->hasMany(JadwalPengiriman::class);
    }
}
