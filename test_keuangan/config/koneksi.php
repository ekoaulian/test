<?php
//variable koneksi = (host, username, pasword, nama database)
$koneksi = mysqli_connect("localhost","root","","keuangan");
//cek koneksi
if (mysqli_connect_errno()) {
	echo "koneksi database gagal " . mysqli_connect_error();
}
?>