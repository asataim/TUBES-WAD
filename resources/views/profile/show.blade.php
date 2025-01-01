<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(to right,rgb(138, 195, 139),rgb(172, 204, 184));
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 60px auto;
        }

        h1 {
            font-size: 3rem;
            font-weight: 600;
            color: #2E7D32;
            text-align: center;
            margin-bottom: 50px;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            border: none;
        }

        .card-header {
            background-color: #2E7D32;
            color: #fff;
            font-size: 2rem;
            padding: 25px;
            text-align: center;
            border-radius: 12px 12px 0 0;
            font-weight: 600;
        }

        .card-body {
            padding: 35px;
            font-size: 1.2rem;
            color: #555;
        }

        .card-body p {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .btn-secondary {
            background-color: #2E7D32;
            color: #fff;
            border-radius: 50px;
            padding: 12px 35px;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            display: block;
            text-align: center;
            margin: 50px auto 0;
            font-weight: 600;
        }

        .btn-secondary:hover {
            background-color: #1B5E20;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.5);
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Mitra Profile Details</h1>

        <div class="card">
            <div class="card-header">
                {{ $profile->name }}
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $profile->description }}</p>
                <p><strong>Contact:</strong> {{ $profile->contact }}</p>
                <p><strong>Address:</strong> {{ $profile->address }}</p>
            </div>
        </div>

        <a href="{{ route('profile.index') }}" class="btn btn-secondary mt-4">Back to List</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
