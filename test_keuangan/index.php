<!DOCTYPE html>
<html>
<head>
	<title>test keuangan</title>
	<meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
  <?php include 'asset/css.php' ; ?>
  <link rel="stylesheet" type="text/css" href="asset/button_bulat.css">
 </head>
<body>

<div class="container">
	<h2>Keuangan</h2>
	<hr>
	<a href="view_tambah_saldo.php?id_saldo=1" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus"></span> Saldo</a>
	<div class="alert alert-success">
	<?php
		include 'config/koneksi.php';
		$data = mysqli_query($koneksi, "select * from saldo where id_saldo = 1 ");
		//apa bila data kosong 
		if (mysqli_num_rows($data) == 0) {
			//jika data kosong akan menampilkan
			echo '<p class="bg-danger text-white">Saldo Belum ada.</p>';
		}else{
		
		while ($d = mysqli_fetch_array($data)) {
	?>
		<center>
		<button class="button button5">
			<strong>Saldo Saat ini</strong><br/> Rp <?= number_format($d['saldo'], 2); ?>
		</button>
		</center>
    <?php }} ?>

 	</div>
</div>

</body>
</html>