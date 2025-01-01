<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitra List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-image: linear-gradient(to right,rgb(138, 195, 139),rgb(172, 204, 184));
            background-size: cover;
            background-attachment: fixed;
        }

        .navbar {
            padding: 20px;
            background-color: #F5F5F5;
            border-bottom: 2px solid #4CAF50;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .navbar-brand img {
            height: 50px;
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }

        .navbar-nav .nav-link {
            color: #333;
            font-weight: 600;
            padding: 0 15px;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #4CAF50;
        }

        .navbar-nav .nav-link.active {
            color: #4CAF50;
            font-weight: bold;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h1 {
            color: #4CAF50;
            font-size: 2.8rem;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .table {
            margin-top: 30px;
            border-radius: 10px;
            overflow: hidden;
        }

        .table th, .table td {
            vertical-align: middle;
            padding: 20px;
            color: #333;
            background-color: #ffffff;
            border: none;
            font-family: 'Arial', sans-serif;
        }

        .table th {
            background-color: #f1f8e9;
            color: #4CAF50;
            font-weight: bold;
            text-transform: uppercase;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f7f7f7;
        }

        .table-striped tbody tr:hover {
            background-color: #e8f5e9;
        }

        .btn {
            transition: all 0.3s ease;
            font-weight: 600;
            border-radius: 50px;
        }

        .btn-primary {
            background-color: #4CAF50;
            border: none;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-warning {
            background-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-sm {
            padding: 8px 15px;
        }

        .alert {
            border-radius: 50px;
            padding: 15px;
            background-color: #e8f5e9;
            color: #4CAF50;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .text-end a {
            color: #ffffff;
        }

        .text-end a:hover {
            color: #e0f7fa;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('gambar/thalita_navbar.jpeg') }}" alt="Thalita Logo">
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
                            <a class="nav-link active" href="{{ route('profile.index') }}">Mitra Profiles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kemitraan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Resto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reports.index') }}">Mitra Reports</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <h1>Profile List</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-3 text-end">
            <a href="{{ route('profile.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i> Add New Profile
            </a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($profiles as $profile)
                    <tr>
                        <td>{{ $profile->id }}</td>
                        <td>{{ $profile->name }}</td>
                        <td>{{ $profile->description }}</td>
                        <td>{{ $profile->contact }}</td>
                        <td>{{ $profile->address }}</td>
                        <td>
                            <a href="{{ route('profile.show', $profile->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('profile.destroy', $profile->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No profiles found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
