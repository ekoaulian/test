<?php 

	$nilai = 90;

	if ($nilai >= 80) {
		echo "Nilai Anda A";
	} elseif ($nilai >= 70) {
		echo "Nilai Anda B";
	} elseif ($nilai >= 50) {
		echo "Nilai Anda C";
	} elseif ($nilai >= 40) {
		echo "Nilai Anda D";
	} else {
		echo "Nilai Anda E";
	}
?>