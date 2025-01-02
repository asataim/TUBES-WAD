<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; color: #333; }
        .container { max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; background-color: #fff; }
        h1 { color: #28a745; }
        .btn { padding: 8px 12px; background-color: #28a745; color: white; border: none; cursor: pointer; text-decoration: none; display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Produk</h1>
        <p><strong>ID Produk:</strong> {{ $produk->id }}</p>
        <p><strong>Nama Produk:</strong> {{ $produk->nama_produk }}</p>
        <p><strong>Harga:</strong> Rp{{ number_format($produk->harga, 2, ',', '.') }}</p>
        <p><strong>Stok:</strong> {{ $produk->stok }}</p>
        <a href="{{ route('produk.index') }}" class="btn">Kembali</a>
    </div>
</body>
</html>
