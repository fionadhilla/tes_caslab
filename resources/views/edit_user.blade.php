<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit User</title>
</head>
<body>
<div class="container mt-4">
    <h2>Edit User</h2>
    <form action="{{ route('update_user', $data->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="posisi" name="posisi" value="{{ $data->posisi }}">
        </div>
        <div class="mb-3">
            <label for="gaji" class="form-label">Gaji</label>
            <input type="text" class="form-control" id="gaji" name="gaji" value="{{ $data->gaji }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
