<?php 

$murid	= [
	["nama"		=> "Eko aulian saputra",
	"npm"		=> "2016804305",
	"jurusan"	=> "Sistem Informasi",
	"email"		=> "ekoaulian88@gmail.com"],
	["nama"		=> "Agus Cahyadi",
	"npm"		=> "2016804213",
	"jurusan"	=> "Sistem Informasi",
	"email"		=> "agus@gmail.com"]
	];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>daftar murid</h1>
<?php foreach( $murid as $m ) : ?>
	<li>
		<a href="get_latihan2.php?nama=<?= $m["nama"]; ?>&npm=<?= $m["npm"]; ?>&jurusan=<?= $m["jurusan"]; ?>&email=<?= $m["email"]; ?>"><?= $m["nama"]; ?></a>
	</li>
<?php endforeach ?>
</body>
</html>