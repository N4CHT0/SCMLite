<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truk extends Model
{
    use HasFactory;
    protected $table = 'truk';
    protected $primarykey = "id";
    protected $fillable = [
        'nomor_polisi',
        'kapasitas',
    ];

    public function RSupir()
    {
        return $this->hasMany(Supir::class);
    }

    public function RPengiriman()
    {
        return $this->hasMany(Pengiriman::class);
    }
}
