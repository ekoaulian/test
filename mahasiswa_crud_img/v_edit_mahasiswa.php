<!DOCTYPE html>
<html>
<head>
	<title>edit mahasiswa</title>
</head>
<body>

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
<input type="text" name="mahasiswa_id" value="<?php echo $d['mahasiswa_id']; ?>" required disabled=""><br/>

<label>Nama Mahasiswa</label><br/>
<input type="text" name="mahasiswa_name" value="<?php echo $d['mahasiswa_name']; ?>" required><br/>

<label>Jurusan</label><br/>
<select name="mahasiswa_jurusan" required>
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

<button type="submit">Simpan</button>
<a href="index.php">Batal</a>
	
</form>
<?php 
}
?>

</body>
</html>