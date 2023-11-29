<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = ['merek', 'model', 'nomor_plat', 'tarif_sewa'];
}
