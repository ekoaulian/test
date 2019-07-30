<!DOCTYPE html>
<html>

<body>

	Master Peralatan Listrik<br/>
    
    <a href="v_add_listrik.php">Tambah</a><br/><br/>
        <table border="2">
			<thead>
			<th>Id Peralatan Listrik</th>
			<th>Name Peralatan Listrik</th>
			<th>Aksi</th>
			</thead>
			<tbody>

				<?php 
					include '../config/koneksi.php';
					// $no = 1;
					$data = mysqli_query($koneksi,"select * from listrik where is_active = 1");
					while($d = mysqli_fetch_array($data)){
				?>
			<tr>
				<!-- <td><?php echo $no++; ?></td> -->
				<td><?php echo $d['listrik_id']; ?></td>
				<td><?php echo $d['listrik_name']; ?></td>
				<td>
					<a href="v_edit_listrik.php?listrik_id=<?php echo $d['listrik_id']; ?>" >Edit</a> ||
					<a href="action_delete_listrik.php?listrik_id=<?php echo $d['listrik_id']; ?>"> Hapus</a>
	            </td>
			</tr>
				<?php 
				}
				?>

			</tbody>
		</table>
</body>

</html>
