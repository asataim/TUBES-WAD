<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Transaksi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .navbar {
            padding: 10px;
            background-color: #F5F5F5;
            position: sticky;
            top: 0;
            overflow: hidden;
            z-index: 2;
        }

        .navbar-brand {
            margin-left: 50px;
        }

        .navbar-nav {
            margin-right: 50px;
        }

        .nav-link {
            color: grey;
            font-weight: bolder;
        }

        .nav-link:hover {
            color: black;
        }

        .nav-link:active {
            color: black;
        }

        .bg-custom-light {
            background-color: #F5F5F5;
        }
    </style>
</head>

<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg bg-custom-light">
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
                            <a class="nav-link" href="{{ route('produk.index') }}">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('transaksi.index') }}">Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reports.index') }}">Mitra Reports</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="h4">Manajemen Transaksi</h2>
                    <button onclick="openModal()" class="btn btn-primary">
                        Tambah Transaksi
                    </button>
                </div>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-light">
                                <th>ID</th>
                                <th>Mitra</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaksi as $t)
                            <tr>
                                <td>{{ $t->id }}</td>
                                <td>{{ $t->profile->name ?? 'N/A' }}</td>
                                <td>Rp {{ number_format($t->jumlah, 2, ',', '.') }}</td>
                                <td>{{ \Carbon\Carbon::parse($t->tanggal)->format('d-m-Y') }}</td>
                                <td>
                                    <span class="badge 
                                        @if($t->status == 'completed') bg-success
                                        @elseif($t->status == 'pending') bg-warning
                                        @else bg-danger
                                        @endif">
                                        {{ ucfirst($t->status) }}
                                    </span>
                                </td>
                                <td>{{ $t->keterangan }}</td>
                                <td>
                                    <button onclick="editTransaksi({{ $t->id }})" class="btn btn-sm btn-link text-primary">
                                        Edit
                                    </button>
                                    <form action="{{ route('transaksi.destroy', $t) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-link text-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal Form -->
        <div id="formModal" class="modal fade" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModalLabel">Tambah Transaksi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="transaksiForm" method="POST" action="{{ route('transaksi.store') }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Mitra</label>
                                <select name="id_mitra" class="form-select">
                                    @foreach($profiles as $profile)
                                    <option value="{{ $profile->id }}">{{ $profile->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" name="jumlah" step="0.01" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="pending">Pending</option>
                                    <option value="completed">Completed</option>
                                    <option value="failed">Failed</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control" required></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function openModal() {
            var modal = new bootstrap.Modal(document.getElementById('formModal'));
            modal.show();
        }

        function editTransaksi(id) {
            fetch(`/transaksi/${id}/edit`)
                .then(response => response.json())
                .then(data => {

                    document.querySelector('select[name="id_mitra"]').value = data.id_mitra;
                    document.querySelector('input[name="jumlah"]').value = data.jumlah;
                    document.querySelector('input[name="tanggal"]').value = data.tanggal;
                    document.querySelector('select[name="status"]').value = data.status;
                    document.querySelector('textarea[name="keterangan"]').value = data.keterangan;


                    const form = document.getElementById('transaksiForm');
                    form.action = `/transaksi/${data.id}`;

                    var modal = new bootstrap.Modal(document.getElementById('formModal'));
                    modal.show();
                })
                .catch(error => {
                    console.error('Terjadi kesalahan:', error);
                });
        }
    </script>
</body>

</html>
