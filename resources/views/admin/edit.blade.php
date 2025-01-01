<!DOCTYPE html>
<html>
<head>
    <title>Edit Account - ThalitaFC</title>
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">ThalitaFC</a>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title mb-4">Edit Account</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.update', $admin) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama', $admin->nama) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select name="role" class="form-control" required>
                            @foreach($userTypes as $type)
                                <option value="{{ $type }}" {{ old('role', $admin['role']) == $type ? 'selected' : '' }}>
                                    {{ ucfirst($type) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" value="{{ old('username', $admin->username) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                        <small class="text-muted">Leave blank to keep current password. New password must be at least 8 characters and contain letters, numbers, and symbols.</small>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.index') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Update Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
