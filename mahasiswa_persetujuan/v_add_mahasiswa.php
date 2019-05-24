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

<button type="submit">Simpan</button>
<a href="index.php">Batal</a>
	
</form>

</body>
</html>