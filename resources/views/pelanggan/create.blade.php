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
	<a href="/pelanggan"><button class="btn btn-danger" style="margin: 10px;">Kembali</button></a>

	<br/>
	<br/>
    <center>
    <h2>Silahkan isi data pelanggan baru dibawah ini</h2>
    </center>
	<form action="/pelanggan/store" method="post">
		{{ csrf_field() }}
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Id pelanggan</label><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" required="required" placeholder="id pelanggan"><br/>
		<label for="exampleInputEmail1" class="form-label">Nama pelanggan</label><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_pelanggan" required="required" placeholder="nama pelanggan"><br/>
		<label for="exampleInputEmail1" class="form-label">No telepon</label><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telepon" required="required" placeholder="no telepon"><br/>
        <label for="floatingTextarea" class="form-label">Alamat</label><textarea class="form-control" placeholder="Alamat" id="floatingTextarea" required="required" name="alamat"></textarea><br/>
        <label for="exampleInputEmail1" class="form-label">no ktp</label><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_ktp" required="required" placeholder="no ktp"><br/>
        <center>
		<input type="submit" class="btn btn-success" value="Simpan Data">
        </center>
        </div>
	</form>
</body>
</html>
