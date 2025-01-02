<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <!-- <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; color: #333; }
        form { max-width: 500px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; background-color: #fff; }
        label { display: block; margin-bottom: 5px; }
        input, button { width: 100%; padding: 10px; margin-bottom: 15px; }
        button { background-color: #28a745; color: white; border: none; }
    </style> -->
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('gambar/thalita_navbar.jpeg') }}" alt="Thalita Logo" style="height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.index') }}">Mitra Profiles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.index') }}">Accounts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('produk.index') }}">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FITUR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reports.index') }}">Mitra Reports</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- <h1>Edit Produk</h1>
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
    </form> -->

    <div class="container">
        <div class="card p-4">
            <h1 class="text-center mb-4">Edit Produk</h1>

            <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="productName" class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" value="{{ $produk->nama_produk }}" required>
                </div>
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Harga</label>
                    <input type="number" name="harga" id="harga" step="0.01" value="{{ $produk->harga }}" required>
                </div>
                <div class="mb-3">
                    <label for="productStock" class="form-label">Stok</label>
                    <input type="number" name="stok" id="stok" value="{{ $produk->stok }}" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary px-4 py-2">Kembali</a>
                    <button type="submit" class="btn btn-success px-4 py-2">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
