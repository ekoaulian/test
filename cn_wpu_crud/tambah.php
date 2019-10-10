<?php 
require 'configs/functions.php';

if( isset($_POST["submit"]) ){

	// cek apakah data berhasil ditambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
			";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'index.php';
			</script>
			";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah data mahasiswa</title>
</head>
<body>
<h2>Tambah data mahasiswa</h2>
	<form action="" method="post">
		<ul>
			<li>
				<label for="npm">Npm :</label>
				<input type="text" name="npm" id="npm">
			</li>
			<li>
				<label for="nama">nama :</label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="email">email :</label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">jurusan :</label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="gambar">gambar :</label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah data</button>
			</li>
		</ul>
	</form>
</body>
</html>