<!DOCTYPE html>
<html>
<head>
	<title>add mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Lat Crud</h1>
</div>
  
<div class="container">
<h2>tambah mahasiswa</h2><br/>

<form method="post" action="action_add_mahasiswa.php">
<label>Id Mahasiswa</label> <br/>
<input type="text" name="mahasiswa_id" class="form-control" required disabled=""> <br/>

<label>Nama Mahasiswa</label> <br/>
<input type="text" name="mahasiswa_name" class="form-control" required><br/>

<label>Jurusan</label><br/>
<select name="mahasiswa_jurusan" class="form-control" required>
	<option value="">- Pilih Jurusan -</option>
	<option value="Sistem Informasi">Sistem Informasi</option>
	<option value="Sistem Informasi Akuntasi">Sistem Informasi Akuntansi</option>
	<option value="Manajement">Manajement</option>
	<option value="Akuntansi">Akuntansi</option>
</select><br/>

<label>Jenis Kelamin</label><br/>
<input type="radio" name="mahasiswa_jk" value="Laki - laki" required>
<label>Laki - laki</label>
<input type="radio" name="mahasiswa_jk" value="Perempuan" required>
<label>Perempuan</label><br/>

<button type="submit" class="btn btn-success">Simpan</button>
<a href="index.php" class="btn btn-dark" role="button">Batal</a>

<!-- <button type="submit">Simpan</button>
<a href="index.php">Batal</a> -->
	
</form>
</div>
</body>
</html>