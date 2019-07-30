<?php 

// nama host, Username, password dan nama database
$koneksi = mysqli_connect("localhost","root","","mhs_crud_nom2");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>