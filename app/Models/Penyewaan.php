<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_penyewaan',
        'lama_sewa',
        'biaya_charge',
        'tenggat_pembayaran',
        'denda',
    ];
}
