<?php 
require 'configs/koneksi.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
//$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
</head>
<body>

<h2>Mahasiswa</h2>
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
				ubah |
				hapus
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