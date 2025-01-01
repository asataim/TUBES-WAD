<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mitra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .header {
            background-color: #28a745;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

        .btn {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #218838;
        }

        .detail-card {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .detail-card p {
            font-size: 18px;
        }

        .detail-card h4 {
            color: #28a745;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        Detail Mitra
    </div>

    <div class="detail-card">
        <h4>Informasi Mitra</h4>
        <p><strong>Nama:</strong> {{ $partner->name }}</p>
        <p><strong>Email:</strong> {{ $partner->email }}</p>
        <p><strong>Telepon:</strong> {{ $partner->phone }}</p>
    </div>

    <a href="{{ route('partners.index') }}" class="btn">Kembali ke Daftar</a>

</div>

</body>
</html>
