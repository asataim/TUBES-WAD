<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laporan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Palet warna hijau dan putih */
        body {
            background-color: #f4f8f4; /* Warna latar belakang putih muda */
            color: #333; /* Teks berwarna abu-abu gelap */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #4CAF50; /* Green Navbar */
        }

        .navbar-brand {
            color: white;
        }

        .navbar-nav .nav-link {
            color: white;
        }

        .navbar-nav .nav-link:hover {
            color: #f1f1f1; /* Slight off-white color on hover */
        }

        h1 {
            background-color: #4CAF50; /* Warna hijau gelap untuk header */
            color: white;
            padding: 20px;
            text-align: center;
            margin: 0;
        }

        a {
            color: #4CAF50; /* Warna hijau untuk link */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline; /* Memberikan efek hover pada link */
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Memberikan efek bayangan pada tabel */
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50; /* Warna hijau untuk header tabel */
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        /* Menambahkan efek hover pada baris tabel */
        tr:hover td {
            background-color: #e1f5e1;
        }

        button {
            background-color: #f44336; /* Warna merah untuk tombol hapus */
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #e53935; /* Efek hover pada tombol hapus */
        }

        /* Styling untuk link tambah laporan */
        .add-report-link {
            display: inline-block;
            background-color: #4CAF50; /* Hijau untuk tombol tambah laporan */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin: 20px;
        }

        .add-report-link:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('gambar/testlogo.png') }}" alt="Logo"> <!-- Replace with your logo -->
                Mitra Profiles
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.index') }}">Mitra Profiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin accounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reports.index') }}">Mitra Reports</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>Daftar Laporan</h1>
    
    <!-- Link untuk menambah laporan baru -->
    <a href="{{ route('reports.create') }}" class="add-report-link">Tambah Laporan Baru</a>
    
    <table>
        <thead>
            <tr>
                <th>ID Mitra</th>
                <th>Periode</th>
                <th>Total Transaksi</th>
                <th>Total Pendapatan</th>
                <th>Status Kinerja</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->profile->name }}</td>
                    <td>{{ $report->periode }}</td>
                    <td>{{ $report->total_transaksi }}</td>
                    <td>{{ $report->total_pendapatan }}</td>
                    <td>{{ $report->status_kinerja }}</td>
                    <td>
                        <a href="{{ route('reports.show', $report) }}">Lihat</a> |
                        <a href="{{ route('reports.edit', $report) }}">Edit</a> |
                        <form action="{{ route('reports.destroy', $report) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
