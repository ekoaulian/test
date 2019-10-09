<?php 
$bulan	= [
	"Januari",
	"Februari",
	"Maret",
	"April",
	"Mei",
	"Juni"
	];

$hari	= [
	"Senin",
	"Selasa",
	"Rabu",
	"Kamis",
	"Jumat",
	"Sabtu"
	];

$mahasiswa	= [
	"Eko aulian saputra",
	"2016804305",
	"Sistem Informasi",
	"ekoaulian88@gmail.com"
	];

$murid	= [
	["Eko aulian saputra",
	"2016804305",
	"Sistem Informasi",
	"ekoaulian88@gmail.com"],
	["Agus Cahyadi",
	"2016804213",
	"Sistem Informasi",
	"agus@gmail.com"]
	];

var_dump($hari);
echo "<br/>";
print_r($bulan);
echo "<br/> <hr>";

echo $bulan[1]; // menampilkan index 1 yaitu februaari
echo "<br>";
echo $hari[0]; // menampilkan index 0 yaitu senin
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<?php foreach( $mahasiswa as $m) : ?>
			<li> <?= $m; ?> </li>
		<?php endforeach; ?>
	</ul>
	<br>
	<?php foreach( $murid as $mrd) : ?>
	<ul>
		<li> <?= $mrd[0]; ?> </li>
		<li> <?= $mrd[1]; ?> </li>
		<li> <?= $mrd[2]; ?> </li>
		<li> <?= $mrd[3]; ?> </li>
	</ul>
	<?php endforeach ?>
</body>
</html>