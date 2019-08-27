<!DOCTYPE html>
<html>
<head>
	<title>tambah stok</title>
</head>
<body>

<h2>tambah stok</h2>
	<?php
	    require_once('../config/database.php');
	    $id_stok = $_GET['id_stok'];

	    foreach($db->get('stok') as $data)
	    {
    ?>

	<form action="action_tambah_stok.php" method="post">
		Nama barang <br/>
		<input type="text" name="nama_barang" value="<?= $data['nama_barang']?>"><br/>
		Stok<br/>
		<input type="text" name="tambah_stok" value="<?= $data['stok']?>"><br/>
		tambah ?<br/>
		<input type="text" name="stok_ditambah" value=""><br/>
		<button type="submit">Save</button>
	</form>

	<?php } ?>

</body>
</html>