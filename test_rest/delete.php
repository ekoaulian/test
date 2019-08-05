<?php
	
	include 'config/koneksi.php';

	@$id_mahasiswa = 9;

	$data = "DELETE FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa' ";

	if (mysqli_query($koneksi, $data)) {
		echo "Berhasil";
	}
	else{
		echo "Gagal";
	}
	
	mysqli_close($koneksi);
?>