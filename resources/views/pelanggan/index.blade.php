<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <style>
        table{
            margin-top: 20px;
        }
    </style>
<center>
    <h1>#Selamat datang di data pelangggan#</h1>
<a href="/pelanggan/create"><button type="button" class="btn btn-primary"> Input Data </button></a>
<table class="table table-bordered">
    <tr class="table-dark">
        <th>Id</th>
        <th>Nama_pelanggan</th>
        <th>No_telepon</th>
        <th>Alamat</th>
        <th>No_ktp</th>
        <th colspan="2">AKSI</th>
    </tr>
    @foreach ($pelanggan as $p )
    <tr class="table-light">
        <td>{{ $p->id }}</td>
        <td>{{ $p->nama_pelanggan }}</td>
        <td>{{ $p->no_telepon }}</td>
        <td>{{ $p->alamat }}</td>
        <td>{{ $p->no_ktp }}</td>
        <td><a href="/pelanggan/ubah/{{ $p->id }}"><button type="button" class="btn btn-success">UBAH</button></a></td>
        <td><a href="/pelanggan/hapus/{{ $p->id }}"><button type="button" class="btn btn-danger">HAPUS</button></a></td>
    </tr>
    @endforeach
</table>

</body>
</html>
