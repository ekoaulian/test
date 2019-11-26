<?php

//variable koneksi = (host, username, pasword, nama database)
$koneksi = mysqli_connect("localhost","root","","test_crud_mhs2");

//cek koneksi
if (mysqli_connect_errno()) {
	echo "koneksi database gagal " . mysqli_connect_error();
}

//cara 2
// if (!$koneksi)
// 	exit('Gagal koneksi databese');
?>