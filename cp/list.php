<?php 
include('connection.php');

$query	= mysqli_query($connect, "SELECT * FROM karyawan");
$karyawan = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>cp</title>
</head>
<body>
	<a href="add.php">Tambah data</a>
	<br><br>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Umur</th>
			<th>Jenis kelamin</th>
		</tr>
		<?php foreach ($karyawan as $k) : ?>
		
		<tr>
			<td><?= $k['nama'] ?></td>
			<td><?= $k['alamat'] ?></td>
			<td><?= $k['umur'] ?></td>
			<td><?= $k['jenis_kelamin'] ?></td>
		</tr>

		<?php endforeach ?>
	</table>

</body>
</html>