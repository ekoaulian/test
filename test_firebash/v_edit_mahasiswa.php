<!DOCTYPE html>
<html>
<head>
	<title>edit mahasiswa</title>
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

			<?php
			include 'koneksi.php';
			$mahasiswa_id = $_GET['mahasiswa_id'];
			$data = mysqli_query($koneksi,"select * from mahasiswa where mahasiswa_id='$mahasiswa_id'");
			while($d = mysqli_fetch_array($data)){
			?>

<h2>edit mahasiswa</h2><br/>
<form method="post" action="action_edit_mahasiswa.php">

<label>Id Mahasiswa</label><br/>
<input type="hidden" name="mahasiswa_id" value="<?php echo $d['mahasiswa_id']; ?>" >
<input type="text" name="mahasiswa_id" value="<?php echo $d['mahasiswa_id']; ?>" class="form-control" required disabled=""><br/>

<label>Nama Mahasiswa</label><br/>
<input type="text" name="mahasiswa_name" value="<?php echo $d['mahasiswa_name']; ?>" class="form-control" required><br/>

<label>Jurusan</label><br/>
<select name="mahasiswa_jurusan" class="form-control" required>
	<option value=""> - Pilih Jurusan - </option>
	<option>Sistem Informasi</option>
	<option>Sistem Informasi Akuntansi</option>
	<option>Manajement</option>
	<option>Akuntansi</option>	
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
<?php 
}
?>
</div>

</body>
</html>