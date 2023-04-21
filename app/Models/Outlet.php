<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $table = 'outlet';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_outlet',
        'alamat_outlet',
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
