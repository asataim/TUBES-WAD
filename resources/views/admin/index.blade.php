<!DOCTYPE html>
<html>
<head>
    <title>List Account - ThalitaFC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
        }
        .navbar {
            padding: 10px;
            background-color:#F5F5F5 ;
            position: sticky;
            top: 0;
            overflow: hidden;
            z-index: 2;
        }

        .navbar-brand {
            margin-left: 50px;
        }

        .navbar-nav {
            margin-right: 50px;
        }

        .navbar-collapse {
            /* height: 15px; */
            /* background-color: antiquewhite; */
        }

        .nav-link:hover {
            /* font-weight: bolder; */
            color: black;
            /* font-size: 17px; */
        }

        .nav-link:active {
            color: black;
        }

        .nav-link {
            color: grey;
            font-weight: bolder;
        }

        .btn-primary {
            background-color: #90EE90;
            border-color: #90EE90;
            color: #000;
        }
        .btn-primary:hover {
            background-color: #7FCD7F;
            border-color: #7FCD7F;
            color: #000;
        }
        .table th {
            background-color: #90EE90;
            color: #000;
        }
        .sort-link {
            color: #000;
            text-decoration: none;
        }
        .sort-link:hover {
            color: #333;
        }
    </style>
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('gambar/thalita_navbar.jpeg') }}" alt="Thalita Logo" style="height: 40px;">
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
                            <a class="nav-link" href="{{ route('profile.index') }}">Mitra Profiles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.index') }}">Accounts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('produk.index') }}">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('transaksi.index') }}">Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reports.index') }}">Mitra Reports</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>List Account</h2>
            <a href="{{ route('admin.create') }}" class="btn btn-primary">Add New Account</a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <a href="{{ route('admin.index', ['sort_by' => 'id', 'direction' => $column === 'id' && $direction === 'asc' ? 'desc' : 'asc']) }}" class="sort-link">
                                    ID
                                    @if($column === 'id')
                                        {!! $direction === 'asc' ? '↑' : '↓' !!}
                                    @endif
                                </a>
                            </th>
                            <th>
                                <a href="{{ route('admin.index', ['sort_by' => 'nama', 'direction' => $column === 'nama' && $direction === 'asc' ? 'desc' : 'asc']) }}" class="sort-link">
                                    Nama
                                    @if($column === 'nama')
                                        {!! $direction === 'asc' ? '↑' : '↓' !!}
                                    @endif
                                </a>
                            </th>
                            <th>
                                <a href="{{ route('admin.index', ['sort_by' => 'role', 'direction' => $column === 'role' && $direction === 'asc' ? 'desc' : 'asc']) }}" class="sort-link">
                                    Role
                                    @if($column === 'role')
                                        {!! $direction === 'asc' ? '↑' : '↓' !!}
                                    @endif
                                </a>
                            </th>
                            <th>
                                <a href="{{ route('admin.index', ['sort_by' => 'username', 'direction' => $column === 'username' && $direction === 'asc' ? 'desc' : 'asc']) }}" class="sort-link">
                                    Username
                                    @if($column === 'username')
                                        {!! $direction === 'asc' ? '↑' : '↓' !!}
                                    @endif
                                </a>
                            </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td>{{ $admin->id }}</td>
                                <td>{{ $admin->nama }}</td>
                                <td>{{ $admin['role'] }}</td>
                                <td>{{ $admin->username }}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $admin) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <button onclick="confirmDelete({{ $admin->id }})" class="btn btn-sm btn-danger">Delete</button>
                                    <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.destroy', $admin) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Sweetalert2.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#90EE90',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>
</body>
</html>
