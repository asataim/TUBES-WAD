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
            background-color: #90EE90 !important;
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
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">ThalitaFC</a>
        </div>
    </nav>

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
