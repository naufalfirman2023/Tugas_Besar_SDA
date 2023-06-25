<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Konsumen;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    
    function index() {
        $transaksi = Transaksi::all();
        $nmkonsum = Konsumen::all();
        return view('transaksi.index', compact('transaksi','nmkonsum'));
    }
    function create() {
        $barang = Barang::all();
        $konsumen = Konsumen::all();
        return view('transaksi.create', compact('konsumen','barang'));
    }
    function store(Request $request) {

        Transaksi::create([
            'konsumen_id' =>$request->konsumen,
            'barang_id' =>$request->barang,
            'jumlah' =>$request->jumlah,
            'harga' =>$request->harga,
        ]);
        $barang= Barang::where('id',$request->barang)->first();
        $barang->stok=  $barang->stok - $request->jumlah;
        $barang->save();

        return back()->with('success','Data stok transaksi berhasil ditambahkan');
    }


}
