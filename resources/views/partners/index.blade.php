<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kemitraan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .navbar {
            padding: 10px;
            background-color:#F5F5F5 ;
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

        .navbar-collapse {
            /* height: 15px; */
            /* background-color: antiquewhite; */
        }

        .nav-link:hover {
            /* font-weight: bolder; */
            color: black;
            /* font-size: 17px; */
        }

        .nav-link:active {
            color: black;
        }

        .nav-link {
            color: grey;
            font-weight: bolder;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            margin: 5px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f1f1f1;
            color: #555;
        }

        .actions {
            display: flex;
            justify-content: space-around;
        }

        .actions .btn {
            background-color: #28a745;
        }

        .actions .btn:hover {
            background-color: #218838;
        }

        .actions form .btn {
            background-color: #dc3545;
        }

        .actions form .btn:hover {
            background-color: #c82333;
        }

        .actions .btn, .actions form .btn {
            padding: 8px 16px;
            margin: 0 5px;
            font-size: 14px;
        }

        .actions a {
            color: white;
        }
    </style>
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
                            <a class="nav-link active" href="{{ route('/main') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('partners.index') }}">Kemitraan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Resto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hubungi Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login as Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<div class="container">
    <div class="header">
        Profile Mitra
    </div>

    <a href="{{ route('partners.create') }}" class="btn">Tambah Profile</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partners as $partner)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $partner->name }}</td>
                <td>{{ $partner->email }}</td>
                <td>{{ $partner->phone }}</td>
                <td class="actions">
                    <a href="{{ route('partners.show', $partner->id) }}" class="btn">Detail</a>
                    <a href="{{ route('partners.edit', $partner->id) }}" class="btn">Edit</a>
                    <form action="{{ route('partners.destroy', $partner->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
