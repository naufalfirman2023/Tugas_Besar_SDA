<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'transaksis';

    function barang() {
        return $this->belongsTo(Barang::class);
    }
    function konsumen() {
        return $this->belongsTo(Konsumen::class);
    }
}
