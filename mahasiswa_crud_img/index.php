<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
</head>
<body>

<h2>Latihan crud IMG</h2>
<br/>
<a href="v_add_mahasiswa.php">Tambah Mahasiswa</a>
	<table border="2">
		<tr>
			<td>Id Mahasiswa(NIM)</td>
			<td>Nama Mahasiswa</td>
			<td width="200">Jurusan</td>
			<td>Jenis Kelamin</td>
			<td>Foto Mahasiswa</td>
			<td>Aksi</td>
		</tr>
		<?php
		include 'koneksi.php';
		$data = mysqli_query($koneksi, "select * from mahasiswa where is_active = 1");

		//apa bila data kosong 
		if (mysqli_num_rows($data) == 0) {
			//jika data kosong akan menampilkan
			echo '<mark> - Data Kosong - </mark>';
		}else{
		

		while ($d = mysqli_fetch_array($data)) {
		?>
		<tr>
			<td><?php echo $d['mahasiswa_id']; ?></td>
			<td><?php echo $d['mahasiswa_name']; ?></td>
			<td><?php echo $d['mahasiswa_jurusan']; ?></td>
			<td><?php echo $d['mahasiswa_jk']; ?></td>
			<td><?php echo "<img src='mahasiswa_foto/".$d['mahasiswa_foto']."' width='100' height='100'>" ; ?></td>
			<td>
				<a href="v_edit_mahasiswa.php?mahasiswa_id=<?php echo $d['mahasiswa_id']; ?>">edit</a> || 
				<a href="action_delete_mahasiswa.php?mahasiswa_id=<?php echo $d['mahasiswa_id']; ?>">delete</a>
				<a href="action_delete_permanen.php?mahasiswa_id=<?php echo $d['mahasiswa_id']; ?>">delete permanen</a>
			</td>
		</tr>
		
		<?php
		}
		}
		?>
	</table>

</body>
</html>