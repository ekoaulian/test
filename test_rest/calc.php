<?php
	
	include 'config/koneksi.php';

	@$id_calc = 1;

	@$angka1 = 2;
	@$angka2 = 3;

	@$angka = $angka1+$angka2;


	$data = "UPDATE calc SET angka='$angka' WHERE id_calc='$id_calc'";

	if (mysqli_query($koneksi, $data)){
		echo "Berhasil";
	}else{
		echo "Gagal";
	}

	mysqli_close($koneksi);
?>