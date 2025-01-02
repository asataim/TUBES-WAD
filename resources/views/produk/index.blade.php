<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kemitraan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('css/indexBlade.css') }}" rel="stylesheet">
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

<!-- 
    <div class="container my-5">
        <h1 class="text-center text-success mb-4">Daftar Produk</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('produk.create') }}" class="btn btn-green">Tambah Produk</a>
        </div>

        <table class="table table-bordered table-hover">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produk as $item)
                    <tr>
                        <td class="text-center">{{ $item->id }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>Rp{{ number_format($item->harga, 2, ',', '.') }}</td>
                        <td class="text-center">{{ $item->stok }}</td>
                        <td class="text-center">
                            <a href="{{ route('produk.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('produk.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data produk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div> -->

    <!-- BAWAH -->
    <div class="container my-5 table-product">
            <h1 class="text-center text-success mb-4">Daftar Produk</h1>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('produk.create') }}"><button class="btn btn-success">Tambah Produk</button></a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produk as $item)
                            <tr>
                                <td class="text-center">{{ $item->id }}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>Rp{{ number_format($item->harga, 2, ',', '.') }}</td>
                                <td class="text-center">{{ $item->stok }}</td>
                                <td class="text-center">
                                    <a href="{{ route('produk.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('produk.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data produk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    
        <footer class="text-center text-lg-start bg-body-tertiary text-muted">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
    
                <div>
                    <a href="https://www.instagram.com/fuad.ngrha?igsh=MXZ1NDZneDd1N3Jn" class="me-4 text-reset"
                        target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                    </a>
                    <a href="https://wa.me/6281289804888" class="me-4 text-reset" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                    </a>
    
                </div>
    
            </section>
    
            <section class="">
                <div class="container text-center text-md-start mt-5">
    
                    <div class="row mt-3">
    
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
    
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Thalita Fried Chicken
                            </h6>
                            <p>
                                Bisnis kemitraan yang menawarkan cita rasa lezat serta harga yang terjangkau.
                                Dengan modal awal yang fleksibel, mitra mendapatkan dukungan penuh. Bergabung bersama
                                Thalita Fried Chicken!
                            </p>
                        </div>
    
    
    
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
    
                            <h6 class="text-uppercase fw-bold mb-4">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Produk 1</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Produk 2</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Produk 3</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Produk 4</a>
                            </p>
                        </div>
    
    
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
    
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Link 1</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Link 2</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Link 3</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Link 4</a>
                            </p>
                        </div>
    
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
    
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> Bandung, Bojongsoang, Indonesia</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                ThalitaChicken@gmail.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> +62 999 999</p>
                            <p><i class="fas fa-print me-3"></i> +62 888 888</p>
                        </div>
                    </div>
    
                </div>
            </section>
        </footer>
    </div>
    <!-- ATAS -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
