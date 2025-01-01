<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; color: #333; }
        form { max-width: 500px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; background-color: #fff; }
        label { display: block; margin-bottom: 5px; }
        input, button { width: 100%; padding: 10px; margin-bottom: 15px; }
        button { background-color: #28a745; color: white; border: none; }
    </style>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" value="{{ $produk->nama_produk }}" required>
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" step="0.01" value="{{ $produk->harga }}" required>
        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" value="{{ $produk->stok }}" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
