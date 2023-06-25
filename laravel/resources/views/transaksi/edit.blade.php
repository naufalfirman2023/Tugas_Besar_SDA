<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="`">
    <title>barang edit</title>
</head>
<body>  
    <h1>form edit barang</h1>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form action="/barang/{{ $barang->sku }}/restok/update" method="POST">
    @csrf
    {{-- <input type="number" placeholder="sku" required value="{{ $barang->sku }}" name="sku"><br>
    <input type="text" placeholder="nama" required value="{{ $barang->nama }}" name="nama"><br>
    <input type="number" placeholder="harga" required value="{{ $barang->harga }}" name="harga"><br> --}} 
    <p>nomor sku : {{ $barang->sku }}</p>
    <p>nama barang : {{ $barang->nama }}</p>
    <p>harga barang : {{ $barang->harga }}</p>
    <p>stok barang saat ini adalah : {{ $barang->stok }}</p>
    <input type="number" placeholder="stok tambahan" required name="stok"><br>

    <button type="submit">simpan</button>
    </form>
</body>
</html>