<?php
	
	include 'config/koneksi.php';

	@$nama_mahasiswa = agus;
	@$jurusan_mahasiswa = Si;
	@$alamat_mahasiswa = Rajeg;

	$data = "INSERT INTO mahasiswa values('','$nama_mahasiswa','$jurusan_mahasiswa','$alamat_mahasiswa')";

	if (mysqli_query($koneksi, $data)){
		echo "Berhasil";
	}else{
		echo "Gagal";
	}

	mysqli_close($koneksi);
?>