<!DOCTYPE html>
<html>
<head>
	<title>oop</title>
</head>
<body>

<h2>Lat oop</h2>
<hr>
<a href="v_create.php">create</a>
<br/>
<table border="2">
	<thead>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Alamat</th>
		<th>Aksi</th>
	</thead>
	<?php
	    require_once('config/database.php');

	    foreach($db->get('mahasiswa') as $data)
	    {
    ?>
    	<tr>
    	<td><?= $data['nama_mahasiswa'] ?></td>
    	<td><?= $data['jurusan_mahasiswa'] ?></td>
    	<td><?= $data['alamat_mahasiswa'] ?></td>
    	<td>
    		<a href="v_edit.php?id_mahasiswa=<?= $data['id_mahasiswa'] ?>">edit</a> || 
    		<a href="action_delete.php?id_mahasiswa=<?= $data['id_mahasiswa'] ?>">delete</a>
    	</td>
    	</tr>
    <?php } ?>
</table>

</body>
</html>