<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBarang extends Model
{
    use HasFactory;
    protected $table = 'stokbarang';
    protected $primarykey = "id";
    protected $fillable = [
        'id_barang',
        'id_kategori_barang',
        'jumlah_stok',
    ];

    public function Kategoribarang()
    {
        return $this->belongsTo(KategoriBarang::class, 'id_kategori_barang');
    }

    public function RBarang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
