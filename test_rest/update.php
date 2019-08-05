<?php
	
	include 'config/koneksi.php';

	@$id_mahasiswa = 10;
	@$nama_mahasiswa = rinjas;
	@$jurusan_mahasiswa = sia;
	@$alamat_mahasiswa = bitung;

	$data = "UPDATE mahasiswa SET nama_mahasiswa='$nama_mahasiswa',jurusan_mahasiswa='$jurusan_mahasiswa',alamat_mahasiswa='$alamat_mahasiswa' WHERE id_mahasiswa='$id_mahasiswa' ";

	mysqli_query($koneksi, $data);

	mysqli_close($koneksi);
?>