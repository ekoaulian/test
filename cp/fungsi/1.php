<?php 

function cetakPesan($nama = null) {
	if(empty($nama))
		echo "Selamat datang!";
	else
		echo "Selamat datang, $nama!";
}
cetakPesan();
?>