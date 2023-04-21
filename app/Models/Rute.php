<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;
    protected $table = 'rute';
    protected $primarykey = "id";
    protected $fillable = [
        'kota_asal',
        'kota_tujuan',
        'jarak_rute',
    ];

    public function RPengiriman()
    {
        return $this->hasMany(Pengiriman::class);
    }

    public function Jadwalpengiriman()
    {
        return $this->hasMany(JadwalPengiriman::class);
    }
}
