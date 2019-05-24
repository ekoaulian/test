<!DOCTYPE html>
<html>
<head>
	<title>Restfull-API</title>
</head>
<body>

<h2>Tabel nilai mahasiswa menggunakan Restfull-Api</h2>
	<table border="2">
		<tr>
			<td>Id Mahasiswa(NIM)</td>
			<td>Nama Mahasiswa</td>
			<td>Nilai Mahasiswa</td>
		</tr>
		<?php
		include 'koneksi.php';
		$data = mysqli_query($koneksi, "select * from mahasiswa_api_nilai");

		//apa bila data kosong 
		if (mysqli_num_rows($data) == 0) {
			//jika data kosong akan menampilkan
			echo '<mark> - Belum ada data yang disetujui - </mark>';
		}else{
		

		while ($d = mysqli_fetch_array($data)) {
		?>
		<tr>
			<td><?php echo $d['mahasiswa_id']; ?></td>
			<td><?php echo $d['mahasiswa_name']; ?></td>
			<td><?php echo $d['mahasiswa_nilai']; ?></td>
		</tr>
		
		<?php
		}
		}
		?>
	</table>

</body>
</html>