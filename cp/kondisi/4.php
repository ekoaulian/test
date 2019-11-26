<?php 

$nilai_tes	= 55;
$wawancara	= 'B';

	if ($nilai_tes >= 70) {
		echo "Anda lulus ";
		if ($wawancara == 'A') {
			echo "Predikat Anda sangat memuaskan";
		} elseif ($wawancara == 'B') {
			echo "Predikat Anda memuaskan";
		} else {
			echo "Predikat Anda Cukup";
		}
	} else {
		echo "Anda belum lulus";
	}

 ?>