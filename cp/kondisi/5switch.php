<?php 

	$nilai = 'A';

	// if ($nilai == 'A') {
	// 	echo "nilai Anda Sangat Memuaskan";
	// } elseif ($nilai == 'B') {
	// 	echo "nilai Anda Memuaskan";
	// } elseif ($nilai == 'C') {
	// 	echo "nilai Anda Cukup";
	// } elseif ($nilai == 'D') {
	// 	echo "nilai Anda Kurang";
	// } elseif ($nilai == 'E') {
	// 	echo "Maaf Anda Belum Lulus";
	// } else {
	// 	echo "Nilai Anda tidak terdaftar";
	// }

	//persamaan if jika ==
	switch ($nilai) {
		case 'A':
			echo "nilai Anda Sangat Memuaskan";
			break;
		case 'B':
			echo "nilai Anda Memuaskan";
			break;
		case 'C':
			echo "nilai Anda Cukup";
			break;
		case 'D':
			echo "nilai Anda Kurang";
			break;
		case 'E':
			echo "Maaf Anda Belum Lulus";
			break;
		
		default:
			echo "nilai Anda Tidak terdaftar";
			break;
	}
 ?>