<!DOCTYPE html>
<html>
<head>
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Tambah Transaksi</h1>
    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_mitra" class="form-label">ID Mitra:</label>
            <input type="number" name="id_mitra" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah:</label>
            <input type="number" name="jumlah" step="0.01" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select name="status" class="form-select" required>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
                <option value="failed">Failed</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan:</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>