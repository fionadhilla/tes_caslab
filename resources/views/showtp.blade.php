<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Informatics Lab</title>
</head>
<div>
    <button class="btn btn-primary" onclick="window.location.href='{{route('tambah_tp')}}'" >Tambah TP</button>
    <h1>Table TP</h1>
    <table  class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Sub Judul</th>
                <th>Kategori</th>
                <th>Tanggal Post</th>
                <th>Deadline</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $p)
                <tr>
                    <td>{{ $p->id }} </td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->subJudul}}</td>
                    <td>{{ $p->kategori}}</td>
                    <td>{{ $p->tanggal }}</td>
                    <td>{{ $p->deadline }}</td>
                    <td>{{ $p->deskripsi }}</td>
                    <td>
                        <a href="{{ route('edit_tp', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('delete_tp', $p->id) }}" class="btn btn-danger btn-sm" 
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</html>
