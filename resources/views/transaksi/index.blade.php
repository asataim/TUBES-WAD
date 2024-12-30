<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Daftar Transaksi</h1>

    <!-- Button to add a new transaction -->
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>

    <!-- Table displaying transactions -->
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID Transaksi</th>
            <th>ID Mitra</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($transaksi as $t)
            <tr>
                <td>{{ $t->id_transaksi }}</td>
                <td>{{ $t->id_mitra }}</td>
                <td>{{ number_format($t->jumlah, 2) }}</td>
                <td>{{ $t->tanggal }}</td>
                <td>{{ $t->status }}</td>
                <td>
                    <a href="{{ route('transaksi.edit', $t->id_transaksi) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('transaksi.destroy', $t->id_transaksi) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>