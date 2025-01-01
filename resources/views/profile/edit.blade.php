<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg,rgb(245, 245, 245));
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .logo img {
            height: 60px;
            transition: transform 0.3s ease;
        }

        .logo img:hover {
            transform: scale(1.1);
        }

        .container {
            background-color: rgba(191, 218, 193, 0.95);
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 60px auto;
        }

        h1 {
            font-size: 2.8rem;
            font-weight: 600;
            color: #2E7D32;
            text-align: center;
            margin-bottom: 40px;
            letter-spacing: 1.1px;
            text-transform: uppercase;
        }

        .form-label {
            font-size: 1.2rem;
            font-weight: 500;
            color: #555;
        }

        .form-control {
            border-radius: 8px;
            padding: 15px;
            font-size: 1.1rem;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-success {
            background-color: #2E7D32;
            color: #fff;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            font-weight: 600;
            margin-right: 20px;
        }

        .btn-success:hover {
            background-color: #1B5E20;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-3px);
        }

        .btn-secondary {
            background-color: #ccc;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-weight: 600;
        }

        .btn-secondary:hover {
            background-color: #bbb;
            transform: scale(1.05);
        }

        .mb-3 {
            margin-bottom: 25px;
        }
    </style>
</head>
<body>

    <!-- Logo di pojok kiri atas -->
    <div class="logo">
        <a href="{{ route('homepage') }}">
            <img src="{{ asset('gambar/thalita_navbar.jpeg') }}" alt="Thalita Logo">
        </a>
    </div>

    <div class="container">
        <h1>Edit Mitra Profile</h1>

        <form action="{{ route('profile.update', $profile->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $profile->name }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control">{{ $profile->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="text" id="contact" name="contact" class="form-control" value="{{ $profile->contact }}" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ $profile->address }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update Profile</button>
            <a href="{{ route('profile.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
