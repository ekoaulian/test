<?php 

$kelas_d = [
	'abu','agus','budi','eko','erin',
	'ian','lina','rohman','serlina','taufik',
	'tutuk','weny'
];

foreach ($kelas_d as $key => $nama) {
	echo "Nama : $nama <br>";
	if ($nama == 'eko') {
		echo "Eko ada di indexs ke- $key <br>";
		break;
	}
}
?>