<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;
    protected $table = 'konsumens';
    function transaksi() {
        return $this->hasOne(Transaksi::class,'konsumen_id');
    }
}
