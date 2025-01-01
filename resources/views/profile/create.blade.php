<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
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
            font-size: 2.5rem;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border-radius: 50px;
            padding: 15px;
            background-color: #f9f9f9;
            border: 2px solid #e0f2f1;
            transition: border 0.3s ease;
        }

        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: none;
        }

        .btn-success {
            background-color: #4CAF50;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-success:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        .btn-secondary {
            background-color: #ccc;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #bbb;
            transform: scale(1.05);
        }

        .form-group {
            margin-bottom: 20px;
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
        <h1>Create New Mitra Profile</h1>

        <form action="{{ route('profile.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="contact" class="form-label">Contact</label>
                <input type="text" id="contact" name="contact" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="address" class="form-label">Address</label>
                <input type="text" id="address" name="address" class="form-control" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Save Profile</button>
                <a href="{{ route('profile.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
