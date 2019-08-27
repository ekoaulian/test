<!DOCTYPE html>
<html>
<head>
	<title>stok</title>
</head>
<body>

<h2>Lat oop stok</h2>
<hr>
<a href="v_create.php">create</a>
<br/>
<table border="2">
	<thead>
		<th>nama barang</th>
		<th>stok</th>
		<th>Aksi</th>
	</thead>
	<?php
	    require_once('../config/database.php');

	    foreach($db->get('stok') as $data)
	    {
    ?>
    	<tr>
    	<td><?= $data['nama_barang'] ?></td>
    	<td><?= $data['stok'] ?></td>
    	<td>
    		<a href="v_tambah_stok.php?id_stok=<?=$data['id_stok']?>">tambah stok</a> || 
    		<a href="action_delete.php?id_stok=<?=$data['id_stok']?>">delete</a>
    	</td>
    	</tr>
    <?php } ?>
</table>

</body>
</html>