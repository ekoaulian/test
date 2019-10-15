<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'configs/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();
$html = '
<html>
<head>
	<title>daftar mahasiswa</title>
	<style>
	tr:nth-child(even) {
		background-color: #ddd; 
	}
	</style>
</head>
<body>
	<h2>daftar mahasiswa</h2>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>id</th>
			<th>gambar</th>
			<th>npm</th>
			<th>nama</th>
			<th>e-mail</th>
			<th>jurusan</th>
		</tr>';
	$i = 1;
	foreach( $mahasiswa as $m ) :
$html .=
	'<tr>
	<td>' . $i++ . '</td>
	<td><img src="img/'.$m["gambar"] . '" width="50"></td>
	<td>' . $m["npm"] . ' </td>
	<td>' . $m["nama"] . ' </td>
	<td>' . $m["email"] . ' </td>
	<td>' . $m["jurusan"] . ' </td>
	</tr>'; 
	endforeach;	

// menghubungkan tag html
$html .=
	'</table>
</body>
</html>
';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-mahasiswa.pdf', 'I');

?>