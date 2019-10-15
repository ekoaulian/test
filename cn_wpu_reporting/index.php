<?php 
session_start();
if( empty($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}

require 'configs/functions.php';
//urutkan berdasarkan nama (ASC ada juga yang DESC)
//$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY nama ASC");
$mahasiswa = query("SELECT * FROM mahasiswa");

if( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
</head>
<body>
<a href="logout.php">keluar</a> ||
<a href="cetak.php" target="_blank">Cetak</a>
<h2>Mahasiswa</h2>
	<a href="tambah.php">Tambah data mahasiswa</a> <br><br>
	<form action="" method="post">
		<input type="text" name="keyword" size="50" autofocus placeholder="masukkan keyword" autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form> <br/>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>id</th>
			<th>aksi</th>
			<th>gambar</th>
			<th>npm</th>
			<th>nama</th>
			<th>e-mail</th>
			<th>jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach( $mahasiswa as $m ) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id_mahasiswa=<?= $m["id_mahasiswa"];?>">Ubah</a> 
				|
				<a href="hapus.php?id_mahasiswa=<?= $m["id_mahasiswa"];?>" onclick="return confirm('yakin?');">Hapus</a>
			</td>
			<td><img src="img/<?= $m["gambar"]; ?>" width="100"></td>
			<td><?= $m["npm"]; ?></td>
			<td><?= $m["nama"]; ?></td>
			<td><?= $m["email"]; ?></td>
			<td><?= $m["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>	
			
	</table>

</body>
</html>