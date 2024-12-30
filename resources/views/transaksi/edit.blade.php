<!DOCTYPE html>
<html>
<head>
    <title>Edit Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Transaksi</h1>
    <form action="{{ route('transaksi.update', $transaksi->id_transaksi) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_mitra" class="form-label">ID Mitra:</label>
            <input type="number" name="id_mitra" class="form-control" value="{{ $transaksi->id_mitra }}" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah:</label>
            <input type="number" name="jumlah" step="0.01" class="form-control" value="{{ $transaksi->jumlah }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $transaksi->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select name="status" class="form-select" required>
                <option value="pending" {{ $transaksi->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="completed" {{ $transaksi->status == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="failed" {{ $transaksi->status == 'failed' ? 'selected' : '' }}>Failed</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan:</label>
            <textarea name="keterangan" class="form-control">{{ $transaksi->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
</body>
</html>
