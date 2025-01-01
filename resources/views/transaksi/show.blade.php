<!DOCTYPE html>
<html>
<head>
    <title>Detail Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Detail Transaksi</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID Transaksi</th>
            <td>{{ $transaksi->id_transaksi }}</td>
        </tr>
        <tr>
            <th>ID Mitra</th>
            <td>{{ $transaksi->id_mitra }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ number_format($transaksi->jumlah, 2) }}</td>
        </tr>
        <tr>
            <th>Tanggal</th>
            <td>{{ $transaksi->tanggal }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $transaksi->status }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $transaksi->keterangan }}</td>
        </tr>
    </table>
    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
</div>
</body>
</html>
