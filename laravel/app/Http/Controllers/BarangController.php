<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    function index() {
        $barang = Barang::all();

        return view('barang.index', compact('barang'));
    }
    function create() {
        return view('barang.create');
    }
    function store(Request $request) {

        // cek duplikasi nomor SKU
        $cek = Barang::where('id', $request->sku)->first();
        if($cek) return back()->with('error','Data barang dengan nomor SKU tersebut sudah terdaftar sebelumnya');
        Barang::create([
            'id' =>$request->sku,
            'nama' =>$request->nama,
            'harga' =>$request->harga,
            'stok' =>$request->stok,
        ]);

        return redirect('/barang/create')->with('success','Data stok barang berhasil ditambahkan');
    }
    function restok($sku) {
        
        $barang = Barang::where('id',$sku)->first();
        if(!$barang) return back()->with('error', 'Barang dengan nomor SKU tersebut tidak terdaftar');

        return view('barang.edit', compact('barang'));
    }
    function restok_update($sku, Request $request) {
        $barang = Barang::where('id',$sku)->first();
        // dd($barang->stok + (int)$request->stok);
        if(!$barang) return back()->with('error', 'Barang dengan nomor SKU tersebut tidak terdaftar');

        $stok_baru =  $barang->stok + (int)$request->stok;
        Barang::where('id',$sku)->update([
            'stok'=> $stok_baru
        ]);

        return back()->with('success','Data stok barang berhasil di update');
    }

    function api_barang($sku){
        
        $barang = Barang::where('id',$sku)->first();
        
        return response()->json($barang);

    }
}
