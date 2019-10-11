<?php 
require 'configs/functions.php';

//untuk ambil id
$id_mahasiswa = $_GET["id_mahasiswa"];
//print_r($id_mahasiswa);

//untuk ambil data berdasarkan id mahasiswa / index [0]
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa")[0];
//exit;

if( isset($_POST["submit"]) ){

	// cek apakah data berhasil diubah atau tidak
	
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';
			</script>
			";
	} else {
		// print_r($_POST);
		// exit;
		echo "
			<script>
				alert('data gagal diubah');
				document.location.href = 'index.php';
			</script>
			";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ubah data mahasiswa</title>
</head>
<body>
<h2>Ubah data mahasiswa</h2>
	<form action="" method="post">
				
		<ul>
		<input type="hidden" name="id_mahasiswa" value="<?= $mahasiswa["id_mahasiswa"];?>">
			<li>
				<label for="npm">Npm :</label>
				<input type="text" name="npm" id="npm" value="<?= $mahasiswa["npm"];?>">
			</li>
			<li>
				<label for="nama">nama :</label>
				<input type="text" name="nama" id="nama"value="<?= $mahasiswa["nama"];?>">
			</li>
			<li>
				<label for="email">email :</label>
				<input type="text" name="email" id="email"value="<?= $mahasiswa["email"];?>">
			</li>
			<li>
				<label for="jurusan">jurusan :</label>
				<input type="text" name="jurusan" id="jurusan"value="<?= $mahasiswa["jurusan"];?>">
			</li>
			<li>
				<label for="gambar">gambar :</label>
				<input type="text" name="gambar" id="gambar"value="<?= $mahasiswa["gambar"];?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah data</button>
			</li>
		</ul>
	</form>
</body>
</html>