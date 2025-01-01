<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
    <title>Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Daftar Transaksi</h1>

    <!-- Button to add a new transaction -->
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>

    <!-- Table displaying transactions -->
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID Transaksi</th>
            <th>ID Mitra</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($transaksi as $t)
            <tr>
                <td>{{ $t->id_transaksi }}</td>
                <td>{{ $t->id_mitra }}</td>
                <td>{{ number_format($t->jumlah, 2) }}</td>
                <td>{{ $t->tanggal }}</td>
                <td>{{ $t->status }}</td>
                <td>
                    <a href="{{ route('transaksi.edit', $t->id_transaksi) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('transaksi.destroy', $t->id_transaksi) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
=======
    <title>Manajemen Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Manajemen Transaksi</h2>
                <button onclick="openModal()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    Tambah Transaksi
                </button>
            </div>

            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-6 py-3 text-left">ID</th>
                            <th class="px-6 py-3 text-left">Mitra</th>
                            <th class="px-6 py-3 text-left">Jumlah</th>
                            <th class="px-6 py-3 text-left">Tanggal</th>
                            <th class="px-6 py-3 text-left">Status</th>
                            <th class="px-6 py-3 text-left">Keterangan</th>
                            <th class="px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $t)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $t->id }}</td>
                            <td class="px-6 py-4">{{ $t->profile->nama ?? 'N/A' }}</td>
                            <td class="px-6 py-4">Rp {{ number_format($t->jumlah, 2, ',', '.') }}</td>
                            <td class="px-6 py-4">{{ \Carbon\Carbon::parse($t->tanggal)->format('d-m-Y') }}</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded text-sm
                                    @if($t->status == 'completed') bg-green-100 text-green-800
                                    @elseif($t->status == 'pending') bg-yellow-100 text-yellow-800
                                    @else bg-red-100 text-red-800
                                    @endif">
                                    {{ ucfirst($t->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4">{{ $t->keterangan }}</td>
                            <td class="px-6 py-4">
                                <button onclick="editTransaksi({{ $t->id }})" class="text-blue-500 hover:text-blue-700 mr-2">
                                    Edit
                                </button>
                                <form action="{{ route('transaksi.destroy', $t) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Yakin ingin menghapus?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Form -->
        <div id="formModal" class="fixed inset-0 bg-black bg-opacity-50 hidden">
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white rounded-lg w-full max-w-md mx-4">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-4">Tambah Transaksi</h3>
                        <form id="transaksiForm" method="POST" action="{{ route('transaksi.store') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Mitra</label>
                                <select name="id_mitra" class="w-full border rounded px-3 py-2">
                                    @foreach($profiles as $profile)
                                        <option value="{{ $profile->id }}">{{ $profile->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Jumlah</label>
                                <input type="number" name="jumlah" step="0.01" class="w-full border rounded px-3 py-2" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Tanggal</label>
                                <input type="date" name="tanggal" class="w-full border rounded px-3 py-2" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Status</label>
                                <select name="status" class="w-full border rounded px-3 py-2">
                                    <option value="pending">Pending</option>
                                    <option value="completed">Completed</option>
                                    <option value="failed">Failed</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Keterangan</label>
                                <textarea name="keterangan" class="w-full border rounded px-3 py-2" required></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">
                                    Batal
                                </button>
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function openModal() {
        document.getElementById('formModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('formModal').classList.add('hidden');
    }

    function editTransaksi(id) {
        // Implementasi edit transaksi
    }
    </script>
</body>
</html>
>>>>>>> Stashed changes
