<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan</title>
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
            width: 80%;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); 
        }

        .detail-item {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .detail-item strong {
            color: #4CAF50; 
        }

        a {
            display: inline-block;
            background-color: #4CAF50; 
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }

        a:hover {
            background-color: #45a049; 
        }

    </style>
</head>
<body>

    <h1>Detail Laporan</h1>

    <div class="container">
        <div class="detail-item">
            <strong>ID Mitra:</strong> {{ $report->profile->name }}
        </div>
        <div class="detail-item">
            <strong>Periode:</strong> {{ $report->periode }}
        </div>
        <div class="detail-item">
            <strong>Total Transaksi:</strong> {{ $report->total_transaksi }}
        </div>
        <div class="detail-item">
            <strong>Total Pendapatan:</strong> {{ $report->total_pendapatan }}
        </div>
        <div class="detail-item">
            <strong>Status Kinerja:</strong> {{ $report->status_kinerja }}
        </div>

        <a href="{{ route('reports.index') }}">Kembali ke Daftar Laporan</a>
    </div>

</body>
</html>
