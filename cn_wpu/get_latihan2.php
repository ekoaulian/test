<?php 
	//cek empty = data kososng dari $_GET nama dll akan di redirect
if (empty($_GET["nama"]) ||
	empty($_GET["npm"]) ||
	empty($_GET["jurusan"]) ||
	empty($_GET["email"])
	) {
	//redirect ke link get_latihan1.php 
	header("Location: get_latihan1.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail mahasiswa</title>
</head>
<body>
<h2>Detail</h2>
<ul>
	<li><?= $_GET["nama"]; ?></li>
	<li><?= $_GET["npm"]; ?></li>
	<li><?= $_GET["jurusan"]; ?></li>
	<li><?= $_GET["email"]; ?></li>
</ul>
<a href="get_latihan1.php"> Back</a>
</body>
</html>