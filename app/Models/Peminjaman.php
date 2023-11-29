<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'tanggal_mulai',
        'tanggal_selesai',
        'mobil_id',
        'user_id',
        'tanggal_pengembalian',
        'biaya_sewa',
    ];

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'mobil_id', 'id');
    }
}
