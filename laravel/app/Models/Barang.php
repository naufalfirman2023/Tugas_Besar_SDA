<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'barangs';

    function transaksi() {
        return $this->hasOne(Transaksi::class,'barang_id');
    }
}
