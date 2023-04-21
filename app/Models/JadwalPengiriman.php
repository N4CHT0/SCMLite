<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPengiriman extends Model
{
    use HasFactory;
    protected $table = 'jadwalpengiriman';
    protected $primarykey = "id";
    protected $fillable = [
        'id_rute',
        'id_pengiriman',
        'id_outlet',
        'id_kategori',
        'tanggal_pengiriman',
    ];

    public function Kategoribarang()
    {
        return $this->belongsTo(KategoriBarang::class, 'id_kategori');
    }

    public function RRute()
    {
        return $this->belongsTo(Rute::class, 'id_rute');
    }

    public function ROutlet()
    {
        return $this->belongsTo(Outlet::class, 'id_outlet');
    }
    public function RPengiriman()
    {
        return $this->belongsTo(Pengiriman::class, 'id_pengiriman');
    }
}
