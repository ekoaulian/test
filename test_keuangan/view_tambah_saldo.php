<!DOCTYPE html>
<html>
<head>
	<title>test keuangan</title>
	<meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
  <?php include 'asset/css.php' ; ?> 

 </head>
<body>

<div class="container">
	<h2>Tambah saldo</h2>
	<hr>
	<div class="panel panel-default">
            <div class="panel-heading">
            	<a href="index.php" class="btn btn-success" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
            <div class="panel-body">
            <?php
			include 'config/koneksi.php';
			$id_saldo = $_GET['id_saldo'];
			$data = mysqli_query($koneksi,"select * from saldo where id_saldo='$id_saldo'");
			while($d = mysqli_fetch_array($data)){
			?>
            <form method="post" action="action_tambah_saldo.php">
            	<input type="hidden" name="id_saldo" value="<?php echo $d['id_saldo']; ?>" >
                <div class="form-group">
                    <label for="saldo">Saldo:</label>
                    <input type="text" name="saldo" class="form-control" autocomplete="off" placeholder="Masukkan jumlah saldo" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                </div>
                
                <button type="submit" name="submit" class="btn btn-info">Simpan</button>
                <a class="btn btn-danger" href="index.php">Batal</a>
            </form>
            <?php } ?>
            </div>
        </div>


</div>
</body>
</html>