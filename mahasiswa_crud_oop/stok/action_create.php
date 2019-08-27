<?php
	require_once('../config/database.php');
	$nama_barang = $_POST['nama_barang'];
	$stok = $_POST['stok'];

	$create = $db -> create ('stok', [
		'nama_barang' => $nama_barang,
		'stok' => $stok
		]);

	if ($create) {
		echo "Berhasil";
	}
	else {
		echo "Gagal";
	}
?>