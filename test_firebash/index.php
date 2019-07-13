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

  	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
<div class="jumbotron text-center">
  <h1>Lat Crud</h1>
</div>
  
<div class="container">
<br/>
<!-- <a href="v_add_mahasiswa.php">Tambah Mahasiswa</a> -->
<a href="v_add_mahasiswa.php" class="btn btn-success" role="button">Tambah Mahasiswa</a><br/><br/>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
		<tr>
			<th>Id Mahasiswa(NIM)</th>
			<th>Nama Mahasiswa</th>
			<th width="200">Jurusan</th>
			<th>Jenis Kelamin</th>
			<th>Aksi</th>
		</tr>
		</thead>
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
<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</html>