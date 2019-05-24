<!DOCTYPE html>
<html>
<head>
	<title>add mahasiswa</title>
</head>
<body>
<h2>tambah mahasiswa</h2><br/>

<form method="post" action="action_add_mahasiswa.php">
<label>Id Mahasiswa</label> <br/>
<input type="text" name="mahasiswa_id" required disabled=""> <br/>

<label>Nama Mahasiswa</label> <br/>
<input type="text" name="mahasiswa_name" required><br/>

<label>Jurusan</label><br/>
<select name="mahasiswa_jurusan" required>
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

<button type="submit">Simpan</button>
<a href="index.php">Batal</a>
	
</form>

</body>
</html>