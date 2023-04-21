<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;
    protected $table = 'supir';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_supir',
        'nomor_telepon',
        'id_truk',
    ];

    public function RTruk()
    {
        return $this->belongsTo(Truk::class, 'id_truk');
    }

    public function RPengiriman()
    {
        return $this->hasMany(Pengiriman::class);
    }
}
