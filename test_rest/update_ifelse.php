<?php
	
	include 'config/koneksi.php';

	@$id_mahasiswa = 10;
	@$nama_mahasiswa = x;
	@$jurusan_mahasiswa = sia;
	@$alamat_mahasiswa = bitung;

	$data = "UPDATE mahasiswa SET nama_mahasiswa='$nama_mahasiswa',jurusan_mahasiswa='$jurusan_mahasiswa',alamat_mahasiswa='$alamat_mahasiswa' WHERE id_mahasiswa='$id_mahasiswa' ";

	if (mysqli_query($koneksi, $data)) {
		echo "Berhasil";
	}
	else{
		echo "Gagal";
	}
	
	mysqli_close($koneksi);
?>