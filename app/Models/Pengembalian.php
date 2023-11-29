<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal_kembali', 'jumlah_hari', 'biaya_sewa'];

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }
}
