<?php

//variable koneksi = (host, username, pasword, nama database)
$koneksi = mysqli_connect("localhost","root","","mhs_crud_img");

//cek koneksi
if (mysqli_connect_errno()) {
	echo "koneksi database gagal " . mysqli_connect_error();
}
?>