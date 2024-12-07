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
    <form action="{{ route('update_tp', $data->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Judul</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
        </div>
        <div class="mb-3">
            <label for="subJudul" class="form-label">Sub Judul </label>
            <input type="text" class="form-control" id="subJudul" name="subJudul" value="{{ $data->subJudul }}">
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">kategroi</label>
            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $data->kategori }}">
        </div>
        <!-- <div class="mb-3">
            <label for="gaji" class="form-label">Deadline</label>
            <input type="text" class="form-control" id="gaji" name="gaji" value="{{ $data->deadline }}">
        </div> -->
        <div class="mb-3">
            <label for="deadline" class="form-label">deadline</label>
            <input class="form-control" id="deadline" name="deadline" type="datetime-local" value="{{ $data->deadline }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $data->deskripsi }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
