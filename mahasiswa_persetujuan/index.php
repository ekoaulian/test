<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
</head>
<body>

<h2>Latihan crud functions Generate</h2>
<br/>
<a href="v_add_mahasiswa.php">Tambah Mahasiswa</a>
<br/>
<br/>
Menunggu persetujuan
	<table border="2">
		<tr>
			<td>Id Mahasiswa(NIM)</td>
			<td>Nama Mahasiswa</td>
			<td>Aksi</td>
		</tr>
		<?php
		include 'koneksi.php';
		$data = mysqli_query($koneksi, "select * from mahasiswa_persetujuan where is_active = 1");

		//apa bila data kosong 
		if (mysqli_num_rows($data) == 0) {
			//jika data kosong akan menampilkan
			echo '<mark> - Data Belum Kosong - </mark>';
		}else{
		

		while ($d = mysqli_fetch_array($data)) {
		?>
		<tr>
			<td><?php echo $d['mahasiswa_id']; ?></td>
			<td><?php echo $d['mahasiswa_name']; ?></td>
			<td>
				<a href="action_persetujuan_mahasiswa.php?mahasiswa_id=<?php echo $d['mahasiswa_id']; ?>">persetujuan</a> || 
				<a href="action_delete_mahasiswa.php?mahasiswa_id=<?php echo $d['mahasiswa_id']; ?>">delete</a>
			</td>
		</tr>
		
		<?php
		}
		}
		?>
	</table>
<br/>

------------------------------------------------------------------------------------------------------
<br/>
Sudah disetujui
	<table border="2">
		<tr>
			<td>Id Mahasiswa(NIM)</td>
			<td>Nama Mahasiswa</td>
			<td>Aksi</td>
		</tr>
		<?php
		include 'koneksi.php';
		$data = mysqli_query($koneksi, "select * from mahasiswa_persetujuan where is_active = 2");

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
			<td> 
				<a href="action_delete_mahasiswa.php?mahasiswa_id=<?php echo $d['mahasiswa_id']; ?>">delete</a>
			</td>
		</tr>
		
		<?php
		}
		}
		?>
	</table>

</body>
</html>