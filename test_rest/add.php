<?php
	
	include 'config/koneksi.php';

	@$nama_mahasiswa = ab;
	@$jurusan_mahasiswa = sia;
	@$alamat_mahasiswa = bitung;

	$data = "INSERT INTO mahasiswa values('','$nama_mahasiswa','$jurusan_mahasiswa','$alamat_mahasiswa')";

	mysqli_query($koneksi, $data);

	mysqli_close($koneksi);
?>