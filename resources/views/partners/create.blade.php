<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mitra</title>
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

        .form-group {
            margin-bottom: 15px;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        Tambah Mitra
    </div>

    <form action="{{ route('partners.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" placeholder="Nama Mitra" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email Mitra" required>
        </div>
        <div class="form-group">
            <label for="phone">Telepon</label>
            <input type="text" name="phone" id="phone" placeholder="Nomor Telepon" required>
        </div>
        <input type="submit" value="Simpan" class="btn">
    </form>
</div>

</body>
</html>
