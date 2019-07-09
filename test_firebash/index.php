<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Lat Crud</h1>
</div>
  
<div class="container">
<br/>
<!-- <a href="v_add_mahasiswa.php">Tambah Mahasiswa</a> -->
<a href="v_add_mahasiswa.php" class="btn btn-success" role="button">Tambah Mahasiswa</a><br/><br/>
	<table class="table table-hover">
		<tr>
			<td>Id Mahasiswa(NIM)</td>
			<td>Nama Mahasiswa</td>
			<td width="200">Jurusan</td>
			<td>Jenis Kelamin</td>
			<td>Aksi</td>
		</tr>
		<?php
		include 'koneksi.php';
		$data = mysqli_query($koneksi, "select * from mahasiswa where is_active = 1");

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
			<td><?php echo $d['mahasiswa_jurusan']; ?></td>
			<td><?php echo $d['mahasiswa_jk']; ?></td>
			<td>
				<a href="v_edit_mahasiswa.php?mahasiswa_id=<?php echo $d['mahasiswa_id']; ?>" class="btn btn-warning" role="button">Edit</a> || 
				<a href="action_delete_mahasiswa.php?mahasiswa_id=<?php echo $d['mahasiswa_id']; ?>" class="btn btn-danger" role="button">Hapus</a>

				<!-- <a href="v_edit_mahasiswa.php?mahasiswa_id=<?php echo $d['mahasiswa_id']; ?>">edit</a> || 
				<a href="action_delete_mahasiswa.php?mahasiswa_id=<?php echo $d['mahasiswa_id']; ?>">delete</a> -->
			</td>
		</tr>
		
		<?php
		}
		}
		?>
	</table>
</div>
</body>
</html>