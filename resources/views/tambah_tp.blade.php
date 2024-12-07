<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    
    <form action="{{route('tp.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Judul</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="subJudul" class="form-label">sub Judul</label>
            <input type="text" class="form-control" id="subJudul" name="subJudul">
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori">
        </div>
        <!-- <div class="mb-3">
            <label for="deadline" class="form-label">deadline</label>
            <input type="text" class="form-control" id="deadline" name="deadline">
        </div> -->
        <div class="mb-3">
            <label for="deadline" class="form-label">deadline</label>
            <input class="form-control" id="deadline" name="deadline" type="datetime-local">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
</div>
</body>
</html>

