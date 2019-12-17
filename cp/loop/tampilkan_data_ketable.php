<?php 

$siswa = [
	['nama' => 'agus', 'kelas' => '2A', 'goldarah' => 'B'],
	['nama' => 'anis', 'kelas' => '2B', 'goldarah' => 'AB'],
	['nama' => 'azis', 'kelas' => '2C', 'goldarah' => 'A'],
	['nama' => 'eko', 'kelas' => '2D', 'goldarah' => 'B'],
	['nama' => 'rika', 'kelas' => '2E', 'goldarah' => 'O'],
	['nama' => 'serlina', 'kelas' => '2A', 'goldarah' => 'A'],
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>data</title>
</head>
<body>
	<h2>data siswa</h2>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Golongan darah</th>
		</tr>

		<?php foreach ($siswa as $key => $value) { ?>
		<tr>
			<td><?= $value['nama'] ?></td>
			<td><?= $value['kelas'] ?></td>
			<td><?= $value['goldarah'] ?></td>		
		</tr>
		<?php } ?>
	</table>
</body>
</html>