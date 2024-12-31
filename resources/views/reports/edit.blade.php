<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laporan</title>
    <style>
        
        body {
            background-color: #f4f8f4; 
            color: #333; 
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
            margin: 0;
        }

        .container {
            width: 60%;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); 
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
            color: #4CAF50; 
        }

        input, select, button {
            padding: 10px;
            margin-bottom: 20px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
        }

        input[type="number"], input[type="text"] {
            background-color: #f9f9f9; 
        }

        select {
            background-color: #f9f9f9; 
        }

        button {
            background-color: #4CAF50; 
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }

        button:hover {
            background-color: #45a049; 
        }

        
        input:focus, select:focus {
            border-color: #4CAF50;
            outline: none;
        }

        
        .back-link {
            display: inline-block;
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }

        .back-link:hover {
            background-color: #e53935;
        }

    </style>
</head>
<body>

    <h1>Edit Laporan</h1>

    <div class="container">
        <form action="{{ route('reports.update', $report) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="id_mitra">ID Mitra:</label>
            <select name="id_mitra" id="id_mitra" required>
                @foreach ($profiles as $profile)
                    <option value="{{ $profile->id }}" {{ $report->id_mitra == $profile->id ? 'selected' : '' }}>
                        {{ $profile->name }}
                    </option>
                @endforeach
            </select>

            <label for="periode">Periode:</label>
            <input type="text" name="periode" id="periode" value="{{ $report->periode }}" required>

            <label for="total_transaksi">Total Transaksi:</label>
            <input type="number" name="total_transaksi" id="total_transaksi" value="{{ $report->total_transaksi }}" required>

            <label for="total_pendapatan">Total Pendapatan:</label>
            <input type="number" name="total_pendapatan" id="total_pendapatan" value="{{ $report->total_pendapatan }}" step="0.01" required>

            <label for="status_kinerja">Status Kinerja:</label>
            <input type="text" name="status_kinerja" id="status_kinerja" value="{{ $report->status_kinerja }}" required>

            <button type="submit">Update</button>
        </form>

        <!-- Link Kembali ke Daftar Laporan -->
        <a href="{{ route('reports.index') }}" class="back-link">Kembali ke Daftar Laporan</a>
    </div>

</body>
</html>
