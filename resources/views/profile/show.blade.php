<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Mitra Profile Details</h1>

        <div class="card">
            <div class="card-header">
                <h2>{{ $profile->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $profile->description }}</p>
                <p><strong>Contact:</strong> {{ $profile->contact }}</p>
                <p><strong>Address:</strong> {{ $profile->address }}</p>
            </div>
        </div>

        <a href="{{ route('profile.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</body>
</html>
